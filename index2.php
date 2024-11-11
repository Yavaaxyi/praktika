<?php
require_once('db.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EcoMake</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/otzivi.css">
    <link rel="stylesheet" href="CSS/slidernovinok.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
  </head>
  <body>
    <!-- шапка -->
    <header>
      <div class="container d-flex flex-wrap justify-content-center">        
        <form class=" col-lg-auto mb-4 mb-lg-3" style="margin-top: auto; margin-right: auto;"  role="search">
          <input type="search" class="form-control" placeholder="Поиск по товарам" aria-label="Search">
        </form>
        <a href="index.php" class=" d-flex align-items-center link-body-emphasis text-decoration-none" style="margin: auto;">
          <span class="fs-4"><img src="images/productcardsphoto/em.png" width="90"></span>
        </a>
        <ul class="nav" style="margin-left: auto;">
          <a href="index.php"><li class="nav-item nav-link "><img src="images/User_alt.png" alt="" width="30" height="30" style="cursor: pointer;"></li></a>
          <li class="nav-item"><a href="cart.html" class="nav-link link-body-emphasis px-2"><img src="images/Basket_alt_3_fill.png" width="30" height="30" style="cursor: pointer;"></a></li>
        </ul>

      </div>
    </header>
    <nav class="bg-body-tertiary border-bottom">
      <div class="container d-flex flex-wrap">
        <ul class="nav me-auto" style="margin: auto;">
          <li class="nav-item"><a href="index.php" class="nav-link link-body-emphasis px-4 active" aria-current="page" ><p>ГЛАВНАЯ</p></a></li>
          <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-4"><p>НОВИНКИ</p></a></li>
          <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-4"><p>МАКИЯЖ</p></a></li>
          <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-4"><p>ЛИЦО</p></a></li>
          <li class="nav-item"><a href="tovari.html" class="nav-link link-body-emphasis px-4"><p>ПРОДУКЦИЯ</p></a></li>
          <li class="nav-item"><a href="About_company.html" class="nav-link link-body-emphasis px-4"><p>О НАС</p></a></li>
          <li class="nav-item"><a href="delivery.html" class="nav-link link-body-emphasis px-4"><p>ДОСТАВКА И ОПЛАТА</p></a></li>
          <li class="nav-item"><a href="contacts.html" class="nav-link link-body-emphasis px-4"><p>КОНТАКТЫ</p></a></li>
        </ul>
      </div>
    </nav>

        

        

      
      
        <!-- слайдер -->
      <!-- <div class="container"> -->
        <div class="container">
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/productcardsphoto/fon4.jpg" class=" w-100 h-100" height="550px" style="padding: -70px;" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/productcardsphoto/fonv22.jpg" class="d-block w-100 h-100" height="550px" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/productcardsphoto/fon23.jpg" class="d-block w-100 h-100" height="550px" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>


      

        <div class="container">

            <h2>Новинки</h2>
          <ul class="flex cards">
            <li>
              <h2>Тональная основа минеральная</h2>
              <a href="tonalnayaosnova.html"><img src="images/productcardsphoto/Тон_основа_01.webp" width="300px" height="300px"></a>
            </li>
            <li><h2>Тональная основа с кистью</h2>
              <a href="mineralnayatonalnayaosnova.html"><img src="images/productcardsphoto/Тональная_основа_с_кистью.webp" width="300px" height="300px"></a>
            </li>
            <li><h2>Тушь для ресниц укпрепление</h2>
              <a href="tushdlyaresnic.html"><img src="images/productcardsphoto/Тушь_для_ресниц_УКРЕПЛЕНИЕ_И_ОБЪЁМ.webp" width="300px" height="300px"></a>
            </li>
            <li><h2>Мининабор косметики</h2>
              <a href="mininaborkosmetiki.html"><img src="images/productcardsphoto/Мининабор_декоративной_косметики.webp" width="300px" height="300px"></a>
            </li>
            
          </ul>

          </div>

          <div class="container">

            <h1>Хиты</h1>
          <ul class="flex cards">
            <li>
              <h2>СЕТ «Восстановление и упругость»</h2>
              <a href="setvosstanovlenie.html"><img src="images/productcardsphoto/СЕТ_NEW_«Восстановление_и_упругость».webp" width="300px" height="300px"></a>
            </li>
            <li><h2>BB-крем минеральный</h2>
              <a href="bbcrem.html"><img src="images/productcardsphoto/01_ВВ_крем.webp" width="300px" height="300px"></a>
            </li>
            <li><h2>Воск для бровей питательный</h2>
              <a href="vosk.html"><img src="images/productcardsphoto/Воск_для_бровей.webp" width="300px" height="300px"></a>
            </li>
            <li><h2>Оттеночный бальзам для губ 2в1</h2>
              <a href="ottenichniybalzam.html"><img src="images/productcardsphoto/Бальзам_Вишневый_аметист(1).webp" width="300px" height="300px"></a>
            </li>
            
          </ul>

          </div>


        <!-- футер -->
        <footer class="border-top">
          <!-- <div class="footer"> -->
            <!--Content before waves-->
            <div class="inner-header flex">
              </div>
              
              <!--Waves Container-->
              <div>
                  <div class="row text-center">
                    <div class="col">
                      <div class="text-ex-tooltip">
                        <a href="#" target="_blank"><img class='footerimg rotate-img' src="images/telephone-fill.png" width="30" height="30">
                        <div class="tooltip-content">
                          <p>89110534491</p>
                        </div> </a>
                      </div>
                    </div>
                    <div class="col">
                      <div class="text-ex-tooltip">
                        <a href="#" target="_blank"><img class='footerimg rotate-img text-ex-tooltip' src="images/vk-social-network-logo.png" width="30" height="30" alt=""> 
                        <div class="tooltip-content">
                          <p>https://vk.com/bright.whitesmith</p>
                        </div> </a>
                      </div>
                    </div>
                    <div class="col">
                      <div class="text-ex-tooltip">
                      <a href="#" target="_blank"><img class='footerimg rotate-img text-ex-tooltip' src="images/telegram.png" width="30" height="30" alt="" >
                      <div class="tooltip-content">
                        <p>telegram</p>
                      </div></a>
                    </div>
                  </div>
                
                  <!-- <div class="col">
                    <ul class="nav">
                      <li class="nav-item mb-2"><a href="#" target="_blank"><img class='footerimg' src="images/telephone-fill.png" width="30" height="30"></a></li>
                      <li class="nav-item mb-2"><a href="#" target="_blank"><img class='footerimg' src="images/vk-social-network-logo.png" width="30" height="30" alt=""></a></li>
                      <li class="nav-item mb-2"><a href="#" target="_blank"><img class='footerimg' src="images/telegram.png" width="30" height="30" alt="" ></a></li>
                    </ul>
                  </div> -->


                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                  <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                  <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                  <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                  <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                  <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
              </svg>
            </div>
            <!--Waves end-->
            
          </div>
          <!--Header ends-->
          
          <!--Content starts-->
          <div class="content flex">
                    <ul class="nav">
                      <li class="nav-item mb-2 col-5"><a href="About_company.html" target='_blank'class="nav-link p-0 text-body-secondary">О компании</a></li>
                      <li class="nav-item mb-2 col-5"><a href="tovari.html" target='_blank'class="nav-link p-0 text-body-secondary">Продукция</a></li>
                      <li class="nav-item mb-2 col-2"><a href="contacts.html" target='_blank'class="nav-link p-0 text-body-secondary">Контакты</a></li>
                    </ul>

          </div>
          <!--Content ends-->
        </footer>
        <script src="JS/validation.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
        <script src="JS/header.js"></script>
        <script src="JS/otzivi.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      </body>
      </html>