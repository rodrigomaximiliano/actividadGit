<section>
<div class="jumbotron jumbotron-fluid jumbo-bg-3">
  <div class="container">
    <h1 class="jumbo-title">Registrarse</h1>
  </div>
</div>
  </section>
    <!-- Agrega aquí tu formulario de registro -->
    <section class="container my-5">
      <div class="row justify-content-center">
        <div class="col-md-6 ">
          <div class="card shadow">
            <div class="card-body">
              <h5 class="card-title text-center mb-4">Registro de Usuario</h5>
              <form>
              
    <div class="form-group">
			<label for="apellido" class="text-primary font-weight-bold py-2">Ingrese su apellido</label>
			<input type="text" name="apellido" id="apelldio" class="form-control" placeholder="Ingrese su apellido" autofocus="autofocus" >
		</div>

		<div class="form-group">
			<label for="nombre" class="text-primary font-weight-bold py-2">Ingrese su nombre</label>
			<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre" autofocus="autofocus" >
		</div>

		<div class="form-group">
			<label for="email" class="text-primary font-weight-bold py-2">Ingrese su email</label>
			<input type="email" name="email" id="email" class="form-control" placeholder="Ingrese su email" autofocus="autofocus" >
		</div>

		<div class="form-group">
			<label for="telefono" class="text-primary font-weight-bold py-2">Ingrese su teléfono</label>
			<input type="number" name="telefono" id="telefono" class="form-control" placeholder="Ingrese su telefono" autofocus="autofocus"  >
		</div>

		<div class="form-group">
			<label for="password" class="text-primary font-weight-bold py-2">Password</label>
			<input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su contraseña" autofocus="autofocus"  >
		</div>

		<div class="form-group">
			<label for="passconf" class="text-primary font-weight-bold py-2">Confirmar Password</label>
			<input type="password" name="passconf" id="passconf" class="form-control" placeholder="Repita su contraseña" autofocus="autofocus"  >
		</div>
                <button type="submit" class="btn btn-primary btn-block my-2">Registrarse</button>
              </form>
            </div>
            <div class="card-footer text-muted text-center">
              ¿Ya tienes una cuenta? <a href="<?= base_url('login');?>">Iniciar sesión</a>
            </div>
          </div>
        </div>
      </div>
    </section>