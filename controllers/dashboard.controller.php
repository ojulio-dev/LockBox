<?php

if (!auth()) {

    header('Location: /login');
    exit();

}
echo 'Estou logado ' . auth()->nome;
