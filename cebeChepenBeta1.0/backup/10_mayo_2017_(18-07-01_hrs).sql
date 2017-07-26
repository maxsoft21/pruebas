SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS dbcebe;

USE dbcebe;

DROP TABLE IF EXISTS alumno;

CREATE TABLE `alumno` (
  `dni` int(11) NOT NULL,
  `tipoDiscapacidad` varchar(45) NOT NULL,
  `estado` varchar(20) NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO alumno VALUES("13245679","Leve","Activo");



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



DROP TABLE IF EXISTS articulos;

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `introduccion` text NOT NULL,
  `ruta` text NOT NULL,
  `contenido` text NOT NULL,
  `orden` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO articulos VALUES("1","dffd","dfgdggdsd,nmmxc,mcxcx...","views/images/articulos/articulo345.jpg","dffgdgf","3");
INSERT INTO articulos VALUES("2","cxvcxxvc","xcxcxc...","views/images/articulos/articulo654.jpg","xcvc","1");
INSERT INTO articulos VALUES("3","retfvddf","gdgdg...","views/images/articulos/articulo554.jpg","njjm,m,m,mkl","2");



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
INSERT INTO asistencia VALUES("A1N0073-66","1","","23-10-2016","22:54:42","22:54:51");
INSERT INTO asistencia VALUES("A1N0247-26","1","","08-10-2016","08:24:38","09:53:22");
INSERT INTO asistencia VALUES("A1N0267-36","1","","14-10-2016","11:14:54","Sin registrar");
INSERT INTO asistencia VALUES("A1N0309-3","1","","07-10-2016","22:12:23","Sin registrar");
INSERT INTO asistencia VALUES("A1N0368-37","1","","16-10-2016","18:53:11","Sin registrar");
INSERT INTO asistencia VALUES("A1N0392-29","1","","08-10-2016","09:55:52","Sin registrar");
INSERT INTO asistencia VALUES("A1N0547-53","1","","23-10-2016","17:15:52","17:21:08");
INSERT INTO asistencia VALUES("A1N0757-73","1","","26-10-2016","19:16:50","Sin registrar");
INSERT INTO asistencia VALUES("A1N1010-82","1","","26-03-2017","16:40:45","Sin registrar");
INSERT INTO asistencia VALUES("A1N1320-50","1","","21-10-2016","09:04:49","09:05:12");
INSERT INTO asistencia VALUES("A1N1599-31","1","","09-10-2016","12:59:25","12:59:28");
INSERT INTO asistencia VALUES("A1N1685-33","1","","09-10-2016","13:13:48","Sin registrar");
INSERT INTO asistencia VALUES("A1N1957-153","1","","10-05-2017","17:28:24","Sin registrar");
INSERT INTO asistencia VALUES("A1N2011-24","1","","08-10-2016","01:35:36","Sin registrar");
INSERT INTO asistencia VALUES("A1N2018-22","1","","08-10-2016","23:31:11","23:31:22");
INSERT INTO asistencia VALUES("A1N2816-28","1","","09-10-2016","12:41:09","Sin registrar");
INSERT INTO asistencia VALUES("A1N2858-88","1","","26-03-2017","17:11:31","Sin registrar");
INSERT INTO asistencia VALUES("A1N2904-26","1","","09-10-2016","10:13:19","Sin registrar");
INSERT INTO asistencia VALUES("A1N2939-4","1","","07-10-2016","22:21:42","22:49:53");
INSERT INTO asistencia VALUES("A1N2975-77","1","","30-10-2016","18:05:55","18:09:24");
INSERT INTO asistencia VALUES("A1N3379-6","1","","07-10-2016","23:30:30","23:30:34");
INSERT INTO asistencia VALUES("A1N3577-90","1","","26-03-2017","18:10:05","18:12:05");
INSERT INTO asistencia VALUES("A1N3902-19","1","","08-10-2016","23:28:22","23:29:21");
INSERT INTO asistencia VALUES("A1N3938-5","1","","07-10-2016","23:28:13","23:28:16");
INSERT INTO asistencia VALUES("A1N4040-74","1","","28-10-2016","10:21:54","Sin registrar");
INSERT INTO asistencia VALUES("A1N4080-91","1","","26-03-2017","21:07:12","21:11:55");
INSERT INTO asistencia VALUES("A1N4181-83","1","","26-03-2017","16:40:59","Sin registrar");
INSERT INTO asistencia VALUES("A1N4368-81","1","","26-03-2017","16:37:34","Sin registrar");
INSERT INTO asistencia VALUES("A1N4369-146","1","","09-05-2017","20:53:50","22:12:12");
INSERT INTO asistencia VALUES("A1N4401-62","1","","23-10-2016","22:49:28","22:49:32");
INSERT INTO asistencia VALUES("A1N4681-86","1","","26-03-2017","16:56:02","Sin registrar");
INSERT INTO asistencia VALUES("A1N4708-85","1","","26-03-2017","16:50:42","Sin registrar");
INSERT INTO asistencia VALUES("A1N4998-2","1","","07-10-2016","21:55:10","Sin registrar");
INSERT INTO asistencia VALUES("A1N5194-76","1","","28-10-2016","22:05:56","Sin registrar");
INSERT INTO asistencia VALUES("A1N5393-22","1","","08-10-2016","00:27:03","01:26:46");
INSERT INTO asistencia VALUES("A1N5409-118","1","","27-03-2017","09:04:36","09:12:51");
INSERT INTO asistencia VALUES("A1N5865-148","1","","10-05-2017","11:09:57","13:10:36");
INSERT INTO asistencia VALUES("A1N6179-32","1","","09-10-2016","13:03:43","13:03:54");
INSERT INTO asistencia VALUES("A1N6265-20","1","","08-10-2016","23:29:52","23:30:24");
INSERT INTO asistencia VALUES("A1N6272-75","1","","28-10-2016","16:18:02","Sin registrar");
INSERT INTO asistencia VALUES("A1N6295-154","1","","10-05-2017","17:58:15","Sin registrar");
INSERT INTO asistencia VALUES("A1N6477-150","1","","10-05-2017","13:13:04","16:10:36");
INSERT INTO asistencia VALUES("A1N6588-34","1","","14-10-2016","11:01:32","Sin registrar");
INSERT INTO asistencia VALUES("A1N6635-31","1","","08-10-2016","10:14:53","Sin registrar");
INSERT INTO asistencia VALUES("A1N6681-145","1","","29-04-2017","12:46:06","Sin registrar");
INSERT INTO asistencia VALUES("A1N7764-40","1","","16-10-2016","21:32:43","23:27:21");
INSERT INTO asistencia VALUES("A1N8142-41","1","","20-10-2016","18:34:13","19:18:08");
INSERT INTO asistencia VALUES("A1N8240-30","1","","09-10-2016","12:56:12","12:58:55");
INSERT INTO asistencia VALUES("A1N8309-78","1","","30-10-2016","18:09:34","Sin registrar");
INSERT INTO asistencia VALUES("A1N8334-61","1","","23-10-2016","22:41:36","22:49:07");
INSERT INTO asistencia VALUES("A1N8400-84","1","","26-03-2017","16:47:01","Sin registrar");
INSERT INTO asistencia VALUES("A1N8545-23","1","","08-10-2016","23:31:45","23:39:11");
INSERT INTO asistencia VALUES("A1N8623-152","1","","10-05-2017","16:25:23","16:26:47");
INSERT INTO asistencia VALUES("A1N8663-29","1","","09-10-2016","12:46:38","Sin registrar");
INSERT INTO asistencia VALUES("A1N8999-43","1","","20-10-2016","20:49:48","20:52:26");
INSERT INTO asistencia VALUES("A1N9001-25","1","","09-10-2016","09:00:14","09:00:44");
INSERT INTO asistencia VALUES("A1N9088-147","1","","09-05-2017","22:12:20","Sin registrar");
INSERT INTO asistencia VALUES("A1N9159-144","1","","29-04-2017","11:23:45","Sin registrar");
INSERT INTO asistencia VALUES("A1N9205-30","1","","08-10-2016","09:58:23","Sin registrar");
INSERT INTO asistencia VALUES("A1N9229-142","1","","27-03-2017","21:22:49","21:26:00");
INSERT INTO asistencia VALUES("A1N9622-89","1","","26-03-2017","17:36:02","18:09:53");
INSERT INTO asistencia VALUES("A1N9645-1","1","","07-10-2016","21:24:27","21:54:00");
INSERT INTO asistencia VALUES("A1N9828-68","1","","23-10-2016","22:57:51","23:10:16");
INSERT INTO asistencia VALUES("A9N0342-54","9","","23-10-2016","17:21:24","22:08:45");
INSERT INTO asistencia VALUES("A9N1708-32","9","","08-10-2016","17:50:19","Sin registrar");
INSERT INTO asistencia VALUES("A9N3112-56","9","","23-10-2016","22:09:51","22:10:18");
INSERT INTO asistencia VALUES("A9N4120-38","9","","16-10-2016","19:22:02","Sin registrar");
INSERT INTO asistencia VALUES("A9N4781-16","9","","08-10-2016","20:37:58","20:38:31");
INSERT INTO asistencia VALUES("A9N5307-72","9","","23-10-2016","23:22:01","Sin registrar");
INSERT INTO asistencia VALUES("A9N5712-18","9","","08-10-2016","20:42:06","23:27:46");
INSERT INTO asistencia VALUES("A9N9838-39","9","","16-10-2016","20:16:49","21:30:34");
INSERT INTO asistencia VALUES("P13N0870-102","13","","26-03-2017","21:29:46","21:45:30");
INSERT INTO asistencia VALUES("P13N1023-64","13","","23-10-2016","22:53:41","Sin registrar");
INSERT INTO asistencia VALUES("P13N1035-48","13","","21-10-2016","08:40:13","09:00:18");
INSERT INTO asistencia VALUES("P13N1165-47","13","","21-10-2016","08:39:39","08:39:59");
INSERT INTO asistencia VALUES("P13N1302-67","13","","23-10-2016","22:55:38","Sin registrar");
INSERT INTO asistencia VALUES("P13N2988-71","13","","23-10-2016","23:11:42","23:21:45");
INSERT INTO asistencia VALUES("P13N3257-69","13","","23-10-2016","23:10:21","23:10:58");
INSERT INTO asistencia VALUES("P13N4397-126","13","","27-03-2017","16:35:37","16:38:21");
INSERT INTO asistencia VALUES("P13N4769-80","13","","26-03-2017","16:37:22","Sin registrar");
INSERT INTO asistencia VALUES("P13N5977-101","13","","26-03-2017","21:25:10","Sin registrar");
INSERT INTO asistencia VALUES("P13N6082-111","13","","26-03-2017","22:10:25","22:10:29");
INSERT INTO asistencia VALUES("P13N6332-104","13","","26-03-2017","21:47:12","21:48:53");
INSERT INTO asistencia VALUES("P13N6721-100","13","","26-03-2017","21:24:29","Sin registrar");
INSERT INTO asistencia VALUES("P13N7061-124","13","","27-03-2017","16:33:05","16:33:19");
INSERT INTO asistencia VALUES("P13N7768-44","13","","20-10-2016","21:06:51","Sin registrar");
INSERT INTO asistencia VALUES("P13N7972-128","13","","27-03-2017","16:39:04","16:39:54");
INSERT INTO asistencia VALUES("P13N8539-107","13","","26-03-2017","22:03:38","22:05:29");
INSERT INTO asistencia VALUES("P14N0070-122","14","","27-03-2017","12:04:31","Sin registrar");
INSERT INTO asistencia VALUES("P14N0087-94","14","","26-03-2017","21:14:23","21:18:13");
INSERT INTO asistencia VALUES("P14N0468-136","14","","27-03-2017","19:31:41","Sin registrar");
INSERT INTO asistencia VALUES("P14N0702-105","14","","26-03-2017","21:55:58","21:58:39");
INSERT INTO asistencia VALUES("P14N0749-110","14","","26-03-2017","22:10:06","22:10:18");
INSERT INTO asistencia VALUES("P14N0803-115","14","","27-03-2017","08:53:04","08:54:39");
INSERT INTO asistencia VALUES("P14N1421-127","14","","27-03-2017","16:38:25","16:38:58");
INSERT INTO asistencia VALUES("P14N1724-120","14","","27-03-2017","11:58:25","Sin registrar");
INSERT INTO asistencia VALUES("P14N1948-135","14","","27-03-2017","19:29:36","19:31:06");
INSERT INTO asistencia VALUES("P14N2085-96","14","","26-03-2017","21:20:13","21:20:48");
INSERT INTO asistencia VALUES("P14N2567-133","14","","27-03-2017","18:37:12","19:29:29");
INSERT INTO asistencia VALUES("P14N2924-138","14","","27-03-2017","21:16:03","Sin registrar");
INSERT INTO asistencia VALUES("P14N3127-99","14","","26-03-2017","21:24:11","Sin registrar");
INSERT INTO asistencia VALUES("P14N3172-108","14","","26-03-2017","22:05:39","22:08:28");
INSERT INTO asistencia VALUES("P14N3292-129","14","","27-03-2017","16:39:58","17:21:31");
INSERT INTO asistencia VALUES("P14N3831-141","14","","27-03-2017","21:20:50","21:21:34");
INSERT INTO asistencia VALUES("P14N3858-123","14","","27-03-2017","14:02:03","Sin registrar");
INSERT INTO asistencia VALUES("P14N4658-131","14","","27-03-2017","18:12:29","Sin registrar");
INSERT INTO asistencia VALUES("P14N5079-92","14","","26-03-2017","21:12:01","21:13:05");
INSERT INTO asistencia VALUES("P14N5305-93","14","","26-03-2017","21:13:11","21:14:17");
INSERT INTO asistencia VALUES("P14N5318-143","14","","27-03-2017","21:26:05","Sin registrar");
INSERT INTO asistencia VALUES("P14N5465-125","14","","27-03-2017","16:33:50","16:35:32");
INSERT INTO asistencia VALUES("P14N5585-114","14","","26-03-2017","22:11:55","Sin registrar");
INSERT INTO asistencia VALUES("P14N5779-137","14","","27-03-2017","19:33:07","Sin registrar");
INSERT INTO asistencia VALUES("P14N6517-97","14","","26-03-2017","21:20:52","21:20:52");
INSERT INTO asistencia VALUES("P14N6518-139","14","","27-03-2017","21:17:01","21:17:54");
INSERT INTO asistencia VALUES("P14N7105-95","14","","26-03-2017","21:18:18","21:18:25");
INSERT INTO asistencia VALUES("P14N7365-130","14","","27-03-2017","17:21:35","18:12:24");
INSERT INTO asistencia VALUES("P14N7407-134","14","","27-03-2017","18:39:07","Sin registrar");
INSERT INTO asistencia VALUES("P14N7525-109","14","","26-03-2017","22:08:35","22:10:00");
INSERT INTO asistencia VALUES("P14N7603-121","14","","27-03-2017","12:01:57","Sin registrar");
INSERT INTO asistencia VALUES("P14N7610-98","14","","26-03-2017","21:21:03","21:21:03");
INSERT INTO asistencia VALUES("P14N7989-112","14","","26-03-2017","22:10:36","22:10:56");
INSERT INTO asistencia VALUES("P14N8200-140","14","","27-03-2017","21:18:50","21:19:10");
INSERT INTO asistencia VALUES("P14N8561-132","14","","27-03-2017","18:35:34","Sin registrar");
INSERT INTO asistencia VALUES("P14N8643-116","14","","27-03-2017","08:54:43","08:56:32");
INSERT INTO asistencia VALUES("P14N9107-103","14","","26-03-2017","21:45:36","21:47:04");
INSERT INTO asistencia VALUES("P14N9410-113","14","","26-03-2017","22:11:01","22:11:51");
INSERT INTO asistencia VALUES("P14N9456-119","14","","27-03-2017","09:13:00","Sin registrar");
INSERT INTO asistencia VALUES("P14N9465-106","14","","26-03-2017","22:02:48","22:03:29");
INSERT INTO asistencia VALUES("P14N9591-149","14","","10-05-2017","13:10:44","13:12:55");
INSERT INTO asistencia VALUES("P14N9828-117","14","","27-03-2017","08:56:37","Sin registrar");
INSERT INTO asistencia VALUES("S12N1007-151","12","","10-05-2017","16:10:47","16:14:21");
INSERT INTO asistencia VALUES("S12N1054-27","12","","09-10-2016","12:36:10","Sin registrar");
INSERT INTO asistencia VALUES("S12N2266-21","12","","08-10-2016","23:30:33","Sin registrar");
INSERT INTO asistencia VALUES("S12N3865-17","12","","08-10-2016","20:39:43","20:41:22");
INSERT INTO asistencia VALUES("S12N5752-35","12","","14-10-2016","11:13:01","11:14:35");
INSERT INTO asistencia VALUES("S12N6486-24","12","","08-10-2016","23:39:34","Sin registrar");
INSERT INTO asistencia VALUES("S12N7211-42","12","","20-10-2016","19:18:19","Sin registrar");
INSERT INTO asistencia VALUES("T10N0960-87","10","","26-03-2017","17:09:13","17:11:05");
INSERT INTO asistencia VALUES("T10N1172-65","10","","23-10-2016","22:54:27","22:54:33");
INSERT INTO asistencia VALUES("T10N2769-79","10","","26-03-2017","16:37:11","Sin registrar");
INSERT INTO asistencia VALUES("T10N3419-49","10","","21-10-2016","09:02:45","09:04:35");
INSERT INTO asistencia VALUES("T10N3709-46","10","","20-10-2016","21:14:48","21:14:51");
INSERT INTO asistencia VALUES("T10N4681-63","10","","23-10-2016","22:49:53","22:50:05");
INSERT INTO asistencia VALUES("T10N5536-51","10","","21-10-2016","09:05:27","Sin registrar");
INSERT INTO asistencia VALUES("T10N5852-58","10","","23-10-2016","22:39:43","22:40:30");
INSERT INTO asistencia VALUES("T10N5952-45","10","","20-10-2016","21:07:48","Sin registrar");
INSERT INTO asistencia VALUES("T10N6493-52","10","","21-10-2016","09:13:37","Sin registrar");
INSERT INTO asistencia VALUES("T10N9666-70","10","","23-10-2016","23:11:04","23:11:37");
INSERT INTO asistencia VALUES("T13N0358-55","13","","23-10-2016","22:09:03","22:09:35");
INSERT INTO asistencia VALUES("T13N2462-59","13","","23-10-2016","22:40:41","22:40:56");
INSERT INTO asistencia VALUES("T13N7603-57","13","","23-10-2016","22:10:26","22:39:32");
INSERT INTO asistencia VALUES("T1N7071-60","1","","23-10-2016","22:41:18","Sin registrar");



DROP TABLE IF EXISTS avance;

CREATE TABLE `avance` (
  `idavance` int(11) NOT NULL AUTO_INCREMENT,
  `observacion` varchar(512) NOT NULL,
  `tipoAvance` varchar(45) NOT NULL,
  `dni` int(11) NOT NULL,
  PRIMARY KEY (`idavance`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO avance VALUES("12","terapia de rehabilitación constante","Avance Fisioterapia.","13245678");
INSERT INTO avance VALUES("13","","","13245678");
INSERT INTO avance VALUES("14","","","13245678");
INSERT INTO avance VALUES("15","","Avance Psicológico.","13245678");
INSERT INTO avance VALUES("16","","Avance Pedagógico.","13245678");
INSERT INTO avance VALUES("17","tratamiento","Avance Psicológico.","13245678");



DROP TABLE IF EXISTS categoria;

CREATE TABLE `categoria` (
  `CodigoCategoria` varchar(20) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`CodigoCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO categoria VALUES("1","Educación");



DROP TABLE IF EXISTS datospersonales;

CREATE TABLE `datospersonales` (
  `dni` int(8) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `fechaNacimiento` date NOT NULL,
  `CodigoSeccion` int(11) NOT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO datospersonales VALUES("11234567","aaaaaa","aa","av. 123","","","2017-03-26","1");
INSERT INTO datospersonales VALUES("12345676","juan","lopez","","","","2016-10-07","2");
INSERT INTO datospersonales VALUES("12345679","pedrito","gonzales","av. abc","","","2016-10-08","2");
INSERT INTO datospersonales VALUES("13245679","Jony","Rozales","z","","","2016-10-08","2");
INSERT INTO datospersonales VALUES("14325678","juan","lopez","av. 123","","","2016-10-08","2");
INSERT INTO datospersonales VALUES("73790981","max","leon","","","","1994-12-20","2");
INSERT INTO datospersonales VALUES("74762208","Luis","Suarez Perez","jr. libertad","","","1994-09-20","2");



DROP TABLE IF EXISTS docente;

CREATE TABLE `docente` (
  `dni` int(11) NOT NULL,
  `Especialidad` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO docente VALUES("12345679","Pedagogogía");



DROP TABLE IF EXISTS eventos;

CREATE TABLE `eventos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `body` text COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `class` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'event-important',
  `start` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `end` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `inicio_normal` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `final_normal` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO eventos VALUES("2","Reunion","vcvcxvcxcvxxvcxcvc","http://localhost/cebeChepenBeta0.2/calendario/descripcion_evento.php?id=2","event-special","1490836800000","1490836800000","29/03/2017 20:20","29/03/2017 20:20");
INSERT INTO eventos VALUES("3","Recolección de insumos","fdfsf","http://localhost/cebeChepenBeta0.2/calendario/descripcion_evento.php?id=3","event-success","1490752380000","1490752380000","27/03/2017 20:53","27/03/2017 20:53");



DROP TABLE IF EXISTS galeria;

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruta` text NOT NULL,
  `orden` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO galeria VALUES("9","../../views/images/galeria/galeria336.jpg","2");
INSERT INTO galeria VALUES("10","../../views/images/galeria/galeria573.jpg","1");



DROP TABLE IF EXISTS institucion;

CREATE TABLE `institucion` (
  `CodigoInfraestructura` int(30) NOT NULL,
  `Nombre` varchar(70) NOT NULL,
  `Distrito` varchar(30) NOT NULL,
  `Telefono` int(8) NOT NULL,
  `Year` int(4) NOT NULL,
  PRIMARY KEY (`CodigoInfraestructura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO institucion VALUES("1","CEBE CHEPÉN","1156512","44123450","2017");



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

INSERT INTO libro VALUES("I1Y2016C1B1N9291","1","1","I1Y2016P1N6394","1","Everardo Zapata","Perú","2004","15.00","libro coquito","1°","Dirección","1-1","123","6","3","Bueno");



DROP TABLE IF EXISTS personal;

CREATE TABLE `personal` (
  `dni` int(11) NOT NULL,
  `Cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO personal VALUES("11234567","Asistente Social");
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

INSERT INTO prestamo VALUES("U10P1N0809","I1Y2016C1B1N9291","1-1-11","23.10.2016","24.10.2016","Entregado");
INSERT INTO prestamo VALUES("U10P2N6257","I1Y2016C1B1N9291","1-1-11","23.10.2016","25.10.2016","Entregado");
INSERT INTO prestamo VALUES("U12345679P3N1707","I1Y2016C1B1N9291","1-1-11","09.05.2017","09.05.2017","Entregado");



DROP TABLE IF EXISTS prestamodocente;

CREATE TABLE `prestamodocente` (
  `CodigoPrestamo` varchar(70) NOT NULL,
  `dni` int(11) NOT NULL,
  KEY `CodigoPrestamo` (`CodigoPrestamo`),
  KEY `CodigoPrestamo_2` (`CodigoPrestamo`),
  CONSTRAINT `prestamodocente_ibfk_1` FOREIGN KEY (`CodigoPrestamo`) REFERENCES `prestamo` (`CodigoPrestamo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO prestamodocente VALUES("U10P1N0809","12345679");
INSERT INTO prestamodocente VALUES("U10P2N6257","12345679");
INSERT INTO prestamodocente VALUES("U12345679P3N1707","12345679");



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

INSERT INTO seccion VALUES("1","Todas");
INSERT INTO seccion VALUES("2","1° año Salud A");
INSERT INTO seccion VALUES("3","2° año M. Automotriz B");



DROP TABLE IF EXISTS slide;

CREATE TABLE `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruta` text NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `orden` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO slide VALUES("1","../../views/images/slide/slide632.jpg","jgjgjg",",j,n,,,m,m,nmn","0");
INSERT INTO slide VALUES("2","../../views/images/slide/slide195.jpg","lksjkldjklfd","fsfssf","0");
INSERT INTO slide VALUES("3","../../views/images/slide/slide953.jpg","ggfggfdh","sdfsdfd","0");
INSERT INTO slide VALUES("4","../../views/images/slide/slide987.jpg","","","0");



DROP TABLE IF EXISTS usuario;

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `dni` int(11) NOT NULL,
  `user` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `idRol` int(11) NOT NULL,
  `estado` varchar(45) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_usuario_rol1_idx` (`idRol`),
  CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO usuario VALUES("1","73790981","max","202cb962ac59075b964b07152d234b70","1","Activo");
INSERT INTO usuario VALUES("9","74762208","lsp","202cb962ac59075b964b07152d234b70","1","Activo");
INSERT INTO usuario VALUES("10","12345679","pg","c4ca4238a0b923820dcc509a6f75849b","2","Activo");
INSERT INTO usuario VALUES("12","13245678","x","c4ca4238a0b923820dcc509a6f75849b","3","Activo");
INSERT INTO usuario VALUES("13","14325678","p1","c4ca4238a0b923820dcc509a6f75849b","4","Activo");
INSERT INTO usuario VALUES("14","11234567","a","c4ca4238a0b923820dcc509a6f75849b","4","Activo");



DROP TABLE IF EXISTS videos;

CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruta` text NOT NULL,
  `orden` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;




SET FOREIGN_KEY_CHECKS=1;