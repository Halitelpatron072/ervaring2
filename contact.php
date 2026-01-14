<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "halit.momunjan@example.com"; // Replace with your actual email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $fullMessage = "Naam: $name\nEmail: $email\n\nBericht:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        $success = "Bedankt voor je bericht! Ik neem zo snel mogelijk contact met je op.";
    } else {
        $error = "Er is een fout opgetreden. Probeer het later opnieuw.";
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ervaring - Contact</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .contact-form h3 {
            text-align: center;
            margin-bottom: 2rem;
            color: #2c3e50;
        }
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }
        .contact-form button {
            width: 100%;
            padding: 0.75rem;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }
        .contact-form button:hover {
            background-color: #2980b9;
        }
        .message {
            text-align: center;
            margin-bottom: 1rem;
            padding: 0.5rem;
            border-radius: 4px;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <nav>
        <div class="container">
            <a href="#" class="logo">Ervaring</a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">Over Mij</a></li>
                <li><a href="cv/">CV</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <h2>Contact</h2>
            <p>Neem contact met me op voor vragen, samenwerkingen of gewoon om te praten over technologie.</p>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="contact-form">
                <h3>Stuur een bericht</h3>
                <?php if (isset($success)): ?>
                    <div class="message success"><?php echo $success; ?></div>
                <?php elseif (isset($error)): ?>
                    <div class="message error"><?php echo $error; ?></div>
                <?php endif; ?>
                <form method="post" action="">
                    <input type="text" name="name" placeholder="Je naam" required>
                    <input type="email" name="email" placeholder="Je email" required>
                    <input type="text" name="subject" placeholder="Onderwerp" required>
                    <textarea name="message" rows="5" placeholder="Je bericht" required></textarea>
                    <button type="submit">Verstuur</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2026 Ervaring. Alle rechten voorbehouden.</p>
        </div>
    </footer>

    <script>
        const hamburger = document.querySelector('.hamburger');
        const navUl = document.querySelector('nav ul');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navUl.classList.toggle('active');
        });

        // Close menu when clicking a link
        document.querySelectorAll('nav ul li a').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navUl.classList.remove('active');
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
