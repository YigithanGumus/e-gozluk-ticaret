    <?php 
    include 'header.php';
    $id=$_POST['urun_id'];
    $sorgu=$db->prepare("SELECT * FROM urunler WHERE urun_id=$id");
    $sorgu->execute();
    $uruncek=$sorgu->fetch(PDO::FETCH_ASSOC);

    ?>
        
          <!-- ***************************************************************** -->
                <div class="container-fluid">
                  <div class="card">
                    <div class="card-header">
                      ADMİN PANELİ
                    </div>
                    <div class="card-body">
                      <p>
                        Yan taraftan admin paneli kontrol edebilirsiniz.
                      </p>
                      <?php 
                      if (@$_GET['durum']=="tamam") {
                        echo "<div class='alert alert-success'><b>Ürün güncellenmesi başarılı!</b></div>";
                      }
                     ?>
                     <form action="../islemler/ajax.php" method="POST" enctype="multipart/form-data">
                       <div class="row">
                         <div class="col-md-6">
                          <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>">
                           <label>Ürün İsmi:</label>
                           <input type="text" name="urun_isim" class="form-control" value="<?php echo $uruncek['urun_isim']  ?>">
                         </div>
                         <div class="col-md-6">
                           <label>Ürün Fiyatı:</label>
                           <input type="text" name="urun_fiyat" class="form-control" value="<?php echo $uruncek['urun_fiyat']  ?>" style="color:red;">
                         </div>
                       </div>
                       <div class="row" style="margin-top:30px;">
                          <div class="col-md-4">
                            <label>Ürün Özellikleri</label>
                            <textarea class="form-control" name="urun_ozellik"><?php echo $uruncek['urun_ozellik'] ?></textarea>
                          </div>
                          <div class="col-md-4">
                            <label>Ürün Resim:</label>
                            <input type="file" name="urun_resim1" class="form-control-file">
                            <img src="../urunler_resim/<?php echo $uruncek['urun_resim1'] ?>" style="width: 250px;">
                          </div>
                          <div class="col-md-4">
                            <label>Ürün'ü Öne Çıkar</label>
                            <select name="urun_onecikar" class="form-control">
                              <?php if($odacek['urun_onecikar']==1) { ?>
                                <option value="1" selected="">Öne Çıkar</option>
                                <option value="0">Öne Çıkarma</option>
                              <?php } else { ?>
                                <option value="1">Öne Çıkar</option>
                                <option value="0" selected="">Öne Çıkarma</option>
                              <?php } ?>
                            </select>
                          </div>
                       </div>
                       <button type="submit" class="btn btn-primary btn-block" name="urunguncelle" style="margin-top:20px;">Ürün Güncelle</button>
                     </form>
                    </div>
                    <div class="card-footer">
                      <p class="text-danger">Paneli kullanırken dikkat ediniz!</p>
                    </div>
                  </div>
               </div>
           
         <!-- ***************************************************************** -->
        
           <?php include 'footer.php'; ?>