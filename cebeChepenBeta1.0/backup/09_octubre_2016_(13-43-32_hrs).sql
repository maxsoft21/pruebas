SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS dbcebe;

USE dbcebe;

DROP TABLE IF EXISTS alumno;

CREATE TABLE `alumno` (
  `dni` int(11) NOT NULL,
  `tipoDiscapacidad` varchar(45) NOT NULL,
  PRIMARY KEY (`dni`),
  CONSTRAINT `fk_alumno_datosPersonales1` FOREIGN KEY (`dni`) REFERENCES `datospersonales` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO alumno VALUES("13245678","Leve");



DROP TABLE IF EXISTS area;

CREATE TABLE `area` (
  `idarea` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`idarea`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO area VALUES("1","Dirección");
INSERT INTO area VALUES("2","Pedagogogía");
INSERT INTO area VALUES("3","Estudiante");
INSERT INTO area VALUES("4","Personal Administrativo");



DROP TABLE IF EXISTS asistencia;

CREATE TABLE `asistencia` (
  `Codigo` varchar(100) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `Tipo` varchar(30) NOT NULL,
  `Fecha` varchar(30) NOT NULL,
  `Entrada` varchar(30) NOT NULL,
  `Salida` varchar(30) NOT NULL,
  PRIMARY KEY (`Codigo`),
  KEY `fk_asistencia_usuario1_idx` (`idUsuario`),
  CONSTRAINT `fk_asistencia_usuario1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO asistencia VALUES("A1N0022-27","1","","08-10-2016","09:21:34","09:22:40");
INSERT INTO asistencia VALUES("A1N0069-7","1","","07-10-2016","23:30:42","23:30:47");
INSERT INTO asistencia VALUES("A1N0247-26","1","","08-10-2016","08:24:38","09:53:22");
INSERT INTO asistencia VALUES("A1N0309-3","1","","07-10-2016","22:12:23","Sin registrar");
INSERT INTO asistencia VALUES("A1N0392-29","1","","08-10-2016","09:55:52","Sin registrar");
INSERT INTO asistencia VALUES("A1N1599-31","1","","09-10-2016","12:59:25","12:59:28");
INSERT INTO asistencia VALUES("A1N1685-33","1","","09-10-2016","13:13:48","Sin registrar");
INSERT INTO asistencia VALUES("A1N2011-24","1","","08-10-2016","01:35:36","Sin registrar");
INSERT INTO asistencia VALUES("A1N2018-22","1","","08-10-2016","23:31:11","23:31:22");
INSERT INTO asistencia VALUES("A1N2816-28","1","","09-10-2016","12:41:09","Sin registrar");
INSERT INTO asistencia VALUES("A1N2904-26","1","","09-10-2016","10:13:19","Sin registrar");
INSERT INTO asistencia VALUES("A1N2939-4","1","","07-10-2016","22:21:42","22:49:53");
INSERT INTO asistencia VALUES("A1N3379-6","1","","07-10-2016","23:30:30","23:30:34");
INSERT INTO asistencia VALUES("A1N3902-19","1","","08-10-2016","23:28:22","23:29:21");
INSERT INTO asistencia VALUES("A1N3938-5","1","","07-10-2016","23:28:13","23:28:16");
INSERT INTO asistencia VALUES("A1N4998-2","1","","07-10-2016","21:55:10","Sin registrar");
INSERT INTO asistencia VALUES("A1N5393-22","1","","08-10-2016","00:27:03","01:26:46");
INSERT INTO asistencia VALUES("A1N6179-32","1","","09-10-2016","13:03:43","13:03:54");
INSERT INTO asistencia VALUES("A1N6265-20","1","","08-10-2016","23:29:52","23:30:24");
INSERT INTO asistencia VALUES("A1N6635-31","1","","08-10-2016","10:14:53","Sin registrar");
INSERT INTO asistencia VALUES("A1N8240-30","1","","09-10-2016","12:56:12","12:58:55");
INSERT INTO asistencia VALUES("A1N8545-23","1","","08-10-2016","23:31:45","23:39:11");
INSERT INTO asistencia VALUES("A1N8663-29","1","","09-10-2016","12:46:38","Sin registrar");
INSERT INTO asistencia VALUES("A1N9001-25","1","","09-10-2016","09:00:14","09:00:44");
INSERT INTO asistencia VALUES("A1N9205-30","1","","08-10-2016","09:58:23","Sin registrar");
INSERT INTO asistencia VALUES("A1N9645-1","1","","07-10-2016","21:24:27","21:54:00");
INSERT INTO asistencia VALUES("A9N1708-32","9","","08-10-2016","17:50:19","Sin registrar");
INSERT INTO asistencia VALUES("A9N4781-16","9","","08-10-2016","20:37:58","20:38:31");
INSERT INTO asistencia VALUES("A9N5712-18","9","","08-10-2016","20:42:06","23:27:46");
INSERT INTO asistencia VALUES("S12N1054-27","12","","09-10-2016","12:36:10","Sin registrar");
INSERT INTO asistencia VALUES("S12N2266-21","12","","08-10-2016","23:30:33","Sin registrar");
INSERT INTO asistencia VALUES("S12N3865-17","12","","08-10-2016","20:39:43","20:41:22");
INSERT INTO asistencia VALUES("S12N6486-24","12","","08-10-2016","23:39:34","Sin registrar");



DROP TABLE IF EXISTS avance;

CREATE TABLE `avance` (
  `idavance` int(11) NOT NULL,
  `observacion` varchar(512) NOT NULL,
  `tipoAvance` varchar(45) NOT NULL,
  `dni` int(11) NOT NULL,
  PRIMARY KEY (`idavance`),
  KEY `fk_avance_alumno1_idx` (`dni`),
  CONSTRAINT `fk_avance_alumno1` FOREIGN KEY (`dni`) REFERENCES `alumno` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS categoria;

CREATE TABLE `categoria` (
  `CodigoCategoria` varchar(20) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`CodigoCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO categoria VALUES("1","Educación");



DROP TABLE IF EXISTS cronograma_evento;

CREATE TABLE `cronograma_evento` (
  `idcronograma_evento` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `dni` int(11) NOT NULL,
  PRIMARY KEY (`idcronograma_evento`),
  KEY `fk_cronograma_evento_personal1_idx` (`dni`),
  CONSTRAINT `fk_cronograma_evento_personal1` FOREIGN KEY (`dni`) REFERENCES `personal` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS datospersonales;

CREATE TABLE `datospersonales` (
  `dni` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `fechaNacimiento` date NOT NULL,
  `CodigoSeccion` int(11) NOT NULL,
  PRIMARY KEY (`dni`),
  KEY `fk_datosPersonales_seccion1_idx` (`CodigoSeccion`),
  CONSTRAINT `fk_datosPersonales_seccion1` FOREIGN KEY (`CodigoSeccion`) REFERENCES `seccion` (`CodigoSeccion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO datospersonales VALUES("12345678","juan","lopez","","","","2016-10-07","2");
INSERT INTO datospersonales VALUES("12345679","pedrito","gonzales","av. abc","","","2016-10-08","2");
INSERT INTO datospersonales VALUES("13245678","abc","def","z","","","2016-10-08","2");
INSERT INTO datospersonales VALUES("14325678","juan","lopez","av. 123","","","2016-10-08","2");
INSERT INTO datospersonales VALUES("73790981","max","leon","","","","1994-12-20","2");
INSERT INTO datospersonales VALUES("74762208","Luis","Suarez Perez","jr. libertad","","","1994-09-20","2");



DROP TABLE IF EXISTS docente;

CREATE TABLE `docente` (
  `dni` int(11) NOT NULL,
  `Especialidad` varchar(40) NOT NULL,
  PRIMARY KEY (`dni`),
  KEY `fk_docente_datosPersonales1_idx` (`dni`),
  CONSTRAINT `fk_docente_datosPersonales1` FOREIGN KEY (`dni`) REFERENCES `datospersonales` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO docente VALUES("12345679","Pedagogogía");



DROP TABLE IF EXISTS institucion;

CREATE TABLE `institucion` (
  `CodigoInfraestructura` int(30) NOT NULL,
  `Nombre` varchar(70) NOT NULL,
  `Distrito` varchar(30) NOT NULL,
  `Telefono` int(8) NOT NULL,
  `Year` int(4) NOT NULL,
  PRIMARY KEY (`CodigoInfraestructura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO institucion VALUES("1","CEBE CHEPÉN","1156512","4412345","2016");



DROP TABLE IF EXISTS libro;

CREATE TABLE `libro` (
  `CodigoLibro` varchar(70) NOT NULL,
  `CodigoCorrelativo` varchar(20) NOT NULL,
  `CodigoCategoria` varchar(20) NOT NULL,
  `CodigoProveedor` varchar(70) NOT NULL,
  `CodigoInfraestructura` int(20) NOT NULL,
  `Autor` varchar(70) NOT NULL,
  `Pais` varchar(50) NOT NULL,
  `Year` varchar(7) NOT NULL,
  `Estimado` decimal(30,2) NOT NULL,
  `Titulo` varchar(77) NOT NULL,
  `Edicion` varchar(50) NOT NULL,
  `Ubicacion` varchar(50) NOT NULL,
  `Cargo` varchar(7) NOT NULL,
  `Editorial` varchar(70) NOT NULL,
  `Existencias` int(7) NOT NULL,
  `Prestado` int(20) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  PRIMARY KEY (`CodigoLibro`),
  KEY `CodigoCategoria` (`CodigoCategoria`),
  KEY `CodigoProveedor` (`CodigoProveedor`),
  KEY `CodigoInfraestructura` (`CodigoInfraestructura`),
  CONSTRAINT `libro_ibfk_2` FOREIGN KEY (`CodigoInfraestructura`) REFERENCES `institucion` (`CodigoInfraestructura`),
  CONSTRAINT `libro_ibfk_3` FOREIGN KEY (`CodigoCategoria`) REFERENCES `categoria` (`CodigoCategoria`),
  CONSTRAINT `libro_ibfk_4` FOREIGN KEY (`CodigoProveedor`) REFERENCES `proveedor` (`CodigoProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO libro VALUES("I1Y2016C1B1N9291","1","1","I1Y2016P1N6394","1","Everardo Zapata","Perú","2004","15.00","libro coquito","1°","Dirección","1-1","123","4","0","Bueno");



DROP TABLE IF EXISTS personal;

CREATE TABLE `personal` (
  `dni` int(11) NOT NULL,
  `Cargo` varchar(50) NOT NULL,
  PRIMARY KEY (`dni`),
  KEY `fk_personal_datosPersonales1_idx` (`dni`),
  CONSTRAINT `fk_personal_datosPersonales1` FOREIGN KEY (`dni`) REFERENCES `datospersonales` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO personal VALUES("14325678","Auxiliar");



DROP TABLE IF EXISTS prestamo;

CREATE TABLE `prestamo` (
  `CodigoPrestamo` varchar(70) NOT NULL,
  `CodigoLibro` varchar(70) NOT NULL,
  `CorrelativoLibro` varchar(70) NOT NULL,
  `FechaSalida` varchar(30) NOT NULL,
  `FechaEntrega` varchar(30) NOT NULL,
  `Estado` varchar(30) NOT NULL,
  PRIMARY KEY (`CodigoPrestamo`),
  KEY `CodigoLibro` (`CodigoLibro`),
  CONSTRAINT `prestamo_ibfk_3` FOREIGN KEY (`CodigoLibro`) REFERENCES `libro` (`CodigoLibro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS prestamodocente;

CREATE TABLE `prestamodocente` (
  `CodigoPrestamo` varchar(70) NOT NULL,
  `dni` int(11) NOT NULL,
  KEY `CodigoPrestamo` (`CodigoPrestamo`),
  KEY `CodigoPrestamo_2` (`CodigoPrestamo`),
  KEY `fk_prestamodocente_docente1_idx` (`dni`),
  CONSTRAINT `fk_prestamodocente_docente1` FOREIGN KEY (`dni`) REFERENCES `docente` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `prestamodocente_ibfk_1` FOREIGN KEY (`CodigoPrestamo`) REFERENCES `prestamo` (`CodigoPrestamo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS proveedor;

CREATE TABLE `proveedor` (
  `CodigoProveedor` varchar(70) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Direccion` varchar(70) NOT NULL,
  `Telefono` int(15) NOT NULL,
  `ResponAtencion` varchar(50) NOT NULL,
  PRIMARY KEY (`CodigoProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO proveedor VALUES("I1Y2016P1N6394","Ministerio de Educación","","Perú","0","Estado Del Perú");



DROP TABLE IF EXISTS rol;

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `idarea` int(11) NOT NULL,
  PRIMARY KEY (`idRol`),
  KEY `fk_rol_area1_idx` (`idarea`),
  CONSTRAINT `fk_rol_area1` FOREIGN KEY (`idarea`) REFERENCES `area` (`idarea`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO rol VALUES("1","Administrador","1");
INSERT INTO rol VALUES("2","Docente","2");
INSERT INTO rol VALUES("3","Estudiante","3");
INSERT INTO rol VALUES("4","Personal","4");



DROP TABLE IF EXISTS seccion;

CREATE TABLE `seccion` (
  `CodigoSeccion` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`CodigoSeccion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO seccion VALUES("2","1° año Salud A");
INSERT INTO seccion VALUES("3","2° año M. Automotriz B");



DROP TABLE IF EXISTS usuario;

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `dni` int(11) NOT NULL,
  `user` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `idRol` int(11) NOT NULL,
  `estado` varchar(45) NOT NULL,
  PRIMARY KEY (`idUsuario`,`dni`),
  KEY `fk_usuario_rol1_idx` (`idRol`),
  KEY `fk_usuario_datosPersonales1_idx` (`dni`),
  CONSTRAINT `fk_usuario_datosPersonales1` FOREIGN KEY (`dni`) REFERENCES `datospersonales` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO usuario VALUES("1","73790981","max","202cb962ac59075b964b07152d234b70","1","Activo");
INSERT INTO usuario VALUES("9","74762208","lsp","202cb962ac59075b964b07152d234b70","1","Activo");
INSERT INTO usuario VALUES("10","12345679","pg","c4ca4238a0b923820dcc509a6f75849b","2","Activo");
INSERT INTO usuario VALUES("12","13245678","x","c4ca4238a0b923820dcc509a6f75849b","3","Activo");
INSERT INTO usuario VALUES("13","14325678","p1","c4ca4238a0b923820dcc509a6f75849b","4","Activo");



SET FOREIGN_KEY_CHECKS=1;