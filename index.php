<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Home</title>
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
        .hero {
            background: url('https://source.unsplash.com/random/1600x900/?education') no-repeat center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
            position: relative;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }
        .hero-content {
            position: relative;
            z-index: 2;
            animation: fadeIn 2s ease-in-out;
        }
        .hero-content h1 {
            font-size: 4.5rem;
            font-weight: 800;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #ffd700;
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.8), 0 0 20px rgba(255, 215, 0, 0.6);
            margin-bottom: 1.5rem;
            animation: glow 2s ease-in-out infinite alternate;
        }
        .hero-content p {
            font-size: 2rem;
            font-weight: 400;
            background: rgba(59, 130, 246, 0.2);
            padding: 0.8rem 1.5rem;
            border-radius: 8px;
            backdrop-filter: blur(8px);
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes glow {
            from {
                text-shadow: 0 0 10px rgba(255, 215, 0, 0.8), 0 0 20px rgba(255, 215, 0, 0.6);
            }
            to {
                text-shadow: 0 0 20px rgba(255, 215, 0, 1), 0 0 30px rgba(255, 215, 0, 0.8);
            }
        }
        .section {
            padding: 4rem 2rem;
            text-align: center;
        }
        .features, .stats, .testimonials, .articles {
            margin: 2rem 0;
        }
        .features-grid, .stats-grid, .testimonials-grid, .articles-grid {
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
            margin-bottom: 1rem;
        }
        footer {
            background: #1e3a8a;
            color: white;
            text-align: center;
            padding: 1rem 0;
        }
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 3rem;
            }
            .hero-content p {
                font-size: 1.4rem;
            }
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
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Rehan School</h1>
            <p>Empowering Future Leaders with AI-Enabled Education</p>
        </div>
    </section>
    <section class="features section">
        <h2>Our Unique Features</h2>
        <div class="features-grid">
            <div class="card">
                <h3>AI-Enabled Education</h3>
                <p>Integrating cutting-edge AI to personalize learning experiences.</p>
            </div>
            <div class="card">
                <h3>Holistic Development</h3>
                <p>Fostering creativity, critical thinking, and emotional intelligence.</p>
            </div>
            <div class="card">
                <h3>Entrepreneurial Focus</h3>
                <p>Equipping students with skills to innovate and lead.</p>
            </div>
        </div>
    </section>
    <section class="stats section">
        <h2>Our Impact</h2>
        <div class="stats-grid">
            <div class="card">
                <h3>50+</h3>
                <p>Team Members</p>
            </div>
            <div class="card">
                <h3>1000+</h3>
                <p>Students</p>
            </div>
            <div class="card">
                <h3>5</h3>
                <p>Campuses</p>
            </div>
        </div>
    </section>
    <section class="testimonials section">
        <h2>Testimonials</h2>
        <div class="testimonials-grid">
            <div class="card">
                <p>"Rehan School transformed my child's learning journey!"</p>
                <p>- Parent</p>
            </div>
            <div class="card">
                <p>"The AI tools here are game-changers for education."</p>
                <p>- Student</p>
            </div>
        </div>
    </section>
    <section class="articles section">
        <h2>Latest Articles</h2>
        <div class="articles-grid">
            <div class="card">
                <h3>New AI Curriculum Launched</h3>
                <p>Explore our latest curriculum updates for 2025.</p>
            </div>
            <div class="card">
                <h3>Student Wins National Award</h3>
                <p>Rehan School student shines at national competition.</p>
            </div>
        </div>
    </section>
    <footer>
        <p>© 2025 Rehan School. All rights reserved.</p>
    </footer>
    <script>
        function navigate(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
