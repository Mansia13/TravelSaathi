<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Header Section -->
<?php include 'header.php'; ?>

    <div class="contact-container">
        <div class="contact-info">
            <h1>Contact Us</h1>
            <p>We’d love to hear from you! Please fill out the form below or reach out to us at:</p>
            <ul>
                <li><strong>Phone:</strong> +123 456 789</li>
                <li><strong>Email:</strong> contact@website.com</li>
                <li><strong>Address:</strong> 123 Street, City, Country</li>
                <li><img src="images/contact us.jpg" alt="Location Image" class="contact-image"></li>


            </ul>
        </div>

        <div class="contact-form">
            <h2>Get in Touch</h2>
            <form action="#" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

<!-- Footer Section -->
<?php include 'footer.php'; ?>

</body>
</html>
<style>
   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background-color: black;  /* Keep the background black as desired */
    padding: 20px;
}

.contact-container {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-wrap: wrap;
    gap: 30px;
    padding: 40px;
    background-color: black;
    border-radius: 12px;
    max-width: 1200px;
    margin: 0 auto;
}

/* Contact Info */
.contact-info {
    flex: 1;
    min-width: 300px;
}

.contact-info h1 {
    font-size: 36px;
    margin-bottom: 15px;
    color: #ffffff;  /* Use white for titles */
}

.contact-info p {
    font-size: 18px;
    margin-bottom: 15px;
    color: #cccccc;  /* Use light grey for paragraphs */
}

.contact-info ul {
    list-style-type: none;
}

.contact-info ul li {
    font-size: 16px;
    color: #aaaaaa;  /* Use lighter grey for list items */
    margin-bottom: 10px;
}

/* Contact Form */
.contact-form {
    flex: 1;
    min-width: 300px;
}

.contact-form h2 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #ffffff;  /* Use white for titles */
}

.contact-form form {
    display: flex;
    flex-direction: column;
}

.contact-form label {
    font-size: 16px;
    margin-bottom: 5px;
    color: #cccccc;  /* Use light grey for labels */
}

.contact-form input,
.contact-form textarea {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #777777;  /* Use darker grey for input borders */
    border-radius: 5px;
    font-size: 16px;
    background-color: #222222;  /* Dark background for inputs */
    color: #ffffff;  /* Light text color */
    width: 100%;
}

.contact-form textarea {
    resize: none;
}

.contact-form button {
    padding: 10px 20px;
    background-color: #00bcd4;  /* Button color */
    color: black;  /* Use black text on the button */
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.contact-form button:hover {
    background-color: #ff4081;  /* Change button color on hover */
}

/* Responsive */
@media (max-width: 768px) {
    .contact-container {
        flex-direction: column;
        padding: 20px;
    }

    .contact-info, .contact-form {
        width: 100%;
    }
}

.contact-image {
    width: 80%;  /* Adjust width to a reasonable size */
    max-width: 300px;  /* Set a maximum width */
    height: auto;
    margin: 20px 0;  /* Add some margin for spacing */
    border-radius: 8px;  /* Optional: add rounded corners */
}

</style>