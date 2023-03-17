<?php
class ClaseConexion{
    public $conexion;
    protected $manager;
    private $basedatos = 'cocinas';
    private $host = 'localhost';
    private $usuario = 'root';
    private $password = '';
    private $port = '33065';
    public function ProcedimientoConectar(){
        $this->conexion = mysqli_connect($this->host,$this->usuario,$this->password,$this->basedatos,$this->port);
        mysqli_query($this->conexion,'SET NAMES utf8');
        if($this->conexion === false) die('error al conectar con el servidor: ' . mysqli_connect_error());
        $this->manager=mysqli_select_db($this->conexion, $this->basedatos);
        if($this->manager == 0) die('error de conexcion con la base de datos');
        return $this->conexion;
    }
}
