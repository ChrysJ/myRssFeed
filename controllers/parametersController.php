<?php

require_once __DIR__ . '/../config/config.php';

// DONNÉES RECU EN METHOD POST //
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    // COOKIE DARK AND LIGHT
    $toggle = filter_input(INPUT_POST, 'togglevalue', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY) ?? [];
    if (!empty($toggle)) {
        if ($toggle[0]) {
            $toggleValue = serialize($toggle);
            setcookie(
                'toggle',
                $toggleValue,
                time() + (86400 * 30),
                "/"
            );
        }
    } else if (empty($toggle)) {
        $toggleValue = serialize($toggle);
        setcookie(
            'toggle',
            $toggleValue,
            -1,
            "/"
        );
    }

    // COOKIE NOMBRE D'ARTICLE //
    $nbArticles = filter_input(INPUT_POST, 'nbArticles', FILTER_SANITIZE_NUMBER_INT);
    if (empty($nbArticles)) {
        $error['nbArticles'] = 'Veuillez sélectionner le nombre d\'articles';
    } else {
        if ($nbArticles == 5 || $nbArticles == 8 || $nbArticles == 11) {
            setcookie(
                'article',
                $nbArticles,
                time() + (86400 * 30),
                "/"
            );
        } else {
            $error['nbArticles'] = 'Les données ne sont pas valide';
        }
    }

    //COOKIE CHOIX DE LA CATEGORIE //
    $categorys = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY) ?? [];

    if (empty($categorys)) {
        $error['categories'] = 'Veuillez sélectionner des catégories';
    } else {
        if (count($categorys) != 3) {
            $error['categories'] = 'Veuillez choisir trois catégories';
        } else {
            $valueCookie = serialize($categorys);
            setcookie(
                'categorie',
                $valueCookie,
                time() + (86400 * 30),
                "/"
            );
        }
    }
    if (empty($error)) {
        header('location: fluxactualites');
        exit;
    }
}

include(__DIR__ . '/../views/parameters.php');
