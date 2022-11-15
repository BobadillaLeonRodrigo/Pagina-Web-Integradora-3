SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS CuervoBus;

USE CuervoBus;

DROP TABLE IF EXISTS carrera;

CREATE TABLE `carrera` (
  `id_carrera` int(11) NOT NULL AUTO_INCREMENT,
  `nombreC` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_carrera`)
) ENGINE=InnoDB AUTO_INCREMENT=220 DEFAULT CHARSET=utf8mb4;

INSERT INTO carrera VALUES("199","Este no depliega en pantalla");
INSERT INTO carrera VALUES("200","TSU Mantenimiento,Área Industrial");
INSERT INTO carrera VALUES("201","ING Mantenimineto Industrial");
INSERT INTO carrera VALUES("202","TSU Mecatrónica,Área Sistemas de Manufactura Flexible");
INSERT INTO carrera VALUES("203","ING Mecatrónica");
INSERT INTO carrera VALUES("204","TSU Desarrollo de Negocios ,Área Mercadotencia");
INSERT INTO carrera VALUES("205","TSU Desarrollo de Negocios,Área Ventas");
INSERT INTO carrera VALUES("206","LIC Innovacion de Negocios y Mercadotecnia");
INSERT INTO carrera VALUES("207","TSU Tecnologías de la Información,Área Infraestructura de Redes Digitales");
INSERT INTO carrera VALUES("208","TSU Tecnologías de la Información,Área Desarrolllo de Software Multiplataformas");
INSERT INTO carrera VALUES("209","ING Redes Digitales y Ciberseguridad");
INSERT INTO carrera VALUES("210","ING Desarrollo y Gestion de Software");
INSERT INTO carrera VALUES("211","TSU Procesos Indrutriales ,Área Manufactura");
INSERT INTO carrera VALUES("212","ING Sistemas Productivos");
INSERT INTO carrera VALUES("213","TSU Paramédico");
INSERT INTO carrera VALUES("214","LIC Protección Civil y Emergencias");
INSERT INTO carrera VALUES("215","TSU Quimica,Área Tecnología Ambiental ");
INSERT INTO carrera VALUES("216","ING Tecnología Ambiental");
INSERT INTO carrera VALUES("217","LIC Enfermería");
INSERT INTO carrera VALUES("218","TSU Procesos Alimentarios");
INSERT INTO carrera VALUES("219","TSU Quimica,Área Biotecnología");



DROP TABLE IF EXISTS registro;

CREATE TABLE `registro` (
  `id_registro` int(11) NOT NULL AUTO_INCREMENT,
  `nombrer` varchar(50) NOT NULL,
  `apa` varchar(50) NOT NULL,
  `ama` varchar(50) DEFAULT NULL,
  `emailr` varchar(50) DEFAULT NULL,
  `matricula` int(10) DEFAULT NULL,
  `contraseña` varchar(16) DEFAULT NULL,
  `id_carrera` int(11) DEFAULT NULL,
  `id_ruta` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_registro`),
  KEY `id_carrera` (`id_carrera`),
  KEY `id_ruta` (`id_ruta`),
  CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`),
  CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`id_ruta`) REFERENCES `ruta` (`id_ruta`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO registro VALUES("1","Rodrigo","Bobadilla","León","al222110815@gmail.com","222110815","$2y$10$wOxbiuI2m","208","100");
INSERT INTO registro VALUES("3","alejandra","Galicia","Escalante","alejandra.galicia@utvtol.edu.mx","9322","$2y$10$XQq6hYGPJ","208","100");
INSERT INTO registro VALUES("6","Vanessa Annel","Nolasco Chavez","Morales Villavicencio","al222110860@gmail.com","222110860","$2y$10$rpM6xbFN.","208","100");
INSERT INTO registro VALUES("7","Angel","Barron","Gonzales","al22210812@gmail.com","222110812","12345","208","100");



DROP TABLE IF EXISTS ruta;

CREATE TABLE `ruta` (
  `id_ruta` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_ruta` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ruta`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4;

INSERT INTO ruta VALUES("99","No despliega a pantalla");
INSERT INTO ruta VALUES("100","Tollocan");
INSERT INTO ruta VALUES("101","Xonacatlán");



SET FOREIGN_KEY_CHECKS=1;