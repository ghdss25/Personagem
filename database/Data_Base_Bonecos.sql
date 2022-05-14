CREATE DATABASE bonecos; 
USE bonecos;

CREATE TABLE personagens(

    id INT AUTO_INCREMENT PRIMARY KEY, 
    per_nome VARCHAR(120), 
    per_nac VARCHAR(32),
    per_cor VARCHAR(32), 
    per_perfil VARCHAR(35), 
    per_tipo VARCHAR(120)
);