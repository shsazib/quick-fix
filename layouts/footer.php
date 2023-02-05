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
                            <img class="img" src="./images/facebook-footer.png" alt="img" >
                        </a>
                    </div>
                </div>
                <div class="footer_address">
                    <h2>CORPORATE OFFICE IN DHAKA</h2>
                    <div>
                        <i class="fa-solid fa-location-dot"></i>
                        <p>2nd Floor, Ka/32/5/A (Palash Tower), Pragati Sarani (Shahjadpur), Gulshan, Dhaka-1212, Bangladesh.                        </p>
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
      <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    spaceBetween: 30,
                    centeredSlides: true,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
                // Sweet Alert 
                $(window).bind("load", function() {
                    jQuery("#overlay").fadeOut();
                });
                    jQuery(document).ready(function () {
                        jQuery("#verificationForm").submit(function (e) {
                            e.preventDefault();
                            var data = {
                                code: jQuery('#productid').val().trim(),
                                vehicle_type: jQuery('#vehicletype').val().trim(),
                                name: jQuery('#verifyname').val().trim(),
                                phone_no: jQuery('#mobileinputverify').val().trim(),
                                odo: jQuery('#inputODO').val().trim(),
                            }
                            var email = jQuery('#inputemailverify').val().trim();
                            if(email.length > 0){
                                data.email = email;
                            }

                            var request = jQuery.ajax({
                                url: 'http://api.quickfixglobal.com/api/verify',
                                method: 'POST',
                                dataType: 'json',
                                data: data
                            });

                            request.done(function (response) {
                                console.log(response);
                                if(response.response.result === 'success'){
                                    swal(
                                        'Congratulations!!!',
                                        response.response.message,
                                        'success'
                                    )
                                }
                            })

                            request.fail(function( jqXHR, textStatus ) {
                                swal(
                                    'Oops!',
                                    jqXHR.responseJSON.response.errors.code + '. Please reach our customer support at <a href="tel:+8801633222211">+88 018 33 39 50 13</a>',
                                    'error'
                                );


                            });
                        });
                        jQuery("#clubForm").submit(function (e) {
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

                            request.done(function (response) {
                                console.log(response);
                                if(response.response.result === 'success'){
                                    swal(
                                        'Congratulations!!!',
                                        response.response.message,
                                        'success'
                                    )
                                }
                            })

                            request.fail(function( jqXHR, textStatus ) {
                                swal(
                                    'Oops!',
                                    jqXHR.responseJSON.response.errors.code + '. Please reach our customer support at <a href="tel:+8801833395013">+88 016 33 22 22 11</a>',
                                    'error'
                                );


                            });
                        });

                        jQuery("#contactForm").submit(function (e) {
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

                            request.done(function (response) {
                                console.log(response);
                                if(response.response.result === 'success'){
                                    swal(
                                        'Congratulations!!!',
                                        response.response.message,
                                        'success'
                                    )
                                }
                            })

                            request.fail(function( jqXHR, textStatus ) {
                                swal(
                                    'Oops!',
                                    'Something went wrong at our end. Please reach our customer support at <a href="tel:+8801633222211">+88 016 33 22 22 11</a>. We are really sorry for the inconvenience.',
                                    'error'
                                );


                            });
                        });
                    });
            </script>
            <!-- jquery -->
            <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
            <!-- js -->

            <script src="./script.js"></script>

            <script>
                $('.cus_information').click(function() {
                    let map = $(this).attr('map');
                    $('#map').attr('src', map);
                });
            </script>
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