<?php

include_once("../Models/EjercicioModel.php");

if (isset($_POST["btnRegistrar"])) {
    $Identificacion = trim($_POST["Identificacion"]);
    $Monto = $_POST["Monto"];
    $TipoEjercicio = $_POST["TipoEjercicio"];
    $Fecha = date("Y-m-d H:i:s");

    // Validaciones básicas
    if (empty($Identificacion) || empty($Monto) || empty($TipoEjercicio)) {
        header("Location: ../Views/vEjercicio/registro.php?error=campos");
        exit();
    }

    if (strlen($Identificacion) < 5) {
        header("Location: ../Views/vEjercicio/registro.php?error=identificacion");
        exit();
    }

    if ($Monto <= 0) {
        header("Location: ../Views/vEjercicio/registro.php?error=monto");
        exit();
    }

    // Validación máximo 2 tipos
    $cantidad = ContarTiposPersonaModel($Identificacion);

    if ($cantidad >= 2) {
        header("Location: ../Views/vEjercicio/registro.php?error=limite");
        exit();
    }

    RegistrarEjercicioModel($Identificacion, $Fecha, $Monto, $TipoEjercicio);
    header("Location: ../Views/vEjercicio/consultar.php?success=ok");
    exit();
}
