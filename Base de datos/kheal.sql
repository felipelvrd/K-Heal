-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-11-2014 a las 18:05:11
-- Versión del servidor: 5.5.40
-- Versión de PHP: 5.4.4-14+deb7u14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `kheal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hklcomentarios`
--

CREATE TABLE IF NOT EXISTS `hklcomentarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id del comentario.',
  `Descripcion` text CHARACTER SET latin1 NOT NULL COMMENT 'Descripcion del comentario.',
  `IdTratamientos` int(11) NOT NULL COMMENT 'Id del tratamiento al cual pertenece el comentario.',
  `IdUsuario` int(11) NOT NULL COMMENT 'Id del usuario que realizo el comentario.',
  `Fecha` datetime NOT NULL COMMENT 'Fecha en que se publico el comentario.',
  PRIMARY KEY (`Id`),
  KEY `FK_hklcomentarios_1` (`IdTratamientos`),
  KEY `FK_hklcomentarios_2` (`IdUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla con los comentarios de los tratamientos publicados.' AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `hklcomentarios`
--

INSERT INTO `hklcomentarios` (`Id`, `Descripcion`, `IdTratamientos`, `IdUsuario`, `Fecha`) VALUES
(1, 'qnmb', 2, 25, '0000-00-00 00:00:00'),
(2, 'qnmb', 2, 25, '0000-00-00 00:00:00'),
(3, 'qnmb asf ', 2, 25, '2014-11-15 21:52:29'),
(4, 'asd', 2, 25, '2014-11-15 22:39:25'),
(5, 'Bien', 2, 25, '2014-11-16 01:07:58'),
(6, 'Comentario', 2, 25, '2014-11-16 01:08:13'),
(7, 'Me funcionÃ³ gracias', 2, 25, '2014-11-16 01:09:32'),
(8, 'bien', 2, 25, '2014-11-16 01:11:23'),
(9, 'tÃ­elde', 2, 25, '2014-11-16 01:13:42'),
(10, 'Nuevo comentario', 2, 25, '2014-11-16 01:36:29'),
(11, '+1', 2, 29, '2014-11-16 02:30:59'),
(12, '<ul><li>asdf</li><li>asdf</li></ul><ol><li><b>adsf</b></li></ol>', 2, 29, '2014-11-16 03:03:21'),
(13, '<h3 style="color: black; margin-top: 0.3em; margin-bottom: 0px; overflow: hidden; padding-top: 0.5em; padding-bottom: 0px; border-bottom-style: none; font-size: 1.17em; line-height: 1.6; font-family: sans-serif; background-image: none; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;"><span class="mw-headline" id="P.C3.A1ginas_y_edici.C3.B3n">PÃ¡ginas y ediciÃ³n</span></h3><p style="margin-top: 0.5em; margin-bottom: 0.5em; line-height: 22.3999996185303px; color: rgb(37, 37, 37); font-family: sans-serif;">En un wiki tradicional existen tres representaciones por cada pÃ¡gina:</p><ul style="line-height: 1.5em; list-style-type: disc; margin: 0.3em 0px 0px 1.6em; padding: 0px; list-style-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAANAQMAAABb8jbLAAAABlBMVEX///8AUow5QSOjAAAAAXRSTlMAQObYZgAAABNJREFUCB1jYEABBQw/wLCAgQEAGpIDyT0IVcsAAAAASUVORK5CYII=); color: rgb(37, 37, 37); font-family: sans-serif;"><li style="margin-bottom: 0.1em;">El Â«<a href="http://es.wikipedia.org/wiki/C%C3%B3digo_fuente" title="CÃ³digo fuente" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">cÃ³digo fuente</a>Â»,que pueden editar los usuarios. Es el formato almacenado localmente en el servidor. Normalmente es texto plano, sÃ³lo es visible para el usuario cuando lo muestra la operaciÃ³n Â«EditarÂ».</li><li style="margin-bottom: 0.1em;">Una plantilla (en ocasiones generada internamente) que define la disposiciÃ³n y elementos comunes de todas las pÃ¡ginas.</li><li style="margin-bottom: 0.1em;">El cÃ³digo&nbsp;<a href="http://es.wikipedia.org/wiki/HTML" title="HTML" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">HTML</a>, puesto en tiempo real por el servidor a partir del cÃ³digo fuente cada vez que la pÃ¡gina se solicita.</li></ul><p style="margin-top: 0.5em; margin-bottom: 0.5em; line-height: 22.3999996185303px; color: rgb(37, 37, 37); font-family: sans-serif;">El cÃ³digo fuente es potenciado mediante un&nbsp;<a href="http://es.wikipedia.org/wiki/Lenguaje_de_marcado" title="Lenguaje de marcado" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">lenguaje de marcado</a>&nbsp;simplificado para hacer varias convenciones visuales y estructurales. Por ejemplo, el uso del asterisco Â«*Â» al empezar una lÃ­nea de texto significa que se generarÃ¡ una lista desordenada de elementos (<i>bullet-list</i>). El estilo y la sintaxis pueden variar en funciÃ³n de la implementaciÃ³n, alguno de las cuales tambiÃ©n permite etiquetas HTML.</p>', 2, 29, '2014-11-16 03:05:10'),
(14, '', 2, 1, '2014-11-16 19:11:17'),
(15, '<p style="margin-top: 0.5em; margin-bottom: 0.5em; line-height: 22.3999996185303px; color: rgb(37, 37, 37); font-family: sans-serif;">El&nbsp;<b>cÃ³digo fuente</b>&nbsp;de un&nbsp;<a href="http://es.wikipedia.org/wiki/Programa_inform%C3%A1tico" title="Programa informÃ¡tico" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">programa informÃ¡tico</a>&nbsp;(o&nbsp;<a href="http://es.wikipedia.org/wiki/Software" title="Software" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">software</a>) es un conjunto de&nbsp;<a href="http://es.wikipedia.org/wiki/L%C3%ADnea_de_c%C3%B3digo_fuente" title="LÃ­nea de cÃ³digo fuente" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">lÃ­neas de texto</a>&nbsp;que son las instrucciones que debe seguir la&nbsp;<a href="http://es.wikipedia.org/wiki/Computadora" title="Computadora" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">computadora</a>&nbsp;para ejecutar dicho programa. Por tanto, en el cÃ³digo fuente de un programa estÃ¡ escrito por completo su funcionamiento.</p><p style="margin-top: 0.5em; margin-bottom: 0.5em; line-height: 22.3999996185303px; color: rgb(37, 37, 37); font-family: sans-serif;">El cÃ³digo fuente de un programa que estÃ¡ escrito por un&nbsp;<a href="http://es.wikipedia.org/wiki/Programador" title="Programador" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">programador</a>&nbsp;en algÃºn&nbsp;<a href="http://es.wikipedia.org/wiki/Lenguaje_de_programaci%C3%B3n" title="Lenguaje de programaciÃ³n" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">lenguaje de programaciÃ³n</a>, pero en este primer estado no es directamente ejecutable por la computadora, sino que debe ser traducido a otro lenguaje o cÃ³digo binario asÃ­ serÃ¡ mÃ¡s fÃ¡cil para la mÃ¡quina interpretarlo (el&nbsp;<a href="http://es.wikipedia.org/wiki/Lenguaje_m%C3%A1quina" title="Lenguaje mÃ¡quina" class="mw-redirect" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">lenguaje mÃ¡quina</a>&nbsp;o&nbsp;<a href="http://es.wikipedia.org/wiki/C%C3%B3digo_objeto" title="CÃ³digo objeto" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">cÃ³digo objeto</a>) que sÃ­ pueda ser ejecutado por el&nbsp;<a href="http://es.wikipedia.org/wiki/Hardware" title="Hardware" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">hardware</a>&nbsp;de la computadora. Para esta traducciÃ³n se usan los llamados&nbsp;<a href="http://es.wikipedia.org/wiki/Compilador" title="Compilador" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">compiladores</a>,&nbsp;<a href="http://es.wikipedia.org/wiki/Ensamblador" title="Ensamblador" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">ensambladores</a>,&nbsp;<a href="http://es.wikipedia.org/wiki/Int%C3%A9rprete_(inform%C3%A1tica)" title="IntÃ©rprete (informÃ¡tica)" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">intÃ©rpretes</a>&nbsp;y otros sistemas de traducciÃ³n.</p><p style="margin-top: 0.5em; margin-bottom: 0.5em; line-height: 22.3999996185303px; color: rgb(37, 37, 37); font-family: sans-serif;">El tÃ©rmino cÃ³digo fuente tambiÃ©n se usa para hacer referencia al cÃ³digo fuente de otros elementos del software, como por ejemplo el cÃ³digo fuente de una&nbsp;<a href="http://es.wikipedia.org/wiki/P%C3%A1gina_web" title="PÃ¡gina web" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">pÃ¡gina web</a>&nbsp;que estÃ¡ escrito en el&nbsp;<a href="http://es.wikipedia.org/wiki/Lenguaje_de_marcado" title="Lenguaje de marcado" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">lenguaje de marcado</a>&nbsp;<a href="http://es.wikipedia.org/wiki/HTML" title="HTML" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">HTML</a>&nbsp;o en&nbsp;<a href="http://es.wikipedia.org/wiki/Javascript" title="Javascript" class="mw-redirect" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">Javascript</a>&nbsp;u otros lenguajes de programaciÃ³n web y que es posteriormente ejecutado por el&nbsp;<a href="http://es.wikipedia.org/wiki/Navegador_web" title="Navegador web" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">navegador web</a>&nbsp;para visualizar dicha pÃ¡gina cuando es visitada.</p><p style="margin-top: 0.5em; margin-bottom: 0.5em; line-height: 22.3999996185303px; color: rgb(37, 37, 37); font-family: sans-serif;">El Ã¡rea de la&nbsp;<a href="http://es.wikipedia.org/wiki/Inform%C3%A1tica" title="InformÃ¡tica" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">informÃ¡tica</a>&nbsp;que se dedica a la creaciÃ³n de programas y, por tanto a la creaciÃ³n de su cÃ³digo fuente, es la&nbsp;<a href="http://es.wikipedia.org/wiki/Programaci%C3%B3n" title="ProgramaciÃ³n" style="text-decoration: none; color: rgb(11, 0, 128); background: none;">programaciÃ³n</a>.</p>', 2, 1, '2014-11-16 19:12:20'),
(16, 'db', 2, 1, '2014-11-16 22:18:42'),
(17, 'notificaciÃ³n', 2, 25, '2014-11-16 22:41:43'),
(18, '<ul><li>Primero&nbsp;</li><li>Segundo&nbsp;</li><li>Tercero</li></ul>', 2, 1, '2014-11-16 23:41:19'),
(19, 'bien', 2, 25, '2014-11-17 17:15:23'),
(20, 'Si pero no es dejar pasar nada mas, sino permanecer en cama y reposar, beber mucho líquido (zumos y caldos) ', 12, 28, '2014-11-17 00:00:00'),
(21, 'Es cierto, tambien en pacientes con diabetes tipo II no es necesaro la medicacion si se controlase el exceso de peso y se llevase a cabo un programa de ejercicio fisico regularmente. ', 13, 27, '2014-11-17 11:31:33'),
(22, ' Pero para eso es necesario con frecuencia una terapia sustitutiva con insulina o la toma de farmacos hipoglucemiantes por via oral.', 13, 29, '2014-11-17 11:35:12'),
(23, 'Que son Farmacos hipoglucemiantes orales.', 13, 35, '2014-11-17 11:49:37'),
(24, 'Se prescriben a personas con diabetes tipo II que no consiguen descender la concentracion de azucar en sangre a traves de la dieta y la actividad fisica, pero no son eficaces en personas con diabetes tipo I.', 13, 29, '2014-11-17 11:51:53'),
(26, 'Eso es cierto muy bueno me funciono.', 9, 29, '2014-11-17 09:07:06'),
(28, 'Tienes razon, pero ayuda mucho cuando la persona toma los antidepresivos inhibidores de la serotonina son eficaces para reducir la frecuencia de los episodios en los que el paciente come desenfrenadamente durante cortos periodos de tiempo, y los vómitos autoinducidos, influyendo en la mejoría de la ansiedad, la depresión', 16, 26, '2014-11-18 00:00:00'),
(29, 'Talvez funcione para los que tienen un nivel bajo de acne, pero si no es asi lo veo poco eficaz.', 17, 28, '2014-11-18 00:00:00'),
(30, ' Los jabones antibacterianos no resultan particularmente beneficiosos y si bien los jabones abrasivos pueden secar mejor las lesiones pueden también irritar la piel. ', 17, 25, '2014-11-18 00:00:00');

--
-- Disparadores `hklcomentarios`
--
DROP TRIGGER IF EXISTS `comentarTratamiento`;
DELIMITER //
CREATE TRIGGER `comentarTratamiento` AFTER INSERT ON `hklcomentarios`
 FOR EACH ROW BEGIN
SELECT t.IdUsuario into @idUsu
FROM khltratamientos t
WHERE t.Id = NEW.IdTratamientos;

SELECT u.Nombre into @usuNom
FROM khlusuarios u
WHERE u.Id = NEW.IdUsuario;

INSERT INTO khlnotificaciones (Fecha, Estado, Descripcion, IdUsuario ) values (NOW(),'P', concat('El usuario ',@usuNom,' comentó en un tratamiento que publicaste.'), @idUsu);
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `khlenfermedades`
--

CREATE TABLE IF NOT EXISTS `khlenfermedades` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id de la enfermedad.',
  `Nombre` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT 'Nombre de la enfermedad.',
  `TipoEnfermedad` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT 'Tipo de la enfermedad.',
  `Descripcion` text CHARACTER SET latin1 COMMENT 'Descripcion de la enfermedad.',
  `Diagnostico` text CHARACTER SET latin1 COMMENT 'Diagnostico de la enfermedad.',
  `Prevencion` text CHARACTER SET latin1 COMMENT 'Formas de prevenir la enfermedad.',
  `Enfermedades_Relacionadas` varchar(50) CHARACTER SET latin1 DEFAULT NULL COMMENT 'Enfermedades_Relacionadas con esta enfermedad',
  `Referencias` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Refencias de donde sale la información de esta enfermedad',
  `Estado` varchar(1) CHARACTER SET latin1 NOT NULL COMMENT 'Estado de la enfermedad ''A''= Activa, ''I''=Inactiva.',
  `Sintomas` text CHARACTER SET latin1 COMMENT 'Sintomas que presenta la enfermedad.',
  `Etiquetas` varchar(1000) CHARACTER SET latin1 NOT NULL COMMENT 'Etiquetas necesarias para el buscador.',
  `Imagen` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Imagen de referencia de la enfermedad',
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Index_1` (`Nombre`) USING BTREE,
  KEY `Etiquetas` (`Etiquetas`(767))
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT COMMENT='Tabla con la lista de enfermedades.' AUTO_INCREMENT=70 ;

--
-- Volcado de datos para la tabla `khlenfermedades`
--

INSERT INTO `khlenfermedades` (`Id`, `Nombre`, `TipoEnfermedad`, `Descripcion`, `Diagnostico`, `Prevencion`, `Enfermedades_Relacionadas`, `Referencias`, `Estado`, `Sintomas`, `Etiquetas`, `Imagen`) VALUES
(1, 'Gripe', 'Viral', '<p style="margin: 0 0 0 40px; border: none; padding: 0px;"><i style="margin: 0 0 0 40px; border: none; padding: 0px;">La gripe es una infeccion virica que afecta el sistema respiratorio y se contagia facilmente. Generalmente ocurre una epidemia estacional invernal cada doce meses.</i></p>', 'Se basa en los sintomas y la exploracion fisica. En este caso, el medico debera determinar en primer lugar si se trata de un resfriado comun (infeccion gripal). La gripe se manifiesta de repente, con mas sintomas ocurriendo de forma simultanea y mas intensa que en un resfriado. ', 'Extremar la higiene.Desterrar el habito de tocarse la boca, la nariz o los ojos.Ventilar el hogar.Taparse la boca al estornudar o toser.Vacunarse.', 'Gripe seca', '<ul><li>Articulo 1<br></li><li>Articulo 2<br></li>', 'A', 'tos, fiebre, dolor de cabeza, dolor de garganta y mucosidades nasales', 'gripe, tos, aviar, mocos,frio', '0'),
(4, 'acne', 'Dermatologica', 'El acne es una enfermedad que se caracteriza por la aparicion de lesiones en la piel como consecuencia de una foliculitis, una inflamacion y posterior infeccion del poro folicular (orificio de salida del pelo). Este trastorno puede llegar a tener implicaciones psicologicas y sociales, especialmente entre las personas que trabajan de cara al publico que, en ocasiones, tienen problemas en su entorno laboral porque no alcanzan el grado de presencia fisica exigido. Esto hace que aumente el grado de tension emocional y, en consecuencia, empeore el acne.', 'El diagnostico se realiza clinicamente por la presencia de una o varias lesiones elementales. En algunas pacientes en las que el acne se asocia a otras alteraciones como trastornos menstruales, caida de cabello, seborrea o aumento de vello, es necesario realizar una analitica hormonal complementaria que permitira descartar la presencia de alteraciones hormonales y orientar mejor el tratamiento.', 'Limpiar la cara dos veces al dia.\r\nEvitar frotar la zona al secar.\r\nNo asustarse si aparece una ligera irritacion.\r\nAunque los alimentos no son la causa del acne, no se debe abusar de: cerdo, grasas, bolleria, mariscos y alcohol. Alimentos con chocolate o derivados del alcohol. Frutos secos. Quesos fuertes.\r\nEvitar el uso de cosmeticos que contengan aceites o grasas en su composicion.\r\nNo tocar los granos ya que suele ser una de las causas frecuentes de complicaciones.', NULL, '0', 'A', 'El acne se manifiesta clinicamente con varios tipos de lesiones, pudiendo presentarse varias de ellas en un mismo paciente. Estas lesiones pueden ser inflamatorias y no inflamatorias. Dentro de las no inflamatorias se incluyen los comedones cerrados y abiertos "puntos negros" y entre las inflamatorias estan las papulas rojizas, pustulas, nodulos y quistes. Estas dos ultimas son las mas importantes, pues en su evolución pueden dejar cicatrices residuales, que son la secuela mas importante del acne.', 'Acne', '0'),
(5, 'Anemia', NULL, 'La anemia es una enfermedad en la que la sangre tiene menos globulos rojos de lo normal. Se presenta anemia cuando los globulos rojos no contienen suficiente hemoglobina. La hemoglobina es una proteina rica en hierro que le da a la sangre el color rojo. Esta proteina les permite a los globulos rojos transportar el oxigeno de los pulmones al resto del cuerpo.', 'La realizacion de la historia clinica y la exploracion fisica, constituyen siempre el primer paso en el estudio de una anemia. Descartada una hemorragia o enfermedad subyacente que justifique la anemia, su estudio debe iniciarse con la consideracion del sexo, la edad y el origen etnico del paciente, asi como su forma de presentacion (aguda o cronica, tiempo de evolución y existencia de antecedentes). ', 'Consuma productos enriquecidos con hierro o vitaminas. Mantenga un horario de alimentación.', NULL, '0', 'A', 'Palidez.\r\nFatiga muscular.\r\nTrastornos neurologicos.\r\nAlteraciones del ritmo menstrual.\r\nTrastornos digestivos.\r\nAlteraciones renales.', 'Anemia, hemoglobina', '0'),
(6, 'Dengue', 'Viral', 'El dengue es una patologia infecciosa de causa viral considerada una enfermedad tropical. Se transmite por la picadura de la hembra de un mosquito hematofago (que se alimenta de sangre), conocido popularmente como zancudo patas blancas, y cuyo nombre cientifico es Aedes aegypti. Este mosquito vive principalmente en habitats urbanos y cumple parte de su ciclo vital en reservorios de agua artificiales como floreros, estanques, neumaticos abandonados, etcetera. Pica al hombre durante el dia.', 'Lo mas importante para poder hacer un diagnostico de dengue es la clinica del paciente, interrogarle sobre viajes a zonas endemicas y exposicion a picaduras de insectos. Tambien es fundamental descartar otras enfermedades tropicales, principalmente la malaria o paludismo.', 'Utilizar ropa que le proteja como pantalones largos y camisas de manga larga. Hay que evitar el uso de perfumes y de ropas de colores oscuros o chillones.\r\nSe recomienda utilizar insecticidas repelentes en piel.\r\nEmplear repelente en spray que contenga permetrina para la ropa, ya que los mosquitos pueden picar incluso a traves de esta.\r\nImprescindible el uso del mosquiteros, o pequennos toldillos, especialmente en las camas, sitios donde haya pacientes infectados y zonas donde duerman ninnos.', NULL, '0', 'A', 'Inician despues de un periodo de incubacion que puede variar de cinco a ocho dias tras la picadura del mosquito. Habitualmente cursa con fiebre alta que se inicia de forma repentina y se acompanna de dolor de cabeza intenso, dolor alrededor de los ojos y detras de los globos oculares, cansancio y dolor en musculos y articulaciones.\r\nAl tercer dia de la fiebre, muchas veces aparece un exantema por el cuerpo, es decir, una erupcion generalizada de color rojizo, que dura unos dos o tres dias. Tambien puede haber nauseas, vomitos, perdida del apetito o dolor de garganta. La fiebre usualmente dura hasta una semana y suele ser intermitente. Una fiebre que dura mas de 10 dias no suele ser por dengue.', 'Dengue', '0'),
(7, 'bulimia', '', 'Las personas que padecen bulimia son incapaces de dominar los impulsos que les llevan a comer, pero el sentimiento de culpa y vergüenza tras ingerir muchos alimentos les lleva a una purga (vómitos autoinducidos o empleo de laxantes o diuréticos o ambos), regímenes rigurosos o ejercicio excesivo para contrarrestar los efectos de las abundantes comidas.\r\nLos bulímicos tienen cerca de 15 episodios de atracones y vómitos por semana y, en general, su peso es normal, por lo que resulta difícil detectar la enfermedad. En un solo atracón pueden llegar a consumir de 10.000 a 40.000 calorías.', 'Para un diagnóstico adecuado es necesaria una entrevista psiquiátrica que desvele la percepción que el enfermo tiene del propio cuerpo y la relación que mantiene con la comida. Asimismo, es necesaria una exploración física completa para detectar los trastornos fruto de su comportamiento alimenticio.', 'Enseñar y educar desde la infancia, en la familia y en los centros escolares, a llevar una vida saludable inculcándoles hábitos de alimentación sana y de actividad física adecuadas a sus facultades.\r\nAyudarles con comprensión y confianza a conocer su propia realidad biológica y psíquica, sus capacidades y limitaciones infundiéndoles seguridad en sus propios valores, de forma que puedan sentirse a gusto consigo misma y se acepten como realmente son.\r\nFomentar la autonomía y criterios capaces de evitar que los excesivos mensajes de los medios de comunicación y la publicidad sobre una imagen corporal falsamente perfecta, se convierta en una meta a conseguir y en un modelo que se olvida de los valores integrales de la persona.\r\nEs muy conveniente realizar las comidas en familia, a ser posible nunca en solitario, aprovechándolas para una verdadera comunicación y contacto.\r\nEvitar proponerles metas académicas, deportivas, o estéticas inalcanzables con arreglo a su capacidad mental o constitución física, ya que ello les podría producir una disminución de su autoestima.\r\nSi precisan perder peso por razones de salud, hacerlo siempre con un estricto control médico', 'Psiquiátrica', '0', 'A', 'Los ciclos de atracones y vómitos se manifiestan un mínimo de dos veces por semana. \r\nLa autoestima del enfermo es baja y la identifica con su cuerpo.\r\nLos bulímicos se ven gordos, incluso cuando su peso es normal; se avergüenzan de su cuerpo y lo rechazan, por lo que intentan hacer dieta en todo momento. A pesar de todo, la ingestión compulsiva a escondidas o durante la noche es una de las principales características de esta patología. Pueden llegar a gastar una gran cantidad de dinero en comida o recurrir a la que ya hay en casa, que comienza a desaparecer misteriosamente de la despensa. No sienten ningún placer al comer ni preferencias en cuanto al tipo de alimentos, sólo buscan saciarse. Intentan evitar los lugares en los que hay comida y procuran comer solos. Su comportamiento suele ser asocial, tienden a aislarse, y la comida es su único tema de conversación. Además, la falta de control sobre los alimentos les produce grandes sentimientos de culpa y vergüenza.', 'bulimia', '0'),
(8, 'Depresion', '', ' Cuando el estado de animo de un individuo en un determinado momento de su vida sufre sentimientos severos y prolongados de tristeza o sintomas relacionados que afectan a su capacidad para relacionarse con otros, trabajar o afrontar el dia, la tristeza se convierte en una enfermedad.', 'Se debe incluir una historia medica completa, donde se vea cuando empezaron los sintomas, su duracion y tambien hay que hacer preguntas sobre el uso de drogas, alcohol o si el paciente ha pensado en el suicidio o la muerte. Una evaluacion diagnostica debe incluir un examen del estado mental para determinar si los patrones de habla, pensamiento o memoria se han afectado. Para diagnosticar un trastorno depresivo, se deben de dar en el periodo de dos semanas alguno de los sintomas antes tratados. Uno de ellos debe ser el cambio en el estado de animo, perdida de interes o de la capacidad para el placer.', 'Tener pensamientos positivos\r\nCuidar la salud fisica\r\nMantener un calendario diario uniforme.\r\nReanudar las responsabilidades forma lenta y gradual.\r\nAceptarse a uno mismo. No compararse con otras personas que considera favorecidas.\r\nExpresar las emociones\r\nSeguir en todo momento y hasta el final el tratamiento impuesto\r\nReunirse periodicamente con el terapeuta\r\nComer una dieta equilibrada\r\nHacer ejercicio fisico', 'Psiquiatrica', '0', 'A', 'Disminucion acusada del interes o de la capacidad para el placer en todas o casi todas las actividades. \r\nPerdida importante de peso sin hacer regimen o aumento de peso.\r\nInsomnio o hipersomnia. \r\nAgitación o enlentecimiento psicomotores. \r\nFatiga o perdida de energia casi cada dia. \r\nSentimientos de inutilidad o de culpa excesivos o inapropiados. \r\nDisminucion de la capacidad para pensar o concentrarse, o indecision. \r\nPensamientos recurrentes de muerte, ideacion suicida recurrente sin un plan especifico o una tentativa de suicidio o un plan especifico para suicidarse.', 'Depresion', '0'),
(9, 'Diabetes ', NULL, 'La diabetes es una enfermedad crónica que aparece debido a que el páncreas no fabrica la cantidad de insulina que el cuerpo humano necesita, o bien la fabrica de una calidad inferior. La insulina, una hormona producida por el páncreas, es la principal sustancia responsable del mantenimiento de los valores adecuados de azúcar en sangre', 'Se establece el diagnostico de diabetes cuando una persona tiene valores anormalmente elevados de azucar en la sangre. A menudo se controlan los valores de azucar en la sangre durante un examen anual de rutina o durante una exploracion clinica que se realiza antes de la incorporacion a un nuevo empleo o de la practica de un deporte.', 'Evitando el sobrepeso y la obesidad.\r\nRealice ejercicio fisico de forma regular.\r\nAbandone el tabaco y las bebidas alcohólicas.\r\nSiga una dieta alimentaria sana. \r\nMantener un horario de comidas regular en la medida de lo posible.\r\nTomar cantidades moderadas de hidratos de carbono antes de realizar ejercicios extraordinarios.', NULL, '', 'A', 'Frecuencia en orinar (fenomeno de la cama mojada en los niños).\r\nHambre inusual.\r\nSed excesiva.\r\nDebilidad y cansancio.\r\nPerdida de peso.\r\nIrritabilidad y cambios de animo.\r\nSensacion de malestar en el estomago y vomitos.\r\nInfecciones frecuentes.\r\nVista nublada.\r\nCortaduras y rasguños que no se curan, o que se curan muy lentamente.\r\nPicazon o entumecimiento en las manos o los pies.\r\nInfecciones recurrentes en la piel, la encia o la vejiga.\r\nAdemas se encuentran elevados niveles de azucar en la sangre y en la orina', 'Azúcar en la sangre,  Glucosa en la sangre ', NULL),
(10, 'Gastritis', NULL, 'es una inflamación de la mucosa gástrica, que es la capa de células que reviste el estómago por dentro protegiéndolo de la acidez de los jugos gástricos. ', 'Para ello es necesario realizar una gastroscopia y obtener una muestra de la mucosa gastrica mediante biopsia para que pueda ser analizada. Por tanto, el diagnostico de la gastritis no es unicamente clinico (no se basa solo en los sintomas) sino que es necesaria la realizacion de pruebas invasivas (gastroscopia y biopsia) para confirmar su existencia.', '1. Evita consumir alimentos con mucha grasa.\r\n2. Controla y vigila tu ingesta de medicamentos.\r\n3. No fumes, ni bebas, ya que el alcohol está directamente asociado a la gastritis.\r\n4. Consume verduras verdes y amarillas, debido a que éstas son ricas en antioxidantes y betacoroteno.\r\n5. Consume entre 25 y 30 gramos de fibra todo los días.\r\n6. Realiza cinco comida, ya que la ausencia de alimento por mucho tiempo, te genera mayores ácidos en tu estómago y en consecuencia el desarrollo de la gastritis.\r\n7. Ingiere poca sal.\r\n8. Elige bebidas fermentadas, yogur o que contengan algún tipo de probióticos', NULL, '', 'A', 'Los mas frecuentes son malestar o dolor de estomago, nauseas, vomitos, eructos, ardor, o presencia de sangre en el vomito o en las heces.', 'dispepsia ', NULL),
(28, 'Ebola', 'dsada', 'antes conocido como fiebre hemorragica del Ebola, es una enfermedad virica aguda grave, transmitida al ser humano por animales salvajes, que se propaga en las poblaciones humanas por transmision de persona a persona,se asocia principalmente al contacto directo o indirecto con sangre o secreciones corporales', 'Antes de esto se debe  hay que descartar la fiebre tifoidea, la malaria, la shigelosis, la septicemia, el colera, las neumonias, la leptospirosis, la peste, las rickettsiosis, la fiebre recurrente, las meningitis, las hepatitis y otras fiebres hemorragicas viricas.', 'En algunos casos, con el fin de reducir el riesgo de transmision al ser humano, puede ser necesario sacrificar a los animales infectados, supervisando la inhumacion o incineración de los cadaveres.', '-1', '0', 'A', 'son la aparicion subita de fiebre, debilidad intensa y dolores musculares, de cabeza y de garganta, seguido de vomitos, diarrea, erupciones cutaneas, pudiendo causar disfuncion renal y hepatica.  ', 'EVE', '0'),
(67, 'test232312312', 'dasdas', 'dasdas', 'dsadas', 'sdasad', 'dsasad', 'dsadsa', 'A', 'dsaas', 'dasda', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `khlevaluacionescomentarios`
--

CREATE TABLE IF NOT EXISTS `khlevaluacionescomentarios` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id de la evaluacion.',
  `IdUsuario` int(11) NOT NULL COMMENT 'Id del usuario que evaluo.',
  `IdComentario` int(11) NOT NULL COMMENT 'Id del comentario que se esta evaluando.',
  `TipoEvaluacion` varchar(1) NOT NULL COMMENT 'Tipo de evaluacion ''P''=Positiva, ''N''=Negativa.',
  PRIMARY KEY (`Id`) USING BTREE,
  UNIQUE KEY `Index_4` (`IdUsuario`,`IdComentario`),
  KEY `FK_khlevaluacionescomentarios_2` (`IdComentario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Tabla con las evaluaciones a los comentarios de los tratamientos.' AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `khlevaluacionescomentarios`
--

INSERT INTO `khlevaluacionescomentarios` (`Id`, `IdUsuario`, `IdComentario`, `TipoEvaluacion`) VALUES
(1, 25, 1, 'P'),
(2, 25, 3, 'P'),
(3, 25, 2, 'P'),
(4, 25, 4, 'P'),
(5, 1, 13, 'P'),
(6, 1, 15, 'P'),
(7, 1, 5, 'P'),
(8, 1, 1, 'P'),
(9, 1, 4, 'P'),
(10, 1, 6, 'P'),
(11, 1, 12, 'P'),
(19, 29, 1, 'P'),
(24, 29, 2, 'P'),
(25, 29, 4, 'P'),
(27, 29, 7, 'P'),
(28, 29, 14, 'P'),
(29, 1, 14, 'P'),
(30, 1, 16, 'N'),
(31, 25, 16, 'P'),
(32, 25, 18, 'P');

--
-- Disparadores `khlevaluacionescomentarios`
--
DROP TRIGGER IF EXISTS `VotarComentario`;
DELIMITER //
CREATE TRIGGER `VotarComentario` AFTER INSERT ON `khlevaluacionescomentarios`
 FOR EACH ROW BEGIN
SELECT c.IdUsuario into @idUsu
FROM hklcomentarios c
WHERE c.Id = NEW.IdComentario;

SELECT u.Nombre into @usuNom
FROM khlusuarios u
WHERE u.Id = NEW.IdUsuario;

INSERT INTO khlnotificaciones (Fecha, Estado, Descripcion, IdUsuario ) values (NOW(),'P', concat('El usuario ',@usuNom,' votó en un comentario que realizaste.'), @idUsu);
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `khlevaluacionestratamientos`
--

CREATE TABLE IF NOT EXISTS `khlevaluacionestratamientos` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id de la evaluacion.',
  `idUsuario` int(11) NOT NULL COMMENT 'Id del usuario que evalua.',
  `idTratamiento` int(11) NOT NULL COMMENT 'Id del tratamiento evaluado.',
  `TipoEvaluacion` varchar(1) NOT NULL COMMENT 'Tipo de evaluacion ''P'' = Positiva, ''N'' = Negativa.',
  PRIMARY KEY (`Id`) USING BTREE,
  UNIQUE KEY `Index_4` (`idTratamiento`,`idUsuario`),
  KEY `FK_khlevaluacionestratamientos_2` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Tabla con las evaluaciones a los tratamientos publicados.' AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `khlevaluacionestratamientos`
--

INSERT INTO `khlevaluacionestratamientos` (`Id`, `idUsuario`, `idTratamiento`, `TipoEvaluacion`) VALUES
(9, 27, 2, 'P'),
(13, 29, 2, 'P'),
(14, 29, 10, 'P'),
(15, 25, 10, 'P'),
(18, 25, 2, 'P'),
(19, 25, 11, 'P'),
(20, 1, 10, 'P'),
(21, 1, 11, 'P'),
(22, 1, 19, 'P');

--
-- Disparadores `khlevaluacionestratamientos`
--
DROP TRIGGER IF EXISTS `votarTratamiento`;
DELIMITER //
CREATE TRIGGER `votarTratamiento` AFTER INSERT ON `khlevaluacionestratamientos`
 FOR EACH ROW BEGIN
SELECT t.IdUsuario into @idUsu
FROM khltratamientos t
WHERE t.Id = NEW.idTratamiento;

SELECT u.Nombre into @usuNom
FROM khlusuarios u
WHERE u.Id = NEW.IdUsuario;

INSERT INTO khlnotificaciones (Fecha, Estado, Descripcion, IdUsuario ) values (NOW(),'P', concat('El usuario ',@usuNom,' votó en un tratamiento que publicaste.'), @idUsu);
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `khlnotificaciones`
--

CREATE TABLE IF NOT EXISTS `khlnotificaciones` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id de la notificacion.',
  `Fecha` datetime NOT NULL COMMENT 'Fecha de la notificacion.',
  `Estado` varchar(1) NOT NULL COMMENT 'Estado de la notificacion ''P'' = pendiente, ''L''=Leida.',
  `Descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci COMMENT 'Descripcion de la notificacion.',
  `IdUsuario` int(11) NOT NULL COMMENT 'Id del usuario que pertenece la notificacion.',
  PRIMARY KEY (`Id`),
  KEY `FK_khlnotificaciones_1` (`IdUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Tabla con las notificaciones a los usuarios.' AUTO_INCREMENT=29 ;

--
-- Volcado de datos para la tabla `khlnotificaciones`
--

INSERT INTO `khlnotificaciones` (`Id`, `Fecha`, `Estado`, `Descripcion`, `IdUsuario`) VALUES
(8, '2014-11-16 16:16:54', 'L', 'El usuario Administrador votó en un comentario que realizaste.', 1),
(9, '2014-11-16 16:18:16', 'L', 'El usuario Administrador votó en un comentario que realizaste.', 1),
(10, '2014-11-16 16:37:59', 'P', 'El usuario q votó en un tratamiento que publicaste.', 24),
(11, '2014-11-16 16:41:13', 'P', 'El usuario q comentó en un tratamiento que publicaste.', 24),
(12, '2014-11-16 17:05:24', 'L', 'El usuario q votó en un comentario que realizaste.', 1),
(13, '2014-11-16 17:40:49', 'P', 'El usuario Administrador comentó en un tratamiento que publicaste.', 24),
(14, '2014-11-16 21:21:10', 'L', 'El usuario q votó en un comentario que realizaste.', 1),
(15, '2014-11-17 08:30:42', 'L', 'El usuario q votó en un tratamiento que publicaste.', 25),
(16, '2014-11-17 11:14:53', 'P', 'El usuario q comentó en un tratamiento que publicaste.', 24),
(17, '2014-11-18 09:27:35', 'P', 'El usuario Administrador votó en un tratamiento que publicaste.', 26),
(18, '2014-11-18 09:29:07', 'P', 'El usuario Administrador votó en un tratamiento que publicaste.', 25),
(19, '2014-11-18 12:12:28', 'P', 'El usuario crisman comentó en un tratamiento que publicaste.', 27),
(20, '2014-11-18 12:41:13', 'P', 'El usuario felipelvrd comentó en un tratamiento que publicaste.', 24),
(21, '2014-11-18 12:45:59', 'P', 'El usuario felipelvrd comentó en un tratamiento que publicaste.', 24),
(22, '2014-11-18 12:49:44', 'P', 'El usuario qw comentó en un tratamiento que publicaste.', 24),
(23, '2014-11-18 12:52:33', 'P', 'El usuario felipelvrd comentó en un tratamiento que publicaste.', 24),
(24, '2014-11-18 13:02:13', 'L', 'El usuario felipelvrd comentó en un tratamiento que publicaste.', 29),
(25, '2014-11-18 15:52:57', 'P', 'El usuario Colocho comentó en un tratamiento que publicaste.', 25),
(26, '2014-11-18 16:03:51', 'P', 'El usuario crisman comentó en un tratamiento que publicaste.', 26),
(27, '2014-11-18 16:06:31', 'P', 'El usuario harol comentó en un tratamiento que publicaste.', 26),
(28, '2014-11-18 17:49:26', 'P', 'El usuario Administrador votó en un tratamiento que publicaste.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `khlsugerencias`
--

CREATE TABLE IF NOT EXISTS `khlsugerencias` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id de la sugerencia.',
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre de la enfermedad que se sugiere.',
  `Descripcion` text CHARACTER SET latin1 COMMENT 'Descripcion de la enfermedad que se sugiere.',
  `Fecha` datetime NOT NULL COMMENT 'Fecha en que se realizo la sugerencia.',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla con las sugerencias a nuevas enfermedades.' AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `khlsugerencias`
--

INSERT INTO `khlsugerencias` (`Id`, `Nombre`, `Descripcion`, `Fecha`) VALUES
(1, 'leucemia', ' afecta a las células sanguíneas, generalmente a los glóbulos blancos. La enfermedad se produce a consecuencia de un error en el proceso de maduración de una célula madre a glóbulo blanco, que supone una alteración cromosómica que provoca que las células afectadas se vuelvan cancerosas y se multipliquen sin cesar, infiltrándose en la médula ósea, donde sustituyen a las células que producen las células sanguíneas normales', '2014-11-03 00:00:00'),
(2, 'ñaña', 'tìldé', '0000-00-00 00:00:00'),
(3, 'ñaña', 'tìldé', '0000-00-00 00:00:00'),
(4, 'letra Ã±', 'tÃ­lde', '0000-00-00 00:00:00'),
(5, 'letra Ã±', 'tÃ­lde', '0000-00-00 00:00:00'),
(6, 'letra Ã±', 'tÃ­lde', '0000-00-00 00:00:00'),
(7, 'letra Ã±', 'tÃ­lde', '0000-00-00 00:00:00'),
(8, 'letra Ã±', 'tÃ­lde', '0000-00-00 00:00:00'),
(9, 'letra Ã±', 'tÃ­lde', '0000-00-00 00:00:00'),
(10, 'letra Ã±', 'tÃ­lde', '0000-00-00 00:00:00'),
(11, 'letra Ã±', 'tÃ­lde', '0000-00-00 00:00:00'),
(12, 'letra ñ', 'tílde', '0000-00-00 00:00:00'),
(13, 'Asma', 'es la respuesta a determinados estimulos que producen alergia: polen, acaros del polvo, particulas de la piel de gato y del perro, humo, aire frio, ciertos alimentos o aditivos alimenticios. Se caracteriza por la aparición de episodios de dificultad respiratoria (crisis o ataques), generalmente asociados a otros sintomas como tos, pitidos al respirar y sensación de ahogo', '2014-11-17 00:00:00'),
(14, 'Artrosis', 'La artrosis es una enfermedad degenerativa de las articulaciones y produce el desgaste del cartilago. Esta patologia puede a producir incapacidad funcional, aunque es dificil que provoque un grado de invalidez que impida desempeñar las actividades cotidianas necesarias.', '2014-11-17 00:00:00'),
(15, 'Varices', 'Las varices o venas varicosas son venas hinchadas a causa de una acumulacion anormal de sangre producida por una debilidad, a menudo heredada, en las paredes de las venas superficiales.', '2014-11-17 00:00:00'),
(16, 'La torticolis', 'Es una contraccion muscular prolongada en la region del cuello que origina dolor e incapacidad de movimiento. Esta distonia provoca que, mientras que la cabeza apunta hacia un hombro, el menton quede señalando hacia el hombro opuesto.', '2014-11-17 00:00:00'),
(17, 'La diarrea', 'Es un proceso infeccioso, de caracter leve en la mayor parte de los casos.', '2014-11-17 00:00:00'),
(18, 'juanetes', 'Los juanetes (hallux valgus) son una deformidad del dedo gordo o primer dedo que produce una prominencia lateral del hueso.', '2014-11-17 00:00:00'),
(19, 'Herpes', 'Se trata de una infeccion causada por el virus herpes, el cual tiene la capacidad de quedarse de forma latente en el organismo durante años. Tras una primera infeccion, el virus permanece de forma inactiva en el cuerpo humano, y vuelve a multiplicarse y a causar enfermedad en determinadas situaciones. Afecta a mas de un tercio de la población.', '2014-11-18 00:00:00'),
(20, 'Cataratas', 'Una catarata es una nubosidad (opacidad) en el cristalino del ojo que dificulta la vision. Las cataratas son un problema que toda la poblacion va a padecer en algun momento.', '2014-11-18 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `khltratamientos`
--

CREATE TABLE IF NOT EXISTS `khltratamientos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id del tratamiento.',
  `IdUsuario` int(11) NOT NULL COMMENT 'Id del usuario que publico el tratamiento.',
  `IdEnfermedad` int(11) NOT NULL COMMENT 'Id de la enfermedad que pertenece el tratamiento.',
  `Nombre` varchar(25) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL COMMENT 'Descripcion del tratamiento.',
  `Indicaciones` varchar(50) NOT NULL COMMENT 'Forma en que se usa el tratamiento',
  `Efectos_Segundarios` varchar(50) NOT NULL COMMENT 'Efectos segundarios del tratamiento',
  `Referencias` varchar(25) NOT NULL,
  `CantidadVisitas` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Cantidad de visitas que ha recibido el tratamiento.',
  `Fecha` datetime NOT NULL COMMENT 'Fecha en que se publico el tratamiento.',
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Index_1` (`IdUsuario`,`IdEnfermedad`) USING BTREE,
  KEY `FK_khltratamientos_1` (`IdEnfermedad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC COMMENT='Tabla con los tratamientos de las enfermedades' AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `khltratamientos`
--

INSERT INTO `khltratamientos` (`Id`, `IdUsuario`, `IdEnfermedad`, `Nombre`, `Descripcion`, `Indicaciones`, `Efectos_Segundarios`, `Referencias`, `CantidadVisitas`, `Fecha`) VALUES
(2, 24, 1, 'Tratamiento 1', 'Tratamiento', '', '', '', 0, '2014-11-01 00:00:00'),
(3, 29, 4, 'Tratamiento 2', 'En mujeres, con acné moderado se puede controlar con dosis altas de estrógenos orales, combinados co', '', '', '', 0, '2014-11-03 00:00:00'),
(4, 29, 5, 'Tratamiento 3', 'realizar una transfusión de sangre.', '', '', '', 0, '2014-11-03 00:00:00'),
(5, 25, 6, 'Tratamiento 4', 'Para evitar la deshidratación se debe tomar abundantes líquidos y guardar reposo en cama.', '', '', '', 0, '2014-11-03 00:00:00'),
(6, 24, 8, 'Tratamiento farmacológico', 'se utilizan para corregir desequilibrios en los niveles de las sustancias químicas del cerebro, espe', '', 'el insomnio, nerviosismo, disfunción sexual, nause', '', 0, '2014-11-15 00:00:00'),
(7, 25, 8, 'Psicoterapia', 'Su fin es ayudar al paciente a conocerse mejor y cambiar sus malas formas de pensar, sentir y actuar', '', 'No tiene', '', 0, '2014-11-15 00:00:00'),
(8, 26, 8, 'Ejercicio físico', 'está demostrada la capacidad del ejercicio físico para mejorar el bienestar personal, tanto físico c', 'En los pacientes con depresión leve-moderada, un p', 'No tiene', '', 0, '2014-11-15 00:00:00'),
(9, 29, 8, 'Hierba de San Juan (Hyper', 'sus propiedades antidepresivas han sido constatadas en numerosos estudios', 'tomarse siempre bajo prescripción y supervisión de', 'Presenta interacciones con otros medicamentos', '', 0, '2014-11-15 00:00:00'),
(10, 26, 1, 'Tratamiento 2', 'Descripcion', 'indicaciones', 'efectos secundarios', 'referencias', 0, '0000-00-00 00:00:00'),
(11, 25, 1, 'Tratamiento 2 Modificado', 'Descripcion 2', 'Forma 2', 'Efectos 2', 'Referencias 2', 0, '2014-11-18 17:42:52'),
(12, 27, 1, 'Pasar la gripe', 'El mejor tratamiento,lo que significa que hoy por hoy no tiene curacion', '', '', '', 0, '2014-11-17 00:00:00'),
(13, 24, 9, 'Ser responsable con uno m', 'Si su diabetes es mellitus  realice una buena dieta, ejercicio físico y medicacion con responsabilid', '', '', '', 0, '2014-11-17 11:26:48'),
(14, 29, 6, 'Aliviar sintomas', 'Para esta enfermedad solo se pueden tomar medicamentos para aliviar los sintomas, se puede evitar la', '', '', '', 0, '2014-11-17 00:00:00'),
(15, 26, 7, 'Actividades', 'La mejor cura para esta enfermedad es ayudarle a la persona a realizar actividades donde pueda mejor', '', '', '', 0, '2014-11-18 00:00:00'),
(16, 25, 7, 'Terapia', 'Realizar sesiones de terapia con la persona afectada, para que aprenda aceptarse a si misma, esta te', '', '', '', 0, '2014-11-18 00:00:00'),
(17, 26, 4, 'Tratamiento', 'Lavar las zonas afectadas varias veces al día resulta poco eficaz, aunque mejora el aspecto de los p', '', '', '', 0, '2014-11-17 00:00:00'),
(19, 1, 1, 'Admin', 'El admin modifico este tratamiento', '<ol><li>primero</li><li>segundo</li></ol>', 'Muchos', 'Yo', 0, '2014-11-18 16:59:04'),
(20, 27, 4, 'Tratamiento 1', 'Las compresas de agua caliente ayudan a ablandar los comedones, resultando más fácil su extracción', '', '', '', 0, '2014-11-18 00:00:00'),
(21, 25, 10, 'Tratamiento', 'realice cambios en su dieta, evitando ciertos tipos de alimentos, bebidas o fármacos que puedan prod', '', '', '', 0, '2014-11-18 00:00:00'),
(22, 27, 10, 'Tratamiento 1', 'Ingiera antiacidos y otros medicamentos que ayudan a disminuir la acidez en el estomago.', '', '', '', 0, '2014-11-18 00:00:00'),
(27, 22, 5, 'Hierro', 'Es necesario la reposicion de hierro por vía oral en casos de anemia ferropenica; o de vitamina B12 ', '', '', '', 0, '2014-11-17 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `khlusuarios`
--

CREATE TABLE IF NOT EXISTS `khlusuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id del usuario.',
  `Nombre` varchar(50) NOT NULL COMMENT 'Nombre del usuario.',
  `Correo` varchar(50) NOT NULL COMMENT 'Correo electronico del usuario.',
  `Contrasena` varchar(256) NOT NULL COMMENT 'Contraseña del usuario.',
  `Rol` varchar(1) NOT NULL COMMENT 'Rol del usuario ''U''=Usuario normal, ''A''=Administrador.',
  `Estado` varchar(1) NOT NULL COMMENT 'Estado del usuario ''A''=Activo, ''I''=Inactivo(Baneado).',
  `Avatar` varchar(100) DEFAULT NULL COMMENT 'Url del avatar del usuario.',
  `Telefono` varchar(20) DEFAULT NULL COMMENT 'Numero de telefono del usuario.',
  `PaginaWeb` varchar(100) DEFAULT NULL COMMENT 'Url de la pagina web del usuario.',
  `Facebook` varchar(100) DEFAULT NULL COMMENT 'Url del perfil de facebook del usuario.',
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Correo` (`Correo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Tabla con los usuarios del sistema.' AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `khlusuarios`
--

INSERT INTO `khlusuarios` (`Id`, `Nombre`, `Correo`, `Contrasena`, `Rol`, `Estado`, `Avatar`, `Telefono`, `PaginaWeb`, `Facebook`) VALUES
(1, 'Administrador', 'Admin@Admin', 'F32AC23577D3559B64687BBFD1BE2955', 'A', 'A', NULL, NULL, NULL, NULL),
(22, 'Yoselyn', 'yoss0108@gmail.com', '123', 'U', 'A', NULL, '88888888', NULL, NULL),
(24, 'sandra', 'sandra23@gmail.com', '2F5F08AC90CE3852700957F63BB22049', 'U', 'A', NULL, NULL, NULL, NULL),
(25, 'harol', 'Harol25@gmail.com', '9FC53BE21720E431AFB6B581068A1CA4', 'U', 'A', NULL, NULL, NULL, NULL),
(26, 'Colocho', 'anthonyHM@gmail.com', '9865220EFD7ADF9081E78E39A568EED7', 'U', 'A', NULL, NULL, NULL, NULL),
(27, 'felipelvrd', ' felipelvrd@gmail.com', 'D8F5ACF131F55C2CDDE63E46BFBBB5AD', 'U', 'A', NULL, NULL, NULL, NULL),
(28, 'crisman', 'crismanmenagomez@gmail.com', 'E4DBC3D80DD67B030F4407A77A1EADC4', 'U', 'A', NULL, NULL, NULL, NULL),
(29, 'felipelvrd', 'felipelvrd', 'D8F5ACF131F55C2CDDE63E46BFBBB5AD', 'U', 'A', NULL, NULL, NULL, NULL),
(31, 'test', 'test', 'D8F5ACF131F55C2CDDE63E46BFBBB5AD', 'A', 'A', NULL, NULL, NULL, NULL),
(33, 'cris', 'crisman.mena.gomez@est.una.ac.cr', 'D8F5ACF131F55C2CDDE63E46BFBBB5AD', 'U', 'A', NULL, NULL, NULL, NULL),
(35, 'Andes', 'elflaco23@hotmail.com', '181A2F37C574A2A1404C3CFBA0C60D52', 'U', 'A', NULL, NULL, NULL, NULL),
(38, 'juan', 'juanlgu27@hotmail.com', 'D8F5ACF131F55C2CDDE63E46BFBBB5AD', 'U', 'A', NULL, NULL, NULL, NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `hklcomentarios`
--
ALTER TABLE `hklcomentarios`
  ADD CONSTRAINT `FK_hklcomentarios_1` FOREIGN KEY (`IdTratamientos`) REFERENCES `khltratamientos` (`Id`),
  ADD CONSTRAINT `FK_hklcomentarios_2` FOREIGN KEY (`IdUsuario`) REFERENCES `khlusuarios` (`Id`);

--
-- Filtros para la tabla `khlevaluacionescomentarios`
--
ALTER TABLE `khlevaluacionescomentarios`
  ADD CONSTRAINT `FK_khlevaluacionescomentarios_1` FOREIGN KEY (`IdUsuario`) REFERENCES `khlusuarios` (`Id`),
  ADD CONSTRAINT `FK_khlevaluacionescomentarios_2` FOREIGN KEY (`IdComentario`) REFERENCES `hklcomentarios` (`Id`);

--
-- Filtros para la tabla `khlevaluacionestratamientos`
--
ALTER TABLE `khlevaluacionestratamientos`
  ADD CONSTRAINT `FK_khlevaluacionestratamientos_1` FOREIGN KEY (`idTratamiento`) REFERENCES `khltratamientos` (`Id`),
  ADD CONSTRAINT `FK_khlevaluacionestratamientos_2` FOREIGN KEY (`idUsuario`) REFERENCES `khlusuarios` (`Id`);

--
-- Filtros para la tabla `khlnotificaciones`
--
ALTER TABLE `khlnotificaciones`
  ADD CONSTRAINT `FK_khlnotificaciones_1` FOREIGN KEY (`IdUsuario`) REFERENCES `khlusuarios` (`Id`);

--
-- Filtros para la tabla `khltratamientos`
--
ALTER TABLE `khltratamientos`
  ADD CONSTRAINT `FK_khltratamientos_1` FOREIGN KEY (`IdEnfermedad`) REFERENCES `khlenfermedades` (`Id`),
  ADD CONSTRAINT `FK_khltratamientos_2` FOREIGN KEY (`IdUsuario`) REFERENCES `khlusuarios` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
