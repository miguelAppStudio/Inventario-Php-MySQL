<html>
  <div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <img src="./img/gato-2.png" class="rounded-circle" alt="logo">
        <h3 class="tituloPanel"> Panel Administrador </h3>
        <strong>PA</strong>
      </div>
      <ul class="list-unstyled components">
        <li class="usuarioColor active ">
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="sidebaruser dropdown-toggle">
            <i class="fas fa-user"></i>
            Usuarios
          </a>
          
          <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
              <a href="index.php?vista=user_new">Nuevo</a>
            </li>
            <li>
              <a href="index.php?vista=user_list"> Lista</a>
            </li>
            <li>
              <a href="index.php?vista=user_search">Buscar</a>
            </li>
          </ul>
        </li>
        <li class="categoriasColor">
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="fas fa-copy"></i>
            Categorias
          </a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
              <a href="#">Nuevo </a>
            </li>
            <li>
              <a href="#">Lista</a>
            </li>
            <li>
              <a href="#">Buscar</a>
            </li>
          </ul>
        </li>
        <li class="productosColor">
          <a href="#pageProductos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="fas fa-cubes"></i>
            Productos
          </a>
          <ul class="collapse list-unstyled" id="pageProductos">
            <a href="#">Nuevo </a>
            <a href="#">Lista</a>
            <a href="#">Por Categoria</a>
            <a href="#">Buscar</a>
          </ul>
        </li>

       <!--  <li>
          <a href="#">
            <i class="fas fa-briefcase"></i>
            Detalles
          </a>
        </li>
        <li class="alertasColor">
          <a href="#">
            <i class="fas fa-image"></i>
            Alertas
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-question"></i>
            FAQ
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-paper-plane"></i>
            Contacto
          </a>
        </li>
      </ul>

      <ul class="list-unstyled CTAs">
        <li>
          <a href="#" class="download">Muestra</a>
        </li>
        <li>
          <a href="#" class="article">Muestras</a>
        </li>
      </ul> -->
    </nav>

    <!-- Nav Bar  -->
    <div id="content">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-justify"></i>

            <span></span>
          </button>
          <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
              <button type="button" class="btn btn-outline-success">Mi Cuenta</button>
              <button type="button" class="btn btn-outline-danger">Salir</button>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <?php include "inc/script.php"; ?>

</html>