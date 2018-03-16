<?php
include "header.php";

?>

    <div class="container" >


    <center><h1 style="position:relative;top: 40px"><span style="color: palegoldenrod"></span>  Welcome to <span class="header-title" style="">Ceyentra Plus</span></h1></center>
    <h5 style="position:relative;width:170px;font-size: 16px;color: midnightblue; top: 40px;left: 480px">Share all your ads!</h5></a>
    <form class="needs-validation" novalidate>
        <div class="form-row">
            <div class="col-md-4 mb-3">

                <h5 id="lblEmail">Please Enter your email </h5></a>


                    <div class="input-group" style="position: relative;left: 350px;top:97px">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" required="required"  /></div>


                <a href="user_login.php"><img id="user" src="img/user.png" width="120px" height="120px"></a>
                <a href="advertiser_login.php">  <img id="advertiser" src="img/4-512.png" width="100px" height="100px"></a>
                <a href="admin_login.php"> <img id="admin" src="img/Admin.png" width="30px" height="35px"></a>
                <a href="admin_login.php"> <label id="btnAdmin" class="btnAdmin" style="color: black">Admin login</label></a>

            </div>
        </div>
    </form>


    <a href="user_login.php" > <b><button id="btnUser" class="btn btn-http://techulus.com/buttons/gplus.pnginfo" style="color: deepskyblue" >I am a user</button></b></a>
    <a href="advertiser_login.php"><b>  <button id="btnAdvertiser" class="btn btn-http://techulus.com/buttons/gplus.pnginfo" style="color: deepskyblue">I am a advertiser</button></b></a>


        <script src="js/validate-main.js"></script>
</div>
    </div>
<?php
include "footer.php";

?>