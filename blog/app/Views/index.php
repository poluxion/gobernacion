<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <center>
      <h1 id="titulo" class="display-4 fst-italic">BIENVENIDO AL BLOG NUMERO 1 SOBRE INFORMATICA!</h1>
      <p class="lead my-3">Aquí podrás encontrar información de todas las novedades tecnologicas de tu interes en el mundo y debatir con otros internautas sobre tus temas favoritos!</p>
    </center>
  </div>
  </div>
  <input type="button" id="boton" value="cambiar">
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
              <?php if (isset($_SESSION['logueado'])) { ?>
                <div class="container">
                  <div class="row">
                    <div class="col-10">
                      <a href="<?php echo base_url() . '/obtenerPost/' . $blog->ID ?>" style="margin-left: 20px;" name="editarPost" class="editarPost">Editar</a>
                    </div>
                    <div class="col-1">
                      <a href="<?php echo base_url() . '/blogControllers/htmltoPDF/' . $blog->ID ?>" style="margin-left: 20px;" name="editarPost" class="editarPost">PDF</a>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>

    <div id="userV"></div>

    <div class="container" style="margin-top: 30px;">

      <?php foreach ($dot as $usuario) { ?>

        <a usuario="<?php echo $usuario['ID'] ?>" id="profileBtn" class="btn btn-primary"><?php echo $usuario['usuario'] ?></a>

      <?php } ?>

    </div>


    <div class="container" style="margin-top: 30px;">
      <table class="table table-dark table-striped">
        <thead>
          <td>usuario</td>
          <td>nombre</td>
          <td>password</td>
          <td>Correo</td>

        </thead>
        <tbody id="td2">


        </tbody>
      </table>
    </div>
  
  
    <div id="respuesta"></div>
      <input type="number" name="numero2" id="numero2" required>
      <input type="button" id="enviar1" value="Enviar" >
    </body>

    </html>

  </tbody>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</main>