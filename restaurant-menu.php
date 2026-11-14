<?php
/*
|--------------------------------------------------------------------------
| QR MENU DEMO
|--------------------------------------------------------------------------
| Single-file PHP demo
| No database
| No images
| PHP + HTML + CSS + JavaScript
|--------------------------------------------------------------------------
*/

$restaurant = [
    'name' => 'Maison Élan',
    'tagline' => 'Modern dining · Fine taste',
    'phone' => '+359 888 123 456',
    'address' => 'ул. Главна 25, Пловдив',
];

$categories = [
    'Предястия',
    'Салати',
    'Основни',
    'Паста & Ризото',
    'Десерти',
    'Напитки'
];

$menu = [

    'Предястия' => [
        [
            'name' => 'Бурата с печени домати',
            'description' => 'Кремообразна бурата, печени чери домати, босилеково масло и морска сол.',
            'price' => '16.90',
            'badge' => 'Chef choice'
        ],
        [
            'name' => 'Телешки тартар',
            'description' => 'Фино нарязано телешко, дижонска горчица, каперси, шалот и препечен хляб.',
            'price' => '21.90',
            'badge' => ''
        ],
        [
            'name' => 'Хрупкав калмар',
            'description' => 'Калмар с лимон, свежи билки и домашен сос тартар.',
            'price' => '18.50',
            'badge' => 'Popular'
        ],
        [
            'name' => 'Печени тиквички',
            'description' => 'Млади тиквички, страчатела, мента и лимонов дресинг.',
            'price' => '14.90',
            'badge' => ''
        ],
    ],

    'Салати' => [
        [
            'name' => 'Зелена салата Maison',
            'description' => 'Микс зелени салати, авокадо, краставица, пармезан и цитрусов винегрет.',
            'price' => '15.90',
            'badge' => ''
        ],
        [
            'name' => 'Цезар с хрупкаво пиле',
            'description' => 'Романа, пармезан, хрупкаво пиле, крутони и класически цезар дресинг.',
            'price' => '17.90',
            'badge' => 'Popular'
        ],
        [
            'name' => 'Домати & Бурата',
            'description' => 'Селекция домати, бурата, босилек, зехтин и балсамова редукция.',
            'price' => '18.90',
            'badge' => ''
        ],
    ],

    'Основни' => [
        [
            'name' => 'Филе от сьомга',
            'description' => 'Сьомга на грил, крем от целина, сезонни зеленчуци и лимонов сос.',
            'price' => '29.90',
            'badge' => 'Chef choice'
        ],
        [
            'name' => 'Телешко филе',
            'description' => 'Телешко филе, картофен гратен, зелен фасул и сос от червено вино.',
            'price' => '38.90',
            'badge' => ''
        ],
        [
            'name' => 'Пиле Supreme',
            'description' => 'Сочно пилешко филе, кремообразно картофено пюре и сос от мащерка.',
            'price' => '24.90',
            'badge' => ''
        ],
        [
            'name' => 'Зеленчуци на грил',
            'description' => 'Сезонни зеленчуци, крем от печен чесън, билки и зехтин.',
            'price' => '19.90',
            'badge' => 'Vegan'
        ],
    ],

    'Паста & Ризото' => [
        [
            'name' => 'Tagliatelle al Tartufo',
            'description' => 'Прясна паста, черен трюфел, пармезан и масло.',
            'price' => '26.90',
            'badge' => 'Signature'
        ],
        [
            'name' => 'Ризото с гъби',
            'description' => 'Арборио, горски гъби, пармезан, бяло вино и свеж магданоз.',
            'price' => '22.90',
            'badge' => ''
        ],
        [
            'name' => 'Penne Arrabbiata',
            'description' => 'Паста пене, доматен сос, люта чушка, чесън и босилек.',
            'price' => '17.90',
            'badge' => 'Vegan'
        ],
    ],

    'Десерти' => [
        [
            'name' => 'Тирамису Maison',
            'description' => 'Класически италиански десерт с маскарпоне, кафе и какао.',
            'price' => '12.90',
            'badge' => 'Popular'
        ],
        [
            'name' => 'Шоколадов фондан',
            'description' => 'Топъл шоколадов фондан с ванилов сладолед.',
            'price' => '13.90',
            'badge' => 'Signature'
        ],
        [
            'name' => 'Лимонов тарт',
            'description' => 'Фин лимонов крем, маслена основа и меренг.',
            'price' => '11.90',
            'badge' => ''
        ],
    ],

    'Напитки' => [
        [
            'name' => 'Espresso',
            'description' => 'Ароматно италианско кафе.',
            'price' => '3.50',
            'badge' => ''
        ],
        [
            'name' => 'Домашна лимонада',
            'description' => 'Лимон, мента, мед и газирана вода.',
            'price' => '6.90',
            'badge' => ''
        ],
        [
            'name' => 'Sparkling Water',
            'description' => 'Минерална газирана вода.',
            'price' => '4.50',
            'badge' => ''
        ],
    ],
];
?>
<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($restaurant['name']) ?> — Menu</title>

    <meta name="description" content="Дигитално меню на <?= htmlspecialchars($restaurant['name']) ?>">

    <style>

        /* =========================================================
           RESET
        ========================================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #f8f7f3;
            color: #181816;
            font-family:
                Inter,
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                sans-serif;
            line-height: 1.6;
        }

        button {
            font: inherit;
        }

        /* =========================================================
           VARIABLES
        ========================================================= */

        :root {
            --black: #171714;
            --dark: #24231f;
            --cream: #f8f7f3;
            --white: #ffffff;
            --gold: #a98752;
            --gold-light: #d4bd91;
            --muted: #77746d;
            --border: #e5e1d8;
            --green: #65745c;
            --radius: 18px;
        }

        /* =========================================================
           TOP BAR
        ========================================================= */

        .topbar {
            background: var(--black);
            color: #fff;
            text-align: center;
            padding: 9px 20px;
            font-size: 12px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        /* =========================================================
           HEADER
        ========================================================= */

        header {
            background: rgba(248, 247, 243, .94);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 100;
            backdrop-filter: blur(15px);
        }

        .header-inner {
            max-width: 1180px;
            margin: auto;
            min-height: 82px;
            padding: 0 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .brand {
            text-decoration: none;
            color: var(--black);
            display: flex;
            flex-direction: column;
            line-height: 1.1;
        }

        .brand-name {
            font-family: Georgia, serif;
            font-size: 27px;
            letter-spacing: 1px;
        }

        .brand-sub {
            color: var(--gold);
            font-size: 9px;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-top: 5px;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: #45433d;
            font-size: 13px;
            font-weight: 500;
            transition: .2s;
        }

        nav a:hover {
            color: var(--gold);
        }

        .reserve-btn {
            background: var(--black);
            color: white !important;
            padding: 11px 18px;
            border-radius: 999px;
        }

        .reserve-btn:hover {
            background: var(--gold);
        }

        .menu-toggle {
            display: none;
            border: 0;
            background: none;
            cursor: pointer;
            font-size: 26px;
        }

        /* =========================================================
           HERO
        ========================================================= */

        .hero {
            max-width: 1180px;
            margin: auto;
            padding: 90px 24px 65px;
            text-align: center;
        }

        .eyebrow {
            color: var(--gold);
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 4px;
            font-weight: 600;
            margin-bottom: 22px;
        }

        .hero h1 {
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(45px, 7vw, 82px);
            font-weight: 400;
            line-height: .98;
            letter-spacing: -2px;
        }

        .hero h1 span {
            color: var(--gold);
            font-style: italic;
        }

        .hero p {
            max-width: 580px;
            margin: 27px auto 0;
            color: var(--muted);
            font-size: 16px;
        }

        .hero-info {
            margin-top: 34px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .info-pill {
            border: 1px solid var(--border);
            background: white;
            padding: 9px 15px;
            border-radius: 999px;
            color: #626058;
            font-size: 12px;
        }

        /* =========================================================
           MENU SECTION
        ========================================================= */

        .menu-wrapper {
            max-width: 1000px;
            margin: auto;
            padding: 10px 24px 100px;
        }

        /* =========================================================
           CATEGORY NAV
        ========================================================= */

        .category-wrapper {
            position: sticky;
            top: 82px;
            z-index: 50;
            background: rgba(248,247,243,.94);
            backdrop-filter: blur(12px);
            padding: 15px 0;
            border-bottom: 1px solid var(--border);
            margin-bottom: 55px;
        }

        .categories {
            display: flex;
            gap: 8px;
            overflow-x: auto;
            scrollbar-width: none;
            padding: 2px;
        }

        .categories::-webkit-scrollbar {
            display: none;
        }

        .category-btn {
            white-space: nowrap;
            border: 1px solid var(--border);
            background: white;
            color: #5f5c54;
            border-radius: 999px;
            padding: 10px 17px;
            cursor: pointer;
            font-size: 12px;
            transition: .2s;
        }

        .category-btn:hover,
        .category-btn.active {
            background: var(--black);
            color: white;
            border-color: var(--black);
        }

        /* =========================================================
           CATEGORY
        ========================================================= */

        .menu-category {
            margin-bottom: 72px;
            scroll-margin-top: 150px;
        }

        .category-heading {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .category-heading h2 {
            font-family: Georgia, serif;
            font-weight: 400;
            font-size: 31px;
            white-space: nowrap;
        }

        .category-line {
            height: 1px;
            background: var(--border);
            width: 100%;
        }

        .category-number {
            color: var(--gold);
            font-size: 11px;
            letter-spacing: 2px;
        }

        /* =========================================================
           MENU ITEMS
        ========================================================= */

        .menu-items {
            display: grid;
            grid-template-columns: 1fr 1fr;
            column-gap: 60px;
        }

        .menu-item {
            position: relative;
            padding: 0 0 26px;
            margin-bottom: 26px;
            border-bottom: 1px dashed #dedad1;
        }

        .item-top {
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            gap: 20px;
        }

        .item-name {
            font-family: Georgia, serif;
            font-size: 19px;
            font-weight: 500;
        }

        .item-price {
            white-space: nowrap;
            font-weight: 600;
            font-size: 15px;
            color: var(--black);
        }

        .item-description {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.65;
            margin-top: 7px;
            max-width: 440px;
        }

        .badge {
            display: inline-block;
            margin-top: 10px;
            font-size: 9px;
            text-transform: uppercase;
            letter-spacing: 1.3px;
            color: var(--gold);
            border: 1px solid #d9c8a9;
            padding: 3px 7px;
            border-radius: 4px;
        }

        /* =========================================================
           FOOTER
        ========================================================= */

        footer {
            background: var(--black);
            color: white;
            padding: 60px 24px;
        }

        .footer-inner {
            max-width: 1000px;
            margin: auto;
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr;
            gap: 50px;
        }

        .footer-brand {
            font-family: Georgia, serif;
            font-size: 30px;
        }

        .footer-description {
            color: #aaa79f;
            margin-top: 12px;
            font-size: 13px;
            max-width: 350px;
        }

        .footer-column h3 {
            font-size: 11px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--gold-light);
            margin-bottom: 16px;
        }

        .footer-column p,
        .footer-column a {
            display: block;
            color: #d0cec8;
            text-decoration: none;
            font-size: 13px;
            margin-bottom: 7px;
        }

        .copyright {
            max-width: 1000px;
            margin: 50px auto 0;
            padding-top: 20px;
            border-top: 1px solid #383732;
            color: #77756e;
            font-size: 11px;
        }

        /* =========================================================
           MOBILE
        ========================================================= */

        @media (max-width: 800px) {

            .header-inner {
                min-height: 70px;
            }

            .menu-toggle {
                display: block;
            }

            nav {
                display: none;
                position: absolute;
                top: 70px;
                left: 0;
                right: 0;
                background: var(--cream);
                border-bottom: 1px solid var(--border);
                padding: 20px 24px;
                flex-direction: column;
                align-items: stretch;
                gap: 0;
            }

            nav.open {
                display: flex;
            }

            nav a {
                padding: 13px 0;
                border-bottom: 1px solid var(--border);
            }

            .reserve-btn {
                text-align: center;
                margin-top: 12px;
            }

            .hero {
                padding: 65px 20px 50px;
            }

            .hero h1 {
                font-size: 52px;
            }

            .hero p {
                font-size: 14px;
            }

            .category-wrapper {
                top: 70px;
                margin-left: -24px;
                margin-right: -24px;
                padding-left: 24px;
                padding-right: 24px;
            }

            .menu-items {
                grid-template-columns: 1fr;
                column-gap: 0;
            }

            .menu-category {
                margin-bottom: 55px;
            }

            .category-heading h2 {
                font-size: 27px;
            }

            .footer-inner {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }

    </style>
</head>

<body>

<div class="topbar">
    Добре дошли в <?= htmlspecialchars($restaurant['name']) ?>
</div>

<header>

    <div class="header-inner">

        <a href="#" class="brand">
            <span class="brand-name">
                <?= htmlspecialchars($restaurant['name']) ?>
            </span>

            <span class="brand-sub">
                <?= htmlspecialchars($restaurant['tagline']) ?>
            </span>
        </a>

        <button class="menu-toggle" id="menuToggle">
            ☰
        </button>

        <nav id="mainNav">
            <a href="#">Начало</a>
            <a href="#menu">Меню</a>
            <a href="#">За нас</a>
            <a href="#">Контакти</a>
            <a href="#" class="reserve-btn">Резервация</a>
        </nav>

    </div>

</header>


<main>

    <!-- HERO -->

    <section class="hero">

        <div class="eyebrow">
            Digital Menu
        </div>

        <h1>
            Добър вкус,<br>
            <span>добро настроение.</span>
        </h1>

        <p>
            Добре дошли в <?= htmlspecialchars($restaurant['name']) ?>.
            Разгледайте нашето меню и открийте селекция от внимателно
            подбрани ястия, създадени с отношение към всеки детайл.
        </p>

        <div class="hero-info">

            <div class="info-pill">
                ✦ <?= htmlspecialchars($restaurant['address']) ?>
            </div>

            <div class="info-pill">
                ◷ Всеки ден · 11:00 – 23:30
            </div>

        </div>

    </section>


    <!-- MENU -->

    <section id="menu" class="menu-wrapper">

        <div class="category-wrapper">

            <div class="categories">

                <?php foreach ($categories as $index => $category): ?>

                    <button
                        class="category-btn <?= $index === 0 ? 'active' : '' ?>"
                        data-target="category-<?= $index ?>"
                    >
                        <?= htmlspecialchars($category) ?>
                    </button>

                <?php endforeach; ?>

            </div>

        </div>


        <?php foreach ($menu as $category => $items): ?>

            <?php
                $categoryIndex = array_search($category, $categories);
            ?>

            <section
                class="menu-category"
                id="category-<?= $categoryIndex ?>"
            >

                <div class="category-heading">

                    <span class="category-number">
                        <?= str_pad($categoryIndex + 1, 2, '0', STR_PAD_LEFT) ?>
                    </span>

                    <h2>
                        <?= htmlspecialchars($category) ?>
                    </h2>

                    <div class="category-line"></div>

                </div>


                <div class="menu-items">

                    <?php foreach ($items as $item): ?>

                        <article class="menu-item">

                            <div class="item-top">

                                <h3 class="item-name">
                                    <?= htmlspecialchars($item['name']) ?>
                                </h3>

                                <span class="item-price">
                                    <?= htmlspecialchars($item['price']) ?> лв.
                                </span>

                            </div>

                            <p class="item-description">
                                <?= htmlspecialchars($item['description']) ?>
                            </p>

                            <?php if (!empty($item['badge'])): ?>

                                <span class="badge">
                                    <?= htmlspecialchars($item['badge']) ?>
                                </span>

                            <?php endif; ?>

                        </article>

                    <?php endforeach; ?>

                </div>

            </section>

        <?php endforeach; ?>

    </section>

</main>


<footer>

    <div class="footer-inner">

        <div>

            <div class="footer-brand">
                <?= htmlspecialchars($restaurant['name']) ?>
            </div>

            <p class="footer-description">
                Място за добра храна, хубави разговори
                и моменти, които остават.
            </p>

        </div>


        <div class="footer-column">

            <h3>Контакти</h3>

            <p>
                <?= htmlspecialchars($restaurant['address']) ?>
            </p>

            <a href="tel:+359888123456">
                <?= htmlspecialchars($restaurant['phone']) ?>
            </a>

        </div>


        <div class="footer-column">

            <h3>Работно време</h3>

            <p>Понеделник – Неделя</p>
            <p>11:00 – 23:30</p>

        </div>

    </div>


    <div class="copyright">
        © <?= date('Y') ?> <?= htmlspecialchars($restaurant['name']) ?>.
        Всички права запазени.
    </div>

</footer>


<script>

    /* =========================================================
       MOBILE MENU
    ========================================================= */

    const menuToggle = document.getElementById('menuToggle');
    const mainNav = document.getElementById('mainNav');

    menuToggle.addEventListener('click', () => {
        mainNav.classList.toggle('open');
    });


    /* =========================================================
       CATEGORY SCROLL
    ========================================================= */

    const categoryButtons = document.querySelectorAll('.category-btn');

    categoryButtons.forEach(button => {

        button.addEventListener('click', () => {

            const targetId = button.dataset.target;
            const target = document.getElementById(targetId);

            if (!target) return;

            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });

            categoryButtons.forEach(btn => {
                btn.classList.remove('active');
            });

            button.classList.add('active');

        });

    });


    /* =========================================================
       ACTIVE CATEGORY WHILE SCROLLING
    ========================================================= */

    const sections = document.querySelectorAll('.menu-category');

    const observer = new IntersectionObserver(

        entries => {

            entries.forEach(entry => {

                if (!entry.isIntersecting) return;

                const id = entry.target.id;

                categoryButtons.forEach(button => {

                    button.classList.toggle(
                        'active',
                        button.dataset.target === id
                    );

                });

            });

        },

        {
            rootMargin: '-25% 0px -65% 0px'
        }

    );

    sections.forEach(section => observer.observe(section));

</script>

</body>
</html>
