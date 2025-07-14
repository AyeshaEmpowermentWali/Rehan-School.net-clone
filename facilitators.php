<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Facilitators</title>
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
        .facilitators-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        .card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card h3 {
            color: #1e3a8a;
            margin-bottom: 0.5rem;
        }
        .card p {
            color: #4b5563;
        }
        .social-links a {
            color: #3b82f6;
            margin: 0 0.5rem;
            text-decoration: none;
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
        <h2>Meet Our Facilitators</h2>
        <p>Our dedicated team of educators and professionals.</p>
        <div class="facilitators-grid">
            <div class="card">
                <h3>John Doe</h3>
                <p>AI Curriculum Specialist</p>
                <div class="social-links">
                    <a href="#">LinkedIn</a>
                    <a href="#">Twitter</a>
                </div>
            </div>
            <div class="card">
                <h3>Jane Smith</h3>
                <p>Entrepreneurship Mentor</p>
                <div class="social-links">
                    <a href="#">LinkedIn</a>
                    <a href="#">Twitter</a>
                </div>
            </div>
            <div class="card">
                <h3>Michael Brown</h3>
                <p>Soft Skills Trainer</p>
                <div class="social-links">
                    <a href="#">LinkedIn</a>
                    <a href="#">Twitter</a>
                </div>
            </div>
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
