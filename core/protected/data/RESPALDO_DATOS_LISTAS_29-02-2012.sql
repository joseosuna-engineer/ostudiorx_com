-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-11-2011 a las 14:54:37
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_registro`
--

USE `bd_registro`;

--
-- Volcado de datos para la tabla `tbl_dia`
--

INSERT INTO `tbl_dia` VALUES(1, '01');
INSERT INTO `tbl_dia` VALUES(2, '02');
INSERT INTO `tbl_dia` VALUES(3, '03');
INSERT INTO `tbl_dia` VALUES(4, '04');
INSERT INTO `tbl_dia` VALUES(5, '05');
INSERT INTO `tbl_dia` VALUES(6, '06');
INSERT INTO `tbl_dia` VALUES(7, '07');
INSERT INTO `tbl_dia` VALUES(8, '08');
INSERT INTO `tbl_dia` VALUES(9, '09');
INSERT INTO `tbl_dia` VALUES(10, '10');
INSERT INTO `tbl_dia` VALUES(11, '11');
INSERT INTO `tbl_dia` VALUES(12, '12');
INSERT INTO `tbl_dia` VALUES(13, '13');
INSERT INTO `tbl_dia` VALUES(14, '14');
INSERT INTO `tbl_dia` VALUES(15, '15');
INSERT INTO `tbl_dia` VALUES(16, '16');
INSERT INTO `tbl_dia` VALUES(17, '17');
INSERT INTO `tbl_dia` VALUES(18, '18');
INSERT INTO `tbl_dia` VALUES(19, '19');
INSERT INTO `tbl_dia` VALUES(20, '20');
INSERT INTO `tbl_dia` VALUES(21, '21');
INSERT INTO `tbl_dia` VALUES(22, '22');
INSERT INTO `tbl_dia` VALUES(23, '23');
INSERT INTO `tbl_dia` VALUES(24, '24');
INSERT INTO `tbl_dia` VALUES(25, '25');
INSERT INTO `tbl_dia` VALUES(26, '26');
INSERT INTO `tbl_dia` VALUES(27, '27');
INSERT INTO `tbl_dia` VALUES(28, '28');
INSERT INTO `tbl_dia` VALUES(29, '29');
INSERT INTO `tbl_dia` VALUES(30, '30');
INSERT INTO `tbl_dia` VALUES(31, '31');

--
-- Volcado de datos para la tabla `tbl_disciplina`
--

INSERT INTO `tbl_disciplina` VALUES(1, 'Ajedrez');
INSERT INTO `tbl_disciplina` VALUES(2, 'Atletismo');
INSERT INTO `tbl_disciplina` VALUES(3, 'Baloncesto');
INSERT INTO `tbl_disciplina` VALUES(4, 'Béisbol');
INSERT INTO `tbl_disciplina` VALUES(5, 'Boxeo – Full Contact');
INSERT INTO `tbl_disciplina` VALUES(6, 'Esgrima');
INSERT INTO `tbl_disciplina` VALUES(7, 'Excursionismo');
INSERT INTO `tbl_disciplina` VALUES(8, 'Fútbol');
INSERT INTO `tbl_disciplina` VALUES(9, 'Fútbol de Salón');
INSERT INTO `tbl_disciplina` VALUES(10, 'Gimnasia Rítmica');
INSERT INTO `tbl_disciplina` VALUES(11, 'Halterofilia');
INSERT INTO `tbl_disciplina` VALUES(12, 'Judo');
INSERT INTO `tbl_disciplina` VALUES(13, 'Karate Do (Shito Ryu Sosey Kay)');
INSERT INTO `tbl_disciplina` VALUES(14, 'Karate Libre');
INSERT INTO `tbl_disciplina` VALUES(15, 'Kenpo');
INSERT INTO `tbl_disciplina` VALUES(16, 'Kickingball');
INSERT INTO `tbl_disciplina` VALUES(17, 'Kung Fu (Mantis)');
INSERT INTO `tbl_disciplina` VALUES(18, 'Kung Fu (Pak-Hok-Pai)');
INSERT INTO `tbl_disciplina` VALUES(19, 'Kung Fu (Wu Shu)');
INSERT INTO `tbl_disciplina` VALUES(20, 'Lucha Olímpica');
INSERT INTO `tbl_disciplina` VALUES(21, 'Natación');
INSERT INTO `tbl_disciplina` VALUES(22, 'Polo Acuático');
INSERT INTO `tbl_disciplina` VALUES(23, 'Rugby');
INSERT INTO `tbl_disciplina` VALUES(24, 'Saltos Ornamentales');
INSERT INTO `tbl_disciplina` VALUES(25, 'Softbol');
INSERT INTO `tbl_disciplina` VALUES(26, 'Submarinismo');
INSERT INTO `tbl_disciplina` VALUES(27, 'Taekwondo');
INSERT INTO `tbl_disciplina` VALUES(28, 'Tenis de Campo');
INSERT INTO `tbl_disciplina` VALUES(29, 'Tenis de Mesa');
INSERT INTO `tbl_disciplina` VALUES(30, 'Voleibol');
INSERT INTO `tbl_disciplina` VALUES(31, 'Yoga');

--
-- Volcado de datos para la tabla `tbl_escuela_atleta`
--

INSERT INTO `tbl_escuela_atleta` VALUES(1, 1, 'Ingeniería Agrícola');
INSERT INTO `tbl_escuela_atleta` VALUES(2, 2, 'Arquitectura');
INSERT INTO `tbl_escuela_atleta` VALUES(3, 3, 'Biología');
INSERT INTO `tbl_escuela_atleta` VALUES(3, 4, 'Computación');
INSERT INTO `tbl_escuela_atleta` VALUES(3, 5, 'Física');
INSERT INTO `tbl_escuela_atleta` VALUES(3, 6, 'Geoquímica');
INSERT INTO `tbl_escuela_atleta` VALUES(3, 7, 'Matemática');
INSERT INTO `tbl_escuela_atleta` VALUES(3, 8, 'Química');
INSERT INTO `tbl_escuela_atleta` VALUES(4, 9, 'Administración y Contaduría');
INSERT INTO `tbl_escuela_atleta` VALUES(4, 10, 'Antropología');
INSERT INTO `tbl_escuela_atleta` VALUES(4, 11, 'Estadística');
INSERT INTO `tbl_escuela_atleta` VALUES(4, 12, 'Economía');
INSERT INTO `tbl_escuela_atleta` VALUES(4, 13, 'Estudios Internacionales');
INSERT INTO `tbl_escuela_atleta` VALUES(4, 14, 'Sociología');
INSERT INTO `tbl_escuela_atleta` VALUES(4, 15, 'Trabajo Social');
INSERT INTO `tbl_escuela_atleta` VALUES(5, 16, 'Derecho');
INSERT INTO `tbl_escuela_atleta` VALUES(5, 17, 'Estudios Políticos y Administrativos');
INSERT INTO `tbl_escuela_atleta` VALUES(6, 18, 'Medicina Veterinaria');
INSERT INTO `tbl_escuela_atleta` VALUES(7, 19, 'Farmacia');
INSERT INTO `tbl_escuela_atleta` VALUES(8, 20, 'Artes');
INSERT INTO `tbl_escuela_atleta` VALUES(8, 21, 'Bibliotecología y Archivología');
INSERT INTO `tbl_escuela_atleta` VALUES(8, 22, 'Comunicación Social');
INSERT INTO `tbl_escuela_atleta` VALUES(8, 23, 'Educación');
INSERT INTO `tbl_escuela_atleta` VALUES(8, 24, 'Filosofía');
INSERT INTO `tbl_escuela_atleta` VALUES(8, 25, 'Geografía');
INSERT INTO `tbl_escuela_atleta` VALUES(8, 26, 'Historia');
INSERT INTO `tbl_escuela_atleta` VALUES(8, 27, 'Idiomas Modernos');
INSERT INTO `tbl_escuela_atleta` VALUES(8, 28, 'Letras');
INSERT INTO `tbl_escuela_atleta` VALUES(8, 29, 'Psicología');
INSERT INTO `tbl_escuela_atleta` VALUES(9, 30, 'Ingeniería Civil');
INSERT INTO `tbl_escuela_atleta` VALUES(9, 31, 'Ingeniería Eléctrica');
INSERT INTO `tbl_escuela_atleta` VALUES(9, 32, 'Ingeniería Geofísica, Geología y Minas');
INSERT INTO `tbl_escuela_atleta` VALUES(9, 33, 'Ingeniería Metalúrgica');
INSERT INTO `tbl_escuela_atleta` VALUES(9, 34, 'Ingeniería Mecánica');
INSERT INTO `tbl_escuela_atleta` VALUES(9, 35, 'Ingeniería de Petróleo');
INSERT INTO `tbl_escuela_atleta` VALUES(9, 36, 'Ingeniería Química');
INSERT INTO `tbl_escuela_atleta` VALUES(9, 37, 'Procesos Industriales');
INSERT INTO `tbl_escuela_atleta` VALUES(10, 38, 'Bioanálisis');
INSERT INTO `tbl_escuela_atleta` VALUES(10, 39, 'Enfermería');
INSERT INTO `tbl_escuela_atleta` VALUES(10, 40, 'Medicina - Luis Razetti');
INSERT INTO `tbl_escuela_atleta` VALUES(10, 41, 'Medicina - José María Vargas');
INSERT INTO `tbl_escuela_atleta` VALUES(10, 42, 'Nutrición y Dietética');
INSERT INTO `tbl_escuela_atleta` VALUES(10, 43, 'Salud Pública');
INSERT INTO `tbl_escuela_atleta` VALUES(11, 44, 'Odontología');
INSERT INTO `tbl_escuela_atleta` VALUES(12, 45, 'N/A');

--
-- Volcado de datos para la tabla `tbl_especialidad`
--

INSERT INTO `tbl_especialidad` VALUES('Dobles', 'Dobles');
INSERT INTO `tbl_especialidad` VALUES('Dobles Mixtos', 'Dobles Mixtos');
INSERT INTO `tbl_especialidad` VALUES('Espada', 'Espada');
INSERT INTO `tbl_especialidad` VALUES('Florete', 'Florete');
INSERT INTO `tbl_especialidad` VALUES('Individual', 'Individual');
INSERT INTO `tbl_especialidad` VALUES('Mínimo', 'Mínimo');
INSERT INTO `tbl_especialidad` VALUES('Minimosca', 'Minimosca');
INSERT INTO `tbl_especialidad` VALUES('Mosca', 'Mosca');
INSERT INTO `tbl_especialidad` VALUES('Por Equipos', 'Por Equipos');
INSERT INTO `tbl_especialidad` VALUES('Sable', 'Sable');
INSERT INTO `tbl_especialidad` VALUES('Supermosca', 'Supermosca');

--
-- Volcado de datos para la tabla `tbl_estado`
--

INSERT INTO `tbl_estado` VALUES(236, 1, 'Amazonas');
INSERT INTO `tbl_estado` VALUES(236, 2, 'Anzoátegui');
INSERT INTO `tbl_estado` VALUES(236, 3, 'Apure');
INSERT INTO `tbl_estado` VALUES(236, 4, 'Aragua');
INSERT INTO `tbl_estado` VALUES(236, 5, 'Barinas');
INSERT INTO `tbl_estado` VALUES(236, 6, 'Bolívar');
INSERT INTO `tbl_estado` VALUES(236, 7, 'Carabobo');
INSERT INTO `tbl_estado` VALUES(236, 8, 'Cojedes');
INSERT INTO `tbl_estado` VALUES(236, 9, 'Distrito Capital');
INSERT INTO `tbl_estado` VALUES(236, 10, 'Delta Amacuro');
INSERT INTO `tbl_estado` VALUES(236, 11, 'Dependencia Federal');
INSERT INTO `tbl_estado` VALUES(236, 12, 'Falcón');
INSERT INTO `tbl_estado` VALUES(236, 13, 'Guárico');
INSERT INTO `tbl_estado` VALUES(236, 14, 'Lara');
INSERT INTO `tbl_estado` VALUES(236, 15, 'Miranda');
INSERT INTO `tbl_estado` VALUES(236, 16, 'Monagas');
INSERT INTO `tbl_estado` VALUES(236, 17, 'Mérida');
INSERT INTO `tbl_estado` VALUES(236, 18, 'Nueva Esparta');
INSERT INTO `tbl_estado` VALUES(236, 19, 'Portuguesa');
INSERT INTO `tbl_estado` VALUES(236, 20, 'Sucre');
INSERT INTO `tbl_estado` VALUES(236, 21, 'Trujillo');
INSERT INTO `tbl_estado` VALUES(236, 22, 'Táchira');
INSERT INTO `tbl_estado` VALUES(236, 23, 'Vargas');
INSERT INTO `tbl_estado` VALUES(236, 24, 'Yaracuy');
INSERT INTO `tbl_estado` VALUES(236, 25, 'Zulia');

--
-- Volcado de datos para la tabla `tbl_estado_civil_atleta`
--

INSERT INTO `tbl_estado_civil_atleta` VALUES(1, 'Soltero');
INSERT INTO `tbl_estado_civil_atleta` VALUES(2, 'Casado');
INSERT INTO `tbl_estado_civil_atleta` VALUES(3, 'Viudo');
INSERT INTO `tbl_estado_civil_atleta` VALUES(4, 'Divorciado');

--
-- Volcado de datos para la tabla `tbl_estatura_atleta`
--

INSERT INTO `tbl_estatura_atleta` VALUES(1, '1.00');
INSERT INTO `tbl_estatura_atleta` VALUES(2, '1.01');
INSERT INTO `tbl_estatura_atleta` VALUES(3, '1.02');
INSERT INTO `tbl_estatura_atleta` VALUES(4, '1.03');
INSERT INTO `tbl_estatura_atleta` VALUES(5, '1.04');
INSERT INTO `tbl_estatura_atleta` VALUES(6, '1.05');
INSERT INTO `tbl_estatura_atleta` VALUES(7, '1.06');
INSERT INTO `tbl_estatura_atleta` VALUES(8, '1.07');
INSERT INTO `tbl_estatura_atleta` VALUES(9, '1.08');
INSERT INTO `tbl_estatura_atleta` VALUES(10, '1.09');
INSERT INTO `tbl_estatura_atleta` VALUES(11, '1.10');
INSERT INTO `tbl_estatura_atleta` VALUES(12, '1.11');
INSERT INTO `tbl_estatura_atleta` VALUES(13, '1.12');
INSERT INTO `tbl_estatura_atleta` VALUES(14, '1.13');
INSERT INTO `tbl_estatura_atleta` VALUES(15, '1.14');
INSERT INTO `tbl_estatura_atleta` VALUES(16, '1.15');
INSERT INTO `tbl_estatura_atleta` VALUES(17, '1.16');
INSERT INTO `tbl_estatura_atleta` VALUES(18, '1.17');
INSERT INTO `tbl_estatura_atleta` VALUES(19, '1.18');
INSERT INTO `tbl_estatura_atleta` VALUES(20, '1.19');
INSERT INTO `tbl_estatura_atleta` VALUES(21, '1.20');
INSERT INTO `tbl_estatura_atleta` VALUES(22, '1.21');
INSERT INTO `tbl_estatura_atleta` VALUES(23, '1.22');
INSERT INTO `tbl_estatura_atleta` VALUES(24, '1.23');
INSERT INTO `tbl_estatura_atleta` VALUES(25, '1.24');
INSERT INTO `tbl_estatura_atleta` VALUES(26, '1.25');
INSERT INTO `tbl_estatura_atleta` VALUES(27, '1.26');
INSERT INTO `tbl_estatura_atleta` VALUES(28, '1.27');
INSERT INTO `tbl_estatura_atleta` VALUES(29, '1.28');
INSERT INTO `tbl_estatura_atleta` VALUES(30, '1.29');
INSERT INTO `tbl_estatura_atleta` VALUES(31, '1.30');
INSERT INTO `tbl_estatura_atleta` VALUES(32, '1.31');
INSERT INTO `tbl_estatura_atleta` VALUES(33, '1.32');
INSERT INTO `tbl_estatura_atleta` VALUES(34, '1.33');
INSERT INTO `tbl_estatura_atleta` VALUES(35, '1.34');
INSERT INTO `tbl_estatura_atleta` VALUES(36, '1.35');
INSERT INTO `tbl_estatura_atleta` VALUES(37, '1.36');
INSERT INTO `tbl_estatura_atleta` VALUES(38, '1.37');
INSERT INTO `tbl_estatura_atleta` VALUES(39, '1.38');
INSERT INTO `tbl_estatura_atleta` VALUES(40, '1.39');
INSERT INTO `tbl_estatura_atleta` VALUES(41, '1.40');
INSERT INTO `tbl_estatura_atleta` VALUES(42, '1.41');
INSERT INTO `tbl_estatura_atleta` VALUES(43, '1.42');
INSERT INTO `tbl_estatura_atleta` VALUES(44, '1.43');
INSERT INTO `tbl_estatura_atleta` VALUES(45, '1.44');
INSERT INTO `tbl_estatura_atleta` VALUES(46, '1.45');
INSERT INTO `tbl_estatura_atleta` VALUES(47, '1.46');
INSERT INTO `tbl_estatura_atleta` VALUES(48, '1.47');
INSERT INTO `tbl_estatura_atleta` VALUES(49, '1.48');
INSERT INTO `tbl_estatura_atleta` VALUES(50, '1.49');
INSERT INTO `tbl_estatura_atleta` VALUES(51, '1.50');
INSERT INTO `tbl_estatura_atleta` VALUES(52, '1.51');
INSERT INTO `tbl_estatura_atleta` VALUES(53, '1.52');
INSERT INTO `tbl_estatura_atleta` VALUES(54, '1.53');
INSERT INTO `tbl_estatura_atleta` VALUES(55, '1.54');
INSERT INTO `tbl_estatura_atleta` VALUES(56, '1.55');
INSERT INTO `tbl_estatura_atleta` VALUES(57, '1.56');
INSERT INTO `tbl_estatura_atleta` VALUES(58, '1.57');
INSERT INTO `tbl_estatura_atleta` VALUES(59, '1.58');
INSERT INTO `tbl_estatura_atleta` VALUES(60, '1.59');
INSERT INTO `tbl_estatura_atleta` VALUES(61, '1.60');
INSERT INTO `tbl_estatura_atleta` VALUES(62, '1.61');
INSERT INTO `tbl_estatura_atleta` VALUES(63, '1.62');
INSERT INTO `tbl_estatura_atleta` VALUES(64, '1.63');
INSERT INTO `tbl_estatura_atleta` VALUES(65, '1.64');
INSERT INTO `tbl_estatura_atleta` VALUES(66, '1.65');
INSERT INTO `tbl_estatura_atleta` VALUES(67, '1.66');
INSERT INTO `tbl_estatura_atleta` VALUES(68, '1.67');
INSERT INTO `tbl_estatura_atleta` VALUES(69, '1.68');
INSERT INTO `tbl_estatura_atleta` VALUES(70, '1.69');
INSERT INTO `tbl_estatura_atleta` VALUES(71, '1.70');
INSERT INTO `tbl_estatura_atleta` VALUES(72, '1.71');
INSERT INTO `tbl_estatura_atleta` VALUES(73, '1.72');
INSERT INTO `tbl_estatura_atleta` VALUES(74, '1.73');
INSERT INTO `tbl_estatura_atleta` VALUES(75, '1.74');
INSERT INTO `tbl_estatura_atleta` VALUES(76, '1.75');
INSERT INTO `tbl_estatura_atleta` VALUES(77, '1.76');
INSERT INTO `tbl_estatura_atleta` VALUES(78, '1.77');
INSERT INTO `tbl_estatura_atleta` VALUES(79, '1.78');
INSERT INTO `tbl_estatura_atleta` VALUES(80, '1.79');
INSERT INTO `tbl_estatura_atleta` VALUES(81, '1.80');
INSERT INTO `tbl_estatura_atleta` VALUES(82, '1.81');
INSERT INTO `tbl_estatura_atleta` VALUES(83, '1.82');
INSERT INTO `tbl_estatura_atleta` VALUES(84, '1.83');
INSERT INTO `tbl_estatura_atleta` VALUES(85, '1.84');
INSERT INTO `tbl_estatura_atleta` VALUES(86, '1.85');
INSERT INTO `tbl_estatura_atleta` VALUES(87, '1.86');
INSERT INTO `tbl_estatura_atleta` VALUES(88, '1.87');
INSERT INTO `tbl_estatura_atleta` VALUES(89, '1.88');
INSERT INTO `tbl_estatura_atleta` VALUES(90, '1.89');
INSERT INTO `tbl_estatura_atleta` VALUES(91, '1.90');
INSERT INTO `tbl_estatura_atleta` VALUES(92, '1.91');
INSERT INTO `tbl_estatura_atleta` VALUES(93, '1.92');
INSERT INTO `tbl_estatura_atleta` VALUES(94, '1.93');
INSERT INTO `tbl_estatura_atleta` VALUES(95, '1.94');
INSERT INTO `tbl_estatura_atleta` VALUES(96, '1.95');
INSERT INTO `tbl_estatura_atleta` VALUES(97, '1.96');
INSERT INTO `tbl_estatura_atleta` VALUES(98, '1.97');
INSERT INTO `tbl_estatura_atleta` VALUES(99, '1.98');
INSERT INTO `tbl_estatura_atleta` VALUES(100, '1.99');
INSERT INTO `tbl_estatura_atleta` VALUES(101, '2.00');
INSERT INTO `tbl_estatura_atleta` VALUES(102, '2.01');
INSERT INTO `tbl_estatura_atleta` VALUES(103, '2.02');
INSERT INTO `tbl_estatura_atleta` VALUES(104, '2.03');
INSERT INTO `tbl_estatura_atleta` VALUES(105, '2.04');
INSERT INTO `tbl_estatura_atleta` VALUES(106, '2.05');
INSERT INTO `tbl_estatura_atleta` VALUES(107, '2.06');
INSERT INTO `tbl_estatura_atleta` VALUES(108, '2.07');
INSERT INTO `tbl_estatura_atleta` VALUES(109, '2.08');
INSERT INTO `tbl_estatura_atleta` VALUES(110, '2.09');
INSERT INTO `tbl_estatura_atleta` VALUES(111, '2.10');
INSERT INTO `tbl_estatura_atleta` VALUES(112, '2.11');
INSERT INTO `tbl_estatura_atleta` VALUES(113, '2.12');
INSERT INTO `tbl_estatura_atleta` VALUES(114, '2.13');
INSERT INTO `tbl_estatura_atleta` VALUES(115, '2.14');
INSERT INTO `tbl_estatura_atleta` VALUES(116, '2.15');
INSERT INTO `tbl_estatura_atleta` VALUES(117, '2.16');
INSERT INTO `tbl_estatura_atleta` VALUES(118, '2.17');
INSERT INTO `tbl_estatura_atleta` VALUES(119, '2.18');
INSERT INTO `tbl_estatura_atleta` VALUES(120, '2.19');
INSERT INTO `tbl_estatura_atleta` VALUES(121, '2.20');

--
-- Volcado de datos para la tabla `tbl_estatus_academico`
--

INSERT INTO `tbl_estatus_academico` VALUES(1, 'Regular');
INSERT INTO `tbl_estatus_academico` VALUES(2, 'Egresado');
INSERT INTO `tbl_estatus_academico` VALUES(3, 'Retirado');

--
-- Volcado de datos para la tabla `tbl_facultad_atleta`
--

INSERT INTO `tbl_facultad_atleta` VALUES(1, 'Agronomía');
INSERT INTO `tbl_facultad_atleta` VALUES(2, 'Arquitectura y Urbanismo');
INSERT INTO `tbl_facultad_atleta` VALUES(3, 'Ciencias');
INSERT INTO `tbl_facultad_atleta` VALUES(4, 'Ciencias Económicas y Sociales');
INSERT INTO `tbl_facultad_atleta` VALUES(5, 'Ciencias Jurídicas y Políticas');
INSERT INTO `tbl_facultad_atleta` VALUES(6, 'Ciencias Veterinarias');
INSERT INTO `tbl_facultad_atleta` VALUES(7, 'Farmacia');
INSERT INTO `tbl_facultad_atleta` VALUES(8, 'Humanidas y Educación');
INSERT INTO `tbl_facultad_atleta` VALUES(9, 'Ingeniería');
INSERT INTO `tbl_facultad_atleta` VALUES(10, 'Medicina');
INSERT INTO `tbl_facultad_atleta` VALUES(11, 'Odontología');
INSERT INTO `tbl_facultad_atleta` VALUES(12, 'N/A');

--
-- Volcado de datos para la tabla `tbl_mes`
--

INSERT INTO `tbl_mes` VALUES(1, '01', 'enero');
INSERT INTO `tbl_mes` VALUES(2, '02', 'febrero');
INSERT INTO `tbl_mes` VALUES(3, '03', 'marzo');
INSERT INTO `tbl_mes` VALUES(4, '04', 'abril');
INSERT INTO `tbl_mes` VALUES(5, '05', 'mayo');
INSERT INTO `tbl_mes` VALUES(6, '06', 'junio');
INSERT INTO `tbl_mes` VALUES(7, '07', 'julio');
INSERT INTO `tbl_mes` VALUES(8, '08', 'agosto');
INSERT INTO `tbl_mes` VALUES(9, '09', 'septiembre');
INSERT INTO `tbl_mes` VALUES(10, '10', 'octubre');
INSERT INTO `tbl_mes` VALUES(11, '11', 'noviembre');
INSERT INTO `tbl_mes` VALUES(12, '12', 'diciembre');

--
-- Volcado de datos para la tabla `tbl_municipio`
--

INSERT INTO `tbl_municipio` VALUES(9, 1, 'Libertador');
INSERT INTO `tbl_municipio` VALUES(15, 2, 'Acevedo');
INSERT INTO `tbl_municipio` VALUES(15, 3, 'Andrés Bello');
INSERT INTO `tbl_municipio` VALUES(15, 4, 'Baruta');
INSERT INTO `tbl_municipio` VALUES(15, 5, 'Brión');
INSERT INTO `tbl_municipio` VALUES(15, 6, 'Buroz');
INSERT INTO `tbl_municipio` VALUES(15, 7, 'Carrizal');
INSERT INTO `tbl_municipio` VALUES(15, 8, 'Chacao');
INSERT INTO `tbl_municipio` VALUES(15, 9, 'Cristóbal Rojas');
INSERT INTO `tbl_municipio` VALUES(15, 10, 'El Hatillo');
INSERT INTO `tbl_municipio` VALUES(15, 11, 'Guaicaipuro');
INSERT INTO `tbl_municipio` VALUES(15, 12, 'Independencia');
INSERT INTO `tbl_municipio` VALUES(15, 13, 'Lander');
INSERT INTO `tbl_municipio` VALUES(15, 14, 'Los Salias');
INSERT INTO `tbl_municipio` VALUES(15, 15, 'Páez');
INSERT INTO `tbl_municipio` VALUES(15, 16, 'Paz Castillo');
INSERT INTO `tbl_municipio` VALUES(15, 17, 'Pedro Gual');
INSERT INTO `tbl_municipio` VALUES(15, 18, 'Plaza');
INSERT INTO `tbl_municipio` VALUES(15, 19, 'Simón Bolívar');
INSERT INTO `tbl_municipio` VALUES(15, 20, 'Urdaneta');
INSERT INTO `tbl_municipio` VALUES(15, 21, 'Sucre');
INSERT INTO `tbl_municipio` VALUES(15, 22, 'Zamora');
INSERT INTO `tbl_municipio` VALUES(23, 23, 'Vargas');

--
-- Volcado de datos para la tabla `tbl_nacionalidad_atleta`
--

INSERT INTO `tbl_nacionalidad_atleta` VALUES(1, 'Venezolano');
INSERT INTO `tbl_nacionalidad_atleta` VALUES(2, 'Extranjero');

--
-- Volcado de datos para la tabla `tbl_notas`
--

INSERT INTO `tbl_notas` VALUES(0, '00');
INSERT INTO `tbl_notas` VALUES(1, '01');
INSERT INTO `tbl_notas` VALUES(2, '02');
INSERT INTO `tbl_notas` VALUES(3, '03');
INSERT INTO `tbl_notas` VALUES(4, '04');
INSERT INTO `tbl_notas` VALUES(5, '05');
INSERT INTO `tbl_notas` VALUES(6, '06');
INSERT INTO `tbl_notas` VALUES(7, '07');
INSERT INTO `tbl_notas` VALUES(8, '08');
INSERT INTO `tbl_notas` VALUES(9, '09');
INSERT INTO `tbl_notas` VALUES(10, '10');
INSERT INTO `tbl_notas` VALUES(11, '11');
INSERT INTO `tbl_notas` VALUES(12, '12');
INSERT INTO `tbl_notas` VALUES(13, '13');
INSERT INTO `tbl_notas` VALUES(14, '14');
INSERT INTO `tbl_notas` VALUES(15, '15');
INSERT INTO `tbl_notas` VALUES(16, '16');
INSERT INTO `tbl_notas` VALUES(17, '17');
INSERT INTO `tbl_notas` VALUES(18, '18');
INSERT INTO `tbl_notas` VALUES(19, '19');
INSERT INTO `tbl_notas` VALUES(20, '20');

--
-- Volcado de datos para la tabla `tbl_pais`
--

INSERT INTO `tbl_pais` VALUES(1, 'Abjasia');
INSERT INTO `tbl_pais` VALUES(2, 'Acrotiri y Dhekelia');
INSERT INTO `tbl_pais` VALUES(3, 'Afganistán');
INSERT INTO `tbl_pais` VALUES(4, 'Albania');
INSERT INTO `tbl_pais` VALUES(5, 'Alemania');
INSERT INTO `tbl_pais` VALUES(6, 'Alto Karabaj');
INSERT INTO `tbl_pais` VALUES(7, 'Andorra');
INSERT INTO `tbl_pais` VALUES(8, 'Angola');
INSERT INTO `tbl_pais` VALUES(9, 'Anguila');
INSERT INTO `tbl_pais` VALUES(10, 'Antigua y Barbuda');
INSERT INTO `tbl_pais` VALUES(11, 'Arabia Saudita');
INSERT INTO `tbl_pais` VALUES(12, 'Argelia');
INSERT INTO `tbl_pais` VALUES(13, 'Argentina');
INSERT INTO `tbl_pais` VALUES(14, 'Armenia');
INSERT INTO `tbl_pais` VALUES(15, 'Aruba');
INSERT INTO `tbl_pais` VALUES(16, 'Australia');
INSERT INTO `tbl_pais` VALUES(17, 'Austria');
INSERT INTO `tbl_pais` VALUES(18, 'Azerbaiyán');
INSERT INTO `tbl_pais` VALUES(19, 'Bahamas');
INSERT INTO `tbl_pais` VALUES(20, 'Bangladés');
INSERT INTO `tbl_pais` VALUES(21, 'Barbados');
INSERT INTO `tbl_pais` VALUES(22, 'Baréin');
INSERT INTO `tbl_pais` VALUES(23, 'Bélgica');
INSERT INTO `tbl_pais` VALUES(24, 'Belice');
INSERT INTO `tbl_pais` VALUES(25, 'Benín');
INSERT INTO `tbl_pais` VALUES(26, 'Bermudas');
INSERT INTO `tbl_pais` VALUES(27, 'Bielorrusia');
INSERT INTO `tbl_pais` VALUES(28, 'Birmania');
INSERT INTO `tbl_pais` VALUES(29, 'Bolivia');
INSERT INTO `tbl_pais` VALUES(30, 'Bosnia y Herzegovina');
INSERT INTO `tbl_pais` VALUES(31, 'Botsuana');
INSERT INTO `tbl_pais` VALUES(32, 'Brasil');
INSERT INTO `tbl_pais` VALUES(33, 'Brunéi');
INSERT INTO `tbl_pais` VALUES(34, 'Bulgaria');
INSERT INTO `tbl_pais` VALUES(35, 'Burkina Faso');
INSERT INTO `tbl_pais` VALUES(36, 'Burundi');
INSERT INTO `tbl_pais` VALUES(37, 'Bután');
INSERT INTO `tbl_pais` VALUES(38, 'Cabo Verde');
INSERT INTO `tbl_pais` VALUES(39, 'Camboya');
INSERT INTO `tbl_pais` VALUES(40, 'Camerún');
INSERT INTO `tbl_pais` VALUES(41, 'Canadá');
INSERT INTO `tbl_pais` VALUES(42, 'Catar');
INSERT INTO `tbl_pais` VALUES(43, 'Chad');
INSERT INTO `tbl_pais` VALUES(44, 'Chile');
INSERT INTO `tbl_pais` VALUES(45, 'China');
INSERT INTO `tbl_pais` VALUES(46, 'Chipre');
INSERT INTO `tbl_pais` VALUES(47, 'Ciudad del Vaticano');
INSERT INTO `tbl_pais` VALUES(48, 'Colombia');
INSERT INTO `tbl_pais` VALUES(49, 'Comoras');
INSERT INTO `tbl_pais` VALUES(50, 'Corea del Norte');
INSERT INTO `tbl_pais` VALUES(51, 'Corea del Sur');
INSERT INTO `tbl_pais` VALUES(52, 'Costa de Marfil');
INSERT INTO `tbl_pais` VALUES(53, 'Costa Rica');
INSERT INTO `tbl_pais` VALUES(54, 'Croacia');
INSERT INTO `tbl_pais` VALUES(55, 'Cuba');
INSERT INTO `tbl_pais` VALUES(56, 'Curazao');
INSERT INTO `tbl_pais` VALUES(57, 'Dinamarca');
INSERT INTO `tbl_pais` VALUES(58, 'Dominica');
INSERT INTO `tbl_pais` VALUES(59, 'Ecuador');
INSERT INTO `tbl_pais` VALUES(60, 'Egipto');
INSERT INTO `tbl_pais` VALUES(61, 'El Salvador');
INSERT INTO `tbl_pais` VALUES(62, 'Emiratos Árabes Unidos');
INSERT INTO `tbl_pais` VALUES(63, 'Eritrea');
INSERT INTO `tbl_pais` VALUES(64, 'Eslovaquia');
INSERT INTO `tbl_pais` VALUES(65, 'Eslovenia');
INSERT INTO `tbl_pais` VALUES(66, 'España');
INSERT INTO `tbl_pais` VALUES(67, 'Estados Unidos');
INSERT INTO `tbl_pais` VALUES(68, 'Estonia');
INSERT INTO `tbl_pais` VALUES(69, 'Etiopía');
INSERT INTO `tbl_pais` VALUES(70, 'Filipinas');
INSERT INTO `tbl_pais` VALUES(71, 'Finlandia');
INSERT INTO `tbl_pais` VALUES(72, 'Fiyi');
INSERT INTO `tbl_pais` VALUES(73, 'Francia');
INSERT INTO `tbl_pais` VALUES(74, 'Gabón');
INSERT INTO `tbl_pais` VALUES(75, 'Gambia');
INSERT INTO `tbl_pais` VALUES(76, 'Georgia');
INSERT INTO `tbl_pais` VALUES(77, 'Ghana');
INSERT INTO `tbl_pais` VALUES(78, 'Gibraltar');
INSERT INTO `tbl_pais` VALUES(79, 'Granada');
INSERT INTO `tbl_pais` VALUES(80, 'Grecia');
INSERT INTO `tbl_pais` VALUES(81, 'Groenlandia');
INSERT INTO `tbl_pais` VALUES(82, 'Guam');
INSERT INTO `tbl_pais` VALUES(83, 'Guatemala');
INSERT INTO `tbl_pais` VALUES(84, 'Guernsey');
INSERT INTO `tbl_pais` VALUES(85, 'Guinea');
INSERT INTO `tbl_pais` VALUES(86, 'Guinea Ecuatorial');
INSERT INTO `tbl_pais` VALUES(87, 'Guinea-Bissau');
INSERT INTO `tbl_pais` VALUES(88, 'Guyana');
INSERT INTO `tbl_pais` VALUES(89, 'Haití');
INSERT INTO `tbl_pais` VALUES(90, 'Holanda (Países Bajos)');
INSERT INTO `tbl_pais` VALUES(91, 'Honduras');
INSERT INTO `tbl_pais` VALUES(92, 'Hong Kong');
INSERT INTO `tbl_pais` VALUES(93, 'Hungría');
INSERT INTO `tbl_pais` VALUES(94, 'India');
INSERT INTO `tbl_pais` VALUES(95, 'Indonesia');
INSERT INTO `tbl_pais` VALUES(96, 'Inglaterra');
INSERT INTO `tbl_pais` VALUES(97, 'Irak');
INSERT INTO `tbl_pais` VALUES(98, 'Irán');
INSERT INTO `tbl_pais` VALUES(99, 'Irlanda');
INSERT INTO `tbl_pais` VALUES(100, 'Isla de Man');
INSERT INTO `tbl_pais` VALUES(101, 'Isla de Navidad');
INSERT INTO `tbl_pais` VALUES(102, 'Isla Norfolk');
INSERT INTO `tbl_pais` VALUES(103, 'Islandia');
INSERT INTO `tbl_pais` VALUES(104, 'Islas Caimán');
INSERT INTO `tbl_pais` VALUES(105, 'Islas Cocos');
INSERT INTO `tbl_pais` VALUES(106, 'Islas Cook');
INSERT INTO `tbl_pais` VALUES(107, 'Islas Feroe');
INSERT INTO `tbl_pais` VALUES(108, 'Islas Malvinas');
INSERT INTO `tbl_pais` VALUES(109, 'Islas Marianas del Norte');
INSERT INTO `tbl_pais` VALUES(110, 'Islas Marshall');
INSERT INTO `tbl_pais` VALUES(111, 'Islas Pitcairn');
INSERT INTO `tbl_pais` VALUES(112, 'Islas Salomón');
INSERT INTO `tbl_pais` VALUES(113, 'Islas Turcas y Caicos');
INSERT INTO `tbl_pais` VALUES(114, 'Islas Vírgenes Británicas');
INSERT INTO `tbl_pais` VALUES(115, 'Islas Vírgenes de los Estados Unidos');
INSERT INTO `tbl_pais` VALUES(116, 'Israel');
INSERT INTO `tbl_pais` VALUES(117, 'Italia');
INSERT INTO `tbl_pais` VALUES(118, 'Jamaica');
INSERT INTO `tbl_pais` VALUES(119, 'Japón');
INSERT INTO `tbl_pais` VALUES(120, 'Jersey');
INSERT INTO `tbl_pais` VALUES(121, 'Jordania');
INSERT INTO `tbl_pais` VALUES(122, 'Kazajistán');
INSERT INTO `tbl_pais` VALUES(123, 'Kenia');
INSERT INTO `tbl_pais` VALUES(124, 'Kirguistán');
INSERT INTO `tbl_pais` VALUES(125, 'Kiribati');
INSERT INTO `tbl_pais` VALUES(126, 'Kosovo');
INSERT INTO `tbl_pais` VALUES(127, 'Kuwait');
INSERT INTO `tbl_pais` VALUES(128, 'Laos');
INSERT INTO `tbl_pais` VALUES(129, 'Lesoto');
INSERT INTO `tbl_pais` VALUES(130, 'Letonia');
INSERT INTO `tbl_pais` VALUES(131, 'Líbano');
INSERT INTO `tbl_pais` VALUES(132, 'Liberia');
INSERT INTO `tbl_pais` VALUES(133, 'Libia');
INSERT INTO `tbl_pais` VALUES(134, 'Liechtenstein');
INSERT INTO `tbl_pais` VALUES(135, 'Lituania');
INSERT INTO `tbl_pais` VALUES(136, 'Luxemburgo');
INSERT INTO `tbl_pais` VALUES(137, 'Macao');
INSERT INTO `tbl_pais` VALUES(138, 'Macedonia');
INSERT INTO `tbl_pais` VALUES(139, 'Madagascar');
INSERT INTO `tbl_pais` VALUES(140, 'Malasia');
INSERT INTO `tbl_pais` VALUES(141, 'Malaui');
INSERT INTO `tbl_pais` VALUES(142, 'Maldivas');
INSERT INTO `tbl_pais` VALUES(143, 'Malta');
INSERT INTO `tbl_pais` VALUES(144, 'Marruecos');
INSERT INTO `tbl_pais` VALUES(145, 'Mauricio');
INSERT INTO `tbl_pais` VALUES(146, 'Mauritania');
INSERT INTO `tbl_pais` VALUES(147, 'México');
INSERT INTO `tbl_pais` VALUES(148, 'Micronesia');
INSERT INTO `tbl_pais` VALUES(149, 'Moldavia');
INSERT INTO `tbl_pais` VALUES(150, 'Mónaco');
INSERT INTO `tbl_pais` VALUES(151, 'Mongolia');
INSERT INTO `tbl_pais` VALUES(152, 'Montenegro');
INSERT INTO `tbl_pais` VALUES(153, 'Montserrat');
INSERT INTO `tbl_pais` VALUES(154, 'Mozambique');
INSERT INTO `tbl_pais` VALUES(155, 'Namibia');
INSERT INTO `tbl_pais` VALUES(156, 'Nauru');
INSERT INTO `tbl_pais` VALUES(157, 'Nepal');
INSERT INTO `tbl_pais` VALUES(158, 'Nicaragua');
INSERT INTO `tbl_pais` VALUES(159, 'Nigeria');
INSERT INTO `tbl_pais` VALUES(160, 'Niue');
INSERT INTO `tbl_pais` VALUES(161, 'Noruega');
INSERT INTO `tbl_pais` VALUES(162, 'Nueva Caledonia');
INSERT INTO `tbl_pais` VALUES(163, 'Nueva Zelanda');
INSERT INTO `tbl_pais` VALUES(164, 'Omán');
INSERT INTO `tbl_pais` VALUES(165, 'Osetia del Sur');
INSERT INTO `tbl_pais` VALUES(167, 'Pakistán');
INSERT INTO `tbl_pais` VALUES(168, 'Palaos');
INSERT INTO `tbl_pais` VALUES(169, 'Palestina');
INSERT INTO `tbl_pais` VALUES(170, 'Panamá');
INSERT INTO `tbl_pais` VALUES(171, 'Papúa Nueva Guinea');
INSERT INTO `tbl_pais` VALUES(172, 'Paraguay');
INSERT INTO `tbl_pais` VALUES(173, 'Perú');
INSERT INTO `tbl_pais` VALUES(174, 'Polinesia Francesa');
INSERT INTO `tbl_pais` VALUES(175, 'Polonia');
INSERT INTO `tbl_pais` VALUES(176, 'Portugal');
INSERT INTO `tbl_pais` VALUES(177, 'Puerto Rico');
INSERT INTO `tbl_pais` VALUES(178, 'Reino Unido');
INSERT INTO `tbl_pais` VALUES(179, 'Rep. Centroafricana');
INSERT INTO `tbl_pais` VALUES(180, 'Rep. Checa');
INSERT INTO `tbl_pais` VALUES(181, 'Rep. del Congo');
INSERT INTO `tbl_pais` VALUES(182, 'Rep. del Norte de Chipe');
INSERT INTO `tbl_pais` VALUES(183, 'Rep. Dem. del Congo');
INSERT INTO `tbl_pais` VALUES(184, 'Rep. Dominicana');
INSERT INTO `tbl_pais` VALUES(185, 'Ruanda');
INSERT INTO `tbl_pais` VALUES(186, 'Rumania');
INSERT INTO `tbl_pais` VALUES(187, 'Rusia');
INSERT INTO `tbl_pais` VALUES(188, 'Sahara Occidental');
INSERT INTO `tbl_pais` VALUES(189, 'Samoa');
INSERT INTO `tbl_pais` VALUES(190, 'Samoa Americana');
INSERT INTO `tbl_pais` VALUES(191, 'San Bartolomé');
INSERT INTO `tbl_pais` VALUES(192, 'San Cristóbal y Nieves');
INSERT INTO `tbl_pais` VALUES(193, 'San Marino');
INSERT INTO `tbl_pais` VALUES(194, 'San Martín (Francia)');
INSERT INTO `tbl_pais` VALUES(195, 'San Martín (Países Bajos)');
INSERT INTO `tbl_pais` VALUES(196, 'San Pedro y Miquelón');
INSERT INTO `tbl_pais` VALUES(197, 'San Vicente y las Granadinas');
INSERT INTO `tbl_pais` VALUES(198, 'Santa Helena');
INSERT INTO `tbl_pais` VALUES(199, 'Santa Lucía');
INSERT INTO `tbl_pais` VALUES(200, 'Santo Tomé y Príncipe');
INSERT INTO `tbl_pais` VALUES(201, 'Senegal');
INSERT INTO `tbl_pais` VALUES(202, 'Serbia');
INSERT INTO `tbl_pais` VALUES(203, 'Seychelles');
INSERT INTO `tbl_pais` VALUES(204, 'Sierra Leona');
INSERT INTO `tbl_pais` VALUES(205, 'Singapur');
INSERT INTO `tbl_pais` VALUES(206, 'Siria');
INSERT INTO `tbl_pais` VALUES(207, 'Somalia');
INSERT INTO `tbl_pais` VALUES(208, 'Somalilandia');
INSERT INTO `tbl_pais` VALUES(209, 'Sri Lanka');
INSERT INTO `tbl_pais` VALUES(210, 'Suazilandia');
INSERT INTO `tbl_pais` VALUES(211, 'Sudáfrica');
INSERT INTO `tbl_pais` VALUES(212, 'Sudán');
INSERT INTO `tbl_pais` VALUES(213, 'Suecia');
INSERT INTO `tbl_pais` VALUES(214, 'Suiza');
INSERT INTO `tbl_pais` VALUES(215, 'Surinam');
INSERT INTO `tbl_pais` VALUES(216, 'Svalbard');
INSERT INTO `tbl_pais` VALUES(217, 'Tailandia');
INSERT INTO `tbl_pais` VALUES(218, 'Taiwán');
INSERT INTO `tbl_pais` VALUES(219, 'Tanzania');
INSERT INTO `tbl_pais` VALUES(220, 'Tayikistán');
INSERT INTO `tbl_pais` VALUES(221, 'Timor Oriental');
INSERT INTO `tbl_pais` VALUES(222, 'Togo');
INSERT INTO `tbl_pais` VALUES(223, 'Tokelau');
INSERT INTO `tbl_pais` VALUES(224, 'Tonga');
INSERT INTO `tbl_pais` VALUES(225, 'Transnistria');
INSERT INTO `tbl_pais` VALUES(226, 'Trinidad y Tobago');
INSERT INTO `tbl_pais` VALUES(227, 'Túnez');
INSERT INTO `tbl_pais` VALUES(228, 'Turkmenistán');
INSERT INTO `tbl_pais` VALUES(229, 'Turquía');
INSERT INTO `tbl_pais` VALUES(230, 'Tuvalu');
INSERT INTO `tbl_pais` VALUES(231, 'Ucrania');
INSERT INTO `tbl_pais` VALUES(232, 'Uganda');
INSERT INTO `tbl_pais` VALUES(233, 'Uruguay');
INSERT INTO `tbl_pais` VALUES(234, 'Uzbekistán');
INSERT INTO `tbl_pais` VALUES(235, 'Vanuatu');
INSERT INTO `tbl_pais` VALUES(236, 'Venezuela');
INSERT INTO `tbl_pais` VALUES(237, 'Vietnam');
INSERT INTO `tbl_pais` VALUES(238, 'Wallis y Futuna');
INSERT INTO `tbl_pais` VALUES(239, 'Yemen');
INSERT INTO `tbl_pais` VALUES(240, 'Yibuti');
INSERT INTO `tbl_pais` VALUES(241, 'Zambia');
INSERT INTO `tbl_pais` VALUES(242, 'Zimbabue');

--
-- Volcado de datos para la tabla `tbl_periodo_lectivo`
--

INSERT INTO `tbl_periodo_lectivo` VALUES(1, '1-1970');
INSERT INTO `tbl_periodo_lectivo` VALUES(2, '2-1970');
INSERT INTO `tbl_periodo_lectivo` VALUES(3, '1-1971');
INSERT INTO `tbl_periodo_lectivo` VALUES(4, '2-1971');
INSERT INTO `tbl_periodo_lectivo` VALUES(5, '1-1972');
INSERT INTO `tbl_periodo_lectivo` VALUES(6, '2-1972');
INSERT INTO `tbl_periodo_lectivo` VALUES(7, '1-1973');
INSERT INTO `tbl_periodo_lectivo` VALUES(8, '2-1973');
INSERT INTO `tbl_periodo_lectivo` VALUES(9, '1-1974');
INSERT INTO `tbl_periodo_lectivo` VALUES(10, '2-1974');
INSERT INTO `tbl_periodo_lectivo` VALUES(11, '1-1975');
INSERT INTO `tbl_periodo_lectivo` VALUES(12, '2-1975');
INSERT INTO `tbl_periodo_lectivo` VALUES(13, '1-1976');
INSERT INTO `tbl_periodo_lectivo` VALUES(14, '2-1976');
INSERT INTO `tbl_periodo_lectivo` VALUES(15, '1-1977');
INSERT INTO `tbl_periodo_lectivo` VALUES(16, '2-1977');
INSERT INTO `tbl_periodo_lectivo` VALUES(17, '1-1978');
INSERT INTO `tbl_periodo_lectivo` VALUES(18, '2-1978');
INSERT INTO `tbl_periodo_lectivo` VALUES(19, '1-1979');
INSERT INTO `tbl_periodo_lectivo` VALUES(20, '2-1979');
INSERT INTO `tbl_periodo_lectivo` VALUES(21, '1-1980');
INSERT INTO `tbl_periodo_lectivo` VALUES(22, '2-1980');
INSERT INTO `tbl_periodo_lectivo` VALUES(23, '1-1981');
INSERT INTO `tbl_periodo_lectivo` VALUES(24, '2-1981');
INSERT INTO `tbl_periodo_lectivo` VALUES(25, '1-1982');
INSERT INTO `tbl_periodo_lectivo` VALUES(26, '2-1982');
INSERT INTO `tbl_periodo_lectivo` VALUES(27, '1-1983');
INSERT INTO `tbl_periodo_lectivo` VALUES(28, '2-1983');
INSERT INTO `tbl_periodo_lectivo` VALUES(29, '1-1984');
INSERT INTO `tbl_periodo_lectivo` VALUES(30, '2-1984');
INSERT INTO `tbl_periodo_lectivo` VALUES(31, '1-1985');
INSERT INTO `tbl_periodo_lectivo` VALUES(32, '2-1985');
INSERT INTO `tbl_periodo_lectivo` VALUES(33, '1-1986');
INSERT INTO `tbl_periodo_lectivo` VALUES(34, '2-1986');
INSERT INTO `tbl_periodo_lectivo` VALUES(35, '1-1987');
INSERT INTO `tbl_periodo_lectivo` VALUES(36, '2-1987');
INSERT INTO `tbl_periodo_lectivo` VALUES(37, '1-1988');
INSERT INTO `tbl_periodo_lectivo` VALUES(38, '2-1988');
INSERT INTO `tbl_periodo_lectivo` VALUES(39, '1-1989');
INSERT INTO `tbl_periodo_lectivo` VALUES(40, '2-1989');
INSERT INTO `tbl_periodo_lectivo` VALUES(41, '1-1990');
INSERT INTO `tbl_periodo_lectivo` VALUES(42, '2-1990');
INSERT INTO `tbl_periodo_lectivo` VALUES(43, '1-1991');
INSERT INTO `tbl_periodo_lectivo` VALUES(44, '2-1991');
INSERT INTO `tbl_periodo_lectivo` VALUES(45, '1-1992');
INSERT INTO `tbl_periodo_lectivo` VALUES(46, '2-1992');
INSERT INTO `tbl_periodo_lectivo` VALUES(47, '1-1993');
INSERT INTO `tbl_periodo_lectivo` VALUES(48, '2-1993');
INSERT INTO `tbl_periodo_lectivo` VALUES(49, '1-1994');
INSERT INTO `tbl_periodo_lectivo` VALUES(50, '2-1994');
INSERT INTO `tbl_periodo_lectivo` VALUES(51, '1-1995');
INSERT INTO `tbl_periodo_lectivo` VALUES(52, '2-1995');
INSERT INTO `tbl_periodo_lectivo` VALUES(53, '1-1996');
INSERT INTO `tbl_periodo_lectivo` VALUES(54, '2-1996');
INSERT INTO `tbl_periodo_lectivo` VALUES(55, '1-1997');
INSERT INTO `tbl_periodo_lectivo` VALUES(56, '2-1997');
INSERT INTO `tbl_periodo_lectivo` VALUES(57, '1-1998');
INSERT INTO `tbl_periodo_lectivo` VALUES(58, '2-1998');
INSERT INTO `tbl_periodo_lectivo` VALUES(59, '1-1999');
INSERT INTO `tbl_periodo_lectivo` VALUES(60, '2-1999');
INSERT INTO `tbl_periodo_lectivo` VALUES(61, '1-2000');
INSERT INTO `tbl_periodo_lectivo` VALUES(62, '2-2000');
INSERT INTO `tbl_periodo_lectivo` VALUES(63, '1-2001');
INSERT INTO `tbl_periodo_lectivo` VALUES(64, '2-2001');
INSERT INTO `tbl_periodo_lectivo` VALUES(65, '1-2002');
INSERT INTO `tbl_periodo_lectivo` VALUES(66, '2-2002');
INSERT INTO `tbl_periodo_lectivo` VALUES(67, '1-2003');
INSERT INTO `tbl_periodo_lectivo` VALUES(68, '2-2003');
INSERT INTO `tbl_periodo_lectivo` VALUES(69, '1-2004');
INSERT INTO `tbl_periodo_lectivo` VALUES(70, '2-2004');
INSERT INTO `tbl_periodo_lectivo` VALUES(71, '1-2005');
INSERT INTO `tbl_periodo_lectivo` VALUES(72, '2-2005');
INSERT INTO `tbl_periodo_lectivo` VALUES(73, '1-2006');
INSERT INTO `tbl_periodo_lectivo` VALUES(74, '2-2006');
INSERT INTO `tbl_periodo_lectivo` VALUES(75, '1-2007');
INSERT INTO `tbl_periodo_lectivo` VALUES(76, '2-2007');
INSERT INTO `tbl_periodo_lectivo` VALUES(77, '1-2008');
INSERT INTO `tbl_periodo_lectivo` VALUES(78, '2-2008');
INSERT INTO `tbl_periodo_lectivo` VALUES(79, '1-2009');
INSERT INTO `tbl_periodo_lectivo` VALUES(80, '2-2009');
INSERT INTO `tbl_periodo_lectivo` VALUES(81, '1-2010');
INSERT INTO `tbl_periodo_lectivo` VALUES(82, '2-2010');
INSERT INTO `tbl_periodo_lectivo` VALUES(83, '1-2011');
INSERT INTO `tbl_periodo_lectivo` VALUES(84, '2-2011');
INSERT INTO `tbl_periodo_lectivo` VALUES(85, '1-2012');
INSERT INTO `tbl_periodo_lectivo` VALUES(86, '2-2013');
--
-- Volcado de datos para la tabla `tbl_sector`
--

INSERT INTO `tbl_sector` VALUES(1, 'Estudiante');
INSERT INTO `tbl_sector` VALUES(2, 'Profesor');
INSERT INTO `tbl_sector` VALUES(3, 'Empleado');
INSERT INTO `tbl_sector` VALUES(4, 'Egresado');
INSERT INTO `tbl_sector` VALUES(5, 'Obrero');
INSERT INTO `tbl_sector` VALUES(6, 'Otro');

--
-- Volcado de datos para la tabla `tbl_semestre`
--

INSERT INTO `tbl_semestre` VALUES(1, '1');
INSERT INTO `tbl_semestre` VALUES(2, '2');
INSERT INTO `tbl_semestre` VALUES(3, '3');
INSERT INTO `tbl_semestre` VALUES(4, '4');
INSERT INTO `tbl_semestre` VALUES(5, '5');
INSERT INTO `tbl_semestre` VALUES(6, '6');
INSERT INTO `tbl_semestre` VALUES(7, '7');
INSERT INTO `tbl_semestre` VALUES(8, '8');
INSERT INTO `tbl_semestre` VALUES(9, '9');
INSERT INTO `tbl_semestre` VALUES(10, '10');

--
-- Volcado de datos para la tabla `tbl_sexo_atleta`
--

INSERT INTO `tbl_sexo_atleta` VALUES(1, 'Masculino');
INSERT INTO `tbl_sexo_atleta` VALUES(2, 'Femenino');

--
-- Volcado de datos para la tabla `tbl_talla_asiatica`
--

INSERT INTO `tbl_talla_asiatica` VALUES(1, '000');
INSERT INTO `tbl_talla_asiatica` VALUES(2, '00');
INSERT INTO `tbl_talla_asiatica` VALUES(3, '0');
INSERT INTO `tbl_talla_asiatica` VALUES(4, '1');
INSERT INTO `tbl_talla_asiatica` VALUES(5, '2');
INSERT INTO `tbl_talla_asiatica` VALUES(6, '3');
INSERT INTO `tbl_talla_asiatica` VALUES(7, '4');
INSERT INTO `tbl_talla_asiatica` VALUES(8, '5');
INSERT INTO `tbl_talla_asiatica` VALUES(9, '6');
INSERT INTO `tbl_talla_asiatica` VALUES(10, '7');

--
-- Volcado de datos para la tabla `tbl_talla_letras`
--

INSERT INTO `tbl_talla_letras` VALUES(1, 'XXXS');
INSERT INTO `tbl_talla_letras` VALUES(2, 'XXS');
INSERT INTO `tbl_talla_letras` VALUES(3, 'XS');
INSERT INTO `tbl_talla_letras` VALUES(4, 'S');
INSERT INTO `tbl_talla_letras` VALUES(5, 'M');
INSERT INTO `tbl_talla_letras` VALUES(6, 'L');
INSERT INTO `tbl_talla_letras` VALUES(7, 'XL');
INSERT INTO `tbl_talla_letras` VALUES(8, 'XXL');
INSERT INTO `tbl_talla_letras` VALUES(9, 'XXXL');

--
-- Volcado de datos para la tabla `tbl_talla_pantalon`
--

INSERT INTO `tbl_talla_pantalon` VALUES(4, '4');
INSERT INTO `tbl_talla_pantalon` VALUES(5, '5');
INSERT INTO `tbl_talla_pantalon` VALUES(6, '6');
INSERT INTO `tbl_talla_pantalon` VALUES(7, '7');
INSERT INTO `tbl_talla_pantalon` VALUES(8, '8');
INSERT INTO `tbl_talla_pantalon` VALUES(9, '9');
INSERT INTO `tbl_talla_pantalon` VALUES(10, '10');
INSERT INTO `tbl_talla_pantalon` VALUES(11, '11');
INSERT INTO `tbl_talla_pantalon` VALUES(12, '12');
INSERT INTO `tbl_talla_pantalon` VALUES(13, '13');
INSERT INTO `tbl_talla_pantalon` VALUES(14, '14');
INSERT INTO `tbl_talla_pantalon` VALUES(15, '15');
INSERT INTO `tbl_talla_pantalon` VALUES(16, '16');
INSERT INTO `tbl_talla_pantalon` VALUES(17, '17');
INSERT INTO `tbl_talla_pantalon` VALUES(18, '18');
INSERT INTO `tbl_talla_pantalon` VALUES(19, '19');
INSERT INTO `tbl_talla_pantalon` VALUES(20, '20');
INSERT INTO `tbl_talla_pantalon` VALUES(21, '21');
INSERT INTO `tbl_talla_pantalon` VALUES(22, '22');
INSERT INTO `tbl_talla_pantalon` VALUES(23, '23');
INSERT INTO `tbl_talla_pantalon` VALUES(24, '24');
INSERT INTO `tbl_talla_pantalon` VALUES(25, '25');
INSERT INTO `tbl_talla_pantalon` VALUES(26, '26');
INSERT INTO `tbl_talla_pantalon` VALUES(27, '27');
INSERT INTO `tbl_talla_pantalon` VALUES(28, '28');
INSERT INTO `tbl_talla_pantalon` VALUES(29, '29');
INSERT INTO `tbl_talla_pantalon` VALUES(30, '30');
INSERT INTO `tbl_talla_pantalon` VALUES(31, '31');
INSERT INTO `tbl_talla_pantalon` VALUES(32, '32');
INSERT INTO `tbl_talla_pantalon` VALUES(33, '33');
INSERT INTO `tbl_talla_pantalon` VALUES(34, '34');
INSERT INTO `tbl_talla_pantalon` VALUES(35, '35');
INSERT INTO `tbl_talla_pantalon` VALUES(36, '36');
INSERT INTO `tbl_talla_pantalon` VALUES(37, '37');
INSERT INTO `tbl_talla_pantalon` VALUES(38, '38');
INSERT INTO `tbl_talla_pantalon` VALUES(39, '39');
INSERT INTO `tbl_talla_pantalon` VALUES(40, '40');
INSERT INTO `tbl_talla_pantalon` VALUES(41, '41');
INSERT INTO `tbl_talla_pantalon` VALUES(42, '42');
INSERT INTO `tbl_talla_pantalon` VALUES(43, '43');
INSERT INTO `tbl_talla_pantalon` VALUES(44, '44');
INSERT INTO `tbl_talla_pantalon` VALUES(45, '45');
INSERT INTO `tbl_talla_pantalon` VALUES(46, '46');
INSERT INTO `tbl_talla_pantalon` VALUES(47, '47');
INSERT INTO `tbl_talla_pantalon` VALUES(48, '48');
INSERT INTO `tbl_talla_pantalon` VALUES(49, '49');
INSERT INTO `tbl_talla_pantalon` VALUES(50, '50');
INSERT INTO `tbl_talla_pantalon` VALUES(51, '51');
INSERT INTO `tbl_talla_pantalon` VALUES(52, '52');
INSERT INTO `tbl_talla_pantalon` VALUES(53, '53');
INSERT INTO `tbl_talla_pantalon` VALUES(54, '54');

--
-- Volcado de datos para la tabla `tbl_tipo_ingreso`
--

INSERT INTO `tbl_tipo_ingreso` VALUES(1, 'Artículo 25');
INSERT INTO `tbl_tipo_ingreso` VALUES(2, 'Prueba Interna');
INSERT INTO `tbl_tipo_ingreso` VALUES(3, 'CNU');
INSERT INTO `tbl_tipo_ingreso` VALUES(4, 'Convenio');

--
-- Volcado de datos para la tabla `tbl_year`
--

INSERT INTO `tbl_year` VALUES(0, 'N/A');
INSERT INTO `tbl_year` VALUES(1912, '1912');
INSERT INTO `tbl_year` VALUES(1913, '1913');
INSERT INTO `tbl_year` VALUES(1914, '1914');
INSERT INTO `tbl_year` VALUES(1915, '1915');
INSERT INTO `tbl_year` VALUES(1916, '1916');
INSERT INTO `tbl_year` VALUES(1917, '1917');
INSERT INTO `tbl_year` VALUES(1918, '1918');
INSERT INTO `tbl_year` VALUES(1919, '1919');
INSERT INTO `tbl_year` VALUES(1920, '1920');
INSERT INTO `tbl_year` VALUES(1921, '1921');
INSERT INTO `tbl_year` VALUES(1922, '1922');
INSERT INTO `tbl_year` VALUES(1923, '1923');
INSERT INTO `tbl_year` VALUES(1924, '1924');
INSERT INTO `tbl_year` VALUES(1925, '1925');
INSERT INTO `tbl_year` VALUES(1926, '1926');
INSERT INTO `tbl_year` VALUES(1927, '1927');
INSERT INTO `tbl_year` VALUES(1928, '1928');
INSERT INTO `tbl_year` VALUES(1929, '1929');
INSERT INTO `tbl_year` VALUES(1930, '1930');
INSERT INTO `tbl_year` VALUES(1931, '1931');
INSERT INTO `tbl_year` VALUES(1932, '1932');
INSERT INTO `tbl_year` VALUES(1933, '1933');
INSERT INTO `tbl_year` VALUES(1934, '1934');
INSERT INTO `tbl_year` VALUES(1935, '1935');
INSERT INTO `tbl_year` VALUES(1936, '1936');
INSERT INTO `tbl_year` VALUES(1937, '1937');
INSERT INTO `tbl_year` VALUES(1938, '1938');
INSERT INTO `tbl_year` VALUES(1939, '1939');
INSERT INTO `tbl_year` VALUES(1940, '1940');
INSERT INTO `tbl_year` VALUES(1941, '1941');
INSERT INTO `tbl_year` VALUES(1942, '1942');
INSERT INTO `tbl_year` VALUES(1943, '1943');
INSERT INTO `tbl_year` VALUES(1944, '1944');
INSERT INTO `tbl_year` VALUES(1945, '1945');
INSERT INTO `tbl_year` VALUES(1946, '1946');
INSERT INTO `tbl_year` VALUES(1947, '1947');
INSERT INTO `tbl_year` VALUES(1948, '1948');
INSERT INTO `tbl_year` VALUES(1949, '1949');
INSERT INTO `tbl_year` VALUES(1950, '1950');
INSERT INTO `tbl_year` VALUES(1951, '1951');
INSERT INTO `tbl_year` VALUES(1952, '1952');
INSERT INTO `tbl_year` VALUES(1953, '1953');
INSERT INTO `tbl_year` VALUES(1954, '1954');
INSERT INTO `tbl_year` VALUES(1955, '1955');
INSERT INTO `tbl_year` VALUES(1956, '1956');
INSERT INTO `tbl_year` VALUES(1957, '1957');
INSERT INTO `tbl_year` VALUES(1958, '1958');
INSERT INTO `tbl_year` VALUES(1959, '1959');
INSERT INTO `tbl_year` VALUES(1960, '1960');
INSERT INTO `tbl_year` VALUES(1961, '1961');
INSERT INTO `tbl_year` VALUES(1962, '1962');
INSERT INTO `tbl_year` VALUES(1963, '1963');
INSERT INTO `tbl_year` VALUES(1964, '1964');
INSERT INTO `tbl_year` VALUES(1965, '1965');
INSERT INTO `tbl_year` VALUES(1966, '1966');
INSERT INTO `tbl_year` VALUES(1967, '1967');
INSERT INTO `tbl_year` VALUES(1968, '1968');
INSERT INTO `tbl_year` VALUES(1969, '1969');
INSERT INTO `tbl_year` VALUES(1970, '1970');
INSERT INTO `tbl_year` VALUES(1971, '1971');
INSERT INTO `tbl_year` VALUES(1972, '1972');
INSERT INTO `tbl_year` VALUES(1973, '1973');
INSERT INTO `tbl_year` VALUES(1974, '1974');
INSERT INTO `tbl_year` VALUES(1975, '1975');
INSERT INTO `tbl_year` VALUES(1976, '1976');
INSERT INTO `tbl_year` VALUES(1977, '1977');
INSERT INTO `tbl_year` VALUES(1978, '1978');
INSERT INTO `tbl_year` VALUES(1979, '1979');
INSERT INTO `tbl_year` VALUES(1980, '1980');
INSERT INTO `tbl_year` VALUES(1981, '1981');
INSERT INTO `tbl_year` VALUES(1982, '1982');
INSERT INTO `tbl_year` VALUES(1983, '1983');
INSERT INTO `tbl_year` VALUES(1984, '1984');
INSERT INTO `tbl_year` VALUES(1985, '1985');
INSERT INTO `tbl_year` VALUES(1986, '1986');
INSERT INTO `tbl_year` VALUES(1987, '1987');
INSERT INTO `tbl_year` VALUES(1988, '1988');
INSERT INTO `tbl_year` VALUES(1989, '1989');
INSERT INTO `tbl_year` VALUES(1990, '1990');
INSERT INTO `tbl_year` VALUES(1991, '1991');
INSERT INTO `tbl_year` VALUES(1992, '1992');
INSERT INTO `tbl_year` VALUES(1993, '1993');
INSERT INTO `tbl_year` VALUES(1994, '1994');
INSERT INTO `tbl_year` VALUES(1995, '1995');
INSERT INTO `tbl_year` VALUES(1996, '1996');
INSERT INTO `tbl_year` VALUES(1997, '1997');
INSERT INTO `tbl_year` VALUES(1998, '1998');
INSERT INTO `tbl_year` VALUES(1999, '1999');
INSERT INTO `tbl_year` VALUES(2000, '2000');
INSERT INTO `tbl_year` VALUES(2001, '2001');
INSERT INTO `tbl_year` VALUES(2002, '2002');
INSERT INTO `tbl_year` VALUES(2003, '2003');
INSERT INTO `tbl_year` VALUES(2004, '2004');
INSERT INTO `tbl_year` VALUES(2005, '2005');
INSERT INTO `tbl_year` VALUES(2006, '2006');
INSERT INTO `tbl_year` VALUES(2007, '2007');
INSERT INTO `tbl_year` VALUES(2008, '2008');
INSERT INTO `tbl_year` VALUES(2009, '2009');
INSERT INTO `tbl_year` VALUES(2010, '2010');
INSERT INTO `tbl_year` VALUES(2011, '2011');
INSERT INTO `tbl_year` VALUES(2012, '2012');
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
