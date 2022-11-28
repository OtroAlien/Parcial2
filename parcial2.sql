/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : parcial2

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-11-28 04:27:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for areas
-- ----------------------------
DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas` (
  `area` varchar(255) NOT NULL,
  `id_area` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_area`) USING BTREE,
  UNIQUE KEY `id_area_unica` (`id_area`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of areas
-- ----------------------------
INSERT INTO `areas` VALUES ('Multimedia', '1');
INSERT INTO `areas` VALUES ('Diseño Grafico', '2');
INSERT INTO `areas` VALUES ('Videojuegos', '3');
INSERT INTO `areas` VALUES ('Programacion', '4');
INSERT INTO `areas` VALUES ('Web Development', '5');
INSERT INTO `areas` VALUES ('Ilustracion', '6');
INSERT INTO `areas` VALUES ('Animacion 2D', '7');
INSERT INTO `areas` VALUES ('Animacion 3D', '8');
INSERT INTO `areas` VALUES ('Audio', '9');
INSERT INTO `areas` VALUES ('Motion Graphics', '10');
INSERT INTO `areas` VALUES ('Publicidad', '11');

-- ----------------------------
-- Table structure for comentarios
-- ----------------------------
DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE `comentarios` (
  `id_comentarios` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_comentario` datetime NOT NULL,
  `contenido_comentario` varchar(255) NOT NULL,
  `id_publicacion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_comentarios`) USING BTREE,
  KEY `id_usuario` (`id_usuario`) USING BTREE,
  KEY `id_publicacion` (`id_publicacion`) USING BTREE,
  CONSTRAINT `publicacion` FOREIGN KEY (`id_publicacion`) REFERENCES `publicaciones` (`id_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of comentarios
-- ----------------------------
INSERT INTO `comentarios` VALUES ('1', '2022-11-16 20:35:31', 'nooo que buena publicacion me encanta diseñar', '1', '1');
INSERT INTO `comentarios` VALUES ('2', '2022-11-25 20:37:03', 'que post malo, todo el dia tikitiki con la compu', '10', '1');
INSERT INTO `comentarios` VALUES ('3', '2022-11-18 20:37:36', 'le falta pulir las mecanicas, igual para ser una beta esta divertido', '8', '8');
INSERT INTO `comentarios` VALUES ('4', '2022-11-11 20:40:25', 'No se como llegue aca, estaba buscando una receta', '4', '4');

-- ----------------------------
-- Table structure for detalle_imagenes
-- ----------------------------
DROP TABLE IF EXISTS `detalle_imagenes`;
CREATE TABLE `detalle_imagenes` (
  `id_detalle_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `id_imagen` int(11) NOT NULL,
  `id_publicacion` int(11) NOT NULL,
  PRIMARY KEY (`id_detalle_imagen`) USING BTREE,
  KEY `id_publicacion` (`id_publicacion`) USING BTREE,
  KEY `id_imagen` (`id_imagen`) USING BTREE,
  CONSTRAINT `imegenes` FOREIGN KEY (`id_imagen`) REFERENCES `imagenes` (`id_imagen`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `publicaciones` FOREIGN KEY (`id_publicacion`) REFERENCES `publicaciones` (`id_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of detalle_imagenes
-- ----------------------------
INSERT INTO `detalle_imagenes` VALUES ('1', '1', '1');
INSERT INTO `detalle_imagenes` VALUES ('2', '2', '2');
INSERT INTO `detalle_imagenes` VALUES ('3', '3', '3');
INSERT INTO `detalle_imagenes` VALUES ('4', '4', '4');
INSERT INTO `detalle_imagenes` VALUES ('5', '5', '5');
INSERT INTO `detalle_imagenes` VALUES ('6', '6', '6');
INSERT INTO `detalle_imagenes` VALUES ('7', '7', '7');
INSERT INTO `detalle_imagenes` VALUES ('8', '8', '8');
INSERT INTO `detalle_imagenes` VALUES ('9', '9', '9');
INSERT INTO `detalle_imagenes` VALUES ('10', '10', '10');

-- ----------------------------
-- Table structure for detalle_videos
-- ----------------------------
DROP TABLE IF EXISTS `detalle_videos`;
CREATE TABLE `detalle_videos` (
  `id_detalle_video` int(11) NOT NULL AUTO_INCREMENT,
  `id_video` int(11) NOT NULL,
  `id_publicacion` int(11) NOT NULL,
  PRIMARY KEY (`id_detalle_video`) USING BTREE,
  KEY `id_video` (`id_video`) USING BTREE,
  KEY `id_publicacion` (`id_publicacion`) USING BTREE,
  CONSTRAINT `publicacion_video` FOREIGN KEY (`id_publicacion`) REFERENCES `publicaciones` (`id_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `video_detalle` FOREIGN KEY (`id_video`) REFERENCES `videos` (`id_video`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of detalle_videos
-- ----------------------------
INSERT INTO `detalle_videos` VALUES ('1', '1', '1');
INSERT INTO `detalle_videos` VALUES ('2', '2', '1');
INSERT INTO `detalle_videos` VALUES ('3', '3', '3');
INSERT INTO `detalle_videos` VALUES ('4', '4', '3');
INSERT INTO `detalle_videos` VALUES ('5', '5', '7');
INSERT INTO `detalle_videos` VALUES ('6', '6', '6');

-- ----------------------------
-- Table structure for fotos_perfil
-- ----------------------------
DROP TABLE IF EXISTS `fotos_perfil`;
CREATE TABLE `fotos_perfil` (
  `id_foto` int(11) NOT NULL,
  `contenido_pfp` varchar(255) DEFAULT '',
  `id_usuario` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_foto`) USING BTREE,
  KEY `fotos_perfil` (`id_foto`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of fotos_perfil
-- ----------------------------
INSERT INTO `fotos_perfil` VALUES ('1', 'jorgue.jpg', '1');
INSERT INTO `fotos_perfil` VALUES ('2', 'angela.jpg', '2');
INSERT INTO `fotos_perfil` VALUES ('3', 'ricardo.jpg', '3');
INSERT INTO `fotos_perfil` VALUES ('4', 'francisco.jpg', '5');
INSERT INTO `fotos_perfil` VALUES ('5', 'caballero.jpg', '6');
INSERT INTO `fotos_perfil` VALUES ('6', 'daniel.jpg', '7');
INSERT INTO `fotos_perfil` VALUES ('7', 'camila.jpg', '10');

-- ----------------------------
-- Table structure for imagenes
-- ----------------------------
DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE `imagenes` (
  `id_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `contenido_img` varchar(255) NOT NULL,
  PRIMARY KEY (`id_imagen`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of imagenes
-- ----------------------------
INSERT INTO `imagenes` VALUES ('1', 'noga_img.jpg');
INSERT INTO `imagenes` VALUES ('2', 'pepito_img.jpg');
INSERT INTO `imagenes` VALUES ('3', 'mostaza_img.jpg');
INSERT INTO `imagenes` VALUES ('4', 'jujuy.jpg');
INSERT INTO `imagenes` VALUES ('5', 'villavicencio.jpg');
INSERT INTO `imagenes` VALUES ('6', 'duck_arena.jpg');
INSERT INTO `imagenes` VALUES ('7', 'arg_cook_vr.jpg');
INSERT INTO `imagenes` VALUES ('8', 'b.jpg');
INSERT INTO `imagenes` VALUES ('9', 'ml_img.jpg');
INSERT INTO `imagenes` VALUES ('10', 'afa.jpg');

-- ----------------------------
-- Table structure for likes
-- ----------------------------
DROP TABLE IF EXISTS `likes`;
CREATE TABLE `likes` (
  `id_like` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_publicacion` int(11) NOT NULL,
  PRIMARY KEY (`id_like`) USING BTREE,
  KEY `id_usuario` (`id_usuario`) USING BTREE,
  KEY `id_publicacion` (`id_publicacion`) USING BTREE,
  CONSTRAINT `like_publicacion` FOREIGN KEY (`id_publicacion`) REFERENCES `publicaciones` (`id_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `like_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of likes
-- ----------------------------
INSERT INTO `likes` VALUES ('1', '1', '3');
INSERT INTO `likes` VALUES ('2', '8', '2');
INSERT INTO `likes` VALUES ('3', '4', '10');
INSERT INTO `likes` VALUES ('4', '1', '10');

-- ----------------------------
-- Table structure for niveles
-- ----------------------------
DROP TABLE IF EXISTS `niveles`;
CREATE TABLE `niveles` (
  `id_nivel` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(255) NOT NULL,
  PRIMARY KEY (`id_nivel`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of niveles
-- ----------------------------
INSERT INTO `niveles` VALUES ('1', 'admin');
INSERT INTO `niveles` VALUES ('2', 'profesional');
INSERT INTO `niveles` VALUES ('3', 'usuario');

-- ----------------------------
-- Table structure for publicaciones
-- ----------------------------
DROP TABLE IF EXISTS `publicaciones`;
CREATE TABLE `publicaciones` (
  `id_publicacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_area` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `contenido` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_publicacion`) USING BTREE,
  KEY `id_usuario` (`id_usuario`) USING BTREE,
  KEY `id_area` (`id_area`) USING BTREE,
  CONSTRAINT `publicaciones_area` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `publicaciones_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of publicaciones
-- ----------------------------
INSERT INTO `publicaciones` VALUES ('1', '1', '2022-10-12 20:19:49', 'Hemos finalizado el Rebranding de Noga NET, estamos orgullosos de nuestro trabajo y nuestra participacion con la marca', 'Re branding Noga NET', '6');
INSERT INTO `publicaciones` VALUES ('2', '2', '2022-10-10 20:25:41', 'Resto Pepito confió en nosotros para su identidad de marca, los invitamos a visitar su local en Ituzaingó', 'Identidad de marca resto pepito', '6');
INSERT INTO `publicaciones` VALUES ('3', '2', '2022-10-25 20:26:09', 'Mostaza decidió cambiar su packaging y les brindamos nuestros servicios', 'Packaging MOSTAZA', '2');
INSERT INTO `publicaciones` VALUES ('4', '11', '2022-10-04 20:27:14', 'Jujuy es una de las provincias mas lindas del pais, el desarrollo de su identidad corporativa fue bastante complicado, pero muy complaciente!', 'Identidad corporativa Jujuy', '10');
INSERT INTO `publicaciones` VALUES ('5', '11', '2022-10-06 20:28:27', 'Les mostramos nuestro camino en el desarrollo del diseño editorial de Villavicencio', 'Diseño editorial Villavicencio', '10');
INSERT INTO `publicaciones` VALUES ('6', '3', '2022-09-20 20:29:00', 'Nuestro equipo de modelado 3D tiene listos los assets para el anciado juego duck arena', 'Modelos para Duck ARENA', '7');
INSERT INTO `publicaciones` VALUES ('7', '3', '2022-09-21 20:31:21', 'Argentinian cook VR estara pasando a etapa de beta abierta durante las proximas 2 semanas', 'Desarrollo Argentinian cook VR', '7');
INSERT INTO `publicaciones` VALUES ('8', '3', '2022-08-11 20:32:03', 'cafrado yo se que estas leyendo esto por favor decime que jugaste al outer wilds', 'Presentacion B (juego de cafrado)', '7');
INSERT INTO `publicaciones` VALUES ('9', '5', '2022-09-30 20:32:41', 'Mercado libre nos contactó para una actualizacion en la estructura front end del sitio, a los clientes no los decepcionamos!', 'Front End MercadoLibre', '2');
INSERT INTO `publicaciones` VALUES ('10', '5', '2022-10-11 20:34:10', 'Las aplicaciones de Futbol argentino estan creciendo y nosotros no nos quedamos atras.', 'Desarrollo Mobile AFA', '9');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nombre2` varchar(20) DEFAULT NULL,
  `nombre3` varchar(20) DEFAULT NULL,
  `apellido2` varchar(20) DEFAULT NULL,
  `apellido3` varchar(20) DEFAULT NULL,
  `id_foto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE,
  UNIQUE KEY `id_usuario` (`id_usuario`) USING BTREE,
  KEY `nivel` (`id_nivel`) USING BTREE,
  KEY `foto_perfil` (`id_foto`) USING BTREE,
  CONSTRAINT `foto_perfil` FOREIGN KEY (`id_foto`) REFERENCES `fotos_perfil` (`id_foto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `nivel` FOREIGN KEY (`id_nivel`) REFERENCES `niveles` (`id_nivel`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'Jorge', 'Jorgueller', 'thesiiiip0soscarrao', '3', 'jorgelin', 'jorge@gmail.com', null, null, null, null, '1');
INSERT INTO `usuarios` VALUES ('2', 'Angela', 'Rodriguez', 'holasoyangi', '1', 'angelitaaaa', 'angela@ange1.com', null, null, null, null, '2');
INSERT INTO `usuarios` VALUES ('3', 'Ricardo', 'Garinzo', 'rgarin66', '2', 'rgarinzoart', 'rgarinzo66@rgar.com', null, null, null, null, '3');
INSERT INTO `usuarios` VALUES ('4', 'Antonio', 'Banderas', 'bananas2323', '3', 'bantonio32', 'bantonio22@gmail.com', null, null, null, null, null);
INSERT INTO `usuarios` VALUES ('5', 'Francisco', 'Medina', 'pinchila2', '1', 'Xxtheslayer23xX', 'francikpo2003@gmail.com', null, null, null, null, '4');
INSERT INTO `usuarios` VALUES ('6', 'Francisco', 'Caballero', 'boligoma2323', '2', 'fcaballero', 'fcaballero@info.com', null, null, null, null, '5');
INSERT INTO `usuarios` VALUES ('7', 'Daniel', 'Sosa', 'otoño2005', '1', 'danidanisos', 'danidani@sos.com', null, null, null, null, '6');
INSERT INTO `usuarios` VALUES ('8', 'Stan', 'Lee', 'spiderman2', '3', 'realstanlee', 'realstanlee@info.com', null, null, null, null, null);
INSERT INTO `usuarios` VALUES ('9', 'Lionel', 'Messi', 'fulbo', '1', 'liomessi', 'liomessi10@gmail.com', null, null, null, null, null);
INSERT INTO `usuarios` VALUES ('10', 'Camila', 'Romero', 'imprimirverdades', '2', 'camirome', 'camiromero@romart.com', null, null, null, null, '7');

-- ----------------------------
-- Table structure for usuarios_areas
-- ----------------------------
DROP TABLE IF EXISTS `usuarios_areas`;
CREATE TABLE `usuarios_areas` (
  `id_usuario` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_usuario_area` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_usuario_area`) USING BTREE,
  UNIQUE KEY `id_uaurios_area` (`id_usuario_area`) USING BTREE,
  KEY `id_usuario` (`id_usuario`) USING BTREE,
  KEY `id_area` (`id_area`) USING BTREE,
  CONSTRAINT `area_detalle` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `usuarios_detalle` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of usuarios_areas
-- ----------------------------
INSERT INTO `usuarios_areas` VALUES ('1', '2', '1');
INSERT INTO `usuarios_areas` VALUES ('2', '2', '2');
INSERT INTO `usuarios_areas` VALUES ('2', '5', '3');
INSERT INTO `usuarios_areas` VALUES ('10', '11', '4');
INSERT INTO `usuarios_areas` VALUES ('7', '3', '5');
INSERT INTO `usuarios_areas` VALUES ('9', '5', '6');

-- ----------------------------
-- Table structure for videos
-- ----------------------------
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `contenido_video` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id_video`) USING BTREE,
  UNIQUE KEY `id_video` (`id_video`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of videos
-- ----------------------------
INSERT INTO `videos` VALUES ('1', 'noga_motion_graphics.mp4', '');
INSERT INTO `videos` VALUES ('2', 'noga_page_display.mp4', '');
INSERT INTO `videos` VALUES ('3', 'mostaza_packaging_review.mp4', '');
INSERT INTO `videos` VALUES ('4', 'mostaza_packaging_demo.mp4', '');
INSERT INTO `videos` VALUES ('5', 'arg_cook_demo.mp4', '');
INSERT INTO `videos` VALUES ('6', 'darena_models.mp4', '');
