<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" defer></script>
    <script src="dist/js/bootstrap-checkbox.min.js" defer></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

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


    <!------ 1st page ---------->

    <div id="nextStep" class="mainbox col-md-176 col-md-offset-173 col-sm-8 col-sm-offset-2" style="width: 750px;position: relative; left: 10px;">

        <h4 style="position:relative;right: 100px;height:31px;width: 960px;background-color: #584d39;border-radius: 32px;color: white; text-align: center">Hey , What kind of content you would like promote ? Please select your choices...</h4><br>


        <li class="list-group-item" style="left: 50px">
            Traveling
            <div class="material-switch pull-right">
                <input id="someSwitchOptionPrimary" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionPrimary" class="label-primary"></label>
            </div>
        </li>
        <li class="list-group-item" style="left: 50px">
            Technology
            <div class="material-switch pull-right">
                <input id="someSwitchOptionSuccess" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionSuccess" class="label-success"></label>
            </div>
        </li>
        <li class="list-group-item" style="left: 50px">
            Entertainment
            <div class="material-switch pull-right">
                <input id="someSwitchOptionInfo" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionInfo" class="label-info"></label>
            </div>
        </li>
        <li class="list-group-item" style="left: 50px">
            Education
            <div class="material-switch pull-right">
                <input id="someSwitchOptionWarning" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionWarning" class="label-warning"></label>
            </div>
        </li>
        <li class="list-group-item" style="left: 50px">
            Shoping
            <div class="material-switch pull-right">
                <input id="someSwitchOptionDanger" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionDanger" class="label-danger"></label>
            </div>
        </li>

        <li class="list-group-item" style="left: 50px">
            Foods
            <div class="material-switch pull-right">
                <input id="someSwitchOptionDanger1" name="someSwitchOption001" type="checkbox"/>
                <label for="someSwitchOptionDanger1" class="label-info"></label>
            </div>
        </li>



    </div>

<!--    ============ page below ==============-->

    <div id="socialMedia" class="mainbox col-md-176 col-md-offset-173 col-sm-8 col-sm-offset-2" style="position: relative; left: 10px; width: 650px">
       <div class="row">
           <div class="col-sm-12">
               <center><h4 style="position:relative;height:31px;left: 60px;width: 480px;background-color: #584d39;border-radius: 32px;color: white; text-align: center"><span style="color: white">Hey ,</span> Select your choice of network ...</h4><br></center>
           </div>
       </div>
            <div class="input-group">
                <div class="checkbox" style="position: relative;left: 60px">
                    <center>

                    <label>

                        <a class="fa fa-facebook" style="background-color: #7addff; font-size: 20px;border-radius: 10px;margin-top: 10px"></a>
                        <input id="login-remember" type="checkbox" name="fb" value="1">

                    </label>

                    <label>

                        <a class="fa fa-youtube" style="background-color: #55ACEE; font-size: 20px;border-radius: 10px;margin-top: 10px"></a>
                        <input id="login-remember" type="checkbox" name="fb" value="1">

                    </label>

                    <label>

                        <a class="fa fa-twitter" style="background-color:  #7addff; font-size: 20px ;border-radius: 10px;margin-top: 10px"></a>
                        <input id="login-remember" type="checkbox" name="fb" value="1">

                    </label>

                    <label>

                        <a class="fa fa-linkedin" style="background-color: #55ACEE; font-size: 20px;border-radius: 10px;margin-top: 10px"></a>
                        <input id="login-remember" type="checkbox" name="fb" value="1">

                    </label>


                    <label>

                        <a class="fa fa-instagram" style="background-color:  #7addff; font-size: 20px;border-radius: 10px;margin-top: 10px"></a>
                        <input id="login-remember" type="checkbox" name="fb" value="1">

                    </label>
                    </center>

                </div>
            </div>

            <div style="margin-top:10px;position: relative; left: 10px" class="form-group">
                <!-- Button -->

                <div class="col-sm-12 controls" style="position: relative;bottom:62px; left: 640px;width: 280px">
                    <a href="#" onClick="$('#socialMedia').hide(); $('#nextStep').hide();$('#searchUsers').show()"><button type="button" class="btn btn-primary">&nbsp&nbsp&nbsp Search users &nbsp&nbsp&nbsp </button></a>
                    <a href="advertiser_login.php"><button id="btn-back" type="button" class="btn btn-danger">&nbsp&nbsp&nbsp Back &nbsp&nbsp&nbsp</button></a>
                </div>


            </div>
    </div>

<!--    ========================       search users        =====================-->
    <div id="searchUsers" class="mainbox col-md-176 col-md-offset-173 col-sm-8 col-sm-offset-2" style="display:none;position: relative; left: 10px; width: 650px">
        <div class="row">
            <div class="col-sm-12">
<!--                <h4 style="position:relative;height:31px;right: 300px;width: 690px;background-color: #584d39;border-radius: 32px;color: white; text-align: center">You are searching in <span style="color: red"> Facebook</span> to post a message about <span style="color: red"> Food</span>  ...</h4><br>-->
                <h4 style="position:relative;height:31px;right: 350px;width: 690px;color: white; text-align: center"><i class="fa fa-star"></i>You are searching in <span style="color: red"> Facebook</span> to post a message about <span style="color: red"> Food</span>  ...</h4><br>
            </div>
        </div>
        <div class="input-group">
            <table class="table table-hover table-light" style="position:relative;width: 900px; right: 100px">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Photo</th>
                    <th style="width: 300px" scope="col">Social media</th>
                    <th style="width: 1000px" scope="col">Description</th>
                    <th style="width: 700px"scope="col">&nbsp&nbsp Rating</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><img src="img/user.png" width="80px" height="80px"></a></td>
                    <td><span style="color: blue"><u>Facebook</u><br><u>Youtube</u><br><u>Twitter</u></span> </td>
                    <td><b>Demi Lovato</b> <br> $29 for two tweets and one facebook post Approximated reach - 200 impressions</td>
                    <td><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><img src="img/user.png" width="80px" height="80px"></a></td>
                    <td><span style="color: blue"><u>Facebook</u></span> </td>
                    <td><b>Selena Gomez</b> <br> $15 for two tweets and one facebook post Approximated reach - 200 impressions </td>
                    <td><i class="fa fa-star"></i></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><img  src="img/user.png" width="80px" height="80px"></a></td>
                    <td><span style="color: blue"><u>Facebook</u><br><u>Linkedin</u></span> </td>
                    <td><b>Tupac Shakur.</b> <br> $7 for two tweets and one facebook post Approximated reach - 200 impressions </td>
                    <td><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div style="margin-top:10px;position: relative; left: 10px" class="form-group">
            <!-- Button -->

            <div class="col-sm-12 controls" style="position: relative;bottom:62px; left: 640px;width: 250px">
                <a href="#" onClick="$('#socialMedia').hide(); $('#nextStep').show()"><button type="button" class="btn btn-primary">Next step</button></a>
                <a href="#" onClick="$('#socialMedia').show(); $('#nextStep').show();$('#searchUsers').hide()"><button id="btn-back" type="button" class="btn btn-danger">&nbsp&nbsp&nbsp Back &nbsp&nbsp&nbsp</button></a>
            </div>


        </div>
    </div>





    </div>



<?php
include "halfFooter.php";
?>
</body>
</html>