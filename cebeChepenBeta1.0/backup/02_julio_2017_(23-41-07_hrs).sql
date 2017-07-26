SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS dbcebe;

USE dbcebe;

DROP TABLE IF EXISTS alumno;

CREATE TABLE `alumno` (
  `dni` char(8) NOT NULL,
  `tipoDiscapacidad` varchar(45) NOT NULL,
  `estado` varchar(20) NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO alumno VALUES("13245679","Leve","Activo");
INSERT INTO alumno VALUES("88798754","Leve","Activo");
INSERT INTO alumno VALUES("45687879","Leve","Activo");
INSERT INTO alumno VALUES("12345670","Leve","Activo");



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
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `introduccion` text NOT NULL,
  `ruta` text NOT NULL,
  `contenido` text NOT NULL,
  `orden` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO articulos VALUES("1","dffd","dfgdggdsd,nmmxc,mcxcx...","views/images/articulos/articulo345.jpg","dffgdgf","3","2017-06-13 18:38:52");
INSERT INTO articulos VALUES("2","cxvcxxvc","xcxcxc...","views/images/articulos/articulo654.jpg","xcvc djsdkjslffsklfskfdlkldsfjlkfsjkldjlkfdsm,,mm,ds,sndf\n\ndsfnds,mfdnfsmd\n\ndmnnmdnmzx,n,zx","1","2017-06-13 18:38:52");
INSERT INTO articulos VALUES("3","retfvddf","gdgdg...","views/images/articulos/articulo554.jpg","njjm,m,m,mkl","2","2017-06-13 18:38:52");



DROP TABLE IF EXISTS asistencia;

CREATE TABLE `asistencia` (
  `Codigo` varchar(100) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `Fecha` varchar(10) NOT NULL,
  `Entrada` varchar(20) NOT NULL,
  `Salida` varchar(20) NOT NULL,
  PRIMARY KEY (`Codigo`),
  KEY `fk_asistencia_usuario1_idx` (`idUsuario`),
  CONSTRAINT `fk_asistencia_usuario1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO asistencia VALUES("A1N0022-27","1","08-10-2016","09:21:34","09:22:40");
INSERT INTO asistencia VALUES("A1N0069-7","1","07-10-2016","23:30:42","23:30:47");
INSERT INTO asistencia VALUES("A1N0073-66","1","23-10-2016","22:54:42","22:54:51");
INSERT INTO asistencia VALUES("A1N0247-26","1","08-10-2016","08:24:38","09:53:22");
INSERT INTO asistencia VALUES("A1N0267-36","1","14-10-2016","11:14:54","Sin registrar");
INSERT INTO asistencia VALUES("A1N0309-3","1","07-10-2016","22:12:23","Sin registrar");
INSERT INTO asistencia VALUES("A1N0368-37","1","16-10-2016","18:53:11","Sin registrar");
INSERT INTO asistencia VALUES("A1N0392-29","1","08-10-2016","09:55:52","Sin registrar");
INSERT INTO asistencia VALUES("A1N0462-261","1","28-06-2017","10:59:50","20:35:54");
INSERT INTO asistencia VALUES("A1N0547-53","1","23-10-2016","17:15:52","17:21:08");
INSERT INTO asistencia VALUES("A1N0757-73","1","26-10-2016","19:16:50","Sin registrar");
INSERT INTO asistencia VALUES("A1N0781-183","1","04-06-2017","01:30:36","Sin registrar");
INSERT INTO asistencia VALUES("A1N1010-82","1","26-03-2017","16:40:45","Sin registrar");
INSERT INTO asistencia VALUES("A1N1045-202","1","05-06-2017","16:34:08","16:42:42");
INSERT INTO asistencia VALUES("A1N1214-169","1","03-06-2017","18:05:16","Sin registrar");
INSERT INTO asistencia VALUES("A1N1320-50","1","21-10-2016","09:04:49","09:05:12");
INSERT INTO asistencia VALUES("A1N1588-216","1","07-06-2017","14:38:26","14:38:31");
INSERT INTO asistencia VALUES("A1N1599-31","1","09-10-2016","12:59:25","12:59:28");
INSERT INTO asistencia VALUES("A1N1604-185","1","04-06-2017","09:01:22","10:29:18");
INSERT INTO asistencia VALUES("A1N1685-33","1","09-10-2016","13:13:48","Sin registrar");
INSERT INTO asistencia VALUES("A1N1843-211","1","06-06-2017","21:23:49","Sin registrar");
INSERT INTO asistencia VALUES("A1N1954-239","1","26-06-2017","00:37:51","Sin registrar");
INSERT INTO asistencia VALUES("A1N1957-153","1","10-05-2017","17:28:24","Sin registrar");
INSERT INTO asistencia VALUES("A1N2011-24","1","08-10-2016","01:35:36","Sin registrar");
INSERT INTO asistencia VALUES("A1N2018-22","1","08-10-2016","23:31:11","23:31:22");
INSERT INTO asistencia VALUES("A1N2255-178","1","03-06-2017","20:08:24","Sin registrar");
INSERT INTO asistencia VALUES("A1N2415-205","1","05-06-2017","16:54:15","Sin registrar");
INSERT INTO asistencia VALUES("A1N2556-267","1","28-06-2017","20:44:17","20:45:46");
INSERT INTO asistencia VALUES("A1N2724-260","1","28-06-2017","10:57:53","Sin registrar");
INSERT INTO asistencia VALUES("A1N2744-213","1","07-06-2017","02:11:58","Sin registrar");
INSERT INTO asistencia VALUES("A1N2816-28","1","09-10-2016","12:41:09","Sin registrar");
INSERT INTO asistencia VALUES("A1N2858-88","1","26-03-2017","17:11:31","Sin registrar");
INSERT INTO asistencia VALUES("A1N2904-26","1","09-10-2016","10:13:19","Sin registrar");
INSERT INTO asistencia VALUES("A1N2939-4","1","07-10-2016","22:21:42","22:49:53");
INSERT INTO asistencia VALUES("A1N2975-77","1","30-10-2016","18:05:55","18:09:24");
INSERT INTO asistencia VALUES("A1N2990-218","1","07-06-2017","14:43:12","Sin registrar");
INSERT INTO asistencia VALUES("A1N3085-184","1","04-06-2017","02:28:04","Sin registrar");
INSERT INTO asistencia VALUES("A1N3131-222","1","07-06-2017","15:07:10","15:10:59");
INSERT INTO asistencia VALUES("A1N3340-158","1","11-05-2017","14:34:10","Sin registrar");
INSERT INTO asistencia VALUES("A1N3372-168","1","03-06-2017","16:11:50","Sin registrar");
INSERT INTO asistencia VALUES("A1N3379-6","1","07-10-2016","23:30:30","23:30:34");
INSERT INTO asistencia VALUES("A1N3577-90","1","26-03-2017","18:10:05","18:12:05");
INSERT INTO asistencia VALUES("A1N3867-234","1","13-06-2017","17:31:34","Sin registrar");
INSERT INTO asistencia VALUES("A1N3868-240","1","26-06-2017","00:59:21","01:38:24");
INSERT INTO asistencia VALUES("A1N3902-19","1","08-10-2016","23:28:22","23:29:21");
INSERT INTO asistencia VALUES("A1N3938-5","1","07-10-2016","23:28:13","23:28:16");
INSERT INTO asistencia VALUES("A1N3995-266","1","28-06-2017","20:41:20","20:44:10");
INSERT INTO asistencia VALUES("A1N4040-74","1","28-10-2016","10:21:54","Sin registrar");
INSERT INTO asistencia VALUES("A1N4080-91","1","26-03-2017","21:07:12","21:11:55");
INSERT INTO asistencia VALUES("A1N4181-83","1","26-03-2017","16:40:59","Sin registrar");
INSERT INTO asistencia VALUES("A1N4368-81","1","26-03-2017","16:37:34","Sin registrar");
INSERT INTO asistencia VALUES("A1N4369-146","1","09-05-2017","20:53:50","22:12:12");
INSERT INTO asistencia VALUES("A1N4401-62","1","23-10-2016","22:49:28","22:49:32");
INSERT INTO asistencia VALUES("A1N4535-219","1","07-06-2017","14:44:06","Sin registrar");
INSERT INTO asistencia VALUES("A1N4681-86","1","26-03-2017","16:56:02","Sin registrar");
INSERT INTO asistencia VALUES("A1N4708-85","1","26-03-2017","16:50:42","Sin registrar");
INSERT INTO asistencia VALUES("A1N4814-177","1","03-06-2017","20:07:13","Sin registrar");
INSERT INTO asistencia VALUES("A1N4977-212","1","07-06-2017","00:54:51","Sin registrar");
INSERT INTO asistencia VALUES("A1N4998-2","1","07-10-2016","21:55:10","Sin registrar");
INSERT INTO asistencia VALUES("A1N5168-179","1","03-06-2017","20:15:28","20:17:39");
INSERT INTO asistencia VALUES("A1N5194-76","1","28-10-2016","22:05:56","Sin registrar");
INSERT INTO asistencia VALUES("A1N5393-22","1","08-10-2016","00:27:03","01:26:46");
INSERT INTO asistencia VALUES("A1N5409-118","1","27-03-2017","09:04:36","09:12:51");
INSERT INTO asistencia VALUES("A1N5865-148","1","10-05-2017","11:09:57","13:10:36");
INSERT INTO asistencia VALUES("A1N6091-269","1","28-06-2017","21:03:18","Sin registrar");
INSERT INTO asistencia VALUES("A1N6106-279","1","01-07-2017","18:07:00","Sin registrar");
INSERT INTO asistencia VALUES("A1N6179-32","1","09-10-2016","13:03:43","13:03:54");
INSERT INTO asistencia VALUES("A1N6265-20","1","08-10-2016","23:29:52","23:30:24");
INSERT INTO asistencia VALUES("A1N6272-75","1","28-10-2016","16:18:02","Sin registrar");
INSERT INTO asistencia VALUES("A1N6290-182","1","04-06-2017","01:02:58","Sin registrar");
INSERT INTO asistencia VALUES("A1N6295-154","1","10-05-2017","17:58:15","Sin registrar");
INSERT INTO asistencia VALUES("A1N6454-227","1","07-06-2017","15:22:42","Sin registrar");
INSERT INTO asistencia VALUES("A1N6458-245","1","26-06-2017","19:17:58","Sin registrar");
INSERT INTO asistencia VALUES("A1N6477-150","1","10-05-2017","13:13:04","16:10:36");
INSERT INTO asistencia VALUES("A1N6588-34","1","14-10-2016","11:01:32","Sin registrar");
INSERT INTO asistencia VALUES("A1N6635-31","1","08-10-2016","10:14:53","Sin registrar");
INSERT INTO asistencia VALUES("A1N6639-220","1","07-06-2017","14:48:36","Sin registrar");
INSERT INTO asistencia VALUES("A1N6645-176","1","03-06-2017","19:58:52","Sin registrar");
INSERT INTO asistencia VALUES("A1N6681-145","1","29-04-2017","12:46:06","Sin registrar");
INSERT INTO asistencia VALUES("A1N6940-235","1","13-06-2017","19:31:06","Sin registrar");
INSERT INTO asistencia VALUES("A1N7210-242","1","26-06-2017","16:47:30","Sin registrar");
INSERT INTO asistencia VALUES("A1N7292-199","1","05-06-2017","16:30:34","Sin registrar");
INSERT INTO asistencia VALUES("A1N7312-210","1","06-06-2017","21:01:01","Sin registrar");
INSERT INTO asistencia VALUES("A1N7470-165","1","20-05-2017","16:23:23","Sin registrar");
INSERT INTO asistencia VALUES("A1N7473-217","1","07-06-2017","14:42:51","Sin registrar");
INSERT INTO asistencia VALUES("A1N7475-181","1","04-06-2017","00:39:51","Sin registrar");
INSERT INTO asistencia VALUES("A1N7614-268","1","28-06-2017","20:45:54","21:01:49");
INSERT INTO asistencia VALUES("A1N7722-159","1","11-05-2017","21:47:49","Sin registrar");
INSERT INTO asistencia VALUES("A1N7764-40","1","16-10-2016","21:32:43","23:27:21");
INSERT INTO asistencia VALUES("A1N8052-175","1","03-06-2017","19:52:56","Sin registrar");
INSERT INTO asistencia VALUES("A1N8142-41","1","20-10-2016","18:34:13","19:18:08");
INSERT INTO asistencia VALUES("A1N8240-30","1","09-10-2016","12:56:12","12:58:55");
INSERT INTO asistencia VALUES("A1N8249-198","1","05-06-2017","16:28:32","Sin registrar");
INSERT INTO asistencia VALUES("A1N8253-201","1","05-06-2017","16:33:15","Sin registrar");
INSERT INTO asistencia VALUES("A1N8309-78","1","30-10-2016","18:09:34","Sin registrar");
INSERT INTO asistencia VALUES("A1N8334-61","1","23-10-2016","22:41:36","22:49:07");
INSERT INTO asistencia VALUES("A1N8400-84","1","26-03-2017","16:47:01","Sin registrar");
INSERT INTO asistencia VALUES("A1N8545-23","1","08-10-2016","23:31:45","23:39:11");
INSERT INTO asistencia VALUES("A1N8623-152","1","10-05-2017","16:25:23","16:26:47");
INSERT INTO asistencia VALUES("A1N8663-29","1","09-10-2016","12:46:38","Sin registrar");
INSERT INTO asistencia VALUES("A1N8733-167","1","03-06-2017","16:11:49","Sin registrar");
INSERT INTO asistencia VALUES("A1N8748-243","1","26-06-2017","17:00:55","18:30:22");
INSERT INTO asistencia VALUES("A1N8897-192","1","04-06-2017","12:11:07","Sin registrar");
INSERT INTO asistencia VALUES("A1N8999-43","1","20-10-2016","20:49:48","20:52:26");
INSERT INTO asistencia VALUES("A1N9001-25","1","09-10-2016","09:00:14","09:00:44");
INSERT INTO asistencia VALUES("A1N9088-147","1","09-05-2017","22:12:20","Sin registrar");
INSERT INTO asistencia VALUES("A1N9159-144","1","29-04-2017","11:23:45","Sin registrar");
INSERT INTO asistencia VALUES("A1N9205-30","1","08-10-2016","09:58:23","Sin registrar");
INSERT INTO asistencia VALUES("A1N9229-142","1","27-03-2017","21:22:49","21:26:00");
INSERT INTO asistencia VALUES("A1N9237-209","1","06-06-2017","18:49:28","Sin registrar");
INSERT INTO asistencia VALUES("A1N9325-284","1","02-07-2017","23:40:59","Sin registrar");
INSERT INTO asistencia VALUES("A1N9375-180","1","03-06-2017","20:17:47","Sin registrar");
INSERT INTO asistencia VALUES("A1N9622-89","1","26-03-2017","17:36:02","18:09:53");
INSERT INTO asistencia VALUES("A1N9645-1","1","07-10-2016","21:24:27","21:54:00");
INSERT INTO asistencia VALUES("A1N9819-236","1","14-06-2017","12:12:19","Sin registrar");
INSERT INTO asistencia VALUES("A1N9828-68","1","23-10-2016","22:57:51","23:10:16");
INSERT INTO asistencia VALUES("A1N9971-166","1","26-05-2017","22:55:50","Sin registrar");
INSERT INTO asistencia VALUES("A1N9973-200","1","05-06-2017","16:30:49","Sin registrar");
INSERT INTO asistencia VALUES("A9N0342-54","9","23-10-2016","17:21:24","22:08:45");
INSERT INTO asistencia VALUES("A9N1708-32","9","08-10-2016","17:50:19","Sin registrar");
INSERT INTO asistencia VALUES("A9N1811-237","9","25-06-2017","22:03:11","Sin registrar");
INSERT INTO asistencia VALUES("A9N2240-170","9","03-06-2017","18:17:13","18:36:15");
INSERT INTO asistencia VALUES("A9N3086-275","9","01-07-2017","15:47:44","Sin registrar");
INSERT INTO asistencia VALUES("A9N3112-56","9","23-10-2016","22:09:51","22:10:18");
INSERT INTO asistencia VALUES("A9N3249-281","9","01-07-2017","22:48:50","Sin registrar");
INSERT INTO asistencia VALUES("A9N4120-38","9","16-10-2016","19:22:02","Sin registrar");
INSERT INTO asistencia VALUES("A9N4303-283","9","02-07-2017","11:56:43","Sin registrar");
INSERT INTO asistencia VALUES("A9N4408-156","9","11-05-2017","13:34:38","Sin registrar");
INSERT INTO asistencia VALUES("A9N4485-282","9","02-07-2017","11:17:08","Sin registrar");
INSERT INTO asistencia VALUES("A9N4781-16","9","08-10-2016","20:37:58","20:38:31");
INSERT INTO asistencia VALUES("A9N5153-238","9","25-06-2017","22:53:13","Sin registrar");
INSERT INTO asistencia VALUES("A9N5307-72","9","23-10-2016","23:22:01","Sin registrar");
INSERT INTO asistencia VALUES("A9N5712-18","9","08-10-2016","20:42:06","23:27:46");
INSERT INTO asistencia VALUES("A9N7877-272","9","01-07-2017","15:43:25","15:45:31");
INSERT INTO asistencia VALUES("A9N8338-155","9","11-05-2017","13:30:11","Sin registrar");
INSERT INTO asistencia VALUES("A9N8881-277","9","01-07-2017","16:11:38","Sin registrar");
INSERT INTO asistencia VALUES("A9N9212-270","9","01-07-2017","15:39:50","15:43:07");
INSERT INTO asistencia VALUES("A9N9838-39","9","16-10-2016","20:16:49","21:30:34");
INSERT INTO asistencia VALUES("P13N0870-102","13","26-03-2017","21:29:46","21:45:30");
INSERT INTO asistencia VALUES("P13N1023-64","13","23-10-2016","22:53:41","Sin registrar");
INSERT INTO asistencia VALUES("P13N1035-48","13","21-10-2016","08:40:13","09:00:18");
INSERT INTO asistencia VALUES("P13N1165-47","13","21-10-2016","08:39:39","08:39:59");
INSERT INTO asistencia VALUES("P13N1302-67","13","23-10-2016","22:55:38","Sin registrar");
INSERT INTO asistencia VALUES("P13N2452-226","13","07-06-2017","15:21:08","15:22:34");
INSERT INTO asistencia VALUES("P13N2988-71","13","23-10-2016","23:11:42","23:21:45");
INSERT INTO asistencia VALUES("P13N3257-69","13","23-10-2016","23:10:21","23:10:58");
INSERT INTO asistencia VALUES("P13N3974-172","13","03-06-2017","19:46:51","19:47:24");
INSERT INTO asistencia VALUES("P13N4146-224","13","07-06-2017","15:14:03","15:18:33");
INSERT INTO asistencia VALUES("P13N4397-126","13","27-03-2017","16:35:37","16:38:21");
INSERT INTO asistencia VALUES("P13N4769-80","13","26-03-2017","16:37:22","Sin registrar");
INSERT INTO asistencia VALUES("P13N5977-101","13","26-03-2017","21:25:10","Sin registrar");
INSERT INTO asistencia VALUES("P13N6082-111","13","26-03-2017","22:10:25","22:10:29");
INSERT INTO asistencia VALUES("P13N6332-104","13","26-03-2017","21:47:12","21:48:53");
INSERT INTO asistencia VALUES("P13N6721-100","13","26-03-2017","21:24:29","Sin registrar");
INSERT INTO asistencia VALUES("P13N6937-215","13","07-06-2017","14:32:25","14:32:52");
INSERT INTO asistencia VALUES("P13N7061-124","13","27-03-2017","16:33:05","16:33:19");
INSERT INTO asistencia VALUES("P13N7768-44","13","20-10-2016","21:06:51","Sin registrar");
INSERT INTO asistencia VALUES("P13N7972-128","13","27-03-2017","16:39:04","16:39:54");
INSERT INTO asistencia VALUES("P13N8539-107","13","26-03-2017","22:03:38","22:05:29");
INSERT INTO asistencia VALUES("P13N8873-274","13","01-07-2017","15:46:07","15:47:03");
INSERT INTO asistencia VALUES("P14N0016-223","14","07-06-2017","15:11:20","15:13:51");
INSERT INTO asistencia VALUES("P14N0070-122","14","27-03-2017","12:04:31","Sin registrar");
INSERT INTO asistencia VALUES("P14N0087-94","14","26-03-2017","21:14:23","21:18:13");
INSERT INTO asistencia VALUES("P14N0354-189","14","04-06-2017","11:03:32","Sin registrar");
INSERT INTO asistencia VALUES("P14N0420-188","14","04-06-2017","10:51:47","Sin registrar");
INSERT INTO asistencia VALUES("P14N0468-136","14","27-03-2017","19:31:41","Sin registrar");
INSERT INTO asistencia VALUES("P14N0702-105","14","26-03-2017","21:55:58","21:58:39");
INSERT INTO asistencia VALUES("P14N0749-110","14","26-03-2017","22:10:06","22:10:18");
INSERT INTO asistencia VALUES("P14N0803-115","14","27-03-2017","08:53:04","08:54:39");
INSERT INTO asistencia VALUES("P14N1421-127","14","27-03-2017","16:38:25","16:38:58");
INSERT INTO asistencia VALUES("P14N1724-120","14","27-03-2017","11:58:25","Sin registrar");
INSERT INTO asistencia VALUES("P14N1931-208","14","06-06-2017","18:41:44","18:49:19");
INSERT INTO asistencia VALUES("P14N1948-135","14","27-03-2017","19:29:36","19:31:06");
INSERT INTO asistencia VALUES("P14N2085-96","14","26-03-2017","21:20:13","21:20:48");
INSERT INTO asistencia VALUES("P14N2088-190","14","04-06-2017","11:06:54","11:07:50");
INSERT INTO asistencia VALUES("P14N2488-161","14","19-05-2017","12:52:57","Sin registrar");
INSERT INTO asistencia VALUES("P14N2567-133","14","27-03-2017","18:37:12","19:29:29");
INSERT INTO asistencia VALUES("P14N2924-138","14","27-03-2017","21:16:03","Sin registrar");
INSERT INTO asistencia VALUES("P14N2974-273","14","01-07-2017","15:45:40","15:46:02");
INSERT INTO asistencia VALUES("P14N3057-163","14","19-05-2017","14:22:01","Sin registrar");
INSERT INTO asistencia VALUES("P14N3127-99","14","26-03-2017","21:24:11","Sin registrar");
INSERT INTO asistencia VALUES("P14N3172-108","14","26-03-2017","22:05:39","22:08:28");
INSERT INTO asistencia VALUES("P14N3292-129","14","27-03-2017","16:39:58","17:21:31");
INSERT INTO asistencia VALUES("P14N3476-187","14","04-06-2017","10:43:01","Sin registrar");
INSERT INTO asistencia VALUES("P14N3627-204","14","05-06-2017","16:49:17","16:54:09");
INSERT INTO asistencia VALUES("P14N3812-207","14","05-06-2017","18:18:44","Sin registrar");
INSERT INTO asistencia VALUES("P14N3831-141","14","27-03-2017","21:20:50","21:21:34");
INSERT INTO asistencia VALUES("P14N3858-123","14","27-03-2017","14:02:03","Sin registrar");
INSERT INTO asistencia VALUES("P14N4039-162","14","19-05-2017","13:18:41","Sin registrar");
INSERT INTO asistencia VALUES("P14N4318-160","14","19-05-2017","12:27:23","Sin registrar");
INSERT INTO asistencia VALUES("P14N4658-131","14","27-03-2017","18:12:29","Sin registrar");
INSERT INTO asistencia VALUES("P14N4920-194","14","05-06-2017","12:27:28","Sin registrar");
INSERT INTO asistencia VALUES("P14N5079-92","14","26-03-2017","21:12:01","21:13:05");
INSERT INTO asistencia VALUES("P14N5305-93","14","26-03-2017","21:13:11","21:14:17");
INSERT INTO asistencia VALUES("P14N5318-143","14","27-03-2017","21:26:05","Sin registrar");
INSERT INTO asistencia VALUES("P14N5465-125","14","27-03-2017","16:33:50","16:35:32");
INSERT INTO asistencia VALUES("P14N5585-114","14","26-03-2017","22:11:55","Sin registrar");
INSERT INTO asistencia VALUES("P14N5668-221","14","07-06-2017","14:50:42","14:51:27");
INSERT INTO asistencia VALUES("P14N5779-137","14","27-03-2017","19:33:07","Sin registrar");
INSERT INTO asistencia VALUES("P14N6035-196","14","04-06-2017","14:16:19","Sin registrar");
INSERT INTO asistencia VALUES("P14N6132-191","14","04-06-2017","11:08:06","Sin registrar");
INSERT INTO asistencia VALUES("P14N6517-97","14","26-03-2017","21:20:52","21:20:52");
INSERT INTO asistencia VALUES("P14N6518-139","14","27-03-2017","21:17:01","21:17:54");
INSERT INTO asistencia VALUES("P14N6564-280","14","01-07-2017","21:58:13","22:48:33");
INSERT INTO asistencia VALUES("P14N7105-95","14","26-03-2017","21:18:18","21:18:25");
INSERT INTO asistencia VALUES("P14N7113-197","14","04-06-2017","14:24:22","Sin registrar");
INSERT INTO asistencia VALUES("P14N7365-130","14","27-03-2017","17:21:35","18:12:24");
INSERT INTO asistencia VALUES("P14N7407-134","14","27-03-2017","18:39:07","Sin registrar");
INSERT INTO asistencia VALUES("P14N7525-109","14","26-03-2017","22:08:35","22:10:00");
INSERT INTO asistencia VALUES("P14N7603-121","14","27-03-2017","12:01:57","Sin registrar");
INSERT INTO asistencia VALUES("P14N7610-98","14","26-03-2017","21:21:03","21:21:03");
INSERT INTO asistencia VALUES("P14N7989-112","14","26-03-2017","22:10:36","22:10:56");
INSERT INTO asistencia VALUES("P14N8000-195","14","04-06-2017","13:42:25","Sin registrar");
INSERT INTO asistencia VALUES("P14N8200-140","14","27-03-2017","21:18:50","21:19:10");
INSERT INTO asistencia VALUES("P14N8505-264","14","28-06-2017","20:36:07","20:36:12");
INSERT INTO asistencia VALUES("P14N8561-132","14","27-03-2017","18:35:34","Sin registrar");
INSERT INTO asistencia VALUES("P14N8643-116","14","27-03-2017","08:54:43","08:56:32");
INSERT INTO asistencia VALUES("P14N8845-174","14","03-06-2017","19:48:42","19:52:44");
INSERT INTO asistencia VALUES("P14N8915-186","14","04-06-2017","10:29:35","Sin registrar");
INSERT INTO asistencia VALUES("P14N8923-206","14","05-06-2017","17:53:20","Sin registrar");
INSERT INTO asistencia VALUES("P14N9107-103","14","26-03-2017","21:45:36","21:47:04");
INSERT INTO asistencia VALUES("P14N9284-193","14","04-06-2017","12:24:53","Sin registrar");
INSERT INTO asistencia VALUES("P14N9410-113","14","26-03-2017","22:11:01","22:11:51");
INSERT INTO asistencia VALUES("P14N9456-119","14","27-03-2017","09:13:00","Sin registrar");
INSERT INTO asistencia VALUES("P14N9465-106","14","26-03-2017","22:02:48","22:03:29");
INSERT INTO asistencia VALUES("P14N9535-241","14","26-06-2017","01:38:30","01:49:12");
INSERT INTO asistencia VALUES("P14N9591-149","14","10-05-2017","13:10:44","13:12:55");
INSERT INTO asistencia VALUES("P14N9828-117","14","27-03-2017","08:56:37","Sin registrar");
INSERT INTO asistencia VALUES("P14N9860-203","14","05-06-2017","16:42:47","Sin registrar");
INSERT INTO asistencia VALUES("P14N9991-263","14","28-06-2017","18:12:08","Sin registrar");
INSERT INTO asistencia VALUES("S12N0581-271","12","01-07-2017","15:43:14","15:43:17");
INSERT INTO asistencia VALUES("S12N1007-151","12","10-05-2017","16:10:47","16:14:21");
INSERT INTO asistencia VALUES("S12N1054-27","12","09-10-2016","12:36:10","Sin registrar");
INSERT INTO asistencia VALUES("S12N1738-157","12","11-05-2017","14:22:23","14:27:51");
INSERT INTO asistencia VALUES("S12N2266-21","12","08-10-2016","23:30:33","Sin registrar");
INSERT INTO asistencia VALUES("S12N2727-230","12","13-06-2017","16:54:37","16:54:42");
INSERT INTO asistencia VALUES("S12N2854-214","12","07-06-2017","12:51:50","Sin registrar");
INSERT INTO asistencia VALUES("S12N3430-232","12","13-06-2017","16:58:52","Sin registrar");
INSERT INTO asistencia VALUES("S12N3624-233","12","13-06-2017","17:11:54","17:31:27");
INSERT INTO asistencia VALUES("S12N3865-17","12","08-10-2016","20:39:43","20:41:22");
INSERT INTO asistencia VALUES("S12N4679-231","12","13-06-2017","16:56:37","16:56:54");
INSERT INTO asistencia VALUES("S12N5752-35","12","14-10-2016","11:13:01","11:14:35");
INSERT INTO asistencia VALUES("S12N6486-24","12","08-10-2016","23:39:34","Sin registrar");
INSERT INTO asistencia VALUES("S12N6624-262","12","28-06-2017","16:56:04","16:57:29");
INSERT INTO asistencia VALUES("S12N7211-42","12","20-10-2016","19:18:19","Sin registrar");
INSERT INTO asistencia VALUES("S12N7376-228","12","13-06-2017","16:53:00","16:53:10");
INSERT INTO asistencia VALUES("S12N7502-276","12","01-07-2017","15:50:10","Sin registrar");
INSERT INTO asistencia VALUES("S12N7526-278","12","01-07-2017","17:49:03","21:58:04");
INSERT INTO asistencia VALUES("S12N9050-164","12","20-05-2017","16:19:13","Sin registrar");
INSERT INTO asistencia VALUES("S12N9233-171","12","03-06-2017","18:36:27","Sin registrar");
INSERT INTO asistencia VALUES("S12N9569-229","12","13-06-2017","16:53:37","16:53:40");
INSERT INTO asistencia VALUES("S12N9691-265","12","28-06-2017","20:36:19","20:41:11");
INSERT INTO asistencia VALUES("S15N0671-246","15","26-07-2017","19:39:52","19:39:57");
INSERT INTO asistencia VALUES("S15N1919-258","15","28-06-2017","00:05:11","Sin registrar");
INSERT INTO asistencia VALUES("S15N2498-244","15","26-06-2017","18:30:33","18:31:18");
INSERT INTO asistencia VALUES("S15N3953-250","15","27-06-2017","21:12:19","21:24:17");
INSERT INTO asistencia VALUES("S15N5618-248","15","27-06-2017","20:17:46","20:17:50");
INSERT INTO asistencia VALUES("S15N7960-254","15","27-06-2017","23:21:32","Sin registrar");
INSERT INTO asistencia VALUES("S15N8150-255","15","27-06-2017","23:23:19","Sin registrar");
INSERT INTO asistencia VALUES("S15N8430-253","15","27-06-2017","23:16:06","Sin registrar");
INSERT INTO asistencia VALUES("S15N8721-249","15","26-06-2017","20:37:05","20:37:10");
INSERT INTO asistencia VALUES("S15N8745-257","15","27-06-2017","23:37:05","Sin registrar");
INSERT INTO asistencia VALUES("S16N0458-256","16","27-06-2017","23:32:07","Sin registrar");
INSERT INTO asistencia VALUES("S16N4021-247","16","26-06-2017","19:58:50","19:58:55");
INSERT INTO asistencia VALUES("S16N7899-252","16","27-06-2017","22:45:16","Sin registrar");
INSERT INTO asistencia VALUES("S16N8021-259","16","28-06-2017","00:45:41","Sin registrar");
INSERT INTO asistencia VALUES("S16N8707-251","16","27-06-2017","21:24:49","22:45:09");
INSERT INTO asistencia VALUES("T10N0960-87","10","26-03-2017","17:09:13","17:11:05");
INSERT INTO asistencia VALUES("T10N1172-65","10","23-10-2016","22:54:27","22:54:33");
INSERT INTO asistencia VALUES("T10N2769-79","10","26-03-2017","16:37:11","Sin registrar");
INSERT INTO asistencia VALUES("T10N3419-49","10","21-10-2016","09:02:45","09:04:35");
INSERT INTO asistencia VALUES("T10N3709-46","10","20-10-2016","21:14:48","21:14:51");
INSERT INTO asistencia VALUES("T10N3913-225","10","07-06-2017","15:18:40","15:20:41");
INSERT INTO asistencia VALUES("T10N4681-63","10","23-10-2016","22:49:53","22:50:05");
INSERT INTO asistencia VALUES("T10N5536-51","10","21-10-2016","09:05:27","Sin registrar");
INSERT INTO asistencia VALUES("T10N5852-58","10","23-10-2016","22:39:43","22:40:30");
INSERT INTO asistencia VALUES("T10N5952-45","10","20-10-2016","21:07:48","Sin registrar");
INSERT INTO asistencia VALUES("T10N6493-52","10","21-10-2016","09:13:37","Sin registrar");
INSERT INTO asistencia VALUES("T10N8695-173","10","03-06-2017","19:48:09","19:48:23");
INSERT INTO asistencia VALUES("T10N9666-70","10","23-10-2016","23:11:04","23:11:37");
INSERT INTO asistencia VALUES("T13N0358-55","13","23-10-2016","22:09:03","22:09:35");
INSERT INTO asistencia VALUES("T13N2462-59","13","23-10-2016","22:40:41","22:40:56");
INSERT INTO asistencia VALUES("T13N7603-57","13","23-10-2016","22:10:26","22:39:32");
INSERT INTO asistencia VALUES("T1N7071-60","1","23-10-2016","22:41:18","Sin registrar");



DROP TABLE IF EXISTS avance;

CREATE TABLE `avance` (
  `idavance` int(11) NOT NULL AUTO_INCREMENT,
  `observacion` varchar(512) NOT NULL,
  `tipoAvance` varchar(45) NOT NULL,
  `dni` char(8) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `especialista` varchar(50) NOT NULL,
  PRIMARY KEY (`idavance`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

INSERT INTO avance VALUES("12","terapia de rehabilitación constante","Avance Fisioterapia.","13245679","2017-06-04 00:00:00","");
INSERT INTO avance VALUES("16","este es un avance pedagógico ","Avance Pedagógico.","13245679","2017-06-04 00:00:00","");
INSERT INTO avance VALUES("17","Las benzodiazepinas pueden ser útiles en el tratamiento de la ansiedad y el insomnio","Avance Psicológico.","13245679","2017-06-04 00:00:00","");
INSERT INTO avance VALUES("19","Si se ha producido un mal aprendizaje, el tratamiento consistirá en reaprender la constancia ayudará a que el alumno aprenda","Avance Pedagógico.","13245679","2017-06-03 00:00:00","carlos acosta gonzalez");
INSERT INTO avance VALUES("57","km,nn,mmn","Avance Psicológico.","45687879","2017-06-07 00:00:00","Eduardo Lopez Zafra");
INSERT INTO avance VALUES("58","fkhfklkghklfgklhgkh vc","Avance Pedagógico.","88798754","2017-06-07 00:00:00","carlos acosta gonzalez");
INSERT INTO avance VALUES("61","prueba fecha","Avance Psicológico.","45687879","2017-06-26 00:00:00","user");
INSERT INTO avance VALUES("62","otra prueba fecha","Avance Pedagógico.","13245679","2017-06-16 00:00:00","Tester");
INSERT INTO avance VALUES("63","fecha","Avance Psicológico.","13245679","2017-06-22 00:00:00","Tester");



DROP TABLE IF EXISTS categoria;

CREATE TABLE `categoria` (
  `CodigoCategoria` varchar(20) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`CodigoCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO categoria VALUES("1","Educación");



DROP TABLE IF EXISTS datospersonales;

CREATE TABLE `datospersonales` (
  `dni` char(8) NOT NULL,
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
INSERT INTO datospersonales VALUES("12345567","Jaime","Huamani","Jr.Agatas","ls@hotmail.com","044654123","2017-07-05","2");
INSERT INTO datospersonales VALUES("12345670","Luis Andre","Suarez Perez","Topacios","","","2017-07-04","3");
INSERT INTO datospersonales VALUES("12345671","Luis","Rodriguez","Topacios","","","2017-07-19","1");
INSERT INTO datospersonales VALUES("12345676","juan","lopez","","","","2016-10-07","2");
INSERT INTO datospersonales VALUES("12345679","pedrito","gonzales","av. abc","","","2016-10-08","2");
INSERT INTO datospersonales VALUES("13245679","Jony","Rozales","z","","","2016-10-08","2");
INSERT INTO datospersonales VALUES("14325678","juan","lopez","av. 123","","","2016-10-08","2");
INSERT INTO datospersonales VALUES("45687879","Paola","Rodriguez Calsin","av. hjgjg","","","2008-08-07","2");
INSERT INTO datospersonales VALUES("73790981","max","leon","","","","1994-12-20","2");
INSERT INTO datospersonales VALUES("74762208","Luis","Suarez Perez","jr. libertad","","","1994-09-20","2");
INSERT INTO datospersonales VALUES("88798754","Juana","Bocanegra Galindo","av. azs","","","2005-04-02","3");



DROP TABLE IF EXISTS docente;

CREATE TABLE `docente` (
  `dni` char(8) NOT NULL,
  `Especialidad` varchar(40) NOT NULL,
  `Jornada` varchar(20) NOT NULL DEFAULT 'Mañana'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO docente VALUES("12345679","Pedagogogía","Mañana");
INSERT INTO docente VALUES("12345567","Matematicas","Mañana");



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
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO eventos VALUES("2","Reunion","vcvcxvcxcvxxvcxcvc","http://localhost/cebeChepenBeta0.2/calendario/descripcion_evento.php?id=2","event-special","1490836800000","1490836800000","03/06/2017 20:20","29/03/2017 20:20","14");
INSERT INTO eventos VALUES("3","Recolección de insumos"," xgdfk","http://localhost/cebeChepenBeta0.2/calendario/descripcion_evento.php?id=3","event-success","1490752380000","1490752380000","27/03/2017 20:53","27/03/2017 20:53","14");
INSERT INTO eventos VALUES("4","probando","fdfgdgdfg","../calendario/descripcion_evento.php?id=4","event-important","1495231140000","1495238340000","19/05/2017 16:59","19/05/2017 18:59","14");
INSERT INTO eventos VALUES("5","m,m,nm","mnbnn","../calendario/descripcion_evento.php?id=5","event-success","1496705880000","1496709480000","05/06/2017 18:38","05/06/2017 19:38","14");
INSERT INTO eventos VALUES("6","hoy","adsda","../calendario/descripcion_evento.php?id=6","event-important","1496746800000","1496793000000","06/06/2017 6:00","06/06/2017 18:50","14");
INSERT INTO eventos VALUES("7","hjhkj","x,m,nx","../calendario/descripcion_evento.php?id=7","event-warning","1496792640000","1496796240000","06/06/2017 18:44","06/06/2017 19:44","14");
INSERT INTO eventos VALUES("13","hola","dsm,nds,n","../calendario/descripcion_evento.php?id=13","event-special","1498546020000","1498546020000","27/06/2017 1:47","27/06/2017 1:47","14");
INSERT INTO eventos VALUES("14","Probando","union de id","../calendario/descripcion_evento.php?id=14","event-info","1498692180000","1498695780000","28/06/2017 18:23","28/06/2017 19:23","14");



DROP TABLE IF EXISTS galeria;

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruta` text NOT NULL,
  `orden` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO galeria VALUES("9","../../views/images/galeria/galeria336.jpg","4","2017-06-13 17:36:01");
INSERT INTO galeria VALUES("10","../../views/images/galeria/galeria573.jpg","2","2017-06-13 17:36:01");
INSERT INTO galeria VALUES("11","../../views/images/galeria/galeria650.jpg","3","2017-06-13 17:42:04");
INSERT INTO galeria VALUES("12","../../views/images/galeria/galeria281.jpg","1","2017-06-13 17:59:08");



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



DROP TABLE IF EXISTS juego;

CREATE TABLE `juego` (
  `idJuego` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `puntuacion` int(11) NOT NULL,
  `start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idJuego`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

INSERT INTO juego VALUES("1","12","Juego Arrastrar Números","10","2017-06-27 22:04:20","2017-07-01 21:23:38");
INSERT INTO juego VALUES("2","12","Juego Arrastrar Números","10","2017-06-27 22:30:23","2017-07-01 21:23:38");
INSERT INTO juego VALUES("3","12","Juego Arrastrar Números","10","2017-06-27 22:34:25","2017-07-01 21:23:38");
INSERT INTO juego VALUES("4","12","Juego Arrastrar Números","10","2017-06-27 22:37:02","2017-07-01 21:23:38");
INSERT INTO juego VALUES("5","12","Juego Arrastrar Números","10","2017-06-27 23:19:46","2017-07-01 21:23:38");
INSERT INTO juego VALUES("6","12","Juego Arrastrar Números","10","2017-06-27 23:23:25","2017-07-01 21:23:38");
INSERT INTO juego VALUES("7","12","Juego Arrastrar Números","10","2017-06-27 23:26:47","2017-07-01 21:23:38");
INSERT INTO juego VALUES("8","12","Juego Arrastrar Números","10","2017-06-27 23:30:42","2017-07-01 21:23:38");
INSERT INTO juego VALUES("9","12","Juego Arrastrar Números","10","2017-06-27 23:32:27","2017-07-01 21:23:38");
INSERT INTO juego VALUES("10","12","Juego Arrastrar Números","10","2017-06-27 23:33:23","2017-07-01 21:23:38");
INSERT INTO juego VALUES("11","12","Juego Arrastrar Números","10","2017-06-27 23:35:58","2017-07-01 21:23:38");
INSERT INTO juego VALUES("12","12","Juego Arrastrar Números","10","2017-06-27 23:36:25","2017-07-01 21:23:38");
INSERT INTO juego VALUES("13","12","Juego Arrastrar Números","10","2017-06-27 23:37:29","2017-07-01 21:23:38");
INSERT INTO juego VALUES("14","12","Juego Arrastrar Números","10","2017-06-27 23:48:07","2017-07-01 21:23:38");
INSERT INTO juego VALUES("15","12","Juego Arrastrar Números","10","2017-06-27 23:48:48","2017-07-01 21:23:38");
INSERT INTO juego VALUES("16","12","Juego Arrastrar Números","10","2017-06-28 00:05:25","2017-07-01 21:23:38");
INSERT INTO juego VALUES("17","12","Juego Arrastrar Números","10","2017-06-28 00:05:51","2017-07-01 21:23:38");
INSERT INTO juego VALUES("18","12","Juego Arrastrar Números","10","2017-06-28 00:08:05","2017-07-01 21:23:38");
INSERT INTO juego VALUES("19","12","Juego Arrastrar Números","10","2017-06-28 00:09:47","2017-07-01 21:23:38");
INSERT INTO juego VALUES("20","12","Juego Arrastrar Números","10","2017-06-28 00:10:40","2017-07-01 21:23:38");
INSERT INTO juego VALUES("21","12","Juego Arrastrar Números","10","2017-06-28 00:14:01","2017-07-01 21:23:38");
INSERT INTO juego VALUES("22","12","Juego Arrastrar Números","10","2017-06-28 00:14:11","2017-07-01 21:23:38");
INSERT INTO juego VALUES("23","12","Juego Arrastrar Números","10","2017-06-28 00:18:33","2017-07-01 21:23:38");
INSERT INTO juego VALUES("24","12","Juego Arrastrar Números","10","2017-06-28 00:20:01","2017-07-01 21:23:38");
INSERT INTO juego VALUES("25","12","Juego Arrastrar Números","10","2017-06-28 00:20:57","2017-07-01 21:23:38");
INSERT INTO juego VALUES("26","12","Juego Arrastrar Números","10","2017-06-28 00:21:18","2017-07-01 21:23:38");
INSERT INTO juego VALUES("27","12","Juego Arrastrar Números","10","2017-06-28 00:23:46","2017-07-01 21:23:38");
INSERT INTO juego VALUES("28","12","Juego Arrastrar Números","10","2017-06-28 00:25:06","2017-07-01 21:23:38");
INSERT INTO juego VALUES("29","12","Juego Arrastrar Números","10","2017-06-28 00:30:20","2017-07-01 21:23:38");
INSERT INTO juego VALUES("30","12","Juego Arrastrar Números","10","2017-06-28 00:30:57","2017-07-01 21:23:38");
INSERT INTO juego VALUES("31","12","Juego Arrastrar Números","10","2017-06-28 00:31:26","2017-07-01 21:23:38");
INSERT INTO juego VALUES("32","12","Juego Arrastrar Números","10","2017-06-28 00:32:52","2017-07-01 21:23:38");
INSERT INTO juego VALUES("33","12","Juego Arrastrar Números","10","2017-06-28 00:47:23","2017-07-01 21:23:38");
INSERT INTO juego VALUES("34","12","Juego Arrastrar Números","10","2017-06-28 00:47:59","2017-07-01 21:23:38");
INSERT INTO juego VALUES("35","12","Juego Arrastrar Números","10","2017-06-28 00:48:50","2017-07-01 21:23:38");
INSERT INTO juego VALUES("36","12","Juego Arrastrar Números","10","2017-06-28 00:49:20","2017-07-01 21:23:38");
INSERT INTO juego VALUES("37","12","Juego Arrastrar Números","10","2017-06-28 00:50:14","2017-07-01 21:23:38");
INSERT INTO juego VALUES("38","12","Juego Arrastrar Números","10","2017-06-28 00:50:28","2017-07-01 21:23:38");
INSERT INTO juego VALUES("39","12","Juego Arrastrar Números","10","2017-06-28 00:53:01","2017-07-01 21:23:38");
INSERT INTO juego VALUES("40","12","Juego Arrastrar Números","10","2017-06-28 00:54:48","2017-07-01 21:23:38");
INSERT INTO juego VALUES("41","12","Juego Arrastrar Números","10","2017-06-28 00:55:06","2017-07-01 21:23:38");
INSERT INTO juego VALUES("42","12","Juego Arrastrar Números","10","2017-06-28 00:56:23","2017-07-01 21:23:38");
INSERT INTO juego VALUES("43","12","Juego Arrastrar Números","10","2017-06-28 00:56:40","2017-07-01 21:23:38");
INSERT INTO juego VALUES("44","12","Juego Arrastrar Números","10","2017-06-28 00:58:38","2017-07-01 21:23:38");
INSERT INTO juego VALUES("45","12","Juego Arrastrar Números","10","2017-07-28 00:58:48","2017-07-01 21:23:38");
INSERT INTO juego VALUES("46","12","Juego Arrastrar Números","10","2017-06-28 00:59:48","2017-07-01 21:23:38");
INSERT INTO juego VALUES("47","12","Juego Arrastrar Números","10","2017-07-28 01:01:05","2017-07-01 21:23:38");
INSERT INTO juego VALUES("48","12","Juego Arrastrar Números","10","2017-06-28 01:02:25","2017-07-01 21:23:38");
INSERT INTO juego VALUES("49","12","Juego Arrastrar Números","10","2017-06-29 01:02:42","2017-07-01 21:23:38");
INSERT INTO juego VALUES("50","12","Juego Arrastrar Números","10","2017-06-28 16:56:36","2017-07-01 21:23:38");
INSERT INTO juego VALUES("51","12","Juego Arrastrar Números","10","2017-07-01 21:09:56","2017-07-01 21:23:38");
INSERT INTO juego VALUES("52","12","Juego Arrastrar Números","10","2017-07-01 21:22:51","2017-07-01 21:23:38");
INSERT INTO juego VALUES("53","12","Juego Arrastrar Números","10","2017-07-01 21:35:59","2017-07-01 21:36:57");
INSERT INTO juego VALUES("54","12","Granja","5","2017-07-01 21:44:11","2017-07-01 21:45:02");
INSERT INTO juego VALUES("55","12","Granja segundo nivel","11","2017-07-01 21:45:02","2017-07-01 21:46:14");
INSERT INTO juego VALUES("56","12","Granja segundo nivel","0","2017-07-01 21:57:39","2017-07-01 21:57:39");
INSERT INTO juego VALUES("57","12","Granja","0","2017-07-01 21:57:40","2017-07-01 21:57:40");



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

INSERT INTO libro VALUES("I1Y2016C1B1N9291","1","1","I1Y2016P1N6394","1","Everardo Zapata","Perú","2004","15.00","libro coquito","1°","Dirección","1-1","123","6","4","Bueno");



DROP TABLE IF EXISTS personal;

CREATE TABLE `personal` (
  `dni` char(8) NOT NULL,
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
INSERT INTO prestamo VALUES("U12345679P4N3011","I1Y2016C1B1N9291","1-1-11","03.06.2017","03.06.2017","Prestamo");



DROP TABLE IF EXISTS prestamodocente;

CREATE TABLE `prestamodocente` (
  `CodigoPrestamo` varchar(70) NOT NULL,
  `dni` char(8) NOT NULL,
  KEY `CodigoPrestamo` (`CodigoPrestamo`),
  KEY `CodigoPrestamo_2` (`CodigoPrestamo`),
  CONSTRAINT `prestamodocente_ibfk_1` FOREIGN KEY (`CodigoPrestamo`) REFERENCES `prestamo` (`CodigoPrestamo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO prestamodocente VALUES("U10P1N0809","12345679");
INSERT INTO prestamodocente VALUES("U10P2N6257","12345679");
INSERT INTO prestamodocente VALUES("U12345679P3N1707","12345679");
INSERT INTO prestamodocente VALUES("U12345679P4N3011","12345679");



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
  `Nombre` varchar(35) NOT NULL,
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
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO slide VALUES("1","../../views/images/slide/slide632.jpg","jgjgjg",",j,n,,,m,m,nmn","1","2017-06-13 18:09:37");
INSERT INTO slide VALUES("2","../../views/images/slide/slide195.jpg","Holaa","fsfssf","3","2017-06-13 18:09:37");
INSERT INTO slide VALUES("3","../../views/images/slide/slide953.jpg","ggfggfdh","sdfsdfd","2","2017-06-13 18:09:37");
INSERT INTO slide VALUES("4","../../views/images/slide/slide987.jpg","","","4","2017-06-13 18:09:37");



DROP TABLE IF EXISTS usuario;

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `dni` char(8) NOT NULL,
  `user` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `idRol` int(11) NOT NULL,
  `estado` varchar(45) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_usuario_rol1_idx` (`idRol`),
  CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO usuario VALUES("1","73790981","max","202cb962ac59075b964b07152d234b70","1","Activo");
INSERT INTO usuario VALUES("9","74762208","lsp","202cb962ac59075b964b07152d234b70","1","Activo");
INSERT INTO usuario VALUES("10","12345679","pg","c4ca4238a0b923820dcc509a6f75849b","2","Activo");
INSERT INTO usuario VALUES("12","13245679","x","c4ca4238a0b923820dcc509a6f75849b","3","Activo");
INSERT INTO usuario VALUES("13","14325678","p1","c4ca4238a0b923820dcc509a6f75849b","4","Activo");
INSERT INTO usuario VALUES("14","11234567","a","c4ca4238a0b923820dcc509a6f75849b","4","Activo");
INSERT INTO usuario VALUES("15","88798754","x1","c4ca4238a0b923820dcc509a6f75849b","3","Activo");
INSERT INTO usuario VALUES("16","45687879","x2","c4ca4238a0b923820dcc509a6f75849b","3","Activo");
INSERT INTO usuario VALUES("17","12345567","JHUAMANI","202cb962ac59075b964b07152d234b70","2","Activo");
INSERT INTO usuario VALUES("18","12345670","lsuare","c4ca4238a0b923820dcc509a6f75849b","3","Activo");
INSERT INTO usuario VALUES("19","12345671","LRodriguez","c20ad4d76fe97759aa27a0c99bff6710","1","Activo");



DROP TABLE IF EXISTS videos;

CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruta` text NOT NULL,
  `orden` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO videos VALUES("6","../../views/videos/video813.mp4","0","2017-06-13 18:09:12");
INSERT INTO videos VALUES("7","../../views/videos/video926.mp4","0","2017-06-13 18:35:56");
INSERT INTO videos VALUES("8","../../views/videos/video710.mp4","0","2017-06-13 18:36:12");



SET FOREIGN_KEY_CHECKS=1;