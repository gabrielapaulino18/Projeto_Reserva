<?php

class Reserva {
    private $id;
    private $turmaId;
    private $salaId;
    private $dataInicio;
    private $dataFim;
    private $horarioInicio;
    private $horarioFim;
    private $numeroSala;
    

    public function __construct($id, $turmaId, $salaId, $dataFim, $dataInicio, $horarioFim, $horarioInicio, $numeroSala) {
        $this->id = $id;
        $this->turmaId = $turmaId;
        $this->salaId = $salaId;
        $this->dataInicio = $dataInicio;
        $this->dataFim = $dataFim;
        $this->horarioInicio = $horarioInicio;
        $this->horarioFim = $horarioFim;
        $this->numeroSala = $numeroSala;
        
    }

    public function getId() {
        return $this->id;
    }

    public function getTurmaId() {
        return $this->turmaId;
    }

    public function getSalaId() {
        return $this->salaId;
    }

    public function getDataInicio() {
        return $this->dataInicio;
    }

    public function getDataFim() {
        return $this->dataFim;
    }

    public function getHorarioInicio() {
        return $this->horarioInicio;
    }

    public function getHorarioFim() {
        return $this->horarioFim;
    }

    public function getNumeroSala() {
        return $this->numeroSala;
    }

   

}


?>