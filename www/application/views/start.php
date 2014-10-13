<!DOCTYPE html>
<html lang="en">
<head>
<title>Site photographer</title>
<meta charset="utf-8">
    
    <?php foreach($styles as $style): ?>
<link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" 
rel="stylesheet" type="text/css" />
<?php endforeach; ?>
    
    <?php foreach($scripts as $script) { 
    echo HTML::script($script, NULL, TRUE), "\n"; }?>

</head>
<body id="page1">
<!--==============================header=================================-->
<header>
  <div class="main">
    <h1> <a href="<?php echo URL::site(); ?>">Site photographer</a> <em>Сторінки наших весіль</em> </h1>
  </div>
  <div class="menu-row">
    <div class="main">
      <div class="container_12">
        <div class="wrapper">
          <div class="grid_12">
            <nav>
              <ul class="menu">
                <li><a class="active" href="<?php echo URL::site(); ?>">Про нас</a></li>
                <li><a href="<?php echo URL::site('page/weddin'); ?>">Весілля</a></li>
                <li><a href="<?php echo URL::site('page/album'); ?>">Альбоми</a></li>
            <!--    <li><a href="<?php echo URL::site('page/links'); ?>">Посилання</a></li> -->
                <li><a href="<?php echo URL::site('page/register'); ?>">Реєстрація</a></li>
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
          <li> <img src="../../public/images/slider-img1.jpg" alt=""> </li>
          <li> <img src="../../public/images/slider-img2.jpg" alt=""> </li>
          <li> <img src="../../public/images/slider-img3.jpg" alt=""> </li>
        </ul>
      </div>
    </div>
  </div>
</header>
<!--==============================content================================-->
    
        <div id="content">
        <?php echo $content; ?>
        </div>
    

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
        <div class="grid_5"> <span class="footer-text"> <span>Copyright &copy; <a href="#">Doma</a></span> </div>
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
