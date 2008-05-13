<?php
require_once(dirname(__FILE__) . '/KarmaDataProvider.php');
class PDImageAnimation {
	const LOCALE = 'en';
	const OPTION_NAME = 'PDImageAnimationOptions';
	const UPDATE_NAME = 'pdimageanimation-submit';
	const PROP_TITLE = 'pdimageanimation-title';
	private $_karma_data;
	public function __construct() {
		$this->_karma_data = new KarmaDataProvider(self::LOCALE);
	}
	function activate() {
		$this->get_admin_options();
	}
	function load() {
		register_sidebar_widget('PDImageAnimation', array(&$this, 'display_sidebar_widget'));
	}
	private function loc($key) {
		$en = array(
			'admin_page.updated' => 'Settings updated.',
			'admin_page.title' => 'PDImageAnimation Options',
			'admin_page.save' => 'Save',
			'frontend.title' => 'New Images'
		);
		$de = array(
			'admin_page.updated' => 'Einstellungen gespeichert.',
			'admin_page.title' => 'PDImageAnimation Einstellungen',
			'admin_page.save' => 'Speichern',
			'frontend.title' => 'Neue Bilder'
		);
		$locs = array(
			'en' => $en,
			'de' => $de,
		);
		return $locs[self::LOCALE][$key];
	}
	public function get_admin_options() {
		$options = array(
			'title'=>$this->loc('frontend.title'),
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
		echo 
			'<h3 style="text-align: right; margin-bottom: 10px;">' . $title . '</h3>' . 
			'<div style="text-align: right;">' .
			$this->_karma_data->getHtml($title) .
			'</div>';
	}
	public function display_widget_control() {
		$options = $this->get_admin_options();
		$title = $options['title'];
		echo '<p><label for="' . self::PROP_TITLE . '">Title: <input id="' . self::PROP_TITLE . '" name="' . self::PROP_TITLE . '" type="text" value="'.$title.'" /></label></p>';
		echo '<input type="hidden" id="' . self::UPDATE_NAME . '" name="' . self::UPDATE_NAME . '" value="1" />';
	}
	public function display_admin_page() {
		$options = $this->get_admin_options();
		if ( $_POST[self::UPDATE_NAME] !== null ) {
			$options['title'] = $_POST[self::PROP_TITLE];
			echo '
			<div class="updated">
				<p><strong>' . $this->loc('admin_page.updated') . '</strong></p>
			</div>
			';
			update_option(self::OPTION_NAME, $options);
		}
		$title = $options['title'];
		echo '
			<div class="wrap"> 
				<form name="form1" method="post" action="' . $_SERVER['REQUEST_URI'] . '">
				<h2>' . $this->loc('admin_page.title') . '</h2> 
				<p><label for="' . self::PROP_TITLE . '">Title:<br /><input id="' . self::PROP_TITLE . '" name="' . self::PROP_TITLE . '" type="text" value="'.$title.'" /></label></p>
				<input type="hidden" id="' . self::UPDATE_NAME . '" name="' . self::UPDATE_NAME . '" value="1" />				
				<p class="submit">
					<input type="submit" name="submit" value="' . $this->loc('admin_page.save') . ' &raquo;" />
				</p>
				</form>
			</div>
		';
	}
}
?>
