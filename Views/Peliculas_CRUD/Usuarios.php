<?php $mostrar_menu = false ?>
<?php
include '../Plantillas/header.php';
?>
<?php $mostrar_menu = false; ?>
<div class="container">
    <div class="row justify-content-center m-5  h-200px">
        <div class="col-md-6">
            <h1 class="text-center">Inicio de Sesión</h1>
            <form action="Usuarios.php" method="POST">
                <div class="mb-3">
                    <label for="usuario" class="form-label mb-3">Usuario</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingrese su nombre de usuario">
                </div>
                <div class="mb-3">
                    <label for="usuario" class="form-label mb-3">Correo:</label>
                    <input type="text" class="form-control" name="correo" id="correo" placeholder="Ingrese Correo Electronico">
                </div>
                <div class="mb-3">
                    <label for="contrasena" class="form-label mb-3">Contraseña</label>
                    <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña">
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%; margin:20px 0 0 0;">Iniciar
                    Sesión</button>
            </form>
            <?php require '../../Controllers/validacione_usuariosController.php';
            if (!empty($mensajes) && in_array("Inicio de sesión exitoso. Redirigiendo...", $mensajes)) { ?>
                <div class="alert mt-4 bg-success">
                    <?php foreach ($mensajes as $mensaje) { ?>
                        <p class="text-light" style="font-size: 20px; font-weight:bold;"><?php echo $mensaje; ?></p>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <div class="alert bg-danger mt-4">
                    <?php foreach ($mensajes as $mensaje) { ?>
                        <p class="text-light" style="font-size: 20px; font-weight:bold;"><?php echo $mensaje; ?></p>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php require_once '../Plantillas/footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>

</body>

</html>