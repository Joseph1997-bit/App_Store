<?php
include "header.php";

?>

<div class="col-md-12">
    <div class="row ">
        <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-indicators">
                <!-- fotolarinda altinda 3 nokta var using these little buttons to go to next picture-->
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <h1>  Slider 1</h1>
                    <img  src="images/1.slider.png" class="w-50" alt="slider1">

                </div>
                <div class="carousel-item">
                    <h1>  Slider 2</h1>
                    <img  src="images/-mobile-apps.jpg" class="w-50" alt="slide 2">

                </div>
                <div class="carousel-item ">
                    <h1>  Slider 3</h1>
                    <img   src="images/2.slider.jpg" class="w-50" alt="slider3">

                </div>
            </div>
          <!--  carousel-control-icon ozelligi yanda kucuk ucgenler icin prev ise yandaki buyuk buttn-->
            <button style="background-color: #0f0f0f" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"><!--data-slide ozelligi kaldirsak buttni bassak bile kaydirma yapamaycz-->
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
            <!--*owl-carousel* ozellgi uygulamalar satir olarak ciksin
            *owl-theme* ozelligi uyglumalari kaydirmak icin asgada iki nokta gosterir-->
            <div class="owl-carousel owl-theme">
                <div class="item"><h4>
                       <a href="https://play.google.com/store/apps/details?id=jp.naver.line.android&hl=tr&gl=US" target="_blank">
                           <img width="350px" height="350px" src="images/line.PNG"></a>
                    </h4></div>
                
                <div class="item"><a href="https://play.google.com/store/apps/details?id=com.instagram.android&hl=tr&gl=US" target="_blank">
                        <img width="350px" height="350px" src="images/instgram.PNG"></a>></div>

                <div class="item"><h3><a target="_blank" href="https://play.google.com/store/apps/details?id=com.whatsapp&hl=tr&gl=US">  <img width="350px" height="350px" src="images/whats.PNG" ></h3> </a> </div>
                <div class="item"><h3><a href="https://play.google.com/store/apps/details?id=com.snapchat.android&hl=tr&gl=US" target="_blank"> <img width="350px" height="350px" src="images/snap.PNG"> </a><</div>
                <div class="item"><h3><a href="https://play.google.com/store/apps/details?id=com.facebook.katana&hl=tr&gl=US" target="_blank">  <img width="350px" height="350px" src="images/face.PNG"></a></h3></div>
                <div class="item"><h3><a href="https://play.google.com/store/apps/details?id=org.thoughtcrime.securesms&hl=tr&gl=US" target="_blank"" target="_blank">   <img width="350px" height="350px" src="images/signal.PNG"></a></h3></div>
                <div class="item"><h3><a href="https://play.google.com/store/apps/details?id=com.microsoft.teams&hl=tr&gl=US" target="_blank">  <img width="350px" height="350px" src="images/teams.PNG"></a></h3></div>
                <div class="item"><h3><a href="https://play.google.com/store/search?q=tiktok&c=apps&hl=tr&gl=US" target="_blank">  <img width="350px" height="350px" src="images/tiktok.PNG"></a> </h3></div>

            </div>
            <h1> Latest Apps</h1>
            <div class="owl-carousel owl-theme"><!--owl carousel fotolar yan yana koymak icin ve owl_theme asgadki iki nokta kaydirmak icin kullanilir-->
                <div class="item"><a href="https://play.google.com/store/search?q=skype&c=apps&hl=tr&gl=US" target="_blank">
                        <img width="350px" height="350px" src="images/skype.PNG">
                    </a></div>

                <div class="item"><a href="https://play.google.com/store/apps/details?id=com.viber.voip&hl=tr&gl=US" target="_blank"><img width="350px" height="350px" src="images/viber.PNG"></a></div>
                <div class="item"><a href="https://play.google.com/store/apps/details?id=com.facebook.orca&hl=tr&gl=US" target="_blank"><img width="350px" height="350px" src="images/messenger.PNG" ></a></div>
                <div class="item"><a href="https://play.google.com/store/apps/details?id=com.tencent.mm&hl=tr&gl=US" target="_blank"><img width="350px" height="350px" src="images/wechat.PNG"></a></div>
                <div class="item"><a href="https://play.google.com/store/apps/details?id=com.zhiliaoapp.musically&hl=tr&gl=US" target="_blank"><img width="350px" height="350px" src="images/talk.PNG"></a></div>
                <div class="item"><a href="https://play.google.com/store/apps/details?id=us.zoom.videomeetings&hl=tr&gl=US" target="_blank"><img width="350px" height="350px" src="images/zoom.PNG"></a></div>
                <div class="item"><a href="https://play.google.com/store/apps/details?id=com.icq.mobile.client&hl=tr&gl=US" target="_blank"><img width="350px" height="350px" src="images/icq.PNG"></a></div>
                <div class="item"><a href="https://play.google.com/store/apps/details?id=com.picsart.studio&hl=tr&gl=US" target="_blank"><img width="350px" height="350px" src="images/pin.PNG"></a></div>

            </div>
        </div>
    </div>

    </div>

    </div>
<?php include 'footer.php'; ?>