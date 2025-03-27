<?php 
function oturumkontrol(){
	if (!isset($_SESSION['kul_mail']) OR !isset($_SESSION['kul_isim'])  OR !isset($_SESSION['kul_id'])) {
		session_destroy();
		header("location:../admin/login.php");
		exit;
	}
}
	
function yetkilikontrol()
{
	if (@$_SESSION['kul_yetki']==1) {
		return TRUE;
	} else {
		session_destroy();
		header("Location:../admin/login.php?durum=no");
	}
}


function guvenlik($gelen)
{
	$giden=strip_tags($gelen);
	$giden=htmlentities($giden);
	return $giden;
}
function giriskontrol() {
	if (isset($_SESSION['kul_mail']) OR isset($_SESSION['kul_isim'])  OR isset($_SESSION['kul_id'])) {
		header("Location:index.php");
	}
 }
 function seo($s) {
 $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',');
 $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','');
 $s = str_replace($tr,$eng,$s);
 $s = strtolower($s);
 $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
 $s = preg_replace('/\s+/', '-', $s);
 $s = preg_replace('|-+|', '-', $s);
 $s = preg_replace('/#/', '', $s);
 $s = str_replace('.', '', $s);
 $s = trim($s, '-');
 return $s;
}
 ?>
