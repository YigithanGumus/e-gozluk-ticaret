    <?php include 'header.php'; ?>

          <!-- ***************************************************************** -->
                <div class="container-fluid">
                  <form action="../islemler/ajax.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                  <div class="row">
                      <div class="card col-md-12">
                        <div class="card-header">
                          <p class="text-primary">Anasayfa/Genel Ayarlar</p> 
                        </div>
                        <div class="card-body">
                          <div class="form-group col-md-6">
                            <label>Logo:</label>
                            <input type="file" name="site_logo" class="form-control" value="<?php echo $ayarcek['site_logo'] ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label>Site Başlığı:</label>
                            <input type="text" name="site_baslik" class="form-control" value="<?php echo $ayarcek['site_baslik'] ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label>Site Açıklaması:</label>
                            <input type="text" name="site_aciklama" class="form-control" value="<?php echo $ayarcek['site_aciklama'] ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label>Site Link:</label>
                            <input type="text" name="site_link" class="form-control" value="<?php echo $ayarcek['site_link'] ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label>Site Sahip Maili:</label>
                            <input type="text" name="site_sahip_mail" class="form-control" value="<?php echo $ayarcek['site_sahip_mail'] ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label>Site Mail Host:</label>
                            <input type="text" name="site_mail_host" class="form-control" value="<?php echo $ayarcek['site_mail_host'] ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label>Site Mail Mail:</label>
                            <input type="text" name="site_mail_mail" class="form-control" value="<?php echo $ayarcek['site_mail_mail'] ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label>Site Mail Port:</label>
                            <input type="text" name="site_mail_port" class="form-control" value="<?php echo $ayarcek['site_mail_port'] ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label>Site Mail Şifre:</label>
                            <input type="text" name="site_mail_sifre" class="form-control" value="<?php echo $ayarcek['site_mail_sifre'] ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label>Site Konum:</label>
                            <input type="text" name="site_konum" class="form-control" value="<?php echo $ayarcek['site_konum'] ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label>Site Telefon:</label>
                            <input type="text" name="site_telefon" class="form-control" value="<?php echo $ayarcek['site_telefon'] ?>">
                          </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" name="ayarkaydet">Güncelle</button>
                        </div>
                         <?php 
                      if (@$_GET['durum']=="tamam") {
                        echo "<div class='alert alert-success'>
                              <strong>Güncellendi!</strong> 
                            </div>";
                      }
                      else if (@$_GET['durum']=="hayir") {
                        echo "<div class='alert alert-danger'>
                              <strong>Güncellenemedi!!</strong>
                            </div>";
                      }
                     ?>
                      </div>
                    </div>
                </form>
               </div>
           
         <!-- ***************************************************************** -->
        
           <?php include 'footer.php'; ?>