<?php 
    $ID = $datos[0]['ID'];
    $tituloPost = $datos[0]['tituloPost'];
    $post = $datos[0]['post'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview</title>
</head>
<body>
<input type="hidden" name="ID" id="ID" value="<?php echo $ID ?>">
    <center>
        <h1><?php echo $tituloPost ?></h1>
    </center>
    <p>
        <center>
        <?php echo $post?>
        </center>
    </p>
</body>
</html>