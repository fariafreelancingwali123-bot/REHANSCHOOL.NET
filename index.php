<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rehan School – AI Enabled Education</title>

    <!-- Internal CSS -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #f2f5f9;
            color: #333;
        }

        header {
            background: #004080;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background: #0066cc;
            display: flex;
            justify-content: center;
            padding: 10px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #ffd700;
        }

        .hero {
            background: linear-gradient(to right, #004080, #0066cc);
            color: white;
            padding: 60px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 20px;
        }

        .section {
            padding: 40px 20px;
            max-width: 1000px;
            margin: auto;
        }

        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .feature-box {
            background: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            margin: 15px;
            transition: transform 0.3s;
        }

        .feature-box:hover {
            transform: translateY(-5px);
        }

        .stats, .testimonials, .articles {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin-top: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .footer {
            background: #004080;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }

        @media (max-width: 768px) {
            .features {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Rehan School</h1>
    <p>AI Enabled Education for Future Entrepreneurs</p>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="curriculum.php">Curriculum</a>
    <a href="facilitators.php">Facilitators</a>
    <a href="contact.php">Contact</a>
</nav>

<div class="hero">
    <h1>Empowering 10 Million People</h1>
    <p>Through technology, entrepreneurship, and global citizenship</p>
</div>

<section class="section features">
    <div class="feature-box">
        <h3>AI-Enabled Learning</h3>
        <p>We use the latest tools like ChatGPT and Annie to help students learn better and faster.</p>
    </div>
    <div class="feature-box">
        <h3>Holistic Development</h3>
        <p>Including meditation, yoga, TEDx, ethics, and life mission work.</p>
    </div>
    <div class="feature-box">
        <h3>Entrepreneurial Focus</h3>
        <p>We train students to start real startups and earn while they learn.</p>
    </div>
</section>

<section class="section stats">
    <h2>Our Impact</h2>
    <ul>
        <li><strong>Students:</strong> 10,000+</li>
        <li><strong>Team Members:</strong> 50+</li>
        <li><strong>Campuses:</strong> 8 Global Centers</li>
    </ul>
</section>

<section class="section testimonials">
    <h2>What People Say</h2>
    <p>"Rehan School changed my life – I now see the world with new eyes!" – Areeba, Student</p>
    <p>"This is the future of education – real-world skills and mentorship." – Parent</p>
</section>

<section class="section articles">
    <h2>Latest Articles</h2>
    <ul>
        <li><a href="#">Rehan School Featured in Tech Journal</a></li>
        <li><a href="#">Our Students Launch 15 Startups</a></li>
    </ul>
</section>

<div class="footer">
    <p>© 2025 Rehan School. All Rights Reserved.</p>
</div>

</body>
</html>
