<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SICC</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <!-- datatable-->
  <link rel="stylesheet" href="../public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../public/plugins/fontawesome/css/all.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include "./navbar.php"; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="inicio.php" class="brand-link">
      <img src="../public/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SICC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image" style="color: white">
          <i class="nav-icon fa-solid fa-user-astronaut"></i>
        </div>
        <div class="info">
          <a href="#" class="d-block">Roldan Aquino Segura</a>
        </div>
      </div>

    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="./usuarios.php" class="nav-link">
              
              <i class="nav-icon fa-solid fa-users"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Carga academica
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./semestres.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semestres</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./materias.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Materias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./grupos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grupos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./listas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-folder-tree"></i>
              <p>
                Actividades
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./tareas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tareas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./calificar.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Calificar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./parciales.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Parciales</p>
                </a>
              </li> 
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>