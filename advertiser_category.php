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
    <link rel="stylesheet" href="css/style.css">

    <!--<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>-->

</head>
<nav style="position:fixed;background-color: rgba(254,208,117,0.29)" id="navBar" class="navbar navbar-expand-md navbar-dark fixed-top bg-pink" >
    <a class="navbar-brand" style="color: midnightblue"><span id="header-title">Ceyentra Plus &nbsp;</a><a class="nav-link" href="index.php"> <i style="position:relative;left: 1120px" class="fa fa-home fa-1x"></i></a>
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




                        <a class="fa fa-facebook" style="font-size: 25px;color: white"></a>
<!--                        <a class="fa fa-facebook" style="background-color: #7addff; font-size: 20px;border-radius: 10px;margin-top: 10px"></a>-->
                        <input id="login-remember" type="checkbox" name="fb" value="1">

                    </label>

                    <label>

                        <a class="fa fa-youtube" style="font-size: 25px;color: white"></a>
<!--                        <a class="fa fa-youtube" style="background-color: #55ACEE; font-size: 20px;border-radius: 10px;margin-top: 10px"></a>-->
                        <input id="login-remember" type="checkbox" name="fb" value="1">

                    </label>

                    <label>

<!--                        <a class="fa fa-twitter" style="background-color:  #7addff; font-size: 20px ;border-radius: 10px;margin-top: 10px"></a>-->
                        <a class="fa fa-twitter" style="font-size: 25px;color: white"></a>
                        <input id="login-remember" type="checkbox" name="fb" value="1">

                    </label>

                    <label>

<!--                        <a class="fa fa-linkedin" style="background-color: #55ACEE; font-size: 20px;border-radius: 10px;margin-top: 10px"></a>-->
                        <a class="fa fa-linkedin" style="font-size: 25px;color: white"></a>
                        <input id="login-remember" type="checkbox" name="fb" value="1">

                    </label>


                    <label>

<!--                        <a class="fa fa-instagram" style="background-color:  #7addff; font-size: 20px;border-radius: 10px;margin-top: 10px"></a>-->
                        <a class="fa fa-instagram" style="font-size: 25px;color: white"></a>
                        <input id="login-remember" type="checkbox" name="fb" value="1">

                    </label>
                    </center>

                </div>
            </div>

            <div style="margin-top:10px;position: relative; left: 10px" class="form-group">
                <!-- Button -->

                <div class="col-sm-12 controls" style="position: relative;bottom:62px; left: 640px;width: 280px">
                    <a href="#" onClick="$('#socialMedia').hide(); $('#nextStep').hide();$('#searchUsers').show()"><button type="button" class="btn btn-primary">&nbsp;&nbsp;&nbsp; Search users &nbsp;&nbsp;&nbsp; </button></a>
                    <a href="advertiser_login.php"><button id="btn-back" type="button" class="btn btn-danger">&nbsp;&nbsp;&nbsp; Back &nbsp;&nbsp;&nbsp;</button></a>
                </div>


            </div>
    </div>

<!--    ========================       search users        =====================-->
    <div id="searchUsers" class="mainbox col-md-176 col-md-offset-173 col-sm-8 col-sm-offset-2" style="display:none;position: relative; left: 10px; width: 650px">
        <div class="row">
            <div class="col-sm-12">
<!--                <h4 style="position:relative;height:31px;right: 300px;width: 690px;background-color: #584d39;border-radius: 32px;color: white; text-align: center">You are searching in <span style="color: red"> Facebook</span> to post a message about <span style="color: red"> Food</span>  ...</h4><br>-->
                <h4 style="position:relative;height:31px;right: 350px;width: 690px;color: white; text-align: center"><i class="fa fa-star"></i>You are searching in <span style="color: red"> Facebook</span> to post a message about <span style="color: red"> Food</span>  ...</h4><br>
                <div class="col-sm-12">
                    <center><h4 style="position:relative;height:32px;left: 60px;width: 480px;background-color: #584d39;border-radius: 32px;color: white; text-align: center"><span style="color: pink;font-size: 22px">05  </span>  users matches found ! ...</h4><br></center>
                </div>

            </div>
        </div>
        <div class="input-group">
            <table class="table table-hover table-light" style="opacity:0.8;background-color:#ccb39a;position:relative;width: 900px; right: 100px;border-radius: 12px">
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
                <tr onclick="clickTableRow()">
                    <th scope="row">1</th>
                    <td><img class="rounded-circle" src="img/me.jpg" style="width: 85px;height: 85px"></a></td>
                    <td><span style="color: blue"><u>Facebook</u><br><u>Youtube</u></span> </td>
                    <td><b>Tharindu Dananjaya</b> <br> $7 for two tweets and one facebook post Approximated reach - 200 impressions </td>
                    <td><i class="fa fa-star"  style="color: yellow;font-size: 20px"></i><i class="fa fa-star" style="color: yellow;font-size: 20px"></i><i class="fa fa-star" style="color: yellow;font-size: 20px"></i><i class="fa fa-star" style="color: yellow;font-size: 20px"></i></td>
                    <!--                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>-->



                </tr>

                <tr  onclick="clickTableRow()">
                    <th scope="row">2</th>
                    <td><img class="rounded-circle" src="img/mine/denver.jpg" style="width: 85px;height: 85px"></a></td>
                    <td><span style="color: blue"><u>Facebook</u><br><u>Youtube</u><br><u>Twitter</u></span> </td>
                    <td><b>Denver Simonsz</b> <br> $29 for two tweets and one facebook post Approximated reach - 200 impressions</td>
                    <td><i class="fa fa-star"  style="color: yellow;font-size: 20px"></i><i class="fa fa-star" style="color: yellow;font-size: 20px"></i><i class="fa fa-star" style="color: yellow;font-size: 20px"></i></td>
<!--                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>-->

                    <!--                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>-->
                    <!--                    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>-->

                </tr>
                <tr onclick="clickTableRow()">
                    <th scope="row">3</th>
                    <td><img class="rounded-circle" src="img/mine/Binu%20IJSE%2020171121_221116.jpg" style="width: 85px;height: 85px"></a></td>
                    <td><span style="color: blue"><u>Facebook</u></span> </td>
                    <td><b>Binura Salindra</b> <br> $15 for two tweets and one facebook post Approximated reach - 200 impressions </td>
                    <td><i class="fa fa-star" style="color: yellow;font-size: 20px"></i></td>
<!--                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>-->


                </tr>
                <tr onclick="clickTableRow()">
                    <th scope="row">4</th>
                    <td><img class="rounded-circle" src="img/mine/sandun.jpg" style="width: 85px;height: 85px"></a></td>
                    <td><span style="color: blue"><u>Facebook</u><br><u>Linkedin</u></span> </td>
                    <td><b>Sandun Dilhan</b> <br> $7 for two tweets and one facebook post Approximated reach - 200 impressions </td>
                    <td><i class="fa fa-star"  style="color: yellow;font-size: 20px"></i><i class="fa fa-star" style="color: yellow;font-size: 20px"></i><i class="fa fa-star" style="color: yellow;font-size: 20px"></i><i class="fa fa-star" style="color: yellow;font-size: 20px"></i></td>
<!--                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>-->



                </tr>
                <tr onclick="clickTableRow()">
                    <th scope="row">5</th>
                    <td><img class="rounded-circle" src="img/mine/vidurajith.jpg" style="width: 85px;height: 85px;rotation: 90deg"></a></td>
                    <td><span style="color: blue"><u>Facebook</u><br><u>Twitter</u><br><u>Youtube</u></span> </td>
                    <td><b>Vidurajith Darshana</b> <br> $29 for two tweets and one facebook post Approximated reach - 200 impressions</td>
                    <td><i class="fa fa-star"  style="color: yellow;font-size: 20px"></i><i class="fa fa-star" style="color: yellow;font-size: 20px"></i><i class="fa fa-star" style="color: yellow;font-size: 20px"></i></td>
<!--                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>-->


                </tr>
                </tbody>
            </table>
            <div style="position:relative;width: 300px;height: 100px;left: 660px">
           <a href="#" onClick="$('#socialMedia').show(); $('#nextStep').show();$('#searchUsers').hide()"><button id="btn-back" type="button" class="btn btn-danger">&nbsp;&nbsp;&nbsp; Back &nbsp;&nbsp;&nbsp;</button></a>
            </div>
        </div>


    </div>





    </div>



<?php
include "halfFooter.php";
?>
</body>
</html>