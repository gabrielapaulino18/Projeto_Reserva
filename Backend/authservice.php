<?php
session_start();
require_once 'entity/Reserva.php';
require_once 'dao/ReservaDAO.php';

$type = filter_input(INPUT_POST, "type");

if ($type === "register") {
    // Recebimento dos dados vindos por input do HTML
    $new_TurmaId = filter_input(INPUT_POST, "new_TurmaId");
    $new_SalaId = filter_input(INPUT_POST, "new_SalaId");
    $new_DataInicio = filter_input(INPUT_POST, "new_DataInicio");
    $new_DataFim = filter_input(INPUT_POST, "new_DataFim");
    $new_HorarioInicio = filter_input(INPUT_POST, "new_HorarioInicio");
    $new_HorarioFim = filter_input(INPUT_POST, "new_HorarioFim");
    $new_NumeroSala = filter_input(INPUT_POST, "new_NumeroSala");
   

    // Mensagem de depuração para verificar se os dados foram corretamente recebidos
    echo "Dados recebidos do formulário: <br>";
    echo "TurmaId: " . $new_TurmaId . "<br>";
    echo "SalaId: " . $new_SalaId . "<br>";
    echo "Data Inicio: " . $new_DataInicio . "<br>";
    echo "Data Fim: " . $new_DataFim . "<br>";
    echo "Horario Inicio: " . $new_HorarioInicio . "<br>";
    echo "Horario Fim: " . $new_HorarioFim . "<br>";
    echo "Numero Sala: " . $new_NumeroSala . "<br>";
    


    // Criacao do Usuario no banco de dados por uso do UsuarioDAO
    $reserva = new Reserva(null, $new_TurmaId, $new_SalaId, $new_DataInicio, $new_DataFim, $new_HorarioInicio, $new_HorarioFim, $new_NumeroSala);
    $ReservaDAO = new ReservaDAO();
    $success = $ReservaDAO->create($reserva);

    // Verificação se o cadastro foi bem-sucedido
    if ($success) {
        echo "Reserva cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar reserva. Por favor, tente novamente.";
    }
}
?>
