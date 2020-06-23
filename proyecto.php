<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <?php $proyecto= $_GET["proyecto"]; ?>
  <link rel="stylesheet" href="css/proyecto.css">
  <?php 
 
  $data = file_get_contents("src/proyectos.json");
  $proyects = json_decode($data, true);
?>
  <title>Proyecto-<?php echo $proyects[$proyecto]["titulo"]; ?></title>
</head>
<body>
  <div class="site_nav">
    <div class="contenedor">
      <div class="contenedor-volver">
        <a href="index.php#portafolio"><i class="fas fa-chevron-left"></i> Principal</a>
      </div>
      <div class="contenedor-proyectos">
        <a href="portafolio.php">Proyectos <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
<section class="proyecto">
    <div class="grid-izquierdo">
      <div class="contenedor">
        <div class="contenedor-imagen">
          <a href="<?php echo $proyects[$proyecto]["web"]; ?>" target="_blank">
            <img src="<?php echo $proyects[$proyecto]["imagen"]; ?>" alt="">
          </a>
          <div class="botones">
            <?php if(!empty($proyects[$proyecto]["git"])){?>
              <div class="btn-git">
                <a href="<?php echo $proyects[$proyecto]["git"]; ?>" target="_blank">Git</a>
              </div>            
            <?php }?>
            <?php if(!empty($proyects[$proyecto]["web"])){?>
              <div class="btn-sitio">
                <a href="<?php echo $proyects[$proyecto]["web"]; ?>" target="_blank">Pagina Online</a>
              </div>
            <?php }?>
          </div>
        </div>
        <div class="contenedor-texto-principal">
          <h1><?php echo $proyects[$proyecto]["titulo"]; ?></h1>
          <p><?php echo $proyects[$proyecto]["subtitulo"];?></p>
        </div>
      </div>
    </div>
    <div class="contenedor-descripcion">
      <div class="contenedor">
        <p><?php echo $proyects[$proyecto]["descripcion"]?></p>
        <p><?php echo $proyects[$proyecto]["descripcionDos"]?></p>
      </div>
    </div>
</section>
<footer>
  <div class="contenedor-segunda-descripcion">
      <div class="contenedor">
      <div class="botones">
            <?php if(!empty($proyects[$proyecto]["git"])){?>
              <div class="btn-git">
                <a href="<?php echo $proyects[$proyecto]["git"]; ?>" target="_blank">Git</a>
              </div>            
            <?php }?>
            <?php if(!empty($proyects[$proyecto]["web"])){?>
              <div class="btn-sitio">
                <a href="<?php echo $proyects[$proyecto]["web"]; ?>" target="_blank">Pagina Online</a>
              </div>
            <?php }?>
          </div>
      </div>
    </div>
</footer>
</body>
</html>