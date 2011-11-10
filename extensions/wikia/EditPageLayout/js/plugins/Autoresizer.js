(function(window,$){

	var WE = window.WikiaEditor = window.WikiaEditor || (new Observable);

	/**
	 * Automatically resizes editor area depenging on mode
	 * which is specified in config.autoResizeMode:
	 * - editarea - makes the editor fit into browser window
	 * - editpage - force editor minimum height
	 */
	WE.plugins.autoresizer = $.createClass(WE.plugin,{

		requires: ['sizechangedevent'],

		editarea: false,
		editbox: false,

		// contains any offset heights that will have an overall effect on the
		// height of the editbox element.
		editboxOffsetHeight: 0,
		mode: false,
		minPageHeight: 500,
		rightrail: false,
		widemode: false,

		beforeInit: function() {
			this.mode = this.editor.config.autoResizeMode;
			if (this.mode !== false) {
				this.editor.on('editboxReady',this.proxy(this.editboxReady));
				this.editor.on('mode',this.proxy(this.delayedResize));
				this.editor.on('toolbarsRendered',this.proxy(this.delayedResize));
				this.editor.on('sizeChanged',this.proxy(this.delayedResize));
				this.editor.on('mainpagewidemodeinit', this.proxy(function() {
					this.widemode = true;
				}));
			}

			this.editarea = $('#EditPageEditor');
		},

		initDom: function() {
			// keep right rail within browser's viewport (BugId:7498)
			if (this.widemode === false) {
				this.rightrail = this.editor.getSpace('rail');
			}

			if (this.enabled) {
				this.delayedResize();
			}
		},

		editboxReady: function(editor, editbox) {
			var node,
				footerHeight = $("#WikiaFooter").outerHeight(true) || 0,
				offsetHeight = 0,
				self = this;

			this.editbox = editbox;

			// if there's no footer, add a 10px bottom margin to space the editor away from browser window
			if (!footerHeight) {
				this.editarea.css("padding-bottom", 10);
			}

			// travel all the way up to the editor wrapper and remove any heights from margins/padding/borders
			this.editbox.parentsUntil("#EditPageEditorWrapper").each(function() {
				node = $(this);
				offsetHeight += (node.outerHeight(true) - node.height());
			});

			// The -1 is for editpage-editarea top border, which for some reason isn't be counted
			this.editboxOffsetHeight = (offsetHeight + footerHeight - 1);

			this.delayedResize();
		},

		delayedResize: function() {
			setTimeout(this.proxy(this.resize),10);
		},

		// get height needed to fit given node into browser's viewport height
		getHeightToFit: function(node) {
			var topOffset = node.offset().top,
				viewportHeight = $(window).height(),
				dimensions = {
					nodeHeight: parseInt(viewportHeight - topOffset - this.editboxOffsetHeight),
					viewportHeight: viewportHeight
				};

			return dimensions;
		},

		resize: function() {
			switch(this.mode) {
				// resize editor area
				case 'editarea':
					if (this.editbox && this.getHeightToFit(this.editbox).viewportHeight > this.minPageHeight) {
						this.editbox.height(this.getHeightToFit(this.editbox).nodeHeight);
					}
					break;

				// resize whole page (edit conflicts)
				case 'editpage':
					this.editarea.css('minHeight', this.getHeightToFit(this.editarea).nodeHeight);
					break;
			}

			// set height of right rail (BugId:7498)
			if (this.rightrail) {
				this.rightrail.height(this.getHeightToFit(this.rightrail).nodeHeight);
			}
		}
	});

})(this,jQuery);
