<?php

class Sala {
    private $id;
    private $nomeSala;
    private $capacidadeSala;
    private $tipoSala;

    public function __construct($id, $nomeSala, $capacidadeSala, $tipoSala) {
        $this->id = $id;
        $this->nomeSala = $nomeSala;
        $this->capacidadeSala = $capacidadeSala;
        $this->tipoSala = $tipoSala;
    }

    public function getId() {
        return $this->id;
    }

    public function getNomeSala() {
        return $this->nomeSala;
    }

    public function getCapacidadeSala() {
        return $this->capacidadeSala;
    }

    public function getTipoSala() {
        return $this->tipoSala;
    }

}

?>