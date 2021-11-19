>

<?php 
    $ID = $datos[0]['ID'];
    $tituloPost = $datos[0]['tituloPost'];
    $post = $datos[0]['post'];
?>


<div class="container" style="margin-top: 20px;">
<div class="mx-auto" style="width: 800px;">
        <form action="<?php echo base_url(); ?>/blogControllers/editPost" method="post" style="background-color:#E4DFE9;">
        <input type="hidden" name="ID" id="ID" value="<?php echo $ID ?>">
            <div class="mb-3">
                <label for="titulo" class="form-label" >Titulo del post</label>
                <input type="text" class="form-control" name="tituloPost" value='<?php echo $tituloPost ?>'>
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="post" rows="3"><?php echo $post ?></textarea>
            </div>
            <center>
                <input class="btn btn-success" type='submit' value='Guardar'>
                <button type="button" class="btn btn-danger"><a class="btn-danger" style="text-decoration: none;" href="<?php echo base_url(); ?>/">Volver</a></button>
            </center>
            </div>
        </form>
