<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Uriel Alvarez Valdez- Portafolio</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://use.typekit.net/esz8apu.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
    />
    <link rel="stylesheet" href="css/styles.css" />
    <?php $url = $_SERVER["REQUEST_URI"];
      $urlArray = explode("/",$url);
      $urlSize= sizeof($urlArray) - 1;?>
      <?php if($urlArray[$urlSize] == "portafolio.php"){?>
        <link rel="stylesheet" href="css/portafolio.css">
      <?php }?>
  </head>
  <body>
    <header class="site_header" id="site_header">
      <div class="nav_container">
        <nav class="site_nav" id="site_nav">
          <div class="contenedor" id="contenedor_opciones">
            <div class="inicio" id="inicio">
              <a href="/" id="inicio-bar" class="activo">
                <li>Inicio</li>
              </a>
              <a href="/" id="inicio-uriel">
                <li>Uriel A.</li>
              </a>
              <a href="/">
                <li id="uriel_bar">Uriel A.</li>
              </a>
            </div>
            <div class="opciones">
              <a href="index.php#acerca_de_mi">
                <li>Acerca de mi</li>
              </a>
              <a href="portafolio.php">
                <li>Portafolio</li>
              </a>
              <a href="index.php#contacto">
                <li>Contacto</li>
              </a>
            </div>
            <div class="hamburguer" id="btn_menu_movil">
              <div class="linea1"></div>
              <div class="linea2"></div>
              <div class="linea3"></div>
            </div>
          </div>
        </nav>
      </div>