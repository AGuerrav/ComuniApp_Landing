<?php
require_once __DIR__ . "/Config/conexion.php";
require_once __DIR__ . "/Controlador/ComunidadController.php";
$comunidadController = new ComunidadController();
$comunidades = $comunidadController->listar();
?>
<?php include __DIR__ . "/Vistas/components/header.php"; ?>
<?php include __DIR__ . "/Vistas/components/nav.php"; ?>

<main>
  <?php include __DIR__ . "/Vistas/components/section-hero.php"; ?>
  <?php include __DIR__ . "/Vistas/components/section-problema.php"; ?>
  <?php include __DIR__ . "/Vistas/components/section-solucion.php"; ?>

  <?php
    include __DIR__ . "/Vistas/components/section-comunidad.php";
  ?>

  <?php include __DIR__ . "/Vistas/components/section-contacto.php"; ?>
</main>

<?php include __DIR__ . "/Vistas/components/footer.php"; ?>
