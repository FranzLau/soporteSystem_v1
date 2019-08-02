<!-- Modal -->
<div class="modal fade" id="ModalUpdateProd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Actualizar Habitación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formUpdateProd">
          <input type="text" hidden="" name="idProdEdit" id="idProdEdit">

          <div class="row">
            <div class="col-sm-6">
              <p class="font-weight-bold"><i class="fas fa-user-edit mr-2"></i>Datos Básicos</p>
              <div class="form-group row">
                <label for="nomEditProd" class="col-sm-4 col-form-label col-form-label-sm">Nombre:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="nomEditProd" name="nomEditProd">
                </div>
              </div>
              <div class="form-group row">
                <label for="presentEditProd" class="col-sm-4 col-form-label col-form-label-sm">Tipo:</label>
                <div class="col-sm-8">
                  <select class="form-control form-control-sm" id="presentEditProd" name="presentEditProd">
                    <option value="">Elije tipo equipo</option>
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
              </div>
              <div class="form-group row">
                <label for="marcaEditProd" class="col-sm-4 col-form-label col-form-label-sm">Marca:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="marcaEditProd" name="marcaEditProd">
                </div>
              </div>
              <div class="form-group row">
                <label for="modeloEditProd" class="col-sm-4 col-form-label col-form-label-sm">Modelo:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="modeloEditProd" name="modeloEditProd">
                </div>
              </div>
              <div class="form-group row">
                <label for="sedeEditProd" class="col-sm-4 col-form-label col-form-label-sm">Sede</label>
                <div class="col-sm-8">
                  <select class="form-control form-control-sm" id="sedeEditProd" name="sedeEditProd">
                    <option value="1">S.E. 28 de Julio</option>
                    <option value="2">S.E. Leguia</option>
                    <option value="3">S.E. Para</option>
                    <option value="4">Moquegua</option>
                    <option value="5">Ilo</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="responEditProd" class="col-sm-4 col-form-label col-form-label-sm">Responsable:</label>
                <div class="col-sm-8">
                  <select class="form-control form-control-sm" id="responEditProd" name="responEditProd">
                    <option value="">Elije a uno</option>
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
              </div>

            </div>
            

            <div class="col-sm-6">
              <p class="font-weight-bold"><i class="fas fa-user-cog mr-2"></i>Datos Técnicos</p>
              <div class="form-group row mt-2">
                <label for="serieEditProd" class="col-sm-4 col-form-label col-form-label-sm">Serie:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="serieEditProd" name="serieEditProd">
                </div>
              </div>
              <div class="form-group row">
                <label for="ipEditProd" class="col-sm-4 col-form-label col-form-label-sm">IP:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="ipEditProd" name="ipEditProd">
                </div>
              </div>
              <div class="form-group row">
                <label for="macEditProd" class="col-sm-4 col-form-label col-form-label-sm">MAC:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="macEditProd" name="macEditProd">
                </div>
              </div>
              <div class="form-group row">
                <label for="afEditProd" class="col-sm-4 col-form-label col-form-label-sm">AF:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="afEditProd" name="afEditProd">
                </div>
              </div>
              <div class="form-group row">
                <label for="catgEditProd" class="col-sm-4 col-form-label col-form-label-sm">Categoria:</label>
                <div class="col-sm-8">
                  <select class="form-control form-control-sm" id="catgEditProd" name="catgEditProd">
                    <option value="">Elije producto</option>
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
              </div>
              <div class="form-group row">
                <label for="estadoEditProd" class="col-sm-4 col-form-label col-form-label-sm">Estado</label>
                <div class="col-sm-8">
                  <select class="form-control form-control-sm" id="estadoEditProd" name="estadoEditProd">
                    <option value="Operativo">Operativo</option>
                    <option value="Prestado">Prestado</option>
                    <option value="Inoperativo">Inoperativo</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fas fa-times mr-2 fa-sm text-white-50"></i>Cancelar</button>
        <button type="button" class="btn btn-warning btn-sm" id="btnUpdateProd"><i class="fas fa-pen mr-2 fa-sm text-white-50"></i>Actualizar</button>
      </div>
    </div>
  </div>
</div>
