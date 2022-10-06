CREATE SCHEMA bibliotecaOteca DEFAULT CHARACTER SET utf8;

use bibliotecaOteca;

create table tboteca(
	idregistro INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR (70),
    escritor VARCHAR (50),
    editora VARCHAR (50)
);