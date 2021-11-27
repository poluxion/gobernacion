<?php if (isset($_SESSION['logueado'])) { ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="container">
                    <center style="border: gray 2px solid;">
                        <p>Ingresa aquí para modificar tu perfil.</p>
                        <a href="<?php echo base_url() . '/obtenerUsuario/'  ?>" class="btn btn-primary">Mi perfil</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="container">
                    <center style="border: gray 2px solid; margin-top: 10px;">
                        <p>Ingresa aquí para todo lo relacionado con reportes</p>
                        <a href="<?php echo base_url() . '/crearReporte'  ?>" class="btn btn-primary">Reportes</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="container">
                    <center style="border: gray 2px solid; margin-top: 10px;">
                        <p>Ingresa aquí para crear una frecuencia</p>
                        <a href="<?php echo base_url() . '/crearFrecuencias'  ?>" class="btn btn-primary">Frecuencias</a>
                </div>
            </div>
        </div>
    </div>
    <center style="margin-top: 20px;">
        <a href="<?php echo base_url() . '/mainControllers/salir/'  ?>" class="btn btn-secondary">Logout</a>
    </center>
<?php } else { ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="container">
                    <center style="border: gray 2px solid;">
                        <p>Ingresa aquí si ya tienes una cuenta.</p>
                        <a href="<?php echo base_url(); ?>/userLogin" class="btn btn-secondary">Ingresar</a>
                    </center>
                </div>
            </div>
            <div class="col">
                <div class="col">
                    <div class="container">
                        <center style="border: blue 2px solid;">
                            <p>Ingresa aquí para registrarte.</p>
                            <a href="<?php echo base_url(); ?>/registerUser" class="btn btn-primary">Registrar</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>