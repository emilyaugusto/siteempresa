create database questionario;

use questionario;


    CREATE TABLE sobre (
    id integer NOT NULL AUTO_INCREMENT,
    pergunta1 VARCHAR(50) not null,
    pergunta2 VARCHAR(50) not null,
    pergunta3 VARCHAR(50) not null,
    pergunta4 VARCHAR(50) not null,
    PRIMARY KEY (id)
);

describe sobre;

select * from sobre;
