<?php

class Curso {
    private $id;
    private $nomeCurso;
    private $siglaCurso;
    private $subAreaId;

    public function __construct($id, $nomeCurso, $siglaCurso, $subAreaId) {
        $this->id = $id;
        $this->nomeCurso = $nomeCurso;
        $this->siglaCurso = $siglaCurso;
        $this->subAreaId = $subAreaId;
    }

    public function getId() {
        return $this->id;
    }

    public function getNomeCurso() {
        return $this->nomeCurso;
    }

    public function getSiglaCurso() {
        return $this->siglaCurso;
    }

    public function getSubAreaId() {
        return $this->subAreaId;
    }
}


?>