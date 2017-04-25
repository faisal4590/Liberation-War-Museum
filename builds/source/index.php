<?php
require_once('connection/connection.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liberation War Museum</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/preloader.css">

    <!--Linking necessary files for image hover effect-->
    <link rel="stylesheet" type="text/css" href="css/imageHoverStyle.css"/>
    <link rel="stylesheet" type="text/css" href="css/imageHoverStyle2.css"/>
    <link rel="stylesheet" type="text/css" href="css/imageHoverStyleFinal.css"/>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'/>
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet" type="text/css">
</head>
<body>
<!-- ---------------
				 Preloader Html-Markup
			---------------- -->
<div class="overlay" id="loader">
    <div class="loader">
        <hr/>
        <hr/>
        <hr/>
        <hr/>
    </div>
</div>
<!-- END -->


<?php
include('headerAdmin.php');
?>

<section class="background jumbotron" id="jumbotron">
    <?php include('includes/background.php'); ?>
</section>


<div class="containerForImageHover">
    <div id="showArea">
        <div class="allContainer">
            <div data-wow-delay="0.35s" class="span3 wow zoomInRight singleAreaContainer"
                 style="visibility: visible;
                            animation-delay: 0.35s; animation-name: zoomInRight;">
                <div class="viewImageHover view-tenthImageHover">
                    <img src="images/01300x200.jpg"/>
                    <div class="mask">
                        <h2>History</h2>
                        <span>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolor error mollitia odio
                            quia temporibus velit vitae? Beatae esse, placeat. Ab aliquid aspernatur dolore eaque pariatur
                            quae quidem quisquam voluptatum?
                        </span>
                    </div>
                </div>

                <div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolor error mollitia odio
                        quia temporibus velit vitae? Beatae esse, placeat. Ab aliquid aspernatur dolore eaque pariatur
                        quae quidem quisquam voluptatum?
                    </p>
                </div>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolor error mollitia odio
                        quia temporibus velit vitae? Beatae esse, placeat. Ab aliquid aspernatur dolore eaque pariatur
                        quae quidem quisquam voluptatum?
                    </p>
                </div>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolor error mollitia odio
                        quia temporibus velit vitae? Beatae esse, placeat. Ab aliquid aspernatur dolore eaque pariatur
                        quae quidem quisquam voluptatum?
                    </p>
                </div>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolor error mollitia odio
                        quia temporibus velit vitae? Beatae esse, placeat. Ab aliquid aspernatur dolore eaque pariatur
                        quae quidem quisquam voluptatum?
                    </p>
                </div>
            </div>

            <div data-wow-delay="0.35s" class="span3 wow rollIn singleAreaContainer" style="visibility: visible;
            animation-delay: 0.35s; animation-name: rollIn;clear: both">
                <div class="viewImageHover view-tenthImageHover">
                    <img src="images/03300x200.jpg"/>
                    <div class="mask">
                        <h2>History</h2>
                        <span>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolor error mollitia odio
                            quia temporibus velit vitae? Beatae esse, placeat. Ab aliquid aspernatur dolore eaque pariatur
                            quae quidem quisquam voluptatum?
                        </span>
                    </div>
                </div>

                <div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolor error mollitia odio
                        quia temporibus velit vitae? Beatae esse, placeat. Ab aliquid aspernatur dolore eaque pariatur
                        quae quidem quisquam voluptatum?
                    </p>
                </div>
            </div>


            <div data-wow-delay="1" class="span3 wow span3 wow bounceInDown center singleAreaContainer"
                 style="visibility: visible; animation-delay: 1s; animation-name: bounceInDown;clear: both">
                <div class="viewImageHover view-tenthImageHover">
                    <img src="images/04300x200.jpg"/>
                    <div class="mask">
                        <h2>History</h2>
                        <span>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolor error mollitia odio
                            quia temporibus velit vitae? Beatae esse, placeat. Ab aliquid aspernatur dolore eaque pariatur
                            quae quidem quisquam voluptatum?
                        </span>
                    </div>
                </div>

                <div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolor error mollitia odio
                        quia temporibus velit vitae? Beatae esse, placeat. Ab aliquid aspernatur dolore eaque pariatur
                        quae quidem quisquam voluptatum?
                    </p>
                </div>
            </div>


            <div data-wow-delay="0.35s" class="span3 wow zoomInRight singleAreaContainer"
            style="visibility: visible;
            animation-delay: 0.35s; animation-name: zoomInRight; clear: both;">
                <div class="viewImageHover view-tenthImageHover">
                    <img src="images/06300x200.jpg"/>
                    <div class="mask">
                        <h2>History</h2>
                        <span>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolor error mollitia odio
                            quia temporibus velit vitae? Beatae esse, placeat. Ab aliquid aspernatur dolore eaque pariatur
                            quae quidem quisquam voluptatum?
                        </span>
                    </div>
                </div>

                <div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolor error mollitia odio
                        quia temporibus velit vitae? Beatae esse, placeat. Ab aliquid aspernatur dolore eaque pariatur
                        quae quidem quisquam voluptatum?
                    </p>
                </div>
            </div>

            <div data-wow-delay="0.35s" class="span3 wow zoomInRight singleAreaContainer"
                 style="visibility: visible;
            animation-delay: 0.35s; animation-name: zoomInRight; clear: both;">
                <div class="viewImageHover view-tenthImageHover">
                    <img src="images/10300x200.jpg"/>
                    <div class="mask">
                        <h2>History</h2>
                        <span>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolor error mollitia odio
                            quia temporibus velit vitae? Beatae esse, placeat. Ab aliquid aspernatur dolore eaque pariatur
                            quae quidem quisquam voluptatum?
                        </span>
                    </div>
                </div>

                <div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolor error mollitia odio
                        quia temporibus velit vitae? Beatae esse, placeat. Ab aliquid aspernatur dolore eaque pariatur
                        quae quidem quisquam voluptatum?
                    </p>
                </div>
            </div>

        </div>

    </div>
</div>

<?php
include "includes/footer.php";
?>

<script src="js/script.js"></script>

<!-- Preloader Activation Js---->
<script type="text/javascript" src="js/preloader.js"></script>

<!--WOW js activator-->

<script src="js/wow.js"></script>
<script>
    new WOW().init();
</script>

<script src="js/moveToTop.js"></script>
</body>
</html>
