<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
   
    <title>TravelSaathi Footer</title>
</head>
<body>

<div class="footer-top">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-4 col-6 footer-column">
                <h6>Explore</h6>
                <ul>
                    <li><a href="index1.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="destinations.php">Destinations</a></li>
                    <li><a href="travelguide.php">Travel Guides</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-6 footer-column">
                <h6>Support</h6>
                <ul>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="index.php?view=booking-policy">Booking Policy</a></li>
                    <li><a href="/index.php?view=faqs">FAQs</a></li>
                    <li><a href="/index.php?view=privacy-policy">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-6 footer-column">
                <h6>Follow Us</h6>
                <ul>
                    <li><a href="https://www.facebook.com">Facebook</a></li>
                    <li><a href="https://www.instagram.com">Instagram</a></li>
                    <li><a href="https://www.twitter.com">Twitter</a></li>
                    <li><a href="https://www.linkedin.com">LinkedIn</a></li>
                </ul>
            </div>
        </div>

        <div class="subscribe-section text-center">
            <h5>Subscribe to Our Newsletter</h5>
            <form id="newsletter-form">
                <input type="email" id="email-input" class="form-control" placeholder="Enter your email">
                <button type="submit" class="btn-subscribe">Subscribe</button>
            </form>
        </div>

        <div class="row">
            <div class="col-12 text-center mt-3">
                <p>&copy; 2024 TravelSaathi.com | All Rights Reserved</p>
            </div>
        </div>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
<style>
    /* General Styles */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #0d0d0d;
        margin: 0;
        padding: 0;
    }

    .footer-top {
        border-top: #fff 1px solid;
        background-color: #111;
        padding: 50px 0;
        color: white;
    }

    h6 {
        font-size: 18px;
        margin-bottom: 20px;
        color: #fff;
        font-weight: 600;
        background: linear-gradient(to right, #00F260, #0575E6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    ul li {
        margin-bottom: 10px;
    }

    ul li a {
        color: #aaa;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    ul li a:hover {
        color: #00F260;
    }

    .footer-column {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .footer-top .row {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        flex-wrap: wrap;
    }

    .subscribe-section {
        text-align: center;
        margin: 40px auto;
        width: 100%;
        max-width: 600px;
    }

    .subscribe-section h5 {
        font-size: 22px;
        font-weight: 500;
        color: #fff;
    }

    .form-control {
        width: 300px;
        padding: 10px;
        margin: 10px 0;
        border: 2px solid #0575E6;
        background-color: #222;
        color: #fff;
        border-radius: 25px;
        display: inline-block;
    }

    .btn-subscribe {
        background-color: #0575E6;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 25px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-subscribe:hover {
        background-color: #00F260;
    }

    p {
        font-size: 14px;
        color: #777;
        margin: 0;
    }

    .text-center {
        text-align: center;
    }

    .mt-3 {
        margin-top: 30px;
    }

    .row {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .container {
        max-width: 1140px;
        margin: 0 auto;
    }

</style>
