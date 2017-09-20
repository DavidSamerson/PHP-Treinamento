CREATE TABLE tarefas2 (
	id INTEGER AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(20) NOT NULL,
    descricao TEXT,
    prazo DATE,
    prioridade INTEGER(1),
    concluida BOOLEAN
);

INSERT INTO tarefas2
(nome, descricao, prioridade)
VALUES
('ESTUDARPHP', 'CONTINUAR MEUS ESTUDOS DE PHP E MYSQL', 1);

SELECT * FROM tarefas2;

SELECT nome, descricao, prioridade FROM tarefas2
WHERE prioridade = 1;

SELECT nome, descricao, prioridade FROM tarefas2
WHERE nome LIKE '%php%';