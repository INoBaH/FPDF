<?php 
class Auto {
    private $patente;
    private $marca;
    private $modelo;
    private $km;
    private $anio;
    private $observaciones;
    private $mensajeoperacion;
    
   
    public function __construct(){
        $this->patente="";
        $this->marca="";
        $this->modelo="";
        $this->km= "";
        $this->anio="";
        $this->observaciones="";
        $this->mensajeoperacion = "";
    }

    public function setear($patente, $marca, $modelo, $km, $anio, $observaciones){
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setKm($km);
        $this->setAnio($anio);
        $this->setObservaciones($observaciones);
    }


    public function getPatente(){
        return $this->patente;
        
    }
    public function setPatente($valor){
        $this->patente = $valor;
    }
    
    public function getMarca(){
        return $this->marca; 
    }
    public function setMarca($valor){
        $this->marca = $valor; 
    }

    public function getModelo(){
        return $this->modelo;  
    }
    public function setModelo($valor){
        $this->modelo = $valor;   
    }

    public function getKm(){
        return $this->km; 
    }
    public function setKm($valor){
        $this->km = $valor;
    }

    public function getAnio(){
        return $this->anio; 
    }
    public function setAnio($valor){
        $this->anio = $valor;
    }

    public function getObservaciones(){
        return $this->observaciones; 
    }
    public function setObservaciones($valor){
        $this->observaciones = $valor;
    }
    

    public function getmensajeoperacion(){
        return $this->mensajeoperacion;
    }
    public function setmensajeoperacion($valor){
        $this->mensajeoperacion = $valor;
    }


    public function Buscar($patente){
        $resp = false;
        $base= new BaseDatos();
        $sql="SELECT * FROM auto WHERE Patente=".$patente;
        if($base->Iniciar()){
            if($base->Ejecutar($sql)){
                if($row = $base->Registro()){
                    $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['Km'], $row['Anio'], $row['Observaciones']);
                    $resp = true;
                }
            }else {
                $this->setmensajeoperacion("Tabla->buscar: ".$base->getError());
            }
        }else{
            $this->setmensajeoperacion("Tabla->buscar: ".$base->getError());
        }
        return $resp;
    }
    

    public function cargar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="SELECT * FROM auto WHERE Patente = ".$this->getPatente();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['Km'], $row['Anio'], $row['Observaciones']);
                }
            }
        } else {
            $this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        return $resp;   
    }
    

    public function insertar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="INSERT INTO auto(Patente, Marca, Modelo, Km, Anio, Observaciones)  VALUES('".strtoupper($this->getPatente())."', '".strtoupper($this->getMarca())."', '".strtoupper($this->getModelo())."', '".$this->getKm()."', '".$this->getAnio()."', '".strtoupper($this->getObservaciones())."');";

        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Tabla->insertar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->insertar: ".$base->getError());
        }
        return $resp;
    }
    

    public function modificar(){
        $resp = false;
        $base=new BaseDatos();
        
        $sql="UPDATE auto SET Marca='".$this->getMarca()."',Modelo='".$this->getModelo()."',Km='".$this->getKm()."', Anio='".$this->getAnio()."', Observaciones='".$this->getObservaciones()."' WHERE Patente='".$this->getPatente()."'";
        
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
        }
        return $resp;
    }
   

    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="DELETE FROM auto WHERE Patente=".$this->getPatente();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("Tabla->eliminar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->eliminar: ".$base->getError());
        }
        return $resp;
    }
    

    public static function listar($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM auto ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new Auto();  
                    $obj->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['Km'], $row['Anio'], $row['Observaciones'] );
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            $this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
 
        return $arreglo;
    }
    
}


?>