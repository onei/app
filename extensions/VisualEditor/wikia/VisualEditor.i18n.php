<?php
$messages = array();

/** English
 * @author Christian Williams
 */
$messages['en'] = array(
	'wikia-visualeditor-preference-enable' => 'Enable beta VisualEditor',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Media',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Map',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Create a map',
	'wikia-visualeditor-dialog-wikiamapinsert-headline' => 'Select an existing map or create a map to insert it. <a href="$1" target="_blank">Learn more.</a>',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => 'There are no maps created yet',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-text' => 'Collaborate with community by visually pinning locations of interest on maps. <a href="$1" target="_blank">Learn more.</a>',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Add Media',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Title',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'License',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Remove this item',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Drop images to upload',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Upload',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Oops! That image is too big. $1MB is as much as we can take, captain!',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Oops! We only support $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Error uploading file',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Search for something, or enter a URL',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Preview coming soon!',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => 'Please adhere to {{SITENAME}}\'s image policy and Wikia\'s [http://www.wikia.com/Terms_of_Use terms of use] when embedding new videos and uploading new photos.',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Read more',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Drop your file here',
	'wikia-visualeditor-help-label' => 'Known issues',
	'wikia-visualeditor-help-link' => 'Help:VisualEditor',
	'wikia-visualeditor-beta-warning' => 'This is Wikia\'s beta integration of the VisualEditor. There are some rough edges, but we hope you love it!',
	'wikia-visualeditor-wikitext-warning' => 'You are using the beta VisualEditor - wikitext does not work here. Select \'Source mode\' from the \'More\' menu to use wikitext.',
	'wikia-visualeditor-aliennode-tooltip' => 'Sorry, this element can only be edited in the Classic Editor for now.',
	'wikia-visualeditor-dialog-transclusion-title' => 'Edit',
	'wikia-visualeditor-dialog-transclusion-filter' => 'Search for a particular field or value',
	'wikia-visualeditor-dialog-transclusion-zerostate' => 'This template does not have fields to edit. Make changes to the template on its page.',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Template',
	'wikia-visualeditor-savedialog-label-save' => 'Publish',
	'wikia-visualeditor-savedialog-label-restore' => 'Restore page',
	'wikia-visualeditor-toolbar-savedialog' => 'Publish',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Source Editor',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Source Editor',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Apply changes',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitext',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Formatting help',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'You must be logged in to add images and videos.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'This wiki only allows licensed content from <a href="http://video.wikia.com" target="_blank">Wikia Video Library</a> to be added. Please go to <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> to search for videos.',
	'wikia-visualeditor-notification-media-query-failed' => 'Sorry, we couldn\'t find a supported image or video at that URL.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Permission denied',
	'wikia-visualeditor-notification-video-preview-not-available' => 'Sorry, this video is not available for preview.',
	'wikia-visualeditor-loading' => 'Loading the VisualEditor...',
	'wikia-visualeditor-dialog-orientation-headline' => 'Welcome',
	'wikia-visualeditor-dialog-orientation-text' => 'This page is created, edited and maintained by people just like yourself. Make your first contribution today.',
	'wikia-visualeditor-dialog-orientation-start-button' => 'Start editing',
	'wikia-visualeditor-dialog-meta-languages-readonlynote' => 'This is a list of pages in other languages that are linked to this one. For now, it can only be edited in source mode.',
	'wikia-visualeditor-dialog-transclusion-no-template-description' => 'You are editing the "$1" template.',
	'wikia-visualeditor-dialog-map-insert-title' => 'Insert map',
	'wikia-visualeditor-save-error-generic' => 'Error saving data to server.',
	'wikia-visualeditor-dialogbutton-wikiasourcemode' => 'Source',
	'wikia-visualeditor-dialog-done-button' => 'Done',
	'wikia-visualeditor-dialog-cancel-button' => 'Cancel',
	'wikia-visualeditor-dialog-transclusion-get-info' => 'Get info about the "$1" template',
	'wikia-visualeditor-dialog-transclusion-preview-button' => 'Update preview',
	'wikia-visualeditor-context-transclusion-description' => 'Edit',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => 'Search for a template by name or article',
	'wikia-visualeditor-wikiatemplateoptionwidget-appears' => 'Appears {{FORMATNUM:$1}} {{PLURAL:$1|time|times}}',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'Be the first to use this',
	'wikia-visualeditor-dialog-template-insert-title' => 'Insert template',
	'wikia-visualeditor-dialog-preference-headline' => 'Greetings, Superfan!',
	'wikia-visualeditor-dialog-preference-text' => 'Our editor just got upgraded, offering enhanced tools to help you create richer articles.',
	'wikia-visualeditor-dialog-preference-link-help' => 'Read about new features',
	'wikia-visualeditor-dialog-preference-link-preferences' => 'Manage your editor preferences',
	'wikia-visualeditor-dialog-preference-start-button' => 'Got it!',
	'wikia-visualeditor-dialogbutton-wikiasinglemedia-tooltip' => 'Gallery',
	'wikia-visualeditor-dialog-wikiasinglemedia-title' => 'Insert Gallery',
	'wikia-visualeditor-dialog-wikiasinglemedia-search' => 'Search for images',
	'wikia-visualeditor-wikiamediaoptionwidget-preview-photo' => 'View',
	'wikia-visualeditor-wikiamediaoptionwidget-preview-video' => 'Watch',
	'wikia-visualeditor-media-photo-policy' => 'Please adhere to this wikia\'s image policy when uploading new photos.',
	'wikia-visualeditor-media-video-policy' => 'Please adhere to this wiki\'s video policy when adding new videos.',
);

/** Message documentation (Message documentation)
 * @author Liuxinyu970226
 * @author Robby
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'wikia-visualeditor-preference-enable' => 'The description next to the checkbox to enable or disable VisualEditor in Preferences',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Call-to-action text rendered in the toolbar button for opening the dialog to add media items to the article.
{{Identical|Media}}',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Call-to-action text rendered in the toolbar button for opening the dialog to add map item to the article.
{{Identical|Map}}',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'The button text in the Insert Map dialog to open Special:Maps in new window.',
	'wikia-visualeditor-dialog-wikiamapinsert-headline' => 'Header greeting in Insert Map dialog',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => 'Header greeting in Insert Map dialog when there are no maps created yet.',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-text' => 'Text greeting in Insert Map dialog when there are no maps created yet.',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Call-to-action text rendered in the dialog to insert the selected media items into the article.
{{Identical|Add media}}',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Label text for the media item title.
{{Identical|Title}}',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Label text for the media license dropdown.
{{Identical|License}}',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'The button text on media item detail pages for removing an item from the list of items to insert.',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'The large call-to-action in the Insert Media dialog upload box',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'The button text in the Insert Media dialog to choose media to upload.
{{Identical|Upload}}',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Error message for files that are too big for Add Media Tool upload. Value in megabytes.',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Error message for wrong file type in Add Media Tool upload',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Message that is shown when an upload error occurs',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'The placeholder text that appears in the search field, indicating functionality',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Alert pop-up when user clicks on a video or image to preview.',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => "The wiki's policies with regard to media",
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'A link that will show the full media policy.
{{Identical|Read more}}',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Callout that shows the droppable area for user drag and drop files',
	'wikia-visualeditor-help-label' => 'Display text for the link to the user guide.
{{Identical|Known issue}}',
	'wikia-visualeditor-help-link' => 'Link to the user guide for how to use VisualEditor',
	'wikia-visualeditor-beta-warning' => "Note shown when user clicks on 'beta' label in VisualEditor, warning users that the software may have issues.",
	'wikia-visualeditor-wikitext-warning' => 'Contents of notification displayed when Wikitext has been detected.',
	'wikia-visualeditor-aliennode-tooltip' => 'Tooltip for items that VisualEditor cannot edit',
	'wikia-visualeditor-dialog-transclusion-title' => 'Title of the transclusion dialog.
{{Identical|Edit}}',
	'wikia-visualeditor-dialog-transclusion-filter' => 'Placeholder text that appears in the transclusion dialog filter field',
	'wikia-visualeditor-dialog-transclusion-zerostate' => 'Text that appears in the transclusion dialog when the template takes no parameters',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Tooltip for the transclusion tool button.
{{Identical|Template}}',
	'wikia-visualeditor-savedialog-label-save' => 'Label text for save button when the user is editing a current revision of an extant page.
{{Identical|Publish}}',
	'wikia-visualeditor-savedialog-label-restore' => 'Label text for save button when the user is editing a previous revision.
{{Identical|Restore page}}',
	'wikia-visualeditor-toolbar-savedialog' => 'Label text for button to open save dialog.
{{Identical|Publish}}',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Call-to-action text rendered in the toolbar button for opening the dialog to edit wikitext in source mode.
{{Identical|Source editor}}',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'The text that will appear in the header of the source editor dialog.
{{Identical|Source editor}}',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Button text for applying changes made in source mode.
{{Identical|Apply change}}',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Link to the user guide for how to use Wikitext',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Text for the link to the user guide for how to use Wikitext',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'This error message is shown to users that try to upload an image or video when they are not logged in.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => "This error message is shown to users if they try to add a video to a wiki that didn't come from the Wikia Video Library",
	'wikia-visualeditor-notification-media-query-failed' => 'This is a generic error message when something about adding an image or video fails.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Error message displayed when user is not allowed to add an image or video.
{{Identical|Permission denied}}',
	'wikia-visualeditor-loading' => 'The message displayed next to the loading indicator while the editor is loading.',
	'wikia-visualeditor-dialog-orientation-headline' => 'Header greeting to new users opening VisualEditor.',
	'wikia-visualeditor-dialog-orientation-text' => 'Text under greeting enticing users to edit with VisualEditor.',
	'wikia-visualeditor-dialog-orientation-start-button' => 'Button that closes greeting dialog and shows VisualEditor.',
	'wikia-visualeditor-dialog-map-insert-title' => 'Map insert dialog title text.\\n{{Identical|Insert media}}',
	'wikia-visualeditor-save-error-generic' => 'Generic error message for parse failures',
	'wikia-visualeditor-dialogbutton-wikiasourcemode' => 'Call-to-action text rendered in the toolbar button for opening the dialog to edit wikitext in source mode.
{{Identical|Source editor}}',
	'wikia-visualeditor-dialog-done-button' => 'Button text for applying changes in a dialog.',
	'wikia-visualeditor-dialog-cancel-button' => 'Button text for abandoning changes in a dialog.',
	'wikia-visualeditor-dialog-transclusion-get-info' => 'Call to action to get information about the currently-displayed template.',
	'wikia-visualeditor-dialog-transclusion-preview-button' => 'Button text for updating the preview of template edits.',
	'wikia-visualeditor-context-transclusion-description' => 'Description text in context menu for transclusion node.',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => 'Placeholder text that appears in the template insert dialog search field',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'If a template is not used on any pages, this message appears',
	'wikia-visualeditor-dialog-template-insert-title' => '{{Identical|Insert template}}',
	'wikia-visualeditor-dialog-preference-headline' => 'Dialog title greeting the contributor',
	'wikia-visualeditor-dialog-preference-text' => 'Body copy of the dialog, explaining why their user preference has been changed and some ambiguous good words about the new editor',
	'wikia-visualeditor-dialog-preference-link-help' => 'Link text to help page',
	'wikia-visualeditor-dialog-preference-link-preferences' => 'Link text to user preference page',
	'wikia-visualeditor-dialog-preference-start-button' => 'Button copy that closes the dialog',
	'wikia-visualeditor-dialogbutton-wikiasinglemedia-tooltip' => 'Tooltip of the single media dialog tool (currently posing as a Gallery-only tool',
	'wikia-visualeditor-dialog-wikiasinglemedia-title' => 'Title of the single media dialog (currently posing as a Gallery-only tool',
	'wikia-visualeditor-dialog-wikiasinglemedia-search' => 'Placeholder text of the single media dialog search field',
	'wikia-visualeditor-wikiamediaoptionwidget-preview-photo' => 'The text that prompts a user to preview a photo',
	'wikia-visualeditor-wikiamediaoptionwidget-preview-video' => 'The text that prompts a user to preview a video',
);

/** Tunisian Spoken Arabic ( زَوُن)
 * @author Aħmedbaɛl
 */
$messages['aeb'] = array(
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Media',
);

/** Arabic (العربية)
 * @author Achraf94
 * @author Claw eg
 * @author Gagnabil
 * @author Kuwaity26
 */
$messages['ar'] = array(
	'wikia-visualeditor-preference-enable' => 'تفعيل المحرر المرئي التجريبي',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'وسائط',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'إضافة وسائط',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'عنوان',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'ترخيص',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'إزالة هذا العنصر',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'ألق صوراً للتحميل',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'رفع',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'عفوًا! تلك الصورة كبيرة جدًا. $1 ميغا بايت هو الحد الأقصى للصور أيها المحرر!',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'عفوًا! نحن ندعم $1 فقط',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'خطأ في رفع الملف',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'ابحث عن أي شيء، أو أدخل عنوان URL',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'المعاينة قريبًا!',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'اقرأ المزيد',
	'wikia-visualeditor-dialog-drop-target-callout' => 'ألق ملفّك هنا',
	'wikia-visualeditor-help-label' => 'مشكلات معروفة',
	'wikia-visualeditor-help-link' => 'Help:VisualEditor',
	'wikia-visualeditor-beta-warning' => 'هذا هو تكامل محرر ويكيا المرئي التجريبي. توجد بعد الحواف الخشنة، ولكننا نأمل أن تعجبك!',
	'wikia-visualeditor-wikitext-warning' => 'أنت تستخدم المحرر المرئي التجريبي - نص ويكي لا يعمل هنا. اختر "وضع المصدر" من قائمة "المزيد" لاستخدام نص ويكي.',
	'wikia-visualeditor-aliennode-tooltip' => 'عذرًا، هذا العنصر يمكن تحريره فقط في المحرر التقليدي حاليًا.',
	'wikia-visualeditor-dialog-transclusion-title' => 'قالب',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'قالب',
	'wikia-visualeditor-savedialog-label-save' => 'نشر',
	'wikia-visualeditor-savedialog-label-restore' => 'استعد الصفحة',
	'wikia-visualeditor-toolbar-savedialog' => 'نشر',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'محرر المصدر',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'محرر المصدر',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'طبق التعديلات',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitext',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'مساعدة بالتنسيق',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'يجب أن تسجل دخولك لإضافة الصور وملفات الفيديو.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'هذه الويكي تسمح فقط بمحتوى مرخص من <a href="http://video.wikia.com" target="_blank">مكتبة مقاطع ويكيا المصورة</a> للإضاف. رجاءً اتجه إلى <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> للبحث عن مقاطع مصورة.',
	'wikia-visualeditor-notification-media-query-failed' => 'عذرًا، لم نتمكن من إيجاد صورة مدعومة أو فيديو مدعوم في عنوان URL ذاك.',
	'wikia-visualeditor-notification-media-permission-denied' => 'الإذن مرفوض.',
	'wikia-visualeditor-notification-video-preview-not-available' => 'عذراً، لا يتوفر هذا الفيديو للمعاينة.',
	'wikia-visualeditor-loading' => 'يتم تحميل المعدل المرئي.',
);

/** Avaric (авар)
 * @author Gazimagomedov
 */
$messages['av'] = array(
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Карта',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Карта гьабизе',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'wikia-visualeditor-dialog-transclusion-title' => 'Şablon',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Şablon',
);

/** South Azerbaijani (تورکجه)
 * @author Arjanizary
 */
$messages['azb'] = array(
	'wikia-visualeditor-dialog-transclusion-title' => 'دَییشدیر',
);

/** Bambara (bamanankan)
 * @author Amadouyoro.thiam
 */
$messages['bm'] = array(
	'wikia-visualeditor-dialog-orientation-headline' => 'Bisimila',
);

/** Bengali (বাংলা)
 * @author Aftab1995
 */
$messages['bn'] = array(
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'মিডিয়া',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Y-M D
 */
$messages['br'] = array(
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Ouzhpennañ ur media', # Fuzzy
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Kartenn',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Krouiñ ur gartenn',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Ouzhpennañ ur media',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Titl',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Aotre-implijout',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Lemel an elfenn-mañ',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => "Ouzhpennañ skeudennoù nevez d'ar wikia-mañ", # Fuzzy
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Enporzhiañ',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'fazi o kargañ ar restr',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Klask un dra bennak, pe ebarzhiñ un URL',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => "Lenn muioc'h",
	'wikia-visualeditor-dialog-drop-target-callout' => 'Laoskit ho restr amañ',
	'wikia-visualeditor-help-label' => 'Kudennoù anavezet',
	'wikia-visualeditor-dialog-transclusion-title' => 'Patrom',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Patrom',
	'wikia-visualeditor-savedialog-label-save' => 'Embann',
	'wikia-visualeditor-savedialog-label-restore' => 'Assevel ar bajenn',
	'wikia-visualeditor-toolbar-savedialog' => 'Embann',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Aozer tarzh',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Aozer tarzh',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => "Arloañ ar c'hemmoù",
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Furmadiñ ar skoazell',
	'wikia-visualeditor-notification-media-must-be-logged-in' => "Ret eo deoc'h bezañ kevreet evit ouzhpennañ skeudennoù ha videoioù.",
	'wikia-visualeditor-notification-media-permission-denied' => "Aotre nac'het",
	'wikia-visualeditor-dialog-done-button' => 'Graet',
	'wikia-visualeditor-context-transclusion-description' => 'Kemmañ',
	'wikia-visualeditor-dialog-template-insert-title' => "Ensoc'hañ ar patrom",
);

/** Catalan (català)
 * @author Alvaro Vidal-Abarca
 * @author Fitoschido
 */
$messages['ca'] = array(
	'wikia-visualeditor-preference-enable' => 'Activa Editor Visual beta',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Afegeix arxius multimèdia', # Fuzzy
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Mapa',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Afegeix arxius multimèdia',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Afegeix noves imatges a aquesta wikia', # Fuzzy
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Carrega',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Error en carregar el fitxer',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Cerca alguna cosa, o introdueix una URL',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Vista prèvia aviat!',
	'wikia-visualeditor-help-label' => 'Problemes coneguts',
	'wikia-visualeditor-help-link' => 'Ajuda:Editor Visual', # Fuzzy
	'wikia-visualeditor-beta-warning' => "Aquesta és la integració beta de l'Editor Visual dins Wikia. Encara hi ha alguns problemes, però esperem que us agradi!",
	'wikia-visualeditor-wikitext-warning' => "Esteu utilitzant l'Editor Visual beta - el wikitext no funciona aquí. Seleccioneu 'Codi font' dins el menú 'Més' per emprar el wikitext.",
	'wikia-visualeditor-aliennode-tooltip' => "Ho sentim, aquest element només pot ser editat de moment en l'Editor Clàssic.",
	'wikia-visualeditor-dialog-transclusion-title' => 'Plantilla',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Plantilla',
	'wikia-visualeditor-savedialog-label-save' => 'Publica',
	'wikia-visualeditor-savedialog-label-restore' => 'Restaureu la pàgina',
	'wikia-visualeditor-toolbar-savedialog' => 'Publica',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Editor de codi font',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Editor de codi font',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Desa els canvis',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Ajuda:Wikitext', # Fuzzy
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Ajuda de format',
	'wikia-visualeditor-save-error-generic' => 'S’ha produït un error en desar les dades en el servidor.',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Мультимедиа',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Карта',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Чуяккха',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Ма-дарра',
	'wikia-visualeditor-loading' => 'Визуальни тадар еллар…',
	'wikia-visualeditor-dialog-orientation-headline' => 'Марша догӀийла',
	'wikia-visualeditor-save-error-generic' => 'Хаамаш Ӏалашбеш гӀалат даьлла сервер чохь.',
);

/** Czech (čeština)
 * @author Darth Daron
 */
$messages['cs'] = array(
	'wikia-visualeditor-preference-enable' => 'Povolit beta verzi VisualEditoru',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Média',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Přidat média',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Název',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Licence',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Odstranit tuto položku',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Pro nahrání přetáhněte obrázky',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Nahrát',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Ups! Tento obrázek je příliš velký. Maximální možná velikost je $1 MB.',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Ale ne! Podporujeme pouze $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Chyba při odesílání souboru',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Hledat nebo zadat URL',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Náhled již brzy!',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => 'Při nahrávní nových obrázků a vkládání videí se prosím řiďte pravidly na {{SITENAME}} a [http://www.wikia.com/Terms_of_Use podmínkami použití na Wikia.com].',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Číst více',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Sem přetáhněte soubory',
	'wikia-visualeditor-help-label' => 'Známé problémy',
	'wikia-visualeditor-help-link' => 'Help:VisualEditor',
	'wikia-visualeditor-beta-warning' => 'Toto je beta integrace vizuálního editoru. Je možné narazit na problémy, ale doufáme, že si ho zamilujete.',
	'wikia-visualeditor-wikitext-warning' => 'Používáte beta verzi vizuálního editoru - wikitext zde nefunguje. Pro jeho použití vyberte zdrojový mód v menu „Více“.',
	'wikia-visualeditor-aliennode-tooltip' => 'Omlouváme se, ale tento prvek lze zatím editovat jen v klasickém editoru.',
	'wikia-visualeditor-dialog-transclusion-title' => 'Šablona',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Šablona',
	'wikia-visualeditor-savedialog-label-save' => 'Publikovat',
	'wikia-visualeditor-savedialog-label-restore' => 'Obnovit stránku',
	'wikia-visualeditor-toolbar-savedialog' => 'Publikovat',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Editor zdrojového kódu',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Editor zdrojového kódu',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Použít změny',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitext',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Pomoc s formátováním',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'Pro přidávání obrázků a videí se musíte přihlásit.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'Tato wiki dovoluje použít pouze licencovaný obsah z <a href="http://video.wikia.com" target="_blank">Wikia Video Library</a>. Přejděte na <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> a vyhledejte videa.',
	'wikia-visualeditor-notification-media-query-failed' => 'Omlouváme se, ale nepodařilo se nám najít podporovaný obrázek nebo video na této URL adrese.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Přístup zamítnut',
	'wikia-visualeditor-notification-video-preview-not-available' => 'Omlouváme se, náhled tohoto videa není dostupný.',
	'wikia-visualeditor-loading' => 'Načítání VisualEditoru...',
);

/** German (Deutsch)
 * @author Mauricekoller
 * @author Metalhead64
 * @author Se4598
 */
$messages['de'] = array(
	'wikia-visualeditor-preference-enable' => 'Den Beta-VisualEditor aktivieren',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Medium',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Karte',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Karte erstellen',
	'wikia-visualeditor-dialog-wikiamapinsert-headline' => 'Wähle eine bestehende Karten-Vorlage oder lade deine eigene Karte hoch!. <a href="$1" target="_blank">Erfahre mehr.</a>',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => 'Es wurden noch keine Karten erstellt',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-text' => 'Unterstütze deine Community, indem du interessante Orte zur Karte hinzufügst. <a href="$1" target="_blank">Erfahre mehr.</a>',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Medium hinzufügen',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Titel',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Lizenz',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Dieses Element entfernen',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Bilder zum Hochladen hierhin ziehen',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Hochladen',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Huch! Dieses Bild ist zu groß. Wir können höchstens $1 MB annehmen, Kapitän!',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Huch! Wir unterstützen nur $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Fehler beim Hochladen der Datei',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Suche nach etwas oder gib eine URL ein',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Die Vorschau kommt bald!',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => 'Bitte beachte die Bilderrichtlinie von {{SITENAME}} sowie beim Einbinden neuer Videos und Hochladen neuer Fotos Wikias [http://www.wikia.com/Terms_of_Use Nutzungsbedingungen].',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Mehr lesen',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Deine Datei hierher ziehen',
	'wikia-visualeditor-help-label' => 'Bekannte Probleme',
	'wikia-visualeditor-help-link' => 'Help:VisualEditor',
	'wikia-visualeditor-beta-warning' => 'Dies ist die Beta-Integration des VisualEditors. Es gibt einige Ecken und Kanten, aber wir hoffen, dass du ihn liebst!',
	'wikia-visualeditor-wikitext-warning' => 'Du verwendest den Beta-VisualEditor. Wikitext funktioniert hier nicht. Wähle den „Quelltextmodus“ aus dem Menü „Mehr“ aus, um Wikitext zu verwenden.',
	'wikia-visualeditor-aliennode-tooltip' => 'Leider kann dieses Element derzeit nur im klassischen Editor bearbeitet werden.',
	'wikia-visualeditor-dialog-transclusion-title' => 'Bearbeiten',
	'wikia-visualeditor-dialog-transclusion-filter' => 'Suche nach einem bestimmten Feld oder Ergebnis',
	'wikia-visualeditor-dialog-transclusion-zerostate' => 'Diese Vorlage hat keine bearbeitbare Felder. Führe Änderungen an der Vorlage auf ihrer Seite durch.',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Vorlage',
	'wikia-visualeditor-savedialog-label-save' => 'Veröffentlichen',
	'wikia-visualeditor-savedialog-label-restore' => 'Seite wiederherstellen',
	'wikia-visualeditor-toolbar-savedialog' => 'Veröffentlichen',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Quelltext-Editor',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Quelltext-Editor',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Änderungen anwenden',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitext',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Formatierungshilfe',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'Du musst angemeldet sein, um Bilder und Videos hinzuzufügen.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'Dieses Wiki erlaubt nur lizenzierten Inhalt, der von der <a href="http://video.wikia.com" target="_blank">Wikia-Video-Bibliothek</a> hinzugefügt wird. Bitte gehe auf <a href="http://video.wikia.com" target="_blank">video.wikia.com</a>, um nach Videos zu suchen.',
	'wikia-visualeditor-notification-media-query-failed' => 'Leider konnten wir kein unterstütztes Bild oder Video unter dieser URL finden.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Zugriff verweigert',
	'wikia-visualeditor-notification-video-preview-not-available' => 'Für dieses Video gibt es leider keine Vorschau.',
	'wikia-visualeditor-loading' => 'Der VisualEditor wird geladen …',
	'wikia-visualeditor-dialog-orientation-headline' => 'Willkommen',
	'wikia-visualeditor-dialog-orientation-text' => 'Diese Seite wurde von Leuten wie Dir erstellt, bearbeitet und verwaltet. Mach heute gleich Deinen ersten Beitrag!',
	'wikia-visualeditor-dialog-orientation-start-button' => 'Bearbeitung beginnen',
	'wikia-visualeditor-dialog-meta-languages-readonlynote' => 'Dies ist eine Liste der Sprachen, in denen diese Seite verfügbar ist. Vorerst kann sie nur im Quelltext-Modus bearbeitet werden.',
	'wikia-visualeditor-dialog-transclusion-no-template-description' => 'Du bearbeitest die Vorlage „$1“.',
	'wikia-visualeditor-dialog-map-insert-title' => 'Karte einfügen',
	'wikia-visualeditor-save-error-generic' => 'Fehler beim Speichern der Daten auf den Server.',
	'wikia-visualeditor-dialogbutton-wikiasourcemode' => 'Quelle',
	'wikia-visualeditor-dialog-done-button' => 'Erledigt',
	'wikia-visualeditor-dialog-transclusion-get-info' => 'Informationen über die Vorlage "$1"',
	'wikia-visualeditor-dialog-transclusion-preview-button' => 'Vorschau aktualisieren',
	'wikia-visualeditor-context-transclusion-description' => 'Bearbeiten',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => 'Suche nach einer Vorlage mit Namen oder Artikel',
	'wikia-visualeditor-wikiatemplateoptionwidget-appears' => 'Erscheint {{PLURAL:$1|einmal|{{FORMATNUM:$1}} mal}}',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'Sei der Erste Benutzer der Vorlage',
	'wikia-visualeditor-dialog-template-insert-title' => 'Vorlage einfügen',
	'wikia-visualeditor-dialog-preference-headline' => 'Hallo Superfan!',
	'wikia-visualeditor-dialog-preference-text' => 'Unser Visual Editor wurde gerade aufgerüstet und hat jetzt verbesserte Funktionen, die es euch erlauben eindrucksvollere Artikel zu erstellen.',
	'wikia-visualeditor-dialog-preference-link-help' => 'Lies hier über die neuen Funktionen',
	'wikia-visualeditor-dialog-preference-link-preferences' => 'Verwalte deine Editor Einstellungen',
	'wikia-visualeditor-dialog-preference-start-button' => 'Okay!',
);

/** Zazaki (Zazaki)
 * @author Marmase
 * @author Mirzali
 */
$messages['diq'] = array(
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Medya dek',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Medya dek',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Sername',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Lisans',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Na etiketer wedarne',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Resima new dek na Wikia', # Fuzzy
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Bar ke',
	'wikia-visualeditor-help-link' => 'Help:VisualEditor',
	'wikia-visualeditor-dialog-transclusion-title' => 'Şablon',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Şablon',
	'wikia-visualeditor-savedialog-label-save' => 'Bıhesırne',
	'wikia-visualeditor-savedialog-label-restore' => 'Verêna perer',
	'wikia-visualeditor-toolbar-savedialog' => 'Bıhesırne',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Vıraştoğê Çımey',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Vıraştoğê Çımey',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitext',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Format kerdış desteg',
);

/** Greek (Ελληνικά)
 * @author Geraki
 * @author Glavkos
 */
$messages['el'] = array(
	'wikia-visualeditor-preference-enable' => 'Ενεργοποίηση beta VisualEditor',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Πολυμέσα',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Χάρτης',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Δημιουργήστε έναν χάρτη',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => 'Δεν έχουν δημιουργηθεί χάρτες ακόμα',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Προσθήκη Πολυμέσων',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Τίτλος',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Άδεια χρήσης',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Προσθήκη νέων εικόνων σε αυτό το wikia', # Fuzzy
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Ανέβασμα',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Ωχ! Αυτή η εικόνα είναι πολύ μεγάλη. $1MB είναι το μεγαλύτερο που μπορούμε, αρχηγέ!',
	'wikia-visualeditor-dialog-transclusion-title' => 'Πρότυπο',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Βοήθεια μορφοποίησης',
);

/** British English (British English)
 * @author Captaindogfish
 * @author Shirayuki
 */
$messages['en-gb'] = array(
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Licence',
	'wikia-visualeditor-dialog-transclusion-title' => 'Edit',
	'wikia-visualeditor-dialog-transclusion-zerostate' => 'This template does not have fields to edit. Make changes to the template on its page.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'This wiki only allows licenced content from <a href="http://video.wikia.com" target="_blank">Wikia Video Library</a> to be added. Please go to <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> to search for videos.',
	'wikia-visualeditor-dialog-transclusion-get-info' => 'Get info about the "$1" template',
	'wikia-visualeditor-context-transclusion-description' => 'Edit',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => 'Search for a template by name or article',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'Be the first to use this',
	'wikia-visualeditor-dialog-preference-text' => 'Our editor just got upgraded, offering enhanced tools to help you create richer articles.',
	'wikia-visualeditor-dialog-preference-link-help' => 'Read about new features',
	'wikia-visualeditor-dialog-preference-start-button' => 'Got it!',
);

/** Spanish (español)
 * @author Fitoschido
 * @author Ihojose
 * @author Macofe
 * @author VegaDark
 * @author Vivaelcelta
 * @author Wifidel
 */
$messages['es'] = array(
	'wikia-visualeditor-preference-enable' => 'Activar el editor visual (beta)',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Archivos multimedia',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Mapa',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Crear un mapa',
	'wikia-visualeditor-dialog-wikiamapinsert-headline' => 'Seleccionar un mapa existente o crear un mapa para insertarlo. <a href="$1" target="_blank">Aprende mas.</a>',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => 'No hay mapas creados hasta el momento',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-text' => 'Colabora con la comunidad colocando puntos de interés en el mapa. <a href="$1" target="_blank">Aprende mas.</a>',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Añadir archivo multimedia',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Título',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Licencia',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Quitar este elemento',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Añadir nuevas imágenes a esta comunidad',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Subir',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => '¡Uy! Esa imagen es demasiado grande. $1MB es lo máximo que podemos, capitán!',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => '¡Uy! Solo admitimos $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Error al subir el archivo',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Busca algo o escribe un URL',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => '¡Pronto estará disponible la previsualización!',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => 'Por favor respeta las políticas sobre imágenes de {{SITENAME}} y los [http://www.wikia.com/Terms_of_Use Términos de Uso] de Wikia cuando incorpores vídeos nuevos e imágenes nuevas.',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Leer más',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Arrastra tu archivo aqui',
	'wikia-visualeditor-help-label' => 'Problemas conocidos',
	'wikia-visualeditor-help-link' => 'Help:Editor visual',
	'wikia-visualeditor-beta-warning' => 'Esta es la integración en fase beta del Editor Visual. Quedan algunas cosas por pulir, ¡pero esperamos que te guste!',
	'wikia-visualeditor-wikitext-warning' => 'Estás usando el editor visual en beta. El código wiki no funciona aquí; para usarlo, cambia al «Modo código» en el menú «Más».',
	'wikia-visualeditor-aliennode-tooltip' => 'Por ahora solo se puede editar este elemento en el editor clásico.',
	'wikia-visualeditor-dialog-transclusion-title' => 'Editar',
	'wikia-visualeditor-dialog-transclusion-filter' => 'Buscar un valor o campo particular',
	'wikia-visualeditor-dialog-transclusion-zerostate' => 'Esta plantilla no tiene campos para editar. Realizar cambios a la plantilla en su página.',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Plantilla',
	'wikia-visualeditor-savedialog-label-save' => 'Publicar',
	'wikia-visualeditor-savedialog-label-restore' => 'Restaurar la página',
	'wikia-visualeditor-toolbar-savedialog' => 'Publicar',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Editor de código',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Editor de código',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Aplicar los cambios',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitexto',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Ayuda para el formato',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'Debes estar conectado para añadir imágenes y vídeos.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'Este wiki solo permite contenido con licencia de la <a href="http://video.wikia.com" target="_blank">Biblioteca de Videos de Wikia</a> para ser agregado. Por favor, ve a <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> para buscar videos.',
	'wikia-visualeditor-notification-media-query-failed' => 'Lo sentimos, no encontramos una imagen o video admitidos en esa URL.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Permiso denegado',
	'wikia-visualeditor-notification-video-preview-not-available' => 'Lo sentimos, este video no está disponible para su previsualización.',
	'wikia-visualeditor-loading' => 'Cargando el VisualEditor...',
	'wikia-visualeditor-dialog-orientation-headline' => 'Bienvenida',
	'wikia-visualeditor-dialog-orientation-text' => 'Esta página es creada, editada y mantenida por personas como tú. Haz tu primera contribución hoy.',
	'wikia-visualeditor-dialog-orientation-start-button' => 'Comenzar a editar',
	'wikia-visualeditor-dialog-meta-languages-readonlynote' => 'Esta es una lista de páginas en otros idiomas que estan enlazados a esta. Por ahora, solo puede ser editada en el modo fuente.',
	'wikia-visualeditor-dialog-transclusion-no-template-description' => 'Estas editando la plantilla "$1".',
	'wikia-visualeditor-dialog-map-insert-title' => 'Insertar mapa',
	'wikia-visualeditor-save-error-generic' => 'Error al guardar los datos en el servidor.',
	'wikia-visualeditor-dialogbutton-wikiasourcemode' => 'Fuente',
	'wikia-visualeditor-dialog-done-button' => 'Hecho',
	'wikia-visualeditor-dialog-transclusion-get-info' => 'Obtener información de la plantilla «$1»',
	'wikia-visualeditor-dialog-transclusion-preview-button' => 'Actualizar previsualización',
	'wikia-visualeditor-context-transclusion-description' => 'Editar',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => 'Buscar una plantilla por nombre o artículo',
	'wikia-visualeditor-wikiatemplateoptionwidget-appears' => 'Aparece {{FORMATNUM:$1}} {{PLURAL:$1|vez|veces}}',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'Sé el primero en utilizar esto',
	'wikia-visualeditor-dialog-template-insert-title' => 'Insertar plantilla',
	'wikia-visualeditor-dialog-preference-headline' => '¡Saludos!',
	'wikia-visualeditor-dialog-preference-text' => 'Nuestro editor acaba de ser actualizado, ofreciendo herramientas mejoradas para ayudar a la creación de artículos',
	'wikia-visualeditor-dialog-preference-link-help' => 'Lee acerca de las nueva funcionalidades',
	'wikia-visualeditor-dialog-preference-link-preferences' => 'Maneja las preferencias de su editor',
	'wikia-visualeditor-dialog-preference-start-button' => 'Entendido',
);

/** Persian (فارسی)
 * @author Alirezaaa
 * @author Reza1615
 */
$messages['fa'] = array(
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'رسانه',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'نقشه',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'عنوان',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'اجازه‌نامه',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'بارگذاری',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'بیشتر بخوانید',
	'wikia-visualeditor-dialog-transclusion-title' => 'الگو',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'الگو',
	'wikia-visualeditor-savedialog-label-save' => 'انتشار',
	'wikia-visualeditor-savedialog-label-restore' => 'برگرداندن صفحه',
	'wikia-visualeditor-toolbar-savedialog' => 'انتشار',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'اعمال تغییرات',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'قالب‌بندی راهنما',
	'wikia-visualeditor-notification-media-permission-denied' => 'اجازه داده نشد.',
	'wikia-visualeditor-dialog-orientation-headline' => 'خوش آمدید',
	'wikia-visualeditor-dialog-orientation-start-button' => 'ویرایش را آغاز کنید',
	'wikia-visualeditor-dialogbutton-wikiasourcemode' => 'منبع',
);

/** Finnish (suomi)
 * @author Nike
 * @author Stryn
 */
$messages['fi'] = array(
	'wikia-visualeditor-preference-enable' => 'Ota käyttöön Visuaalinen muokkain',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Lisää media', # Fuzzy
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Kartta',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Luo kartta',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Lisää media',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Otsikko',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Lisenssi',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Poista tämä kohde',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Lisää uusia kuvia tähän wikiaan', # Fuzzy
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Tallenna',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Virhe tallennettaessa tiedostoa',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Esikatselu tulossa pian!',
	'wikia-visualeditor-help-label' => 'Tunnetut ongelmat',
	'wikia-visualeditor-help-link' => 'Help:VisualEditor',
	'wikia-visualeditor-dialog-transclusion-title' => 'Muokkaa',
	'wikia-visualeditor-dialog-transclusion-filter' => 'Etsi kenttää tai arvoa',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Malline',
	'wikia-visualeditor-savedialog-label-save' => 'Julkaise',
	'wikia-visualeditor-savedialog-label-restore' => 'Palauta sivu',
	'wikia-visualeditor-toolbar-savedialog' => 'Julkaise',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Hyväksy muutokset',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitext',
	'wikia-visualeditor-dialog-meta-languages-readonlynote' => 'Tämä on lista tähän sivuun linkitetyistä muiden kielten sivuista. Toistaiseksi sitä voi muokata ainoastaan lähdekooditilassa.',
	'wikia-visualeditor-dialog-transclusion-no-template-description' => 'Olet muokkaamassa mallinetta "$1".',
	'wikia-visualeditor-dialog-map-insert-title' => 'Lisää kartta',
	'wikia-visualeditor-dialog-done-button' => 'Valmis',
	'wikia-visualeditor-dialog-transclusion-get-info' => 'Hae mallineen "$1" tiedot',
	'wikia-visualeditor-dialog-transclusion-preview-button' => 'Päivitä esikatselu',
	'wikia-visualeditor-context-transclusion-description' => 'Muokkaa',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => 'Etsi mallinetta nimen tai artikkelin mukaan',
	'wikia-visualeditor-wikiatemplateoptionwidget-appears' => 'Esiintyy $1 kertaa', # Fuzzy
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'Olen ensimmäinen, joka käyttää tätä',
	'wikia-visualeditor-dialog-template-insert-title' => 'Lisää malline',
	'wikia-visualeditor-dialog-preference-headline' => 'Tervehdys, superfani!',
	'wikia-visualeditor-dialog-preference-text' => 'Meidän muokkaintamme on juuri parannettu ja se tarjoaa nyt entistä parempia työkaluja artikkeleiden luomiseen.',
	'wikia-visualeditor-dialog-preference-link-help' => 'Lue uusista ominaisuuksista',
	'wikia-visualeditor-dialog-preference-link-preferences' => 'Hallinnoi muokkausasetuksiasi',
	'wikia-visualeditor-dialog-preference-start-button' => 'Selvä!',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'wikia-visualeditor-preference-enable' => 'Ger VisualEditor virknan í beta',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Legg ein miðil afturat',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Legg afturat miðil',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Heiti',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Lisensur',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Tak henda lutin burtur',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Legg afturat nýggjar myndir til hesa wikiuna', # Fuzzy
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Legg út',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Ups! Handa myndin er ov stór.  $1MB er alt ið vit kunnu klára!',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Ups! Vit stuðla bara $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Tað hendi ein feilur, meðan tú legði fílu út',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Leita eftir onkrum, ella set inn ein URL (internetadressu)',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Forskoðan kemur skjótt!',
	'wikia-visualeditor-help-label' => 'Kendir trupulleikar',
	'wikia-visualeditor-help-link' => 'Help:VisualEditor',
	'wikia-visualeditor-dialog-transclusion-title' => 'Fyrimynd',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Fyrimynd',
	'wikia-visualeditor-savedialog-label-save' => 'Útgev',
	'wikia-visualeditor-savedialog-label-restore' => 'Endurstovna síðu',
	'wikia-visualeditor-toolbar-savedialog' => 'Útgev',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Goym broytingar',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitext',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 * @author Jgaignerot
 * @author John Trololo
 * @author Linedwell
 * @author Wyz
 */
$messages['fr'] = array(
	'wikia-visualeditor-preference-enable' => 'Activer ÉditeurVisuel (bêta)',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Média',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Carte',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Créer une carte',
	'wikia-visualeditor-dialog-wikiamapinsert-headline' => 'Sélectionnez une carte existante ou créez-en une pour l’insérer. <a href="$1" target="_blank">En savoir plus.</a>',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => 'Aucune carte n’a été créée pour l’instant',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-text' => 'Collaborez avec la communauté en plaçant des points d’intérêt sur des cartes. <a href="$1" target="_blank">En savoir plus.</a>',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Ajouter un média',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Titre',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Licence',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Supprimer cet élément',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Glissez ici les images à importer',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Importer',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Oups ! Cette image est trop grosse. $1Mo est le maximum que nous puissions accepter, capitaine !',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Oups ! Nous ne prenons en charge que $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Erreur à l’import du fichier',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Rechercher quelque chose, ou saisir une URL',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Aperçu prochainement !',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => 'Veuillez adhérer à la politique d’images de {{SITENAME}} et aux [http://www.wikia.com/Terms_of_Use conditions d’utilisation] de Wikia en incluant de nouvelles vidéos et en téléchargeant de nouvelles photos.',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'En savoir plus',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Déposez votre fichier ici',
	'wikia-visualeditor-help-label' => 'Problèmes connus',
	'wikia-visualeditor-help-link' => 'Help:ÉditeurVisuel',
	'wikia-visualeditor-beta-warning' => "Ceci est l'intégration bêta de ÉditeurVisuel de Wikia. Il reste du travail à effectuer dessus, mais nous espérons que vous l'appréciez !",
	'wikia-visualeditor-wikitext-warning' => 'Vous utilisez ÉditeurVisuel (bêta) - le wikitexte ne fonctionne pas ici. Sélectionnez « Mode source » dans le menu « Plus » pour utiliser le wikitexte.',
	'wikia-visualeditor-aliennode-tooltip' => 'Désolé, cet élément ne peut être modifié que dans l’Éditeur classique, pour l’instant.',
	'wikia-visualeditor-dialog-transclusion-title' => 'Modifier',
	'wikia-visualeditor-dialog-transclusion-filter' => 'Rechercher un champ ou une valeur',
	'wikia-visualeditor-dialog-transclusion-zerostate' => "Ce modèle n'a aucun champ à modifier. Effectuez les modifications directement sur la page du modèle.",
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Modèle',
	'wikia-visualeditor-savedialog-label-save' => 'Publier',
	'wikia-visualeditor-savedialog-label-restore' => 'Restaurer la page',
	'wikia-visualeditor-toolbar-savedialog' => 'Publier',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Éditeur de source',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Éditeur de source',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Appliquer les changements',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitexte',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Mise en forme de l’aide',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'Vous devez être connecté pour ajouter des images et des vidéos.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'Ce wiki n’autorise que l’ajout de contenu sous licence depuis <a href="http://video.wikia.com" target="_blank">la Bibliothèque vidéo de Wikia</a>. Veuillez aller sur <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> pour rechercher des vidéos.',
	'wikia-visualeditor-notification-media-query-failed' => 'Désolé, nous n’avons pas pu trouver une image ou une vidéo supportée à cette URL.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Permission refusée',
	'wikia-visualeditor-notification-video-preview-not-available' => "Désolé, l'aperçu de cette vidéo n'est pas disponible.",
	'wikia-visualeditor-loading' => 'Chargement de ÉditeurVisuel...',
	'wikia-visualeditor-dialog-orientation-headline' => 'Bienvenue',
	'wikia-visualeditor-dialog-orientation-text' => 'Cette page est créée, modifiée et maintenue par des gens comme vous. Apportez votre première contribution dès aujourd’hui.',
	'wikia-visualeditor-dialog-orientation-start-button' => 'Commencer à modifier',
	'wikia-visualeditor-dialog-meta-languages-readonlynote' => "Ceci est la liste des pages dans d'autres langues liées à celle-ci. Pour l'instant, elle ne peut être modifiée qu'en mode source.",
	'wikia-visualeditor-dialog-transclusion-no-template-description' => 'Vous modifiez le modèle «$1».',
	'wikia-visualeditor-dialog-map-insert-title' => 'Insérer une carte',
	'wikia-visualeditor-save-error-generic' => 'Erreur à l’enregistrement des données sur le serveur.',
	'wikia-visualeditor-dialogbutton-wikiasourcemode' => 'Source',
	'wikia-visualeditor-dialog-done-button' => 'Terminé',
	'wikia-visualeditor-dialog-transclusion-get-info' => 'Obtenir des informations sur le modèle « $1 »',
	'wikia-visualeditor-dialog-transclusion-preview-button' => "Mettre à jour l'aperçu",
	'wikia-visualeditor-context-transclusion-description' => 'Modifier',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => 'Rechercher un modèle par nom ou par article',
	'wikia-visualeditor-wikiatemplateoptionwidget-appears' => 'Apparaît {{FORMATNUM:$1}} {{PLURAL:$1|fois}}',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => "Soyez le premier à l'utiliser",
	'wikia-visualeditor-dialog-template-insert-title' => 'Insérer un modèle',
	'wikia-visualeditor-dialog-preference-headline' => 'Salutations !',
	'wikia-visualeditor-dialog-preference-text' => "Notre éditeur vient d'être mis à jour et propose des outils améliorés pour vous aider à créer des articles encore plus riches.",
	'wikia-visualeditor-dialog-preference-link-help' => 'En lire plus sur les nouvelles fonctionnalités',
	'wikia-visualeditor-dialog-preference-link-preferences' => "Gérer vos préférences pour l'éditeur",
	'wikia-visualeditor-dialog-preference-start-button' => 'OK',
);

/** Galician (galego)
 * @author Elisardojm
 * @author Toliño
 * @author Vivaelcelta
 */
$messages['gl'] = array(
	'wikia-visualeditor-preference-enable' => 'Activar o editor visual en fase beta',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Engadir un ficheiro multimedia',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Engadir un ficheiro multimedia',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Título',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Licenza',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Eliminar este elemento',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Arrastre imaxes para cargalas',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Subir',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Vaites! Esa imaxe é grande de máis. $1MB é o máximo que podemos aceptar, capitán!',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Vaites! Só admitimos $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Erro ao subir o ficheiro',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Busca algo ou escribe un enderezo URL',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Axiña estará dispoñible a vista previa!',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => 'Respecte a política de imaxes de {{SITENAME}} e os [http://www.wikia.com/Terms_of_Use termos de uso] de Wikia ao incorporar novos vídeos e cargar novas fotos.',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Ler máis',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Arrastre o seu ficheiro aquí',
	'wikia-visualeditor-help-label' => 'Problemas coñecidos',
	'wikia-visualeditor-help-link' => 'Help:Editor visual',
	'wikia-visualeditor-beta-warning' => 'Esta é a integración en fase beta do editor visual. Quedan algunhas cousas por pulir, pero esperamos que lle guste!',
	'wikia-visualeditor-wikitext-warning' => 'Está usando o editor visual en fase beta; o código wiki non funciona aquí. Seleccione o "Modo fonte" no menú "Máis" para usalo.',
	'wikia-visualeditor-aliennode-tooltip' => 'Sentímolo, polo de agora este elemento só se pode editar no editor clásico.',
	'wikia-visualeditor-dialog-transclusion-title' => 'Modelo',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Modelo',
	'wikia-visualeditor-savedialog-label-save' => 'Publicar',
	'wikia-visualeditor-savedialog-label-restore' => 'Restaurar a páxina',
	'wikia-visualeditor-toolbar-savedialog' => 'Publicar',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Editor de código fonte',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Editor de código fonte',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Aplicar os cambios',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Texto wiki',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Axuda co formato',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'Debe acceder ao sistema para engadir imaxes e vídeos.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'Este wiki só permite a adición de contidos con licenza da <a href="http://video.wikia.com" target="_blank">biblioteca de vídeos do Wikia</a>. Vaia a <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> para atopar vídeos.',
	'wikia-visualeditor-notification-media-query-failed' => 'Sentímolo, non atopamos unha imaxe ou vídeo admitido nese enderezo URL.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Permisos rexeitados',
	'wikia-visualeditor-notification-video-preview-not-available' => 'Sentímolo, a vista previa deste vídeo non está dispoñible.',
	'wikia-visualeditor-loading' => 'Cargando o editor visual...',
);

/** Gujarati (ગુજરાતી)
 * @author KartikMistry
 */
$messages['gu'] = array(
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'નકશો',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'વધુ વાંચો',
	'wikia-visualeditor-notification-video-preview-not-available' => 'માફ કરજો, આ વિડિઓ પૂર્વદર્શન માટે પ્રાપ્ત નથી.',
	'wikia-visualeditor-loading' => 'વિઝ્યુલએડિટર લાવે છે...',
	'wikia-visualeditor-dialog-map-insert-title' => 'નકશો ઉમેરો',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Guycn2
 * @author YehudaDe
 */
$messages['he'] = array(
	'wikia-visualeditor-preference-enable' => 'הפעלת עורך חזותי (בטא)',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'מדיה',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'הוספת מדיה',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'כותרת',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'רישיון',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'הסרת הפריט הזה',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'הוספת תמונות חדשות לוויקיה הזאת', # Fuzzy
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'העלאה',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'אוי! נראה שהתמונה הזאת גדולה מדי. אנחנו יכולים לקבל רק $1 מ"ב!',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'אוי! אנחנו תומכים רק ב־$1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'שגיאה בהעלאת קובץ',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'חשפו משהו או הזינו URL',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'תצוגה מקדימה תגיע בקרוב!',
	'wikia-visualeditor-help-label' => 'בעיות ידועות',
	'wikia-visualeditor-help-link' => 'Help:עורך חזותי',
	'wikia-visualeditor-beta-warning' => 'זאת אינטגרציה בגרסת בטא של העורך החזותי בוויקיה. יש פה כמה בעיות, אבל אנחנו מקווים שתאהבו את זה!',
	'wikia-visualeditor-wikitext-warning' => 'אתם משתמשים בעורך הזותי בגרסת בטא – קוד ויקי לא עובד פה. יש לבחור "מצב קוד מקור" מתוך תפריט "עוד" כדי להשתמש בקוד מקור.',
	'wikia-visualeditor-aliennode-tooltip' => 'סליחה, אפשר לערוך את האלמנט הזה רק מהעורך הקלאסי לעת־עתה.',
	'wikia-visualeditor-dialog-transclusion-title' => 'תבנית',
	'wikia-visualeditor-dialog-transclusion-filter' => 'חיפוש תחום מסוים או ערך',
	'wikia-visualeditor-dialog-transclusion-zerostate' => 'לתבנית זו אין פרמטרים שניתן לערוך. יש לבצע שינויים בדף התבנית.',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'תבנית',
	'wikia-visualeditor-savedialog-label-save' => 'פרסום',
	'wikia-visualeditor-savedialog-label-restore' => 'שחזור דף',
	'wikia-visualeditor-toolbar-savedialog' => 'פרסום',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'עורך קוד מקור',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'עורך קוד מקור',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'החלת שינויים',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:קוד ויקי',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'עזרה בעיצוב',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'יש להיכנס כדי להעלות תמונות וסרטים.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'בוויקי הזה אפשר להוסיף רק תוכן עם רישיון מתוך <a href="http://video.wikia.com" target="_blank">Wikia Video Library</a>. נא ללכת אל <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> כדי לחפש סרטים.',
	'wikia-visualeditor-notification-media-query-failed' => 'סליחה, לא הצלחנו למצוא תמונה או סרט בכתובת הזאת.',
	'wikia-visualeditor-notification-media-permission-denied' => 'אין ההרשאה',
	'wikia-visualeditor-dialogbutton-wikiasourcemode' => 'מקור',
	'wikia-visualeditor-dialog-done-button' => 'סיום',
	'wikia-visualeditor-dialog-transclusion-preview-button' => 'עדכון התצוגה המקדימה',
	'wikia-visualeditor-context-transclusion-description' => 'עריכה',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => 'חיפוש תבנית באמצעות שם או ערך',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'הֱיו הראשונים שמשתמשים בזה',
	'wikia-visualeditor-dialog-template-insert-title' => 'הוספת תבנית',
	'wikia-visualeditor-dialog-preference-text' => 'העורך שלנו לא מזמן שודרג, להלן הצעות לשיפור שיעזרו לך ליצור ערכים מועשרים יותר.',
	'wikia-visualeditor-dialog-preference-link-help' => 'קריאה על התכונות החדשות',
	'wikia-visualeditor-dialog-preference-link-preferences' => 'ניהול ההעדפות שלך עבור העורך',
	'wikia-visualeditor-dialog-preference-start-button' => 'הבנתי!',
);

/** Hungarian (magyar)
 * @author TK-999
 */
$messages['hu'] = array(
	'wikia-visualeditor-preference-enable' => 'A béta állapotú VisualEditor bekapcsolása',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Média hozzáadása', # Fuzzy
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Média hozzáadása',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Cím',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Licenc',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Elem eltávolítása',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Húzza ide a feltöltendő képeket',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Feltöltés',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Hoppá! Ez a kép túl nagy méretű. A maximális fájlméret $1 MB.',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Hoppá! Csak az $1 fájltípus támogatott.',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Hiba történt a fájl feltöltése közben',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Keress rá valamire, vagy írj be egy webcímet',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Az előnézet hamarosan elérhető lesz!',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => 'Kérünk, hogy tartsd be a(z) {{SITENAME}} képfeltöltésre vonatkozó szabályait és a Wikia [http://www.wikia.com/Terms_of_Use felhasználási feltételeit] új videók beágyazásakor és új képek feltöltésekor.',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Tovább',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Húzd ide a fájlt',
	'wikia-visualeditor-help-label' => 'Ismert problémák',
	'wikia-visualeditor-help-link' => 'Segítség:VisualEditor', # Fuzzy
	'wikia-visualeditor-beta-warning' => 'Ez a Wikia béta állapotú VisualEditor-integrációja. Vannak még hibái, de reméljük, tetszik!',
);

/** Armenian (Հայերեն)
 * @author M hamlet
 * @author Xelgen
 */
$messages['hy'] = array(
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Վերբեռնել',
	'wikia-visualeditor-dialog-transclusion-title' => 'Կաղապար',
	'wikia-visualeditor-toolbar-savedialog' => 'Հրապարակել',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Ելատեքստի խմբագրիչ',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Ելատեքստի խմբագրիչ',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Կիրառել փոփոխությունները',
);

/** Italian (italiano)
 * @author Ontsed
 * @author Peg60
 */
$messages['it'] = array(
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Media',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Mappa',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Crea una mappa',
	'wikia-visualeditor-dialog-wikiamapinsert-headline' => 'Seleziona una mappa esistente o crea una mappa da inserire. <a href="$1" target="_blank">Impara di più.</a>',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => 'Nessuna mappa è stata ancora creata',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-text' => 'Collabora con la comunità aggiungendo punti d’interesse sulle mappe. <a href="$1" target="_blank">Impara di più.</a>',
	'wikia-visualeditor-dialog-transclusion-title' => 'Modifica',
	'wikia-visualeditor-dialog-transclusion-filter' => 'Cerca un particolare campo o valore',
	'wikia-visualeditor-dialog-orientation-headline' => 'Benvenuto',
	'wikia-visualeditor-dialog-orientation-text' => 'Questa pagina è stata creata, modificata e mantenuta da utenti come te. Fai oggi la tua prima modifica.',
	'wikia-visualeditor-dialog-orientation-start-button' => 'Inizia a contribuire',
	'wikia-visualeditor-dialog-meta-languages-readonlynote' => 'Questa è una lista di pagine in altre lingue collegate a questa pagina. Per il momento può essere modificata solo in modalità codice sorgente.',
	'wikia-visualeditor-dialog-transclusion-no-template-description' => 'Stai modificando il template "$1".',
	'wikia-visualeditor-dialog-done-button' => 'Fatto',
	'wikia-visualeditor-dialog-transclusion-get-info' => 'Ottieni informazioni sul template "$1"',
	'wikia-visualeditor-dialog-transclusion-preview-button' => 'Aggiorna anteprima',
	'wikia-visualeditor-context-transclusion-description' => 'Modifica',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => 'Cerca un template per nome o articolo',
	'wikia-visualeditor-wikiatemplateoptionwidget-appears' => 'Appare $1 {{PLURAL:$1|volta|volte}}',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'Sii il primo ad usare questo',
	'wikia-visualeditor-dialog-template-insert-title' => 'Inserisci template',
	'wikia-visualeditor-dialog-preference-headline' => 'Saluti!',
	'wikia-visualeditor-dialog-preference-text' => 'Il nostro editor è stato appena aggiornato per offrirti strumenti più potenti che ti aiuteranno a creare articoli più ricchi.',
	'wikia-visualeditor-dialog-preference-link-help' => 'Scopri di più sulle nuove funzioni',
	'wikia-visualeditor-dialog-preference-link-preferences' => "Controlla le tue impostazioni dell'editor",
	'wikia-visualeditor-dialog-preference-start-button' => 'OK!',
);

/** Japanese (日本語)
 * @author Barrel0116
 * @author Los688
 * @author Plover-Y
 */
$messages['ja'] = array(
	'wikia-visualeditor-preference-enable' => 'ビジュアルエディター（ベータ版機能）を有効にする',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'メディア',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => '地図',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => '地図を作成する',
	'wikia-visualeditor-dialog-wikiamapinsert-headline' => '既存の地図の中から選ぶもしくは挿入する地図を作成する. <a href="$1" target="_blank">詳細はこちら.</a>',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => '地図は作成されていません',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-text' => '地図を挿入してロケーションを特定することによってよりコミュニティとコラボレーションすることになります. <a href="$1" target="_blank">詳細はこちら.</a>',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'メディアを追加',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'タイトル',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'ライセンス',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'この項目を削除します。',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'アップロードする画像をドロップしてください。',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'アップロード',
	'wikia-visualeditor-dialog-drop-target-callout' => 'ここにファイルをドロップします。',
	'wikia-visualeditor-help-label' => '既知の問題',
	'wikia-visualeditor-help-link' => 'Help:ビジュアルエディタ',
	'wikia-visualeditor-aliennode-tooltip' => '申し訳ありませんが、現時点ではソースモードのみでしか編集できません。',
	'wikia-visualeditor-dialog-transclusion-title' => '編集',
	'wikia-visualeditor-dialog-transclusion-filter' => '特定の領域もしくは価値の中から検索する',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'テンプレート',
	'wikia-visualeditor-savedialog-label-save' => '保存',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'ソースエディター',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'ソースエディター',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => '変更内容を適用',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:ウィキテキスト',
	'wikia-visualeditor-notification-media-must-be-logged-in' => '画像や動画を追加するにはログインが必要です。',
	'wikia-visualeditor-loading' => 'ビジュアルエディターを読み込んでいます。',
	'wikia-visualeditor-dialog-orientation-headline' => 'ようこそ',
	'wikia-visualeditor-dialog-orientation-text' => 'このページはあなたのような編集者によって作られ、編集され、メンテナンスされています。初めての投稿してみて下さい。',
	'wikia-visualeditor-dialog-orientation-start-button' => '編集を始める',
	'wikia-visualeditor-dialog-meta-languages-readonlynote' => 'これはここにリンクされている他の言語がリストされているページです。今後はソースモードでのみ編集することができます。',
	'wikia-visualeditor-dialog-transclusion-no-template-description' => '「$1」テンプレートを編集中です。',
	'wikia-visualeditor-dialog-done-button' => '終了',
	'wikia-visualeditor-dialog-transclusion-get-info' => '"$1" テンプレートについての詳細を知る',
	'wikia-visualeditor-dialog-transclusion-preview-button' => 'プレビューを更新',
	'wikia-visualeditor-context-transclusion-description' => '編集',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => '名前もしくは記事名でテンプレートを探す',
	'wikia-visualeditor-wikiatemplateoptionwidget-appears' => '$1 {{PLURAL:$1|回|回}}表示',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'このテンプレートの初めての使用者',
	'wikia-visualeditor-dialog-template-insert-title' => 'テンプレートを挿入',
	'wikia-visualeditor-dialog-preference-headline' => 'こんにちは!',
	'wikia-visualeditor-dialog-preference-text' => '我々の編集機能は向上され、より良い記事ページを作成するために質のよい機能を提供します。',
	'wikia-visualeditor-dialog-preference-link-help' => '新しい機能について知る',
	'wikia-visualeditor-dialog-preference-link-preferences' => 'あなたの編集方法を管理する',
	'wikia-visualeditor-dialog-preference-start-button' => '了解しました',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Sovichet
 */
$messages['km'] = array(
	'wikia-visualeditor-preference-enable' => 'បើក VisualEditor បេតា',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'បន្ថែម​មេឌា',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'បន្ថែម​មេឌា',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'ចំណង​ជើង',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'អាជ្ញាបណ្ណ',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'ដក​របស់​នេះ​ចេញ',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'បន្ថែម​រូប​ថ្មី​ទៅ​ក្នុង wikia នេះ', # Fuzzy
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'ផ្ទុក​ឡើង',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'អូ៎! រូប​នោះ​ធំ​ពេក​ហើយ។ $1MB គឺជា​ទំហំ​ដែល​យើង​អាច​ទទួល​យក​បាន។',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'អូ៎! យើង​ស្គាល់​តែ $1 ប៉ុណ្ណោះ',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'កំហុស​ផ្ទុក​ឡើង​ឯកសារ',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'ស្វែង​រក​អ្វី​មួយ ឬ​ក៏​បញ្ចូល URL',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'ការ​មើល​ជាមុន នឹង​មក​ដល់​ឆាប់ៗ!',
	'wikia-visualeditor-help-label' => 'បញ្ហា​ដែល​ស្គាល់',
	'wikia-visualeditor-help-link' => 'ជំនួយ:VisualEditor', # Fuzzy
	'wikia-visualeditor-wikitext-warning' => "អ្នក​កំពុង​តែ​ប្រើ VisualEditor បេតា ដូច្នេះ​អក្សរ​កូដ​វិគី​មិន​បង្ហាញ​នៅ​ត្រង់​នេះ​ទេ។ សូម​រើស 'បែប​កូដ' ពិ​ក្នុង​ម៉ឺនុយ 'ច្រើន​ទៀត' ដើម្បី​ប្រើ​អក្សរ​កូដ​វិគី។",
	'wikia-visualeditor-aliennode-tooltip' => 'សូម​ទោស, ធាតុ​នេះ​អាច​ត្រូវ​កែ​បាន​តែ​ក្នុង​កម្មវិធី​កែ​សម្រួល​ចាស់​ប៉ុណ្ណោះ។',
	'wikia-visualeditor-dialog-transclusion-title' => 'ទំព័រគំរូ',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'ទំព័រគំរូ',
	'wikia-visualeditor-savedialog-label-save' => 'បោះ​ផ្សាយ',
	'wikia-visualeditor-savedialog-label-restore' => 'ស្ដារ​ទំព័រ',
	'wikia-visualeditor-toolbar-savedialog' => 'បោះ​ផ្សាយ',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'កម្មវិធី​កែ​សម្រួល​កូដ',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'កម្មវិធី​កែ​សម្រួល​កូដ',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'អនុវត្ត​បន្លាស់​ប្ដូរ',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'ជំនួយ:កូដវិគី', # Fuzzy
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'ជំនួយ​អំពី​ទ្រង់ទ្រាយ',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'អ្នក​ត្រូវ​តែ​កត់​ឈ្មោះ​ចូល ដើម្បី​បន្ថែម​រូប​ភាព និង​វីដេអូ។',
	'wikia-visualeditor-notification-media-query-failed' => 'សូម​ទោស, យើង​រក​មិន​ឃើញ​ប្រភេទ​រូបភាព ឬ វីដេអូ​ដែល​ស្គាល់​ពី URL នោះ​ទេ។',
	'wikia-visualeditor-notification-media-permission-denied' => 'ពុំ​មាន​សិទ្ធិ​ឡើយ',
);

/** Korean (한국어)
 * @author Miri-Nae
 */
$messages['ko'] = array(
	'wikia-visualeditor-preference-enable' => '비쥬얼 에디터 베타 사용',
	'wikia-visualeditor-help-link' => '도움말:비쥬얼 에디터', # Fuzzy
	'wikia-visualeditor-dialog-transclusion-title' => '편집',
	'wikia-visualeditor-dialog-transclusion-filter' => '특정 영역, 혹은 값으로 찾기',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => '틀',
	'wikia-visualeditor-savedialog-label-save' => '저장',
	'wikia-visualeditor-toolbar-savedialog' => '저장',
	'wikia-visualeditor-loading' => '비쥬얼 에디터 불러오는 중...',
	'wikia-visualeditor-dialog-done-button' => '완료',
	'wikia-visualeditor-dialog-transclusion-get-info' => '"$1" 틀에 대한 정보 보기',
	'wikia-visualeditor-dialog-transclusion-preview-button' => '새로고침',
	'wikia-visualeditor-context-transclusion-description' => '편집',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => '이름, 혹은 문서명으로 틀 찾기',
	'wikia-visualeditor-wikiatemplateoptionwidget-appears' => '$1{{PLURAL:$1|번|번}} 표시',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => '틀을 첫 번째로 사용해 보세요',
	'wikia-visualeditor-dialog-template-insert-title' => '틀 삽입',
	'wikia-visualeditor-dialog-preference-headline' => '좋은 소식입니다!',
	'wikia-visualeditor-dialog-preference-text' => '한층 개선된 편집기 덕분에 이제 더 쉽게 문서를 알차게 만들 수 있을 것입니다.',
	'wikia-visualeditor-dialog-preference-link-help' => '새로운 기능을 확인해보세요',
	'wikia-visualeditor-dialog-preference-link-preferences' => '편집기 환경 설정을 변경해보세요',
	'wikia-visualeditor-dialog-preference-start-button' => '확인',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'wikia-visualeditor-preference-enable' => 'De Beta-VisualEditor aktivéieren',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Kaart',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Eng Kaart uleeën',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => 'Et goufen nach keng Kaarten ugeluecht',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Titel',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Lizenz',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Eroplueden',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Feeler beim Eropluede vum Fichier',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'No eppes sichen oder eng URL aginn',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Méi liesen',
	'wikia-visualeditor-help-label' => 'Bekannte Problemer',
	'wikia-visualeditor-help-link' => 'Help:VisualEditor',
	'wikia-visualeditor-aliennode-tooltip' => 'Pardon, dëst Element kann elo nëmme mam klasseschen Editeur am Quelltextmodus geännert ginn.',
	'wikia-visualeditor-dialog-transclusion-title' => 'Schabloun',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Schabloun',
	'wikia-visualeditor-savedialog-label-save' => 'Verëffentlechen',
	'wikia-visualeditor-savedialog-label-restore' => 'Säit restauréieren',
	'wikia-visualeditor-toolbar-savedialog' => 'Verëffentlechen',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Ännerungen uwennen',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitext',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'Dir musst ageloggt si fir Biller a Videon derbäizesetzen.',
	'wikia-visualeditor-notification-media-query-failed' => 'Pardon, mir konnten keen ënnerstëtzt Bild oder Video op där URL fonnt.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Erlaabnes refuséiert',
	'wikia-visualeditor-loading' => 'VisualEditor gëtt gelueden...',
	'wikia-visualeditor-dialog-orientation-headline' => 'Wëllkomm',
	'wikia-visualeditor-dialog-map-insert-title' => 'Kaart drasetzen',
	'wikia-visualeditor-save-error-generic' => 'Feeler beim Späichere vun den Donnéeën um Server.',
	'wikia-visualeditor-dialogbutton-wikiasourcemode' => 'Quell',
	'wikia-visualeditor-dialog-done-button' => 'Fäerdeg',
	'wikia-visualeditor-context-transclusion-description' => 'Änneren',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'Sidd deen Éischten deen dëst benotzt',
	'wikia-visualeditor-dialog-template-insert-title' => 'Schabloun drasetzen',
);

/** لوری (لوری)
 * @author Mogoeilor
 */
$messages['lrc'] = array(
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'د کار ونن آلشتیا',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Nosaukums',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Licence',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Augšupielādēt',
	'wikia-visualeditor-dialog-transclusion-title' => 'Veidne',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Veidne',
	'wikia-visualeditor-savedialog-label-save' => 'Publicēt',
	'wikia-visualeditor-savedialog-label-restore' => 'Atjaunot lapu',
	'wikia-visualeditor-toolbar-savedialog' => 'Publicēt',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Lietot izmaiņas',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 * @author Монтехристо
 */
$messages['mk'] = array(
	'wikia-visualeditor-preference-enable' => 'Вклучи ја бета-верзијата на ВизуеленУредник',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Додај слики/снимки',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Карта',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Направи карта',
	'wikia-visualeditor-dialog-wikiamapinsert-headline' => 'Изберете постечка карта или направете карта за да ја вметнете. <a href="$1" target="_blank">Дознајте повеќе.</a>',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => 'Засега нема ниедна создадена карта.',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-text' => 'Соработувајте со заедницата, визуелно означувајќи ги местата од интерес на картите. <a href="$1" target="_blank">Дознајте повеќе.</a>',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Додајте слики или снимки',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Наслов',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Лиценца',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Отстрани го елементов',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Ставете нови слики во оваа викија',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Подигни',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Нажалост, сликата е преголема. Можеме да примиме до $1 МБ, шефе!',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Нажалост, поддржуваме само $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Грешка при подигањето на податотеката',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Пребарајте нешто или внесете URL',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Прегледот ќе стаса наскоро!',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => 'Ве молиме да се придржувате кон правилникот на {{SITENAME}} за сликите и Викиините [http://www.wikia.com/Услови_за_Употреба услови за употреба] кога се вметнуваат нови видеа и подигаат нови слики.',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Прочитајте повеќе',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Тука довлечете ја податотеката',
	'wikia-visualeditor-help-label' => 'Познати проблеми',
	'wikia-visualeditor-help-link' => 'Help:VisualEditor',
	'wikia-visualeditor-beta-warning' => 'Ова е бета-верзијата на ВикиУредник за Викија. Сè уште не е сосем измазнета, но се надеваме дека ќе ви се допадне!',
	'wikia-visualeditor-wikitext-warning' => 'Користите бета-верзија на ВизуеленУредник — тука не работи викитекст. Изберете „Изворен режим“ од менито „Повеќе“ за да користите викитекст.',
	'wikia-visualeditor-aliennode-tooltip' => 'Нажалост, овој елемент засега може да се уредува само со класичниот уредник.',
	'wikia-visualeditor-dialog-transclusion-title' => 'Шаблон',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Шаблон',
	'wikia-visualeditor-savedialog-label-save' => 'Објави',
	'wikia-visualeditor-savedialog-label-restore' => 'Поврати страница',
	'wikia-visualeditor-toolbar-savedialog' => 'Објави',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Уредувач на изворен код',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Уредувач на изворен код',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Спроведи измени',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitext',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Помош со форматирање',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'Мора да сте најавени за да ставате слики и видеа.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'На ова вики можат да се додаваат само лиценцирани содржини од <a href="http://video.wikia.com" target="_blank">Викиината видеотека</a>. Појдете на <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> за да пребарате видеа.',
	'wikia-visualeditor-notification-media-query-failed' => 'Нажалост, не можев да најдам поддржана слика или видео на таа URL-адреса.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Дозволата е одбиена',
	'wikia-visualeditor-notification-video-preview-not-available' => 'Нажалост, ова видео не е достапно за преглед.',
	'wikia-visualeditor-loading' => 'Го вчитувам ВизуеленУредник...',
	'wikia-visualeditor-dialog-orientation-headline' => 'Добре дојдовте',
	'wikia-visualeditor-dialog-orientation-text' => 'Оваа страница е создадена, се уредува и се одржува од луѓе како Вас. Земете учество денес.',
	'wikia-visualeditor-dialog-orientation-start-button' => 'Почнете со уредување',
	'wikia-visualeditor-dialog-meta-languages-readonlynote' => 'Ова е список нас траници на други јазици што се сврзани со оваа. Засега списоков може да се уредува само во изворен режим.',
	'wikia-visualeditor-dialog-transclusion-no-template-description' => 'Го уредувате шаблонот „$1“.',
	'wikia-visualeditor-dialog-map-insert-title' => 'Вметни карта',
	'wikia-visualeditor-save-error-generic' => 'Грешка при зачувување на податоците во опслужувачот.',
	'wikia-visualeditor-dialogbutton-wikiasourcemode' => 'Извор',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'wikia-visualeditor-preference-enable' => 'പരീക്ഷണാടിസ്ഥാനത്തിലുള്ള കണ്ടുതിരുത്തൽ സൗകര്യം സജ്ജമാക്കുക',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'മീഡിയ ചേർക്കുക',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'മീഡിയ ചേർക്കുക',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'തലക്കെട്ട്',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'ഉപയോഗാനുമതി',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'ഈ ഇനം ഒഴിവാക്കുക',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'ഈ വിക്കിയയിലേക്ക് പുതിയ ചിത്രങ്ങൾ ചേർക്കുക', # Fuzzy
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'അപ്‌ലോഡ്',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'അയ്യോ! ആ ചിത്രം വളരെ വലുതാണ്. $1 എം.ബി. വലിപ്പമാണ് ഞങ്ങൾക്ക് സ്വീകരിക്കാനാവുന്നത് ചേട്ടാ!',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'അയ്യോ! $1 മാത്രമേ ഞങ്ങൾ പിന്തുണയ്ക്കുന്നുള്ളു',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'പ്രമാണം അപ്‌ലോഡ് ചെയ്യുന്നതിനിടെ പിഴവുണ്ടായി',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'എന്തിനെങ്കിലും തിരയുക അല്ലെങ്കിൽ യു.ആർ.എൽ. നൽകുക',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'പ്രിവ്യൂ ഉടനെത്തും!',
	'wikia-visualeditor-help-label' => 'അറിയാവുന്ന പ്രശ്നങ്ങൾ',
);

/** Mongolian (монгол)
 * @author Mongol
 * @author Wisdom
 */
$messages['mn'] = array(
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Жижиг зургуудыг оруулах',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Дэлгэрэнгүйг унших',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Энд файлаа хийнэ үү',
	'wikia-visualeditor-notification-video-preview-not-available' => 'Уучлаарай, энэ видеог урьдчилан харах боломжгүй байна',
	'wikia-visualeditor-loading' => 'VisualEditor-ыг ачааллаж байна',
	'wikia-visualeditor-dialog-map-insert-title' => 'map оруулах',
	'wikia-visualeditor-save-error-generic' => 'Мэдээллийг серверт хадгалахад алдаа6',
);

/** Marathi (मराठी)
 * @author Shantanoo
 * @author V.narsikar
 */
$messages['mr'] = array(
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'परवाना',
	'wikia-visualeditor-dialog-preference-start-button' => 'समजले!',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author SNN95
 */
$messages['ms'] = array(
	'wikia-visualeditor-preference-enable' => 'Membolehkan beta VisualEditor',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Media',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Peta',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Buat peta',
	'wikia-visualeditor-dialog-wikiamapinsert-headline' => 'Pilih peta yang sedia ada atau cipta peta untuk sisipan. <a href="$1" target="_blank">Learn more.</a>',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => 'Belum ada peta yang dicipta',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-text' => 'Bekerjasama dengan komuniti dengan mengepin lokasi-lokasi tarikan pada peta. <a href="$1" target="_blank">Ketahui lebih lanjut.</a>',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Tambah Media',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Tajuk',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Lesen',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Buang item ini',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Letakkan gambar untuk dimuat naik',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Muat naik',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Oops! Imej tersebut terlalu besar.  $1MB adalah had muat naik, kapten!',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Oops! Kami hanya menyokong $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Ralat memuat naik fail',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Cari sesuatu atau masukkan URL',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Tayangan akan datang!',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => 'Sila patuhi dasar imej {{SITENAME}} dan [http://www.wikia.com/Terms_of_Use syarat-syarat penggunaan] Wikia dalam meletakkan video baru dan memuat naik gambar baru.',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Baca lagi',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Letakkan fail anda di sini',
	'wikia-visualeditor-help-label' => 'Isu-isu yang diketahui',
	'wikia-visualeditor-help-link' => 'Help:VisualEditor',
	'wikia-visualeditor-beta-warning' => 'Ini adalah integrasi beta VisualEditor di Wikia. Walaupun belum sempurna sepenuhnya, tetapi diharap anda berpuas hati dengannya!',
	'wikia-visualeditor-wikitext-warning' => "Anda menggunakan beta VisualEditor - teks wiki tidak berguna disini. Pilih 'Sumber mod' daripada menu 'Lebih' untuk menggunakan teks wiki.",
	'wikia-visualeditor-aliennode-tooltip' => 'Maaf elemen ini haya boleh disunting melalui Penyuntingan Klasik buat masa ini.',
	'wikia-visualeditor-dialog-transclusion-title' => 'Templat',
	'wikia-visualeditor-dialog-transclusion-filter' => 'Cari ruangan atau nilai tertentu',
	'wikia-visualeditor-dialog-transclusion-zerostate' => 'Templat ini tiada ruangan untuk diisi. Sunting templat ini di lamannya.',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Templat',
	'wikia-visualeditor-savedialog-label-save' => 'Siarkan',
	'wikia-visualeditor-savedialog-label-restore' => 'Pulihkan halaman',
	'wikia-visualeditor-toolbar-savedialog' => 'Siarkan',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Penyunting Sumber',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Penyunting Sumber',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Gunakan perubahan',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikiteks',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Bantuan pemformatan',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'Anda mesti log masuk untuk menambah gambar dan video.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'Wiki ini hanya membenarkan penambahan kandungan berlesen dari <a href="http://video.wikia.com" target="_blank">Perpustakaan Video Wikia</a>. Sila ke <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> untuk mencari video.',
	'wikia-visualeditor-notification-media-query-failed' => 'Maaf, tidak terdapat gambar atau video yang boleh disokong pada URL itu.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Kebenaran ditolak',
	'wikia-visualeditor-notification-video-preview-not-available' => 'Maaf, video ini tidak boleh dipratayang.',
	'wikia-visualeditor-loading' => 'VisualEditor sedang dimuatkan...',
	'wikia-visualeditor-dialog-orientation-headline' => 'Selamat datang',
	'wikia-visualeditor-dialog-orientation-text' => 'Laman ini dicipta, disunting dan diselenggarakan oleh orang ramai seperti anda. Lakukan sumbangan pertama anda hari ini.',
	'wikia-visualeditor-dialog-orientation-start-button' => 'Mula menyunting',
	'wikia-visualeditor-dialog-meta-languages-readonlynote' => 'Terdapat senarai laman dalam bahasa-bahasa lain yang terpaut kepada laman ini. Buat masa sekarang, ia hanya boleh disunting dalam mod sumber.',
	'wikia-visualeditor-dialog-transclusion-no-template-description' => 'Anda sedang menyunting templat "$1".',
	'wikia-visualeditor-dialog-map-insert-title' => 'Sisipkan peta',
	'wikia-visualeditor-save-error-generic' => 'Ralat ketika menyimpan data ke dalam pelayan.',
	'wikia-visualeditor-dialogbutton-wikiasourcemode' => 'Sumber',
	'wikia-visualeditor-dialog-done-button' => 'Siap',
	'wikia-visualeditor-dialog-transclusion-get-info' => 'Dapatkan maklumat mengenai templat "$1"',
	'wikia-visualeditor-dialog-transclusion-preview-button' => 'Kemaskinikan pratontonan',
	'wikia-visualeditor-context-transclusion-description' => 'Sunting',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => 'Cari templat mengikut nama atau rencana',
	'wikia-visualeditor-wikiatemplateoptionwidget-appears' => 'Keluar {{FORMATNUM:$1}} kali',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'Jadilah pengguna pertamanya',
	'wikia-visualeditor-dialog-template-insert-title' => 'Sisipkan templat',
	'wikia-visualeditor-dialog-preference-headline' => 'Selamat sejahtera, wahai peminat setia!',
	'wikia-visualeditor-dialog-preference-text' => 'Editor kami baru sahaja dinaik taraf, menawarkan peralatan yang diperhalusi untuk membantu anda mengarang rencana-rencana yang lebih padat.',
	'wikia-visualeditor-dialog-preference-link-help' => 'Ketahui ciri-ciri baru',
	'wikia-visualeditor-dialog-preference-link-preferences' => 'Uruskan tetapan editor anda',
	'wikia-visualeditor-dialog-preference-start-button' => 'Faham!',
);

/** Maltese (Malti)
 * @author CharlieTheCabbie
 * @author Leli Forte
 */
$messages['mt'] = array(
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Tal-midja',
	'wikia-visualeditor-dialog-transclusion-title' => 'Immodifika',
);

/** Neapolitan (Napulitano)
 * @author C.R.
 */
$messages['nap'] = array(
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => "Miette immaggene pe' lle caricà",
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => "Pe' piacere auniteve â puliteca d'immaggene 'e {{SITENAME}} ed 'e [http://www.wikia.com/Terms_of_Use Cundizzione d'uso] 'e Wikia quanno azzeccate video e immaggene nnove.",
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => "Liegge 'e cchiù",
	'wikia-visualeditor-dialog-drop-target-callout' => "Jetta 'o file ccà",
	'wikia-visualeditor-notification-video-preview-not-available' => "Scusate, stu video nun è pronto p&#39;'a previsualizzazziona.",
	'wikia-visualeditor-loading' => "Carecanno 'o VisualEditor",
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Danmichaelo
 * @author Event
 */
$messages['nb'] = array(
	'wikia-visualeditor-preference-enable' => 'Skru på VisualEditor (beta)',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Legg til media',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Legg til media',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Tittel',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Lisens',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Fjern dette elementet',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Legg til bilder på denne wikiaen', # Fuzzy
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Last opp',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Heisann! Dette bildet er for stort. $1 MB er grensen for bilder!',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Heisann! Vi støtter bare $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Feil ved opplasting av filen',
);

/** Nepali (नेपाली)
 * @author सरोज कुमार ढकाल
 */
$messages['ne'] = array(
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'सामग्री',
);

/** Dutch (Nederlands)
 * @author Arent
 * @author Mar(c)
 * @author Siebrand
 * @author Sjoerddebruin
 * @author Southparkfan
 */
$messages['nl'] = array(
	'wikia-visualeditor-preference-enable' => 'Beta van visuele tekstverwerker inschakelen',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Media',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Kaart',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Een kaart maken',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Media toevoegen',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Naam',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Licentie',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Item verwijderen',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Sleep afbeeldingen om te uploaden',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Uploaden',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Die afbeelding is te groot. $1 megabyte is de maximale grootte.',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Alleen de volgende bestandstypen worden ondersteund: $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Fout tijdens het uploaden van bestand',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Zoek naar iets of geef een URL op',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Voorvertoning is binnenkort beschikbaar!',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Meer lezen',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Sleep uw bestand naar hier',
	'wikia-visualeditor-help-label' => 'Bekende problemen',
	'wikia-visualeditor-help-link' => 'Help:Visuele tekstverwerker',
	'wikia-visualeditor-beta-warning' => "Dit is Wikia's betaintegratie van de visuele tekstverwerker.  Er zijn enkele ruwe kantjes, maar we hopen dat u het een enorme verbetering vindt!",
	'wikia-visualeditor-wikitext-warning' => 'U gebruikt de betaversie van de visuele tekstverwerker. U kunt in deze weergave geen wikitekst gebruiken. Selecteer "Brontekstmodus" in het menu "Meer" om wikitekst te gebruiken.',
	'wikia-visualeditor-aliennode-tooltip' => 'Dit element kan helaas alleen in de klassieke tekstverwerker bewerkt worden.',
	'wikia-visualeditor-dialog-transclusion-title' => 'Bewerken',
	'wikia-visualeditor-dialog-transclusion-filter' => 'Een bepaald veld of waarde zoeken',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Sjabloon',
	'wikia-visualeditor-savedialog-label-save' => 'Publiceren',
	'wikia-visualeditor-savedialog-label-restore' => 'Pagina terugplaatsen',
	'wikia-visualeditor-toolbar-savedialog' => 'Publiceren',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Tekstverwerker voor broncode',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Tekstverwerker voor broncode',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Wijzigingen toepassen',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitext',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Hulp bij opmaken',
	'wikia-visualeditor-notification-media-must-be-logged-in' => "Meld u aan om afbeeldingen en video's te uploaden.",
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'Deze wiki staat alleen gelicenseerde inhoud toe die van <a href="http://video.wikia.com" target="_blank">Wikia Video Library</a> wordt toegevoegd. Ga naar <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> om te zoeken voor video\'s.',
	'wikia-visualeditor-notification-media-query-failed' => 'We konden helaas geen ondersteunde afbeelding of video vinden op die URL.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Geen toegang',
	'wikia-visualeditor-loading' => 'Visuele tekstverwerker aan het laden...',
	'wikia-visualeditor-dialog-orientation-headline' => 'Welkom',
	'wikia-visualeditor-dialog-orientation-start-button' => 'Begin met bewerken',
	'wikia-visualeditor-dialog-meta-languages-readonlynote' => "Dit is een lijst van pagina's in andere talen die hieraan gelinkt zijn. Voorlopig kan dit enkel bewerkt worden in bronmodus.",
	'wikia-visualeditor-dialog-transclusion-no-template-description' => 'Je bent het "$1"-sjabloon aan het bewerken.',
	'wikia-visualeditor-dialogbutton-wikiasourcemode' => 'Bron',
	'wikia-visualeditor-dialog-done-button' => 'Klaar',
	'wikia-visualeditor-dialog-transclusion-get-info' => 'Informatie verkrijgen over het "$1" sjabloon',
	'wikia-visualeditor-dialog-transclusion-preview-button' => 'Voorvertoning updaten',
	'wikia-visualeditor-context-transclusion-description' => 'Bewerken',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => 'Een sjabloon op naam of artikel zoeken',
	'wikia-visualeditor-wikiatemplateoptionwidget-appears' => 'Komt {{$1}} keer voor', # Fuzzy
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'De eerste zijn om dit te gebruiken',
	'wikia-visualeditor-dialog-template-insert-title' => 'Sjabloon invoegen',
	'wikia-visualeditor-dialog-preference-headline' => 'Gegroet!',
	'wikia-visualeditor-dialog-preference-text' => 'Onze bewerker is juist opgewaardeerd, en biedt betere hulpmiddelen die je helpen rijkere artikels te schrijven',
	'wikia-visualeditor-dialog-preference-link-help' => 'Over de nieuwe functies lezen',
	'wikia-visualeditor-dialog-preference-link-preferences' => 'Je bewerkingsvoorkeuren beheren',
	'wikia-visualeditor-dialog-preference-start-button' => 'Begrepen!',
);

/** Occitan (occitan)
 * @author Cedric31
 * @author Jfblanc
 */
$messages['oc'] = array(
	'wikia-visualeditor-preference-enable' => "Activar l'Editor Visual beta",
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Mèdia',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Aprondre un mèdi',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Títol',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Licéncia',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => "Suprimir l'element",
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => "Depausar d'imatges de telecargar",
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Telecargar',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => "Ai! Imatge tròp gròs! Podèm pas prene mai qu'$1 Mo!",
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Ai! Suportam pas que $1.',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Error de telecargament del fichièr',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Ne saber mai',
	'wikia-visualeditor-help-link' => 'Help:Editor visual',
	'wikia-visualeditor-dialog-transclusion-title' => 'Modèl',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Modèl',
	'wikia-visualeditor-savedialog-label-save' => 'Publicar',
	'wikia-visualeditor-savedialog-label-restore' => 'Restablir la pagina',
	'wikia-visualeditor-toolbar-savedialog' => 'Publicar',
);

/** Punjabi (ਪੰਜਾਬੀ)
 * @author Babanwalia
 */
$messages['pa'] = array(
	'wikia-visualeditor-dialog-transclusion-title' => 'ਸੋਧੋ',
	'wikia-visualeditor-dialog-transclusion-filter' => 'ਕਿਸੇ ਖ਼ਾਸ ਖੇਤਰ ਜਾਂ ਮੁੱਲ ਦੀ ਭਾਲ਼ ਕਰੋ',
	'wikia-visualeditor-dialog-done-button' => 'ਹੋ ਗਿਆ',
	'wikia-visualeditor-dialog-transclusion-get-info' => '"$1" ਫਰਮੇ ਬਾਬਤ ਜਾਣਕਾਰੀ ਲਵੋ',
	'wikia-visualeditor-dialog-transclusion-preview-button' => 'ਝਾਤ ਨਵਿਆਉ',
	'wikia-visualeditor-context-transclusion-description' => 'ਸੋਧੋ',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => 'ਨਾਂ ਜਾਂ ਲੇਖ ਰਾਹੀਂ ਕਿਸੇ ਫਰਮੇ ਦੀ ਭਾਲ਼ ਕਰੋ',
	'wikia-visualeditor-wikiatemplateoptionwidget-appears' => '{{FORMATNUM:$1}} {{PLURAL:$1|ਵਾਰ}} ਵਿਖਾਈ ਦਿੰਦਾ ਹੈ',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'ਇਹਨੂੰ ਸਭ ਤੋਂ ਪਹਿਲਾਂ ਵਰਤਣ ਵਾਲ਼ੇ ਬਣੋ',
	'wikia-visualeditor-dialog-template-insert-title' => 'ਫਰਮਾ ਵਾੜੋ',
	'wikia-visualeditor-dialog-preference-headline' => 'ਸਲਾਮ!',
	'wikia-visualeditor-dialog-preference-link-help' => 'ਨਵੇਂ ਗੁਣਾਂ ਬਾਬਤ ਪੜ੍ਹੋ',
	'wikia-visualeditor-dialog-preference-link-preferences' => 'ਆਪਣੀਆਂ ਸੰਪਾਦਕੀ ਤਰਜੀਹਾਂ ਸਾਂਭੋ',
	'wikia-visualeditor-dialog-preference-start-button' => 'ਸਮਝ ਆ ਗਿਆ!',
);

/** Polish (polski)
 * @author Chrumps
 * @author Matik7
 * @author Pio387
 * @author Py64
 * @author Sovq
 * @author Vengir
 * @author Wedkarski
 */
$messages['pl'] = array(
	'wikia-visualeditor-preference-enable' => 'Włącz VisualEditor w wersji beta',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Multimedia',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Mapa',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Utwórz mapę',
	'wikia-visualeditor-dialog-wikiamapinsert-headline' => 'Wybierz istniejącą mapę lub utwórz mapę by ją wstawić. <a href-"$1" target="_blank">Dowiedz się więcej.</a>',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => 'Aktualnie nie ma utworzonej żadnej mapy.',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-text' => 'Współpracuj ze społecznością poprzez wizualne zaznaczanie interesujących miejsc na mapach. <a href="$1" target="_blank">Dowiedz się więcej.</a>',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Dodaj multimedia',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Tytuł',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Licencja',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Usuń ten element',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Przeciągnij obrazy do wysłania',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Prześlij',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Ups! Ten obraz jest zbyt duży. $1MB - to maksymalny, dopuszczalny rozmiar pliku!',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Ups! Wspieramy jedynie $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Błąd podczas przesyłania pliku',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Szukaj lub wprowadź adres URL',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Podgląd dostępny wkrótce!',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => 'Proszę trzymać się zasad przesyłania obrazów {{SITENAME}} oraz [http://pl.wikia.com/Zasady_Użytkowania Zasad Użytkowania Wikia] podczas osadzania nowych filmów i przesyłania nowych obrazów.',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Czytaj więcej',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Upuść swój plik tutaj',
	'wikia-visualeditor-help-label' => 'Znane problemy',
	'wikia-visualeditor-help-link' => 'Help:VisualEditor',
	'wikia-visualeditor-beta-warning' => 'To wersja beta VisualEditora Wikii. Niektóre jego elementy mogą wymagać jeszcze poprawek, ale mamy nadzieję, że edytor się Wam spodoba!',
	'wikia-visualeditor-wikitext-warning' => 'Używasz teraz VisualEditora – wikitekst tutaj nie działa. Wybierz „Edytor źródłowy”, aby zacząć edytowanie w trybie źródłowym.',
	'wikia-visualeditor-aliennode-tooltip' => 'Niestety, na razie ten element może być zmodyfikowany tylko w trybie edycji kodu źródłowego.',
	'wikia-visualeditor-dialog-transclusion-title' => 'Edytuj',
	'wikia-visualeditor-dialog-transclusion-filter' => 'Szukaj konkretnego pola lub wartości',
	'wikia-visualeditor-dialog-transclusion-zerostate' => 'Ten szablon nie ma pól do edycji. Zrób zmiany do szablonu na jego stronie.',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Szablon',
	'wikia-visualeditor-savedialog-label-save' => 'Publikuj',
	'wikia-visualeditor-savedialog-label-restore' => 'Przywróć stronę',
	'wikia-visualeditor-toolbar-savedialog' => 'Publikuj',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Edytor źródłowy',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Edytor źródłowy',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Zastosuj',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitekst',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Pomoc z formatowaniem',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'Aby dodawać zdjęcia i filmy, musisz się zalogować.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'Ta wiki pozwala dodawać tylko licencjonowane treści z <a href="http://video.wikia.com" target="_blank">biblioteki filmów Wikia</a>. Przejdź do <a href="http://video.wikia.com" target="_blank">video.wikia.com</a>, aby wyszukać film.',
	'wikia-visualeditor-notification-media-query-failed' => 'Niestety, nie udało się znaleźć obsługiwanego formatu zdjęć lub filmów dla tego adresu URL.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Brak dostępu',
	'wikia-visualeditor-notification-video-preview-not-available' => 'Przepraszamy, ten film nie jest dostępny do podglądu.',
	'wikia-visualeditor-loading' => 'Ładowanie VisualEditora...',
	'wikia-visualeditor-dialog-orientation-headline' => 'Witaj',
	'wikia-visualeditor-dialog-orientation-text' => 'Ta strona jest tworzona, edytowana i utrzymywana przez ludzi takich jak Ty. Rozpocznij edytowanie już dziś!',
	'wikia-visualeditor-dialog-orientation-start-button' => 'Rozpocznij edycję',
	'wikia-visualeditor-dialog-meta-languages-readonlynote' => 'To jest lista stron w innych językach połączonych z tą. Na chwilę obecną można ją edytować wyłącznie w trybie źródłowym.',
	'wikia-visualeditor-dialog-transclusion-no-template-description' => 'Edytujesz szablon „$1”.',
	'wikia-visualeditor-dialog-map-insert-title' => 'Wstaw mapę',
	'wikia-visualeditor-save-error-generic' => 'Wystąpił błąd podczas zapisywania danych do serwera.',
	'wikia-visualeditor-dialogbutton-wikiasourcemode' => 'Tryb źródłowy',
	'wikia-visualeditor-dialog-done-button' => 'Zrobione',
	'wikia-visualeditor-dialog-transclusion-get-info' => 'Zobacz informacje o szablonie „$1”',
	'wikia-visualeditor-dialog-transclusion-preview-button' => 'Zaktualizuj podgląd',
	'wikia-visualeditor-context-transclusion-description' => 'Edytuj',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => 'Szukaj szablonu po jego nazwie lub artykule',
	'wikia-visualeditor-wikiatemplateoptionwidget-appears' => 'Użyty $1 {{PLURAL:$1|raz|razy}}',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'Bądź pierwszym, który go użyje',
	'wikia-visualeditor-dialog-template-insert-title' => 'Wstaw szablon',
	'wikia-visualeditor-dialog-preference-headline' => 'Witaj!',
	'wikia-visualeditor-dialog-preference-text' => 'Nasz edytor właśnie został ulepszony i zawiera lepsze narzędzia pozwalające Ci tworzyć bogatsze artykuły.',
	'wikia-visualeditor-dialog-preference-link-help' => 'Dowiedz się więcej o nowych funkcjach',
	'wikia-visualeditor-dialog-preference-link-preferences' => 'Dostosuj swoje preferencje edytora',
	'wikia-visualeditor-dialog-preference-start-button' => 'OK',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'منښتليک',
);

/** Portuguese (português)
 * @author SandroHc
 * @author Vitorvicentevalente
 */
$messages['pt'] = array(
	'wikia-visualeditor-preference-enable' => 'Activar Editor Visual (beta)',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Multimédia',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Mapa',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Crie um mapa',
	'wikia-visualeditor-dialog-wikiamapinsert-headline' => 'Selecione um mapa existente ou crie um mapa para inseri-lo. <a href="$1" target="_blank">Aprenda mais.</a>',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => 'Nenhum mapa foi criado ainda',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-text' => 'Colabore com a comunidade colocando pontos turísticos no mapa. <a href="$1" target="_blank">Aprenda mais.</a>',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Adicionar média',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Título',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Licença',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Remover este item',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Larga novas imagens para enviar',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Carregar',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Ler mais',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Larga os ficheiros aqui',
	'wikia-visualeditor-dialog-transclusion-title' => 'Editar',
	'wikia-visualeditor-dialog-transclusion-filter' => 'Procurar por um campo ou valor particular',
	'wikia-visualeditor-notification-video-preview-not-available' => 'Lamentamos, mas este vídeo não está disponível para visualização.',
	'wikia-visualeditor-loading' => 'A carregar o Editor Visual...',
	'wikia-visualeditor-dialog-orientation-headline' => 'Bem-vindo',
	'wikia-visualeditor-dialog-orientation-text' => 'Essa página foi criada, editada e mantida por pessoas como você. Faça a sua primeira contribuição hoje.',
	'wikia-visualeditor-dialog-orientation-start-button' => 'Comece a editar',
	'wikia-visualeditor-dialog-meta-languages-readonlynote' => 'Esta é uma lista de páginas em outros idiomas que estão interligadas com esta. No momento, ela só pode editada no modo fonte.',
	'wikia-visualeditor-dialog-transclusion-no-template-description' => 'Está a editar a predefinição "$1".',
	'wikia-visualeditor-dialog-done-button' => 'Feito',
	'wikia-visualeditor-dialog-transclusion-get-info' => 'Obter informações sobre a predefinição "$1"',
	'wikia-visualeditor-dialog-transclusion-preview-button' => 'Atualizar pré-visualização',
	'wikia-visualeditor-context-transclusion-description' => 'Editar',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => 'Procurar por uma predefinição por nome ou artigo',
	'wikia-visualeditor-wikiatemplateoptionwidget-appears' => 'Aparece $1 {{PLURAL:$1|vez|vezes}}',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'Seja o primeiro a usar isto',
	'wikia-visualeditor-dialog-template-insert-title' => 'Inserir predefinição',
	'wikia-visualeditor-dialog-preference-headline' => 'Saudações!',
	'wikia-visualeditor-dialog-preference-text' => 'O nosso editor acaba de ser atualizado, oferecendo ferramentas melhoradas para ajudá-lo na criação de artigos.',
	'wikia-visualeditor-dialog-preference-link-help' => 'Leia sobre as nossas novas funções',
	'wikia-visualeditor-dialog-preference-link-preferences' => 'Controle as preferências do seu editor',
	'wikia-visualeditor-dialog-preference-start-button' => 'OK',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Caio1478
 * @author HenriqueCrang
 * @author Jefersonmoraes
 * @author TheGabrielZaum
 */
$messages['pt-br'] = array(
	'wikia-visualeditor-preference-enable' => 'Habilitar Editor Visual beta',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Mídia',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Mapa',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Crie um mapa',
	'wikia-visualeditor-dialog-wikiamapinsert-headline' => 'Selecione um mapa existente ou crie um mapa para inseri-lo. <a href="$1" target="_blank">Aprenda mais.</a>',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => 'Nenhum mapa foi criado ainda',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-text' => 'Colabore com a comunidade colocando pontos turísticos no mapa. <a href="$1" target="_blank">Aprenda mais.</a>',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Adicionar Mídia',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Título',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Licença',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Remover este ítem',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Adicionar novas imagens para esta wikia', # Fuzzy
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Carregar',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Opa! Essa imagem é muito grande. $1MB é o máximo que podemos aceitar, capitão!',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Opa! Nós só aceitamos $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Erro ao carregar arquivo',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Procure por algo, ou digite a URL',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Pré-visualização em breve!',
	'wikia-visualeditor-help-label' => 'Problemas conhecidos',
	'wikia-visualeditor-help-link' => 'Help:VisualEditor',
	'wikia-visualeditor-beta-warning' => 'Esta é a integração beta da Wikia para o Editor Visual. Existem algumas coisas para arrumar, mas esperamos que você o ame!',
	'wikia-visualeditor-wikitext-warning' => 'Você está utilizando o Editor Visual beta - wikitexto não funciona aqui. Selecione "código-fonte" no menu \'Mais\' para usar wikitexto.',
	'wikia-visualeditor-aliennode-tooltip' => 'Desculpe, este elemento só pode ser editado no Editor Clássico por enquanto.',
	'wikia-visualeditor-dialog-transclusion-title' => 'Predefinição',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Predefinição',
	'wikia-visualeditor-savedialog-label-save' => 'Publicar',
	'wikia-visualeditor-savedialog-label-restore' => 'Restaurar página',
	'wikia-visualeditor-toolbar-savedialog' => 'Publicar',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Editor Fonte',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Editor Fonte',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Aplicar mudanças',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitext',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Ajuda de formatação',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'Você precisa estar logado para adicionar imagens e vídeos.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'Esta wiki permite apenas conteúdo licenciado da <a href="http://video.wikia.com" target="_blank">Biblioteca de Vídeos da Wikia</a> para ser adicionado. Por favor acesse <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> para encontrar vídeos.',
	'wikia-visualeditor-notification-media-query-failed' => 'Desculpe, não conseguimos encontrar uma imagem ou vídeo suportados nesse URL.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Permissão negada',
	'wikia-visualeditor-dialog-orientation-headline' => 'Bem-vindo',
	'wikia-visualeditor-dialog-orientation-text' => 'Essa página foi criada, editada e mantida por pessoas como você. Faça a sua primeira contribuição hoje.',
	'wikia-visualeditor-dialog-orientation-start-button' => 'Comece a editar',
	'wikia-visualeditor-dialog-meta-languages-readonlynote' => 'Esta é uma lista de páginas em outros idiomas que estão interligadas com esta. No momento, ela só pode editada no modo fonte.',
	'wikia-visualeditor-dialog-transclusion-no-template-description' => 'Você está editando a predefinição "$1".',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Titlu',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Licență',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Elimină acest element',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Încarcă',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Eroare la încărcarea fișierului',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Căutați ceva sau introduceți o adresă URL',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Previzualizare în curând!',
	'wikia-visualeditor-help-label' => 'Probleme cunoscute',
	'wikia-visualeditor-dialog-transclusion-title' => 'Format',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Format',
	'wikia-visualeditor-savedialog-label-save' => 'Publică',
	'wikia-visualeditor-savedialog-label-restore' => 'Restaurează pagina',
	'wikia-visualeditor-toolbar-savedialog' => 'Publică',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Editor de cod sursă',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Editor de cod sursă',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Aplică modificările',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Ajutor pentru formatare',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'Trebuie să fiți autentificat pentru a adăuga imagini şi clipuri video.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Permisiune refuzată',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'wikia-visualeditor-preference-enable' => "Abbilite 'a bete de VisualEditor",
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => "Aggiunge 'u media",
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => "Aggiunge 'u media",
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Titole',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Licenze',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Live sta vôsce',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Lasse le immaggine da carecà',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Careche',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => "Pizze! St'immaggine jè troppe gruèsse. $1MB jè 'u massime ca putime tenè, 'u mestre!",
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Pizze! Nu supoortame sulamende $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => "Errore carecanne 'u file",
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => "Scacchie quaccheccose, o mitte 'na URL",
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Andeprime ste arrive!',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => 'Pe piacere vèje sus a le regole de le immaggine de {{SITENAME}} e le [http://www.wikia.com/Terms_of_Use termine de ause] de Uicchia quanne sckaffe video nuève e careche fote nuève.',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Ligge de cchiù',
	'wikia-visualeditor-dialog-drop-target-callout' => "Lasse 'u file tune aqquà",
	'wikia-visualeditor-help-label' => 'Probbleme canusciute',
	'wikia-visualeditor-help-link' => 'Help:VisualEditor',
	'wikia-visualeditor-beta-warning' => "Quiste jè 'u 'ndegratore de uicchia beta de VisualEditor. Stonne angore de le stuèzze grezze, ma nuje le vulime aggiustà!",
	'wikia-visualeditor-wikitext-warning' => "Ste ause VisualEditor beta - uicchiteste non ge funzione aqquà. Scacchie 'modalità sorgende' da 'u menù 'De cchiù' pe ausà 'u uicchiteste.",
	'wikia-visualeditor-aliennode-tooltip' => "Ne despiace, stu elemende pò essere sulamende cangiate cu 'u Cangiatore Classeche pe mò.",
	'wikia-visualeditor-dialog-transclusion-title' => 'Template',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Template',
	'wikia-visualeditor-savedialog-label-save' => 'Pubbleche',
	'wikia-visualeditor-savedialog-label-restore' => "Repristine 'a pàgene",
	'wikia-visualeditor-toolbar-savedialog' => 'Pubbleche',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => "Cangiatore d'a sorgende",
	'wikia-visualeditor-dialog-wikiasourcemode-title' => "Cangiatore d'a sorgende",
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Appleche le cangiaminde',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Uicchiteste',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => "Stoche a formatte l'aijute",
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'Tu a trasè pe aggiungere immagggine e video.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'Sta uicchi permette de agggiungere sulamende condenute licenziate da \'a <a href="http://video.wikia.com" target="_blank">Libbrerie Video de Uicchia</a>. Pe paicere vèje a <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> pe cercà le video.',
	'wikia-visualeditor-notification-media-query-failed' => "Ne dispiace, non ge putime acchià 'n'immaggine supportate o 'nu video a sta URL.",
	'wikia-visualeditor-notification-media-permission-denied' => 'Permesse vietate',
	'wikia-visualeditor-notification-video-preview-not-available' => "Ne despiace, stu video non g'è disponibbile pe l'andeprime.",
	'wikia-visualeditor-loading' => 'Stoche a careche VisualEditor...',
);

/** Russian (русский)
 * @author Okras
 */
$messages['ru'] = array(
	'wikia-visualeditor-preference-enable' => 'Включить бета-версию Визуального редактора',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Мультимедиа',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Карта',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Создать карту',
	'wikia-visualeditor-dialog-wikiamapinsert-headline' => 'Выберите существующую карту или создайте карту, чтобы добавить её.  <a href="$1" target="_blank">Узнать больше.</a>',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => 'Ещё нет ни одной созданной карты',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-text' => 'Сотрудничайте с участниками, чтобы добавить интересные точки на карты. <a href="$1" target="_blank">Узнать больше.</a>',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Добавить медиа-файлы',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Заголовок',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Лицензия',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Удалить этот элемент',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Перетащите файлы для загрузки',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Загрузить',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Ой! Это изображение слишком большое. $1 МБ — максимум, что мы можем принять, капитан!',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Ой! Мы поддерживаем только $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Ошибка загрузки файла',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Введите фразу для поиска или URL-адрес',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Предварительный просмотр скоро появится!',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => 'Пожалуйста, придерживайтесь правил загрузки изображений сайта {{SITENAME}} и [http://ru.community.wikia.com/wiki/Викия:Условия_использования условия использования Викии] при вставке новых видео и загрузке новых фотографий.',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Читать подробнее',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Перетащите ваш файл сюда',
	'wikia-visualeditor-help-label' => 'Известные проблемы',
	'wikia-visualeditor-help-link' => 'Help:VisualEditor',
	'wikia-visualeditor-beta-warning' => 'Это бета-версия интеграции Визуального редактора в Викию. В нём есть ещё некоторые шероховатости, но мы надеемся, что вы его полюбите!',
	'wikia-visualeditor-wikitext-warning' => 'Вы используете бета-версию Визуального редактора — вики-разметка здесь не работает. Выберите «Режим исходного кода» из меню «Больше» использовать вики-разметку.',
	'wikia-visualeditor-aliennode-tooltip' => 'К сожалению, в настоящее время этот элемент можно изменять только в режиме правки исходного текста.',
	'wikia-visualeditor-dialog-transclusion-title' => 'Править',
	'wikia-visualeditor-dialog-transclusion-filter' => 'Поиск строки шаблона и значения в ней',
	'wikia-visualeditor-dialog-transclusion-zerostate' => 'У этого шаблона нет полей для редактирования. Внесите изменения в шаблон на его странице.',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Шаблон',
	'wikia-visualeditor-savedialog-label-save' => 'Опубликовать',
	'wikia-visualeditor-savedialog-label-restore' => 'Восстановить страницу',
	'wikia-visualeditor-toolbar-savedialog' => 'Опубликовать',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Редактор исходного кода',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Редактор исходного кода',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Применить изменения',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitext',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Помощь по форматированию',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'Вы должны авторизоваться для добавления изображений и видео.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'В эту вики можно добавлять только лицензированный контент из <a href="http://video.wikia.com" target="_blank">Библиотеки видео Wikia</a> для добавления. Пожалуйста, перейдите на <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> для поиска видео.',
	'wikia-visualeditor-notification-media-query-failed' => 'К сожалению, мы не смогли найти поддерживаемые изображения или видео по этому URL-адресу.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Доступ запрещён',
	'wikia-visualeditor-notification-video-preview-not-available' => 'К сожалению, это видео не доступно для предварительного просмотра.',
	'wikia-visualeditor-loading' => 'Загрузка Визуального редактора…',
	'wikia-visualeditor-dialog-orientation-headline' => 'Добро пожаловать',
	'wikia-visualeditor-dialog-orientation-text' => 'Эта страница была создана, редактируется и поддерживается такими же участниками, как и вы. Сделайте свою первую правку сегодня.',
	'wikia-visualeditor-dialog-orientation-start-button' => 'Начать редактирование',
	'wikia-visualeditor-dialog-meta-languages-readonlynote' => 'Это список страниц на других языках, которые связаны с этой страницей. В данный момент, эти ссылки могут быть отредактированы только в режиме Исходного кода.',
	'wikia-visualeditor-dialog-transclusion-no-template-description' => 'Вы редактируете шаблон «$1».',
	'wikia-visualeditor-dialog-map-insert-title' => 'Вставить карту',
	'wikia-visualeditor-save-error-generic' => 'Ошибка при сохранении данных на сервер.',
	'wikia-visualeditor-dialogbutton-wikiasourcemode' => 'Источник',
	'wikia-visualeditor-dialog-done-button' => 'Готово',
	'wikia-visualeditor-dialog-transclusion-get-info' => 'Информация о шаблоне "$1"',
	'wikia-visualeditor-dialog-transclusion-preview-button' => 'Обновить предпросмотр',
	'wikia-visualeditor-context-transclusion-description' => 'Править',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => 'Поиск шаблона по названию или статье',
	'wikia-visualeditor-wikiatemplateoptionwidget-appears' => 'Используется $1 {{PLURAL:$1|раз|раза|раз}}',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'Станьте первым, кто будет использовать этот шаблон',
	'wikia-visualeditor-dialog-template-insert-title' => 'Вставка шаблона',
	'wikia-visualeditor-dialog-preference-headline' => 'Приветствуем!',
	'wikia-visualeditor-dialog-preference-text' => 'Наш редактор получил обновления и предлагает расширенные инструменты для создания ещё более лучших статей.',
	'wikia-visualeditor-dialog-preference-link-help' => 'Прочитать о новых возможностях',
	'wikia-visualeditor-dialog-preference-link-preferences' => 'Настроить предпочтения в редакторе',
	'wikia-visualeditor-dialog-preference-start-button' => 'Попробовать!',
);

/** Sardinian (sardu)
 * @author L2212
 */
$messages['sc'] = array(
	'wikia-visualeditor-dialogbutton-wikiasourcemode' => 'Mitza',
);

/** Scots (Scots)
 * @author John Reid
 */
$messages['sco'] = array(
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Drap the eemages tae uplaid',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => "Please stick wi {{SITENAME}}'s eemage policie n Wikia's [http://www.wikia.com/Terms_of_Use terms o uiss] whan embeddin new videos n uplaidin new photæs.",
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Read mair',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Drap yer file here',
	'wikia-visualeditor-notification-video-preview-not-available' => 'Sairrie, this video isna available fer luikower.',
	'wikia-visualeditor-loading' => 'Laidin the VeesualEediter...',
);

/** Sinhala (සිංහල)
 * @author Sahan.ssw
 * @author Susith Chandira Gts
 */
$messages['si'] = array(
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'මාධ්‍යය',
	'wikia-visualeditor-context-transclusion-description' => 'සංස්කරණය',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Milicevic01
 */
$messages['sr-ec'] = array(
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Пошаљи',
	'wikia-visualeditor-help-link' => 'Help:VisualEditor',
	'wikia-visualeditor-dialog-transclusion-title' => 'Шаблон',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Шаблон',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Примени измене',
);

/** Swedish (svenska)
 * @author Jopparn
 * @author Lokal Profil
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'wikia-visualeditor-preference-enable' => 'Aktivera VisualEditor (beta)',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Media',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Karta',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Skapa en karta',
	'wikia-visualeditor-dialog-wikiamapinsert-headline' => 'Välj en existerande karta eller skapa en karta för att infoga den. <a href="$1" target="_blank">Läs mer.</a>',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => 'Inga kartor har skapats ännu',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-text' => 'Samarbeta med gemenskapen genom att visuellt sätter ut platser av intresse på kartor. <a href="$1" target="_blank">Läs mer.</a>',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Lägg till media',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Rubrik',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Licens',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Ta bort detta objekt',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Släpp bilder för att ladda upp',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Ladda upp',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Hoppsan! Bilden är för stor. Bildens storlek får inte överstiga $1MB.',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Hoppsan! Vi stöder bara $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Fel uppstod när filen laddades upp',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Sök efter någonting eller ange en webbadress',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Förhandsgranskning kommer snart!',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => 'Var god håll fast vid {{SITENAME}}s bildpolicy och Wikias [http://www.wikia.com/Terms_of_Use användarvillkor] när du bäddar in nya videoklipp och laddar upp nya foton.',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Läs mer',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Släpp din fil här',
	'wikia-visualeditor-help-label' => 'Kända problem',
	'wikia-visualeditor-help-link' => 'Help:VisualEditor',
	'wikia-visualeditor-beta-warning' => 'Detta är Wikias betaintegrering av VisualEditor. Den behöver finputsas, men vi hoppas att du gillar den!',
	'wikia-visualeditor-wikitext-warning' => "Du använder betafunktionen VisualEditor - wikitext visas inte här. Välj 'Källäge' från menyn 'Mer' för att använda wikitext.",
	'wikia-visualeditor-aliennode-tooltip' => 'Tyvärr, detta element kan endast för tillfället redigeras i den klassiska redigeraren.',
	'wikia-visualeditor-dialog-transclusion-title' => 'Mall',
	'wikia-visualeditor-dialog-transclusion-filter' => 'Sök efter ett visst fält eller värde',
	'wikia-visualeditor-dialog-transclusion-zerostate' => 'Denna mall har inte fält att redigera. Du får göra ändringar i den på mallens sida.',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Mall',
	'wikia-visualeditor-savedialog-label-save' => 'Publicera',
	'wikia-visualeditor-savedialog-label-restore' => 'Återställ sida',
	'wikia-visualeditor-toolbar-savedialog' => 'Publicera',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Källtextredigerare',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Källtextredigerare',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Verkställ ändringar',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitext',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Formateringshjälp',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'Du måste vara inloggad för att lägga till bilder och videor.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'Denna wiki tillåter endast att licensierat innehåll från <a href="http://video.wikia.com" target="_blank">Wikias videobibliotek</a> läggs till. Gå till <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> för att söka efter videor.',
	'wikia-visualeditor-notification-media-query-failed' => 'Tyvärr, vi kunde inte hitta en bild eller video som stöds på den webbadressen.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Tillstånd nekad',
	'wikia-visualeditor-notification-video-preview-not-available' => 'Tyvärr, detta videoklipp är inte tillgänglig för förhandsvisning.',
	'wikia-visualeditor-loading' => 'Läser in VisualEditor...',
	'wikia-visualeditor-dialog-orientation-headline' => 'Välkommen',
	'wikia-visualeditor-dialog-orientation-text' => 'Denna sida har skapats, redigerats och underhållits av människor precis som du. Gör ditt första bidrag idag.',
	'wikia-visualeditor-dialog-orientation-start-button' => 'Börja redigera',
	'wikia-visualeditor-dialog-meta-languages-readonlynote' => 'Detta är en lista med sidor på andra språk som är länkade till denna sida. För stunden kan den redigeras endast i källkodsläge.',
	'wikia-visualeditor-dialog-transclusion-no-template-description' => 'Du håller på att redigera mallen "$1".',
	'wikia-visualeditor-dialog-map-insert-title' => 'Infoga karta',
	'wikia-visualeditor-save-error-generic' => 'Fel vid sparande av data till servern.',
	'wikia-visualeditor-dialogbutton-wikiasourcemode' => 'Källa',
	'wikia-visualeditor-dialog-done-button' => 'Klar',
	'wikia-visualeditor-dialog-transclusion-get-info' => 'Hämta info om mallen "$1"',
	'wikia-visualeditor-dialog-transclusion-preview-button' => 'Uppdatera förhandsvisning',
	'wikia-visualeditor-context-transclusion-description' => 'Redigera',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => 'Sök på namn eller artikel efter en mall',
	'wikia-visualeditor-wikiatemplateoptionwidget-appears' => 'Används {{FORMATNUM:$1}} {{PLURAL:$1|gång|gånger}}',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'Bli den första som använder den',
	'wikia-visualeditor-dialog-template-insert-title' => 'Infoga mall',
	'wikia-visualeditor-dialog-preference-headline' => 'Hälsningar, Superfan!',
	'wikia-visualeditor-dialog-preference-text' => 'Vår redigerare blev precis uppgraderad och erbjuder förbättrade verktyg för att hjälpa dig skapa innehållsrika artiklar.',
	'wikia-visualeditor-dialog-preference-link-help' => 'Läs om nya funktioner',
	'wikia-visualeditor-dialog-preference-link-preferences' => 'Hantera dina redigeringsinställningar',
	'wikia-visualeditor-dialog-preference-start-button' => 'Jag förstår!',
);

/** Tamil (தமிழ்)
 * @author ElangoRamanujam
 * @author Hareesh Sivasubramanian
 * @author Jayarathina
 */
$messages['ta'] = array(
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'வரைபடம்',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'பதிவேற்ற படங்களை போடவும்',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'மேலும் படிக்க',
	'wikia-visualeditor-dialog-drop-target-callout' => 'தங்கள் கோப்பை இங்கு இடவும்',
	'wikia-visualeditor-notification-video-preview-not-available' => 'மன்னிக்கவும், இந்த நிகழ்படத்தின் முன்னோட்டத்தினை காட்ட இயலாது.',
	'wikia-visualeditor-context-transclusion-description' => 'தொகு',
);

/** Turkish (Türkçe)
 * @author Sayginer
 * @author Sucsuzz
 */
$messages['tr'] = array(
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Harita',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Harita oluştur',
	'wikia-visualeditor-dialog-transclusion-get-info' => '"$1" şablonu hakkında bilgi al',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'Bunu kullanan ilk kişi olun',
	'wikia-visualeditor-dialog-preference-link-help' => 'Yeni özellikler hakkında bilgi edinin',
	'wikia-visualeditor-dialog-preference-start-button' => 'Anladım!',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author Base
 * @author Mykola Swarnyk
 * @author Ua2004
 */
$messages['uk'] = array(
	'wikia-visualeditor-preference-enable' => 'Увімкнути бета-версію Візуального редактора',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Медіа',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Мапа',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Створити мапу',
	'wikia-visualeditor-dialog-wikiamapinsert-headline' => 'Виберіть існуючу карту або створіть карту, щоби вставити її. <a href="$1" target="_blank"> Докладніше.</a>',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => 'Ще немає жодної створеної карти',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-text' => 'Співпрацюйте із учасниками, щоб додати цікаві точки на карти. <a href="$1" target="_blank">Докладніше.</a>',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Додати медіа',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Заголовок',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Ліцензія',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Видалити цей елемент',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Вкиньте зображення для завантаження',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Завантажити',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Йой! Зображення надто велике. $1МБ - це стільки, скільки ми можемо прийняти!',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Йой! Ми підтримуємо тільки $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Помилка завантаження файлу',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Введіть фразу для пошуку або URL-адресу',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Попередній перегляд найближчим часом!',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => 'Будь ласка, дотримуйтеся політики зображень сайту {{SITENAME}} і Вікія [http://www.wikia.com/Terms_of_Use умови використання] при вбудуванні нового відео та завантаженні нових фотографій.',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Читати далі',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Залиште свій файл тут',
	'wikia-visualeditor-help-label' => 'Відомі проблеми',
	'wikia-visualeditor-help-link' => 'Help:Візуальний редактор',
	'wikia-visualeditor-beta-warning' => 'Це бета інтеграція Візуального редактора у Вікію. Наявні деякі неполадки, але ми сподіваємося, що він вам сподобається!',
	'wikia-visualeditor-wikitext-warning' => "Ви використовуєте бета версію Візуального редактора - вікітекст тут не працює. Виберіть пункт \"Режим коду“ із меню 'Більше' для використання вікітексту.",
	'wikia-visualeditor-aliennode-tooltip' => 'Вибачте, цей елемент наразі можна редагувати лише у режимі класичного редактора.',
	'wikia-visualeditor-dialog-transclusion-title' => 'Шаблон',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Шаблон',
	'wikia-visualeditor-savedialog-label-save' => 'Опублікувати',
	'wikia-visualeditor-savedialog-label-restore' => 'Відновити сторінку',
	'wikia-visualeditor-toolbar-savedialog' => 'Опублікувати',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Редактор вихідного коду',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Редактор вихідного коду',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Застосувати зміни',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:вікітекст',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Довідка з форматування',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'Ви повинні увійти в систему, щоб додати зображення та відеозаписи.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'Ця вікі дозволяє додавати лише ліцензійне відео з <a href="http://video.wikia.com" target="_blank">відеотеки Вікія</a>. Відвідайте <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> для пошуку відео.',
	'wikia-visualeditor-notification-media-query-failed' => 'На жаль, ми не могли знайти підтримуване зображення або відео на цю URL.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Доступ заборонено',
	'wikia-visualeditor-notification-video-preview-not-available' => 'Вибачте, це відео недоступне для перегляду.',
	'wikia-visualeditor-loading' => 'Завантаження VisualEditor...',
	'wikia-visualeditor-dialog-orientation-headline' => 'Ласкаво просимо!',
	'wikia-visualeditor-dialog-orientation-text' => 'Ця сторінка створена, відредагована та підтримується такими самими людьми, як ви. Зробіть свій перший внесок сьогодні.',
	'wikia-visualeditor-dialog-orientation-start-button' => 'Почати редагування',
	'wikia-visualeditor-dialog-meta-languages-readonlynote' => "Це список пов'язаних сторінок іншими мовами; редагувати його наразі можна лише у режимі вихідного тексту або у Вікіданих.",
	'wikia-visualeditor-dialog-transclusion-no-template-description' => 'Ви редагуєте шаблон «$1».',
	'wikia-visualeditor-dialog-map-insert-title' => 'Вставити мапу',
	'wikia-visualeditor-save-error-generic' => 'Помилка при збереженні даних на сервер.',
	'wikia-visualeditor-dialogbutton-wikiasourcemode' => 'Джерело',
);

/** vèneto (vèneto)
 * @author GatoSelvadego
 */
$messages['vec'] = array(
	'wikia-visualeditor-preference-enable' => 'Abiłita VisualEditor (beta)',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Xonta Media',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Xonta Media',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Tìtoło',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Licensa',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Cava sto ogeto',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Xonta nove imaxeni a sta wikia', # Fuzzy
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Carga',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Oops! Sta imaxene ła xe masa granda. $1MB xe pì de chel che se pol cargar!',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Oops! Suportemo soło che $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => "Erore inte'l cargemento del file",
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Serca calcosa, o inserisi un URL',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => "Presto sarà disponibiłe anca l'anteprima!",
	'wikia-visualeditor-help-label' => 'Problemi conosui',
	'wikia-visualeditor-help-link' => 'Help:VisualEditor',
	'wikia-visualeditor-beta-warning' => "Cuesta ła xe l'integrasion beta par Wikia de VisualEditor. Ghe xe ncora calche problema, ma speremo che ła te piaxa!",
	'wikia-visualeditor-wikitext-warning' => "Te si drio doparar el VisualEditor beta - el wikitesto no'l funsiona cuà. Sełesiona 'Modałità sorxente' dal menù 'Altro' par doparar el wikitesto.",
	'wikia-visualeditor-aliennode-tooltip' => "Scuxa, sto elemento el pol èsar canbià soło che co'l editor clasego, par deso.",
	'wikia-visualeditor-dialog-transclusion-title' => 'Modèl',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Modèl',
	'wikia-visualeditor-savedialog-label-save' => 'Publica',
	'wikia-visualeditor-savedialog-label-restore' => 'Ripristina pàjina',
	'wikia-visualeditor-toolbar-savedialog' => 'Pùblica',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Editor del sorxente',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Editor del sorxente',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Aplica canbiamenti',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitext',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Ajuto par ła formatasion',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'Te ghe da èsar logà par xontar imaxeni e video.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'Sta wiki ła permete soło che contegùi licensia da <a href="http://video.wikia.com" target="_blank">Wikia Video Library</a>. Par piasere va so <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> par sercar video.',
	'wikia-visualeditor-notification-media-query-failed' => 'Scuxa, no riusimo catar na imaxine o un video suportai a chel URL.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Permeso negà',
);

/** Veps (vepsän kel’)
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'wikia-visualeditor-preference-enable' => 'Kävutada VisualEditor (beta)',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Ližata medijad',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Ližata Maedijad',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Pälkirjutez',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Licenzii',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Čuta poiš nece kalu',
);

/** Vietnamese (Tiếng Việt)
 * @author Baonguyen21022003
 * @author Rémy Lee
 */
$messages['vi'] = array(
	'wikia-visualeditor-preference-enable' => 'Bật giao diện beta',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'Phương tiện',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => 'Bản đồ',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => 'Tạo bản đồ',
	'wikia-visualeditor-dialog-wikiamapinsert-headline' => 'Chọn một bản đồ đã có sẵn hoặc tạo một bản đồ để chèn vào. <a href="$1" target="_blank">Tìm hiểu thêm.</a>',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => 'Chưa có bản đồ nào được tạo',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-text' => 'Cộng tác với cộng đồng bằng cách trực quan ghim những địa điểm ưa thích trên bản đồ. <a href="$1" target="_blank">Tìm hiểu thêm.</a>',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => 'Thêm phương tiện',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => 'Tiêu đề',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => 'Giấy phép',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => 'Dời bỏ mục này',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => 'Thả hình ảnh vào để tải lên',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => 'Tải lên',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => 'Rất tiếc! Hình ảnh này quá lớn. $1 MB là kích cỡ giới hạn mà chúng tôi có thể nhận!',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => 'Rất tiếc! Chúng tôi chỉ hỗ trợ $1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => 'Lỗi tải lên tệp',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => 'Tìm kiếm cái gì đó, hoặc nhập một URL',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => 'Xem trước sẽ được ra mắt sớm!',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => 'Xin vui lòng tuân theo quy định về hình ảnh của {{SITENAME}} và [http://congdong.wikia.com/wiki/Điều_khoản_sử_dụng điều khoản sử dụng] của Wikia khi nhúng đoạn phim và tải lên hình ảnh mới.',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Đọc nhiều hơn',
	'wikia-visualeditor-dialog-drop-target-callout' => 'Thả tệp của bạn ở đây',
	'wikia-visualeditor-help-label' => 'Những vấn đề đã biết',
	'wikia-visualeditor-help-link' => 'Help:Soạn thảo trực quan',
	'wikia-visualeditor-beta-warning' => 'Đây là phiên bản Soạn thảo trực quan beta tích hợp. Có vẻ hơi thô, nhưng chúng tôi hi vọng bạn thích nó!',
	'wikia-visualeditor-wikitext-warning' => "Bạn đang sử dụng phiên bản beta Soạn thảo trực quan - mã wiki không hoạt động ở đây. Chọn 'Chế độ mã nguồn' từ trình đơn 'Thêm' để sử dụng mã wiki.",
	'wikia-visualeditor-aliennode-tooltip' => 'Rất tiếc, hiện nay chỉ có thể sửa đổi phần tử này trong chế độ mã nguồn.',
	'wikia-visualeditor-dialog-transclusion-title' => 'Soạn thảo',
	'wikia-visualeditor-dialog-transclusion-filter' => 'Tìm kiếm trường hoặc giá trị cụ thể',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => 'Bản mẫu',
	'wikia-visualeditor-savedialog-label-save' => 'Xuất bản',
	'wikia-visualeditor-savedialog-label-restore' => 'Phục hồi trang',
	'wikia-visualeditor-toolbar-savedialog' => 'Xuất bản',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => 'Sửa đổi mã nguồn',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => 'Sửa đổi mã nguồn',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => 'Áp dụng các thay đổi',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Mã wiki',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => 'Trợ giúp định dạng',
	'wikia-visualeditor-notification-media-must-be-logged-in' => 'Bạn phải đăng nhập để thêm hình ảnh và đoạn phim.',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => 'Wiki này chỉ cho phép lấy nội dung đã được cấp phép từ <a href="http://video.wikia.com" target="_blank">Thư viện Đoạn phim Wikia</a>. Xin vui lòng đi đến <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> để tìm kiếm đoạn phim.',
	'wikia-visualeditor-notification-media-query-failed' => 'Xin lỗi, chúng tôi không thể tìm thấy hình ảnh hoặc đoạn phim được hỗ trợ tại URL đó.',
	'wikia-visualeditor-notification-media-permission-denied' => 'Cho phép bị từ chối',
	'wikia-visualeditor-notification-video-preview-not-available' => 'Xin lỗi, đoạn phim này không có sẵn để xem trước.',
	'wikia-visualeditor-loading' => 'Đang tải Soạn thảo trực quan...',
	'wikia-visualeditor-dialog-orientation-headline' => 'Hoan nghênh',
	'wikia-visualeditor-dialog-orientation-text' => 'Trang này đã được tạo lập, sửa đổi và bảo trì bởi những người như bạn. Hãy tạo ra đóng góp đầu tiên của bạn ngay ngày hôm nay nào.',
	'wikia-visualeditor-dialog-orientation-start-button' => 'Bắt đầu soạn thảo',
	'wikia-visualeditor-dialog-meta-languages-readonlynote' => 'Đây là danh sách các trang ở ngôn ngữ khác liên kết với trang này. Kể từ bây giờ, bạn chỉ có thể sửa đổi nó trong chế độ mã nguồn.',
	'wikia-visualeditor-dialog-transclusion-no-template-description' => 'Bạn đang sửa đổi bản mẫu "$1".',
	'wikia-visualeditor-dialog-map-insert-title' => 'Chèn bản đồ',
	'wikia-visualeditor-save-error-generic' => 'Lỗi lưu dữ liệu vào máy chủ.',
	'wikia-visualeditor-dialogbutton-wikiasourcemode' => 'Mã nguồn',
	'wikia-visualeditor-dialog-done-button' => 'Đã xong',
	'wikia-visualeditor-dialog-transclusion-get-info' => 'Nhận thông tin về bản mẫu "$1"',
	'wikia-visualeditor-dialog-transclusion-preview-button' => 'Cập nhật xem thử',
	'wikia-visualeditor-context-transclusion-description' => 'Soạn thảo',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => 'Tìm kiếm bản mẫu bằng tên hoặc bài viết',
	'wikia-visualeditor-wikiatemplateoptionwidget-appears' => 'Xuất hiện $1 lần',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => 'Hãy là người đầu tiên sử dụng nó',
	'wikia-visualeditor-dialog-template-insert-title' => 'Chèn bản mẫu',
	'wikia-visualeditor-dialog-preference-headline' => 'Chúc mừng!',
	'wikia-visualeditor-dialog-preference-text' => 'Trình soạn thảo của chúng tôi vừa mới nâng cấp, cung cấp những công cụ nâng cao để giúp bạn tạo ra nhiều bài viết phong phú hơn.',
	'wikia-visualeditor-dialog-preference-link-help' => 'Tìm hiểu về tính năng mới',
	'wikia-visualeditor-dialog-preference-link-preferences' => 'Quản lý tùy chọn soạn thảo của bạn',
	'wikia-visualeditor-dialog-preference-start-button' => 'Hiểu rồi!',
);

/** Volapük (Volapük)
 * @author Malafaya
 */
$messages['vo'] = array(
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => 'Reidön pluikosi',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => 'מעדיע',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Linforest
 * @author Liuxinyu970226
 * @author Stieizc
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'wikia-visualeditor-preference-enable' => '启用测试版可视化编辑器',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => '媒体',
	'wikia-visualeditor-dialogbutton-wikiamapinsert-tooltip' => '地图',
	'wikia-visualeditor-dialog-wikiamapinsert-create-button' => '创建地图',
	'wikia-visualeditor-dialog-wikiamapinsert-headline' => '选择已有的地图或者创建地图进行插入. <a href="$1" target="_blank">了解更多.</a>',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-headline' => '目前没有地图被创建',
	'wikia-visualeditor-dialog-wikiamapinsert-empty-text' => '通过在地图上的兴趣图钉与社群协作。<a href="$1" target="_blank">了解更多。</a>',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => '添加媒体',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => '标题',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => '授权',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => '删除此项目',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => '拖动图像上传',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => '上传',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => '哎呀！此图像太大了。我们最多允许上传$1MB大小的图像。',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => '哎呀！我们只支持$1',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => '上载文件时出错',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => '搜索东西，或者输入URL',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => '预览即将推出 ！',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => '在嵌入视频和上传新照片时请遵守{{SITENAME}}的图像方针和Wikia的[http://www.wikia.com/Terms_of_Use 使用条款]。',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => '了解更多',
	'wikia-visualeditor-dialog-drop-target-callout' => '将您的文件拖动至此',
	'wikia-visualeditor-help-label' => '已知的问题',
	'wikia-visualeditor-help-link' => 'Help:可视化编辑器',
	'wikia-visualeditor-beta-warning' => '这是Wikia测试版的可视化编辑器。这可能存在视觉问题，但我们祝愿您喜欢它！',
	'wikia-visualeditor-wikitext-warning' => '您在使用测试的可视化编辑器——wiki文本在此无法工作。在“更多”菜单中选择“源代码模式”以使用wiki文本。',
	'wikia-visualeditor-aliennode-tooltip' => '抱歉，此元素当前只能在传统编辑器编辑。',
	'wikia-visualeditor-dialog-transclusion-title' => '编辑',
	'wikia-visualeditor-dialog-transclusion-filter' => '查询特定区域或者变量',
	'wikia-visualeditor-dialog-transclusion-zerostate' => '此模板并没有要编辑的字段。对其页面上的模板进行更改。',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => '模板',
	'wikia-visualeditor-savedialog-label-save' => '发布',
	'wikia-visualeditor-savedialog-label-restore' => '恢复页面',
	'wikia-visualeditor-toolbar-savedialog' => '发布',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => '源代码编辑器',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => '源代码编辑器',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => '应用更改',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitext',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => '格式帮助',
	'wikia-visualeditor-notification-media-must-be-logged-in' => '你必须登录才能添加图像和视频。',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => '此wiki只允许添加来自<a href="http://video.wikia.com" target="_blank">Wikia视频库</a>的内容。请进入<a href="http://video.wikia.com" target="_blank">video.wikia.com</a>搜索视频。',
	'wikia-visualeditor-notification-media-query-failed' => '抱歉，我们无法在此找到支持的图像或视频。',
	'wikia-visualeditor-notification-media-permission-denied' => '权限被拒绝',
	'wikia-visualeditor-notification-video-preview-not-available' => '抱歉，目前视频预览不可用。',
	'wikia-visualeditor-loading' => '载入可视化编辑器中…',
	'wikia-visualeditor-dialog-orientation-headline' => '欢迎',
	'wikia-visualeditor-dialog-orientation-text' => '这个页面是由像您一样的用户创建、编辑和维护的。您也可以立刻作出贡献。',
	'wikia-visualeditor-dialog-orientation-start-button' => '开始编辑',
	'wikia-visualeditor-dialog-meta-languages-readonlynote' => '这是拥有其它语言链接的页面列表。当下只能使用源代码进行编辑。',
	'wikia-visualeditor-dialog-transclusion-no-template-description' => '您正在编辑\\"$1\\"个模版。',
	'wikia-visualeditor-dialog-map-insert-title' => '插入地图',
	'wikia-visualeditor-save-error-generic' => '保存数据至服务器时出错。',
	'wikia-visualeditor-dialogbutton-wikiasourcemode' => '来源',
	'wikia-visualeditor-dialog-done-button' => '完成',
	'wikia-visualeditor-dialog-transclusion-get-info' => '从模版"$1"获取信息',
	'wikia-visualeditor-dialog-transclusion-preview-button' => '预览更新',
	'wikia-visualeditor-context-transclusion-description' => '编辑',
	'wikia-visualeditor-dialog-wikiatemplateinsert-search' => '通过名称或者文章查询模版',
	'wikia-visualeditor-wikiatemplateoptionwidget-appears' => '显示$1{{PLURAL:$1|次|次}}',
	'wikia-visualeditor-wikiatemplateoptionwidget-be-first' => '首次使用此模版',
	'wikia-visualeditor-dialog-template-insert-title' => '插入模版',
	'wikia-visualeditor-dialog-preference-headline' => '您好！',
	'wikia-visualeditor-dialog-preference-text' => '我们已经对编辑器进行升级，为您提供更多强大的工具，帮助您创建更丰富的文章内容。',
	'wikia-visualeditor-dialog-preference-link-help' => '浏览新功能',
	'wikia-visualeditor-dialog-preference-link-preferences' => '管理编辑器参数',
	'wikia-visualeditor-dialog-preference-start-button' => '知道了',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Cwlin0416
 * @author Ffaarr
 * @author LNDDYL
 * @author Liuxinyu970226
 */
$messages['zh-hant'] = array(
	'wikia-visualeditor-preference-enable' => '啟用測試板 VisualEditor',
	'wikia-visualeditor-dialogbutton-wikiamediainsert-tooltip' => '媒體',
	'wikia-visualeditor-dialog-wikiamediainsert-insert-button' => '附加媒體',
	'wikia-visualeditor-dialog-wikiamediainsert-item-title-label' => '標題',
	'wikia-visualeditor-dialog-wikiamediainsert-item-license-label' => '授權',
	'wikia-visualeditor-dialog-wikiamediainsert-item-remove-button' => '移除此項目',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-label' => '拖曳圖片以上傳',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-button' => '上傳',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-size' => '哎呀！圖片檔案太大，最大允許上傳 $1 MB 大小的圖片。',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error-filetype' => '哎呀！我們僅支援 $1 格式',
	'wikia-visualeditor-dialog-wikiamediainsert-upload-error' => '上傳檔案時發生錯誤',
	'wikia-visualeditor-dialog-wikiamediainsert-search-input-placeholder' => '可搜尋任何東西或輸入 URL',
	'wikia-visualeditor-dialog-wikiamediainsert-preview-alert' => '預覽即將推出！',
	'wikia-visualeditor-dialog-wikiamediainsert-policy-message' => '嵌入新的影片或上傳新的圖片時，請遵守 {{SITENAME}} 的圖片管理政策與 Wikia 的 [http://www.wikia.com/Terms_of_Use 使用條款]。',
	'wikia-visualeditor-dialog-wikiamediainsert-read-more' => '閱讀更多',
	'wikia-visualeditor-dialog-drop-target-callout' => '拖放您的檔案至此處',
	'wikia-visualeditor-help-label' => '已知的問題',
	'wikia-visualeditor-help-link' => 'Help:VisualEditor',
	'wikia-visualeditor-beta-warning' => '此為 Wikia 的 VisualEditor Beta 版，目前還可能有一些小問題，但我們仍希望您能喜歡它！',
	'wikia-visualeditor-wikitext-warning' => "您正使用 Beta 版 VisualEditor，目前尚無法支援 WikiText。請於 '更多' 選單中選擇 '原始碼模式' 以編輯 WikiText。",
	'wikia-visualeditor-aliennode-tooltip' => '抱歉，此元素目前僅能透過傳統文字編輯器進行編輯。',
	'wikia-visualeditor-dialog-transclusion-title' => '編輯',
	'wikia-visualeditor-dialogbutton-transclusion-tooltip' => '模板',
	'wikia-visualeditor-savedialog-label-save' => '發佈',
	'wikia-visualeditor-savedialog-label-restore' => '還原頁面',
	'wikia-visualeditor-toolbar-savedialog' => '發佈',
	'wikia-visualeditor-dialogbutton-wikiasourcemode-tooltip' => '原始碼編輯器',
	'wikia-visualeditor-dialog-wikiasourcemode-title' => '原始碼編輯器',
	'wikia-visualeditor-dialog-wikiasourcemode-apply-button' => '套用變更',
	'wikia-visualeditor-dialog-wikiasourcemode-help-link' => 'Help:Wikitext',
	'wikia-visualeditor-dialog-wikiasourcemode-help-text' => '格式説明',
	'wikia-visualeditor-notification-media-must-be-logged-in' => '你必須登入才能附加圖片與影片。',
	'wikia-visualeditor-notification-media-only-premium-videos-allowed' => '此 Wiki 僅允許使用 <a href="http://video.wikia.com" target="_blank">Wikia 影片資料庫</a> 所授權的內容，請至 <a href="http://video.wikia.com" target="_blank">video.wikia.com</a> 搜尋您需要的影片。',
	'wikia-visualeditor-notification-media-query-failed' => '抱歉，我們無法從這個 URL 找到可用的圖片或影片。',
	'wikia-visualeditor-notification-media-permission-denied' => '權限不足',
	'wikia-visualeditor-notification-video-preview-not-available' => '抱歉，此影片目前不開放預覽。',
	'wikia-visualeditor-loading' => 'VisualEditor 讀取中...',
	'wikia-visualeditor-dialog-orientation-headline' => '歡迎',
	'wikia-visualeditor-dialog-orientation-text' => '這個頁面是由像您一樣的使用者建立、編輯和維護的。您也可以立刻作出貢獻。',
	'wikia-visualeditor-dialog-orientation-start-button' => '開始編輯',
	'wikia-visualeditor-dialog-transclusion-no-template-description' => '您正在編輯\\"$1\\"個模板。',
);
