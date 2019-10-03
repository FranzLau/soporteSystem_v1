<?php
  session_start();
  require '../../config/conexion.php';
  if (isset($_SESSION['loginUser'])) {
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include('head.php'); ?>
  </head>
  <body id="page-top">

    <?php include('../modal/modalProductoEdit.php'); ?>
    <?php include('../modal/modalViewProducts.php'); ?>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    <!-- Page Wrapper -->
    <div id="wrapper">

      <?php include("sidebar.php"); ?>

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <?php include("topbar.php"); ?>

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->

            <div class="row">
              <div class="col-6 text-left">
                <h1 class="h3 mb-0 text-gray-800">Equipos</h1>
              </div>
              <div class="col-6">
                <!-- <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#ModalNewProd"><i class="fas fa-plus mr-lg-2 fa-sm text-white-50"></i><span class="d-none d-lg-inline">Nuevo Equipo</span></button>
                <a href="present.php" class="btn btn-primary shadow-sm btn-sm"><i class="fas fa-laptop mr-lg-2 fa-sm text-white-50"></i><span class="d-none d-lg-inline">Tipo Equipo</span></a>
                <a href="configuration.php" class="btn btn-primary shadow-sm btn-sm"><i class="fas fa-tag mr-lg-2 fa-sm text-white-50"></i><span class="d-none d-lg-inline">Categorias</span></a> -->
                <ul class="nav nav-pills nav-pills-primary justify-content-end" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fas fa-list mr-2 fa-sm"></i>Listado</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fas fa-plus mr-2 fa-sm"></i>Nuevo</a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Content Row -->

            <div class="row mt-3">
              <div class="col-sm-12">
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-desktop mr-2"></i>Lista de Equipos</h6>
                      </div>
                      <div class="card-body">
                        <div id="tableProducto"></div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">


                    <div class="card shadow">
                      <div class="card-header d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-desktop mr-2"></i>Registro de Equipos</h6>
                        <div class="no-arrow">
                          <a href="configuration.php"><i class="fas fa-cog fa-fw text-gray-600"></i></a>
                        </div>
                      </div>
                      <div class="card-body">

                        <!-- Content Row -->

                        <form id="formCreateNewProd">

                          <!-- Fila 1 Form -->
                          <div class="form-row">
                            <div class="form-group col-md-3">
                              <label for="presentNewProd" class="col-form-label col-form-label-sm">Tipo:</label>
                              <select class="form-control form-control-sm" id="presentNewProd" name="presentNewProd" style="width:100%">
                                <option value="">Elije el tipo...</option>
                                <?php $ctg = $con->query("SELECT * FROM presentacion");
                                    while ($row = $ctg->fetch_assoc()) {
                                      echo "<option value='".$row['id_presentacion']."' ";
                                      echo ">";
                                      echo $row['nom_presentacion'];
                                      echo "</option>";
                                    }
                                ?>
                              </select>
                            </div>
                            <div class="form-group col-md-3">
                              <label for="serieNewProd" class="col-form-label col-form-label-sm">Serie:</label>
                              <input type="text" class="form-control form-control-sm" id="serieNewProd" name="serieNewProd">
                            </div>
                            <div class="form-group col-md-3">
                              <label for="marcaNewProd" class="col-form-label col-form-label-sm">Marca:</label>
                              <input type="text" class="form-control form-control-sm" id="marcaNewProd" name="marcaNewProd">
                            </div>
                            <div class="form-group col-md-3">
                              <label for="modeloNewProd" class="col-form-label col-form-label-sm">Modelo:</label>
                              <input type="text" class="form-control form-control-sm" id="modeloNewProd" name="modeloNewProd">
                            </div>
                          </div>

                          <!-- Fila 2 Form -->

                          <div class="form-row">
                            <div class="form-group col-md-3">
                              <label for="afNewProd" class="col-form-label col-form-label-sm">Activo:</label>
                              <input type="text" class="form-control form-control-sm" id="afNewProd" name="afNewProd">
                            </div>
                            <div class="form-group col-md-3">
                              <label for="af2NewProd" class="col-form-label col-form-label-sm">Código 2:</label>
                              <input type="text" class="form-control form-control-sm" id="af2NewProd" name="af2NewProd">
                            </div>
                            <div class="form-group col-md-3">
                              <label for="catgNewProd" class="col-form-label col-form-label-sm">Categoria:</label>
                              <select class="form-control form-control-sm" id="catgNewProd" name="catgNewProd" style="width:100%">
                                <option value="">Elije categoria</option>
                                <?php $ctg = $con->query("SELECT * FROM categoria");
                                    while ($row = $ctg->fetch_assoc()) {
                                      echo "<option value='".$row['id_categoria']."' ";
                                      echo ">";
                                      echo $row['nom_categoria'];
                                      echo "</option>";
                                    }
                                ?>
                              </select>
                            </div>
                            <div class="form-group col-md-3">
                              <label for="estadoNewProd" class="col-form-label col-form-label-sm">Estado</label>
                              <select class="form-control form-control-sm" id="estadoNewProd" name="estadoNewProd">
                                <option value="Operativo">Operativo</option>
                                <option value="Prestado">Prestado</option>
                                <option value="Inoperativo">Inoperativo</option>
                              </select>
                            </div>
                          </div>


                          <!-- Fila 2 Form -->

                          <div class="form-row">
                            <div class="form-group col-md-3">
                              <label for="ubicNewProd" class="col-form-label col-form-label-sm">Ubicación:</label>
                              <!-- <textarea class="form-control form-control-sm" rows="3"></textarea> -->
                              <!-- <input type="text" class="form-control form-control-sm" id="ubicNewProd" name="ubicNewProd"> -->
                              <select class="form-control form-control-sm" id="ubicNewProd" name="ubicNewProd">
                                <option value="Almacén">Almacén</option>
                                <option value="Oficina">Oficina</option>
                              </select>
                            </div>
                            <div class="form-group col-md-9">
                              <label for="obsNewProd" class="col-form-label col-form-label-sm">Observación:</label>
                              <!-- <textarea class="form-control form-control-sm" rows="3"></textarea> -->
                              <input type="text" class="form-control form-control-sm" id="obsNewProd" name="obsNewProd">
                            </div>

                          </div>

                          <!-- Fila dentro de Form -->

                        </form>
                        <hr>
                        <div class="row">
                          <div class="col-sm-12 text-right">
                            <button type="button" class="btn btn-success btn-sm" id="btnCreateProd"><i class="fas fa-save mr-2 fa-sm text-white-50"></i>Guardar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2019</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    </div>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tableProducto').load('../componentes/tableProducto.php');
      });
    </script>
    <script type="text/javascript">
      function ReadProduct(idprod){
        $.ajax({
          url: '../../public/procesos/producto/readProducto.php',
          type: 'POST',
          data: "idprod=" + idprod,
          success:function(r){
            var datos= $.parseJSON(r);
            $('#idProdEdit').val(datos['ProdId']);
            $('#nomEditProd').val(datos['ProdNomb']);
            $('#serieEditProd').val(datos['ProdSerie']);
            $('#ipEditProd').val(datos['ProdIP']);
            $('#macEditProd').val(datos['ProdMac']);
            $('#marcaEditProd').val(datos['ProdMarca']);
            $('#modeloEditProd').val(datos['ProdModelo']);
            $('#afEditProd').val(datos['ProdAf']);
            $('#estadoEditProd').val(datos['ProdEstado']);
            $('#sedeEditProd').val(datos['ProdSede']);
            $('#obsEditProd').val(datos['ProdDetalle']);
            $('#catgEditProd').val(datos['ProdIDcateg']);
            $('#presentEditProd').val(datos['ProdIDpresent']);
            $('#responEditProd').val(datos['ProdIDemp']);
          }
        })
        .done(function(r) {
          console.log(r);
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
      }
      function deleteProduct(idprod){
        alertify.confirm("¿Seguro de BORRAR este producto?.",
        function(){
           $.ajax({
            url: '../../public/procesos/producto/deleteProducto.php',
            type: 'POST',
            data: "idprod=" + idprod,
            success:function(r){
             if (r==1) {
              $('#tableProducto').load('../componentes/tableProducto.php');
              alertify.success("Eliminaste con EXITO");
             }else{
              alertify.error("No se pudo Eliminar este producto");
             }
            }
          })
        },
        function(){
          alertify.warning('Estuviste a punto de Eliminar');
        });
      }
    </script>
    <script type="text/javascript">
    function ViewProduct(idprod){
      $.ajax({
        url: '../../public/procesos/producto/readProducto.php',
        type: 'POST',
        data: "idprod=" + idprod,
        success:function(r){
          var datos= $.parseJSON(r);
          //$('#idProdView').text(datos['ProdId']);
          $('#nomviewProd').text(datos['ProdNomb']);
          $('#serieViewProd').text(datos['ProdSerie']);
          $('#ipViewProd').text(datos['ProdIP']);
          $('#macViewProd').text(datos['ProdMac']);
          $('#marcaViewProd').text(datos['ProdMarca']);
          $('#modeloViewProd').text(datos['ProdModelo']);
          $('#afViewProd').text(datos['ProdAf']);
          $('#estadoViewProd').text(datos['ProdEstado']);
          $('#sedeViewProd').text(datos['ProdSede']);
          $('#obsViewProd').text(datos['ProdDetalle']);
          $('#catgViewProd').text(datos['ProdIDcateg']);
          $('#presentViewProd').text(datos['ProdIDpresent']);
          $('#responViewProd').text(datos['ProdIDemp']);
        }
      })
      .done(function(r) {
        console.log(r);
      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });
    }
    </script>
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>
