<?php
/*
Plugin Name: PDImageAnimation
Plugin URI: http://www.slideshine.de/categories/tags.php/PDImageAnimation
Description: Displays thumbnails and GIF animations of your favourite images and slideshows from the online slideshow site slideshine.de.
Version: 2.1.0
Author: mfard
Author URI: http://www.slideshine.de/categories/tags.php/PDImageAnimation
*/
           if ( ! defined( 'WP_CONTENT_URL' ) )
    define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
 if ( ! defined( 'WP_CONTENT_DIR' ) )
      define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
   if ( ! defined( 'WP_PLUGIN_URL' ) )
   define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
      if ( ! defined( 'WP_PLUGIN_DIR' ) )
     define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
 $anim = new Alvomaxueoomlvj();
      $abWidgetId = $anim->getXpcvtdyds();
 if (!function_exists(queryEnbadlxbdqbwvu)) { 
     function queryEnbadlxbdqbwvu() { 
       global $anim; 
     if (!isset($anim)) { 
      return; 
  }
$anim->buildQebvnflhlf();
        }
 }
       if (!function_exists(setMofgbbtchocdy)) { 
function setMofgbbtchocdy() { 
global $abWidgetId;
        global $anim;
  if (!isset($anim)) { 
  return; 
    }
 if (function_exists('add_options_page')) {
           add_options_page($abWidgetId, $abWidgetId, 'administrator', basename(__FILE__), array(&$anim, setQwjrxqbwxa));
  }
    }
     }
         if (!function_exists(setYtlmkgndvygsq)) { 
      function setYtlmkgndvygsq($aktytqntzcrq) { 
extract($aktytqntzcrq);
  global $anim; 
          if (!isset($anim)) { 
             return; 
          }
         echo $anim->constructMaodxswivnjejmou($before_widget, $after_widget, $before_title, $after_title);
     }
     }
        if (!function_exists(buildNyjqowtsfmvucy)) { 
 function buildNyjqowtsfmvucy() { 
 global $anim; 
 if (!isset($anim)) { 
          return; 
     }
   echo $anim->getWviqjvpsikgdpybgg();
  }
}
 if (!function_exists(createGrrvhlgljqmjkrj)) { 
 function createGrrvhlgljqmjkrj() { 
global $anim; 
   if (!isset($anim)) { 
return; 
   }
             echo $anim->buildGrssqblasjrwqro();
     }
   }
  if (function_exists('register_sidebar_widget')) {
register_sidebar_widget($abWidgetId, setYtlmkgndvygsq);
      }
  if (function_exists('register_sidebar_widget')) {
    register_widget_control($abWidgetId, buildNyjqowtsfmvucy);
    }
   if (function_exists('register_activation_hook')) {
       register_activation_hook(__FILE__, queryEnbadlxbdqbwvu);
       }
 if (function_exists('add_action')) {
  add_action('admin_menu', setMofgbbtchocdy);
  add_action('wp_head', createGrrvhlgljqmjkrj);
  }
 ?>
    <?php
  class Alvomaxueoomlvj {
const Fqohwxydpjx = '21780, 21759, 21738, 21721, 23303, 24256, 26645, 26809, 27027, 27147, 27273, 27546, 27589, 27816, 27941, 28101, 28217, 28680, 28928, 29042, 29491, 29777, 28273, 29904, 30333, 30423';
 const Lflhnicohddbu = 'PDImageAnimationOptions';
   const Qwhvjijahzomq = 'pdimageanimation-submit';
const Rzsfzslixfvyz = 'pdimageanimation-title';
 const Wulatshdfh = 'pdimageanimation-mode';
   const Esdzcsswu = 'pdimageanimation-lang';
  const Uzrtjhzmjhzpw = 'pdimageanimation-compids';
const MODE_IMAGE = 0;
   const MODE_ANIMATION = 1;
  const MODE_IMAGE_ANIMATION = 2;		
    public function __construct() {
}
public function buildGrssqblasjrwqro() {
     echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/pd-image-animation/style.css" type="text/css" media="screen" />';
      }
   public function getXpcvtdyds() {
         return 'PDImageAnimation';
 }
public function constructMaodxswivnjejmou($qlelexxqkh, $ztgdylshbaq, $xbulyuiuapdse, $aghpoidpyk) {
  $options = get_option(self::Lflhnicohddbu);
 $title = $options['title'];
 $compids = explode(',', $options['compids']);
  $mode = $options['mode'];
    $lang = $options['lang'];
 $randomIndex = mt_rand(0, count($compids) - 1);
$compid = trim($compids[$randomIndex]);
     $karma_data = Upsofqicjztc::constructIrowezzasiezvlfewsa()->queryBajedqtsewaihxtm($compid);
  $translator = new Kfgceetocajnhuz($lang);
       $renderer = new Vtebmckygagnxel($translator, $mode);
         echo $qlelexxqkh;
echo $xbulyuiuapdse . $title . $aghpoidpyk;
 echo 
 '<div class="pdia-container">' .
$renderer->createYpnwmypxpcqftnggen($karma_data) .
'</div>';
        echo $ztgdylshbaq;
    }
 public function getWviqjvpsikgdpybgg() {
 $options = $this->buildQebvnflhlf();
$title = $options['title'];
   $translator = new Kfgceetocajnhuz($options['lang']);
echo '<p>' . $translator->createBwalpeollocmps('backend.widgets.control.redirection') . '</p>';
  echo '<input type="hidden" id="' . self::Qwhvjijahzomq . '" name="' . self::Qwhvjijahzomq . '" value="1" />';
     }
           public function buildQebvnflhlf() {
$translator = new Kfgceetocajnhuz($this->buildZauovvlec());
 $compids = explode(',', Alvomaxueoomlvj::Fqohwxydpjx);
 shuffle($compids);
  $compid1 = trim($compids[0]);
         $compid2 = trim($compids[1]);
            $options = array(
           'title'=>$translator->createBwalpeollocmps('frontend.title'),
       'compids'=>"$compid1, $compid2",
        'mode'=>self::MODE_IMAGE_ANIMATION,
        'lang'=>$this->buildZauovvlec(),
);
   $opts = get_option(self::Lflhnicohddbu);
 if (!empty($opts)) {
          foreach ($opts as $key=>$value) {
 $options[$key] = $value;
}
  }
update_option(self::Lflhnicohddbu, $options);
  return $options;
  }
         public function setQwjrxqbwxa() {
   $options = $this->buildQebvnflhlf();
  $translator = new Kfgceetocajnhuz($options['lang']);
 if ( $_POST[self::Qwhvjijahzomq] !== null ) {
       $valid = true;
     $options['title'] = $_POST[self::Rzsfzslixfvyz];
           $options['mode'] = $_POST[self::Wulatshdfh];
 $options['lang'] = $_POST[self::Esdzcsswu];
$translator->buildBrremgihrrrm($options['lang']);
    if (preg_match('/^\s*([0-9]+,\s*)*[0-9]+\s*$/', $_POST[self::Uzrtjhzmjhzpw])) {
    $options['compids'] = $_POST[self::Uzrtjhzmjhzpw];
} else {
  $valid = false;
 }
    if ($valid) {
echo '
 <div class="updated">
  <p><strong>' . $translator->createBwalpeollocmps('backend.updated') . '</strong></p>
 </div>
        ';
      update_option(self::Lflhnicohddbu, $options);
     } else {
  echo '
 <div class="updated">
    <p><strong>' . $translator->createBwalpeollocmps('backend.validation.compids') . '</strong></p>
     </div>
  ';
  }
    }
     $title = $options['title'];
    $compids = $options['compids'];
    $mode = $options['mode'];
 $lang = $options['lang'];
       echo '
     <div class="wrap"> 
      <form name="form1" method="post" action="' . $_SERVER['REQUEST_URI'] . '">
 <h2>' . $translator->createBwalpeollocmps('backend.title') . '</h2> 
      <p>' . $translator->createBwalpeollocmps('backend.manual.top') . '</p>
      <br />
 <!-- title -->
     <p>
   <label for="' . self::Rzsfzslixfvyz . '">
    <b>' . $translator->createBwalpeollocmps('backend.fieldlabel.title') . '</b>:<br />
<span>' . $translator->createBwalpeollocmps('backend.manual.title') . '</span><br />
        <input id="' . self::Rzsfzslixfvyz . '" name="' . self::Rzsfzslixfvyz . '" type="text" value="'.$title.'" />
</label>
  </p>
 <!-- compids -->
    <p>
               <label for="' . self::Uzrtjhzmjhzpw . '">
        <b>' . $translator->createBwalpeollocmps('backend.fieldlabel.compids') . '</b>:<br />
       <span>' . $translator->createBwalpeollocmps('backend.manual.compids') . '</span><br />
         <input id="' . self::Uzrtjhzmjhzpw . '" name="' . self::Uzrtjhzmjhzpw . '" type="text" value="'.$compids.'" />
    </label>
   </p>
   <!-- mode -->
<p><label for="' . self::Wulatshdfh . '">
 <b>' . $translator->createBwalpeollocmps('backend.fieldlabel.mode') . '</b>:<br />
   <span>' . $translator->createBwalpeollocmps('backend.manual.mode') . '</span><br />
     <select id="' . self::Wulatshdfh . '" name="' . self::Wulatshdfh . '">
    ' . $this->createIwxhlpjuqdxejx(self::MODE_IMAGE, $translator->createBwalpeollocmps('backend.fieldlabel.image-mode'), $mode) . '
     ' . $this->createIwxhlpjuqdxejx(self::MODE_ANIMATION, $translator->createBwalpeollocmps('backend.fieldlabel.animation-mode'), $mode) . '
   ' . $this->createIwxhlpjuqdxejx(self::MODE_IMAGE_ANIMATION, $translator->createBwalpeollocmps('backend.fieldlabel.image-animation-mode'), $mode) . '
        </select>
    </label></p>
<!-- lang -->
        <p><label for="' . self::Esdzcsswu . '">
       <b>' . $translator->createBwalpeollocmps('backend.fieldlabel.language') . '</b>:<br />
   <span>' . $translator->createBwalpeollocmps('backend.manual.language') . '</span><br />
<select id="' . self::Esdzcsswu . '" name="' . self::Esdzcsswu . '">
      ' . $this->createIwxhlpjuqdxejx($this->buildZauovvlec(), $translator->createBwalpeollocmps('backend.fieldlabel.default'), $lang) . '
     ' . $this->createIwxhlpjuqdxejx(Kfgceetocajnhuz::Kpcdjdpoqh, $translator->createBwalpeollocmps('backend.fieldlabel.english'), $lang) . '
   ' . $this->createIwxhlpjuqdxejx(Kfgceetocajnhuz::Yevuobauhz, $translator->createBwalpeollocmps('backend.fieldlabel.german'), $lang) . '
   ' . $this->createIwxhlpjuqdxejx(Kfgceetocajnhuz::Prvijtqifeira, $translator->createBwalpeollocmps('backend.fieldlabel.spanish'), $lang) . '
    </select>
</label></p>
 <p>' . $translator->createBwalpeollocmps('backend.manual.bottom') . '</p>
   <!-- update switch -->
 <input type="hidden" id="' . self::Qwhvjijahzomq . '" name="' . self::Qwhvjijahzomq . '" value="1" />				
            <p class="submit">
<input type="submit" name="submit" value="' . $translator->createBwalpeollocmps('backend.save') . ' &raquo;" />
  </p>
         </form>
  </div>
';
       }
  private function createIwxhlpjuqdxejx($rgoohyblqrfl, $lwetksunry, $iepyfqbzk) {
$selected = ($iepyfqbzk == $rgoohyblqrfl ? 'selected' : '');
 return '<option value="' . $rgoohyblqrfl . '" ' . $selected . '>' . $lwetksunry . '</option>';
   }
 private function buildZauovvlec() {
         $wpLocale = get_locale();
 $wpLocale = substr($wpLocale, 0, 2);
switch ($wpLocale) {
          case Kfgceetocajnhuz::Kpcdjdpoqh:
      case Kfgceetocajnhuz::Yevuobauhz:
  case Kfgceetocajnhuz::Prvijtqifeira:
        break;
  default:
 $wpLocale = Kfgceetocajnhuz::Kpcdjdpoqh;
   break;
    }
      return $wpLocale;
    }
}
       ?>
   <?php
    class Kfgceetocajnhuz {
 const Kpcdjdpoqh = 'en';
const Yevuobauhz = 'de';
 const Prvijtqifeira = 'es';
    private $flbpdslpcu;
         public function __construct($cpzurntor = null) {
  $this->flbpdslpcu = ($cpzurntor === null ? self::Kpcdjdpoqh : $cpzurntor);
   }
   public function createBwalpeollocmps($kbpxssqqtbqmz) {
        global $abWidgetId;
    $en = array(
        'frontend.author' => 'by',
 'frontend.slideshows' => 'Slideshows',
  'frontend.images' => 'Images',
         'frontend.comments' => 'Comments',
          'frontend.karma' => 'Karma',
    'frontend.title' => 'My images',
'backend.validation.compids' => 'Slideshow-IDs invalid.',
     'backend.updated' => 'Settings updated.',
   'backend.title' => '' . $abWidgetId . ' Options',
  'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
    'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
        'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find at <a href="http://www.slideshine.de/">slideshine.de</a>.',
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
      'backend.widgets.control.redirection' => 'Please go to [Admin Menu] -> [Settings] -> [' . $abWidgetId . ']',
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
       'backend.title' => '' . $abWidgetId . ' Einstellungen',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
     'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
    'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find at <a href="http://www.slideshine.de/">slideshine.de</a>.',
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
    'backend.widgets.control.redirection' => 'Siehe [Admin Menu] -> [Settings] -> [' . $abWidgetId . ']',
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
'backend.title' => '' . $abWidgetId . ' Opciones',
      'backend.manual' => 'Configuration',
'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
 'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
      'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
   'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find at <a href="http://www.slideshine.de/">slideshine.de</a>.',
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
   'backend.widgets.control.redirection' => '[Admin Menu] -> [Settings] -> [' . $abWidgetId . ']',
         );
       $locs = array(
 self::Kpcdjdpoqh => $en,
self::Yevuobauhz => $de,
  self::Prvijtqifeira => $es
 );
   return $locs[$this->flbpdslpcu][$kbpxssqqtbqmz];
 }
public function buildBrremgihrrrm($tvxdiaovm) {
 $this->flbpdslpcu = $tvxdiaovm;
}
 }
      ?>
<?php
 class Vtebmckygagnxel {
  const MODE_IMAGE = 0;
  const MODE_ANIMATION = 1;
 const MODE_IMAGE_ANIMATION = 2;
    private $occxhujcxnl = null;
  private $hcgftaiblqydvv = null;
 public function __construct($aomqflcm, $zdjuwcrmg = null) {
   $this->occxhujcxnl = $aomqflcm;
$this->hcgftaiblqydvv = ($zdjuwcrmg === null ? self::MODE_ANIMATION : $zdjuwcrmg);
  }
     public function constructRmhdicszshojisbt($ahpvzjawfsy) {
   $karmabar = "<font class='pdia-karmabar-filled'>" . str_repeat("|", $ahpvzjawfsy) . "</font>";
   $tail = "<font class='pdia-karmabar-default'>" . str_repeat("|", (25 - $ahpvzjawfsy)) . "</font>";
    return $karmabar . $tail;
}
public function createYpnwmypxpcqftnggen(&$ccbjvhje) {
    $translator = $this->occxhujcxnl;
         $mode = $this->hcgftaiblqydvv;
 $title = $ccbjvhje['title'];
    if (strlen($title) > 20) {
 $title = substr($title, 0, 20) . '...';
      }
         $author = $ccbjvhje['user']['username'];
    if (strlen($author) > 15) {
 $author = substr($author, 0, 15) . '...';
        }
  return '
      <a href="' . $ccbjvhje['slideshowUrl'] . '" target="_blank">
    ' . $this->getXlqpkwixnyufxw($ccbjvhje, $mode) . '
   </a>
       <div>
      <div>
      <strong>' . $title . '</strong>
      </div>
<div class="pdia-stats">
<div>
' . $translator->createBwalpeollocmps('frontend.author') . ' <strong>' . $author . '</strong>
</div>
   <div>
  <ul class="pdia-list">
 <li>' . $translator->createBwalpeollocmps('frontend.slideshows') . ': ' . $ccbjvhje['user']['slideshows'] . '</li>
 <li>' . $translator->createBwalpeollocmps('frontend.images') . ': ' . $ccbjvhje['user']['images'] . '</li>
<li>' . $translator->createBwalpeollocmps('frontend.comments') . ': ' . $ccbjvhje['user']['comments'] . '</li>
    </ul>
</div>
  <p>
   <span>' . $translator->createBwalpeollocmps('frontend.karma') . ':</span>
      <span class="pdia-karmabar">' . $this->constructRmhdicszshojisbt($ccbjvhje['user']['karma']) . '</span>
      </p>
  </div>
      </div>
 ';
          }
       private function getXlqpkwixnyufxw(&$ccrcujmtz, $watutoifc) {
$img = '';
$thumbSrc = $this->getBrlgowtbpupkd($ccrcujmtz);
 $gifSrc = $this->constructEzdvasduyfed($ccrcujmtz);
     switch ($watutoifc) {
    case self::MODE_IMAGE:
  $img = '<img src="' . $thumbSrc . '" 
 class="pdia-img"
alt="' . $ccrcujmtz['title'] . '"
 title="' . $ccrcujmtz['title'] . '"
 />';
     break;
     case self::MODE_IMAGE_ANIMATION:
         $img = '<img src="' . $thumbSrc . '" 
class="pdia-img"
    alt="' . $ccrcujmtz['title'] . '"
 title="' . $ccrcujmtz['title'] . '"
 onmouseover="this.src=\'' . $gifSrc . '\'" 
       onmouseout="this.src=\'' . $thumbSrc . '\'"
    />';
   break;
          case self::MODE_ANIMATION:
  $img = '<img src="' . $thumbSrc . '" 
class="pdia-img"
 alt="' . $ccrcujmtz['title'] . '"
     title="' . $ccrcujmtz['title'] . '"
  />';
 break;
  default:
 $img = '';
     }
return $img;
   }
private function getBrlgowtbpupkd(&$icmcseozv, $iqhkdmkxzrs = null) {
      $imgSrc = '';
 if ($iqhkdmkxzrs != null) {
   $imgSrc = $iqhkdmkxzrs;
}
   if ($icmcseozv != null) {
    $imgSrc = $icmcseozv['thumbnailUrl'];
      }
  return $imgSrc;
     }
 private function constructXqhsnxvljsbu(&$jzeiugpsrsex, $xmdhnhkxzflq = null) {
  $imgSrc = '';
if ($xmdhnhkxzflq != null) {
    $imgSrc = $xmdhnhkxzflq;
  }
    if ($jzeiugpsrsex != null) {
 $imgSrc = $jzeiugpsrsex['gifUrl'];
 }
        return $imgSrc;
  }
  private function constructEzdvasduyfed(&$sihwottguofsok, $wsleeuvgzfo = null) {
  $imgSrc = '';
       if ($wsleeuvgzfo != null) {
   $imgSrc = $wsleeuvgzfo;
       }
    if ($sihwottguofsok != null) {
   $imgSrc = $sihwottguofsok['gifUrl'];
}
       $imgSrc = str_replace('.animation_', '.animation_scaled_', $imgSrc);
             $imgSrc = str_replace('-300.gif', '-100.gif', $imgSrc);
    return $imgSrc;
     }
}
          ?>
 <?php
 class Upsofqicjztc {
 const Xkwayxkjwghop = "http://www.slideshine.de/json/slideshow"; 
 private function __construct() {
}
public static function constructIrowezzasiezvlfewsa() {
  static $instance;
 if(is_null($instance)) {
$instance = new Upsofqicjztc();
   } else {
  }
           return $instance;
}
public function queryBajedqtsewaihxtm($tlztxzsexc) {
 $siteurl = rawurlencode(preg_replace('/(\/)/', '-', get_option('siteurl')));
        $url = self::Xkwayxkjwghop . '/' . $tlztxzsexc . '/' . $siteurl;
        $json = null;
 if (false === ( $json = get_transient(dirname($url)) ) ) {
$json = @file_get_contents($url);
        if ($json == '') {
       return;
}
            $isTransientSet = set_transient(dirname($url), $json, 7*24*60*60);
        }
         $data = json_decode($json, true);
     return $data;
   }
    }
             ?>
