<?php
//TODO:Modelo de cocinas
//Requerimientos
require_once('../../config/conexion.php');

class Cocina{
    public function todos(){
        $connexion = new ClaseConexion();
        $connexion = $connexion->ProcedimientoConectar();
        $cadena ="select * from cocinas";
        $datos = mysqli_query($connexion,$cadena);
        return $datos;
    }
    public function uno($idCocinas){
        $connexion = new ClaseConexion();
        $connexion = $connexion->ProcedimientoConectar();
        $cadena ="select * from cocinas where idCocinas=$idCocinas";
        $datos = mysqli_query($connexion,$cadena);
        return $datos;
    }
    public function insertar($Tipo, $FuenteConsumo, $Tamano, $SistemaVentilacion, $Marca, $NumeroQuemadores){
        $connexion = new ClaseConexion();
        $connexion = $connexion->ProcedimientoConectar();
        $cadena = "Insert into cocinas(Tipo, FuenteConsumo, Tamano, SistemaVentilacion, Marca, NumeroQuemadores) values('$Tipo', '$FuenteConsumo', '$Tamano', '$SistemaVentilacion', '$Marca', '$NumeroQuemadores')";
        if(mysqli_query($connexion, $cadena)){
            return 'ok';
        }else{
            return mysqli_error($connexion);
        }
    }
    public function actualizar($Tipo, $FuenteConsumo, $Tamano, $SistemaVentilacion, $Marca, $NumeroQuemadores, $idCocinas){
        $connexion = new ClaseConexion();
        $connexion = $connexion->ProcedimientoConectar();
        $cadena = "update cocinas set Tipo='$Tipo', FuenteConsumo='$FuenteConsumo', Tamano='$Tamano', SistemaVentilacion='$SistemaVentilacion', Marca='$Marca', NumeroQuemadores='$NumeroQuemadores' where idCocinas=$idCocinas";
        if(mysqli_query($connexion, $cadena)){
            return 'ok';
        }else{
            return mysqli_error($connexion);
        }
    }
    public function eliminar($idCocinas){
        $connexion = new ClaseConexion();
        $connexion = $connexion->ProcedimientoConectar();
        $cadena = "delete from cocinas where idCocinas=$idCocinas";
        if(mysqli_query($connexion, $cadena)){
            return true;
        }else{
            return mysqli_error($connexion);
        }
    }

}

?>