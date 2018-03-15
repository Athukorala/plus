
<?php
include "header.php";

?>
<script>
function preview_image(event) {
    var reader = new FileReader();
    reader.onload = function () {
    var output = document.getElementById("output_image");
    output.src = reader.result;

    height = output.clientHeight;
    width = output.clientWidth;

    console.log(height);
    console.log(width);

    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>

<div style="width: 450px;height: 450px;position: relative">

</div>
<div class="form-group" style="margin-bottom:60px">
    <input type="file" accept="image/*" id="blah" onchange="preview_image(event)">
</div>

<?php
include "footer.php";

?>