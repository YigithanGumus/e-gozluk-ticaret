<?php
 include 'header.php'; 
 giriskontrol();
 ?>
	<div class="container">
		<h1 class="text-center mt-2">SCOOT GÖZLÜK ÜYE GİRİŞİ</h1>
			<form action="islemler/ajax.php" method="POST">
				<div class="row justify-content-center" style="margin-top: 10px;">
					<div class="col-md-5">
						<input type="email" name="kul_mail" class="form-control" placeholder="Kullanıcı Mailiniz...">
					</div>
				
					
				</div>
				<div class="row justify-content-center" style="margin-top: 10px;">
					<div class="col-md-5">
						<input type="password" name="kul_sifre" class="form-control" placeholder="Kullanıcı Şifreniz...">
					</div>
					
				</div>
				<div class="row justify-content-center" style="margin-top: 10px;margin-bottom: 10px;">
					<div class="col-md-5">
						<button class="btn btn-primary" name="kullanicigiris">Giriş</button>
					</div>
				</div>
			</form>
	</div>
<?php include 'footer.php'; ?>