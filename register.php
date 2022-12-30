
<?php

include "header.php";
if(isset($_SESSION['login']) && $_SESSION['login'] != "") {
    header("Location:index.php");
    exit();
}

//include_once 'includes/functons.php';//eger dosya yoksa islem devam eder ve uyari veiri dosya varsa bi daha yuklemez/cagirmaz
global $connect;


//form ve submit input'tan gelen bilgiler adi  register varsa bu islemleri yap
if(isset($_POST['register'])){
    $error=false;
    $mesg='';
 $username=clean($_POST['username']);//inputtan gelen bilgileri (name) ozelligi ile aliyoz
    $email= clean($_POST['email'])  ;
    $password=$_POST['password'];
    $password2=$_POST['password2'];


//username check fonksyuna atariz  kontrol etmek icin eger data'da  yazilan username daha once varsa bana error goster/true
if(checkUser($username)) {

    $error=$username ;
    $mesg .= " <li>UserName Already Used</li>";
}
//degisken yaninda nokta koyduk yani 1'den fazla hata olunca bu degiskene ekleyebilirsin

    if(checkEmail($email)) {
        $error=$email;
        $mesg .=" <li>Email Already Registerd </li>";

}
    if(checkPassword($password)){
        $error=true;
        $mesg .=" <li>Password Already Used</li> ";
    }

    if(strlen($password) < 6 ) {
        $error=true;
        $mesg .=" <li>Password Length shorter than 6</li> ";

}

    if($password != $password2) {
        $error=true;
        $mesg .=" <li>Passwords does not match </li>";
    }


    if($error == false) { //error yoksa kullanici ekle
        $hashPassword=md5($password);//md5 şifreyi şifrelemek icin kullanilir
            $sql="INSERT INTO `users` ( `user_name`, `user_pass`, `mail`) VALUES ( '$username', '$hashPassword', '$email')";
        mysqli_query($connect,$sql);
        if(mysqli_affected_rows($connect)>0) {//bu fonks eger bi degisme olursa 1 sayi dondurur demeki dogru. degisme olmazsa -1 dondur demeki error/hata
            echo '<div class="alert alert-success navbar ">
       <strong> Well done!  Registration is complete</strong>
      
         </div>';

        }


    }
   if($error==true){
        echo '<div class="alert alert-danger navbar">
       <strong>  Error!  '.$mesg.' </strong>
     
         </div>';
    }
   }

?>



    <div class="col-md-4">

    </div>
    <div class="row ">
        <?php include "category.php"; ?>
        <div class="col-md-7 container-fluid " >
<div style="background-color: #e3f2fd;">



                <div >
                    <br/>
                    <h1> Register</h1>
                </div><br/><br/>
                <div class="container">
                    <form  method="post" >
                        <!--        userName-->
                        <div class="form-outline mb-3">
                            <input type="text" id="username" name="username" class="form-control form-control-lg"
                                   placeholder="Your Name" required />
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-3">
                            <input type="email" id="email" name="email" class="form-control form-control-lg"
                                   placeholder="Your Email" required/>

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="password" name="password" class="form-control form-control-lg"
                                   placeholder="Enter Password"required />
                        </div>

                        <!--  retype Password  -->
                        <div class="form-outline mb-3">
                            <input type="password" id="password2" name="password2" class="form-control form-control-lg"
                                   placeholder="Repeat Your Password " required/>
                        </div>
                        <br/>
                        <div class="d-grid gap-2 col-6 mx-auto ">
                            <input type="submit" class="btn  btn-primary btn-block" name="register" value="Register"/>
                        </div>
                    </form>
                </div>
    <br/>
</div>
                <div class="container-fluid h-custom">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-9 col-lg-6 col-xl-5">
                            <img  src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                                  class="container-fluid"  alt="Sample image">
                        </div>

                    </div>
                </div>

        </div>

    </div>



