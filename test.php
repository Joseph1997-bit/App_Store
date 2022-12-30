<?php

$degisken1="Teknoloji ";
$degisken2 = "2015";
$degisken3 = 1200;
$degisken4="Fakültesi";
$degisken5=$degisken1. " ". $degisken4. " ".$degisken2;
echo $degisken5 ,"<br><br>";
echo 'Bence "bu" çalışmaz <br><br>';
$_50inciver="df";
$deger4="dsf";
$VERI="sdf";
$mAkRo="sdf";
$adisoydi="sdf"; //turkce karakterı olmamalı

$a=5;
echo "tavanda $a kedi var. " ;
echo 'tavanda $a kedi var<br><br> ';

$tags=array("h1","span","p","div","table","b","i","u",8=>"wer");
echo $tags[2],"<br><br>";
//Aralara boşluk bırakmayı bir çok yöntemle yapabilirsiniz.

// 1. Yöntem: kelimeden sonra boşluk bırakmak
echo "PHP "."PYTHON "."JAVA ","<br>";
echo "<h1 align=\"center\">Merhaba Dünya!</h1><br><br>";
define("sira",85);
$aktif=sira+1;
$a=5;
$b=9;
$a.=$b;
echo $a,"<br><br>";
echo "SONUÇ=",9+6,"<br>";
if ($a>0) $b=5; else $b=0;
$x=4; $y=3;

$ages=array("ibo"=>26,"1"=>"23");//dizi indexi string olabilr bu sekilde
foreach ($ages as $index=>$deger) {
    echo "Index : ". "$index". ", value : ". $deger;
    echo "<br/>";
}



