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


            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);


            return $reserva ?
                new Reserva(
                    $reserva['id'],
                    $reserva['TurmaId'],
                    $reserva['SalaId'],
                    $reserva['DataInicio'],
                    $reserva['DataFim'],
                    $reserva['HorarioInicio'],
                    $reserva['HorarioFim'],
                    $reserva['NomeSala'],
                    $reserva['NomeDocente']
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
                    $reserva['NomeSala'],
                    $reserva['NomeDocente']);
    }, $reservas);
        } catch (PDOException $e) {
            return [];
        }
    }


    public function create($reserva)
    {
        try {
           
            $sql = "INSERT INTO Reserva(TurmaId , SalaId , DataInicio , DataFim , HorarioInicio , HorarioFim , NomeSala , NomeDocente)
                    VALUES(:TurmaId, :SalaId, :DataInicio, :DataFim, :HorarioInicio, :HorarioFim, :NomeSala, :NomeDocente)";

            
            $stmt = $this->db->prepare($sql);

           
            $TurmaId = $reserva->getTurmaId();
            $SalaId = $reserva->getSalaId();
            $DataInicio = $reserva->getDataInicio();
            $DataFim = $reserva->getDataFim();
            $HorarioInicio = $reserva->getHorarioInicio();
            $HorarioFim = $reserva->getHorafioFim();
            $NomeSala = $reserva->getNomeSala();
            $NomeDocente = $reserva->getNomeDocente();

            $stmt->bindParam(':TurmaId', $reserva->getTurmaId());
            $stmt->bindParam(':SalaId', $reserva->getSalaId());
            $stmt->bindParam(':DataInicio', $reserva->getDataInicio());
            $stmt->bindParam(':DataFim', $reserva->getDataFim());
            $stmt->bindParam(':HorarioInicio', $reserva->getHorarioInicio());
            $stmt->bindParam(':HorarioFim', $reserva->getHorarioFim());
            $stmt->bindParam(':NomeSala', $reserva->getNomeSala());
            $stmt->bindParam(':NomeDocente', $reserva->getNomeDocente());

            
            $stmt->execute();

          
            return true;
        } catch (PDOException $e) {
            
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
            HorarioInicio = :HorarioInicio, HorarioFim = :HorarioFim, NomeSala = :NomeSala, NomeDocente = :NomeDocente
                    WHERE id = :id";

            $stmt = $this->db->prepare($sql);
            $id = $reserva->getId();
            $TurmaId = $reserva->getTurmaId();
            $SalaId = $reserva->getSalaId();
            $DataInicio = $reserva->getEmail();
            $DataFim = $reserva->getDataFim();
            $HorarioInicio = $reserva->getHorarioInicio();
            $HorarioFim = $reserva->getHorarioFim();
            $NomeSala = $reserva->getNomeSala();
            $NomeDocente = $reserva->getNomeDocente();

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':TurmaId', $TurmaId);
            $stmt->bindParam(':SalaId', $SalaId);
            $stmt->bindParam(':DataInicio', $DataInicio);
            $stmt->bindParam(':DataFim', $DataFim);
            $stmt->bindParam(':NomeSala', $NomeSala);
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