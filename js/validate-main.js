
$("#btnUser").click(function() {
    var Email = $("#email").val();

    if(Email.trim().length===0){
        $("#email").focus();
        $("#email").addClass("is-invalid");
    }

    var regExp = /[A-Za-z0-9.]*.[^.]@[^.][A-Za-z0-9]*.[A-Za-z0-9].[A-Za-z0-9]*.[a-z]\S$/;
    if (!regExp.test(Email)) {
        $("#email").focus();
        $("#email").addClass("is-invalid");
        return;
    }


});

$("#btnAdvertiser").click(function() {
    var Email = $("#email").val();

    if(Email.trim().length===0){
        $("#email").focus();
        $("#email").addClass("is-invalid");
    }

    var regExp = /[A-Za-z0-9.]*.[^.]@[^.][A-Za-z0-9]*.[A-Za-z0-9].[A-Za-z0-9]*.[a-z]\S$/;
    if (!regExp.test(Email)) {
        $("#email").focus();
        $("#email").addClass("is-invalid");
        return;
    }


});

$("#email").keyup(function(){
    if ($(this).val().trim().length > 0){
        $(this).removeClass("is-invalid");
    }
});