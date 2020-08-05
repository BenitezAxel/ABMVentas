<?php 
include_once("menu.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3>Listado de tipo de productos</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mb-3">
                <a href="tipoproducto-formulario.php" class="btn btn-primary">Nuevo</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                <tr>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
include_once("footer.php");
?>