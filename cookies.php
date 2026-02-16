<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Polityka plików cookie
    </title>
    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Cpath d='M4 24h6v4H4v-4zm8-8h6v12h-6V16zm8-8h6v20h-6V8zM22 2l6 6-6 6-6-6 6-6z' fill='%235D5FEF'/%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Syne:wght@600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lenis@1.0.0/dist/lenis.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav" data-nav>
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Start</a></li>
                    <li><a href="./#strategies" class="nav__link">Strategie</a></li>
                    <li><a href="./#cases" class="nav__link">Case studies</a></li>
                    <li><a href="./#mentors" class="nav__link">Mentorzy</a></li>
                    <li><a href="./#faq" class="nav__link">FAQ</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--header">Kontakt</a>
                <button class="burger" aria-label="Menu" data-burger>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <main>
        <section class="pages">
            <div class="container">
                <div class="pages__header" data-aos="fade-up">
                    <span class="section-subtitle">Prywatność i technologia</span>
                    <h1>Polityka plików cookie</h1>

                    <p>
                        Witamy w <strong><?= $domainTitle ?></strong>! Aby poprawić komfort korzystania z naszej witryny, 
                        zapewnić jej prawidłowe działanie oraz analizować aktywność użytkowników, stosujemy pliki cookie 
                        i podobne technologie. Niniejsza polityka szczegółowo wyjaśnia, jakie technologie stosujemy, 
                        w jakich celach oraz w jaki sposób możesz nimi zarządzać.
                    </p>
                </div>

                <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                    <h2>Czym są pliki cookie?</h2>
                    <p>
                        Plik cookie to niewielki fragment danych (plik tekstowy), który witryna internetowa zapisuje na 
                        Twoim urządzeniu (komputerze, tablecie lub smartfonie) podczas jej odwiedzania. Pozwala to 
                        platformie <strong><?= $domainTitle ?></strong> "pamiętać" Twoje działania i preferencje 
                        (takie jak język, ustawienia regionu Polski i inne parametry) przez określony czas, dzięki czemu 
                        nie musisz wprowadzać ich ponownie przy każdej wizycie.
                    </p>

                    <h2>Jakich rodzajów plików cookie używamy?</h2>
                    <p>
                        Klasyfikujemy pliki cookie używane w serwisie <strong><?= $fullDomain ?></strong> według następujących kategorii:
                    </p>
                    <ul class="pages__list">
                        <li>
                            <strong>Niezbędne pliki cookie:</strong> Pliki te są kluczowe dla funkcjonowania witryny. 
                            Umożliwiają poruszanie się po stronach <strong><?= $domainTitle ?></strong> i korzystanie z jego podstawowych funkcji.
                        </li>
                        <li>
                            <strong>Analityczne i wydajnościowe pliki cookie:</strong> Pliki te gromadzą anonimowe informacje o tym, 
                            jak odwiedzający korzystają z naszej witryny, pomagając nam ulepszać treści na naszym blogu.
                        </li>
                        <li>
                            <strong>Funkcjonalne pliki cookie:</strong> Pliki te pozwalają witrynie zapamiętać Twoje wybory, 
                            aby zapewnić bardziej spersonalizowane doświadczenia w ramach usług konsultingowych.
                        </li>
                        <li>
                            <strong>Reklamowe (marketingowe) pliki cookie:</strong> Pliki te są używane do dostarczania reklam 
                            odpowiadających Twoim zainteresowaniom.
                        </li>
                    </ul>

                    <h2>Dlaczego używamy plików cookie?</h2>
                    <p>Główne cele stosowania plików cookie w serwisie <strong><?= $domainTitle ?></strong>:</p>
                    <ul class="pages__list">
                        <li>Zapewnienie stabilnego i bezpiecznego działania witryny.</li>
                        <li>Analiza zachowań użytkowników w celu optymalizacji struktury serwisu.</li>
                        <li>Personalizacja treści i ustawień dla wygody użytkowników w Europie.</li>
                        <li>Dostarczanie istotnych materiałów marketingowych i reklamowych.</li>
                    </ul>

                    <h2>Twój wybór i zarządzanie plikami cookie</h2>
                    <p>
                        Masz pełną kontrolę nad plikami cookie. W dowolnym momencie możesz zmienić ustawienia w swojej przeglądarce. 
                        Pamiętaj jednak: wyłączenie niezbędnych plików cookie może spowodować nieprawidłowe działanie niektórych 
                        funkcji naszej witryny.
                    </p>

                    <h2>Pliki cookie stron trzecich</h2>
                    <p>
                        Na niektórych stronach <strong><?= $domainTitle ?></strong> możemy korzystać z usług firm zewnętrznych, 
                        takich jak Google Analytics lub Three.js do wizualizacji. Zalecamy zapoznanie się z ich politykami prywatności.
                    </p>

                    <h2>Aktualizacje niniejszej polityki</h2>
                    <p>
                        Możemy od czasu do czasu aktualizować niniejszą Politykę, aby odzwierciedlić zmiany w technologii lub przepisach prawa. 
                        Dalsze korzystanie z naszej witryny oznacza akceptację wprowadzonych zmian.
                    </p>

                    <div class="pages__contact-box">
                        <h2>Informacje kontaktowe</h2>
                        <p>
                            Jeśli masz jakiekolwiek pytania dotyczące naszej polityki plików cookie w 
                            <strong><?= $domainTitle ?></strong>, prosimy o kontakt:
                        </p>
                        <ul class="pages__contact-info">
                            <li><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                            <li><strong>Telefon:</strong> <a href="tel:+48228132449">+48 22 813 24 49</a></li>
                            <li><strong>Adres:</strong> ul. Marszałkowska 126/134, 00-008 Warszawa, Poland</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col footer__col--info">
                <a href="./#hero" class="logo footer__logo">
                    <span class="logo__dot"></span>
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__description">
                    Platforma roku dla tych, którzy wybierają świadomy wzrost. Technologie, które pracują dla Ciebie w całej Europie.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Nawigacja</h4>
                <ul class="footer__list">
                    <li><a href="./#hero">Start</a></li>
                    <li><a href="./#strategies">Strategie</a></li>
                    <li><a href="./#cases">Case studies</a></li>
                    <li><a href="./#contact">Kontakt</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Informacje prawne</h4>
                <ul class="footer__list">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Kontakt</h4>
                <ul class="footer__list footer__list--contacts">
                    <li><a href="tel:+48228132449">+48 22 813 24 49</a></li>
                    <li><a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                    <li><span class="footer__address">ul. Marszałkowska 126/134, 00-008 Warszawa, Poland</span></li>
                </ul>
            </div>
        </div>

        <div class="container footer__bottom">
            <p>© <?= date('Y') ?> <?= $domainTitle ?>. Wszelkie prawa zastrzeżone. Oferta aktywna w krajach UE.</p>
        </div>
    </footer>

    <div class="cookie-popup" id="cookie-popup">
        <div class="cookie-popup__content">
            <div class="cookie-popup__icon"><i data-lucide="cookie"></i></div>
            <div class="cookie-popup__text">
                <p>Ta strona używa plików cookies w celu poprawy jej działania. Więcej informacji w naszej <a href="./cookies.php">Polityce cookies</a>.</p>
            </div>
            <div class="cookie-popup__actions">
                <button class="btn btn--primary btn--sm" id="cookie-accept">Akceptuję</button>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/lenis@1.1.13/dist/lenis.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="script.js"></script>
</body>

</html>