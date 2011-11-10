<?php
/*
 * This script generates sprites used in edit pages
 * Run like: sudo SERVER_ID=177 php minify.php --conf /usr/wikia/docroot/wiki.factory/LocalSettings.php --aconf /usr/wikia/docroot/wiki.factory/AdminSettings.php
 */

ini_set('include_path', dirname(__FILE__).'/../../../maintenance');
require_once('commandLine.inc');

//$dir = dirname(__FILE__);
//echo $dir ."\n";

$dir = "$IP/extensions/wikia/EditPageLayout";

$srv = new SpriteService(array(
	'name' => 'edit-page',
	'source' => "{$dir}/images/sprite-edit-page/",
	'sprite' => "{$dir}/images/sprite-edit-page.png",
	'scss' => "{$dir}/css/mixins/_sprite-edit-page.scss",
));

$srv->process(false);

SpriteService::newStandard(
	'page-layout-builder',
	"$IP/extensions/wikia/PageLayoutBuilder"
)->process(false);

/*
$dir = realpath( "$IP/extensions/wikia/EditPageLayout" );
$srv = new SpriteService(array(
	'name' => 'edit-page',
	'source' => $dir.'/images/sprite-edit-page/',
	'sprite' => $dir.'/images/sprite-edit-page.png',
	'scss' => $dir.'/css/_sprite-edit-page.scss',
));
$srv->process();

$dir = realpath( "$IP/extensions/wikia/PageLayoutBuilder" );
$srv = new SpriteService(array(
	'name' => 'page-layout-builder',
	'source' => $dir.'/images/sprite-page-layout-builder/',
	'sprite' => $dir.'/images/sprite-page-layout-builder.png',
	'scss' => $dir.'/css/_sprite-page-layout-builder.scss',
));
$srv->process();
*/
