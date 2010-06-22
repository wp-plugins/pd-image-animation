<?php
/*
Plugin Name: PDImageAnimation
Plugin URI: http://www.slideshine.de/categories/tags.php/PDImageAnimation
Description: Displays thumbnails and GIF animations of your favourite images and slideshows from the online slideshow site slideshine.de.
Version: 2.4.0
Author: mfard
Author URI: http://www.slideshine.de/categories/tags.php/PDImageAnimation
*/

# @date 2010-06-22 14-04-25
 class Vtwasqigwf extends Gfczttsoehqi {
 public function buildXwrhmuentupk(&$oyyabvxmgw) {
    $translator = $this->obgaawgsil;
$mode = $this->nathhboidebc;
$html = '<div class="' . $this->buildStoibxzvwlyf(self::Ywlgrblxphqzq) . '">';
    foreach ($oyyabvxmgw as $data) {
      $title = $this->createUehflmgmiouqott($data['title']);
  $author = $this->createUehflmgmiouqott($data['user']['username'], 15);
  $html .= '
         <div class="' . $this->buildStoibxzvwlyf(self::Uczzwrqvggclf) . '">
        <a href="' . $data['slideshowUrl'] . '" target="_blank">
    ' . $this->constructLclmgkqpsrhldp($data, $mode) . '
      </a>
       <div>
        <div class="' . $this->buildStoibxzvwlyf(self::Dwfedzxjusvp) . '">
   <strong>' . $title . '</strong>
        </div>
       <div class="' . $this->buildStoibxzvwlyf(self::Vsovnjwftzi) . '">
<div class="' . $this->buildStoibxzvwlyf(self::Rssgsevretqhbb) . '">
       ' . $translator->createArtunyiskbmzjhbq('frontend.author') . ' <strong>' . $author . '</strong>
        </div>
       <div>
      <ul class="' . $this->buildStoibxzvwlyf(self::Sijynylcfgu) . '">
      <li class="' . $this->buildStoibxzvwlyf(self::Nnsoxxacvqzld) . '">' . $translator->createArtunyiskbmzjhbq('frontend.slideshows') . ': ' . $data['user']['slideshows'] . '</li>
         <li class="' . $this->buildStoibxzvwlyf(self::Savjbtpvjmqrfr) . '">' . $translator->createArtunyiskbmzjhbq('frontend.images') . ': ' . $data['user']['images'] . '</li>
   <li class="' . $this->buildStoibxzvwlyf(self::Gsrcilhbbaijms) . '">' . $translator->createArtunyiskbmzjhbq('frontend.comments') . ': ' . $data['user']['comments'] . '</li>
       </ul>
        </div>
       <div class="' . $this->buildStoibxzvwlyf(self::Mqkhnxnkcde) . '">
       <span>' . $translator->createArtunyiskbmzjhbq('frontend.karma') . ':</span>
         <div class="' . $this->buildStoibxzvwlyf(self::Pfsveyvptmq) . '">' . $this->queryWaddziggifcy($data['user']['karma']) . '</div>
        </div>
        </div>
        </div>
        </div>
    ';
   }
$html .= '</div>';
     return $html;
   }
 public function buildStoibxzvwlyf($wkvuynvgouk) {
  return 'pdia-' . $wkvuynvgouk;
   }
   }
  abstract class Drozhfhawrhkl {
         const Hahuqyxxmadfooeshz = 'options';
 const Ksmhpasmhbz = 'submit';
const Afmambgguvm = 'title';
         const Rhkuawqiuf = 'count';
  const Dherxdzjegwhkj = 'mode';
const Uujfhgtgnwtg = 'lang';
  const Fpzjawvdrhe = 'compids';
       const Yzwdpgzaojasnf = 0;
const Wnvajzeykxcscikeh = 1;
       const Yvzvkltbxnkvf = 2;		
      const Ameuxomtg = 'backend-title';
         const Vxeirjosokyj = 'backend-count';
const Yywbmvcfbab = 'backend-compids';
       const Qdaddysadqy = 'backend-mode';
        const Uszureqmhfgi = 'backend-lang';
     const Eddcdrpdt = 'backend-head';
        const Hgxwmsmownom = 'backend-foot';
       const Tmvnkjubvrq = 'backend-news';
      const Pinlyoauztt = 101;
       const Rtidjdbqebag = 102;
     const Cchrpjtaeb = 103;
const Yalclnfsshvjdtk = 104;
      const Odaxuwvvhzw = 105;
       const Plmcksyxhwyw = 106;
    const Jtbritvmj = 107;
      const Dlbqdmpeolt = 108;
       const Ofasgzhwmfit = 109;
      const Vpslndsznnd = 110;
      const Ianrtcltxjq = 111;
         const Egxrejaydtfreb = 112;
       const Hyutkqgkdtif = 120;
     const Wlrptlrlssfa = 0;
      const Qumaoijmvelez = 1;
     const Bgrdqnrwcrvn = 2;
     const Rtxsglipncnv = 3;
  const Nvmuqsmgd = 4;
      public function getBaggkqolujd($urgdoxaldwcbhg, $gvwsgecbe, $rsrpjhudxajgmh, $smnxduslbixfj) {
   $options = get_option($this->getJbqhkaolouk(self::Hahuqyxxmadfooeshz));
         $title = $options['title'];
  $compids = $this->queryZmaakufeibpvkled($options['compids'], $options['count']);
       $mode = $options['mode'];
       $lang = $options['lang'];
        $karma_data = Vpcqdckvzaue::getInstance()->constructHcborlsejfrbw($compids);
 $translator = new Vdlqtvupxruyw($lang);
 $renderer = $this->getEpfzcrabnkbdpzke($translator, $mode);
   echo $urgdoxaldwcbhg;
         echo $rsrpjhudxajgmh . $title . $smnxduslbixfj;
         echo $renderer->buildXwrhmuentupk($karma_data);
        echo $gvwsgecbe;
   }
    public function constructLwrotxucruoct() {
 $options = $this->buildEjddaaomgbiha();
         $title = $options['title'];
  $translator = new Vdlqtvupxruyw($options['lang']);
        echo '<p>' . $translator->createArtunyiskbmzjhbq('backend.widgets.control.redirection', array(Vdlqtvupxruyw::Udvspxtanqchd => $this->createNxliwxzdwqyjh())) . '</p>';
   echo '<input type="hidden" id="' . $this->getJbqhkaolouk(self::Ksmhpasmhbz) . '" name="' . $this->getJbqhkaolouk(self::Ksmhpasmhbz) . '" value="1" />';
   }
public function buildEjddaaomgbiha() {
$translator = new Vdlqtvupxruyw($this->setBujlsauoeajl());
      $compids = explode(',', $this->buildDjgfzkkjtbvsnl());
shuffle($compids);
     $compids = array_slice(
     $compids, 0, 
      min(
$this->getKrtkixmjwrammxqe(Drozhfhawrhkl::Egxrejaydtfreb),
       count($compids)
   )
    );
      for($isErrkrushwh = 0; $isErrkrushwh < count($compids); $isErrkrushwh++) {
        $compids[$isErrkrushwh] = trim($compids[$isErrkrushwh]);
   }
         $options = array(
     'title'=>$translator->createArtunyiskbmzjhbq('frontend.title'),
       'compids'=>implode(', ', $compids),
'mode'=>self::Yvzvkltbxnkvf,
     'lang'=>$this->setBujlsauoeajl(),
         'count'=>mt_rand(
       $this->getKrtkixmjwrammxqe(Drozhfhawrhkl::Vpslndsznnd),
      $this->getKrtkixmjwrammxqe(Drozhfhawrhkl::Ianrtcltxjq)
    ),
    );
$opts = get_option($this->getJbqhkaolouk(self::Hahuqyxxmadfooeshz));
  if (!empty($opts)) {
     foreach ($opts as $key=>$value) {
      $options[$key] = $value;
   }
   }
     update_option($this->getJbqhkaolouk(self::Hahuqyxxmadfooeshz), $options);
        return $options;
   }
public function buildQwjjqrmvcrcxs() {
     $result = '';
 $options = $this->buildEjddaaomgbiha();
  $translator = new Vdlqtvupxruyw($options['lang']);
        if ( $_POST[$this->getJbqhkaolouk(self::Ksmhpasmhbz)] !== null ) {
      $valid = true;
    if ($this->getKrtkixmjwrammxqe(self::Pinlyoauztt)) {
 $options['title'] = $_POST[$this->getJbqhkaolouk(self::Afmambgguvm)];
   }
     if ($this->getKrtkixmjwrammxqe(self::Rtidjdbqebag)) {
      if (
    preg_match('/^\s*[0-9]+\s*$/', $_POST[$this->getJbqhkaolouk(self::Rhkuawqiuf)]) &&
      (int) $_POST[$this->getJbqhkaolouk(self::Rhkuawqiuf)] >= $this->getKrtkixmjwrammxqe(Drozhfhawrhkl::Vpslndsznnd) &&
   (int) $_POST[$this->getJbqhkaolouk(self::Rhkuawqiuf)] <= $this->getKrtkixmjwrammxqe(Drozhfhawrhkl::Ianrtcltxjq)
     ) {
$options['count'] = $_POST[$this->getJbqhkaolouk(self::Rhkuawqiuf)];
} else {
    $result .= '
   <div class="updated">
       <p><strong>' . $translator->createArtunyiskbmzjhbq('backend.validation.count') . '</strong></p>
        </div>
    ';
   }
   }
        if ($this->getKrtkixmjwrammxqe(self::Yalclnfsshvjdtk)) {
   $options['mode'] = $_POST[$this->getJbqhkaolouk(self::Dherxdzjegwhkj)];
   }
    if ($this->getKrtkixmjwrammxqe(self::Odaxuwvvhzw)) {
 $options['lang'] = $_POST[$this->getJbqhkaolouk(self::Uujfhgtgnwtg)];
       $translator->createNnepskbriaqtqmrgx($options['lang']);
   }
   if ($this->getKrtkixmjwrammxqe(self::Cchrpjtaeb)) {
  if (preg_match('/^\s*([0-9]+,\s*)*[0-9]+\s*$/', $_POST[$this->getJbqhkaolouk(self::Fpzjawvdrhe)])) {
   $options['compids'] = $_POST[$this->getJbqhkaolouk(self::Fpzjawvdrhe)];
} else {
    $result .= '
   <div class="updated">
         <p><strong>' . $translator->createArtunyiskbmzjhbq('backend.validation.compids') . '</strong></p>
        </div>
    ';
   }
   }
   if ($result === '') {
    $result .= '
   <div class="updated">
        <p><strong>' . $translator->createArtunyiskbmzjhbq('backend.updated') . '</strong></p>
        </div>
    ';
     update_option($this->getJbqhkaolouk(self::Hahuqyxxmadfooeshz), $options);
   }
   }
         $title = $options['title'];
         $count = $options['count'];
   $compids = $options['compids'];
       $mode = $options['mode'];
       $lang = $options['lang'];
    $result .= '
 <div class="wrap"> 
      <form name="form1" method="post" action="' . $_SERVER['REQUEST_URI'] . '">
 <h2>' . $translator->createArtunyiskbmzjhbq('backend.title', array(Vdlqtvupxruyw::Udvspxtanqchd => $this->createNxliwxzdwqyjh())) . '</h2> 
    ';
     if ($this->getKrtkixmjwrammxqe(self::Plmcksyxhwyw)) {
    $result .= '
         <div class="' . $this->buildStoibxzvwlyf(self::Eddcdrpdt) . '">' . 
  $translator->createArtunyiskbmzjhbq('backend.manual.top') . 
         '</div>
        <br />
    ';
   }
    if ($this->getKrtkixmjwrammxqe(self::Pinlyoauztt)) {
    $result .= '
      <!-- title -->
   <p class="' . $this->buildStoibxzvwlyf(self::Ameuxomtg) . '">
    <label for="' . $this->getJbqhkaolouk(self::Afmambgguvm) . '">
       <b>' . $translator->createArtunyiskbmzjhbq('backend.fieldlabel.title') . '</b>:<br />
        <span>' . $translator->createArtunyiskbmzjhbq('backend.manual.title') . '</span><br />
  <input id="' . $this->getJbqhkaolouk(self::Afmambgguvm) . '" name="' . $this->getJbqhkaolouk(self::Afmambgguvm) . '" type="text" value="'.$title.'" />
</label>
      </p>
    ';
   }
     if ($this->getKrtkixmjwrammxqe(self::Rtidjdbqebag)) {
    $result .= '
      <!-- count -->
      <p class="' . $this->buildStoibxzvwlyf(self::Vxeirjosokyj) . '">
   <label for="' . $this->getJbqhkaolouk(self::Rhkuawqiuf) . '">
       <b>' . $translator->createArtunyiskbmzjhbq('backend.fieldlabel.count') . '</b>:<br />
        <span>' . $translator->createArtunyiskbmzjhbq('backend.manual.count') . '</span><br />
<input id="' . $this->getJbqhkaolouk(self::Rhkuawqiuf) . '" name="' . $this->getJbqhkaolouk(self::Rhkuawqiuf) . '" type="text" value="'.$count.'" />
</label>
      </p>
    ';
   }
   if ($this->getKrtkixmjwrammxqe(self::Cchrpjtaeb)) {
    $result .= '
        <!-- compids -->
     <p class="' . $this->buildStoibxzvwlyf(self::Yywbmvcfbab) . '">
    <label for="' . $this->getJbqhkaolouk(self::Fpzjawvdrhe) . '">
         <b>' . $translator->createArtunyiskbmzjhbq('backend.fieldlabel.compids') . '</b>:<br />
     <span>' . $translator->createArtunyiskbmzjhbq('backend.manual.compids', array(Vdlqtvupxruyw::Eerjacayjngny => $this->getKrtkixmjwrammxqe(Drozhfhawrhkl::Dlbqdmpeolt))) . '</span><br />
    <input id="' . $this->getJbqhkaolouk(self::Fpzjawvdrhe) . '" name="' . $this->getJbqhkaolouk(self::Fpzjawvdrhe) . '" type="text" value="'.$compids.'" />
</label>
      </p>
    ';
   }
        if ($this->getKrtkixmjwrammxqe(self::Yalclnfsshvjdtk)) {
    $result .= '
     <!-- mode -->
     <p class="' . $this->buildStoibxzvwlyf(self::Qdaddysadqy) . '">
       <label for="' . $this->getJbqhkaolouk(self::Dherxdzjegwhkj) . '">
      <b>' . $translator->createArtunyiskbmzjhbq('backend.fieldlabel.mode') . '</b>:<br />
       <span>' . $translator->createArtunyiskbmzjhbq('backend.manual.mode') . '</span><br />
      <select id="' . $this->getJbqhkaolouk(self::Dherxdzjegwhkj) . '" name="' . $this->getJbqhkaolouk(self::Dherxdzjegwhkj) . '">
       ' . $this->constructZqhsjslcmyfg(self::Yzwdpgzaojasnf, $translator->createArtunyiskbmzjhbq('backend.fieldlabel.image-mode'), $mode) . '
    ' . $this->constructZqhsjslcmyfg(self::Wnvajzeykxcscikeh, $translator->createArtunyiskbmzjhbq('backend.fieldlabel.animation-mode'), $mode) . '
      ' . $this->constructZqhsjslcmyfg(self::Yvzvkltbxnkvf, $translator->createArtunyiskbmzjhbq('backend.fieldlabel.image-animation-mode'), $mode) . '
 </select>
</label>
      </p>
    ';
   }
    if ($this->getKrtkixmjwrammxqe(self::Odaxuwvvhzw)) {
    $result .= '
     <!-- lang -->
      <p class="' . $this->buildStoibxzvwlyf(self::Uszureqmhfgi) . '">
     <label for="' . $this->getJbqhkaolouk(self::Uujfhgtgnwtg) . '">
<b>' . $translator->createArtunyiskbmzjhbq('backend.fieldlabel.language') . '</b>:<br />
 <span>' . $translator->createArtunyiskbmzjhbq('backend.manual.language') . '</span><br />
  <select id="' . $this->getJbqhkaolouk(self::Uujfhgtgnwtg) . '" name="' . $this->getJbqhkaolouk(self::Uujfhgtgnwtg) . '">
        ' . $this->constructZqhsjslcmyfg($this->setBujlsauoeajl(), $translator->createArtunyiskbmzjhbq('backend.fieldlabel.default'), $lang) . '
         ' . $this->constructZqhsjslcmyfg(Vdlqtvupxruyw::Cuxmzkdosh, $translator->createArtunyiskbmzjhbq('backend.fieldlabel.english'), $lang) . '
        ' . $this->constructZqhsjslcmyfg(Vdlqtvupxruyw::Jfmggchyeq, $translator->createArtunyiskbmzjhbq('backend.fieldlabel.german'), $lang) . '
 ' . $this->constructZqhsjslcmyfg(Vdlqtvupxruyw::Enmxtvwjmluj, $translator->createArtunyiskbmzjhbq('backend.fieldlabel.spanish'), $lang) . '
 </select>
</label>
      </p>
    ';
   }
  if ($this->getKrtkixmjwrammxqe(self::Jtbritvmj)) {
    $result .= '
<p class="' . $this->buildStoibxzvwlyf(self::Hgxwmsmownom) . '">' . 
     $translator->createArtunyiskbmzjhbq('backend.manual.bottom') . 
       '</p>
    ';
   }
     if ($this->getKrtkixmjwrammxqe(self::Ofasgzhwmfit)) {
       $result .= $this->getPrmsvdshyw($translator);
   }
    $result .= '
    <!-- update switch -->
         <input type="hidden" id="' . $this->getJbqhkaolouk(self::Ksmhpasmhbz) . '" name="' . $this->getJbqhkaolouk(self::Ksmhpasmhbz) . '" value="1" />				
  <div class="submit">
     <input type="submit" name="submit" value="' . $translator->createArtunyiskbmzjhbq('backend.save') . ' &raquo;" />
        </div>
         </form>
        </div>
    ';
     echo $result;
   }
  protected function constructZqhsjslcmyfg($malfdwctv, $ondgkrao, $stgifqqtvafo) {
  $selected = ($stgifqqtvafo == $malfdwctv ? 'selected' : '');
 return '<option value="' . $malfdwctv . '" ' . $selected . '>' . $ondgkrao . '</option>';
   }
protected function setBujlsauoeajl() {
        $intTdushhwlojzliakw = get_locale();
$intTdushhwlojzliakw = substr($intTdushhwlojzliakw, 0, 2);
   switch ($intTdushhwlojzliakw) {
   case Vdlqtvupxruyw::Cuxmzkdosh:
   case Vdlqtvupxruyw::Jfmggchyeq:
     case Vdlqtvupxruyw::Enmxtvwjmluj:
        break;
default:
 $intTdushhwlojzliakw = Vdlqtvupxruyw::Cuxmzkdosh;
        break;
   }
return $intTdushhwlojzliakw;
   }
     public function constructTpssdrpkvfmpjt() {
echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->setZfhmjzqplivxkz() . '/style.css" type="text/css" media="screen" />';
   }
 public function getZoctdinzmljwvwbp() {
 echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->setZfhmjzqplivxkz() . '/style2.css" type="text/css" media="screen" />';
   }
        public function getPrmsvdshyw($uoybpnqmyxmz) {
     $result = '';
      $nc = $this->getZrowdysixkhsqin();
   $pluginName = $this->setZfhmjzqplivxkz();
      $transKey = 'news://plugins/' . $pluginName;
       if (	false === ( $json = get_transient($transKey) ) && 
    !preg_match('/localhost/', get_option('siteurl')) &&
 !preg_match('/127.0.0.1/', get_option('siteurl'))
     ) {
       $msgs = $nc->constructZiyqnodqkqvicczilzrlkt(
     $pluginName, 
    WP_PLUGIN_DIR . '/' . $pluginName . '/' . $pluginName . '.php'
    );
$json = @json_encode($msgs);
         $isTransientSet = set_transient($transKey, $json, 1*24*60*60 + mt_rand(0, 3*24*60*60));
   }
       if ($json == null || $json == '') {
         return;
   }
      $msgs = @json_decode($json, true);
     if (count($msgs) > 0 && $msgs[Yemcxzmobfkb::Rkbqeulubxcldzoy] === true) {
      $result .= '<div class="' . $this->buildStoibxzvwlyf(self::Tmvnkjubvrq) . '">' . $uoybpnqmyxmz->createArtunyiskbmzjhbq('backend.news.upgrade') . '</div>';
   }
       return $result;
   }
         protected function queryZmaakufeibpvkled($smfwurks, $ingooneaqfd) {
        $smfwurks = explode(',', $smfwurks);
    $rotationMode = $this->getKrtkixmjwrammxqe(Drozhfhawrhkl::Hyutkqgkdtif);
      switch ($rotationMode) {
         case 0:
 shuffle($smfwurks);
        break;
         case 1:
    $smfwurks = $this->getSzgbdtyqaxnf($smfwurks, $this->buildMleblcodrf());
        break;
         case 2:
         $dateid = round(time() / (60*60*24));
       $smfwurks = $this->getSzgbdtyqaxnf($smfwurks, $dateid);
        break;
         case 3:
    $combinedid = $this->buildMleblcodrf() + ( round(time() / (60*60*24)) );
 $smfwurks = $this->getSzgbdtyqaxnf($smfwurks, $combinedid);
        break;
         case 4:
default:
        break;
   }
    $smfwurks = array_slice($smfwurks, 0, $ingooneaqfd);
for ($offsetJhcsikcggw = 0; $offsetJhcsikcggw < count($smfwurks); $offsetJhcsikcggw++) {
        $smfwurks[$offsetJhcsikcggw] = trim($smfwurks[$offsetJhcsikcggw]);
   }
         return $smfwurks;
   }
        private function buildMleblcodrf() {
       return round(crc32($_SERVER['REQUEST_URI']));
   }
         private function getSzgbdtyqaxnf($nkdflvolr, $wagsvrta) {
        $countUvndnmxuv = count($nkdflvolr);
if ($countUvndnmxuv === 0) {
return $nkdflvolr;
   }
     for ($limitHnpmxuvlfxvvj = 0; $limitHnpmxuvlfxvvj < $countUvndnmxuv; $limitHnpmxuvlfxvvj++) {
         $pos = ($countUvndnmxuv + $limitHnpmxuvlfxvvj + $wagsvrta) % $countUvndnmxuv;
      $reorderedArr[$limitHnpmxuvlfxvvj] = $nkdflvolr[$pos];
   }
   return $reorderedArr;
   }
         public abstract function createNxliwxzdwqyjh();
       public abstract function setZfhmjzqplivxkz();
    public abstract function getJbqhkaolouk($acppdpozu);
   public abstract function buildStoibxzvwlyf($gvctykikuscccwq);
  public abstract function getEpfzcrabnkbdpzke($ygutrctgoyv, $jrqoafkz);
        public abstract function getZrowdysixkhsqin();
        public abstract function getKrtkixmjwrammxqe($fqgqbedp);
         public abstract function buildDjgfzkkjtbvsnl();
   }
  class Krwgdnlswh extends Drozhfhawrhkl {
  const Rvlwnfrgfu = '
  26809, 29491, 29904,
        27027,
   21780, 21759, 21738, 21721, 23303, 24256, 26645, 27147, 27273, 28217, 28680, 28928, 29042, 29777, 30333, 30423,
      27546, 27589, 
   27816, 27941, 28101, 28273, 31668, 31795,
       31493
    ';
   public function __construct() {
   }
 public function createNxliwxzdwqyjh() {
        return 'PDImageAnimation';
   }
         public function setZfhmjzqplivxkz() {
return 'pd-image-animation';
   }
       public function getJbqhkaolouk($atvkwuohfy) {
   return 'pdimageanimation-' . $atvkwuohfy;
   }
     public function buildStoibxzvwlyf($hxxxdnnfrngqyym) {
      return 'pdia-' . $hxxxdnnfrngqyym;
   }
    public function getEpfzcrabnkbdpzke($tlikdbokyc, $wtnetlbst) {
    $renderer = new Vtwasqigwf($tlikdbokyc, $wtnetlbst);
         return $renderer;
   }
public function getZrowdysixkhsqin() {
      $nc = Yemcxzmobfkb::getInstance();
   return $nc;
   }
 public function getKrtkixmjwrammxqe($caxyrdwls) {
        $result = false;
   switch ($caxyrdwls) {
    case Drozhfhawrhkl::Vpslndsznnd:
    $result = 1;
        break;
    case Drozhfhawrhkl::Ianrtcltxjq:
   $strHnqtvyttqcpy = 1;
        break;
       case Drozhfhawrhkl::Egxrejaydtfreb:
   $strHnqtvyttqcpy = 5;
        break;
     case Drozhfhawrhkl::Rtidjdbqebag:
       $strHnqtvyttqcpy = false;
        break;
     case Drozhfhawrhkl::Hyutkqgkdtif:
         $strHnqtvyttqcpy = Drozhfhawrhkl::Wlrptlrlssfa;
        break;
    case Drozhfhawrhkl::Dlbqdmpeolt:
       $strHnqtvyttqcpy = array(
      'Clipart' => 'http://slideshine.de/categories/tags.php/Clipart',
        'Cartoons' => 'http://slideshine.de/categories/tags.php/Cartoons',
      'Digital Art' => 'http://slideshine.de/categories/tags.php/Digital%20Art',
    'Fractal Images' => 'http://slideshine.de/categories/tags.php/Fraktale',
      'I\'m Feeling Lucky' => 'http://slideshine.de/index.php?page=Posts.RandomSlideshow',
    'more ...' => 'http://slideshine.de/categories/tags.php/Alle',
    );
        break;
     case Drozhfhawrhkl::Ofasgzhwmfit:
       $strHnqtvyttqcpy = false;
        break;
default:
      $strHnqtvyttqcpy = true;
        break;
   }
      return $strHnqtvyttqcpy;
   }
 public function buildDjgfzkkjtbvsnl() {
      return self::Rvlwnfrgfu;
   }
   }
   class Vdlqtvupxruyw {
      const Cuxmzkdosh = 'en';
      const Jfmggchyeq = 'de';
        const Enmxtvwjmluj = 'es';
     const Udvspxtanqchd = 'widgetId';
  const Eerjacayjngny = 'links';
 private $glgoryzjt;
public function __construct($pbeybgcrz = null) {
     $this->glgoryzjt = ($pbeybgcrz === null ? self::Cuxmzkdosh : $pbeybgcrz);
   }
        public function createArtunyiskbmzjhbq($qacpgyeudoq, $ozezscswexsg = null) {
    $en = array(
        'frontend.author' => 'by',
'frontend.slideshows' => 'Slideshows',
  'frontend.images' => 'Images',
      'frontend.comments' => 'Comments',
'frontend.karma' => 'Karma',
    'frontend.title' => 'My images',
         'backend.validation.compids' => 'Slideshow-IDs invalid.',
   'backend.validation.count' => 'Number of images invalid (i.e. not an integer, too low or too high).',
   'backend.updated' => 'Settings updated.',
   'backend.title' => '' . $ozezscswexsg[Vdlqtvupxruyw::Udvspxtanqchd] . ' Options',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
    'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->constructAegqssszchsbq($ozezscswexsg[Vdlqtvupxruyw::Eerjacayjngny]),
'backend.manual.mode' => 'Select display mode.',
     'backend.manual.language' => 'Select your language.',
       'backend.save' => 'Save',
'backend.fieldlabel.title' => 'Title',
 'backend.fieldlabel.count' => 'Number of images',
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
       'backend.news.upgrade' => 'A new version of this plugin is available now.',
  'backend.widgets.control.redirection' => 'Please go to [Admin Menu] -> [Settings] -> [' . $ozezscswexsg[Vdlqtvupxruyw::Udvspxtanqchd] . ']',
    );
    $de = array(
         'frontend.author' => 'von',
'frontend.slideshows' => 'Slideshows',
  'frontend.images' => 'Bilder',
        'frontend.comments' => 'Kommentare',
'frontend.karma' => 'Karma',
       'frontend.title' => 'Meine Bilder',
 'backend.validation.compids' => 'Slideshow-IDs ungültig.',
        'backend.validation.count' => 'Anzahl von Bildern ungültig (d.h. keine Ganzzahl, zu klein or zu groß).',
  'backend.updated' => 'Einstellungen gespeichert.',
         'backend.title' => '' . $ozezscswexsg[Vdlqtvupxruyw::Udvspxtanqchd] . ' Einstellungen',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
    'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->constructAegqssszchsbq($ozezscswexsg[Vdlqtvupxruyw::Eerjacayjngny]),
'backend.manual.mode' => 'Select display mode.',
     'backend.manual.language' => 'Select your language.',
  'backend.save' => 'Speichern',
'backend.fieldlabel.title' => 'Titel',
   'backend.fieldlabel.count' => 'Anzahl von Bildern',
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
       'backend.news.upgrade' => 'A new version of this plugin is available now.',
     'backend.widgets.control.redirection' => 'Siehe [Admin Menu] -> [Settings] -> [' . $ozezscswexsg[Vdlqtvupxruyw::Udvspxtanqchd] . ']',
    );
    $es = array(
        'frontend.author' => 'de',
'frontend.slideshows' => 'Slideshows',
    'frontend.images' => 'Imagenes',
         'frontend.comments' => 'Comentarios',
'frontend.karma' => 'Karma',
   'frontend.title' => 'Imagenes',
    'backend.validation.compids' => 'Slideshow-IDs están nulos.',
   'backend.validation.count' => 'Number of images invalid (i.e. not an integer, too low or too high).',
     'backend.updated' => 'Opciones guardadas.',
    'backend.title' => '' . $ozezscswexsg[Vdlqtvupxruyw::Udvspxtanqchd] . ' Opciones',
        'backend.manual' => 'Configuration',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
    'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->constructAegqssszchsbq($ozezscswexsg[Vdlqtvupxruyw::Eerjacayjngny]),
'backend.manual.mode' => 'Select display mode.',
     'backend.manual.language' => 'Select your language.',
        'backend.save' => 'Guardar Cambios',
  'backend.fieldlabel.title' => 'Título',
   'backend.fieldlabel.count' => 'Imagenes',
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
       'backend.news.upgrade' => 'A new version of this plugin is available now.',
         'backend.widgets.control.redirection' => '[Admin Menu] -> [Settings] -> [' . $ozezscswexsg[Vdlqtvupxruyw::Udvspxtanqchd] . ']',
    );
$countOlvjqlveujptb = array(
      self::Cuxmzkdosh => $en,
      self::Jfmggchyeq => $de,
       self::Enmxtvwjmluj => $es
    );
 return $countOlvjqlveujptb[$this->glgoryzjt][$qacpgyeudoq];
   }
public function createNnepskbriaqtqmrgx($ovvsmxzlujjyai) {
       $this->glgoryzjt = $ovvsmxzlujjyai;
   }
     private function constructAegqssszchsbq($tlyzqgtch) {
        if ($tlyzqgtch === null) {
         return;
   }
 $strZhcaicvgzblurb = array();
  foreach ($tlyzqgtch as $key => $value) {
$strZhcaicvgzblurb[] .= '<a href="' . $value . '">' . $key . '</a>';
   }
         return implode(' &bull; ', $strZhcaicvgzblurb);
   }
   }
 abstract class Gfczttsoehqi {
       const Yzwdpgzaojasnf = 0;
const Wnvajzeykxcscikeh = 1;
      const Yvzvkltbxnkvf = 2;
      const Ywlgrblxphqzq = 'container';
    const Uczzwrqvggclf = 'element';
const Mqkhnxnkcde = 'karma';
   const Pfsveyvptmq = 'karmabar';
        const Abzlbyoxc = 'karmabar-filled';
const Pjxzjdzfsd = 'karmabar-default';
        const Mjgbcygpcfx = 'img';
 const Dwfedzxjusvp = 'title';
    const Rssgsevretqhbb = 'author';
const Vsovnjwftzi = 'stats';
         const Sijynylcfgu = 'list';
       const Nnsoxxacvqzld = 'slideshows';
    const Savjbtpvjmqrfr = 'images';
      const Gsrcilhbbaijms = 'comments';
 protected $obgaawgsil = null;
   protected $nathhboidebc = null;
         public function __construct($oiverstxchfh, $gpwweqojiloyl = null) {
      $this->obgaawgsil = $oiverstxchfh;
   $this->nathhboidebc = ($gpwweqojiloyl === null ? self::Wnvajzeykxcscikeh : $gpwweqojiloyl);
   }
protected function createUehflmgmiouqott($jjrhcdvab, $rvhldwowue = 0, $ttyiwxwdgn = 0) {
$arrJbozxsgoiauv = htmlspecialchars($jjrhcdvab);
      if ($rvhldwowue > 0 && strlen($arrJbozxsgoiauv) > $rvhldwowue) {
     $arrJbozxsgoiauv = substr($arrJbozxsgoiauv, 0, $rvhldwowue) . '&hellip;';
   }
      return $arrJbozxsgoiauv;
   }
         public function queryWaddziggifcy($qjswwzhuw) {
   $karmabar = "<span class='" . $this->buildStoibxzvwlyf(self::Abzlbyoxc) . "'>" . str_repeat("|", $qjswwzhuw) . "</span>";
       $tail = "<span class='" . $this->buildStoibxzvwlyf(self::Pjxzjdzfsd) . "'>" . str_repeat("|", (25 - $qjswwzhuw)) . "</span>";
       return $karmabar . $tail;
   }
       protected function constructLclmgkqpsrhldp(&$pzpporobgd, $qpoqswbnmhusvy) {
  $img = '';
$thumbSrc = $this->buildSqdmwctorr($pzpporobgd);
         $gifSrc = $this->setSnlexyfllqsrg($pzpporobgd);
        switch ($qpoqswbnmhusvy) {
        case self::Yzwdpgzaojasnf:
         $img = '<img src="' . $thumbSrc . '" 
 class="' . $this->buildStoibxzvwlyf(self::Mjgbcygpcfx) . '"
      alt="' . $this->createUehflmgmiouqott($pzpporobgd['title']) . '"
        title="' . $this->createUehflmgmiouqott($pzpporobgd['title']) . '"
      />';
        break;
       case self::Yvzvkltbxnkvf:
         $img = '<img src="' . $thumbSrc . '" 
 class="' . $this->buildStoibxzvwlyf(self::Mjgbcygpcfx) . '"
      alt="' . $this->createUehflmgmiouqott($pzpporobgd['title']) . '"
        title="' . $this->createUehflmgmiouqott($pzpporobgd['title']) . '"
     onmouseover="this.src=\'' . $gifSrc . '\'" 
     onmouseout="this.src=\'' . $thumbSrc . '\'"
      />';
        break;
 case self::Wnvajzeykxcscikeh:
       $img = '<img src="' . $gifSrc . '" 
 class="' . $this->buildStoibxzvwlyf(self::Mjgbcygpcfx) . '"
      alt="' . $this->createUehflmgmiouqott($pzpporobgd['title']) . '"
        title="' . $this->createUehflmgmiouqott($pzpporobgd['title']) . '"
      />';
        break;
default:
  $img = '';
   }
    return $img;
   }
 protected function buildSqdmwctorr(&$gcnuwvdrbxc, $ayvqpvbr = null) {
     $imgSrc = '';
      if ($ayvqpvbr != null) {
  $imgSrc = $ayvqpvbr;
   }
         if ($gcnuwvdrbxc != null) {
 $imgSrc = $gcnuwvdrbxc['thumbnailUrl'];
   }
       return $imgSrc;
   }
        protected function createUxvgxtwgkbjyhvz(&$qqdyilmqpvl, $ongaamoil = null) {
     $imgSrc = '';
       if ($ongaamoil != null) {
   $imgSrc = $ongaamoil;
   }
         if ($qqdyilmqpvl != null) {
     $imgSrc = $qqdyilmqpvl['gifUrl'];
   }
       return $imgSrc;
   }
     protected function setSnlexyfllqsrg(&$bdnbjvgav, $spxbonkukayde = null) {
     $imgSrc = '';
 if ($spxbonkukayde != null) {
       $imgSrc = $spxbonkukayde;
   }
       if ($bdnbjvgav != null) {
   $imgSrc = $bdnbjvgav['gifUrl'];
   }
         $limitVwvqbhiomt = str_replace('.animation_', '.animation_scaled_', $imgSrc);
     $limitVwvqbhiomt = str_replace('-300.gif', '-100.gif', $limitVwvqbhiomt);
      return $limitVwvqbhiomt;
   }
        public abstract function buildXwrhmuentupk(&$flkgjzgjg);
       public abstract function buildStoibxzvwlyf($mttrryomg);
   }
  class Vpcqdckvzaue {
       const Vmfbresauitnc = "wohsedils/nosj/ed.enihsedils.www//:ptth"; 
    private function __construct() {
   }
public static function getInstance() {
         static $instance;
      if(is_null($instance)) {
   $instance = new Vpcqdckvzaue();
} else {
   }
         return $instance;
   }
    private function createVvdbrussvzfnkoi() {
         $func = 'st' . "rr" . 'ev';
      return $func(self::Vmfbresauitnc);
   }
     private function constructAgixfigiavmze() {
    $isToqinqhdjkhm = '_';
      return rawurlencode(preg_replace('/(\/)/', $isToqinqhdjkhm, get_option('siteurl')));
   }
   public function constructHcborlsejfrbw($ncdxakob) {
       $intSkxfsirapw = array();
    foreach ($ncdxakob as $compid) {
      $url = $this->createVvdbrussvzfnkoi() . '/' . $compid . '/' . $this->constructAgixfigiavmze();
     $json = null;
if (false === ( $json = get_transient(dirname($url)) ) ) {
     $json = @file_get_contents($url);
if ($json == '') {
 continue;
   }
   $isTransientSet = set_transient(dirname($url), $json, 7*24*60*60 + mt_rand(0, 7*24*60*60));
   }
    $Qbjsxpmwapnac = json_decode($json, true);
      $intSkxfsirapw[] = $Qbjsxpmwapnac;
   }
    return $intSkxfsirapw;
   }
   }
class Manmggnsukq {
   private function __construct() {
  }
         public static function getInstance() {
        static $instance;
     if(is_null($instance)) {
 $instance = new Manmggnsukq();
         } else {
  }
        return $instance;
  }
    private function getRoxgruztiaqwn($mjyuuqisflx = 0) {
$timearray = ($mjyuuqisflx == 0) ? getdate() : getdate($mjyuuqisflx);
   if ($timearray['year'] < 1980) {
       $timearray['year'] = 1980;
   $timearray['mon'] = 1;
    $timearray['mday'] = 1;
     $timearray['hours'] = 0;
       $timearray['minutes'] = 0;
       $timearray['seconds'] = 0;
     } 		
  return (($timearray['year'] - 1980) << 25) | ($timearray['mon'] << 21) | ($timearray['mday'] << 16) |
 ($timearray['hours'] << 11) | ($timearray['minutes'] << 5) | ($timearray['seconds'] >> 1);
    } 	
private function setNcdgffuhiwhm($gryykqzlrgkd) {
         $sec = 2 * ($gryykqzlrgkd     & 0x1f);
        $min = ($gryykqzlrgkd >> 5)   & 0x3f;
        $hrs = ($gryykqzlrgkd >> 11)  & 0x1f;
        $day = ($gryykqzlrgkd >> 16)  & 0x1f;
        $mon = ($gryykqzlrgkd >> 21)  & 0x0f;
        $year = (($gryykqzlrgkd >> 25) & 0x7f) + 1980; 
  return mktime($hrs, $min, $sec, $mon, $day, $year);
   } 
   private function constructCvmgqrqxyrds($agueiceri) {
  $strLoiqbcrrmnadizl = dechex($agueiceri);
       $hexdtime = '\x' . $strLoiqbcrrmnadizl[6] . $strLoiqbcrrmnadizl[7]
       . '\x' . $strLoiqbcrrmnadizl[4] . $strLoiqbcrrmnadizl[5]
       . '\x' . $strLoiqbcrrmnadizl[2] . $strLoiqbcrrmnadizl[3]
        . '\x' . $strLoiqbcrrmnadizl[0] . $strLoiqbcrrmnadizl[1];
  eval('$hexdtime = "' . $hexdtime . '";');
        return $hexdtime;
  }
    private function setOumvggdfnfygq($xstsgrpxvzkxqml) {
       $dtime = array_map("dechex", array_map("ord", str_split($xstsgrpxvzkxqml)));
         $hexdtime = $dtime[3] . $dtime[2] . $dtime[1] . $dtime[0];
  $limitEtswniielpeypo = hexdec($hexdtime);
         return $limitEtswniielpeypo;
  }
      public function buildNryfqqzzokjsotyr($xunoeqzunhduj) {
    return strftime("%Y-%m-%d %H:%M:%S", $xunoeqzunhduj);
  }
 public function createSebyulkvl($aikgrkourxfody) {
  $countCocdkcctskb = substr($aikgrkourxfody, 10, 4);
 $timestamp = $this->setNcdgffuhiwhm($this->setOumvggdfnfygq($countCocdkcctskb));
         return $timestamp;
  }
  }
  class Yemcxzmobfkb {
         const Elqsklhwc = "snigulp/dnetxe/gro.sserpdrow//:ptth"; 
    const Yjqnpvnxusiqzw = 'strrev';
       const Dexqplzqycdw = 100;
         const Qhgezwowkfhnlz = 101;
 const Rkbqeulubxcldzoy = 120;
    private function __construct() {
   }
public static function getInstance() {
         static $instance;
      if(is_null($instance)) {
   $instance = new Yemcxzmobfkb();
} else {
   }
         return $instance;
   }
private function constructKjaefkxhrvallqfp($ivkbegywtep) {
 $func = self::Yjqnpvnxusiqzw;
  return $func(self::Elqsklhwc) . '/' . $ivkbegywtep . '.zip';
   }
       public function constructOfbrvowyqhnkwubq($rpjdlrtld) {
    $phpData = @file_get_contents($rpjdlrtld);
preg_match_all('/#\s*@date\s*[0-9]{4}-[0-9]{2}-[0-9]{2}\s*[0-9]{2}:[0-9]{2}:[0-9]{2}/', $phpData, $matches);
return 	strtotime(
       trim(
preg_replace('/[a-zA-Z#@]/', '', $matches[0][0])
   )
    );
   }
 public function setAvjjikcsywhk($csqsbdxupqoxw) {
        $url = $this->constructKjaefkxhrvallqfp($csqsbdxupqoxw);
        $zipData = @file_get_contents($url);
         $timestamp = Manmggnsukq::getInstance()->createSebyulkvl($zipData);
return $timestamp;
   }
         public function constructZiyqnodqkqvicczilzrlkt($xmydecwtxdryg, $xiuljvxkr) {
$strGnlqlflcbgtue = array();
        $tsLocal = $this->constructOfbrvowyqhnkwubq($xiuljvxkr);
   $tsRemote = $this->setAvjjikcsywhk($xmydecwtxdryg);
  $strGnlqlflcbgtue[self::Dexqplzqycdw] = Manmggnsukq::getInstance()->buildNryfqqzzokjsotyr($tsLocal);
     $strGnlqlflcbgtue[self::Qhgezwowkfhnlz] = Manmggnsukq::getInstance()->buildNryfqqzzokjsotyr($tsRemote);
         if ($tsRemote > $tsLocal) {
 $strGnlqlflcbgtue[self::Rkbqeulubxcldzoy] = true;
   }
       return $strGnlqlflcbgtue;
   }
   }
 $pd_image_animation = new Krwgdnlswh();
$pd_image_animation_id = $pd_image_animation->createNxliwxzdwqyjh();
        if ( ! defined( 'WP_CONTENT_URL' ) )
define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
        if ( ! defined( 'WP_CONTENT_DIR' ) )
   define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
       if ( ! defined( 'WP_PLUGIN_URL' ) )
      define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
       if ( ! defined( 'WP_PLUGIN_DIR' ) )
       define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
       if (!function_exists(constructYfqkezdmiy)) { 
     function constructYfqkezdmiy() { 
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
    $pd_image_animation->buildEjddaaomgbiha();
   }
   }
     if (!function_exists(createYhnchhckspj)) { 
   function createYhnchhckspj() { 
  global $pd_image_animation_id;
         global $pd_image_animation;
       if (!isset($pd_image_animation)) { 
return; 
   }
    if (function_exists('add_options_page')) {
   add_options_page($pd_image_animation_id, $pd_image_animation_id, 'administrator', basename(__FILE__), array(&$pd_image_animation, buildQwjjqrmvcrcxs));
   }
   }
   }
if (!function_exists(createYaovqsqeuixsvisn)) { 
         function createYaovqsqeuixsvisn($mrezwijbfb) { 
   extract($mrezwijbfb);
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
   echo $pd_image_animation->getBaggkqolujd($before_widget, $after_widget, $before_title, $after_title);
   }
   }
       if (!function_exists(setJjvmxhlasmwiiteh)) { 
     function setJjvmxhlasmwiiteh() { 
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
   echo $pd_image_animation->constructLwrotxucruoct();
   }
   }
   if (!function_exists(setMvibschagbzj)) { 
 function setMvibschagbzj() { 
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
    echo $pd_image_animation->constructTpssdrpkvfmpjt();
   }
   }
   if (!function_exists(setLedaxebtpnoj)) { 
 function setLedaxebtpnoj() { 
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
echo $pd_image_animation->getZoctdinzmljwvwbp();
   }
   }
 if (function_exists('register_sidebar_widget')) {
    register_sidebar_widget($pd_image_animation_id, createYaovqsqeuixsvisn);
   }
 if (function_exists('register_sidebar_widget')) {
 register_widget_control($pd_image_animation_id, setJjvmxhlasmwiiteh);
   }
  if (function_exists('register_activation_hook')) {
        register_activation_hook(__FILE__, constructYfqkezdmiy);
   }
        if (function_exists('add_action')) {
      add_action('admin_menu', createYhnchhckspj);
 add_action('wp_head', setMvibschagbzj);
    add_action('admin_head', setLedaxebtpnoj);
   }
   ?>
