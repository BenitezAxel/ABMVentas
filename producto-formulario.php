<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <?php 
    include_once("menu.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 py-3">
                <h3>Productos</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="producto-listado.php"class="btn btn-primary mr-2">Listado</a>
                <a href="producto-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
                <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
                <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="txtNombre">Nombre: </label>
                <input type="text" required class="form-control" id="txtNombre" name="txtNombre" value="">
            </div>
            <div class="col-6 form-group">
                <label for="txtNombre">Tipo de producto: </label>
                <select name="lstTipoProducto" id="lstTipoProducto" class="form-control">
                <option value disabled selected>Seleccionar</option>
                <option value="1">Electrodomésticos</option>
                <option value="3">Jardineria</option>
                <option value="39">Perifericos PC</option>
                <option value="40">Oficina</option>
                </select>
            </div>
            <div class="col-6 form-group">
                <label for="txtCantidad">Cantidad: </label>
                <input type="number" required class="form-control" name="txtCantidad" id="txtCantidad" value=>
            </div>
            <div class="col-6 form-group">
                <label for="txtPrecio">Precio: </label>
                <input type="text" required class="form-control" name="txtPrecio" id="txtPrecio" value="0">
            </div>
            <div class="col-6 form-group">
                <label for="txtCorreo">Descripción: </label>
                <input type="email" required class="form-control" id="txtCorreo" name="txtCorreo" value="">
            </div>
        </div>
        
    </div>
    <?php 
    include_once("footer.php");
    ?>

</body>
</html>