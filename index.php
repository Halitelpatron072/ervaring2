
<?php
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ervaring - Startpagina</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="container">
            <a href="#" class="logo">Ervaring</a>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </nav>

    <section id="home" class="hero">
        <div class="container">
            <h2>Welkom bij Ervaring</h2>
            <p>Ontdek mijn vaardigheden en inzichten die de toekomst vormgeven. Ik heb deze website gemaakt om mijn expertise in verschillende gebieden te tonen, nieuwe kansen te vinden en mijn passie voor leren en innoveren te delen.</p>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <h3>Belangrijke Hoogtepunten</h3>
            <div class="grid">
                <div class="feature-item">
                    <h4>Ervaring</h4>
                    <p>Uitgebreide achtergrond in diverse domeinen, met praktische kennis en innovatieve oplossingen voor elke uitdaging.</p>
                </div>
                <div class="feature-item">
                    <h4>Vaardigheden</h4>
                    <p>Bedreven in meerdere technologieën en methodologieën, altijd aangepast aan de nieuwste trends en beste praktijken.</p>
                </div>
                <div class="feature-item">
                    <h4>Projecten</h4>
                    <p>Praktische ervaring met real-world projecten, die creativiteit, probleemoplossing en aandacht voor detail demonstreren.</p>
                </div>
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