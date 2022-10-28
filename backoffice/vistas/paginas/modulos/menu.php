<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="inicio" class="brand-link">
  <img src="vistas/img/plantilla/icono1.png" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Camino Real</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
     
      <?php if ($usuario["foto"] == ""): ?>

         <img src="vistas/img/usuarios/default/default.png" class="img-circle elevation-2" alt="User Image">

      <?php else: ?>

        <img src="<?php echo $usuario["foto"] ?>" class="img-circle elevation-2" alt="User Image">
        
      <?php endif ?>

      </div>
      <div class="info">
        <a href="perfil" class="d-block"><?php echo $usuario["nombre"] ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="inicio" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>Inicio</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="perfil" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>Mi perfil</p>
          </a>
        </li>

        <?php if ($usuario["perfil"] == "admin"): ?>

          <li class="nav-item">
            <a href="usuarios" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Usuarios</p>
            </a>
          </li>
          
        <?php endif ?>

        <li class="nav-item">
            <a href="reserva" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>Reserva</p>
            </a>
        </li>
      
        <li class="nav-item">
            <a href="recepcion" class="nav-link">
              <i class="nav-icon fas fa-arrow-right-to-bracket"></i>
              <p>Recepcion</p>
            </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-basket-shopping"></i>
            <p>
            Punto de venta
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="vender-productos" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Vender Productos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="catalogo-productos" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Catalogo de Productos</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="verificacion-salidas" class="nav-link">
            <i class="nav-icon fas fa-arrow-right-from-bracket"></i>
            <p>Verificacion de salidas</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="clientes" class="nav-link">
            <i class="nav-icon fas fa-user-group"></i>
            <p>Clientes</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="soporte" class="nav-link">
            <i class="nav-icon fas fa-comments"></i>
            <p>Soporte</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="salir" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Cerrar sesión</p>
          </a>
        </li>




      </ul>

    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>