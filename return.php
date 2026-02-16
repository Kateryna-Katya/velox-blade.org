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
        <?= $domainTitle ?> — Polityka zwrotów
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
                    <span class="section-subtitle">Gwarancja jakości i przejrzystość</span>
                    <h1>Polityka zwrotu środków</h1>
                    
                    <p>
                        Dążymy do zapewnienia maksymalnej wartości dla każdego klienta <strong><?= $domainTitle ?></strong>. 
                        Jeśli nie jesteś zadowolony z jakości usług lub napotkałeś trudności techniczne, 
                        niniejsza polityka określa zasady i warunki zwrotu płatności.
                    </p>
                </div>

                <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                    <h2>Warunki ubiegania się o zwrot</h2>
                    <p>
                        Możesz ubiegać się o pełny lub częściowy zwrot środków w następujących sytuacjach:
                    </p>
                    <ul class="pages__list">
                        <li>
                            <strong>Niezgodność programu z opisem:</strong> Jeśli treść konsultacji lub materiałów eksperckich znacząco odbiega od programu zadeklarowanego na stronie <strong><?= $domainTitle ?></strong>.
                        </li>
                        <li>
                            <strong>Usterki techniczne:</strong> W przypadku wystąpienia krytycznych problemów na platformie <strong><?= $fullDomain ?></strong>, które uniemożliwiają dostęp do sesji i nie zostały usunięte w ciągu 48 godzin.
                        </li>
                        <li>
                            <strong>„Okres na ochłonięcie”:</strong> Jeśli zdecydujesz się zrezygnować z udziału w programie w ciągu 14 dni kalendarzowych od momentu dokonania płatności (pod warunkiem, że nie uzyskałeś jeszcze dostępu do głównej części materiałów).
                        </li>
                    </ul>

                    <h2>Procedura zgłoszenia</h2>
                    <p>Aby rozpocząć procedurę zwrotu, prosimy o wykonanie następujących kroków:</p>
                    <ul class="pages__list">
                        <li>Wyślij wiadomość e-mail na adres: <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>.</li>
                        <li>W temacie wiadomości wpisz: „Wniosek o zwrot środków: [Twój ID lub Email]”.</li>
                        <li>Szczegółowo opisz przyczynę zgłoszenia, powołując się na odpowiedni punkt warunków.</li>
                        <li>Nasz zespół wsparcia w <strong>Warszawie</strong> rozpatrzy wniosek w ciągu 3 dni roboczych.</li>
                    </ul>

                    <h2>Terminy i sposób zwrotu</h2>
                    <p>
                        Po zatwierdzeniu wniosku, środki zostaną zwrócone w ciągu 7–14 dni roboczych przy użyciu tej samej metody, która została użyta do opłacenia zamówienia. 
                        Należy pamiętać, że faktyczny termin zaksięgowania środków może zależeć od regulaminu Twojego banku w <strong>Polsce</strong> lub kraju Twojego pobytu.
                    </p>

                    <h2>Wyjątki i ograniczenia</h2>
                    <p>Zwrot nie przysługuje, jeśli:</p>
                    <ul class="pages__list">
                        <li>Wniosek został złożony po upływie 14 dni od momentu płatności.</li>
                        <li>Zapoznałeś się już lub pobrałeś więcej niż 50% materiałów programu.</li>
                        <li>Niemożność skorzystania z usługi wynika z problemów po stronie użytkownika (oprogramowanie, połączenie internetowe).</li>
                        <li>Zostały naruszone Warunki korzystania z platformy <strong><?= $domainTitle ?></strong>.</li>
                    </ul>

                    <h2>Zmiany w polityce</h2>
                    <p>
                        <strong><?= $domainTitle ?></strong> zastrzega sobie prawo do aktualizacji niniejszej Polityki. Aktualna wersja jest zawsze dostępna na stronie <strong><?= $fullDomain ?></strong>.
                    </p>

                    <div class="pages__contact-box">
                        <h2>Dział wsparcia</h2>
                        <p>W przypadku pytań dotyczących zwrotów lub warunków konsultacji, prosimy o kontakt:</p>
                        <ul class="pages__contact-info">
                            <li><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                            <li><strong>Telefon:</strong> <a href="tel:+48228132449">+48 22 813 24 49</a></li>
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
                <p>Ta strona używa plików cookies. Więcej w naszej <a href="./cookies.php">Polityce cookies</a>.</p>
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