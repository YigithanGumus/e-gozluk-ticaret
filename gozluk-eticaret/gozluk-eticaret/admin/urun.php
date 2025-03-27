    <?php include 'header.php';
        $sorgu=$db->prepare("SELECT * FROM urunler");
         $sorgu->execute();
          ?>
          <!-- ***************************************************************** -->
                <div class="container-fluid">
                  <div class="card">
                    <div class="card-header">
                      ÜRÜNLER
                    </div>
                    <div class="card-body">
                      <?php 
                      if (@$_GET['durum']=="tamam") {
                        echo "<div class='alert alert-success alert-dismissible'><b>Giriş Başarılı!</b></div>";
                      }
                      if (@$_GET['durum']=="silindi") {
                        echo "<div class='alert alert-danger alert-dismissible'><b>Veri silinmesi başarılı!</b></div>";
                      }
                     ?>
                      <p class="text-right">
                      <a href="urunekle.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>
                    </p>
                     <table class="table table-hover table-bordered">
                      <tr>
                        <th>Ürün ID</th>
                        <th>Ürün İsmi</th>
                        <th>Ürün Fiyat</th>
                        <th>Ürün Özellikleri</th>
                        <th>Ürün Resmi</th>
                        <th>Ürün'ü Öne Çıkar</th>
                        <th></th>
                      </tr>
                      <?php
                        while ($uruncek=$sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                          <tr>
                            <td><?php echo $uruncek['urun_id'] ?></td>
                            <td><?php echo $uruncek['urun_isim'] ?></td>
                            <td style="color:red;"><?php echo $uruncek['urun_fiyat'] ?></td>
                            <td><?php echo $uruncek['urun_ozellik'] ?></td>
                            <td><img src="../urunler_resim/<?php echo $uruncek['urun_resim1'] ?>" style="width: 300px;height: 150px;"></td>
                            <td>
                              <?php if (@$uruncek['urun_onecikar']==1) {?>
                                  <span class="fa fa-check" style="color:green;"></span>
                              <?php } else { ?>
                                  <span class="fa fa-times" style="color:red;"></span>
                              <?php } ?>
                            </td>
                            <td>
                              <form action="urunduzenle.php" method="POST">
                                    <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>">
                                    <button class="btn btn-success"><span class="fa fa-edit"></span></button>
                              </form>
                              <form action="../islemler/ajax.php" method="POST" style="margin-top:10px;">
                                    <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>">
                                    <button class="btn btn-danger" name="urunsil"><span class="fa fa-trash"></span></button>
                              </form>
                            </td>
                          </tr>
                     <?php } ?>
                     </table>
                    </div>
                    <div class="card-footer">
                      <p class="text-danger">Paneli kullanırken dikkat ediniz!</p>
                    </div>
                  </div>
               </div>
           
         <!-- ***************************************************************** -->
        
           <?php include 'footer.php'; ?>