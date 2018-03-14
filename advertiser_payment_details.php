
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
<nav style="position:fixed" id="navBar" class="navbar navbar-expand-md navbar-dark fixed-top bg-light" >
    <a class="navbar-brand" style="color: midnightblue"><span>Ceyentra Plus&nbsp;<i class="far fa-star"></i></a><a class="nav-link" href="index.php"> <i style="position:relative;left: 1120px" class="fa fa-home fa-1x"></i></a>
</nav>

<body ng-app="mymodal" background="img/bluer.jpg" >


<div id="payment" class="mainbox col-md-176 col-md-offset-173 col-sm-8 col-sm-offset-2" style="width: 50px;position: relative; left: 10px;display:none;height: 100px;top:540px">
    <h4 style="position:relative;width:920px;height:31px;background-color: #584d39;border-radius: 32px;color: white; text-align: center;right: 100px">Advertiser payment details</h4><br>

    <div class="container" style="width: 700px; position: relative; top:-50px;">
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
                                <a href="#" onClick="$('#nextStep').hide(); $('#socialMedia').hide();$('#payment').show()"><button class="btn btn-success">&nbsp&nbsp&nbsp Save &nbsp&nbsp&nbsp</button>
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
include "footer.php";
?>
</body>
</html>