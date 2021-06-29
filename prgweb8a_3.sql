DROP DATABASE IF EXISTS prgweb8a_3;

CREATE DATABASE IF NOT EXISTS prgweb8a_3
CHARACTER SET = 'utf8'
COLLATE = 'utf8_spanish_ci';

USE prgweb8a_3;

CREATE TABLE cCatalog(
	CvCatal INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    DsCatal VARCHAR(30), 
    NmFisCat VARCHAR(30), 
    NmColCv VARCHAR(30), 
    NmColDs VARCHAR(30)
) ENGINE = InnoDb;

-- < ------------------------------------ CATALOGOS -------------------------------------------- > --
CREATE TABLE cTipPerson (CvTipPerson INT PRIMARY KEY AUTO_INCREMENT NOT NULL,  DsTipPerson VARCHAR(30)) Engine = InnoDB;
CREATE TABLE cNombre    (CvNombre    INT PRIMARY KEY AUTO_INCREMENT NOT NULL,  DsNombre    VARCHAR(30)) Engine = InnoDB;
CREATE TABLE cApellido  (CvApellido  INT PRIMARY KEY AUTO_INCREMENT NOT NULL,  DsApellido  VARCHAR(30)) Engine = InnoDB;
CREATE TABLE cGenero    (CvGenero    INT PRIMARY KEY AUTO_INCREMENT NOT NULL,  DsGenero    VARCHAR(30)) Engine = InnoDB;
CREATE TABLE cEstado    (CvEstado    INT PRIMARY KEY AUTO_INCREMENT NOT NULL,  DsEstado    VARCHAR(30)) Engine = InnoDB;
CREATE TABLE cMunicipio (CvMunicipio INT PRIMARY KEY AUTO_INCREMENT NOT NULL,  DsMunicipio VARCHAR(30)) Engine = InnoDB;
CREATE TABLE cColonia   (CvColonia   INT PRIMARY KEY AUTO_INCREMENT NOT NULL,  DsColonia   VARCHAR(30)) Engine = InnoDB;
CREATE TABLE cCalle     (CvCalle     INT PRIMARY KEY AUTO_INCREMENT NOT NULL,  DsCalle     VARCHAR(30)) Engine = InnoDB;
-- < -------------------------------------------------------------------------------------------------- > --


-- TABLA de Datos Personales
CREATE TABLE mPersona(
	CvPerson INT PRIMARY KEY AUTO_INCREMENT NOT NULL ,
    
	CvTipPerson INT, 
    
    Curp VARCHAR(20),
    Rfc VARCHAR(20),
    Email VARCHAR(30),
    CvNombre INT, 
    CvApePat INT, 
    CvApeMat INT, 
    FecNac DATE,
    Edad INT(2),
    CvGenero INT, 
    Telefono VARCHAR(15),

    CvEstado INT,
    CvMunicipio INT,
    CvColonia INT,
    CvCalle INT,
    Numero VARCHAR(10), 
    Cp INT,    
    
    FOREIGN KEY (CvTipPerson) REFERENCES cTipPerson(CvTipPerson),
    
    FOREIGN KEY (CvNombre) REFERENCES cNombre(CvNombre),
    FOREIGN KEY (CvApePat) REFERENCES cApellido(CvApellido),
    FOREIGN KEY (CvApeMat) REFERENCES cApellido(CvApellido),
    FOREIGN KEY (CvGenero) REFERENCES cGenero(CvGenero),
    
    FOREIGN KEY (CvEstado) REFERENCES cEstado(CvEstado),
    FOREIGN KEY (CvMunicipio) REFERENCES cMunicipio(CvMunicipio),
    FOREIGN KEY (CvColonia) REFERENCES cColonia(CvColonia),
    FOREIGN KEY (CvCalle) REFERENCES cCalle(CvCalle)
)Engine = InnoDB;

CREATE TABLE Users (
	CvUser    INT          NOT NULL PRIMARY KEY AUTO_INCREMENT,
	CvPerson  INT  		   NOT NULL,
	Login 	  VARCHAR(30)  NOT NULL,
	Password  VARCHAR(100) NOT NULL,
	FecIni    DATE         NOT NULL,
	FecFin    DATE         NOT NULL,
	EdoCta    BOOLEAN      NOT NULL, 
    
    FOREIGN KEY (CvPerson) REFERENCES mPersona(CvPerson)
)ENGINE = InnoDB;


--
-- Registros previos
--

-- Datos para los catalogos
INSERT INTO cCatalog(DsCatal, NmFisCat, NmColCv, NmColDs) VALUES 
('Tipo de Persona', 'cTipPerson', 'CvTipPerson', 'DsTipPerson'),

('Nombre', 'cNombre', 'CvNombre', 'DsNombre'),
('Apellido', 'cApellido', 'CvApellido', 'DsApellido'),
('Género', 'cGenero', 'CvGenero', 'DsGenero'),

('Estado', 'cEstado', 'CvEstado', 'DsEstado'),
('Municipio', 'cMunicipio', 'CvMunicipio', 'DsMunicipio'),
('Colonia', 'cColonia', 'CvColonia', 'DsColonia'),
('Calle', 'cCalle', 'CvCalle', 'DsCalle');

INSERT INTO cTipPerson(DsTipPerson) VALUES ('Docente'), ('Cliente'), ('Proveedor');

INSERT INTO cNombre(DsNombre)     	VALUES ('Andy'), ('Ivan'), ('Pedro');
INSERT INTO cApellido(DsApellido) 	VALUES ('Garcia'), ('Archib'), ('Zamora'), ('Alcoles'), ('Cornelio');
INSERT INTO cGenero(DsGenero)       VALUES ('Masculino'), ('Femenino');

INSERT INTO cEstado(DsEstado)       VALUES ('Chiapas'), ('Jalisco'), ('Monterrey');
INSERT INTO cMunicipio(DsMunicipio) VALUES ('Comitán'), ('Margaritas'), ('Chicomuselo');
INSERT INTO cColonia(DsColonia)     VALUES ('Cruz Grande'), ('Mariano N. Ruiz'), ('Cedro'),('Chichima');
INSERT INTO cCalle(DsCalle)   		VALUES ('Calle Sur Poniente'), ('Av. Libertad'), ('Miguel Aleman');

INSERT INTO mPersona() VALUES(1,1,'AIZA960219HCSRML06','AIZA960219D71','l17700142@comitan.tecnm.mx',2,2,3,'1997/03/18',25,1,'9631260108',1,1,4,2,'5ta',30120);
INSERT INTO mPersona() VALUES(2,2,'GAGA990901HCSRRN00','GAGA990901HC','mjgpzariueya@gmail.com',1,1,1,'1999/09/01',21,1,'9631760322',1,3,1,1,'6ta',30120);
INSERT INTO Users() VALUES(1, 1, 'admin', '$2a$07$asxx54ahjppf45sd87a5aunxs9bkpyGmGE/.vekdjFg83yRec789S', '', '', true);