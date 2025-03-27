    <?php 
    include 'header.php';
  
      $sorgu=$db->prepare("SELECT * FROM kullanicilar WHERE kul_id=:id");
      $sorgu->execute(array(
        'id'=>$_GET['id']
      ));
     $kullanicicek=$sorgu->fetch(PDO::FETCH_ASSOC);
    ?>

          <!-- ***************************************************************** -->
                <div class="container-fluid">
                  <div class="card">
                    <div class="card-header">
                      Profil: <?php echo $_SESSION['kul_isim']; ?> <sub class="text-danger"><b>(Bilgilerin ekranda yenilenmiş bir şekilde gözükmesi için güvenlik sebebiyle giriş çıkış yapmanız gerekmektedir.)</b></sub>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="../islemler/ajax.php" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-md-6">
                            <label class="control-label" for="kul_isim">Kişi Adı:</label>
                            <input type="text" name="kul_isim" class="form-control" value="<?php echo $kullanicicek['kul_isim']  ?>" id="kul_isim">
                          </div>
                          <div class="col-md-6">
                            <label class="control-label" for="kul_mail">Kişi Maili:</label>
                            <input type="text" name="kul_mail" class="form-control" value="<?php echo $kullanicicek['kul_mail']  ?>" id="kul_mail">
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-md-6">
                            <label class="control-label" for="kul_sifre">Kişi Şifre: <sub>(Şifreyi boş gönderirseniz şifreniz değişmez!)</sub></label>
                            <input type="text" name="kul_sifre" class="form-control" id="kul_sifre">
                          </div>
                          <div class="col-md-6">
                            <label for="kisiresim" class="control-label">Kişi Profil Resmi:</label> <br>
                           <label for="kisiresim"> <img src="kisiler/<?php echo $kullanicicek['kul_resim'] ?>" class="d-flex" style="width:150px;height: 150px;"></label>
                            <input type="file" name="kul_resim" class="form-control" id="kisiresim">
                          </div>
                        </div>
                        <div class="text-right mt-5">
                            <button class="btn btn-primary" name="adminguncelle">Güncelle</button>
                        </div>
                      </form>
                    </div>
                    <div class="card-footer">
                      <p class="text-danger">Paneli kullanırken dikkat ediniz!</p>
                    </div>
                    <?php if (@$_GET['durum']=="tamam"): ?>
                        <div class="alert alert-success">
                            <b>İşlem Başarılı</b>
                        </div>
                    <?php endif ?>
                    <?php if (@$_GET['durum']=="hayir"): ?>
                        <div class="alert alert-danger">
                            <b>İşlem Başarısız!</b>
                        </div>
                    <?php endif ?>
                  </div>
               </div>
           
         <!-- ***************************************************************** -->
        
           <?php include 'footer.php'; ?>