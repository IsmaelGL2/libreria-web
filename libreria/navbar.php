<?php
$current = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    
    <a class="navbar-brand fw-bold" href="index.php">📚 Librería</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menuNavbar">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link <?= ($current == 'index.php') ? 'active fw-bold text-primary' : '' ?>" href="index.php">
            Inicio
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($current == 'autores.php') ? 'active fw-bold text-primary' : '' ?>" href="autores.php">
            Autores
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($current == 'contacto.php') ? 'active fw-bold text-primary' : '' ?>" href="contacto.php">
            Contacto
          </a>
        </li>

      </ul>
    </div>

  </div>
</nav>
