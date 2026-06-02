<?php
$carousel_intro = [
    "sources/photos/app_outside1.webp",
    "sources/photos/app_outside2.webp",
    "sources/photos/app_outside3.webp",
    "sources/photos/app_outside4.webp",
    "sources/photos/app_outside5.webp",
];

$carousel_up = [
    "sources/photos/appup1.webp",
    "sources/photos/appup2.webp",
    "sources/photos/appup3.webp",
    "sources/photos/appup4.webp",
    "sources/photos/appup5.webp",
    "sources/photos/appup6.webp",
    "sources/photos/appup7.webp",
    "sources/photos/appup8.webp",
    "sources/photos/appup9.webp",
    "sources/photos/appup10.webp"
];

$carousel_down = [
    "sources/photos/appdown1.webp",
    "sources/photos/appdown2.webp",
    "sources/photos/appdown3.webp",
    "sources/photos/appdown4.webp",
    "sources/photos/appdown5.webp",
    "sources/photos/appdown7updated.webp",
    "sources/photos/appdown8updated.webp",
    "sources/photos/appdown6.webp"
];

$icons_services = [
    "sources/icons&bgs/wifi.webp",
    "sources/icons&bgs/parking.webp",
    "sources/icons&bgs/bus-stop.webp",
    "sources/icons&bgs/bbq.webp",
];

function create_carousel_from($images)
{
    echo '<div class="carousel" data-flickity=\'{"fullscreen":true, "imagesLoaded": true, "percentPosition": false, "wrapAround": true, "pageDots": false}\'>';
    foreach ($images as $img) {
        echo '<div class="carousel-cell">';
        echo '<img class="carousel-cell-image" src="' . htmlspecialchars($img) . '" alt="" height="360" width="540" loading="lazy" />';
        echo '</div>';
    }
    echo '</div>';
}

function insert_icons_from($icons, string $icon_class = "icon_big")
{
    foreach ($icons as $icon) {
        echo '<img class="' . htmlspecialchars($icon_class) . '" src="' . htmlspecialchars($icon) . '" alt="" height="50" width="50">';
    }
}

function create_app_title(string $title, int ...$capacity)
{
    echo '<h3><span data-translate="apt_up_title">' . $title . '</span> ';

    foreach ($capacity as $i => $number) {
        echo $number . 'x <img class="icon_small" src="sources/icons&bgs/person.webp" alt="person icon" height="20" width="20">';

        if ($i !== array_key_last($capacity)) {
            echo ' + ';
        }
    }
    echo '</h3>';
}
?>

<!DOCTYPE html>
<html lang="sk">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>Privát u Mervarta</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/flickity.css">

    <link rel="icon" href="sources/icons&bgs/favicon.ico">
    <meta name="viewport" content="width=device-width">

    <link rel="preload" href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap">
    </noscript>

    <meta name="description"
        content="Affordable private accommodation in a serene location. Prices start at 25€, with a capacity of 9 upstairs and 7 downstairs. Ideal for families and groups.">

    <link rel="preload" fetchpriority="high" as="image" href="sources/photos/app_outside1.webp" type="image/webp">
    <link rel="preload" fetchpriority="high" as="image" href="sources/photos/app_outside2.webp" type="image/webp">
    <link rel="preload" fetchpriority="high" as="image" href="sources/photos/app_outside3.webp" type="image/webp">

    <meta property="og:title" content="Privát u Mervarta">
    <meta property="og:description"
        content="Private accommodation in Mengusovce near the High Tatras, suitable for families and groups.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://mvt.sk/ubytovanie/">
    <meta property="og:site_name" content="Privát u Mervarta">
    <meta property="og:locale" content="sk_SK, en_US">
    <meta property="og:image" content="http://mvt.sk/ubytovanie/sources/photos/ogLogo.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Privát u Mervarta accommodation exterior">

</head>

<body>
    <header>
        <a href="#" class="logo" data-translate="header-title">
            Privát u Mervarta
        </a>

        <nav class="nav">
            <ul>
                <li><a href="#acc_jmp" data-translate="nav-accommodation">Ubytovanie</a></li>
                <li><a href="#app_jmp" data-translate="nav-apartments">Apartmány</a></li>
                <li><a href="#price_jmp" data-translate="nav-pricing">Cenník</a></li>
                <li><a href="#park_jmp" data-translate="nav-parking">Parkovanie</a></li>
                <li><a href="#contact_jmp" data-translate="nav-contact">Kontakt</a></li>
            </ul>
        </nav>

        <div class="header-controls">
            <button id="language-switch" class="icon" title="Switch language">EN</button>
            <button id="darkmode-switch" class="icon" title="Toggle dark mode" aria-pressed="false"></button>
        </div>
    </header>

    <main>
        <!-- general introduction -->
        <div class="general_container" id="acc_jmp">
            <h1 data-translate="nav-accommodation">Ubytovanie</h1>
            <p data-translate="intro_1">Ponúkame pohodlné ubytovanie pre rodiny s deťmi aj väčšie skupiny v pokojnej
                obci Mengusovce na úpätí Vysokých Tatier. K dispozícii sú dva samostatné apartmány, ktoré je možné
                prenajať jednotlivo alebo spoločne. Objekt prešiel rekonštrukciou v roku 2023.
            </p>

            <?php create_carousel_from($carousel_intro) ?>

            <p data-translate="intro_2">Ubytovanie sa nachádza na okraji obce Mengusovce, v prostredí ideálnom na oddych
                po turistike či výletoch. K dispozícii je veľká záhrada so sedením, grilom a dostatkom priestoru na
                relax. Autobusová zastávka sa nachádza priamo pred ubytovaním.</p>
            <div class=" icon_spacer">
                <?php insert_icons_from($icons_services, "icon_big") ?>
            </div>
        </div>
        <!-- apartments -->
        <div class="general_container">
            <h2 data-translate="nav-apartments" id="app_jmp" class="anchor">Apartmány</h2>
            <div class="app_flex">
                <?php create_app_title("Apartmán na poschodí", 4, 2, 3) ?>
                <?php create_carousel_from($carousel_up) ?>

                <p data-translate="app_up">Apartmán na poschodí má 3 izby, kuchyňu a kúpeľňu. Jedna z izieb má priestranný balkón. K dispozícii je možnosť prístelky. Každá izba je vybavená manželskou posteľou, smart televíziou a samostatnými lôžkami podľa potreby.</p>

                <?php create_app_title("Apartmán na prízemí", 4, 3) ?>
                <?php create_carousel_from($carousel_down) ?>

                <p data-translate="app_down">Apartmán na prízemí má 2 izby, kuchyňu a kúpeľňu. Domáce zvieratká sú
                    dovolené a taktiež ponúkame možnosť prístelky.</p>
            </div>
        </div>
        <!-- Pricelist -->
        <div class="general_container">
            <h2 data-translate="nav-pricing" id="price_jmp" class="anchor">Cenník</h2>
            <div id="price_flex">
                <div class="price_tag">
                    <span class="price_amm">26€</span> <span data-translate="price_1">za osobu/noc - pobyt na 1
                        noc</span>
                </div>
                <div class="price_tag">
                    <span class="price_amm">25€</span> <span data-translate="price_2">za osobu/noc - pobyt od dvoch
                        nocí</span>
                </div>
                <div class="price_tag">
                    <span class="price_amm">14€</span> <span data-translate="price_child">za dieťa/noc (do 12
                        rokov)</span>
                </div>
            </div>
        </div>
        <!-- Parking -->
        <div class="general_container">
            <h2 data-translate="nav-parking" class="title anchor" id="park_jmp">Parkovanie</h2>
            <p class="p3" data-translate="parking_text"> Parkovať sa dá priamo pred ubytovaním. Na požiadanie je k
                dispozícii aj parkovanie na ohradenom pozemku.
            </p>
        </div>
    </main>
    <footer>
        <!-- Contact -->
        <div class="general_container">
            <h2 data-translate="ad_con" id="contact_jmp" class="title anchor">Adresa a kontaktné údaje</h2>
            <div id="foot_flex">
                <div class="left_column">
                    <div class="contactAgps">
                        <p class="p3">
                            <span data-translate="names">Natália Mervartová, prípadne Mária Mervartová</span> <br>
                            <span data-translate="phone">Telefónne číslo:</span><br><a href="tel:+421 905 851 447"> +421
                                905 851 447</a> <br><span data-translate="or">alebo</span> <br><a
                                href="tel:+421 907 409 279"> +421 907 409 279</a><br>
                            E-mail: <a href=mailto:mvtn@yahoo.com>mvtn@yahoo.com</a>
                        </p>
                    </div>
                    <div class="contactAgps">
                        <p class="p3" data-translate="coords">
                            Adresa: Mengusovce 74 <br>
                            PSČ: 059 36 <br>
                            GPS súradnice penziónu: <br>
                            Zemepisná dĺžka: 20°08'24 E <br>
                            Zemepisná šírka: 49°04'19 <br>
                            Nadmorská výška: 817 m
                        </p>
                    </div>
                </div>
                <div class="googlemap-responsive">
                    <iframe title="Google Map showing the location of Privát u Mervarta"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2423.9053162945856!2d20.13908078700487!3d49.07219457369161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473e260424b3f3c5%3A0x6fa890b69fb62517!2sPriv%C3%A1t%20u%20Mervarta!5e1!3m2!1sen!2ssk!4v1727182647838!5m2!1sen!2ssk"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <span>
            <p data-translate="footer" id="copyright">© 2026 Privát u Mervarta. Všetky práva vyhradené.</p>
            <p class="site-credit">
                Built by: <a href="https://github.com/5r6t">Jaroslav Mervart</a>
            </p>
        </span>
    </footer>
</body>
<script src="scripts/flickity.pkgd.js"></script>
<script src="scripts/fullscreen.js"></script>
<script src="scripts/script.js"></script>

</html>