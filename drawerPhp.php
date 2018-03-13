<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<!--    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <style>
        @import url('https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700');
        @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
        .row-section{float:left; width:100%; background: #42275a;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #734b6d, #42275a);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #734b6d, #42275a); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        .row-section h2{float:left; width:100%; color:#fff; margin-bottom:30px; font-size: 14px;}
        .row-section h2 span{font-family: 'Libre Baskerville', serif; display:block; font-size:45px; text-transform:none; margin-bottom:20px; margin-top:30px;font-weight:700;}
        .row-section h2 a{color:#d2abce;}
        .row-section .row-block{background:#fff; padding:20px; margin-bottom:50px;}
        .row-section .row-block ul{margin:0; padding:0;}
        .row-section .row-block ul li{list-style:none; margin-bottom:20px;}
        .row-section .row-block ul li:last-child{margin-bottom:0;}
        .row-section .row-block ul li:hover{cursor:grabbing;}
        .row-section .row-block .media{border:1px solid #d5dbdd; padding:5px 20px; border-radius: 5px; box-shadow:0px 2px 1px rgba(0,0,0,0.04); background:#fff;}
        .row-section .media .media-left img{width:75px;}
        .row-section .media .media-body p{padding: 0 15px; font-size:14px;}
        .row-section .media .media-body h4 {color: #6b456a; font-size: 18px; font-weight: 600; margin-bottom: 0; padding-left: 14px; margin-top:12px;}
        .btn-default{background:#6B456A; color:#fff; border-radius:30px; border:none; font-size:16px;}

    </style>
    <!--<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>-->

</head>
<nav style="position:fixed" id="navBar" class="navbar navbar-expand-md navbar-dark fixed-top bg-light" >
    <a class="navbar-brand" style="color: midnightblue">Ceyentra Plus</a><i class="far fa-comment-alt"></i><a class="nav-link" href="index.php"> <i style="position:relative;left: 1120px" class="fa fa-home fa-1x"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


</nav>

<body ng-app="mymodal" background="img/bluer.jpg" >
<div id="mySidenav" class="sidenav" style="background-image: url('img/bluer.jpg')">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

<!--    ====-->
    <div class="col-md-10 offset-md-1" style="background-color: #ccb39a;border-radius: 15px;opacity: 0.9">
        <ul id="sortable">
            <li><div class="media" style="color: black">
                    <div class="media-left align-self-center">
                        <img class="rounded-circle" src="img/mine/1.jpg" style="width: 85px;height: 85px">
                    </div>
                    <div class="media-body">
                        <p>Request from Denver simonz is pending... </p><br>
                        </div>
                    <div class="media-right align-self-center">
                        <a href="#" class="btn btn-default">Accept</a>
                    </div>
                </div></li>
            <br>
            <li><div class="media" style="color: black">
                    <div class="media-left align-self-center">
                        <img class="rounded-circle" src="img/mine/2.jpg" style="width: 85px;height: 85px">
                    </div>
                    <div class="media-body">
                        <p>Request from Vidurajith Darshana is pending... </p><br>
                    </div>
                    <div class="media-right align-self-center">
                        <a href="#" class="btn btn-default">Accept</a>
                    </div>
                </div></li>
            <br>
            <li><div class="media" style="color: black">
                    <div class="media-left align-self-center">
                        <img class="rounded-circle" src="img/mine/3.jpg" style="width: 85px;height: 85px;rotation: 90deg">
                    </div>
                    <div class="media-body">
                        <p>Request from Sandun Dilahan is pending... </p><br>
                    </div>
                    <div class="media-right align-self-center">
                        <a href="#" class="btn btn-default">Accept</a>
                    </div>
                </div></li>
            <br>
            <li><div class="media" style="color: black">
                    <div class="media-left align-self-center">
                        <img class="rounded-circle" src="img/mine/4.jpg" style="width: 85px;height: 85px">
                    </div>
                    <div class="media-body">
                        <p>Request from Binura Salinda is pending... </p>
                    </div>
                    <div class="media-right align-self-center">
                        <a href="#" class="btn btn-default">Accept</a>
                    </div>
                </div></li>
            <br>
            <li><div class="media" style="color: black">
                    <div class="media-left align-self-center">
                        <img class="rounded-circle" src="img/mine/5.jpg" style="width: 85px;height: 85px">
                    </div>
                    <div class="media-body">
                        <p>Request from Janitha Dananjaya is pending... </p><br>
                    </div>
                    <div class="media-right align-self-center">
                        <a href="#" class="btn btn-default">Accept</a>
                    </div>
                </div></li>



        </ul>
    </div>

</div>


<span style="position:relative;top:50px;left:1100px;font-size:30px;cursor:pointer;" onclick="openNav()"><span style="font-size:17px;background-color: sandybrown;border-radius: 15px;width: 150px;height: 50px">	&nbsp;	&nbsp;5 unread request...	&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></span></span>

<div class="container" style="position:relative;right: 95px">
        <div class="col-sm-2 col-md-2">
            <img src="img/me.jpg"
                 alt="" class="img-rounded img-responsive" style="width: 177px;border-radius: 15px"/>
        </div>
        <div class="col-sm-4 col-md-4" style="color: white">
            <blockquote>
                <p>Tharindu Dananjaya Athukorala</p> <small><cite title="Source Title">Koholana, Kaluthara south  <i class="glyphicon glyphicon-map-marker"></i></cite></small>
            </blockquote>
            <p> <i class="glyphicon glyphicon-envelope"></i> tharindud@ceyentra.com
                <br/> <i class="glyphicon glyphicon-globe"></i> www.ceyentra.com
                <br /> <i class="glyphicon glyphicon-gift"></i> September 19, 1996</p>
        </div>

    </div>

        <center><div style="position: relative;width: 700px;bottom: 320px;background-color: white;height: 500px;border-radius: 16px">

        </div>
        </center>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "1350px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
</body>

<?php
    include 'footer.php';
    ?>


