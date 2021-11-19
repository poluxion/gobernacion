
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-secondary" style="margin-bottom: 20px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Pa-blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

            <?php if (isset($_SESSION['logueado'])) { ?>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url() . '/obtenerUser/'  ?>">Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>/postRegister">Crear Post</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>/blogControllers/salir">Logout</a>
              </li>

            <?php } else { ?>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/blog">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>/registerUser">Regístrate!</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>/userLogin">Logueate!</a>
              </li>

            <?php } ?>

          </ul>
        </div>
      </div>
    </nav>
  </div>