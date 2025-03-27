    <?php include 'header.php'; ?>
        
          <!-- ***************************************************************** -->
                <div class="container-fluid">
                  <div class="card">
                    <div class="card-header">
                      ADMİN PANELİ
                    </div>
                    <div class="card-body">
                      <form action="../islemler/ajax.php" method="POST">
                          <div class="form-group col-md-6">
                            <label for="baslik">Hakkımızda Sayfasına Yazılacak Yazı Başlığı:</label>
                            <input type="text" name="hakkimizda_baslik" class="form-control" id="baslik" placeholder="Başlık.">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="iceriksira">Hakkımızda Sayfasına Yazılacak İçerik Sırası:</label>
                            <input id="iceriksira" type="text" name="hakkimizda_sira" class="form-control" placeholder="Başlık Sırası.">
                          </div>
                          <!-- ckeditor 5 -->
                         <div class="form-group col-md-12">
                            <label>Hakkımızda Sayfasına Yazılacak İçerik:</label>
                            <textarea name="hakkimizda_icerik" id="editor" placeholder="Hakkımızda sayfasına yazılacak içeriği buraya yazınız.">
                             
                          </textarea>
                         </div>
                         <div class="form-group col-md-6">
                           <button class="btn btn-primary" name="hakkimizdakaydet">Kaydet</button>
                         </div>
                      </form>
                      <?php 
                      if (@$_GET['durum']=="eklendi") {
                        echo "<div class='alert alert-success'><b>İçerik eklenmiştir!</b></div>";
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