    <?php include 'header.php'; ?>
    <?php
        $idarttir=1;
        $sorgu=$db->prepare("SELECT * FROM kullanicilar");
        $sorgu->execute();
     ?>
          <!-- ***************************************************************** -->
                <div class="container-fluid">
                  <div class="card">
                    <div class="card-header">
                      ADMİN PANELİ
                    </div>
                    <div class="card-body">
                     
                      <?php 
                      if (@$_GET['durum']=="silindi") {
                        echo "<div class='alert alert-danger'>Veri silinmiştir!<b></b></div>";
                      }

                     ?>
                     <table class="table table-hover table-bordered">
                       <tr>
                         <th>ID</th>
                         <th>İsim</th>
                         <th>Mail</th>
                         <th>Telefon</th>
                         <th>Yetki</th>
                         <th>Adres</th>
                         <th></th>
                       </tr>
                       <?php while($kullcek=$sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                              <td><?php echo $idarttir; ?></td>
                              <td><?php echo $kullcek['kul_isim'] ?></td>
                              <td><?php echo $kullcek['kul_mail'] ?></td>
                              <td><?php echo $kullcek['kul_tel'] ?></td>
                              <td>
                                <?php if($kullcek['kul_yetki']==1) { ?>
                                    Yetkili
                              <?php } else { ?>
                                    Kullanıcı
                              <?php } ?>
                              </td>
                              <td><?php echo $kullcek['kul_adres'] ?></td>
                            
                            
                              <td>
                                <form action="kullaniciduzenle.php" method="POST">
                                  <input type="hidden" name="kul_id" value="<?php echo $kullcek['kul_id'] ?>">
                                  <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                </form>
                                 <form action="../islemler/ajax.php" method="POST" style="margin-top:15px;">
                                  <input type="hidden" name="kul_id" value="<?php echo $kullcek['kul_id'] ?>">
                                  <button class="btn btn-danger" name="kullsil"><i class="fa fa-trash"></i></button>
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