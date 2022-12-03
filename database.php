<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=sayfalama;charset=UTF8","root","");

}catch(PDOException $Hata){
    echo "Bağlantı Hatası";

}
if(isset($_REQUEST["Sayfalama"])):
    $GelenSayfalama = $_REQUEST["Sayfalama"];
else:
    $GelenSayfalama = 1;
endif;

function Filtre($Deger){
	$Bir 	= trim($Deger);
	$Iki 	= strip_tags($Bir);
	$Uc 	= htmlspecialchars($Iki, ENT_QUOTES);
	$Sonuc	= $Uc;
	return $Sonuc;
}

?>