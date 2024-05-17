<?php

require_once 'config/Database.php';
require_once 'entity/Reserva.php';
require_once 'BaseDAO.php';

class ReservaDAO implements BaseDAO {
    private $db;
    public function __construct() {
    
        $this->db = Database::getInstance();
    }

    public function getById($id)
    {
        try {

            $sql = "SELECT * FROM Reserva WHERE Id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);


            $stmt->execute();


            $reserva = $stmt->fetch(PDO::FETCH_ASSOC);


            return $reserva ?
                new Reserva(
                    $reserva['id'],
                    $reserva['TurmaId'],
                    $reserva['SalaId'],
                    $reserva['DataInicio'],
                    $reserva['DataFim'],
                    $reserva['HorarioInicio'],
                    $reserva['HorarioFim'],
                    $reserva['NumeroSala'],
                    
                )
                : null;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function getAll()
    {
        try {
          
            $sql = "SELECT * FROM Reserva";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
             $reservas = $stmt->fetchAll(PDO::FETCH_ASSOC);

           
            return array_map(function ($reserva) {
                return new Reserva(
                    $reserva['id'],
                    $$reserva['TurmaId'],
                    $reserva['SalaId'],
                    $reserva['DataInicio'],
                    $reserva['DataFim'],
                    $reserva['HorarioInicio'],
                    $reserva['HorarioFim'],
                    $reserva['NumeroSala']);
                    
    }, $reservas);
        } catch (PDOException $e) {
            return [];
        }
    }


    public function create($reserva)
    {
        try {
            $sql = "INSERT INTO Reserva (TurmaId, SalaId, DataInicio, DataFim, HorarioInicio, HorarioFim, NumeroSala)
                    VALUES (:TurmaId, :SalaId, :DataInicio, :DataFim, :HorarioInicio, :HorarioFim, :NumeroSala)";
    
            $stmt = $this->db->prepare($sql);
    
            // Obtendo os valores das propriedades da reserva
            $TurmaId = $reserva->getTurmaId();
            $SalaId = $reserva->getSalaId();
            $DataInicio = $reserva->getDataInicio();
            $DataFim = $reserva->getDataFim();
            $HorarioInicio = $reserva->getHorarioInicio();
            $HorarioFim = $reserva->getHorarioFim();
            $NumeroSala = $reserva->getNumeroSala();
           
    
            // Substituindo as variáveis no comando SQL
            $stmt->bindParam(':TurmaId', $TurmaId);
            $stmt->bindParam(':SalaId', $SalaId);
            $stmt->bindParam(':DataInicio', $DataInicio);
            $stmt->bindParam(':DataFim', $DataFim);
            $stmt->bindParam(':HorarioInicio', $HorarioInicio);
            $stmt->bindParam(':HorarioFim', $HorarioFim);
            $stmt->bindParam(':NumeroSala', $NumeroSala);
            
    
            // Executando o comando SQL
            $stmt->execute();
    
            return true;
        } catch (PDOException $e) {
            // Em caso de erro, imprima o erro e retorne false
            echo "Erro ao inserir reserva: " . $e->getMessage();
            return false;
        }
    }
    


    public function update($reserva)
    {
        try {
           
            $existingUser = $this->getById($reserva->getId());

            if (!$existingUser) {
                return false; 
            }

            $sql = "UPDATE Reserva SET TurmaId = :TurmaId, SalaId = :SalaId, DataInicio = :DataInicio,
            HorarioInicio = :HorarioInicio, HorarioFim = :HorarioFim, NumeroSala = :NumeroSala WHERE id = :id";

            $stmt = $this->db->prepare($sql);
            $id = $reserva->getId();
            $TurmaId = $reserva->getTurmaId();
            $SalaId = $reserva->getSalaId();
            $DataInicio = $reserva->getEmail();
            $DataFim = $reserva->getDataFim();
            $HorarioInicio = $reserva->getHorarioInicio();
            $HorarioFim = $reserva->getHorarioFim();
            $NumeroSala = $reserva->getNumeroSala();
       

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':TurmaId', $TurmaId);
            $stmt->bindParam(':SalaId', $SalaId);
            $stmt->bindParam(':DataInicio', $DataInicio);
            $stmt->bindParam(':DataFim', $DataFim);
            $stmt->bindParam(':NumeroSala', $NumeroSala);
      

            $stmt->execute();

            return true;
        } catch (PDOException $e) {

            return false;
        }
    }

    public function delete($id)
    {
        try {
            $sql = "DELETE FROM Reserva WHERE Id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}