<?php

function MostrarCSS()
{
  echo '
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color:#f2f2f2;
        }
        .titulo-principal{
            font-weight:bold;
            font-size:32px;
            letter-spacing:2px;
        }
        .card{
            border:none;
            border-radius:15px;
        }
        .navbar{
            box-shadow:0 2px 10px rgba(0,0,0,0.2);
        }
    </style>
    ';
}

function MostrarJS()
{
  echo '
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    ';
}

function MostrarMenu()
{
  echo '
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand titulo-principal" href="/Pagina%20Caso%20de%20Estudio%20%231/Caso1_AmbienteWeb/index.php">
            🏋️ Gym El Chinito
        </a>

        <div>
          <a class="btn btn-success me-2" href="/Pagina%20Caso%20de%20Estudio%20%231/Caso1_AmbienteWeb/Views/vEjercicio/registro.php">
            Registrar
          </a>
          <a class="btn btn-outline-light" href="/Pagina%20Caso%20de%20Estudio%20%231/Caso1_AmbienteWeb/Views/vEjercicio/consultar.php">
            Consultar
          </a>
        </div>
      </div>
    </nav>
    ';
}
