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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">Product</a></li>
            <li><a href="index.php">Outlets</a></li>
            <li><a href="index.php">Review</a></li>
            <li><a href="index.php">About Us</a></li>
        </ul>
    </nav>



    <div class="warranty-policy"
        style="display: grid; justify-items: center; align-items: center; text-align: center; margin: 100px 0; font-family: Arial, Helvetica, sans-serif;">
        <h1>Warranty Policy</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum minima provident, quod illum magni quasi
            quis laboriosam autem totam dolorum?</p>
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
                        <img class="img" src="./images/facebook-footer.png" alt="img" >
                    </a>
                </div>
            </div>
            <div class="footer_address">
                <h2>CORPORATE OFFICE IN DHAKA</h2>
                <div>
                    <i class="fa-solid fa-location-dot"></i>
                    <p>2nd Floor, Ka/32/5/A (Palash Tower), Pragati Sarani (Shahjadpur), Gulshan, Dhaka-1212, Bangladesh.                    </p>
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