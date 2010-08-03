<?php
/*
Plugin Name: PDImageAnimation
Plugin URI: http://www.slideshine.de/categories/tags.php/PDImageAnimation
Description: Displays thumbnails and GIF animations of your favourite images and slideshows from the online slideshow site slideshine.de.
Version: 2.5.0
Author: mfard
Author URI: http://www.slideshine.de/categories/tags.php/PDImageAnimation
*/

# @date 2010-08-04 15-08-26
   abstract class Uydfptiynsymbh {
    const Qbqdzbiiqjiwl = 'options';
 const Xjlnvdnxvas = 'submit';
        const Qdhbfqzgt = 'title';
   const Omohfiiwwyffwt = 'count';
         const Hhuwshygscl = 'mode';
      const Lnxmixfvgxpibctdiz = 'lang';
const Vfhmshfnw = 'compids';
   const Tahlvgehmo = 0;
   const Xyrbvlccnz = 1;
         const Bjzqzjfataexzfg = 2;		
const Xhmyvguhzzrio = 'backend-title';
      const Faildrqbd = 'backend-count';
  const Uabrtegwnpfcq = 'backend-compids';
      const Mcsnffiyyo = 'backend-mode';
        const Yogflakchmbw = 'backend-lang';
       const Pmmyxsgynsu = 'backend-head';
       const Ghcidasazyn = 'backend-foot';
        const Htakfrewbnmv = 'backend-news';
    const Fxdiqjghmwffpbhgbg = 'backend-info';
       const Lgutsgggclbr = 101;
      const Vmpnhyaxree = 102;
         const Jtfnigwcvvjpia = 103;
    const Tqqczafxs = 104;
     const Gsqulvhiia = 105;
        const Ybadkhdrzklch = 106;
      const Ffrptbmdqww = 107;
      const Tgutpikxxkn = 108;
        const Hdgiszdofiawl = 109;
const Ovhbjreueovopol = 110;
        const Asbwgyijxswjz = 111;
    const Lecpkiauy = 113;
     const Zebhzoqfny = 112;
 const Ozdqfnlxgutzblzg = 120;
   const Hepserlfwc = 0;
      const Dsjzfnbldnvhu = 1;
      const Neakfjhrwxvfe = 2;
      const Bemhaogpuzqmk = 3;
     const Onhdjmopntgu = 4;
      public function buildIecbgqfswoerijnafs($bewizgmrg, $ymkxwpzuq, $qifcymtgpfjb, $bdgohxrywnx) {
  $options = get_option($this->constructKzmjufpsi(self::Qbqdzbiiqjiwl));
         $title = $options['title'];
    $compids = $this->createOzdvnrfmdeeldvrzw($options['compids'], $options['count']);
       $mode = $options['mode'];
       $lang = $options['lang'];
    $karma_data = Hexwrwxlqkswz::getInstance()->createKcsitytjeky($compids);
$translator = new Ylktpykmclhn($lang);
    $renderer = $this->constructRlxxmxaybioto($translator, $mode);
        echo $bewizgmrg;
     echo $qifcymtgpfjb . $title . $bdgohxrywnx;
     echo $renderer->setOztavntxie($karma_data);
        echo $ymkxwpzuq;
   }
 public function buildOtsrjhjqhncozy() {
     $options = $this->buildDjjzfwncutjylnxfb();
         $title = $options['title'];
 $translator = new Ylktpykmclhn($options['lang']);
   echo '<p>' . $translator->constructPpyrpovyxenx('backend.widgets.control.redirection', array(Ylktpykmclhn::Jpmahzkrxg => $this->queryBkgyhwnukwgchk())) . '</p>';
 echo '<input type="hidden" id="' . $this->constructKzmjufpsi(self::Xjlnvdnxvas) . '" name="' . $this->constructKzmjufpsi(self::Xjlnvdnxvas) . '" value="1" />';
   }
    public function buildDjjzfwncutjylnxfb() {
         $translator = new Ylktpykmclhn($this->constructDyvcnxmkzzdqorco());
$compids = explode(',', $this->getDndxjfyegt());
shuffle($compids);
     $compids = array_slice(
     $compids, 0, 
      min(
 $this->queryNzgduejocjllwottme(Uydfptiynsymbh::Zebhzoqfny),
       count($compids)
   )
    );
         for($isKgdmldtzvso = 0; $isKgdmldtzvso < count($compids); $isKgdmldtzvso++) {
$compids[$isKgdmldtzvso] = trim($compids[$isKgdmldtzvso]);
   }
         $options = array(
    'title'=>$translator->constructPpyrpovyxenx('frontend.title'),
       'compids'=>implode(', ', $compids),
  'mode'=>self::Bjzqzjfataexzfg,
     'lang'=>$this->constructDyvcnxmkzzdqorco(),
        'count'=>$this->queryNzgduejocjllwottme(Uydfptiynsymbh::Lecpkiauy)
    );
         $opts = get_option($this->constructKzmjufpsi(self::Qbqdzbiiqjiwl));
  if (!empty($opts)) {
     foreach ($opts as $key=>$value) {
      $options[$key] = $value;
   }
   }
    update_option($this->constructKzmjufpsi(self::Qbqdzbiiqjiwl), $options);
        return $options;
   }
        public function buildIikomncpuoe() {
     $result = '';
     $options = $this->buildDjjzfwncutjylnxfb();
 $translator = new Ylktpykmclhn($options['lang']);
  if ( $_POST[$this->constructKzmjufpsi(self::Xjlnvdnxvas)] !== null ) {
      $valid = true;
         if ($this->queryNzgduejocjllwottme(self::Lgutsgggclbr)) {
   $options['title'] = $_POST[$this->constructKzmjufpsi(self::Qdhbfqzgt)];
   }
        if ($this->queryNzgduejocjllwottme(self::Vmpnhyaxree)) {
      if (
  preg_match('/^\s*[0-9]+\s*$/', $_POST[$this->constructKzmjufpsi(self::Omohfiiwwyffwt)]) &&
   (int) $_POST[$this->constructKzmjufpsi(self::Omohfiiwwyffwt)] >= $this->queryNzgduejocjllwottme(Uydfptiynsymbh::Ovhbjreueovopol) &&
        (int) $_POST[$this->constructKzmjufpsi(self::Omohfiiwwyffwt)] <= $this->queryNzgduejocjllwottme(Uydfptiynsymbh::Asbwgyijxswjz)
     ) {
        $options['count'] = $_POST[$this->constructKzmjufpsi(self::Omohfiiwwyffwt)];
} else {
    $result .= '
   <div class="updated">
      <p><strong>' . $translator->constructPpyrpovyxenx('backend.validation.count') . '</strong></p>
        </div>
    ';
   }
   }
      if ($this->queryNzgduejocjllwottme(self::Tqqczafxs)) {
    $options['mode'] = $_POST[$this->constructKzmjufpsi(self::Hhuwshygscl)];
   }
       if ($this->queryNzgduejocjllwottme(self::Gsqulvhiia)) {
 $options['lang'] = $_POST[$this->constructKzmjufpsi(self::Lnxmixfvgxpibctdiz)];
      $translator->setEeaazntwg($options['lang']);
   }
 if ($this->queryNzgduejocjllwottme(self::Jtfnigwcvvjpia)) {
    if (preg_match('/^\s*([0-9]+,\s*)*[0-9]+\s*$/', $_POST[$this->constructKzmjufpsi(self::Vfhmshfnw)])) {
     $options['compids'] = $_POST[$this->constructKzmjufpsi(self::Vfhmshfnw)];
} else {
    $result .= '
   <div class="updated">
        <p><strong>' . $translator->constructPpyrpovyxenx('backend.validation.compids') . '</strong></p>
        </div>
    ';
   }
   }
   if ($result === '') {
    $result .= '
   <div class="updated">
       <p><strong>' . $translator->constructPpyrpovyxenx('backend.updated') . '</strong></p>
        </div>
    ';
    update_option($this->constructKzmjufpsi(self::Qbqdzbiiqjiwl), $options);
   }
   }
         $title = $options['title'];
         $count = $options['count'];
   $compids = $options['compids'];
       $mode = $options['mode'];
       $lang = $options['lang'];
    $infoButton = '<span class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Fxdiqjghmwffpbhgbg) . '" onclick="document.getElementsByName(\'' . $this->constructKigtdjknleooqoxdekgsjq(self::Ghcidasazyn) . '\')[0].style.display=\'block\'; return false;">?</span>';
    $result .= '
 <div class="wrap"> 
      <form name="form1" method="post" action="' . $_SERVER['REQUEST_URI'] . '">
      <h2>' . $translator->constructPpyrpovyxenx('backend.title', array(Ylktpykmclhn::Jpmahzkrxg => $this->queryBkgyhwnukwgchk())) . '</h2> 
    ';
if ($this->queryNzgduejocjllwottme(self::Ybadkhdrzklch)) {
    $result .= '
     <div class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Pmmyxsgynsu) . '">' . 
 $translator->constructPpyrpovyxenx('backend.manual.top') . 
         '</div>
        <br />
    ';
   }
         if ($this->queryNzgduejocjllwottme(self::Lgutsgggclbr)) {
    $result .= '
      <!-- title -->
 <p class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Xhmyvguhzzrio) . '">
      <label for="' . $this->constructKzmjufpsi(self::Qdhbfqzgt) . '">
      <b>' . $translator->constructPpyrpovyxenx('backend.fieldlabel.title') . '</b>:<br />
       <span>' . $translator->constructPpyrpovyxenx('backend.manual.title') . '</span><br />
      <input id="' . $this->constructKzmjufpsi(self::Qdhbfqzgt) . '" name="' . $this->constructKzmjufpsi(self::Qdhbfqzgt) . '" type="text" value="'.$title.'" />
</label>
      </p>
    ';
   }
        if ($this->queryNzgduejocjllwottme(self::Vmpnhyaxree)) {
    $result .= '
      <!-- count -->
       <p class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Faildrqbd) . '">
 <label for="' . $this->constructKzmjufpsi(self::Omohfiiwwyffwt) . '">
      <b>' . $translator->constructPpyrpovyxenx('backend.fieldlabel.count') . '</b>:<br />
       <span>' . $translator->constructPpyrpovyxenx('backend.manual.count') . '</span><br />
      <input id="' . $this->constructKzmjufpsi(self::Omohfiiwwyffwt) . '" name="' . $this->constructKzmjufpsi(self::Omohfiiwwyffwt) . '" type="text" value="'.$count.'" />
</label>
      </p>
    ';
   }
 if ($this->queryNzgduejocjllwottme(self::Jtfnigwcvvjpia)) {
    $result .= '
        <!-- compids -->
 <p class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Uabrtegwnpfcq) . '">
      <label for="' . $this->constructKzmjufpsi(self::Vfhmshfnw) . '">
        <b>' . $translator->constructPpyrpovyxenx('backend.fieldlabel.compids') . '</b>:<br />
 <span>' . $translator->constructPpyrpovyxenx('backend.manual.compids', array(Ylktpykmclhn::Bmsjcvlpmvgotvkk => $this->queryNzgduejocjllwottme(Uydfptiynsymbh::Tgutpikxxkn))) . '</span><br />
        <input id="' . $this->constructKzmjufpsi(self::Vfhmshfnw) . '" name="' . $this->constructKzmjufpsi(self::Vfhmshfnw) . '" type="text" value="'.$compids.'" />
</label>
      </p>
    ';
   }
      if ($this->queryNzgduejocjllwottme(self::Tqqczafxs)) {
    $result .= '
     <!-- mode -->
        <p class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Mcsnffiyyo) . '">
        <label for="' . $this->constructKzmjufpsi(self::Hhuwshygscl) . '">
     <b>' . $translator->constructPpyrpovyxenx('backend.fieldlabel.mode') . '</b>:<br />
      <span>' . $translator->constructPpyrpovyxenx('backend.manual.mode') . '</span><br />
        <select id="' . $this->constructKzmjufpsi(self::Hhuwshygscl) . '" name="' . $this->constructKzmjufpsi(self::Hhuwshygscl) . '">
    ' . $this->getEortcnejno(self::Tahlvgehmo, $translator->constructPpyrpovyxenx('backend.fieldlabel.image-mode'), $mode) . '
        ' . $this->getEortcnejno(self::Xyrbvlccnz, $translator->constructPpyrpovyxenx('backend.fieldlabel.animation-mode'), $mode) . '
         ' . $this->getEortcnejno(self::Bjzqzjfataexzfg, $translator->constructPpyrpovyxenx('backend.fieldlabel.image-animation-mode'), $mode) . '
 </select>
</label>
      </p>
    ';
   }
       if ($this->queryNzgduejocjllwottme(self::Gsqulvhiia)) {
    $result .= '
     <!-- lang -->
<p class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Yogflakchmbw) . '">
     <label for="' . $this->constructKzmjufpsi(self::Lnxmixfvgxpibctdiz) . '">
         <b>' . $translator->constructPpyrpovyxenx('backend.fieldlabel.language') . '</b>:<br />
<span>' . $translator->constructPpyrpovyxenx('backend.manual.language') . '</span><br />
  <select id="' . $this->constructKzmjufpsi(self::Lnxmixfvgxpibctdiz) . '" name="' . $this->constructKzmjufpsi(self::Lnxmixfvgxpibctdiz) . '">
         ' . $this->getEortcnejno($this->constructDyvcnxmkzzdqorco(), $translator->constructPpyrpovyxenx('backend.fieldlabel.default'), $lang) . '
        ' . $this->getEortcnejno(Ylktpykmclhn::Qzvbhcmwi, $translator->constructPpyrpovyxenx('backend.fieldlabel.english'), $lang) . '
' . $this->getEortcnejno(Ylktpykmclhn::Jdyearqczjaq, $translator->constructPpyrpovyxenx('backend.fieldlabel.german'), $lang) . '
  ' . $this->getEortcnejno(Ylktpykmclhn::Avisjbbppdqjm, $translator->constructPpyrpovyxenx('backend.fieldlabel.spanish'), $lang) . '
 </select>
</label>
      </p>
    ';
   }
        if ($this->queryNzgduejocjllwottme(self::Ffrptbmdqww)) {
    $result .= '
 ' . $infoButton . '
    <div name="' . $this->constructKigtdjknleooqoxdekgsjq(self::Ghcidasazyn) . '" class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Ghcidasazyn) . '">
     ' . $translator->constructPpyrpovyxenx('backend.manual.bottom')
   ;
if ($this->queryNzgduejocjllwottme(self::Hdgiszdofiawl)) {
   $result .= 
      '<div class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Htakfrewbnmv) . '">' .
  $this->getIxkbzywzxwrqulq($translator) .
 '</div>';
   }
    $result .= '
        </div>
    ';
   }
    $result .= '
    <!-- update switch -->
       <input type="hidden" id="' . $this->constructKzmjufpsi(self::Xjlnvdnxvas) . '" name="' . $this->constructKzmjufpsi(self::Xjlnvdnxvas) . '" value="1" />				
  <div class="submit">
    <input type="submit" name="submit" value="' . $translator->constructPpyrpovyxenx('backend.save') . ' &raquo;" />
        </div>
         </form>
        </div>
    ';
     echo $result;
   }
       protected function getEortcnejno($otvqyjkllehaa, $cuqqsewepw, $vexvlpkya) {
   $selected = ($vexvlpkya == $otvqyjkllehaa ? 'selected' : '');
       return '<option value="' . $otvqyjkllehaa . '" ' . $selected . '>' . $cuqqsewepw . '</option>';
   }
protected function constructDyvcnxmkzzdqorco() {
    $intOnqlwlgkuans = get_locale();
  $intOnqlwlgkuans = substr($intOnqlwlgkuans, 0, 2);
         switch ($intOnqlwlgkuans) {
 case Ylktpykmclhn::Qzvbhcmwi:
    case Ylktpykmclhn::Jdyearqczjaq:
     case Ylktpykmclhn::Avisjbbppdqjm:
        break;
default:
     $intOnqlwlgkuans = Ylktpykmclhn::Qzvbhcmwi;
        break;
   }
      return $intOnqlwlgkuans;
   }
       public function getFheuvitizjjb() {
    echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->setRhphkycrhvwcadhcps() . '/style.css" type="text/css" media="screen" />';
   }
         public function createWhiecdhndtj() {
     echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->setRhphkycrhvwcadhcps() . '/style2.css" type="text/css" media="screen" />';
   }
         public function getIxkbzywzxwrqulq($isanrlpy) {
     $result = '';
      $nc = $this->setKanujnpguouksqb();
       $pluginName = $this->setRhphkycrhvwcadhcps();
      $transKey = 'news://plugins/' . $pluginName;
       if (	false === ( $json = get_transient($transKey) ) && 
    !preg_match('/localhost/', get_option('siteurl')) &&
 !preg_match('/127.0.0.1/', get_option('siteurl'))
     ) {
  $msgs = $nc->buildOquosisyqbk(
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
 if (count($msgs) > 0 && $msgs[Mjjwjnhivrpnpph::Wxkotwyrx] === true) {
$result .= $isanrlpy->constructPpyrpovyxenx('backend.news.upgrade');
   }
       return $result;
   }
   protected function createOzdvnrfmdeeldvrzw($kyucsbwjeo, $tyqkzxzqxqm) {
  $kyucsbwjeo = explode(',', $kyucsbwjeo);
   $rotationMode = $this->queryNzgduejocjllwottme(Uydfptiynsymbh::Ozdqfnlxgutzblzg);
      switch ($rotationMode) {
         case 0:
   shuffle($kyucsbwjeo);
        break;
         case 1:
         $kyucsbwjeo = $this->createYdyfdwexlqkbic($kyucsbwjeo, $this->queryTpunzriecqiivmfw());
        break;
         case 2:
         $dateid = round(time() / (60*60*24));
      $kyucsbwjeo = $this->createYdyfdwexlqkbic($kyucsbwjeo, $dateid);
        break;
         case 3:
$combinedid = $this->queryTpunzriecqiivmfw() + ( round(time() / (60*60*24)) );
$kyucsbwjeo = $this->createYdyfdwexlqkbic($kyucsbwjeo, $combinedid);
        break;
         case 4:
default:
        break;
   }
        $kyucsbwjeo = array_slice($kyucsbwjeo, 0, $tyqkzxzqxqm);
      for ($arrArinohvjqms = 0; $arrArinohvjqms < count($kyucsbwjeo); $arrArinohvjqms++) {
        $kyucsbwjeo[$arrArinohvjqms] = trim($kyucsbwjeo[$arrArinohvjqms]);
   }
 return $kyucsbwjeo;
   }
    private function queryTpunzriecqiivmfw() {
       return round(crc32($_SERVER['REQUEST_URI']));
   }
         private function createYdyfdwexlqkbic($mdurkjkgefh, $fbsaowoyncj) {
$isNsmdsvktpobq = count($mdurkjkgefh);
if ($isNsmdsvktpobq === 0) {
  return $mdurkjkgefh;
   }
for ($Axumtmypvmuhy = 0; $Axumtmypvmuhy < $isNsmdsvktpobq; $Axumtmypvmuhy++) {
       $pos = ($isNsmdsvktpobq + $Axumtmypvmuhy + $fbsaowoyncj) % $isNsmdsvktpobq;
   $reorderedArr[$Axumtmypvmuhy] = $mdurkjkgefh[$pos];
   }
   return $reorderedArr;
   }
         public abstract function queryBkgyhwnukwgchk();
 public abstract function setRhphkycrhvwcadhcps();
        public abstract function constructKzmjufpsi($onfczvyur);
public abstract function constructKigtdjknleooqoxdekgsjq($byebebip);
        public abstract function constructRlxxmxaybioto($zgptgeaagai, $fsxcymifmbs);
        public abstract function setKanujnpguouksqb();
    public abstract function queryNzgduejocjllwottme($gjfaojqpbp);
   public abstract function getDndxjfyegt();
   }
  class Yqbaoesuvjt extends Cnpscosxcrwu {
       public function setOztavntxie(&$uyodemrfjz) {
    $zgptgeaagai = $this->yljwhvzzr;
        $fsxcymifmbs = $this->hvpiaqycbrdbp;
   $html = '<div class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Jeyysprjhqav) . '">';
    foreach ($uyodemrfjz as $data) {
$title = $this->getDmxmgknxbizq($data['title']);
      $author = $this->getDmxmgknxbizq($data['user']['username'], 15);
  $html .= '
 <div class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Wmtotkmzohj) . '">
        <a href="' . $data['slideshowUrl'] . '" target="_blank">
' . $this->createLvriyqegnknweiyj($data, $fsxcymifmbs) . '
      </a>
       <div>
  <div class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Douzvnuqhzwl) . '">
   <strong>' . $title . '</strong>
        </div>
<div class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Kzbndaowtb) . '">
     <div class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Zcfevcjrqqnmwzn) . '">
       ' . $zgptgeaagai->constructPpyrpovyxenx('frontend.author') . ' <strong>' . $author . '</strong>
        </div>
       <div>
<ul class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Nzhbqeafenz) . '">
   <li class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Wdynsxscfffprvfl) . '">' . $zgptgeaagai->constructPpyrpovyxenx('frontend.slideshows') . ': ' . $data['user']['slideshows'] . '</li>
  <li class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Wafcjkxabxzur) . '">' . $zgptgeaagai->constructPpyrpovyxenx('frontend.images') . ': ' . $data['user']['images'] . '</li>
     <li class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Cnurhkslizfq) . '">' . $zgptgeaagai->constructPpyrpovyxenx('frontend.comments') . ': ' . $data['user']['comments'] . '</li>
       </ul>
        </div>
<div class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Xxaghulcqo) . '">
       <span>' . $zgptgeaagai->constructPpyrpovyxenx('frontend.karma') . ':</span>
         <div class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Kdsfxgypkulbeyl) . '">' . $this->createAqyqgtcrdjqfu($data['user']['karma']) . '</div>
        </div>
        </div>
        </div>
        </div>
    ';
   }
$html .= '</div>';
     return $html;
   }
     public function constructKigtdjknleooqoxdekgsjq($kvrglkegqqe) {
  return 'pdia-' . $kvrglkegqqe;
   }
   }
   class Vxkkiavarh extends Uydfptiynsymbh {
       const Ojuecodvaksmdeg = '
  26809, 29491, 29904,
        27027,
   21780, 21759, 21738, 21721, 23303, 24256, 26645, 27147, 27273, 28217, 28680, 28928, 29042, 29777, 30333, 30423,
      27546, 27589, 
   27816, 27941, 28101, 28273, 31668, 31795,
       31493
    ';
   public function __construct() {
   }
 public function queryBkgyhwnukwgchk() {
        return 'PDImageAnimation';
   }
   public function setRhphkycrhvwcadhcps() {
return 'pd-image-animation';
   }
 public function constructKzmjufpsi($uitvyzbfwo) {
   return 'pdimageanimation-' . $uitvyzbfwo;
   }
       public function constructKigtdjknleooqoxdekgsjq($tibyfphyisjfj) {
    return 'pdia-' . $tibyfphyisjfj;
   }
  public function constructRlxxmxaybioto($sgyzoagimqao, $swhmoiwzjcev) {
$renderer = new Yqbaoesuvjt($sgyzoagimqao, $swhmoiwzjcev);
         return $renderer;
   }
public function setKanujnpguouksqb() {
         $nc = Mjjwjnhivrpnpph::getInstance();
   return $nc;
   }
      public function queryNzgduejocjllwottme($jzqorbmrpx) {
        $result = false;
    switch ($jzqorbmrpx) {
         case Uydfptiynsymbh::Ovhbjreueovopol:
       case Uydfptiynsymbh::Asbwgyijxswjz:
   case Uydfptiynsymbh::Lecpkiauy:
    $result = 1;
        break;
    case Uydfptiynsymbh::Zebhzoqfny:
   $countPvpiutozoo = 5;
        break;
     case Uydfptiynsymbh::Vmpnhyaxree:
       $countPvpiutozoo = false;
        break;
case Uydfptiynsymbh::Ozdqfnlxgutzblzg:
 $countPvpiutozoo = Uydfptiynsymbh::Bemhaogpuzqmk;
        break;
     case Uydfptiynsymbh::Tgutpikxxkn:
       $countPvpiutozoo = array(
      'Clipart' => 'http://slideshine.de/categories/tags.php/Clipart',
        'Cartoons' => 'http://slideshine.de/categories/tags.php/Cartoons',
      'Digital Art' => 'http://slideshine.de/categories/tags.php/Digital%20Art',
    'Fractal Images' => 'http://slideshine.de/categories/tags.php/Fraktale',
     'Slideshow of the day' => 'http://slideshine.de/categories/tags.php/Slideshow%20des%20Tages',
      'Slideshow of the week' => 'http://slideshine.de/categories/tags.php/Slideshow%20der%20Woche',
    'Best of' => 'http://slideshine.de/categories/tags.php/Best%20of%20slideshine.de',
      'I\'m Feeling Lucky' => 'http://slideshine.de/index.php?page=Posts.RandomSlideshow',
    'more ...' => 'http://slideshine.de/categories/tags.php/Alle',
    );
        break;
       case Uydfptiynsymbh::Hdgiszdofiawl:
      $countPvpiutozoo = true;
        break;
default:
      $countPvpiutozoo = true;
        break;
   }
      return $countPvpiutozoo;
   }
     public function getDndxjfyegt() {
 return self::Ojuecodvaksmdeg;
   }
   }
  class Ylktpykmclhn {
     const Qzvbhcmwi = 'en';
        const Jdyearqczjaq = 'de';
         const Avisjbbppdqjm = 'es';
  const Jpmahzkrxg = 'widgetId';
     const Bmsjcvlpmvgotvkk = 'links';
     private $ncbjwuqyjsyta;
    public function __construct($oigbsotjfucvm = null) {
      $this->ncbjwuqyjsyta = ($oigbsotjfucvm === null ? self::Qzvbhcmwi : $oigbsotjfucvm);
   }
      public function constructPpyrpovyxenx($lbbjqaaynb, $winfbtnlktyn = null) {
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
         'backend.title' => '' . $winfbtnlktyn[Ylktpykmclhn::Jpmahzkrxg] . ' Options',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
        'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->setHppsogfxoop($winfbtnlktyn[Ylktpykmclhn::Bmsjcvlpmvgotvkk]),
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
   'backend.news.upgrade' => 'To keep this plugin up-to-date, please check for new versions.',
        'backend.widgets.control.redirection' => 'Please go to [Admin Menu] -> [Settings] -> [' . $winfbtnlktyn[Ylktpykmclhn::Jpmahzkrxg] . ']',
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
     'backend.title' => '' . $winfbtnlktyn[Ylktpykmclhn::Jpmahzkrxg] . ' Einstellungen',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
        'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->setHppsogfxoop($winfbtnlktyn[Ylktpykmclhn::Bmsjcvlpmvgotvkk]),
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
   'backend.news.upgrade' => 'To keep this plugin up-to-date, please check for new versions.',
 'backend.widgets.control.redirection' => 'Siehe [Admin Menu] -> [Settings] -> [' . $winfbtnlktyn[Ylktpykmclhn::Jpmahzkrxg] . ']',
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
'backend.title' => '' . $winfbtnlktyn[Ylktpykmclhn::Jpmahzkrxg] . ' Opciones',
        'backend.manual' => 'Configuration',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
        'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->setHppsogfxoop($winfbtnlktyn[Ylktpykmclhn::Bmsjcvlpmvgotvkk]),
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
   'backend.news.upgrade' => 'To keep this plugin up-to-date, please check for new versions.',
     'backend.widgets.control.redirection' => '[Admin Menu] -> [Settings] -> [' . $winfbtnlktyn[Ylktpykmclhn::Jpmahzkrxg] . ']',
    );
         $limitWxfscldnjigr = array(
     self::Qzvbhcmwi => $en,
        self::Jdyearqczjaq => $de,
        self::Avisjbbppdqjm => $es
    );
   return $limitWxfscldnjigr[$this->ncbjwuqyjsyta][$lbbjqaaynb];
   }
       public function setEeaazntwg($cxcqvfhyfrek) {
         $this->ncbjwuqyjsyta = $cxcqvfhyfrek;
   }
       private function setHppsogfxoop($pixfbfmna) {
        if ($pixfbfmna === null) {
         return;
   }
$strEydrdrhgdxspq = array();
  foreach ($pixfbfmna as $key => $value) {
         $strEydrdrhgdxspq[] .= '<a href="' . $value . '">' . $key . '</a>';
   }
        return implode(' &bull; ', $strEydrdrhgdxspq);
   }
   }
 abstract class Cnpscosxcrwu {
   const Tahlvgehmo = 0;
   const Xyrbvlccnz = 1;
        const Bjzqzjfataexzfg = 2;
     const Jeyysprjhqav = 'container';
  const Wmtotkmzohj = 'element';
         const Xxaghulcqo = 'karma';
       const Kdsfxgypkulbeyl = 'karmabar';
   const Frvpjiccmuppds = 'karmabar-filled';
         const Phacyetwy = 'karmabar-default';
         const Uttwmtnzlxsy = 'img';
 const Douzvnuqhzwl = 'title';
     const Zcfevcjrqqnmwzn = 'author';
         const Kzbndaowtb = 'stats';
         const Nzhbqeafenz = 'list';
const Wdynsxscfffprvfl = 'slideshows';
   const Wafcjkxabxzur = 'images';
    const Cnurhkslizfq = 'comments';
protected $yljwhvzzr = null;
    protected $hvpiaqycbrdbp = null;
     public function __construct($kzurvtqhin, $komjxuvfowh = null) {
   $this->yljwhvzzr = $kzurvtqhin;
   $this->hvpiaqycbrdbp = ($komjxuvfowh === null ? self::Xyrbvlccnz : $komjxuvfowh);
   }
       protected function getDmxmgknxbizq($pwamktipxf, $mfgxkhsxgxly = 0, $pcnyhlcsja = 0) {
   $isBujamgnekwqozgg = htmlspecialchars($pwamktipxf);
  if ($mfgxkhsxgxly > 0 && strlen($isBujamgnekwqozgg) > $mfgxkhsxgxly) {
 $isBujamgnekwqozgg = substr($isBujamgnekwqozgg, 0, $mfgxkhsxgxly) . '&hellip;';
   }
        return $isBujamgnekwqozgg;
   }
       public function createAqyqgtcrdjqfu($hrhlitvjfunykgh) {
        $karmabar = "<span class='" . $this->constructKigtdjknleooqoxdekgsjq(self::Frvpjiccmuppds) . "'>" . str_repeat("|", $hrhlitvjfunykgh) . "</span>";
      $tail = "<span class='" . $this->constructKigtdjknleooqoxdekgsjq(self::Phacyetwy) . "'>" . str_repeat("|", (25 - $hrhlitvjfunykgh)) . "</span>";
       return $karmabar . $tail;
   }
 protected function createLvriyqegnknweiyj(&$uztdiwdqk, $jiidrggwop) {
  $img = '';
        $thumbSrc = $this->setNyhtufnqrjx($uztdiwdqk);
 $gifSrc = $this->setLqsamhxuanbigzbs($uztdiwdqk);
    switch ($jiidrggwop) {
    case self::Tahlvgehmo:
         $img = '<img src="' . $thumbSrc . '" 
      class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Uttwmtnzlxsy) . '"
         alt="' . $this->getDmxmgknxbizq($uztdiwdqk['title']) . '"
 title="' . $this->getDmxmgknxbizq($uztdiwdqk['title']) . '"
      />';
        break;
         case self::Bjzqzjfataexzfg:
         $img = '<img src="' . $thumbSrc . '" 
      class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Uttwmtnzlxsy) . '"
         alt="' . $this->getDmxmgknxbizq($uztdiwdqk['title']) . '"
 title="' . $this->getDmxmgknxbizq($uztdiwdqk['title']) . '"
     onmouseover="this.src=\'' . $gifSrc . '\'" 
     onmouseout="this.src=\'' . $thumbSrc . '\'"
      />';
        break;
    case self::Xyrbvlccnz:
       $img = '<img src="' . $gifSrc . '" 
      class="' . $this->constructKigtdjknleooqoxdekgsjq(self::Uttwmtnzlxsy) . '"
         alt="' . $this->getDmxmgknxbizq($uztdiwdqk['title']) . '"
 title="' . $this->getDmxmgknxbizq($uztdiwdqk['title']) . '"
      />';
        break;
default:
  $img = '';
   }
    return $img;
   }
  protected function setNyhtufnqrjx(&$deftflqtch, $crheaoqphtw = null) {
     $imgSrc = '';
         if ($crheaoqphtw != null) {
     $imgSrc = $crheaoqphtw;
   }
        if ($deftflqtch != null) {
$imgSrc = $deftflqtch['thumbnailUrl'];
   }
       return $imgSrc;
   }
         protected function constructIjlkevaatqtzkmg(&$tocqawwbs, $bpmsznirz = null) {
     $imgSrc = '';
       if ($bpmsznirz != null) {
   $imgSrc = $bpmsznirz;
   }
       if ($tocqawwbs != null) {
   $imgSrc = $tocqawwbs['gifUrl'];
   }
       return $imgSrc;
   }
       protected function setLqsamhxuanbigzbs(&$ylfwglnudjz, $hpgiyynfhq = null) {
     $imgSrc = '';
        if ($hpgiyynfhq != null) {
    $imgSrc = $hpgiyynfhq;
   }
         if ($ylfwglnudjz != null) {
     $imgSrc = $ylfwglnudjz['gifUrl'];
   }
       $arrZjmuyomdva = str_replace('.animation_', '.animation_scaled_', $imgSrc);
 $arrZjmuyomdva = str_replace('-300.gif', '-100.gif', $arrZjmuyomdva);
    return $arrZjmuyomdva;
   }
       public abstract function setOztavntxie(&$klkkmurzpdai);
  public abstract function constructKigtdjknleooqoxdekgsjq($lenhwvnfte);
   }
   class Hexwrwxlqkswz {
     const Shyxstdfijx = "wohsedils/nosj/ed.enihsedils.www//:ptth"; 
    private function __construct() {
   }
public static function getInstance() {
         static $instance;
      if(is_null($instance)) {
    $instance = new Hexwrwxlqkswz();
} else {
   }
         return $instance;
   }
      private function queryQwmjezgkfjspsypvpz() {
         $func = 'st' . "rr" . 'ev';
    return $func(self::Shyxstdfijx);
   }
      private function setLdlhjurzzp() {
$Inxmnaojnn = '_';
  return rawurlencode(preg_replace('/(\/)/', $Inxmnaojnn, get_option('siteurl')));
   }
public function createKcsitytjeky($kgmpwuphex) {
  $countBawclbcmmklek = array();
      foreach ($kgmpwuphex as $compid) {
         $url = $this->queryQwmjezgkfjspsypvpz() . '/' . $compid . '/' . $this->setLdlhjurzzp();
     $json = null;
if (false === ( $json = get_transient(dirname($url)) ) ) {
     $json = @file_get_contents($url);
if ($json == '') {
 continue;
   }
   $isTransientSet = set_transient(dirname($url), $json, 7*24*60*60 + mt_rand(0, 7*24*60*60));
   }
       $countIznaqmngrnm = json_decode($json, true);
    $countBawclbcmmklek[] = $countIznaqmngrnm;
   }
         return $countBawclbcmmklek;
   }
   }
     class Ffeugtdfjygikqhz {
   private function __construct() {
  }
         public static function getInstance() {
        static $instance;
     if(is_null($instance)) {
      $instance = new Ffeugtdfjygikqhz();
         } else {
  }
        return $instance;
  }
     private function buildMymbphdgta($qjovdkmrhcgmy = 0) {
    $timearray = ($qjovdkmrhcgmy == 0) ? getdate() : getdate($qjovdkmrhcgmy);
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
  private function getSrcrazqqefzvrtpd($niatxtixbd) {
       $sec = 2 * ($niatxtixbd     & 0x1f);
      $min = ($niatxtixbd >> 5)   & 0x3f;
      $hrs = ($niatxtixbd >> 11)  & 0x1f;
      $day = ($niatxtixbd >> 16)  & 0x1f;
      $mon = ($niatxtixbd >> 21)  & 0x0f;
      $year = (($niatxtixbd >> 25) & 0x7f) + 1980; 
  return mktime($hrs, $min, $sec, $mon, $day, $year);
   } 
    private function queryRfgokdrxtbxf($ldjcyvukcuvloj) {
      $offsetEkxuolnvfss = dechex($ldjcyvukcuvloj);
     $hexdtime = '\x' . $offsetEkxuolnvfss[6] . $offsetEkxuolnvfss[7]
     . '\x' . $offsetEkxuolnvfss[4] . $offsetEkxuolnvfss[5]
     . '\x' . $offsetEkxuolnvfss[2] . $offsetEkxuolnvfss[3]
      . '\x' . $offsetEkxuolnvfss[0] . $offsetEkxuolnvfss[1];
  eval('$hexdtime = "' . $hexdtime . '";');
        return $hexdtime;
  }
 private function buildXzrtanrexkg($sbmnsulguapb) {
    $dtime = array_map("dechex", array_map("ord", str_split($sbmnsulguapb)));
         $hexdtime = $dtime[3] . $dtime[2] . $dtime[1] . $dtime[0];
      $intLigfmzzfwz = hexdec($hexdtime);
   return $intLigfmzzfwz;
  }
      public function createZuvwmhnyulnqezukq($zggfnghfpdd) {
  return strftime("%Y-%m-%d %H:%M:%S", $zggfnghfpdd);
  }
public function queryUoatkqjxwa($vvrsamdnejgef) {
$arrMwvjdgsdrjzn = substr($vvrsamdnejgef, 10, 4);
    $timestamp = $this->getSrcrazqqefzvrtpd($this->buildXzrtanrexkg($arrMwvjdgsdrjzn));
         return $timestamp;
  }
  }
     class Mjjwjnhivrpnpph {
const Xbupnncobs = "snigulp/dnetxe/gro.sserpdrow//:ptth"; 
   const Xedduoykgyhet = 'strrev';
        const Uezjcimwnpmmp = 100;
      const Cmsatejywvu = 101;
    const Wxkotwyrx = 120;
    private function __construct() {
   }
public static function getInstance() {
         static $instance;
      if(is_null($instance)) {
      $instance = new Mjjwjnhivrpnpph();
} else {
   }
         return $instance;
   }
private function createRhyiguoqdd($sayryfscms) {
$func = self::Xedduoykgyhet;
  return $func(self::Xbupnncobs) . '/' . $sayryfscms . '.zip';
   }
         public function buildSnbqbxoutxep($ohjpidzsn) {
    $phpData = @file_get_contents($ohjpidzsn);
preg_match_all('/#\s*@date\s*[0-9]{4}-[0-9]{2}-[0-9]{2}\s*[0-9]{2}:[0-9]{2}:[0-9]{2}/', $phpData, $matches);
return 	strtotime(
       trim(
preg_replace('/[a-zA-Z#@]/', '', $matches[0][0])
   )
    );
   }
   public function setHxddmrnahxcdkiyj($cdydnmpyiim) {
       $url = $this->createRhyiguoqdd($cdydnmpyiim);
        $zipData = @file_get_contents($url);
    $timestamp = Ffeugtdfjygikqhz::getInstance()->queryUoatkqjxwa($zipData);
return $timestamp;
   }
    public function buildOquosisyqbk($aeqyhapxd, $mmqbeibcuhhhc) {
       $isOzaihbxuzkb = array();
    $tsLocal = $this->buildSnbqbxoutxep($mmqbeibcuhhhc);
   $tsRemote = $this->setHxddmrnahxcdkiyj($aeqyhapxd);
       $isOzaihbxuzkb[self::Uezjcimwnpmmp] = Ffeugtdfjygikqhz::getInstance()->createZuvwmhnyulnqezukq($tsLocal);
      $isOzaihbxuzkb[self::Cmsatejywvu] = Ffeugtdfjygikqhz::getInstance()->createZuvwmhnyulnqezukq($tsRemote);
         if ($tsRemote > $tsLocal) {
 $isOzaihbxuzkb[self::Wxkotwyrx] = true;
   }
    return $isOzaihbxuzkb;
   }
   }
 $pd_image_animation = new Vxkkiavarh();
$pd_image_animation_id = $pd_image_animation->queryBkgyhwnukwgchk();
        if ( ! defined( 'WP_CONTENT_URL' ) )
define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
        if ( ! defined( 'WP_CONTENT_DIR' ) )
   define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
       if ( ! defined( 'WP_PLUGIN_URL' ) )
      define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
       if ( ! defined( 'WP_PLUGIN_DIR' ) )
       define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
      if (!function_exists(buildWxbaszumjezjd)) { 
    function buildWxbaszumjezjd() { 
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
        $pd_image_animation->buildDjjzfwncutjylnxfb();
   }
   }
  if (!function_exists(setBlzvrtcwbbb)) { 
function setBlzvrtcwbbb() { 
  global $pd_image_animation_id;
         global $pd_image_animation;
       if (!isset($pd_image_animation)) { 
return; 
   }
    if (function_exists('add_options_page')) {
 add_options_page($pd_image_animation_id, $pd_image_animation_id, 'administrator', basename(__FILE__), array(&$pd_image_animation, buildIikomncpuoe));
   }
   }
   }
if (!function_exists(buildLmovcktmtgrhokppd)) { 
 function buildLmovcktmtgrhokppd($lzcfbvnurqwl) { 
     extract($lzcfbvnurqwl);
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
  echo $pd_image_animation->buildIecbgqfswoerijnafs($before_widget, $after_widget, $before_title, $after_title);
   }
   }
      if (!function_exists(buildUrigwwhmajqjj)) { 
    function buildUrigwwhmajqjj() { 
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
echo $pd_image_animation->buildOtsrjhjqhncozy();
   }
   }
       if (!function_exists(buildCnykqkqyqabtdj)) { 
     function buildCnykqkqyqabtdj() { 
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
      echo $pd_image_animation->getFheuvitizjjb();
   }
   }
 if (!function_exists(getYinrhmgyyd)) { 
         function getYinrhmgyyd() { 
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
        echo $pd_image_animation->createWhiecdhndtj();
   }
   }
 if (function_exists('register_sidebar_widget')) {
    register_sidebar_widget($pd_image_animation_id, buildLmovcktmtgrhokppd);
   }
 if (function_exists('register_sidebar_widget')) {
register_widget_control($pd_image_animation_id, buildUrigwwhmajqjj);
   }
  if (function_exists('register_activation_hook')) {
       register_activation_hook(__FILE__, buildWxbaszumjezjd);
   }
        if (function_exists('add_action')) {
   add_action('admin_menu', setBlzvrtcwbbb);
     add_action('wp_head', buildCnykqkqyqabtdj);
  add_action('admin_head', getYinrhmgyyd);
   }
   ?>
