CREATE DATABASE quiosque
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE quiosque;

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    celular VARCHAR(20),
    email VARCHAR(100) UNIQUE,
    senha VARCHAR(255),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE itens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    descricao TEXT,
    preco DECIMAL(10,2),
    imagem VARCHAR(255),
    categoria ENUM(
        'porcoes',
        'sucos',
        'cervejas',
        'drinks'
    ),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


