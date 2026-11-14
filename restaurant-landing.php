<?php
// ============================================
// RESTAURANT WEBSITE - PREMIUM LANDING PAGE
// ============================================

// Site Settings
$restaurant_name = "Le Château Gourmet";
$restaurant_tagline = "Fine Dining & Culinary Excellence";
$address = "123 Avenue des Gourmets, Paris, France";
$phone = "+33 1 23 45 67 89";
$email = "reservations@lechateaugourmet.com";
$copyright = "© 2026 Le Château Gourmet. All rights reserved.";

// Opening Hours
$opening_hours = [
    'Monday - Friday' => '12:00 PM - 11:00 PM',
    'Saturday' => '12:00 PM - 12:00 AM',
    'Sunday' => '12:00 PM - 10:00 PM'
];

// Menu Items
$menu_items = [
    'pizza' => [
        ['name' => 'Truffle Mushroom Pizza', 'description' => 'Wild mushrooms, truffle oil, mozzarella, parmesan', 'price' => '€28', 'image' => 'https://images.unsplash.com/photo-1574071318508-1cdbab80d002?w=400&h=300&fit=crop'],
        ['name' => 'Prosciutto Arugula Pizza', 'description' => 'San Marzano tomato, prosciutto, arugula, parmesan', 'price' => '€26', 'image' => 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=400&h=300&fit=crop'],
        ['name' => 'Burrata Caprese Pizza', 'description' => 'Heirloom tomatoes, burrata, basil, balsamic glaze', 'price' => '€30', 'image' => 'https://images.unsplash.com/photo-1513104890138-7c749659a591?w=400&h=300&fit=crop'],
        ['name' => 'Quattro Formaggi', 'description' => 'Four cheese blend, honey, walnuts, fresh thyme', 'price' => '€25', 'image' => 'https://images.unsplash.com/photo-1548369937-47519962c11a?w=400&h=300&fit=crop'],
    ],
    'pasta' => [
        ['name' => 'Lobster Tagliatelle', 'description' => 'Fresh tagliatelle, lobster, cherry tomatoes, basil', 'price' => '€34', 'image' => 'https://images.unsplash.com/photo-1563379926898-05f4575a45d8?w=400&h=300&fit=crop'],
        ['name' => 'Truffle Risotto', 'description' => 'Carnaroli rice, black truffle, parmesan, butter', 'price' => '€32', 'image' => 'https://images.unsplash.com/photo-1523307730650-594bc63f6d1d?w=400&h=300&fit=crop'],
        ['name' => 'Wild Boar Ragu', 'description' => 'Pappardelle, wild boar ragu, rosemary, parmesan', 'price' => '€30', 'image' => 'https://images.unsplash.com/photo-1588013273468-315fd88ea34c?w=400&h=300&fit=crop'],
        ['name' => 'Seafood Linguine', 'description' => 'Linguine, mixed seafood, garlic, white wine sauce', 'price' => '€35', 'image' => 'https://images.unsplash.com/photo-1516100882582-96c3a05fe590?w=400&h=300&fit=crop'],
    ],
    'steaks' => [
        ['name' => 'Wagyu Ribeye', 'description' => 'Grade A5 Wagyu, grilled to perfection, truffle butter', 'price' => '€85', 'image' => 'https://images.unsplash.com/photo-1558030006-450675393462?w=400&h=300&fit=crop'],
        ['name' => 'Filet Mignon', 'description' => 'Beef tenderloin, red wine reduction, wild mushrooms', 'price' => '€48', 'image' => 'https://images.unsplash.com/photo-1546964124-0cce460f38ef?w=400&h=300&fit=crop'],
        ['name' => 'Tomahawk Steak', 'description' => '32oz bone-in ribeye, herb butter, grilled vegetables', 'price' => '€95', 'image' => 'https://images.unsplash.com/photo-1529694157872-4e0c0f3b238b?w=400&h=300&fit=crop'],
        ['name' => 'Pepper Crusted Sirloin', 'description' => 'Sirloin, peppercorn crust, brandy cream sauce', 'price' => '€42', 'image' => 'https://images.unsplash.com/photo-1594041680534-e8c8cdebd659?w=400&h=300&fit=crop'],
    ],
    'desserts' => [
        ['name' => 'Chocolate Soufflé', 'description' => 'Dark chocolate, vanilla bean ice cream, raspberry coulis', 'price' => '€16', 'image' => 'https://images.unsplash.com/photo-1606313564200-e75d5e30476c?w=400&h=300&fit=crop'],
        ['name' => 'Crème Brûlée', 'description' => 'Vanilla bean custard, caramelized sugar, fresh berries', 'price' => '€14', 'image' => 'https://images.unsplash.com/photo-1571877227200-a0d98ea607e9?w=400&h=300&fit=crop'],
        ['name' => 'Tiramisu', 'description' => 'Coffee-soaked ladyfingers, mascarpone, cocoa powder', 'price' => '€15', 'image' => 'https://images.unsplash.com/photo-1571877227200-a0d98ea607e9?w=400&h=300&fit=crop'],
        ['name' => 'Fruit Tart', 'description' => 'Pâte sucrée, vanilla pastry cream, seasonal fruits', 'price' => '€13', 'image' => 'https://images.unsplash.com/photo-1587314168485-3236d6710814?w=400&h=300&fit=crop'],
    ],
    'drinks' => [
        ['name' => 'Signature Cocktail', 'description' => 'Premium vodka, elderflower, prosecco, edible flowers', 'price' => '€22', 'image' => 'https://images.unsplash.com/photo-1470337458703-46ad1756a187?w=400&h=300&fit=crop'],
        ['name' => 'Old Fashioned', 'description' => 'Bourbon, angostura, demerara sugar, orange twist', 'price' => '€18', 'image' => 'https://images.unsplash.com/photo-1470337458703-46ad1756a187?w=400&h=300&fit=crop'],
        ['name' => 'Rosé Champagne', 'description' => 'Veuve Clicquot Rosé, fresh strawberries', 'price' => '€65', 'image' => 'https://images.unsplash.com/photo-1578911373434-0cb395d2cbfb?w=400&h=300&fit=crop'],
        ['name' => 'Single Malt Scotch', 'description' => 'Macallan 18, served with a single ice sphere', 'price' => '€35', 'image' => 'https://images.unsplash.com/photo-1578911373434-0cb395d2cbfb?w=400&h=300&fit=crop'],
    ]
];

$testimonials = [
    ['name' => 'Sophie Laurent', 'avatar' => 'https://images.unsplash.com/photo-1494790108372-be9c29b29330?w=100&h=100&fit=crop', 'rating' => 5, 'text' => 'An extraordinary dining experience! The attention to detail in every dish was remarkable. The truffle risotto was simply divine.'],
    ['name' => 'Jean-Pierre Dubois', 'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop', 'rating' => 5, 'text' => 'The best fine dining restaurant in Paris. The wagyu steak was cooked to absolute perfection. Service was impeccable throughout.'],
    ['name' => 'Marie-Claire Fontaine', 'avatar' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop', 'rating' => 5, 'text' => 'Every visit is a culinary journey. The wine pairing was exceptional and the dessert selection is out of this world.'],
    ['name' => 'Antoine Martin', 'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop', 'rating' => 4, 'text' => 'A true gem in the heart of Paris. The ambiance is elegant and romantic, perfect for special occasions. Highly recommended!'],
];

$faqs = [
    ['q' => 'Do you accommodate dietary restrictions?', 'a' => 'Yes, we offer vegetarian, vegan, and gluten-free options. Please inform your server about any dietary requirements when making your reservation.'],
    ['q' => 'What is your dress code?', 'a' => 'We maintain a smart casual dress code. Jackets are recommended for gentlemen, and elegant attire is appreciated for all guests.'],
    ['q' => 'Do you offer private dining?', 'a' => 'Yes, we have two private dining rooms that can accommodate up to 20 guests each. Perfect for business dinners or special celebrations.'],
    ['q' => 'What are your cancellation policies?', 'a' => 'We require 24 hours notice for cancellations. A fee may apply for no-shows or late cancellations.'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Château Gourmet - Fine Dining Restaurant in Paris</title>
    <meta name="description" content="Experience the finest culinary excellence at Le Château Gourmet. Award-winning fine dining restaurant in Paris offering exquisite French cuisine.">
    <meta name="keywords" content="fine dining, restaurant, Paris, gourmet, French cuisine, luxury restaurant, Michelin star, steak, pasta, wine">
    <link rel="canonical" href="https://www.lechateaugourmet.com/">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="Le Château Gourmet - Fine Dining Restaurant in Paris">
    <meta property="og:description" content="Experience the finest culinary excellence at Le Château Gourmet. Award-winning fine dining restaurant in Paris.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.lechateaugourmet.com/">
    <meta property="og:image" content="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1200&h=630&fit=crop">
    
    <!-- Twitter Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Le Château Gourmet - Fine Dining Restaurant in Paris">
    <meta name="twitter:description" content="Experience the finest culinary excellence at Le Château Gourmet.">
    <meta name="twitter:image" content="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1200&h=630&fit=crop">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,900;1,400&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* ============================================
           PREMIUM RESTAURANT STYLES
           ============================================ */
        
        :root {
            --gold: #c9a962;
            --gold-light: #e8d5a3;
            --gold-dark: #a8893e;
            --dark: #0a0806;
            --dark-light: #1a1410;
            --dark-card: #1e1612;
            --text-light: #f5f0eb;
            --text-muted: #a89888;
            --glass-bg: rgba(255, 255, 255, 0.05);
            --glass-border: rgba(255, 255, 255, 0.1);
            --shadow-gold: 0 0 30px rgba(201, 169, 98, 0.15);
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--dark);
            color: var(--text-light);
            overflow-x: hidden;
            line-height: 1.8;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }

        .section-padding {
            padding: 100px 0;
        }

        .section-title {
            font-size: 3.2rem;
            font-weight: 700;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title .gold-text {
            color: var(--gold);
        }

        .section-subtitle {
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 4px;
            color: var(--gold);
            font-weight: 500;
            margin-bottom: 10px;
        }

        .gold-text {
            color: var(--gold);
        }

        .gold-border {
            border-color: var(--gold) !important;
        }

        .gold-bg {
            background: var(--gold);
        }

        /* ============================================
           BUTTONS
           ============================================ */
        .btn-gold {
            background: var(--gold);
            color: var(--dark);
            padding: 14px 40px;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: var(--transition);
            border: none;
            position: relative;
            overflow: hidden;
        }

        .btn-gold:hover {
            background: var(--gold-light);
            color: var(--dark);
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(201, 169, 98, 0.3);
        }

        .btn-outline-gold {
            background: transparent;
            color: var(--gold);
            padding: 14px 40px;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: var(--transition);
            border: 2px solid var(--gold);
        }

        .btn-outline-gold:hover {
            background: var(--gold);
            color: var(--dark);
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(201, 169, 98, 0.2);
        }

        /* ============================================
           NAVBAR
           ============================================ */
        .navbar-custom {
            background: rgba(10, 8, 6, 0.95);
            backdrop-filter: blur(20px);
            padding: 15px 0;
            transition: var(--transition);
            border-bottom: 1px solid rgba(201, 169, 98, 0.1);
        }

        .navbar-custom.scrolled {
            background: rgba(10, 8, 6, 0.98);
            padding: 10px 0;
            box-shadow: 0 10px 40px rgba(0,0,0,0.8);
        }

        .navbar-custom .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--gold);
            letter-spacing: 2px;
        }

        .navbar-custom .navbar-brand span {
            color: var(--text-light);
        }

        .navbar-custom .nav-link {
            color: var(--text-light) !important;
            font-weight: 400;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 8px 18px !important;
            transition: var(--transition);
            position: relative;
        }

        .navbar-custom .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--gold);
            transition: var(--transition);
            transform: translateX(-50%);
        }

        .navbar-custom .nav-link:hover::after,
        .navbar-custom .nav-link.active::after {
            width: 60%;
        }

        .navbar-custom .nav-link:hover,
        .navbar-custom .nav-link.active {
            color: var(--gold) !important;
        }

        .navbar-custom .navbar-toggler {
            border: 1px solid var(--gold);
            padding: 8px 12px;
        }

        .navbar-custom .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%23c9a962' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* ============================================
           HERO
           ============================================ */
        .hero-section {
            min-height: 100vh;
            background: linear-gradient(135deg, rgba(10,8,6,0.8) 0%, rgba(10,8,6,0.4) 100%),
                        url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1920&q=80') center/cover no-repeat;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 50%, rgba(201,169,98,0.08) 0%, transparent 70%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            padding: 80px 0;
        }

        .hero-content .badge-gold {
            display: inline-block;
            padding: 8px 30px;
            border: 1px solid var(--gold);
            border-radius: 50px;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: var(--gold);
            margin-bottom: 30px;
            backdrop-filter: blur(10px);
            background: rgba(201,169,98,0.1);
        }

        .hero-content h1 {
            font-size: 5.5rem;
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 25px;
            color: #fff;
        }

        .hero-content h1 .gold-text {
            color: var(--gold);
        }

        .hero-content p {
            font-size: 1.3rem;
            color: rgba(255,255,255,0.8);
            max-width: 600px;
            margin-bottom: 40px;
            font-weight: 300;
            letter-spacing: 0.5px;
        }

        .hero-content .btn-group {
            gap: 20px;
            flex-wrap: wrap;
        }

        .scroll-indicator {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
            color: var(--text-muted);
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            animation: bounceDown 2s infinite;
        }

        .scroll-indicator i {
            font-size: 1.5rem;
            color: var(--gold);
        }

        @keyframes bounceDown {
            0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
            40% { transform: translateX(-50%) translateY(-15px); }
            60% { transform: translateX(-50%) translateY(-8px); }
        }

        /* ============================================
           ABOUT
           ============================================ */
        .about-section {
            background: var(--dark-light);
        }

        .about-image {
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            box-shadow: var(--shadow-gold);
        }

        .about-image img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            transition: var(--transition);
        }

        .about-image:hover img {
            transform: scale(1.05);
        }

        .about-image .experience-badge {
            position: absolute;
            bottom: 30px;
            right: -20px;
            background: var(--gold);
            color: var(--dark);
            padding: 20px 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(201,169,98,0.3);
        }

        .about-image .experience-badge h3 {
            font-size: 2.5rem;
            font-weight: 900;
            margin: 0;
        }

        .about-image .experience-badge p {
            margin: 0;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .about-content h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .about-content p {
            color: var(--text-muted);
            margin-bottom: 25px;
            font-size: 1.05rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 40px;
        }

        .stat-item {
            text-align: center;
            padding: 20px;
            background: rgba(255,255,255,0.03);
            border-radius: 15px;
            border: 1px solid rgba(201,169,98,0.1);
            transition: var(--transition);
        }

        .stat-item:hover {
            background: rgba(201,169,98,0.08);
            border-color: var(--gold);
            transform: translateY(-5px);
        }

        .stat-item h3 {
            font-size: 2.5rem;
            font-weight: 900;
            color: var(--gold);
            margin: 0;
            font-family: 'Playfair Display', serif;
        }

        .stat-item p {
            margin: 5px 0 0;
            font-size: 0.85rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* ============================================
           WHY CHOOSE US
           ============================================ */
        .why-section {
            background: var(--dark);
        }

        .why-card {
            background: var(--dark-card);
            padding: 40px 30px;
            border-radius: 20px;
            border: 1px solid rgba(201,169,98,0.08);
            transition: var(--transition);
            text-align: center;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .why-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(201,169,98,0.03), transparent);
            opacity: 0;
            transition: var(--transition);
        }

        .why-card:hover::before {
            opacity: 1;
        }

        .why-card:hover {
            transform: translateY(-10px);
            border-color: var(--gold);
            box-shadow: var(--shadow-gold);
        }

        .why-card .icon-wrap {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: rgba(201,169,98,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2.5rem;
            color: var(--gold);
            transition: var(--transition);
        }

        .why-card:hover .icon-wrap {
            background: var(--gold);
            color: var(--dark);
            transform: scale(1.1) rotate(5deg);
        }

        .why-card h4 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .why-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin: 0;
        }

        /* ============================================
           MENU
           ============================================ */
        .menu-section {
            background: var(--dark-light);
        }

        .menu-tabs .nav-link {
            color: var(--text-muted);
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 12px 30px;
            border-radius: 50px;
            border: 1px solid rgba(201,169,98,0.15);
            margin: 0 5px;
            transition: var(--transition);
            font-size: 0.85rem;
        }

        .menu-tabs .nav-link:hover {
            color: var(--gold);
            border-color: var(--gold);
        }

        .menu-tabs .nav-link.active {
            background: var(--gold);
            color: var(--dark);
            border-color: var(--gold);
        }

        .menu-card {
            background: var(--dark-card);
            border-radius: 20px;
            overflow: hidden;
            transition: var(--transition);
            border: 1px solid rgba(201,169,98,0.05);
            height: 100%;
        }

        .menu-card:hover {
            transform: translateY(-10px);
            border-color: var(--gold);
            box-shadow: var(--shadow-gold);
        }

        .menu-card .menu-image {
            height: 220px;
            overflow: hidden;
            position: relative;
        }

        .menu-card .menu-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .menu-card:hover .menu-image img {
            transform: scale(1.1);
        }

        .menu-card .menu-image .price-tag {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--gold);
            color: var(--dark);
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
        }

        .menu-card .menu-body {
            padding: 25px;
        }

        .menu-card .menu-body h5 {
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .menu-card .menu-body p {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin: 0;
        }

        /* ============================================
           GALLERY
           ============================================ */
        .gallery-section {
            background: var(--dark);
        }

        .gallery-item {
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            margin-bottom: 24px;
        }

        .gallery-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: var(--transition);
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(10,8,6,0.6);
            backdrop-filter: blur(5px);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: var(--transition);
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-item .gallery-overlay i {
            font-size: 3rem;
            color: var(--gold);
            transform: scale(0.5);
            transition: var(--transition);
        }

        .gallery-item:hover .gallery-overlay i {
            transform: scale(1);
        }

        .gallery-item.tall img {
            height: 624px;
        }

        /* ============================================
           TESTIMONIALS
           ============================================ */
        .testimonials-section {
            background: var(--dark-light);
        }

        .testimonial-card {
            background: var(--dark-card);
            padding: 40px;
            border-radius: 20px;
            border: 1px solid rgba(201,169,98,0.08);
            transition: var(--transition);
            margin: 10px;
            height: 100%;
        }

        .testimonial-card:hover {
            border-color: var(--gold);
            box-shadow: var(--shadow-gold);
        }

        .testimonial-card .avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid var(--gold);
        }

        .testimonial-card .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .testimonial-card .stars {
            color: var(--gold);
            font-size: 1.1rem;
            letter-spacing: 2px;
        }

        .testimonial-card .testimonial-text {
            color: var(--text-muted);
            font-size: 1rem;
            font-style: italic;
            margin: 15px 0;
        }

        .testimonial-card h5 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            margin: 0;
        }

        .testimonial-card .role {
            color: var(--text-muted);
            font-size: 0.85rem;
        }

        /* ============================================
           RESERVATION
           ============================================ */
        .reservation-section {
            background: var(--dark);
            position: relative;
        }

        .reservation-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 50%;
            background: url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=800&q=80') center/cover no-repeat;
            opacity: 0.05;
        }

        .reservation-form {
            background: var(--dark-card);
            padding: 50px;
            border-radius: 25px;
            border: 1px solid rgba(201,169,98,0.08);
            backdrop-filter: blur(10px);
        }

        .reservation-form .form-control,
        .reservation-form .form-select {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.05);
            color: var(--text-light);
            padding: 14px 20px;
            border-radius: 12px;
            transition: var(--transition);
            font-size: 0.95rem;
        }

        .reservation-form .form-control:focus,
        .reservation-form .form-select:focus {
            background: rgba(255,255,255,0.05);
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(201,169,98,0.1);
            color: var(--text-light);
        }

        .reservation-form .form-control::placeholder {
            color: var(--text-muted);
        }

        .reservation-form .form-select option {
            color: var(--dark);
        }

        .reservation-form label {
            color: var(--text-muted);
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 8px;
        }

        /* ============================================
           CHEF
           ============================================ */
        .chef-section {
            background: var(--dark-light);
        }

        .chef-card {
            background: var(--dark-card);
            border-radius: 25px;
            overflow: hidden;
            border: 1px solid rgba(201,169,98,0.05);
            transition: var(--transition);
        }

        .chef-card:hover {
            border-color: var(--gold);
            box-shadow: var(--shadow-gold);
        }

        .chef-card .chef-image {
            height: 400px;
            overflow: hidden;
        }

        .chef-card .chef-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .chef-card:hover .chef-image img {
            transform: scale(1.05);
        }

        .chef-card .chef-body {
            padding: 30px;
        }

        .chef-card .chef-body h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            margin-bottom: 5px;
        }

        .chef-card .chef-body .chef-title {
            color: var(--gold);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .chef-card .chef-body p {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-top: 15px;
        }

        .chef-card .chef-body .awards {
            display: flex;
            gap: 20px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .chef-card .chef-body .awards span {
            background: rgba(201,169,98,0.1);
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.8rem;
            color: var(--gold);
            border: 1px solid rgba(201,169,98,0.1);
        }

        /* ============================================
           STATISTICS (Animated)
           ============================================ */
        .statistics-section {
            background: var(--dark);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .statistics-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at 50% 50%, rgba(201,169,98,0.03), transparent 60%);
            animation: rotateGlow 30s linear infinite;
        }

        @keyframes rotateGlow {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .stat-item-large {
            text-align: center;
            padding: 30px;
            position: relative;
            z-index: 1;
        }

        .stat-item-large .counter {
            font-size: 4rem;
            font-weight: 900;
            color: var(--gold);
            font-family: 'Playfair Display', serif;
            display: inline-block;
        }

        .stat-item-large .counter-suffix {
            font-size: 4rem;
            font-weight: 900;
            color: var(--gold);
            font-family: 'Playfair Display', serif;
        }

        .stat-item-large p {
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9rem;
            margin: 5px 0 0;
        }

        /* ============================================
           FAQ
           ============================================ */
        .faq-section {
            background: var(--dark-light);
        }

        .faq-accordion .accordion-item {
            background: var(--dark-card);
            border: 1px solid rgba(201,169,98,0.05);
            border-radius: 15px !important;
            margin-bottom: 15px;
            overflow: hidden;
        }

        .faq-accordion .accordion-button {
            background: var(--dark-card);
            color: var(--text-light);
            padding: 20px 25px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 1.05rem;
            border: none;
            box-shadow: none !important;
        }

        .faq-accordion .accordion-button:not(.collapsed) {
            background: var(--dark-card);
            color: var(--gold);
        }

        .faq-accordion .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23c9a962'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .faq-accordion .accordion-body {
            padding: 0 25px 25px;
            color: var(--text-muted);
        }

        /* ============================================
           CONTACT
           ============================================ */
        .contact-section {
            background: var(--dark);
        }

        .contact-info-card {
            background: var(--dark-card);
            padding: 30px;
            border-radius: 20px;
            border: 1px solid rgba(201,169,98,0.05);
            transition: var(--transition);
            text-align: center;
            height: 100%;
        }

        .contact-info-card:hover {
            border-color: var(--gold);
            transform: translateY(-5px);
        }

        .contact-info-card .icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(201,169,98,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 1.5rem;
            color: var(--gold);
        }

        .contact-info-card h5 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        .contact-info-card p {
            color: var(--text-muted);
            margin: 0;
        }

        .map-container {
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid rgba(201,169,98,0.05);
        }

        .map-container iframe {
            width: 100%;
            height: 350px;
            border: 0;
        }

        .hours-list {
            list-style: none;
            padding: 0;
        }

        .hours-list li {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid rgba(255,255,255,0.03);
            color: var(--text-muted);
        }

        .hours-list li:last-child {
            border-bottom: 0;
        }

        .hours-list li span:last-child {
            color: var(--text-light);
        }

        /* ============================================
           FOOTER
           ============================================ */
        .footer-section {
            background: var(--dark-light);
            padding: 60px 0 30px;
            border-top: 1px solid rgba(201,169,98,0.05);
        }

        .footer-section .footer-brand {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--gold);
            text-decoration: none;
        }

        .footer-section .footer-brand span {
            color: var(--text-light);
        }

        .footer-section .footer-text {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-top: 15px;
            max-width: 350px;
        }

        .footer-section .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .footer-section .social-links a {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(201,169,98,0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-muted);
            transition: var(--transition);
            text-decoration: none;
        }

        .footer-section .social-links a:hover {
            background: var(--gold);
            color: var(--dark);
            transform: translateY(-3px);
            border-color: var(--gold);
        }

        .footer-section h5 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .footer-section .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-section .footer-links li {
            margin-bottom: 10px;
        }

        .footer-section .footer-links a {
            color: var(--text-muted);
            text-decoration: none;
            transition: var(--transition);
            font-size: 0.95rem;
        }

        .footer-section .footer-links a:hover {
            color: var(--gold);
            padding-left: 5px;
        }

        .footer-section .newsletter-input {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .footer-section .newsletter-input input {
            flex: 1;
            padding: 12px 20px;
            border-radius: 50px;
            border: 1px solid rgba(255,255,255,0.05);
            background: rgba(255,255,255,0.03);
            color: var(--text-light);
        }

        .footer-section .newsletter-input input:focus {
            outline: none;
            border-color: var(--gold);
        }

        .footer-section .newsletter-input .btn-gold {
            padding: 12px 25px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.03);
            padding-top: 30px;
            margin-top: 40px;
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        /* ============================================
           BACK TO TOP
           ============================================ */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--gold);
            color: var(--dark);
            border: none;
            font-size: 1.3rem;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            z-index: 999;
            box-shadow: 0 10px 30px rgba(201,169,98,0.3);
        }

        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background: var(--gold-light);
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(201,169,98,0.4);
        }

        /* ============================================
           ANIMATIONS
           ============================================ */
        .fade-up {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .fade-left {
            opacity: 0;
            transform: translateX(-40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-left.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .fade-right {
            opacity: 0;
            transform: translateX(40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-right.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .zoom-in {
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .zoom-in.visible {
            opacity: 1;
            transform: scale(1);
        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 1199px) {
            .hero-content h1 {
                font-size: 4.2rem;
            }
            .section-title {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 991px) {
            .section-padding {
                padding: 70px 0;
            }
            .hero-content h1 {
                font-size: 3.5rem;
            }
            .hero-content p {
                font-size: 1.1rem;
            }
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .gallery-item.tall img {
                height: 300px;
            }
            .reservation-form {
                padding: 30px;
            }
            .about-image .experience-badge {
                right: 10px;
                bottom: 10px;
                padding: 15px 20px;
            }
            .about-image .experience-badge h3 {
                font-size: 2rem;
            }
        }

        @media (max-width: 767px) {
            .section-padding {
                padding: 50px 0;
            }
            .hero-content h1 {
                font-size: 2.8rem;
            }
            .hero-content .badge-gold {
                font-size: 0.7rem;
                padding: 6px 20px;
            }
            .hero-content .btn-group .btn {
                padding: 12px 25px;
                font-size: 0.85rem;
            }
            .section-title {
                font-size: 2.2rem;
            }
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 12px;
            }
            .stat-item h3 {
                font-size: 2rem;
            }
            .stat-item-large .counter {
                font-size: 3rem;
            }
            .stat-item-large .counter-suffix {
                font-size: 3rem;
            }
            .menu-tabs .nav-link {
                padding: 8px 18px;
                font-size: 0.8rem;
                margin: 3px;
            }
            .reservation-form {
                padding: 20px;
            }
            .about-image img {
                height: 350px;
            }
            .chef-card .chef-image {
                height: 300px;
            }
            .footer-section .newsletter-input {
                flex-direction: column;
            }
            .footer-section .newsletter-input .btn-gold {
                width: 100%;
            }
            .scroll-indicator {
                display: none;
            }
            .map-container iframe {
                height: 250px;
            }
        }

        @media (max-width: 575px) {
            .hero-content h1 {
                font-size: 2.2rem;
            }
            .section-title {
                font-size: 1.8rem;
            }
            .hero-content p {
                font-size: 1rem;
            }
            .stats-grid {
                grid-template-columns: 1fr 1fr;
                gap: 10px;
            }
            .stat-item {
                padding: 15px;
            }
            .stat-item h3 {
                font-size: 1.6rem;
            }
            .stat-item-large .counter {
                font-size: 2.5rem;
            }
            .stat-item-large .counter-suffix {
                font-size: 2.5rem;
            }
            .gallery-item img,
            .gallery-item.tall img {
                height: 220px;
            }
            .testimonial-card {
                padding: 25px;
            }
            .reservation-form {
                padding: 15px;
            }
            .contact-info-card {
                padding: 20px;
            }
            .navbar-custom .navbar-brand {
                font-size: 1.4rem;
            }
            .back-to-top {
                width: 40px;
                height: 40px;
                font-size: 1rem;
                bottom: 20px;
                right: 20px;
            }
        }

        /* ============================================
           LIGHTBOX
           ============================================ */
        .lightbox-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(10,8,6,0.95);
            backdrop-filter: blur(20px);
            z-index: 9999;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        .lightbox-overlay.active {
            display: flex;
        }

        .lightbox-overlay img {
            max-width: 90%;
            max-height: 90vh;
            border-radius: 15px;
            box-shadow: 0 30px 80px rgba(0,0,0,0.8);
            border: 1px solid rgba(201,169,98,0.1);
            animation: zoomIn 0.4s ease;
        }

        .lightbox-overlay .close-lightbox {
            position: absolute;
            top: 30px;
            right: 40px;
            color: #fff;
            font-size: 2.5rem;
            cursor: pointer;
            transition: var(--transition);
            background: none;
            border: none;
        }

        .lightbox-overlay .close-lightbox:hover {
            color: var(--gold);
            transform: rotate(90deg);
        }

        @keyframes zoomIn {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }

        /* Toast notification */
        .toast-notification {
            position: fixed;
            bottom: 100px;
            right: 30px;
            background: var(--dark-card);
            border: 1px solid var(--gold);
            padding: 20px 30px;
            border-radius: 15px;
            color: var(--text-light);
            z-index: 9999;
            opacity: 0;
            transform: translateY(20px);
            transition: var(--transition);
            pointer-events: none;
            box-shadow: var(--shadow-gold);
        }

        .toast-notification.show {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }

        .toast-notification .toast-icon {
            color: var(--gold);
            margin-right: 10px;
        }
    </style>
</head>
<body>

<!-- ============================================
     NAVBAR
     ============================================ -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top" id="mainNav" aria-label="Main Navigation">
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="bi bi-star-fill me-2" style="font-size:1.2rem;"></i>
            <span>Le</span>Château
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a class="nav-link active" href="#hero">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link" href="#reservation">Reservation</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                <li class="nav-item ms-lg-3">
                    <a href="#reservation" class="btn btn-gold btn-sm">Book Now</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- ============================================
     HERO
     ============================================ -->
<section class="hero-section" id="hero" aria-label="Hero section">
    <div class="container hero-content">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="badge-gold">Est. 1985</span>
                <h1>Where <span class="gold-text">Culinary</span><br>Art Meets <span class="gold-text">Elegance</span></h1>
                <p>Experience the pinnacle of fine dining in Paris. Every dish is a masterpiece crafted with passion and the finest ingredients.</p>
                <div class="btn-group justify-content-center">
                    <a href="#reservation" class="btn btn-gold">Reserve a Table</a>
                    <a href="#menu" class="btn btn-outline-gold">Explore Menu</a>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <span>Scroll</span>
        <i class="bi bi-chevron-double-down"></i>
    </div>
</section>

<!-- ============================================
     ABOUT
     ============================================ -->
<section class="section-padding about-section" id="about" aria-label="About us">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 fade-left">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=800&q=80" alt="Le Château Gourmet restaurant interior" loading="lazy">
                    <div class="experience-badge">
                        <h3>20+</h3>
                        <p>Years of Excellence</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 about-content fade-right">
                <span class="section-subtitle">About Us</span>
                <h2 class="section-title">A Legacy of <span class="gold-text">Gastronomic</span> Excellence</h2>
                <p>Le Château Gourmet stands as a beacon of culinary artistry in the heart of Paris. Since 1985, we've been crafting unforgettable dining experiences that celebrate the rich heritage of French cuisine while embracing modern innovation.</p>
                <p>Our Michelin-starred kitchen is led by Chef Jean-Pierre Laurent, whose passion for perfection and dedication to sustainable, locally-sourced ingredients has earned us recognition as one of the world's finest restaurants.</p>
                
                <div class="stats-grid">
                    <div class="stat-item">
                        <h3>25+</h3>
                        <p>Awards</p>
                    </div>
                    <div class="stat-item">
                        <h3>15k+</h3>
                        <p>Happy Guests</p>
                    </div>
                    <div class="stat-item">
                        <h3>8</h3>
                        <p>Chefs</p>
                    </div>
                    <div class="stat-item">
                        <h3>100+</h3>
                        <p>Dishes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     WHY CHOOSE US
     ============================================ -->
<section class="section-padding why-section" id="why" aria-label="Why choose us">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <span class="section-subtitle">Why Choose Us</span>
                <h2 class="section-title">The <span class="gold-text">Finest</span> Dining Experience</h2>
                <p class="text-muted">Every element of your dining experience is carefully curated to exceed your expectations.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 fade-up">
                <div class="why-card">
                    <div class="icon-wrap"><i class="bi bi-flower1"></i></div>
                    <h4>Fresh Ingredients</h4>
                    <p>Locally sourced, seasonal produce delivered daily from our trusted partners.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 fade-up" style="transition-delay:0.1s;">
                <div class="why-card">
                    <div class="icon-wrap"><i class="bi bi-star"></i></div>
                    <h4>Michelin Stars</h4>
                    <p>Internationally recognized for culinary excellence and innovation.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 fade-up" style="transition-delay:0.2s;">
                <div class="why-card">
                    <div class="icon-wrap"><i class="bi bi-wine"></i></div>
                    <h4>Curated Wine</h4>
                    <p>Award-winning wine list featuring the finest vintages from around the world.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 fade-up" style="transition-delay:0.3s;">
                <div class="why-card">
                    <div class="icon-wrap"><i class="bi bi-heart"></i></div>
                    <h4>Exceptional Service</h4>
                    <p>Impeccable service from our team of dedicated hospitality professionals.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     MENU
     ============================================ -->
<section class="section-padding menu-section" id="menu" aria-label="Menu">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <span class="section-subtitle">Our Menu</span>
                <h2 class="section-title">Culinary <span class="gold-text">Masterpieces</span></h2>
                <p class="text-muted">Each dish is a work of art, crafted with precision and passion.</p>
            </div>
        </div>
        
        <ul class="nav nav-tabs menu-tabs justify-content-center mb-5" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#pizza" role="tab">Pizza</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#pasta" role="tab">Pasta</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#steaks" role="tab">Steaks</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#desserts" role="tab">Desserts</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#drinks" role="tab">Drinks</a>
            </li>
        </ul>
        
        <div class="tab-content">
            <?php foreach ($menu_items as $category => $items): ?>
                <div class="tab-pane fade <?php echo $category === 'pizza' ? 'show active' : ''; ?>" 
                     id="<?php echo $category; ?>" role="tabpanel">
                    <div class="row g-4">
                        <?php foreach ($items as $item): ?>
                            <div class="col-lg-3 col-md-6 fade-up">
                                <div class="menu-card">
                                    <div class="menu-image">
                                        <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>" loading="lazy">
                                        <span class="price-tag"><?php echo $item['price']; ?></span>
                                    </div>
                                    <div class="menu-body">
                                        <h5><?php echo $item['name']; ?></h5>
                                        <p><?php echo $item['description']; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================
     GALLERY
     ============================================ -->
<section class="section-padding gallery-section" id="gallery" aria-label="Gallery">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <span class="section-subtitle">Gallery</span>
                <h2 class="section-title">Visual <span class="gold-text">Story</span></h2>
                <p class="text-muted">A glimpse into the artistry and ambiance of Le Château Gourmet.</p>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item" data-image="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=800&q=80">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=600&h=400&fit=crop" alt="Restaurant interior" loading="lazy">
                    <div class="gallery-overlay"><i class="bi bi-arrows-expand"></i></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item" data-image="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=800&q=80">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=600&h=400&fit=crop" alt="Dining table setting" loading="lazy">
                    <div class="gallery-overlay"><i class="bi bi-arrows-expand"></i></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item tall" data-image="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=800&q=80">
                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=600&h=624&fit=crop" alt="Plated gourmet dish" loading="lazy">
                    <div class="gallery-overlay"><i class="bi bi-arrows-expand"></i></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item" data-image="https://images.unsplash.com/photo-1552566626-52f8b828add9?w=800&q=80">
                    <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?w=600&h=400&fit=crop" alt="Wine cellar" loading="lazy">
                    <div class="gallery-overlay"><i class="bi bi-arrows-expand"></i></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item" data-image="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=800&q=80">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=600&h=400&fit=crop" alt="Gourmet dish presentation" loading="lazy">
                    <div class="gallery-overlay"><i class="bi bi-arrows-expand"></i></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item tall" data-image="https://images.unsplash.com/photo-1514933651103-005eec06c04b?w=800&q=80">
                    <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?w=600&h=624&fit=crop" alt="Restaurant bar area" loading="lazy">
                    <div class="gallery-overlay"><i class="bi bi-arrows-expand"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     TESTIMONIALS
     ============================================ -->
<section class="section-padding testimonials-section" id="testimonials" aria-label="Testimonials">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <span class="section-subtitle">Testimonials</span>
                <h2 class="section-title">What Our <span class="gold-text">Guests</span> Say</h2>
            </div>
        </div>
        <div class="row g-4">
            <?php foreach ($testimonials as $testimonial): ?>
                <div class="col-lg-4 col-md-6 fade-up">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar me-3">
                                <img src="<?php echo $testimonial['avatar']; ?>" alt="<?php echo $testimonial['name']; ?>" loading="lazy">
                            </div>
                            <div>
                                <h5><?php echo $testimonial['name']; ?></h5>
                                <div class="stars">
                                    <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                                        <i class="bi bi-star-fill"></i>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                        <p class="testimonial-text">"<?php echo $testimonial['text']; ?>"</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================
     RESERVATION
     ============================================ -->
<section class="section-padding reservation-section" id="reservation" aria-label="Reservation">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <span class="section-subtitle">Reservation</span>
                <h2 class="section-title">Book Your <span class="gold-text">Table</span></h2>
                <p class="text-muted">Experience the extraordinary. Secure your table for an unforgettable dining journey.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="reservation-form">
                    <form id="reservationForm" novalidate>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="resName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="resName" placeholder="John Doe" required aria-required="true">
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="resPhone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="resPhone" placeholder="+33 6 12 34 56 78" required aria-required="true">
                                <div class="invalid-feedback">Please enter a valid phone number.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="resEmail" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="resEmail" placeholder="dining@example.com" required aria-required="true">
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="resGuests" class="form-label">Number of Guests</label>
                                <select class="form-select" id="resGuests" required aria-required="true">
                                    <option value="">Select...</option>
                                    <option value="1">1 Guest</option>
                                    <option value="2" selected>2 Guests</option>
                                    <option value="3">3 Guests</option>
                                    <option value="4">4 Guests</option>
                                    <option value="5">5 Guests</option>
                                    <option value="6">6+ Guests</option>
                                </select>
                                <div class="invalid-feedback">Please select number of guests.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="resDate" class="form-label">Date</label>
                                <input type="date" class="form-control" id="resDate" required aria-required="true">
                                <div class="invalid-feedback">Please select a date.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="resTime" class="form-label">Time</label>
                                <input type="time" class="form-control" id="resTime" required aria-required="true">
                                <div class="invalid-feedback">Please select a time.</div>
                            </div>
                            <div class="col-12">
                                <label for="resMessage" class="form-label">Special Requests</label>
                                <textarea class="form-control" id="resMessage" rows="3" placeholder="Dietary requirements, occasion, seating preferences..."></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-gold btn-lg px-5">Reserve Your Table</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     CHEF SECTION
     ============================================ -->
<section class="section-padding chef-section" id="chef" aria-label="Our Chef">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <span class="section-subtitle">Our Chef</span>
                <h2 class="section-title">Meet the <span class="gold-text">Maestro</span></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 fade-up">
                <div class="chef-card">
                    <div class="chef-image">
                        <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?w=800&q=80" alt="Chef Jean-Pierre Laurent" loading="lazy">
                    </div>
                    <div class="chef-body">
                        <h3>Jean-Pierre Laurent</h3>
                        <div class="chef-title">Executive Chef & Proprietor</div>
                        <p>With over 25 years of culinary excellence, Chef Jean-Pierre Laurent brings his passion for French gastronomy to Le Château Gourmet. A disciple of the legendary Paul Bocuse, Chef Laurent has earned three Michelin stars and numerous international accolades for his innovative approach to classic French cuisine.</p>
                        <p>His philosophy centers on honoring the integrity of each ingredient while pushing the boundaries of flavor and presentation. Chef Laurent personally oversees every dish that leaves the kitchen, ensuring an unparalleled dining experience for every guest.</p>
                        <div class="awards">
                            <span><i class="bi bi-star-fill me-1"></i> Michelin 3 Stars</span>
                            <span><i class="bi bi-trophy me-1"></i> Meilleur Ouvrier de France</span>
                            <span><i class="bi bi-award me-1"></i> Chef of the Year 2023</span>
                            <span><i class="bi bi-book me-1"></i> Gault&Millau 19/20</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     STATISTICS
     ============================================ -->
<section class="statistics-section" id="stats" aria-label="Statistics">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-lg-3 col-md-6 stat-item-large fade-up">
                <span class="counter" data-target="15000">0</span><span class="counter-suffix">+</span>
                <p>Happy Customers</p>
            </div>
            <div class="col-lg-3 col-md-6 stat-item-large fade-up" style="transition-delay:0.1s;">
                <span class="counter" data-target="250">0</span><span class="counter-suffix">+</span>
                <p>Exquisite Dishes</p>
            </div>
            <div class="col-lg-3 col-md-6 stat-item-large fade-up" style="transition-delay:0.2s;">
                <span class="counter" data-target="40">0</span><span class="counter-suffix">+</span>
                <p>Years of Excellence</p>
            </div>
            <div class="col-lg-3 col-md-6 stat-item-large fade-up" style="transition-delay:0.3s;">
                <span class="counter" data-target="25">0</span><span class="counter-suffix">+</span>
                <p>International Awards</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     FAQ
     ============================================ -->
<section class="section-padding faq-section" id="faq" aria-label="FAQ">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <span class="section-subtitle">FAQ</span>
                <h2 class="section-title">Frequently Asked <span class="gold-text">Questions</span></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion faq-accordion" id="faqAccordion">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeading<?php echo $index; ?>">
                                <button class="accordion-button <?php echo $index !== 0 ? 'collapsed' : ''; ?>" 
                                        type="button" data-bs-toggle="collapse" 
                                        data-bs-target="#faqCollapse<?php echo $index; ?>" 
                                        aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" 
                                        aria-controls="faqCollapse<?php echo $index; ?>">
                                    <?php echo $faq['q']; ?>
                                </button>
                            </h3>
                            <div id="faqCollapse<?php echo $index; ?>" 
                                 class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>" 
                                 aria-labelledby="faqHeading<?php echo $index; ?>" 
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <?php echo $faq['a']; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     CONTACT
     ============================================ -->
<section class="section-padding contact-section" id="contact" aria-label="Contact">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <span class="section-subtitle">Contact</span>
                <h2 class="section-title">Get in <span class="gold-text">Touch</span></h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="contact-info-card fade-up">
                    <div class="icon"><i class="bi bi-geo-alt"></i></div>
                    <h5>Address</h5>
                    <p><?php echo $address; ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info-card fade-up" style="transition-delay:0.1s;">
                    <div class="icon"><i class="bi bi-telephone"></i></div>
                    <h5>Phone</h5>
                    <p><?php echo $phone; ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info-card fade-up" style="transition-delay:0.2s;">
                    <div class="icon"><i class="bi bi-envelope"></i></div>
                    <h5>Email</h5>
                    <p><?php echo $email; ?></p>
                </div>
            </div>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-lg-8">
                <div class="map-container fade-up">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.8739032086!2d2.2950413156743!3d48.85884447928736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sEiffel%20Tower!5e0!3m2!1sen!2sus!4v1690000000000" 
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" 
                            title="Le Château Gourmet location map" aria-label="Map showing restaurant location">
                    </iframe>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info-card fade-up" style="transition-delay:0.3s;">
                    <h5><i class="bi bi-clock me-2 gold-text"></i>Opening Hours</h5>
                    <ul class="hours-list">
                        <?php foreach ($opening_hours as $day => $time): ?>
                            <li><span><?php echo $day; ?></span><span><?php echo $time; ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     FOOTER
     ============================================ -->
<footer class="footer-section" aria-label="Footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <a href="#" class="footer-brand">
                    <i class="bi bi-star-fill me-2" style="font-size:1.2rem;"></i>
                    <span>Le</span>Château
                </a>
                <p class="footer-text">Experience the pinnacle of fine dining in Paris. Where culinary art meets elegance in every dish.</p>
                <div class="social-links">
                    <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="#" aria-label="TripAdvisor"><i class="bi bi-tripadvisor"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5>Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#reservation">Reservations</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Contact Info</h5>
                <ul class="footer-links">
                    <li><a href="#"><i class="bi bi-geo-alt me-2"></i><?php echo $address; ?></a></li>
                    <li><a href="#"><i class="bi bi-telephone me-2"></i><?php echo $phone; ?></a></li>
                    <li><a href="#"><i class="bi bi-envelope me-2"></i><?php echo $email; ?></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Newsletter</h5>
                <p class="text-muted" style="font-size:0.9rem;">Subscribe for exclusive offers and updates.</p>
                <div class="newsletter-input">
                    <input type="email" placeholder="Your email" aria-label="Email for newsletter">
                    <button class="btn btn-gold" aria-label="Subscribe">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p><?php echo $copyright; ?></p>
        </div>
    </div>
</footer>

<!-- ============================================
     BACK TO TOP
     ============================================ -->
<button class="back-to-top" id="backToTop" aria-label="Back to top">
    <i class="bi bi-chevron-up"></i>
</button>

<!-- ============================================
     LIGHTBOX
     ============================================ -->
<div class="lightbox-overlay" id="lightbox">
    <button class="close-lightbox" id="closeLightbox" aria-label="Close lightbox">&times;</button>
    <img id="lightboxImage" src="" alt="Gallery image enlarged">
</div>

<!-- ============================================
     TOAST NOTIFICATION
     ============================================ -->
<div class="toast-notification" id="toast">
    <i class="bi bi-check-circle-fill toast-icon"></i>
    <span id="toastMessage">Thank you! Your reservation has been received.</span>
</div>

<!-- ============================================
     SCRIPTS
     ============================================ -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // ============================================
    // DOCUMENT READY
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        
        // ============================================
        // STICKY NAVBAR
        // ============================================
        const navbar = document.getElementById('mainNav');
        let lastScroll = 0;
        
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;
            if (currentScroll > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            lastScroll = currentScroll;
        });

        // ============================================
        // MOBILE MENU CLOSE ON LINK CLICK
        // ============================================
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        const navCollapse = document.getElementById('navbarNav');
        const bsCollapse = new bootstrap.Collapse(navCollapse, { toggle: false });
        
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                if (navCollapse.classList.contains('show')) {
                    bsCollapse.hide();
                }
            });
        });

        // ============================================
        // ACTIVE NAV LINK
        // ============================================
        const sections = document.querySelectorAll('section[id]');
        
        window.addEventListener('scroll', function() {
            let current = '';
            const scrollPos = window.pageYOffset + 120;
            
            sections.forEach(function(section) {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(function(link) {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });

        // ============================================
        // SCROLL REVEAL (Intersection Observer)
        // ============================================
        const revealElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .zoom-in');
        
        const revealObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });
        
        revealElements.forEach(function(el) {
            revealObserver.observe(el);
        });

        // ============================================
        // COUNTER ANIMATION
        // ============================================
        const counters = document.querySelectorAll('.counter');
        let countersAnimated = false;
        
        function animateCounters() {
            if (countersAnimated) return;
            
            const statsSection = document.getElementById('stats');
            if (!statsSection) return;
            
            const rect = statsSection.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                countersAnimated = true;
                counters.forEach(function(counter) {
                    const target = parseInt(counter.getAttribute('data-target'));
                    let current = 0;
                    const increment = Math.ceil(target / 60);
                    
                    function updateCounter() {
                        current += increment;
                        if (current >= target) {
                            counter.textContent = target;
                            return;
                        }
                        counter.textContent = current;
                        requestAnimationFrame(updateCounter);
                    }
                    updateCounter();
                });
            }
        }
        
        window.addEventListener('scroll', animateCounters);
        window.addEventListener('load', animateCounters);

        // ============================================
        // BACK TO TOP
        // ============================================
        const backToTopBtn = document.getElementById('backToTop');
        
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 400) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        });
        
        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // ============================================
        // GALLERY LIGHTBOX
        // ============================================
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightboxImage');
        const closeLightbox = document.getElementById('closeLightbox');
        const galleryItems = document.querySelectorAll('.gallery-item');
        
        galleryItems.forEach(function(item) {
            item.addEventListener('click', function() {
                const imageSrc = this.getAttribute('data-image');
                lightboxImage.src = imageSrc;
                lightbox.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });
        
        function closeLightboxFn() {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        }
        
        closeLightbox.addEventListener('click', closeLightboxFn);
        lightbox.addEventListener('click', function(e) {
            if (e.target === this) {
                closeLightboxFn();
            }
        });
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeLightboxFn();
            }
        });

        // ============================================
        // FORM VALIDATION
        // ============================================
        const form = document.getElementById('reservationForm');
        const toast = document.getElementById('toast');
        const toastMessage = document.getElementById('toastMessage');
        
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            let valid = true;
            const inputs = form.querySelectorAll('[required]');
            
            inputs.forEach(function(input) {
                if (!input.value.trim()) {
                    input.classList.add('is-invalid');
                    valid = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            
            // Email validation
            const email = document.getElementById('resEmail');
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email.value && !emailPattern.test(email.value)) {
                email.classList.add('is-invalid');
                valid = false;
            }
            
            // Phone validation (basic)
            const phone = document.getElementById('resPhone');
            const phonePattern = /^[\+\d\s\-\(\)]{8,20}$/;
            if (phone.value && !phonePattern.test(phone.value)) {
                phone.classList.add('is-invalid');
                valid = false;
            }
            
            if (valid) {
                // Show success toast
                toastMessage.textContent = 'Thank you! Your reservation has been received. We will contact you shortly.';
                toast.classList.add('show');
                setTimeout(function() {
                    toast.classList.remove('show');
                }, 5000);
                form.reset();
            } else {
                toastMessage.textContent = 'Please fill in all required fields correctly.';
                toast.classList.add('show');
                setTimeout(function() {
                    toast.classList.remove('show');
                }, 4000);
            }
        });
        
        // Clear validation on input
        form.querySelectorAll('[required]').forEach(function(input) {
            input.addEventListener('input', function() {
                if (this.value.trim()) {
                    this.classList.remove('is-invalid');
                }
            });
        });

        // ============================================
        // SMOOTH SCROLL FOR NAV LINKS
        // ============================================
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                const target = document.querySelector(targetId);
                if (target) {
                    e.preventDefault();
                    const offsetTop = target.offsetTop - 80;
                    window.scrollTo({ top: offsetTop, behavior: 'smooth' });
                }
            });
        });

        // ============================================
        // TOAST AUTO-DISMISS
        // ============================================
        setTimeout(function() {
            toast.classList.remove('show');
        }, 3000);

        // ============================================
        // PARALLAX HERO (subtle)
        // ============================================
        const hero = document.querySelector('.hero-section');
        if (hero) {
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const rate = scrolled * 0.35;
                hero.style.backgroundPositionY = rate + 'px';
            });
        }

        // ============================================
        // NEWSLETTER SUBSCRIPTION
        // ============================================
        const newsletterBtn = document.querySelector('.newsletter-input .btn-gold');
        if (newsletterBtn) {
            newsletterBtn.addEventListener('click', function() {
                const input = this.previousElementSibling;
                if (input && input.value.trim()) {
                    toastMessage.textContent = 'Thank you for subscribing to our newsletter!';
                    toast.classList.add('show');
                    setTimeout(function() {
                        toast.classList.remove('show');
                    }, 4000);
                    input.value = '';
                } else {
                    toastMessage.textContent = 'Please enter a valid email address.';
                    toast.classList.add('show');
                    setTimeout(function() {
                        toast.classList.remove('show');
                    }, 3000);
                }
            });
        }
    });
</script>

</body>
</html>