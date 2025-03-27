    <?php include 'header.php'; 
          $id=$_POST['kul_id'];
          $sorgu=$db->prepare("SELECT * FROM kullanicilar WHERE kul_id=$id");
          $sorgu->execute();
          $kullcek=$sorgu->fetch(PDO::FETCH_ASSOC);
    ?>
        
          <!-- ***************************************************************** -->
                <div class="container-fluid">
                  <div class="card">
                    <div class="card-header">
                      ADMİN PANELİ
                    </div>
                    <div class="card-body">
                  
                      <?php 
                      if (@$_GET['durum']=="tamam") {
                        echo "<div class='alert alert-success'><b>Giriş Başarılı!</b></div>";
                      }
                     ?>
                     <form action="../islemler/ajax.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="kul_id" value="<?php echo $kullcek['kul_id'] ?>">
                        <div class="row">
                          <div class="col-md-4">
                            <label>Kullanıcı İsmi:</label>
                              <input type="text" name="kul_isim" class="form-control" value="<?php echo $kullcek['kul_isim'] ?>">
                          </div>
                          <div class="col-md-4">
                            <label>Kullanıcı Mail:</label>
                              <input type="email" name="kul_mail" class="form-control" value="<?php echo $kullcek['kul_mail'] ?>">
                          </div>
                          <div class="col-md-4">
                            
                          </div>  
                        </div>
                     </form>
                    </div>
                    <div class="card-footer">
                      <p class="text-danger">Paneli kullanırken dikkat ediniz!</p>
                    </div>
                  </div>
               </div>
           
         <!-- ***************************************************************** -->
        
           <?php include 'footer.php'; ?>