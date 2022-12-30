<?php
//Session variables hold information about one single user, and are available to all pages in one application.
//cookie  kullanicinin bilgiler bilgisayrinda saklanir sesion ise server/sunucu da saklanir
//session_start(); //Ignoring session_start() because a session is already active/calistirlmis
$DbHostName='localhost';
$DbUser='root';
$DbPass='';
$DbName='apkstore';

global $connect; //diger sitelerde kullanmak icin global olark tanimladik
$connect=mysqli_connect('localhost','root','','apkstore');

//erorr numarasi 0'dan buyuk ise demek hata var
if(mysqli_connect_errno() >0) { //bağlama olayı kontrol etmek için
    die('Cannot Connect to DataBase');
}

mysqli_query($connect,'SET NAMES UTF8');

?>

