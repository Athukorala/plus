<?php
include "header.php";
?>
<style>
    .sp-1{
        color: red;
    }
</style>
<div class="container" style="margin-top:60px">

    <div class="input-group">
            <label style="font-size: 18px;background-color: white;border-radius: 12px;width: 1000px;height: 30px">&nbsp;&nbsp; You are requesting   <span class="sp-1"> Tharindu </span> to post a message in <span class="sp-1"> Facebook </span> about <span class="sp-1"> Food</span> The message needs to reach ..... </label>
        <div class="col-sm-6 form-group">-->

        </div>

        <div class="input-group">
            <label style="font-size: 14px;color: white">&nbsp;&nbsp; Keep it global&nbsp;     </label>
            <label>

                <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                <input id="login-remember" type="checkbox" name="fb" value="1">

            </label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <br>
            <label style="font-size: 14px;color: white">&nbsp;&nbsp; Enter country&nbsp;</label>&nbsp;&nbsp;
            <input type="text" placeholder="Enter country" class="form-control"  style="border-radius: 10px;background-color: white; width: 10px">

            <label>

                <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                <input id="login-remember" type="checkbox" name="fb" value="1">

            </label>

            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label style="font-size: 14px;color: black">&nbsp;&nbsp; Enter postcode&nbsp;</label>&nbsp;&nbsp;
            <input type="text" placeholder="Enter postcode" class="form-control"  style="border-radius: 10px; background-color: white; width: 3px">

            <label>

                <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                <input id="login-remember" type="checkbox" name="fb" value="1">

            </label>

        </div>

    </div>
    <br><br>
<div style="position: fixed;height: 200px ">
    <label style="font-family: 'Noto Sans Old Italic';color: red">Please explain your ads!</label>
    <textarea class="textarea" style="height: 30px"></textarea>
</div>

    <div class="col-sm-12 controls" style="position: relative;top:280px; left: 940px;width: 280px">
        <a href=""><button type="button" class="btn btn-primary">&nbsp&nbsp&nbsp Send &nbsp&nbsp&nbsp </button></a>
        <a href="advertiser_category.php"><button id="btn-back" type="button" class="btn btn-danger">&nbsp&nbsp&nbsp Back &nbsp&nbsp&nbsp</button></a>
    </div>


</div>

<script src="tinymce/js/tinymce/jquery.tinymce.min.js"></script>
<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<?php
include "footer.php";
?>
