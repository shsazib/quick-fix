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




    <div class="verify_section">
        <div class="verify_title">
            <h1>VERIFY YOUR PRODUCT</h1>
            <p>Please fill in the form below and submit for verification. You should see a verification success message
                if this is original quickfix.</p>
        </div>
        <form class="verify_info">
            <div class="verify_p_id">
                <label for="p_id">Product ID <span class="red">*</span></label>
                <input id="p_id" placeholder="Enter Your Product ID " />
            </div>
            <div class="verify_vehicle_name">
                <div class="verify_vehicle">
                    <label for="Vehicle"><label for="">Select Your Vehicle Type <span class="red">*</span></label>
                        <!-- <input id="Vehicle" placeholder="Vehicle " class="" /> -->
                        <select name="" id="">
                            <option value="">Motorcycle</option>
                            <option value="">Car</option>
                        </select>
                </div>
                <div class="verify_name">
                    <label for="name">Name <span class="red">*</span></label>
                    <input id="name" placeholder="Name " class="" />
                </div>
            </div>
            <div class="verify_email">
                <label for="email">Email</label>
                <input id="email" placeholder="Your Email " class="" />
            </div>
            <div class="verify_todo">
                <label for="todo">Current TODO</label>
                <input id="todo" placeholder="How many KM did your vehicle run so far?" class="" />
            </div>
            <div class="verify_phone">
                <label for="phone">Phone Number <span class="red">*</span></label>
                <input id="phone" placeholder="+8801XXXXXXXXX" class="" />
            </div>
            <button type="submit" class="verify_submit_btn">Submit</button>
        </form>
    </div>



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




    <script src="./script.js"></script>
</body>

</html>