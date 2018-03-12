
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" defer></script>
    <script src="dist/js/bootstrap-checkbox.min.js" defer></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
<!--    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/checkBox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>-->

</head>
<nav style="position:fixed ; height: 38px;"id="navBar" class="navbar navbar-expand-md navbar-dark fixed-top bg-light" >
    <a class="navbar-brand" style="position:relative; height:30px;color: midnightblue;top: -12px">Ceyentra Plus</a><i class="far fa-comment-alt"></i><a class="nav-link" href="index.php"> <i style="position:relative;left: 1100px" class="fa fa-home fa-2x"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


</nav>

<body ng-app="mymodal" background="img/bluer.jpg" >
<div class="container" style="position: relative; top: 50px" >


    <!------ Include the above in your HEAD tag ---------->



    <div id="socialMedia" class="mainbox col-md-176 col-md-offset-173 col-sm-8 col-sm-offset-2" style="position: relative; left: 10px; width: 650px">
        <h4 style="position:relative;left: 40px;width: 680px;height:31px;background-color: #584d39;border-radius: 32px;color: white; text-align: center">Hey , please enter your social media account addresses...</h4><br><br>
        <center>
        <div class="form-group row" style="position: relative;left: 80px">
            <a href="#" class="fa fa-facebook"></a>
            <div class="col-10">
                <input class="form-control" type="search" placeholder="Enter your facebook account" id="txtFb">
            </div>
           </div>

        <div class="form-group row" style="position: relative;left: 80px">
            <a href="#" class="fa fa-youtube"></a>
            <div class="col-10">
                <input class="form-control" type="search" placeholder="Enter your youtube account" id="txtFb">
            </div>
        </div>

        <div class="form-group row" style="position: relative;left: 80px">
            <a href="#" class="fa fa-twitter"></a>
            <div class="col-10">
                <input class="form-control" type="search" placeholder="Enter your twitter account" id="txtFb">
            </div>
        </div>

        <div class="form-group row" style="position: relative;left: 80px">
            <a href="#" class="fa fa-linkedin"></a>
            <div class="col-10">
                <input class="form-control" type="search" placeholder="Enter your linkedin account" id="txtFb">
            </div>
        </div>


        <div class="form-group row" style="position: relative;left: 80px">
            <a href="#" class="fa fa-instagram"></a>
            <div class="col-10">
                <input class="form-control" type="search" placeholder="Enter your instagram account" id="txtFb">
            </div>
        </div>


            <div style="margin-top:10px;position: relative; left: 100px" class="form-group">
                <!-- Button -->

                <div class="col-sm-12 controls">
                    <a href="#" onClick="$('#socialMedia').hide(); $('#nextStep').show()"><button type="button" class="btn btn-primary">Next step</button></a>
                        <a href="index.php"><button id="btn-back" type="button" class="btn btn-danger">&nbsp&nbsp&nbsp Back &nbsp&nbsp&nbsp</button></a>
                </div>


                </div>
            </div>


<!--        <div >-->
<!--            <a href="#" onClick="$('#socialMedia').hide(); $('#nextStep').show()"><button type="button" class="btn btn-primary">Next step</button></a>-->
<!--        </div>-->
<!--        </center>-->





    <div id="nextStep" class="mainbox col-md-176 col-md-offset-173 col-sm-8 col-sm-offset-2" style="width: 750px;position: relative; left: 10px;display:none;">

        <h4 style="position:relative;left: -115px;width: 920px;height:31px;background-color: #584d39;border-radius: 32px;color: white; text-align: center">Hey , What kind of content you would like promote ? Please select your choices...</h4><br>

<!--        ==================-->
        <form class="form-horizontal" style="position: relative;left: 124px">
            <div class="form-group" >
               <span class="control-label col-sm-5" style="text-align: left; font-size: 16.5px"> Please enter your postcode</span>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="postcode" placeholder="postcode">
                </div>
            </div>
            <div class="form-group">
                <span class="control-label col-sm-5" for="email" style="text-align: left; font-size: 16.5px">Do you have a website? please enter</span>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="website" placeholder="www.ceyentra.com">
                </div>
            </div>

        </form>


        <li class="list-group-item">
            Traveling
            <div class="material-switch pull-right">
                <input id="someSwitchOptionPrimary" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionPrimary" class="label-primary"></label>
            </div>
        </li>
        <li class="list-group-item" style="left: 0px">
            Technology
            <div class="material-switch pull-right">
                <input id="someSwitchOptionSuccess" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionSuccess" class="label-success"></label>
            </div>
        </li>
        <li class="list-group-item" style="left: 0px">
            Entertainment
            <div class="material-switch pull-right">
                <input id="someSwitchOptionInfo" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionInfo" class="label-info"></label>
            </div>
        </li>
        <li class="list-group-item" style="left: 0px">
            Education
            <div class="material-switch pull-right">
                <input id="someSwitchOptionWarning" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionWarning" class="label-warning"></label>
            </div>
        </li>
        <li class="list-group-item" style="left: 0px">
            Shoping
            <div class="material-switch pull-right">
                <input id="someSwitchOptionDanger" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionDanger" class="label-danger"></label>
            </div>
        </li>

        <li class="list-group-item" style="left: 0px">
            Foods
            <div class="material-switch pull-right">
                <input id="someSwitchOptionDanger1" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionDanger1" class="label-info"></label>
            </div>
        </li>





        <div style="margin-top:10px" class="form-group">
            <!-- Button -->

            <div class="col-sm-12 controls" style="position: relative;left:500px; width: 300px">
                <a id="btn-login" href="#" class="btn btn-success">&nbsp&nbsp&nbsp Save &nbsp&nbsp&nbsp</a>
                    <a href="#" onClick="$('#nextStep').hide(); $('#socialMedia').show()"><button id="btn-back" type="button" class="btn btn-danger">&nbsp&nbsp&nbsp Back &nbsp&nbsp&nbsp</button></a>

            </div>
        </div>


</div>
</div>



<?php
    include "halfFooter.php";
?>
</body>
</html>
