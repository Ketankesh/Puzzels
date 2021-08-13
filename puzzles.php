<?php
session_start();


if(empty($_SESSION["email"]) and empty($_SESSION["pass"]))
{
    header("location:puzzles.php");
}
$con = mysqli_connect("localhost", "root", "");

$c=mysqli_select_db($con,"puzzels");

$q="select * from register where email='$_SESSION[email]' and pass='$_SESSION[pass]'";

$res=mysqli_query($con,$q);

$c=mysqli_num_rows($res);


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzel</title>
    <link rel="stylesheet" href="https://use.typekit.net/uti2iqk.css">

    <link rel="stylesheet" href="./css/style.css">
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');
      </style>
      <style>
        @import url("https://use.typekit.net/uti2iqk.css");
      </style>
      <link rel="stylesheet" href="https://use.typekit.net/uti2iqk.css">
      
<!-- Embedding Fonts from google fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com" />
<link
  href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script:wght@700&display=swap"
  rel="stylesheet"/>
  <link rel="stylesheet" href="/script/script.js">
<link rel="stylesheet" href="./css/style2.css" />

</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
          <div class="words word-1">
            <A class="text" style="text-decoration: none; color: rgb(219, 71, 103);" href="index.html"> <span>P</span>
             <span>U</span>
             <span>Z</span>
             <span>Z</span>
             <span>L</span>
             <span>E</span>
             <span>S</span>
             </A>
           </div>
       
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-success text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About Us</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#modl"><i class="fas fa-percentage"></i>&nbsp; Offers</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#reviews">Reviews</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">logout</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#"><i class="fas fa-street-view"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
<!--bagroungd image-->

    <div class="container-fluid ket" style="margin-top: 5%;">
        <div class="row">
          <div class="col">

            <div class="box">
             <a class="text" style="border: lightsalmon; font-family: 'Dancing Script', cursive; text-align: center; font-size:35px; color: rgb(14, 8, 8); text-shadow:4px black ; text-decoration: none;"> Nearby Craving</a>
                <div class="container-2">
                    <span class="icon"><i class="fa fa-search"></i></span>
                    <input type="search" id="search" placeholder="Search..." />
                </div>
              </div>
          </div>
        </div>
    </div>
<!--heading-->
<div class="container-fluid">
<h class="text-uppercase" id="text" style="font-family: 'Indie Flower', cursive; font-size: 400%; display: flex; justify-content: center;" >fresh Made Food...just for you...</h>
</div>

        <!---button for more--->
        <div id="modl"></div>
      <div class="container" id="rak" >
        <div class="row" >
          <div class="col-lg-4" >
        <button class="button text-uppercase" id="button" data-toggle="modal" data-target="#exampleModalCenter" >
         <h style="font-family: yellowtail,sans-serif; font-weight: 400;
         font-size: 20px;
         font-style: normal;">discount...</h>
          <div class="button__horizontal"></div>
          <div class="button__vertical"></div>
        </button>
        <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
      <div class="modal-content" style=" background: linear-gradient(to right, rgb(255, 255, 255), rgb(238, 255, 0));" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle" >DISCOUNT</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            <div class="container-fluid">
                
                <div class="row">
                  <div class="col">
                      <!--card 1-->
                      <div class="card" >
                    <img class="card-img-top" src="modal1/amy-shamblen-3G8k9IhI6FE-unsplash.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body" style="background-color: #FFD700">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                    </div>
                  </div></div>
                  <div class="col">
                    <!--card 2-->  
                    <div class="card" >
                    <img class="card-img-top" src="./modal1/daniel-oberg-3sl9_ubYIno-unsplash.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body" style="background-color: #FFD700">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                    </div>
                  </div></div>
                  <div class="col">
                      <!--card 3-->
                    <div class="card" >
                    <img class="card-img-top" src="./modal1/brooke-lark-kVCRP3uiLiE-unsplash.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body" style="background-color: #FFD700">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                    </div>
                  </div></div>

                  <div class="w-100" style="margin-top: 5%;"></div>
                  <div class="col"> 
                    <!--card 4-->
                  <div class="card" >
                  <img class="card-img-top" src="./modal1/dmitry-kovalchuk-fRmdIVd9bcs-unsplash.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
                  <div class="card-body" style="background-color: #FFD700">
                      
                    <a href="#" class="card-link text-white">ORDER NOW</a>
                  </div>
                </div></div>
                  <div class="col">
                    <!--card 5-->
                  <div class="card" >
                  <img class="card-img-top" src="./modal1/dennis-klein-pxTe1qZjcvI-unsplash.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
                  <div class="card-body" style="background-color: #FFD700">
                      
                    <a href="#" class="card-link text-white">ORDER NOW</a>
                  </div>
                </div></div>
                  <div class="col"> 
                    <!--card 6-->
                  <div class="card" >
                  <img class="card-img-top" src="./modal1/daniel-oberg-3sl9_ubYIno-unsplash.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
                  <div class="card-body" style="background-color: #FFD700">
                      
                    <a href="#" class="card-link text-white">ORDER NOW</a>
                  </div>
                </div></div>
                  
                </div>
                <div class="row" style="margin-top: 5%;">
                    <div class="col"> <!--card 7-->
                        <div class="card" >
                        <img class="card-img-top" src="./modal1/farhad-ibrahimzade-0EE-38h2PoI-unsplash.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body" style="background-color: #FFD700">
                      
                          <a href="#" class="card-link text-white">ORDER NOW</a>
                        </div>
                      </div></div>
                  <div class="col"> <!--card 8-->
                    <div class="card" >
                    <img class="card-img-top" src="./modal1/farhad-ibrahimzade-07RKITgmScQ-unsplash.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body" style="background-color: #FFD700">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                    </div>
                  </div></div>
                  <div class="col"> <!--card 9-->
                    <div class="card" >
                    <img class="card-img-top" src="./modal1/emmanuel-zua-yiyHZ5O5Fbw-unsplash.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body" style="background-color: #FFD700">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                    </div>
                  </div></div>
                  
                    <div class="w-100" style="margin-top: 5%;"></div>
                    <div class="col"> <!--card 10-->
                        <div class="card" >
                        <img class="card-img-top" src="./modal1/emmanuel-zua-LxlMjePM7rQ-unsplash.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body" style="background-color: #FFD700">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                        </div>
                      </div></div>
                    <div class="col"> <!--card 11-->
                        <div class="card" >
                        <img class="card-img-top" src="./modal1/emmanuel-zua-gSYtriu8qA0-unsplash.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body" style="background-color: #FFD700">
                      
                          <a href="#" class="card-link text-white">ORDER NOW</a>
                        </div>
                      </div></div>
                    <div class="col"> <!--card 12-->
                        <div class="card" >
                        <img class="card-img-top" src="./modal1/emmanuel-zua-eDG8gsiqkyI-unsplash.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body" style="background-color: #FFD700">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                        </div>
                      </div></div>
                   
                  </div>
              </div>
        </div>
      </div>
    </div>
    </div>
        </div>
        <!--button2-->
        <div class="col-md-4" >
        <button class="button" id="button2"data-toggle="modal" data-target="#exampleModalCenter1">
          <h style="font-family: yellowtail,sans-serif;
         font-weight: 400;
         font-size: 20px;
         font-style: normal;">TOP PICKS...</h>
          <div class="button__horizontal"></div>
          <div class="button__vertical"></div>
        </button>
        <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
      <div class="modal-content" style=" background: linear-gradient(to right, rgb(255, 255, 255) 0%, rgb(158, 44, 78) 100%)" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle" >DISCOUNT</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            <div class="container-fluid">
                
                <div class="row">
                  <div class="col">
                      <!--card 1-->
                      <div class="card" >
                    <img class="card-img-top" src="modal1/katie-smith-uQs1802D0CQ-unsplash.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body" style="background-color: #ED2939">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                    </div>
                  </div></div>
                  <div class="col">
                    <!--card 2-->  
                    <div class="card" >
                    <img class="card-img-top" src="./modal1/joseph-gonzalez-Wns3U-oVoLA-unsplash.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body" style="background-color: #ED2939">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                    </div>
                  </div></div>
                  <div class="col">
                      <!--card 3-->
                    <div class="card" >
                    <img class="card-img-top" src="./modal1/joseph-gonzalez-hTR1XPtTo_k-unsplash.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body" style="background-color: #ED2939">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                    </div>
                  </div></div>

                  <div class="w-100" style="margin-top: 5%;"></div>
                  <div class="col"> 
                    <!--card 4-->
                  <div class="card" >
                  <img class="card-img-top" src="./modal1/jez-timms-J7J0oTps4Lo-unsplash.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
                  <div class="card-body" style="background-color: #ED2939">
                      
                    <a href="#" class="card-link text-white">ORDER NOW</a>
                  </div>
                </div></div>
                  <div class="col">
                    <!--card 5-->
                  <div class="card" >
                  <img class="card-img-top" src="./modal1/jarritos-mexican-soda-vl0mR0uYcEU-unsplash.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
                  <div class="card-body" style="background-color:#ED2939">
                      
                    <a href="#" class="card-link text-white">ORDER NOW</a>
                  </div>
                </div></div>
                  <div class="col"> 
                    <!--card 6-->
                  <div class="card" >
                  <img class="card-img-top" src="./modal1/jarritos-mexican-soda-qdJe8jKsF-8-unsplash.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
                  <div class="card-body" style="background-color:#ED2939">
                      
                    <a href="#" class="card-link text-white">ORDER NOW</a>
                  </div>
                </div></div>
                  
                </div>
                <div class="row" style="margin-top: 5%;">
                    <div class="col"> <!--card 7-->
                        <div class="card" >
                        <img class="card-img-top" src="./modal1/jarritos-mexican-soda-cn2L4k6xtis-unsplash.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body" style="background-color:#ED2939">
                      
                          <a href="#" class="card-link text-white">ORDER NOW</a>
                        </div>
                      </div></div>
                  <div class="col"> <!--card 8-->
                    <div class="card" >
                    <img class="card-img-top" src="./modal1/huy-kutis-YG0bNVXVf-0-unsplash.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body" style="background-color:#ED2939">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                    </div>
                  </div></div>
                  <div class="col"> <!--card 9-->
                    <div class="card" >
                    <img class="card-img-top" src="./modal1/hayley-maxwell-Tyo2vjUaJ4A-unsplash.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body" style="background-color:#ED2939">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                    </div>
                  </div></div>
                  
                    <div class="w-100" style="margin-top: 5%;"></div>
                    <div class="col"> <!--card 10-->
                        <div class="card" >
                        <img class="card-img-top" src="./modal1/haiming-xiao-Wpz3x2qq4ug-unsplash.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body" style="background-color:#ED2939">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                        </div>
                      </div></div>
                    <div class="col"> <!--card 11-->
                        <div class="card" >
                        <img class="card-img-top" src="./modal1/farhad-ibrahimzade-UzngkzSqcsE-unsplash.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body" style="background-color:#ED2939">
                      
                          <a href="#" class="card-link text-white">ORDER NOW</a>
                        </div>
                      </div></div>
                    <div class="col"> <!--card 12-->
                        <div class="card" >
                        <img class="card-img-top" src="./modal1/farhad-ibrahimzade-isHUj3N0194-unsplash.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body" style="background-color:#ED2939">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                        </div>
                      </div></div>
                   
                  </div>
              </div>
        </div>
      </div>
    </div>
    </div>
        </div>
        <!--button3-->
        <div class="col" >
        <button class="button text-uppercase" id="button3"data-toggle="modal" data-target="#exampleModalCenter2">
          <h style="font-family: yellowtail,sans-serif;
          font-weight: 400;
          font-size: 20px;
          font-style: normal;">today's special</h>
          <div class="button__horizontal"></div>
          <div class="button__vertical"></div>
        </button>
        <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
      <div class="modal-content" style=" background: linear-gradient(to right,rgb(255, 255, 255) 0%, rgb(69, 23, 235) 100%)" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle" >DISCOUNT</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            <div class="container-fluid">
                
                <div class="row">
                  <div class="col">
                      <!--card 1-->
                      <div class="card" >
                    <img class="card-img-top" src="modal1/nick-samoylov-i78hKdlBfww-unsplash.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body" style="background-color: #1F75FE">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                    </div>
                  </div></div>
                  <div class="col">
                    <!--card 2-->  
                    <div class="card" >
                    <img class="card-img-top" src="./modal1/megan-sherling-XgOMNxfWOTQ-unsplash.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body" style="background-color: #1F75FE">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                    </div>
                  </div></div>
                  <div class="col">
                      <!--card 3-->
                    <div class="card" >
                    <img class="card-img-top" src="./modal1/megan-sherling-O1SuOKFwWn0-unsplash.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body" style="background-color:#1F75FE">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                    </div>
                  </div></div>

                  <div class="w-100" style="margin-top: 5%;"></div>
                  <div class="col"> 
                    <!--card 4-->
                  <div class="card" >
                  <img class="card-img-top" src="./modal1/megan-sherling-bu7hoJEmp_M-unsplash.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
                  <div class="card-body" style="background-color: #1F75FE">
                      
                    <a href="#" class="card-link text-white">ORDER NOW</a>
                  </div>
                </div></div>
                  <div class="col">
                    <!--card 5-->
                  <div class="card" >
                  <img class="card-img-top" src="./modal1/marvin-binnig-0zqT55YuPn8-unsplash.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
                  <div class="card-body" style="background-color:#1F75FE">
                      
                    <a href="#" class="card-link text-white">ORDER NOW</a>
                  </div>
                </div></div>
                  <div class="col"> 
                    <!--card 6-->
                  <div class="card" >
                  <img class="card-img-top" src="./modal1/mae-mu-f4Mco9WzRPM-unsplash.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
                  <div class="card-body" style="background-color:#1F75FE">
                      
                    <a href="#" class="card-link text-white">ORDER NOW</a>
                  </div>
                </div></div>
                  
                </div>
                <div class="row" style="margin-top: 5%;">
                    <div class="col"> <!--card 7-->
                        <div class="card" >
                        <img class="card-img-top" src="./modal1/mae-mu-BxsGyQwjwaw-unsplash.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body" style="background-color:#1F75FE">
                      
                          <a href="#" class="card-link text-white">ORDER NOW</a>
                        </div>
                      </div></div>
                  <div class="col"> <!--card 8-->
                    <div class="card" >
                    <img class="card-img-top" src="./modal1/lucy-bishop-DK6J9zBpgOU-unsplash.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body" style="background-color:#1F75FE">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                    </div>
                  </div></div>
                  <div class="col"> <!--card 9-->
                    <div class="card" >
                    <img class="card-img-top" src="./modal1/louis-hansel-ETQfAg326eg-unsplash.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body" style="background-color:#1F75FE">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                    </div>
                  </div></div>
                  
                    <div class="w-100" style="margin-top: 5%;"></div>
                    <div class="col"> <!--card 10-->
                        <div class="card" >
                        <img class="card-img-top" src="./modal1/louis-hansel-dphM2U1xq0U-unsplash.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body" style="background-color:#1F75FE">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                        </div>
                      </div></div>
                    <div class="col"> <!--card 11-->
                        <div class="card" >
                        <img class="card-img-top" src="./modal1/loes-klinker-eHZaFdRhFO8-unsplash.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body" style="background-color:#1F75FE">
                      
                          <a href="#" class="card-link text-white">ORDER NOW</a>
                        </div>
                      </div></div>
                    <div class="col"> <!--card 12-->
                        <div class="card" >
                        <img class="card-img-top" src="./modal1/kwon-junho-kavtwdLZadM-unsplash.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body" style="background-color:#1F75FE">
                      
                      <a href="#" class="card-link text-white">ORDER NOW</a>
                        </div>
                      </div></div>
                   
                  </div>
              </div>
        </div>
      </div>
    </div></div>
        </div>
        </div>
      </div>

      
    <!--cArds for menue-->
    <div class="card-columns " style="margin-top: 0%;">
        <div class="card ">
          
          <img src="./images/a-singh-W50inNOVUdU-unsplash.jpg"  class="card-img-top" alt="...">
          
        </div>
        <div class="card p-3 text-white" style="background-image: linear-gradient(to right, rgb(189, 209, 12), rgb(209, 235, 115));">
          <blockquote class="blockquote mb-0 card-body">
            <p style="font-family: 'Dancing Script', cursive; text-align: center; font-size:25px;">Where There Is Tea There Is Hope..</p>
            <footer class="blockquote-footer">
              <small class="text-muted">
                Someone famous in <cite title="Source Title">Ketan Arya</cite>
              </small>
            </footer>
          </blockquote>
        </div>

        <div class="card">
          <img src="./images/ayaneshu-bhardwaj-zIBXP3Zm8kI-unsplash.jpg" class="card-img" alt="...">
          
        </div>

        <div class="card">
          <img src="images/prachi-palwe-QbhUQI45bGQ-unsplash.jpg" class="card-img-top" alt="...">
          
        </div>
        <div class="card text-white text-center p-3" style="background-image: linear-gradient(to right, rgb(223, 150, 192),
         rgba(235, 5, 147, 0.89));" >
          
          <blockquote class="blockquote mb-0" >
            <p style="font-family: 'Dancing Script', cursive; text-align: center; font-size:25px;" >You Are What You Eat So Don't Be Fast,Easy,Cheap & Fake .</p>
            <footer class="blockquote-footer text-white">
              <small>
                Someone famous in <cite title="Source Title"> Ketan Arya</cite>
              </small>
            </footer>
          </blockquote>
        </div>
        <div class="card text-center">
          <img src="./images/prachi-palwe-XpZ6DgOJn8w-unsplash.jpg" class="card-img" alt="...">
          
        </div>
        <div class="card">
          
          <img src="./images/nisha-ramesh-Q5mPPGld5Zk-unsplash.jpg" class="card-img" alt="...">
        </div>
        <div class="card p-3 text-white text-right" style="background-image: linear-gradient(to right, rgb(5, 40, 117), rgba(75, 72, 212, 0.904));">
          <blockquote class="blockquote mb-0">
            <p style="font-family: 'Dancing Script', cursive; text-align: center; font-size:25px;">Your diet is a bank account. Good food choices are good investments</p>
            <footer class="blockquote-footer">
              <small class="text-muted">
                Someone famous in <cite title="Source Title"> Bethenny Frankel.</cite>
              </small>
            </footer>
          </blockquote>
        </div>
        <div class="card">
          <img src="./images/monika-grabkowska-_y6A9bhILkM-unsplash.jpg" class="card-img" alt="...">
          </div>
          </div>
        </div>
      </div>
        

  <!--testimonal slider-->
   
<div class="container-fluid" id="reviews" style=" background: linear-gradient(-100deg,white 50%,rgb(255, 0, 106) 50%);display: flex; justify-content: center;">
  
  <div class="container keshav">
    <h6 style="display: flex; justify-content: center; font-family: 'Dancing Script', cursive; text-align: center; font-size:50px; margin-bottom: 5%; " >DIRECT FROM COUSTMER'S HEART </h6>
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                    <div class="single-box">
                                        <div class="img-area"><img src="member6.jpg" class="d-block w-100" alt="..."></div>
                                            <div class="img-text">
                                                <h1>DAVID</h1>
                                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel saepe ab accusantium, amet fugit magnam, iure veniam libero doloremque iste velit. Totam magnam illum reiciendis doloribus modi nostrum. Laudantium, ab.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="/member5.jpg" class="d-block w-100" alt="..."></div>
                                                <div class="img-text">
                                                    <h1>PRITAM</h1>
                                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel saepe ab accusantium, amet fugit magnam, iure veniam libero doloremque iste velit. Totam magnam illum reiciendis doloribus modi nostrum. Laudantium, ab.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="single-box">
                                                <div class="img-area"><img src="./member4.jpg" class="d-block w-100" alt="..."></div>
                                                    <div class="img-text">
                                                        <h1>DHRITI</h1>
                                                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel saepe ab accusantium, amet fugit magnam, iure veniam libero doloremque iste velit. Totam magnam illum reiciendis doloribus modi nostrum. Laudantium, ab.</p>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="./member1.jpg" class="d-block w-100" alt="..."></div>
                                                <div class="img-text">
                                                    <h1>KESHAV</h1>
                                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel saepe ab accusantium, amet fugit magnam, iure veniam libero doloremque iste velit. Totam magnam illum reiciendis doloribus modi nostrum. Laudantium, ab.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="single-box">
                                                <div class="img-area"><img src="./member2.jpg" class="d-block w-100" alt="..."></div>
                                                    <div class="img-text">
                                                        <h1>SUCHITRA</h1>
                                                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel saepe ab accusantium, amet fugit magnam, iure veniam libero doloremque iste velit. Totam magnam illum reiciendis doloribus modi nostrum. Laudantium, ab.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="single-box">
                                                    <div class="img-area"><img src="./member3.jpg" class="d-block w-100" alt="..."></div>
                                                        <div class="img-text">
                                                            <h1>KETAN</h1>
                                                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel saepe ab accusantium, amet fugit magnam, iure veniam libero doloremque iste velit. Totam magnam illum reiciendis doloribus modi nostrum. Laudantium, ab.</p>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                       </div>
                                     </div>    
                                </div> 
                             </div>
                        </div>
                     </div>

</div>
<div class="sticky-social">
  <ul class="social">
    <li class="fb "><a href="https://www.facebook.com/devilarya30/" target="_blank"><i class="fab fa-facebook fabu"aria-hidden="true"></i></a></li>
        <li class="twitter"><a href="https://twitter.com/MrX98340552" target="_blank"><i class="fab fa-twitter fabu"aria-hidden="true"></i></i></a></li>
      <li class="insta"><a href="https://www.instagram.com/_.pure_evil_/" target="_blank"><i class="fab fa-instagram fabu" aria-hidden="true"></i></a></li>
      <li class="pin"><a href="https://in.pinterest.com/ketanarya9999/" target="_blank"><i class="fab fa-pinterest-p fabu" aria-hidden="true"></i></a></li>
      <li class="linkedin"><a href="https://www.linkedin.com/in/keshav-arya-7546671a0//" target="_blank"><i class="fab fa-linkedin fabu" aria-hidden="true"></i></a></li>
    </ul>
  </div>
</div>
</div>
<!--about-->

<div class="about" id="about" >
  <div class="container-fluid" id="ketab">
  <h2 class="section-heading" style="margin-top: 5%; font-family: 'Dancing Script', cursive; text-align: center; font-size:50px; " >ABOUT ME</h2>
  <div class="row kest">
    <div class="col about__details">
  <p id="yes" >
    There’s nothing cutout about ‘PUZZELS’ . Not our pizzas. Not our kin and our sandwiches. Also, unquestionably not the manner in which we live. Around here, we don’t make due with anything short of food we’re glad to serve. Furthermore, we don’t simply check in. Not when we can likewise turn into our best, make companions, and have some good times while we’re grinding away. We’re the fast food  organization that lives unpacked.<br>
    
    WHERE WE COME FROM<br><br>
    
    In 1958, two friends acquire some money from their mother to open a small eatery put in Wichita, Kansas. They named it ‘PUZZELS’ , in light of the fact that their sign just had space for eight letters. How significant!<br>
    
    FOR THE LOVE OF PIZZA SINCE 1958<br><br>
    
    From the very first moment, the friends could look at their clients without flinching and guarantee them the best food around the local area — in light of the fact that they knew the ranchers who developed the fixings, and they realized those agriculturists thought about quality.</p></div>
    <div class="col about__image">
      <img src="./images/potrat.jpg" alt="" />
    </div>
  </div>
  </div>
  </div>
  <div class="container">
    <div class="row">
      
    <H3 style="text-align: center; margin-bottom: 1%; margin-top: 5%; font-family: 'Dancing Script', cursive; text-align: center; font-size:40px; color: rgb(14, 8, 8);position: relative; display: flex;">"OH....IN CASE YOU WONDERING WHY PUZZEL....THAT'S THE PUZZEL MY LOVE"</H3>

  
  <section class="team">
        <h2 class="section-heading" style="color: black;">My Team</h2>
        <div class="container" id="container">
          <div class="profile">
            <img src="member1.jpg" alt=""/><span class="name">Kalyan</span>
          </div>
          <div class="profile">
            <img src="member2.jpg" alt=""/><span class="name">Suchitra Tiwari</span>
          </div>
          <div class="profile">
            <img src="member3.jpg" alt=""/><span class="name">Sajid Ghani</span>
          </div>
          <div class="profile">
            <img src="member4.jpg" alt=""/><span class="name">Dhriti</span>
          </div>
          <div class="profile">
            <img src="member5.jpg" alt=""/><span class="name">Milind</span>
          </div>
          <div class="profile">
            <img src="member6.jpg" alt=""/><span class="name">Srikant Tiwari</span>
          </div>
          <div class="profile">
            <img src="member7.jpg" alt=""/><span class="name">Major Sameer</span>
          </div>
        </div>
     </section>
   </
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>
</html>