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
        <?= $domainTitle ?> — Warunki Korzystania
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
                    <h1>Warunki korzystania</h1>

                    <p>
                        Witamy na platformie <strong><?= $domainTitle ?></strong>! Niniejsze Warunki korzystania
                        (dalej — „Warunki”) stanowią prawnie wiążącą umowę pomiędzy Tobą (dalej — „Użytkownik”) 
                        a <strong><?= $domainTitle ?></strong> (dalej — „Firma”). 
                        Korzystając z naszej strony oraz wszelkich powiązanych usług, potwierdzasz pełną akceptację niniejszych Warunków. 
                        Jeśli nie zgadzasz się z nimi, powinieneś natychmiast zaprzestać korzystania z zasobów serwisu.
                    </p>
                </div>

                <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                    <h2>1. Przedmiot Umowy</h2>
                    <p>
                        Firma zapewnia Użytkownikowi dostęp do korzystania z witryny <strong><?= $fullDomain ?></strong>, 
                        w tym dostęp do innowacyjnych materiałów, artykułów na blogu, konsultacji eksperckich oraz narzędzi rozwoju zawodowego. 
                        Niniejsza Umowa reguluje wszystkie aspekty interakcji Użytkownika z infrastrukturą cyfrową platformy.
                    </p>

                    <h2>2. Obowiązki i Prawa Użytkownika</h2>
                    <p>
                        Zobowiązujesz się do korzystania z witryny wyłącznie w celach zgodnych z prawem. Podczas korzystania z platformy 
                        <strong><?= $domainTitle ?></strong> zabrania się:
                    </p>
                    <ul class="pages__list">
                        <li>Rozpowszechniania informacji, które są nielegalne, szkodliwe lub naruszają prawa autorskie.</li>
                        <li>Podejmowania działań mających na celu naruszenie bezpieczeństwa witryny lub przeciążenie jej systemów.</li>
                        <li>Używania zautomatyzowanych skryptów (botów) do zbierania informacji bez uprzedniej zgody.</li>
                        <li>Podawania nieprawdziwych informacji podczas rejestracji na konsultacje lub uczestnictwa w programach.</li>
                    </ul>

                    <h2>3. Własność Intelektualna</h2>
                    <p>
                        Cała zawartość zamieszczona w serwisie <strong><?= $fullDomain ?></strong> (teksty, grafiki, logo, kod programistyczny) 
                        stanowi własność intelektualną Firmy. Użytkownikowi udzielana jest ograniczona licencja na korzystanie z 
                        materiałów do celów osobistych związanych z rozwojem zawodowym. Kopiowanie lub rozpowszechnianie Treści bez pisemnej 
                        zgody jest surowo zabronione.
                    </p>

                    <h2>4. Ograniczenie Odpowiedzialności</h2>
                    <p>
                        Usługi są świadczone na zasadzie „tak jak są” (as is). Nie gwarantujemy nieprzerwanego działania witryny w warunkach dynamicznie 
                        zmieniającego się rynku w <strong>Polsce i krajach UE</strong>. Firma nie ponosi odpowiedzialności za bezpośrednie lub pośrednie 
                        szkody powstałe w wyniku korzystania z materiałów platformy <strong><?= $domainTitle ?></strong>.
                    </p>

                    <h2>5. Zmiany Warunków</h2>
                    <p>
                        Zastrzegamy sobie prawo do zmiany niniejszych Warunków. Zmiany wchodzą w życie z chwilą ich opublikowania na 
                        stronie <strong><?= $fullDomain ?></strong>. Dalsze korzystanie z witryny oznacza akceptację nowej wersji Warunków.
                    </p>

                    <h2>6. Rozstrzyganie Sporów</h2>
                    <p>
                        Wszelkie spory strony będą starały się rozwiązać drodze negocjacji. W przypadku braku porozumienia, 
                        spór podlega rozpatrzeniu zgodnie z obowiązującym prawem właściwym dla miejsca prowadzenia działalności przez Firmę w <strong>Polsce</strong>.
                    </p>

                    <div class="pages__contact-box">
                        <h2>Dział Wsparcia</h2>
                        <p>Jeśli masz pytania dotyczące niniejszych Warunków, prosimy o kontakt:</p>
                        <ul class="pages__contact-info">
                            <li><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                            <li><strong>Telefon:</strong> <a href="tel:+48228132449">+48 22 813 24 49</a></li>
                            <li><strong>Adres:</strong> ul. Marszałkowska 126/134, 00-008 Warszawa, Poland</li>
                        </ul>
                    </div>

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
                    <span class="logo__text"><?= $domainTitle ?></span>
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