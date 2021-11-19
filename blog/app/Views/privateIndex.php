<?php var_dump($_SESSION) ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>Pa-blog</title>
</head>

<body>
  <main class="container">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar navbar-dark bg-secondary" style="margin-bottom: 20px;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Pa-blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <?php foreach ($daticos as $usuario) { ?>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo base_url() . '/obtenerUser/' . $usuario->ID ?>">Perfil</a>
                </li>
              <?php } ?>
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>/postRegister">Crear Post</a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>/blogControllers/salir">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
      <center>
        <h1 class="display-4 fst-italic">BIENVENIDO AL BLOG NUMERO 1 SOBRE INFORMATICA!</h1>
        <p class="lead my-3">Aquí podrás encontrar información de todas las novedades tecnologicas de tu interes en el mundo y debatir con otros internautas sobre tus temas favoritos!</p>
      </center>
    </div>
    </div>
    <tbody>
      <?php foreach ($datos as $blog) { ?>
        <div class="row mb-2">
          <div class="mx-auto" style="width: 900px;">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: #EBEDEF;">
              <div class="col p-4 d-flex flex-column position-static" style="background-color: E4DFE9;">
                <div id="titulo" class="titulo">
                  <center>
                    <h3 class="mb-0"><?php echo $blog->tituloPost ?></h3>
                  </center>
                </div>
                <center>
                  <div class="mb-1 text-muted">Post creado: <?php echo $blog->created_at ?></div>

                  <p class="card-text mb-auto" name="post"><?php echo $blog->post ?></p>
                </center>
                <a href="<?php echo base_url() . '/obtenerPost/' . $blog->ID ?>" class="stretched-link" style="margin-left: 20px;" name="editarPost" class="editarPost">Editar</a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </tbody>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </main>
</body>

</html>