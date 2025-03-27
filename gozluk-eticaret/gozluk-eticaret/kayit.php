<?php
 include 'header.php'; 
 giriskontrol();
 ?>
    <div class="container">
        <h2 style="font-size: 24px;text-align: center;">SCOOT GÖZLÜK ÜYE KAYIT</h2>
        <form action="islemler/ajax.php" method="POST" style="margin-bottom: 30px;">
         <div class="form-group">
            <label for="kulisim">Kullanıcı İsminiz:</label>
            <input type="text" class="form-control" name="kul_isim" placeholder="Kullanıcı isminizi giriniz..." id="kulisim" required="">
          </div>
          <div class="form-group">
            <label for="email">E-Posta Adresi:</label>
            <input type="email" class="form-control" name="kul_mail" placeholder="E-Postanızı giriniz..." id="email" required="">
          </div>
           <div class="form-group">
            <label for="telefon">Telefon numarası:</label>
            <input type="text" class="form-control" name="kul_tel" placeholder="Telefon numaranızı giriniz..." id="telefon" required="">
          </div>
          <div class="form-group">
            <label for="adres">Adres: <sub>(Maksimum 300 karakter giriniz.)</sub></label>
            <textarea class="form-control" name="kul_adres" placeholder="Adresinizi giriniz..." id="adres" maxlength="300" required=""></textarea>
          </div>
          <div class="form-group">
            <label for="pwd">Şifre:</label>
            <input type="password" class="form-control" name="kul_sifre" placeholder="Şifrenizi giriniz..." id="pwd" required="">
          </div>
          <button type="submit" class="btn btn-primary" name="uyekayit">Kayıt ol</button>
        </form>
    </div>      

 <?php include 'footer.php'; ?>