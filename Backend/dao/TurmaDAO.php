<?php

require_once 'Database.php';
require_once 'entity/Turma.php';

class TurmaDAO implements BaseDAO {
    private $db;

    public function getById($id) {
        try {
            $sql = "SELECT * FROM Turma WHERE Id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                return new Turma(
                    $result['Id'],
                    $result['CursoID'],
                    $result['DocenteID'],
                    $result['CodigoTurma'],
                    $result['NumeroOferta'],
                    
                );
            }
            return null;
        } catch (PDOException $e) {
           
            return null;
        }
    }

    public function getAll() {
        try {
            $sql = "SELECT * FROM Turma";
            $stmt = $this->db->query($sql);
            $turmas = [];
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $turmas[] = new Turma(
                    $row['Id'],
                    $row['CursoID'],
                    $row['DocenteID'],
                    $row['CodigoTurma'],
                    $row['NumeroOferta'],
        
                );
            }
            return $turmas;
        } catch (PDOException $e) {
           
            return [];
        }
    }

    public function create($turma) {
        try {
            $sql = "INSERT INTO Turma (CursoID, DocenteID, CodigoTurma, NumeroOferta) 
                    VALUES (:CursoID, :DocenteID, :CodigoTurma, :NumeroOferta)";
            $stmt = $this->db->prepare($sql);
            $CursoID = $turma->getCursoID();
            $DocenteID = $turma->getDocenteID();
            $CodigoTurma = $turma->getCodigoTurma();
            $NumeroOferta = $turma->getNumeroOferta();
            
    
            $stmt->bindParam(':CursoID', $CursoID);
            $stmt->bindParam(':DocenteID', $DocenteID);
            $stmt->bindParam(':CodigoTurma', $CodigoTurma);
            $stmt->bindParam(':NumeroOferta', $NumeroOferta);
            $stmt->bindParam(':usuarioAtualizacao', $NumeroOferta);
            
            
            return $stmt->execute();
        } catch (PDOException $e) {
           
            return false;
        }
    }
    
    public function update($turma) {
        try {
            $sql = "UPDATE Turma 
                    SET id= :ID, DocenteID = :DocenteId, CodigoTurma = :Codigoturma, NumeroOferta = :Numerooferta, 
                    WHERE Id = :id";

            $stmt = $this->db->prepare($sql);
            $id = $turma->getId();
            $CursoID = $turma->geCursoID();
            $DocenteID = $turma->getDocenteID();
            $CodigoTurma = $turma->getTurma();
            $NumeroOferta = $turma->getNumeroOferta();
            
    
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nome', $CursoID);
            $stmt->bindParam(':descricao', $DocenteID);
            $stmt->bindParam(':dataCriacao', $CodigoTurma);
            $stmt->bindParam(':dataAtualizacao', $NumeroOferta);
        ;
    
            return $stmt->execute();
        } catch (PDOException $e) {
           
            return false;
        }
    }
    

    public function delete($id) {
        try {
            $sql = "DELETE FROM Turma WHERE Id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            
            return false;
        }
    }

}

?>