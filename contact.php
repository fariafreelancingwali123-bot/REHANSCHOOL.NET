<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact – Rehan School</title>

  <!-- Internal CSS -->
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: #f4faff;
      color: #333;
    }

    header {
      background-color: #004080;
      color: #fff;
      padding: 25px 0;
      text-align: center;
    }

    nav {
      background-color: #0066cc;
      padding: 15px 0;
      text-align: center;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      margin: 0 20px;
      font-size: 16px;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #ffcc00;
    }

    .container {
      max-width: 900px;
      margin: 40px auto;
      padding: 30px;
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    .container h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #004080;
    }

    .info {
      margin-bottom: 30px;
      font-size: 16px;
      line-height: 1.8;
    }

    .info strong {
      color: #004080;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    label {
      font-weight: bold;
      color: #333;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
      resize: vertical;
    }

    textarea {
      min-height: 120px;
    }

    button {
      background-color: #004080;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #003060;
    }

    .footer {
      background-color: #004080;
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

      .container {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

<header>
  <h1>Rehan School</h1>
  <p>Connect With Us</p>
</header>

<nav>
  <a href="index.php">Home</a>
  <a href="curriculum.php">Curriculum</a>
  <a href="facilitators.php">Facilitators</a>
  <a href="contact.php">Contact</a>
</nav>

<div class="container">
  <h2>Contact Us</h2>

  <div class="info">
    <p><strong>Address:</strong> 123 Rehan Street, Islamabad, Pakistan</p>
    <p><strong>Email:</strong> contact@rehanschool.net</p>
    <p><strong>Phone:</strong> +92-123-4567890</p>
  </div>

  <form method="post" action="">
    <label for="name">Your Name</label>
    <input type="text" name="name" required>

    <label for="email">Your Email</label>
    <input type="email" name="email" required>

    <label for="message">Your Message</label>
    <textarea name="message" required></textarea>

    <button type="submit">Send Message</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
      echo "<p style='color: green; margin-top: 20px;'>Message sent successfully!</p>";
    } else {
      echo "<p style='color: red; margin-top: 20px;'>Failed to send message. Try again.</p>";
    }

    $stmt->close();
  }
  ?>
</div>

<div class="footer">
  <p>© 2025 Rehan School. All Rights Reserved.</p>
</div>

</body>
</html>
