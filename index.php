<?php

include_once("layout.php"); ?>

<!DOCTYPE html>
<html>

<head>
  <?php MostrarCSS(); ?>
  <title>Gym El Chinito</title>
</head>

<body>

  <?php MostrarMenu(); ?>

  <div class="container mt-5">

    <div class="text-center mb-5">
      <h1 class="fw-bold text-dark">Bienvenido al Gym El Chinito</h1>
      <p class="text-muted">
        Sistema de control de ejercicios y registro de actividades físicas.
      </p>
    </div>

    <!-- Sección de imágenes -->
    <div class="row g-4">

      <div class="col-md-3">
        <div class="card shadow">
          <img src="https://images.unsplash.com/photo-1558611848-73f7eb4001a1" class="card-img-top">
          <div class="card-body text-center">
            <h6 class="fw-bold">Pesas</h6>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card shadow">
          <img src="https://images.unsplash.com/photo-1599058917765-a780eda07a3e" class="card-img-top">
          <div class="card-body text-center">
            <h6 class="fw-bold">Cardio</h6>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card shadow">
          <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438" class="card-img-top">
          <div class="card-body text-center">
            <h6 class="fw-bold">Entrenamiento</h6>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card shadow">
          <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773" class="card-img-top">
          <div class="card-body text-center">
            <h6 class="fw-bold">Yoga</h6>
          </div>
        </div>
      </div>

    </div>

    <!-- Texto adicional -->
    <div class="mt-5 p-4 bg-white shadow rounded">
      <h4 class="fw-bold text-dark">¿Como funciona?</h4>
      <p class="text-muted">
        Este sistema te permitira registrar ejercicios realizados por personas,
        podras controlar el monto de cada sesión de ejercicios y llevar un historial detallado.
      </p>
    </div>

  </div>

  <?php MostrarJS(); ?>
</body>

</html>