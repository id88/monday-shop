<!DOCTYPE html>
<!--[if lt IE 9 ]> <html lang="en" dir="ltr" class="no-js ie-old"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" dir="ltr" class="no-js ie9"> <![endif]-->
<!--[if IE 10 ]> <html lang="en" dir="ltr" class="no-js ie10"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!-->
<html lang="en" dir="ltr" class="no-js">
<!--<![endif]-->
<head>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- META TAGS                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile specific meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- PAGE TITLE                                -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <title><?php echo $__env->yieldContent('title', '星期一 | 一个星期美好的开始'); ?></title>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- SEO METAS                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="description" content="星期一网上商城,专业的综合网上购物商城,销售家电、数码通讯、电脑、家居百货、服装服饰、母婴、图书、食品等品牌优质商品.便捷、诚信的服务，为您提供愉悦的网上购物体验!">
    <meta name="black friday, coupon, coupon codes, coupon theme, coupons, deal news, deals, discounts, ecommerce, friday deals, groupon, promo codes, responsive, shop, store coupons">
    <meta name="Keywords" content="网上购物,网上商城,网上买,购物网站,团购,安全购物,电子商务,打折" />

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- PAGE FAVICON                              -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="apple-touch-icon" href="<?php echo e(asset('assets/images/favicon/apple-touch-icon.png')); ?>">
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon/favicon.ico')); ?>'">

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- GOOGLE FONTS                              -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Include CSS Filess                        -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="<?php echo e(asset('assets/vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">

    <!-- Linearicons -->
    <link href="<?php echo e(asset('assets/vendors/linearicons/css/linearicons.css')); ?>" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="<?php echo e(asset('assets/vendors/owl-carousel/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendors/owl-carousel/owl.theme.min.css')); ?>" rel="stylesheet">

    <!-- Flex Slider -->
    <link href="<?php echo e(asset('assets/vendors/flexslider/flexslider.css')); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo e(asset('assets/css/base.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">

    <?php echo $__env->yieldContent('style'); ?>
</head>

<body id="body" class="wide-layout preloader-active">
<!--[if lt IE 9]>
<p class="browserupgrade alert-error">
    你用<strong>过时</strong>浏览器。请<a href="http://browsehappy.com/">升级您的浏览器</a>来提高你的经验。
</p>
<![endif]-->

<noscript>
    <div class="noscript alert-error">
        对于本网站有必要启用JavaScript的全部功能。这是
        <a href="http://www.enable-javascript.com/" target="_blank">
            说明如何启用JavaScript在Web浏览器中</a>.
    </div>
</noscript>

<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- 加载动画                                 -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- Preloader -->
<div id="preloader" class="preloader">
    <div class="loader-cube">
        <div class="loader-cube__item1 loader-cube__item"></div>
        <div class="loader-cube__item2 loader-cube__item"></div>
        <div class="loader-cube__item4 loader-cube__item"></div>
        <div class="loader-cube__item3 loader-cube__item"></div>
    </div>
</div>
<!-- End Preloader -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- WRAPPER                                   -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<div id="pageWrapper" class="page-wrapper">
    <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
    <?php echo $__env->make('layouts.shop.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->

        <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
    <?php echo $__env->yieldContent('main'); ?>
    <!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

    <?php echo $__env->make('layouts.shop.area', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- –––––––––––––––[ FOOTER ]––––––––––––––– -->
    <?php echo $__env->make('layouts.shop.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- –––––––––––––––[ END FOOTER ]––––––––––––––– -->

</div>
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- END WRAPPER                               -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->


<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- 回到顶部                                   -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<div id="backTop" class="back-top is-hidden-sm-down">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>

<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- SCRIPTS                                   -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->

<!-- (!) Placed at the end of the document so the pages load faster -->

<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- Initialize jQuery library                 -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<script src="<?php echo e(asset('assets/js/jquery-1.12.3.min.js')); ?>"></script>

<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- Latest compiled and minified Bootstrap    -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<script type="text/javascript" src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>

<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- JavaScript Plugins                        -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- (!) Include all compiled plugins (below), or include individual files as needed -->

<!-- Modernizer JS -->
<script src="<?php echo e(asset('assets/vendors/modernizr/modernizr-2.6.2.min.js')); ?>"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="<?php echo e(asset('assets/vendors/owl-carousel/owl.carousel.min.js')); ?>"></script>

<!-- FlexSlider -->
<script type="text/javascript" src="<?php echo e(asset('assets/vendors/flexslider/jquery.flexslider-min.js')); ?>"></script>

<!-- Coutdown -->
<script type="text/javascript" src="<?php echo e(asset('assets/vendors/countdown/jquery.countdown.js')); ?>"></script>

<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- Custom Template JavaScript                   -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<script type="text/javascript" src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

<?php echo $__env->yieldContent('script'); ?>
</body>

</html>

