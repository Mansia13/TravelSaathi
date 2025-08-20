<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
     <!-- Header Section -->
     <header class="header">
        <!-- Logo Area -->
        <div class="logo">
            <img src="images/Final LOGO(1)(1).png" alt="TravelSaathi Logo">
            
        </div>

        <!-- Navigation Links -->
        <nav class="nav-links">
            <a href="#">My Trips</a>
            <a href="aboutus.php">About Us</a>
            <a href="contactus.php">Contact Us</a>
        </nav>

        <!-- Search Bar with Icon -->
        <div class="search-container">
            <input type="text" placeholder="Search">
            <span class="icon"><i class="fas fa-search"></i></span>
        </div>

        <!-- Sign In Button -->
        <a href="signup.php" class="sign-in-btn">Sign In</a>
        
    </header>

</body>
</html>
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
        width: 160px;
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
</style>