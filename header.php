<?php
echo "####################################\n";
echo "#     Lunatic Header Checker V.2   #\n";
echo "#          LunaticTech.XyZ         #\n";
echo "#     ICWR-TECH ||  Ahmad Dwiyan   #\n";
echo "####################################\n";
echo "\nRun 'help' For Command list \n";  
while(true){
echo "Command => ";
$cmd = trim(fgets(STDIN));

if($cmd == "help"){

echo "\n|+List Command+|\nresponse = Checking Header Response Without Code And Verbose False \ncode = Only Check Header Response Code\nheader = Checking Header Response And SCRIPT \nInfo =  All Information Of Headers Request(Verbose ON) \nlunatic = Information Tools ! \nexit = Exit Tools\n\n";



} 
if($cmd == "response"){
echo "URL => ";
$url = trim(fgets(STDIN));

	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_HEADER,true);
	curl_setopt($ch,CURLOPT_VERBOSE,false);
	curl_setopt($ch,CURLOPT_NOBODY,true);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	$cek = curl_exec($ch);
	curl_close($ch);

if($cek) {
echo $cek;
} else {
echo "Check Your URL And Connection First !!";
}
}

if($cmd == "code"){

echo "Url => ";
$url = trim(fgets(STDIN));

	$ch = curl_init($url);
	curl_setopt($ch,CURLOPT_HEADER,true);
	curl_setopt($ch,CURLOPT_NOBODY,true);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	$code = curl_exec($ch);
	$kode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
	curl_close($ch);

echo "\nYour URL : $url \nResponse Code => $kode\n\n";


}
if($cmd == "headscript"){

echo "URL => ";
$url = trim(fgets(STDIN));

	$ch = curl_init($url);
	curl_setopt($ch,CURLOPT_VERBOSE,true);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	$code = curl_exec($ch);
	
	curl_close($ch);
	
	echo $code."\n\n";
	
}
if($cmd == "info"){

echo "URL => ";	
$url = trim(fgets(STDIN));
	
	$ch = curl_init($url);
	curl_setopt($ch,CURLOPT_HEADER,true);
	curl_setopt($ch,CURLOPT_NOBODY,true);
	curl_setopt($ch,CURLOPT_VERBOSE,true);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	$code = curl_exec($ch);
	
	curl_close($ch);
	
	echo $code."\n\n";
	
	
}
if($cmd == "lunatic"){
	
echo "| LUNATIC HEADER CHECKER V.2  By Lunatictech.XyZ  |\n";
echo "| Greetz Thanks To Afrizal F A ICWR-TECH.ID       |\n"; 
echo "| Check Our Website Or Github To Check For Update |\n";	
echo "|        https://github.com/DwiyanTech            |\n"; 

	
}
if($cmd == "exit"){
	
	break;
	
}

}



?>
