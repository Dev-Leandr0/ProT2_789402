<!-- Sección 1 Banner "Carrusel bootstrap + style.css" -->
<!-- completado 100%  -->
<section class="banner-carrusel">
  <div id="banner-carrusel-principal" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/banner/principal/banner-1.jpg" class="d-block w-100" alt="Bienvenidos Oracle Red Bull Racing">
        <div class="carousel-caption banner-contenido">
          <h2>Bienvenidos</h2>
          <p>Oracle Red Bull Racing - Potencia y pasión en cada vuelta</p>
          <a href="#explorar" class="btn btn-danger btn-lg">Explorar temporada</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/banner/principal/banner-2.jpg" class="d-block w-100" alt="Curiosidades Red Bull Racing">
        <div class="carousel-caption banner-contenido">
          <h2>¿Sabías que?</h2>
          <p>Red Bull Racing es pionero en innovación tecnológica en la Fórmula 1</p>
          <a href="#" class="btn btn-danger btn-lg">Más información</a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#banner-carrusel-principal" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#banner-carrusel-principal" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</section>

<!-- Sección 2 Nuestra Historia "Display flex" -->
<!-- completado 90% 
 - Ajustar imagen -->
<section class="nuestra-historia">
  <div class="historia-contenido">
    <h2 class="border-bottom border-danger pb-2">Sobre Nosotros</h2>
    <p>
      Desde sus humildes comienzos hasta convertirse en una potencia de la Fórmula 1,
      Red Bull Racing ha demostrado que la pasión, la innovación y el trabajo en equipo
      pueden llevar a lo más alto del podio.
    </p>
    <p>
      Con múltiples campeonatos, pilotos legendarios y tecnología de punta, nuestra historia
      continúa escribiéndose vuelta tras vuelta.
    </p>
  </div>
  <div class="historia-imagen">
    <img src="assets/img/icons/logo/logo-4.jpg" alt="Nuestra Historia">
  </div>
</section>

<!-- Seccion 3 Equipo "cards bootstrap + style.css" -->
<!-- completado 100%  -->
<section class="seccion-equipo container mt-2">
  <h2 class="titulo-equipo mb-4 border-bottom border-danger pb-2">
    Nuestro Equipo
  </h2>
  <div class="row">
    <!-- Christian Horner -->
    <div class="col-md-4 mb-4">
      <div class="card bg-dark text-white border-0">
        <img src="assets/img/perfil/Christian-Horner-3.jpg" class="card-img-top" alt="Christian Horner">
        <div class="card-body">
          <h5 class="card-title text-primary">Christian Horner</h5>
          <p class="card-text">Director de equipo. Estratega dentro y fuera de la pista.</p>
        </div>
      </div>
    </div>
    <!-- Pierre Waché -->
    <div class="col-md-4 mb-4">
      <div class="card bg-dark text-white border-0">
        <img src="assets/img/perfil/Pierre-Waché-2.jpg" class="card-img-top" alt="Pierre Waché">
        <div class="card-body">
          <h5 class="card-title text-warning">Pierre Waché</h5>
          <p class="card-text">Diseñador jefe y mente maestra detrás del monoplaza de Red Bull.</p>
        </div>
      </div>
    </div>
    <!--Hannah Schmitz -->
    <div class="col-md-4 mb-4">
      <div class="card bg-dark text-white border-0">
        <img src="assets/img/perfil/Hannah-Schmitz-1.jpg" class="card-img-top" alt="Pierre Waché">
        <div class="card-body">
          <h5 class="card-title text-danger">Hannah Schmitz</h5>
          <p class="card-text"> Ingeniera jefe de estrategia principal en Red Bull Racing. </p>
        </div>
      </div>
    </div>

</section>

<!-- Seccion 4 - Logros "Bootstrap puro" -->
<!-- completado 100% - Posible eliminacion -->
<section class="container my-3">
  <h2 class="mb-4 text-uppercase fw-bold text-danger border-bottom border-danger pb-2">Logros Destacados</h2>
  <div class="row">
    <!-- falta agregar 3 mas  19/05 -->
    <div class="col-md-4 mb-4">
      <div class="card shadow text-center">
        <div class="card-body">
          <i class="bi bi-trophy-fill text-warning fs-1"></i>
          <h5 class="card-title mt-3">5 Campeonatos de Constructores</h5>
          <p class="card-text">Dominando la Fórmula 1 con ingeniería de vanguardia.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card shadow text-center">
        <div class="card-body">
          <i class="bi bi-award-fill text-warning fs-1"></i>
          <h5 class="card-title mt-3">Premios a la Innovación</h5>
          <p class="card-text">Reconocimientos internacionales por avances tecnológicos.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card shadow text-center">
        <div class="card-body">
          <i class="bi bi-gear-fill text-success fs-1"></i>
          <h5 class="card-title mt-3">Innovaciones Técnicas</h5>
          <p class="card-text">Tecnología puntera que marcó un antes y un después.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card shadow text-center">
        <div class="card-body">
          <i class="bi bi-flag-fill text-danger fs-1"></i>
          <h5 class="card-title mt-3">Estrategias de Carrera</h5>
          <p class="card-text">Estrategias impecables que llevaron a la victoria.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card shadow text-center">
        <div class="card-body">
          <i class="bi bi-people-fill text-info fs-1"></i>
          <h5 class="card-title mt-3">Equipo Humano</h5>
          <p class="card-text">Un equipo sólido detrás de cada triunfo.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card shadow text-center">
        <div class="card-body">
          <i class="bi bi-speedometer2 text-primary fs-1"></i>
          <h5 class="card-title mt-3">Récords de Velocidad</h5>
          <p class="card-text">Velocidades récord alcanzadas en pistas.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Lista de cambios 19/05
 - Cambiar tamaño img nuestra historia  
 - Reestructuración de la sección logros
 -->