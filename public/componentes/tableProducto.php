<?php
  session_start();
  require '../../config/conexion.php';
  require '../../config/data.php';
  $obj = new data();
  $sql = $con->query("SELECT * FROM equipo");
 ?>
<div class="table-responsive">
  <table class="table table-hover table-sm" id="tableProduc" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th><i class="fas fa-star"></i></th>
        <th>NOMBRE</th>
        <th>TIPO</th>
        <th>SERIE</th>
        <th>MARCA</th>
        <th>MODELO</th>
        <th>RESPONSABLE</th>
        <th>SEDE</th>
        <th class="text-center">ACCION</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th><i class="fas fa-star"></i></th>
        <th>NOMBRE</th>
        <th>TIPO</th>
        <th>SERIE</th>
        <th>MARCA</th>
        <th>MODELO</th>
        <th>RESPONSABLE</th>
        <th>SEDE</th>
        <th class="text-center">ACCION</th>
      </tr>
    </tfoot>
    <tbody>
        <?php while($mostrarprod = $sql->fetch_row()){ ?>
        <tr>
          <td>
            <?php
            if ($mostrarprod[8]=="Operativo") {
            ?>
              <i class="fas fa-star" style="color:#1cc88a"></i>
            <?php
          }elseif ($mostrarprod[8]=="Prestado") {
            ?>
              <i class="fas fa-star" style="color:#f6c23e"></i>
            <?php
            }else {
            ?>
              <i class="fas fa-star" style="color:#e74a3b"></i>
            <?php
            }
            ?>
          </td>
          <td><?php echo $mostrarprod[1] ?></td>
          <td><?php echo $obj->nameCategory( $mostrarprod[9]) ?></td>
          <td><?php echo $mostrarprod[2] ?></td>
          <td><?php echo $mostrarprod[5] ?></td>
          <td><?php echo $mostrarprod[6] ?></td>
          <td><?php echo $obj->nombEmpleado( $mostrarprod[11]) ?></td>
          <td><?php echo $mostrarprod[10] ?></td>
          <td class="text-center">
            <a href="#" class="btn-link-eyes mr-3" title="Detalles"><i class="fas fa-eye"></i></a>
            <a href="#" class="btn-link-edit mr-3" title="Editar" data-toggle="modal" data-target="#ModalUpdateProd" onclick="ReadProduct('<?php echo $mostrarprod[0] ?>')"><i class="fas fa-pencil-alt"></i></a>
              <?php
                if ($_SESSION['loginUser']['user_emp'] == "Administrador"):
              ?>
            <a href="#" class="btn-link-delete" title="Eliminar" onclick="deleteProduct('<?php echo $mostrarprod[0] ?>')"><i class="fas fa-trash-alt"></i></a>
              <?php endif; ?>
            </td>
         </tr>
         <?php } ?>
      </tbody>
  </table>
</div>
<script>
  $(document).ready(function() {
    $('#tableProduc').DataTable({
      "language": {
        "lengthMenu": "Mostrar _MENU_ registros por página",
        "zeroRecords": "Nada encontrado, lo siento!",
        "info": "Mostrando página _PAGE_ de _PAGES_",
        "infoEmpty": "No hay registros disponibles",
        "infoFiltered": "(filtered from _MAX_ total records)",
        "search": "Buscar",
        "paginate": {
          "first":      "Primero",
          "previous":   "Anterior",
          "next":       "Siguiente",
          "last":       "Último"
        }
      }
    });
  });
</script>
