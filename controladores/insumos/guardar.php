<?php

require '../../modelos/insumos.php';


try {
    $insumos = new insumos($_POST);
    $resultado = $insumos->guardar();
    $error = "No se guardó correctamente";
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2){
    $error = $e2->getMessage();
}

// if($resultado){
//     echo "Guardado exitosamente";
// }else{
//     echo "Ocurrió un error: $error";
// }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Insumos Adquiridos</title>
    <link rel="shortcut icon" href="images/divisa.png">
</head>
<style>
    body {
	background-image: url(images/internet.jpeg);
	background-size: full;
	background-attachment: fixed;
    font-family: arial bold;
    font-size: x-large;
}

.header {
  background-image: url(images/ciberdefensa.jpg);
  background-size: cover;
  margin: 0;
  padding: 1px;
  text-align: center;
  color: gold;
  font-family: 'arial';
  font-size: 60px;
  transition-duration: 5s;
}

</style>
<body>
<div class="header">
	<center><h1> COMANDO DE INFORMATICA Y TECNOLOGIA</h1></center>
	<center><p>Oficina de Logistica</p></center>
</div> 
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php if($resultado): ?>
                    <div class="alert alert-success" role="alert">
                        Guardado exitosamente!
                    </div>
                <?php else :?>
                    <div class="alert alert-danger" role="alert">
                        Ocurrió un error: <?= $error ?>
                    </div>
                <?php endif ?>
              
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <a href="/tareas/parcial/vistas/insumos/index.php" class="btn btn-info">Volver al formulario</a>
            </div>
        </div>
    </div>
</body>
</html>

