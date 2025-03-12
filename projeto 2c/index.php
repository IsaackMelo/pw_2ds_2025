<?php

#Cabeçalho
include 'header.php';

$pagina = $_GET['aaa'];

switch ($pagina) {

    case 'home': include 'View/home.php'; break;
    case 'contatos': include 'View/contacts.php'; break;
    case 'institucional': include 'View/institutional.php'; break;
    case 'sobre nós': include 'View/aboutus.php'; break;
    default: include 'View/home.php';
    break;
}

#Rodapé
include 'footer.php';