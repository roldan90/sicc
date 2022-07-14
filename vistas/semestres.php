<?php
    include "./header.php";
?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Semestres</h1>
          </div>          
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarSemestre">
                    <i class="fa-solid fa-circle-plus"></i> 
                    Agregar Semestre
                </span>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php 
    include "./cargaAcademica/semestres/modales/modalAgregar.php";
    include "./footer.php";
?>