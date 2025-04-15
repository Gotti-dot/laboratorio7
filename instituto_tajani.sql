-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-04-2025 a las 23:34:28
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `instituto_tajani`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_estudiante` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id_estudiante`, `nombre`, `apellido`, `email`, `fecha_nacimiento`) VALUES
(1, 'Juan', 'Pérez', 'juan.perez@email.com', '2000-05-15'),
(2, 'María', 'Gómez', 'maria.gomez@email.com', '1999-08-22'),
(3, 'Carlos', 'López', 'carlos.lopez@email.com', '2001-03-10'),
(4, 'Ana', 'Martínez', 'ana.martinez@email.com', '2000-11-30'),
(5, 'Luis', 'Rodríguez', 'luis.rodriguez@email.com', '1999-07-18'),
(6, 'Sofía', 'Hernández', 'sofia.hernandez@email.com', '2001-01-25'),
(7, 'Pedro', 'Díaz', 'pedro.diaz@email.com', '2000-09-05'),
(8, 'Laura', 'Fernández', 'laura.fernandez@email.com', '1999-12-12'),
(9, 'Jorge', 'García', 'jorge.garcia@email.com', '2001-04-20'),
(10, 'Mónica', 'Sánchez', 'monica.sanchez@email.com', '2000-06-08'),
(11, 'Ricardo', 'Ramírez', 'ricardo.ramirez@email.com', '1999-10-15'),
(12, 'Patricia', 'Torres', 'patricia.torres@email.com', '2001-02-28'),
(13, 'Fernando', 'Flores', 'fernando.flores@email.com', '2000-07-03'),
(14, 'Gabriela', 'Vargas', 'gabriela.vargas@email.com', '1999-09-17'),
(15, 'Diego', 'Castro', 'diego.castro@email.com', '2001-05-22'),
(16, 'Valeria', 'Reyes', 'valeria.reyes@email.com', '2000-08-14'),
(17, 'Oscar', 'Morales', 'oscar.morales@email.com', '1999-04-11'),
(18, 'Claudia', 'Ortega', 'claudia.ortega@email.com', '2001-11-09'),
(19, 'Raúl', 'Guerrero', 'raul.guerrero@email.com', '2000-03-27'),
(20, 'Adriana', 'Jiménez', 'adriana.jimenez@email.com', '1999-06-19'),
(21, 'José', 'Mendoza', 'jose.mendoza@email.com', '2001-10-08'),
(22, 'Diana', 'Silva', 'diana.silva@email.com', '2000-12-01'),
(23, 'Manuel', 'Rojas', 'manuel.rojas@email.com', '1999-02-23'),
(24, 'Lucía', 'Cortés', 'lucia.cortes@email.com', '2001-07-16'),
(25, 'Roberto', 'Núñez', 'roberto.nunez@email.com', '2000-04-05'),
(26, 'Carmen', 'Medina', 'carmen.medina@email.com', '1999-01-30'),
(27, 'Eduardo', 'Herrera', 'eduardo.herrera@email.com', '2001-08-12'),
(28, 'Alejandra', 'Ruiz', 'alejandra.ruiz@email.com', '2000-10-25'),
(29, 'Miguel', 'Delgado', 'miguel.delgado@email.com', '1999-03-14'),
(30, 'Silvia', 'Cruz', 'silvia.cruz@email.com', '2001-09-07'),
(31, 'Andrea', 'Gutiérrez', 'andrea.gutierrez@email.com', '2000-02-18'),
(32, 'Javier', 'Vega', 'javier.vega@email.com', '1999-05-21'),
(33, 'Mariana', 'Ríos', 'mariana.rios@email.com', '2001-08-14'),
(34, 'Daniel', 'Campos', 'daniel.campos@email.com', '2000-11-03'),
(35, 'Isabel', 'Miranda', 'isabel.miranda@email.com', '1999-04-27'),
(36, 'Arturo', 'Santos', 'arturo.santos@email.com', '2001-07-09'),
(37, 'Lucía', 'Navarro', 'lucia.navarro@email.com', '2000-10-22'),
(38, 'Roberto', 'Molina', 'roberto.molina@email.com', '1999-01-15'),
(39, 'Fernanda', 'Cordero', 'fernanda.cordero@email.com', '2001-12-08'),
(40, 'Héctor', 'Paredes', 'hector.paredes@email.com', '2000-03-31'),
(41, 'Gloria', 'Franco', 'gloria.franco@email.com', '1999-06-24'),
(42, 'Raúl', 'Sosa', 'raul.sosa@email.com', '2001-09-17'),
(43, 'Patricia', 'Lara', 'patricia.lara@email.com', '2000-12-10'),
(44, 'Sergio', 'Cervantes', 'sergio.cervantes@email.com', '1999-03-05'),
(45, 'Verónica', 'Espinoza', 'veronica.espinoza@email.com', '2001-05-28'),
(46, 'Alberto', 'Salazar', 'alberto.salazar@email.com', '2000-08-21'),
(47, 'Beatriz', 'Tapia', 'beatriz.tapia@email.com', '1999-11-14'),
(48, 'Felipe', 'Rangel', 'felipe.rangel@email.com', '2001-02-07'),
(49, 'Dulce', 'Orozco', 'dulce.orozco@email.com', '2000-05-01'),
(50, 'Gerardo', 'Acosta', 'gerardo.acosta@email.com', '1999-07-24'),
(51, 'Alicia', 'Mejía', 'alicia.mejia@email.com', '2001-10-17'),
(52, 'Óscar', 'Valdez', 'oscar.valdez@email.com', '2000-01-10'),
(53, 'Rosa', 'Castañeda', 'rosa.castaneda@email.com', '1999-04-03'),
(54, 'René', 'Juárez', 'rene.juarez@email.com', '2001-06-26'),
(55, 'Teresa', 'Vázquez', 'teresa.vazquez@email.com', '2000-09-19'),
(56, 'Guillermo', 'Rosales', 'guillermo.rosales@email.com', '1999-12-12'),
(57, 'Leticia', 'Aguirre', 'leticia.aguirre@email.com', '2001-03-05'),
(58, 'Francisco', 'Montes', 'francisco.montes@email.com', '2000-05-28'),
(59, 'Yolanda', 'Carrillo', 'yolanda.carrillo@email.com', '1999-08-21'),
(60, 'Ricardo', 'Galván', 'ricardo.galvan@email.com', '2001-11-14'),
(61, 'Gabriela', 'Velasco', 'gabriela.velasco@email.com', '2000-02-07'),
(62, 'Joaquín', 'Serrano', 'joaquin.serrano@email.com', '1999-05-01'),
(63, 'Claudia', 'Méndez', 'claudia.mendez@email.com', '2001-07-24'),
(64, 'Eduardo', 'Rocha', 'eduardo.rocha@email.com', '2000-10-17'),
(65, 'Aurora', 'Cisneros', 'aurora.cisneros@email.com', '1999-01-10'),
(66, 'Salvador', 'Delgado', 'salvador.delgado@email.com', '2001-04-03'),
(67, 'Silvia', 'Téllez', 'silvia.tellez@email.com', '2000-06-26'),
(68, 'Rubén', 'Cuevas', 'ruben.cuevas@email.com', '1999-09-19'),
(69, 'Norma', 'Zamora', 'norma.zamora@email.com', '2001-12-12'),
(70, 'Federico', 'Olvera', 'federico.olvera@email.com', '2000-03-05'),
(71, 'Margarita', 'Ponce', 'margarita.ponce@email.com', '1999-05-28'),
(72, 'Rodolfo', 'Palacios', 'rodolfo.palacios@email.com', '2001-08-21'),
(73, 'Carmen', 'Villa', 'carmen.villa@email.com', '2000-11-14'),
(74, 'Humberto', 'Lozano', 'humberto.lozano@email.com', '1999-02-07'),
(75, 'Rocío', 'Barrios', 'rocio.barrios@email.com', '2001-05-01'),
(76, 'Enrique', 'Camacho', 'enrique.camacho@email.com', '2000-07-24'),
(77, 'Sara', 'Valencia', 'sara.valencia@email.com', '1999-10-17'),
(78, 'Víctor', 'Maldonado', 'victor.maldonado@email.com', '2001-01-10'),
(79, 'Olivia', 'Castillo', 'olivia.castillo@email.com', '2000-04-03'),
(80, 'Jorge', 'Nava', 'jorge.nava@email.com', '1999-06-26'),
(81, 'Adriana', 'Collado', 'adriana.collado@email.com', '2001-09-19'),
(82, 'Manuel', 'Trejo', 'manuel.trejo@email.com', '2000-12-12'),
(83, 'Lourdes', 'Rivas', 'lourdes.rivas@email.com', '1999-03-05'),
(84, 'Alejandro', 'Salinas', 'alejandro.salinas@email.com', '2001-05-28'),
(85, 'Marisol', 'Bustos', 'marisol.bustos@email.com', '2000-08-21'),
(86, 'Raul', 'Cárdenas', 'raul.cardenas@email.com', '1999-11-14'),
(87, 'Luisa', 'Alvarado', 'luisa.alvarado@email.com', '2001-02-07'),
(88, 'Rafael', 'Esquivel', 'rafael.esquivel@email.com', '2000-05-01'),
(89, 'Gladys', 'Duarte', 'gladys.duarte@email.com', '1999-07-24'),
(90, 'Mario', 'Gallegos', 'mario.gallegos@email.com', '2001-10-17'),
(91, 'Liliana', 'Varela', 'liliana.varela@email.com', '2000-01-10'),
(92, 'Ernesto', 'Castaño', 'ernesto.castano@email.com', '1999-04-03'),
(93, 'Estela', 'Bravo', 'estela.bravo@email.com', '2001-06-26'),
(94, 'Alfonso', 'Solís', 'alfonso.solis@email.com', '2000-09-19'),
(95, 'Ruth', 'Romo', 'ruth.romo@email.com', '1999-12-12'),
(96, 'Julio', 'De La Fuente', 'julio.delafuente@email.com', '2001-03-05'),
(97, 'Cecilia', 'Cervantes', 'cecilia.cervantes@email.com', '2000-05-28'),
(98, 'Agustín', 'Zúñiga', 'agustin.zuniga@email.com', '1999-08-21'),
(99, 'Elena', 'Quiroz', 'elena.quiroz@email.com', '2001-11-14'),
(100, 'Hugo', 'Reyes', 'hugo.reyes@email.com', '2000-02-07'),
(101, 'Concepción', 'Fajardo', 'concepcion.fajardo@email.com', '1999-05-01'),
(102, 'Guadalupe', 'Arredondo', 'guadalupe.arredondo@email.com', '2001-07-24'),
(103, 'Feliciano', 'Tovar', 'feliciano.tovar@email.com', '2000-10-17'),
(104, 'Rosario', 'Zarate', 'rosario.zarate@email.com', '1999-01-10'),
(105, 'Abelardo', 'Saucedo', 'abelardo.saucedo@email.com', '2001-04-03'),
(106, 'Dorotea', 'Montaño', 'dorotea.montano@email.com', '2000-06-26'),
(107, 'Gregorio', 'Anguiano', 'gregorio.anguiano@email.com', '1999-09-19'),
(108, 'Rebeca', 'Peralta', 'rebeca.peralta@email.com', '2001-12-12'),
(109, 'Teodoro', 'Madrigal', 'teodoro.madrigal@email.com', '2000-03-05'),
(110, 'Ximena', 'Gamez', 'ximena.gamez@email.com', '1999-05-28'),
(111, 'Homero', 'Valdivia', 'homero.valdivia@email.com', '2001-08-21'),
(112, 'Araceli', 'Barragán', 'araceli.barragan@email.com', '2000-11-14'),
(113, 'Marcelo', 'Coria', 'marcelo.coria@email.com', '1999-02-07'),
(114, 'Bertha', 'Alonso', 'bertha.alonso@email.com', '2001-05-01'),
(115, 'Rodrigo', 'Villanueva', 'rodrigo.villanueva@email.com', '2000-07-24'),
(116, 'Jimena', 'Pineda', 'jimena.pineda@email.com', '1999-10-17'),
(117, 'Fermín', 'Segovia', 'fermin.segovia@email.com', '2001-01-10'),
(118, 'Anita', 'Carrasco', 'anita.carrasco@email.com', '2000-04-03'),
(119, 'Nicolás', 'Zambrano', 'nicolas.zambrano@email.com', '1999-06-26'),
(120, 'Carolina', 'Rosas', 'carolina.rosas@email.com', '2001-09-19'),
(121, 'Fidel', 'Ochoa', 'fidel.ochoa@email.com', '2000-12-12'),
(122, 'Esperanza', 'Luevano', 'esperanza.luevano@email.com', '1999-03-05'),
(123, 'Baltazar', 'Collazo', 'baltazar.collazo@email.com', '2001-05-28'),
(124, 'Nadia', 'Arteaga', 'nadia.arteaga@email.com', '2000-08-21'),
(125, 'Filemón', 'Baca', 'filemon.baca@email.com', '1999-11-14'),
(126, 'Rosalba', 'Badillo', 'rosalba.badillo@email.com', '2001-02-07'),
(127, 'Heriberto', 'Cintrón', 'heriberto.cintron@email.com', '2000-05-01'),
(128, 'Marcela', 'Del Río', 'marcela.delrio@email.com', '1999-07-24'),
(129, 'Rolando', 'Mireles', 'rolando.mireles@email.com', '2001-10-17'),
(130, 'Luz', 'Alcaraz', 'luz.alcaraz@email.com', '2000-01-10'),
(131, 'César', 'Arriaga', 'cesar.arriaga@email.com', '1999-04-03'),
(132, 'Irene', 'Bustamante', 'irene.bustamante@email.com', '2001-06-26'),
(133, 'Pablo', 'Ceballos', 'pablo.ceballos@email.com', '2000-09-19'),
(134, 'Lilia', 'Cordova', 'lilia.cordova@email.com', '1999-12-12'),
(135, 'Saúl', 'Fierro', 'saul.fierro@email.com', '2001-03-05'),
(136, 'Lydia', 'Gallardo', 'lydia.gallardo@email.com', '2000-05-28'),
(137, 'Florencio', 'Haro', 'florencio.haro@email.com', '1999-08-21'),
(138, 'Minerva', 'Jaimes', 'minerva.jaimes@email.com', '2001-11-14'),
(139, 'Gregoria', 'Leal', 'gregoria.leal@email.com', '2000-02-07'),
(140, 'Benjamín', 'Maestas', 'benjamin.maestas@email.com', '1999-05-01'),
(141, 'Noemí', 'Nevárez', 'noemi.nevarez@email.com', '2001-07-24'),
(142, 'Omar', 'Ontiveros', 'omar.ontiveros@email.com', '2000-10-17'),
(143, 'Perla', 'Pedraza', 'perla.pedraza@email.com', '1999-01-10'),
(144, 'Quirino', 'Quintero', 'quirino.quintero@email.com', '2001-04-03'),
(145, 'Renata', 'Ruelas', 'renata.ruelas@email.com', '2000-06-26'),
(146, 'Severo', 'Sedillo', 'severo.sedillo@email.com', '1999-09-19'),
(147, 'Tania', 'Terán', 'tania.teran@email.com', '2001-12-12'),
(148, 'Uriel', 'Urbina', 'uriel.urbina@email.com', '2000-03-05'),
(149, 'Vera', 'Valles', 'vera.valles@email.com', '1999-05-28'),
(150, 'Wilfrido', 'Zayas', 'wilfrido.zayas@email.com', '2001-08-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materia` int(11) NOT NULL,
  `nombre_materia` varchar(100) NOT NULL,
  `codigo_materia` varchar(20) NOT NULL,
  `horas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre_materia`, `codigo_materia`, `horas`) VALUES
(1, 'Programación I', 'PROG101', 4),
(2, 'Bases de Datos', 'BDAT201', 4),
(3, 'Cálculo Diferencial', 'CALC101', 3),
(4, 'Álgebra Lineal', 'ALGE201', 3),
(5, 'Inglés Técnico', 'INGL301', 2),
(6, 'Física General', 'FISI101', 4),
(7, 'Química Orgánica', 'QUIM201', 4),
(8, 'Derecho Informático', 'DERI301', 2),
(9, 'Inteligencia Artificial', 'IART401', 5),
(10, 'Redes de Computadoras', 'REDE301', 4),
(11, 'Programación II', 'PROG102', 4),
(12, 'Estructuras de Datos', 'EDAT202', 4),
(13, 'Cálculo Integral', 'CALC102', 3),
(14, 'Álgebra Abstracta', 'ALGE202', 3),
(15, 'Inglés Avanzado', 'INGL302', 2),
(16, 'Física Moderna', 'FISI102', 4),
(17, 'Química Inorgánica', 'QUIM202', 4),
(18, 'Derecho Laboral', 'DERI302', 2),
(19, 'Machine Learning', 'MLEA402', 5),
(20, 'Seguridad Informática', 'SEGI302', 4),
(21, 'Programación Web', 'PWEB201', 4),
(22, 'Bases de Datos Avanzadas', 'BDAT202', 4),
(23, 'Cálculo Vectorial', 'CALC203', 3),
(24, 'Ecuaciones Diferenciales', 'ECUA301', 3),
(25, 'Francés Básico', 'FRAN101', 2),
(26, 'Termodinámica', 'TERM201', 4),
(27, 'Bioquímica', 'BIOQ301', 4),
(28, 'Derecho Corporativo', 'DERI303', 2),
(29, 'Deep Learning', 'DEEP401', 5),
(30, 'Cloud Computing', 'CLOU301', 4),
(31, 'Sistemas Operativos', 'SOPE201', 4),
(32, 'Arquitectura de Computadoras', 'ARCO301', 4),
(33, 'Probabilidad y Estadística', 'PROB201', 3),
(34, 'Métodos Numéricos', 'METE301', 3),
(35, 'Alemán Técnico', 'ALEM201', 2),
(36, 'Electromagnetismo', 'ELEC301', 4),
(37, 'Genética', 'GENET301', 4),
(38, 'Derecho Internacional', 'DERI304', 2),
(39, 'Computer Vision', 'COVI401', 5),
(40, 'DevOps', 'DEVO301', 4),
(41, 'Programación Funcional', 'PFUN201', 4),
(42, 'Bases de Datos NoSQL', 'BDNO301', 4),
(43, 'Topología', 'TOPO301', 3),
(44, 'Investigación de Operaciones', 'INOP301', 3),
(45, 'Portugués Comercial', 'PORT301', 2),
(46, 'Óptica', 'OPTI301', 4),
(47, 'Microbiología', 'MICR301', 4),
(48, 'Derecho Ambiental', 'DERI305', 2),
(49, 'Natural Language Processing', 'NLP401', 5),
(50, 'Blockchain', 'BLOC301', 4),
(51, 'Desarrollo Móvil', 'DEMO301', 4),
(52, 'Data Warehousing', 'DAWA301', 4),
(53, 'Geometría Diferencial', 'GEOD301', 3),
(54, 'Teoría de Juegos', 'TEJU301', 3),
(55, 'Chino Mandarín', 'CHIN301', 2),
(56, 'Física Cuántica', 'FICU301', 4),
(57, 'Inmunología', 'INMU301', 4),
(58, 'Derecho Digital', 'DERI306', 2),
(59, 'Robótica', 'ROBO401', 5),
(60, 'IoT', 'IOT301', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculas`
--

CREATE TABLE `matriculas` (
  `id_matricula` int(11) NOT NULL,
  `id_estudiante` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  `fecha_matricula` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `matriculas`
--

INSERT INTO `matriculas` (`id_matricula`, `id_estudiante`, `id_materia`, `fecha_matricula`) VALUES
(992, 1, 1, '2023-01-10'),
(993, 1, 2, '2023-01-10'),
(994, 1, 3, '2023-01-11'),
(995, 2, 2, '2023-01-11'),
(996, 2, 4, '2023-01-12'),
(997, 2, 6, '2023-01-12'),
(998, 3, 1, '2023-01-12'),
(999, 3, 5, '2023-01-13'),
(1000, 3, 7, '2023-01-13'),
(1001, 4, 3, '2023-01-13'),
(1002, 4, 6, '2023-01-14'),
(1003, 4, 9, '2023-01-14'),
(1004, 5, 2, '2023-01-14'),
(1005, 5, 5, '2023-01-15'),
(1006, 5, 8, '2023-01-15'),
(1007, 6, 1, '2023-01-15'),
(1008, 6, 4, '2023-01-16'),
(1009, 6, 7, '2023-01-16'),
(1010, 7, 3, '2023-01-16'),
(1011, 7, 6, '2023-01-17'),
(1012, 7, 10, '2023-01-17'),
(1013, 8, 2, '2023-01-17'),
(1014, 8, 5, '2023-01-18'),
(1015, 8, 9, '2023-01-18'),
(1016, 9, 1, '2023-01-18'),
(1017, 9, 3, '2023-01-19'),
(1018, 9, 7, '2023-01-19'),
(1019, 10, 4, '2023-01-19'),
(1020, 10, 6, '2023-01-20'),
(1021, 10, 10, '2023-01-20'),
(1022, 11, 1, '2023-08-05'),
(1023, 11, 2, '2023-08-05'),
(1024, 11, 4, '2023-08-06'),
(1025, 12, 3, '2023-08-06'),
(1026, 12, 5, '2023-08-07'),
(1027, 12, 7, '2023-08-07'),
(1028, 13, 2, '2023-08-07'),
(1029, 13, 6, '2023-08-08'),
(1030, 13, 9, '2023-08-08'),
(1031, 14, 1, '2023-08-08'),
(1032, 14, 3, '2023-08-09'),
(1033, 14, 8, '2023-08-09'),
(1034, 15, 4, '2023-08-09'),
(1035, 15, 7, '2023-08-10'),
(1036, 15, 10, '2023-08-10'),
(1037, 16, 2, '2023-08-10'),
(1038, 16, 5, '2023-08-11'),
(1039, 16, 9, '2023-08-11'),
(1040, 17, 1, '2023-08-11'),
(1041, 17, 6, '2023-08-12'),
(1042, 17, 10, '2023-08-12'),
(1043, 18, 3, '2023-08-12'),
(1044, 18, 7, '2023-08-13'),
(1045, 18, 8, '2023-08-13'),
(1046, 19, 2, '2023-08-13'),
(1047, 19, 4, '2023-08-14'),
(1048, 19, 9, '2023-08-14'),
(1049, 20, 1, '2023-08-14'),
(1050, 20, 5, '2023-08-15'),
(1051, 20, 10, '2023-08-15'),
(1052, 31, 1, '2022-01-10'),
(1053, 31, 3, '2022-01-11'),
(1054, 31, 5, '2022-01-12'),
(1055, 32, 2, '2022-01-10'),
(1056, 32, 4, '2022-01-11'),
(1057, 32, 6, '2022-01-12'),
(1058, 33, 1, '2022-01-10'),
(1059, 33, 7, '2022-01-11'),
(1060, 33, 9, '2022-01-12'),
(1061, 34, 3, '2022-01-10'),
(1062, 34, 5, '2022-01-11'),
(1063, 34, 11, '2022-01-12'),
(1064, 35, 2, '2022-01-10'),
(1065, 35, 8, '2022-01-11'),
(1066, 35, 10, '2022-01-12'),
(1067, 36, 1, '2022-01-10'),
(1068, 36, 4, '2022-01-11'),
(1069, 36, 12, '2022-01-12'),
(1070, 37, 3, '2022-01-10'),
(1071, 37, 6, '2022-01-11'),
(1072, 37, 13, '2022-01-12'),
(1073, 38, 2, '2022-01-10'),
(1074, 38, 5, '2022-01-11'),
(1075, 38, 14, '2022-01-12'),
(1076, 39, 1, '2022-01-10'),
(1077, 39, 7, '2022-01-11'),
(1078, 39, 15, '2022-01-12'),
(1079, 40, 4, '2022-01-10'),
(1080, 40, 6, '2022-01-11'),
(1081, 40, 16, '2022-01-12'),
(1082, 41, 1, '2022-08-05'),
(1083, 41, 2, '2022-08-06'),
(1084, 41, 17, '2022-08-07'),
(1085, 42, 3, '2022-08-05'),
(1086, 42, 4, '2022-08-06'),
(1087, 42, 18, '2022-08-07'),
(1088, 43, 5, '2022-08-05'),
(1089, 43, 6, '2022-08-06'),
(1090, 43, 19, '2022-08-07'),
(1091, 44, 7, '2022-08-05'),
(1092, 44, 8, '2022-08-06'),
(1093, 44, 20, '2022-08-07'),
(1094, 45, 9, '2022-08-05'),
(1095, 45, 10, '2022-08-06'),
(1096, 45, 21, '2022-08-07'),
(1097, 46, 11, '2022-08-05'),
(1098, 46, 12, '2022-08-06'),
(1099, 46, 22, '2022-08-07'),
(1100, 47, 13, '2022-08-05'),
(1101, 47, 14, '2022-08-06'),
(1102, 47, 23, '2022-08-07'),
(1103, 48, 15, '2022-08-05'),
(1104, 48, 16, '2022-08-06'),
(1105, 48, 24, '2022-08-07'),
(1106, 49, 17, '2022-08-05'),
(1107, 49, 18, '2022-08-06'),
(1108, 49, 25, '2022-08-07'),
(1109, 50, 19, '2022-08-05'),
(1110, 50, 20, '2022-08-06'),
(1111, 50, 26, '2022-08-07'),
(1112, 51, 1, '2023-01-10'),
(1113, 51, 27, '2023-01-11'),
(1114, 51, 28, '2023-01-12'),
(1115, 52, 2, '2023-01-10'),
(1116, 52, 29, '2023-01-11'),
(1117, 52, 30, '2023-01-12'),
(1118, 53, 3, '2023-01-10'),
(1119, 53, 31, '2023-01-11'),
(1120, 53, 32, '2023-01-12'),
(1121, 54, 4, '2023-01-10'),
(1122, 54, 33, '2023-01-11'),
(1123, 54, 34, '2023-01-12'),
(1124, 55, 5, '2023-01-10'),
(1125, 55, 35, '2023-01-11'),
(1126, 55, 36, '2023-01-12'),
(1127, 56, 6, '2023-01-10'),
(1128, 56, 37, '2023-01-11'),
(1129, 56, 38, '2023-01-12'),
(1130, 57, 7, '2023-01-10'),
(1131, 57, 39, '2023-01-11'),
(1132, 57, 40, '2023-01-12'),
(1133, 58, 8, '2023-01-10'),
(1134, 58, 41, '2023-01-11'),
(1135, 58, 42, '2023-01-12'),
(1136, 59, 9, '2023-01-10'),
(1137, 59, 43, '2023-01-11'),
(1138, 59, 44, '2023-01-12'),
(1139, 60, 10, '2023-01-10'),
(1140, 60, 45, '2023-01-11'),
(1141, 60, 46, '2023-01-12'),
(1142, 61, 11, '2023-08-05'),
(1143, 61, 47, '2023-08-06'),
(1144, 61, 48, '2023-08-07'),
(1145, 62, 12, '2023-08-05'),
(1146, 62, 49, '2023-08-06'),
(1147, 62, 50, '2023-08-07'),
(1148, 63, 13, '2023-08-05'),
(1149, 63, 51, '2023-08-06'),
(1150, 63, 52, '2023-08-07'),
(1151, 64, 14, '2023-08-05'),
(1152, 64, 53, '2023-08-06'),
(1153, 64, 54, '2023-08-07'),
(1154, 65, 15, '2023-08-05'),
(1155, 65, 55, '2023-08-06'),
(1156, 65, 56, '2023-08-07'),
(1157, 66, 16, '2023-08-05'),
(1158, 66, 57, '2023-08-06'),
(1159, 66, 58, '2023-08-07'),
(1160, 67, 17, '2023-08-05'),
(1161, 67, 59, '2023-08-06'),
(1162, 67, 60, '2023-08-07'),
(1163, 68, 18, '2023-08-05'),
(1164, 68, 1, '2023-08-06'),
(1165, 68, 2, '2023-08-07'),
(1166, 69, 19, '2023-08-05'),
(1167, 69, 3, '2023-08-06'),
(1168, 69, 4, '2023-08-07'),
(1169, 70, 20, '2023-08-05'),
(1170, 70, 5, '2023-08-06'),
(1171, 70, 6, '2023-08-07'),
(1172, 71, 21, '2024-01-10'),
(1173, 71, 7, '2024-01-11'),
(1174, 71, 8, '2024-01-12'),
(1175, 72, 22, '2024-01-10'),
(1176, 72, 9, '2024-01-11'),
(1177, 72, 10, '2024-01-12'),
(1178, 73, 23, '2024-01-10'),
(1179, 73, 11, '2024-01-11'),
(1180, 73, 12, '2024-01-12'),
(1181, 74, 24, '2024-01-10'),
(1182, 74, 13, '2024-01-11'),
(1183, 74, 14, '2024-01-12'),
(1184, 75, 25, '2024-01-10'),
(1185, 75, 15, '2024-01-11'),
(1186, 75, 16, '2024-01-12'),
(1187, 76, 26, '2024-01-10'),
(1188, 76, 17, '2024-01-11'),
(1189, 76, 18, '2024-01-12'),
(1190, 77, 27, '2024-01-10'),
(1191, 77, 19, '2024-01-11'),
(1192, 77, 20, '2024-01-12'),
(1193, 78, 28, '2024-01-10'),
(1194, 78, 21, '2024-01-11'),
(1195, 78, 22, '2024-01-12'),
(1196, 79, 29, '2024-01-10'),
(1197, 79, 23, '2024-01-11'),
(1198, 79, 24, '2024-01-12'),
(1199, 80, 30, '2024-01-10'),
(1200, 80, 25, '2024-01-11'),
(1201, 80, 26, '2024-01-12'),
(1202, 81, 1, '2022-01-10'),
(1203, 81, 27, '2022-01-11'),
(1204, 81, 53, '2022-01-12'),
(1205, 82, 2, '2022-01-10'),
(1206, 82, 28, '2022-01-11'),
(1207, 82, 54, '2022-01-12'),
(1208, 83, 3, '2022-01-10'),
(1209, 83, 29, '2022-01-11'),
(1210, 83, 55, '2022-01-12'),
(1211, 84, 4, '2022-01-10'),
(1212, 84, 30, '2022-01-11'),
(1213, 84, 56, '2022-01-12'),
(1214, 85, 5, '2022-01-10'),
(1215, 85, 31, '2022-01-11'),
(1216, 85, 57, '2022-01-12'),
(1217, 86, 6, '2022-01-10'),
(1218, 86, 32, '2022-01-11'),
(1219, 86, 58, '2022-01-12'),
(1220, 87, 7, '2022-01-10'),
(1221, 87, 33, '2022-01-11'),
(1222, 87, 59, '2022-01-12'),
(1223, 88, 8, '2022-01-10'),
(1224, 88, 34, '2022-01-11'),
(1225, 88, 60, '2022-01-12'),
(1226, 89, 9, '2022-01-10'),
(1227, 89, 35, '2022-01-11'),
(1228, 89, 1, '2022-01-12'),
(1229, 90, 10, '2022-01-10'),
(1230, 90, 36, '2022-01-11'),
(1231, 90, 2, '2022-01-12'),
(1232, 91, 11, '2023-08-05'),
(1233, 91, 37, '2023-08-06'),
(1234, 91, 3, '2023-08-07'),
(1235, 92, 12, '2023-08-05'),
(1236, 92, 38, '2023-08-06'),
(1237, 92, 4, '2023-08-07'),
(1238, 93, 13, '2023-08-05'),
(1239, 93, 39, '2023-08-06'),
(1240, 93, 5, '2023-08-07'),
(1241, 94, 14, '2023-08-05'),
(1242, 94, 40, '2023-08-06'),
(1243, 94, 6, '2023-08-07'),
(1244, 95, 15, '2023-08-05'),
(1245, 95, 41, '2023-08-06'),
(1246, 95, 7, '2023-08-07'),
(1247, 96, 16, '2023-08-05'),
(1248, 96, 42, '2023-08-06'),
(1249, 96, 8, '2023-08-07'),
(1250, 97, 17, '2023-08-05'),
(1251, 97, 43, '2023-08-06'),
(1252, 97, 9, '2023-08-07'),
(1253, 98, 18, '2023-08-05'),
(1254, 98, 44, '2023-08-06'),
(1255, 98, 10, '2023-08-07'),
(1256, 99, 19, '2023-08-05'),
(1257, 99, 45, '2023-08-06'),
(1258, 99, 11, '2023-08-07'),
(1259, 100, 20, '2023-08-05'),
(1260, 100, 46, '2023-08-06'),
(1261, 100, 12, '2023-08-07'),
(1262, 101, 21, '2024-01-10'),
(1263, 101, 47, '2024-01-11'),
(1264, 101, 13, '2024-01-12'),
(1265, 102, 22, '2024-01-10'),
(1266, 102, 48, '2024-01-11'),
(1267, 102, 14, '2024-01-12'),
(1268, 103, 23, '2024-01-10'),
(1269, 103, 49, '2024-01-11'),
(1270, 103, 15, '2024-01-12'),
(1271, 104, 24, '2024-01-10'),
(1272, 104, 50, '2024-01-11'),
(1273, 104, 16, '2024-01-12'),
(1274, 105, 25, '2024-01-10'),
(1275, 105, 51, '2024-01-11'),
(1276, 105, 17, '2024-01-12'),
(1277, 106, 26, '2024-01-10'),
(1278, 106, 52, '2024-01-11'),
(1279, 106, 18, '2024-01-12'),
(1280, 107, 27, '2024-01-10'),
(1281, 107, 53, '2024-01-11'),
(1282, 107, 19, '2024-01-12'),
(1283, 108, 28, '2024-01-10'),
(1284, 108, 54, '2024-01-11'),
(1285, 108, 20, '2024-01-12'),
(1286, 109, 29, '2024-01-10'),
(1287, 109, 55, '2024-01-11'),
(1288, 109, 21, '2024-01-12'),
(1289, 110, 30, '2024-01-10'),
(1290, 110, 56, '2024-01-11'),
(1291, 110, 22, '2024-01-12'),
(1292, 1, 27, '2024-01-10'),
(1293, 2, 28, '2024-01-10'),
(1294, 3, 29, '2024-01-10'),
(1295, 4, 30, '2024-01-10'),
(1296, 5, 31, '2024-01-10'),
(1297, 6, 32, '2024-01-10'),
(1298, 7, 33, '2024-01-10'),
(1299, 8, 34, '2024-01-10'),
(1300, 9, 35, '2024-01-10'),
(1301, 10, 36, '2024-01-10'),
(1302, 11, 37, '2024-01-10'),
(1303, 12, 38, '2024-01-10'),
(1304, 13, 39, '2024-01-10'),
(1305, 14, 40, '2024-01-10'),
(1306, 15, 41, '2024-01-10'),
(1307, 16, 42, '2024-01-10'),
(1308, 17, 43, '2024-01-10'),
(1309, 18, 44, '2024-01-10'),
(1310, 19, 45, '2024-01-10'),
(1311, 20, 46, '2024-01-10'),
(1312, 21, 47, '2024-01-10'),
(1313, 22, 48, '2024-01-10'),
(1314, 23, 49, '2024-01-10'),
(1315, 24, 50, '2024-01-10'),
(1316, 25, 51, '2024-01-10'),
(1317, 26, 52, '2024-01-10'),
(1318, 27, 53, '2024-01-10'),
(1319, 28, 54, '2024-01-10'),
(1320, 29, 55, '2024-01-10'),
(1321, 30, 56, '2024-01-10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`),
  ADD UNIQUE KEY `codigo_materia` (`codigo_materia`);

--
-- Indices de la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD PRIMARY KEY (`id_matricula`),
  ADD KEY `id_estudiante` (`id_estudiante`),
  ADD KEY `id_materia` (`id_materia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `matriculas`
--
ALTER TABLE `matriculas`
  MODIFY `id_matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1322;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD CONSTRAINT `matriculas_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`) ON DELETE CASCADE,
  ADD CONSTRAINT `matriculas_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id_materia`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
