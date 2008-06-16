<?php
class KarmaDataProvider {
	const JSON_URL = "http://www.slideshine.de/json/latestslideshow"; 
	private function __construct() {
	}
	public static function getInstance() {
		static $instance;
		if(is_null($instance)) {
			$instance = new KarmaDataProvider();
		} else {
		}
		return $instance;
	}
	public function getJsonData() {
		$url = self::JSON_URL;
		$json = @file_get_contents($url);
		$data=json_decode($json, true);
		return $data;
	}
}
?>
