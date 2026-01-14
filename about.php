<?php
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ervaring - About</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="container">
            <a href="#" class="logo">Ervaring</a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
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
            <h2>Over Mij</h2>
            <p>Ontdek meer over mijn leven, interesses en ambities als softwareontwikkelaar.</p>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <h3>Wie ben ik?</h3>
            <p>Hallo! Ik ben Halit Momunjan, een 17-jarige student softwareontwikkeling aan het Talland College in Alkmaar. Ik ben gepassioneerd door technologie en vind het geweldig om nieuwe dingen te leren en problemen op te lossen met code. Buiten mijn studie geniet ik van gamen, lezen en sporten, wat me helpt om in balans te blijven.</p>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <h3>Mijn Hobby's</h3>
            <div class="grid">
                <div class="feature-item">
                    <h4>Gamen</h4>
                    <p>Ik speel graag videogames, vooral shooters en RPG's. Games als Call of Duty en The Witcher zijn mijn favorieten. Het helpt me om strategisch te denken en te ontspannen na een lange dag coderen.</p>
                </div>
                <div class="feature-item">
                    <h4>Lezen</h4>
                    <p>Ik lees veel sciencefiction en fantasy boeken. Boeken zoals "Dune" van Frank Herbert en "The Name of the Wind" van Patrick Rothfuss inspireren me en voeden mijn creativiteit.</p>
                </div>
                <div class="feature-item">
                    <h4>Sporten</h4>
                    <p>Ik doe aan krachttraining in de gym en kickboksen. Deze sporten houden me fit en geven me discipline. Kickboksen is vooral leuk omdat het een mix is van kracht en techniek.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <h3>Mijn Studie en Toekomst</h3>
            <p>Op het Talland College leer ik alles over programmeren, van webontwikkeling tot app-building. Ik vind het fascinerend hoe code de wereld kan veranderen. In de toekomst wil ik werken als full-stack developer en misschien mijn eigen startup beginnen. Ik ben altijd op zoek naar nieuwe uitdagingen en kansen om te groeien.</p>
            <p>Daarnaast ben ik geïnteresseerd in AI en machine learning, en ik experimenteer graag met nieuwe technologieën in mijn vrije tijd. Wie weet, misschien ontwikkel ik ooit een game of een nuttige app!</p>
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
