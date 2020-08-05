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
                <h3>Venta</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="ventas-listado.php"class="btn btn-primary mr-2">Listado</a>
                <a href="venta-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
                <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
                <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="txtFecha">Fecha: </label>
                <input type="date" required class="form-control" id="txtFecha" name="txtFecha" value="2020-08-04">
            </div>
            <div class="col-6 form-group">
                <label for="txtFecha">Hora: </label>
                <input type="time" required class="form-control" id="txtHora" name="txtHora" value="01:38">
            </div>
            <div class="col-6 form-group">
                <label for="lstCliente">Cliente: </label>
                <select required class="form-control" id="lstCliente" name="lstCliente" value=""></select>
            </div>
            <div class="col-6 form-group">
                <label for="lstProducto">Producto: </label>
                <select required class="form-control" id="lstProducto" name="lstProducto">
                <option value disabled selected>Seleccionar</option>
                <option value="221">Mouse Genius</option>
                <option value="224">Mouse Gamer</option>
                <option value="225">Auricular</option>
                <option value="227">Mouse</option>
            </select>
            </div>
            <div class="col-6 form-group">
                <label for="txtPrecioUni">Precio unitario: </label>
                <input type="text" required class="form-control" id="txtPrecioUni" name="txtPrecioUni" value="0">
            </div>
            <div class="col-6 form-group">
                <label for="txtCantidad">Cantidad: </label>
                <input type="text" required class="form-control" id="txtCantidad" name="txtCantidad" value="0">
            </div>
            <div class="col-6 form-group">
                <label for="txtTotal">Total: </label>
                <input type="text" required class="form-control" id="txtTotal" name="txtTotal" value="0">
            </div>
        </div>
    </div>
    <?php 
    include_once("footer.php");
    ?>

</body>
</html>