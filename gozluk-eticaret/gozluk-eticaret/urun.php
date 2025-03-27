<?php 
	include 'header.php';
	$id=$_GET['id'];
	$sorgu=$db->prepare("SELECT * FROM urunler WHERE urun_id=$id");
	$sorgu->execute();
	$uruncek=$sorgu->fetch(PDO::FETCH_ASSOC);
 	
 	$sorgu2=$db->prepare("SELECT * FROM urunler");
	$sorgu2->execute();
	$uruncek2=$sorgu2->fetch(PDO::FETCH_ASSOC);
	if ($uruncek2['urun_id']!=$id) {
		header("Location:index.php");
	}
 ?>


	<div class="container">
		<div class="row" style="margin-top:30px;margin-bottom: 30px;">
			<div class="col-md-6">
				<img src="urunler_resim/<?php echo $uruncek['urun_resim1'] ?>" style="width: 500px;border:2px solid black;">
			</div>
			<div class="col-md-6">
				<h2><?php echo $uruncek['urun_isim'] ?></h2>
				<h4>Fiyat: <span style="color:red;"><?php echo $uruncek['urun_fiyat'] ?> TL </span></h4>
				<h3>Ürün Özellikleri:</h3>
				<?php 
					echo $uruncek['urun_ozellik'];
				 ?>
				  <p><a href="urun.php?id=<?php echo $sepetcek['urun_id']; ?>" class="btn btn-info btn-block">Ürüne git</a></p>
			</div>
		</div>
	</div>

<?php 
	include 'footer.php';
 ?>