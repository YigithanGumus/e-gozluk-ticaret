    <?php 
    include 'header.php'; 
    $sorgu=$db->prepare("SELECT * FROM iletisim");
    $sorgu->execute();
    ?>
        
          <!-- ***************************************************************** -->
                <div class="container-fluid">
                  <div class="card">
                    <div class="card-header">
                      iletisim
                    </div>
                    <div class="card-body">
                      <p class="text-right">
                      <!-- <a href="iletisimekle.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a> -->
                    </p>
                        <?php if (@$_GET['durum']=="silindi") {?>
                          <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong>Seçtiğiniz mesaj iletisi silinmiştir!</strong>
                        </div>
                        
                       <?php   } ?>
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Başlık</th>
                              <th>Mesaj</th>
                              <th>Mail</th>
                              <th>Telefon</th>
                              <th>İsim</th>
                              <th>Tarih</th>
                              <th>İşlemler</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php while ($iletisimcek=$sorgu->fetch(PDO::FETCH_ASSOC)) {   ?>
                            <tr>
                              <td><?php echo $iletisimcek['iletisim_id'] ?></td>
                              <td><?php echo $iletisimcek['iletisim_baslik'] ?></td>
                              <td><?php echo substr($iletisimcek['iletisim_aciklama'],0,50)."..." ?></td>
                              <td><?php echo $iletisimcek['iletisim_kisi_mail'] ?></td>
                              <td><?php echo $iletisimcek['iletisim_telefon'] ?></td>
                              <td><?php echo $iletisimcek['iletisim_isim'] ?></td>
                              <td><?php echo str_replace("-",".",$iletisimcek['iletisim_zaman']) ?></td>
                              <td>
                                <div class="row">
                                  <div class="col-md-4">

                                    <form action="iletisimgor.php" method="POST">  
                                      <input type="hidden" name="iletisim_id" value="<?php echo $iletisimcek['iletisim_id'] ?>">
                                      <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                    </form>
                                  </div>
                                  <div class="col-md-4">
                                    <form action="../islemler/ajax.php" method="POST">  
                                      <input type="hidden" name="iletisim_id" value="<?php echo $iletisimcek['iletisim_id'] ?>">
                                      <button class="btn btn-danger" name="iletisimsil"><i class="fa fa-trash"></i></button>
                                    </form>
                                  </div>
                                  <div class="col-md-4">
                                    
                                    
                                  </div>
                                  
                                </div>
                              </td>
                            </tr>
                          <?php } ?>
                          </tbody>
                        </table>
                      
                    </div>
                    <div class="card-footer">
                      <p class="text-danger">Paneli kullanırken dikkat ediniz!</p>
                    </div>
                  </div>
               </div>
           
         <!-- ***************************************************************** -->
        
           <?php include 'footer.php'; ?>