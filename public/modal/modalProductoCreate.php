<!-- Modal -->
<div class="modal fade" id="ModalNewProd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fas fa-file mr-2"></i>Nuevo Equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formCreateNewProd">
          <div class="form-group row">
            <label for="nombNewProd" class="col-sm-3 col-form-label col-form-label-sm">Nombre:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control form-control-sm" id="nombNewProd" name="nombNewProd" placeholder="Ingrese el nombre...">
            </div>
          </div>
          <div class="form-group row">
            <label for="catgNewProd" class="col-sm-3 col-form-label">Categoria:</label>
            <div class="col-sm-9">
              <select class="form-control form-control-sm" id="catgNewProd" name="catgNewProd">
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
            <label for="serieNewProd" class="col-sm-3 col-form-label col-form-label-sm">Serie:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" id="serieNewProd" name="serieNewProd" placeholder="123...">
            </div>
          </div>
          <div class="form-group row">
            <label for="ipNewProd" class="col-sm-3 col-form-label col-form-label-sm">IP:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" id="ipNewProd" name="ipNewProd" placeholder="191.168.00.00">
            </div>
          </div>
          <div class="form-group row">
            <label for="macNewProd" class="col-sm-3 col-form-label col-form-label-sm">MAC:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" id="macNewProd" name="macNewProd" placeholder="00:00:00:00:00">
            </div>
          </div>
          <div class="form-group row">
            <label for="responNewProd" class="col-sm-3 col-form-label">Responsable:</label>
            <div class="col-sm-9">
              <select class="form-control form-control-sm" id="responNewProd" name="responNewProd">
                <option value="">Elije a uno</option>
								<?php $ctg = $con->query("SELECT * FROM empleado");
										while ($row = $ctg->fetch_assoc()) {
											echo "<option value='".$row['id_emp']."' ";
											echo ">";
											echo $row['nom_emp'];
											echo "</option>";
										}
								?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="estadoNewProd" class="col-sm-3 col-form-label col-form-label-sm">Estado</label>
            <div class="col-sm-9">
              <select class="form-control form-control-sm" id="estadoNewProd" name="estadoNewProd">
                <option value="Disponible">Disponible</option>
                <option value="Alquilado">Alquilado</option>
                <option value="Prestado">Prestado</option>
                <option value="Propio">Propio</option>
              </select>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm w-100" id="btnCreateProd"><i class="fas fa-save mr-2 fa-sm text-white-50"></i>Guardar</button>
      </div>
    </div>
  </div>
</div>
