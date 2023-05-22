<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Registro de Insumos Anuales</title>
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
        <br>
        <h1 class="text-center">Registro de Insumos</h1>
        <br>
        <div class="row justify-content-center">
            <form action="/tareas/parcial/controladores/insumos/guardar.php" method="POST" >
            <div class="row mb-3">
                    <div class="col">
                        <label for="insu_cod">Codigo del Insumo</label>
                        <input type="number" name="insu_cod" id="insu" class="form-control" required>
                    </div>
                </div>
            <div class="row mb-3">
                    <div class="col">
                        <label for="insu_nom">Nombre del Insumo</label>
                        <input type="text" name="insu_nom" id="insu" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="insu_marca">Marca del Insumo</label>
                        <input type="text" name="insu_marca" id="insu" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="insu_prov">Nombre del Proveedor</label>
                        <input type="text" name="insu_prv" id="insu" class="form-control" min="10000000" max="99999999" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="insu_cant">Cantidad en Existencia</label>
                        <input type="number" name="insu_cant" id="insu" class="form-control" min="1" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="insu_prec">Precio Unitario del Insumo</label>
                        <input type="number" name="insu_prec" id="insu" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>