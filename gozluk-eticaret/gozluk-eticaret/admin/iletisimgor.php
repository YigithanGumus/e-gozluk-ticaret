    <?php 
    include 'header.php'; 
    $sorgu=$db->prepare("SELECT * FROM iletisim WHERE iletisim_id=:iletisim_id");
    $sorgu->execute(array(
      'iletisim_id'=>$_POST['iletisim_id']
    ));
    $iletisimgor=$sorgu->fetch(PDO::FETCH_ASSOC);
    ?>
        
          <!-- ***************************************************************** -->
                <div class="container-fluid">
                  <div class="card">
                    <div class="card-header">
                      Ürün Güncelleştirme Sayfası
                    </div>
                    <div class="card-body">
                      <form action="../islemler/ajax.php" method="POST">
                        <input type="hidden" name="iletisim_id" value="<?php echo $iletisimduz['iletisim_id'] ?>">
                        
                          <div class="row">
                            <div class="col-md-6 form-group">
                              <label>İsim:</label>
                              <input type="text" name="iletisim_isim" class="form-control" value="<?php echo $iletisimgor['iletisim_isim'] ?>" disabled>
                            </div>
                            <div class="col-md-6 form-group">
                              <label>Başlık:</label>
                              <input type="text" name="iletisim_baslik" class="form-control" value="<?php echo $iletisimgor['iletisim_baslik'] ?>" disabled>
                            </div>
                            <div class="col-md-6 form-group">
                              <label>Mail:</label>
                              <input type="text" name="iletisim_kisi_mail" class="form-control" value="<?php echo $iletisimgor['iletisim_kisi_mail'] ?>" disabled>
                            </div>
                            <div class="col-md-6 form-group">
                              <label>Tarih:</label>
                              <input type="text" name="iletisim_tarih" class="form-control" value="<?php echo $iletisimgor['iletisim_zaman'] ?>" disabled>
                            </div>
                            <div class="col-md-6 form-group">
                              <label>Telefon Numarası:</label>
                              <input type="text" name="iletisim_baslik" class="form-control" value="<?php echo $iletisimgor['iletisim_telefon'] ?>" disabled>
                            </div>
                            <div class="col-md-6 form-group">
                               <label>Mesaj:</label>
                              <textarea name="iletisim_icerik" disabled="" placeholder="Hakkımızda sayfasına yazılacak içeriği buraya yazınız." disabled class="form-control">
                                <?php echo $iletisimgor['iletisim_aciklama'] ?>
                               </textarea>
                            </div> 
                          </div>
                          <!-- ckeditor 5 -->
                      </form>
                    </div>
                    <div class="card-footer">
                      <p class="text-danger">Paneli kullanırken dikkat ediniz!</p>
                    </div>
                  </div>
               </div>

         <!-- ***************************************************************** -->
           <?php include 'footer.php'; ?>