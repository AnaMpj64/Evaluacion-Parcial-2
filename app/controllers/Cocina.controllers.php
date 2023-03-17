<?php
//TODO:Controlador de Cocina
//TODO: Requerimiento
require_once('../models/Cocina.models.php');
//error_reporting(0);
$ClsCocina = new Cocina;

switch($_GET['op']){
    //TODO: Obtener todos los registros
    case 'todos':
        $datos = array();
        $datos = $ClsCocina->todos();
        while($fila = mysqli_fetch_assoc($datos)){
            $todos[] = $fila;
        }
        echo json_encode($todos);
        break;
    case 'uno':
        $idCocinas = $_POST['idCocinas'];
        $datos = $ClsCocina->uno($idCocinas);
        $uno = mysqli_fetch_assoc($datos);
        echo json_encode($uno);
        break;
    case 'insertar':
        $Tipo = $_POST['Tipo'];
        $FuenteConsumo = $_POST['FuenteConsumo'];
        $Tamano = $_POST['Tamano'];
        $SistemaVentilacion = $_POST['SistemaVentilacion'];
        $Marca = $_POST['Marca'];
        $NumeroQuemadores = $_POST['NumeroQuemadores'];
        $datos = $ClsCocina->insertar($Tipo, $FuenteConsumo, $Tamano, $SistemaVentilacion, $Marca, $NumeroQuemadores);
        echo json_encode($datos);
        break;
    case 'actualizar':
        $Tipo = $_POST['Tipo'];
        $FuenteConsumo = $_POST['FuenteConsumo'];
        $Tamano = $_POST['Tamano'];
        $SistemaVentilacion = $_POST['SistemaVentilacion'];
        $Marca = $_POST['Marca'];
        $NumeroQuemadores = $_POST['NumeroQuemadores'];
        $idCocinas = $_POST['idCocinas'];
        $datos = $ClsCocina->actualizar($Tipo, $FuenteConsumo, $Tamano, $SistemaVentilacion, $Marca, $NumeroQuemadores, $idCocinas);
        echo json_encode($datos);
        break;
    case 'eliminar':
        $idCocinas = $_POST['idCocinas'];
        $datos = $ClsCocina->eliminar($idCocinas);
        echo json_encode($datos);
        break;
}
?>