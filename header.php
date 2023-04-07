<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if (isset($title)): ?>
        <title><?php echo $title; ?></title>
    <?php else: ?>
        <title>Мой сайт</title> <!-- по умолчанию -->
    <?php endif; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src= "https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!--<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js'></script>

</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://www.lispb.ru">ГЛАВНАЯ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://www.lispb.ru/news/">НОВОСТИ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://www.lispb.ru/events/">СОБЫТИЯ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://www.lispb.ru/education/">ОБРАЗОВАНИЕ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://www.lispb.ru/documents/svedenia/">СВЕДЕНИЯ ОБ ОБРАЗОВАТЕЛЬНОЙ ОРГАНИЗАЦИИ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://www.lispb.ru/contacts/">КОНТАКТЫ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php
