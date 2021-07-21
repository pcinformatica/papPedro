/*
 Navicat Premium Data Transfer

 Source Server         : Servidor Local
 Source Server Type    : MySQL
 Source Server Version : 50731
 Source Host           : localhost:3306
 Source Schema         : pap2021saopedro

 Target Server Type    : MySQL
 Target Server Version : 50731
 File Encoding         : 65001

 Date: 21/07/2021 15:55:43
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
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

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
  `categoriaPaginaRelacionada` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`categoriaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES (1, 'Alojamento', 'sim', 'packages.php');
INSERT INTO `categorias` VALUES (2, 'Restauracao', 'sim', 'ola.php');
INSERT INTO `categorias` VALUES (3, 'Cultural', 'sim', NULL);
INSERT INTO `categorias` VALUES (4, 'IPSDIS', 'nao', NULL);

-- ----------------------------
-- Table structure for criticas
-- ----------------------------
DROP TABLE IF EXISTS `criticas`;
CREATE TABLE `criticas`  (
  `criticasId` int(11) NOT NULL AUTO_INCREMENT,
  `criticasTexto` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `criticaPerfilId` int(11) NOT NULL,
  PRIMARY KEY (`criticasId`) USING BTREE,
  INDEX `fk_criticas_perfis1_idx`(`criticaPerfilId`) USING BTREE,
  CONSTRAINT `fk_criticas_perfis1` FOREIGN KEY (`criticaPerfilId`) REFERENCES `perfis` (`perfilId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of criticas
-- ----------------------------
INSERT INTO `criticas` VALUES (1, 'Podiam melhorar as imagens do slideshow!', 1);
INSERT INTO `criticas` VALUES (30, 'Gostei das cores neutras e do seu design moderno', 2);

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
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cultural
-- ----------------------------
INSERT INTO `cultural` VALUES (1, 'Eventos', 'images/1a.jpg', 1);
INSERT INTO `cultural` VALUES (2, 'Lendas', 'images/1a.jpg', 2);

-- ----------------------------
-- Table structure for ementas
-- ----------------------------
DROP TABLE IF EXISTS `ementas`;
CREATE TABLE `ementas`  (
  `ementaId` int(11) NOT NULL AUTO_INCREMENT,
  `ementaInfo` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ementaEstado` enum('Ativado','Desativado') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'Ativado',
  `ementaestabelecimentoId` int(11) NOT NULL,
  `ementaDia` date NULL DEFAULT NULL,
  PRIMARY KEY (`ementaId`) USING BTREE,
  INDEX `fk_Ementas_estabelecimentos1_idx`(`ementaestabelecimentoId`) USING BTREE,
  CONSTRAINT `fk_Ementas_estabelecimentos1` FOREIGN KEY (`ementaestabelecimentoId`) REFERENCES `estabelecimentos` (`estabelecimentoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of ementas
-- ----------------------------

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
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

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
  `estabelecimentoInfoCatog` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`estabelecimentoId`) USING BTREE,
  INDEX `fk_estabelecimentos_categorias1_idx`(`estabelecimentoCategoriaId`) USING BTREE,
  CONSTRAINT `fk_estabelecimentos_categorias1` FOREIGN KEY (`estabelecimentoCategoriaId`) REFERENCES `categorias` (`categoriaId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of estabelecimentos
-- ----------------------------
INSERT INTO `estabelecimentos` VALUES (1, 'Hotel Paris', '<p>aaabbbb</p>\r\n<p>&nbsp;</p>\r\n<h3>Info</h3>\r\n<div class=\"row\">\r\n<div class=\"col-md-2 col-sm-3\">\r\n<p><strong>Check-in:</strong></p>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-10 col-sm-9\">\r\n<div class=\"row\">\r\n<div class=\"col-md-10 col-sm-9\">\r\n<div class=\"col-md-10 col-sm-9\">\r\n<p style=\"line-height: 1.3;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - N&atilde;o permitido animais.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-10 col-sm-9\">\r\n<div class=\"col-md-10 col-sm-9\" style=\"line-height: 1.3;\">\r\n<p><strong>Check-out:</strong></p>\r\n</div>\r\n<div class=\"col-md-10 col-sm-9\">\r\n<div class=\"col-md-10 col-sm-9\">\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - N&atilde;o permitido animais.</p>\r\n<p><strong>Animais:</strong></p>\r\n<div class=\"col-md-10 col-sm-9\">\r\n<div class=\"col-md-10 col-sm-9\">\r\n<p style=\"line-height: 1.3;\">&nbsp;&nbsp; - N&atilde;o permitido animais.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-2 col-sm-3\">\r\n<h3>Disponibilidade &amp; Pre&ccedil;os</h3>\r\n</div>\r\n</div>\r\n<div class=\"table-responsive\">\r\n<table class=\"table\" style=\"border-collapse: collapse; width: 75.3672%; height: 168px; background-color: #c2e0f4; border-color: #e03e2d; border-style: solid;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><caption>&nbsp;</caption>\r\n<thead>\r\n<tr style=\"height: 22px;\">\r\n<th style=\"height: 22px; width: 21.2435%;\">Pacote</th>\r\n<th style=\"height: 22px; width: 22.9922%;\">De</th>\r\n<th style=\"height: 22px; width: 22.9922%;\">At&eacute;</th>\r\n<th style=\"height: 22px; width: 32.7073%;\">Pre&ccedil;o</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"height: 22px; background-color: #ced4d9; border-color: #ced4d9; border-style: solid; width: 21.2435%;\">Natal</td>\r\n<td style=\"height: 22px; background-color: #ced4d9; border-color: #ced4d9; border-style: solid; width: 22.9922%;\">01-11-2020</td>\r\n<td style=\"height: 22px; background-color: #ced4d9; border-color: #ced4d9; border-style: solid; width: 22.9922%;\">27-12-2020</td>\r\n<td style=\"height: 22px; background-color: #ced4d9; border-color: #ced4d9; border-style: solid; width: 32.7073%;\">&euro; 1200 por noite</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"height: 22px; width: 21.2435%;\">Ano Novo</td>\r\n<td style=\"height: 22px; width: 22.9922%;\">28-2020</td>\r\n<td style=\"height: 22px; width: 22.9922%;\">3-01-2021</td>\r\n<td style=\"height: 22px; width: 32.7073%;\">&euro; 1500 por noite</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"height: 22px; background-color: #ced4d9; border-color: #ced4d9; border-style: solid; width: 21.2435%;\">Janeiro</td>\r\n<td style=\"height: 22px; background-color: #ced4d9; border-color: #ced4d9; border-style: solid; width: 22.9922%;\">4-01-2021</td>\r\n<td style=\"height: 22px; background-color: #ced4d9; border-color: #ced4d9; border-style: solid; width: 22.9922%;\">31-01-2021</td>\r\n<td style=\"height: 22px; background-color: #ced4d9; border-color: #ced4d9; border-style: solid; width: 32.7073%;\">&euro; 1094 por noite</td>\r\n</tr>\r\n<tr style=\"height: 22px;\">\r\n<td style=\"height: 22px; width: 21.2435%;\">Rom&acirc;ntico</td>\r\n<td style=\"height: 22px; width: 22.9922%;\">01-02-2020</td>\r\n<td style=\"height: 22px; width: 22.9922%;\">31-02-2020</td>\r\n<td style=\"height: 22px; width: 32.7073%;\">&euro; 1094 por noite</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>', 'ssss', '22344', 'hp@paris.pt', '', '', 'images/1b.jpg', '1501', '20001', 1, '<p>A&nbsp; 20m da praia</p>');
INSERT INTO `estabelecimentos` VALUES (2, 'Restaurante 123', '<p>aaaaa</p>', 'dddzzzz', '35656', 'e@zoom.com', '', '', 'images/3a.jpg', '', '', 2, '');
INSERT INTO `estabelecimentos` VALUES (4, 'Mar e Sol Hotel Spa', '<p>O Hotel Mar e Sol &amp; Spa desfruta de uma localiza&ccedil;&atilde;o na vila costeira de S&atilde;o Pedro de Moel e disp&otilde;e de quartos luminosos, de uma recep&ccedil;&atilde;o aberta 24 horas por dia e de um restaurante panor&acirc;mico com vistas sobre o Oceano Atl&acirc;ntico Norte.</p>\r\n<p>Os modernos quartos do Hotel Mar e Sol &amp; Spa incluem piso em parquet, uma decora&ccedil;&atilde;o elegante em tons de azul e verde, janelas insonorizadas, um mini-bar e casa de banho privativa.</p>\r\n<p>Os h&oacute;spedes poder&atilde;o desfrutar de cozinha gourmet no restaurante, enquanto observam uma variedade de cores no c&eacute;u durante o p&ocirc;r-do-sol. O bar prop&otilde;e um ambiente relaxante para tomar uma bebida &agrave; noite, com televis&otilde;es de ecr&atilde; plano e cadeiras verdes.</p>\r\n<p>O Hotel Mar e Sol &amp; Spa fica a 15 minutos de carro da Marinha Grande e a 30 minutos de carro de Leiria. Os h&oacute;spedes podem andar de bicicleta nas ciclovias ao longo do litoral.</p>\r\n<p>O Hotel Mar e Sol &amp; Spa encontra-se a 1 hora de carro do Aeroporto de Lisboa. A vila piscat&oacute;ria da Nazar&eacute; est&aacute; a 20 km e o Santu&aacute;rio de F&aacute;tima fica a 50 km. A vila medieval de &Oacute;bidos encontra-se a 60 km e as praias de Peniche, com suas &oacute;ptimas condi&ccedil;&otilde;es de surf, est&atilde;o a cerca de 80 km.&nbsp;</p>', 'dddd', '32435343', 'ereeee', '', '', 'images/1a.jpg', '500', '1500', 1, '<div><img class=\"rounded shadow-sm\" src=\"https://media.istockphoto.com/vectors/beach-scene-with-chair-and-umbrella-vector-id958496124?b=1&amp;k=6&amp;m=958496124&amp;s=170x170&amp;h=7zC2fbEY5VA9l7POnAdUNN-BWTKt-PcP1l2MR-ch_Fw=\" alt=\"Cena de praia com cadeira e guarda-chuva\" width=\"24\" height=\"24\" /> A 300 m da praia&nbsp;</div>');
INSERT INTO `estabelecimentos` VALUES (5, 'Joy', '', 'wwww', '4565654', 'rereerre', '', '', 'images/1f.jpg', '', '', 1, '');
INSERT INTO `estabelecimentos` VALUES (6, 'Bar Ice', '', 'fdghdfggf', '355455', 'dddd', '', '', 'images/r12.jpg', '', '', 2, '');
INSERT INTO `estabelecimentos` VALUES (7, 'rrr', '', 'rr', 'rrr', 'rerrerrre', NULL, NULL, NULL, NULL, NULL, 1, NULL);
INSERT INTO `estabelecimentos` VALUES (8, 'CafÃ© Mar', '', 'fdff', '2222', 'a@zoom.com', '', '', 'images/r14.jpg', '', '', 2, '');

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
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of ficheiros
-- ----------------------------
INSERT INTO `ficheiros` VALUES (1, 'ff', 'www.google.com', 1);

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
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of imagens
-- ----------------------------
INSERT INTO `imagens` VALUES (1, 'images/1a.jpg', 1, 567);
INSERT INTO `imagens` VALUES (2, 'images/1b.jpg', 2, 1);
INSERT INTO `imagens` VALUES (6, 'images/ronaldo.jpg', 2, 345);
INSERT INTO `imagens` VALUES (7, 'images/r11.jpg', 1, 2);
INSERT INTO `imagens` VALUES (8, 'images/r12.jpg', 1, 4);
INSERT INTO `imagens` VALUES (9, 'images/1a.jpg', 4, 56);
INSERT INTO `imagens` VALUES (10, 'images/5a.jpg', 4, 589);

-- ----------------------------
-- Table structure for lendas
-- ----------------------------
DROP TABLE IF EXISTS `lendas`;
CREATE TABLE `lendas`  (
  `lendaId` int(11) NOT NULL AUTO_INCREMENT,
  `lendaDescricaoTitu` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `lendaDescricao` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `lendaCulturalId` int(11) NOT NULL,
  PRIMARY KEY (`lendaId`) USING BTREE,
  UNIQUE INDEX `lendaCulturalId_UNIQUE`(`lendaCulturalId`) USING BTREE,
  CONSTRAINT `fk_lendas_cultural1` FOREIGN KEY (`lendaCulturalId`) REFERENCES `cultural` (`culturalId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of lendas
-- ----------------------------
INSERT INTO `lendas` VALUES (1, 'ANA', '<p>HUDHHDEHJED</p>', 2);

-- ----------------------------
-- Table structure for noticias
-- ----------------------------
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias`  (
  `noticiaId` int(11) NOT NULL AUTO_INCREMENT,
  `noticiaTitulo` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `noticiaURL` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `noticiaData` date NULL DEFAULT NULL,
  `noticiaDescricao` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `noticiaURLFundo` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `noticiasH` time NULL DEFAULT NULL,
  PRIMARY KEY (`noticiaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of noticias
-- ----------------------------
INSERT INTO `noticias` VALUES (1, 'Praias do concelho recebem animaÃ§Ã£o', 'images/maxresdefault.jpg', '2021-07-02', '<h6 style=\"line-height: 1;\"><span style=\"font-size: 8pt; color: #2dc26b;\">ðŸ“… Disponiblidade <img class=\"loaded\" title=\"sem wi-fi Premium &iacute;cone\" src=\"https://image.flaticon.com/icons/png/512/4299/4299756.png\" alt=\"sem wi-fi Premium &iacute;cone\" width=\"24\" height=\"24\" />Sem signal</span><br /><br /><span style=\"font-size: 8pt; color: #2dc26b;\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OlaðŸ”¢</span></h6>', 'images/1a.jpg', '15:15:00');
INSERT INTO `noticias` VALUES (2, 'Xadrez: OperÃ¡rio recebe Nacional de Semi-RÃ¡pidas', 'images/xadrez.jpg', '2011-08-18', '<div class=\"main-content\">\r\n<div class=\"bt-social-share bt-social-share-above\">\r\n<div class=\"bt-social-share-button bt-twitter-button\" style=\"width: 90px;\">&nbsp;</div>\r\n<div class=\"bt-social-share-button bt-linkedin-button\">&nbsp;</div>\r\n<div class=\"bt-social-share-button bt-googleplus-button\">\r\n<div id=\"___plus_0\" style=\"position: absolute; width: 450px; left: -10000px;\"><iframe id=\"I0_1626872572915\" style=\"position: absolute; top: -10000px; width: 450px; margin: 0px; border-style: none;\" tabindex=\"0\" src=\"https://apis.google.com/u/0/se/0/_/+1/sharebutton?plusShare=true&amp;usegapi=1&amp;action=share&amp;annotation=bubble&amp;height=20&amp;hl=pt-PT&amp;origin=https%3A%2F%2Fwww.jornaldamarinha.pt&amp;url=https%3A%2F%2Fwww.jornaldamarinha.pt%2Findex.php%2Fdesporto-publisher%2F1800-xadrez-operario-recebe-nacional-de-semi-rapidas&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.pt_BR.VESh1b8XSWM.O%2Fam%3DAQ%2Fd%3D1%2Frs%3DAGLTcCNaCafCsR0qyyuljw2UAMvhNAcnbg%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1626872572915&amp;_gfid=I0_1626872572915&amp;parent=https%3A%2F%2Fwww.jornaldamarinha.pt&amp;pfname=&amp;rpctoken=12504939\" name=\"I0_1626872572915\" width=\"100%\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" data-gapiattached=\"true\" data-mce-fragment=\"1\"></iframe></div>\r\n</div>\r\n</div>\r\n<p style=\"margin-bottom: 0.0001pt; line-height: normal;\"><em><strong><span style=\"font-size: 14pt;\">O Campeonato Nacional de Semi-R&aacute;pidas, Memorial Dr. Jos&eacute; Henriques Vareda, realiza-se no pr&oacute;ximo s&aacute;bado, 17 de julho, no Pavilh&atilde;o Multiusos do Sport Oper&aacute;rio Marinhense</span></strong></em></p>\r\n<p style=\"margin-bottom: 0.0001pt; line-height: normal;\"><span style=\"font-size: 14pt;\">&nbsp;<br /><br /></span></p>\r\n<p style=\"margin-bottom: 0.0001pt; line-height: normal;\"><span style=\"font-size: 14pt;\">A capital do vidro volta a receber esta emblem&aacute;tica competi&ccedil;&atilde;o ap&oacute;s uma pausa for&ccedil;ada no calend&aacute;rio de ritmos mais acelerados, devido &agrave; pandemia provocada pela pandemia da Covid-19. Esta edi&ccedil;&atilde;o de 2021 &eacute; limitada a uma equipa por clube.<br /><br /><br /></span></p>\r\n<p style=\"margin-bottom: 0.0001pt; line-height: normal;\"><span style=\"font-size: 14pt;\">No domingo, a Marinha Grande recebe os Campeonatos Nacionais de jovens r&aacute;pidas equipas e individual.</span></p>\r\n</div>', 'images/xadrez.jpg', '13:45:00');
INSERT INTO `noticias` VALUES (3, 'Marinha Grande sem Bandeira Azul', 'images/4e.jpg', '2011-08-19', '<p>kkhjiuikikkjjk</p>', 'images/1b.jpg', '13:45:00');

-- ----------------------------
-- Table structure for pagtermos
-- ----------------------------
DROP TABLE IF EXISTS `pagtermos`;
CREATE TABLE `pagtermos`  (
  `pagtermoId` int(11) NOT NULL AUTO_INCREMENT,
  `pagtermoTitulo` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pagtermoURL` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pagtermoId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pagtermos
-- ----------------------------
INSERT INTO `pagtermos` VALUES (1, 'Termos', 'images/farol.jpg');

-- ----------------------------
-- Table structure for perfis
-- ----------------------------
DROP TABLE IF EXISTS `perfis`;
CREATE TABLE `perfis`  (
  `perfilId` int(11) NOT NULL AUTO_INCREMENT,
  `perfilNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilAvatarURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `perfilTelefone` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilEmail` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfilUserId` int(11) NOT NULL,
  `perfilMorada` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`perfilId`) USING BTREE,
  UNIQUE INDEX `perfilUserId_UNIQUE`(`perfilUserId`) USING BTREE,
  INDEX `fk_perfis_users1_idx`(`perfilUserId`) USING BTREE,
  CONSTRAINT `fk_perfis_users1` FOREIGN KEY (`perfilUserId`) REFERENCES `users` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of perfis
-- ----------------------------
INSERT INTO `perfis` VALUES (1, 'Pedro', 'images/1a.jpg', '29993393093209', 'etcx@hotmail.com', 1, 'fff');
INSERT INTO `perfis` VALUES (2, 'Ana', 'images/1b.jpg', '37738383', '222222222', 2, 'ffff');
INSERT INTO `perfis` VALUES (3, 'lll', NULL, '235', 'lll@gmail.com', 10, 'pp');
INSERT INTO `perfis` VALUES (4, 'm123', NULL, '23444', 'm@gmail.com', 11, 'hsajdsjd');
INSERT INTO `perfis` VALUES (5, 'h', NULL, '333', 'ana@gmail.com', 12, 'ddd');

-- ----------------------------
-- Table structure for precos
-- ----------------------------
DROP TABLE IF EXISTS `precos`;
CREATE TABLE `precos`  (
  `precoId` int(11) NOT NULL AUTO_INCREMENT,
  `precoNormal` decimal(10, 0) NOT NULL,
  `precoDesconto` decimal(10, 0) NULL DEFAULT NULL,
  PRIMARY KEY (`precoId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of precos
-- ----------------------------
INSERT INTO `precos` VALUES (1, 125, 25);
INSERT INTO `precos` VALUES (2, 450, 560);
INSERT INTO `precos` VALUES (3, 120, 20);
INSERT INTO `precos` VALUES (4, 580, 45);
INSERT INTO `precos` VALUES (5, 20, 488);
INSERT INTO `precos` VALUES (6, 50, 20);
INSERT INTO `precos` VALUES (7, 124, NULL);

-- ----------------------------
-- Table structure for quartos
-- ----------------------------
DROP TABLE IF EXISTS `quartos`;
CREATE TABLE `quartos`  (
  `quartoId` int(11) NOT NULL AUTO_INCREMENT,
  `quartoCapacidade` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `quartoCapacidadeInfo` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `quartoInformacoes` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `quartoDisponiblidade` enum('Disponivel','Indesponivel') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'Disponivel',
  `quartoEstabelecimentoId` int(11) NOT NULL,
  `quartoQuartoTipoId` int(11) NOT NULL,
  `quartoPrecoId` int(11) NOT NULL,
  `quartoNumero` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`quartoId`) USING BTREE,
  INDEX `fk_quartos_estabelecimentos1_idx`(`quartoEstabelecimentoId`) USING BTREE,
  INDEX `fk_quartos_quartoTipo1_idx`(`quartoQuartoTipoId`) USING BTREE,
  INDEX `fk_quartos_precos1_idx`(`quartoPrecoId`) USING BTREE,
  CONSTRAINT `fk_quartos_estabelecimentos1` FOREIGN KEY (`quartoEstabelecimentoId`) REFERENCES `estabelecimentos` (`estabelecimentoId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_quartos_precos1` FOREIGN KEY (`quartoPrecoId`) REFERENCES `precos` (`precoId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_quartos_quartoTipo1` FOREIGN KEY (`quartoQuartoTipoId`) REFERENCES `quartotipo` (`quartoTipoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of quartos
-- ----------------------------
INSERT INTO `quartos` VALUES (1, '2 pessoas', '1 cama de casal\r\nou\r\n2 camas individuais', 'Lindo', 'Disponivel', 1, 1, 1, '1');
INSERT INTO `quartos` VALUES (2, '5', 'cama casal', '895', 'Disponivel', 2, 2, 2, '1');
INSERT INTO `quartos` VALUES (5, '2 pessoas', '<p>rrrrrrrrrrrr</p>', '<p>tttttttttttttttttttttttttt</p>', 'Indesponivel', 4, 5, 5, '5');

-- ----------------------------
-- Table structure for quartotipo
-- ----------------------------
DROP TABLE IF EXISTS `quartotipo`;
CREATE TABLE `quartotipo`  (
  `quartoTipoId` int(11) NOT NULL AUTO_INCREMENT,
  `quartoTipoTipo` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`quartoTipoId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of quartotipo
-- ----------------------------
INSERT INTO `quartotipo` VALUES (1, '120');
INSERT INTO `quartotipo` VALUES (2, 'Quarto Duplo com Varanda e Vista Mar');
INSERT INTO `quartotipo` VALUES (3, 'Quarto Duplo com Varanda e Vista Mar ');
INSERT INTO `quartotipo` VALUES (4, 'Quarto Duplo Deluxe com Varanda e Vista Mar ');
INSERT INTO `quartotipo` VALUES (5, 'Quarto Duplo Superior ');

-- ----------------------------
-- Table structure for reservas
-- ----------------------------
DROP TABLE IF EXISTS `reservas`;
CREATE TABLE `reservas`  (
  `reservaId` int(11) NOT NULL AUTO_INCREMENT,
  `estabelecimentos_estabelecimentoId` int(11) NOT NULL,
  `perfis_perfilId` int(11) NOT NULL,
  `reservaCheckInDateTime` datetime NOT NULL,
  `reservaCheckOutDayTime` datetime NOT NULL,
  `quartos_quartoId` int(11) NOT NULL,
  PRIMARY KEY (`reservaId`, `perfis_perfilId`) USING BTREE,
  INDEX `fk_reserva_estabelecimentos1_idx`(`estabelecimentos_estabelecimentoId`) USING BTREE,
  INDEX `fk_reserva_perfis1_idx`(`perfis_perfilId`) USING BTREE,
  INDEX `fk_reservas_quartos1_idx`(`quartos_quartoId`) USING BTREE,
  CONSTRAINT `fk_reserva_estabelecimentos1` FOREIGN KEY (`estabelecimentos_estabelecimentoId`) REFERENCES `estabelecimentos` (`estabelecimentoId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_reserva_perfis1` FOREIGN KEY (`perfis_perfilId`) REFERENCES `perfis` (`perfilId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_reservas_quartos1` FOREIGN KEY (`quartos_quartoId`) REFERENCES `quartos` (`quartoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of reservas
-- ----------------------------
INSERT INTO `reservas` VALUES (1, 1, 1, '2021-07-16 14:41:04', '2021-07-17 14:41:14', 1);

-- ----------------------------
-- Table structure for saopedro
-- ----------------------------
DROP TABLE IF EXISTS `saopedro`;
CREATE TABLE `saopedro`  (
  `saopedroId` int(11) NOT NULL AUTO_INCREMENT,
  `saopedroTitulo` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `saopedroURL` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `saopedroDescricao` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`saopedroId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of saopedro
-- ----------------------------
INSERT INTO `saopedro` VALUES (1, 'São Pedro de Moel, uma das aldeias mais lindas do litoral português', 'images/verdois.webp', ' Localizada no Centro de Portugal e a 19 km da turística Nazaré, São Pedro de Moel é uma aldeia de 389 habitantes cercada pelo Pinhal de Leiria e pelo Oceano Atlântico.\r\n\r\nÉ uma das mais pitorescas praias da costa portuguesa, abrigada numa concha de casario e com excelente localização numa aberta do Pinhal de Leiria, um pouco ao sul da foz da ribeira de Moel. A praia pequena, limitada pelo norte por rochas abruptas, e ao sul por um pequeno ribeiro. Não tem boas condições para a prática de desportos náuticos, pois o mar é geralmente agitado. Praticam-se outros desportos como o voleibol de praia e o ténis. Corre-se e passeia-se de bicicleta ao longo da \"Volta dos Cinco\". Junto ao farol pratica-se a pesca desportiva e a submarina, já que a Norte da praia de São Pedro existem rochedos mariscados que atraem diversas espécies de peixes, tais como sargo, robalo, safio e dourada que, a par dos mariscos, são habituais à mesa dos restaurantes de São Pedro de Moel. Os hotéis e a magnífica piscina oceânica sobre a praia são pontos de referência turística. Ao entardecer as esplanadas e um admirável pôr-do-sol anunciam o ambiente elegante, cosmopolita e animado das noites de S. Pedro de Moel.');

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
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of setores
-- ----------------------------
INSERT INTO `setores` VALUES (1, 'Eventos', 'images/1a.jpg', 3);
INSERT INTO `setores` VALUES (2, 'Lendas ', 'images/1a.jpg', 3);

-- ----------------------------
-- Table structure for termos
-- ----------------------------
DROP TABLE IF EXISTS `termos`;
CREATE TABLE `termos`  (
  `termoId` int(11) NOT NULL AUTO_INCREMENT,
  `termoTitulo` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `termoInfo` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pagtermos_pagtermoId` int(11) NOT NULL,
  PRIMARY KEY (`termoId`) USING BTREE,
  INDEX `fk_termos_pagtermos1_idx`(`pagtermos_pagtermoId`) USING BTREE,
  CONSTRAINT `fk_termos_pagtermos1` FOREIGN KEY (`pagtermos_pagtermoId`) REFERENCES `pagtermos` (`pagtermoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of termos
-- ----------------------------
INSERT INTO `termos` VALUES (2, '2.Conteúdos e garantias', ' <p>Não obstante, o utilizador concorda em não transmitir a este website nenhum conteúdo ilícito,\r\n                ameaçador, acusatório, difamatório, obsceno, escandaloso, pornográfico ou profano, ou\r\n                qualquer outro conteúdo que possa constituir ou encorajar conduta que viole alguma lei. A\r\n                CMMG cooperará plenamente com quaisquer autoridades competentes para a aplicação da lei ou\r\n                despacho de tribunal solicitando ou ordenando à CMMG que revele a identidade ou ajude a\r\n                identificar ou localizar qualquer pessoa que transmita tal conteúdo.</p>', 1);
INSERT INTO `termos` VALUES (3, 'ffff', 'ss', 1);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userPassword` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userState` enum('pendente','ativo','inativo') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ativo',
  `userType` enum('user','admin','member') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`userId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Pedro', '123', 'ativo', 'member');
INSERT INTO `users` VALUES (2, 'ANA', '202cb962ac59075b964b07152d234b70', 'ativo', 'user');
INSERT INTO `users` VALUES (3, 'ANA', '202cb962ac59075b964b07152d234b70', 'pendente', 'user');
INSERT INTO `users` VALUES (4, 'ppp', '202cb962ac59075b964b07152d234b70', 'pendente', 'user');
INSERT INTO `users` VALUES (5, 'JK', '202cb962ac59075b964b07152d234b70', 'pendente', 'user');
INSERT INTO `users` VALUES (6, 'JK', 'd81f9c1be2e08964bf9f24b15f0e4900', 'pendente', 'user');
INSERT INTO `users` VALUES (7, 'JKr', '4b43b0aee35624cd95b910189b3dc231', 'pendente', 'user');
INSERT INTO `users` VALUES (8, 'erica', '202cb962ac59075b964b07152d234b70', 'pendente', 'user');
INSERT INTO `users` VALUES (9, 'mj', '202cb962ac59075b964b07152d234b70', 'pendente', 'user');
INSERT INTO `users` VALUES (10, 'lll', '202cb962ac59075b964b07152d234b70', 'pendente', 'user');
INSERT INTO `users` VALUES (11, 'm123', '202cb962ac59075b964b07152d234b70', 'ativo', 'admin');
INSERT INTO `users` VALUES (12, 'h', 'c4ca4238a0b923820dcc509a6f75849b', 'ativo', 'admin');

SET FOREIGN_KEY_CHECKS = 1;
