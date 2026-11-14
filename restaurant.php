<?php
// ============================================================
//  La Foresta — Restaurant Landing Page
//  One-file full-stack PHP + HTML + CSS + JS
// ============================================================

// ---- Simple contact-form handler ----
$success = false;
$error   = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form_submit'])) {
    $name    = htmlspecialchars(trim($_POST['name']    ?? ''));
    $email   = htmlspecialchars(trim($_POST['email']   ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && $message) {
        // In production: mail('restaurant@laforesta.bg', "Запитване от $name", $message, "From: $email");
        $success = true;
    } else {
        $error = 'Моля, попълнете всички полета правилно.';
    }
}

// ---- Menu data ----
$menu = [
    'Предястия' => [
        ['name' => 'Брускети с трюфел',      'desc' => 'Хрупкав хляб, масло от трюфел, рикота, микробиля',   'price' => '12 лв'],
        ['name' => 'Карпачо от говеждо',     'desc' => 'Тънко нарязано, руккола, пармезан, каперси',          'price' => '16 лв'],
        ['name' => 'Крем-супа от гъби',      'desc' => 'Манатарки, сметана, хрупкаво прошуто, мащерка',       'price' => '14 лв'],
    ],
    'Основни' => [
        ['name' => 'Рибет стек',             'desc' => '300г Angus, печени зеленчуци, сос Борделе',           'price' => '48 лв'],
        ['name' => 'Пациент от агнешко',     'desc' => 'Бавно печено 6ч, гратен от картофи, мента',           'price' => '42 лв'],
        ['name' => 'Паста с морски дарове',  'desc' => 'Скариди, миди, калмари, бяло вино, чери домати',      'price' => '38 лв'],
        ['name' => 'Ризото с манатарки',     'desc' => 'Арборио, пармезан, трюфелово масло, пресен магданоз', 'price' => '32 лв'],
    ],
    'Десерти' => [
        ['name' => 'Тирамису',               'desc' => 'Класическа рецепта, савоярди, маскарпоне, еспресо',   'price' => '11 лв'],
        ['name' => 'Крем брюле',             'desc' => 'Ванилия от Мадагаскар, карамелена коричка',           'price' => '12 лв'],
        ['name' => 'Сорбе от манго',         'desc' => 'Пресни плодове, листенца от мента, вафла',            'price' => '9 лв'],
    ],
];
?>
<!DOCTYPE html>
<html lang="bg">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>La Foresta — Ресторант</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
<style>
/* ===================== TOKENS ===================== */
:root {
    --cream:   #f5f0e8;
    --warm:    #ede5d5;
    --gold:    #b89a5e;
    --gold-lt: #d4b97a;
    --dark:    #1a1510;
    --bark:    #2e2318;
    --text:    #3d3020;
    --muted:   #7a6a52;
    --border:  rgba(184,154,94,.25);
    --ff-dis:  'Cormorant Garamond', Georgia, serif;
    --ff-body: 'Jost', sans-serif;
    --ease:    cubic-bezier(.4,0,.2,1);
}

/* ===================== RESET ===================== */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; font-size: 16px; }
body {
    background: var(--cream);
    color: var(--text);
    font-family: var(--ff-body);
    font-weight: 300;
    line-height: 1.7;
    overflow-x: hidden;
}
img { display: block; width: 100%; object-fit: cover; }
a { color: inherit; text-decoration: none; }
ul { list-style: none; }

/* ===================== NOISE OVERLAY ===================== */
body::before {
    content: '';
    position: fixed; inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
    opacity: .03;
    pointer-events: none;
    z-index: 9999;
}

/* ===================== NAV ===================== */
nav {
    position: fixed; top: 0; left: 0; right: 0;
    z-index: 100;
    display: flex; align-items: center; justify-content: space-between;
    padding: 1.4rem 4rem;
    transition: background .4s var(--ease), padding .4s var(--ease);
}
nav.scrolled {
    background: rgba(26,21,16,.92);
    backdrop-filter: blur(12px);
    padding: 1rem 4rem;
}
.nav-logo {
    font-family: var(--ff-dis);
    font-size: 1.7rem;
    font-weight: 300;
    color: var(--cream);
    letter-spacing: .12em;
    text-transform: uppercase;
}
.nav-logo span { color: var(--gold); font-style: italic; }
.nav-links { display: flex; gap: 2.5rem; }
.nav-links a {
    font-size: .78rem;
    letter-spacing: .18em;
    text-transform: uppercase;
    color: rgba(245,240,232,.75);
    transition: color .3s;
    position: relative;
}
.nav-links a::after {
    content: '';
    position: absolute; bottom: -3px; left: 0; right: 0;
    height: 1px; background: var(--gold);
    transform: scaleX(0); transition: transform .3s var(--ease);
}
.nav-links a:hover { color: var(--cream); }
.nav-links a:hover::after { transform: scaleX(1); }
.nav-reserve {
    background: transparent;
    border: 1px solid var(--gold);
    color: var(--gold);
    padding: .55rem 1.6rem;
    font-family: var(--ff-body);
    font-size: .75rem;
    letter-spacing: .18em;
    text-transform: uppercase;
    cursor: pointer;
    transition: background .3s, color .3s;
}
.nav-reserve:hover { background: var(--gold); color: var(--dark); }

/* Hamburger */
.hamburger { display: none; flex-direction: column; gap: 5px; cursor: pointer; }
.hamburger span { display: block; width: 26px; height: 1px; background: var(--cream); transition: .3s; }

/* ===================== HERO ===================== */
#hero {
    position: relative;
    height: 100vh; min-height: 680px;
    display: flex; align-items: center; justify-content: center;
    overflow: hidden;
}
.hero-bg {
    position: absolute; inset: 0;
    background:
        linear-gradient(160deg, rgba(26,21,16,.72) 0%, rgba(46,35,24,.55) 50%, rgba(26,21,16,.8) 100%),
        url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=1800&auto=format&fit=crop&q=80') center/cover no-repeat;
    transform: scale(1.05);
    transition: transform 8s ease;
}
#hero.loaded .hero-bg { transform: scale(1); }
.hero-content {
    position: relative; z-index: 2;
    text-align: center;
    padding: 0 1.5rem;
}
.hero-eyebrow {
    display: inline-block;
    font-size: .72rem;
    letter-spacing: .35em;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 1.4rem;
    opacity: 0; transform: translateY(20px);
    animation: fadeUp .8s .4s var(--ease) forwards;
}
.hero-title {
    font-family: var(--ff-dis);
    font-size: clamp(4rem, 10vw, 9rem);
    font-weight: 300;
    line-height: .95;
    color: var(--cream);
    opacity: 0; transform: translateY(30px);
    animation: fadeUp .9s .65s var(--ease) forwards;
}
.hero-title em { font-style: italic; color: var(--gold-lt); }
.hero-sub {
    margin-top: 1.6rem;
    font-size: 1rem;
    font-weight: 300;
    color: rgba(245,240,232,.7);
    letter-spacing: .06em;
    max-width: 420px; margin-inline: auto;
    opacity: 0; transform: translateY(20px);
    animation: fadeUp .8s .9s var(--ease) forwards;
}
.hero-actions {
    margin-top: 2.8rem;
    display: flex; gap: 1.2rem; justify-content: center; flex-wrap: wrap;
    opacity: 0; transform: translateY(20px);
    animation: fadeUp .8s 1.1s var(--ease) forwards;
}
.btn-primary {
    background: var(--gold);
    color: var(--dark);
    border: none;
    padding: 1rem 2.6rem;
    font-family: var(--ff-body);
    font-size: .78rem;
    letter-spacing: .18em;
    text-transform: uppercase;
    cursor: pointer;
    transition: background .3s, transform .2s;
}
.btn-primary:hover { background: var(--gold-lt); transform: translateY(-2px); }
.btn-outline {
    background: transparent;
    border: 1px solid rgba(245,240,232,.5);
    color: var(--cream);
    padding: 1rem 2.6rem;
    font-family: var(--ff-body);
    font-size: .78rem;
    letter-spacing: .18em;
    text-transform: uppercase;
    cursor: pointer;
    transition: border-color .3s, color .3s, transform .2s;
}
.btn-outline:hover { border-color: var(--cream); transform: translateY(-2px); }
.hero-scroll {
    position: absolute; bottom: 2.5rem; left: 50%; transform: translateX(-50%);
    display: flex; flex-direction: column; align-items: center; gap: .6rem;
    color: rgba(245,240,232,.45);
    font-size: .68rem; letter-spacing: .2em; text-transform: uppercase;
    animation: fadeUp 1s 1.5s var(--ease) forwards; opacity: 0;
}
.scroll-line {
    width: 1px; height: 50px;
    background: linear-gradient(to bottom, var(--gold), transparent);
    animation: scrollPulse 2s 2s infinite;
}

/* ===================== SECTION COMMONS ===================== */
section { padding: 7rem 0; }
.container { max-width: 1160px; margin: 0 auto; padding: 0 2rem; }
.section-label {
    font-size: .7rem;
    letter-spacing: .35em;
    text-transform: uppercase;
    color: var(--gold);
    display: block;
    margin-bottom: 1rem;
}
.section-title {
    font-family: var(--ff-dis);
    font-size: clamp(2.4rem, 5vw, 4rem);
    font-weight: 300;
    line-height: 1.1;
    color: var(--bark);
}
.section-title em { font-style: italic; color: var(--gold); }
.divider {
    width: 60px; height: 1px;
    background: var(--gold);
    margin: 1.8rem 0;
}

/* ===================== ABOUT ===================== */
#about { background: var(--cream); }
.about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 5rem;
    align-items: center;
}
.about-images {
    position: relative;
    height: 560px;
}
.about-img-main {
    position: absolute;
    top: 0; left: 0;
    width: 78%; height: 80%;
    object-fit: cover;
}
.about-img-accent {
    position: absolute;
    bottom: 0; right: 0;
    width: 55%; height: 50%;
    object-fit: cover;
    border: 6px solid var(--cream);
}
.about-badge {
    position: absolute;
    top: 42%; left: 62%;
    width: 110px; height: 110px;
    background: var(--gold);
    border-radius: 50%;
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    text-align: center;
    color: var(--dark);
    z-index: 2;
}
.about-badge strong { font-family: var(--ff-dis); font-size: 2rem; font-weight: 600; line-height: 1; }
.about-badge small { font-size: .58rem; letter-spacing: .12em; text-transform: uppercase; }
.about-text p { color: var(--muted); margin-bottom: 1.2rem; }
.about-stats {
    display: flex; gap: 2.5rem;
    margin-top: 2.4rem;
    padding-top: 2.4rem;
    border-top: 1px solid var(--border);
}
.stat-num {
    font-family: var(--ff-dis);
    font-size: 2.6rem;
    font-weight: 300;
    color: var(--gold);
    line-height: 1;
    display: block;
}
.stat-label { font-size: .72rem; letter-spacing: .12em; color: var(--muted); text-transform: uppercase; }

/* ===================== MENU ===================== */
#menu { background: var(--bark); }
#menu .section-title { color: var(--cream); }
#menu .section-label { color: var(--gold-lt); }
#menu .divider { background: var(--gold-lt); }
.menu-tabs {
    display: flex; gap: 0;
    margin-bottom: 3.5rem;
    border-bottom: 1px solid rgba(245,240,232,.12);
}
.tab-btn {
    background: none; border: none;
    padding: .9rem 1.8rem;
    font-family: var(--ff-body);
    font-size: .78rem;
    letter-spacing: .18em;
    text-transform: uppercase;
    color: rgba(245,240,232,.45);
    cursor: pointer;
    position: relative;
    transition: color .3s;
}
.tab-btn::after {
    content: '';
    position: absolute; bottom: -1px; left: 0; right: 0;
    height: 1px; background: var(--gold);
    transform: scaleX(0); transition: transform .3s var(--ease);
}
.tab-btn.active { color: var(--cream); }
.tab-btn.active::after { transform: scaleX(1); }
.tab-panel { display: none; }
.tab-panel.active { display: block; }
.menu-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 1.5px;
}
.menu-item {
    padding: 2rem 2.2rem;
    background: rgba(245,240,232,.04);
    border: 1px solid rgba(245,240,232,.06);
    transition: background .3s;
    display: flex; flex-direction: column;
}
.menu-item:hover { background: rgba(245,240,232,.07); }
.menu-item-header { display: flex; justify-content: space-between; align-items: flex-start; gap: 1rem; }
.menu-item h3 {
    font-family: var(--ff-dis);
    font-size: 1.25rem;
    font-weight: 400;
    color: var(--cream);
    line-height: 1.3;
}
.menu-price {
    font-family: var(--ff-dis);
    font-size: 1.1rem;
    color: var(--gold);
    white-space: nowrap;
    flex-shrink: 0;
}
.menu-desc {
    margin-top: .6rem;
    font-size: .85rem;
    color: rgba(245,240,232,.45);
    line-height: 1.6;
}

/* ===================== GALLERY ===================== */
#gallery { background: var(--warm); padding: 5rem 0; }
.gallery-header { text-align: center; margin-bottom: 3rem; }
.gallery-header .divider { margin-inline: auto; }
.gallery-grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-template-rows: 260px 260px;
    gap: 6px;
}
.g-item { overflow: hidden; }
.g-item img { height: 100%; transition: transform .7s var(--ease); }
.g-item:hover img { transform: scale(1.06); }
.g1 { grid-column: 1/5; grid-row: 1/2; }
.g2 { grid-column: 5/9; grid-row: 1/3; }
.g3 { grid-column: 9/13; grid-row: 1/2; }
.g4 { grid-column: 1/4; grid-row: 2/3; }
.g5 { grid-column: 4/6; grid-row: 2/3; }
.g6 { grid-column: 9/13; grid-row: 2/3; }

/* ===================== RESERVATION ===================== */
#reservation { background: var(--cream); }
.res-grid {
    display: grid;
    grid-template-columns: 1fr 1.1fr;
    gap: 5rem;
    align-items: start;
}
.res-info h2 { margin-bottom: 1rem; }
.res-info p { color: var(--muted); margin-bottom: 2rem; }
.contact-list { display: flex; flex-direction: column; gap: 1.2rem; }
.contact-item { display: flex; align-items: center; gap: 1rem; }
.contact-icon {
    width: 44px; height: 44px;
    border: 1px solid var(--border);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
}
.contact-icon svg { width: 18px; height: 18px; stroke: var(--gold); fill: none; stroke-width: 1.5; }
.contact-item strong { display: block; font-size: .78rem; letter-spacing: .1em; text-transform: uppercase; color: var(--muted); margin-bottom: .15rem; }
.contact-item span { font-size: .95rem; color: var(--text); }

/* Form */
.res-form { background: var(--dark); padding: 3rem; }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
.field { display: flex; flex-direction: column; gap: .5rem; margin-bottom: 1.2rem; }
.field label { font-size: .72rem; letter-spacing: .15em; text-transform: uppercase; color: rgba(245,240,232,.5); }
.field input,
.field textarea,
.field select {
    background: rgba(245,240,232,.05);
    border: 1px solid rgba(245,240,232,.12);
    color: var(--cream);
    padding: .85rem 1rem;
    font-family: var(--ff-body);
    font-size: .92rem;
    outline: none;
    transition: border-color .3s;
    width: 100%;
    appearance: none;
}
.field input::placeholder,
.field textarea::placeholder { color: rgba(245,240,232,.25); }
.field input:focus,
.field textarea:focus,
.field select:focus { border-color: var(--gold); }
.field textarea { resize: vertical; min-height: 110px; }
.field select option { background: var(--dark); }
.form-submit {
    width: 100%;
    background: var(--gold);
    border: none;
    color: var(--dark);
    padding: 1.1rem;
    font-family: var(--ff-body);
    font-size: .8rem;
    letter-spacing: .18em;
    text-transform: uppercase;
    cursor: pointer;
    transition: background .3s, transform .2s;
    margin-top: .5rem;
}
.form-submit:hover { background: var(--gold-lt); transform: translateY(-2px); }
.alert-success {
    background: rgba(184,154,94,.15);
    border: 1px solid var(--gold);
    color: var(--gold-lt);
    padding: 1rem 1.4rem;
    font-size: .88rem;
    letter-spacing: .05em;
    margin-bottom: 1.5rem;
}
.alert-error {
    background: rgba(200,80,80,.12);
    border: 1px solid rgba(200,80,80,.4);
    color: #e07070;
    padding: 1rem 1.4rem;
    font-size: .88rem;
    margin-bottom: 1.5rem;
}

/* ===================== FOOTER ===================== */
footer {
    background: var(--dark);
    padding: 4rem 0 2rem;
    border-top: 1px solid rgba(184,154,94,.2);
}
.footer-grid {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr;
    gap: 3rem;
    margin-bottom: 3rem;
}
.footer-brand .nav-logo { font-size: 2rem; }
.footer-brand p { margin-top: 1rem; color: rgba(245,240,232,.4); font-size: .88rem; max-width: 260px; line-height: 1.7; }
.footer-col h4 { font-size: .72rem; letter-spacing: .2em; text-transform: uppercase; color: var(--gold); margin-bottom: 1.2rem; }
.footer-col li { margin-bottom: .7rem; }
.footer-col a { color: rgba(245,240,232,.45); font-size: .9rem; transition: color .3s; }
.footer-col a:hover { color: var(--cream); }
.footer-bottom {
    border-top: 1px solid rgba(245,240,232,.07);
    padding-top: 1.8rem;
    display: flex; justify-content: space-between; align-items: center;
    flex-wrap: wrap; gap: 1rem;
}
.footer-bottom p { font-size: .78rem; color: rgba(245,240,232,.3); letter-spacing: .05em; }
.social-links { display: flex; gap: 1rem; }
.social-links a {
    width: 38px; height: 38px;
    border: 1px solid rgba(245,240,232,.12);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    color: rgba(245,240,232,.4);
    font-size: .9rem;
    transition: border-color .3s, color .3s;
}
.social-links a:hover { border-color: var(--gold); color: var(--gold); }

/* ===================== ANIMATIONS ===================== */
@keyframes fadeUp {
    to { opacity: 1; transform: translateY(0); }
}
@keyframes scrollPulse {
    0%, 100% { opacity: .4; transform: scaleY(1); }
    50%       { opacity: 1; transform: scaleY(1.15); }
}
.reveal {
    opacity: 0; transform: translateY(36px);
    transition: opacity .8s var(--ease), transform .8s var(--ease);
}
.reveal.visible { opacity: 1; transform: translateY(0); }

/* ===================== MOBILE NAV OVERLAY ===================== */
.mobile-nav {
    position: fixed; inset: 0;
    background: var(--dark);
    z-index: 200;
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    gap: 2rem;
    opacity: 0; pointer-events: none;
    transition: opacity .4s var(--ease);
}
.mobile-nav.open { opacity: 1; pointer-events: all; }
.mobile-nav a {
    font-family: var(--ff-dis);
    font-size: 2.2rem;
    color: var(--cream);
    font-weight: 300;
    letter-spacing: .05em;
    transition: color .3s;
}
.mobile-nav a:hover { color: var(--gold); }
.mobile-close {
    position: absolute; top: 2rem; right: 2.5rem;
    background: none; border: none;
    font-size: 2rem; color: var(--cream); cursor: pointer;
}

/* ===================== RESPONSIVE ===================== */
@media (max-width: 900px) {
    nav { padding: 1.2rem 2rem; }
    nav.scrolled { padding: .9rem 2rem; }
    .nav-links, .nav-reserve { display: none; }
    .hamburger { display: flex; }

    .about-grid, .res-grid { grid-template-columns: 1fr; gap: 3rem; }
    .about-images { height: 380px; }
    .footer-grid { grid-template-columns: 1fr 1fr; }

    .gallery-grid {
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: auto;
    }
    .g1,.g2,.g3,.g4,.g5,.g6 { grid-column: auto; grid-row: auto; height: 220px; }

    .form-row { grid-template-columns: 1fr; }
}
@media (max-width: 560px) {
    .hero-title { font-size: 3.2rem; }
    section { padding: 5rem 0; }
    .footer-grid { grid-template-columns: 1fr; }
    .res-form { padding: 2rem 1.5rem; }
    .about-badge { width: 90px; height: 90px; }
    .about-badge strong { font-size: 1.6rem; }
}
</style>
</head>
<body>

<!-- ===================== MOBILE NAV ===================== -->
<div class="mobile-nav" id="mobileNav">
    <button class="mobile-close" id="mobileClose">✕</button>
    <a href="#about" onclick="closeMobileNav()">За нас</a>
    <a href="#menu" onclick="closeMobileNav()">Меню</a>
    <a href="#gallery" onclick="closeMobileNav()">Галерия</a>
    <a href="#reservation" onclick="closeMobileNav()">Резервация</a>
</div>

<!-- ===================== NAV ===================== -->
<nav id="mainNav">
    <a class="nav-logo" href="#"><em>La</em> Foresta</a>
    <ul class="nav-links">
        <li><a href="#about">За нас</a></li>
        <li><a href="#menu">Меню</a></li>
        <li><a href="#gallery">Галерия</a></li>
        <li><a href="#reservation">Контакт</a></li>
    </ul>
    <button class="nav-reserve" onclick="document.getElementById('reservation').scrollIntoView({behavior:'smooth'})">Резервирай</button>
    <div class="hamburger" id="hamburger" onclick="openMobileNav()">
        <span></span><span></span><span></span>
    </div>
</nav>

<!-- ===================== HERO ===================== -->
<section id="hero">
    <div class="hero-bg"></div>
    <div class="hero-content">
        <span class="hero-eyebrow">Ресторант · Добрич, България</span>
        <h1 class="hero-title"><em>La</em><br>Foresta</h1>
        <p class="hero-sub">Изискана кухня вдъхновена от горите и сезоните — всяка чиния разказва история.</p>
        <div class="hero-actions">
            <button class="btn-primary" onclick="document.getElementById('menu').scrollIntoView({behavior:'smooth'})">Разгледай менюто</button>
            <button class="btn-outline" onclick="document.getElementById('reservation').scrollIntoView({behavior:'smooth'})">Резервирай маса</button>
        </div>
    </div>
    <div class="hero-scroll">
        <span>Scroll</span>
        <div class="scroll-line"></div>
    </div>
</section>

<!-- ===================== ABOUT ===================== -->
<section id="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-images reveal">
                <img class="about-img-main"
                    src="https://images.unsplash.com/photo-1559339352-11d035aa65de?w=900&auto=format&fit=crop&q=80"
                    alt="Интериор на ресторанта">
                <img class="about-img-accent"
                    src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=600&auto=format&fit=crop&q=80"
                    alt="Изискано ястие">
                <div class="about-badge">
                    <strong>12</strong>
                    <small>Години традиция</small>
                </div>
            </div>
            <div class="about-text reveal">
                <span class="section-label">Нашата история</span>
                <h2 class="section-title">Където природата<br>среща <em>изкуството</em></h2>
                <div class="divider"></div>
                <p>La Foresta се роди от любовта към сезонните продукти и италианско-средиземноморската кулинарна традиция. Вярваме, че истинската кухня е уважение към земята — затова работим само с локални ферми и доставчици.</p>
                <p>Нашият главен готвач Антонио Бруно е прекарал 15 години в Тоскана, Барселона и Копенхаген, преди да донесе своята визия обратно в България. Всяко ястие е балансът между спомен и изненада.</p>
                <div class="about-stats">
                    <div>
                        <span class="stat-num">48</span>
                        <span class="stat-label">Места</span>
                    </div>
                    <div>
                        <span class="stat-num">6</span>
                        <span class="stat-label">Награди</span>
                    </div>
                    <div>
                        <span class="stat-num">100%</span>
                        <span class="stat-label">Локални продукти</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== MENU ===================== -->
<section id="menu">
    <div class="container">
        <div class="reveal">
            <span class="section-label">Нашата кухня</span>
            <h2 class="section-title" style="color:var(--cream)">Сезонно <em>меню</em></h2>
            <div class="divider"></div>
        </div>

        <div class="menu-tabs reveal">
            <?php foreach (array_keys($menu) as $i => $cat): ?>
            <button class="tab-btn <?= $i === 0 ? 'active' : '' ?>"
                    onclick="switchTab(this, 'tab-<?= $i ?>')">
                <?= htmlspecialchars($cat) ?>
            </button>
            <?php endforeach; ?>
        </div>

        <?php foreach ($menu as $i => [$cat, $items]): ?>
        <?php $idx = array_search($cat, array_keys($menu)); ?>
        <?php endforeach; ?>

        <?php $idx = 0; foreach ($menu as $cat => $items): ?>
        <div class="tab-panel <?= $idx === 0 ? 'active' : '' ?>" id="tab-<?= $idx ?>">
            <div class="menu-grid">
                <?php foreach ($items as $item): ?>
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3><?= htmlspecialchars($item['name']) ?></h3>
                        <span class="menu-price"><?= htmlspecialchars($item['price']) ?></span>
                    </div>
                    <p class="menu-desc"><?= htmlspecialchars($item['desc']) ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php $idx++; endforeach; ?>
    </div>
</section>

<!-- ===================== GALLERY ===================== -->
<section id="gallery">
    <div class="container">
        <div class="gallery-header reveal">
            <span class="section-label">Атмосфера</span>
            <h2 class="section-title">Нашето <em>пространство</em></h2>
            <div class="divider"></div>
        </div>
        <div class="gallery-grid reveal">
            <div class="g-item g1">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=800&auto=format&fit=crop&q=80" alt="Ресторант интериор">
            </div>
            <div class="g-item g2">
                <img src="https://images.unsplash.com/photo-1565299585323-38d6b0865b47?w=800&auto=format&fit=crop&q=80" alt="Изискана паста">
            </div>
            <div class="g-item g3">
                <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=800&auto=format&fit=crop&q=80" alt="Маса за вечеря">
            </div>
            <div class="g-item g4">
                <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?w=600&auto=format&fit=crop&q=80" alt="Коктейли">
            </div>
            <div class="g-item g5">
                <img src="https://images.unsplash.com/photo-1476224203421-9ac39bcb3327?w=600&auto=format&fit=crop&q=80" alt="Десерт">
            </div>
            <div class="g-item g6">
                <img src="https://images.unsplash.com/photo-1424847651672-bf20a4b0982b?w=800&auto=format&fit=crop&q=80" alt="Тераса">
            </div>
        </div>
    </div>
</section>

<!-- ===================== RESERVATION ===================== -->
<section id="reservation">
    <div class="container">
        <div class="res-grid">
            <div class="res-info reveal">
                <span class="section-label">Елате при нас</span>
                <h2 class="section-title">Резервирайте<br>вашата <em>маса</em></h2>
                <div class="divider"></div>
                <p>Ще се радваме да ви посрещнем. За специални поводи и групи над 10 човека, моля свържете се с нас директно.</p>

                <ul class="contact-list">
                    <li class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div>
                            <strong>Адрес</strong>
                            <span>ул. „Цар Освободител" 18, Добрич 9300</span>
                        </div>
                    </li>
                    <li class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 014.1 11.8a19.79 19.79 0 01-3.07-8.67A2 2 0 013 1h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L7.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                        </div>
                        <div>
                            <strong>Телефон</strong>
                            <span>+359 58 123 456</span>
                        </div>
                    </li>
                    <li class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div>
                            <strong>Работно време</strong>
                            <span>Пн–Чт 12:00–23:00 · Пт–Нд 12:00–00:00</span>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="res-form reveal">
                <?php if ($success): ?>
                    <div class="alert-success">✓ Вашата заявка е изпратена. Ще се свържем с вас скоро!</div>
                <?php elseif ($error): ?>
                    <div class="alert-error">⚠ <?= $error ?></div>
                <?php endif; ?>

                <form method="POST" action="#reservation">
                    <input type="hidden" name="form_submit" value="1">
                    <div class="form-row">
                        <div class="field">
                            <label>Вашето име</label>
                            <input type="text" name="name" placeholder="Иван Иванов" required value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
                        </div>
                        <div class="field">
                            <label>Имейл</label>
                            <input type="email" name="email" placeholder="ivan@example.com" required value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="field">
                            <label>Дата</label>
                            <input type="date" name="date" required>
                        </div>
                        <div class="field">
                            <label>Час</label>
                            <select name="time">
                                <?php foreach (['12:00','13:00','14:00','18:00','19:00','20:00','21:00','22:00'] as $t): ?>
                                <option value="<?= $t ?>"><?= $t ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <label>Брой гости</label>
                        <select name="guests">
                            <?php for ($g = 1; $g <= 12; $g++): ?>
                            <option value="<?= $g ?>"><?= $g ?> <?= $g === 1 ? 'човек' : 'човека' ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="field">
                        <label>Съобщение (по желание)</label>
                        <textarea name="message" placeholder="Специален повод, алергии, специфични изисквания..."><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                    </div>
                    <button type="submit" class="form-submit">Изпрати заявка</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ===================== FOOTER ===================== -->
<footer>
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a class="nav-logo" href="#"><em>La</em> Foresta</a>
                <p>Изискана средиземноморска кухня в сърцето на Добрич. Всяко ястие — едно пътешествие.</p>
            </div>
            <div class="footer-col">
                <h4>Навигация</h4>
                <ul>
                    <li><a href="#about">За нас</a></li>
                    <li><a href="#menu">Меню</a></li>
                    <li><a href="#gallery">Галерия</a></li>
                    <li><a href="#reservation">Резервация</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Информация</h4>
                <ul>
                    <li><a href="#">Политика за поверителност</a></li>
                    <li><a href="#">Общи условия</a></li>
                    <li><a href="#">Кариери</a></li>
                    <li><a href="#">Подаръчни ваучери</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© <?= date('Y') ?> La Foresta. Всички права запазени.</p>
            <div class="social-links">
                <a href="#" aria-label="Facebook">f</a>
                <a href="#" aria-label="Instagram">ig</a>
                <a href="#" aria-label="TripAdvisor">ta</a>
            </div>
        </div>
    </div>
</footer>

<script>
// Nav scroll
const nav = document.getElementById('mainNav');
window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 60);
});

// Hero Ken Burns
document.getElementById('hero').classList.add('loaded');

// Scroll reveal
const observer = new IntersectionObserver((entries) => {
    entries.forEach((e, i) => {
        if (e.isIntersecting) {
            setTimeout(() => e.target.classList.add('visible'), i * 120);
            observer.unobserve(e.target);
        }
    });
}, { threshold: 0.12 });
document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

// Tabs
function switchTab(btn, panelId) {
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
    btn.classList.add('active');
    document.getElementById(panelId).classList.add('active');
}

// Mobile nav
function openMobileNav()  { document.getElementById('mobileNav').classList.add('open'); }
function closeMobileNav() { document.getElementById('mobileNav').classList.remove('open'); }
document.getElementById('mobileClose').addEventListener('click', closeMobileNav);
</script>
</body>
</html>