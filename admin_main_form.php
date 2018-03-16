<?php
include "header.php";
?>
<!--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
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
        <nav class="col-sm-2 col-md-2 d-none d-sm-block bg-light media" style="height:500px;background-color: rgba(254,208,117,0.29);position: fixed;width:400px;top:50px">

            <br><br>
            <ul class="nav nav-pills flex-column">


                <li class="nav-item" style="width:170px;height: 40px" >
                    <a href="#" onClick="$('#view_users').hide();$('#view_advertisers').hide();$('#view_users_request').show()"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; Users requests</a>
                </li>


                <li class="nav-item" style="height: 40px;width: 170px">
                    <a href="#" onClick="$('#view_users_request').hide();$('#view_users').show();$('#view_advertisers').hide()"><i class="fa fa-bed" aria-hidden="true"></i>&nbsp; View users</a>
                </li>


                <li class="nav-item" style="width:170px;height: 40px">
                    <a href="#" onClick="$('#view_users_request').hide();$('#view_users').hide();$('#view_advertisers').show()"><i class="fa fa-book" aria-hidden="true"></i>&nbsp; View advertisers</a>
                </li>

                <li class="nav-item" style="width:170px;height: 40px">
<!--                    <a href="#" onClick="$('#view_users_request').show();$('#view_users').hide();$('#view_advertisers').hide()"><i class="fa fa-bath" aria-hidden="true"></i>&nbsp; Settings</a>-->
                </li>

            </ul>
        </nav>
    </div>
</div>

    <div id="view_users_request" class="mainbox col-md-176 col-md-offset-173 col-sm-8 col-sm-offset-2" style="position:relative;left:100px; width: 250px">
        <span style="position:relative;top:50px;left:880px;font-size:30px;cursor:pointer;" onclick="openNav()"><span style="font-size:30px;border-radius: 100%; background-color: sandybrown;cursor:pointer;"  onclick="openNav()">&nbsp; 04	&nbsp;</span>&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></span>

        <div class="row" style="background-color: #ccb39a;opacity: 0.8;opacity: 0.8;border-radius: 12px;width: 800px;height: 1050px;margin-top: 10px">

            <div style="position:relative;width:700px;left:30px;height: 400px;top:30px;">
                <h3 style="color:#1d140d;"><b>Advertiser details</b></h3><br>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="text-align: left">Advertiser Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Name" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="text-align: left">Advertiser Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" disabled>
                    </div>
                </div>
                <div class="form-group row" style="position:relative;left: 160px;width: 500px">
                    <a target="_blank" href="img/img.png"> <div  class="img"><img src="img/img.png" class="img-fluid" alt="Responsive image" style="width: 100px"></div></a>
                    &nbsp;&nbsp;
                    <a target="_blank" href="img/img.png"><div class="img"><img src="img/img.png" class="img-fluid" alt="Responsive image" style="width: 100px"></div></a>
                    &nbsp;&nbsp;
                    <a target="_blank" href="img/img.png"><div class="img"><img src="img/img.png" class="img-fluid" alt="Responsive image" style="width: 100px"></div></a>
                </div>
                <label class="col-sm-2 col-form-label" style="text-align: right;left:140px;color: #0000aa">Photo link : </label>
                <br><br>

                <div class="form-group shadow-textarea">
                    <label for="exampleFormControlTextarea6">Advertisment details ... </label>
                    <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write something here..." disabled></textarea>
                </div>

            </div>
            <br><br><br><br><br><br>

            <div style="position:relative;width:700px;left:30px">

                <h3 style="color:#1d140d;"><b>User details</b></h3><br>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="text-align: left">User Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Name" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="text-align: left">User Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" disabled>
                    </div>
                </div>
                <div class="form-group row" style="position:relative;left: 160px;width: 500px">

                <label  style="text-align: right;left:140px;color: #1d0a06">Screenshots&nbsp;&nbsp; : </label>
                <br><br>

                    <a target="_blank" href="img/img.png"> <div  class="img"><img src="img/img.png" class="img-fluid" alt="Responsive image" style="width: 100px"></div></a>
                    &nbsp;&nbsp;
                    <a target="_blank" href="img/img.png"><div class="img"><img src="img/img.png" class="img-fluid" alt="Responsive image" style="width: 100px"></div></a>
                    &nbsp;&nbsp;
                    <a target="_blank" href="img/img.png"><div class="img"><img src="img/img.png" class="img-fluid" alt="Responsive image" style="width: 100px"></div></a>

            </div>

                <div class="col-md-12" style="position:relative;left:620px;width: 300px;">
                    <a href="transaction.php"> <button type="button" class="btn btn-info" id="btnAccept">
                        Accept</button></a>
                </div>
                <br><br>
                <div class="md-form amber-textarea active-amber-textarea-2">
                    <i class="fa fa-pencil prefix"></i>
                    <textarea type="text" id="form24" class="md-textarea form-control" rows="3" placeholder="Type a message for the user"></textarea>

                </div>
                <button type="submit" class="btn btn-info" id="btnMsg">
                    Send a message</button>
            </div>


        </div>
    </div>


<!--======================================== view user ================================-->
    <div id="view_users" class="mainbox col-md-176 col-md-offset-173 col-sm-8 col-sm-offset-2" style="position:relative;left:100px;display:none; width: 350px;top:15px">
        <div class="row">
            <center>
                <table class="table table-hover table-light" style="opacity:0.8;background-color:#ccb39a;position:relative;width: 900px;top:40px;border-radius: 12px">
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
                    <tr onclick="clickRow()">
                        <th scope="row">1</th>
                        <td><img class="rounded-circle" src="img/me.jpg" style="width: 85px;height: 85px"></a></td>
                        <td><span style="color: blue"><u>Facebook</u><br><u>Youtube</u></span> </td>
                        <td><b>Tharindu Dananjaya</b> <br> $7 for two tweets and one facebook post Approximated reach - 200 impressions </td>
                        <td><i class="fa fa-star"  style="color: yellow"></i><i class="fa fa-star" style="color: yellow"></i><i class="fa fa-star" style="color: yellow"></i><i class="fa fa-star" style="color: yellow"></i></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>

                        <!--                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>-->



                    </tr>

                    <tr  onclick="clickRow()">
                        <th scope="row">2</th>
                        <td><img class="rounded-circle" src="img/mine/denver.jpg" style="width: 85px;height: 85px"></a></td>
                        <td><span style="color: blue"><u>Facebook</u><br><u>Youtube</u><br><u>Twitter</u></span> </td>
                        <td><b>Denver Simonsz</b> <br> $29 for two tweets and one facebook post Approximated reach - 200 impressions</td>
                        <td><i class="fa fa-star"  style="color: yellow"></i><i class="fa fa-star" style="color: yellow"></i><i class="fa fa-star" style="color: yellow"></i></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>

                        <!--                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>-->
                        <!--                    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>-->

                    </tr>
                    <tr onclick="clickRow()">
                        <th scope="row">3</th>
                        <td><img class="rounded-circle" src="img/mine/Binu%20IJSE%2020171121_221116.jpg" style="width: 85px;height: 85px"></a></td>
                        <td><span style="color: blue"><u>Facebook</u></span> </td>
                        <td><b>Binura Salindra</b> <br> $15 for two tweets and one facebook post Approximated reach - 200 impressions </td>
                        <td><i class="fa fa-star" style="color: yellow"></i></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>


                    </tr>
                    <tr onclick="clickRow()">
                        <th scope="row">4</th>
                        <td><img class="rounded-circle" src="img/mine/sandun.jpg" style="width: 85px;height: 85px"></a></td>
                        <td><span style="color: blue"><u>Facebook</u><br><u>Linkedin</u></span> </td>
                        <td><b>Sandun Dilhan</b> <br> $7 for two tweets and one facebook post Approximated reach - 200 impressions </td>
                        <td><i class="fa fa-star"  style="color: yellow"></i><i class="fa fa-star" style="color: yellow"></i><i class="fa fa-star" style="color: yellow"></i><i class="fa fa-star" style="color: yellow"></i></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>



                    </tr>
                    <tr onclick="clickRow()">
                        <th scope="row">5</th>
                        <td><img class="rounded-circle" src="img/mine/vidurajith.jpg" style="width: 85px;height: 85px;rotation: 90deg"></a></td>
                        <td><span style="color: blue"><u>Facebook</u><br><u>Twitter</u><br><u>Youtube</u></span> </td>
                        <td><b>Vidurajith Darshana</b> <br> $29 for two tweets and one facebook post Approximated reach - 200 impressions</td>
                        <td><i class="fa fa-star"  style="color: yellow"></i><i class="fa fa-star" style="color: yellow"></i><i class="fa fa-star" style="color: yellow"></i></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>


                    </tr>
                    </tbody>
                </table>
            </center>



        </div>
    </div>

    <!--======================================== view advertisers ================================-->
    <div id="view_advertisers" class="mainbox col-md-176 col-md-offset-173 col-sm-8 col-sm-offset-2" style="position:relative;left:100px;display:none; width: 350px;top:15px">
        <div class="row">
            <center>
                <table class="table table-hover table-light" style="opacity:0.8;background-color:#ccb39a;position:relative;width: 900px;top:40px;border-radius: 12px">
                    <thead>
                    <tr>

                        <th scope="col"></th>
                        <th scope="col">Photo</th>
                        <th style="width: 800px" scope="col">Description</th>
                        <th style="width: 500px" scope="col">Email</th>
                        <th style="width: 700px"scope="col">Contact number</th>
                        <th style="width: 700px"scope="col">Company</th>

                    </tr>
                    </thead>
                    <tbody>

                    <tr onclick="clickRow()">
                        <th scope="row">2</th>
                        <td><img class="rounded-circle" src="img/mine/sameera.jpg" style="width: 85px;height: 85px"></a></td>

                        <td><b>Sameera Madushan</b> <br> #145 <br> Galle Road <br> Mathugama</td>
                        <td>sameeramadhu5@gmail.com</td>
                        <td>+94786544563</td>
                        <td>Kencode</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>


                    </tr>

                    <tr  onclick="clickRow()">
                        <th scope="row">1</th>
                        <td><img class="rounded-circle" src="img/mine/suuti.jpg" style="width: 85px;height: 85px"></a></td>

                        <td><b>Suranjith Darshana</b> <br> #223 <br> Galle Road <br> Panadura</td>
                        <td>suranjith123@gmail.com</td>
                        <td>+94713467897</td>
                        <td>Kencode</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>

                    </tr>
                    <tr onclick="clickRow()">
                        <th scope="row">3</th>
                        <td><img class="rounded-circle" src="img/mine/kavi.jpg" style="width: 85px;height: 85px"></a></td>

                        <td><b>Kavindu Perera</b> <br> #223 <br> Galle Road <br> Panadura</td>
                        <td>kaviii45@gmail.com</td>
                        <td>+94774565478</td>
                        <td>Kencode</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>

                    </tr>
                    <tr onclick="clickRow()">
                        <th scope="row">4</th>
                        <td><img class="rounded-circle" src="img/mine/subhani.jpg" style="width: 85px;height: 85px;rotation: 90deg"></a></td>

                        <td><b>Subhani Vindya</b> <br> #223 <br> Galle Road <br> Kaluthara</td>
                        <td>subhanivindya3@gmail.com</td>
                        <td>+94777345675</td>
                        <td>BOC</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>

                    </tr>
                    </tbody>
                </table>
            </center>



        </div>
    </div>


    <!--======================================================== center logic =================================-->


<center>
    <div id="mySidenav" class="sidenav" style="background-image: url('img/bluer.jpg')">

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!--    ====-->
        <div class="col-md-5 offset-md-1" style="background-color: #ccb39a;border-radius: 15px;opacity: 0.9;;left: 300px">
            <ul id="sortable">
                <li><div class="media" style="color: black">
                        <div class="media-left align-self-center">
                            <img class="rounded-circle" src="img/mine/denver.jpg" style="width: 85px;height: 85px">
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
                            <img class="rounded-circle" src="img/mine/sandun.jpg" style="width: 85px;height: 85px">
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

            </ul>
        </div>

    </div>
</center>
<!--    ===================================================-->


<!--    <span style="position:relative;top:50px;left:1100px;font-size:30px;cursor:pointer;" onclick="openNav()"><span style="font-size:30px;border-radius: 100%; background-color: sandybrown;cursor:pointer;"  onclick="openNav()">&nbsp; 05	&nbsp;</span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>-->

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