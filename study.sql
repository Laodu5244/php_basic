/*
 Navicat Premium Data Transfer

 Source Server         : study
 Source Server Type    : MySQL
 Source Server Version : 80012
 Source Host           : localhost:3388
 Source Schema         : study

 Target Server Type    : MySQL
 Target Server Version : 80012
 File Encoding         : 65001

 Date: 11/12/2022 00:45:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `age` int(3) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, '刘能', 35);

-- ----------------------------
-- Table structure for fruit
-- ----------------------------
DROP TABLE IF EXISTS `fruit`;
CREATE TABLE `fruit`  (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `fruit` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10, 2) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `fruit`(`fruit`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of fruit
-- ----------------------------
INSERT INTO `fruit` VALUES (1, '苹果', 3.50);
INSERT INTO `fruit` VALUES (2, '香蕉', 5.98);
INSERT INTO `fruit` VALUES (3, '李子', 6.00);
INSERT INTO `fruit` VALUES (4, '桔子', 4.00);
INSERT INTO `fruit` VALUES (5, '鸭梨', 2.68);
INSERT INTO `fruit` VALUES (6, '葡萄', 12.00);
INSERT INTO `fruit` VALUES (7, '樱桃', 12.50);
INSERT INTO `fruit` VALUES (8, '车厘子', 18.50);
INSERT INTO `fruit` VALUES (9, '榴莲', 28.50);
INSERT INTO `fruit` VALUES (10, '杏子', 2.50);
INSERT INTO `fruit` VALUES (11, '龙眼', 10.00);
INSERT INTO `fruit` VALUES (12, '提子', 6.00);
INSERT INTO `fruit` VALUES (13, '柚子', 6.00);
INSERT INTO `fruit` VALUES (14, '西红柿', 2.00);
INSERT INTO `fruit` VALUES (15, '蟠桃', 3.00);
INSERT INTO `fruit` VALUES (16, '油桃', 4.00);
INSERT INTO `fruit` VALUES (17, '水蜜桃', 5.00);
INSERT INTO `fruit` VALUES (18, '猕猴桃', 6.00);

-- ----------------------------
-- Table structure for hobby
-- ----------------------------
DROP TABLE IF EXISTS `hobby`;
CREATE TABLE `hobby`  (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `hobby` varchar(24) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hobby
-- ----------------------------
INSERT INTO `hobby` VALUES (2, '看书');
INSERT INTO `hobby` VALUES (1, '弹琴');
INSERT INTO `hobby` VALUES (3, '打代码');
INSERT INTO `hobby` VALUES (4, '吹牛');
INSERT INTO `hobby` VALUES (5, '玩游戏');
INSERT INTO `hobby` VALUES (6, '得瑟');
INSERT INTO `hobby` VALUES (7, 'php');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `create_time` datetime NOT NULL DEFAULT '2022-01-01 00:00:00',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username` ASC) USING BTREE,
  UNIQUE INDEX `email`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (2, '永强', '123123', '男', 'yongqiang@qq.com', 1, '2022-12-08 19:03:32');
INSERT INTO `user` VALUES (4, '刘英', '123123', '女', 'liuying@163.com', 0, '2022-12-08 19:04:57');
INSERT INTO `user` VALUES (6, '王小蒙', '123123', '女', 'xiaomeng@qq.com', 1, '2022-12-08 19:05:27');
INSERT INTO `user` VALUES (7, '陈艳楠', '123123', '女', 'yannan@qq.com', 0, '2022-12-08 19:05:53');
INSERT INTO `user` VALUES (8, '谢大脚', '123123', '女', 'dajiao@163.com', 1, '2022-12-08 19:06:08');
INSERT INTO `user` VALUES (9, '刘能', '123123', '男', 'liuneng@qq.com', 1, '2022-12-08 19:06:46');
INSERT INTO `user` VALUES (10, '赵玉田', '123123', '男', 'yutian@163.com', 0, '2022-12-08 19:07:05');
INSERT INTO `user` VALUES (11, '王长贵', '123123', '男', 'changgui@qq.com', 1, '2022-12-08 19:07:35');
INSERT INTO `user` VALUES (12, '皮长山', '123123', '男', 'changshan@163.com', 1, '2022-12-08 19:07:55');
INSERT INTO `user` VALUES (13, '谢兰', '123123', '男', 'xielan@qq.com', 1, '2022-12-08 19:08:09');
INSERT INTO `user` VALUES (16, '香秀', '123123', '女', 'xiangxiu@qq.com', 1, '2022-12-08 19:09:36');
INSERT INTO `user` VALUES (18, '李大国', '123123', '男', 'daguo@qq.com', 1, '2022-12-08 19:10:33');
INSERT INTO `user` VALUES (19, '杨晓燕', '123321', '男', 'xiaoyan@qq.com', 1, '2022-12-09 12:11:24');
INSERT INTO `user` VALUES (20, '李秋歌', '123321', '女', 'qiuge@qq.com', 1, '2022-12-09 13:03:41');
INSERT INTO `user` VALUES (25, '赵四', '601f1889667efaebb33b8c12572835da3f027f78', '男', 'zhaosi@qq.com', 1, '2022-12-09 22:08:43');

SET FOREIGN_KEY_CHECKS = 1;
