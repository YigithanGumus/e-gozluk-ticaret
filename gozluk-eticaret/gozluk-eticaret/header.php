   <?php 
   include 'islemler/vt.php';
   include 'islemler/fonksiyonlar.php';
   ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title><?php echo $ayarcek['site_baslik']; ?></title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="shortcut icon" type="image/png" href="dosyalar/<?php echo $ayarcek['site_logo'] ?>">

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout position_head">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="dosyalar/<?php echo $ayarcek['site_logo']; ?>" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="index.php">Anasayfa</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="hakkimizda.php">Hakkımızda</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="gozlukler.php">Gözlüklerimiz</a>
                              </li>
                              <?php 
                                 if (isset($_SESSION['kul_yetki']) OR isset($_SESSION['kul_yetki'])) { ?>
                                        <li class="nav-item">
                                          <a class="nav-link" href="sepet.php">Sepet</a>
                                       </li>
                                  <?php  } else { ?>
                                    
                                <?php } ?>
                              <li class="nav-item">
                                 <a class="nav-link" href="iletisim.php">İletişim</a>
                              </li>
                              <li class="nav-item d_none login_btn">
                                 <?php if (isset($_SESSION['kul_yetki']) OR isset($_SESSION['kul_yetki'])) { ?>
                                    <a class="nav-link"><?php echo @$_SESSION['kul_isim'] ?></a>
                                 <?php } else { ?>
                                 <a class="nav-link" href="login.php">Giriş</a>
                              <?php } ?>
                              </li>
                              <li class="nav-item d_none">
                                 <?php if (isset($_SESSION['kul_yetki']) OR isset($_SESSION['kul_yetki'])) { ?>
                                    <a class="nav-link" href="cikis.php">Çıkış</a>
                                 <?php } else { ?>
                                 <a class="nav-link" href="kayit.php">Kayıt ol</a>
                              <?php } ?>
                              </li>
                              <!--
                              <li class="nav-item d_none sea_icon">
                                 <a class="nav-link" href="ara.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                           -->
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
            <?php  
            if (@$_GET['durum']=="kullanicigirisiyapildi") { ?>
                  <div class="alert alert-success alert-dismissible col-md-12 mt-3">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Başarılı!</strong> Kullanıcı girişi başarılı.
                  </div>

            <?php } ?>
             <?php  
            if (@$_GET['durum']=="kayittamamlandi") { ?>
                  <div class="alert alert-success alert-dismissible col-md-12 mt-3">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Başarılı!</strong> Kullanıcı kaydı oluşturulmuştur.
                  </div>
            <?php } ?>
            <?php  
            if (@$_GET['durum']=="mailayni") { ?>
                  <div class="alert alert-warning alert-dismissible col-md-12 mt-3">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Başarısız!</strong> Bu mail adresi kayıtlıdır! Lütfen başka bir mail adresi giriniz.
                  </div>
            <?php } ?>
            <?php  
            if (@$_GET['durum']=="kayitolamadi") { ?>
                  <div class="alert alert-danger alert-dismissible col-md-12 mt-3">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Başarısız!</strong> Kullanıcı kaydı başarısız!
                  </div>
            <?php } ?>
            <?php  
            if (@$_GET['durum']=="no") { ?>
                  <div class="alert alert-danger alert-dismissible col-md-12 mt-3">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Başarısız!</strong> Kullanıcı girişi başarısız!
                  </div>
            <?php } ?>
      <!-- end header inner -->
      <!-- end header -->
