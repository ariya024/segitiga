<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kalkulator Segitiga</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="http://3.bp.blogspot.com/-gxfenG66cu4/VN2gRtBmt9I/AAAAAAAABbU/pQTmdlAkMWU/s1600/pengertian%2Bsegitiga%2Brumus%2Bjenis.JPG" alt="IMG">
				</div>

	
				<form class="login100-form validate-form"action="index.php" method="post">
					
					<span class="login100-form-title">
						PERHITUNGAN SEGITIGA
					</span>

					<div class="wrap-input100 validate-input" data-validate = "anda belum memasukkan variabel alas">
						<input class="input100" type="text" name="alas" placeholder="alas">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-arrows-h" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "anda belum memasukkan variabel tinggi">
						<input class="input100" type="text" name="tinggi" placeholder="tinggi">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-arrows-v" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn"type="submit" name="submit" value ="hitung">
							hitung

						</button>


					</div>

					
					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							
						</a>
					</div>
				</form>


			<?php
	if (isset($_POST['submit'])){
	$alas = $_POST['alas'];
	$tinggi = $_POST['tinggi'];
	$luas_segitiga = 1/2 * $alas * $tinggi; // Menghitung luas segitiga
	echo "Luas segitiga : alas $alas, tinggi $tinggi <br>";
	echo "ADALAH = $luas_segitiga";
	}

	?>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>