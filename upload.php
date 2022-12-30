<?php
include "header.php";
if(!isset( $_SESSION['login']) && $_SESSION['login'] == "") {//login islemi notSet/yapilmadiysa ve boşsa upload tiklayinca login sayfasina git
    header("Location:login.php");
    exit();
}

//button submit icindeki name adi upload oldugu icin post icinde upload yazdik buttoni bastiktan sonra form tagi icndeki bilgiler buraya gelir
if(isset($_POST['upload'])) {
    $error = false; //bi degisken tanimliyoz degeri false olsu onu kullanark hata olup olmadigini kontrol edebiliriz
    $msg='';
    $uploadDir =' uploads/';//yukledigmiz dosyalar bu degiskene atacz
    $picsExt = array('gif', 'jpg', 'jpeg', 'png', 'bmp');//fotolarin uzantilari
    $hash = date('YmdHis');//herhangi bi dosya yukleyince bu degiskeni kullanacz ayni isim bi uygulama yukleyince herhangi bi sorun olmasin diye
    $time = date('Y=m=d H:i:s');
    $title = clean($_POST['apptitle']);
    $appTitle=preg_replace('/[\x7f-\xff -]/',"," ,$title);
    $desc = clean($_POST['appdesc']);//gereksiz karakterlerden kurtulmak icin clean fonksyonuna atariz
    $version = clean($_POST['appversion']);
    $cat = (int)$_POST['filecat'];

    if (!empty($_FILES['appicon']['name'])) {//eger dosya bos deilse bu islemi yap dosya yukluyorz o yuzden Files kullandik Post degil
        $fileName = $_FILES['appicon']['name'];
        $fileTmp = $_FILES['appicon']['tmp_name'];
        $fileType = $_FILES['appicon']['type'];
        $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
//yukledigmiz icon/dosya fotograf olup olmadigi kontrol edecz
        if ((!in_array(strtolower($fileExt), $picsExt))) {//1.parametre yukledigimiz dosya 2.si Extention array icinde degilse yani uzantisi yoksa demeki foto degil ve hataverir
            $error = true;
            $msg .= '<li>Wrong Extension For Icon</li>'; //1'den fazla hata olursa hepsini yazmak icin degisken yaninda nokta koyariz
        } else {//eger hata yoksa title ve zaman bilgiler ve dosyanin uzantisi/extion yazack
            $iconFile = $appTitle . '_' . $hash . '.' . $fileExt;
        }
    } /*else {
        $error = true;
        $msg .= '<li>You forget to upload Icon</li>';
    }*/

    if (!empty($_FILES['apppromo']['name'])) {//her yuklene dosyadan 4 tane bilgi alacz
        $promoName = $_FILES['apppromo']['name'];//adi
        $promoTmp = $_FILES['apppromo']['tmp_name'];//gecici ad/yeri
        $promoType = $_FILES['apppromo']['type'];//dosyanin turu
        $promoExt = pathinfo($promoName, PATHINFO_EXTENSION);//1.parametre Kontrol edilecek yolu/path belirtir,
        //flags/2. parametre  which array element to return PATHINFO_EXTENSION - return only extension/uzanti

        if ((!in_array(strtolower($fileExt), $picsExt))) {//1.parametre yukledigimiz dosya 2.si Extention array icinde degilse yani uzantisi yoksa demeki foto degil ve hata verir
            $error = true;
            $msg .= '<li>Wrong Extension For Promo</li>';
        } else {//eger hata yoksa title ve zaman bilgiler ve dosyanin uzantisi/extion yazack
            $promoFile = $appTitle . '_promo_' . $hash . '.' . $promoExt;
        }

    }
    if (!empty($_FILES['appfile']['name'])) {//eger dosya bos deilse bu islemi yap dosya yukluyorz o yuzden Files kullandik Post degil
        $apkName = $_FILES['appfile']['name'];
        $apkTmp = $_FILES['appfile']['tmp_name'];
        $apkType = $_FILES['appfile']['type'];
        $apkExt = pathinfo($apkName, PATHINFO_EXTENSION);

        if (strtolower($apkExt) != 'apk') {
            $error = true;
            $msg .= 'Wrong Extenstion File';
        }
        else{  $apkFile = $appTitle . '_' . $hash . '.' . $apkExt;}

    } /*else {
        $error = true;
        $msg .= '<li>You forget to Upload APK File</li>';
    }*/
//butun bosluklari doldurduktan sonra ve herhangi bi hata yoksa bu islemleri yapcz
    if ($error == false) {
        //fotolar icin bi fonks hazirladik 1.params dosyanin gecici yeri,2.si dosyanin nerye yukleyecgimiz belirler,3.su sectigimiz dosya/gelen dosya,4.su dosya turu,4.ve5. fotonun  genislik ve uzunluk
     /*  create_thumb($fileTmp, $uploadDir, $iconFile, $fileType, 512, 512);
        create_thumb($promoTmp, $uploadDir, $promoFile, $promoType, 1200, 300);*/
        //dosya/uygulama yuklemek icin bu fonksu kullanacz
        move_uploaded_file(isset($apkTmp), $uploadDir .isset($apkFile) );//1.params dosyanin geci yeri alir,2.si uygulamanin yeni bilgileri/kendisi ve path tutan degiskeni alir,3.su dosyanin yeni adi/title   ve Extion bilgiler
        echo '<div class="alert alert-dismissable alert-success">
       <strong>Well done! Wait for admin Approval</strong>
       Registration is complete
         </div>';

    }


    if ($error == true) {//eger hata varsa hata gosterck
        echo '<div class="alert alert-danger navbar">
       <strong>Error!   ' . $msg . '  </strong>
       </div>
';
    }
}

?>


    <div class="row ">
        <?php include "category.php"; ?>

        <div class="col-md-6 container-fluid ">

            <form action="" class="mt-4 p-5 bg-light text-white rounded" method="post">
                <fieldset>
                <div class="form-group ">
                    <label for="apptitle" class="form-label "><p style="color:black">App Title :</p></label>
                    <input type="text" class="form-control" id="apptitle" name="apptitle" placeholder="Enter App Tıtle" >
                </div>
                <br/>
                <div class="form-group">
                    <label for="appdesc" class="form-label"><p style="color:black">App Description :</p></label>
                    <textarea  class="form-control" id="appdesc"  name="appdesc"> </textarea>
                </div>
                <br/>

                <div class="form-group ">
                    <label for="appicon" class="form-label "><p style="color:black">Icon :</p></label>

                    <!--readOnly ozelligi yazinca input icinde herhangi bi sey yazamiyoz-->
                    <input readonly="" class="form-control" placeholder="Browse..." type="text">
                    <input class="form-control" id="appicon" name="appicon"  type="file"  >
                </div>
                <br/>
                <div class="form-group ">
                    <label for="apppromo" class="form-label "><p style="color:black">Promo Picture :</p></label>

                    <input readonly="" class="form-control" placeholder="Browse..." type="text">
                    <input class="form-control" id="apppromo" name="apppromo"  type="file"  >
                </div> <br/>
                <div class="form-group ">
                    <label for="appfile" class="form-label "><p style="color:black">APK File :</p></label>
                     <!-- readOnly ozelligi yazinca input icinde herhangi bi sey yazamiyoz sadece okumak icin bi input/text kalir-->
                    <input readonly="" class="form-control" placeholder="Browse..." type="text">
                    <input class="form-control" id="appfile" name="appfile" type="file"  >
                </div> <br/>

                <div class="form-group ">
                    <label for="appversion" class="form-label "><p style="color:black">App Version :</p></label>

                    <input id="appversion" name="appversion" class="form-control" placeholder="Enter App Version" type="text">

                </div>
                <br/>
                <div class="form-group">
                    <label for="filecat"><p style="color:black">Category :</p></label>
                    <div >

                    <select class="form-control" id="filecat" name="filecat">
                        <?php
                        global $connect;
                       clean($sql="SELECT * FROM `category`") ;//veriTabanda category table icinde ne kadar column/sutun varsa goster/getir
                        $q=mysqli_query($connect,$sql);
                        if(mysqli_affected_rows($connect) >0) {//satirlarda herhani bi degisklik/ekleme/alma olursa 1 dondureck yani yukardaki islem dogru calisti
                            while ($data =mysqli_fetch_assoc($q)) {//category'da ne kadar eleman/satir varsa onu option icinde goster
                                echo '<option value="'.$data['cat_id'].'">'.$data['cat_name'].'<option>';
                            }

                        }
                        ?>

                    </select>

                    </div>
                </div>
               <br/>
                <input type="submit" class="btn btn-info btn-outline-success" value="Upload" name="upload">
             </fieldset>
            </form>

        </div>

    </div>


<?php include 'footer.php';