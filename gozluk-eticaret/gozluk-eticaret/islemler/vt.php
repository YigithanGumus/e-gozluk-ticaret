<?php 
	ob_start();
	@session_start();
	$host="localhost";
	$vtname="egozluk";
	$username="root";
	$password="";
	try {
		$db=new pdo("mysql:host=$host;dbname=$vtname;charset=utf8",$username,$password);
		
	} catch (Exception $e) {
		echo "Bağlantı başarısız";
		echo $e->getMessage();
	}

	$sorgu=$db->prepare("SELECT * FROM ayarlar");
	$sorgu->execute();
	$ayarcek=$sorgu->fetch(PDO::FETCH_ASSOC);

 ?>