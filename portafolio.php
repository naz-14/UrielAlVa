<?php include "includes/templates/header.php";?>
</header>
<?php
$data = file_get_contents("src/proyectos.json");
$proyectos = json_decode($data, true);
$keys = array_keys($proyectos);
?>
<main class="contenedor">
<div class="contenedor_elementos">
  <?php 
  $i =0;
  foreach ($proyectos as $proyecto) { 
    ?>
  <div class="elemento_portafolio">
    <a href="proyecto.php?proyecto=<?php echo $keys[$i];?>">
      <h4><?php echo $proyecto["titulo"]?></h4>
      <div class="img_portafolio">
        <img src="<?php echo $proyecto["imagen"] ?>" alt="" />
      </div>
    </a>
  </div>
  <?php 
  $i++;
} ?>
</div>
</main>

<?php include "includes/templates/footer.php"?>