<?php 

require_once 'config/Database.php';
require_once 'entity/SubAreas.php';
require_once 'BaseDAO.php';

class SubAreasDAO implements BaseDAO {
    private $db;
    public function __construct() {
        $this->db = Database::getInstance();
        }

    public function getById($id) 
    {
        try {
            $sql = "SELECT * FROM SubArea WHERE Id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);


            $stmt->execute();


            $subArea = $stmt->fetch(PDO::FETCH_ASSOC);

            return $subArea ?
                new Area(
                    $subArea['id'],
                    $subArea['areaId'],
                    $subArea['nomeSubArea'],
                    $subArea['cor']
                )
                : null;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function getAll()
    {
        try {
          
            $sql = "SELECT * FROM SubArea";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
             $subAreas = $stmt->fetchAll(PDO::FETCH_ASSOC);

           
            return array_map(function ($curso) {
                return new Area(
                    $subArea['id'],
                    $subArea['areaId'],
                    $subArea['nomeSubArea'],
                    $subArea['cor']);
    }, $subAreas);
        } catch (PDOException $e) {
            return [];
        }
    }

    public function create($subArea)
    {
        try {
           
            $sql = "INSERT INTO SubArea(Id , areaId, nomeSubArea, cor)
                    VALUES(:Id, :areaId, :nomeSubArea, :cor)";

            
            $stmt = $this->db->prepare($sql);

           
            $id = $subArea->getId();
            $areaId = $subArea->getAreaId();
            $nomeSubArea = $subArea->getNomeSubArea();
            $cor = $subArea->getCor();
            

            $stmt->bindParam(':Id', $subArea->getId());
            $stmt->bindParam(':AreaId', $areaId->getAreaId());
            $stmt->bindParam(':NomeSubArea', $subArea->getNomeSubArea());
            $stmt->bindParam(':Cor', $subArea->getCor());
            

            
            $stmt->execute();

          
            return true;
        } catch (PDOException $e) {
            
            return false;
        }
    }

    public function update($subArea)
    {
        try {
           
            $existingUser = $this->getById($subArea->getId());

            if (!$existingUser) {
                return false; 
            }

            $sql = "UPDATE Docente SET Id = :Id, areaId = :AreaId, NomeSubArea = :NomeSubArea, cor = :cor WHERE id = :id";

            $stmt = $this->db->prepare($sql);
            $id = $subArea->getId();
            $areaId = $subArea->getAreaId();
            $nomeSubArea = $subArea->getNomeSubArea();
            $cor = $subArea->getCor();
            
            
           

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':AreaId', $areaId->getAreaId());
            $stmt->bindParam(':NomeSubArea', $subArea->getNomeSubArea());
            $stmt->bindParam(':Cor', $subArea->getCor());
            
            

            $stmt->execute();

            return true;
        } catch (PDOException $e) {

            return false;
        }
    }

    public function delete($id)
    {
        try {
            $sql = "DELETE FROM SubArea WHERE Id = :id";
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