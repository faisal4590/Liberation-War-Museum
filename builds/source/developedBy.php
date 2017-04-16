<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/22/2017
 * Time: 11:42 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>All the KAMLAS</title>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="3D Thumbnail Hover Effects"/>
    <meta name="keywords" content="3d, 3dtransform, hover, effect, thumbnail, overlay, curved, folded"/>
    <meta name="author" content="Codrops"/>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/demo.css"/>
    <link rel="stylesheet" type="text/css" href="css/style_common.css"/>
    <link rel="stylesheet" type="text/css" href="css/style1.css"/>
    <link rel="stylesheet" href="css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet'
          type='text/css'/>
    <script type="text/javascript" src="js/modernizr.custom.69142.js"></script>
    <link rel="stylesheet" href="lightbox2/src/css/lightbox.css">
</head>
<body>

<?php
include "includes/header.php";
?>
<div class="container">

    <header>
        <div class="support-note"><!-- let's check browser support with modernizr -->
            <!--span class="no-cssanimations">CSS animations are not supported in your browser</span-->
            <span class="no-csstransforms">CSS transforms are not supported in your browser</span>
            <span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span>
            <span class="no-csstransitions">CSS transitions are not supported in your browser</span>
            <span class="note-ie">Sorry, only modern browsers.</span>
        </div>

    </header>

    <div id="grid" class="main" style="height:100%;">

        <div class="view span3 wow zoomInRight" data-wow-delay="0.35s"
             style="visibility: visible;
                            animation-delay: 0.35s; animation-name: zoomInRight;">
            <div class="view-back">
                <span>Faisal</span>
                <span>cse'15</span>
                <a href="https://github.com/faisal4590" style="text-decoration: none;">&rarr;</a>
            </div>
            <a href="images/mine1.jpg" rel="lightbox">cl</a>
            <img src="images/mine1.jpg"/>

        </div>
        <div class="view span3 wow rollIn" data-wow-delay="0.35s"
             style="visibility: visible;
                            animation-delay: 0.35s; animation-name: rollIn;">
            <div class="view-back">
                <span>Moin</span>
                <span>cse'15</span>
                <a href="https://www.facebook.com/moin.arty" style="text-decoration: none;">&rarr;</a>
            </div>
            <img src="images/moinNew11.jpg"/>
        </div>

        <div class="view span3 wow bounceInDown" data-wow-delay="0.35s"
             style="visibility: visible;
                            animation-delay: 0.35s; animation-name: bounceInDown;">
            <div class="view-back">
                <span>Diya</span>
                <span>cse'15</span>
                <a href="#" style="text-decoration: none;">&rarr;</a>
            </div>
            <img src="images/diya-new-1.jpg"/>
        </div>
        <div class="view span3 wow rotateInDownLeft" data-wow-delay="0.35s"
             style="visibility: visible;
                            animation-delay: 0.35s; animation-name: rotateInDownLeft;">
            <div class="view-back">
                <span>Abid</span>
                <span>cse'15</span>
                <a href="https://www.facebook.com/profile.php?id=100011006403442" style="text-decoration: none;">&rarr;</a>
            </div>
            <img src="images/abid-new1.jpg"/>
        </div>
        <div class="view span3 wow fadeInRightBig" data-wow-delay="0.35s"
             style="visibility: visible;
                            animation-delay: 0.35s; animation-name: fadeInRightBig;">
            <div class="view-back">
                <span>Nitu</span>
                <span>cse'15</span>
                <a href="https://www.facebook.com/nitu.rawnak" style="text-decoration: none;">&rarr;</a>
            </div>
            <img src="images/nitu-new1.jpg"/>
        </div>
    </div>
</div>

<?php
include "includes/footer.php";
?>

<script type="text/javascript">

    Modernizr.load({
        test: Modernizr.csstransforms3d && Modernizr.csstransitions,
        yep: ['http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js',
            'js/jquery.hoverfold.js'],
        nope: 'css/fallback.css',
        callback: function (url, result, key)
        {

            if (url === 'js/jquery.hoverfold.js')
            {
                $('#grid').hoverfold();
            }

        }
    });

</script>

<!--wow js script file-->
<script src="js/wow.js"></script>
<script>
    new WOW().init();
</script>


<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/moveToTop.js"></script>
<script src="lightbox2/src/js/lightbox.js"></script>
</body>
</html>