<?php

namespace Wikia\Sass\Filter;

/**
 * Base64 filter handles encoding and embedding files in CSS stylesheet
 * for URLs marked to be processed that way.
 *
 * @author Inez Korczyński <korczynski@gmail.com>
 * @author Piotr Bablok <piotr.bablok@gmail.com>
 * @author Władysław Bodzek <wladek@wikia-inc.com>
 * @author Bartosz V. Bentkowski <v@wikia-inc.com>
 */
class Base64Filter extends Filter {

	protected $rootDir;

	public function __construct( $rootDir ) {
		$this->rootDir = $rootDir;
	}

	public function process( $contents ) {
		wfProfileIn(__METHOD__);

		$contents = preg_replace_callback("/([, ]url[^\n]*?\))([^\n]*?)(\s*\/\*\s*base64\s*\*\/)/is", [$this, 'processMatches'], $contents);

		wfProfileOut(__METHOD__);

		return $contents;
	}

	protected function processMatches($matches) {
		$fileName = $this->rootDir . trim(substr($matches[1], 4, -1), '\'"() ');

		$encoded = $this->encodeFile($fileName);
		if ($encoded !== false) {
			return " url({$encoded}){$matches[2]}";
		}
		else {
			throw new \Wikia\Sass\Exception("/* Base64 encoding failed: {$fileName} not found or not supported! */");
		}
	}

	protected function encodeFile( $fileName ) {
		wfProfileIn(__METHOD__);

		if (!file_exists($fileName)) {
			wfProfileOut(__METHOD__);
			return false;
		}

		$parts = explode('.', $fileName);
		$ext = end($parts);

		switch ($ext) {
			case 'gif':
			case 'png':
				$type = $ext;
				break;
			case 'jpg':
				$type = 'jpeg';
				break;
			case 'svg':
				$type = 'svg+xml;charset=utf-8'; // include charset
				break;
			// not supported image type provided
			default:
				wfProfileOut(__METHOD__);
				return false;
		}

		$content = file_get_contents($fileName);
		$encoded = base64_encode($content);

		wfProfileOut(__METHOD__);
		return "data:image/{$type};base64,{$encoded}";
	}

}
