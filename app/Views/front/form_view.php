<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?= base_url('login') ?>" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="loginEmail" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="loginEmail" name="email" required>
          </div>
          <div class="mb-3">
            <label for="loginPassword" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="loginPassword" name="password" required>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="recordarme" name="recordarme">
            <label class="form-check-label" for="recordarme">
              Recuérdame
            </label>
          </div>
          <div class="mb-3">
            <a href="#" class="link-primary">¿Olvidaste tu contraseña?</a>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-submit">Iniciar Sesión</button>
          <button type="reset" class="btn btn-secondary">Borrar</button>
        </div>

      </form>
      <div class="px-3 pb-3">
        <p class="registro">¿Aún no tienes cuenta? <a href="#" id="abrirRegistro">Registrarme</a></p>
      </div>
    </div>
  </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?= base_url('register') ?>" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel">Registro de Usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="registerNombre" class="form-label">Nombre completo</label>
            <input type="text" class="form-control" id="registerNombre" name="nombre" required>
          </div>
          <div class="mb-3">
            <label for="registerEmail" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="registerEmail" name="email" required>
          </div>
          <div class="mb-3">
            <label for="registerPassword" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="registerPassword" name="password" required>
          </div>
          <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirm_password" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-submit">Registrarse</button>
          <button type="reset" class="btn btn-secondary">Borrar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  // Abrir modal de registro y cerrar login
  document.getElementById('abrirRegistro').addEventListener('click', function(e) {
    e.preventDefault();
    var loginModal = bootstrap.Modal.getInstance(document.getElementById('loginModal'));
    loginModal.hide();

    var registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
    registerModal.show();
  });

  // Validación de contraseña en formulario de registro
  document.querySelector('#registerModal form').addEventListener('submit', function(e) {
    const password = document.getElementById('registerPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    if (password !== confirmPassword) {
      e.preventDefault();
      alert('Las contraseñas no coinciden');
    }
  });
</script>