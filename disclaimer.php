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
        <?= $domainTitle ?> — Wyłączenie odpowiedzialności
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
                    <span class="section-subtitle">Informacje prawne</span>
                    <h1>Wyłączenie odpowiedzialności</h1>
                    
                    <p>
                        <strong>Informacje ogólne:</strong> Wszystkie materiały, artykuły i dane publikowane w serwisie 
                        <strong><?= $domainTitle ?></strong> mają charakter wyłącznie informacyjny i edukacyjny. 
                        Nie stanowią one i nie powinny być traktowane jako spersonalizowana rekomendacja inwestycyjna, 
                        profesjonalna porada prawna lub finansowa, oferta publiczna ani zachęta do zawierania 
                        jakichkolwiek transakcji finansowych.
                    </p>
                </div>

                <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        <strong>Brak gwarancji:</strong> Zespół <strong><?= $domainTitle ?></strong> nie daje żadnych gwarancji 
                        co do dokładności, kompletności ani aktualności informacji prezentowanych na blogu. 
                        Wszelkie wzmianki o potencjalnym wzroście kariery, programach dochodu pasywnego lub 
                        wynikach naszych klientów z przeszłości nie gwarantują podobnych rezultatów w przyszłości. 
                        Indywidualne wyniki Twojej działalności zależą od wielu czynników, w tym od warunków rynkowych 
                        w <strong>Polsce i UE</strong>, i mogą istotnie odbiegać od przedstawionych przykładów.
                    </p>

                    <p>
                        <strong>Ograniczenie odpowiedzialności:</strong> Administracja serwisu <strong><?= $fullDomain ?></strong>, 
                        jego właściciele i podmioty powiązane nie ponoszą odpowiedzialności za 
                        jakiekolwiek bezpośrednie lub pośrednie szkody, decyzje lub działania 
                        podjęte przez użytkownika na podstawie informacji zawartych w tym zasobie. 
                        Pełna odpowiedzialność za korzystanie z proponowanych metodologii i możliwe konsekwencje 
                        spoczywa wyłącznie na użytkowniku. Treści platformy <strong><?= $domainTitle ?></strong> są gromadzone 
                        ze źródeł uznawanych za wiarygodne i publicznie dostępne w momencie publikacji.
                    </p>

                    <p>
                        <strong>Ostrzeżenie o ryzyku:</strong> Każda działalność mająca na celu 
                        zmianę statusu finansowego lub inwestycje w nowe projekty wiąże się z 
                        określonym poziomem ryzyka. Przed podjęciem 
                        jakichkolwiek ważnych decyzji strategicznych stanowczo zalecamy przeprowadzenie 
                        własnego badania oraz skonsultowanie się z wykwalifikowanym, 
                        niezależnym specjalistą w odpowiedniej dziedzinie.
                    </p>

                    <p>
                        <strong>Potwierdzenie użytkownika:</strong> Kontynuując korzystanie z 
                        serwisu <strong><?= $domainTitle ?></strong>, potwierdzasz, że ukończyłeś 18 lat, 
                        działasz z własnej woli, w pełni rozumiesz i akceptujesz wszystkie 
                        wymienione ryzyka oraz warunki niniejszego wyłączenia odpowiedzialności.
                    </p>

                    <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                        <p style="font-size: 0.9rem; opacity: 0.5;">Ostatnia aktualizacja: Luty 2026</p>
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
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__description">
                    Platforma roku dla tych, którzy wybierają świadomy wzrost. Technologie, które pracują dla Ciebie w dowolnym miejscu w Europie.
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
            <p>©
                <?= date('Y') ?>
                <?= $domainTitle ?>. Wszelkie prawa zastrzeżone. Oferta aktywna tylko w krajach UE.
            </p>
        </div>
    </footer>

    <div class="cookie-popup" id="cookie-popup">
        <div class="cookie-popup__content">
            <div class="cookie-popup__icon">
                <i data-lucide="cookie"></i>
            </div>
            <div class="cookie-popup__text">
                <p>Ta strona używa plików cookies w celu poprawy działania. Więcej szczegółów w naszej <a href="./cookies.php">Polityce plików cookie</a>.</p>
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