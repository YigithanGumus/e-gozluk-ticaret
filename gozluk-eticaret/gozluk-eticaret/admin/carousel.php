    <?php 
    include 'header.php'; 
    $sorgu=$db->prepare("SELECT * FROM carousel");
    $sorgu->execute();
    ?>
        
          <!-- ***************************************************************** -->
                <div class="container-fluid">
                  <div class="card">
                    <div class="card-header">
                      carousel
                    </div>
                    <div class="card-body">
                      <p class="text-right">
                      <a href="carouselekle.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>
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
                              <th>Resim</th>
                              <th>Sıra</th>
                              <th>Aktiflik Durumu</th>
                              <th>İşlemler</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php while ($carouselcek=$sorgu->fetch(PDO::FETCH_ASSOC)) {   ?>
                            <tr>
                              <td><?php echo $carouselcek['carousel_id'] ?></td>
                              <td><?php echo $carouselcek['carousel_baslik'] ?></td>
                              <td><?php echo $carouselcek['carousel_mesaj'] ?></td>
                              <td><img src="../carousel_resim/<?php echo $carouselcek['carousel_resim'] ?>" style="width: 150px;height: 150px;"></td>
                              <td><?php echo $carouselcek['carousel_sira'] ?></td>
                              <td><?php echo $carouselcek['carousel_aktiflik'] ?></td>
                              <td>
                                <div class="row">
                                  <div class="col-md-4">
                                    <form action="carouselduzenle.php" method="POST">  
                                      <input type="hidden" name="carousel_id" value="<?php echo $carouselcek['carousel_id'] ?>">
                                      <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                    </form>
                                  </div>
                                  <div class="col-md-4">
                                    <form action="../islemler/ajax.php" method="POST">  
                                      <input type="hidden" name="carousel_id" value="<?php echo $carouselcek['carousel_id'] ?>">
                                      <input type="hidden" name="carousel_resim" value="<?php echo $carouselcek['carousel_resim'] ?>">
                                      <button class="btn btn-danger" name="carouselsil"><i class="fa fa-trash"></i></button>
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