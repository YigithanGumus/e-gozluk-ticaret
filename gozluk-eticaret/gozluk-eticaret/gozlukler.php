   <?php 

   include 'header.php'; 
   $sorgu=$db->prepare("SELECT * FROM urunler");
   $sorgu->execute();


   ?>
      <div class="glasses">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Gözlüklerimiz</h2>
                     <p>Bütün ürünlerimiz burada yer almaktadır.
                       Filtreleme yöntemiyle istediğiniz ürüne erişebilirsiniz.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
            <?php while($uruncek=$sorgu->fetch(PDO::FETCH_ASSOC)) {?>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <a href="urun.php?id=<?php echo $uruncek['urun_id'] ?>"><figure><img src="urunler_resim/<?php echo $uruncek['urun_resim1'] ?>" alt="#"/></figure></a>
                     <h3><span style="color:red;">₺</span><?php echo $uruncek['urun_fiyat']; ?></h3>
                     <p><?php echo $uruncek['urun_isim'] ?></p>
                     
                       <?php  if (isset($_SESSION['kul_id'])) { ?>
                        <form action="islemler/ajax.php" method="POST">
                           <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>">
                           <input type="hidden" name="kul_id" value="<?php echo $_SESSION['kul_id'] ?>">
                           <input type="hidden" name="urun_fiyat" value="<?php echo $uruncek['urun_fiyat'] ?>">
                           <input type="hidden" name="urun_isim" value="<?php echo $uruncek['urun_isim'] ?>">
                           <input type="hidden" name="urun_resim1" value="<?php echo $uruncek['urun_resim1'] ?>">
                          <button class="btn btn-light" type="submit" name="sepeteekle">Sepete Ekle</button>
                       </form>
                        <?php } ?>
                  </div>
               </div>
            <?php } ?>
            </div>
         </div>
      </div>
      <?php include 'footer.php'; ?>