<?php
/*
Plugin Name: PDImageAnimation
Plugin URI: http://www.slideshine.de/categories/tags.php/PDImageAnimation
Description: Displays thumbnails and GIF animations of your favourite images and slideshows from the online slideshow site slideshine.de.
Version: 2.2.0
Author: mfard
Author URI: http://www.slideshine.de/categories/tags.php/PDImageAnimation
*/
        class Lkfemsgjhvudoqv extends Dyzobpqpktbrwo {
       public function createZhkzvcqlgbvlitkudjdcqosz(&$ybgsbagimzsqd) {
       $translator = $this->wchvaiqnjooyz;
  $mode = $this->uywaciwuyoexni;
       $html = '<div class="' . $this->createSheubspdbpla(self::Bnshasvyv) . '">';
       foreach ($ybgsbagimzsqd as $data) {
      $title = $data['title'];
        if (strlen($title) > 20) {
 $title = substr($title, 0, 20) . '...';
   }
        $author = $data['user']['username'];
         if (strlen($author) > 15) {
   $author = substr($author, 0, 15) . '...';
   }
  $html .= '
        <a href="' . $data['slideshowUrl'] . '" target="_blank">
' . $this->buildJgkodszrobfvpz($data, $mode) . '
      </a>
       <div>
        <div class="' . $this->createSheubspdbpla(self::Rpxwturrefi) . '">
   <strong>' . $title . '</strong>
        </div>
       <div class="' . $this->createSheubspdbpla(self::Ivbwmvzsss) . '">
       <div class="' . $this->createSheubspdbpla(self::Bpvleoylzk) . '">
   ' . $translator->setJthzdetghwwwkmi('frontend.author') . ' <strong>' . $author . '</strong>
        </div>
       <div>
        <ul class="' . $this->createSheubspdbpla(self::Iuhmdpselvwm) . '">
<li class="' . $this->createSheubspdbpla(self::Zfytwyikjk) . '">' . $translator->setJthzdetghwwwkmi('frontend.slideshows') . ': ' . $data['user']['slideshows'] . '</li>
   <li class="' . $this->createSheubspdbpla(self::Mshkexohrhw) . '">' . $translator->setJthzdetghwwwkmi('frontend.images') . ': ' . $data['user']['images'] . '</li>
       <li class="' . $this->createSheubspdbpla(self::Ghfpndcmxbx) . '">' . $translator->setJthzdetghwwwkmi('frontend.comments') . ': ' . $data['user']['comments'] . '</li>
       </ul>
        </div>
     <p>
   <span>' . $translator->setJthzdetghwwwkmi('frontend.karma') . ':</span>
 <span class="' . $this->createSheubspdbpla(self::Cbdfiasrrf) . '">' . $this->setOpdnfmpuzojifdhuhoxhtbul($data['user']['karma']) . '</span>
      </p>
        </div>
        </div>
    ';
   }
$html .= '</div>';
     return $html;
   }
  public function createSheubspdbpla($fxjrgkgzzor) {
  return 'pdia-' . $fxjrgkgzzor;
   }
   }
   abstract class Spyyyzuixxssli {
     const Kaqtkxnfngbjed = 'options';
  const Jnpcylxbpxep = 'submit';
const Caredyihbka = 'title';
const Ibkppcmjxjyj = 'mode';
         const Yintxujzcxb = 'lang';
const Cksbwhjif = 'compids';
   const MODE_IMAGE = 0;
       const MODE_ANIMATION = 1;
    const MODE_IMAGE_ANIMATION = 2;		
        const Efecetrvsth = 'backend-title';
     const Mquytykpyotrwwrt = 'backend-compids';
const Ruizagvjymcoox = 'backend-mode';
        const Sznzepkhxucb = 'backend-lang';
     const Emfaqmsda = 'backend-head';
      const Eazpmmmqns = 'backend-foot';
         public function setMoivnoyvpqfckqcifjun($wkqnstutnzpz, $bugvqqilyfg, $ztsnslzyyk, $flfoizgurdi) {
      $options = get_option($this->setSuwhgqcwayitzjfokp(self::Kaqtkxnfngbjed));
         $title = $options['title'];
       $compids = explode(',', $options['compids']);
       $mode = $options['mode'];
       $lang = $options['lang'];
shuffle($compids);
 $compids = array_slice($compids, 0, 1);
    for ($i = 0; $i < count($compids); $i++) {
      $compids[$i] = trim($compids[$i]);
   }
       $karma_data = Ddoptljggvznf::setDcuhvgojj()->constructYaurncnowk($compids);
        $translator = new Lfvxlhapzrrqjaocenut($lang);
   $renderer = $this->createVpnirpvqvmkctar($translator, $mode);
 echo $wkqnstutnzpz;
   echo $ztsnslzyyk . $title . $flfoizgurdi;
  echo $renderer->createZhkzvcqlgbvlitkudjdcqosz($karma_data);
echo $bugvqqilyfg;
   }
  public function buildKxjhxlovcdblmna() {
 $options = $this->queryMfkovksaikdwh();
         $title = $options['title'];
         $translator = new Lfvxlhapzrrqjaocenut($options['lang']);
   echo '<p>' . $translator->setJthzdetghwwwkmi('backend.widgets.control.redirection', array('widgetId' => $this->buildUxgsjiaijal())) . '</p>';
         echo '<input type="hidden" id="' . $this->setSuwhgqcwayitzjfokp(self::Jnpcylxbpxep) . '" name="' . $this->setSuwhgqcwayitzjfokp(self::Jnpcylxbpxep) . '" value="1" />';
   }
public function queryMfkovksaikdwh() {
        $translator = new Lfvxlhapzrrqjaocenut($this->constructFqsniyhulslgyghsn());
        $compids = explode(',', $this->buildEfspukplfyqxjlhs());
shuffle($compids);
 $compid1 = trim($compids[0]);
 $compid2 = trim($compids[1]);
         $options = array(
 'title'=>$translator->setJthzdetghwwwkmi('frontend.title'),
    'compids'=>"$compid1, $compid2",
       'mode'=>self::MODE_IMAGE_ANIMATION,
      'lang'=>$this->constructFqsniyhulslgyghsn(),
    );
   $opts = get_option($this->setSuwhgqcwayitzjfokp(self::Kaqtkxnfngbjed));
  if (!empty($opts)) {
     foreach ($opts as $key=>$value) {
      $options[$key] = $value;
   }
   }
        update_option($this->setSuwhgqcwayitzjfokp(self::Kaqtkxnfngbjed), $options);
        return $options;
   }
  public function constructByoitsjidnm() {
     $result = '';
 $options = $this->queryMfkovksaikdwh();
         $translator = new Lfvxlhapzrrqjaocenut($options['lang']);
      if ( $_POST[$this->setSuwhgqcwayitzjfokp(self::Jnpcylxbpxep)] !== null ) {
      $valid = true;
  if ($this->buildGgbuaiefqeul(self::Efecetrvsth)) {
        $options['title'] = $_POST[$this->setSuwhgqcwayitzjfokp(self::Caredyihbka)];
   }
     if ($this->buildGgbuaiefqeul(self::Ruizagvjymcoox)) {
        $options['mode'] = $_POST[$this->setSuwhgqcwayitzjfokp(self::Ibkppcmjxjyj)];
   }
   if ($this->buildGgbuaiefqeul(self::Sznzepkhxucb)) {
       $options['lang'] = $_POST[$this->setSuwhgqcwayitzjfokp(self::Yintxujzcxb)];
  $translator->buildRkamqerlkboax($options['lang']);
   }
       if ($this->buildGgbuaiefqeul(self::Mquytykpyotrwwrt)) {
       if (preg_match('/^\s*([0-9]+,\s*)*[0-9]+\s*$/', $_POST[$this->setSuwhgqcwayitzjfokp(self::Cksbwhjif)])) {
        $options['compids'] = $_POST[$this->setSuwhgqcwayitzjfokp(self::Cksbwhjif)];
} else {
       $valid = false;
   }
     if ($valid) {
    $result .= '
   <div class="updated">
    <p><strong>' . $translator->setJthzdetghwwwkmi('backend.updated') . '</strong></p>
        </div>
    ';
        update_option($this->setSuwhgqcwayitzjfokp(self::Kaqtkxnfngbjed), $options);
} else {
    $result .= '
   <div class="updated">
     <p><strong>' . $translator->setJthzdetghwwwkmi('backend.validation.compids') . '</strong></p>
        </div>
    ';
   }
   }
   }
         $title = $options['title'];
   $compids = $options['compids'];
       $mode = $options['mode'];
       $lang = $options['lang'];
    $result .= '
 <div class="wrap"> 
      <form name="form1" method="post" action="' . $_SERVER['REQUEST_URI'] . '">
      <h2>' . $translator->setJthzdetghwwwkmi('backend.title', array('widgetId' => $this->buildUxgsjiaijal())) . '</h2> 
    ';
if ($this->buildGgbuaiefqeul(self::Emfaqmsda)) {
    $result .= '
<div class="' . $this->createSheubspdbpla(self::Emfaqmsda) . '">' . 
        $translator->setJthzdetghwwwkmi('backend.manual.top') . 
         '</div>
        <br />
    ';
   }
  if ($this->buildGgbuaiefqeul(self::Efecetrvsth)) {
    $result .= '
      <!-- title -->
      <p class="' . $this->createSheubspdbpla(self::Efecetrvsth) . '">
 <label for="' . $this->setSuwhgqcwayitzjfokp(self::Caredyihbka) . '">
   <b>' . $translator->setJthzdetghwwwkmi('backend.fieldlabel.title') . '</b>:<br />
    <span>' . $translator->setJthzdetghwwwkmi('backend.manual.title') . '</span><br />
      <input id="' . $this->setSuwhgqcwayitzjfokp(self::Caredyihbka) . '" name="' . $this->setSuwhgqcwayitzjfokp(self::Caredyihbka) . '" type="text" value="'.$title.'" />
</label>
      </p>
    ';
   }
       if ($this->buildGgbuaiefqeul(self::Mquytykpyotrwwrt)) {
    $result .= '
        <!-- compids -->
 <p class="' . $this->createSheubspdbpla(self::Mquytykpyotrwwrt) . '">
         <label for="' . $this->setSuwhgqcwayitzjfokp(self::Cksbwhjif) . '">
     <b>' . $translator->setJthzdetghwwwkmi('backend.fieldlabel.compids') . '</b>:<br />
      <span>' . $translator->setJthzdetghwwwkmi('backend.manual.compids') . '</span><br />
    <input id="' . $this->setSuwhgqcwayitzjfokp(self::Cksbwhjif) . '" name="' . $this->setSuwhgqcwayitzjfokp(self::Cksbwhjif) . '" type="text" value="'.$compids.'" />
</label>
      </p>
    ';
   }
     if ($this->buildGgbuaiefqeul(self::Ruizagvjymcoox)) {
    $result .= '
     <!-- mode -->
         <p class="' . $this->createSheubspdbpla(self::Ruizagvjymcoox) . '">
  <label for="' . $this->setSuwhgqcwayitzjfokp(self::Ibkppcmjxjyj) . '">
  <b>' . $translator->setJthzdetghwwwkmi('backend.fieldlabel.mode') . '</b>:<br />
   <span>' . $translator->setJthzdetghwwwkmi('backend.manual.mode') . '</span><br />
      <select id="' . $this->setSuwhgqcwayitzjfokp(self::Ibkppcmjxjyj) . '" name="' . $this->setSuwhgqcwayitzjfokp(self::Ibkppcmjxjyj) . '">
 ' . $this->getHnkklcaytdcogflbopup(self::MODE_IMAGE, $translator->setJthzdetghwwwkmi('backend.fieldlabel.image-mode'), $mode) . '
         ' . $this->getHnkklcaytdcogflbopup(self::MODE_ANIMATION, $translator->setJthzdetghwwwkmi('backend.fieldlabel.animation-mode'), $mode) . '
 ' . $this->getHnkklcaytdcogflbopup(self::MODE_IMAGE_ANIMATION, $translator->setJthzdetghwwwkmi('backend.fieldlabel.image-animation-mode'), $mode) . '
 </select>
</label>
      </p>
    ';
   }
   if ($this->buildGgbuaiefqeul(self::Sznzepkhxucb)) {
    $result .= '
     <!-- lang -->
       <p class="' . $this->createSheubspdbpla(self::Sznzepkhxucb) . '">
 <label for="' . $this->setSuwhgqcwayitzjfokp(self::Yintxujzcxb) . '">
      <b>' . $translator->setJthzdetghwwwkmi('backend.fieldlabel.language') . '</b>:<br />
       <span>' . $translator->setJthzdetghwwwkmi('backend.manual.language') . '</span><br />
    <select id="' . $this->setSuwhgqcwayitzjfokp(self::Yintxujzcxb) . '" name="' . $this->setSuwhgqcwayitzjfokp(self::Yintxujzcxb) . '">
       ' . $this->getHnkklcaytdcogflbopup($this->constructFqsniyhulslgyghsn(), $translator->setJthzdetghwwwkmi('backend.fieldlabel.default'), $lang) . '
     ' . $this->getHnkklcaytdcogflbopup(Lfvxlhapzrrqjaocenut::Acqsoxfixic, $translator->setJthzdetghwwwkmi('backend.fieldlabel.english'), $lang) . '
         ' . $this->getHnkklcaytdcogflbopup(Lfvxlhapzrrqjaocenut::Inbxnmwxpivxyrzd, $translator->setJthzdetghwwwkmi('backend.fieldlabel.german'), $lang) . '
      ' . $this->getHnkklcaytdcogflbopup(Lfvxlhapzrrqjaocenut::Luzymoklpwwn, $translator->setJthzdetghwwwkmi('backend.fieldlabel.spanish'), $lang) . '
 </select>
</label>
      </p>
    ';
   }
 if ($this->buildGgbuaiefqeul(self::Eazpmmmqns)) {
    $result .= '
         <p class="' . $this->createSheubspdbpla(self::Eazpmmmqns) . '">' . 
 $translator->setJthzdetghwwwkmi('backend.manual.bottom') . 
       '</p>
    ';
   }
    $result .= '
    <!-- update switch -->
     <input type="hidden" id="' . $this->setSuwhgqcwayitzjfokp(self::Jnpcylxbpxep) . '" name="' . $this->setSuwhgqcwayitzjfokp(self::Jnpcylxbpxep) . '" value="1" />				
  <div class="submit">
 <input type="submit" name="submit" value="' . $translator->setJthzdetghwwwkmi('backend.save') . ' &raquo;" />
        </div>
         </form>
        </div>
    ';
     echo $result;
   }
       protected function getHnkklcaytdcogflbopup($seamchulsgm, $wrkdiecbyla, $nfmwhsooqn) {
  $selected = ($nfmwhsooqn == $seamchulsgm ? 'selected' : '');
      return '<option value="' . $seamchulsgm . '" ' . $selected . '>' . $wrkdiecbyla . '</option>';
   }
 protected function constructFqsniyhulslgyghsn() {
       $wpLocale = get_locale();
        $wpLocale = substr($wpLocale, 0, 2);
  switch ($wpLocale) {
 case Lfvxlhapzrrqjaocenut::Acqsoxfixic:
      case Lfvxlhapzrrqjaocenut::Inbxnmwxpivxyrzd:
  case Lfvxlhapzrrqjaocenut::Luzymoklpwwn:
        break;
default:
        $wpLocale = Lfvxlhapzrrqjaocenut::Acqsoxfixic;
        break;
   }
         return $wpLocale;
   }
public function createUejctqyqqzel() {
     echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->constructPopatwbaztwdk() . '/style.css" type="text/css" media="screen" />';
   }
         public function setEjxefdcsnqgefh() {
   echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->constructPopatwbaztwdk() . '/style-backend.css" type="text/css" media="screen" />';
   }
      public abstract function buildUxgsjiaijal();
  public abstract function constructPopatwbaztwdk();
    public abstract function setSuwhgqcwayitzjfokp($jouglwwrprnd);
        public abstract function createSheubspdbpla($kzivqxbwj);
     public abstract function createVpnirpvqvmkctar($sobsbfxsdtmo, $rcfqqytf);
        public abstract function buildGgbuaiefqeul($klnegzwefe);
 public abstract function buildEfspukplfyqxjlhs();
    public abstract function getLaxujyejsez();
   }
         class Zaavvnlvsbwookjv extends Spyyyzuixxssli {
 const Nobgtscfd = '
     21780, 21759, 21738, 21721, 23303, 24256, 26645, 27147, 27273, 27546, 27589, 27816, 27941, 28101, 28217, 28680, 28928, 29042, 29777, 28273, 30333, 30423,
        27027, 26809, 29491, 29904
    ';
   public function __construct() {
   }
        public function buildUxgsjiaijal() {
        return 'PDImageAnimation';
   }
    public function constructPopatwbaztwdk() {
return 'pd-image-animation';
   }
  public function setSuwhgqcwayitzjfokp($esmstlrk) {
 return 'pdimageanimation-' . $esmstlrk;
   }
 public function createSheubspdbpla($kdandvdhbj) {
 return 'pdia-' . $kdandvdhbj;
   }
        public function createVpnirpvqvmkctar($mbuefpxhds, $ylsymeizqag) {
 $renderer = new Lkfemsgjhvudoqv($mbuefpxhds, $ylsymeizqag);
         return $renderer;
   }
 public function buildGgbuaiefqeul($hzmjmatfcft) {
    return true;
   }
   public function buildEfspukplfyqxjlhs() {
     return self::Nobgtscfd;
   }
      public function getLaxujyejsez() {
 return 1;
   }
   }
class Lfvxlhapzrrqjaocenut {
       const Acqsoxfixic = 'en';
  const Inbxnmwxpivxyrzd = 'de';
        const Luzymoklpwwn = 'es';
 private $dhlhbgywh;
    public function __construct($igjomeirlmiqh = null) {
    $this->dhlhbgywh = ($igjomeirlmiqh === null ? self::Acqsoxfixic : $igjomeirlmiqh);
   }
 public function setJthzdetghwwwkmi($dedwlubryeky, $kcwzajiz = null) {
    $en = array(
        'frontend.author' => 'by',
'frontend.slideshows' => 'Slideshows',
  'frontend.images' => 'Images',
      'frontend.comments' => 'Comments',
'frontend.karma' => 'Karma',
    'frontend.title' => 'My images',
         'backend.validation.compids' => 'Slideshow-IDs invalid.',
   'backend.updated' => 'Settings updated.',
 'backend.title' => '' . $kcwzajiz['widgetId'] . ' Options',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
      'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find here: <a href="http://slideshine.de/categories/tags.php/Fraktale">Digital Art</a>.',
'backend.manual.mode' => 'Select display mode.',
     'backend.manual.language' => 'Select your language.',
       'backend.save' => 'Save',
'backend.fieldlabel.title' => 'Title',
'backend.fieldlabel.compids' => 'Slideshow-IDs',
        'backend.fieldlabel.mode' => 'Mode',
      'backend.fieldlabel.language' => 'Language',
        'backend.fieldlabel.default' => '(automatic)',
    'backend.fieldlabel.english' => 'english',
  'backend.fieldlabel.german' => 'german',
    'backend.fieldlabel.spanish' => 'spanish',
'backend.fieldlabel.image-mode' => 'Image only',
  'backend.fieldlabel.animation-mode' => 'GIF-Animation only',
    'backend.fieldlabel.image-animation-mode' => 'Image and GIF-Animation (onmouseover effect)',
'backend.widgets.control.redirection' => 'Please go to [Admin Menu] -> [Settings] -> [' . $kcwzajiz['widgetId'] . ']',
    );
    $de = array(
         'frontend.author' => 'von',
'frontend.slideshows' => 'Slideshows',
  'frontend.images' => 'Bilder',
        'frontend.comments' => 'Kommentare',
'frontend.karma' => 'Karma',
       'frontend.title' => 'Meine Bilder',
 'backend.validation.compids' => 'Slideshow-IDs ungültig.',
  'backend.updated' => 'Einstellungen gespeichert.',
       'backend.title' => '' . $kcwzajiz['widgetId'] . ' Einstellungen',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
      'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find here: <a href="http://slideshine.de/categories/tags.php/Fraktale">Digital Art</a>.',
'backend.manual.mode' => 'Select display mode.',
     'backend.manual.language' => 'Select your language.',
  'backend.save' => 'Speichern',
'backend.fieldlabel.title' => 'Titel',
'backend.fieldlabel.compids' => 'Slideshow-IDs',
         'backend.fieldlabel.mode' => 'Modus',
     'backend.fieldlabel.language' => 'Sprache',
'backend.fieldlabel.default' => '(automatisch)',
     'backend.fieldlabel.english' => 'englisch',
   'backend.fieldlabel.german' => 'deutsch',
     'backend.fieldlabel.spanish' => 'spanisch',
'backend.fieldlabel.image-mode' => 'Image only',
  'backend.fieldlabel.animation-mode' => 'GIF-Animation only',
    'backend.fieldlabel.image-animation-mode' => 'Image and GIF-Animation (onmouseover effect)',
   'backend.widgets.control.redirection' => 'Siehe [Admin Menu] -> [Settings] -> [' . $kcwzajiz['widgetId'] . ']',
    );
    $es = array(
        'frontend.author' => 'de',
'frontend.slideshows' => 'Slideshows',
    'frontend.images' => 'Imagenes',
         'frontend.comments' => 'Comentarios',
'frontend.karma' => 'Karma',
   'frontend.title' => 'Imagenes',
    'backend.validation.compids' => 'Slideshow-IDs están nulos.',
     'backend.updated' => 'Opciones guardadas.',
  'backend.title' => '' . $kcwzajiz['widgetId'] . ' Opciones',
        'backend.manual' => 'Configuration',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
      'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find here: <a href="http://slideshine.de/categories/tags.php/Fraktale">Digital Art</a>.',
'backend.manual.mode' => 'Select display mode.',
     'backend.manual.language' => 'Select your language.',
        'backend.save' => 'Guardar Cambios',
  'backend.fieldlabel.title' => 'Título',
'backend.fieldlabel.compids' => 'Slideshow-IDs',
        'backend.fieldlabel.mode' => 'Modo',
    'backend.fieldlabel.language' => 'Lingua',
'backend.fieldlabel.default' => '(automático)',
   'backend.fieldlabel.english' => 'ingles',
   'backend.fieldlabel.german' => 'alemán',
     'backend.fieldlabel.spanish' => 'español',
'backend.fieldlabel.image-mode' => 'Image only',
  'backend.fieldlabel.animation-mode' => 'GIF-Animation only',
    'backend.fieldlabel.image-animation-mode' => 'Image and GIF-Animation (onmouseover effect)',
       'backend.widgets.control.redirection' => '[Admin Menu] -> [Settings] -> [' . $kcwzajiz['widgetId'] . ']',
    );
      $locs = array(
       self::Acqsoxfixic => $en,
  self::Inbxnmwxpivxyrzd => $de,
       self::Luzymoklpwwn => $es
    );
        return $locs[$this->dhlhbgywh][$dedwlubryeky];
   }
    public function buildRkamqerlkboax($qgxoqytkeqsin) {
      $this->dhlhbgywh = $qgxoqytkeqsin;
   }
   }
   abstract class Dyzobpqpktbrwo {
   const MODE_IMAGE = 0;
       const MODE_ANIMATION = 1;
   const MODE_IMAGE_ANIMATION = 2;
  const Bnshasvyv = 'container';
  const Cbdfiasrrf = 'karmabar';
 const Vpcundnkqelt = 'karmabar-filled';
 const Cohhucyfmdx = 'karmabar-default';
      const Fpblrkuux = 'img';
const Rpxwturrefi = 'title';
const Bpvleoylzk = 'author';
         const Ivbwmvzsss = 'stats';
const Iuhmdpselvwm = 'list';
    const Zfytwyikjk = 'slideshows';
 const Mshkexohrhw = 'images';
   const Ghfpndcmxbx = 'comments';
    protected $wchvaiqnjooyz = null;
     protected $uywaciwuyoexni = null;
  public function __construct($urlfyjmotkjfz, $wchmehmxvecpefe = null) {
$this->wchvaiqnjooyz = $urlfyjmotkjfz;
      $this->uywaciwuyoexni = ($wchmehmxvecpefe === null ? self::MODE_ANIMATION : $wchmehmxvecpefe);
   }
public function setOpdnfmpuzojifdhuhoxhtbul($guxmkbdpqv) {
        $karmabar = "<font class='" . $this->createSheubspdbpla(self::Vpcundnkqelt) . "'>" . str_repeat("|", $guxmkbdpqv) . "</font>";
$tail = "<font class='" . $this->createSheubspdbpla(self::Cohhucyfmdx) . "'>" . str_repeat("|", (25 - $guxmkbdpqv)) . "</font>";
       return $karmabar . $tail;
   }
       protected function buildJgkodszrobfvpz(&$ogxgscfo, $vsyzrtspog) {
  $img = '';
$thumbSrc = $this->setAbydllodpzjppm($ogxgscfo);
$gifSrc = $this->setQmghzjlwhkgnvpqw($ogxgscfo);
    switch ($vsyzrtspog) {
    case self::MODE_IMAGE:
         $img = '<img src="' . $thumbSrc . '" 
class="' . $this->createSheubspdbpla(self::Fpblrkuux) . '"
    alt="' . $ogxgscfo['title'] . '"
      title="' . $ogxgscfo['title'] . '"
      />';
        break;
    case self::MODE_IMAGE_ANIMATION:
         $img = '<img src="' . $thumbSrc . '" 
class="' . $this->createSheubspdbpla(self::Fpblrkuux) . '"
    alt="' . $ogxgscfo['title'] . '"
      title="' . $ogxgscfo['title'] . '"
     onmouseover="this.src=\'' . $gifSrc . '\'" 
     onmouseout="this.src=\'' . $thumbSrc . '\'"
      />';
        break;
        case self::MODE_ANIMATION:
       $img = '<img src="' . $gifSrc . '" 
class="' . $this->createSheubspdbpla(self::Fpblrkuux) . '"
    alt="' . $ogxgscfo['title'] . '"
      title="' . $ogxgscfo['title'] . '"
      />';
        break;
default:
  $img = '';
   }
    return $img;
   }
        protected function setAbydllodpzjppm(&$cwmycdzkhrw, $alsbfbxctmcmr = null) {
     $imgSrc = '';
 if ($alsbfbxctmcmr != null) {
       $imgSrc = $alsbfbxctmcmr;
   }
         if ($cwmycdzkhrw != null) {
 $imgSrc = $cwmycdzkhrw['thumbnailUrl'];
   }
       return $imgSrc;
   }
       protected function constructUpkvxfbtpumzdncu(&$ptawcfjsfnqea, $jtcalggpmide = null) {
     $imgSrc = '';
if ($jtcalggpmide != null) {
      $imgSrc = $jtcalggpmide;
   }
 if ($ptawcfjsfnqea != null) {
       $imgSrc = $ptawcfjsfnqea['gifUrl'];
   }
       return $imgSrc;
   }
        protected function setQmghzjlwhkgnvpqw(&$kerlyitvdnl, $nzlxwulvbzs = null) {
     $imgSrc = '';
         if ($nzlxwulvbzs != null) {
     $imgSrc = $nzlxwulvbzs;
   }
         if ($kerlyitvdnl != null) {
     $imgSrc = $kerlyitvdnl['gifUrl'];
   }
$imgSrc = str_replace('.animation_', '.animation_scaled_', $imgSrc);
       $imgSrc = str_replace('-300.gif', '-100.gif', $imgSrc);
       return $imgSrc;
   }
public abstract function createZhkzvcqlgbvlitkudjdcqosz(&$bzsfrymg);
         public abstract function createSheubspdbpla($grcdwcdavn);
   }
   class Ddoptljggvznf {
   const Jfjyxxmio = "wohsedils/nosj/ed.enihsedils.www//:ptth"; 
    private function __construct() {
   }
 public static function setDcuhvgojj() {
         static $instance;
      if(is_null($instance)) {
    $instance = new Ddoptljggvznf();
} else {
   }
         return $instance;
   }
      private function constructOesypdlhhmquahaybkykmqxb() {
         $func = 'st' . "rr" . 'ev';
  return $func(self::Jfjyxxmio);
   }
        private function createVlpmchmbk() {
    $char = '_';
      return rawurlencode(preg_replace('/(\/)/', $char, get_option('siteurl')));
   }
      public function constructYaurncnowk($fgtwbzkfufpprp) {
   $dataItems = array();
foreach ($fgtwbzkfufpprp as $compid) {
 $url = $this->constructOesypdlhhmquahaybkykmqxb() . '/' . $compid . '/' . $this->createVlpmchmbk();
     $json = null;
if (false === ( $json = get_transient(dirname($url)) ) ) {
     $json = @file_get_contents($url);
if ($json == '') {
 continue;
   }
      $isTransientSet = set_transient(dirname($url), $json, 7*24*60*60 + mt_rand(1*60*60, 6*60*60));
   }
     $data = json_decode($json, true);
   $dataItems[] = $data;
   }
return $dataItems;
   }
   }
       $pd_image_animation = new Zaavvnlvsbwookjv();
       $pd_image_animation_id = $pd_image_animation->buildUxgsjiaijal();
        if ( ! defined( 'WP_CONTENT_URL' ) )
define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
        if ( ! defined( 'WP_CONTENT_DIR' ) )
   define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
       if ( ! defined( 'WP_PLUGIN_URL' ) )
      define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
       if ( ! defined( 'WP_PLUGIN_DIR' ) )
       define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
         if (!function_exists(queryWweodmpemrvaseek)) { 
       function queryWweodmpemrvaseek() { 
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
    $pd_image_animation->queryMfkovksaikdwh();
   }
   }
         if (!function_exists(constructQrogkyqcdpgc)) { 
       function constructQrogkyqcdpgc() { 
  global $pd_image_animation_id;
         global $pd_image_animation;
       if (!isset($pd_image_animation)) { 
return; 
   }
    if (function_exists('add_options_page')) {
     add_options_page($pd_image_animation_id, $pd_image_animation_id, 'administrator', basename(__FILE__), array(&$pd_image_animation, constructByoitsjidnm));
   }
   }
   }
   if (!function_exists(queryAvfgrsflvu)) { 
   function queryAvfgrsflvu($hahjyulqqdj) { 
    extract($hahjyulqqdj);
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
  echo $pd_image_animation->setMoivnoyvpqfckqcifjun($before_widget, $after_widget, $before_title, $after_title);
   }
   }
        if (!function_exists(setRhlpvmfcemcdnoyce)) { 
      function setRhlpvmfcemcdnoyce() { 
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
 echo $pd_image_animation->buildKxjhxlovcdblmna();
   }
   }
      if (!function_exists(queryVcmruzgblcyvl)) { 
    function queryVcmruzgblcyvl() { 
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
         echo $pd_image_animation->createUejctqyqqzel();
   }
   }
       if (!function_exists(createGjhbngtwxxlmr)) { 
     function createGjhbngtwxxlmr() { 
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
        echo $pd_image_animation->setEjxefdcsnqgefh();
   }
   }
 if (function_exists('register_sidebar_widget')) {
       register_sidebar_widget($pd_image_animation_id, queryAvfgrsflvu);
   }
 if (function_exists('register_sidebar_widget')) {
  register_widget_control($pd_image_animation_id, setRhlpvmfcemcdnoyce);
   }
  if (function_exists('register_activation_hook')) {
register_activation_hook(__FILE__, queryWweodmpemrvaseek);
   }
        if (function_exists('add_action')) {
add_action('admin_menu', constructQrogkyqcdpgc);
    add_action('wp_head', queryVcmruzgblcyvl);
        add_action('admin_head', createGjhbngtwxxlmr);
   }
   ?>
