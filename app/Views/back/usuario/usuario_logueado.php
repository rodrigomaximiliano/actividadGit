<?php
if ($perfil == 1): ?>
    <!-- perfil de Administrador -->
    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            <h2>Bienvenido, Administrador</h2>
            <img src="<?= base_url('assets/images/images.png'); ?>" alt="Imagen Administrador" class="img-fluid">
            <p>Puedes administrar y configurar el sistema aquí.</p>
            <ul>
                <li>Administrar usuarios</li>
                <li>Configurar opciones del sistema</li>
            </ul>
        </div>
    </div>
<?php elseif ($perfil == 2): ?>
    <!-- perfil de Cliente -->
    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            <h2>Bienvenido</h2>
            
            <p>Explora y disfruta de nuestros servicios.</p>
            <ul>
                <li>Realizar pedidos</li>
                <li>Ver historial de pedidos</li>
            </ul>
        </div>
    </div>
<?php endif; ?>
