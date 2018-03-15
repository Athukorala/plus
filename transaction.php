<?php
    include "header.php";
    ?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
<!--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->

    <div class="container" style="position:relative;top: 80px;left: 10px">


            <div class="container" style="position:relative;left: 60px">
                <div class="row">
                    <div class="col-xs-10">
                        <div class="panel panel-primary">
                            <!-- Default panel contents -->
                            <div class="panel-heading">
                                <h2 class="panel-title">
                                    Accounts and transactions report
                                </h2>
                            </div>
                            <div class="panel-body">
                                <center>
                                <h3>
                                    Denver Shan Simonsz
                                </h3>
                                <h4 style="font-size: 14px">Account number : <span style="color: red"> 8027540026 </span> (current debit :: $356.61)</h4>
                                </center>
                            </div>
                            <ul class="list-group">



                                <li class="list-group-item">

                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Operation date</th>
                                            <th>Remitter</th>
                                            <th>Beneficiary</th>
                                            <th>Amount</th>
                                            <th>Description</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><?php echo date("Y/m/d"). " - ". date("h:i:sa")?></td>
                                            <td>Athukorala (cash in)</td>
                                            <td>Denver Simonz</td>
                                            <td>356.61</td>
                                            <td>Iniital deposit</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-12 controls">
                            <a href="#" onClick="$('#socialMedia').hide(); $('#nextStep').hide();$('#searchUsers').show()"><button type="button" class="btn btn-primary">&nbsp&nbsp&nbsp Submit transaction users &nbsp&nbsp&nbsp </button></a>
                            <a href="advertiser_login.php"><button id="btn-back" type="button" class="btn btn-danger">&nbsp&nbsp&nbsp Back &nbsp&nbsp&nbsp</button></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>


<?php
    include "halfFooter.php";
    ?>
