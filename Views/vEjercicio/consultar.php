<?php

include_once("../../layout.php");
include_once("../../Models/EjercicioModel.php");
$resultado = ConsultarEjerciciosModel();

?>

<!DOCTYPE html>
<html>
<head>
<?php MostrarCSS(); ?>
<title>Consultar Ejercicios</title>
</head>
<body>

<?php MostrarMenu(); ?>

<div class="container mt-5">

    <div class="card shadow-lg">
        <div class="card-header bg-dark text-white text-center">
            <h4 class="mb-0">Ejercicios Registrados</h4>
        </div>

        <div class="card-body">

            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Fecha</th>
                        <th>Monto</th>
                        <th>Tipo</th>
                        <th>Identificación</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($fila = mysqli_fetch_assoc($resultado)) { ?>
                        <tr>
                            <td><?php echo $fila["Fecha"]; ?></td>
                            <td>₡ <?php echo $fila["Monto"]; ?></td>
                            <td><?php echo $fila["DescripcionTipoEjercicio"]; ?></td>
                            <td><?php echo $fila["Identificacion"]; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>

</div>

<?php MostrarJS(); ?>
</body>
</html>