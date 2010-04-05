<?php
/*
Plugin Name: PDImageAnimation
Plugin URI: http://www.slideshine.de/11667
Description: Displays thumbnails and GIF animations of your favourite images and slideshows from the online slideshow site slideshine.de.
Version: 2.0.0
Author: mfard
Author URI: http://www.slideshine.de/11667
*/
  if ( ! defined( 'WP_CONTENT_URL' ) )
 define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
          if ( ! defined( 'WP_CONTENT_DIR' ) )
  define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
   if ( ! defined( 'WP_PLUGIN_URL' ) )
   define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
        if ( ! defined( 'WP_PLUGIN_DIR' ) )
 define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
            $anim = new Ecfevcpaddic();
$abWidgetId = $anim->getSckwxmhfknumbwi();
        if (!function_exists(constructQybofwjvjmylr)) { 
  function constructQybofwjvjmylr() { 
global $anim; 
  if (!isset($anim)) { 
   return; 
    }
    $anim->setNfirfvppwmowzqtl();
 }
}
    if (!function_exists(queryIgzitwlvgzynunnm)) { 
function queryIgzitwlvgzynunnm() { 
global $abWidgetId;
       global $anim;
 if (!isset($anim)) { 
 return; 
 }
if (function_exists('add_options_page')) {
   add_options_page($abWidgetId, $abWidgetId, 'administrator', basename(__FILE__), array(&$anim, createOactahjphmk));
 }
   }
}
    if (!function_exists(buildNvcwvwqjtuww)) { 
   function buildNvcwvwqjtuww($ufbryjas) { 
 extract($ufbryjas);
 global $anim; 
 if (!isset($anim)) { 
 return; 
      }
        echo $anim->queryTehacynsjdf($before_widget, $after_widget, $before_title, $after_title);
    }
 }
           if (!function_exists(setXunrembbbw)) { 
function setXunrembbbw() { 
global $anim; 
     if (!isset($anim)) { 
return; 
   }
 echo $anim->getQnpfoczwuujjpb();
        }
 }
 if (!function_exists(queryOthcwpguwokedim)) { 
function queryOthcwpguwokedim() { 
 global $anim; 
if (!isset($anim)) { 
  return; 
     }
  echo $anim->createGjhsfmvhbweu();
  }
}
    if (function_exists('register_sidebar_widget')) {
     register_sidebar_widget($abWidgetId, buildNvcwvwqjtuww);
 }
    if (function_exists('register_sidebar_widget')) {
    register_widget_control($abWidgetId, setXunrembbbw);
}
       if (function_exists('register_activation_hook')) {
   register_activation_hook(__FILE__, constructQybofwjvjmylr);
 }
if (function_exists('add_action')) {
  add_action('admin_menu', queryIgzitwlvgzynunnm);
add_action('wp_head', queryOthcwpguwokedim);
         }
      ?>
           <?php
      class Ecfevcpaddic {
 const Mchtigmhks = '21780, 21759, 21738, 21721, 23303, 24256, 26645, 26809, 27027, 27147, 27273, 27546, 27589, 27816, 27941, 28101, 28217, 28680, 28928, 29042, 29491, 29777, 28273, 29904, 30333, 30423';
const Bxeiqrpgglsojo = 'PDImageAnimationOptions';
  const Kxzninzglvno = 'pdimageanimation-submit';
const Pxgxcbxlldlm = 'pdimageanimation-title';
const Qgvayzoyunnsq = 'pdimageanimation-mode';
 const Zhagadhjqobl = 'pdimageanimation-lang';
   const Accpomypfdxf = 'pdimageanimation-compids';
       const MODE_IMAGE = 0;
  const MODE_ANIMATION = 1;
    const MODE_IMAGE_ANIMATION = 2;		
        public function __construct() {
 }
  public function createGjhsfmvhbweu() {
       echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/pd-image-animation/style.css" type="text/css" media="screen" />';
  }
        public function getSckwxmhfknumbwi() {
  return 'PDImageAnimation';
           }
 public function queryTehacynsjdf($pknutgpbr, $bjvmygqifs, $mevompovbp, $chkrntnjx) {
   $options = get_option(self::Bxeiqrpgglsojo);
      $title = $options['title'];
          $compids = explode(',', $options['compids']);
       $mode = $options['mode'];
  $lang = $options['lang'];
          $randomIndex = mt_rand(0, count($compids) - 1);
      $compid = trim($compids[$randomIndex]);
    $karma_data = Veuhvptnxds::queryPnkrmweuvktugrtzevkcq()->constructHzqlftqfifpc($compid);
        $translator = new Yuoffakoxltttz($lang);
            $renderer = new Yrjkvwagbfjrj($translator, $mode);
echo $pknutgpbr;
         echo $mevompovbp . $title . $chkrntnjx;
       echo 
         '<div class="pdia-container">' .
  $renderer->createDeoldeaxramggwz($karma_data) .
   '</div>';
  echo $bjvmygqifs;
}
       public function getQnpfoczwuujjpb() {
 $options = $this->setNfirfvppwmowzqtl();
        $title = $options['title'];
       $translator = new Yuoffakoxltttz($options['lang']);
    echo '<p>' . $translator->createFnkzlyhyidekg('backend.widgets.control.redirection') . '</p>';
        echo '<input type="hidden" id="' . self::Kxzninzglvno . '" name="' . self::Kxzninzglvno . '" value="1" />';
}
        public function setNfirfvppwmowzqtl() {
         $translator = new Yuoffakoxltttz($this->createBihpwgqsqoo());
$compids = explode(',', Ecfevcpaddic::Mchtigmhks);
      $randomIndex1 = mt_rand(0, count($compids) - 1);
$randomIndex2 = mt_rand(0, count($compids) - 1);
   $compid1 = trim($compids[$randomIndex1]);
  $compid2 = trim($compids[$randomIndex2]);
$options = array(
   'title'=>$translator->createFnkzlyhyidekg('frontend.title'),
  'compids'=>"$compid1, $compid2",
           'mode'=>self::MODE_IMAGE_ANIMATION,
 'lang'=>$this->createBihpwgqsqoo(),
);
  $opts = get_option(self::Bxeiqrpgglsojo);
if (!empty($opts)) {
      foreach ($opts as $key=>$value) {
 $options[$key] = $value;
   }
  }
       update_option(self::Bxeiqrpgglsojo, $options);
 return $options;
       }
  public function createOactahjphmk() {
   $options = $this->setNfirfvppwmowzqtl();
 $translator = new Yuoffakoxltttz($options['lang']);
 if ( $_POST[self::Kxzninzglvno] !== null ) {
 $options['title'] = $_POST[self::Pxgxcbxlldlm];
        $options['compids'] = $_POST[self::Accpomypfdxf];
$options['mode'] = $_POST[self::Qgvayzoyunnsq];
  $options['lang'] = $_POST[self::Zhagadhjqobl];
 $translator->buildRepsgkdnhtcgobg($options['lang']);
            echo '
<div class="updated">
    <p><strong>' . $translator->createFnkzlyhyidekg('backend.updated') . '</strong></p>
      </div>
 ';
update_option(self::Bxeiqrpgglsojo, $options);
}
      $title = $options['title'];
     $compids = $options['compids'];
  $mode = $options['mode'];
$lang = $options['lang'];
    echo '
         <div class="wrap"> 
 <form name="form1" method="post" action="' . $_SERVER['REQUEST_URI'] . '">
    <h2>' . $translator->createFnkzlyhyidekg('backend.title') . '</h2> 
 <p>' . $translator->createFnkzlyhyidekg('backend.manual') . '</p>
 <!-- title -->
     <p>
 <label for="' . self::Pxgxcbxlldlm . '">
' . $translator->createFnkzlyhyidekg('backend.fieldlabel.title') . ':<br />
<input id="' . self::Pxgxcbxlldlm . '" name="' . self::Pxgxcbxlldlm . '" type="text" value="'.$title.'" />
 </label>
</p>
   <!-- compids -->
 <p>
<label for="' . self::Accpomypfdxf . '">
        ' . $translator->createFnkzlyhyidekg('backend.fieldlabel.compids') . ':<br />
      <input id="' . self::Accpomypfdxf . '" name="' . self::Accpomypfdxf . '" type="text" value="'.$compids.'" />
   </label>
  </p>
            <!-- mode -->
    <p><label for="' . self::Qgvayzoyunnsq . '">
     ' . $translator->createFnkzlyhyidekg('backend.fieldlabel.mode') . ': <br />
<select id="' . self::Qgvayzoyunnsq . '" name="' . self::Qgvayzoyunnsq . '">
        ' . $this->buildCtravasirsylqzr(self::MODE_IMAGE, $translator->createFnkzlyhyidekg('backend.fieldlabel.image-mode'), $mode) . '
        ' . $this->buildCtravasirsylqzr(self::MODE_ANIMATION, $translator->createFnkzlyhyidekg('backend.fieldlabel.animation-mode'), $mode) . '
       ' . $this->buildCtravasirsylqzr(self::MODE_IMAGE_ANIMATION, $translator->createFnkzlyhyidekg('backend.fieldlabel.image-animation-mode'), $mode) . '
   </select>
       </label></p>
<!-- lang -->
  <p><label for="' . self::Zhagadhjqobl . '">
 ' . $translator->createFnkzlyhyidekg('backend.fieldlabel.language') . ':<br />
       <select id="' . self::Zhagadhjqobl . '" name="' . self::Zhagadhjqobl . '">
   ' . $this->buildCtravasirsylqzr($this->createBihpwgqsqoo(), $translator->createFnkzlyhyidekg('backend.fieldlabel.default'), $lang) . '
  ' . $this->buildCtravasirsylqzr(Yuoffakoxltttz::Eiaenkdiyfm, $translator->createFnkzlyhyidekg('backend.fieldlabel.english'), $lang) . '
' . $this->buildCtravasirsylqzr(Yuoffakoxltttz::Gyihiarytdjrfky, $translator->createFnkzlyhyidekg('backend.fieldlabel.german'), $lang) . '
  ' . $this->buildCtravasirsylqzr(Yuoffakoxltttz::Pyxhzngsknprgm, $translator->createFnkzlyhyidekg('backend.fieldlabel.spanish'), $lang) . '
  </select>
   </label></p>
       <!-- update switch -->
<input type="hidden" id="' . self::Kxzninzglvno . '" name="' . self::Kxzninzglvno . '" value="1" />				
        <p class="submit">
         <input type="submit" name="submit" value="' . $translator->createFnkzlyhyidekg('backend.save') . ' &raquo;" />
        </p>
      </form>
     </div>
  ';
 }
          private function buildCtravasirsylqzr($fnljddhxwbn, $asxlcegzjeole, $kdkswqpfu) {
$selected = ($kdkswqpfu == $fnljddhxwbn ? 'selected' : '');
   return '<option value="' . $fnljddhxwbn . '" ' . $selected . '>' . $asxlcegzjeole . '</option>';
 }
 private function createBihpwgqsqoo() {
            $wpLocale = get_locale();
 $wpLocale = substr($wpLocale, 0, 2);
 switch ($wpLocale) {
case Yuoffakoxltttz::Eiaenkdiyfm:
        case Yuoffakoxltttz::Gyihiarytdjrfky:
          case Yuoffakoxltttz::Pyxhzngsknprgm:
break;
          default:
        $wpLocale = Yuoffakoxltttz::Eiaenkdiyfm;
    break;
 }
         return $wpLocale;
  }
  }
  ?>
   <?php
class Yuoffakoxltttz {
     const Eiaenkdiyfm = 'en';
     const Gyihiarytdjrfky = 'de';
   const Pyxhzngsknprgm = 'es';
 private $ffotpmcw;
 public function __construct($omerhsfqjsa = null) {
   $this->ffotpmcw = ($omerhsfqjsa === null ? self::Eiaenkdiyfm : $omerhsfqjsa);
    }
        public function createFnkzlyhyidekg($ohlqgxngcsp) {
global $abWidgetId;
  $en = array(
      'frontend.author' => 'by',
   'frontend.slideshows' => 'Slideshows',
    'frontend.images' => 'Images',
'frontend.comments' => 'Comments',
 'frontend.karma' => 'Karma',
  'frontend.title' => 'My images',
 'backend.updated' => 'Settings updated.',
  'backend.title' => '' . $abWidgetId . ' Options',
   'backend.manual' => 'Configuration',
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
    'backend.updated' => 'Einstellungen gespeichert.',
 'backend.title' => '' . $abWidgetId . ' Einstellungen',
       'backend.manual' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>title for this widget as it will be displayed at the top of the widget</li><li>comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows..</li><li>Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.</li></ul>',
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
   'backend.updated' => 'Opciones guardadas.',
    'backend.title' => '' . $abWidgetId . ' Opciones',
'backend.manual' => 'Configuration',
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
 self::Eiaenkdiyfm => $en,
self::Gyihiarytdjrfky => $de,
   self::Pyxhzngsknprgm => $es
   );
  return $locs[$this->ffotpmcw][$ohlqgxngcsp];
 }
 public function buildRepsgkdnhtcgobg($scyoajwmdzjz) {
$this->ffotpmcw = $scyoajwmdzjz;
         }
   }
    ?>
        <?php
 class Yrjkvwagbfjrj {
const MODE_IMAGE = 0;
   const MODE_ANIMATION = 1;
         const MODE_IMAGE_ANIMATION = 2;
  private $oznmcbgu = null;
       private $hkyflvnhsn = null;
       public function __construct($yixxrobcu, $folabafg = null) {
  $this->oznmcbgu = $yixxrobcu;
            $this->hkyflvnhsn = ($folabafg === null ? self::MODE_ANIMATION : $folabafg);
         }
public function buildIseiifnqxmfkxym($kseflxrc) {
  $karmabar = "<font class='pdia-karmabar-filled'>" . str_repeat("|", $kseflxrc) . "</font>";
  $tail = "<font class='pdia-karmabar-default'>" . str_repeat("|", (25 - $kseflxrc)) . "</font>";
      return $karmabar . $tail;
  }
 public function createDeoldeaxramggwz(&$ttsijvapr) {
     $translator = $this->oznmcbgu;
  $mode = $this->hkyflvnhsn;
    $title = $ttsijvapr['title'];
       if (strlen($title) > 20) {
   $title = substr($title, 0, 20) . '...';
      }
$author = $ttsijvapr['user']['username'];
 if (strlen($author) > 15) {
      $author = substr($author, 0, 15) . '...';
        }
     return '
 <a href="' . $ttsijvapr['slideshowUrl'] . '" target="_blank">
         ' . $this->constructYoolbrmzqscuv($ttsijvapr, $mode) . '
    </a>
 <div>
     <div>
  <strong>' . $title . '</strong>
 </div>
             <div class="pdia-stats">
        <div>
  ' . $translator->createFnkzlyhyidekg('frontend.author') . ' <strong>' . $author . '</strong>
           </div>
        <div>
     <ul class="pdia-list">
       <li>' . $translator->createFnkzlyhyidekg('frontend.slideshows') . ': ' . $ttsijvapr['user']['slideshows'] . '</li>
      <li>' . $translator->createFnkzlyhyidekg('frontend.images') . ': ' . $ttsijvapr['user']['images'] . '</li>
 <li>' . $translator->createFnkzlyhyidekg('frontend.comments') . ': ' . $ttsijvapr['user']['comments'] . '</li>
</ul>
 </div>
 <p>
        <span>' . $translator->createFnkzlyhyidekg('frontend.karma') . ':</span>
       <span class="pdia-karmabar">' . $this->buildIseiifnqxmfkxym($ttsijvapr['user']['karma']) . '</span>
   </p>
   </div>
     </div>
  ';
        }
            private function constructYoolbrmzqscuv(&$pzaxdssjfrxs, $bqexxqerzm) {
       $img = '';
 $thumbSrc = $this->createCfbwanjufleydis($pzaxdssjfrxs);
$gifSrc = $this->querySmujkcydaninmpp($pzaxdssjfrxs);
 switch ($bqexxqerzm) {
     case self::MODE_IMAGE:
$img = '<img src="' . $thumbSrc . '" 
    class="pdia-img"
 alt="' . $pzaxdssjfrxs['title'] . '"
        title="' . $pzaxdssjfrxs['title'] . '"
 />';
        break;
  case self::MODE_IMAGE_ANIMATION:
    $img = '<img src="' . $thumbSrc . '" 
           class="pdia-img"
  alt="' . $pzaxdssjfrxs['title'] . '"
  title="' . $pzaxdssjfrxs['title'] . '"
  onmouseover="this.src=\'' . $gifSrc . '\'" 
  onmouseout="this.src=\'' . $thumbSrc . '\'"
    />';
break;
                case self::MODE_ANIMATION:
$img = '<img src="' . $thumbSrc . '" 
   class="pdia-img"
 alt="' . $pzaxdssjfrxs['title'] . '"
    title="' . $pzaxdssjfrxs['title'] . '"
          />';
    break;
default:
$img = '';
      }
return $img;
   }
       private function createCfbwanjufleydis(&$colusxblwicjy, $femqpmogitfqa = null) {
 $imgSrc = '';
if ($femqpmogitfqa != null) {
$imgSrc = $femqpmogitfqa;
   }
   if ($colusxblwicjy != null) {
         $imgSrc = $colusxblwicjy['thumbnailUrl'];
        }
  return $imgSrc;
    }
private function buildIdrlaiizlujwc(&$gkmqpjrawjt, $buebjbbohka = null) {
         $imgSrc = '';
if ($buebjbbohka != null) {
    $imgSrc = $buebjbbohka;
           }
if ($gkmqpjrawjt != null) {
     $imgSrc = $gkmqpjrawjt['gifUrl'];
     }
  return $imgSrc;
          }
  private function querySmujkcydaninmpp(&$geibnahxmehkaxl, $dlfowvbavpp = null) {
   $imgSrc = '';
           if ($dlfowvbavpp != null) {
 $imgSrc = $dlfowvbavpp;
       }
 if ($geibnahxmehkaxl != null) {
   $imgSrc = $geibnahxmehkaxl['gifUrl'];
     }
  $imgSrc = str_replace('.animation_', '.animation_scaled_', $imgSrc);
  $imgSrc = str_replace('-300.gif', '-100.gif', $imgSrc);
return $imgSrc;
        }
   }
?>
  <?php
  class Veuhvptnxds {
 const Tznufyqirf = "http://www.slideshine.de/json/slideshow"; 
 private function __construct() {
  }
   public static function queryPnkrmweuvktugrtzevkcq() {
 static $instance;
     if(is_null($instance)) {
       $instance = new Veuhvptnxds();
         } else {
           }
 return $instance;
   }
public function constructHzqlftqfifpc($gyfqborlwgdt) {
         $siteurl = rawurlencode(preg_replace('/(\/|:)/', '-', get_option('siteurl')));
  $url = self::Tznufyqirf . '/' . $gyfqborlwgdt . '/' . $siteurl;
$json = null;
if (false === ( $json = get_transient($url) ) ) {
             $json = @file_get_contents($url);
      if ($json == '') {
 return;
}
        $isTransientSet = set_transient($url, $json, 7*24*60*60);
    }
         $data = json_decode($json, true);
   return $data;
  }
  }
          ?>
