<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="col-md-6">
        <h2>Cadastro</h2>
        <form action="../backend/authservice.php" method="post">
            <input type="hidden" name="type" value="register">
            <div class="mb-3">
                <label for="new_TurmaId" class="form-label">TurmaId</label>
                <input type="id" class="form-control" id="new_TurmaId" name="new_TurmaId" required>
            </div>
            <div class="mb-3">
                <label for="new_SalaId" class="form-label">SalaId</label>
                <input type="id" class="form-control" id="new_SalaId" name="new_SalaId" required>
            </div>
            <div class="mb-3">
                <label for="new_DataInicio" class="form-label">Data Inicio</label>
                <input type="date" class="form-control" id="new_DataInicio" name="new_DataInicio" required>
            </div>
            <div class="mb-3">
                <label for="new_DataFim" class="form-label">Data Fim</label>
                <input type="date" class="form-control" id="new_DataFim" name="new_DataFim" required>
            </div>
            <div class="mb-3">
                <label for="new_HorarioInicio" class="form-label">Horario Inicio</label>
                <input type="time" class="form-control" id="new_HorarioInicio" name="new_HorarioInicio" required>
            </div>
            <div class="mb-3">
                <label for="new_HorarioFim" class="form-label">Horario Fim</label>
                <input type="time" class="form-control" id="new_HorarioFim" name="new_HorarioFim" required>
            </div>
            <div class="mb-3">
                <label for="new_NomeSala" class="form-label">Numero Sala</label>
                <input type="text" class="form-control" id="new_NumeroSala" name="new_NumeroSala" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>
</html>
