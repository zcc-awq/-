/*
Navicat MySQL Data Transfer

Source Server         : Centos
Source Server Version : 50616
Source Host           : 192.168.137.10:3306
Source Database       : library

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2017-04-10 10:11:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'root', '123456', '13015923452', '北京');
INSERT INTO `admin` VALUES ('2', 'admin', '123456', '13235673456', '上海');
INSERT INTO `admin` VALUES ('3', 'wyy', '123456', '13110597029', '厦门');

-- ----------------------------
-- Table structure for `books`
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(5,2) NOT NULL,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of books
-- ----------------------------
INSERT INTO `books` VALUES ('1', '西游记', '吴承恩', '35.00', '1');
INSERT INTO `books` VALUES ('2', '红楼梦', '曹雪芹', '45.00', '1');
INSERT INTO `books` VALUES ('3', '水浒传', '施耐庵', '46.00', '1');
INSERT INTO `books` VALUES ('4', '三国演义', '罗贯中', '60.00', '1');
INSERT INTO `books` VALUES ('5', '红星星', '媛媛', '36.00', '1');
INSERT INTO `books` VALUES ('6', '西西游', '沃尔', '12.00', '1');
INSERT INTO `books` VALUES ('7', '西梦星', '冷风', '32.00', '1');
INSERT INTO `books` VALUES ('8', '前秦梦', '菲儿', '23.00', '1');
INSERT INTO `books` VALUES ('9', '安安梦', '乐乐', '23.00', '1');
INSERT INTO `books` VALUES ('10', '蜀黍嗨', '浅浅', '34.00', '1');

-- ----------------------------
-- Table structure for `record`
-- ----------------------------
DROP TABLE IF EXISTS `record`;
CREATE TABLE `record` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usersid` int(10) NOT NULL,
  `booksid` int(10) NOT NULL,
  `borrowtime` date NOT NULL,
  `returntime` date DEFAULT NULL,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of record
-- ----------------------------
INSERT INTO `record` VALUES ('1', '2', '1', '2017-03-02', '2017-04-08', '1');
INSERT INTO `record` VALUES ('2', '1', '1', '2017-04-04', '2017-04-08', '1');
INSERT INTO `record` VALUES ('3', '1', '1', '2017-04-08', '2017-04-08', '1');
INSERT INTO `record` VALUES ('4', '1', '1', '2017-04-08', '2017-04-08', '1');
INSERT INTO `record` VALUES ('5', '1', '2', '2017-04-08', '2017-04-09', '1');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=234 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '张三', '男', '123456897');
INSERT INTO `users` VALUES ('2', '李四', '男', '123456876');
INSERT INTO `users` VALUES ('3', '王五', '男', '123456789');
INSERT INTO `users` VALUES ('4', '赵红', '女', '123456544');
INSERT INTO `users` VALUES ('5', '夜华', '男', '123454656');
INSERT INTO `users` VALUES ('6', '王凯', '男', '123456');
INSERT INTO `users` VALUES ('12', 'we', 'vc', '234');
INSERT INTO `users` VALUES ('233', '3334', 'vb', '123444');
