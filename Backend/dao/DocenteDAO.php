<?php 

require_once 'config/Database.php';
require_once 'entity/Docente.php';
require_once 'BaseDAO.php';

class DocenteDAO implements BaseDAO {
    private $db;
    public function __construct() {
        $this->db = Database::getInstance();
        }

    public function getById($id) 
    {
        try {
            $sql = "SELECT * FROM Docente WHERE Id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);


            $stmt->execute();


            $docente = $stmt->fetch(PDO::FETCH_ASSOC);

            return $docente ?
                new Area(
                    $docente['id'],
                    $docente['NomeDocente']
                )
                : null;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function getAll()
    {
        try {
          
            $sql = "SELECT * FROM Docente";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
             $docentes = $stmt->fetchAll(PDO::FETCH_ASSOC);

           
            return array_map(function ($curso) {
                return new Area(
                    $docente['id'],
                    $docente['NomeDocente']);
    }, $docentes);
        } catch (PDOException $e) {
            return [];
        }
    }

    public function create($docente)
    {
        try {
           
            $sql = "INSERT INTO Docente(Id , NomeDocente)
                    VALUES(:Id, :NomeDocente)";

            
            $stmt = $this->db->prepare($sql);

           
            $id = $docente->getId();
            $NomeDocente = $docente->getNomeDocente();
            

            $stmt->bindParam(':Id', $area->getId());
            $stmt->bindParam(':NomeDocente', $area->getNomeDocente());
            

            
            $stmt->execute();

          
            return true;
        } catch (PDOException $e) {
            
            return false;
        }
    }

    public function update($docente)
    {
        try {
           
            $existingUser = $this->getById($docente->getId());

            if (!$existingUser) {
                return false; 
            }

            $sql = "UPDATE Docente SET Id = :Id, NomeDocente = :NomeDocente WHERE id = :id";

            $stmt = $this->db->prepare($sql);
            $id = $docente->getId();
            $NomeDocente = $docente->getNomeArea();
            
           

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':NomeDocente', $NomeDocente);
            
            

            $stmt->execute();

            return true;
        } catch (PDOException $e) {

            return false;
        }
    }

    public function delete($id)
    {
        try {
            $sql = "DELETE FROM Docente WHERE Id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

}



?>