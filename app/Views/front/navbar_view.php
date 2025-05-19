<nav class="navbar navbar-expand-lg sticky-top navbar-customizado">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="<?= site_url('principal') ?>">
      <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="Red Bull Racing" height="40" class="me-2">
      <span class="fw-bold text-uppercase text-warning">Red Bull Racing</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white fw-semibold" href="<?= site_url('principal') ?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fw-semibold" href="/quienes-somos">Quiénes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fw-semibold" href="/acerca">Acerca de</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" role="button" data-bs-toggle="dropdown">
            Usuarios
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="/registrarse">Registrarse</a></li>
            <li><a class="dropdown-item" href="/login">Login</a></li>
          </ul>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2 border-0 shadow-sm" type="search" placeholder="Buscar..." aria-label="Buscar">
        <button class="btn btn-danger fw-bold" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>