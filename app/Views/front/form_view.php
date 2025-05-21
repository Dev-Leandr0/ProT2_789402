<!-- Inicio del modal del  login  -->
<div class="modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="loginModalLabel">Iniciar Sesión</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar" id="cerrarModalBtn"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" placeholder="correo@ejemplo.com" aria-label="Correo electrónico">
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" placeholder="Contraseña" aria-label="Contraseña">
          </div>
          <div class="form-options">
            <label>
              <input type="checkbox" id="recordarme"> Recuérdame
            </label>
            <a href="#">¿Olvidaste tu contraseña?</a>
          </div>
          <button type="submit" class="btn-submit">Iniciar sesión</button>
        </form>
        <p class="registro">¿Aún no tienes cuenta? <a href="#" id="abrirRegistro">Registrarme</a></p>
      </div>
    </div>
  </div>
</div>
<!-- Fin del modal Login -->

<!-- ------------------------------------------------ -->

<!-- Inicio del modal Registro -->
<div class="modal" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="registerModalLabel">Crear Cuenta</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="registerEmail">Correo electrónico</label>
            <input type="email" id="registerEmail" placeholder="correo@ejemplo.com" aria-label="Correo electrónico">
          </div>
          <div class="form-group">
            <label for="registerPassword">Contraseña</label>
            <input type="password" id="registerPassword" placeholder="Contraseña" aria-label="Contraseña">
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirmar Contraseña</label>
            <input type="password" id="confirmPassword" placeholder="Confirmar contraseña" aria-label="Confirmar contraseña">
          </div>
          <button type="submit" class="btn-submit">Registrarse</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- FIn del MOdal Registro -->

<!-- ------------------------------------------------ -->

<!-- Inicio de configuración botón registro -->
<script>
  document.getElementById('abrirRegistro').addEventListener('click', function(e) {
    e.preventDefault();
    var loginModal = bootstrap.Modal.getInstance(document.getElementById('loginModal'));
    loginModal.hide();

    var registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
    registerModal.show();
  });
</script>
<!-- Inicio de configuración botón registro -->