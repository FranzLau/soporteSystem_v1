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
            <!-- Page Heading -->

            <div class="row">
              <div class="col-6 text-left">
                <h1 class="h3 mb-0 text-gray-800">Ficha de Movimiento</h1>
              </div>
              <div class="col-6">
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
                      <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-desktop mr-2"></i>Lista de Movimientos</h6>
                      </div>
                      <div class="card-body">
                        <div id="tableComputer"></div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="card shadow">
                      <div class="card-header d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-desktop mr-2"></i>Registro de Movimiento</h6>
                        <!-- <div class="no-arrow">
                          <a href="configuration.php"><i class="fas fa-cog fa-fw text-gray-600"></i></a>
                        </div> -->
                      </div>
                      <div class="card-body">
                        <form id="">
                          <div class="form-row">
                            <div class="form-group col-sm-3">
                              <label class="col-form-label col-form-label-sm" for="inlineFormInputGroupUsername2">Fecha</label>
                              <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                                <input type="date" class="form-control form-control-sm" id="inlineFormInputGroupUsername2">
                              </div>
                            </div>
                            <div class="form-group col-md-3">
                              <label for="responOrigenEmp" class="col-form-label col-form-label-sm">Origen:</label>
                              <select class="form-control form-control-sm" id="responOrigenEmp" name="responOrigenEmp" style="width:100%">
                                <option value="">Elije uno</option>
                                <?php $ctg = $con->query("SELECT * FROM empleado");
                                    while ($row = $ctg->fetch_assoc()) {
                                      echo "<option value='".$row['id_emp']."' ";
                                      echo ">";
                                      echo $row['nom_emp'];
                                      echo " ";
                                      echo $row['ape_emp'];
                                      echo "</option>";
                                    }
                                ?>
                              </select>
                            </div>
                            <div class="form-group col-md-3">
                              <label for="responDestinEmp" class="col-form-label col-form-label-sm">Destino:</label>
                              <select class="form-control form-control-sm" id="responDestinEmp" name="responDestinEmp" style="width:100%">
                                <option value="">Elije uno</option>
                                <?php $ctg = $con->query("SELECT * FROM empleado");
                                    while ($row = $ctg->fetch_assoc()) {
                                      echo "<option value='".$row['id_emp']."' ";
                                      echo ">";
                                      echo $row['nom_emp'];
                                      echo " ";
                                      echo $row['ape_emp'];
                                      echo "</option>";
                                    }
                                ?>
                              </select>
                            </div>
                            <div class="form-group col-md-3">
                              <label for="responEquipo" class="col-form-label col-form-label-sm">Equipo:</label>
                              <select class="form-control form-control-sm" id="responEquipo" name="responEquipo" style="width:100%">
                                <option value="">Elije serie</option>
                                <?php $ctg = $con->query("SELECT * FROM equipo");
                                    while ($row = $ctg->fetch_assoc()) {
                                      echo "<option value='".$row['id_equipo']."' ";
                                      echo ">";
                                      echo $row['serie_equipo'];
                                      echo "</option>";
                                    }
                                ?>
                              </select>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



          </div>
        </div>
        <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
      </div>
      <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    </div>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('scripts.php'); ?>
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>
