<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Fix | Verify Your Product</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="./images/x-icon.png">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="nav">
        <a href="./index.php" class="brand_logo">
            <img src="./images/Sign Board Print.png" alt="logo">
        </a>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <ul class="nav_ul">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./index.php">Product</a></li>
            <li><a href="./index.php">Outlets</a></li>
            <li><a href="./index.php">Review</a></li>
            <li><a href="./index.php">About Us</a></li>
        </ul>
    </nav>



    <main role="main">

<!--<img src="img/quickfixverify.jpg" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 verify2 contentmiddle">
      <div class="contentmiddle">
        <div class="column mcb-column one column_column  column-margin-20px">
          <div class="column_attr clearfix" style="">
            <h2>VERIFY YOUR PRODUCT</h2>
            <p class="big">Please fill in the form below and submit for verification. You should see a verification success message if this is original quickfix.</p>
          </div>
        </div>
        <div class="column mcb-column one-second column_column  column-margin-">
          <div class="column_attr clearfix" style="">




          </div>
        </div>

      </div>


    </div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 verify">
      <form id="verificationForm" action="#">
        <fieldset disabled>
          <div class="form-group">
            <label for="productid">Product ID</label>
            <input type="text" class="form-control" readonly id="productid" value="<?php echo $_GET['code']; ?>" required>
          </div>
        </fieldset>

        <div class="form-row form-inline">
          <div class="form-group col-md-6">
            <label class="mr-sm-2" for="vehicletype">Select your Vehicle Type*</label>
            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="vehicletype">
              <option value="MOTORCYCLE">Motorcycle</option>
              <option value="CAR">Car</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="verifyname">Name*</label>
            <input type="text" class="form-control" id="verifyname" placeholder="Name" required>
          </div>
        </div>


        <div class="form-group">
          <label for="inputemailverify">Email</label>
          <input type="email" class="form-control" id="inputemailverify" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="inputODO">Current ODO</label>
          <input type="number" class="form-control" id="inputODO" required placeholder="How many KM did your vehicle run so far?">
        </div>
        <div class="form-group">
          <label for="mobileinputverify">Mobile*</label>
          <input type="text" class="form-control" id="mobileinputverify" placeholder="+8801XXXXXXXXX" required>
        </div>



        <div style="text-align: center;">
          <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Submit</button>
        </div>
      </form>

    </div><!-- /.adv -->

  </div>



</div><!-- /.container -->




    <!-- footer -->
    <div class="footer_container">
        <div class="footer_about">
            <img class="footer_about_logo" src="./images/Quickfix-Logo.png" alt="img">
            <a href="./contact-us.php">
                Contact Us
            </a>
            <a href="./warranty-policy.php">Warranty Policy</a>
            <a href="./privacy-policy.php">Privacy Policy</a>
            <a href="./career.php">Career</a>
            <div class="footer_fb">
                <a href="https://www.facebook.com/QuickfixGlobal" target="_blank">
                    <img class="img" src="./images/facebook-footer.png" alt="img">
                </a>
            </div>
        </div>
        <div class="footer_address">
            <h2>CORPORATE OFFICE IN DHAKA</h2>
            <div>
                <i class="fa-solid fa-location-dot"></i>
                <p>2nd Floor, Ka/32/5/A (Palash Tower), Pragati Sarani (Shahjadpur), Gulshan, Dhaka-1212, Bangladesh.
                </p>
            </div>
            <div>
                <i class="fa-solid fa-phone"></i>
                <p>+88 01833 395017</p>
            </div>
            <div>
                <i class="fa-solid fa-envelope"></i>
                <p>info@quickfixglobal.com</p>
            </div>
        </div>
        <div class="footer_location">
            <h2>OUR LOCATIONS</h2>
            <img src="./images/map.png" alt="map">
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.0/sweetalert2.all.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.0/sweetalert2.all.min.js"></script>
    <script src="./script.js"></script>

    <script type="text/javascript">
        $(window).bind("load", function() {
            jQuery("#overlay").fadeOut();
        });
        jQuery(document).ready(function() {
            jQuery("#verificationForm").submit(function(e) {
                e.preventDefault();
                var data = {
                    code: jQuery('#productid').val().trim(),
                    vehicle_type: jQuery('#vehicletype').val().trim(),
                    name: jQuery('#verifyname').val().trim(),
                    phone_no: jQuery('#mobileinputverify').val().trim(),
                    odo: jQuery('#inputODO').val().trim(),
                }
                var email = jQuery('#inputemailverify').val().trim();
                if (email.length > 0) {
                    data.email = email;
                }

                var request = jQuery.ajax({
                    url: 'http://api.quickfixglobal.com/api/verify',
                    method: 'POST',
                    dataType: 'json',
                    data: data
                });

                request.done(function(response) {
                    console.log(response);
                    if (response.response.result === 'success') {
                        swal(
                            'Congratulations!!!',
                            response.response.message,
                            'success'
                        )
                    }
                })

                request.fail(function(jqXHR, textStatus) {
                    swal(
                        'Oops!',
                        jqXHR.responseJSON.response.errors.code + '. Please reach our customer support at <a href="tel:+8801633222211">+88 018 33 39 50 13</a>',
                        'error'
                    );


                });
            });
            jQuery("#clubForm").submit(function(e) {
                e.preventDefault();
                var data = {
                    phone_number: jQuery('#mobileinputverify').val().trim(),
                }

                var request = jQuery.ajax({
                    url: 'http://api.quickfixglobal.com/api/verify-customer',
                    method: 'POST',
                    dataType: 'json',
                    data: data
                });

                request.done(function(response) {
                    console.log(response);
                    if (response.response.result === 'success') {
                        swal(
                            'Congratulations!!!',
                            response.response.message,
                            'success'
                        )
                    }
                })

                request.fail(function(jqXHR, textStatus) {
                    swal(
                        'Oops!',
                        jqXHR.responseJSON.response.errors.code + '. Please reach our customer support at <a href="tel:+8801833395013">+88 016 33 22 22 11</a>',
                        'error'
                    );


                });
            });

            jQuery("#contactForm").submit(function(e) {
                e.preventDefault();
                var data = {
                    first_name: jQuery('#first_name').val(),
                    last_name: jQuery('#last_name').val(),
                    contact_email: jQuery('#contact_email').val(),
                    message: jQuery('#message').val(),
                    contact_phone_no: jQuery('#contact_no').val(),
                }

                var request = jQuery.ajax({
                    url: 'http://api.quickfixglobal.com/api/contact/message/send',
                    method: 'POST',
                    dataType: 'json',
                    data: data
                });

                request.done(function(response) {
                    console.log(response);
                    if (response.response.result === 'success') {
                        swal(
                            'Congratulations!!!',
                            response.response.message,
                            'success'
                        )
                    }
                })

                request.fail(function(jqXHR, textStatus) {
                    swal(
                        'Oops!',
                        'Something went wrong at our end. Please reach our customer support at <a href="tel:+8801633222211">+88 016 33 22 22 11</a>. We are really sorry for the inconvenience.',
                        'error'
                    );


                });
            });
        })
    </script>
</body>

</html>