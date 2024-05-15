<?php

class SubAreas {
    private $id;
    private $areaId;
    private $nomeSubArea;

    public function __construct($id, $areaId, $nomeSubArea) {
        $this->id = $id;
        $this->areaId = $areaId;
        $this->nomeSubArea = $nomeSubArea
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
}



?>