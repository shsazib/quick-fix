<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Fix</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="./images/x-icon.png">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>

<body>
    <!-- <nav class="nav">
        <a href="./index.php" class="brand_logo">
            <img src="./images/Sign Board Print.png" alt="logo">
        </a>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <ul class="nav_ul">
            <li><a href="#home">Home</a></li>
            <li><a href="#product">Product</a></li>
            <li><a href="#retailers">Outlets</a></li>
            <li><a href="#review">Review</a></li>
            <li><a href="#about">About Us</a></li>
        </ul>
    </nav> -->
    <?php
        @include('layouts/header.php');
    ?>


    <!-- hero section -->
    <div class="hero_section" id="home">
        <div class="hero_content">
            <img src="./images/model_product.png" alt="product">
            <div class="hero_text_content">
                <h5>Premium</h5>
                <h1>Quick Fix
                    Tire Sealant</h1>
                <p>It has Nano Web Technology formula which can fix tire punctures instantly & permanently. Also it has
                    Anti-Rust & Anti Burst formula to protect your tire from rust & burst.</p>
                <br>
                <a href="https://www.facebook.com/QuickfixGlobal" target="_blank" class="top-hero_btn">
                    <button>Buy Now</button>
                </a>
                <!-- <div class="hero_btn">
                    <div></div>
                    <button>Buy Now</button>
                    <i class="fa-sharp fa-solid fa-play"></i>
                </div> -->

            </div>
        </div>
    </div>




    <!-- main product -->
    <div class="product" id="product">
        <div class="product_title fade-in">
            <h1>Quick Fix
                <br>
                Tire Sealant
            </h1>
            <h5>Premium</h5>
        </div>
        <div class="main_product">
            <div class="product_des_1">
                <div class="p_description fade-in-left" style="transition: 0.4s;">
                    <div>
                        <h2>Nano Web Technology </h2>
                        <p>It has Nano Web Technology formula which can fix tire punctures instantly & permanently. </p>
                    </div>
                    <h1>01</h1>
                </div>
                <div class="p_description fade-in-left" style="transition: 0.6s;">
                    <div>
                        <h2> Anti-rust Formula</h2>
                        <p>It contains Anti-rust formula which protect your tire from rust and keeps safe.</p>
                    </div>
                    <h1>02</h1>
                </div>
                <div class="p_description fade-in-left" style="transition: 0.8s;">
                    <div>
                        <h2>Anti-burst Formula</h2>
                        <p>It also has Anti burst formula which keep your tire in normal temperature & prevent tire from
                            burst.</p>
                    </div>
                    <h1>03</h1>
                </div>
            </div>
            <div class="main_product_img">
                <img src="./images/model_product_img.png" alt="product">
            </div>
            <div class="product_des_2">
                <div class="p_description_2 fade-in-right" style="transition: 0.4s;">
                    <h1>04</h1>
                    <div>
                        <h2>Fixing Capability</h2>
                        <p>Quick Fix Premium Tire Sealant can fix up to 60 punctures in a single tire.</p>
                    </div>
                </div>
                <div class="p_description_2 fade-in-right" style="transition: 0.6s;">
                    <h1>05</h1>
                    <div>
                        <h2> Sealing Capacity
                        </h2>
                        <p>Quick Fix Premium Tire Sealant can seal up to 10MM in a single tire. </p>
                    </div>
                </div>
                <div class="p_description_2 fade-in-right" style="transition: 0.8s;">
                    <h1>06</h1>
                    <div>
                        <h2>Longer Life
                        </h2>
                        <p>Quick Fix Premium Tire Sealant can support your tire up to 10 months or 15000KM.</p>
                    </div>
                </div>
            </div>
        </div>
















        <!-- phone product -->
        <div class="phone_main_product">
            <div class="main_product_img" data-aos="fade-right" data-aos-duration="500">
                <img src="./images/model_product_img.png" alt="product">
            </div>
            <div class="product_des_1 product_des">
                <div class="p_description_2" data-aos="fade-right" data-aos-duration="200">
                    <h1>01</h1>
                    <div>
                        <h2>Nano Web Technology </h2>
                        <p>It has Nano Web Technology formula which can fix tire punctures instantly & permanently.
                        </p>
                    </div>
                </div>
                <div class="p_description_2" data-aos="fade-right" data-aos-duration="300">
                    <h1>02</h1>
                    <div>
                        <h2> Anti-rust Formula</h2>
                        <p>It contains Anti-rust formula which protect your tire from rust.</p>
                    </div>
                </div>
                <div class="p_description_2" data-aos="fade-right" data-aos-duration="400">
                    <h1>03</h1>
                    <div>
                        <h2>Anti-burst Formula</h2>
                        <p>It also has Anti burst formula which keep your tire in normal temperature & prevent tire from
                            burst.</p>
                    </div>
                </div>
                <div class="p_description_2" data-aos="fade-right" data-aos-duration="500">
                    <h1>04</h1>
                    <div>
                        <h2>Fixing Capability</h2>
                        <p>Quick Fix Premium Tire Sealant can fix up to 60 punctures in a single tire.</p>
                    </div>
                </div>
                <div class="p_description_2" data-aos="fade-right" data-aos-duration="600">
                    <h1>05</h1>
                    <div>
                        <h2> Sealing Capacity</h2>
                        <p>Quick Fix Premium Tire Sealant can seal up to 10MM in a single tire. </p>
                    </div>
                </div>
                <div class="p_description_2" data-aos="fade-right" data-aos-duration="700">
                    <h1>06</h1>
                    <div>
                        <h2>Longer Life</h2>
                        <p>Quick Fix Premium Tire Sealant can support your tire up to 10 months or 15000KM.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Retailers -->
    <section class="retailers" id="retailers">
        <div class="product_title">
            <h1>Find Quick Fix <br> from your nearest shop</h1>
            <h5>Outlets</h5>
        </div>
        <div class="retailers_container">
            <div class="c_d_option">
                <ul id="accordion" class="accordion">
                    <li>
                        <div class="link">City<i class="fa fa-chevron-down"></i></div>
                        <ul class="retailers_submenu">
                            <li><a href="#">Dhaka</a></li>
                            <li><a href="#">Sylhet</a></li>
                            <li><a href="#">Chattogram</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="link">District<i class="fa fa-chevron-down"></i></div>
                        <ul class="retailers_submenu">
                            <li><a href="#">Feni</a></li>
                            <li><a href="#">Comilla</a></li>
                            <li><a href="#">Noakhali</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="cus_container">
                <div class="cus_information " map="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.8688621440306!2d90.4099219348877!3d23.858790000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5d570268b39%3A0xf8db4a1101406613!2sMy%20Choice%20My%20One!5e0!3m2!1sen!2sbd!4v1672496893170!5m2!1sen!2sbd">
                    <div class="all_cus_info">
                        <img src="https://picsum.photos/200/200" alt="img">
                        <div class="cus_address">
                            <p><strong>Mary J. Jones</strong></p>
                            <p>56 South Rockland St. Wantagh, NY 11793</p>
                            <p>012345678912 / 01234565789</p>
                        </div>
                    </div>
                    <div class="all_cus_info">
                        <img src="https://picsum.photos/200/200" alt="img">
                        <div class="cus_address">
                            <p><strong>Mary J. Jones</strong></p>
                            <p>56 South Rockland St. Wantagh, NY 11793</p>
                            <p>012345678912 / 01234565789</p>
                        </div>
                    </div>
                    <div class="all_cus_info">
                        <img src="https://picsum.photos/200/200" alt="img">
                        <div class="cus_address">
                            <p><strong>Mary J. Jones</strong></p>
                            <p>56 South Rockland St. Wantagh, NY 11793</p>
                            <p>012345678912 / 01234565789</p>
                        </div>
                    </div>
                </div>

                <div class="cus_map">
                    <div className="google_map">
                        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.8688621440306!2d90.4099219348877!3d23.858790000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5d570268b39%3A0xf8db4a1101406613!2sMy%20Choice%20My%20One!5e0!3m2!1sen!2sbd!4v1672496893170!5m2!1sen!2sbd" width="100%" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- pop-up-shape -->
    <section>
        <div class="side_text trigger">
            <a href="#">
                <img src="images/pop-up-shape.jpg" alt="">
            </a>
        </div>
        <div class="side_modal">
            <div class="side_modal-content">
                <span class="close-button">×</span>
                <div class="side_pop_up_container">
                    <div class="claim_sec">
                        <h1>CLAIM YOUR WARRENTY</h1>
                        <p>Please give your Phone Number</p>
                        <input type="text" placeholder="+8801×××××××××">
                        <button>Submit</button>
                    </div>
                    <div class="claim_info">
                        <div class="claim_name">
                            <div>
                                <p>Name: <span>Sh Sazib</span></p>
                                <p>Contact No: <span>01234567891</span></p>
                                <p>Email: <span>demo@gmail.com</span></p>
                            </div>
                            <button>CANCEL</button>
                        </div>
                        <div class="claim_product_list">
                            <p></p>
                            <div class="claim_product_item">
                                <p class="product_bought">Products you have bought </p>
                                <div class="claim_all_product">
                                    <div class="claim_single_product">
                                        <img src="./images/female-business-owner-is-using-laptop_53876-48755.webp" alt="">
                                        <div class="claim_single_product_content">
                                            <div>
                                                <p><b>Product ID</b></p>
                                                <p>xyzxxyzxyzyzxyzxyzxy</p>
                                            </div>
                                            <div>
                                                <p><b>Bought On</b></p>
                                                <p>12/10/2013</p>
                                                <p>at 12:20:52 pm</p>
                                            </div>
                                            <a href="./warranty-form.php" class="warranty_claim">CLAIM</a>
                                        </div>
                                    </div>
                                    <div class="claim_single_product">
                                        <img src="./images/female-business-owner-is-using-laptop_53876-48755.webp" alt="">
                                        <div class="claim_single_product_content">
                                            <div>
                                                <p><b>Product ID</b></p>
                                                <p>xyzxxyzxyzyzxyzxyzxy</p>
                                            </div>
                                            <div>
                                                <p><b>Bought On</b></p>
                                                <p>12/10/2013</p>
                                                <p>at 12:20:52 pm</p>
                                            </div>
                                            <a href="./warranty-form.php" class="warranty_claim">CLAIM</a>
                                        </div>
                                    </div>
                                    <div class="claim_single_product">
                                        <img src="./images/female-business-owner-is-using-laptop_53876-48755.webp" alt="">
                                        <div class="claim_single_product_content">
                                            <div>
                                                <p><b>Product ID</b></p>
                                                <p>xyzxxyzxyzyzxyzxyzxy</p>
                                            </div>
                                            <div>
                                                <p><b>Bought On</b></p>
                                                <p>12/10/2013</p>
                                                <p>at 12:20:52 pm</p>
                                            </div>
                                            <a href="./warranty-form.php" class="warranty_claim">CLAIM</a>
                                        </div>
                                    </div>
                                    <div class="claim_single_product">
                                        <img src="./images/female-business-owner-is-using-laptop_53876-48755.webp" alt="">
                                        <div class="claim_single_product_content">
                                            <div>
                                                <p><b>Product ID</b></p>
                                                <p>xyzxxyzxyzyzxyzxyzxy</p>
                                            </div>
                                            <div>
                                                <p><b>Bought On</b></p>
                                                <p>12/10/2013</p>
                                                <p>at 12:20:52 pm</p>
                                            </div>
                                            <a href="./warranty-form.php" class="warranty_claim">CLAIM</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
    </style>

    <!-- review -->
    <div class="review" id="review">

        <div class="review_container">
            <h1>What Client Say
                <hr>
            </h1>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./images/coders-discussing-about-source-code-compiling-discovers-errors-asks-rest-team-explanations-front-multiple-screens-running-algorithms-software-developers-doing-teamwork_482257-41856.webp" alt="">
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo hic obcaecati iste facere,
                            mollitia earum placeat consequatur quia! Ipsam eum perspiciatis explicabo delectus repellat,
                            recusandae magnam placeat non commodi ab?</p>
                        <div style="display: grid; gap: 0.3rem;">
                            <h3>John Watson</h3>
                            <h6>CEO at Facebook</h6>
                            <div style="color: red;">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/female-business-owner-is-using-laptop_53876-48755.webp" alt="">
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo hic obcaecati iste facere,
                            mollitia earum placeat consequatur quia! Ipsam eum perspiciatis explicabo delectus repellat,
                            recusandae magnam placeat non commodi ab?</p>
                        <div style="display: grid; gap: 0.3rem;">
                            <h3>John Watson</h3>
                            <h6>CEO at Facebook</h6>
                            <div style="color: red;">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/coders-discussing-about-source-code-compiling-discovers-errors-asks-rest-team-explanations-front-multiple-screens-running-algorithms-software-developers-doing-teamwork_482257-41856.webp" alt="">
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo hic obcaecati iste facere,
                            mollitia earum placeat consequatur quia! Ipsam eum perspiciatis explicabo delectus repellat,
                            recusandae magnam placeat non commodi ab?</p>
                        <div style="display: grid; gap: 0.3rem;">
                            <h3>John Watson</h3>
                            <h6>CEO at Facebook</h6>
                            <div style="color: red;">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/contemporary-designers-looking-whiteboard-while-their-colleague-making-presentation_274679-20882.avif" alt="">
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo hic obcaecati iste facere,
                            mollitia earum placeat consequatur quia! Ipsam eum perspiciatis explicabo delectus repellat,
                            recusandae magnam placeat non commodi ab?</p>
                        <div style="display: grid; gap: 0.3rem;">
                            <h3>John Watson</h3>
                            <h6>CEO at Facebook</h6>
                            <div style="color: red;">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/diverse-people-working-office_53876-104681.webp" alt="">
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo hic obcaecati iste facere,
                            mollitia earum placeat consequatur quia! Ipsam eum perspiciatis explicabo delectus repellat,
                            recusandae magnam placeat non commodi ab?</p>
                        <div style="display: grid; gap: 0.3rem;">
                            <h3>John Watson</h3>
                            <h6>CEO at Facebook</h6>
                            <div style="color: red;">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- about us -->

    <div class="about_us" id="about">
        <div class="product_title">
            <h1>TRY PROFESSIONAL <br> EQUIPMENT</h1>
            <h5>PERFORMANCE</h5>
        </div>
        <div class="about_container">

            <img class="about_container_img" src="./images/coders-discussing-about-source-code-compiling-discovers-errors-asks-rest-team-explanations-front-multiple-screens-running-algorithms-software-developers-doing-teamwork_482257-41856.webp" alt="">

            <div class="about_text">
                <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h1>
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, Lorem ipsum dolor, sit amet
                        consectetur adipisicing elit. Autem vel debitis molestias odit dolores nobis doloribus
                        repellendus iusto, dignissimos eligendi officia sed illum totam incidunt esse eius quia
                        aperiam adipisci? maiores alias illum necessitatibus obcaecati nisi excepturi temporibus
                        ipsum ex sunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem debitis eius
                        praesentium necessitatibus animi eaque reiciendis repudiandae itaque laudantium non.</p>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, ipsa eius modi quibusdam
                        vitae soluta laudantium eveniet vero beatae a officiis blanditiis quia neque possimus odio
                        nesciunt voluptate, quis itaque maiores exercitationem labore eos illo! Sit asperiores ipsam
                        ut ab?</p>
                </div>
            </div>
        </div>
    </div>


    <?php
        @include('layouts/footer.php');
    ?>






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

</body>

</html>