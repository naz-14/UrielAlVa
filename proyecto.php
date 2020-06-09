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
  $proyects = array (
    "manage" => array(
      "titulo"=> "Manage Landing Page",
      "subtitulo" => "Pagina estatica con slider",
      "imagen" => "img/manage.png",
      "descripcion" => "Este proyecto fue tomado desde La pagina FrontendMentor.com. Lo hice sin tener el archivo del proyecto las medidas requeridas en esté fueron 367px para móvil y 1440px para escritorio.",
      "descripcionDos" => "Las tecnologías utilizadas en este proyecto fueron Java Script Vanilla, Css(Sass), Y HTML5, se uso también la librería Swiper para el funcionamiento del slider",
      "git" => "https://github.com/naz-14/manageLandingPage",
      "web" => "https://wizardly-stonebraker-2667ef.netlify.app/"
    ),
    "pitscript" => array(
      "titulo"=> "Pitscript",
      "subtitulo" => "Pagina de desarrollo Web",
      "imagen" => "img/pit.png",
      "descripcion" => "PitScript es un proyecto, en el cual estoy trabajando aun con mi novia, ella realizo el diseño y yo lo programe, la pagina tiene medidas adaptadas a la mayoría de dispositivos(PC, iPad y Móvil)",
      "descripcionDos" => "Las tecnologías utilizadas son HTML5, CSS3 Y Vanilla JavaScript, para hacer las diagonales en cada sección se hicieron cajas con bordes de diferentes tamaños, se considero hacer las diagonales con skew pero no cumplía con los requerimientos necesarios para el proyecto.<br>
      <small>(El proyecto no esta disponible en github ya que es privado)</small>",
      "git" => "",
      "web" => "https://naughty-goodall-88d25c.netlify.app/"
    ),
    "slider" => array(
      "titulo" => "Slider Con JavaScript Vanilla",
      "subtitulo" => "",
      "imagen" => "img/slider.png",
      "descripcion" => "Este proyecto fue tomado desde FrontendMentor.io. El enfoque de este proyecto es únicamente desarrollar un slider con botones, los requerimientos de este proyecto eran únicamente manejar dos elementos con el slider, sin embargo decidí hacer un código desde cero el cual puede ser completamente reutilizable y escalable siempre y cuando se mantenga la estructura diseñada por mi, el frontend también lo desarrolle con solo los archivos png del diseño  respetando las dimensiones 367px móvil y 1440px escritorio",
      "descripcionDos" => "Las tecnologías utilizadas fueron HTML5 Css3 Y Vanilla Java Script",
      "git" => "https://github.com/naz-14/mentor_quotes",
      "web" => "https://affectionate-hermann-99b382.netlify.app/"
    ),
    "listings" => array(
      "titulo" => "Job Listings",
      "subtitulo" => " con Filtro por tag en Vanilla JS",
      "imagen" => "img/joblistings.png",
      "descripcion" => "Este proyecto ha sido el que mas me ha costado desarrollar, el proyecto fue tomado desde frontendmentor.io, y el objetivo era solo hacer la parte de frontend, sin embargo sentí la curiosidad de llevar acabo el desarrollo de un filtro de contenidos por tag, en la pagina cada elemento tiene sus tags correspondientes y el objetivo era poder filtrar los contenidos dependiendo el tag que presiones.",
      "descripcionDos"=> "Este proyecto fue desarrollado en la parte de frontend con HTML5 CSS3(SASS) y Javascript Vanilla, La pagina al tener muchos elementos por mostrar en el index, fue desarrollada con php para consumir un archivo json y que el contenido se muestre directamente desde esa fuente según los elementos que estén registrados ahí. El desarrollo para los filtros fue hecho desde cero para practicar mi conocimiento en el desarrollo de aplicaciones con JavaScript",
      "git" => "https://github.com/naz-14/JobListingsWithFilterOnVanillaJS",
      "web" => "https://joblistingsuav.000webhostapp.com/"
    ),
    "webcamp" => array(
      "titulo" => "GdlWebCamp",
      "subtitulo" => "Pagina de venta de boletos para evento",
      "imagen" => "img/gdlwebcamp.png",
      "descripcion" => "Este proyecto aun no esta concluido ya que es bastante grande, fue tomado de un curso de Udemy y el objetivo final es desarrollar una pagina para un evento, en la pagina se podrán adquirir los boletos dependiendo los días que quieras ingresar al evento y asi mismo podrás ingresar con tu usuario para poder revisar el registro de tus compras",
      "descripcionDos" => "Las tecnologías usadas aqui, son, JavaScript para el frontend y partes del backend, PHP para consumir la base de datos, Css, HTML y la base de datos esta hecha en MySQL",
      "git" => "",
      "web" => ""
    )
  );
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
          
          <div class="btn-git">
            <a href="<?php echo $proyects[$proyecto]["git"]; ?>" target="_blank">Git</a>
          </div>
          
          <div class="btn-sitio">
            <a href="<?php echo $proyects[$proyecto]["web"]; ?>" target="_blank">Página Online</a>
          </div>
        </div>
      </div>
    </div>
</footer>
</body>
</html>