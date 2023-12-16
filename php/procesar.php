<?php
    $ruta = '../bootstrap';
    require_once('encabezado.php');
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];
?>
<header>
    <h1 class="bg-dark text-white text-center pt-5">Datos Recibidos</h1>
</header>
<main>
    <section>
        <h2 class="text-center text-light fs-3">Usuario: <?php echo $usuario; ?></h2>
        <h2 class="text-center text-light fs-3">Contraseña: <?php echo $contra; ?></h2>
    </section>
</main>
<?php
    require_once('pie.php');
?>