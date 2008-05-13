<?php
class KarmaDataProvider {
	const JSON_URL = "http://www.slideshine.de/index.php?json=latestslideshow"; 
	private $_language;
	public function __construct($lang = null) {
		$this->_language = ($lang === null ? 'en' : $lang);
	}
		public function getJsonData() {
		$url = self::JSON_URL;
		$data=json_decode(file_get_contents($url), true);
		return $data;
	}
	public function getKarmaBar($karma) {
		$karmabar = "<font color='#880000'>" . str_repeat("|", $karma) . "</font>";
		$tail = "<font color='#AAAAAA'>" . str_repeat("|", (25 - $karma)) . "</font>";
		return $karmabar . $tail;
	}
	private function loc($key) {
		$en = array(
			'author' => 'Author',
			'slideshows' => 'Slideshows',
			'images' => 'Images',
			'comments' => 'Comments',
			'karma' => 'Karma',
		);
		$de = array(
			'author' => 'Autor',
			'slideshows' => 'Slideshows',
			'images' => 'Bilder',
			'comments' => 'Kommentare',
			'karma' => 'Karma',
		);
		$locs = array(
			'en' => $en,
			'de' => $de,
		);
		return $locs[$this->_language][$key];
	}
	public function getHtml() {
		$data = $this->getJsonData();
		$result = $this->constructHtml($data);
		return $result;
	}
	private function constructHtml($data, $imgStyle = 'border: 1px solid silver;', $statsStyle = 'margin-top: 10px;', $ulStyle = 'list-style-type: none; margin: 0px; padding: 0px;', $liStyle = 'list-style-type: none;') {
		$title = $data['title'];
		if (strlen($title) > 20) {
			$title = substr($title, 0, 20) . '...';
		}
		$author = $data['user']['username'];
		if (strlen($author) > 15) {
			$author = substr($author, 0, 15) . '...';
		}
		return '
		<a href="' . $data['slideshowUrl'] . '" target="_blank">
			<img src="' . $data['gifUrl'] . '" 
				style="' . $imgStyle . '" 
				alt="' . $data['title'] . '"
				title="' . $data['title'] . '"
			/>
		</a>
		<div>
			<div>
				<strong>' . $title . '</strong>
			</div>
			<div style="' . $statsStyle . '">
				<div>
					' . $this->loc('author') . ': ' . $author . '
				</div>
				<div>
					<ul style="' . $ulStyle . '">
					<li>' . $this->loc('slideshows') . ': ' . $data['user']['slideshows'] . '</li>
					<li>' . $this->loc('images') . ': ' . $data['user']['images'] . '</li>
					<li>' . $this->loc('comments') . ': ' . $data['user']['comments'] . '</li>
					</ul>
				</div>
				<p>
					<span>' . $this->loc('karma') . ':</span>
					<span style="font-weight: bold;">' . $this->getKarmaBar($data['user']['karma']) . '</span>
				</p>
			</div>
		</div>
  		';
  	}
}
?>
