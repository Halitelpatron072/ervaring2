<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    if (!is_dir('messages')) {
        mkdir('messages', 0755, true);
    }

    $file = 'messages/messages.txt';
    $content = "Naam: $name\nEmail: $email\nOnderwerp: $subject\nBericht: $message\nDatum: " . date('Y-m-d H:i:s') . "\n---\n\n";

    if (file_put_contents($file, $content, FILE_APPEND)) {
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
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <nav>
        <div class="container">
            <a href="#" class="logo">Ervaring</a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">Over Mij</a></li>
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
            <p>&copy; 2026 Halit Momunjan</p>
        </div>
    </footer>

    <script>
        const hamburger = document.querySelector('.hamburger');
        const navUl = document.querySelector('nav ul');
        const nav = document.querySelector('nav');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navUl.classList.toggle('active');
        });

        document.querySelectorAll('nav ul li a').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navUl.classList.remove('active');
            });
        });

        window.addEventListener('scroll', () => {
            nav.classList.toggle('scrolled', window.scrollY > 50);
        });
    </script>
</body>
</html>
