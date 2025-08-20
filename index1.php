<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elevated TravelSaathi Design</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        /* Header Styling */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background-color: #0d0d0d;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            position: relative;
            margin-bottom: -50px;
        }

        /* Logo */
        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 173px;
            margin-right: 15px;
        }

        .logo h1 {
            color: white;
            font-size: 24px;
            font-weight: 700;
        }

        /* Nav Links */
        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #00bcd4;
        }

        /* Search Bar */
        .search-container {
            position: relative;
            margin-left: -54px;
        }

        .search-container input {
            padding: 10px;
            border-radius: 20px;
            border: none;
            outline: none;
            font-size: 16px;
            width: 285px;
            transition: width 0.3s ease;
        }

        .search-container input:focus {
            width: 300px;
        }

        .search-container .icon {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            color: #333;
        }

        /* Sign In Button */
        .sign-in-btn {
            padding: 10px 20px;
            background-color: #00bcd4;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .sign-in-btn:hover {
            background-color: #ff4081;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .search-container input {
                width: 100%;
            }

            .search-container input:focus {
                width: 100%;
            }
        }
    
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #111;
            position: relative;
            overflow: hidden;
           
        }

        /* Background Patterns */
        .container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('background-pattern.png'); /* Add subtle circular lines similar to the example */
            opacity: 0.1;
            z-index: 1;
        }

        /* Overlapping Image Section */
        .image-section {
            width: 50%;
            position: relative;
            z-index: 2;
        }

        .image-section img {
            width: 90%;
            height: auto;
            border-radius: 12px;
            transition: transform 0.5s ease;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .image-section img:hover {
            transform: scale(1.05);
        }

        /* Content Section with Animated Text */
        .content {
            width: 50%;
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            color: #fff;
            padding: 20px;
            animation: slideIn 1s ease-out;
            position: relative;
            border-bottom: #f0f0f0 solid 1px;
        }

        .content h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
            background: linear-gradient(45deg, #00bcd4, #ff4081);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textFadeIn 1.5s ease-out;
        }

        .content p {
            font-size: 18px;
            margin-bottom: 30px;
            line-height: 1.6;
            animation: fadeIn 2s ease;
        }

        .content a {
            padding: 10px 20px;
            background-color: #00bcd4;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-weight: 500;
            font-size: 16px;
            box-shadow: 0 10px 20px rgba(0, 188, 212, 0.3);
        }

        .content a:hover {
            background-color: #ff4081;
        }

        /* Button Styles */
        .btn-container {
            display: flex;
            gap: 15px;
        }

        /* Animation for Text and Content */
        @keyframes slideIn {
            0% {
                transform: translateX(50px);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes textFadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                text-align: center;
                height: auto;
            }

            .image-section,
            .content {
                width: 100%;
            }

            .content h1 {
                font-size: 36px;
            }

            .content p {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>

<!-- Header Section -->
<?php include 'header.php'; ?>

    <div class="container">
        <!-- Overlapping Images Section -->
        <div class="image-section">
            <img src="images/ai.jpg" alt="Travel Image 1">
        </div>

        <!-- Content with Animated Text and Links -->
        <div class="content">
            <h1>Explore the World with TravelSaathi</h1>
            <p>Discover personalized itineraries curated just for you. With TravelSaathi, you can compare tour providers, save time, and enjoy a seamless travel planning experience like never before.</p>
            <div class="btn-container">
                <a href="#">Learn More</a>
                <a href="#">Start Your Journey</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="card-container">
            <a href="https://example.com" class="card-link">
                <div class="card">
                    <div class="card-image">
                        <img src="images/ai.jpg" alt="AI Adventure">
                    </div>
                    <div class="card-content">
                        <h3>AI Adventure</h3>
                        
                    </div>
                </div>
            </a>
    
            <a href="https://example.com" class="card-link">
                <div class="card">
                    <div class="card-image">
                        <img src="images/cr6.webp" alt="Nature Escapes">
                    </div>
                    <div class="card-content">
                        <h3>Nature Escapes</h3>
                        
                    </div>
                </div>
            </a>
    
            <a href="https://example.com" class="card-link">
                <div class="card">
                    <div class="card-image">
                        <img src="images/cr3.jpeg" alt="Cultural Discovery">
                    </div>
                    <div class="card-content">
                        <h3>Cultural Discovery</h3>
                        
                    </div>
                </div>
            </a>
    
            <a href="https://example.com" class="card-link">
                <div class="card">
                    <div class="card-image">
                        <img src="images/cr4.jpg" alt="Historical Journeys">
                    </div>
                    <div class="card-content">
                        <h3>Historical Journeys</h3>
                        
                    </div>
                </div>
            </a>
        </div>
    </div>
    
    <br><br>
    <!-- Footer Section -->
    <?php include 'footer.php'; ?>
      
</body>

</html>
