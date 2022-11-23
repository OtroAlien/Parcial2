/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : parcial2

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 23/11/2022 16:34:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for areas
-- ----------------------------
DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas`  (
  ` area` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_area` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_area`) USING BTREE,
  UNIQUE INDEX `id_area_unica`(`id_area`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of areas
-- ----------------------------
INSERT INTO `areas` VALUES ('', 1);

-- ----------------------------
-- Table structure for comentarios
-- ----------------------------
DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE `comentarios`  (
  `id_comentarios` int NOT NULL AUTO_INCREMENT,
  `fecha` datetime(0) NULL DEFAULT NULL,
  `contenido` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_publicacion` int NOT NULL,
  `id_usuario` int NOT NULL,
  PRIMARY KEY (`id_comentarios`) USING BTREE,
  UNIQUE INDEX `id_usuario`(`id_usuario`) USING BTREE,
  UNIQUE INDEX `id_publicacion`(`id_publicacion`) USING BTREE,
  CONSTRAINT `publicacion` FOREIGN KEY (`id_publicacion`) REFERENCES `publicaciones` (`id_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of comentarios
-- ----------------------------

-- ----------------------------
-- Table structure for detalle_imagenes
-- ----------------------------
DROP TABLE IF EXISTS `detalle_imagenes`;
CREATE TABLE `detalle_imagenes`  (
  `id_detalle_imagen` int NOT NULL AUTO_INCREMENT,
  `id_imagen` int NOT NULL,
  `id_publicacion` int NOT NULL,
  PRIMARY KEY (`id_detalle_imagen`) USING BTREE,
  UNIQUE INDEX `id_publicacion`(`id_publicacion`) USING BTREE,
  UNIQUE INDEX `id_imagen`(`id_imagen`) USING BTREE,
  CONSTRAINT `imegenes` FOREIGN KEY (`id_imagen`) REFERENCES `imagenes` (`id_imagen`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `publicaciones` FOREIGN KEY (`id_publicacion`) REFERENCES `publicaciones` (`id_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of detalle_imagenes
-- ----------------------------

-- ----------------------------
-- Table structure for detalle_videos
-- ----------------------------
DROP TABLE IF EXISTS `detalle_videos`;
CREATE TABLE `detalle_videos`  (
  `id_detalle_video` int NOT NULL AUTO_INCREMENT,
  `id_video` int NOT NULL,
  `id_publicacion` int NOT NULL,
  PRIMARY KEY (`id_detalle_video`) USING BTREE,
  UNIQUE INDEX `id_video`(`id_video`) USING BTREE,
  UNIQUE INDEX `id_publicacion`(`id_publicacion`) USING BTREE,
  CONSTRAINT `publicacion_video` FOREIGN KEY (`id_publicacion`) REFERENCES `publicaciones` (`id_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `video_detalle` FOREIGN KEY (`id_video`) REFERENCES `videos` (`id_video`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of detalle_videos
-- ----------------------------

-- ----------------------------
-- Table structure for fotos_perfil
-- ----------------------------
DROP TABLE IF EXISTS `fotos_perfil`;
CREATE TABLE `fotos_perfil`  (
  `id_foto` int NOT NULL,
  `contenido` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_foto`) USING BTREE,
  INDEX `fotos_perfil`(`id_foto`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of fotos_perfil
-- ----------------------------

-- ----------------------------
-- Table structure for imagenes
-- ----------------------------
DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE `imagenes`  (
  `id_imagen` int NOT NULL AUTO_INCREMENT,
  `contenido` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_imagen`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of imagenes
-- ----------------------------

-- ----------------------------
-- Table structure for likes
-- ----------------------------
DROP TABLE IF EXISTS `likes`;
CREATE TABLE `likes`  (
  `id_like` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `id_publicacion` int NOT NULL,
  PRIMARY KEY (`id_like`) USING BTREE,
  UNIQUE INDEX `id_usuario`(`id_usuario`) USING BTREE,
  UNIQUE INDEX `id_publicacion`(`id_publicacion`) USING BTREE,
  CONSTRAINT `like_publicacion` FOREIGN KEY (`id_publicacion`) REFERENCES `publicaciones` (`id_publicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `like_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of likes
-- ----------------------------

-- ----------------------------
-- Table structure for niveles
-- ----------------------------
DROP TABLE IF EXISTS `niveles`;
CREATE TABLE `niveles`  (
  `id_nivel` int NOT NULL AUTO_INCREMENT,
  `nivel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_nivel`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of niveles
-- ----------------------------

-- ----------------------------
-- Table structure for publicaciones
-- ----------------------------
DROP TABLE IF EXISTS `publicaciones`;
CREATE TABLE `publicaciones`  (
  `id_publicacion` int NOT NULL AUTO_INCREMENT,
  `id_area` int NOT NULL,
  `fecha` datetime(0) NULL DEFAULT NULL,
  `id_like` int NOT NULL,
  `contenido` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `titulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_usuario` int NOT NULL,
  PRIMARY KEY (`id_publicacion`) USING BTREE,
  UNIQUE INDEX `id_area`(`id_area`) USING BTREE,
  UNIQUE INDEX `id_usuario`(`id_usuario`) USING BTREE,
  CONSTRAINT `publicaciones_area` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `publicaciones_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of publicaciones
-- ----------------------------

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `apellido` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `clave` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_nivel` int NOT NULL,
  `user` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nombre2` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nombre3` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `apellido2` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `apellido3` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_foto` int NOT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE,
  UNIQUE INDEX `id_usuario`(`id_usuario`) USING BTREE,
  INDEX `nivel`(`id_nivel`) USING BTREE,
  INDEX `foto_perfil`(`id_foto`) USING BTREE,
  CONSTRAINT `foto_perfil` FOREIGN KEY (`id_foto`) REFERENCES `fotos_perfil` (`id_foto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `nivel` FOREIGN KEY (`id_nivel`) REFERENCES `niveles` (`id_nivel`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of usuarios
-- ----------------------------

-- ----------------------------
-- Table structure for usuarios_areas
-- ----------------------------
DROP TABLE IF EXISTS `usuarios_areas`;
CREATE TABLE `usuarios_areas`  (
  `id_usuario` int NOT NULL,
  `id_area` int NOT NULL,
  `id_usuario_area` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_usuario_area`) USING BTREE,
  UNIQUE INDEX `id_uaurios_area`(`id_usuario_area`) USING BTREE,
  INDEX `id_usuario`(`id_usuario`) USING BTREE,
  INDEX `id_area`(`id_area`) USING BTREE,
  CONSTRAINT `area_detalle` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `usuarios_detalle` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of usuarios_areas
-- ----------------------------

-- ----------------------------
-- Table structure for videos
-- ----------------------------
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos`  (
  `id_video` int NOT NULL AUTO_INCREMENT,
  `contenido` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_video`) USING BTREE,
  UNIQUE INDEX `id_video`(`id_video`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of videos
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
