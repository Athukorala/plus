
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/checkBox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<nav style="position:fixed;background-color: rgba(254,208,117,0.29)" id="navBar" class="navbar navbar-expand-md navbar-dark fixed-top bg-pink" >
    <a class="navbar-brand" id="header-title" style="color: midnightblue"><span id="header-title">Ceyentra Plus &nbsp;</a><a class="nav-link" href="index.php"> <i style="position:relative;left: 1120px" class="fa fa-home fa-1x"></i></a>
</nav>

<body ng-app="mymodal" background="img/bluer.jpg" >
<div class="container" style="position: relative; top: 50px" >

<div id="socialMedia" class="mainbox col-md-176 col-md-offset-173 col-sm-8 col-sm-offset-2" style="position: relative; left: 10px; width: 650px">
        <h4 style="position:relative;left: 40px;width: 680px;height:31px;background-color: #584d39;border-radius: 32px;color: white; text-align: center">Hey , please enter your social media account addresses...</h4><br><br>
        <center>
            <div style="width: 450px; height: 370px;top: ">
        <div class="form-group row" style="position: relative;left: 80px;">
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
                        <a href="User_SignUp_EnterPrivateDetails.php"><button id="btn-back" type="button" class="btn btn-danger">&nbsp&nbsp&nbsp Back &nbsp&nbsp&nbsp</button></a>
                </div>


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
                <a href="#" onClick="$('#nextStep').hide(); $('#socialMedia').hide();$('#payment').show()"><button class="btn btn-success">&nbsp&nbsp&nbsp Save &nbsp&nbsp&nbsp</button>
                    <a href="#" onClick="$('#nextStep').hide(); $('#socialMedia').show()"><button id="btn-back" type="button" class="btn btn-danger">&nbsp&nbsp&nbsp Back &nbsp&nbsp&nbsp</button></a>

            </div>
        </div>


</div>


<!--    ================= user payment details =================-->

    <div id="payment" class="mainbox col-md-176 col-md-offset-173 col-sm-8 col-sm-offset-2" style="width: 750px;position: relative; left: 10px;display:none;height: 100px">
        <h4 style="position:relative;width:920px;height:31px;background-color: #584d39;border-radius: 32px;color: white; text-align: center;right: 100px">User payment details</h4><br>

        <div class="container" style="width: 700px">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >

                        <div class="display-td" >
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input
                                                type="tel"
                                                class="form-control"
                                                name="cardNumber"
                                                placeholder="Valid Card Number"
                                                autocomplete="cc-number"
                                                required autofocus
                                        />
<!--                                        <span class="input-group-addon"><i class="fa fa-credit-card" style="position:relative;height: 10px;width: 10px"></i></span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input
                                            type="tel"
                                            class="form-control"
                                            name="cardExpiry"
                                            placeholder="MM / YY"
                                            autocomplete="cc-exp"
                                            required
                                    />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input
                                            type="tel"
                                            class="form-control"
                                            name="cardCVC"
                                            placeholder="CVC"
                                            autocomplete="cc-csc"
                                            required
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">COUPON CODE</label>
                                    <input type="text" class="form-control" name="couponCode" />
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls" style="position: relative;left:100px; width: 300px">
                                    <a href="user_login.php"><button class="btn btn-success">&nbsp&nbsp&nbsp Save &nbsp&nbsp&nbsp</button></a>
                                        <a href="#" onClick="$('#nextStep').show(); $('#socialMedia').hide();$('#payment').hide()"><button id="btn-back" type="button" class="btn btn-danger">&nbsp&nbsp&nbsp Back &nbsp&nbsp&nbsp</button></a>

                                </div>
                            </div>

                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--    ====================================-->



</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" defer></script>
<script src="dist/js/bootstrap-checkbox.min.js" defer></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>


<?php
    include "halfFooter.php";
?>
</body>
</html>
