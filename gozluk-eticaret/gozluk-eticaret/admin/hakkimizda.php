    <?php 
    include 'header.php'; 
    $sorgu=$db->prepare("SELECT * FROM hakkimizda");
    $sorgu->execute();
    ?>
        
          <!-- ***************************************************************** -->
                <div class="container-fluid">
                  <div class="card">
                    <div class="card-header">
                      HAKKIMIZDA
                    </div>
                    <div class="card-body">
                      <p class="text-right">
                      <a href="hakkimizdaekle.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>
                    </p>
                        <?php if (@$_GET['durum']=="silindi") {?>
                          <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong>Bir içeriğiniz güncellenmiştir!</strong>
                        </div>
                        
                       <?php   } ?>
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Başlık</th>
                              <th>İçerik</th>
                              <th>Sıra</th>
                              <th>Tarih</th>
                              <th>İşlemler</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php while ($hakkimizdacek=$sorgu->fetch(PDO::FETCH_ASSOC)) {   ?>
                            <tr>
                              <td><?php echo $hakkimizdacek['hakkimizda_id'] ?></td>
                              <td><?php echo $hakkimizdacek['hakkimizda_baslik'] ?></td>
                              <td><?php echo substr($hakkimizdacek['hakkimizda_icerik'],0,50)."..." ?></td>
                              <td><?php echo $hakkimizdacek['hakkimizda_sira'] ?></td>
                              <td><?php echo str_replace("-",".",$hakkimizdacek['hakkimizda_tarih']) ?></td>
                              <td>
                                <div class="row">
                                  <div class="col-md-4">
                                    <form action="hakkimizdaduzenle.php" method="POST">  
                                      <input type="hidden" name="hakkimizda_id" value="<?php echo $hakkimizdacek['hakkimizda_id'] ?>">
                                      <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                    </form>
                                  </div>
                                  <div class="col-md-4">
                                    <form action="../islemler/ajax.php" method="POST">  
                                      <input type="hidden" name="hakkimizda_id" value="<?php echo $hakkimizdacek['hakkimizda_id'] ?>">
                                      <button class="btn btn-danger" name="hakkimizdasil"><i class="fa fa-trash"></i></button>
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