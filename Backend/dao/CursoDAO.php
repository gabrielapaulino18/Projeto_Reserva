<?php 

require_once 'config/Database.php';
require_once 'entity/Curso.php';
require_once 'BaseDAO.php';

class CursoDAO implements BaseDAO {
    private $db;
    public function __construct() {
        $this->db = Database::getInstance();
        }

    public function getById($id) 
    {
        try {
            $sql = "SELECT * FROM Cruso WHERE Id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);


            $stmt->execute();


            $curso = $stmt->fetch(PDO::FETCH_ASSOC);

            return $curso ?
                new Curso(
                    $curso['id'],
                    $curso['NomeCurso'],
                    $curso['SiglaCurso'],
                    $curso['SubAreaId']
                )
                : null;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function getAll()
    {
        try {
          
            $sql = "SELECT * FROM Curso";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
             $cursos = $stmt->fetchAll(PDO::FETCH_ASSOC);

           
            return array_map(function ($curso) {
                return new Curso(
                    $curso['id'],
                    $curso['NomeCurso'],
                    $curso['SiglaCurso'],
                    $curso['SubAreaId']);
    }, $cursos);
        } catch (PDOException $e) {
            return [];
        }
    }

    public function create($curso)
    {
        try {
           
            $sql = "INSERT INTO Curso(Id , NomeCurso , SiglaCurso , SubAreaId)
                    VALUES(:Id, :NomeCurso, :SiglaCurso, :SubAreaId)";

            
            $stmt = $this->db->prepare($sql);

           
            $id = $curso->getId();
            $NomeCurso = $curso->getNomeCurso();
            $SiglaCurso = $curso->getSiglaCurso();
            $SubAreaId = $curso->getSubAreaIdSu();
            

            $stmt->bindParam(':Id', $curso->getId());
            $stmt->bindParam(':NomeCurso', $curso->getNomeCurso());
            $stmt->bindParam(':SiglaCurso', $curso->getSiglaCurso());
            $stmt->bindParam(':SubAreaId', $curso->getSubAreaId());
            

            
            $stmt->execute();

          
            return true;
        } catch (PDOException $e) {
            
            return false;
        }
    }

    public function update($curso)
    {
        try {
           
            $existingUser = $this->getById($curso->getId());

            if (!$existingUser) {
                return false; 
            }

            $sql = "UPDATE Curso SET Id = :Id, NomeCurso = :NomeCurso, SiglaCurso = :SiglaCurso,
            SubAreaId = :SubAreaId WHERE id = :id";

            $stmt = $this->db->prepare($sql);
            $id = $curso->getId();
            $NomeCurso = $curso->getNomeCurso();
            $SiglaCurso = $curso->getSiglaCurso();
            $SubAreaId = $curso->getSubAreaId();
           

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':NomeCurso', $NomeCurso);
            $stmt->bindParam(':SiglaCurso', $SiglaCurso);
            $stmt->bindParam(':SubAreaId', $SubAreaId);
            

            $stmt->execute();

            return true;
        } catch (PDOException $e) {

            return false;
        }
    }

    public function delete($id)
    {
        try {
            $sql = "DELETE FROM Curso WHERE Id = :id";
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