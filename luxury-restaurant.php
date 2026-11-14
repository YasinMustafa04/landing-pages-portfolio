<?php
// Configuration & Dynamic Data
$restaurantName = "L'Ambroisie";
$phone = "+1 (555) 893-2341";
$email = "reservations@lambroisie-luxury.com";
$address = "42 Rue de la Haute Cuisine, New York, NY 10021";
$openingHours = [
    "Mon - Thu" => "5:00 PM - 11:00 PM",
    "Fri - Sat" => "4:00 PM - 12:00 AM",
    "Sunday"    => "4:00 PM - 10:00 PM"
];
$copyright = "&copy; " . date('Y') . " " . $restaurantName . ". All Rights Reserved.";

// Sample Data Arrays
$menuCategories = ['all' => 'All Menu', 'steaks' => 'Steaks', 'pasta' => 'Pasta', 'pizza' => 'Pizza', 'desserts' => 'Desserts', 'drinks' => 'Fine Wine & Drinks'];

$menuItems = [
    ['cat' => 'steaks', 'name' => 'Wagyu Tomahawk Steak', 'desc' => 'Grade A5 Japanese Wagyu served with truffle butter and gold leaf flakes.', 'price' => '$180', 'img' => 'https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=600&q=80'],
    ['cat' => 'steaks', 'name' => 'Filet Mignon au Poivre', 'desc' => 'Prime beef tenderloin, Madagascar green peppercorn cognac reduction.', 'price' => '$65', 'img' => 'https://images.unsplash.com/photo-1546964124-0cce460f38ef?auto=format&fit=crop&w=600&q=80'],
    ['cat' => 'pasta', 'name' => 'Truffle Tagliolini', 'desc' => 'Handmade egg pasta tossed in Normandy butter and fresh shaved white truffles.', 'price' => '$48', 'img' => 'https://images.unsplash.com/photo-1645112411341-6c4fd023714a?auto=format&fit=crop&w=600&q=80'],
    ['cat' => 'pasta', 'name' => 'Lobster Squid Ink Linguine', 'desc' => 'Poached Maine lobster tail over squid ink pasta in saffron cherry tomato broth.', 'price' => '$54', 'img' => 'https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?auto=format&fit=crop&w=600&q=80'],
    ['cat' => 'pizza', 'name' => 'Caviar & Crème Fraîche Pizza', 'desc' => 'Wood-fired sourdough crust topped with Ossetra caviar, smoked salmon, chives.', 'price' => '$95', 'img' => 'https://images.unsplash.com/photo-1513104890138-7c749659a591?auto=format&fit=crop&w=600&q=80'],
    ['cat' => 'desserts', 'name' => 'Golden Opulence Soufflé', 'desc' => 'Dark Valrhona chocolate soufflé served with Madagascar vanilla bean gelato and 24k gold leaf.', 'price' => '$28', 'img' => 'https://images.unsplash.com/photo-1606313564200-e75d5e30476c?auto=format&fit=crop&w=600&q=80'],
    ['cat' => 'drinks', 'name' => 'Château Margaux 2015', 'desc' => 'A premier Grand Cru Classé wine boasting depth, silky tannins, and subtle floral notes.', 'price' => '$210 / Glass', 'img' => 'https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?auto=format&fit=crop&w=600&q=80']
];

$features = [
    ['icon' => 'bi-gem', 'title' => 'Fresh Ingredients', 'desc' => 'Organically grown vegetables and daily premium catches sourced directly from local producers.'],
    ['icon' => 'bi-award', 'title' => 'Michelin Chefs', 'desc' => 'Our kitchen team is led by world-renowned culinary masters bringing artistry to your table.'],
    ['icon' => 'bi-lightning-charge', 'title' => 'Impeccable Service', 'desc' => 'Highly trained professional staff providing intuitive, white-glove hospitality.'],
    ['icon' => 'bi-cup-straw', 'title' => 'Curated Ambiance', 'desc' => 'An intentionally structured architectural layout blending golden hues with modern jazz acoustics.']
];

$galleryImages = [
    ['title' => 'The Grand Dining Room', 'img' => 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80'],
    ['title' => 'Chef Artistry', 'img' => 'https://images.unsplash.com/photo-1577219491135-ce391730fb2c?auto=format&fit=crop&w=800&q=80'],
    ['title' => 'Signature Mixology', 'img' => 'https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?auto=format&fit=crop&w=800&q=80'],
    ['title' => 'Private Reserve Wine Cellar', 'img' => 'https://images.unsplash.com/photo-1560624052-449f5ddf0c31?auto=format&fit=crop&w=800&q=80'],
    ['title' => 'Plating Precision', 'img' => 'https://images.unsplash.com/photo-1600565193348-f74bd3c7ccdf?auto=format&fit=crop&w=800&q=80'],
    ['title' => 'The Lounge Ambiance', 'img' => 'https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&w=800&q=80']
];

$testimonials = [
    ['name' => 'Alexander Vance', 'role' => 'Food Critic', 'text' => 'An extraordinary gastronomic journey. The Wagyu Tomahawk was perfectly seared, and the service was genuinely world-class. A masterclass in luxury dining.', 'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80'],
    ['name' => 'Sophia Loren', 'role' => 'Connoisseur', 'text' => 'The ambiance strikes the perfect balance between modern elegance and romantic luxury. L\'Ambroisie has completely elevated New York\'s fine dining scene.', 'avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=150&q=80']
];

$faqs = [
    ['q' => 'Is there a formal dress code enforced?', 'a' => 'Yes, we kindly request smart elegant attire. Jackets are preferred for gentlemen, and athletic wear or shorts are not permitted.'],
    ['q' => 'Do you cater to specific dietary requirements?', 'a' => 'Absolutely. Our culinary team can adapt dishes for vegan, gluten-free, or specific allergenic considerations. Please indicate your needs when reserving.'],
    ['q' => 'Can I reserve the private cellar for corporate events?', 'a' => 'Yes, our exclusive reserve room accommodates up to 24 guests. Contact our events coordinator via email for bespoke arrangements.']
];

// Simple server-side validation logic check for demo
$reservationSuccess = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_reservation'])) {
    $reservationSuccess = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $restaurantName; ?> | Luxury Fine Dining Restaurant</title>
    <meta name="description" content="Experience premium gastronomic excellence at L'Ambroisie. Award-winning Michelin chefs, elite ambiance, and exceptional signature menus.">
    <meta name="keywords" content="luxury restaurant, fine dining, michelin star chef, elegant dinner, premium wine, luxury steakhouse">
    <link rel="canonical" href="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    
    <meta property="og:title" content="<?php echo $restaurantName; ?> | Luxury Fine Dining">
    <meta property="og:description" content="Experience premium gastronomic excellence at L'Ambroisie. Award-winning Michelin chefs, elite ambiance, and exceptional signature menus.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1200&q=80">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-gold: #c5a880;
            --dark-gold: #aa8b5c;
            --bg-black: #0b0c10;
            --card-bg: #15171c;
            --text-light: #f1f1f1;
            --text-muted: #a0a5b0;
            --font-serif: 'Playfair Display', serif;
            --font-sans: 'Poppins', sans-serif;
            --transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
        }

        body {
            background-color: var(--bg-black);
            color: var(--text-light);
            font-family: var(--font-sans);
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        h1, h2, h3, h4, .font-serif {
            font-family: var(--font-serif);
            letter-spacing: 1px;
        }

        /* Utility Styles */
        .gold-text { color: var(--primary-gold); }
        .bg-glass {
            background: rgba(21, 23, 28, 0.75);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(197, 168, 128, 0.15);
        }
        .btn-gold {
            background: linear-gradient(135deg, var(--primary-gold) 0%, var(--dark-gold) 100%);
            color: #000;
            font-weight: 600;
            letter-spacing: 1px;
            padding: 12px 30px;
            border-radius: 30px;
            border: none;
            transition: var(--transition);
        }
        .btn-gold:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(197, 168, 128, 0.3);
            color: #000;
        }
        .btn-outline-gold {
            border: 2px solid var(--primary-gold);
            color: var(--primary-gold);
            font-weight: 500;
            padding: 10px 28px;
            border-radius: 30px;
            background: transparent;
            transition: var(--transition);
        }
        .btn-outline-gold:hover {
            background: var(--primary-gold);
            color: #000;
            transform: translateY(-3px);
        }
        .section-padding { padding: 100px 0; }
        
        /* Preloader */
        #preloader {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: var(--bg-black);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.5s ease;
        }
        .spinner {
            width: 50px; height: 50px;
            border: 3px solid rgba(197, 168, 128, 0.2);
            border-radius: 50%;
            border-top-color: var(--primary-gold);
            animation: spin 1s linear infinite;
        }
        @keyframes spin { to { transform: rotate(360deg); } }

        /* Navbar */
        .navbar {
            padding: 20px 0;
            transition: var(--transition);
            z-index: 1000;
        }
        .navbar.sticky-nav {
            padding: 12px 0;
            background: rgba(11, 12, 16, 0.95) !important;
            border-bottom: 1px solid rgba(197, 168, 128, 0.2);
            box-shadow: 0 5px 25px rgba(0,0,0,0.5);
        }
        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-gold) !important;
        }
        .nav-link {
            color: var(--text-light) !important;
            margin: 0 12px;
            font-weight: 400;
            font-size: 0.95rem;
            transition: var(--transition);
            position: relative;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--primary-gold) !important;
        }
        .nav-link::after {
            content: ''; position: absolute; width: 0; height: 2px;
            bottom: -5px; left: 0; background-color: var(--primary-gold);
            transition: var(--transition);
        }
        .nav-link:hover::after, .nav-link.active::after { width: 100%; }

        /* Hero Section */
        .hero-section {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            background-attachment: fixed;
        }
        .hero-title {
            font-size: 5rem;
            font-weight: 700;
            margin-bottom: 20px;
            animation: fadeInUp 1s ease;
        }
        @media(max-width: 768px) { .hero-title { font-size: 3rem; } }
        
        /* Reveal Animations Triggered via JS */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* About & Features */
        .about-img-container {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.6);
        }
        .about-img-container img {
            transition: var(--transition);
        }
        .about-img-container:hover img {
            transform: scale(1.05);
        }
        .feature-card {
            background: var(--card-bg);
            border: 1px solid rgba(255,255,255,0.05);
            border-radius: 15px;
            padding: 40px 30px;
            transition: var(--transition);
            height: 100%;
        }
        .feature-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary-gold);
            box-shadow: 0 15px 30px rgba(197,168,128,0.1);
        }
        .feature-card i {
            font-size: 2.5rem;
            color: var(--primary-gold);
            margin-bottom: 20px;
            display: inline-block;
        }

        /* Menu Section */
        .menu-filter-btn {
            background: transparent;
            border: none;
            color: var(--text-muted);
            font-size: 1.1rem;
            margin: 0 15px;
            padding: 5px 10px;
            transition: var(--transition);
            position: relative;
        }
        .menu-filter-btn.active, .menu-filter-btn:hover {
            color: var(--primary-gold);
        }
        .menu-card {
            background: var(--card-bg);
            border-radius: 15px;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,0.05);
            transition: var(--transition);
            height: 100%;
        }
        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.5);
            border-color: rgba(197, 168, 128, 0.3);
        }
        .menu-card img {
            height: 220px;
            object-fit: cover;
            width: 100%;
            transition: var(--transition);
        }
        .menu-card:hover img { transform: scale(1.05); }

        /* Gallery Masonry Layout */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            grid-gap: 20px;
        }
        .gallery-item {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            height: 280px;
            cursor: pointer;
        }
        .gallery-item img {
            width: 100%; height: 100%; object-fit: cover;
            transition: var(--transition);
        }
        .gallery-overlay {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(11, 12, 16, 0.8);
            display: flex; align-items: center; justify-content: center;
            opacity: 0; transition: var(--transition);
        }
        .gallery-item:hover img { transform: scale(1.1); }
        .gallery-item:hover .gallery-overlay { opacity: 1; }

        /* Lightbox Container */
        #lightbox {
            position: fixed; z-index: 2000; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.9); display: none; align-items: center; justify-content: center;
        }
        #lightbox img { max-width: 85%; max-height: 80%; border-radius: 8px; border: 2px solid var(--primary-gold); }

        /* Slider/Testimonials Custom Container */
        .testimonial-slider {
            position: relative; overflow: hidden; max-width: 800px; margin: auto;
        }
        .testimonial-track { display: flex; transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1); }
        .testimonial-slide { min-width: 100%; box-sizing: border-box; padding: 20px; }

        /* Accordion custom styling */
        .accordion-item {
            background-color: var(--card-bg) !important;
            border: 1px solid rgba(255,255,255,0.05) !important;
            margin-bottom: 10px; border-radius: 8px !important; overflow: hidden;
        }
        .accordion-button {
            background-color: var(--card-bg) !important;
            color: var(--text-light) !important;
            box-shadow: none !important;
        }
        .accordion-button:not(.collapsed) {
            color: var(--primary-gold) !important;
        }

        /* Forms styling */
        .form-control {
            background-color: rgba(255,255,255,0.03) !important;
            border: 1px solid rgba(255,255,255,0.1) !important;
            color: var(--text-light) !important;
            padding: 12px 20px; border-radius: 8px;
        }
        .form-control:focus {
            border-color: var(--primary-gold) !important;
            box-shadow: none !important;
        }

        /* Back to top button */
        #backToTop {
            position: fixed; bottom: 30px; right: 30px; display: none;
            z-index: 99; background: var(--primary-gold); border: none;
            width: 45px; height: 45px; border-radius: 50%; color: #000; font-size: 1.2rem;
            transition: var(--transition); box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        #backToTop:hover { transform: translateY(-5px); background: var(--dark-gold); }
    </style>
</head>
<body>

    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main Navigation">
        <div class="container">
            <a class="navbar-brand font-serif" href="#"><?php echo $restaurantName; ?></a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#why-choose-us">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Reviews</a></li>
                    <li class="nav-item"><a class="nav-link" href="#reservation">Reservations</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item ms-lg-3"><a class="btn btn-gold btn-sm px-4" href="#reservation">Book Table</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="home" class="hero-section">
        <div class="container text-center">
            <p class="text-uppercase gold-text tracking-widest mb-2" style="letter-spacing: 4px; font-weight: 500;">Premium Fine Dining Experience</p>
            <h1 class="hero-title font-serif text-white"><?php echo $restaurantName; ?></h1>
            <p class="lead text-light max-w-2xl mx-auto mb-5" style="max-width: 600px; font-weight: 300; opacity: 0.9;">
                Where master craftsmanship encounters culinary imagination to deliver an elite sensory masterclass on every plate.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#menu" class="btn btn-gold py-3 px-5">Explore Menu</a>
                <a href="#reservation" class="btn btn-outline-gold py-3 px-5">Reserve Place</a>
            </div>
        </div>
        <div style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); opacity: 0.7;">
            <a href="#about" class="text-white" aria-label="Scroll down"><i class="bi bi-chevron-down fs-3"></i></a>
        </div>
    </header>

    <section id="about" class="section-padding reveal">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="about-img-container">
                        <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80" class="img-fluid w-100" alt="Exquisite dining hall layout decoration table styling setup context room view">
                    </div>
                </div>
                <div class="col-lg-6">
                    <span class="gold-text text-uppercase tracking-wider d-block mb-2" style="letter-spacing: 2px;">Our Origin Legacy</span>
                    <h2 class="mb-4 display-5 fw-bold text-white">Redefining Classic Gastronomy Artistry</h2>
                    <p class="text-muted mb-4">
                        Founded with a steadfast commitment to high culinary standards, <?php echo $restaurantName; ?> blends timeless culinary customs with forward-looking modern methods. Every element of our composition represents deliberate intention.
                    </p>
                    <p class="text-muted mb-5">
                        Our culinary space features exceptional local partnerships, rare international imports, and custom-cured charcuterie processes curated explicitly by world-renowned specialists.
                    </p>
                    <div class="row g-4 border-top border-secondary pt-4">
                        <div class="col-6">
                            <h3 class="gold-text fw-bold mb-0">3 Michelin</h3>
                            <p class="text-light small text-uppercase tracking-wider">Kitchen Star Awards</p>
                        </div>
                        <div class="col-6">
                            <h3 class="gold-text fw-bold mb-0">20+ Years</h3>
                            <p class="text-light small text-uppercase tracking-wider">Of Elite Professional Service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-choose-us" class="section-padding bg-black reveal">
        <div class="container text-center">
            <span class="gold-text text-uppercase tracking-wider d-block mb-2" style="letter-spacing: 2px;">Elite Standard Elements</span>
            <h2 class="mb-5 display-5 text-white">An Immersive Experience</h2>
            <div class="row g-4">
                <?php foreach($features as $f): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card text-center">
                        <i class="<?php echo $f['icon']; ?>"></i>
                        <h4 class="text-white mb-3"><?php echo $f['title']; ?></h4>
                        <p class="text-muted small mb-0"><?php echo $f['desc']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="menu" class="section-padding reveal">
        <div class="container">
            <div class="text-center mb-5">
                <span class="gold-text text-uppercase tracking-wider d-block mb-2" style="letter-spacing: 2px;">Curated Offerings</span>
                <h2 class="display-5 text-white">The Signature Menu Selection</h2>
                <div class="d-flex justify-content-center flex-wrap mt-4">
                    <?php foreach($menuCategories as $key => $name): ?>
                        <button class="menu-filter-btn <?php echo $key === 'all' ? 'active' : ''; ?>" data-filter="<?php echo $key; ?>"><?php echo $name; ?></button>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="row g-4" id="menu-items-grid">
                <?php foreach($menuItems as $item): ?>
                <div class="col-md-6 col-lg-4 menu-item-element" data-category="<?php echo $item['cat']; ?>">
                    <div class="menu-card">
                        <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['name']; ?>">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="text-white mb-0 fs-5"><?php echo $item['name']; ?></h4>
                                <span class="gold-text fw-bold fs-5"><?php echo $item['price']; ?></span>
                            </div>
                            <p class="text-muted small mb-0"><?php echo $item['desc']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="gallery" class="section-padding bg-black reveal">
        <div class="container">
            <div class="text-center mb-5">
                <span class="gold-text text-uppercase tracking-wider d-block mb-2" style="letter-spacing: 2px;">Visual Impressions</span>
                <h2 class="display-5 text-white">Inside Our Dining Sanctuary</h2>
            </div>
            <div class="gallery-grid">
                <?php foreach($galleryImages as $gi): ?>
                <div class="gallery-item" data-src="<?php echo $gi['img']; ?>">
                    <img src="<?php echo $gi['img']; ?>" alt="<?php echo $gi['title']; ?>">
                    <div class="gallery-overlay">
                        <div class="text-center">
                            <i class="bi bi-eye text-white fs-2 mb-2"></i>
                            <p class="text-white text-uppercase tracking-wider small m-0"><?php echo $gi['title']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <div id="lightbox" aria-hidden="true" role="dialog">
        <img src="" alt="Enlarged View Showcase">
    </div>

    <section id="chefs" class="section-padding reveal">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-lg-2">
                    <div class="about-img-container">
                        <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?auto=format&fit=crop&w=800&q=80" class="img-fluid w-100" alt="Executive master chef plating luxury culinary presentation items art fully detailed styling context viewport">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <span class="gold-text text-uppercase tracking-wider d-block mb-2" style="letter-spacing: 2px;">Culinary Command</span>
                    <h2 class="mb-4 display-5 fw-bold text-white">Chef Executive Executive Director</h2>
                    <p class="text-muted mb-4">
                        Master Culinary Orchestrator Jean-Luc Laurent directs kitchen culinary operations. Having established world-renowned establishments across metropolitan hubs, his operational principles center on clean presentations and uncompromised flavor consistency profiles.
                    </p>
                    <blockquote class="bg-glass p-4 border-start border-gold rounded-end mb-4" style="border-left: 3px solid var(--primary-gold);">
                        <p class="fst-italic text-light mb-0">"Gastronomy is an evolving extension of pure artistic execution. If the primary elements lack inherent perfection, technical structure cannot sustain the final masterpiece composition."</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="section-padding bg-black reveal">
        <div class="container">
            <div class="text-center mb-5">
                <span class="gold-text text-uppercase tracking-wider d-block mb-2" style="letter-spacing: 2px;">Guest Feedback</span>
                <h2 class="display-5 text-white">Critical Imperial Endorsements</h2>
            </div>
            <div class="testimonial-slider">
                <div class="testimonial-track" id="testimonialTrack">
                    <?php foreach($testimonials as $t): ?>
                    <div class="testimonial-slide">
                        <div class="bg-glass p-5 rounded-4 text-center border-0 position-relative">
                            <img src="<?php echo $t['avatar']; ?>" class="rounded-circle mb-4 border border-2 border-gold mx-auto" style="width: 80px; height: 80px; object-fit: cover;" alt="<?php echo $t['name']; ?>">
                            <p class="lead fst-italic text-light mb-4" style="font-size: 1.15rem;">"<?php echo $t['text']; ?>"</p>
                            <h4 class="gold-text mb-1 fs-5"><?php echo $t['name']; ?></h4>
                            <span class="text-uppercase tracking-wider text-muted small"><?php echo $t['role']; ?></span>
                            <div class="mt-3 gold-text">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding reveal" style="background: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.85)), url('https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?auto=format&fit=crop&w=1920&q=80') center center/cover fixed;">
        <div class="container text-center">
            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <h2 class="display-4 fw-bold gold-text counter-element" data-target="15000">0</h2>
                    <p class="text-uppercase small tracking-wider text-muted m-0">Guests Contented</p>
                </div>
                <div class="col-6 col-md-3">
                    <h2 class="display-4 fw-bold gold-text counter-element" data-target="48">0</h2>
                    <p class="text-uppercase small tracking-wider text-muted m-0">Signature Creations</p>
                </div>
                <div class="col-6 col-md-3">
                    <h2 class="display-4 fw-bold gold-text counter-element" data-target="18">0</h2>
                    <p class="text-uppercase small tracking-wider text-muted m-0">Elite Global Awards</p>
                </div>
                <div class="col-6 col-md-3">
                    <h2 class="display-4 fw-bold gold-text counter-element" data-target="25">0</h2>
                    <p class="text-uppercase small tracking-wider text-muted m-0">Sommelier Reserves</p>
                </div>
            </div>
        </div>
    </section>

    <section id="reservation" class="section-padding bg-black reveal">
        <div class="container">
            <div class="max-w-4xl mx-auto" style="max-width: 850px; margin: auto;">
                <div class="bg-glass p-5 rounded-4 border-0">
                    <div class="text-center mb-5">
                        <span class="gold-text text-uppercase tracking-wider d-block mb-2" style="letter-spacing: 2px;">Secure Secure Table Placement</span>
                        <h2 class="display-6 text-white">An Unparalleled Experience Awaits</h2>
                    </div>

                    <?php if ($reservationSuccess): ?>
                        <div class="alert alert-success bg-transparent text-success border border-success p-4 rounded-3 text-center mb-4">
                            <i class="bi bi-check-circle-fill me-2"></i> Your premium reservation request has been processed securely. An exclusive concierge specialist will communicate validation within shortly.
                        </div>
                    <?php endif; ?>

                    <form action="#reservation" method="POST" id="reservationForm" class="needs-validation" novalidate>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label text-muted small text-uppercase">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="E.g., Lord Byron" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small text-uppercase">Phone Number</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+1 (555) 000-0000" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small text-uppercase">Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="byron@luxury.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small text-uppercase">Total Guests Number</label>
                                <select name="guests" class="form-select form-control" required>
                                    <option value="" disabled selected>Select Attendance Size</option>
                                    <option>1 Guest</option>
                                    <option>2 Guests</option>
                                    <option>4 Guests</option>
                                    <option>6+ Guests (Private Area)</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small text-uppercase">Reservation Target Date</label>
                                <input type="date" name="date" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted small text-uppercase">Target Temporal Window</label>
                                <input type="time" name="time" class="form-control" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label text-muted small text-uppercase">Special Accommodations Request Notes</label>
                                <textarea name="message" class="form-control" rows="4" placeholder="Indicate allergenic profiles, exclusive seating orientation choices..."></textarea>
                            </div>
                            <div class="col-12 text-center mt-5">
                                <button type="submit" name="submit_reservation" class="btn btn-gold py-3 px-5 w-100">Confirm Premium Table Placement Booking</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="section-padding reveal">
        <div class="container" style="max-width: 800px;">
            <div class="text-center mb-5">
                <span class="gold-text text-uppercase tracking-wider d-block mb-2" style="letter-spacing: 2px;">Clarification Parameters</span>
                <h2 class="display-6 text-white">Frequently Addressed Inquiries</h2>
            </div>
            <div class="accordion" id="faqAccordion">
                <?php foreach($faqs as $index => $faq): ?>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="heading<?php echo $index; ?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="false" aria-controls="collapse<?php echo $index; ?>">
                            <?php echo $faq['q']; ?>
                        </button>
                    </h3>
                    <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted small">
                            <?php echo $faq['a']; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="contact" class="section-padding bg-black reveal">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <span class="gold-text text-uppercase tracking-wider d-block mb-2" style="letter-spacing: 2px;">Immediate Directional Channels</span>
                    <h2 class="mb-4 display-6 text-white">Establish Direct Interface Connection</h2>
                    <p class="text-muted mb-5">Should specialized dynamic itinerary execution options require coordination planning parameters, reach out directly across any active access channel.</p>
                    
                    <div class="d-flex mb-4">
                        <i class="bi bi-geo-alt gold-text fs-4 me-3"></i>
                        <div>
                            <h5 class="text-white mb-1">Our Location Address</h5>
                            <p class="text-muted small m-0"><?php echo $address; ?></p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <i class="bi bi-telephone gold-text fs-4 me-3"></i>
                        <div>
                            <h5 class="text-white mb-1">Direct Communication Line</h5>
                            <p class="text-muted small m-0"><?php echo $phone; ?></p>
                        </div>
                    </div>
                    <div class="d-flex mb-5">
                        <i class="bi bi-envelope gold-text fs-4 me-3"></i>
                        <div>
                            <h5 class="text-white mb-1">Electronic Mail Mailbox</h5>
                            <p class="text-muted small m-0"><?php echo $email; ?></p>
                        </div>
                    </div>

                    <h5 class="text-white mb-3 text-uppercase tracking-wider small">Standard Operating Schedule Hours</h5>
                    <ul class="list-unstyled text-muted small">
                        <?php foreach($openingHours as $days => $hours): ?>
                        <li class="d-flex justify-content-between py-2 border-bottom border-secondary border-opacity-25">
                            <span><?php echo $days; ?></span>
                            <span class="gold-text"><?php echo $hours; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-lg-7">
                    <div class="rounded-4 overflow-hidden h-100 min-h-400 shadow-lg border border-secondary border-opacity-25" style="min-height: 400px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.96541668459363!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4a1c884e5%3A0x24fe46bc72e18b4!2sNew+York%2C+NY!5e0!3m2!1sen!2sus!4v1563574923482!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerPolicy="no-referrer-when-downgrade" title="Google Map Location Placement Map Component Frame"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white pt-5 pb-4 border-top border-secondary border-opacity-25">
        <div class="container text-center text-md-start">
            <div class="row text-center text-md-start mt-3 pb-3 g-4">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h4 class="text-uppercase mb-4 font-weight-bold gold-text font-serif"><?php echo $restaurantName; ?></h4>
                    <p class="text-muted small">Elite Gastronomic Mastery execution providing structural luxury presentation platforms across continuous experiential timelines.</p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-white small tracking-wider">Newsletter Dispatch Sign-Up</h5>
                    <p class="text-muted small">Access elite secret recipe disclosures and early event reservation alerts.</p>
                    <div class="input-group mt-3">
                        <input type="email" class="form-control text-sm" placeholder="Email coordinates">
                        <button class="btn btn-gold px-3" type="button" aria-label="Subscribe newsletter"><i class="bi bi-send"></i></button>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3 text-center">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-white small tracking-wider">Social Synchronicity channels</h5>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="btn btn-outline-gold btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;" aria-label="Facebook Profile"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="btn btn-outline-gold btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;" aria-label="Instagram Profile"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="btn btn-outline-gold btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;" aria-label="LinkedIn Profile"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <hr class="mb-4 opacity-25">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8 text-center text-md-start">
                    <p class="small text-muted m-0"><?php echo $copyright; ?></p>
                </div>
            </div>
        </div>
    </footer>

    <button id="backToTop" aria-label="Return back upward towards top navigation segment"><i class="bi bi-arrow-up"></i></button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Preloader dismiss logic
            const preloader = document.getElementById('preloader');
            if(preloader) {
                setTimeout(() => {
                    preloader.style.opacity = '0';
                    setTimeout(() => preloader.style.display = 'none', 500);
                }, 400);
            }

            // Sticky Menu Navigation Event Processing
            const navbar = document.querySelector('.navbar');
            window.addEventListener('scroll', function() {
                if(window.scrollY > 50) {
                    navbar.classList.add('sticky-nav');
                } else {
                    navbar.classList.remove('sticky-nav');
                }
                revealElementsCheck();
                backToTopToggleCheck();
            });

            // Back to Top functionality
            const backToTopBtn = document.getElementById('backToTop');
            function backToTopToggleCheck() {
                if (window.scrollY > 400) {
                    backToTopBtn.style.display = "block";
                } else {
                    backToTopBtn.style.display = "none";
                }
            }
            backToTopBtn.addEventListener('click', () => {
                window.scrollTo({top: 0, behavior: 'smooth'});
            });

            // Scroll Reveal engine activation
            const revealElements = document.querySelectorAll('.reveal');
            function revealElementsCheck() {
                const triggerBottom = window.innerHeight * 0.85;
                revealElements.forEach(el => {
                    const elTop = el.getBoundingClientRect().top;
                    if(elTop < triggerBottom) {
                        el.classList.add('active');
                    }
                });
            }
            revealElementsCheck(); // Initial validation execute execution processing baseline

            // Menu Filter Categorization functionality setup
            const filterBtns = document.querySelectorAll('.menu-filter-btn');
            const menuItems = document.querySelectorAll('.menu-item-element');
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    const categoryFilter = this.getAttribute('data-filter');
                    
                    menuItems.forEach(item => {
                        if(categoryFilter === 'all' || item.getAttribute('data-category') === categoryFilter) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // Lightbox Gallery processing mechanisms execution
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = lightbox.querySelector('img');
            const galleryItems = document.querySelectorAll('.gallery-item');
            galleryItems.forEach(item => {
                item.addEventListener('click', function() {
                    const srcTarget = this.getAttribute('data-src');
                    lightboxImg.setAttribute('src', srcTarget);
                    lightbox.style.display = 'flex';
                    lightbox.setAttribute('aria-hidden', 'false');
                });
            });
            lightbox.addEventListener('click', function() {
                this.style.display = 'none';
                this.setAttribute('aria-hidden', 'true');
            });

            // Animated Numerical Statistics counter execution process
            const counters = document.querySelectorAll('.counter-element');
            let counterTriggered = false;
            function triggerCounters() {
                if(counterTriggered) return;
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-target');
                    const speed = target / 60; 
                    const updateCount = () => {
                        const count = +counter.innerText;
                        if(count < target) {
                            counter.innerText = Math.ceil(count + speed);
                            setTimeout(updateCount, 25);
                        } else {
                            counter.innerText = target + (target > 1000 ? '+' : '');
                        }
                    };
                    updateCount();
                });
                counterTriggered = true;
            }
            // Bind stats checking safely within scroll verification engine
            window.addEventListener('scroll', () => {
                const statsSec = document.querySelector('.counter-element');
                if(statsSec) {
                    const pos = statsSec.getBoundingClientRect().top;
                    if(pos < window.innerHeight) triggerCounters();
                }
            });

            // Automated Testimonial Slider custom script layout configuration engine 
            const track = document.getElementById('testimonialTrack');
            if(track) {
                let currentSlideIndex = 0;
                const totalSlides = track.children.length;
                setInterval(() => {
                    currentSlideIndex = (currentSlideIndex + 1) % totalSlides;
                    track.style.transform = `translateX(-${currentSlideIndex * 100}%)`;
                }, 5000);
            }

            // Form validation configuration processing pipeline initialization checks
            const forms = document.querySelectorAll('.needs-validation');
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        });
    </script>
</body>
</html>