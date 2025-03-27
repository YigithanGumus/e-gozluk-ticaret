    <?php include 'header.php'; ?>
        
          <!-- ***************************************************************** -->
                <div class="container-fluid">
                  <div class="card">
                    <div class="card-header">
                      ADMİN PANELİ
                    </div>
                    <div class="card-body">
                      <form action="../islemler/ajax.php" method="POST" enctype="multipart/form-data">
                          <div class="form-group col-md-6">
                            <label>Başlık:</label>
                            <input type="text" name="carousel_baslik" class="form-control" placeholder="Başlık">
                          </div>
                          <div class="form-group col-md-6">
                            <label>Sırası:</label>
                            <input type="number" name="carousel_sira" class="form-control" placeholder="Sıra numarası" required="">
                          </div>
                          <div class="form-group col-md-6">
                            <label>Aktiflik:</label>
                            <select name="carousel_aktiflik" class="form-control" required="">
                              <option selected="" value="1">Aktif</option>
                              <option value="0">Pasif</option>
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                          <label>Resim:</label>
                              <input type="file" name="carousel_resim" class="form-control form-control-file" enctype="multipart/form-data">
                          </div>
                          <!-- ckeditor 5 -->
                         <div class="form-group col-md-12">
                            <label>İçerik:</label>
                            <textarea name="carousel_mesaj" class="form-control" placeholder="Hakkımızda sayfasına yazılacak içeriği buraya yazınız."></textarea>
                         </div>
                         <div class="form-group col-md-6">
                           <button class="btn btn-primary" name="carouselkaydet">Kaydet</button>
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