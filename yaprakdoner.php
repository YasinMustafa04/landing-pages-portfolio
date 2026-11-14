<?php
declare(strict_types=1);
header('Content-Type: text/html; charset=UTF-8');

/* ============================================================
   КОНФИГУРАЦИЯ — попълнете линковете, когато бъдат потвърдени.
   Празна стойност (null) = линкът се скрива/деактивира.
   Снимки: сложете файлове в /assets/images/ и впишете името.
   ============================================================ */
$site = [
    'name'        => 'Yaprak Döner Kırcaali',
    'phone'       => '0877 990 928',
    'tel'         => 'tel:+359877990928',
    'street'      => 'бул. „Христо Ботев“ № 43',
    'hood'        => 'кв. Възрожденци',
    'postal'      => '6609',
    'city'        => 'Кърджали',
    'landmark'    => 'Срещу магазин за мебели Виденов.',
    'glovo'       => null,   // напр. 'https://glovoapp.com/...'
    'facebook'    => null,   // напр. 'https://www.facebook.com/...'
    'canonical'   => null,   // напр. 'https://example.bg/'
    'og_image'    => null,   // абсолютен URL към снимка за споделяне
    'title'       => 'Yaprak Döner Kırcaali — телешки япрак дюнер в Кърджали',
    'description' => 'Сочен телешки япрак дюнер от майстор Тайфун във Възрожденци, Кърджали. Поръчай по телефона 0877 990 928 или провери Glovo.',
    // Локални снимки (файл в assets/images/), напр. 'hero.webp'. null = векторна илюстрация.
    'img'         => ['hero' => null, 'signature' => null, 'chef' => null, 'final' => null],
    'img_alt'     => [
        'hero'      => 'Тънко нарязан телешки япрак дюнер',
        'signature' => 'Вертикален грил с телешки япрак дюнер',
        'chef'      => 'Майстор Тайфун приготвя дюнер',
        'final'     => '',
    ],
];

function e(?string $s): string { return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
function safe_url(?string $u): ?string {
    if (!$u) return null;
    $u = trim($u);
    return (filter_var($u, FILTER_VALIDATE_URL) && preg_match('#^https://#i', $u)) ? $u : null;
}
$glovo    = safe_url($site['glovo']);
$facebook = safe_url($site['facebook']);
$canon    = safe_url($site['canonical']);
$ogimg    = safe_url($site['og_image']);
$fullAddr = "{$site['street']}, {$site['hood']}, {$site['postal']} {$site['city']}";
$mapQuery = "{$site['street']}, {$site['postal']} {$site['city']}, България";
$mapsLink = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($mapQuery);
$mapsEmbed = 'https://www.google.com/maps?q=' . rawurlencode($mapQuery) . '&output=embed';

/* Снимка или SVG резервен вариант (никога не приемаме, че файл съществува) */
function photo(string $key, string $class = ''): void {
    global $site;
    $f = $site['img'][$key] ?? null;
    $alt = $site['img_alt'][$key] ?? '';
    $path = $f ? __DIR__ . '/assets/images/' . basename($f) : null;
    if ($path && is_file($path)) {
        $lazy = $key === 'hero' ? 'fetchpriority="high"' : 'loading="lazy"';
        echo '<img class="photo ' . e($class) . '" src="assets/images/' . e(basename($f)) . '" alt="' . e($alt) . '" ' . $lazy . ' decoding="async">';
        return;
    }
    $dec = $alt === '' ? 'aria-hidden="true"' : 'role="img" aria-label="' . e($alt) . '"';
    $id = 'g' . $key;
    echo <<<SVG
<svg class="photo art {$class}" viewBox="0 0 400 480" {$dec} xmlns="http://www.w3.org/2000/svg">
<defs>
<radialGradient id="{$id}" cx="50%" cy="45%" r="55%"><stop offset="0" stop-color="#C73527" stop-opacity=".55"/><stop offset="1" stop-color="#C73527" stop-opacity="0"/></radialGradient>
<linearGradient id="{$id}m" x1="0" x2="1"><stop offset="0" stop-color="#5a2a17"/><stop offset=".45" stop-color="#b8602f"/><stop offset="1" stop-color="#4a2113"/></linearGradient>
</defs>
<rect width="400" height="480" fill="#201D19"/><circle cx="200" cy="230" r="210" fill="url(#{$id})"/>
<rect x="196" y="20" width="8" height="440" rx="4" fill="#B8AA98"/>
<ellipse cx="200" cy="446" rx="90" ry="14" fill="#29241F" stroke="#D6AE68" stroke-opacity=".5"/>
<g fill="url(#{$id}m)" stroke="#2a130a" stroke-width="2">
<path d="M130 70q70-26 140 0l14 40q-84 22-168 0z"/><path d="M118 112q82 22 164 0l16 50q-96 24-196 0z"/>
<path d="M108 164q92 24 184 0l18 56q-108 26-220 0z"/><path d="M102 222q98 24 196 0l20 58q-116 26-236 0z"/>
<path d="M108 282q92 24 184 0l18 56q-108 26-220 0z"/><path d="M122 340q78 20 156 0l12 46q-90 20-180 0z"/></g>
<g stroke="#D6AE68" stroke-opacity=".35" fill="none"><path d="M140 100q60 12 120 0M130 150q70 14 140 0M124 206q76 14 152 0M130 266q70 14 140 0M144 324q56 12 112 0"/></g>
</svg>
SVG;
}

$jsonld = [
    '@context' => 'https://schema.org',
    '@type' => 'Restaurant',
    'name' => $site['name'],
    'telephone' => '+359877990928',
    'servesCuisine' => 'Turkish',
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => $site['street'],
        'addressLocality' => $site['city'],
        'postalCode' => $site['postal'],
        'addressCountry' => 'BG',
    ],
];
if ($canon)    $jsonld['url'] = $canon;
if ($facebook) $jsonld['sameAs'] = [$facebook];
?>
<!DOCTYPE html>
<html lang="bg">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title><?= e($site['title']) ?></title>
<meta name="description" content="<?= e($site['description']) ?>">
<meta name="theme-color" content="#141311">
<?php if ($canon): ?><link rel="canonical" href="<?= e($canon) ?>"><?php endif; ?>
<meta property="og:type" content="restaurant">
<meta property="og:locale" content="bg_BG">
<meta property="og:site_name" content="<?= e($site['name']) ?>">
<meta property="og:title" content="<?= e($site['title']) ?>">
<meta property="og:description" content="<?= e($site['description']) ?>">
<?php if ($canon): ?><meta property="og:url" content="<?= e($canon) ?>"><?php endif; ?>
<?php if ($ogimg): ?><meta property="og:image" content="<?= e($ogimg) ?>"><meta name="twitter:card" content="summary_large_image"><?php endif; ?>
<!-- Favicon: поставете favicon.ico в корена на сайта -->
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%23C73527'/%3E%3Ctext x='16' y='23' font-size='20' font-weight='800' text-anchor='middle' fill='%23F5EBDD' font-family='sans-serif'%3EY%3C/text%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;800&display=swap">
<script type="application/ld+json"><?= json_encode($jsonld, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?></script>
<script>document.documentElement.classList.add('js')</script>
<style>
:root{
--color-bg:#141311;--color-bg-soft:#201D19;--color-surface:#29241F;--color-cream:#F5EBDD;--color-text:#F7F2EA;
--color-muted:#B8AA98;--color-primary:#C73527;--color-primary-hover:#E04735;--color-gold:#D6AE68;--color-border:rgba(245,235,221,.14);
--font:'Manrope',system-ui,-apple-system,'Segoe UI',Roboto,Arial,sans-serif;
--s1:.5rem;--s2:1rem;--s3:1.5rem;--s4:2.5rem;--s5:clamp(4rem,9vw,7.5rem);
--r:6px;--wrap:min(1240px,100% - 2.5rem);--ease:cubic-bezier(.2,.7,.2,1);--hdr:72px;
}
*,*::before,*::after{box-sizing:border-box}
html{scroll-behavior:smooth;scroll-padding-top:calc(var(--hdr) + 12px);-webkit-text-size-adjust:100%}
body{margin:0;background:var(--color-bg);color:var(--color-text);font:400 1.0625rem/1.65 var(--font);overflow-x:hidden;-webkit-font-smoothing:antialiased}
img,svg{display:block;max-width:100%}
a{color:inherit}
h1,h2,h3,p{margin:0}
h1,h2,h3{font-weight:800;line-height:1.02;letter-spacing:-.025em;text-wrap:balance}
h1{font-size:clamp(2.6rem,9vw,6rem)}
h2{font-size:clamp(2.1rem,5.6vw,3.9rem)}
h3{font-size:1.25rem;letter-spacing:-.01em;line-height:1.2}
:focus-visible{outline:3px solid var(--color-gold);outline-offset:3px;border-radius:2px}
.wrap{width:var(--wrap);margin-inline:auto}
section{position:relative}
.sec{padding-block:var(--s5)}
.eyebrow{display:inline-flex;align-items:center;gap:.75rem;font-size:.78rem;font-weight:800;letter-spacing:.2em;text-transform:uppercase;color:var(--color-gold);margin-bottom:var(--s3)}
.eyebrow::before{content:"";width:2rem;height:1px;background:currentColor}
.lead{color:var(--color-muted);font-size:clamp(1.05rem,2vw,1.2rem);max-width:34rem}
.skip{position:absolute;left:1rem;top:-100px;background:var(--color-cream);color:#141311;padding:.75rem 1rem;z-index:200;font-weight:800;border-radius:var(--r)}
.skip:focus{top:1rem}
.progress{position:fixed;inset:0 0 auto;height:3px;background:var(--color-primary);transform:scaleX(0);transform-origin:0 50%;z-index:120;pointer-events:none}

/* Buttons */
.btn{display:inline-flex;align-items:center;justify-content:center;gap:.6rem;min-height:52px;padding:.8rem 1.6rem;border-radius:var(--r);border:1.5px solid transparent;font:800 .95rem/1.2 var(--font);letter-spacing:.02em;text-decoration:none;cursor:pointer;transition:transform .25s var(--ease),background .25s,border-color .25s,color .25s}
.btn svg{width:1.15em;height:1.15em;flex:none}
.btn-primary{background:var(--color-primary);color:#fff}
.btn-primary:hover{background:var(--color-primary-hover);transform:translateY(-2px)}
.btn-ghost{border-color:rgba(245,235,221,.35);color:var(--color-cream);background:transparent}
.btn-ghost:hover{border-color:var(--color-gold);color:var(--color-gold);transform:translateY(-2px)}
.btn:active{transform:translateY(0) scale(.98)}
.btn[aria-disabled=true]{opacity:.55;cursor:not-allowed;pointer-events:none;border-style:dashed}
.btns{display:flex;flex-wrap:wrap;gap:.9rem}
.note{font-size:.9rem;color:var(--color-muted);margin-top:.75rem}

/* Announcement + header */
.announce{background:var(--color-primary);color:#fff;font-size:.82rem;font-weight:500;text-align:center;padding:.5rem 1rem;letter-spacing:.04em}
.announce span{opacity:.55;margin-inline:.6rem}
.hdr{position:sticky;top:0;z-index:100;background:rgba(20,19,17,.92);border-bottom:1px solid transparent;transition:border-color .3s,box-shadow .3s}
.hdr.stuck{border-color:var(--color-border);box-shadow:0 10px 30px rgba(0,0,0,.35)}
.hdr .wrap{display:flex;align-items:center;justify-content:space-between;height:var(--hdr);gap:1rem}
.brand{text-decoration:none;display:flex;flex-direction:column;line-height:1}
.brand b{font-size:1.35rem;font-weight:800;letter-spacing:.14em;color:var(--color-cream)}
.brand b i{font-style:normal;color:var(--color-primary)}
.brand small{font-size:.62rem;letter-spacing:.3em;color:var(--color-gold);margin-top:.35rem;font-weight:800}
.nav{display:flex;align-items:center;gap:2rem}
.nav ul{display:flex;gap:1.8rem;list-style:none;margin:0;padding:0}
.nav ul a{position:relative;text-decoration:none;font-weight:500;font-size:.95rem;color:var(--color-muted);padding:.5rem 0;transition:color .2s}
.nav ul a::after{content:"";position:absolute;left:0;right:0;bottom:.1rem;height:2px;background:var(--color-primary);transform:scaleX(0);transform-origin:left;transition:transform .35s var(--ease)}
.nav ul a:hover,.nav ul a.active{color:var(--color-cream)}
.nav ul a.active::after,.nav ul a:hover::after{transform:scaleX(1)}
.nav .acts{display:flex;gap:.6rem}
.nav .btn{min-height:44px;padding:.55rem 1.1rem;font-size:.86rem}
.burger{display:none;width:48px;height:48px;background:none;border:1px solid var(--color-border);border-radius:var(--r);cursor:pointer;position:relative;color:var(--color-cream)}
.burger span{position:absolute;left:13px;right:13px;height:2px;background:currentColor;transition:transform .35s var(--ease),opacity .2s,top .35s var(--ease)}
.burger span:nth-child(1){top:16px}.burger span:nth-child(2){top:23px}.burger span:nth-child(3){top:30px}
.burger[aria-expanded=true] span:nth-child(1){top:23px;transform:rotate(45deg)}
.burger[aria-expanded=true] span:nth-child(2){opacity:0}
.burger[aria-expanded=true] span:nth-child(3){top:23px;transform:rotate(-45deg)}
@media (max-width:900px){
 .burger{display:block}
 .nav{position:fixed;inset:var(--hdr) 0 0 0;top:calc(var(--hdr) + var(--ann,0px));background:var(--color-bg);flex-direction:column;align-items:stretch;justify-content:center;gap:2rem;padding:2rem 1.5rem;opacity:0;visibility:hidden;transform:translateY(-12px);transition:opacity .3s,transform .35s var(--ease),visibility .3s}
 .nav.open{opacity:1;visibility:visible;transform:none}
 .nav ul{flex-direction:column;gap:.25rem}
 .nav ul a{display:block;font-size:1.9rem;font-weight:800;color:var(--color-cream);padding:.6rem 0}
 .nav .acts{flex-direction:column}
 .nav .btn{min-height:54px;font-size:1rem}
}
body.lock{overflow:hidden}

/* Hero */
.hero{padding-block:clamp(2.5rem,6vw,5rem) clamp(4rem,8vw,6rem);overflow:hidden;background:radial-gradient(60rem 40rem at 85% 30%,rgba(199,53,39,.22),transparent 60%),var(--color-bg)}
.hero .wrap{display:grid;gap:3rem;align-items:center}
.hero h1 span{display:block}
.hero h1 .accent{color:var(--color-primary)}
.hero .lead{margin-block:var(--s3) var(--s4)}
.loc{display:flex;align-items:center;gap:.6rem;margin-top:var(--s3);font-size:.92rem;color:var(--color-muted)}
.loc svg{width:18px;color:var(--color-gold);flex:none}
.hero-vis{position:relative;aspect-ratio:5/6;max-width:560px;width:100%;margin-inline:auto}
.hero-vis .frame{position:absolute;inset:0;border:1px solid var(--color-gold);opacity:.4;transform:translate(18px,18px);border-radius:var(--r)}
.hero-vis .photo{position:relative;width:100%;height:100%;object-fit:cover;border-radius:var(--r);box-shadow:0 40px 80px rgba(0,0,0,.55)}
.deco{position:absolute;pointer-events:none;will-change:transform}
.deco.d1{width:220px;height:220px;right:-60px;top:-40px;border-radius:50%;background:radial-gradient(circle,rgba(199,53,39,.35),transparent 70%)}
.pattern{position:absolute;inset:0;opacity:.05;pointer-events:none;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='56' height='56'%3E%3Cpath d='M28 2 54 28 28 54 2 28Z M28 14 42 28 28 42 14 28Z' fill='none' stroke='%23F5EBDD' stroke-width='1'/%3E%3C/svg%3E")}
.scroll-ind{display:none;position:absolute;left:50%;bottom:1.4rem;width:24px;height:40px;border:1.5px solid var(--color-border);border-radius:14px;transform:translateX(-50%)}
.scroll-ind::after{content:"";position:absolute;left:50%;top:7px;width:3px;height:8px;margin-left:-1.5px;border-radius:2px;background:var(--color-gold);animation:wheel 1.8s infinite}
@keyframes wheel{0%{opacity:0;transform:translateY(0)}30%{opacity:1}100%{opacity:0;transform:translateY(14px)}}
@media (min-width:960px){
 .hero .wrap{grid-template-columns:1.1fr .9fr;gap:4rem}
 .scroll-ind{display:block}
 .hero-vis{margin-inline:0 0;aspect-ratio:4/5}
}
@media (max-width:959px){.hero-vis{order:-1;max-width:420px;aspect-ratio:1/1}.hero-vis .frame{transform:translate(10px,10px)}}
@media (max-width:480px){.btns .btn{width:100%}}

/* Highlights */
.hl{border-block:1px solid var(--color-border);background:var(--color-bg-soft)}
.hl ul{list-style:none;margin:0;padding:0;display:grid}
.hl li{display:flex;gap:1.1rem;align-items:flex-start;padding:2rem 0;border-bottom:1px solid var(--color-border)}
.hl li:last-child{border:0}
.hl svg{width:44px;height:44px;flex:none;color:var(--color-gold)}
.hl p{color:var(--color-muted);font-size:.97rem;margin-top:.3rem}
@media (min-width:800px){.hl ul{grid-template-columns:repeat(3,1fr)}.hl li{border-bottom:0;border-right:1px solid var(--color-border);padding:2.6rem 2rem}.hl li:first-child{padding-left:0}.hl li:last-child{border:0}}

/* Split sections */
.split{display:grid;gap:3rem;align-items:center}
.split .vis{position:relative;overflow:hidden;border-radius:var(--r);aspect-ratio:4/5;background:var(--color-surface)}
.split .vis .photo{width:100%;height:100%;object-fit:cover;transition:transform 1.2s var(--ease)}
.split .vis:hover .photo{transform:scale(1.05)}
.split p.body{color:var(--color-muted);margin-block:var(--s3) var(--s4);max-width:34rem}
.bigword{position:absolute;font-weight:800;font-size:clamp(5rem,16vw,13rem);line-height:1;letter-spacing:-.05em;color:transparent;-webkit-text-stroke:1px rgba(245,235,221,.09);pointer-events:none;user-select:none;white-space:nowrap}
@media (min-width:900px){
 .split{grid-template-columns:1fr 1fr;gap:6rem}
 .split.rev .vis{order:2}
}
.about{background:var(--color-bg-soft);overflow:hidden}
.about .bigword{right:-2%;top:2%}
.about .vis{aspect-ratio:1/1}
.about blockquote{margin:0;position:relative}

/* Ordering */
.order .head{max-width:40rem;margin-bottom:var(--s4)}
.cards{display:grid;gap:1.25rem}
.card{background:var(--color-surface);border:1px solid var(--color-border);border-radius:var(--r);padding:clamp(1.8rem,4vw,3rem);display:flex;flex-direction:column;gap:1rem;align-items:flex-start;position:relative;overflow:hidden}
.card.hot{border-color:rgba(199,53,39,.55)}
.card .tag{font-size:.72rem;font-weight:800;letter-spacing:.2em;text-transform:uppercase;color:var(--color-gold)}
.card p{color:var(--color-muted)}
.card .num{font-size:clamp(1.9rem,5vw,2.8rem);font-weight:800;letter-spacing:-.01em;color:var(--color-cream);text-decoration:none}
.card .btn{margin-top:auto}
@media (min-width:800px){.cards{grid-template-columns:1fr 1fr}}

/* Location */
.locsec{background:var(--color-bg-soft)}
.locgrid{display:grid;gap:3rem}
.dl{margin:2rem 0 var(--s4);display:grid;gap:1.4rem}
.dl div{border-left:2px solid var(--color-primary);padding-left:1.1rem}
.dl dt{font-size:.74rem;font-weight:800;letter-spacing:.18em;text-transform:uppercase;color:var(--color-gold);margin-bottom:.2rem}
.dl dd{margin:0;font-size:1.12rem}
.dl a{text-decoration:none;border-bottom:1px solid var(--color-gold)}
.map{position:relative;min-height:340px;border:1px solid var(--color-border);border-radius:var(--r);overflow:hidden;background:var(--color-surface);display:grid;place-items:center;text-align:center;padding:1.5rem}
.map iframe{position:absolute;inset:0;width:100%;height:100%;border:0}
.map .pattern{opacity:.07}
.map div{position:relative;display:grid;gap:1rem;justify-items:center;max-width:22rem}
.map small{color:var(--color-muted);font-size:.85rem}
@media (min-width:900px){.locgrid{grid-template-columns:.9fr 1.1fr;gap:5rem;align-items:center}.map{min-height:460px}}

/* Social */
.social{text-align:center;padding-block:clamp(3.5rem,7vw,5.5rem)}
.social .lead{margin:1.2rem auto 2rem}
.social .eyebrow::before{display:none}

/* FAQ */
.faq .wrap{display:grid;gap:3rem}
.acc{border-top:1px solid var(--color-border)}
.acc h3{margin:0}
.acc button{width:100%;display:flex;justify-content:space-between;align-items:center;gap:1.5rem;background:none;border:0;color:var(--color-cream);font:800 clamp(1.05rem,2.4vw,1.3rem)/1.3 var(--font);text-align:left;padding:1.5rem 0;cursor:pointer;min-height:56px;letter-spacing:-.01em}
.acc button:hover{color:var(--color-gold)}
.acc .ic{flex:none;width:28px;height:28px;position:relative}
.acc .ic::before,.acc .ic::after{content:"";position:absolute;left:5px;right:5px;top:13px;height:2px;background:var(--color-primary);transition:transform .35s var(--ease)}
.acc .ic::after{transform:rotate(90deg)}
.acc button[aria-expanded=true] .ic::after{transform:rotate(0)}
.acc .panel{overflow:hidden}
.acc .panel[hidden]{display:none}
.acc .panel p{color:var(--color-muted);padding:0 3rem 1.6rem 0;max-width:42rem;animation:drop .4s var(--ease)}
.acc .panel a{color:var(--color-gold)}
.acc>div{border-bottom:1px solid var(--color-border)}
@keyframes drop{from{opacity:0;transform:translateY(-8px)}}
@media (min-width:900px){.faq .wrap{grid-template-columns:.7fr 1.3fr;gap:5rem}}

/* Final CTA */
.final{text-align:center;overflow:hidden;background:radial-gradient(50rem 30rem at 50% 100%,rgba(199,53,39,.35),transparent 70%),#0f0e0c;padding-block:clamp(5rem,12vw,9rem)}
.final .photo-bg{position:absolute;inset:0;opacity:.28}
.final .photo-bg .photo{width:100%;height:100%;object-fit:cover}
.final .wrap{position:relative}
.final h2{max-width:16ch;margin:0 auto var(--s3);font-size:clamp(2.3rem,7vw,5rem)}
.final .lead{margin:0 auto var(--s4)}
.final .btns{justify-content:center}

/* Footer */
.ft{background:#0f0e0c;border-top:1px solid var(--color-border);padding-block:4rem 6rem;font-size:.95rem;color:var(--color-muted)}
.ft .wrap{display:grid;gap:2.5rem}
.ft h4{margin:0 0 1rem;font-size:.74rem;letter-spacing:.2em;text-transform:uppercase;color:var(--color-gold)}
.ft ul{list-style:none;margin:0;padding:0;display:grid;gap:.5rem}
.ft a{text-decoration:none}.ft a:hover{color:var(--color-cream)}
.ft address{font-style:normal}
.ft .copy{grid-column:1/-1;border-top:1px solid var(--color-border);padding-top:1.5rem;font-size:.85rem}
@media (min-width:800px){.ft .wrap{grid-template-columns:1.4fr 1fr 1fr 1fr}}

/* Floating call + back to top */
.fab{position:fixed;right:1rem;bottom:calc(1rem + env(safe-area-inset-bottom,0px));z-index:90;display:flex;flex-direction:column;gap:.7rem;align-items:flex-end}
.fab .call{min-height:56px;box-shadow:0 12px 30px rgba(199,53,39,.45)}
.fab .top{width:48px;height:48px;border-radius:50%;border:1px solid var(--color-border);background:var(--color-surface);color:var(--color-cream);cursor:pointer;display:grid;place-items:center;opacity:0;visibility:hidden;transform:translateY(10px);transition:opacity .3s,transform .3s,visibility .3s}
.fab .top.show{opacity:1;visibility:visible;transform:none}
.fab .top svg{width:20px}
@media (min-width:900px){.fab .call{display:none}}

/* Reveal (only when JS is active) */
.js .rv{opacity:0;transform:translateY(28px);transition:opacity .9s var(--ease),transform .9s var(--ease);transition-delay:var(--d,0s)}
.js .rv.in{opacity:1;transform:none}
.js .hero .st{opacity:0;transform:translateY(30px);animation:up 1s var(--ease) forwards;animation-delay:calc(.12s * var(--i,0) + .1s)}
.js .hero-vis{opacity:0;transform:scale(.96) translateY(20px);animation:up 1.3s var(--ease) .35s forwards}
@keyframes up{to{opacity:1;transform:none}}
@media (prefers-reduced-motion:reduce){
 html{scroll-behavior:auto}
 *,*::before,*::after{animation-duration:.001ms!important;animation-iteration-count:1!important;transition-duration:.001ms!important}
 .js .rv,.js .hero .st,.js .hero-vis{opacity:1;transform:none}
}
</style>
</head>
<body>
<a class="skip" href="#main">Към съдържанието</a>
<div class="progress" id="progress" aria-hidden="true"></div>

<?php
$ico = [
 'phone'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2z"/></svg>',
 'pin'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>',
 'out'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 17 17 7M8 7h9v9"/></svg>',
];
/* Генератор на външен бутон: ако URL липсва – деактивиран бутон */
function ext_btn(?string $url, string $label, string $cls, string $off): void {
    global $ico;
    if ($url) echo '<a class="btn ' . $cls . '" href="' . e($url) . '" target="_blank" rel="noopener noreferrer">' . e($label) . ' ' . $ico['out'] . '</a>';
    else echo '<span class="btn ' . $cls . '" role="link" aria-disabled="true">' . e($off) . '</span>';
}
?>

<div class="announce" id="announce">Истински вкус на турски япрак дюнер в Кърджали.</div>

<header class="hdr" id="hdr">
 <div class="wrap">
  <a class="brand" href="#top" aria-label="<?= e($site['name']) ?> — начало">
   <b>YAPRAK <i>DÖNER</i></b><small>KIRCALI / КЪРДЖАЛИ</small>
  </a>
  <button class="burger" id="burger" aria-expanded="false" aria-controls="nav" aria-label="Отвори менюто"><span></span><span></span><span></span></button>
  <nav class="nav" id="nav" aria-label="Основна навигация">
   <ul>
    <li><a href="#top">Начало</a></li>
    <li><a href="#specialitet">Нашият дюнер</a></li>
    <li><a href="#za-nas">За нас</a></li>
    <li><a href="#kontakti">Контакти</a></li>
   </ul>
   <div class="acts">
    <a class="btn btn-primary" href="<?= e($site['tel']) ?>"><?= $ico['phone'] ?> Поръчай по телефона</a>
    <?php if ($glovo): ?><a class="btn btn-ghost" href="<?= e($glovo) ?>" target="_blank" rel="noopener noreferrer">Glovo</a><?php endif; ?>
   </div>
  </nav>
 </div>
</header>

<main id="main">

<!-- HERO -->
<section class="hero" id="top" aria-labelledby="h1">
 <div class="pattern"></div>
 <div class="deco d1" data-parallax="0.15" aria-hidden="true"></div>
 <div class="wrap">
  <div>
   <p class="eyebrow st" style="--i:0">ТУРСКИ ВКУС • КЪРДЖАЛИ</p>
   <h1 id="h1"><span class="st" style="--i:1">Истинският</span><span class="st" style="--i:2">вкус на</span><span class="st accent" style="--i:3">Yaprak Döner.</span></h1>
   <p class="lead st" style="--i:4">Сочен телешки япрак дюнер, приготвян с майсторство от Тайфун. Открийте вкуса на турската дюнер традиция във Възрожденци.</p>
   <div class="btns st" style="--i:5">
    <a class="btn btn-primary" href="<?= e($site['tel']) ?>"><?= $ico['phone'] ?> Поръчай: <?= e($site['phone']) ?></a>
    <?php ext_btn($glovo, 'Поръчай през Glovo', 'btn-ghost', 'Glovo — линкът скоро'); ?>
   </div>
   <p class="loc st" style="--i:6"><?= $ico['pin'] ?> <?= e($site['street']) ?> · <?= e($site['city']) ?></p>
  </div>
  <div class="hero-vis">
   <div class="frame" aria-hidden="true"></div>
   <?php photo('hero'); ?>
  </div>
 </div>
 <a class="scroll-ind" href="#highlights" aria-label="Надолу"></a>
</section>

<!-- HIGHLIGHTS -->
<section class="hl" id="highlights" aria-label="Накратко">
 <div class="wrap">
  <ul>
   <li class="rv"><svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" aria-hidden="true"><path d="M24 4v40M12 12q12-5 24 0M10 20q14 5 28 0M10 28q14 5 28 0M13 36q11 4 22 0"/></svg>
    <div><h3>Телешки япрак дюнер</h3><p>Нашият специалитет — сочно телешко, нарязано на тънки пластове.</p></div></li>
   <li class="rv" style="--d:.1s"><svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 22a11 11 0 0 1 22 0v3H13zM11 25h26v8a3 3 0 0 1-3 3H14a3 3 0 0 1-3-3zM19 40h10"/></svg>
    <div><h3>Майстор Тайфун</h3><p>Зад всеки дюнер стои майстор готвач със стремеж към вкус.</p></div></li>
   <li class="rv" style="--d:.2s"><svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M38 20c0 12-14 24-14 24S10 32 10 20a14 14 0 0 1 28 0z"/><circle cx="24" cy="20" r="5"/></svg>
    <div><h3>Във Възрожденци</h3><p>Удобно място на бул. „Христо Ботев“ в Кърджали.</p></div></li>
  </ul>
 </div>
</section>

<!-- SIGNATURE -->
<section class="sec" id="specialitet" aria-labelledby="h-spec">
 <div class="wrap split">
  <div class="vis rv"><?php photo('signature'); ?></div>
  <div class="rv" style="--d:.1s">
   <p class="eyebrow">НАШИЯТ СПЕЦИАЛИТЕТ</p>
   <h2 id="h-spec">Вкусът е в детайла.</h2>
   <p class="body">Япрак дюнерът е познат със своите тънко нарязани пластове месо и характерния начин на приготвяне. В Yaprak Döner Kırcaali телешкият дюнер е в центъра на вниманието.</p>
   <a class="btn btn-primary" href="<?= e($site['tel']) ?>"><?= $ico['phone'] ?> Поръчай: <?= e($site['phone']) ?></a>
  </div>
 </div>
</section>

<!-- ABOUT -->
<section class="sec about" id="za-nas" aria-labelledby="h-about">
 <div class="bigword" data-parallax="-0.08" aria-hidden="true">TAYFUN</div>
 <div class="wrap split rev">
  <div class="vis rv"><?php photo('chef'); ?></div>
  <div class="rv" style="--d:.1s">
   <p class="eyebrow">ЗА НАС</p>
   <h2 id="h-about">Занаят, вкус и традиция.</h2>
   <blockquote><p class="body">Зад нашия япрак дюнер стои майстор готвач Тайфун и стремежът към вкус, който си заслужава да опиташ.</p></blockquote>
  </div>
 </div>
</section>

<!-- ORDERING -->
<section class="sec order" id="poruchai" aria-labelledby="h-order">
 <div class="wrap">
  <div class="head rv">
   <p class="eyebrow">ПОРЪЧАЙ</p>
   <h2 id="h-order">Два лесни начина.</h2>
  </div>
  <div class="cards">
   <article class="card hot rv">
    <span class="tag">Вариант 1 · По телефона</span>
    <h3>Предпочиташ да поръчаш директно?</h3>
    <p>Свържи се с нас по телефона.</p>
    <a class="num" href="<?= e($site['tel']) ?>"><?= e($site['phone']) ?></a>
    <a class="btn btn-primary" href="<?= e($site['tel']) ?>"><?= $ico['phone'] ?> Обади се сега</a>
   </article>
   <article class="card rv" style="--d:.12s">
    <span class="tag">Вариант 2 · Glovo</span>
    <h3>Дюнерът идва при теб.</h3>
    <p>Провери възможността за доставка чрез Glovo в Кърджали.</p>
    <?php if ($glovo): ?>
     <a class="btn btn-ghost" href="<?= e($glovo) ?>" target="_blank" rel="noopener noreferrer">Отвори Glovo <?= $ico['out'] ?></a>
     <p class="note">Поръчката се извършва във външното приложение на Glovo, не на този сайт.</p>
    <?php else: ?>
     <span class="btn btn-ghost" role="link" aria-disabled="true">Отвори Glovo</span>
     <p class="note">Линкът за поръчка през Glovo ще бъде добавен скоро.</p>
    <?php endif; ?>
   </article>
  </div>
 </div>
</section>

<!-- LOCATION -->
<section class="sec locsec" id="kontakti" aria-labelledby="h-loc">
 <div class="wrap locgrid">
  <div class="rv">
   <p class="eyebrow">КОНТАКТИ</p>
   <h2 id="h-loc">Намери ни във Възрожденци.</h2>
   <dl class="dl">
    <div><dt>Адрес</dt><dd><?= e($site['street']) ?>, <?= e($site['hood']) ?>, <?= e($site['postal']) ?> <?= e($site['city']) ?></dd></div>
    <div><dt>Ориентир</dt><dd><?= e($site['landmark']) ?></dd></div>
    <div><dt>Телефон</dt><dd><a href="<?= e($site['tel']) ?>"><?= e($site['phone']) ?></a></dd></div>
   </dl>
   <a class="btn btn-primary" href="<?= e($mapsLink) ?>" target="_blank" rel="noopener noreferrer"><?= $ico['pin'] ?> Навигация до нас</a>
  </div>
  <div class="map rv" style="--d:.1s" id="map" data-src="<?= e($mapsEmbed) ?>">
   <div class="pattern" aria-hidden="true"></div>
   <div>
    <?= $ico['pin'] ?>
    <button class="btn btn-ghost" type="button" id="loadMap">Зареди картата</button>
    <small>Картата на Google се зарежда само след твое съгласие. <a href="<?= e($mapsLink) ?>" target="_blank" rel="noopener noreferrer">Или я отвори директно.</a></small>
   </div>
  </div>
 </div>
</section>

<!-- SOCIAL -->
<section class="social" aria-labelledby="h-soc">
 <div class="wrap rv">
  <p class="eyebrow">FACEBOOK</p>
  <h2 id="h-soc">Остани близо до Yaprak Döner.</h2>
  <p class="lead">Следи страницата ни във Facebook за актуални новини и информация.</p>
  <?php if ($facebook): ?>
   <a class="btn btn-ghost" href="<?= e($facebook) ?>" target="_blank" rel="noopener noreferrer">Facebook страницата ни <?= $ico['out'] ?></a>
  <?php else: ?>
   <p class="note">Връзката към страницата ни във Facebook ще бъде добавена скоро.</p>
  <?php endif; ?>
 </div>
</section>

<!-- FAQ -->
<section class="sec faq" id="faq" aria-labelledby="h-faq">
 <div class="wrap">
  <div class="rv"><p class="eyebrow">ВЪПРОСИ</p><h2 id="h-faq">Често задавани въпроси.</h2></div>
  <div class="acc rv" id="acc" style="--d:.1s">
   <?php
   $faq = [
    ['Къде се намира Yaprak Döner Kırcaali?', e($fullAddr) . '. ' . e($site['landmark'])],
    ['Как мога да поръчам?', 'Можеш да се обадиш на <a href="' . e($site['tel']) . '">' . e($site['phone']) . '</a> или да провериш възможността за поръчка чрез Glovo в Кърджали.'],
    ['Какъв е специалитетът?', 'Нашият специалитет е сочен телешки япрак дюнер, приготвян от майстор готвач Тайфун.'],
    ['Има ли доставка?', 'Можеш да провериш възможността за доставка чрез Glovo в Кърджали. Не гарантираме доставка до всеки адрес — наличността се показва в приложението на Glovo.'],
    ['Как мога да се свържа с вас?', 'Обади ни се на <a href="' . e($site['tel']) . '">' . e($site['phone']) . '</a>.'],
   ];
   foreach ($faq as $i => [$q, $a]): ?>
   <div>
    <h3><button type="button" id="fq<?= $i ?>" aria-expanded="false" aria-controls="fa<?= $i ?>"><?= e($q) ?><span class="ic" aria-hidden="true"></span></button></h3>
    <div class="panel" id="fa<?= $i ?>" role="region" aria-labelledby="fq<?= $i ?>" hidden><p><?= $a ?></p></div>
   </div>
   <?php endforeach; ?>
  </div>
 </div>
</section>

<!-- FINAL CTA -->
<section class="final" aria-labelledby="h-final">
 <div class="pattern" aria-hidden="true"></div>
 <?php if (!empty($site['img']['final'])): ?><div class="photo-bg" aria-hidden="true"><?php photo('final'); ?></div><?php endif; ?>
 <div class="wrap rv">
  <p class="eyebrow">YAPRAK DÖNER KIRCAALI</p>
  <h2 id="h-final">Гладен ли си за истински япрак дюнер?</h2>
  <p class="lead">Открий ни във Възрожденци и се свържи с нас за поръчка.</p>
  <div class="btns">
   <a class="btn btn-primary" href="<?= e($site['tel']) ?>"><?= $ico['phone'] ?> <?= e($site['phone']) ?></a>
   <a class="btn btn-ghost" href="<?= e($mapsLink) ?>" target="_blank" rel="noopener noreferrer">Виж локацията</a>
  </div>
 </div>
</section>
</main>

<footer class="ft">
 <div class="wrap">
  <div>
   <a class="brand" href="#top" style="margin-bottom:1rem"><b>YAPRAK <i>DÖNER</i></b><small>KIRCALI / КЪРДЖАЛИ</small></a>
   <p>Телешки япрак дюнер от майстор Тайфун във Възрожденци, Кърджали.</p>
  </div>
  <div><h4>Адрес</h4><address><?= e($site['street']) ?><br><?= e($site['hood']) ?><br><?= e($site['postal']) ?> <?= e($site['city']) ?><br><a href="<?= e($site['tel']) ?>"><?= e($site['phone']) ?></a></address></div>
  <div><h4>Навигация</h4><ul>
   <li><a href="#top">Начало</a></li><li><a href="#specialitet">Нашият дюнер</a></li><li><a href="#za-nas">За нас</a></li><li><a href="#kontakti">Контакти</a></li><li><a href="#faq">Въпроси</a></li></ul></div>
  <div><h4>Онлайн</h4><ul>
   <?php if ($facebook): ?><li><a href="<?= e($facebook) ?>" target="_blank" rel="noopener noreferrer">Facebook</a></li><?php endif; ?>
   <?php if ($glovo): ?><li><a href="<?= e($glovo) ?>" target="_blank" rel="noopener noreferrer">Glovo</a></li><?php endif; ?>
   <?php if (!$facebook && !$glovo): ?><li>Скоро</li><?php endif; ?></ul></div>
  <p class="copy">© <?= date('Y') ?> <?= e($site['name']) ?>. Всички права запазени.</p>
 </div>
</footer>

<div class="fab">
 <button class="top" id="toTop" type="button" aria-label="Нагоре"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m5 15 7-7 7 7"/></svg></button>
 <a class="btn btn-primary call" href="<?= e($site['tel']) ?>" aria-label="Обади се: <?= e($site['phone']) ?>"><?= $ico['phone'] ?> Обади се</a>
</div>

<script>
(() => {
  'use strict';
  const $ = (s, c = document) => c.querySelector(s);
  const $$ = (s, c = document) => [...c.querySelectorAll(s)];
  const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* Мобилно меню */
  const burger = $('#burger'), nav = $('#nav'), hdr = $('#hdr'), ann = $('#announce');
  const setMenu = open => {
    if (!burger || !nav) return;
    nav.classList.toggle('open', open);
    burger.setAttribute('aria-expanded', String(open));
    burger.setAttribute('aria-label', open ? 'Затвори менюто' : 'Отвори менюто');
    document.body.classList.toggle('lock', open);
  };
  burger?.addEventListener('click', () => setMenu(burger.getAttribute('aria-expanded') !== 'true'));
  nav?.addEventListener('click', e => { if (e.target.closest('a')) setMenu(false); });
  addEventListener('keydown', e => { if (e.key === 'Escape' && nav?.classList.contains('open')) { setMenu(false); burger.focus(); } });
  matchMedia('(min-width: 901px)').addEventListener('change', () => setMenu(false));

  /* Височина на лентата за мобилното меню */
  const setAnn = () => document.documentElement.style.setProperty('--ann', Math.max(0, (ann?.getBoundingClientRect().bottom || 0)) + 'px');

  /* Скрол: прогрес, sticky състояние, бутон нагоре, паралакс */
  const bar = $('#progress'), top = $('#toTop'), px = $$('[data-parallax]');
  let ticking = false;
  const onScroll = () => {
    if (ticking) return; ticking = true;
    requestAnimationFrame(() => {
      const y = scrollY, max = document.documentElement.scrollHeight - innerHeight;
      if (bar) bar.style.transform = `scaleX(${max > 0 ? y / max : 0})`;
      hdr?.classList.toggle('stuck', y > 10);
      top?.classList.toggle('show', y > 700);
      if (!reduce && innerWidth > 700) px.forEach(el => { el.style.transform = `translate3d(0,${(y * parseFloat(el.dataset.parallax)).toFixed(1)}px,0)`; });
      ticking = false;
    });
  };
  addEventListener('scroll', onScroll, { passive: true });
  addEventListener('resize', () => { setAnn(); onScroll(); }, { passive: true });
  top?.addEventListener('click', () => scrollTo({ top: 0, behavior: reduce ? 'auto' : 'smooth' }));
  setAnn(); onScroll();

  /* Появяване при скрол */
  const rv = $$('.rv');
  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver(es => es.forEach(en => {
      if (en.isIntersecting) { en.target.classList.add('in'); io.unobserve(en.target); }
    }), { threshold: .12, rootMargin: '0px 0px -6% 0px' });
    rv.forEach(el => io.observe(el));
    setTimeout(() => rv.forEach(el => el.classList.add('in')), 6000); // предпазна мрежа
  } else rv.forEach(el => el.classList.add('in'));

  /* Активна секция в навигацията */
  const links = $$('.nav ul a'), map = new Map();
  links.forEach(a => { const t = $(a.getAttribute('href')); if (t) map.set(t, a); });
  if ('IntersectionObserver' in window && map.size) {
    const so = new IntersectionObserver(es => es.forEach(en => {
      if (en.isIntersecting) { links.forEach(l => l.classList.remove('active')); map.get(en.target)?.classList.add('active'); }
    }), { rootMargin: '-45% 0px -50% 0px' });
    map.forEach((_, sec) => so.observe(sec));
  }

  /* FAQ акордеон */
  const acc = $('#acc');
  acc?.addEventListener('click', e => {
    const btn = e.target.closest('button[aria-controls]'); if (!btn) return;
    const panel = document.getElementById(btn.getAttribute('aria-controls'));
    const open = btn.getAttribute('aria-expanded') === 'true';
    btn.setAttribute('aria-expanded', String(!open));
    if (panel) panel.hidden = open;
  });
  acc?.addEventListener('keydown', e => {
    const btns = $$('button[aria-controls]', acc), i = btns.indexOf(document.activeElement);
    if (i < 0) return;
    const go = { ArrowDown: (i + 1) % btns.length, ArrowUp: (i - 1 + btns.length) % btns.length, Home: 0, End: btns.length - 1 }[e.key];
    if (go !== undefined) { e.preventDefault(); btns[go].focus(); }
  });

  /* Карта само след съгласие */
  const box = $('#map'), loadBtn = $('#loadMap');
  loadBtn?.addEventListener('click', () => {
    const f = document.createElement('iframe');
    f.src = box.dataset.src; f.loading = 'lazy'; f.title = 'Карта: Yaprak Döner Kırcaali, Кърджали';
    f.referrerPolicy = 'no-referrer-when-downgrade'; f.setAttribute('allowfullscreen', '');
    box.replaceChildren(f);
  });
})();
</script>
</body>
</html>