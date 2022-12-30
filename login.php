<?php
//start Session header icinde ilk satirda yazdigimiz icin burda tekrar yamamiza gerek yok
include "header.php";
if(isset($_SESSION['login']) && $_SESSION['login'] != "") {
    header("Location:index.php");//eger kullanici adi sitede varsa ve bos degilse direk homepage'e git tekrar login/register basrsa bile
    exit();//bu islemleri bittirdikten sonra exit ile bitiriyoz
}

global $connect ;
//form ve submit input'tan gelen bilgiler adi/name  login varsa bu islemleri yap
if(isset($_POST['login'])) {

    $username = clean($_POST['username']);//inputtan gelen bilgileri (name) ozelligi ile aliyoz
    $password = md5($_POST['password']); //kayit yaparken numaralar/password md5 ile sifreledik o yuzden burda login yapmak icin kullanmamiz lazim
//eger input'tan gelen username ve password dogru ise Basarıyla giris yaptiniz
    $sql = "SELECT * FROM  `users` WHERE  `user_name` = '$username' AND `user_pass` = '$password' ";//bu islem gelen bilgileri data'da olup olmadigini kontrol eder
  $q=  mysqli_query($connect, $sql);

    if (mysqli_affected_rows($connect) == 1) {// sadece bi tane sonuc dondurmeli yoksa hata var
     $data=mysqli_fetch_assoc($q);
        $_SESSION['login'] =$data['user_name'];//kullanici adi server/sunucuda saklanip baska yerde kullanmak icin
        $_SESSION['userid']=$data['user_id'];
        header('Location:home.php');//dogru bi sekilde giris yaptiktan sonra homePage' acar/gotureck

    } else {
        echo '<div class="alert alert-danger navbar ">
  <strong> Error ! Login Failed Please try again</strong> 
</div>';
    }
}

    ?>


    <div class="row ">
        <?php include "category.php"; ?>
        <div class="col-md-4 container-fluid">

            <div class="col-md-15">
                <h1>Log_in </h1>
                <div class="container-fluid" style="background-color: #e3f2fd;">

        <br/><br/>
                    <form action="" method="post"  > <!--action ozelligi bos olnuca demeki bilgileri ayni sayfaya gonderck-->

                        <!--        userName-->
                        <div class="form-outline mb-3">
                            <input type="text" id="username" name="username" class="form-control form-control-lg"
                                   placeholder="Enter Your User Name" required />
                        </div>


                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="password" name="password" class="form-control form-control-lg"
                                   placeholder="Enter Your Password"required />
                        </div>


                        <br/>
                        <div class="d-grid gap-2 col-6 mx-auto ">
                            <input type="submit" class="btn  btn-primary btn-block" name="login" value="LogIn"/> <!--burda value demeki button icindeki kelime/adu-->
                        </div>
                        <br/>
                    </form>
                </div>
                <br/>
                <div class="container-fluid h-custom">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-15 col-lg-10 col-xl-10">
                            <img  src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                                  class="container-fluid"  alt="Sample image">
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>


<?php include 'footer.php'; ?>