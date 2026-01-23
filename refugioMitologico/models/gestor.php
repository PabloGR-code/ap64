<?php
require_once '../models/CRUDinterface.php';

class Gestor implements CRUDinterface{
    private $datos=[];

    public function agregar($objeto){
        $this->datos[]=$objeto;
    }

    public function listar(){
        return $this->datos;
    }

    public function obtenerPorId($id){
        return $this->datos[$id] ?? null;
    }

    public function actualizar($id, $objeto){
        if(isset($this->datos[$id])) {
            $this->datos[$id]=$objeto;     
        }
    }

    public function eliminar($id){
        id(isset($this->datos[$id])){
            unset($this->datos[$id]);
        }
    }
}