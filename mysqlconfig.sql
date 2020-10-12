/* Criando tabela no banco de dados */

CREATE DATABASE meusite;

/* Usando o banco de dados */
USE meusite;

/* Criando tabela de viewers */
CREATE TABLE views (
    id INT (11) NOT NULL AUTO_INCREMENT,
    ip VARCHAR (255) DEFAULT NULL,
    city VARCHAR (255) DEFAULT NULL,
    data_hora DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) CHARSET = utf8;