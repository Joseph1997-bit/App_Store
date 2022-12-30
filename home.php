<?php   /** @noinspection ALL */
include "header.php";
global $connect;
//eger get icinde catid submit basinca burya gelir bi deger varsa belirli yerlerden dosya alip gostersin
if(isset($_GET['catid'])){
     $catID=(int)$_GET['catid'];//catid degeri int'e donusturup catID  degiskene atiyoz
$sql="SELECT * FROM `files` WHERE `file_cat`=$catID  ORDER BY `file_date` DESC";
} else {

    $sql="SELECT * FROM `files` ORDER BY `file_date` DESC";//butun kismimlari getireck ama file_date,desc demeki en son eklenen file ilk basta cikack
}
?>


    <div class="row ">
        <?php include "category.php"; ?>
        <h3 style="color: green">
            <b>You can find all the applications you need here.</b>
        </h3>

        <div class="container-fluid"style="background-color: ">
            <div class="mt-4 p-5  text-black rounded" >




    <div class="row">
      <div class="col-sm-6 col-md-3">
        <a target="_blank" href="https://play.google.com/store/search?q=web%20development&c=apps&hl=tr&gl=US" class="thumbnail">
          <img
            src=
"images/web.jpg"
            style="height: 200px; width: 200px"
          />
        </a>
        <div class="caption">
          <h3 style="color: green">GfG Web-Development</h3>
           
<p>
            Web development refers to the building,
            creating, maintaining of
            websites.
          </p>
 
 
           
<p>
            <a href="#" class="btn btn-success">
             See More
            </a>
          </p>
 
 
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <a target="_blank" href="https://play.google.com/store/search?q=gfg&c=apps&hl=tr&gl=US" class="thumbnail">
          <img
            src=
"images/Machine%20Learning.png"
            style="height: 200px; width: 200px"
          />
        </a>
        <div class="caption">
          <h3 style="color: green">GfG Machine Learning</h3>
           
<p>
            Machine Learning is the study to
            learn without being explicitly
            programmed.
          </p>
 
 
           
<p>
            <a href="#" class="btn btn-success">
             See More
            </a>
          </p>
 
 
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <a target="_blank" href="https://play.google.com/store/search?q=programing&c=apps&hl=tr&gl=US" class="thumbnail">
          <img
            src="images/programing.png"
            style="height: 200px; width: 200px"
          />
        </a>
        <div class="caption">
          <h3 style="color: green">GfG Programming</h3>
           
<p>
            Competitive Programming enables you
            to code a given problem under
            provided constraints.
          </p>
 
 
           
<p>
            <a href="#" class="btn btn-success">
             See More
            </a>
            </p>
 
 
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <a target="_blank" href="https://play.google.com/store/search?q=java&c=apps&hl=tr&gl=US" class="thumbnail">
          <img
            src=
"images/java.jpg"
            style="height: 200px; width: 200px"
          />
        </a>
        <div class="caption">
          <h3 style="color: green">GfG Java</h3>
           
<p>
            Java is one of the most popular
            and widely used programming
            language.
          </p>
 
 
           
<p>
            <a href="#" class="btn btn-success">
             See More
            </a>
          </p>
        </div>
      </div>

       <div class="col-sm-6 col-md-3">
        <a target="_blank" href="https://play.google.com/store/search?q=zoom&c=apps&hl=tr&gl=US" class="thumbnail">
          <img
            src=
"images/zoom.PNG"
            style="height: 200px; width: 200px"
          />
        </a>
        <div class="caption">
          <h3 style="color: green">Zoom Cloud</h3>
           
<p>
    Stay connected wherever you go – start or join a secure meeting with
    flawless video and audio, instant screen sharing, and cross-platform instant messaging
    - for free!
          </p>



<p>
            <a href="#" class="btn btn-success">
             See More
            </a>
          </p>
 
 
        </div>
      </div>
       <div class="col-sm-6 col-md-3">
        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.jeetproductions.opentalk&hl=tr&gl=US" class="thumbnail">
          <img
            src=
"images/talk.PNG"
            style="height: 200px; width: 200px"
          />
        </a>
        <div class="caption">
          <h3 style="color: green">Talk App</h3>
           
<p>Do you need to practice your English more?
    YES try Open Talk
    Do you want to practice having conversations?
    YES then try Open Talk
          </p>
 
 
           
<p>
            <a href="#" class="btn btn-success">
             See More
            </a>
          </p>
 
 
        </div>
      </div>
       <div class="col-sm-6 col-md-3">
        <a  target="_blank" href="https://play.google.com/store/apps/details?id=com.zhiliaoapp.musically&hl=tr&gl=US" class="thumbnail">
          <img
            src=
"images/tiktok.PNG"
            style="height: 200px; width: 200px"
          />
        </a>
        <div class="caption">
          <h3 style="color: green">TikTok</h3>
           
<p>
    TikTok is THE destination for mobile videos. On TikTok, short-form videos are exciting,
    spontaneous, and genuine. Whether you're a sports fanatic.
          </p>
 
 
           
<p>
            <a href="#" class="btn btn-success">
             See More
            </a>
          </p>
 
 
        </div>
      </div>
        <div class="col-sm-6 col-md-3">
            <a  target="_blank" href="https://play.google.com/store/search?q=viber&c=apps&hl=tr&gl=US" class="thumbnail">
                <img
                        src=
                        "images/viber.PNG"
                        style="height: 200px; width: 200px"
                />
            </a>
            <div class="caption">
                <h3 style="color: green">TikTok</h3>

                <p>
                     free messenger app among video chat programs that lets you connect with everyone in the world .
                    Send messages to friends and family with Viber messenger.
                </p>



                <p>
                    <a href="#" class="btn btn-success">
                        See More
                    </a>
                </p>


            </div>
        </div>
    </div>


            </div>
            <div class="owl-carousel "> <!--owl carousel fotolar yan yana koymak icin ve owl_theme asgadki iki nokta kaydirmak icin kullanilir-->
                <div class="item"><a href="https://play.google.com/store/apps/details?id=com.ea.game.pvzfree_row&hl=tr&gl=US" target="_blank">
                        <img width="300px" height="300px" src="games/zombi.jpg">
                    </a></div>

                <div class="item"><a href="https://play.google.com/store/apps/details?id=com.cg.archery&hl=tr&gl=US" target="_blank">
                        <img width="300px" height="300px" src="games/archery.jpg"></a></div>

                <div class="item"><a href="https://play.google.com/store/apps/details?id=com.miniclip.eightballpool&hl=tr&gl=US" target="_blank">
                        <img width="300px" height="300px" src="games/8ball.jpg" ></a></div>

                <div class="item"><a href="https://play.google.com/store/apps/details?id=com.ea.gp.fifamobile&hl=tr&gl=US" target="_blank">
                        <img width="300px" height="300px" src="games/fifa.jpg"></a></div>

                <div class="item"><a href="https://play.google.com/store/apps/details?id=com.miniclip.basketballstars&hl=tr&gl=US" target="_blank">
                        <img width="300px" height="300px" src="games/basket.png"></a></div>
                <div class="item"><h3><a href="https://play.google.com/store/apps/details?id=com.ritta135.elbiyafet" target="_blank"" target="_blank">
                        <img width="300px" height="300px" src="images/ritta.jpg"></a></h3></div>


            </div>

        </div>

    </div>


<?php include 'footer.php'; ?>