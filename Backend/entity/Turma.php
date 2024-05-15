<?php 

class Turma {
    private $id;
    private $cursoId;
    private $docenteId;
    private $codigoTurma;
    private $numeroOferta;

    public function __construct($id, $cursoId, $docenteId, $codigoTurma, $numeroOferta) {
        $this->id = $id;
        $this->cursoId = $cursoId;
        $this->docenteId = $docenteId;
        $this->codigoTurma = $codigoTurma;
        $this->numeroOferta = $numeroOferta;

    }

    public function getId() {
        return $this->id;
    }

    public function getCursoId() {
        return $this->cursoId;
    }

    public function getDocenteId() {
        return $this->docenteId;
    }

    public function getCodigoTurma() {
        return $this->CodigoTurma;
    }

    public function getNumeroOferta() {
        return $this->numeroOferta;
    }
}



?>