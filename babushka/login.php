<?php session_start(); ?> 
<!DOCTYPE html> 
<html lang="ru"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- Link Swiper's CSS --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> 
    <!-- Font awesome --> 
    <link rel="stylesheet" href="library/font-awesome/css/font-awesome.min.css"> 
    <!-- Styles --> 
    <link rel="stylesheet" href="styles/pages/glavn.css"> 
    <link rel="stylesheet" href="styles/settings.css"> 
    <title>Новая Жизнь | Главная страница</title> 
</head> 
<body> 
    
    <!-- Шапка сайта --> 
    <header class="header"> 
        <!-- Логотип --> 
        <div class="container"> 
            <a href="glavn.html" class="logo"><img src="images/logo1.png" alt="Логотип"><span class="logo-text">NWS</span></a> 
        <!-- Меню навигации --> 
        <nav> 
            <ul> 
                <li><a href="#" class="search"><i class="fa fa-search"></i> Поиск</a></li>  
                <li><a href="register.php" class="register"><i class="fa fa-user-plus"></i> Регистрация</a></li>  
                <li><a href="profile.php" class="profile"><i class="fa fa-user"></i> Личный кабинет</a></li>  
                <li><a href="#" class="add"><i class="fa fa-plus-circle"></i> Добавить</a></li>  
                <li><a href="#" class="reviews"><i class="fa fa-comments"></i> Отзывы</a></li> 
                <?php  
                    if (array_key_exists('token', $_SESSION)){ 
                        echo "<li><a href='#' class='reviews'>Выход</a></li>"; 
                    } 
                    ?> 
            </ul> 
        </nav> 
    </div> 
    </header> 
 
    <!-- Основной контент --> 
    <main> 
        <!-- Здесь будет основное содержимое страницы --> 
        <section class="hero"> 
            <div class="container"> 
                <div class="swiper mySwiper"> 
                    <div class="swiper-wrapper"> 
                      <div class="swiper-slide"><img src="images/img/lev.jpg"> 
                        <small>Пума</small>  
                        <p>Хищник рода Пумы семейства кошачьих. Обитает в Северной и Южной Америке..</p> 
                        <a href="#">Подробнее</a> 
                    </div> 
                    <div class="swiper-slide"><img src="images/img/lev.jpg"> 
                        <small>Пума</small>  
                        <p>Хищник рода Пумы семейства кошачьих. Обитает в Северной и Южной Америке.</p> 
                        <a href="#">Подробнее</a> 
                    </div> 
                    <div class="swiper-slide"><img src="images/img/lev.jpg"> 
                        <small>Пума</small>  
                        <p>Хищник рода Пумы семейства кошачьих. Обитает в Северной и Южной Америке.</p> 
                        <a href="#">Подробнее</a> 
                    </div> 
                    <div class="swiper-slide"><img src="images/img/lev.jpg"> 
                        <small>Пума</small>  
                        <p>Хищник рода Пумы семейства кошачьих. Обитает в Северной и Южной Америке.</p> 
                        <a href="#">Подробнее</a> 
                    </div> 
                    <div class="swiper-slide"><img src="images/img/lev.jpg"> 
                        <small>Пума</small>  
                        <p>Хищник рода Пумы семейства кошачьих. Обитает в Северной и Южной Америке.</p> 
                        <a href="#">Подробнее</a> 
                    </div> 
                    <div class="swiper-slide"><img src="images/img/lev.jpg"> 
                        <small>Пума</small>  
                        <p>Хищник рода Пумы семейства кошачьих. Обитает в Северной и Южной Америке.</p> 
                        <a href="#">Подробнее</a> 
                    </div> 
                    <div class="swiper-slide"><img src="images/img/lev.jpg"> 
                        <small>Пума</small>  
                        <p>Хищник рода Пумы семейства кошачьих. Обитает в Северной и Южной Америке.</p>