<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>POSTS</title>
</head>

<body>
<div class="container" style="margin-top: 20px;">
<div class="mx-auto" style="width: 800px;">
        <form action="<?php echo base_url(); ?>/blogControllers/registerPost" method="post" style="background-color:#E4DFE9;">
            <div class="mb-3">
                <label for="tituloPost" class="form-label" >Titulo del post</label>
                <input type="text" class="form-control" name="tituloPost">
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="post" rows="3" placeholder="Ingresa aquí tu post, max 300 caracteres."></textarea>
            </div>
            <center>
                <input class="btn btn-success" type='submit' value='Guardar'>
                <button type="button" class="btn btn-danger"><a class="btn-danger" style="text-decoration: none;" href="<?php echo base_url(); ?>/">Volver</a></button>
            </center>
            </div>
        </form>
</body>
</html>