
<?php
    include "./header.php";
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Usuarios</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-body">
                <div class="row">
                    <div class="col">
                        <span class="btn btn-primary" data-toggle="modal" data-target="#agregarUsuarioNuevo">
                            <i class="fa-solid fa-user-plus"></i> 
                            Agregar usuario
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <hr>
                        <div id="cargaTablaUsuarios"></div>
                    </div>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

<?php
    include "./usuarios/modales/agregarUsuario.php";
    include "./footer.php";
?>
<script src="../public/js/usuarios.js"></script>

  