<?php

?>


<div class="col-md-1"  >
<div class="container-fluid" > <!--kenarlarda bosluk birakmaz-->
<br/>
    <!-- <section> Etiketi, bir belgedeki/bolgede bir bölümü tanımlar.-->
<section class=" container-fluid" >


    <ul class="nav nav-pills flex-row  " style="max-width: 100px; ";  >
        <li class="nav-item">

   <!--        <a class="navbar-brand" aria-current="page" href="cat.php"> <h4 style="color:#33c56e;">  applications </h4></a>-->

        </li>

<!--         --><?php
/*global $connect;
$sql="SELECT *FROM `category`";
$q=mysqli_query($connect,$sql);
if(mysqli_affected_rows($connect) >0) {
while ($data = mysqli_fetch_assoc($q)) {
    $catID=$data['cat_id'];
    $catName =$data['cat_name'];
    echo '';
}
}
         */?>
        <li class="nav-item " >
            <!-- cat idlerine gore bize categoryleri gosterckve ve sitede her catid kelimesi karsisinda id yazack -->
            <a class="navbar-brand" aria-current="page" href="social.php"> <h4 style="color:#33c56e;">Social  </h4></a>
            <a class="navbar-brand" aria-current="page" href="games.php"> <h4 style="color:#33c56e;">Games  </h4></a>
            <a class="navbar-brand" aria-current="page" href="shopping.php"> <h4 style="color:#33c56e;">Shopping  </h4></a>
        </li>


    </ul> </section>

</div>
</div>
