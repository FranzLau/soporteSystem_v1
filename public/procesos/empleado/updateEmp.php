<?php
	require '../../../config/conexion.php';
	$idEmpUpdate = $_POST['editIdEmp'];
	$nomEmpUpdate = $_POST['editNombEmp'];
	$apeEmpUpdate = $_POST['editApeEmp'];
	$estaEmpUpdate = $_POST['editEstaEmp'];
	$cargoEmpUpdate = $_POST['EditCargoEmp'];

	$upd = $con->query("UPDATE empleado SET nom_emp='$nomEmpUpdate',
                    											ape_emp='$apeEmpUpdate',
																					estado_emp='$estaEmpUpdate',
                    											id_cargo='$cargoEmpUpdate'
										                 WHERE id_emp= '$idEmpUpdate' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
 ?>
