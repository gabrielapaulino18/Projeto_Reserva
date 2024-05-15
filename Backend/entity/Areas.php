<?php

class Areas {
    private $id;
    private $nomeArea;

    public function __construct($id, $nomeArea) {
        $this->id = $id;
        $this->nomeArea = $nomeArea;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getNomeArea() {
        return $this->nomeArea;
    }
}

?>