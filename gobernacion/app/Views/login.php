  <div class="container">   
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
        <center>
          <h1>Login</h1>
          </center>
          <form action="<?php echo base_url(); ?>/mainControllers/login" method="POST" style="background-color: #E5E7E9;">
            <label class="usuario" for= "usuario" > Usuario:</label>
            <input type="text" name="usuario" class="form-control" placeholder="juanita" required>
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="juanita123" class="form-control" required>
            <br>
            <center>
            <button class="btn btn-success">Entrar</button>
            </center>
          </form>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>