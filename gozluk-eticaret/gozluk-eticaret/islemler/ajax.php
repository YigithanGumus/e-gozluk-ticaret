<?php 
	include 'vt.php';
	include 'fonksiyonlar.php';
	/***************************************/
	if (isset($_POST['ayarkaydet'])) {
		$sorgu=$db->prepare("
		UPDATE ayarlar SET
		site_baslik=:site_baslik,
		site_aciklama=:site_aciklama,
		site_link=:site_link,
		site_sahip_mail=:site_sahip_mail,
		site_mail_host=:site_mail_host,
		site_mail_mail=:site_mail_mail,
		site_mail_port=:site_mail_port,
		site_mail_sifre=:site_mail_sifre,
		site_konum=:site_konum,
		site_telefon=:site_telefon

		 WHERE id=0
			");

		$sonuc=$sorgu->execute(array(
		'site_baslik'=>$_POST['site_baslik'],
		'site_aciklama'=>$_POST['site_aciklama'],
		'site_link'=>$_POST['site_link'],
		'site_sahip_mail'=>$_POST['site_sahip_mail'],
		'site_mail_host'=>$_POST['site_mail_host'],
		'site_mail_mail'=>$_POST['site_mail_mail'],
		'site_mail_port'=>$_POST['site_mail_port'],
		'site_mail_sifre'=>$_POST['site_mail_sifre'],
		'site_konum'=>$_POST['site_konum'],
		'site_telefon'=>$_POST['site_telefon']
		));
		if ($_FILES['site_logo']['error']=="0") {
			$gecici_isim=$_FILES['site_logo']['tmp_name'];
			$dosya_ismi=rand(100000,999999).$_FILES['site_logo']['name'];
			move_uploaded_file($gecici_isim, "../dosyalar/$dosya_ismi");
			$sorgu=$db->prepare("
			UPDATE ayarlar SET
			site_logo=:site_logo 
			WHERE id=0
				");
			$sonuc=$sorgu->execute(array(
			'site_logo'=>$dosya_ismi
			));
		}
		if ($sonuc) {
			header("Location:../admin/ayarlar.php?durum=tamam");
		}
		else {
			header("Location:../admin/ayarlar.php?durum=hayir");
		}
		exit;
	}
	/***************************************/
	
if (isset($_POST['oturumacma'])) {
	$sorgu=$db->prepare("SELECT * FROM kullanicilar WHERE kul_mail=:kul_mail AND kul_sifre=:kul_sifre");
	$sorgu->execute(array(
		'kul_mail' => $_POST['kul_mail'],
		'kul_sifre' => md5($_POST['kul_sifre'])
	));
	$sonuc=$sorgu->rowcount();
	$kullanici=$sorgu->fetch(PDO::FETCH_ASSOC);

	if ($sonuc==0) {
		header("location:../admin/login.php?durum=no");
	} else {
		$_SESSION['kul_isim'] = $kullanici['kul_isim'];
		$_SESSION['kul_mail'] = $kullanici['kul_mail'];
		$_SESSION['kul_id'] = $kullanici['kul_id'];
		$_SESSION['kul_yetki'] = $kullanici['kul_yetki'];
		$_SESSION['kul_resim'] = $kullanici['kul_resim'];
		header("location:../admin/index.php?durum=ok");
	}
	exit;
}

	/***************************************/
	if (isset($_POST['adminguncelle'])) {
		$sorgu=$db->prepare("
		UPDATE kullanicilar SET
		kul_isim=:kul_isim,
		kul_mail=:kul_mail

		 WHERE kul_id=:kul_id
			");

		$sonuc=$sorgu->execute(array(
		'kul_isim'=>$_POST['kul_isim'],
		'kul_mail'=>$_POST['kul_mail'],
		'kul_id'=>$_SESSION['kul_id']
		));
		if (strlen($_POST['kul_sifre'])>0) {
		$sorgu=$db->prepare("UPDATE kullanicilar SET 
			kul_sifre=:kul_sifre WHERE kul_id=:kul_id
			");

		$sonuc=$sorgu->execute(array(
			'kul_sifre' => md5($_POST['kul_sifre']),
			'kul_id' => $_SESSION['kul_id']
		));
		}
		if ($_FILES['kul_resim']['error']=="0") {
			$gecici_isim=$_FILES['kul_resim']['tmp_name'];
			$dosya_ismi=rand(100000000,999999999).$_FILES['kul_resim']['name'];
			move_uploaded_file($gecici_isim, "../admin/kisiler/$dosya_ismi");
			$sorgu=$db->prepare("
			UPDATE kullanicilar SET
			kul_resim=:kul_resim 
			WHERE kul_id={$_SESSION['kul_id']}
				");
			
			$sonuc=$sorgu->execute(array(
			'kul_resim'=>$dosya_ismi
			));
		}
		if ($sonuc) {
			header("Location:../admin/profil.php?id={$_SESSION['kul_id']}&durum=profilguncellendi");
		}
		else {
			header("Location:../admin/profil.php?durum=profilguncellenemedi");
		}
		exit;
	}

	/*************************************/
	if (isset($_POST['kullanicigiris'])) {
	$sorgu=$db->prepare("SELECT * FROM kullanicilar WHERE kul_mail=:kul_mail AND kul_sifre=:kul_sifre");
	$sorgu->execute(array(
		'kul_mail' => $_POST['kul_mail'],
		'kul_sifre' => md5($_POST['kul_sifre'])
	));
	$sonuc=$sorgu->rowcount();
	$kullanici=$sorgu->fetch(PDO::FETCH_ASSOC);

	if ($sonuc==0) {
		header("location:../login.php?durum=no");
	} else {
		$_SESSION['kul_isim'] = $kullanici['kul_isim'];
		$_SESSION['kul_mail'] = $kullanici['kul_mail'];
		$_SESSION['kul_id'] = $kullanici['kul_id'];
		$_SESSION['kul_yetki'] = $kullanici['kul_yetki'];
		header("location:../index.php?durum=kullanicigirisiyapildi");
	}
	exit;
}
/*************************************/
if (isset($_POST['uyekayit'])) {
	$sorgu=$db->prepare("SELECT * FROM kullanicilar WHERE kul_mail=:kul_mail");
	$sorgu->execute(array(
		'kul_mail'=>guvenlik($_POST['kul_mail'])		
	));
	$sonuc=$sorgu->rowcount();
		if ($sonuc==0) {
			$sorgu=$db->prepare("INSERT INTO kullanicilar SET 
			kul_isim=:kul_isim,
			kul_mail=:kul_mail,
			kul_sifre=:kul_sifre,
			kul_tel=:kul_tel,
			kul_adres=:kul_adres	
			");
		$sonuc=$sorgu->execute(array(
			'kul_isim'=>$_POST['kul_isim'],
			'kul_mail'=>$_POST['kul_mail'],
			'kul_sifre'=>md5($_POST['kul_sifre']),
			'kul_tel'=>$_POST['kul_tel'],
			'kul_adres'=>$_POST['kul_adres']
			
		));
		if ($sonuc) {
			header("Location:../login.php?durum=kayittamamlandi");
		}
		else {
			header("Location:../kayit.php?durum=mailayni");
		}
	}
	else {
			header("Location:../kayit.php?durum=kayitolamadi");
	}	
}
/*************************************/
if (isset($_POST['hakkimizdakaydet'])) {
		$sorgu=$db->prepare("
		INSERT INTO hakkimizda SET
		hakkimizda_baslik=:hakkimizda_baslik,
		hakkimizda_icerik=:hakkimizda_icerik,
		hakkimizda_sira=:hakkimizda_sira
			");

		$sonuc=$sorgu->execute(array(
		'hakkimizda_baslik'=>$_POST['hakkimizda_baslik'],
		'hakkimizda_icerik'=>$_POST['hakkimizda_icerik'],
		'hakkimizda_sira'=>$_POST['hakkimizda_sira']
		));
		if ($sonuc) {
			header("Location:../admin/hakkimizda.php?durum=eklendi");
		}
		else {
			header("Location:../admin/hakkimizda.php?durum=eklenemedi");
		}
		exit;
	}
/*************************************/
if (isset($_POST['hakkimizdaguncelle'])) {
	$sorgu=$db->prepare("UPDATE hakkimizda SET 
			hakkimizda_baslik=:hakkimizda_baslik,
			hakkimizda_icerik=:hakkimizda_icerik,
			hakkimizda_sira=:hakkimizda_sira
			WHERE hakkimizda_id={$_POST['hakkimizda_id']}
		");
	$sonuc=$sorgu->execute(array(
			'hakkimizda_baslik'=>$_POST['hakkimizda_baslik'],
			'hakkimizda_icerik'=>$_POST['hakkimizda_icerik'],
			'hakkimizda_sira'=>$_POST['hakkimizda_sira']
		));
		if ($sonuc) {
			header("Location:../admin/hakkimizda.php?durum=guncellendi");
		} else {
			header("Location:../admin/hakkimizda.php?durum=guncellenemedi");
		}
	}
	/**********************************/
	if (isset($_POST['hakkimizdasil'])) {
			$sorgu=$db->prepare("DELETE FROM hakkimizda WHERE hakkimizda_id=:hakkimizda_id");
		$sonuc=$sorgu->execute(array(
			'hakkimizda_id' =>$_POST['hakkimizda_id']
		));

		if ($sonuc) {
			header("location:../admin/hakkimizda.php?durum=silindi");
		} else {
			header("location:../admin/hakkimizda.php?durum=silinemedi");
		}
	}
	/**********************************/
	if (isset($_POST['iletisimsil'])) {
			$sorgu=$db->prepare("DELETE FROM iletisim WHERE iletisim_id=:iletisim_id");
		$sonuc=$sorgu->execute(array(
			'iletisim_id' =>$_POST['iletisim_id']
		));

		if ($sonuc) {
			header("location:../admin/iletisim.php?durum=silindi");
		} else {
			header("location:../admin/iletisim.php?durum=silinemedi");
		}
	}
	/**********************************/
	if (isset($_POST['bizeulas'])) {
		$sorgu=$db->prepare("
		INSERT INTO iletisim SET
		iletisim_isim=:iletisim_isim,
		iletisim_baslik=:iletisim_baslik,
		iletisim_aciklama=:iletisim_aciklama,
		iletisim_kisi_mail=:iletisim_kisi_mail,
		iletisim_telefon=:iletisim_telefon
			");

		$sonuc=$sorgu->execute(array(
		'iletisim_isim'=>$_POST['iletisim_isim'],
		'iletisim_baslik'=>$_POST['iletisim_baslik'],
		'iletisim_aciklama'=>$_POST['iletisim_aciklama'],
		'iletisim_kisi_mail'=>$_POST['iletisim_kisi_mail'],
		'iletisim_telefon'=>$_POST['iletisim_telefon']
		));
		if ($sonuc) {
			header("Location:../index.php?durum=mesajgonderildi");
		}
		else {
			header("Location:../index.php?durum=mesajgonderilemedi");
		}
		exit;
	}
	/***************************************/
	if (isset($_POST['carouselkaydet'])) {
		  if ($_FILES['carousel_resim']['error']=="0") {
            $gecici_isim=$_FILES['carousel_resim']['tmp_name'];
            $dosya_ismi=rand(100000,999999).$_FILES['carousel_resim']['name'];
            move_uploaded_file($gecici_isim, "../carousel_resim/$dosya_ismi");
       		 } 
		$sorgu=$db->prepare("
		INSERT INTO carousel SET
		carousel_baslik=:carousel_baslik,
		carousel_sira=:carousel_sira,
		carousel_mesaj=:carousel_mesaj,
		carousel_aktiflik=:carousel_aktiflik,
		carousel_resim=:carousel_resim
			");
		
		$sonuc=$sorgu->execute(array(
		'carousel_baslik'=>$_POST['carousel_baslik'],
		'carousel_sira'=>$_POST['carousel_sira'],
		'carousel_mesaj'=>$_POST['carousel_mesaj'],
		'carousel_aktiflik'=>$_POST['carousel_aktiflik'],
		'carousel_resim'=>$dosya_ismi
		));

		
		
		if ($sonuc) {
			header("Location:../admin/carousel.php?durum=tamam");
		}
		else {
			header("Location:../admin/carousel.php?durum=hayir");
		}
		exit;
		
	}

	/******************************/
	if (isset($_POST['carouselsil'])) {
		$sorgu=$db->prepare("DELETE FROM carousel WHERE carousel_id=:carousel_id");
		$sonuc=$sorgu->execute(array(
			'carousel_id'=>$_POST['carousel_id']

		));
		$dosya = $_POST['carousel_resim'];
		unlink("../carousel_resim/".$dosya);
		if ($sonuc) {
			header("Location:../admin/carousel.php?durum=tamam");
		}
		else {
			 header("Location:../admin/carousel.php?durum=hayir");
		}
		exit;
	}
	/*****************************/
	if (isset($_POST['carouselguncelle'])) {
		$sorgu=$db->prepare("
		UPDATE carousel SET
		carousel_baslik=:carousel_baslik,
		carousel_sira=:carousel_sira,
		carousel_aktiflik=:carousel_aktiflik,
		carousel_mesaj=:carousel_mesaj

		 WHERE carousel_id={$_POST['carousel_id']}
			");

		$sonuc=$sorgu->execute(array(
		'carousel_baslik'=>$_POST['carousel_baslik'],
		'carousel_sira'=>$_POST['carousel_sira'],
		'carousel_aktiflik'=>$_POST['carousel_aktiflik'],
		'carousel_mesaj'=>$_POST['carousel_mesaj']
		));
		if ($_FILES['carousel_resim']['error']=="0") {
			$gecici_isim=$_FILES['carousel_resim']['tmp_name'];
			$dosya_ismi=rand(1000000,9999999).$_FILES['carousel_resim']['name'];
			move_uploaded_file($gecici_isim, "../carousel_resim/$dosya_ismi");
			$sorgu=$db->prepare("
			UPDATE carousel SET
			carousel_resim=:carousel_resim
			WHERE carousel_id={$_POST['carousel_id']}
				");
			$sonuc=$sorgu->execute(array(
			'carousel_resim'=>$dosya_ismi
			));
		}
		if ($sonuc) {
			header("Location:../admin/carousel.php?durum=tamam");
		}
		else {
			header("Location:../admin/carousel.php?durum=hayir");
		}
		exit;
	}
	/********************************/
	if (isset($_POST['sepeteekle'])) {
		$sorgu=$db->prepare("
		INSERT INTO sepet SET
		urun_id=:urun_id,
		kul_id=:kul_id,
		urun_fiyat=:urun_fiyat,
		urun_resim1=:urun_resim1,
		urun_isim=:urun_isim
			");

		$sonuc=$sorgu->execute(array(
		'urun_id'=>$_POST['urun_id'],
		'kul_id'=>$_POST['kul_id'],
		'urun_fiyat'=>$_POST['urun_fiyat'],
		'urun_resim1'=>$_POST['urun_resim1'],
		'urun_isim'=>$_POST['urun_isim']
		));
		if ($sonuc) {
			header("Location:../gozlukler.php?durum=eklendi");
		}
		else {
			header("Location:../gozlukler.php?durum=eklenemedi");
		}
		exit;
	}
	/********************************/	
	if (isset($_POST['urunguncelle'])) {
		$sorgu=$db->prepare("
		UPDATE urunler SET
		urun_isim=:urun_isim,
		urun_fiyat=:urun_fiyat,
		urun_ozellik=:urun_ozellik,
		urun_onecikar=:urun_onecikar
		

		 WHERE urun_id={$_POST['urun_id']}
			");

		$sonuc=$sorgu->execute(array(
		'urun_isim'=>$_POST['urun_isim'],
		'urun_fiyat'=>$_POST['urun_fiyat'],
		'urun_ozellik'=>$_POST['urun_ozellik'],
		'urun_onecikar'=>$_POST['urun_onecikar']

		));
		if ($_FILES['urun_resim1']['error']=="0") {
			$gecici_isim=$_FILES['urun_resim1']['tmp_name'];
			$dosya_ismi=rand(100000,999999).$_FILES['urun_resim1']['name'];
			move_uploaded_file($gecici_isim, "../dosyalar/$dosya_ismi");
			$sorgu=$db->prepare("
			UPDATE urunler SET
			urun_resim1=:urun_resim1 
			WHERE urun_id={$_POST['urun_id']}
				");
			$sonuc=$sorgu->execute(array(
			'urun_resim1'=>$dosya_ismi
			));
		}
		if ($sonuc) {
			header("Location:../admin/urun.php?durum=tamam");
		}
		else {
			header("Location:../admin/urun.php?durum=hayir");
		}
		exit;
	}
	/********************************/
	if (isset($_POST['urunsil'])) {
			$sorgu=$db->prepare("DELETE FROM urunler WHERE urun_id=:urun_id");
			$sonuc=$sorgu->execute(array(
				'urun_id' =>$_POST['urun_id']
			));

			if ($sonuc) {
				header("location:../admin/urun.php?durum=silindi");
			} else {
				header("location:../admin/urun.php?durum=silinemedi");
			}
	
	}

	/************************************/
	if (isset($_POST['urunekle'])) {
		if ($_FILES['urun_resim1']['error']=="0") {
            $gecici_isim=$_FILES['urun_resim1']['tmp_name'];
            $dosya_ismi=rand(100000,999999).$_FILES['urun_resim1']['name'];
            move_uploaded_file($gecici_isim, "../urunler_resim/$dosya_ismi");
       		 } 
		$sorgu=$db->prepare("
		INSERT INTO urunler SET
		urun_isim=:urun_isim,
		urun_fiyat=:urun_fiyat,
		urun_ozellik=:urun_ozellik,
		urun_resim1=:urun_resim1,
		urun_onecikar=:urun_onecikar
			");

		$sonuc=$sorgu->execute(array(
		'urun_isim'=>$_POST['urun_isim'],
		'urun_fiyat'=>$_POST['urun_fiyat'],
		'urun_ozellik'=>$_POST['urun_ozellik'],
		'urun_resim1'=> $dosya_ismi,
		'urun_onecikar'=>$_POST['urun_onecikar']
		));
		if ($sonuc) {
			header("Location:../admin/urun.php?durum=eklendi");
		}
		else {
			header("Location:../admin/urun.php?durum=eklenemedi");
		}
		exit;
	}
	/*************************************/
	if (isset($_POST['kullsil'])) {
			$sorgu=$db->prepare("DELETE FROM kullanicilar WHERE kul_id=:kul_id");
		$sonuc=$sorgu->execute(array(
			'kul_id' =>$_POST['kul_id']
		));

		if ($sonuc) {
			header("location:../admin/kullanicilar.php?durum=silindi");
		} else {
			header("location:../admin/kullanicilar.php?durum=silinemedi");
		}
	}
?>