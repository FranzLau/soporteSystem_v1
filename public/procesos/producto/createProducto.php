<?php
	require '../../../config/conexion.php';
	$nombNewProd = $_POST['nombNewProd'];
	$serieNewProd = $_POST['serieNewProd'];
	$ipNewProd = $_POST['ipNewProd'];
	$macNewProd = $_POST['macNewProd'];
	$estadNewProd = $_POST['estadoNewProd'];
	$categNewProd = $_POST['catgNewProd'];
	$empleNewProd = $_POST['responNewProd'];

	$vale = $con->query("SELECT nom_equipo FROM equipo WHERE nom_equipo LIKE '". $nombNewProd ."' ");
	$produ = $vale->fetch_row();
	if ($produ[0]==$nombNewProd) {
		echo 0;
	}else{
		$res = $con->query("INSERT INTO equipo (nom_equipo,serie_equipo,ip_equipo,mac_equipo,estado_equipo,id_categoria,id_emp) VALUES ('$nombNewProd','$serieNewProd','$ipNewProd','$macNewProd','$estadNewProd','$categNewProd','$empleNewProd')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
?>
