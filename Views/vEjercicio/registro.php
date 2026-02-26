<?php

include_once("../../layout.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <?php MostrarCSS(); ?>
    <title>Registrar Ejercicio</title>
</head>

<body>

    <?php MostrarMenu(); ?>

    <div class="container mt-5">

        <div class="card shadow-lg">
            <div class="card-header bg-dark text-white text-center">
                <h4 class="mb-0">Registrar Ejercicio</h4>
            </div>

            <div class="card-body">

                <?php
                if (isset($_GET["error"])) {
                    echo '<div class="alert alert-danger">Error en los datos ingresados.</div>';
                }
                ?>

                <form action="/Pagina%20Caso%20de%20Estudio%20%231/Caso1_AmbienteWeb/Controllers/EjercicioController.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label fw-bold">Identificación</label>
                        <input type="text" name="Identificacion" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Monto</label>
                        <input type="number" step="0.01" name="Monto" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Tipo de Ejercicio</label>
                        <select name="TipoEjercicio" class="form-select" required>
                            <option value="">Seleccione...</option>
                            <option value="1">Cardio</option>
                            <option value="2">Pesas</option>
                            <option value="3">Yoga</option>
                        </select>
                    </div>

                    <div class="d-grid">
                        <button type="submit" name="btnRegistrar" class="btn btn-success">
                            Registrar
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>

    <?php MostrarJS(); ?>
</body>

</html>