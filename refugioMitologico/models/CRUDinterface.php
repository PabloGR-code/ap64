<?php

    interface crudinterface {
        public function agregar($objeto);

        public function listar();

        public function obtenerPorId($id);

        public function actualizar($id, $objeto);

        public function eliminar($id);
    }