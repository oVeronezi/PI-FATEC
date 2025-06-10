CREATE DATABASE IF NOT EXISTS dbdsm; 
USE dbdsm;
 
 
 -- Tabela Usuarios
CREATE TABLE IF NOT EXISTS Usuarios (
    id_usuario BIGINT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    ultimo_acesso DATETIME,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    data_exclusao TIMESTAMP NULL
);
INSERT INTO Usuarios (nome, email, senha) VALUES ('admin', 'admin@gmail.com', 'admin123');
-- Tabela Alunos
CREATE TABLE IF NOT EXISTS Alunos (
    id_aluno BIGINT AUTO_INCREMENT NOT NULL PRIMARY KEY, 
    ra VARCHAR(20) UNIQUE NOT NULL, 
    github VARCHAR(255),
    linkedin VARCHAR(255)
);

-- Tabela Professores
CREATE TABLE IF NOT EXISTS Professores (
    id_professor BIGINT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    lattes VARCHAR(2048) -- Link do currículo no Lattes
);

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
    nome VARCHAR(255) UNIQUE NOT NULL -- Nome do projeto, obrigatório.
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