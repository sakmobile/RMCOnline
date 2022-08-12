/*
 Navicat Premium Data Transfer

 Source Server         : Webserver
 Source Server Type    : MySQL
 Source Server Version : 80023
 Source Host           : 192.168.201.225:3306
 Source Schema         : rmc801_db_mysql

 Target Server Type    : MySQL
 Target Server Version : 80023
 File Encoding         : 65001

 Date: 12/08/2022 09:08:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for way
-- ----------------------------
DROP TABLE IF EXISTS `way`;
CREATE TABLE `way`  (
  `auto` int NOT NULL AUTO_INCREMENT,
  `WAY_NAME` varchar(50) CHARACTER SET tis620 COLLATE tis620_thai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`auto`) USING BTREE,
  UNIQUE INDEX `auto`(`auto`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 12 CHARACTER SET = tis620 COLLATE = tis620_thai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of way
-- ----------------------------
INSERT INTO `way` VALUES (1, '11 - ตกลงราคา');
INSERT INTO `way` VALUES (2, '12 - สอบราคา');
INSERT INTO `way` VALUES (3, '13 - โครงการเงินกู้');
INSERT INTO `way` VALUES (4, '14 - บริจาค');
INSERT INTO `way` VALUES (5, '15 - ไม่รู้ที่มา');
INSERT INTO `way` VALUES (6, '16 - เงินประกันสังคม');
INSERT INTO `way` VALUES (7, '17 - เงินสวัสดิการ');
INSERT INTO `way` VALUES (8, '18 - มาพร้อม CT');
INSERT INTO `way` VALUES (9, '19 - รับโอนจากกองโรคเอดส์');
INSERT INTO `way` VALUES (10, '20 - กองทุน รพ.');
INSERT INTO `way` VALUES (11, '21 - เงินสสนับสนุนจากองค์กรบริหารส่วนท้องถิ่น');

SET FOREIGN_KEY_CHECKS = 1;
