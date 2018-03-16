
<?php
include "header.php";

?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="dist/css/bootstrap-imageupload.css" rel="stylesheet">

<style>
    body {
        padding-top: 70px;
    }

    .imageupload {
        margin: 20px 0;
    }
</style>

<div class="container">

    <label style="font-size: 15px;background-color: white;border-radius: 12px;width: 1000px;height: 30px">&nbsp;&nbsp; Share the screenshots for admin..... </label>


    <!-- bootstrap-imageupload. -->
    <div class="imageupload panel panel-default">
        <div class="panel-heading clearfix">
            <h3 class="panel-title pull-left">Upload Image</h3>
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-default active">File</button>
                <button type="button" class="btn btn-default">URL</button>
            </div>
        </div>
        <div class="file-tab panel-body">
            <label class="btn btn-default btn-file">
                <span>Browse</span>
                <!-- The file is stored here. -->
                <input type="file" name="image-file">
            </label>
            <button type="button" class="btn btn-default">Remove</button>
        </div>
        <div class="url-tab panel-body">
            <div class="input-group">
                <input type="text" class="form-control hasclear" placeholder="Image URL">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default">Submit</button>
                </div>
            </div>
            <button type="button" class="btn btn-default">Remove</button>
            <!-- The URL is stored here. -->
            <input type="hidden" name="image-url">
        </div>
    </div>

<!--    =============================-->

    <div class="imageupload panel panel-default">
        <div class="panel-heading clearfix">
            <h3 class="panel-title pull-left">Upload Image</h3>
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-default active">File</button>
                <button type="button" class="btn btn-default">URL</button>
            </div>
        </div>
        <div class="file-tab panel-body">
            <label class="btn btn-default btn-file">
                <span>Browse</span>
                <!-- The file is stored here. -->
                <input type="file" name="image-file">
            </label>
            <button type="button" class="btn btn-default">Remove</button>
        </div>
        <div class="url-tab panel-body">
            <div class="input-group">
                <input type="text" class="form-control hasclear" placeholder="Image URL">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default">Submit</button>
                </div>
            </div>
            <button type="button" class="btn btn-default">Remove</button>
            <!-- The URL is stored here. -->
            <input type="hidden" name="image-url">
        </div>
    </div>

<!--    ======================================-->
    <div class="imageupload panel panel-default">
        <div class="panel-heading clearfix">
            <h3 class="panel-title pull-left">Upload Image</h3>
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-default active">File</button>
                <button type="button" class="btn btn-default">URL</button>
            </div>
        </div>
        <div class="file-tab panel-body">
            <label class="btn btn-default btn-file">
                <span>Browse</span>
                <!-- The file is stored here. -->
                <input type="file" name="image-file">
            </label>
            <button type="button" class="btn btn-default">Remove</button>
        </div>
        <div class="url-tab panel-body">
            <div class="input-group">
                <input type="text" class="form-control hasclear" placeholder="Image URL">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default">Submit</button>
                </div>
            </div>
            <button type="button" class="btn btn-default">Remove</button>
            <!-- The URL is stored here. -->
            <input type="hidden" name="image-url">
        </div>
    </div>

<!--    =============================================-->

    <!-- bootstrap-imageupload method buttons.
     -->
<!--    <button type="button" id="imageupload-disable" class="btn btn-danger">Disable</button>-->
<!--    <button type="button" id="imageupload-enable" class="btn btn-success">Enable</button>-->
<!--    <button type="button" id="imageupload-reset" class="btn btn-primary">Reset</button>-->

    <a href="view_advertisers_ads.php"><button type="button" class="btn btn-danger" style="left: 300px">Back</button></a>
    <a href="#"> <button type="button" class="btn btn-info" style="left: 300px">Send to admin</button></a>
    <div style="position: relative;width: 10px;height: 100px"></div>
</div>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="dist/js/bootstrap-imageupload.js"></script>

<script>
    var $imageupload = $('.imageupload');
    $imageupload.imageupload();

    $('#imageupload-disable').on('click', function() {
        $imageupload.imageupload('disable');
        $(this).blur();
    })

    $('#imageupload-enable').on('click', function() {
        $imageupload.imageupload('enable');
        $(this).blur();
    })

    $('#imageupload-reset').on('click', function() {
        $imageupload.imageupload('reset');
        $(this).blur();
    });
</script>




<?php
include "halfFooter.php";

?>