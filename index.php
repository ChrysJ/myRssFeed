<?php
if (empty($_COOKIE['article']) && (empty($_COOKIE['categorie']))) {
    header('location:http://myrssfeed.localhost/optionsfluxactualites');
} else {
    header('location:http://myrssfeed.localhost/fluxactualites');
}
