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
                        <img  src="games/game1.jpg" class="w-50" alt="slider1">

                    </div>
                    <div class="carousel-item">
                        <h1>  Slider 2</h1>
                        <img  src="games/game2.webp" class="w-50" alt="slide 2">

                    </div>
                    <div class="carousel-item ">
                        <h1>  Slider 3</h1>
                        <img   src="games/game3.jpg" class="w-50" alt="slider3">

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
                            <a href="https://play.google.com/store/apps/details?id=com.king.candycrushsaga&hl=tr&gl=US" target="_blank">
                                <img width="350px" height="350px" src="games/candy.jpg"></a>
                        </h4></div>

                    <div class="item"><a href="https://play.google.com/store/apps/details?id=com.rovio.abclassic22&hl=tr&gl=US" target="_blank">
                            <img width="350px" height="350px" src="games/angry.jpg"></a>></div>

                    <div class="item"><h3><a target="_blank" href="https://play.google.com/store/apps/details?id=com.roblox.client&hl=tr&gl=US">
                                <img width="350px" height="350px" src="games/roblox.jpg" ></h3> </a> </div>
                    <div class="item"><h3><a href="https://play.google.com/store/apps/details?id=com.nekki.shadowfight&hl=tr&gl=US" target="_blank">
                                <img width="350px" height="350px" src="games/shadow.jpg"> </a><</div>

                    <div class="item"><h3><a href="https://play.google.com/store/apps/details?id=com.halfbrick.fruitninjax&hl=tr&gl=US" target="_blank">
                                <img width="350px" height="350px" src="games/fruit.jpg"></a></h3></div>

                    <div class="item"><h3><a href="https://play.google.com/store/apps/details?id=com.sega.sprint&hl=tr&gl=US" target="_blank">
                            <img width="350px" height="350px" src="games/sonic.jpg"></a></h3></div>

                    <div class="item"><h3><a href="https://play.google.com/store/apps/details?id=com.supercell.clashofclans&hl=tr&gl=US" target="_blank">
                                <img width="350px" height="350px" src="games/clash.jpg"></a></h3></div>

                </div>
                <h1> Latest Apps</h1>
                <div class="owl-carousel owl-theme">
                    <div class="item"><a href="https://play.google.com/store/apps/details?id=com.ea.game.pvzfree_row&hl=tr&gl=US" target="_blank">
                            <img width="350px" height="350px" src="games/zombi.jpg">
                        </a></div>

                    <div class="item"><a href="https://play.google.com/store/apps/details?id=com.cg.archery&hl=tr&gl=US" target="_blank">
                            <img width="350px" height="350px" src="games/archery.jpg"></a></div>

                    <div class="item"><a href="https://play.google.com/store/apps/details?id=com.miniclip.eightballpool&hl=tr&gl=US" target="_blank">
                            <img width="350px" height="350px" src="games/8ball.jpg" ></a></div>

                    <div class="item"><a href="https://play.google.com/store/apps/details?id=com.ea.gp.fifamobile&hl=tr&gl=US" target="_blank">
                            <img width="350px" height="350px" src="games/fifa.jpg"></a></div>

                    <div class="item"><a href="https://play.google.com/store/apps/details?id=com.miniclip.basketballstars&hl=tr&gl=US" target="_blank">
                            <img width="350px" height="350px" src="games/basket.png"></a></div>
                    <div class="item"><h3><a href="https://play.google.com/store/apps/details?id=com.sega.sprint&hl=tr&gl=US" target="_blank"" target="_blank">
                            <img width="350px" height="350px" src="games/sonic.jpg"></a></h3></div>



                </div>
            </div>
        </div>

    </div>

    </div>
<?php include 'footer.php'; ?>