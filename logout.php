<?php
session_start();
$_SESSION['login']="";//session bilgileri boşalttık
unset($_SESSION['login']);//ve sonra sesion' sildik/kaldirdik
session_destroy();//sonra oturumu yok et dedik bu sekilde butun bilgileri sildik ve tekrar kayit/giris yapmak icin hazir olack
header("Location:login.php");