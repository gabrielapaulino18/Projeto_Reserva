<?php 

require_once 'config/Database.php';
require_once 'entity/Areas.php';
require_once 'BaseDAO.php';

class AreasDAO implements BaseDAO {
    private $db;
    public function __construct() {
        $this->db = Database::getInstance();
        }

    public function getById($id) 
    {
        try {
            $sql = "SELECT * FROM Area WHERE Id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);


            $stmt->execute();


            $area = $stmt->fetch(PDO::FETCH_ASSOC);

            return $area ?
                new Area(
                    $area['id'],
                    $area['NomeArea']
                )
                : null;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function getAll()
    {
        try {
          
            $sql = "SELECT * FROM Area";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
             $areas = $stmt->fetchAll(PDO::FETCH_ASSOC);

           
            return array_map(function ($curso) {
                return new Area(
                    $area['id'],
                    $area['NomeArea']);
    }, $areas);
        } catch (PDOException $e) {
            return [];
        }
    }

    public function create($area)
    {
        try {
           
            $sql = "INSERT INTO Area(Id , NomeArea)
                    VALUES(:Id, :NomeArea)";

            
            $stmt = $this->db->prepare($sql);

           
            $id = $area->getId();
            $NomeArea = $area->getNomeArea();
            

            $stmt->bindParam(':Id', $area->getId());
            $stmt->bindParam(':NomeArea', $area->getNomeArea());
            

            
            $stmt->execute();

          
            return true;
        } catch (PDOException $e) {
            
            return false;
        }
    }

    public function update($area)
    {
        try {
           
            $existingUser = $this->getById($area->getId());

            if (!$existingUser) {
                return false; 
            }

            $sql = "UPDATE Area SET Id = :Id, NomeArea = :NomeArea WHERE id = :id";

            $stmt = $this->db->prepare($sql);
            $id = $area->getId();
            $NomeArea = $area->getNomeArea();
            
           

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':NomeArea', $NomeArea);
            
            

            $stmt->execute();

            return true;
        } catch (PDOException $e) {

            return false;
        }
    }

    public function delete($id)
    {
        try {
            $sql = "DELETE FROM Area WHERE Id = :id";
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