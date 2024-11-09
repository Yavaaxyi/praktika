
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Регистрация</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
  </head>
  <body>
    
    <!-- шапка -->
    <header>
      <div class="container d-flex flex-wrap justify-content-center">        
        <form class=" col-lg-auto mb-4 mb-lg-3" style="margin-top: auto; margin-right: auto;"  role="search">
          <input type="search" class="form-control" placeholder="Поиск по товарам" aria-label="Search">
        </form>
        <a href="index.html" class=" d-flex align-items-center link-body-emphasis text-decoration-none" style="margin: auto;">
          <span class="fs-4"><img src="images/productcardsphoto/em.png" width="90"></span>
        </a>
        <ul class="nav" style="margin-left: auto;">
          <li class="nav-item"><a href="registration.html" class="nav-link link-body-emphasis px-2"><img src="images/User_alt.png" alt="" width="30" height="30"></a></li>
          <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2"><img src="images/love.png" alt="" width="30" height="30"></a></li>
          <li class="nav-item"><a href="korzina.html" class="nav-link link-body-emphasis px-2"><img src="images/Basket_alt_3_fill.png" width="30" height="30"></a></li>
        </ul>

      </div>
    </header>
    <nav class="bg-body-tertiary border-bottom">
      <div class="container d-flex flex-wrap">
        <ul class="nav me-auto" style="margin: auto;">
          <li class="nav-item"><a href="index.html" class="nav-link link-body-emphasis px-4"><p>ГЛАВНАЯ</p></a></li>
          <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-4"><p>НОВИНКИ</p></a></li>
          <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-4"><p>МАКИЯЖ</p></a></li>
          <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-4"><p>ЛИЦО</p></a></li>
          <li class="nav-item"><a href="tovari.html" class="nav-link link-body-emphasis px-4"><p>ПРОДУКЦИЯ</p></a></li>
          <li class="nav-item"><a href="About_company.html" class="nav-link link-body-emphasis px-4"><p>О НАС</p></a></li>
          <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-4"><p>ДОСТАВКА И ОПЛАТА</p></a></li>
          <li class="nav-item"><a href="contacts.html" class="nav-link link-body-emphasis px-4"><p>КОНТАКТЫ</p></a></li>
        </ul>
      </div>
    </nav>
    
      <!-- форма Регистрации -->
      <div class="container border text-center">
        <form>
          <div class="row mb-3">
            <label for="inputname" class="col-sm-2 col-form-label">Имя пользователя</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" id="inputname" placeholder="Имя пользователя">
          </div>
        </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
            <div class="col-sm-3">
              <input type="email" class="form-control" id="inputEmail3" placeholder="E-mail">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputtel" class="col-sm-2 col-form-label">Телефон</label>
            <div class="col-sm-3">
            <input type="tel" class="form-control" id="inputtel" placeholder="Телефон">
          </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Пароль</label>
            <div class="col-sm-3">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Пароль">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputconfirmPassword3" class="col-sm-2 col-form-label">Пароль</label>
            <div class="col-sm-3">
              <input type="password" class="form-control" id="confirminputPassword3" placeholder="Подтвердите пароль">
            </div>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="personalniedannie">
            <label class="form-check-label" for="personalniedannie">Разрешаю обработку персональных данных</label>
          </div>
          <a href="personal_account_dannie.html"><button type="button" class="btn btn-primary">Зарегистрироваться</button></a><br>
          <p>Уже зарегистрированы?<a class="btn" target="_blank" href="login.html">Войти</a></p>
        </form>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>