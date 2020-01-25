<?php 

error_reporting(0);

include "kayit.php";

$wp["1"] = $ad."123";
$wp["2"] = $eskisifre."123";
$wp["3"] = $eskisifre."1905";
$wp["4"] = $eskisifre."1907";
$wp["5"] = $eskisifre."1903";
$wp["6"] = $eskisifre."1938";
$wp["7"] = $eskisifre."1919";
$wp["8"] = $eskisifre."1881";
$wp["9"] = $eskisifre."2018";
$wp["10"] = $eskisifre."2019";
$wp["11"] = $eskisifre.$lakap;
$wp["12"] = $eskisifre.$anne;
$wp["13"] = $eskisifre.$baba;
$wp["14"] = $eskisifre.$kardes;
$wp["15"] = $eskisifre.$sevgili;
$wp["16"] = $eskisifre.$sevgilisoyad;
$wp["17"] = $eskisifre.$dogumtarihi;
$wp["18"] = $eskisifre.$dogumyili;
$wp["19"] = $eskisifre.$cikmayili;
$wp["20"] = $eskisifre.$cikmatarihi;
$wp["21"] = $eskisifre.$sehir;
$wp["22"] = $eskisifre.$takim;
$wp["23"] = $eskisifre.$takimtarihi;
$wp["24"] = $eskisifre.$takimkisa;
$wp["25"] = $eskisifre.$plaka;

/////////////////////////////////////////

$wp["26"] = $sevgili."123";
$wp["27"] = $sevgili."123";
$wp["28"] = $sevgili."1905";
$wp["29"] = $sevgili."1907";
$wp["30"] = $sevgili."1903";
$wp["31"] = $sevgili."1938";
$wp["32"] = $sevgili."1919";
$wp["33"] = $sevgili."1881";
$wp["34"] = $sevgili."2018";
$wp["35"] = $sevgili."2019";
$wp["36"] = $sevgili.$lakap;
$wp["37"] = $sevgili.$anne;
$wp["38"] = $sevgili.$baba;
$wp["39"] = $sevgili.$kardes;
$wp["40"] = $sevgili.$plaka;
$wp["41"] = $sevgili.$sevgili;
$wp["42"] = $sevgili.$sevgilisoyad;
$wp["43"] = $sevgili.$dogumtarihi;
$wp["44"] = $sevgili.$dogumyili;
$wp["45"] = $sevgili.$cikmayili;
$wp["46"] = $sevgili.$cikmatarihi;
$wp["47"] = $sevgili.$sehir;
$wp["48"] = $sevgili.$takim;
$wp["49"] = $sevgili.$takimtarihi;
$wp["50"] = $sevgili.$takimkisa;


//////////////////////////////////////




$wp["51"] = $ad."123";
$wp["52"] = $ad."123";
$wp["53"] = $ad."1905";
$wp["54"] = $ad."1907";
$wp["55"] = $ad."1903";
$wp["56"] = $ad."1938";
$wp["57"] = $ad."1919";
$wp["58"] = $ad."1881";
$wp["59"] = $ad."2018";
$wp["60"] = $ad."2019";
$wp["61"] = $ad.$lakap;
$wp["62"] = $ad.$anne;
$wp["63"] = $ad.$baba;
$wp["64"] = $ad.$kardes;
$wp["65"] = $ad.$sevgili;
$wp["66"] = $ad.$sevgilisoyad;
$wp["67"] = $ad.$dogumtarihi;
$wp["68"] = $ad.$dogumyili;
$wp["69"] = $ad.$cikmayili;
$wp["70"] = $ad.$cikmatarihi;
$wp["71"] = $ad.$sehir;
$wp["72"] = $ad.$takim;
$wp["73"] = $ad.$takimtarihi;
$wp["74"] = $ad.$takimkisa;
$wp["75"] = $ad.$plaka;



/////////////////////////////////////



$wp["76"] = $soyadad."123";
$wp["77"] = $soyadad."123";
$wp["78"] = $soyadad."1905";
$wp["79"] = $soyadad."1907";
$wp["80"] = $soyadad."1903";
$wp["81"] = $soyadad."1938";
$wp["82"] = $soyadad."1919";
$wp["83"] = $soyadad."1881";
$wp["84"] = $soyadad."2018";
$wp["85"] = $soyadad."2019";
$wp["86"] = $soyadad.$lakap;
$wp["87"] = $soyadad.$anne;
$wp["88"] = $soyadad.$baba;
$wp["89"] = $soyadad.$kardes;
$wp["90"] = $soyadad.$sevgili;
$wp["91"] = $soyadad.$sevgilisoyad;
$wp["92"] = $soyadad.$dogumtarihi;
$wp["93"] = $soyadad.$dogumyili;
$wp["94"] = $soyadad.$cikmayili;
$wp["95"] = $soyadad.$cikmatarihi;
$wp["96"] = $soyadad.$sehir;
$wp["97"] = $soyadad.$takim;
$wp["98"] = $soyadad.$takimtarihi;
$wp["99"] = $soyadad.$takimkisa;
$wp["100"] = $soyadad.$plaka;

/////////////////////////////////////


$wp["101"] = $tel."123";
$wp["102"] = $tel."123";
$wp["103"] = $tel."1905";
$wp["104"] = $tel."1907";
$wp["105"] = $tel."1903";
$wp["106"] = $tel."1938";
$wp["107"] = $tel."1919";
$wp["108"] = $tel."1881";
$wp["109"] = $tel."2018";
$wp["110"] = $tel."2019";
$wp["111"] = $tel.$lakap;
$wp["112"] = $tel.$anne;
$wp["113"] = $tel.$baba;
$wp["114"] = $tel.$kardes;
$wp["115"] = $tel.$sevgili;
$wp["116"] = $tel.$sevgilisoyad;
$wp["117"] = $tel.$dogumtarihi;
$wp["118"] = $tel.$dogumyili;
$wp["119"] = $tel.$cikmayili;
$wp["120"] = $tel.$cikmatarihi;
$wp["121"] = $tel.$sehir;
$wp["122"] = $tel.$takim;
$wp["123"] = $tel.$takimtarihi;
$wp["124"] = $tel.$takimkisa;
$wp["125"] = $tel.$plaka;

/////////////////////////////////////










for ($i=0; $i <= 125 ; $i++) { 

$ac = fopen("../wordlist.txt","a+");


$userlar = ($wp[$i]."\n");



fwrite($ac,$userlar);
}
fclose($ac);








 ?>