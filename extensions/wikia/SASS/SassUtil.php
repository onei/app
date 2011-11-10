<?php
/**
 * @author Sean Colombo
 */

class SassUtil {
	
	const DEFAULT_OASIS_THEME = 'oasis';

	/**
	 * Gets theme settings from following places:
	 *  - theme designer ($wgOasisThemeSettings)
	 *  - theme chosen using usetheme URL param
	 */
	public static function getOasisSettings($forceOriginal = false) {
		global $wgOasisThemes, $wgContLang;
		wfProfileIn(__METHOD__);

		// Load the 5 deafult colors by theme here (eg: in case the wiki has an override but the user doesn't have overrides).
		static $oasisSettings = array();
		
		if (empty($oasisSettings)) {
			$themeSettings = new ThemeSettings();
			$settings = $themeSettings->getSettings();
	
			$oasisSettings["color-body"] = self::sanitizeColor($settings["color-body"]);
			$oasisSettings["color-page"] = self::sanitizeColor($settings["color-page"]);
			$oasisSettings["color-buttons"] = self::sanitizeColor($settings["color-buttons"]);
			$oasisSettings["color-links"] = self::sanitizeColor($settings["color-links"]);
			$oasisSettings["color-header"] = self::sanitizeColor($settings["color-header"]);
			$oasisSettings["background-image"] = wfReplaceImageServer($settings['background-image'], self::getCacheBuster());
			$oasisSettings["background-align"] = $settings["background-align"];
			$oasisSettings["background-tiled"] = $settings["background-tiled"];
			$oasisSettings["background-fixed"] = $settings["background-fixed"];
			$oasisSettings["page-opacity"] = $settings["page-opacity"];
			if (isset($settings["wordmark-font"]) && $settings["wordmark-font"] != "default") {
				$oasisSettings["wordmark-font"] = $settings["wordmark-font"];
			}
	
			// RTL
			if($wgContLang && $wgContLang->isRTL()){
				$oasisSettings['rtl'] = 'true';
			}
		}

		$dualMode = false;
		$overrideSettings = array();

		// Get dual mode colors
		if (!$forceOriginal) {
			$dualMode = SassColorProfile::getInstance()->isDualMode();
		}

		// theme override by Wikia.  The override is determined by original user setting
		// override should not carry over from other getOasisSettings requests, thus it is merged with static oasisSettings instead of saving into oasisSettings
		if($dualMode) {
			if(self::isThemeDark($oasisSettings)) {
				$overrideSettings['color-buttons'] = '#C4C4C4';
				$overrideSettings['color-links'] = '#70B8FF';
				$overrideSettings['color-page'] = '#3A3A3A';
			} else {
				$overrideSettings['color-buttons'] = '#006CB0';
				$overrideSettings['color-links'] = '#006CB0';
				$overrideSettings['color-page'] = '#FFFFFF';
			}
		}

		// Merge dual theme overrides with original settings
		$overrideSettings = array_merge($oasisSettings, $overrideSettings);

		// RT:70673
		foreach ($overrideSettings as $key => $val) {
			if(!empty($val)) {
				$overrideSettings[$key] = trim($val);
			}
		}

		wfDebug(__METHOD__ . ': ' . Wikia::json_encode($overrideSettings) . "\n");

		wfProfileOut(__METHOD__);
		
		return $overrideSettings;
	}

	/**
	 * Get default theme settings
	 */
	private static function getDefaultOasisSettings() {
		global $wgOasisThemes;
		return $wgOasisThemes[self::DEFAULT_OASIS_THEME];
	}

	/**
	 * Get cache buster value for current version of theme settings
	 */
	public static function getCacheBuster() {
		global $wgOasisThemeSettingsHistory;
		wfProfileIn(__METHOD__);
		static $cb = null;

		if (is_null($cb)) {
			$currentSettings = end($wgOasisThemeSettingsHistory);
			if (!empty($currentSettings['revision'])) {
				$cb = $currentSettings['revision'];
			}
			else {
				$cb = 1;
			}
		}

		wfProfileOut(__METHOD__);
		return $cb;
	}

	/**
	 * Get normalized color value (RT #74057)
	 */
	public static function sanitizeColor($color) {
		$color = trim(strtolower($color));
		return $color;
	}

	/**
	 * Returns an associative array of the parameters to pass to SASS.  These are based on the theme
	 * for the wiki and potentially user-specific overrides.
	 */
	public static function getSassParams(){
		wfProfileIn( __METHOD__ );

		$sassParams = http_build_query(self::getOasisSettings());

		wfProfileOut( __METHOD__ );
		return $sassParams;
	}

	/**
	 * Calculates whether currently used theme is light or dark
	 */
	public static function isThemeDark($oasisSettings = null) {
		wfProfileIn(__METHOD__);

		if (empty($oasisSettings)) {
			$oasisSettings = self::getOasisSettings();
			if(empty($oasisSettings)) {	// if it's still empty
				$oasisSettings = self::getDefaultOasisSettings();
			}
		}
		
		$backgroundColor = $oasisSettings['color-page'];

		// convert RGB to HSL
		list($hue, $saturation, $lightness) = self::rgb2hsl($backgroundColor);

		$isDark = ($lightness < 0.5);

		wfDebug(__METHOD__ . ': ' . ($isDark ? 'yes' : 'no') . "\n");

		wfProfileOut(__METHOD__);
		return $isDark;
	}
	
	/**
	 * Convert RGB colors array into HSL array
	 *
	 * @see http://blog.archive.jpsykes.com/211/rgb2hsl/index.html
	 *
	 * @param string RGB color in hex format (#474646)
	 * @return array HSL set
	 */
	private static function rgb2hsl($rgbhex){
		wfProfileIn(__METHOD__);

		// convert HEX color to rgb values
		// #474646 -> 71, 70, 70
		$rgb = str_split(substr($rgbhex, 1), 2);
		$rgb = array_map('hexdec', $rgb);

		$clrR = ($rgb[0] / 255);
		$clrG = ($rgb[1] / 255);
		$clrB = ($rgb[2] / 255);

		$clrMin = min($clrR, $clrG, $clrB);
		$clrMax = max($clrR, $clrG, $clrB);
		$deltaMax = $clrMax - $clrMin;

		$L = ($clrMax + $clrMin) / 2;

		if (0 == $deltaMax){
			$H = 0;
			$S = 0;
		}
		else{
			if (0.5 > $L){
				$S = $deltaMax / ($clrMax + $clrMin);
			}
			else{
				$S = $deltaMax / (2 - $clrMax - $clrMin);
			}
			$deltaR = ((($clrMax - $clrR) / 6) + ($deltaMax / 2)) / $deltaMax;
			$deltaG = ((($clrMax - $clrG) / 6) + ($deltaMax / 2)) / $deltaMax;
			$deltaB = ((($clrMax - $clrB) / 6) + ($deltaMax / 2)) / $deltaMax;
			if ($clrR == $clrMax){
				$H = $deltaB - $deltaG;
			}
			else if ($clrG == $clrMax){
				$H = (1 / 3) + $deltaR - $deltaB;
			}
			else if ($clrB == $clrMax){
				$H = (2 / 3) + $deltaG - $deltaR;
			}
			if (0 > $H) $H += 1;
			if (1 < $H) $H -= 1;
		}

		wfProfileOut(__METHOD__);
		return array($H, $S, $L);
	}

}

/**
 * SassColorProfile singleton
 * Keeps state of color profile to load later down the road
 * @author Hyun Lim
 */
class SassColorProfile {
	private $isDualMode = false;
	private static $instance = null;
	
	private function __construct() {
		$this->isDualMode = false;
	}
	
	public static function getInstance(){
		if(self::$instance == null){
			self::$instance = new SassColorProfile();
		}
		return self::$instance;
	}
	
	/**
	 * One way switch.  Once set to true, it cannot be set to false.
	 */
	public function setDualMode($dualMode) {
		if(!$this->isDualMode && $dualMode) {
			$this->isDualMode = true;
		}	
	}
	
	public function isDualMode() {
		return $this->isDualMode;
	}
	
}