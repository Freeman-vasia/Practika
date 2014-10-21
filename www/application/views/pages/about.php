<!DOCTYPE html>
<html lang="en">
<head>
<title>Laura John</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link href="http://fonts.googleapis.com/css?family=PT+Sans:400italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=PT+Sans:700" rel="stylesheet" type="text/css">
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<body id="page1">
<!--==============================header=================================-->
<header>
  <div class="main">
    <h1> <a href="index.html">LauraJohn</a> <em>Our wedding Page</em> </h1>
  </div>
  <div class="menu-row">
    <div class="main">
      <div class="container_12">
        <div class="wrapper">
          <div class="grid_12">
            <nav>
              <ul class="menu">
                <li><a class="active" href="index.html">Головна</a></li>
                <li><a href="wedding.html">Фотограф</a></li>
                <li><a href="album.html">Відеооператор</a></li>
                <li><a href="links.html">Особистий кабінет</a></li>
                <li><a href="contacts.html">Реєстрація</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="slider-wrapper">
      <div class="slider">
        <ul class="items">
          <li> <img src="images/slider-img1.jpg" alt=""> </li>
          <li> <img src="images/slider-img2.jpg" alt=""> </li>
          <li> <img src="images/slider-img3.jpg" alt=""> </li>
        </ul>
      </div>
    </div>
  </div>
</header>
<!--==============================content================================-->
<section id="content">
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <article class="grid_4">
          <div class="indent-right">
            <h2>Love Story</h2>
            
            <ul class="list-1 p2">
              <li><a href="#">Василь & Роксолана</a></li>
              <li><a href="#">Іван & Марія</a></li>
              <li><a href="#">Сергій & Юля</a></li>
              <li><a href="#">Роман & маша</a></li>
              <li><a href="#">Славік & Оля</a></li>
            </ul>
           </div>
        </article>
        <article class="grid_8">
          <div class="indent-left">
            <h2 class="indent-bot2">Фотографи</h2>
            <div class="wrapper p3">
              <figure class="img-indent">
                <p class="p1"><a href="#"><img class="img-border1" src="images/page1-img1.jpg" alt=""></a><span class="clear"></span></p>
                <span class="text-1">Олександр Ботвиновський</span> </figure>
              <div class="extra-wrap">
                <blockquote class="q1"> <span class="quote-marker1"></span>
                  <div class="quote-bot">
                    <div class="quote-top">
                      <div class="quote">
                        <div class="padding">
                          <p class="p2">Студія весільної фотографії Олександри Ботвиновського »- це творчий тандем чудових фотографів - Дмитра та Олександри. Наша творчість дуже тонко поєднує в собі любов до прекрасного і авангардність мислення, що дозволяє найкращим чином передати атмосферу весільного дня. Наш стиль можна описати як легка європейська фотографія, фотографія про любов, адже любов завжди в моді.</p>
                         </div>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>
            <div class="wrapper img-indent-bot">
              <figure class="img-indent-r">
                <p class="p1"><a href="#"><img class="img-border1" src="images/page1-img2.jpg" alt=""></a><span class="clear"></span></p>
                <div class="alignright"> <span class="text-1">Наталя Каблюк</span> </div>
              </figure>
              <div class="extra-wrap">
                <blockquote class="q2"> <span class="quote-marker2"></span>
                  <div class="quote-bot">
                    <div class="quote-top">
                      <div class="quote">
                        <div class="padding">
                          <p>Весільна фотосесія <br>
♥ Локації. Будь-яке місто України або Європи, теплі краї та регіони безвізового режиму для України :)
♥ Тривалість.  Можливі два варіанти фотозйомки вашого весілля. Від зборів нареченої до першого танцю або до кінця весілля. 
♥ Результат.  Біля 1000-1500 фотографій на оформленому диску в повному розмірі, коллажі та зменшені копії для інтернету. Всі фото обробляються :)
♥ Бонус. Передвесільна фотосесія(лавсторі) як подарунок від мене.</p>
                         </div>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>
            <a class="link-1" href="#">Read More</a> </div>
        </article>
      </div>
    </div>
  </div>
</section>
<!--==============================footer=================================-->
<footer>
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <div class="grid_3 suffix_3">
          <ul class="list-services">
            <li><a class="item-1" href="#"></a></li>
            <li><a class="item-2" href="#"></a></li>
            <li><a class="item-3" href="#"></a></li>
          </ul>
        </div>
        <div class="grid_5"> <span class="footer-text"> <span>Copyright &copy; Міша Дрогомирецький & Василь Церп'як</span></div>
      </div>
    </div>
  </div>
</footer>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        duration: 1000,
        easing: 'easeOutQuint',
        preset: 'slideDown',
        slideshow: 7000,
        banners: false,
        pauseOnHover: true,
        pagination: true,
        pagNums: false
    });
});
</script>
</body>
</html>
