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
    <title>3D Thumbnail Hover Effects</title>
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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet'
          type='text/css'/>
    <script type="text/javascript" src="js/modernizr.custom.69142.js"></script>
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

        <div class="view">
            <div class="view-back">
                <span>Faisal</span>
                <span>cse'15</span>
                <a href="https://github.com/faisal4590" style="text-decoration: none;">&rarr;</a>
            </div>
            <img src="images/faisal.jpg"/>
           <!-- <div>
                <p>
                    faisal ibn aziz
                    faisal ibn aziz
                    faisal ibn aziz
                    faisal ibn azizfaisal ibn azizfaisal ibn aziz
                    faisal ibn aziz
                    faisal ibn azizvvvvvfaisal ibn aziz

                </p>
                <p>
                    faisal ibn aziz
                    faisal ibn aziz
                    faisal ibn aziz
                    faisal ibn azizfaisal ibn azizfaisal ibn aziz
                    faisal ibn aziz
                    faisal ibn azizvvvvvfaisal ibn aziz

                </p>
                <p>
                    faisal ibn aziz
                    faisal ibn aziz
                    faisal ibn aziz
                    faisal ibn azizfaisal ibn azizfaisal ibn aziz
                    faisal ibn aziz
                    faisal ibn azizvvvvvfaisal ibn aziz

                </p>
            </div>-->
        </div>
        <div class="view">
            <div class="view-back">
                <span>Moin</span>
                <span>cse'15</span>
                <a href="https://www.facebook.com/moin.arty" style="text-decoration: none;">&rarr;</a>
            </div>
            <img src="images/moin.jpg"/>
        </div>

        <div class="view">
            <div class="view-back">
                <span>Diya</span>
                <span>cse'15</span>
                <a href="#" style="text-decoration: none;">&rarr;</a>
            </div>
            <img src="images/diya.jpg"/>
        </div>
        <div class="view">
            <div class="view-back">
                <span>Abid</span>
                <span>cse'15</span>
                <a href="https://www.facebook.com/profile.php?id=100011006403442" style="text-decoration: none;">&rarr;</a>
            </div>
            <img src="images/abid.jpg"/>
        </div>
        <div class="view">
            <div class="view-back">
                <span>Nitu</span>
                <span>cse'15</span>
                <a href="https://www.facebook.com/nitu.rawnak" style="text-decoration: none;">&rarr;</a>
            </div>
            <img src="images/nitu.jpg"/>
        </div>
    </div>
</div>
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
</body>
</html>