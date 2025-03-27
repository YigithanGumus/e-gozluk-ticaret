    <?php 
    include 'header.php'; 
    ?>
        
          <!-- ***************************************************************** -->
                <div class="container-fluid">
                  <div class="card">
                    <div class="card-header">
                      Ürün Güncelleştirme Sayfası
                    </div>
                    <div class="card-body">
                      <form action="../islemler/ajax.php" method="POST">
                        <input type="hidden" name="hakkimizda_id" value="<?php echo $hakkimizdaduz['hakkimizda_id'] ?>">
                          <div class="form-group col-md-6">
                            <label for="baslik">Hakkımızda Sayfasına Yazılacak Yazı Başlığı:</label>
                            <input type="text" name="hakkimizda_baslik" class="form-control" id="baslik" placeholder="Başlık." value="<?php echo $hakkimizdaduz['hakkimizda_baslik'] ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="iceriksira">Hakkımızda Sayfasına Yazılacak İçerik Sırası:</label>
                            <input id="iceriksira" type="text" name="hakkimizda_sira" class="form-control" placeholder="Başlık Sırası." value="<?php echo $hakkimizdaduz['hakkimizda_sira'] ?>">
                          </div>
                          <!-- ckeditor 5 -->
                         <div class="form-group col-md-12">
                            <label>Hakkımızda Sayfasına Yazılacak İçerik:</label>
                            <textarea name="hakkimizda_icerik" id="editor" placeholder="Hakkımızda sayfasına yazılacak içeriği buraya yazınız.">
                              <?php echo $hakkimizdaduz['hakkimizda_icerik'] ?>
                          </textarea>
                         </div>
                         <div class="form-group col-md-6">
                           <button type="submit" class="btn btn-primary" name="hakkimizdaguncelle">Güncelle</button>
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