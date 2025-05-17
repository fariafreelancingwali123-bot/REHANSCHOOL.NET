<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Facilitators – Rehan School</title>

    <!-- Internal CSS -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #f4faff;
            color: #333;
        }

        header {
            background: #004080;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        nav {
            background: #0066cc;
            padding: 12px 0;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-weight: bold;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ffcc00;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        .container h2 {
            color: #004080;
            margin-bottom: 30px;
            text-align: center;
            font-size: 30px;
        }

        .team {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 30px;
        }

        .member {
            background: #f0f8ff;
            padding: 20px;
            border-left: 5px solid #004080;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .member:hover {
            transform: translateY(-5px);
        }

        .member h3 {
            margin-bottom: 8px;
            font-size: 20px;
            color: #003060;
        }

        .member p {
            font-size: 14px;
            color: #555;
        }

        .footer {
            background: #004080;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }

        @media (max-width: 768px) {
            nav {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Rehan School</h1>
    <p>Meet Our Amazing Team</p>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="curriculum.php">Curriculum</a>
    <a href="facilitators.php">Facilitators</a>
    <a href="contact.php">Contact</a>
</nav>

<div class="container">
    <h2>Our Facilitators</h2>

    <div class="team">
        <div class="member">
            <h3>Ghani Programmingwala</h3>
            <p>Empowering students with programming skills.</p>
        </div>
        <div class="member">
            <h3>Doulat Taliours Wala</h3>
            <p>Skilling youth with tailoring and practical creativity.</p>
        </div>
        <div class="member">
            <h3>Maryam Zulifqar Trainingwali</h3>
            <p>Leading training programs for soft skills and development.</p>
        </div>
        <div class="member">
            <h3>Kesser Eduacatiion Wali</h3>
            <p>Focused on holistic educational growth and innovation.</p>
        </div>
        <div class="member">
            <h3>Maria Impact Wali</h3>
            <p>Making a positive impact through mentorship and vision.</p>
        </div>
        <div class="member">
            <h3>Rehmat Empowerment Wala</h3>
            <p>Dedicated to student empowerment and self-confidence building.</p>
        </div>
    </div>
</div>

<div class="footer">
    <p>© 2025 Rehan School. All Rights Reserved.</p>
</div>

</body>
</html>
