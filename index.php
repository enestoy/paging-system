<?php
require 'database.php';
$SayfalamaIcinSolVeSagButonSayisi = 2;
$SayfaBasinaGosterilecekKayitSayisi = 5;
$ToplamKayitSayisiSorgusu = $db->prepare("SELECT * FROM urunler");
$ToplamKayitSayisiSorgusu->execute();
$ToplamKayitSayisi  = $ToplamKayitSayisiSorgusu ->rowCount();
$SayfalamayaBaslanacakKayitSayisi = ($GelenSayfalama*$SayfaBasinaGosterilecekKayitSayisi)-$SayfaBasinaGosterilecekKayitSayisi;
$BulunanSayfaSayisi = ceil($ToplamKayitSayisi/$SayfaBasinaGosterilecekKayitSayisi);


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sayfalama Mantığı</title>
</head>

<body>
<div class="container">
<table class="table mt-5 table-success">
<?php
    $UrunSorgusu = $db->prepare("SELECT * FROM urunler ORDER BY id ASC LIMIT $SayfalamayaBaslanacakKayitSayisi, $SayfaBasinaGosterilecekKayitSayisi");
    $UrunSorgusu->execute();
    $UrunSorgusuKayitSayisi = $UrunSorgusu->rowCount();
    $UrunSorgusuKayitlari = $UrunSorgusu->fetchAll(PDO::FETCH_ASSOC);

    foreach($UrunSorgusuKayitlari as $Kayitlar){
        echo "<tr>";
        echo "<td>". $Kayitlar["id"]."</td>";
        echo "<td>". $Kayitlar["urun_adi"]."</td>";
        echo "<td>". $Kayitlar["urun_fiyat"]." ".$Kayitlar["parabirimi"]."</td>";
        echo "</tr>";
    }
    ?>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center ">
    <?php 
    if($GelenSayfalama>1){
        echo "<li class='page-item'><a class='page-link' href='index.php?Sayfalama=1'><b><<</b></a></li>";  
        $BirGeriAl = $GelenSayfalama-1;
        echo "<li class='page-item'><a class='page-link' href='index.php?Sayfalama=".$BirGeriAl."'><b><</b></a></li>";  
    }
    for($SayfaIndex= $GelenSayfalama-$SayfalamaIcinSolVeSagButonSayisi; $SayfaIndex<=$GelenSayfalama+$SayfalamaIcinSolVeSagButonSayisi; $SayfaIndex++){
        if(($SayfaIndex>0)and ($SayfaIndex<=$BulunanSayfaSayisi)){
            if($GelenSayfalama == $SayfaIndex){
                echo "<li class='page-item active'><div class='page-link'>".$SayfaIndex."</div></li>";
            }else{
                echo "<li class='page-item'><a class='page-link' href='index.php?Sayfalama=".$SayfaIndex."'>".$SayfaIndex."</a></li>";
            }            
        }
    }
    

    if($GelenSayfalama !=$BulunanSayfaSayisi){
        $BirIleriAl = $GelenSayfalama+1;
        echo "<li class='page-item'><a class='page-link' href='index.php?Sayfalama=".$BirIleriAl."'><b>></b></a></li>";
        echo "<li class='page-item'><a class='page-link' href='index.php?Sayfalama=".$BulunanSayfaSayisi."'><b>>></b></a></li>";
    }
    ?>
    
  </ul>
</nav>


</div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<?php 
$db = null;
?>