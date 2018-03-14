<?php
include "header.php";
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>


<script type="text/javascript" src="https://js.stripe.com/v2/"></script>


<div class="container" style="width: 700px; position: relative; top:70px;">
    <h4 style="position:relative;width:920px;height:31px;background-color: #584d39;border-radius: 32px;color: white; text-align: center;right: 100px">Advertiser payment details</h4><br>

    <div class="panel panel-default credit-card-box">
        <div class="panel-heading display-table" >
            <div class="row display-tr" >
                <h3 class="panel-title display-td" >Payment Details</h3>
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
                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
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
                <div id ="b" class="row" style="display:none;">
                    <div class="col-xs-12">
                        <p class="payment-errors"></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<nav style="position:fixed;height: 58px;width: 100%;bottom:-20px" id="navBar1" class="navbar navbar-expand-md navbar-dark fixed-bottom bg-dark" >

    <a class="navbar-brand" style="color: white;font-size: 14px">Product Listing Policy - Intellectual Property Policy and Infringement Claims - Privacy Policy - Terms of Use - Law Enforcement Compliance Guide - Safety & Security Center
    </a>
    <h2 style="font-size: 18px" id="footer-title">Ceyentra Technologies</h2>
</nav>
<script src="js/script.js"></script>
</body>
</html>