<?php

$restaurant = [
    'name' => 'NOIR',
    'location' => 'Plovdiv · Bulgaria',
    'hours' => '11:30 — 23:30',
];

$menu = [

    'START' => [
        [
            'name' => 'Burrata',
            'desc' => 'Печени домати · босилек · зехтин',
            'price' => '16.90',
            'tag' => 'SIGNATURE'
        ],
        [
            'name' => 'Beef Tartare',
            'desc' => 'Телешко · каперси · шалот · дижон',
            'price' => '21.90',
            'tag' => ''
        ],
        [
            'name' => 'Crispy Calamari',
            'desc' => 'Калмар · лимон · тартар сос',
            'price' => '18.50',
            'tag' => 'POPULAR'
        ],
    ],

    'GREENS' => [
        [
            'name' => 'Noir Caesar',
            'desc' => 'Романа · пармезан · крутони · цезар дресинг',
            'price' => '15.90',
            'tag' => ''
        ],
        [
            'name' => 'Garden',
            'desc' => 'Домати · авокадо · краставица · цитрусов винегрет',
            'price' => '16.90',
            'tag' => 'VEGAN'
        ],
        [
            'name' => 'Burrata & Tomatoes',
            'desc' => 'Селекция домати · бурата · босилек',
            'price' => '18.90',
            'tag' => ''
        ],
    ],

    'MAIN' => [
        [
            'name' => 'Salmon',
            'desc' => 'Сьомга · целина · сезонни зеленчуци · лимон',
            'price' => '29.90',
            'tag' => 'CHEF'
        ],
        [
            'name' => 'Filet Mignon',
            'desc' => 'Телешко филе · картофен гратен · red wine jus',
            'price' => '38.90',
            'tag' => 'SIGNATURE'
        ],
        [
            'name' => 'Chicken Supreme',
            'desc' => 'Пиле · картофено пюре · мащерка',
            'price' => '24.90',
            'tag' => ''
        ],
        [
            'name' => 'Grilled Vegetables',
            'desc' => 'Сезонни зеленчуци · печен чесън · билки',
            'price' => '19.90',
            'tag' => 'VEGAN'
        ],
    ],

    'PASTA' => [
        [
            'name' => 'Tagliatelle',
            'desc' => 'Трюфел · пармезан · масло',
            'price' => '26.90',
            'tag' => 'SIGNATURE'
        ],
        [
            'name' => 'Mushroom Risotto',
            'desc' => 'Арборио · горски гъби · пармезан',
            'price' => '22.90',
            'tag' => ''
        ],
        [
            'name' => 'Arrabbiata',
            'desc' => 'Домати · чесън · люта чушка · босилек',
            'price' => '17.90',
            'tag' => 'VEGAN'
        ],
    ],

    'SWEET' => [
        [
            'name' => 'Tiramisu',
            'desc' => 'Маскарпоне · кафе · какао',
            'price' => '12.90',
            'tag' => 'POPULAR'
        ],
        [
            'name' => 'Chocolate Fondant',
            'desc' => 'Шоколад · ванилия · морска сол',
            'price' => '13.90',
            'tag' => 'SIGNATURE'
        ],
        [
            'name' => 'Lemon Tart',
            'desc' => 'Лимон · масло · меренг',
            'price' => '11.90',
            'tag' => ''
        ],
    ],

    'DRINKS' => [
        [
            'name' => 'Espresso',
            'desc' => 'Италианско кафе',
            'price' => '3.50',
            'tag' => ''
        ],
        [
            'name' => 'Homemade Lemonade',
            'desc' => 'Лимон · мента · мед · газирана вода',
            'price' => '6.90',
            'tag' => ''
        ],
        [
            'name' => 'Sparkling Water',
            'desc' => 'Минерална вода',
            'price' => '4.50',
            'tag' => ''
        ],
    ],
];

?>

<!DOCTYPE html>
<html lang="bg">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?= $restaurant['name'] ?> — Digital Menu</title>

    <style>

        /* ======================================================
           RESET
        ====================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #111111;
            color: #f4f2ed;
            font-family:
                Arial,
                Helvetica,
                sans-serif;
            overflow-x: hidden;
        }

        ::selection {
            background: #d9ff4f;
            color: #111;
        }

        /* ======================================================
           VARIABLES
        ====================================================== */

        :root {
            --black: #111111;
            --dark: #181818;
            --line: #2c2c2c;
            --muted: #858585;
            --white: #f4f2ed;
            --lime: #d9ff4f;
            --orange: #ff7043;
        }

        /* ======================================================
           NOISE
        ====================================================== */

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            opacity: .025;
            z-index: 999;
            background-image:
                url("data:image/svg+xml,%3Csvg viewBox='0 0 180 180' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.5'/%3E%3C/svg%3E");
        }

        /* ======================================================
           HEADER
        ====================================================== */

        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            height: 78px;
            border-bottom: 1px solid var(--line);
            background: rgba(17,17,17,.85);
            backdrop-filter: blur(16px);
        }

        .header-inner {
            height: 100%;
            max-width: 1400px;
            padding: 0 35px;
            margin: auto;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-size: 22px;
            font-weight: 900;
            letter-spacing: -1px;
        }

        .logo span {
            color: var(--lime);
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .location {
            font-size: 11px;
            color: var(--muted);
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .reserve {
            color: #111;
            background: var(--lime);
            padding: 11px 19px;
            border-radius: 100px;
            text-decoration: none;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: .25s;
        }

        .reserve:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(217,255,79,.18);
        }

        /* ======================================================
           HERO
        ====================================================== */

        .hero {
            min-height: 100vh;
            padding: 150px 35px 100px;

            max-width: 1400px;
            margin: auto;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hero-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 35px;
        }

        .hero-label {
            color: var(--lime);
            font-size: 11px;
            letter-spacing: 3px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .hero-number {
            font-size: 12px;
            color: #555;
        }

        .hero h1 {
            font-size: clamp(80px, 15vw, 220px);
            line-height: .78;
            letter-spacing: -10px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .hero h1 span {
            color: transparent;
            -webkit-text-stroke: 1px #666;
        }

        .hero-bottom {
            margin-top: 55px;

            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 50px;
        }

        .hero-description {
            max-width: 450px;
            color: #999;
            font-size: 14px;
            line-height: 1.8;
        }

        .scroll-indicator {
            color: #777;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .scroll-indicator span {
            display: inline-block;
            color: var(--lime);
            margin-left: 10px;
        }

        /* ======================================================
           MENU
        ====================================================== */

        .menu-section {
            max-width: 1400px;
            margin: auto;
            padding: 50px 35px 150px;
        }

        /* ======================================================
           CATEGORY NAV
        ====================================================== */

        .category-nav {
            position: sticky;
            top: 78px;
            z-index: 80;

            background: rgba(17,17,17,.94);
            backdrop-filter: blur(14px);

            border-top: 1px solid var(--line);
            border-bottom: 1px solid var(--line);

            margin-bottom: 120px;
        }

        .categories {
            display: flex;
            overflow-x: auto;
            scrollbar-width: none;
        }

        .categories::-webkit-scrollbar {
            display: none;
        }

        .category {
            flex: 0 0 auto;

            border: 0;
            border-right: 1px solid var(--line);

            background: transparent;
            color: #777;

            padding: 19px 28px;

            cursor: pointer;

            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;

            transition: .2s;
        }

        .category:first-child {
            border-left: 1px solid var(--line);
        }

        .category:hover,
        .category.active {
            color: #111;
            background: var(--lime);
        }

        /* ======================================================
           MENU CATEGORY
        ====================================================== */

        .menu-category {
            margin-bottom: 150px;
            scroll-margin-top: 170px;
        }

        .category-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;

            border-bottom: 1px solid var(--line);

            padding-bottom: 25px;
            margin-bottom: 10px;
        }

        .category-title {
            font-size: clamp(50px, 7vw, 100px);
            font-weight: 900;
            letter-spacing: -5px;
            line-height: .85;
        }

        .category-count {
            color: #555;
            font-size: 11px;
            letter-spacing: 2px;
            margin-bottom: 7px;
        }

        /* ======================================================
           MENU ITEM
        ====================================================== */

        .menu-item {
            min-height: 130px;

            border-bottom: 1px solid var(--line);

            display: grid;
            grid-template-columns: 80px 1fr auto;
            align-items: center;

            gap: 25px;

            cursor: default;

            transition:
                background .3s,
                padding .3s;
        }

        .menu-item:hover {
            background: #191919;
            padding-left: 25px;
            padding-right: 25px;
        }

        .item-index {
            color: #444;
            font-size: 11px;
            font-weight: 700;
        }

        .item-content {
            min-width: 0;
        }

        .item-name-row {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .item-name {
            font-size: clamp(22px, 3vw, 35px);
            font-weight: 700;
            letter-spacing: -1.5px;
        }

        .item-tag {
            color: var(--lime);
            border: 1px solid #46511d;
            padding: 4px 7px;
            font-size: 8px;
            letter-spacing: 1px;
            font-weight: 700;
        }

        .item-desc {
            margin-top: 7px;
            color: #707070;
            font-size: 12px;
        }

        .item-price {
            font-size: 18px;
            font-weight: 700;
            white-space: nowrap;
        }

        .currency {
            color: #555;
            font-size: 10px;
            margin-left: 4px;
        }

        /* ======================================================
           CTA
        ====================================================== */

        .cta {
            border-top: 1px solid var(--line);
            border-bottom: 1px solid var(--line);

            padding: 100px 0;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 50px;
        }

        .cta h2 {
            font-size: clamp(45px, 7vw, 90px);
            line-height: .9;
            letter-spacing: -5px;
        }

        .cta h2 span {
            color: var(--lime);
        }

        .cta-button {
            flex-shrink: 0;

            width: 150px;
            height: 150px;

            border-radius: 50%;

            background: var(--lime);
            color: #111;

            display: flex;
            align-items: center;
            justify-content: center;

            text-decoration: none;

            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;

            transition: .3s;
        }

        .cta-button:hover {
            transform: rotate(-10deg) scale(1.05);
        }

        /* ======================================================
           FOOTER
        ====================================================== */

        footer {
            max-width: 1400px;
            margin: auto;
            padding: 80px 35px 40px;
        }

        .footer-top {
            display: flex;
            justify-content: space-between;
            gap: 40px;
        }

        .footer-logo {
            font-size: 55px;
            font-weight: 900;
            letter-spacing: -4px;
        }

        .footer-logo span {
            color: var(--lime);
        }

        .footer-info {
            display: flex;
            gap: 80px;
        }

        .footer-column h4 {
            color: #555;
            font-size: 9px;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .footer-column p {
            color: #aaa;
            font-size: 12px;
            margin-bottom: 5px;
        }

        .copyright {
            border-top: 1px solid var(--line);
            margin-top: 70px;
            padding-top: 20px;
            color: #444;
            font-size: 10px;
        }

        /* ======================================================
           MOBILE
        ====================================================== */

        @media (max-width: 700px) {

            header {
                height: 65px;
            }

            .header-inner {
                padding: 0 18px;
            }

            .location {
                display: none;
            }

            .reserve {
                padding: 9px 13px;
            }

            .hero {
                padding: 120px 18px 70px;
                min-height: 85vh;
            }

            .hero h1 {
                font-size: 24vw;
                letter-spacing: -5px;
            }

            .hero-bottom {
                margin-top: 45px;
                flex-direction: column;
                align-items: flex-start;
            }

            .scroll-indicator {
                display: none;
            }

            .menu-section {
                padding: 30px 18px 100px;
            }

            .category-nav {
                top: 65px;
                margin-bottom: 80px;
                margin-left: -18px;
                margin-right: -18px;
            }

            .category {
                padding: 16px 20px;
            }

            .menu-category {
                margin-bottom: 90px;
            }

            .category-header {
                margin-bottom: 5px;
            }

            .category-title {
                font-size: 55px;
                letter-spacing: -3px;
            }

            .menu-item {
                grid-template-columns: 35px 1fr auto;
                min-height: 110px;
                gap: 10px;
            }

            .menu-item:hover {
                padding-left: 10px;
                padding-right: 10px;
            }

            .item-name-row {
                align-items: flex-start;
                flex-direction: column;
                gap: 5px;
            }

            .item-name {
                font-size: 20px;
                letter-spacing: -.7px;
            }

            .item-desc {
                font-size: 11px;
                line-height: 1.5;
                max-width: 220px;
            }

            .item-price {
                font-size: 15px;
            }

            .cta {
                padding: 70px 0;
                align-items: flex-start;
                flex-direction: column;
            }

            .cta h2 {
                letter-spacing: -3px;
            }

            .cta-button {
                width: 120px;
                height: 120px;
            }

            .footer-top {
                flex-direction: column;
            }

            .footer-logo {
                font-size: 48px;
            }

            .footer-info {
                gap: 40px;
                flex-wrap: wrap;
            }

            footer {
                padding: 60px 18px 30px;
            }
        }

    </style>

</head>


<body>


<!-- ==========================================================
     HEADER
=========================================================== -->

<header>

    <div class="header-inner">

        <div class="logo">
            <?= htmlspecialchars($restaurant['name']) ?><span>.</span>
        </div>

        <div class="header-right">

            <div class="location">
                <?= htmlspecialchars($restaurant['location']) ?>
            </div>

            <a href="#" class="reserve">
                Reserve
            </a>

        </div>

    </div>

</header>


<!-- ==========================================================
     HERO
=========================================================== -->

<section class="hero">

    <div class="hero-top">

        <div class="hero-label">
            Digital Menu
        </div>

        <div class="hero-number">
            001 / 006
        </div>

    </div>


    <h1>
        Eat.<br>
        <span>Drink.</span><br>
        Enjoy.
    </h1>


    <div class="hero-bottom">

        <p class="hero-description">
            Добре дошли в NOIR — място, където модерната кухня
            среща добрия вкус. Разгледайте менюто и изберете
            своето следващо преживяване.
        </p>

        <div class="scroll-indicator">
            Scroll to explore
            <span>↓</span>
        </div>

    </div>

</section>


<!-- ==========================================================
     MENU
=========================================================== -->

<section class="menu-section" id="menu">


    <!-- CATEGORY NAV -->

    <div class="category-nav">

        <div class="categories">

            <?php $categoryIndex = 0; ?>

            <?php foreach ($menu as $category => $items): ?>

                <button
                    class="category <?= $categoryIndex === 0 ? 'active' : '' ?>"
                    data-target="section-<?= $categoryIndex ?>"
                >
                    <?= htmlspecialchars($category) ?>
                </button>

                <?php $categoryIndex++; ?>

            <?php endforeach; ?>

        </div>

    </div>


    <!-- MENU -->

    <?php $categoryIndex = 0; ?>

    <?php foreach ($menu as $category => $items): ?>

        <section
            class="menu-category"
            id="section-<?= $categoryIndex ?>"
        >

            <div class="category-header">

                <h2 class="category-title">
                    <?= htmlspecialchars($category) ?>
                </h2>

                <div class="category-count">
                    <?= count($items) ?> ITEMS
                </div>

            </div>


            <?php foreach ($items as $index => $item): ?>

                <article class="menu-item">

                    <div class="item-index">
                        <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>
                    </div>


                    <div class="item-content">

                        <div class="item-name-row">

                            <h3 class="item-name">
                                <?= htmlspecialchars($item['name']) ?>
                            </h3>

                            <?php if (!empty($item['tag'])): ?>

                                <span class="item-tag">
                                    <?= htmlspecialchars($item['tag']) ?>
                                </span>

                            <?php endif; ?>

                        </div>


                        <p class="item-desc">
                            <?= htmlspecialchars($item['desc']) ?>
                        </p>

                    </div>


                    <div class="item-price">

                        <?= htmlspecialchars($item['price']) ?>

                        <span class="currency">
                            BGN
                        </span>

                    </div>

                </article>

            <?php endforeach; ?>

        </section>

        <?php $categoryIndex++; ?>

    <?php endforeach; ?>


    <!-- CTA -->

    <div class="cta">

        <h2>
            Ready for<br>
            <span>dinner?</span>
        </h2>

        <a href="#" class="cta-button">
            Reserve<br>
            a table ↗
        </a>

    </div>

</section>


<!-- ==========================================================
     FOOTER
=========================================================== -->

<footer>

    <div class="footer-top">

        <div class="footer-logo">
            NOIR<span>.</span>
        </div>


        <div class="footer-info">

            <div class="footer-column">

                <h4>Location</h4>

                <p>
                    Plovdiv, Bulgaria
                </p>

                <p>
                    Main Street 25
                </p>

            </div>


            <div class="footer-column">

                <h4>Opening hours</h4>

                <p>
                    <?= htmlspecialchars($restaurant['hours']) ?>
                </p>

                <p>
                    Every day
                </p>

            </div>


            <div class="footer-column">

                <h4>Contact</h4>

                <p>
                    +359 888 123 456
                </p>

                <p>
                    hello@noir.bg
                </p>

            </div>

        </div>

    </div>


    <div class="copyright">

        © <?= date('Y') ?> NOIR Restaurant.
        Digital Menu Experience.

    </div>

</footer>


<!-- ==========================================================
     JAVASCRIPT
=========================================================== -->

<script>

    const buttons =
        document.querySelectorAll('.category');

    buttons.forEach(button => {

        button.addEventListener('click', () => {

            const target =
                document.getElementById(
                    button.dataset.target
                );

            if (!target) return;

            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });

            buttons.forEach(btn =>
                btn.classList.remove('active')
            );

            button.classList.add('active');

        });

    });


    /*
    ----------------------------------------------------------
    ACTIVE CATEGORY WHILE SCROLLING
    ----------------------------------------------------------
    */

    const sections =
        document.querySelectorAll('.menu-category');

    const observer =
        new IntersectionObserver(

            entries => {

                entries.forEach(entry => {

                    if (!entry.isIntersecting) {
                        return;
                    }

                    const id =
                        entry.target.id;

                    buttons.forEach(button => {

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


    sections.forEach(section =>
        observer.observe(section)
    );


    /*
    ----------------------------------------------------------
    SMALL PARALLAX EFFECT
    ----------------------------------------------------------
    */

    const heroTitle =
        document.querySelector('.hero h1');

    window.addEventListener(
        'scroll',
        () => {

            if (!heroTitle) return;

            const scroll =
                window.scrollY;

            if (scroll < window.innerHeight) {

                heroTitle.style.transform =
                    `translateY(${scroll * 0.08}px)`;

            }

        }
    );

</script>


</body>
</html>
