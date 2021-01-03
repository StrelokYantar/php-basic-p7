<?php
use \DateTime;

require__DIR__.'/vendor/autoload.php';

$errors = [];

if ($_POST) {
    $minLength = 3;
    $maxLength = 10;

    if (empty($_POST['login'])) {
        // le champs est-il vide ?
        $errors['login'] = 'merci de renseigner ce champs';
    } elseif (strlen($_POST['login']) < 3 || strlen($_POST['login']) >10) {
        // la longueur du login est-elle hors des limites ?
        $errors




    }
}