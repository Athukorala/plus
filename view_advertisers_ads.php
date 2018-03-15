<?php
include "header.php";

?>
<style>
    textarea.expandable {
        height:40px;
        -webkit-transition: all 0.5s ease-in-out;
    }

    textarea.expandable:hover, textarea.expandable:focus {
        height:calc(100% - 90px);
        -webkit-transition: all 0.8s ease-in-out;
    }

    .panel-300:hover, .panel-300 {
        height:300px;
    }

    textarea.expandable + textarea.expandable:hover, textarea.expandable + textarea.expandable:focus {
        height:calc(100% - 90px)
    }

    .shadow-textarea textarea.form-control::placeholder {
        font-weight: 300;
    }
    .shadow-textarea textarea.form-control {
        padding-left: 0.8rem;
    }

</style>

<div class="col-lg-10 well" style="left: 420px;background-color:#ccb39a;opacity: 0.8;border-radius: 12px;top:50px;width: 800px;height: 500px">
    <div style="position:relative;width:700px;left:30px;height: 400px;top:30px;">

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label" style="text-align: right">Name</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label" style="text-align: right">Email</label>
            <div class="col-sm-7">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row" style="position:relative;left: 160px;width: 500px">
            <div class="img"><img src="img/img.gif" class="img-fluid" alt="Responsive image" style="width: 100px"></div>
                &nbsp;&nbsp;
            <div class="img"><img src="img/img.gif" class="img-fluid" alt="Responsive image" style="width: 100px"></div>
                &nbsp;&nbsp;
            <div class="img"><img src="img/img.gif" class="img-fluid" alt="Responsive image" style="width: 100px"></div>
        </div>
        <label class="col-sm-2 col-form-label" style="text-align: right;left:140px;color: #0000aa">Photo link : </label>
        <br><br>

            <div class="form-group shadow-textarea">
                <label for="exampleFormControlTextarea6">Type advertisment details ... </label>
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="9" placeholder="Write something here..." disabled></textarea>
            </div>
        <div class="form-group" style="position:relative;left: 420px;width: 300px">
            <a href="user_profile.php"><button type="button" class="btn btn-danger">Back</button></a>
            <a href="user_profile.php"> <button type="button" class="btn btn-warning">Reject</button></a>
            <a href="Create_Ads.php"> <button type="button" class="btn btn-info">Create Ads</button></a>

        </div>

    </div>


</div>

<div class="container" style="position:relative;right: 95px;bottom:400px">
    <div class="col-sm-2 col-md-2">
        <img src="img/mine/kisandu.jpg"
             alt="" class="img-rounded img-responsive" style="width: 177px;border-radius: 15px"/>
    </div>
    <div class="col-sm-4 col-md-4" style="color: white">
        <blockquote>
            <p>Kisandu Vidujaya</p> <small><cite title="Source Title">Koholana, Kaluthara south  <i class="glyphicon glyphicon-map-marker"></i></cite></small>
        </blockquote>
        <p> <i class="glyphicon glyphicon-envelope"></i> kisanduvidujaya1@gmail.com
            <br/> <i class="glyphicon glyphicon-globe"></i> www.beetless.com
            <br /> <i class="glyphicon glyphicon-gift"></i> March 11, 1999</p>
    </div>

</div>


<?php
include "footer.php";
?>
