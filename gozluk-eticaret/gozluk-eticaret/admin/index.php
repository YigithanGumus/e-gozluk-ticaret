    <?php include 'header.php'; ?>
        
          <!-- ***************************************************************** -->
                <div class="container-fluid">
                  <div class="card">
                    <div class="card-header">
                      ADMİN PANELİ
                    </div>
                    <div class="card-body">
                      <p>
                        Yan taraftan admin paneli kontrol edebilirsiniz.
                      </p>
                      <?php 
                      if (@$_GET['durum']=="tamam") {
                        echo "<div class='alert alert-success'><b>Giriş Başarılı!</b></div>";
                      }
                     ?>
                    </div>
                    <div class="card-footer">
                      <p class="text-danger">Paneli kullanırken dikkat ediniz!</p>
                    </div>
                  </div>
               </div>
           
         <!-- ***************************************************************** -->
        
           <?php include 'footer.php'; ?>