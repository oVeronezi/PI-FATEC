CREATE DATABASE IF NOT EXISTS dbdsm CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE dbdsm;
 
 
 -- Tabela Usuarios
CREATE TABLE IF NOT EXISTS Usuarios (
    id_usuario BIGINT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    senha VARCHAR(255),
    ultimo_acesso DATETIME,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    data_exclusao TIMESTAMP NULL
);

INSERT INTO Usuarios (nome, email, senha) VALUES ('admin', 'admin@gmail.com', 'admin123');

-- Tabela Alunos
DROP TABLE IF EXISTS Alunos;

CREATE TABLE IF NOT EXISTS Alunos (
    id_aluno BIGINT NOT NULL PRIMARY KEY,  -- Mesmo valor do id_usuario
    ra VARCHAR(20) UNIQUE NOT NULL, 
    github VARCHAR(255),
    linkedin VARCHAR(255),
    semestre INT(1) NULL,
    FOREIGN KEY (id_aluno) REFERENCES Usuarios(id_usuario)
);


-- Tabela Professores
CREATE TABLE IF NOT EXISTS Professores (
    id_professor BIGINT NOT NULL PRIMARY KEY,
    linkedin VARCHAR(255),
    foto_url VARCHAR(1024),
    disciplina VARCHAR(255),
    lattes VARCHAR(2048),
    FOREIGN KEY (id_professor) REFERENCES Usuarios(id_usuario)
);


INSERT INTO Usuarios (nome, email, ultimo_acesso, data_cadastro, data_exclusao)
VALUES ('Alex Paulo Lopes Batista', 'alex.batista@fatec.sp.gov.br', NOW(), NOW(), NULL);

SET @ultimo_id_usuario = LAST_INSERT_ID();

INSERT INTO Professores (id_professor, linkedin, lattes, foto_url, disciplina)
VALUES (@ultimo_id_usuario, 'https://www.linkedin.com/in/alex-paulo-lopes-batista-a2936524/', 'http://lattes.cnpq.br/7239785869687027', '../img/foto alex.png', 'desenvolvimento web');

INSERT INTO Usuarios (nome, email, ultimo_acesso, data_cadastro, data_exclusao)
VALUES ('Anderson Ferreira', 'andersonf.fernandes@fatec.sp.gov.br', NOW(), NOW(), NULL);

SET @ultimo_id_usuario = LAST_INSERT_ID();

INSERT INTO Professores (id_professor, linkedin, lattes, foto_url, disciplina)
VALUES (@ultimo_id_usuario, 'https://www.linkedin.com/in/anderson-ferreira-fernandes-89456937/', 'http://lattes.cnpq.br/1627329996472089', '../img/anderson.png', 'Design Digital');

INSERT INTO Usuarios (nome, email, ultimo_acesso, data_cadastro, data_exclusao)
VALUES ('Aparecida Maria Zem Lopes', 'aparecida.lopes01@fatec.sp.gov.br', NOW(), NOW(), NULL);

SET @ultimo_id_usuario = LAST_INSERT_ID();

INSERT INTO Professores (id_professor, linkedin, lattes, foto_url, disciplina)
VALUES (@ultimo_id_usuario, 'https://www.linkedin.com/in/cida-zem-52936a34/', 'http://lattes.cnpq.br/6123540746643830', '../img/cida.png', 'Engenharia de Software');

INSERT INTO Usuarios (nome, email, ultimo_acesso, data_cadastro, data_exclusao)
VALUES ('Hélio Luis da Silva Rodrigues', 'helio.rodrigues@fatec.sp.gov.br', NOW(), NOW(), NULL);

SET @ultimo_id_usuario = LAST_INSERT_ID();

INSERT INTO Professores (id_professor, linkedin, lattes, foto_url, disciplina)
VALUES (@ultimo_id_usuario, 'https://www.linkedin.com/in/cognus/', 'http://lattes.cnpq.br/9183639307001530', '../img/helio.png', 'Banco De Dados');

INSERT INTO Usuarios (nome, email, ultimo_acesso, data_cadastro, data_exclusao)
VALUES ('Paulo Henrique Buscariollo', 'phb.jau@fatec.sp.gov.br', NOW(), NOW(), NULL);

SET @ultimo_id_usuario = LAST_INSERT_ID();

INSERT INTO Professores (id_professor, linkedin, lattes, foto_url, disciplina)
VALUES (@ultimo_id_usuario, 'https://www.linkedin.com/in/paulo-buscariollo-b6898921/', 'http://lattes.cnpq.br/3704997196792935', '../img/busca.png', 'Sistemas Operacionais');

INSERT INTO Usuarios (nome, email, ultimo_acesso, data_cadastro, data_exclusao)
VALUES ('Ronan Adriel Zenatti', 'ronan.zenatti@fatec.sp.gov.br', NOW(), NOW(), NULL);

SET @ultimo_id_usuario = LAST_INSERT_ID();

INSERT INTO Professores (id_professor, linkedin, lattes, foto_url, disciplina)
VALUES (@ultimo_id_usuario, 'https://www.linkedin.com/in/ronanzenatti/', 'http://lattes.cnpq.br/9197032267433879', '../img/ronan.png', 'Desenvolvimento Web, Banco de Dados Relacional');

INSERT INTO Usuarios (nome, email, ultimo_acesso, data_cadastro, data_exclusao)
VALUES ('Tiago Antonio da Silva', 'tiago.silva238@fatec.sp.gov.br', NOW(), NOW(), NULL);

SET @ultimo_id_usuario = LAST_INSERT_ID();

INSERT INTO Professores (id_professor, linkedin, lattes, foto_url, disciplina)
VALUES (@ultimo_id_usuario, 'https://www.linkedin.com/in/tiagotas/', 'http://lattes.cnpq.br/0183165737768103', '../img/tiago.png', 'Algoritimos e Lógica de Programação, Estrutura de Dados');

INSERT INTO Usuarios (nome, email, ultimo_acesso, data_cadastro, data_exclusao)
VALUES ('Vânia Somaio Teixeira', 'vania.teixeira@fatec.sp.gov.br', NOW(), NOW(), NULL);

SET @ultimo_id_usuario = LAST_INSERT_ID();

INSERT INTO Professores (id_professor, linkedin, lattes, foto_url, disciplina)
VALUES (@ultimo_id_usuario, '', 'http://lattes.cnpq.br/4413496984677686', '../img/vania.png', 'Desenvolvimento Web, Tecnicas de Programação');


-- Tabela Disciplinas
CREATE TABLE IF NOT EXISTS Disciplinas (
    id_disciplina BIGINT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome VARCHAR(255) UNIQUE NOT NULL,
    semestre INT(1) NOT NULL,
    ementa TEXT, -- Materiais utilizados (livros, vídeos ou slides)
    sobre TEXT -- Descrição sobre a disciplina
);

-- Tabela ProjetosIntegradores
CREATE TABLE IF NOT EXISTS ProjetosIntegradores (
    id_pi BIGINT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome VARCHAR(255) UNIQUE NOT NULL, -- Nome do projeto, obrigatório.
    imagem VARCHAR(255),
    descricao VARCHAR(255),
    link_github VARCHAR(255),
    semestre INT(1)
);

-- Tabela Categorias
CREATE TABLE IF NOT EXISTS Categorias (
    id_categoria BIGINT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome VARCHAR(255) UNIQUE NOT NULL -- Nome da categoria, obrigatório.
);

-- Tabela de Junção: Aluno_Projeto
CREATE TABLE IF NOT EXISTS Aluno_Projeto (
    id_aluno BIGINT NOT NULL,
    id_projeto BIGINT NOT NULL,
    PRIMARY KEY (id_aluno, id_projeto),
    FOREIGN KEY (id_aluno) REFERENCES Alunos(id_aluno),
    FOREIGN KEY (id_projeto) REFERENCES ProjetosIntegradores(id_pi)
);

-- Tabela de Junção: Professor_Disciplina
CREATE TABLE IF NOT EXISTS Professor_Disciplina (
    id_professor BIGINT NOT NULL,
    id_disciplina BIGINT NOT NULL,
    PRIMARY KEY (id_professor, id_disciplina),
    FOREIGN KEY (id_professor) REFERENCES Professores(id_professor),
    FOREIGN KEY (id_disciplina) REFERENCES Disciplinas(id_disciplina)
);

-- Tabela de Junção: Projeto_Categoria
CREATE TABLE IF NOT EXISTS Projeto_Categoria (
    id_projeto BIGINT NOT NULL,
    id_categoria BIGINT NOT NULL,
    PRIMARY KEY (id_projeto, id_categoria),
    FOREIGN KEY (id_projeto) REFERENCES ProjetosIntegradores(id_pi),
    FOREIGN KEY (id_categoria) REFERENCES Categorias(id_categoria)
);

-- Tabela de Junção: Projeto_Disciplina
CREATE TABLE IF NOT EXISTS Projeto_Disciplina (
    id_projeto BIGINT NOT NULL,
    id_disciplina BIGINT NOT NULL,
    PRIMARY KEY (id_projeto, id_disciplina),
    FOREIGN KEY (id_projeto) REFERENCES ProjetosIntegradores(id_pi),
    FOREIGN KEY (id_disciplina) REFERENCES Disciplinas(id_disciplina)
);