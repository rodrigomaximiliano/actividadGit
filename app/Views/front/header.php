<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom-style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontawesome/css/fontawesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontawesome/css/solid.css">
</head>
<body>

<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<!-- Header-NavBar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url('/'); ?>"><img src="assets/images/Logo.png" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if ($perfil == 1): ?>
      <div class="btn btn-secondary active btnUser btn-sm">
        <a href="">Admin: <?php echo $nombre; ?></a>
      </div>
    <?php elseif ($perfil == 2): ?>
      <div class="btn btn-info active btnUser btn-sm">
        <a href="">Cliente: <?php echo $nombre; ?></a>
      </div>
    <?php endif; ?>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active"><a class="nav-link" href="<?= base_url('/'); ?>">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('nosotros'); ?>">Somos</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('acerca'); ?>">Acerca de</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cursos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Desarrollo web</a></li>
            <li><a class="dropdown-item" href="#">Data science</a></li>
            <li><a class="dropdown-item" href="#">Python</a></li>
          </ul>
        </li>
        <?php if ($perfil == 1): ?>
          <!-- Mostrar elementos para el Administrador -->
          <li class="nav-item"><a class="nav-link" href="<?= base_url('administrar_usuarios'); ?>">Adm Usuarios</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('configuracion'); ?>">Configuración</a></li>
        <?php endif; ?>

        <?php if ($perfil): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
          </li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('registro'); ?>">Registrarse</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('login'); ?>">Login</a></li>
        <?php endif; ?>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
<!-- End Header-NavBar -->
</body>
</html>
