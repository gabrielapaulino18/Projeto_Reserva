<?php

require_once 'entity/Sala.php';
require_once 'BaseDAO.php';

class SalaDAO implements BaseDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getById($id) {
        try {
            $sql = "SELECT * FROM Sala WHERE Id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if($result) {
                return new Sala(
                    $result['Id'],
                    $result['NomeSala'],
                    $result['CapacidadeSala'],
                    $result['TipoSala'],
                    $result['Capacidade'],
                    
                );
            }
            
            return null;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function getAll() {
        try {
            $sql = "SELECT * FROM Sala WHERE";
            $stmt = $this->db->prepare($sql);
            $salas = [];

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $grupos = new Sala(
                    null,
                    $row['Id'],
                    $row['NomeSala'],
                    $row['CapacidadeSala'],
                    $row['TipoSala'],
                   
                );
            }
           
            return $salas;
        } catch (PDOException $e) {
            return [];
        }
    }


    public function create($sala) {
        try {
            $sql = "INSERT INTO Sala (Id, NomeSala, CapacidadeSala, TipoSala)
                    VALUES (:id, :nomesala, :capacidadesala, :tiposala)";
            
            $stmt = $this->db->prepare($sql);
                        
            $Id = $sala->getId();
            $NomeSala = $sala->getNomeSala();
            $CapacidadeSala = $sala->getCapacidadeSala();
            $TipoSala = $sala->getTipoSala();
           

            $stmt->bindParam(':id', $Id);
            $stmt->bindParam(':nomesala', $NomeSala);
            $stmt->bindParam(':capacidadesala', $CapacidadeSala);
            $stmt->bindParam(':tiposala', $TipoSala);
          

            return $stmt->execute();
        } catch (PDOException $e) {
           
            return false;
        }
    }

    
    }


?>