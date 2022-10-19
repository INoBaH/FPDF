<?php
class AbmAuto{
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Tabla
     */
    private function cargarObjeto($param){
        $obj = null;
           
        if( array_key_exists('Patente',$param) and array_key_exists('Marca',$param) 
        and array_key_exists('Modelo',$param) and array_key_exists('Km',$param)
        and array_key_exists('Anio',$param) and array_key_exists('Observaciones',$param)){
            
            $obj = new Auto();
            $obj->setear(strtoupper($param['Patente']), strtoupper($param['Marca']), strtoupper($param['Modelo']), $param['Km'], $param['Anio'], strtoupper($param['Observaciones']));
        }
        return $obj;
    }  
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Tabla
     */
    public function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['Patente']) ){
            $obj = new Auto();
            $obj->setear($param['Patente'], null);
        }
        return $obj;
    }
    
    
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['Patente']))
            $resp = true;
        return $resp;
    }
    
    /**
     * 
     * @param array $param
     */
    public function alta($param){
        //verEstructura($param);
        $resp = false;
        $elObjtTabla = $this->cargarObjeto($param);
        //verEstructura($elObjtTabla);
        if ($elObjtTabla!=null and $elObjtTabla->insertar()){
            $resp = true;
        }
        return $resp;
        
    }
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjetoConClave($param);
            if ($elObjtTabla!=null and $elObjtTabla->eliminar()){
                $resp = true;
            }
        }
        
        return $resp;
    }
    
    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        //verEstructura($param);
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjAuto = $this->cargarObjeto($param);
            //verEstructura($elObjAuto);

            if($elObjAuto!=null and $elObjAuto->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param){ //Si ingresa con $param NULL es para que muestre todos los autos
        $where = " true ";
        
        if ($param<>NULL){
            if  (isset($param['Patente']))
                $where.=" and Patente ='".$param['Patente']."'";

            if  (isset($param['Marca']))
                 $where.=" and Marca ='".$param['Marca']."'";

            if  (isset($param['Modelo']))
                 $where.=" and Modelo ='".$param['Modelo']."'";

            if  (isset($param['Km']))
                 $where.=" and Km ='".$param['Km']."'";

            if  (isset($param['Anio']))
                 $where.=" and Anio ='".$param['Anio']."'";

            if  (isset($param['Observaciones']))
                 $where.=" and Observaciones ='".$param['Observaciones']."'";
        }
        
        $arreglo = Auto::listar($where);
        return $arreglo;
    }
    
}
?>