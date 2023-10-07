<section>
<div class="jumbotron jumbotron-fluid jumbo-bg-3">
  <div class="container">
    <h1 class="jumbo-title">Registrarse</h1>
  </div>
</div>
  </section>

  <section class="container my-5">
      <div class="row justify-content-center">
        <div class="col-md-6 ">
          <div class="card shadow">
            <div class="card-body">
              <h5 class="card-title text-center mb-4">Registro de Usuario</h5>

      <?php $validation = \Config\Services::validation(); ?>
      <form method="post" action="<?php echo base_url('/enviar-form') ?>">
        <?= csrf_field(); ?>
        <?= csrf_field(); ?>
        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
          <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
        <?php endif ?>
        <?php if (!empty(session()->getFlashdata('success'))) : ?>
          <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
        <?php endif ?>
         
        <div class="form-group">
          <label for="usuario" class="text-primary font-weight-bold py-2">Ingrese su usuario</label>
          <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ingrese su usuario" autofocus="autofocus">
          <?php if ($validation->getError('usuario')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('usuario'); ?>
            </div>
          <?php } ?>
        </div>

        <div class="form-group">
          <label for="nombre" class="text-primary font-weight-bold py-2">Ingrese su nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre" autofocus="autofocus">
          <?php if ($validation->getError('nombre')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('nombre'); ?>
            </div>
          <?php } ?>
        </div>

        <div class="form-group">
          <label for="apellido" class="text-primary font-weight-bold py-2">Ingrese su apellido</label>
          <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese su apellido" autofocus="autofocus">
          <?php if ($validation->getError('apellido')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('apellido'); ?>
            </div>
          <?php } ?>
        </div>

        

        <div class="form-group">
          <label for="email" class="text-primary font-weight-bold py-2">Ingrese su email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese su email" autofocus="autofocus">
          <?php if ($validation->getError('email')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('email'); ?>
            </div>
          <?php } ?>
        </div>

        

        <div class="form-group">
          <label for="password" class="text-primary font-weight-bold py-2">Contraseña</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su contraseña" autofocus="autofocus">
          <?php if ($validation->getError('password')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('password'); ?>
            </div>
          <?php } ?>
        </div>

        <div class="form-group">
          <label for="passconf" class="text-primary font-weight-bold py-2">Confirmar Contraseña</label>
          <input type="password" name="passconf" id="passconf" class="form-control" placeholder="Repita su contraseña" autofocus="autofocus">
        </div>


        <div class="form-group mt-4">
          <input type="submit" value="Registrar" class="btn btn-primary btn-block">
          <input type="reset" value="Cancelar" class="btn btn-secondary btn-block">
        </div>
       
      </form>
    
  
</section>