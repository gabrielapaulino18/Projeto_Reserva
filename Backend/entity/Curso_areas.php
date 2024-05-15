<?php

class CursoAreas {
    private $cursoId;
    private $areaId;

    public function __construct($cursoId, $areaId) {
        $this->cursoId = $cursoId;
        $this->areaId = $areaId;
    }

    public function getCursoId() {
        return $this->cursoId;
    }

    public function getAreaId() {
        return $this->areaId;
    }
}

?>