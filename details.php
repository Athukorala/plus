<div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-176 col-md-offset-173 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Sign Up</div>
            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
        </div>
        <div class="panel-body" >
            <form id="signupform" class="form-horizontal" role="form">

                <div id="signupalert" style="display:none" class="alert alert-danger">
                    <p>Error:</p>
                    <span></span>
                </div>



                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname" class="col-md-3 control-label">Full Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="name" name="firstname" placeholder="First Name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="country" class="col-md-3 control-label">Country</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="country" name="country" placeholder="Country">
                    </div>
                </div>

                <div class="form-group">
                    <label for="address" class="col-md-3 control-label">Address</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="address" name="address" placeholder="Addresss">
                    </div>
                </div>

                <div class="form-group">
                    <label for="mob" class="col-md-3 control-label">Mobile</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="mob" name="mob" placeholder="Mobile Number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="dob" class="col-md-3 control-label">Date of birth</label>
                    <div class="col-md-9">
                        <input type="password" class="form-control" id="dob" name="dob" placeholder="Date of birth">
                    </div>
                </div>



                <div class="form-group">

                    <center><div class="col-md-offset-3 col-md-9">
                            <a href="#" onClick="$('#signupbox').hide(); $('#loginbox').show()"><button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button></a>

                        </div></center>
                </div>

            </form>
        </div>
    </div>




</div>