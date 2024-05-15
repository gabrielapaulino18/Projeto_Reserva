<?php

class Sala {
    private $id;
    private $nomeSala;

    public function __construct($id, $nomeSala) {
        $this->id = $id;
        $this->nomeSala = $nomeSala;
    }

    public function getId() {
        return $this->id;
    }

    public function getNomeSala() {
        return $this->nomeSala;
    }

}

?>