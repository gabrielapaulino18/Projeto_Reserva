INSERT INTO SubAreas (NomeSubArea)
VALUES
('Administração'),
('Finanças e Contabilidade'),
('Gestão de Pessoas e Liderança'),
('Marketing'),
('Segurança e Saúde no Trabalho'),
('Computação Gráfica e Internet'),
('Redes e Infraestrutura'),
('EMED'),
('Vendas');

-- Inserir dados na tabela Curso
INSERT INTO Curso (NomeCurso, SiglaCurso, SubAreasID)
VALUES
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM ADMINISTRAÇÃO', 'ADM09', 1),
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM ADMINISTRAÇÃO', 'ADM10', 1),
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM ADMINISTRAÇÃO', 'ADM11', 1),
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM ADMINISTRAÇÃO', 'ADM12', 1),
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM ADMINISTRAÇÃO', 'ADM13', 1),
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM ADMINISTRAÇÃO', 'ADM14', 1),
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM ADMINISTRAÇÃO', 'ADM15', 1),
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM ADMINISTRAÇÃO', 'ADM16', 1),
('FERRAMENTAS DE PLANEJAMENTO E GESTÃO EMPRESARIAL', 'FPGE01', 1),
('FERRAMENTAS DE PLANEJAMENTO E GESTÃO EMPRESARIAL', 'FPGE02', 1),
('GERENCIAMENTO DO TEMPO', 'GDT01', 1),
('PLANO DE NEGÓCIOS NA PRÁTICA', 'PNP01', 1),
('GESTÃO DA QUALIDADE EM PROCESSOS', 'GQP01', 1),
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM FINANÇAS', 'FIN02', 2),
('ESCRITURAÇÃO FISCAL', 'EF02', 2),
('ESCRITURAÇÃO FISCAL', 'EF03', 2),
('ADMINISTRAÇÃO DE CONTAS A PAGAR RECEBER E TESOURARIA', 'ACPRT02', 2),
('ANALISTA DE CRÉDITO', 'ACRED01', 2),
('ANALISTA DE CRÉDITO', 'ACRED02', 2),
('GESTÃO TRIBUTÁRIA - PLANEJAMENTO TRIBUTÁRIO', 'GTO1', 2),
('FINANÇAS PARA NÃO FINANCEIROS', 'FNF02', 2),
('FINANÇAS PARA NÃO FINANCEIROS', 'FNF03', 2),
('ADMINISTRAÇÃO DE CONTAS A PAGAR RECEBER E TESOURARIA', 'ACPRT03', 2),
('NOÇÕES DE CONTABILIDADE PARA NÃO CONTADORES', 'NCNC01', 2),
('ANALISTA FISCAL', 'ANF01', 2),
('ASSISTENTE FISCAL', 'AF03', 2),
('ANÁLISE E PLANEJAMENTO FINANCEIRO', 'APF01', 2),
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM RECURSOS HUMANOS', 'RH04', 3),
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM RECURSOS HUMANOS', 'RH05', 3),
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM RECURSOS HUMANOS', 'RH06', 3),
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM RECURSOS HUMANOS', 'RH07', 3),
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM RECURSOS HUMANOS', 'RH08', 3),
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM RECURSOS HUMANOS', 'RH', 3),
('ASSISTENTE DE PESSOAL', 'AP01', 3),
('FORMAÇÃO DE ANALISTA DE TREINAMENTO E DESENVOLVIMENTO', 'FATD01', 3),
('COMUNICAÇÃO E FEEDBACK EFICAZ', 'CFE01', 3),
('COMUNICAÇÃO ASSERTIVA NAS ORGANIZAÇÕES', 'CAO01', 3),
('DINÂMICAS DE GRUPO COM FOCO EM COMPETÊNCIAS', 'DGFC01', 3),
('GESTÃO DE CONFLITOS NAS ORGANIZAÇÕES', 'GCO01', 3),
('RH ÁGIL: INOVAÇÃO PARA A GESTÃO ESTRATÉGICA DE PESSOAS', 'RHA01', 3),
('FERRAMENTAS PARA LIDERANÇA', 'FPL01', 3),
('DESENVOLVIMENTO DE LIDERANÇA: POTENCIALIZAÇÃO DE HABILIDADES E ATITUDES', 'DL01', 3),
('LIDERANÇA SITUACIONAL', 'LS02', 3),
('LIDERANÇA SITUACIONAL', 'LS03', 3),
('GESTÃO DE CARGOS E SALÁRIOS', 'GCS02', 3),
('INTRODUÇÃO À ADMINISTRAÇÃO DE PESSOAL', 'IAP01', 3),
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM LOGÍSTICA', 'LOG05', 6),
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM LOGÍSTICA', 'LOG07', 6),
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM LOGÍSTICA', 'LOG06', 6),
('COMPRAS E ADMINISTRAÇÃO DE MATERIAIS', 'CAM01', 6),
('GESTÃO DA LOGÍSTICA NO E-COMMERCE', 'GLE01', 6),
('MARKETING: FERRAMENTAS, MODELOS E ESTRATÉGIAS PARA A INOVAÇÃO', 'MFMEI01', 4),
('INBOUND MARKETING', 'IM02', 4),
('HABILITAÇÃO PROFISSIONAL TÉCNICA EM MARKETING', 'MKT01', 4),
('E-COMMERCE: PLANEJAMENTO DE NEGÓCIOS DIGITAIS', 'EPND01', 4),
('COMO VENDER NAS REDES SOCIAIS: SOCIAL COMMERCE', 'CVRS02', 9);


-- SubSolo
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('1S', '45', 'Normal', 'SubSolo');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('2S', '45', 'Normal', 'SubSolo');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('3S', '45', 'Multiuso', 'SubSolo');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('4S', '45', 'Maker', 'SubSolo');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('5S', '45', 'Atelier', 'SubSolo');

-- Térreo
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('Atendimento ao Cliente', '45', 'Normal', 'Térreo');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('Administração', '45', 'Normal', 'Térreo');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('Secretaria', '45', 'Normal', 'Térreo');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('Biblioteca', '45', 'Normal', 'Térreo');

-- 1° Andar
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('10', '45', 'Normal', '1° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('11', '45', 'Normal', '1° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('12', '45', 'Normal', '1° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('13', '45', 'Normal', '1° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('14', '45', 'Normal', '1° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('15', '45', 'Normal', '1° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('16', '45', 'Normal', '1° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('17', '45', 'Normal', '1° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('18', '45', 'Normal', '1° Andar');

-- 2° Andar
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('20', '45', 'Normal', '2° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('21', '45', 'Normal', '2° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('22', '45', 'Normal', '2° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('23', '45', 'Normal', '2° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('24', '45', 'Atelier', '2° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('25', '45', 'Experimental', '2° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('26', '45', 'Multiuso', '2° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('27', '45', 'Lab. Hardware', '2° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('28', '45', 'Lab. Hardware', '2° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('29', '45', 'Normal', '2° Andar');

-- 3° Andar
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('30', '45', 'Normal', '3° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('31', '45', 'Lab. Informática', '3° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('32', '45', 'Sala Convencional', '3° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('33', '45', 'Sala Convencional', '3° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('34', '45', 'Experimental', '3° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('35', '45', 'Lab. Informática', '3° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('36', '45', 'Lab. Informática', '3° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('37', '45', 'Lab. Informática', '3° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('38', '45', 'Lab. Informática', '3° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('39', '45', 'Lab. Informática', '3° Andar');

-- 4° Andar
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('40', '45', 'Lab. Informática', '4° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('41', '45', 'Lab. Informática', '4° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('42', '45', 'Lab. Informática', '4° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('43', '45', 'Lab. Informática', '4° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('44', '45', 'Lab. Games', '4° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('45', '45', 'Lab. Informática', '4° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('46', '45', 'Lab. Cisco', '4° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('47', '45', 'Lab. Informática', '4° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('48', '45', 'Lab. Informática', '4° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('49', '45', 'Lab. Informática', '4° Andar');

-- 5° Andar
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('Setor Técnico', '45', 'Normal', '5° Andar');
INSERT INTO Sala (NomeSala, CapacidadeSala, TipoSala, Andar) VALUES ('Docentes', '45', 'Normal', '5° Andar');

-- Inserir dados na tabela Docente
INSERT INTO Docente (nomeDocente) VALUES
('Regina'), ('Carlos'), ('Eduardo'), ('Michael'), ('Sirde'), ('Fernando'),
('Júlio'), ('Eric'), ('Pedro'), ('Lenilson'), ('Andrezza'), ('Guilherme'),
('Kaue'), ('Paulo'), ('Roberto'), ('Levi'), ('Bruno'), ('Fagner'), ('Aécio'),
('Luana'), ('Nerildo'), ('Lilia'), ('Arlindo'), ('Daniel'), ('Estevam'),
('Helio'), ('Hebert'), ('Israel'), ('Jeferson'), ('José'), ('Mauricio'),
('Michel'), ('Rogerio'), ('Sandromir'), ('Valdeci'), ('Yukio');

-- Inserir dados na tabela Turma
INSERT INTO Turma (CursoID, DocenteID, CodigoTurma, NumeroOferta) VALUES
(NULL, NULL, NULL, NULL), 
(NULL, NULL, NULL, NULL), 
(NULL, NULL, NULL, NULL), 
(NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL), 
(NULL, NULL, NULL, NULL), 
(NULL, NULL, NULL, NULL), 
(NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL), 
(NULL, NULL, NULL, NULL), 
(1, 1, 'ADM09', 1), 
(1, 1, 'ADM10', 2), 
(1, 1, 'ADM11', 3),
(1, 1, 'ADM12', 4), 
(1, 1, 'ADM13', 5), 
(1, 1, 'ADM14', 6), 
(1, 1, 'ADM15', 7), 
(1, 1, 'ADM16', 8),
(2, 2, 'FPGE02', 9), 
(2, 1, 'GDT01', 10), 
(2, 1, 'PNP01', 11), 
(2, 3, 'GQP01', 12), 
(3, 4, 'FIN02', 13),
(3, 5, 'EF02', 14), 
(3, 5, 'ACPRT02', 15), 
(3, 6, 'ACPRT02', 16), 
(3, 5, 'ACPRT03', 17), 
(3, 7, 'NCNC01', 18),
(3, 5, 'ANF01', 19), 
(3, 8, 'FNF02', 20), 
(3, 3, 'FNF03', 21), 
(4, 6, 'AP01', 22), 
(4, 7, 'FATD01', 23),
(4, 7, 'CFE01', 24), 
(4, 1, 'CAO01', 25), 
(4, 7, 'DGFC01', 26), 
(4, 1, 'GCO01', 27), 
(4, 7, 'RHA01', 28),
(4, 7, 'FPL01', 29), 
(4, 7, 'DL01', 30), 
(4, 1, 'LS02', 31), 
(4, 7, 'LS03', 32), 
(4, 6, 'GCS02', 33),
(4, 1, 'IAP01', 34), 
(4, 1, 'RH04', 35), 
(4, 1, 'RH05', 36), 
(4, 1, 'RH06', 37), 
(4, 1, 'RH07', 38),
(4, 1, 'RH08', 39), 
(4, 1, 'RH', 40), 
(5, 6, 'LOG07', 41), 
(5, 2, 'CAM01', 42), 
(5, 2, 'GLE01', 43),
(6, 9, 'MFMEI01', 44), 
(6, 8, 'IM02', 45), 
(6, 8, 'EPND01', 46), 
(7, 8, 'CVRS02', 47), 
(7, 7, 'TN01', 48),
(7, 7, 'TPITCH01', 49), 
(7, 7, 'VMMV01', 50), 
(7, 7, 'PC01', 51), 
(7, 8, 'IE01', 52), 
(7, 8, 'GPV01', 53),
(7, 7, 'EMDE01', 54), 
(8, 10, 'PV_ZANCONE01', 55), 
(9, 11, NULL, 56), 
(9, 12, NULL, 57), 
(9, 13, NULL, 58),
(9, 14, NULL, 59), 
(9, 15, NULL, 60), 
(9, 16, NULL, 61), 
(9, 17, NULL, 62), 
(9, 18, NULL, 63), 
(9, 19, NULL, 64),
(9, 20, NULL, 65), 
(9, 21, NULL, 66), 
(9, 22, NULL, 67), 
(9, 23, NULL, 68), 
(9, 24, NULL, 69), 
(9, 25, NULL, 70),
(9, 26, NULL, 71), 
(9, 27, NULL, 72), 
(9, 28, NULL, 73), 
(9, 29, NULL, 74), 
(9, 30, NULL, 75), 
(9, 31, NULL, 76),
(9, 32, NULL, 77), 
(9, 33, NULL, 78), 
(9, 34, NULL, 79), 
(9, 35, NULL, 80), 
(9, 36, NULL, 81), 
(9, 36, NULL, 82),
(9, 36, NULL, 83), 
(9, 36, NULL, 84), 
(9, 36, NULL, 85);

INSERT INTO Reserva
(`TurmaId`,`SalaId`,`DataInicio`,`DataFim`,`HorarioInicio`,`HorarioFim`,`NomeSala`,`NomeDocente`) VALUES
(1, 1, '2024-05-16','2024-05-17', '19:00', '22:30', '18', 'Aecio');