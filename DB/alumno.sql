SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `alumno` (
  `cod_estudiante` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `alumno` (`cod_estudiante`, `dni`, `nombres`, `apellidos`) VALUES
(1, 123, 'Valeria', 'Flores'),
(2, 123, 'Linda Arancha', 'jurado'),
(3, 123, 'Gaby', 'ecuas'),
(4, 123, 'Tati', 'Damaris'),
(5, 123, 'Iris', 'Chaparro');

ALTER TABLE `alumno`
  ADD PRIMARY KEY (`cod_estudiante`);

ALTER TABLE `alumno`
  MODIFY `cod_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

