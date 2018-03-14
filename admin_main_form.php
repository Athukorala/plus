<?php
include "header.php";
?>
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

<div class="container-fluid" style="position: relative; top:30px">
    <div class="row">
        <nav class="col-sm-2 col-md-2 d-none d-sm-block bg-light sidebar" style="height:520px;background-color: red;position: fixed;width:400px">

            <br><br>
            <ul class="nav nav-pills flex-column">


                <li class="nav-item" style="width:1000px" >
                    <a href="#" onClick="$('#view_users_request').show()"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; View users requests</a>
                </li>

                <br><br>
                <li class="nav-item">
                    <a href="#" onClick="$('#view_users_request').show()"><i class="fa fa-bed" aria-hidden="true"></i>&nbsp; View users</a>
                </li>

                <br><br>
                <li class="nav-item">
                    <a href="#" onClick="$('#view_users_request').show()"><i class="fa fa-book" aria-hidden="true"></i>&nbsp; View advertisers</a>
                </li>
                <br><br>
                <li class="nav-item">
                    <a href="#" onClick="$('#view_users_request').show()"><i class="fa fa-bath" aria-hidden="true"></i>&nbsp; Setting</a>
                </li>
                <br><br>


            </ul>
        </nav>
    </div>
</div>

    <div id="view_users_request" class="mainbox col-md-176 col-md-offset-173 col-sm-8 col-sm-offset-2" style="position:relative;left:300px;display:none; width: 250px">

        <div class="row" style="background-color: white;width: 800px;height: 700px;margin-top: 20px">
            <span style="position:relative;top:50px;left:800px;font-size:30px;cursor:pointer;" onclick="openNav()"><span style="font-size:30px;border-radius: 100%; background-color: sandybrown;cursor:pointer;"  onclick="openNav()">&nbsp; 05	&nbsp;</span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="well well-sm">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">
                                                Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label for="email">
                                                Email Address</label>
                                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">
                                                Subject</label>
                                            <select id="subject" name="subject" class="form-control" required="required">
                                                <option value="na" selected="">Choose One:</option>
                                                <option value="service">General Customer Service</option>
                                                <option value="suggestions">Suggestions</option>
                                                <option value="product">Product Support</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">
                                                Message</label>
                                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                                      placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                            Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <form>
                            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                            <address>
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">
                                    P:</abbr>
                                (123) 456-7890
                            </address>
                            <address>
                                <strong>Full Name</strong><br>
                                <a href="mailto:#">first.last@example.com</a>
                            </address>
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </div>

<!--======================================================== center logic =================================-->


<center>
    <div id="mySidenav" class="sidenav" style="background-image: url('img/bluer.jpg')">

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!--    ====-->
        <div class="col-md-5 offset-md-1" style="background-color: #ccb39a;border-radius: 15px;opacity: 0.9">
            <ul id="sortable">
                <li><div class="media" style="color: black">
                        <div class="media-left align-self-center">
                            <img class="rounded-circle" src="img/mine/1.jpg" style="width: 85px;height: 85px">
                        </div>
                        <div class="media-body">
                            <p>Request from Denver simonz is pending... </p><br>
                        </div>
                        <div class="media-right align-self-center">
                            <a href="#" class="btn btn-default">&nbsp;view&nbsp;&nbsp;</a>
                        </div>
                    </div></li>
                <br>
                <li><div class="media" style="color: black">
                        <div class="media-left align-self-center">
                            <img class="rounded-circle" src="img/mine/Binu%20IJSE%2020171121_221116.jpg" style="width: 85px;height: 85px">
                        </div>
                        <div class="media-body">
                            <p>Request from Binura Salindra is pending... </p><br>
                        </div>
                        <div class="media-right align-self-center">
                            <a href="#" class="btn btn-default">&nbsp;view&nbsp;&nbsp;</a>
                        </div>
                    </div></li>
                <br>
                <li><div class="media" style="color: black">
                        <div class="media-left align-self-center">
                            <img class="rounded-circle" src="img/mine/vidurajith.jpg" style="width: 85px;height: 85px;rotation: 90deg">
                        </div>
                        <div class="media-body">
                            <p>Request from Vidurajith Darshana is pending... </p><br>
                        </div>
                        <div class="media-right align-self-center">
                            <a href="#" class="btn btn-default">&nbsp;view&nbsp;&nbsp;</a>
                        </div>
                    </div></li>
                <br>
                <li><div class="media" style="color: black">
                        <div class="media-left align-self-center">
                            <img class="rounded-circle" src="img/mine/4.jpg" style="width: 85px;height: 85px">
                        </div>
                        <div class="media-body">
                            <p>Request from Sandun Dilhan is pending... </p>
                        </div>
                        <div class="media-right align-self-center">
                            <a href="#" class="btn btn-default">&nbsp;view&nbsp;&nbsp;</a>
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
                            <a href="#" class="btn btn-default">&nbsp;view&nbsp;&nbsp;</a>
                        </div>
                    </div></li>



            </ul>
        </div>

    </div>
</center>
<!--    ===================================================-->


    <span style="position:relative;top:50px;left:1100px;font-size:30px;cursor:pointer;" onclick="openNav()"><span style="font-size:30px;border-radius: 100%; background-color: sandybrown;cursor:pointer;"  onclick="openNav()">&nbsp; 05	&nbsp;</span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>

<!--    ======================================================================================================================-->







    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "1350px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>



<?php
include "footer.php";
?>