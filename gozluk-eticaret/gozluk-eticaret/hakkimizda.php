<?php 
include 'header.php'; 
   $sorgu=$db->prepare("SELECT * FROM hakkimizda ORDER BY hakkimizda_sira ASC");
   $sorgu->execute();
   

?>
      <!-- about section -->
      <div class="about">
         <div class="container">
            <div class="row d_flex">
            <?php while($hakkimizdacek=$sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
               <div class="col-md-6" style="margin-top:30px;">
                  <div class="titlepage">
                     <h2><?php echo $hakkimizdacek['hakkimizda_baslik'] ?></h2>
                     <p style="text-align: justify;">
                        <?php echo $hakkimizdacek['hakkimizda_icerik'] ?>
                     </p>
                  </div>
                  <!-- <a class="read_more" href="#">Read More</a> -->
               </div>
            <?php } ?>
            </div>
         </div>
      </div>
      <!-- about section -->
<?php 
include 'footer.php'; 

?>