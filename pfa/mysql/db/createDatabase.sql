CREATE DATABASE FullCycle;

CREATE USER 'fullcycle'@'localhost' IDENTIFIED BY 'fullcycle';
GRANT ALL PRIVILEGES ON *.* TO 'fullcycle'@'localhost' WITH GRANT OPTION;
CREATE USER 'fullcycle'@'%' IDENTIFIED BY 'fullcycle';
GRANT ALL PRIVILEGES ON *.* TO 'fullcycle'@'%' WITH GRANT OPTION;

USE FullCycle;

CREATE TABLE modules (
    id integer not null auto_increment primary key,
    name varchar(200),
    is_active boolean not null default true
);

SET character_set_client = utf8;
SET character_set_connection = utf8;
SET character_set_results = utf8;
SET collation_connection = utf8_general_ci;

INSERT INTO modules (is_active, name) VALUES (1, 'PFA');
INSERT INTO modules (is_active, name) VALUES (2, 'Docker');
INSERT INTO modules (is_active, name) VALUES (3, 'Micro-serviços');
INSERT INTO modules (is_active, name) VALUES (4, 'Mensageria - RabbitMQ');