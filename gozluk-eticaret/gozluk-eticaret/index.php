   <?php include 'header.php'; ?>
   <?php 
         $sorgu2=$db->prepare("SELECT * FROM carousel WHERE carousel_aktiflik=1 ORDER BY carousel_sira ASC");
         $sorgu2->execute();
    ?>
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1> <span class="blu">Hoşgeldiniz <br></span>SCOOT GÖZLÜK</h1>
                           <figure><img src="images/banner_img.png" alt="#"/></figure>
                           <h3></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <?php while($carouselcek=$sorgu2->fetch(PDO::FETCH_ASSOC)) { ?>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1><?php echo $carouselcek['carousel_baslik'] ?></h1>
                           <figure><img src="carousel_resim/<?php echo $carouselcek['carousel_resim'] ?>" alt="#"/></figure>
                           <h3><?php echo $carouselcek['carousel_mesaj'] ?></h3>
                        </div>
                     </div>
                  </div>
               </div>
                <?php } ?>
            </div>

            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
         </div>

      </section>
      <!-- end banner -->
      <!-- about section -->
      <div class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="images/about_img.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Mağazamız Hakkında</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <a class="read_more" href="hakkimizda.php">Devamını Oku</a>
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->
      <!-- Our  Glasses section -->
      <div class="glasses">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Our Glasses</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor
                        e et dolore magna aliqua. Ut enim ad minim veniam, qui
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass1.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>50</h3>
                     <p>Sunglasses</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass2.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>50</h3>
                     <p>Sunglasses</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass3.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>50</h3>
                     <p>Sunglasses</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass4.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>50</h3>
                     <p>Sunglasses</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass5.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>50</h3>
                     <p>Sunglasses</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass6.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>50</h3>
                     <p>Sunglasses</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass7.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>50</h3>
                     <p>Sunglasses</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass8.png" alt="#"/></figure>
                     <h3><span class="blu">$</span>50</h3>
                     <p>Sunglasses</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end Our  Glasses section -->
      <!-- Our shop section -->
      <div id="about" class="shop">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div  class="shop_img">
                     <figure><img src="images/shop_img.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7 padding_right0">
                  <div class="max_width">
                     <div class="titlepage">
                        <h2>Best SunGlasses  At Our shop</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        <a class="read_more" href="#">Shop Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Our shop section -->
      <!-- clients section -->
      <div class="clients">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>What say our clients</h2>
                     <p>orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut la</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide clients_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="clients_box">
                                          <figure><img src="images/our.png" alt="#"/></figure>
                                          <h3>Sandy Mark</h3>
                                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,It is a long established fact  a more-or-less normal distribution of letters,</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="clients_box">
                                          <figure><img src="images/our.png" alt="#"/></figure>
                                          <h3>Sandy Mark</h3>
                                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,It is a long established fact  a more-or-less normal distribution of letters,</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="clients_box">
                                          <figure><img src="images/our.png" alt="#"/></figure>
                                          <h3>Sandy Mark</h3>
                                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,It is a long established fact  a more-or-less normal distribution of letters,</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class='fa fa-angle-left'></i>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class='fa fa-angle-right'></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end clients section -->
      <!-- contact section -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <?php if (@$_GET['durum']=="mesajgonderildi"): ?>
                         <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong>Mesaj gönderilmiştir!</strong>
                        </div>
                  <?php endif ?>
                  <form id="request" class="main_form" method="POST" action="islemler/ajax.php">
                     <div class="row">
                        <div class="col-md-12 ">
                           <h3>Bize Ulaşın</h3>
                        </div>
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="İsminiz" type="type" name="iletisim_isim"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Telefon Numaranız" type="type" name="iletisim_telefon"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="E-Posta" type="type" name="iletisim_kisi_mail">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Başlık" type="type" name="iletisim_baslik">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactusmess" name="iletisim_aciklama" placeholder="Mesajınız" type="type" Message="iletisim_aciklama">
                        </div>
                        <div class="col-md-12">
                           <button class="btn btn-info" name="bizeulas">Gönder</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="map_section">
               <div id="map">

               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- end contact section -->
    <?php include 'footer.php'; ?>