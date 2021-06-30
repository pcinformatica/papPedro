/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50731
 Source Host           : localhost:3306
 Source Schema         : pap2021saopedro

 Target Server Type    : MySQL
 Target Server Version : 50731
 File Encoding         : 65001

 Date: 30/06/2021 10:06:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for caracteristicas
-- ----------------------------
DROP TABLE IF EXISTS `caracteristicas`;
CREATE TABLE `caracteristicas`  (
  `caracteristicaId` int(11) NOT NULL AUTO_INCREMENT,
  `caracteristicaNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `caracteristicaCodigo` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `caracteristicaTipologia` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `caracteristicaDistancia` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `caracteristicaDuracaoAproximada` time NULL DEFAULT NULL,
  `caracteristicaTipoPiso` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `caracteristicaGrauDificuldade` enum('Facil','Medio','Dificil') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `caracteristicaLocalPartida` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `caracteristicaLocalChegada` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `caracteristicaCoordenadaGeograficas` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `caracteristicaCulturalId` int(11) NOT NULL,
  PRIMARY KEY (`caracteristicaId`) USING BTREE,
  INDEX `fk_caracteristicas_cultural1_idx`(`caracteristicaCulturalId`) USING BTREE,
  CONSTRAINT `fk_caracteristicas_cultural1` FOREIGN KEY (`caracteristicaCulturalId`) REFERENCES `cultural` (`culturalId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of caracteristicas
-- ----------------------------
INSERT INTO `caracteristicas` VALUES (1, '11123', '1232', 'eeee', '123', '16:07:15', 'eeee', 'Dificil', 'www', 'aaaa', 'aade234', 1);

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias`  (
  `categoriaId` int(11) NOT NULL AUTO_INCREMENT,
  `categoriaNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `categoriaDestaque` enum('sim','nao') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'nao',
  PRIMARY KEY (`categoriaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES (1, 'Alojamento', 'sim');
INSERT INTO `categorias` VALUES (2, 'Restauracao', 'sim');
INSERT INTO `categorias` VALUES (3, 'Cultural', 'sim');
INSERT INTO `categorias` VALUES (4, 'IPSDIS', 'nao');

-- ----------------------------
-- Table structure for cultural
-- ----------------------------
DROP TABLE IF EXISTS `cultural`;
CREATE TABLE `cultural`  (
  `culturalId` int(11) NOT NULL AUTO_INCREMENT,
  `culturalNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `culturalURL` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `setoresSetorId` int(11) NOT NULL,
  PRIMARY KEY (`culturalId`) USING BTREE,
  INDEX `fk_cultural_setores1_idx`(`setoresSetorId`) USING BTREE,
  CONSTRAINT `fk_cultural_setores1` FOREIGN KEY (`setoresSetorId`) REFERENCES `setores` (`setorId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cultural
-- ----------------------------
INSERT INTO `cultural` VALUES (1, 'Eventos', 'images/1a.jpg', 1);
INSERT INTO `cultural` VALUES (2, 'Lendas', 'images/1a.jpg', 2);

-- ----------------------------
-- Table structure for estabelecimentocategorias
-- ----------------------------
DROP TABLE IF EXISTS `estabelecimentocategorias`;
CREATE TABLE `estabelecimentocategorias`  (
  `estabelecimentoCategoriaCategoriaId` int(11) NOT NULL,
  `estabelecimentoCategoriaEstabelecimentoId` int(11) NOT NULL,
  `estabelecimentoCategoriaDescricao` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Escrita de texto livre para se poder escrever INFO diferente para alojamento/cafés/restaurantes',
  PRIMARY KEY (`estabelecimentoCategoriaCategoriaId`, `estabelecimentoCategoriaEstabelecimentoId`) USING BTREE,
  INDEX `fk_categorias_has_estabelecimentos_estabelecimentos1_idx`(`estabelecimentoCategoriaEstabelecimentoId`) USING BTREE,
  INDEX `fk_categorias_has_estabelecimentos_categorias1_idx`(`estabelecimentoCategoriaCategoriaId`) USING BTREE,
  CONSTRAINT `fk_categorias_has_estabelecimentos_categorias1` FOREIGN KEY (`estabelecimentoCategoriaCategoriaId`) REFERENCES `categorias` (`categoriaId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_categorias_has_estabelecimentos_estabelecimentos1` FOREIGN KEY (`estabelecimentoCategoriaEstabelecimentoId`) REFERENCES `estabelecimentos` (`estabelecimentoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of estabelecimentocategorias
-- ----------------------------
INSERT INTO `estabelecimentocategorias` VALUES (1, 1, '1');

-- ----------------------------
-- Table structure for estabelecimentos
-- ----------------------------
DROP TABLE IF EXISTS `estabelecimentos`;
CREATE TABLE `estabelecimentos`  (
  `estabelecimentoId` int(11) NOT NULL AUTO_INCREMENT,
  `estabelecimentoNome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `estabelecimentoDescricao` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `estabelecimentoMorada` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `estabelecimentoTelefone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `estabelecimentoEmail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `estabelecimentoLatitude` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `estabelecimentoLongitude` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `estabelecimentoURL` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `estabelecimentoPrecoMin` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `estabelecimentoPrecoMax` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `estabelecimentoCategoriaId` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`estabelecimentoId`) USING BTREE,
  INDEX `fk_estabelecimentos_categorias1_idx`(`estabelecimentoCategoriaId`) USING BTREE,
  CONSTRAINT `fk_estabelecimentos_categorias1` FOREIGN KEY (`estabelecimentoCategoriaId`) REFERENCES `categorias` (`categoriaId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of estabelecimentos
-- ----------------------------
INSERT INTO `estabelecimentos` VALUES (1, 'Restaurant', '', 'eee', '234565', 'zoom.com', '', '', 'images/1a.jpg', '1501', '20001', 1);
INSERT INTO `estabelecimentos` VALUES (2, '123', '', 'ddd', '35656', 'e@zoom.com', NULL, NULL, 'images/1b.jpg', NULL, NULL, 2);
INSERT INTO `estabelecimentos` VALUES (4, 'gggggggg', '', 'dddd', '32435343', 'ereeee', NULL, NULL, 'images/1a.jpg', NULL, NULL, 1);
INSERT INTO `estabelecimentos` VALUES (5, 'wwwww', '', 'wwww', '4565654', 'rereerre', NULL, NULL, 'images/1a.jpg', NULL, NULL, 1);
INSERT INTO `estabelecimentos` VALUES (6, 'gghh', NULL, 'fdghdfggf', '355455', 'dddd', NULL, NULL, 'images/1b.jpg', NULL, NULL, 2);

-- ----------------------------
-- Table structure for ficheiros
-- ----------------------------
DROP TABLE IF EXISTS `ficheiros`;
CREATE TABLE `ficheiros`  (
  `ficheiroId` int(11) NOT NULL AUTO_INCREMENT,
  `ficheiroNome` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ficheiroURL` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ficheiroCulturalId` int(11) NOT NULL,
  PRIMARY KEY (`ficheiroId`) USING BTREE,
  INDEX `fk_Ficheiros_cultural1_idx`(`ficheiroCulturalId`) USING BTREE,
  CONSTRAINT `fk_Ficheiros_cultural1` FOREIGN KEY (`ficheiroCulturalId`) REFERENCES `cultural` (`culturalId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ficheiros
-- ----------------------------

-- ----------------------------
-- Table structure for imagens
-- ----------------------------
DROP TABLE IF EXISTS `imagens`;
CREATE TABLE `imagens`  (
  `imagemId` int(11) NOT NULL AUTO_INCREMENT,
  `imagemNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imagemEstabelecimentoId` int(11) NOT NULL,
  `imagemOrdem` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`imagemId`) USING BTREE,
  INDEX `fk_imagens_estabelecimentos_idx`(`imagemEstabelecimentoId`) USING BTREE,
  CONSTRAINT `fk_imagens_estabelecimentos` FOREIGN KEY (`imagemEstabelecimentoId`) REFERENCES `estabelecimentos` (`estabelecimentoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of imagens
-- ----------------------------
INSERT INTO `imagens` VALUES (1, 'images/1a.jpg', 1, 567);
INSERT INTO `imagens` VALUES (2, 'images/1b.jpg', 2, 1);
INSERT INTO `imagens` VALUES (3, 'images/1c.jpg', 1, 1);

-- ----------------------------
-- Table structure for lendas
-- ----------------------------
DROP TABLE IF EXISTS `lendas`;
CREATE TABLE `lendas`  (
  `lendaDescricaoTitu` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `lendaDescricao` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `lendaCulturalId` int(11) NOT NULL,
  PRIMARY KEY (`lendaCulturalId`) USING BTREE,
  CONSTRAINT `fk_lendas_cultural1` FOREIGN KEY (`lendaCulturalId`) REFERENCES `cultural` (`culturalId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lendas
-- ----------------------------
INSERT INTO `lendas` VALUES ('ANA', '<p>HUDHHDEHJED</p>', 2);

-- ----------------------------
-- Table structure for noticias
-- ----------------------------
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias`  (
  `noticiaId` int(11) NOT NULL AUTO_INCREMENT,
  `noticiaTitulo` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `noticiaURL` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `noticiaData` date NULL DEFAULT NULL,
  `noticiaDescricao` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `noticiaURLFundo` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `noticiasH` time NULL DEFAULT NULL,
  PRIMARY KEY (`noticiaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of noticias
-- ----------------------------
INSERT INTO `noticias` VALUES (1, 'ggyiu', 'image/1a.jpg', '2011-08-19', '<p>ojajjajsjsjsjs ajjajarrrrrrr</p>', 'images/1a.jpg', '13:45:00');
INSERT INTO `noticias` VALUES (2, 'DDDDD', NULL, '2011-08-18', '<p>rrrrr</p>', 'images/1d.jpg', '13:45:00');

-- ----------------------------
-- Table structure for perfis
-- ----------------------------
DROP TABLE IF EXISTS `perfis`;
CREATE TABLE `perfis`  (
  `perfilId` int(11) NOT NULL AUTO_INCREMENT,
  `perfilNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilAvatarURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilTelefone` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilEmail` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilUserId` int(11) NOT NULL,
  PRIMARY KEY (`perfilId`) USING BTREE,
  UNIQUE INDEX `perfilUserId_UNIQUE`(`perfilUserId`) USING BTREE,
  INDEX `fk_perfis_users1_idx`(`perfilUserId`) USING BTREE,
  CONSTRAINT `fk_perfis_users1` FOREIGN KEY (`perfilUserId`) REFERENCES `users` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of perfis
-- ----------------------------

-- ----------------------------
-- Table structure for setores
-- ----------------------------
DROP TABLE IF EXISTS `setores`;
CREATE TABLE `setores`  (
  `setorId` int(11) NOT NULL AUTO_INCREMENT,
  `setorNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `setorURL` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `setorCategoriaId` int(11) NOT NULL,
  PRIMARY KEY (`setorId`, `setorCategoriaId`) USING BTREE,
  INDEX `fk_setores_categorias1_idx`(`setorCategoriaId`) USING BTREE,
  CONSTRAINT `fk_setores_categorias1` FOREIGN KEY (`setorCategoriaId`) REFERENCES `categorias` (`categoriaId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of setores
-- ----------------------------
INSERT INTO `setores` VALUES (1, 'Eventos', 'images/1a.jpg', 3);
INSERT INTO `setores` VALUES (2, 'Lendas ', 'images/1a.jpg', 3);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userPassword` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userState` enum('pendente','ativo','inativo') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'pendente',
  `userType` enum('user','admin','member') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`userId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
