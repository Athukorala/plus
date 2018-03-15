<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <title>miniPaint - image editor</title>
    <meta name="description" content="miniPaint is free online image editor using HTML5. Edit, adjust your images, add effects online in your browser, without installing anything..." />
    <meta name="keywords" content="photo, image, picture, transparent, layers, free, edit, html5, canvas, javascript, online, photoshop, gimp, effects, sharpen, blur, magic wand tool, clone tool, rotate, resize, photoshop online, online tools, tilt shift, sprites, keypoints" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="images/favicon.png?v2" />
    <!-- Google -->
    <meta itemprop="name" content="miniPaint" />
    <meta itemprop="description" content="miniPaint is free online image editor using HTML5. Edit, adjust your images, add effects online in your browser, without installing anything..." />
    <meta itemprop="image" content="http://viliusle.github.io/miniPaint/images/preview.jpg" />
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="miniPaint" />
    <meta name="twitter:description" content="miniPaint is free online image editor using HTML5. Edit, adjust your images, add effects online in your browser, without installing anything..." />
    <meta name="twitter:image" content="http://viliusle.github.io/miniPaint/images/preview.jpg" />
    <meta name="twitter:image:alt" content="miniPaint is free online image editor using HTML5. Edit, adjust your images, add effects online in your browser, without installing anything..." />
    <!-- Facebook, Pinterest -->
    <meta property="og:title" content="miniPaint" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://viliusle.github.io/miniPaint/" />
    <meta property="og:image" content="http://viliusle.github.io/miniPaint/images/preview.jpg" />
    <meta property="og:description" content="miniPaint is free online image editor using HTML5. Edit, adjust your images, add effects online in your browser, without installing anything..." />
    <meta property="og:site_name" content="miniPaint" />

    <script src="dist/bundle.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body  background="img/bluer.jpg" >
<div class="wrapper">

    <div class="submenu" style="background-color:darkgray;">
        <a class="logo" href="">Ceyentra paint - Create Ads   <a class="nav-link" href="share_screenshot.php"><i style="position:relative;left: 1050px"  class="fa fa-chevron-right" aria-hidden="true"></i></a>     </a>
        <div class="block attributes" id="action_attributes"></div>
        <div class="clear"></div>
    </div>

    <div class="sidebar_left" id="tools_container"></div>

    <div class="main_wrapper" id="main_wrapper">
        <div class="canvas_wrapper" id="canvas_wrapper">
            <div id="mouse"></div>
            <div class="transparent-grid" id="canvas_minipaint_background"></div>
            <canvas id="canvas_minipaint">
                <div class="trn error">
                    Your browser does not support canvas or JavaScript is not enabled.
                </div>
            </canvas>
        </div>
    </div>

    <div class="sidebar_right">
        <div class="preview block">
            <h2 class="trn toggle" data-target="toggle_preview">Preview</h2>
            <div id="toggle_preview"></div>
        </div>

        <div class="colors block">
            <h2 class="trn toggle" data-target="toggle_colors">Colors</h2>
            <input
                title="Click to change color"
                type="color"
                class="color_area"
                id="main_color"
                value="#0000ff"	/>
            <div class="content" id="toggle_colors"></div>
        </div>

        <div class="block" id="info_base">
            <h2 class="trn toggle toggle-full" data-target="toggle_info">Information</h2>
            <div class="content" id="toggle_info"></div>
        </div>

        <div class="details block" id="details_base">
            <h2 class="trn toggle toggle-full" data-target="toggle_details">Layer details</h2>
            <div class="content" id="toggle_details"></div>
        </div>

        <div class="layers block">
            <h2 class="trn">Layers</h2>
            <div class="content" id="layers_base"></div>
        </div>
    </div>
</div>
<div class="mobile_menu">
    <button class="right_mobile_menu" id="mobile_menu_button" type="button"></button>
</div>
<div class="ddsmoothmenu" id="main_menu">

</div>
<div class="hidden" id="tmp"></div>
<div id="popup" style="position: relative;stop: 60px"></div>

<nav style="position:fixed;height: 58px;bottom: 0;width: 100%;" id="navBar1" class="navbar navbar-expand-md navbar-dark fixed-bottom bg-dark" >

    <a class="navbar-brand" style="color: white;font-size: 14px">Product Listing Policy - Intellectual Property Policy and Infringement Claims - Privacy Policy - Terms of Use - Law Enforcement Compliance Guide - Safety & Security Center
    </a>
    <h2 style="font-size: 18px" id="footer-title">Ceyentra Technologies</h2>
</nav>
<script src="js/script.js"></script>
</body>
</html>
