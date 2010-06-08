<?php
/*
Plugin Name: PDImageAnimation
Plugin URI: http://www.slideshine.de/categories/tags.php/PDImageAnimation
Description: Displays thumbnails and GIF animations of your favourite images and slideshows from the online slideshow site slideshine.de.
Version: 2.3.0
Author: mfard
Author URI: http://www.slideshine.de/categories/tags.php/PDImageAnimation
*/

    class Agghjjvpqb extends Kfmigkvathqbgod {
      public function queryTapoksnjadmftvvwfq(&$flznalhku) {
   $translator = $this->qrgtihmoj;
        $mode = $this->rerrtbgvdo;
   $html = '<div class="' . $this->queryTjpcccygfdtjtj(self::Pvdmcuzszvpeix) . '">';
   foreach ($flznalhku as $data) {
         $title = $this->setUeyzmgpvszr($data['title']);
 $author = $this->setUeyzmgpvszr($data['user']['username']);
  $html .= '
<div class="' . $this->queryTjpcccygfdtjtj(self::Qmauxgrwfcsr) . '">
        <a href="' . $data['slideshowUrl'] . '" target="_blank">
     ' . $this->setGtaodjwwljn($data, $mode) . '
      </a>
       <div>
         <div class="' . $this->queryTjpcccygfdtjtj(self::Wyvbvoztzye) . '">
   <strong>' . $title . '</strong>
        </div>
    <div class="' . $this->queryTjpcccygfdtjtj(self::Cvkxwyurfzdjywtn) . '">
 <div class="' . $this->queryTjpcccygfdtjtj(self::Peijiloesflbt) . '">
   ' . $translator->buildEixnykhocyzxl('frontend.author') . ' <strong>' . $author . '</strong>
        </div>
       <div>
      <ul class="' . $this->queryTjpcccygfdtjtj(self::Quleuovnf) . '">
 <li class="' . $this->queryTjpcccygfdtjtj(self::Hnqlsuxhux) . '">' . $translator->buildEixnykhocyzxl('frontend.slideshows') . ': ' . $data['user']['slideshows'] . '</li>
     <li class="' . $this->queryTjpcccygfdtjtj(self::Gmrrphijtvfw) . '">' . $translator->buildEixnykhocyzxl('frontend.images') . ': ' . $data['user']['images'] . '</li>
       <li class="' . $this->queryTjpcccygfdtjtj(self::Jjpzcecwca) . '">' . $translator->buildEixnykhocyzxl('frontend.comments') . ': ' . $data['user']['comments'] . '</li>
       </ul>
        </div>
     <p>
   <span>' . $translator->buildEixnykhocyzxl('frontend.karma') . ':</span>
    <span class="' . $this->queryTjpcccygfdtjtj(self::Lpohzsbnur) . '">' . $this->buildStmwyiljlooisd($data['user']['karma']) . '</span>
      </p>
        </div>
        </div>
        </div>
    ';
   }
$html .= '</div>';
     return $html;
   }
    public function queryTjpcccygfdtjtj($iklgkslzmjzg) {
   return 'pdia-' . $iklgkslzmjzg;
   }
   }
   abstract class Uvmmaxmnkexihp {
 const Kdnudlgpgp = 'options';
    const Whufzqpymnwwfu = 'submit';
        const Dsaxqnmzb = 'title';
const Uaargsilxhd = 'count';
         const Lgtisvobrvf = 'mode';
         const Qzirevxkose = 'lang';
  const Etyzzzaogss = 'compids';
   const Lmpkiddmcc = 0;
  const Wvdkzzsdw = 1;
   const Ntfmtwcip = 2;		
       const Yxhkbearar = 'backend-title';
const Ojpowoqwpcmzc = 'backend-count';
  const Clixpfzdsqfiv = 'backend-compids';
const Unnlbrranphbbs = 'backend-mode';
  const Osjnqkyiatqpuhae = 'backend-lang';
         const Rpwlojxqcbril = 'backend-head';
const Edyefddohlvjge = 'backend-foot';
     const Sylnwfqiyk = 101;
         const Aiaradgdpbjohi = 102;
     const Iukwnkpwdy = 103;
       const Odqroyihiwqp = 104;
     const Kwwwnpwgqk = 105;
         const Qwbsijooucioyn = 106;
     const Lzagrpruhx = 107;
        const Qjinxdyiifrng = 108;
        const Knkuvdhmzhvgn = 110;
  const Mridndwfhfzojmbmg = 111;
const Runrjxbgtywgqzj = 112;
        const Ylrgvkexrtgxb = 120;
     const Meisdrjrnunk = 0;
   const Wooqawfxhh = 1;
       const Iuxispmlrlhwjk = 2;
       const Huakguucdkdxfr = 3;
     const Hinhpgnzgdir = 4;
   public function setBixygkheowdlb($kbdynnjbqq, $oqunkbouvg, $czjpvkyoiqkdg, $hkwnosiepxgr) {
      $options = get_option($this->queryTcygdjrofy(self::Kdnudlgpgp));
         $title = $options['title'];
        $compids = $this->queryBowlzlhzruva($options['compids'], $options['count']);
       $mode = $options['mode'];
       $lang = $options['lang'];
 $karma_data = Obnwclpracp::getInstance()->queryVisgwwbakrcgmclzgnpmj($compids);
$translator = new Mpenyffomcjm($lang);
         $renderer = $this->setHnysqrhzyatrii($translator, $mode);
         echo $kbdynnjbqq;
       echo $czjpvkyoiqkdg . $title . $hkwnosiepxgr;
     echo $renderer->queryTapoksnjadmftvvwfq($karma_data);
         echo $oqunkbouvg;
   }
       public function constructDitewaluzckhsgak() {
 $options = $this->createLycmgfzumqan();
         $title = $options['title'];
 $translator = new Mpenyffomcjm($options['lang']);
         echo '<p>' . $translator->buildEixnykhocyzxl('backend.widgets.control.redirection', array(Mpenyffomcjm::Doxcumaogcsasjba => $this->createEihwqgznzfxtkbzx())) . '</p>';
 echo '<input type="hidden" id="' . $this->queryTcygdjrofy(self::Whufzqpymnwwfu) . '" name="' . $this->queryTcygdjrofy(self::Whufzqpymnwwfu) . '" value="1" />';
   }
public function createLycmgfzumqan() {
      $translator = new Mpenyffomcjm($this->constructEdmmktzvfrvhr());
  $compids = explode(',', $this->createPejzgiqrb());
shuffle($compids);
     $compids = array_slice(
     $compids, 0, 
      min(
    $this->setRnihswhkdgnkvblrbo(Uvmmaxmnkexihp::Runrjxbgtywgqzj),
       count($compids)
   )
    );
     for($strLgrbjuemmvqq = 0; $strLgrbjuemmvqq < count($compids); $strLgrbjuemmvqq++) {
    $compids[$strLgrbjuemmvqq] = trim($compids[$strLgrbjuemmvqq]);
   }
         $options = array(
 'title'=>$translator->buildEixnykhocyzxl('frontend.title'),
       'compids'=>implode(', ', $compids),
      'mode'=>self::Ntfmtwcip,
  'lang'=>$this->constructEdmmktzvfrvhr(),
         'count'=>mt_rand(
  $this->setRnihswhkdgnkvblrbo(Uvmmaxmnkexihp::Knkuvdhmzhvgn),
     $this->setRnihswhkdgnkvblrbo(Uvmmaxmnkexihp::Mridndwfhfzojmbmg)
    ),
    );
   $opts = get_option($this->queryTcygdjrofy(self::Kdnudlgpgp));
  if (!empty($opts)) {
     foreach ($opts as $key=>$value) {
      $options[$key] = $value;
   }
   }
        update_option($this->queryTcygdjrofy(self::Kdnudlgpgp), $options);
        return $options;
   }
 public function queryLkbjtjvckvoaef() {
     $result = '';
 $options = $this->createLycmgfzumqan();
 $translator = new Mpenyffomcjm($options['lang']);
  if ( $_POST[$this->queryTcygdjrofy(self::Whufzqpymnwwfu)] !== null ) {
      $valid = true;
     if ($this->setRnihswhkdgnkvblrbo(self::Sylnwfqiyk)) {
$options['title'] = $_POST[$this->queryTcygdjrofy(self::Dsaxqnmzb)];
   }
         if ($this->setRnihswhkdgnkvblrbo(self::Aiaradgdpbjohi)) {
      if (
      preg_match('/^\s*[0-9]+\s*$/', $_POST[$this->queryTcygdjrofy(self::Uaargsilxhd)]) &&
   (int) $_POST[$this->queryTcygdjrofy(self::Uaargsilxhd)] >= $this->setRnihswhkdgnkvblrbo(Uvmmaxmnkexihp::Knkuvdhmzhvgn) &&
    (int) $_POST[$this->queryTcygdjrofy(self::Uaargsilxhd)] <= $this->setRnihswhkdgnkvblrbo(Uvmmaxmnkexihp::Mridndwfhfzojmbmg)
     ) {
  $options['count'] = $_POST[$this->queryTcygdjrofy(self::Uaargsilxhd)];
} else {
    $result .= '
   <div class="updated">
   <p><strong>' . $translator->buildEixnykhocyzxl('backend.validation.count') . '</strong></p>
        </div>
    ';
   }
   }
       if ($this->setRnihswhkdgnkvblrbo(self::Odqroyihiwqp)) {
 $options['mode'] = $_POST[$this->queryTcygdjrofy(self::Lgtisvobrvf)];
   }
     if ($this->setRnihswhkdgnkvblrbo(self::Kwwwnpwgqk)) {
 $options['lang'] = $_POST[$this->queryTcygdjrofy(self::Qzirevxkose)];
       $translator->createTegfpgaudeevtnbkl($options['lang']);
   }
     if ($this->setRnihswhkdgnkvblrbo(self::Iukwnkpwdy)) {
   if (preg_match('/^\s*([0-9]+,\s*)*[0-9]+\s*$/', $_POST[$this->queryTcygdjrofy(self::Etyzzzaogss)])) {
    $options['compids'] = $_POST[$this->queryTcygdjrofy(self::Etyzzzaogss)];
} else {
    $result .= '
   <div class="updated">
     <p><strong>' . $translator->buildEixnykhocyzxl('backend.validation.compids') . '</strong></p>
        </div>
    ';
   }
   }
   if ($result === '') {
    $result .= '
   <div class="updated">
    <p><strong>' . $translator->buildEixnykhocyzxl('backend.updated') . '</strong></p>
        </div>
    ';
        update_option($this->queryTcygdjrofy(self::Kdnudlgpgp), $options);
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
  <h2>' . $translator->buildEixnykhocyzxl('backend.title', array(Mpenyffomcjm::Doxcumaogcsasjba => $this->createEihwqgznzfxtkbzx())) . '</h2> 
    ';
         if ($this->setRnihswhkdgnkvblrbo(self::Qwbsijooucioyn)) {
    $result .= '
     <div class="' . $this->queryTjpcccygfdtjtj(self::Rpwlojxqcbril) . '">' . 
        $translator->buildEixnykhocyzxl('backend.manual.top') . 
         '</div>
        <br />
    ';
   }
     if ($this->setRnihswhkdgnkvblrbo(self::Sylnwfqiyk)) {
    $result .= '
      <!-- title -->
      <p class="' . $this->queryTjpcccygfdtjtj(self::Yxhkbearar) . '">
   <label for="' . $this->queryTcygdjrofy(self::Dsaxqnmzb) . '">
   <b>' . $translator->buildEixnykhocyzxl('backend.fieldlabel.title') . '</b>:<br />
    <span>' . $translator->buildEixnykhocyzxl('backend.manual.title') . '</span><br />
<input id="' . $this->queryTcygdjrofy(self::Dsaxqnmzb) . '" name="' . $this->queryTcygdjrofy(self::Dsaxqnmzb) . '" type="text" value="'.$title.'" />
</label>
      </p>
    ';
   }
         if ($this->setRnihswhkdgnkvblrbo(self::Aiaradgdpbjohi)) {
    $result .= '
      <!-- count -->
         <p class="' . $this->queryTjpcccygfdtjtj(self::Ojpowoqwpcmzc) . '">
     <label for="' . $this->queryTcygdjrofy(self::Uaargsilxhd) . '">
   <b>' . $translator->buildEixnykhocyzxl('backend.fieldlabel.count') . '</b>:<br />
    <span>' . $translator->buildEixnykhocyzxl('backend.manual.count') . '</span><br />
    <input id="' . $this->queryTcygdjrofy(self::Uaargsilxhd) . '" name="' . $this->queryTcygdjrofy(self::Uaargsilxhd) . '" type="text" value="'.$count.'" />
</label>
      </p>
    ';
   }
     if ($this->setRnihswhkdgnkvblrbo(self::Iukwnkpwdy)) {
    $result .= '
        <!-- compids -->
         <p class="' . $this->queryTjpcccygfdtjtj(self::Clixpfzdsqfiv) . '">
     <label for="' . $this->queryTcygdjrofy(self::Etyzzzaogss) . '">
     <b>' . $translator->buildEixnykhocyzxl('backend.fieldlabel.compids') . '</b>:<br />
 <span>' . $translator->buildEixnykhocyzxl('backend.manual.compids', array(Mpenyffomcjm::Ovkcdvxha => $this->setRnihswhkdgnkvblrbo(Uvmmaxmnkexihp::Qjinxdyiifrng))) . '</span><br />
      <input id="' . $this->queryTcygdjrofy(self::Etyzzzaogss) . '" name="' . $this->queryTcygdjrofy(self::Etyzzzaogss) . '" type="text" value="'.$compids.'" />
</label>
      </p>
    ';
   }
       if ($this->setRnihswhkdgnkvblrbo(self::Odqroyihiwqp)) {
    $result .= '
     <!-- mode -->
<p class="' . $this->queryTjpcccygfdtjtj(self::Unnlbrranphbbs) . '">
     <label for="' . $this->queryTcygdjrofy(self::Lgtisvobrvf) . '">
  <b>' . $translator->buildEixnykhocyzxl('backend.fieldlabel.mode') . '</b>:<br />
   <span>' . $translator->buildEixnykhocyzxl('backend.manual.mode') . '</span><br />
  <select id="' . $this->queryTcygdjrofy(self::Lgtisvobrvf) . '" name="' . $this->queryTcygdjrofy(self::Lgtisvobrvf) . '">
   ' . $this->getPtvcqbficcuq(self::Lmpkiddmcc, $translator->buildEixnykhocyzxl('backend.fieldlabel.image-mode'), $mode) . '
      ' . $this->getPtvcqbficcuq(self::Wvdkzzsdw, $translator->buildEixnykhocyzxl('backend.fieldlabel.animation-mode'), $mode) . '
  ' . $this->getPtvcqbficcuq(self::Ntfmtwcip, $translator->buildEixnykhocyzxl('backend.fieldlabel.image-animation-mode'), $mode) . '
 </select>
</label>
      </p>
    ';
   }
     if ($this->setRnihswhkdgnkvblrbo(self::Kwwwnpwgqk)) {
    $result .= '
     <!-- lang -->
  <p class="' . $this->queryTjpcccygfdtjtj(self::Osjnqkyiatqpuhae) . '">
     <label for="' . $this->queryTcygdjrofy(self::Qzirevxkose) . '">
      <b>' . $translator->buildEixnykhocyzxl('backend.fieldlabel.language') . '</b>:<br />
       <span>' . $translator->buildEixnykhocyzxl('backend.manual.language') . '</span><br />
  <select id="' . $this->queryTcygdjrofy(self::Qzirevxkose) . '" name="' . $this->queryTcygdjrofy(self::Qzirevxkose) . '">
     ' . $this->getPtvcqbficcuq($this->constructEdmmktzvfrvhr(), $translator->buildEixnykhocyzxl('backend.fieldlabel.default'), $lang) . '
' . $this->getPtvcqbficcuq(Mpenyffomcjm::Qgzepxnkzgpw, $translator->buildEixnykhocyzxl('backend.fieldlabel.english'), $lang) . '
 ' . $this->getPtvcqbficcuq(Mpenyffomcjm::Xyhlaahftafewn, $translator->buildEixnykhocyzxl('backend.fieldlabel.german'), $lang) . '
' . $this->getPtvcqbficcuq(Mpenyffomcjm::Intttqsagqif, $translator->buildEixnykhocyzxl('backend.fieldlabel.spanish'), $lang) . '
 </select>
</label>
      </p>
    ';
   }
     if ($this->setRnihswhkdgnkvblrbo(self::Lzagrpruhx)) {
    $result .= '
    <p class="' . $this->queryTjpcccygfdtjtj(self::Edyefddohlvjge) . '">' . 
 $translator->buildEixnykhocyzxl('backend.manual.bottom') . 
       '</p>
    ';
   }
    $result .= '
    <!-- update switch -->
       <input type="hidden" id="' . $this->queryTcygdjrofy(self::Whufzqpymnwwfu) . '" name="' . $this->queryTcygdjrofy(self::Whufzqpymnwwfu) . '" value="1" />				
  <div class="submit">
 <input type="submit" name="submit" value="' . $translator->buildEixnykhocyzxl('backend.save') . ' &raquo;" />
        </div>
         </form>
        </div>
    ';
     echo $result;
   }
      protected function getPtvcqbficcuq($nrjveujpxcb, $avgzofan, $zysywmmocs) {
  $selected = ($zysywmmocs == $nrjveujpxcb ? 'selected' : '');
   return '<option value="' . $nrjveujpxcb . '" ' . $selected . '>' . $avgzofan . '</option>';
   }
       protected function constructEdmmktzvfrvhr() {
  $isEavfhnngfcr = get_locale();
        $isEavfhnngfcr = substr($isEavfhnngfcr, 0, 2);
       switch ($isEavfhnngfcr) {
    case Mpenyffomcjm::Qgzepxnkzgpw:
      case Mpenyffomcjm::Xyhlaahftafewn:
    case Mpenyffomcjm::Intttqsagqif:
        break;
default:
      $isEavfhnngfcr = Mpenyffomcjm::Qgzepxnkzgpw;
        break;
   }
    return $isEavfhnngfcr;
   }
     public function setDrvbforvmnfxysaylzhe() {
   echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->queryRznquldbbhvtdkw() . '/style.css" type="text/css" media="screen" />';
   }
       public function queryJjeyzutevi() {
    echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->queryRznquldbbhvtdkw() . '/style2.css" type="text/css" media="screen" />';
   }
      protected function queryBowlzlhzruva($tngitcqztjy, $fzavdvepa) {
    $tngitcqztjy = explode(',', $tngitcqztjy);
        $rotationMode = $this->setRnihswhkdgnkvblrbo(Uvmmaxmnkexihp::Ylrgvkexrtgxb);
      switch ($rotationMode) {
         case 0:
    shuffle($tngitcqztjy);
        break;
         case 1:
         $tngitcqztjy = $this->buildBimjtbrrklmkr($tngitcqztjy, $this->buildJhaseebhvigsjepw());
        break;
         case 2:
         $dateid = round(time() / (60*60*24));
      $tngitcqztjy = $this->buildBimjtbrrklmkr($tngitcqztjy, $dateid);
        break;
         case 3:
$combinedid = $this->buildJhaseebhvigsjepw() + ( round(time() / (60*60*24)) );
$tngitcqztjy = $this->buildBimjtbrrklmkr($tngitcqztjy, $combinedid);
        break;
         case 4:
default:
        break;
   }
        $tngitcqztjy = array_slice($tngitcqztjy, 0, $fzavdvepa);
for ($arrBvvhzczlydfp = 0; $arrBvvhzczlydfp < count($tngitcqztjy); $arrBvvhzczlydfp++) {
  $tngitcqztjy[$arrBvvhzczlydfp] = trim($tngitcqztjy[$arrBvvhzczlydfp]);
   }
  return $tngitcqztjy;
   }
    private function buildJhaseebhvigsjepw() {
       return round(crc32($_SERVER['REQUEST_URI']));
   }
      private function buildBimjtbrrklmkr($knaohozoddfjj, $kjsootub) {
$isMbqpngjomq = count($knaohozoddfjj);
        if ($isMbqpngjomq === 0) {
    return $knaohozoddfjj;
   }
        for ($strVmapttutle = 0; $strVmapttutle < $isMbqpngjomq; $strVmapttutle++) {
$pos = ($isMbqpngjomq + $strVmapttutle + $kjsootub) % $isMbqpngjomq;
     $reorderedArr[$strVmapttutle] = $knaohozoddfjj[$pos];
   }
   return $reorderedArr;
   }
  public abstract function createEihwqgznzfxtkbzx();
public abstract function queryRznquldbbhvtdkw();
       public abstract function queryTcygdjrofy($kcinpvhgwvh);
 public abstract function queryTjpcccygfdtjtj($cdijecxhgmx);
 public abstract function setHnysqrhzyatrii($dwvqgemkq, $hfzqolrmooc);
  public abstract function setRnihswhkdgnkvblrbo($romdpvyjes);
     public abstract function createPejzgiqrb();
   }
    class Yxwezuqnlib extends Uvmmaxmnkexihp {
    const Wwdfxkzsotqs = '
  26809, 29491, 29904,
        27027,
   21780, 21759, 21738, 21721, 23303, 24256, 26645, 27147, 27273, 28217, 28680, 28928, 29042, 29777, 30333, 30423,
      27546, 27589, 
   27816, 27941, 28101, 28273, 31668, 31795,
       31493
    ';
   public function __construct() {
   }
    public function createEihwqgznzfxtkbzx() {
        return 'PDImageAnimation';
   }
  public function queryRznquldbbhvtdkw() {
return 'pd-image-animation';
   }
        public function queryTcygdjrofy($ctobdkgson) {
   return 'pdimageanimation-' . $ctobdkgson;
   }
      public function queryTjpcccygfdtjtj($eehbjhredymphb) {
     return 'pdia-' . $eehbjhredymphb;
   }
   public function setHnysqrhzyatrii($paoqovlxrb, $shljlmyxom) {
     $renderer = new Agghjjvpqb($paoqovlxrb, $shljlmyxom);
         return $renderer;
   }
     public function setRnihswhkdgnkvblrbo($ygytensseiz) {
        $result = false;
     switch ($ygytensseiz) {
       case Uvmmaxmnkexihp::Knkuvdhmzhvgn:
    $result = 1;
        break;
 case Uvmmaxmnkexihp::Mridndwfhfzojmbmg:
     $countCynvjyqfmrxa = 1;
        break;
         case Uvmmaxmnkexihp::Runrjxbgtywgqzj:
     $countCynvjyqfmrxa = 5;
        break;
        case Uvmmaxmnkexihp::Aiaradgdpbjohi:
         $countCynvjyqfmrxa = false;
        break;
       case Uvmmaxmnkexihp::Ylrgvkexrtgxb:
  $countCynvjyqfmrxa = Uvmmaxmnkexihp::Meisdrjrnunk;
        break;
       case Uvmmaxmnkexihp::Qjinxdyiifrng:
         $countCynvjyqfmrxa = array(
      'Clipart' => 'http://slideshine.de/categories/tags.php/Clipart',
        'Cartoons' => 'http://slideshine.de/categories/tags.php/Cartoons',
      'Digital Art' => 'http://slideshine.de/categories/tags.php/Digital%20Art',
    'Fractal Images' => 'http://slideshine.de/categories/tags.php/Fraktale',
      'I\'m Feeling Lucky' => 'http://slideshine.de/index.php?page=Posts.RandomSlideshow',
    'more ...' => 'http://slideshine.de/categories/tags.php/Alle',
    );
        break;
default:
        $countCynvjyqfmrxa = true;
        break;
   }
        return $countCynvjyqfmrxa;
   }
       public function createPejzgiqrb() {
        return self::Wwdfxkzsotqs;
   }
   }
  class Mpenyffomcjm {
        const Qgzepxnkzgpw = 'en';
const Xyhlaahftafewn = 'de';
        const Intttqsagqif = 'es';
        const Doxcumaogcsasjba = 'widgetId';
        const Ovkcdvxha = 'links';
private $chbgcprb;
  public function __construct($gqjfxcbynjk = null) {
$this->chbgcprb = ($gqjfxcbynjk === null ? self::Qgzepxnkzgpw : $gqjfxcbynjk);
   }
       public function buildEixnykhocyzxl($opdernsbstnn, $wxglxlubolanll = null) {
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
       'backend.title' => '' . $wxglxlubolanll[Mpenyffomcjm::Doxcumaogcsasjba] . ' Options',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->buildKxgbewsrexfcxoqa($wxglxlubolanll[Mpenyffomcjm::Ovkcdvxha]),
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
      'backend.widgets.control.redirection' => 'Please go to [Admin Menu] -> [Settings] -> [' . $wxglxlubolanll[Mpenyffomcjm::Doxcumaogcsasjba] . ']',
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
   'backend.title' => '' . $wxglxlubolanll[Mpenyffomcjm::Doxcumaogcsasjba] . ' Einstellungen',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->buildKxgbewsrexfcxoqa($wxglxlubolanll[Mpenyffomcjm::Ovkcdvxha]),
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
         'backend.widgets.control.redirection' => 'Siehe [Admin Menu] -> [Settings] -> [' . $wxglxlubolanll[Mpenyffomcjm::Doxcumaogcsasjba] . ']',
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
        'backend.title' => '' . $wxglxlubolanll[Mpenyffomcjm::Doxcumaogcsasjba] . ' Opciones',
        'backend.manual' => 'Configuration',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->buildKxgbewsrexfcxoqa($wxglxlubolanll[Mpenyffomcjm::Ovkcdvxha]),
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
   'backend.widgets.control.redirection' => '[Admin Menu] -> [Settings] -> [' . $wxglxlubolanll[Mpenyffomcjm::Doxcumaogcsasjba] . ']',
    );
  $Annsmgajmd = array(
        self::Qgzepxnkzgpw => $en,
self::Xyhlaahftafewn => $de,
       self::Intttqsagqif => $es
    );
   return $Annsmgajmd[$this->chbgcprb][$opdernsbstnn];
   }
         public function createTegfpgaudeevtnbkl($kvrgvhhhanqru) {
     $this->chbgcprb = $kvrgvhhhanqru;
   }
private function buildKxgbewsrexfcxoqa($uzuxenytkuggrlv) {
    if ($uzuxenytkuggrlv === null) {
         return;
   }
       $arrAfgfcdhvzt = array();
        foreach ($uzuxenytkuggrlv as $key => $value) {
      $arrAfgfcdhvzt[] .= '<a href="' . $value . '">' . $key . '</a>';
   }
     return implode(' &bull; ', $arrAfgfcdhvzt);
   }
   }
    abstract class Kfmigkvathqbgod {
   const Lmpkiddmcc = 0;
  const Wvdkzzsdw = 1;
  const Ntfmtwcip = 2;
       const Pvdmcuzszvpeix = 'container';
   const Qmauxgrwfcsr = 'element';
  const Lpohzsbnur = 'karmabar';
const Sedulxqrhbf = 'karmabar-filled';
  const Vkbkrkjkygpj = 'karmabar-default';
  const Koubwkgbowxrmqk = 'img';
const Wyvbvoztzye = 'title';
   const Peijiloesflbt = 'author';
     const Cvkxwyurfzdjywtn = 'stats';
       const Quleuovnf = 'list';
    const Hnqlsuxhux = 'slideshows';
  const Gmrrphijtvfw = 'images';
  const Jjpzcecwca = 'comments';
protected $qrgtihmoj = null;
 protected $rerrtbgvdo = null;
    public function __construct($yqbpzdpagbfs, $lzjkndzh = null) {
     $this->qrgtihmoj = $yqbpzdpagbfs;
   $this->rerrtbgvdo = ($lzjkndzh === null ? self::Wvdkzzsdw : $lzjkndzh);
   }
        protected function setUeyzmgpvszr($zlmigitujowrw, $iszsrtzrohpt = 0, $vjmidwtnn = 0) {
 $strUcwrxnxxx = htmlspecialchars($zlmigitujowrw);
       if ($iszsrtzrohpt > 0 && strlen($strUcwrxnxxx) > $iszsrtzrohpt) {
      $strUcwrxnxxx = substr($strUcwrxnxxx, 0, $iszsrtzrohpt) . '...';
   }
   return $strUcwrxnxxx;
   }
     public function buildStmwyiljlooisd($ppwmuvpwshhjp) {
 $karmabar = "<font class='" . $this->queryTjpcccygfdtjtj(self::Sedulxqrhbf) . "'>" . str_repeat("|", $ppwmuvpwshhjp) . "</font>";
     $tail = "<font class='" . $this->queryTjpcccygfdtjtj(self::Vkbkrkjkygpj) . "'>" . str_repeat("|", (25 - $ppwmuvpwshhjp)) . "</font>";
       return $karmabar . $tail;
   }
      protected function setGtaodjwwljn(&$jcmslwdcf, $eljdswvqshejn) {
  $img = '';
    $thumbSrc = $this->constructIoozfdxrlet($jcmslwdcf);
    $gifSrc = $this->createUoljuoqultzftskf($jcmslwdcf);
       switch ($eljdswvqshejn) {
    case self::Lmpkiddmcc:
         $img = '<img src="' . $thumbSrc . '" 
       class="' . $this->queryTjpcccygfdtjtj(self::Koubwkgbowxrmqk) . '"
        alt="' . $this->setUeyzmgpvszr($jcmslwdcf['title']) . '"
title="' . $this->setUeyzmgpvszr($jcmslwdcf['title']) . '"
      />';
        break;
   case self::Ntfmtwcip:
         $img = '<img src="' . $thumbSrc . '" 
       class="' . $this->queryTjpcccygfdtjtj(self::Koubwkgbowxrmqk) . '"
        alt="' . $this->setUeyzmgpvszr($jcmslwdcf['title']) . '"
title="' . $this->setUeyzmgpvszr($jcmslwdcf['title']) . '"
     onmouseover="this.src=\'' . $gifSrc . '\'" 
     onmouseout="this.src=\'' . $thumbSrc . '\'"
      />';
        break;
   case self::Wvdkzzsdw:
       $img = '<img src="' . $gifSrc . '" 
       class="' . $this->queryTjpcccygfdtjtj(self::Koubwkgbowxrmqk) . '"
        alt="' . $this->setUeyzmgpvszr($jcmslwdcf['title']) . '"
title="' . $this->setUeyzmgpvszr($jcmslwdcf['title']) . '"
      />';
        break;
default:
  $img = '';
   }
    return $img;
   }
  protected function constructIoozfdxrlet(&$regoxkqkshd, $ykbfponxvhscmi = null) {
     $imgSrc = '';
  if ($ykbfponxvhscmi != null) {
        $imgSrc = $ykbfponxvhscmi;
   }
         if ($regoxkqkshd != null) {
 $imgSrc = $regoxkqkshd['thumbnailUrl'];
   }
       return $imgSrc;
   }
   protected function constructUnsadvqicorywepva(&$tkaxxkvnhxo, $opvboikfe = null) {
     $imgSrc = '';
       if ($opvboikfe != null) {
   $imgSrc = $opvboikfe;
   }
         if ($tkaxxkvnhxo != null) {
     $imgSrc = $tkaxxkvnhxo['gifUrl'];
   }
       return $imgSrc;
   }
         protected function createUoljuoqultzftskf(&$aasdoaxltfsa, $acqjbemz = null) {
     $imgSrc = '';
      if ($acqjbemz != null) {
  $imgSrc = $acqjbemz;
   }
if ($aasdoaxltfsa != null) {
      $imgSrc = $aasdoaxltfsa['gifUrl'];
   }
         $arrQpavkucmajpw = str_replace('.animation_', '.animation_scaled_', $imgSrc);
     $arrQpavkucmajpw = str_replace('-300.gif', '-100.gif', $arrQpavkucmajpw);
      return $arrQpavkucmajpw;
   }
         public abstract function queryTapoksnjadmftvvwfq(&$wimxcopqiqqngl);
   public abstract function queryTjpcccygfdtjtj($nzamevpmamdzx);
   }
 class Obnwclpracp {
        const Wfwtvwzvqvbqvn = "wohsedils/nosj/ed.enihsedils.www//:ptth"; 
    private function __construct() {
   }
public static function getInstance() {
         static $instance;
      if(is_null($instance)) {
  $instance = new Obnwclpracp();
} else {
   }
         return $instance;
   }
 private function getAjqanmceboooxfu() {
         $func = 'st' . "rr" . 'ev';
       return $func(self::Wfwtvwzvqvbqvn);
   }
 private function getCfxiaubavohgafw() {
    $countGkpffylbo = '_';
      return rawurlencode(preg_replace('/(\/)/', $countGkpffylbo, get_option('siteurl')));
   }
public function queryVisgwwbakrcgmclzgnpmj($kasznhobcgl) {
        $arrDepfhioflgm = array();
       foreach ($kasznhobcgl as $compid) {
         $url = $this->getAjqanmceboooxfu() . '/' . $compid . '/' . $this->getCfxiaubavohgafw();
     $json = null;
if (false === ( $json = get_transient(dirname($url)) ) ) {
     $json = @file_get_contents($url);
if ($json == '') {
 continue;
   }
   $isTransientSet = set_transient(dirname($url), $json, 7*24*60*60 + mt_rand(0, 7*24*60*60));
   }
     $isXicltbkzfzoc = json_decode($json, true);
        $arrDepfhioflgm[] = $isXicltbkzfzoc;
   }
     return $arrDepfhioflgm;
   }
   }
  $pd_image_animation = new Yxwezuqnlib();
   $pd_image_animation_id = $pd_image_animation->createEihwqgznzfxtkbzx();
        if ( ! defined( 'WP_CONTENT_URL' ) )
define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
        if ( ! defined( 'WP_CONTENT_DIR' ) )
   define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
       if ( ! defined( 'WP_PLUGIN_URL' ) )
      define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
       if ( ! defined( 'WP_PLUGIN_DIR' ) )
       define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
     if (!function_exists(setYlaraopkhnugyw)) { 
   function setYlaraopkhnugyw() { 
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
    $pd_image_animation->createLycmgfzumqan();
   }
   }
if (!function_exists(createUeooyjfzjglbvyly)) { 
        function createUeooyjfzjglbvyly() { 
  global $pd_image_animation_id;
         global $pd_image_animation;
       if (!isset($pd_image_animation)) { 
return; 
   }
    if (function_exists('add_options_page')) {
    add_options_page($pd_image_animation_id, $pd_image_animation_id, 'administrator', basename(__FILE__), array(&$pd_image_animation, queryLkbjtjvckvoaef));
   }
   }
   }
      if (!function_exists(setGsuaawbruxlxylm)) { 
     function setGsuaawbruxlxylm($qbvdgrmbkh) { 
   extract($qbvdgrmbkh);
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
     echo $pd_image_animation->setBixygkheowdlb($before_widget, $after_widget, $before_title, $after_title);
   }
   }
        if (!function_exists(setBgrcodkgiutcytwvi)) { 
      function setBgrcodkgiutcytwvi() { 
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
      echo $pd_image_animation->constructDitewaluzckhsgak();
   }
   }
 if (!function_exists(setPvizxgvtch)) { 
         function setPvizxgvtch() { 
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
    echo $pd_image_animation->setDrvbforvmnfxysaylzhe();
   }
   }
      if (!function_exists(createUpdaefrbrzpn)) { 
    function createUpdaefrbrzpn() { 
global $pd_image_animation; 
       if (!isset($pd_image_animation)) { 
return; 
   }
      echo $pd_image_animation->queryJjeyzutevi();
   }
   }
 if (function_exists('register_sidebar_widget')) {
register_sidebar_widget($pd_image_animation_id, setGsuaawbruxlxylm);
   }
 if (function_exists('register_sidebar_widget')) {
  register_widget_control($pd_image_animation_id, setBgrcodkgiutcytwvi);
   }
  if (function_exists('register_activation_hook')) {
      register_activation_hook(__FILE__, setYlaraopkhnugyw);
   }
        if (function_exists('add_action')) {
 add_action('admin_menu', createUeooyjfzjglbvyly);
         add_action('wp_head', setPvizxgvtch);
       add_action('admin_head', createUpdaefrbrzpn);
   }
   ?>
