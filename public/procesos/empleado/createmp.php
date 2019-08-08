<?php
	require '../../../config/conexion.php';
	$nomEmpReg = $_POST['createNombEmp'];
	$apeEmpReg = $_POST['createApeEmp'];
	$estEmpReg = $_POST['createEstaEmp'];
	$carEmpReg = $_POST['createCargoEmp'];

	$val = $con->query("SELECT nom_emp FROM empleado WHERE nom_emp LIKE '$nomEmpReg' ");
	$emple = $val->fetch_row();
	if ($emple[0]==$nomEmpReg ) {
		$vale = $con->query("SELECT ape_emp FROM empleado WHERE ape_emp LIKE '$apeEmpReg' ");
		$emplea = $vale->fetch_row();
		if ($emplea[0]==$apeEmpReg) {
			echo 0;
		}else {
			$reg = $con->query("INSERT INTO empleado (nom_emp,ape_emp,estado_emp,id_cargo) VALUES ('$nomEmpReg','$apeEmpReg','$estEmpReg','$carEmpReg')");
			if ($reg) {
				echo json_encode(array('error' => false));
			}else{
				echo json_encode(array('error' => true));
			}
		}
	}else{
		$reg = $con->query("INSERT INTO empleado (nom_emp,ape_emp,estado_emp,id_cargo) VALUES ('$nomEmpReg','$apeEmpReg','$estEmpReg','$carEmpReg')");
		if ($reg) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
 ?>
