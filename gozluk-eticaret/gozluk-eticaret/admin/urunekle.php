    <?php 
    include 'header.php';
  

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
                        
                           <label>Ürün İsmi:</label>
                           <input type="text" name="urun_isim" class="form-control">
                         </div>
                         <div class="col-md-6">
                           <label>Ürün Fiyatı:</label>
                           <input type="text" name="urun_fiyat" class="form-control" style="color:red;">
                         </div>
                       </div>
                       <div class="row" style="margin-top:30px;">
                          <div class="col-md-4">
                            <label>Ürün Özellikleri</label>
                            <textarea class="form-control" name="urun_ozellik"></textarea>
                          </div>
                          <div class="col-md-4">
                            <label>Ürün Resim:</label>
                            <input type="file" name="urun_resim1" class="form-control-file">
                       
                          </div>
                          <div class="col-md-4">
                            <label>Ürün'ü Öne Çıkar</label>
                            <select name="urun_onecikar" class="form-control">
                        
                                <option value="1" selected="">Öne Çıkar</option>
                                <option value="0">Öne Çıkarma</option>
                             
                            </select>
                          </div>
                       </div>
                       <button type="submit" class="btn btn-primary btn-block" name="urunekle" style="margin-top:20px;">Ürün Ekle</button>
                     </form>
                    </div>
                    <div class="card-footer">
                      <p class="text-danger">Paneli kullanırken dikkat ediniz!</p>
                    </div>
                  </div>
               </div>
           
         <!-- ***************************************************************** -->
        
           <?php include 'footer.php'; ?>