<?php
    $ruta = 'bootstrap';
    require_once('php/encabezado.php');                      
?>
<header>
    <h1 class="bg-dark text-white text-center fs-3 pt-5">INICIAR SESION</h1>
</header>
<main>
    <section class="d-flex flex-column align-items-center">
        <form action="php/procesar.php" method="post" class="bg-dark text-white w-25 p-3 text-center">
            <fieldset>
                <legend class="text-center text-secondary form-text">Ingrese su mail y contraseña</legend>
                <input type="email" name="usuario" id="usuario" class="form-control">
                <label for="usuario" class="form-label">Email</label>
                <input type="password" name="contra" id="contra" class="form-control">
                <label for="contra" class="form-label">Contraseña</label>
            </fieldset>
            <input type="submit" value="Log In" class="btn btn-outline-light">
        </form>
    </section>
</main>
<?php
    require_once('php/pie.php');
?>