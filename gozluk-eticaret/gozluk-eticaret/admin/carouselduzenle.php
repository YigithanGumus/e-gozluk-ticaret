    <?php 
    include 'header.php'; 
    $sorgu=$db->prepare("SELECT * FROM carousel WHERE carousel_id=:carousel_id");
    $sorgu->execute(array(
      'carousel_id'=>$_POST['carousel_id']
    ));
    $carouselduz=$sorgu->fetch(PDO::FETCH_ASSOC);
    ?>
        
          <!-- ***************************************************************** -->
                <div class="container-fluid">
                  <div class="card">
                    <div class="card-header">
                      Ürün Güncelleştirme Sayfası
                    </div>
                    <div class="card-body">
                      <form action="../islemler/ajax.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="carousel_id" value="<?php echo $carouselduz['carousel_id'] ?>">
                          <div class="form-group col-md-6">
                            <label for="baslik">Başlık:</label>
                            <input type="text" name="carousel_baslik" class="form-control" id="baslik" placeholder="Başlık" value="<?php echo $carouselduz['carousel_baslik'] ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="iceriksira">Sırası:</label>
                            <input id="iceriksira" type="text" name="carousel_sira" class="form-control" placeholder="Başlık Sırası." value="<?php echo $carouselduz['carousel_sira'] ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="iceriksira">Aktiflik:</label>
                            <select name="carousel_aktiflik" class="form-control">
                              <?php if($carouselduz['carousel_aktiflik']==1) {?>
                                <option value="1">Aktif</option>
                                <option value="0">Pasif</option>
                              <?php  } else { ?>
                                <option value="0">Pasif</option>
                                <option value="1">Aktif</option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="iceriksira">Resim:</label>
                            <input id="iceriksira" type="file" name="carousel_resim" class="form-control">
                          </div>
                          <!-- ckeditor 5 -->
                         <div class="form-group col-md-12">
                            <label>İçerik:</label>
                            <textarea name="carousel_mesaj" id="editor">
                              <?php echo $carouselduz['carousel_mesaj'] ?>
                          </textarea>
                         </div>
                         <div class="form-group col-md-6">
                           <button type="submit" class="btn btn-primary" name="carouselguncelle">Güncelle</button>
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