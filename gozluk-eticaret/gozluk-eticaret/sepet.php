   <?php 
   include 'header.php';


   if (!isset($_SESSION['kul_id'])) {
      header("Location:index");
   }
      $id=$_SESSION['kul_id'];
      $sorgu=$db->prepare("SELECT * FROM sepet WHERE kul_id=$id ");
      $sorgu->execute();


   ?>
      
      <div class="container">
         <h1 class="text-center">Sepet</h1>
         <div class="row" class="table">
            <?php while ($sepetcek=$sorgu->fetch(PDO::FETCH_ASSOC)) {  ?>               
                  <?php 
                     if (!$sepetcek['sepet_id']) {
                       echo "<h1>Sepet boştur!</h1>";
                     }
                     else { ?>
                               <div class="col-md-3" style="margin: 10px;border:1px solid black;padding: 20px;">
                                 <h4 style="font-weight: bold;text-align: center;"><?php echo $sepetcek['urun_isim'] ?></h4>
                                 <div>
                                  <a href="urun.php?id=<?php echo $sepetcek['urun_id']; ?>"><img src="urunler_resim/<?php echo $sepetcek['urun_resim1'] ?>" class="img-fluid"></a>
                                 </div>
                                
                                    <p style="text-align: center;"><span style="color:red;font-weight: bold;"><?php echo $sepetcek['urun_fiyat'] ?> ₺</span></p> 
                                    <p><a href="urun.php?id=<?php echo $sepetcek['urun_id']; ?>" class="btn btn-info btn-block">Ürüne git</a></p>
                              </div>
                   <?php } ?> 
            <?php } ?>
            </div>

      </div>
      <!-- end Our shop section -->
      <?php include 'footer.php'; ?>