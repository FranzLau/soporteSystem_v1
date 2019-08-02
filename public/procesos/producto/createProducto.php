<?php
	require '../../../config/conexion.php';
	$nombNewProd = $_POST['nombNewProd'];
	$serieNewProd = $_POST['serieNewProd'];
	$ipNewProd = $_POST['ipNewProd'];
	$macNewProd = $_POST['macNewProd'];
	$marcNewProd = $_POST['marcaNewProd'];
	$modeNewProd = $_POST['modeloNewProd'];
	$afNewProd = $_POST['afNewProd'];
	$estadNewProd = $_POST['estadoNewProd'];
	$categNewProd = $_POST['catgNewProd'];
	$presentNewProd = $_POST['presentNewProd'];
	$sedeNewProd = $_POST['sedeNewProd'];
	$empleNewProd = $_POST['responNewProd'];

	$vale = $con->query("SELECT nom_equipo FROM equipo WHERE nom_equipo LIKE '". $nombNewProd ."' ");
	$produ = $vale->fetch_row();
	if ($produ[0]==$nombNewProd) {
		echo 0;
	}else{
<<<<<<< HEAD
		$res = $con->query("INSERT INTO equipo (nom_equipo,
												serie_equipo,
												ip_equipo,
												mac_equipo,
												marca_equipo,
												modelo_equipo,
												af_equipo,
												estado_equipo,
												id_categoria,
												id_presentacion,
												id_sede,
												id_emp) 
									VALUES ('$nombNewProd',
											'$serieNewProd',
											'$ipNewProd',
											'$macNewProd',
											'$marcNewProd',
											'$modeNewProd',
											'$afNewProd',
											'$estadNewProd',
											'$categNewProd',
											'$presentNewProd',
											'$sedeNewProd',
											'$empleNewProd')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
?>
