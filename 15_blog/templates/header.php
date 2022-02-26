<?php
   include_once("helpers/url.php");
   include_once("data/posts_data.php");
   include_once("data/categories_data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Blog Codar</title>
   <!-- ESTILOS DO PROJETO: -->
   <link rel="stylesheet" href="<?php $BASE_URL ?>css/reset.css">
   <link rel="stylesheet" href="<?php $BASE_URL ?>css/styles.css">
   <!-- GOOGLE FONTS: -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
   <header>
      <a href="<?php $BASE_URL ?>index.php" id="logo">
         <img src="<?php $BASE_URL ?>img/logo.svg" alt="Blog Codar">
      </a>
      <nav>
         <ul id="navbar">
            <li>
               <a href="<?php $BASE_URL ?>index.php" class="nav-link">HOME</a>
            </li>
            <li>
               <a href="<?php $BASE_URL ?>categories.php" class="nav-link">CATEGORIAS</a>
            </li>
            <li>
               <a href="<?php $BASE_URL ?>about.php" class="nav-link">SOBRE</a>
            </li>
            <li>
               <a href="<?php $BASE_URL ?>contact.php" class="nav-link">CONTATO</a>
            </li>
         </ul>
      </nav>
   </header>