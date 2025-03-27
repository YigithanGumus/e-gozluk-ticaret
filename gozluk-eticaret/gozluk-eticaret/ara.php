<?php 
include 'header.php';

  

?>
      <!-- about section -->
      <div class="about">
         <div class="container">
            <div class="col-md-12">
               <h1 class="text-center">ARAMA SAYFASI</h1>
               <form action="#" method="POST">
                  <input type="search" name="ara" style="width:100%;height: 50px;padding: 10px;">
                  <button type="submit" class="btn btn-primary btn-block" name="arabul" style="margin-top:20px;">Ara</button>
               </form>
            </div>
         </div>
      </div>
      <!-- about section -->
      <div class="container">

           <?php
               $sorgu=$db->prepare("SELECT * FROM urunler WHERE urun_isim=:{$_POST['ara']}");
               $sonuc->execute();
               while ($aracek=$sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                     <div>
                        <p>
                           <?php echo $aracek['urun_isim'] ?>
                        </p>
                     </div>
               <?php } ?>

      </div>
<?php 
include 'footer.php';
?>

