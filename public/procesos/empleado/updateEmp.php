<?php
	require '../../../config/conexion.php';
	$idEmpUpdate = $_POST['editIdEmp'];
	$nomEmpUpdate = $_POST['editNombEmp'];
	$apeEmpUpdate = $_POST['editApeEmp'];
	$cuentaEmpUpdate = $_POST['editCuentaEmp'];
	$estaEmpUpdate = $_POST['editEstaEmp'];
	$userEmpUpdate = $_POST['editUserEmp'];
	$passEmpUpdate = $_POST['editPassEmp'];
	$cargoEmpUpdate = $_POST['EditCargoEmp'];

	$upd = $con->query("UPDATE empleado SET nom_emp='$nomEmpUpdate',
                    											ape_emp='$apeEmpUpdate',
                    											doc_emp='$cuentaEmpUpdate',
																					estado_emp='$estaEmpUpdate',
                    											user_emp='$userEmpUpdate',
                    											pass_emp='$passEmpUpdate',
                    											id_cargo='$cargoEmpUpdate'
										                 WHERE id_emp= '$idEmpUpdate' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
 ?>
