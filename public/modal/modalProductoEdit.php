<!-- Modal -->
<div class="modal fade" id="ModalUpdateProd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Actualizar Equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formUpdateProd">
          <input type="text" hidden="" name="idProdEdit" id="idProdEdit">

          <div class="row">
            <div class="col-sm-6">
              <!-- <p class="font-weight-bold"><i class="fas fa-user-edit mr-2"></i>Datos Básicos</p> -->

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
                <label for="serieEditProd" class="col-sm-4 col-form-label col-form-label-sm">Serie:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="serieEditProd" name="serieEditProd">
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

            </div>

            <div class="col-sm-6">
              <!-- <p class="font-weight-bold"><i class="fas fa-user-cog mr-2"></i>Datos Técnicos</p> -->
              <div class="form-group row">
                <label for="afEditProd" class="col-sm-4 col-form-label col-form-label-sm">AF:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="afEditProd" name="afEditProd">
                </div>
              </div>
              <div class="form-group row">
                <label for="af2EditProd" class="col-sm-4 col-form-label col-form-label-sm">AF 2:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="af2EditProd" name="af2EditProd">
                </div>
              </div>
              <div class="form-group row">
                <label for="ubicEditProd" class="col-sm-4 col-form-label col-form-label-sm">Ubicación</label>
                <div class="col-sm-8">
                  <select class="form-control form-control-sm" id="ubicEditProd" name="ubicEditProd">
                    <option value="Almacén">Almacén</option>
                    <option value="Oficina">Oficina</option>

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
              <div class="form-group row">
                <label for="obsEditProd" class="col-sm-4 col-form-label col-form-label-sm">Observación:</label>
                <div class="col-sm-8">
                  <textarea class="form-control form-control-sm" id="obsEditProd" name="obsEditProd" rows="3"></textarea>
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
