<?php include "includes/templates/header.php"?>
</header>
<?php 
  $proyects = array (
    "manage" => array(
      "titulo"=> "Manage Landing Page",
      "imagen" => "images/manage-completa.png",
      "descripcion" => "Este proyecto fue creado"
    ),
    "pitscript" => array(
      "titulo"=> "Pitscript",
      "imagen" => "pitscript-completa.png",
      "descripcion" => "Este es pitscript"
    ),
  );
?>
<section class="proyecto">
  <div class="contenedor">
    <div class="contendor-imagen">
      <img src="<?php echo $proyects[$proyecto]["imagen"]; ?>" alt="">
    </div>
    <div class="contenedor-descripcion">
      <h1><?php echo $proyects[$proyecto]["titulo"] ?></h1>
      <p><?php echo $proyects[$proyecto]["descripcion"]?></p>
    </div>
  </div>
</section>


<?php include "includes/templates/footer.php";?>