<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <script defer src="https://cdn.jsdelivr.net/npm/darkmode-js@1.3.4/lib/darkmode-js.min.js"></script>
    <script defer src="../public/assets/js/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>
    <!-- Header -->
    <header>
        <!-- Nav -->
        <nav class="navbar">
            <div class="logo">
                <a href="fluxactualites"><span><img src="../../public/assets/img/retro_jv_logo.svg" alt="logo retro jv"></span></a>
            </div>
            <div class="title-actuality title-actuality-desktop">
                <h2>Votre actualités retro jv</h2>
            </div>
            <!-- Settings -->
            <div class="settings">
                <a class="settings-desktop" href="optionsfluxactualites">
                    <i class="fa-solid fa-gears"></i>
                    <span>Options</span>
                </a>
                <div id="burgerMenu">
                    <i class="fa-solid fa-bars  burger"></i>
                    <i class="fa-solid fa-xmark displayCrossMenu cross"></i>
                </div>
            </div>

        </nav>
        <div class="user-actuality categoriesDisplay">

            <!-- Choix users -->
            <div class="categories-choice-desktop ">
                <div class="title-actuality title-actuality-mobile">
                    <h2>Vos actualités retro jv</h2>
                </div>
                <span>
                    <a href=<?= "categorieactualite?categories=$valueCookie[0]" ?>><?php dislayMainTitleArticle($valueCookie[0]) ?></a>
                </span>
                <span>
                    <a href=<?= "categorieactualite?categories=$valueCookie[1]" ?>><?php dislayMainTitleArticle($valueCookie[1]) ?></a>
                </span>
                <span>
                    <a href=<?= "categorieactualite?categories=$valueCookie[2]" ?>><?php dislayMainTitleArticle($valueCookie[2]) ?></a>
                </span>
            </div>
            <a class="settings-mobile" href="optionsfluxactualites">
                <i class="fa-solid fa-gears"></i>
                <span>Options</span>
            </a>
        </div>
    </header>