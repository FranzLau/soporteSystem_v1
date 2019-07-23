<?php
	require '../../../config/conexion.php';
	$nomEmpReg = $_POST['createNombEmp'];
	$apeEmpReg = $_POST['createApeEmp'];
	$docEmpReg = $_POST['createCuentaEmp'];
	$estEmpReg = $_POST['createEstaEmp'];
	$useEmpReg = $_POST['createUserEmp'];
	$pasEmpReg = $_POST['createPassEmp'];
	$carEmpReg = $_POST['createCargoEmp'];

	$val = $con->query("SELECT doc_emp FROM empleado WHERE doc_emp LIKE '$docEmpReg' ");
	$emple = $val->fetch_row();
	if ($emple[0]==$docEmpReg) {
		echo json_encode(array('error' => true));
	}else{
		$reg = $con->query("INSERT INTO empleado (nom_emp,ape_emp,doc_emp,estado_emp,user_emp,pass_emp,id_cargo) VALUES ('$nomEmpReg','$apeEmpReg','$docEmpReg','$estEmpReg','$useEmpReg','$pasEmpReg','$carEmpReg')");
		if ($reg) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
 ?>
