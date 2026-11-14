<?php
?>
<!DOCTYPE html>
<html lang="bg">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MEBELS - Модерни мебели</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

body{
background:#f8f9fb;
overflow-x:hidden;
}

.navbar{
background:white;
box-shadow:0 5px 20px rgba(0,0,0,.08);
}

.navbar-brand{
font-size:30px;
font-weight:bold;
color:#111;
}

.nav-link{
font-weight:600;
margin-left:15px;
}

.hero{

height:100vh;

background:
linear-gradient(rgba(0,0,0,.45),rgba(0,0,0,.45)),
url("https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=1800&q=80");

background-size:cover;
background-position:center;

display:flex;
align-items:center;

color:white;

}

.hero h1{
font-size:65px;
font-weight:bold;
}

.hero p{
font-size:22px;
margin:25px 0;
}

.hero button{

padding:16px 45px;
font-size:20px;
border-radius:40px;
}

.title{

font-size:45px;
font-weight:bold;
text-align:center;
margin-bottom:50px;

}

.cardFurniture{

background:white;
border-radius:25px;
overflow:hidden;
transition:.4s;
box-shadow:0 15px 40px rgba(0,0,0,.08);

}

.cardFurniture:hover{

transform:translateY(-10px);

}

.cardFurniture img{

width:100%;
height:280px;
object-fit:cover;

}

.cardFurniture h3{

padding-top:20px;

}

.price{

font-size:28px;
font-weight:bold;
color:#0d6efd;

}

.why{

background:#111827;
color:white;

}

.counter{

font-size:60px;
font-weight:bold;

}

footer{

background:#111;
color:white;

}

.social i{

font-size:30px;
margin:10px;
cursor:pointer;
transition:.3s;

}

.social i:hover{

color:#0d6efd;
transform:scale(1.2);

}

.fadeUp{

opacity:0;
transform:translateY(70px);
transition:1s;

}

.fadeUp.show{

opacity:1;
transform:none;

}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg fixed-top">

<div class="container">

<a class="navbar-brand" href="#">MEBELS</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#m">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="m">

<ul class="navbar-nav ms-auto">

<li class="nav-item"><a class="nav-link" href="#">Начало</a></li>
<li class="nav-item"><a class="nav-link" href="#">Каталог</a></li>
<li class="nav-item"><a class="nav-link" href="#">Промоции</a></li>
<li class="nav-item"><a class="nav-link" href="#">Контакти</a></li>

</ul>

</div>

</div>

</nav>

<section class="hero">

<div class="container">

<div class="row">

<div class="col-lg-7">

<h1>Луксозни мебели за модерния дом</h1>

<p>
Стил, качество и комфорт в едно.
Открий новата ни колекция мебели.
</p>

<button class="btn btn-primary btn-lg">
Разгледай каталога
</button>

</div>

</div>

</div>

</section>

<section class="container py-5">

<h2 class="title fadeUp">
Популярни мебели
</h2>

<div class="row g-4">

<div class="col-lg-4 fadeUp">

<div class="cardFurniture">

<img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?auto=format&fit=crop&w=900&q=80">

<div class="p-4">

<h3>Луксозен диван</h3>

<p>
Комфорт и елегантност.
</p>

<div class="price">
899 лв.
</div>

</div>

</div>

</div>

<div class="col-lg-4 fadeUp">

<div class="cardFurniture">

<img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=900&q=80">

<div class="p-4">

<h3>Спалня Premium</h3>

<p>
Модерен дизайн.
</p>

<div class="price">
1299 лв.
</div>

</div>

</div>

</div>

<div class="col-lg-4 fadeUp">

<div class="cardFurniture">

<img src="https://images.unsplash.com/photo-1484154218962-a197022b5858?auto=format&fit=crop&w=900&q=80">

<div class="p-4">

<h3>Кухня Luxury</h3>

<p>
Практичност и стил.
</p>

<div class="price">
2399 лв.
</div>

</div>

</div>

</div>

</div>

</section>

<section class="why py-5">

<div class="container">

<h2 class="title text-white">
Защо да изберете нас?
</h2>

<div class="row text-center">

<div class="col-md-3">

<i class="bi bi-truck fs-1"></i>

<div class="counter" data-target="2500">0</div>

<p>Доставки</p>

</div>

<div class="col-md-3">

<i class="bi bi-house-heart fs-1"></i>

<div class="counter" data-target="1800">0</div>

<p>Доволни клиента</p>

</div>

<div class="col-md-3">

<i class="bi bi-award fs-1"></i>

<div class="counter" data-target="25">0</div>

<p>Години опит</p>

</div>

<div class="col-md-3">

<i class="bi bi-star-fill fs-1"></i>

<div class="counter" data-target="100">0</div>

<p>Качество</p>

</div>

</div>

</div>

</section>

<section class="container py-5 text-center">

<h2 class="title fadeUp">
Абонирай се
</h2>

<div class="row justify-content-center">

<div class="col-lg-6">

<input class="form-control form-control-lg mb-3" placeholder="Вашият Email">

<button class="btn btn-primary btn-lg w-100">
Изпрати
</button>

</div>

</div>

</section>

<footer class="py-5">

<div class="container text-center">

<h3>MEBELS</h3>

<p>© 2025 Всички права запазени.</p>

<div class="social">

<i class="bi bi-facebook"></i>

<i class="bi bi-instagram"></i>

<i class="bi bi-youtube"></i>

<i class="bi bi-tiktok"></i>

</div>

</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

let observer=new IntersectionObserver(entries=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.classList.add("show");

}

})

});

document.querySelectorAll(".fadeUp").forEach(el=>observer.observe(el));

document.querySelectorAll(".counter").forEach(counter=>{

let update=()=>{

let target=+counter.dataset.target;

let current=+counter.innerText;

let inc=target/120;

if(current<target){

counter.innerText=Math.ceil(current+inc);

setTimeout(update,15);

}else{

counter.innerText=target;

}

}

update();

});

</script>

</body>
</html>