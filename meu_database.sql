CREATE TABLE associados (
 id INT PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(50) NOT NULL,
 email VARCHAR(50) NOT NULL,
 CPF CHAR(11) NOT NULL,
 data_de_filiacao YEAR NOT NULL
);

CREATE TABLE anuidades (
 id INT PRIMARY KEY AUTO_INCREMENT,
 ano YEAR NOT NULL,
 valor DECIMAL (10,2) NOT NULL
);

CREATE TABLE anuidades_associados (
 id INT PRIMARY KEY AUTO_INCREMENT,
 anuidade_id INT,
 associado_id INT
);

ALTER TABLE anuidades_associados
ADD COLUMN status_pagamento BOOLEAN DEFAULT FALSE;

ALTER TABLE `adev-rn`.anuidades MODIFY COLUMN ano DATE NOT NULL;
ALTER TABLE `adev-rn`.associados MODIFY COLUMN data_de_filiacao DATE NOT NULL;