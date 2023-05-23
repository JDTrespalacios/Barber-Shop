<h1 class="nombre-pagina">Update Service</h1>
<p class="descripcion-pagina">Modify the form data</p>

<?php
    // include_once __DIR__ . '/../templates/barra.php';
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form class="formulario" method="POST">
    <?php include_once __DIR__ . '/formulario.php'; ?>
    <input type="submit" class="boton" value="Save">
</form>