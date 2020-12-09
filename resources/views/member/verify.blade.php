
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CSZ | Student Register</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img class="img-fluid" src="img-assets/csz.png" alt="logo" width="120" height="150" viewBox="0 0 35 35" fill="none">
  </div>
  <!-- /.login-logo -->
  <div class="container-fluid" id="grad1">
        <div class="col-md-13">
            <div class="card">
                <h2><strong>Student Membership</strong></h2>
                <p>Fill all form field to go complete registration</p>
                <div class="row">
                    <div class="col-md-13">
                        <form id="msform" action="" method="POST">
                            {{ csrf_field() }}
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Account</strong></li>
                                <li id="personal"><strong>Personal</strong></li>
                                <li id="payment"><strong>Payment</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Account Information</h2>
                                    <select type="text" name="chapter" class="form-control">
                                        <option selected>Select Chapter Affiliation<option>
                                        <option>Gweru Chapter<option>
                                        <option>Harare Chapter<option>
                                        <option>Bulawayo Chapter<option>
                                    </select>
                                    <br>
                                    <select type="text" name="chapter" class="form-control">
                                      <option selected>Select Interest Group<option>
                                      <option>Gweru Chapter<option>
                                      <option>Harare Chapter<option>
                                      <option>Bulawayo Chapter<option>
                                  </select>
                                  <br>
                                    <input type="email" name="email" placeholder="Email" />
                                    <input type="text" name="uname" placeholder="UserName" />
                                    <input type="text" name="fname" placeholder="First Name" />
                                    <input type="text" name="fname" placeholder="Surname" />
                                    <input type="text" name="pwd" placeholder="Mobile number" />
                                    <input type="password" name="pwd" placeholder="Password" />
                                    <input type="password" name="cpwd" placeholder="Confirm Password" />

                                </div>
                                 <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Personal Information</h2>
                                    <input type="text" name="fname" placeholder="School Name" />
                                    <label>Date Of Birth</label>
                                    <input type="date" name="fname" placeholder="Date Of Birth" />
                                    <br>
                                    <textarea type="text" name="lname" placeholder="Physical Address" ></textarea>
                                    <textarea type="text" name="phno" placeholder="Reason For Joining CSZ" ></textarea>
                                    <br>
                                    <label>Upload School ID</label>
                                    <input type="file" name="phno_2" placeholder="School ID" />
                                    <br>
                                    <label>Upload National ID</label>
                                    <input type="file" name="phno_2" placeholder="National ID" />
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Payment Information</h2>
                                    <div class="radio-group">
                                        <div class='radio' data-value="credit"><img src="images/paynow.svg" width="200px" height="100px"></div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Successfully Signed Up For CSZ Membership</h5>
                                        </div>
                                    </div>
                                </div>
                                <button class="action-button" ><a href="/login" value="" >Login</a></button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ ('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{  asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>


<script>
    $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 600
});
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});
});

$('.radio-group .radio').click(function(){
$(this).parent().find('.radio').removeClass('selected');
$(this).addClass('selected');
});

$(".submit").click(function(){
return false;
})

});

</script>


</body>
</html>
