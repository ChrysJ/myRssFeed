<main>
    <div class="herobanner">
        <div class="title-herobanner">
            <h1>retro jv</h1>
            <p>Votre actu JV personnalisé</p>
        </div>
        <div class="scroll-bottom">
            <a href="#arrowdown">
                <i id="arrowdown" class="fa-solid fa-arrow-down"></i>
            </a>
        </div>
    </div>
    <!-- Premiére section catégorie -->
    <div id="categorie" class=<?= ($toggleValue) ? "all-categories-dark" : "all-categories-light" ?>>
        <section class="catégorie">
            <div class="title-section">
                <!-- Variable catégorie -->
                <h3><?php dislayMainTitleArticle($valueCookie[0]) ?></h3>
                <span><a class=<?= ($toggleValue) ? "dark-text" : "light-text" ?> href=<?= "categorieactualite?categories=$valueCookie[0]" ?>>voir tout</a></span>
            </div>
            <div class="all-articles">
                <?php
                displayArticleHome($valueCookie[0], $numberArticle);
                ?>
            </div>
        </section>
        <!-- Deuxieme section catégorie-->
        <section class="catégorie">
            <div class="title-section">
                <!-- Variable catégorie -->
                <h3><?php dislayMainTitleArticle($valueCookie[1]) ?></h3>
                <span><a class=<?= ($toggleValue) ? "dark-text" : "light-text" ?> href=<?= "categorieactualite?categories=$valueCookie[1]" ?>>voir tout</a></span>
            </div>
            <div class="all-articles">
                <?php
                displayArticleHome($valueCookie[1], $numberArticle);
                ?>
            </div>
        </section>
        <!-- Troisiéme section catégorie -->
        <section class="catégorie">
            <div class="title-section">
                <!-- Variable catégorie -->
                <h3><?php dislayMainTitleArticle($valueCookie[2]) ?></h3>
                <span><a class=<?= ($toggleValue) ? "dark-text" : "light-text" ?> href=<?= "categorieactualite?categories=$valueCookie[2]" ?>>voir tout</a></span>
            </div>
            <div class="all-articles">
                <?php
                displayArticleHome($valueCookie[2], $numberArticle);
                ?>
            </div>
        </section>
    </div>
</main>