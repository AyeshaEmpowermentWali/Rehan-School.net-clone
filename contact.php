<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO inquiries (name, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $message);
    
    if ($stmt->execute()) {
        $success = "Message sent successfully!";
    } else {
        $error = "Error sending message. Please try again.";
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Contact</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            background-color: #f4f4f9;
        }
        header {
            background: linear-gradient(90deg, #1e3a8a, #3b82f6);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        nav {
            display: flex;
            justify-content: center;
            gap: 2rem;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: bold;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #facc15;
        }
        .section {
            padding: 4rem 2rem;
            text-align: center;
            margin-top: 80px;
        }
        .contact-info, .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 0.8rem;
            margin: 0.5rem 0;
            border: 1px solid #d1d5db;
            border-radius: 5px;
        }
        .contact-form button {
            background: #3b82f6;
            color: white;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .contact-form button:hover {
            background: #1e3a8a;
        }
        .success, .error {
            color: white;
            padding: 1rem;
            margin: 1rem 0;
            border-radius: 5px;
        }
        .success {
            background: #10b981;
        }
        .error {
            background: #ef4444;
        }
        footer {
            background: #1e3a8a;
            color: white;
            text-align: center;
            padding: 1rem 0;
        }
        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="#" onclick="navigate('index.php')">Home</a>
            <a href="#" onclick="navigate('curriculum.php')">Curriculum</a>
            <a href="#" onclick="navigate('facilitators.php')">Facilitators</a>
            <a href="#" onclick="navigate('contact.php')">Contact</a>
        </nav>
    </header>
    <section class="section">
        <h2>Contact Us</h2>
        <div class="contact-info">
            <h3>Our Contact Details</h3>
            <p>Address: 123 Education Lane, Knowledge City</p>
            <p>Phone: +123-456-7890</p>
            <p>Email: info@rehanschool.net</p>
        </div>
        <div class="contact-form">
            <h3>Send Us a Message</h3>
            <?php if (isset($success)) echo "<p class='success'>$success</p>"; ?>
            <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
            <form method="POST" action="">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
    <footer>
        <p>&copy; 2025 Rehan School. All rights reserved.</p>
    </footer>
    <script>
        function navigate(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
