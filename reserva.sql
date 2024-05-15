CREATE DATABASE cadastro;
USE cadastro;

CREATE TABLE IF NOT EXISTS Reserva (
    id INT AUTO_INCREMENT PRIMARY KEY,
    TurmaId INT,
    SalaId INT,
    DataInicio DATE NOT NULL,
    DataFim DATE NOT NULL,
    HorarioInicio TIME NOT NULL,
    HorarioFim TIME NOT NULL,
    NomeSala VARCHAR(50) NOT NULL,
    NomeDocente VARCHAR(100) NOT NULL,
    FOREIGN KEY (TurmaID) REFERENCES Turma(id),
    FOREIGN KEY (SalaId) REFERENCES Sala(id)
);

CREATE TABLE IF NOT EXISTS Curso (
    id INT AUTO_INCREMENT PRIMARY KEY,
    NomeCurso VARCHAR(100) NOT NULL,
    SiglaCurso VARCHAR(10) NOT NULL
);

CREATE TABLE IF NOT EXISTS Docente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nomeDocente VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS Turma (
    id INT AUTO_INCREMENT PRIMARY KEY,
    CursoID INT,
    DocenteID INT,
    CodigoTurma INT,
    NumeroOferta INT NOT NULL,
    FOREIGN KEY (CursoID) REFERENCES Curso(id),
    FOREIGN KEY (DocenteID) REFERENCES Docente(id)
);


CREATE TABLE IF NOT EXISTS Sala (
    id INT AUTO_INCREMENT PRIMARY KEY,
    NomeSala VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS Areas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    NomeArea VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS SubAreas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    AreaID INT,
    NomeSubArea VARCHAR(50) NOT NULL,
    FOREIGN KEY (AreaID) REFERENCES Areas(id)
);

CREATE TABLE IF NOT EXISTS Curso_Areas (
    CursoID INT,
    AreaID INT,
    FOREIGN KEY (CursoID) REFERENCES Curso(id),
    FOREIGN KEY (AreaID) REFERENCES Areas(id)
);