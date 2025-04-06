
CREATE DATABASE IF NOT EXISTS Lista_usuarios;

USE Lista_usuarios;

CREATE TABLE IF NOT EXISTS Usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,           
    email VARCHAR(255),            
    endereco VARCHAR(255)
);

INSERT INTO Usuarios (nome, email, endereco) VALUES
('Arctchurous Moura', 'artutti@email.com', 'Varginha ao lado do ET'),
('JPC Gamer', 'amoroblox@email.com', 'Itaquera'),
('Nico Davids', 'trucododavi@email.com', 'USA'),
('BricinPisni', 'magoprior@email.com', 'Vm, perto da carpetiniele'),
('Maikão Antonio', 'cara.do.ti@emailcom', 'Acre');

select * from Usuarios;

/*
drop database Lista_usuarios; 
*/