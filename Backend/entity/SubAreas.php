<?php

class SubAreas {
    private $id;
    private $areaId;
    private $nomeSubArea;
    private $cor;

    public function __construct($id, $areaId, $nomeSubArea) {
        $this->id = $id;
        $this->areaId = $areaId;
        $this->nomeSubArea = $nomeSubArea;
        $this->cor = $cor;
    }

    public function getId() {
        return $this->id;
    }

    public function getAreaId() {
        return $this->areaId;
    }

    public function getNomeSubAreas() {
        return $this->nomeSubAreas;
    }

    public function getCor() {
        return $this->cor;
    }
}



?>