<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <?php include 'header.php'; ?>
      <!-- contact section -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
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
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br> <?php echo $ayarcek['site_konum'] ?></li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br> <?php echo $ayarcek['site_telefon'] ?></li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><br><?php echo $ayarcek['site_sahip_mail'] ?></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>designer by <a href="http://www.yigithangumus.com">yigithangumus</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             });
         
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 
   </body>
</html>