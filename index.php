<?php
include "header.php";

?>

    <div class="container" >


    <center><h1 style="position:relative;top: 40px"><span style="color: palegoldenrod">Hello ...</span>  Welcome to our <span style="color:red">Ceyentra Plus</span></h1></center>
   <a href="admin_main_form.php"> <h5 style="position:relative;width:170px;font-size: 16px;color: midnightblue; top: 40px;left: 480px">Share all your ads!</h5></a>
    <form class="needs-validation" novalidate>
        <div class="form-row">
            <div class="col-md-4 mb-3">

                <a href="admin_form.html"> <h5 id="lblEmail">Please Enter your email </h5></a>

                <input style="right:50px;width: 455px" type="text" id="txtEmail" class="form-control"  placeholder="Enter your email">

                <a href="user_login.php"><img id="user" src="img/user.png" width="120px" height="120px"></a>
                <a href="advertiser_login.php">  <img id="advertiser" src="img/4-512.png" width="100px" height="100px"></a>
                <a href="admin_login.php"> <img id="admin" src="img/Admin.png" width="30px" height="35px"></a>
                <a href="admin_login.php"> <label id="btnAdmin" class="btnAdmin" style="color: black">Admin login</label></a>

            </div>
        </div>
    </form>


    <a href="user_login.php" > <b><button id="btnUser" class="btn btn-http://techulus.com/buttons/gplus.pnginfo" style="color: deepskyblue" >I am a user</button></b></a>
    <a href="advertiser_login.php"><b>  <button id="btnAdvertiser" class="btn btn-http://techulus.com/buttons/gplus.pnginfo" style="color: deepskyblue">I am a advertiser</button></b></a>



</div>
    </div>
<?php
include "footer.php";

?>