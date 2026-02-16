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
        <?= $domainTitle ?> — Polityka przetwarzania danych osobowych
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
                    <span class="section-subtitle">Ochrona i przejrzystość</span>
                    <h1>Polityka przetwarzania danych osobowych</h1>

                    <p>
                        Niniejsza polityka przetwarzania danych osobowych (dalej —
                        „Polityka”) określa zasady i warunki przetwarzania danych osobowych
                        podejmowane przez platformę <strong><?= $domainTitle ?></strong> (dalej — „Operator”) oraz
                        ustanawia środki zapewniające bezpieczeństwo tych danych zgodnie z wymogami <strong>RODO (GDPR)</strong>.
                    </p>
                </div>

                <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                    <h2>1. Postanowienia ogólne</h2>
                    <p>
                        1.1. Najważniejszym celem i warunkiem prowadzenia swojej działalności przez
                        Operatora jest przestrzeganie praw i wolności człowieka i obywatela przy
                        przetwarzaniu jego danych osobowych, w tym ochrona prawa do
                        prywatności, tajemnicy osobistej i rodzinnej.
                    </p>
                    <p>
                        1.2. Niniejsza Polityka ma zastosowanie do wszystkich informacji, które
                        Operator może uzyskać o osobach odwiedzających (dalej — „Użytkownicy”)
                        witrynę internetową <strong><?= $fullDomain ?></strong>.
                    </p>

                    <h2>2. Podstawowe pojęcia używane w Polityce</h2>
                    <ul class="pages__list">
                        <li>
                            <strong>Witryna internetowa</strong> — zbiór materiałów graficznych i
                            informacyjnych dostępnych w sieci Internet pod adresem sieciowym
                            <strong><?= $fullDomain ?></strong>.
                        </li>
                        <li><strong>Użytkownik</strong> — każda osoba odwiedzająca witrynę.</li>
                        <li>
                            <strong>Dane osobowe</strong> — wszelkie informacje
                            odnoszące się bezpośrednio lub pośrednio do zidentyfikowanego Użytkownika witryny.
                        </li>
                        <li>
                            <strong>Zgoda</strong> — dobrowolne, świadome i jednoznaczne
                            wyrażenie woli Użytkownika na przetwarzanie jego danych.
                        </li>
                    </ul>

                    <h2>3. Dane, które przetwarzamy</h2>
                    <p>Operator może przetwarzać następujące kategorie danych:</p>
                    <ul class="pages__list">
                        <li>
                            <strong>Dane osobowe przekazywane przez Użytkownika:</strong>
                            <ul>
                                <li>Imię i nazwisko;</li>
                                <li>Adres poczty elektronicznej (Email);</li>
                                <li>Numery telefonów (walidacja zgodnie ze standardami <strong>Polski i UE</strong>).</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Dane zbierane automatycznie:</strong>
                            <ul>
                                <li>
                                    Zanonimizowane dane o odwiedzających (pliki „cookies”), adres IP, typ przeglądarki oraz analityka interakcji z treściami bloga.
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <h2>4. Cele przetwarzania danych osobowych</h2>
                    <ul class="pages__list">
                        <li>
                            Identyfikacja Użytkownika w celu zapewnienia dostępu do usług
                            platformy konsultingowej <strong><?= $domainTitle ?></strong>.
                        </li>
                        <li>
                            Nawiązanie kontaktu zwrotnego w celu odpowiedzi na zapytania dotyczące rozwoju kariery i relokacji.
                        </li>
                        <li>
                            Zawarcie i wykonanie umów na usługi eksperckie w Europie.
                        </li>
                        <li>
                            Poprawa jakości działania witryny oraz dopasowanie treści do zainteresowań odbiorców.
                        </li>
                    </ul>

                    <h2>5. Podstawy prawne przetwarzania</h2>
                    <p>
                        Operator przetwarza dane osobowe Użytkownika wyłącznie w przypadku posiadania dobrowolnej zgody, wyrażonej poprzez wypełnienie formularzy na stronie lub ustawienie parametrów przeglądarki (dla plików cookie).
                    </p>

                    <h2>6. Bezpieczeństwo danych</h2>
                    <p>
                        Operator podejmuje niezbędne środki techniczne i organizacyjne w celu
                        ochrony danych przed nieuprawnionym dostępem zgodnie z normami <strong>RODO</strong>.
                        Twoje dane nigdy nie zostaną przekazane podmiotom trzecim bez Twojej zgody, z wyjątkiem przypadków przewidzianych prawem.
                    </p>

                    <div class="pages__contact-box">
                        <h2>Informacje kontaktowe</h2>
                        <p>
                            W przypadku pytań dotyczących wycofania zgody lub dostępu do Twoich danych na platformie <strong><?= $domainTitle ?></strong>, prosimy o kontakt:
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
                <?= $domainTitle ?>. Wszelkie prawa zastrzeżone. Oferta aktywna w krajach UE.
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