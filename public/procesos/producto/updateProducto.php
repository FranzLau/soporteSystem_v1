<?php
	require '../../../config/conexion.php';
	$idProdEdit =$_POST['idProdEdit'];
	$nomProdEdit = $_POST['nomEditProd'];
	$serieProdEdit = $_POST['serieEditProd'];
	$ipProdEdit = $_POST['ipEditProd'];
	$macProdEdit = $_POST['macEditProd'];
	$marcaProdEdit = $_POST['marcaEditProd'];
	$modeloProdEdit = $_POST['modeloEditProd'];
	$afProdEdit = $_POST['afEditProd'];
	$estdoProdEdit = $_POST['estadoEditProd'];
	$idcatProdEdit = $_POST['catgEditProd'];
	$idpreProdEdit = $_POST['presentEditProd'];
	$idsedProdEdit = $_POST['sedeEditProd'];
	$idempProdEdit = $_POST['responEditProd'];

	$upd = $con->query("UPDATE equipo SET nom_equipo='$nomProdEdit',
											serie_equipo='$serieProdEdit',
											ip_equipo='$ipProdEdit',
											mac_equipo='$macProdEdit',
											marca_equipo='$marcaProdEdit',
											modelo_equipo='$modeloProdEdit',
											af_equipo='$afProdEdit',
											estado_equipo='$estdoProdEdit',
											id_categoria='$idcatProdEdit',
											id_presentacion='$idpreProdEdit',
											id_sede='$idsedProdEdit',
											id_emp='$idempProdEdit'
										WHERE id_equipo= '$idProdEdit' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
?>
