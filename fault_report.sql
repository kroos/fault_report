/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MariaDB
 Source Server Version : 100313
 Source Host           : localhost:3306
 Source Schema         : fault_report

 Target Server Type    : MariaDB
 Target Server Version : 100313
 File Encoding         : 65001

 Date: 01/07/2019 14:40:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for buildings
-- ----------------------------
DROP TABLE IF EXISTS `buildings`;
CREATE TABLE `buildings`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `building` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of buildings
-- ----------------------------
INSERT INTO `buildings` VALUES (1, 'MCB601', NULL, '2019-06-20 11:50:45', '2019-06-20 11:50:48');
INSERT INTO `buildings` VALUES (2, 'MCB602', NULL, '2019-06-20 11:50:45', '2019-06-20 11:50:45');

-- ----------------------------
-- Table structure for faults
-- ----------------------------
DROP TABLE IF EXISTS `faults`;
CREATE TABLE `faults`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NULL DEFAULT NULL,
  `date` date NULL DEFAULT NULL,
  `building_id` int(11) NULL DEFAULT NULL,
  `subsystem` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `issue` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `solution` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `active` tinyint(255) NULL DEFAULT NULL,
  `remarks` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of faults
-- ----------------------------
INSERT INTO `faults` VALUES (1, 1, '2019-06-26', 1, 'qweqwe', 'cvbcvb', 'zxczxc', 1, NULL, '2019-06-26 03:40:34', '2019-06-30 02:52:44');

-- ----------------------------
-- Table structure for faults_attendees
-- ----------------------------
DROP TABLE IF EXISTS `faults_attendees`;
CREATE TABLE `faults_attendees`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fault_id` int(11) NULL DEFAULT NULL,
  `attendees_id` int(255) NULL DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of faults_attendees
-- ----------------------------
INSERT INTO `faults_attendees` VALUES (2, 1, 1, NULL, '2019-06-29 07:20:23', '2019-06-29 07:20:23');

-- ----------------------------
-- Table structure for faults_device_tags
-- ----------------------------
DROP TABLE IF EXISTS `faults_device_tags`;
CREATE TABLE `faults_device_tags`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fault_id` int(11) NULL DEFAULT NULL,
  `device_tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of faults_device_tags
-- ----------------------------
INSERT INTO `faults_device_tags` VALUES (3, 1, '890', NULL, '2019-06-29 07:20:23', '2019-06-30 02:52:45');
INSERT INTO `faults_device_tags` VALUES (10, 1, '123', NULL, '2019-06-29 07:21:01', '2019-06-29 07:21:01');
INSERT INTO `faults_device_tags` VALUES (11, 1, '890', NULL, '2019-06-29 07:58:45', '2019-06-29 07:58:45');

-- ----------------------------
-- Table structure for faults_images
-- ----------------------------
DROP TABLE IF EXISTS `faults_images`;
CREATE TABLE `faults_images`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fault_id` int(11) NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of faults_images
-- ----------------------------
INSERT INTO `faults_images` VALUES (7, 1, 'images/fault/MUeLJkskyuge28GppAd7MsOJB1jG0eOdoRy2hIcP.jpeg', NULL, '2019-06-30 02:52:45', '2019-06-30 02:52:45');
INSERT INTO `faults_images` VALUES (8, 1, 'images/fault/mwoRH7VXWCbrum25VzQkig3ogBSDCrWi9iiy6DWQ.jpeg', NULL, '2019-06-30 02:52:45', '2019-06-30 02:52:45');
INSERT INTO `faults_images` VALUES (9, 1, 'images/fault/bxmwstktyxecg0YTFEPlWNCqYg8AasnE5QGQWlmQ.jpeg', NULL, '2019-06-30 02:52:45', '2019-06-30 02:52:45');

-- ----------------------------
-- Table structure for faults_systems
-- ----------------------------
DROP TABLE IF EXISTS `faults_systems`;
CREATE TABLE `faults_systems`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fault_id` int(11) NULL DEFAULT NULL,
  `system_id` int(11) NULL DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of faults_systems
-- ----------------------------
INSERT INTO `faults_systems` VALUES (2, 1, 4, NULL, '2019-06-27 10:11:40', '2019-06-27 10:11:40');
INSERT INTO `faults_systems` VALUES (7, 1, 3, NULL, '2019-06-27 10:13:54', '2019-06-27 10:13:54');

-- ----------------------------
-- Table structure for labels
-- ----------------------------
DROP TABLE IF EXISTS `labels`;
CREATE TABLE `labels`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `value` tinyint(255) NULL DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of labels
-- ----------------------------
INSERT INTO `labels` VALUES (1, 'Yes', 1, NULL, '2018-12-03 10:21:57', '2018-12-03 10:21:57');
INSERT INTO `labels` VALUES (2, 'No', 0, NULL, '2018-12-03 10:21:57', '2018-12-03 10:21:57');

-- ----------------------------
-- Table structure for logins
-- ----------------------------
DROP TABLE IF EXISTS `logins`;
CREATE TABLE `logins`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NULL DEFAULT NULL,
  `username` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `password` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `remember_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `active` tinyint(1) NULL DEFAULT 1,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `staff_id`(`staff_id`) USING BTREE,
  INDEX `username`(`username`) USING BTREE,
  CONSTRAINT `logins_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of logins
-- ----------------------------
INSERT INTO `logins` VALUES (1, 1, 'PRO0007', '$2y$10$3JbzyL.tNYzGiImKe4JG8.FdYyqe7KEJBPIa8Sf4.3YAYgCD4WViK', 'IUdnaOHDCQIGWq2CxgeEMSZd3TW9pCYHmNDos2PM16gaLDal88kRQdA5u0xw', 1, '2019-06-13 16:58:12', '2019-06-30 07:09:45');
INSERT INTO `logins` VALUES (2, 2, 'PET01580', '$2y$10$rprZ9p7Ww5NrUwaKqCEbS.rQd6SVBbih6MR6MeGckR1KTL37wNDfe', NULL, 1, '2019-06-29 15:47:31', '2019-06-29 15:47:31');
INSERT INTO `logins` VALUES (3, 3, 'PET03869', '$2y$10$rprZ9p7Ww5NrUwaKqCEbS.rQd6SVBbih6MR6MeGckR1KTL37wNDfe', NULL, 1, '2019-06-29 15:47:31', '2019-06-29 15:47:31');
INSERT INTO `logins` VALUES (4, 4, 'OUI34912', '$2y$10$rprZ9p7Ww5NrUwaKqCEbS.rQd6SVBbih6MR6MeGckR1KTL37wNDfe', NULL, 1, '2019-06-29 15:47:31', '2019-06-29 15:47:31');
INSERT INTO `logins` VALUES (5, 5, 'OUI47180', '$2y$10$rprZ9p7Ww5NrUwaKqCEbS.rQd6SVBbih6MR6MeGckR1KTL37wNDfe', NULL, 1, '2019-06-29 15:47:31', '2019-06-29 15:47:31');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('dhiauddin@protellus.com.my', 'ePkJPpBWbznEairjxlvJU3H7SPWwyeEF', '2019-06-18 03:04:07', '2019-06-18 03:04:07');
INSERT INTO `password_resets` VALUES ('dhiauddin@protellus.com.my', 'cQ6Biy2OOCU3PmWudeAwoacYXJ0W5XrW', '2019-06-18 05:20:30', '2019-06-18 05:20:30');
INSERT INTO `password_resets` VALUES ('dhiauddin@protellus.com.my', 'ozVB9CpjJTf7P5u6fTk6isPLiOdmE0JC', '2019-06-18 06:20:34', '2019-06-18 06:20:34');
INSERT INTO `password_resets` VALUES ('dhiauddin@protellus.com.my', 'qbarE745MYz9Dyeh0avWmaHtsQkIp9dm', '2019-06-19 16:44:37', '2019-06-19 16:44:37');
INSERT INTO `password_resets` VALUES ('dhiauddin@protellus.com.my', 'HhS0sBUMDjz8pJDH4SfcvRKNQSRLHXxV', '2019-06-19 16:45:34', '2019-06-19 16:45:34');

-- ----------------------------
-- Table structure for staffs
-- ----------------------------
DROP TABLE IF EXISTS `staffs`;
CREATE TABLE `staffs`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `active` tinyint(1) NULL DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of staffs
-- ----------------------------
INSERT INTO `staffs` VALUES (1, NULL, 'Noor Dhiauddin Karim', 'dhiauddin@protellus.com.my', '0196792139', 1, NULL, '2019-06-13 23:43:59', '2019-06-30 09:08:36');
INSERT INTO `staffs` VALUES (2, NULL, 'Aswan Nor Hairis Che Omar', 'aswannorhairis.che@petronas.com', '0193136566', 1, NULL, '2019-06-29 15:30:21', '2019-06-29 15:30:21');
INSERT INTO `staffs` VALUES (3, NULL, 'M Faisal Abu Bakar', 'mfaisal.abubaka@petronas.com', '0127161979', 1, NULL, '2019-06-29 15:30:21', '2019-06-29 15:30:21');
INSERT INTO `staffs` VALUES (4, NULL, 'Norhisham Laham', 'norhisham@protellus.com.my', '0132582123', 1, NULL, '2019-06-29 15:52:46', '2019-06-29 15:52:46');
INSERT INTO `staffs` VALUES (5, NULL, 'Stavehogan A/K John Little', 'stave@protellus.com.my', '01116011045', 1, NULL, '2019-06-29 15:52:46', '2019-06-29 15:52:46');

-- ----------------------------
-- Table structure for systems
-- ----------------------------
DROP TABLE IF EXISTS `systems`;
CREATE TABLE `systems`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `system` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of systems
-- ----------------------------
INSERT INTO `systems` VALUES (1, 'FON', NULL, '2019-06-20 11:56:07', '2019-06-20 11:56:07');
INSERT INTO `systems` VALUES (2, 'PAGA', NULL, '2019-06-20 11:56:07', '2019-06-20 11:56:07');
INSERT INTO `systems` VALUES (3, 'DTRS', NULL, '2019-06-20 11:56:07', '2019-06-20 11:56:07');
INSERT INTO `systems` VALUES (4, 'CCTV', NULL, '2019-06-20 11:56:07', '2019-06-20 11:56:07');
INSERT INTO `systems` VALUES (5, 'ECO & Hotline', NULL, '2019-06-20 11:56:07', '2019-06-20 11:56:07');
INSERT INTO `systems` VALUES (6, 'RVS', NULL, '2019-06-20 11:56:07', '2019-06-20 11:56:07');
INSERT INTO `systems` VALUES (7, 'WMS', NULL, '2019-06-20 11:56:07', '2019-06-20 11:56:07');
INSERT INTO `systems` VALUES (8, 'GCS', NULL, '2019-06-20 11:56:07', '2019-06-20 11:56:07');
INSERT INTO `systems` VALUES (9, 'OTL', NULL, '2019-06-20 11:56:07', '2019-06-20 11:56:07');

SET FOREIGN_KEY_CHECKS = 1;
