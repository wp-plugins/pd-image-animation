<?php
require_once(dirname(__FILE__) . '/karma-data/KarmaDataProvider.php');
require_once(dirname(__FILE__) . '/karma-data/KarmaDataTranslator.php');
require_once(dirname(__FILE__) . '/karma-data/KarmaDataRenderer.php');
class PDImageAnimation {
	const OPTION_NAME = 'PDImageAnimationOptions';
	const UPDATE_NAME = 'pdimageanimation-submit';
	const PROP_TITLE = 'pdimageanimation-title';
	const PROP_MODE = 'pdimageanimation-mode';
	const PROP_LANG = 'pdimageanimation-lang';
	const MODE_IMAGE = 0;
	const MODE_ANIMATION = 1;
	const MODE_IMAGE_ANIMATION = 2;		
	public function __construct() {
	}
	function activate() {
		$this->get_admin_options();
	}
	function load() {
		register_sidebar_widget('PDImageAnimation', array(&$this, 'display_sidebar_widget'));
	}
	public function get_admin_options() {
		$options = array(
			'title'=>'',
			'mode'=>self::MODE_IMAGE_ANIMATION,
			'lang'=>KarmaDataTranslator::LANG_EN,
		);
		$opts = get_option(self::OPTION_NAME);
		if (!empty($opts)) {
			foreach ($opts as $key=>$value) {
				$options[$key] = $value;
			}
		}
		update_option(self::OPTION_NAME, $options);
		return $options;
	}
	public function display_sidebar_widget() {
		$options = get_option(self::OPTION_NAME);
		$title = $options['title'];
		$mode = $options['mode'];
		$lang = $options['lang'];
		$karma_data = KarmaDataProvider::getInstance()->getJsonData();
		$translator = new KarmaDataTranslator($lang);
		$renderer = new KarmaDataRenderer($translator, $mode);
		echo 
			'<h3 style="text-align: right; margin-bottom: 10px;">' . $title . '</h3>' . 
			'<div style="text-align: right;">' .
				$renderer->constructHtml($karma_data) .
			'</div>';
	}
	public function display_widget_control() {
		$options = $this->get_admin_options();
		$title = $options['title'];
		$translator = new KarmaDataTranslator($options['lang']);
		echo '
			<p>
				<label for="' . self::PROP_TITLE . '">
				' . $translator->loc('backend.fieldlabel.title') . ': 
				<input id="' . self::PROP_TITLE . '" name="' . self::PROP_TITLE . '" type="text" value="'.$title.'" />
				</label>
			</p>
		';
		echo '<input type="hidden" id="' . self::UPDATE_NAME . '" name="' . self::UPDATE_NAME . '" value="1" />';
	}
	public function display_admin_page() {
		$options = $this->get_admin_options();
		$translator = new KarmaDataTranslator($options['lang']);
		if ( $_POST[self::UPDATE_NAME] !== null ) {
			$options['title'] = $_POST[self::PROP_TITLE];
			$options['mode'] = $_POST[self::PROP_MODE];
			$options['lang'] = $_POST[self::PROP_LANG];
			$translator->setLanguage($options['lang']);
			echo '
			<div class="updated">
				<p><strong>' . $translator->loc('backend.updated') . '</strong></p>
				<!--
				Title: ' . $options['title'] . '<br />
				Mode: ' . $options['mode'] . '<br />
				Lang: ' . $options['lang'] . '<br />
				-->
			</div>
			';
			update_option(self::OPTION_NAME, $options);
		}
		$title = $options['title'];
		$mode = $options['mode'];
		$lang = $options['lang'];
		echo '
			<div class="wrap"> 
				<form name="form1" method="post" action="' . $_SERVER['REQUEST_URI'] . '">
				<h2>' . $translator->loc('backend.title') . '</h2> 
				<!-- title -->
				<p>
					<label for="' . self::PROP_TITLE . '">
					' . $translator->loc('backend.fieldlabel.title') . ':<br />
					<input id="' . self::PROP_TITLE . '" name="' . self::PROP_TITLE . '" type="text" value="'.$title.'" />
					</label>
				</p>
				<!-- mode -->
				<p><label for="' . self::PROP_MODE . '">
				' . $translator->loc('backend.fieldlabel.mode') . ': <br />
				<select id="' . self::PROP_MODE . '" name="' . self::PROP_MODE . '">
					' . $this->constructOption(self::MODE_IMAGE, $translator->loc('backend.fieldlabel.image-mode'), $mode) . '
					' . $this->constructOption(self::MODE_ANIMATION, $translator->loc('backend.fieldlabel.animation-mode'), $mode) . '
					' . $this->constructOption(self::MODE_IMAGE_ANIMATION, $translator->loc('backend.fieldlabel.image-animation-mode'), $mode) . '
				</select>
				</label></p>
				<!-- lang -->
				<p><label for="' . self::PROP_LANG . '">
				' . $translator->loc('backend.fieldlabel.language') . ':<br />
				<select id="' . self::PROP_LANG . '" name="' . self::PROP_LANG . '">
					' . $this->constructOption(KarmaDataTranslator::LANG_EN, $translator->loc('backend.fieldlabel.english'), $lang) . '
					' . $this->constructOption(KarmaDataTranslator::LANG_DE, $translator->loc('backend.fieldlabel.german'), $lang) . '
					' . $this->constructOption(KarmaDataTranslator::LANG_ES, $translator->loc('backend.fieldlabel.spanish'), $lang) . '
				</select>
				</label></p>
				<!-- update switch -->
				<input type="hidden" id="' . self::UPDATE_NAME . '" name="' . self::UPDATE_NAME . '" value="1" />				
				<p class="submit">
					<input type="submit" name="submit" value="' . $translator->loc('backend.save') . ' &raquo;" />
				</p>
				</form>
			</div>
		';
	}
	private function constructOption($value, $text, $mode) {
		$selected = ($mode == $value ? 'selected' : '');
		return '<option value="' . $value . '" ' . $selected . '>' . $text . '</option>';
	}
}
?>
