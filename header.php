<?php
if(!empty($argv[1])){

echo"###################################\n";
echo "#          Header Checker       #\n";
echo "#         By Lunatic-Tech       #\n";
echo "# icwr-tech.id | lunatictech.xyz #\n";
echo "##################################\n";


   $url = $argv[1];
   echo "Checkking Header...\n";
$cek = curl_init($url);
curl_setopt($cek,CURLOPT_HEADER,true);
curl_setopt($cek,CURLOPT_CONNECTTIMEOUT,10);
curl_setopt($cek,CURLOPT_NOBODY,true);
curl_setopt($cek,CURLOPT_RETURNTRANSFER,true);
$header = curl_exec($cek);

if(!$header){
echo"Check Your Connection OR URL FIRST !!!!\n HEADER INFORMATION : \n\n";
echo $header;

} else {
    echo "Connected !!!\n";
echo $header;
echo"\n=========== End Of Header ===========";
}

} else {
    echo"###################################\n";
    echo "#          Header Checker       #\n";
    echo "#         By Lunatic-Tech       #\n";
    echo "# icwr-tech.id | lunatictech.xyz #\n";
    echo "##################################\n";
    
    echo "php header.php <URL>";
}


?>