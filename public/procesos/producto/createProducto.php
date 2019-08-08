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
	$sedeNewProd = $_POST['sedeNewProd'];
	$obsNewProd = $_POST['obsNewProd'];
	$categNewProd = $_POST['catgNewProd'];
	$presentNewProd = $_POST['presentNewProd'];
	$empleNewProd = $_POST['responNewProd'];

	$vale = $con->query("SELECT serie_equipo FROM equipo WHERE serie_equipo LIKE '". $serieNewProd ."' ");
	$produ = $vale->fetch_row();
	if ($produ[0]==$serieNewProd) {
		echo 0;
	}else{
		$res = $con->query("INSERT INTO equipo (nom_equipo,
																						serie_equipo,
																						ip_equipo,
																						mac_equipo,
																						marca_equipo,
																						modelo_equipo,
																						af_equipo,
																						estado_equipo,
																						sede_equipo,
																						detalle_equipo,
																						id_categoria,
																						id_presentacion,
																						id_emp)
														VALUES ('$nombNewProd',
																'$serieNewProd',
																'$ipNewProd',
																'$macNewProd',
																'$marcNewProd',
																'$modeNewProd',
																'$afNewProd',
																'$estadNewProd',
																'$sedeNewProd',
																'$obsNewProd',
																'$categNewProd',
																'$presentNewProd',
																'$empleNewProd')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
?>
