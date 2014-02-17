define( 'thumbnails.views.titleThumbnail', [
	'thumbnails.templates.mustache',
	'wikia.mustache'
], function( templates, Mustache ) {
	'use strict';

	function TitleView( options ) {
		this.model = options.model;
		this.el = document.createElement( options.el || 'div' );
	}

	TitleView.prototype.render = function() {
		this.el.className += ' title-thumbnail';
		this.el.innerHTML = Mustache.render( templates.titleThumbnail, this.model );
		this.$el = $( this.el );
		return this;
	};

	return TitleView;
} );
