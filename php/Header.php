<?php

if ($titulo == 'Jesus_Bruma'){
   $home_menu ='<a href="index.php" class="activo"><h1>Home</h1></a>';
}else{
    $home_menu ='<a href="index.php" >Home</a>';
}
if ($titulo == 'Sobre mi'){
    $sobremi_menu ='<a href="enconstrucción.php" class="activo"><h1>Sobre mí</h1></a>';
 }else{
     $sobremi_menu ='<a href="enconstrucción.php">Sobre mí</a>';
 }
 if ($titulo == 'Experiencia'){
    $experiencia_menu ='<a href="experiencia.php" class="activo"><h1>Experiencia</h1></a>';
 }else{
     $experiencia_menu ='<a href="experiencia.php">Experiencia</a>';
 }
 if ($titulo == 'Formación'){
    $formacion_menu ='<a href="formacion.php" class="activo"><h1>Formación</h1></a>';
 }else{
     $formacion_menu ='<a href="formacion.php">Formación</a>';
 }
 if ($titulo == 'Portfolio'){
    $portfolio_menu ='<a href="portfolio.php" class="activo"><h1>Portfolio</h1></a>';
 }else{
     $portfolio_menu ='<a href="portfolio.php">Portfolio</a>';
 }
 if ($titulo == 'Contacto'){
    $contacto_menu ='<a href="contacto.php" class="activo"><h1>Contacto</h1></a>';
 }else{
     $contacto_menu ='<a href="contacto.php">Contacto</a>';
 }


echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2526b677d0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/'.$titulo.'.css">
    <link rel="shortcut icon" href="images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>'.$titulo.'</title>
</head>
<body>
    <header>
    <nav>
        <div class="container">
            <input type="checkbox" id="menu" >
            <label for="menu" class="nav_label">
                <i></i>
            </label>
            <div class="nav-menu">
            '.
            $home_menu.$sobremi_menu.$experiencia_menu.$formacion_menu.$portfolio_menu.$contacto_menu
             .'
            </div>
        </div>
    </nav>

    <nav>'.
   $home_menu.$sobremi_menu.$experiencia_menu.$formacion_menu.$portfolio_menu.$contacto_menu
    .'</nav>

        <div class="background-header"> </div>
    </header>'
    
?>