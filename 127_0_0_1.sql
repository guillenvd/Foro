-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2015 a las 00:07:44
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: 'prueba'
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'foro'
--

CREATE TABLE IF NOT EXISTS foro (
  id int(11) NOT NULL AUTO_INCREMENT,
  titulo varchar(20) COLLATE latin1_bin NOT NULL,
  mensaje varchar(500) COLLATE latin1_bin NOT NULL,
  autor int(11) NOT NULL,
  respuestas int(20) NOT NULL,
  `like` int(20) NOT NULL,
  fecha date NOT NULL,
  respuestault date NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla 'foro'
--

INSERT INTO foro (id, titulo, mensaje, autor, respuestas, like, fecha, respuestault) VALUES
(36, 'Cosasa', 'COSAS', 20, 2, 0, '2014-11-11', '2014-11-12'),
(37, 'Prueba del post', 'todo el texto del post', 20, 6, 0, '2014-11-10', '2014-11-12'),
(38, 'haciendo pruebas', 'cosas nuevas aqui pues', 20, 1, 0, '2014-11-11', '2014-11-15'),
(39, 'asa', 'asa', 20, 1, 0, '2014-11-12', '2014-11-12'),
(40, 'En el examen de Base', 'Andamos con todo', 31, 1, 0, '2014-12-08', '2014-12-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'migrations'
--

CREATE TABLE IF NOT EXISTS migrations (
  migration varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  batch int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla 'migrations'
--

INSERT INTO migrations (migration, batch) VALUES
('2014_12_19_044641_prueba1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'respuestas'
--

CREATE TABLE IF NOT EXISTS respuestas (
  id int(11) NOT NULL AUTO_INCREMENT,
  idusuario int(11) NOT NULL,
  idpost int(11) NOT NULL,
  titulo varchar(50) COLLATE latin1_bin NOT NULL,
  mensaje varchar(300) COLLATE latin1_bin NOT NULL,
  fecha date NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=134 ;

--
-- Volcado de datos para la tabla 'respuestas'
--

INSERT INTO respuestas (id, idusuario, idpost, titulo, mensaje, fecha) VALUES
(123, 20, 36, 'cosas', 'mas cosas', '2014-11-10'),
(124, 20, 39, 'cosas nuevas', 'mas', '2014-11-12'),
(125, 20, 37, 'as', 'as', '2014-11-12'),
(126, 20, 37, 'as', 'as', '2014-11-12'),
(127, 20, 37, 'as', 'as', '2014-11-12'),
(128, 20, 37, 'dasd', 'as', '2014-11-12'),
(129, 20, 37, 'asas', 'asa', '2014-11-12'),
(130, 20, 37, 'asas', 'as', '2014-11-12'),
(131, 36, 36, 'no la tramas', 'nasndoasndnak', '2014-11-12'),
(132, 20, 38, 'kill', 'kill', '2014-11-15'),
(133, 31, 40, 'Responder Livan', 'vamos a pasar', '2014-12-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'users'
--

CREATE TABLE IF NOT EXISTS users (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  email varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  full_name varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  updated_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'usuarios'
--

CREATE TABLE IF NOT EXISTS usuarios (
  id int(4) NOT NULL AUTO_INCREMENT,
  nombre varchar(120) COLLATE latin1_bin NOT NULL,
  apellido varchar(120) COLLATE latin1_bin NOT NULL,
  correo varchar(120) COLLATE latin1_bin NOT NULL,
  telefono varchar(18) COLLATE latin1_bin NOT NULL,
  informacion text COLLATE latin1_bin NOT NULL,
  imagen varchar(10) COLLATE latin1_bin NOT NULL,
  `password` varchar(20) COLLATE latin1_bin NOT NULL,
  nickname varchar(10) COLLATE latin1_bin NOT NULL,
  fecha_inicio date NOT NULL,
  ` fecha_lastinicio` date NOT NULL,
  sexo varchar(120) COLLATE latin1_bin NOT NULL,
  nacimiento date NOT NULL,
  nivel int(4) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=48 ;

--
-- Volcado de datos para la tabla 'usuarios'
--

INSERT INTO usuarios (id, nombre, apellido, correo, telefono, informacion, imagen, password, nickname, fecha_inicio,  fecha_lastinicio, sexo, nacimiento, nivel) VALUES
(20, 'David', 'Guillen Vazquez', 'insidmc@gmail.con', '6462236391', 'cosas 2', '20.jpg', 'guillen12', 'llenllen', '0000-00-00', '0000-00-00', '', '1994-10-03', 0),
(21, 'Ryuga ', 'Hideky', 'ryugakawai@gmail.com', '6462236', 'Cosas! Cosas !Cosas! Cosas! Cosas ! Cosas! Cosas! Cosas! Cosas!Cosas!', '21.jpg', '1236', 'Ryuga', '0000-00-00', '0000-00-00', '', '2013-11-09', 0),
(27, 'l', 'l', 'luis.94leel@gmail.com', 'l', '', '27.jpg', '121', 'lp', '0000-00-00', '0000-00-00', '', '2014-11-21', 0),
(28, 'Guilen', 'vazquez', 'insidmc@gmail.com', '6462236390', '', '28.jpg', '12345', 'juan', '0000-00-00', '0000-00-00', '', '2014-11-01', 0),
(29, 'Eduardo', 'Cardenas Leyva', 'cardenas@gmail.com', '6461197609', 'asdhakjdkahskjdhaskjhdk', '29.jpg', '123456', 'Cardenas', '0000-00-00', '0000-00-00', '', '1994-09-10', 0),
(30, 'Luis Edmundo', 'Espinoza Larios', 'luis.94leel@gmail.com', '6461617613', '', '30.jpg', '12345', 'luis', '0000-00-00', '0000-00-00', '', '2007-01-30', 0),
(31, 'Jesus Ivan', 'Gastelum Romero', 'ivangastelum@outlook.com', '646 151 5635', 'WebMaster #1\r\n5to de Uni', '31.jpg', 'lokillo', 'livan', '0000-00-00', '0000-00-00', '', '1992-12-09', 0),
(32, 'Francisco', 'Diaz Amador', 'pacofull1@gmail.com', '6469473393', 'Nacio 10 de junio de 1994 en ensenada baja california', '32.jpg', '123', 'paco', '0000-00-00', '0000-00-00', '', '2014-11-10', 0),
(36, 'Jose Manuel', 'Gonzalez Lara', 'al12760328@gmail.com', '6161050137', 'Soy jose and i sexy.', '36.jpg', '12345', 'jose', '0000-00-00', '0000-00-00', '', '1994-02-07', 0),
(47, 'Jesus', 'Lopez Mateos', 'jelo@outlook.com', '6551152', '', '47.jpg', '123456', 'nose', '0000-00-00', '0000-00-00', 'hombre', '1990-12-10', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
