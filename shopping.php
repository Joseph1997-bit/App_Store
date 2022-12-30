<?php
include "header.php";

?>

<div class="col-md-12">
    <div class="row ">
        <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel"><!--data-bs-rd fotolar her 5 sanye kendi harket eder-->
            <div class="carousel-indicators">
                <!-- fotolarinda altinda 3 nokta var using these little buttons to go to next picture-->
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <h1>  Slider 1</h1>
                    <img  src="shopping/shop3.jpg" class="w-50" alt="slider1">

                </div>
                <div class="carousel-item">
                    <h1>  Slider 2</h1>
                    <img  src="shopping/shop2.jpg" class="w-50" alt="slide 2">

                </div>
                <div class="carousel-item ">
                    <h1>  Slider 3</h1>
                    <img   src="shopping/shop1.webp" class="w-50" alt="slider3">

                </div>
            </div>
            <button style="background-color: #0f0f0f" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually">Previous</span>
            </button>
            <button style="background-color:#0e4db5" class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually">Next</span>
            </button>
        </div>
        <div class="col-md-10" style="background-color: #e3f2fd;">


        </div>

    </div>
    <br/>

    <div class="row ">


        <div class="col-md-12 " style="background-color: #e3f2fd;">
            <h1> Featured Apps</h1>
            <div class="owl-carousel owl-theme">
                <div class="item"><h4>
                        <a href="https://play.google.com/store/apps/details?id=com.walmart.android&hl=tr&gl=US" target="_blank">
                            <img width="350px" height="350px" src="shopping/walmart.jpg"></a>
                    </h4></div>

                <div class="item"><a href="https://play.google.com/store/apps/details?id=com.ebay.mobile&hl=tr&gl=US" target="_blank">
                        <img width="350px" height="350px" src="shopping/ebay.webp"></a>></div>

                <div class="item"><h3><a target="_blank" href="https://play.google.com/store/apps/details?id=com.target.ui&hl=tr&gl=US">
                            <img width="350px" height="350px" src="shopping/target.png" ></h3> </a> </div>
                <div class="item"><h3><a href="https://play.google.com/store/apps/details?id=com.shopee.ph&hl=tr&gl=US" target="_blank">
                            <img width="350px" height="350px" src="shopping/shopee.png"> </a><</div>

                <div class="item"><h3><a href="https://play.google.com/store/apps/details?id=com.wayfair.wayfair&hl=tr&gl=US" target="_blank">
                            <img width="350px" height="350px" src="shopping/watfair'.png"></a></h3></div>

                <div class="item"><h3><a href="https://play.google.com/store/apps/details?id=com.flipkart.android&hl=tr&gl=US" target="_blank"" target="_blank">
                        <img width="350px" height="350px" src="shopping/flipkart.jpg"></a></h3></div>

            </div>
            <h1> Latest Apps</h1>
            <div class="owl-carousel owl-theme">
                <div class="item"><a href="https://play.google.com/store/apps/details?id=com.hsn.android&hl=tr&gl=US" target="_blank">
                        <img width="350px" height="350px" src="shopping/HSN.svg">
                    </a></div>

                <div class="item"><a href="https://play.google.com/store/apps/details?id=com.belk.android.belk&hl=tr&gl=US" target="_blank">
                        <img width="350px" height="350px" src="shopping/belk.jpg"></a></div>

                <div class="item"><a href="https://play.google.com/store/apps/details?id=com.mercariapp.mercari&hl=tr&gl=US" target="_blank">
                        <img width="350px" height="350px" src="shopping/Mercari.jpg" ></a></div>

                <div class="item"><a href="https://play.google.com/store/apps/details?id=com.wishabi.flipp&hl=tr&gl=US" target="_blank">
                        <img width="350px" height="350px" src="shopping/flipp.png"></a></div>

                <div class="item"><a href="https://play.google.com/store/apps/details?id=com.jcp&hl=tr&gl=US" target="_blank">
                        <img width="350px" height="350px" src="shopping/jcp.webp"></a></div>
                <div class="item"><h3><a href="https://play.google.com/store/apps/details?id=com.flipkart.android&hl=tr&gl=US" target="_blank"" target="_blank">
                        <img width="350px" height="350px" src="shopping/flipkart.jpg"></a></h3></div>

                <div class="item"><h3><a href="https://play.google.com/store/apps/details?id=com.ritta135.elbiyafet" target="_blank"" target="_blank">
                        <img width="350px" height="350px" src="images/ritta.jpg"></a></h3></div>
            </div>
        </div>
    </div>

</div>

</div>
<?php include 'footer.php'; ?>
