<?php 

require_once 'config/Database.php';
require_once 'entity/Curso_areas.php';
require_once 'BaseDAO.php';

class Curso_Areas implements BaseDAO {
    private $db;
    public function __construct() {
        $this->db = Database::getInstance();
        }

    public function getById($id) 
    {
        try {
            $sql = "SELECT * FROM Curso_areas WHERE Id = :id";
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
          
            $sql = "SELECT * FROM Curso_Areas";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
             $cursoAreas = $stmt->fetchAll(PDO::FETCH_ASSOC);

           
            return array_map(function ($curso) {
                return new Area(
                    $cursoArea['cursoId'],
                    $cursoArea['areaId']);
    }, $cursoAreas);
        } catch (PDOException $e) {
            return [];
        }
    }

    public function create($cursoArea)
    {
        try {
           
            $sql = "INSERT INTO Curso_Areas(cursoId , areaId)
                    VALUES(:cursoId, :areaId)";

            
            $stmt = $this->db->prepare($sql);

           
            $cursoId = $cursoArea->getCursoId();
            $areaId = $cursoArea->getAreaId();
            

            $stmt->bindParam(':cursoId', $cursoArea->getCursoId());
            $stmt->bindParam(':AreaId', $cursoArea->getAreaId());
            

            $stmt->execute();

          
            return true;
        } catch (PDOException $e) {
            
            return false;
        }
    }

    public function update($cursoArea)
    {
        try {
           
            $existingUser = $this->getById($cursoArea->getId());

            if (!$existingUser) {
                return false; 
            }

            $sql = "UPDATE Curso_Areas SET CursoId = :CursoId, AreaId = :AreaId WHERE id = :id";

            $stmt = $this->db->prepare($sql);
            $cursoId = $cursoArea->getCursoId();
            $areaId = $cursoArea->getAreaId();
            

            $stmt->bindParam(':cursoId', $cursoArea->getCursoId());
            $stmt->bindParam(':AreaId', $cursoArea->getAreaId());
            
            

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