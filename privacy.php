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
        <?= $domainTitle ?> — Polityka Prywatności
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
                    <span class="section-subtitle">Standard Prawny UE</span>
                    <h1>Polityka prywatności</h1>

                    <p>
                        Niniejsza Polityka prywatności dotyczy danych osobowych przekazywanych przez klientów 
                        <strong><?= $domainTitle ?></strong>, zarówno w celu świadczenia usług doradztwa zawodowego, 
                        jak i w ramach innych interakcji w formacie elektronicznym. Zapewniamy wsparcie techniczne 
                        i informacyjne w ramach programów eksperckich oraz inicjatyw innowacyjnych.
                    </p>

                    <p>
                        <strong><?= $domainTitle ?></strong> zastrzega sobie prawo do wprowadzania zmian i uzupełnień 
                        do obowiązujących postanowień Polityki. Zmiany te mają pierwszeństwo przed obecnymi punktami. 
                        Podając swoje dane, wyrażasz pełną zgodę na ich przetwarzanie w sposób przewidziany w niniejszej Polityce.
                    </p>
                </div>

                <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                    
                    <h2>Zasady gromadzenia, przechowywania i usuwania danych</h2>
                    <p>
                        <strong><?= $domainTitle ?></strong> gromadzi dane osobowe wyłącznie za zgodą użytkownika i jedynie 
                        w celu świadczenia usług wysokiej jakości: dostępu do platformy, udziału w sesjach strategicznych, 
                        otrzymywania raportów analitycznych oraz wdrażania innowacji. Aby zapobiec wyciekowi danych, 
                        stosujemy nowoczesne protokoły szyfrowania oraz szereg środków bezpieczeństwa informacji.
                    </p>
                    <p>
                        Maksymalny okres przechowywania danych osobowych wynosi 75 lat od daty otrzymania informacji. 
                        W pozostałych przypadkach firma przechowuje dane do czasu zakończenia swojej działalności lub 
                        do momentu oficjalnego wycofania zgody przez użytkownika. Usuwanie lub anonimizacja danych 
                        następuje po osiągnięciu celu ich gromadzenia lub na prośbę klienta.
                    </p>

                    <h2>Informacje techniczne</h2>
                    <p>Podczas odwiedzania zasobu <strong><?= $fullDomain ?></strong> automatycznie gromadzone są następujące dane:</p>
                    <ul class="pages__list">
                        <li>Czas dostępu i adres IP urządzenia;</li>
                        <li>Źródła odesłań do zasobu internetowego;</li>
                        <li>Odwiedzane strony i wyświetlenia bloków informacyjnych;</li>
                        <li>Inne informacje techniczne dostarczane przez przeglądarkę;</li>
                        <li>Numer telefonu (w przypadku połączenia z numerami podanymi na stronie).</li>
                    </ul>

                    <h2>Personalizacja i uwierzytelnianie</h2>
                    <p>Podczas wypełniania formularzy kontaktowych zbieramy informacje niezbędne do personalizacji usług:</p>
                    <ul class="pages__list">
                        <li>Nazwa użytkownika w celu identyfikacji;</li>
                        <li>Adres e-mail i numer telefonu w celu sprawnej komunikacji i wsparcia eksperckiego.</li>
                    </ul>

                    <h2>Informacje o działaniach użytkownika</h2>
                    <ul class="pages__list">
                        <li>Informacje o umowach i kontraktach pomiędzy klientem a <strong><?= $domainTitle ?></strong>;</li>
                        <li>Dane dotyczące zapytań wysyłanych za pośrednictwem formularzy na stronie;</li>
                        <li>Informacje o otrzymanych konsultacjach i ukończonych programach rozwoju kariery;</li>
                        <li>Dokonane płatności i inne informacje finansowe przewidziane przez prawo Polski i UE.</li>
                    </ul>

                    <h2>Przekazywanie danych osobom trzecim</h2>
                    <p>
                        <strong><?= $domainTitle ?></strong> nie udostępnia danych klientów osobom trzecim, z wyjątkiem przypadków:
                    </p>
                    <ul class="pages__list">
                        <li>Uzyskania wyraźnej zgody użytkownika;</li>
                        <li>Wymagań właściwych organów <strong>Polski</strong> zgodnie z obowiązującym prawem;</li>
                        <li>Przypadków fuzji strategicznej lub przejęcia firmy.</li>
                    </ul>

                    <h2>Wykorzystanie plików Cookies</h2>
                    <p>
                        Pliki cookie pozwalają nam analizować ruch i zapisywać Twoje preferencje (np. ustawienia regionu 
                        <strong>Polska</strong>), aby korzystanie z <strong><?= $fullDomain ?></strong> było jak najbardziej efektywne. 
                        Możesz w dowolnym momencie wyłączyć pliki Cookies w ustawieniach swojej przeglądarki.
                    </p>

                    <div class="pages__contact-box">
                        <h2>Prawa użytkownika</h2>
                        <p>
                            Jeśli chcesz edytować swoje dane lub całkowicie zaprzestać ich przetwarzania zgodnie z normami 
                            <strong>RODO (GDPR)</strong>, prosimy o kontakt z zespołem <strong><?= $domainTitle ?></strong>:
                        </p>
                        <ul class="pages__contact-info">
                            <li><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
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
                <p>Ta strona używa plików cookies w celu poprawy działania. Więcej szczegółów w naszej <a href="./cookies.php">Polityce cookies</a>.</p>
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