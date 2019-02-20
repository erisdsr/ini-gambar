/*
 Navicat Premium Data Transfer

 Source Server         : INIGAMBAR
 Source Server Type    : MariaDB
 Source Server Version : 100308
 Source Host           : db.tepuntal.com:3306
 Source Schema         : inigambar

 Target Server Type    : MariaDB
 Target Server Version : 100308
 File Encoding         : 65001

 Date: 20/02/2019 18:31:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for player
-- ----------------------------
DROP TABLE IF EXISTS `player`;
CREATE TABLE `player` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `score` bigint(20) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for quiz
-- ----------------------------
DROP TABLE IF EXISTS `quiz`;
CREATE TABLE `quiz` (
  `id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of quiz
-- ----------------------------
BEGIN;
INSERT INTO `quiz` VALUES ('1550385870', 'aef450c465794ce348ba22991aafdaa9.jpeg', 'lari cepat');
INSERT INTO `quiz` VALUES ('1550400355', '460fe4ff7402fef8cdf71cafd24e6893.png', 'sila pertama');
INSERT INTO `quiz` VALUES ('1550400386', 'e9e67502f143ed47cb612d3c2d0f0e4a.png', 'saling hormat');
INSERT INTO `quiz` VALUES ('1550400396', '984b469025f60574615388364465268f.png', 'enam agama');
INSERT INTO `quiz` VALUES ('1550400405', 'c4a3f5d79ec6083ba85364355dc41497.png', 'bintang emas');
INSERT INTO `quiz` VALUES ('1550400415', '06ade5312988cf3da8f35cbf64bf7579.png', 'memeluk agama');
COMMIT;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
BEGIN;
INSERT INTO `user` VALUES (3, 'adit', '486b6c6b267bc61677367eb6b6458764', 1);
INSERT INTO `user` VALUES (5, 'galih', '027dc74f0bbf09a61a36ec7f0d9e08ca', 1);
INSERT INTO `user` VALUES (7, 'erisdsr', 'bf884d3cc344f1b87b4bae1f594783c6', 0);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
