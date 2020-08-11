/*
 Navicat Premium Data Transfer

 Source Server         : prpctelecommania.com
 Source Server Type    : MySQL
 Source Server Version : 100323
 Source Host           : 127.0.0.1:3306
 Source Schema         : prpcdxws_fault_report

 Target Server Type    : MySQL
 Target Server Version : 100323
 File Encoding         : 65001

 Date: 12/08/2020 01:01:40
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
) ENGINE = InnoDB AUTO_INCREMENT = 201 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of buildings
-- ----------------------------
INSERT INTO `buildings` VALUES (1, 'MCB-601', NULL, '2019-06-20 11:50:45', '2019-06-20 11:50:48');
INSERT INTO `buildings` VALUES (2, 'MCB-602', NULL, '2019-06-20 11:50:45', '2019-06-20 11:50:45');
INSERT INTO `buildings` VALUES (3, 'FAR-630', NULL, '2019-07-01 16:27:16', '2019-07-01 16:27:16');
INSERT INTO `buildings` VALUES (5, '6750-FAR-131', NULL, '2019-07-06 07:53:34', '2019-07-06 07:53:34');
INSERT INTO `buildings` VALUES (6, 'SUB-552', NULL, '2019-07-09 00:29:35', '2019-07-09 00:29:35');
INSERT INTO `buildings` VALUES (7, '6750-FAR-475', NULL, '2019-07-17 06:58:08', '2019-07-17 06:58:08');
INSERT INTO `buildings` VALUES (8, '8810-BLD-810', NULL, '2019-07-31 09:19:48', '2019-07-31 09:19:48');
INSERT INTO `buildings` VALUES (9, '8330-MWB-801', NULL, '2019-08-03 06:17:51', '2019-08-03 06:17:51');
INSERT INTO `buildings` VALUES (10, 'LCR-485', NULL, '2019-08-03 06:18:22', '2019-08-03 06:18:22');
INSERT INTO `buildings` VALUES (11, '8310-LBB-804', NULL, '2019-08-03 06:18:30', '2019-08-03 06:18:30');
INSERT INTO `buildings` VALUES (12, 'OSB-361', NULL, '2019-08-03 06:18:43', '2019-08-03 06:18:43');
INSERT INTO `buildings` VALUES (13, '8810-GHB-804', NULL, '2019-08-03 06:19:00', '2019-08-03 06:19:00');
INSERT INTO `buildings` VALUES (14, '6750-FAR-420', NULL, NULL, NULL);
INSERT INTO `buildings` VALUES (15, '6750-FAR-472', NULL, NULL, NULL);
INSERT INTO `buildings` VALUES (24, '4120-BLD-401', NULL, NULL, NULL);
INSERT INTO `buildings` VALUES (26, '6900-CMH-801', NULL, NULL, NULL);
INSERT INTO `buildings` VALUES (27, '6760-OSB-401', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (28, '6760-OSB-403', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (29, '6810-SUB-402', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (30, '6850-SUB-420', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (31, '6850-SUB-472', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (32, '4120-SHL-401', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (33, '6750-FAR-480', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (34, '4110-BLD-401', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (35, '6810-SUB-401', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (36, '6850-SUB-480', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (37, '6850-SUB-475', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (38, '6760-OSB-405', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (39, '4130-BLD-401', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (40, '4130-BLD-402', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (41, '6720-LCB-839', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (42, '6850-SUB-839', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (43, '8390-CFS-802', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (44, '8810-GHB-803', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (45, '8810-BLD-811', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (46, '8810-GHB-809', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (47, '8810-GHB-810', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (48, '6850-SUB-551', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (49, '5510-CSB-501', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (50, '8835-BLD-802', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (51, '6850-SUB-622', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (52, '4140-BLD-401', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (53, '8310-LBB-801', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (54, '8310-LBB-802', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (55, '8310-LBB-803', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (56, '8310-LBB-804', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (57, '8330-MWB-802', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (58, '8370-WHB-801', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (59, '8520-BLD-802', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (60, '8390-CFS-801', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (61, '6850-SUB-831', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (62, '6850-SUB-811', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (63, '8835-BLD-801', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (64, '8810-GHB-811', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (65, '8810-SHL-801', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (66, '6850-SUB-841', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (67, '8810-GHB-801', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (68, '8810-GHB-802', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (69, '8810-BLD-802', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (70, '6810-SUB-101', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (71, '6810-SUB-102', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (72, '6760-OSB-102', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (73, '6760-OSB-104', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (74, '6810-SUB-301', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (75, '6810-SUB-302', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (76, '6900-CMH-120', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (77, '6900-CMH-180', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (78, '6900-CMH-802', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (79, '6900-CMH-921', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (80, '3900-CMH-101', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (81, '3900-CMH-103', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (82, '3900-CMH-128', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (83, '3900-CMH-440', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (84, '3900-CMH-680', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (85, '3900-CMH-780', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (86, '3900-CMH-912', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (87, '6750-FAR-132', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (88, '6850-SUB-131', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (89, '6850-SUB-132', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (90, '1330-ANH-101', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (91, '6750-FAR-111', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (92, '6750-FAR-121', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (93, '6750-FAR-122', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (94, '6850-SUB-111', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (95, '6850-SUB-121', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (96, '6850-SUB-122', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (97, '6850-SUB-152', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (98, '6760-OSB-101', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (99, '6750-FAR-123', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (100, '6750-FAR-142', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (101, '6750-FAR-151', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (102, '1900-CMH-111', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (103, '6760-OSB-103', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (104, '6760-OSB-105', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (105, '1510-ANH-101', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (106, '1510-ANH-102', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (107, '1511-ANH-101', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (108, '1512-ANH-101', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (109, '1513-ANH-101', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (110, '1900-ANH-111', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (111, '6850-SUB-112', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (112, '6850-SUB-123', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (113, '6850-SUB-143', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (114, '6850-SUB-151', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (115, '6750-FAR-171', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (116, '6720-LCB-174', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (117, '6850-SUB-161', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (118, '6850-SUB-171', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (119, '6850-SUB-173', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (120, '6760-OSB-106', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (121, '1710-ANS-101', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (122, '1710-ANS-102', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (123, '6750-FAR-210', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (124, '6750-FAR-240', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (125, '6750-FAR-521', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (126, '6850-SUB-210', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (127, '6850-SUB-240', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (128, '6850-SUB-473', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (129, '6850-SUB-521', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (130, '6760-OSB-201', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (131, '2100-ANH-211', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (132, '2100-ANH-213', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (133, '2100-ANH-214', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (134, '2100-ANH-215', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (135, '2100-ANH-216', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (136, '2100-ANH-217', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (137, '2400-ANH-241', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (138, '2600-ANH-261', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (139, '3420-ANH-341', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (140, '6750-FAR-320', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (141, '6750-FAR-530', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (142, '6850-SUB-320', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (143, '6850-SUB-530', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (144, '6760-OSB-301', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (145, '3200-ANH-301', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (146, '3200-ANH-302', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (147, '3200-ANH-303', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (148, '3200-CSB-301', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (149, '3200-CSB-302', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (150, '6750-FAR-330', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (151, '6850-SUB-330', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (152, '6850-SUB-331', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (153, '6750-FAR-322', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (154, '6750-FAR-523', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (155, '6850-SUB-322', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (156, '6850-SUB-523', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (157, '6760-OSB-304', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (158, '3220-ANH-301', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (159, '3220-ANH-302', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (160, '6720-LCR-555', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (161, '6850-SUB-555', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (162, '5550-BLD-551', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (163, '5550-BLD-552', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (164, '5550-BLD-553', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (165, '7510-BLD-701', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (166, '7510-BLD-702', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (167, '7510-BLD-703', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (168, '7510-BLD-704', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (169, '7510-BLD-705', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (170, '6850-SUB-750', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (171, '6850-SUB-751', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (172, '5310-WPB-531', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (173, '7510-SHL-756', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (174, '7510-MOB-750', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (175, '7510-GHB-751', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (176, '7510-GHB-752', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (177, '7510-CMB-750', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (178, '6750-FAR-630', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (179, '6760-OSB-402', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (180, '6850-SUB-631', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (181, '6850-SUB-632', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (182, '6720-LCB-485', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (183, '6850-SUB-485', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (184, '6750-FAR-511', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (185, '6750-FAR-515', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (186, '6750-FAR-519', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (187, '6850-SUB-511', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (188, '6850-SUB-512', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (189, '6850-SUB-513', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (190, '6760-OSB-501', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (191, '5170-ANH-501', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (192, '6750-FAR-321', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (193, '6850-SUB-321', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (194, '3215-ANH-301', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (195, '3215-ANH-302', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (196, '3215-ANH-303', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (197, '3215-CSB-310', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (198, '3215-CSB-320', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (199, '6710-MCB-604', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');
INSERT INTO `buildings` VALUES (200, '6850-SUB-361', NULL, '2019-08-09 10:24:20', '2019-08-09 10:24:23');

-- ----------------------------
-- Table structure for faults
-- ----------------------------
DROP TABLE IF EXISTS `faults`;
CREATE TABLE `faults`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NULL DEFAULT NULL,
  `date` datetime(0) NULL DEFAULT NULL,
  `priority_id` int(11) NOT NULL,
  `dateline` date NOT NULL,
  `building_id` int(11) NULL DEFAULT NULL,
  `subsystem` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `issue` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `solution` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status_id` int(11) NOT NULL,
  `active` tinyint(255) NULL DEFAULT NULL,
  `remarks` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 57 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of faults
-- ----------------------------
INSERT INTO `faults` VALUES (2, 1, '2019-07-01 00:00:00', 2, '2019-07-01', 3, 'edge switch', 'Findings showed that the whole area of 16A OTL is having engaged tone. due to the findings, edge switch cant be remote to access it. Both of the uplink port of edge switch is blinking with amber.', 'Accessing edge switch directly. From the configuration of the port 1 and 2 uplink of the edge switch, we found that the configuration have been replaced with errors. The new configuration replaced the wrong VLAN for both port 1 and 2.\r\nthis happen on 26th June 2019 according to the syslog of the effected switch.', 2, 1, NULL, '2019-07-01 08:47:54', '2019-07-02 02:03:18');
INSERT INTO `faults` VALUES (10, 7, '2019-07-06 00:00:00', 1, '2019-07-06', 2, 'None', 'Complaint received from operation team regarding DTRS Low-No coverage. Time complaint: 1453 hrs. Unable to communicate using Fixed Radio & Portable Handheld Radio inside CCR-204 and surrounding area.', 'Email to P-14 iU&I team regarding the matter for their action. DTRS package not yet handover to Telecom PRPC UF.', 1, 1, NULL, '2019-07-06 08:11:24', '2019-07-06 08:11:24');
INSERT INTO `faults` VALUES (11, 6, '2019-07-06 00:00:00', 1, '2019-07-06', 5, 'Flammable Gas Alarm Triggered at FAR 131', 'Complaint received from Mr. Zulkepli today, regarding the Flammable Gas Alarm triggered at PAGA ZONE (PAGAZ-REFINERY-6) on 6.7.2019.\r\n\r\nThe Tag alarm not found in FGS HMI.', 'Performed investigation by Wan Cobra (Petronas Tech) & Sapez (Rites), found Flammable Gas Alarm triggered at PAGA ZONE (PAGAZ-REFINERY-6) area.\r\nFound that alarm triggered manually by unknown at PAGA Node Tag No : FAR131-PAG-721 System A (Engineer Panel).\r\n\r\nAlarm reset and all system working fine.', 2, 1, NULL, '2019-07-06 08:43:54', '2019-08-30 00:30:35');
INSERT INTO `faults` VALUES (12, 3, '2019-07-17 14:58:00', 1, '2019-07-17', 7, 'Telephone System', 'Found sounder beacon trigger 3 sec after hand hook off.', 'Need to configure inside Voice Gateway for \"no battery-reversal\"', 2, 1, NULL, '2019-07-17 07:16:57', '2019-07-17 07:37:43');
INSERT INTO `faults` VALUES (13, 1, '2019-07-27 17:20:00', 1, '2019-07-27', 8, 'Workstation', 'Upon opening web browser to retrieve the data, it takes about 15 to 20 minutes to display the data.', 'There is FUGRO apps reside within the workstation of WMS which always make a connection to the server. This to ensure that the server can provide the realtime data to the web server that is accessed by any workstation. This connection can be established by logging at the FUGRO apps.\r\nThis connection from the workstation to the server that is located at the same cabinet can be disconnect when someone remote to the server itself using Remote Desktop.\r\nTo fix this situation, the connection between FUGRO apps and the server need to be established by logging in the WMS workstation at the BLD810.', 2, 1, NULL, '2019-07-31 09:33:58', '2019-07-31 09:33:58');
INSERT INTO `faults` VALUES (14, 1, '2019-08-02 09:30:00', 1, '2019-08-02', 9, 'LAN Cable', 'Workstation cant make a ping. (No network)', 'Theres nothing wrong with the switch. Uplink (FO cable) was healthy (green LED blinking) meanwhile the downlink (CAT6 cable) was unhealthy (no LED blinking at all).  We will see the switch  port is disable due to cross cable.\r\nAfter an investigation, we found out that the patch cable is a cross (twist) cable. We advise them to change/fixed with a straight cable.\r\n\r\nthe downlink cat6 cable is not in our custody.', 2, 1, NULL, '2019-08-03 07:04:41', '2019-08-03 07:17:06');
INSERT INTO `faults` VALUES (15, 1, '2019-08-02 15:30:00', 1, '2019-08-03', 10, 'workstation', 'Workstation infected with virus. Complaint coming in from PETICT.', 'Clean the virus with Malwarebytes.', 2, 1, NULL, '2019-08-03 07:33:03', '2019-08-03 07:33:03');
INSERT INTO `faults` VALUES (16, 4, '2019-08-22 15:20:00', 2, '2019-08-23', 8, 'Dispatcher', 'PR was reported lost by the owner on 15 Aug 2019. M Naim B Khairul Anuar (OPERATIONS/PRPC) \r\nMobile  : 0175088428\r\nISSI        : 1010098\r\nS/N        : 123TTD0811\r\nTel          : 00016C1300932400\r\n                : MCB602-WTR-038\r\n 22 Aug 2019 the PR detected active on the network.\r\nI  did send a text and directly call but no reply from the user.', 'IF still no response from the user, the PR will disable from the network on 23 Aug 2019.', 1, 1, NULL, '2019-08-22 07:31:13', '2019-08-22 07:31:13');
INSERT INTO `faults` VALUES (17, 4, '2019-08-21 15:38:00', 2, '2019-08-23', 8, 'KVL', 'Preparation for KVL implementation.\r\nAttendees:\r\n1. Norhisham Laham\r\n2. Taufiq Haris\r\n3. Remy (Motorola)\r\n4. Hj Zainal....\r\n\r\nRemy integrates the KVL handheld into the AUC server. Setting the ports for AuC and PrC into the AUC server.\r\nUploading the K Key successful via KVL palm.\r\n3 units KVL successfully synchronize with AUC server.\r\nWe did the KVL downloading to PR and it failed, the AUC server didn\'t recognize the PR. after checking we found the PR is not compatible to do the encryption , Firmware is required .\r\nOn BTS side still no syncho between sites and AUC server. Remy able to bring up the BTS into AUC server but required 5 days to do that.', 'Hj Zainal proposed to purchase the Firmware to upload on each PR to  AiE compatible and will request Remy to solve the BTS encryption issue to synchronize between BTS and MSO', 1, 1, NULL, '2019-08-22 07:52:41', '2019-08-26 06:35:14');
INSERT INTO `faults` VALUES (18, 8, '2019-08-22 16:36:00', 2, '2019-09-30', 114, 'SUB151-FON-701 SYSTEM A CABINET FAR6850 SUB151', 'SUB151-FON701 FON SYSYEM CABINET SUB 6850 SUB151\r\n\r\nAP Wireless inside cabinet. ( need to properly install )\r\ncurrently it was place inside FON CABINET front panel)', 'Notification install at panel\r\n\r\nemail by PRPC UF TELECOM to all respective parties to install properly and remove AP wireless device and located properly outside FON Cabinet', 2, 1, NULL, '2019-08-22 08:56:23', '2020-08-05 10:14:21');
INSERT INTO `faults` VALUES (19, 8, '2019-08-22 17:36:00', 2, '2019-09-30', 92, 'FAR121-FON701', 'FAR121-FON701-FON-701 FON SYSTEM CABINET 6750-FAR-121\r\nAP Wireless inside cabinet. ( need to properly install )\r\ncurrently it was place inside FON CABINET REAR )', 'Notification install at FON cabinet\r\n\r\nPRPC TELECOM UF email to all respective party', 2, 1, NULL, '2019-08-22 09:42:35', '2020-08-05 10:10:57');
INSERT INTO `faults` VALUES (20, 8, '2019-08-21 17:50:00', 2, '2019-09-30', 103, 'OSB103-FON-701 FON SYSTEM CABINET', 'OSB103-FON-701 FON SYSTEM CABINET 6760-OSB-103\r\nWireless AP cable lay through panel door frame - FON panel can\'t properly close.', 'Notify respective parties  - install notification', 2, 1, NULL, '2019-08-22 10:00:57', '2020-08-05 10:11:45');
INSERT INTO `faults` VALUES (21, 8, '2019-08-23 07:46:00', 2, '2019-09-30', 111, 'SUB 112 FON 701', 'SUB112-FON-701 FON SYSTEM CABINET 6850 SUB112\r\nAP Wireless inside cabinet. ( need to properly install )\r\ncurrently it was place inside FON CABINET front panel)', 'Notification notice install at the front and rear panel\r\n\r\nPRPC Telecom UF will send email for this notification.\r\n\r\nby 30th September 2019 all illegal patching will be remove.', 2, 1, NULL, '2019-08-22 23:51:16', '2020-08-05 10:11:25');
INSERT INTO `faults` VALUES (22, 1, '2019-08-22 11:00:00', 1, '2019-08-22', 70, 'switch', 'one of the uplink at network module for PIN switch was blinking amber.', 'pull out the LC and plugged it back properly. then its blinking green again.', 2, 1, NULL, '2019-08-24 15:45:28', '2019-08-24 19:03:33');
INSERT INTO `faults` VALUES (23, 8, '2019-08-22 09:35:00', 2, '2019-09-30', 35, '6810-SUB-401 FON 701', 'Temporary FO patchord laid in front of panel.', 'To Inform PIC Electrical UF to make good and replace temporary FO patchord \r\n\r\n#Mr Edwandy  - we need to inform Electrical Department and respective parties involved.\r\ntq', 2, 1, NULL, '2019-08-26 01:43:40', '2020-08-05 10:12:12');
INSERT INTO `faults` VALUES (24, 8, '2019-08-22 09:55:00', 2, '2019-09-30', 39, 'EDG 4130-A FON 702', '4130 FPP 003 - modification FOPP not properly tidy up\r\n- Need to make good all the tagging\r\n-No FOPP tag number\r\n-port cover missing and not install', 'inspection for PL done previously - Need to inform respective parties who install new FOPP', 2, 1, NULL, '2019-08-26 02:25:28', '2020-08-05 10:12:38');
INSERT INTO `faults` VALUES (25, 5, '2019-08-22 15:54:00', 2, '2019-08-22', 37, 'CABLE', 'Relocation of CCTV\r\nwhen do site visit at this involved area, found out that Fiber Optic and Power cable outer shealh damage and cause exposed area rusty at Armoured.\r\nsuspected already damage by previous contractor due to the exposed area already rusty, and when we check with current contractor they said it already been there when they pull out the cable. they also given the picture as our reference.', 'a) To register at MC plus Punchlist\r\nb) Suggest project to pulling new cable', 1, 1, NULL, '2019-08-26 08:14:10', '2019-08-26 08:14:10');
INSERT INTO `faults` VALUES (26, 5, '2019-08-23 16:20:00', 2, '2019-08-23', 44, 'TOWER MAST', 'a) Anti climb plate bolting not tighten properly\r\nb) Between difference metal materials must have a separator such as rubber of taflone to prevent corrosion.\r\nc) Cable tag shall have both at end to end cable.\r\n\"d) Equipment earthing such as cctv, radar, junction box must have another earth bar to attach earth end and\r\n not to structure.\"\r\ne) lighting rod must have a link cable minimum size 70mm directly to earth pit as per mention in PTS.', 'To register at MC plus Punchlist', 1, 1, NULL, '2019-08-26 08:36:41', '2019-08-26 08:41:37');
INSERT INTO `faults` VALUES (27, 5, '2019-08-23 16:38:00', 2, '2019-08-23', 44, 'TOWER MAST', 'a) Anti climb plate bolting not tighten properly\r\nb) Between difference metal materials must have a separator such as rubber of taflone to prevent corrosion.\r\nc) Cable tag shall have both at end to end cable.\r\n\"d) Equipment earthing such as cctv, radar, junction box must have another earth bar to attach earth end and\r\n not to stucture.\"\r\ne) lighting rod must have a link cable minimum size 70mm directly to earth pit as per mention in PTS.', 'To register at MC plus Punchlist', 1, 1, NULL, '2019-08-26 08:41:01', '2019-08-26 08:41:01');
INSERT INTO `faults` VALUES (28, 5, '2019-08-23 16:44:00', 2, '2019-08-23', 67, 'TOWER MAST', 'a) Anti climb plate bolting not tighten properly\r\nb) Between difference metal materials must have a separator such as rubber of taflone to prevent corrosion.\r\nc) Cable tag shall have both at end to end cable.\r\n\"d) Equipment earthing such as cctv, radar, junction box must have another earth bar to attach earth end and\r\n not to stucture.\"\r\ne) lighting rod must have a link cable minimum size 70mm directly to earth pit as per mention in PTS.\r\nf) All outside cable tie shall use Stainless Steal with insulater type of cable ties and not a plastic cable ties.\r\ng) Cable not complete installation\r\nh) Washer system not complete installation', 'To register at MC plus Punchlist', 1, 1, NULL, '2019-08-26 08:46:24', '2019-08-26 08:46:24');
INSERT INTO `faults` VALUES (29, 5, '2019-08-23 16:53:00', 2, '2019-08-23', 67, 'TOWER MAST', 'a) Between difference metal materials must have a separator such as rubber of taflone to prevent corrosion.\r\nb) Cable tag shall have both at end to end cable.\r\n\"c) Equipment earthing such as cctv, radar, junction box must have another earth bar to attach earth end and\r\n not to stucture.\"\r\nd) lighting rod must have a link cable minimum size 70mm directly to earth pit as per mention in PTS.\r\ne) Cable not complete installation\r\nf) opening at mast base shall cover/insulate by foam to prevent water going through.', 'To register at MC plus Punchlist', 1, 1, NULL, '2019-08-26 08:55:34', '2019-08-26 08:55:34');
INSERT INTO `faults` VALUES (30, 5, '2019-08-23 17:00:00', 2, '2019-08-23', 67, 'TOWER MAST', 'a) Between difference metal materials must have a separator such as rubber of taflone to prevent corrosion.\r\nb) Cable tag shall have both at end to end cable.\r\n\"c) Equipment earthing such as cctv, radar, junction box must have another earth bar to attach earth end and\r\n not to stucture.\"\r\nd) lighting rod must have a link cable minimum size 70mm directly to earth pit as per mention in PTS.\r\ne) No water at washer tank\r\nf) All outside cable tie shall use Stainless Steal with insulater type of cable ties and not a plastic cable ties.', 'To register at MC plus Punchlist', 1, 1, NULL, '2019-08-26 09:01:57', '2019-08-26 09:01:57');
INSERT INTO `faults` VALUES (31, 5, '2019-08-23 17:07:00', 2, '2019-08-23', 184, 'TOWER MAST', 'a) Between difference metal materials must have a separator such as rubber of taflone to prevent corrosion.\r\nb) Cable tag shall have both at end to end cable.\r\n\"c) Equipment earthing such as cctv, radar, junction box must have another earth bar to attach earth end and\r\n not to stucture.\"\r\nd) lighting rod must have a link cable minimum size 70mm directly to earth pit as per mention in PTS.', 'To register at MC plus Punchlist', 1, 1, NULL, '2019-08-26 09:09:15', '2019-08-26 09:09:15');
INSERT INTO `faults` VALUES (32, 5, '2019-08-23 17:18:00', 2, '2019-08-23', 184, 'TOWER MAST', 'a) Between difference metal materials must have a separator such as rubber of taflone to prevent corrosion.\r\nb) Cable tag shall have both at end to end cable.\r\n\"c) Equipment earthing such as cctv, radar, junction box must have another earth bar to attach earth end and\r\n not to stucture.\"\r\nd) lighting rod must have a link cable minimum size 70mm directly to earth pit as per mention in PTS.', 'To register at MC plus Punchlist', 1, 1, NULL, '2019-08-26 09:19:47', '2019-08-26 09:19:47');
INSERT INTO `faults` VALUES (33, 5, '2019-08-23 17:23:00', 2, '2019-08-23', 48, 'TOWER MAST', 'a) Between difference metal materials must have a separator such as rubber of taflone to prevent corrosion.\r\nb) Cable tag shall have both at end to end cable.\r\n\"c) Equipment earthing such as cctv, radar, junction box must have another earth bar to attach earth end and\r\n not to stucture.\"\r\nd) lighting rod must have a link cable minimum size 70mm directly to earth pit as per mention in PTS.\r\ne) Anti climb plate bolting not tighten properly\r\nf) All outside cable tie shall use Stainless Steal with insulater type of cable ties and not a plastic cable ties.', 'To register at MC plus Punchlist', 1, 1, NULL, '2019-08-26 09:25:20', '2019-08-26 09:25:20');
INSERT INTO `faults` VALUES (34, 5, '2019-08-23 17:31:00', 2, '2019-08-23', 48, 'TOWER MAST', 'a) Between difference metal materials must have a separator such as rubber of taflone to prevent corrosion.\r\nb) Cable tag shall have both at end to end cable.\r\n\"c) Equipment earthing such as cctv, radar, junction box must have another earth bar to attach earth end and\r\n not to stucture.\"\r\nd) lighting rod must have a link cable minimum size 70mm directly to earth pit as per mention in PTS.\r\ne) No water at washer tank\r\nf) All outside cable tie shall use Stainless Steal with insulater type of cable ties and not a plastic cable ties.', 'To register at MC plus Punchlist', 1, 1, NULL, '2019-08-26 09:33:08', '2019-08-26 09:33:08');
INSERT INTO `faults` VALUES (35, 5, '2019-08-23 17:36:00', 2, '2019-08-23', 48, 'TOWER MAST', 'a) Anti climb plate bolting not tighten properly\r\nb) Between difference metal materials must have a separator such as rubber of taflone to prevent corrosion.\r\nc) Cable tag shall have both at end to end cable.\r\n\"d) Equipment earthing such as cctv, radar, junction box must have another earth bar to attach earth end and\r\n not to stucture.\"\r\ne) lighting rod must have a link cable minimum size 70mm directly to earth pit as per mention in PTS.', 'To register at MC plus Punchlist', 1, 1, NULL, '2019-08-26 09:38:05', '2019-08-26 09:38:05');
INSERT INTO `faults` VALUES (36, 8, '2019-08-22 14:13:00', 3, '2019-08-31', 32, '4120-SHL-401', 'Air Conditioning number 2 not working - Not Cool, just blown hot air.', 'Require to inform Electrical / HVAC team to perform , check and service indoor and outdoor A/C unit.\r\n\r\nIf possible need to service both air cond and re setting timer.', 2, 1, NULL, '2019-08-27 06:17:49', '2020-08-05 10:13:59');
INSERT INTO `faults` VALUES (37, 4, '2019-08-24 18:10:00', 3, '2019-08-27', 32, 'BDA', 'Interference issue due to ROA( Random Access Opportunity ) increased to 91%  , PTT problem can\'t make a call and breaking voice quality.\r\n\r\nTroubleshooting method:\r\n1. Login on NMT password - A1b2C3d$\r\n1. checking on NMT ( Zone watch app)\r\n2. Login on MTS4 with BTS service SW IP:  \r\n10.128.1.1 twr 1\r\n10.128.2.1 twr 2\r\n10.128.3.1 twr 3\r\n10.128.4.1 twr 4\r\n\r\nSC: status bts\r\nSC: attrib\r\nSC: port\r\n\r\nclose \r\n\r\nChecking BR on IP  if tower 1\r\n10.128.1.1  :18011   - BR1\r\n10.128.1.1 :18012    - BR2\r\n10.128.1.1 :18013    - BR3\r\n10.128.1.1 :18014    - BR4\r\n\r\n\r\nBR) get info\r\nBR) get status\r\nBR) get pa_status\r\nBR) rssicnt \r\nBR) chanstat\r\nBR) get tx_freq\r\nBR) get rx_freq\r\nBR) get fp\r\nBR) get rp\r\nBR) get vswr \r\n\r\nWe found new installed BDA was power up without setting suitable RF power and notify PRPC UF', 'Immediately turned off the new installed BDA , after 5 minutes the zone watch showed no interference on RAO level.', 2, 1, NULL, '2019-08-27 06:44:03', '2019-08-27 06:44:03');
INSERT INTO `faults` VALUES (38, 8, '2019-08-28 14:42:00', 2, '2019-09-30', 112, 'SUB 123 FON 701', 'Wireless AP install inside FON Cabinet.', 'Inform respective parties / owner to make good and properly install outside FON cabinet\r\nwith proper wiring LAN wire.', 2, 1, NULL, '2019-08-28 06:45:47', '2020-08-04 00:14:47');
INSERT INTO `faults` VALUES (39, 8, '2019-08-28 14:47:00', 3, '2019-09-07', 24, 'SHL 401 DTR 736', 'Air conditioning failure for AC number 2.\r\n\r\n#need to be check and service - cause tripping DTRS equipment due to high temperature\r\nA/C number 2 runs with only blows air which are hot .', 'Need to inform area owner , electrical , hvac team to resolve this matters.\r\n\r\nPIC Building Custodian: Farhana UF , Mobile number 012-7049371\r\n\r\nattended site visit on 4th October _ En Amirul from Alpine Utility , mobile no 017-7745688\r\n\r\nResolve by Alppine Utility on 7th October.\r\nDate : 07 / 10 / 2019\r\nDay : Tuesday\r\n\r\nClient : PRPC\r\nLocation : Pengerang\r\n\r\nTROUBLESHOOTING\r\n\r\n1) Unit : Split Unit\r\nmodel :\r\nSerial no. :\r\nUnit tag no : SHL401-ACP-002\r\nLocation : SHL 401\r\n\r\nJob description\r\n- Prepair equipment tooling \r\n- Off supply MCB unit\r\n- Charging nitrogen 150psi - 250psi\r\n- Check leaking at piping outdoor to indoor\r\n- Check leaking piping outdoor compressor\r\n- Check leaking piping condenser fin\r\n- Breazing piping leaking\r\n- Hold pressure nitrogen 250psi 30 minute\r\n- Throw pressure nitrogen \r\n- Vacum piping 15 minute\r\n- Charging gas refrigerant to 120psi \r\n- Check ampere\r\n- Set timer rotate 4hour\r\n- Unit now running auto\r\n- moniter unit\r\n\r\nFinding\r\nA) Found leaking at condenser fin \r\n\r\nPLANNED PREVENTIVE MAINTENANCE\r\n\r\n1) Unit : Split Unit\r\nmodel :\r\nSerial no. :\r\nUnit tag no : SHL401-ACP-001\r\n                      SHL401-ACP-002\r\nLocation : SHL 401\r\n\r\nJob description\r\n\r\n- Clean condensor fin\r\n- Clean condensor fan\r\n- Cleaning filter\r\n- Check running pressure\r\n- Clean indoor body\r\n- Check running load amp\r\n\r\n\r\nRemark\r\nA) Attend complain unit leak SHL 401 job done\r\n\r\nManpower\r\nA) Saifullah\r\nB) Hafizh \r\nC) Wan Mazuri\r\n\r\nVehicle\r\nJCT 555', 2, 1, NULL, '2019-08-28 06:56:37', '2019-10-10 01:30:39');
INSERT INTO `faults` VALUES (40, 8, '2019-08-28 15:00:00', 2, '2019-09-30', 99, 'FAR 123 FON 702', 'Wireless AP install inside FON Cabinet.', 'Inform respective parties / owner to make good and properly install outside FON cabinet with proper wiring LAN wire.\r\n\r\nFON 701 - under PRPC ICT', 2, 1, NULL, '2019-08-28 07:02:38', '2020-08-04 00:13:52');
INSERT INTO `faults` VALUES (41, 3, '2019-09-02 08:58:00', 2, '2019-09-17', 8, 'Migration Activities by PET ICT between DATA CENTER and DCR701', 'Telecom PRPC UF to provide temporary link/route A & B from DCR701 to BLD810.\r\n -Total Link/Route 16 pairs / 32 cores.\r\n -Permanent cores 2 pairs / 4 cores route A & B\r\n -Temporary cores 8 pairs / 16 cores route A\r\n\r\n23/9/2019 - PICT report core 7,8 and 75,76 problem', '1-Patching activities and cores tested completed.\r\n2-For temporary cores 8 pairs / 16 cores to use until end of this year 2019 (PET ICT to advise) \r\n3-Refer to attachment.\r\n\r\n2/10/2019\r\nTroubleshooting 4 cores link from DCR701 to BLD810 Route A\r\n1- Clean all connector patchcord and FFP.\r\n2- Cores 7,8 found 1 pair connector at MCB602 not connected properly. Check and test dB loss the link with fluke get result (4.99 dB, 5.48 dB). Result Test Pass.\r\n3- Cores 75,76 found 1 link from WMF  to TER at BLD 810 for core 75 problem. Result test for dB Loss (9.60 dB) Fail. For this connection change to cores 77,78. Tested OK', 1, 1, NULL, '2019-09-19 01:49:09', '2019-10-05 01:50:17');
INSERT INTO `faults` VALUES (42, 4, '2019-09-20 10:23:00', 2, '2019-09-27', 3, 'BDA', 'BDA installation table attached.\r\n3 more BDA powering up activities on hold due to PTW no approve yet.', NULL, 1, 1, NULL, '2019-09-20 02:26:57', '2019-09-20 02:26:57');
INSERT INTO `faults` VALUES (43, 4, '2019-09-20 10:27:00', 2, '2019-10-04', 8, 'STS/ATS power redundancy installation', 'JHA and MOS not yet approved\r\nInstallation drawing received on going review not approve yet\r\nATS not arrive yet , Protellus can\'t find it in the warehouse.\r\nItems like TB , circuit breaker and gland was found in the warehouse.\r\nNext week Protellus team will update the status .', NULL, 1, 1, NULL, '2019-09-20 02:35:27', '2019-09-20 02:35:27');
INSERT INTO `faults` VALUES (44, 3, '2019-09-23 23:44:00', 3, '2019-09-30', 165, 'SMK SYSTEM (TM JPB)', 'There is a SMK to be installed at TOB in this week by TM. TM are required 2 cores FOC for each Route A and B from TM SDF, BLD810 to TOB, SPTS (a.k. SPJ).', 'Completed lay and terminated.\r\nTested by JPB and TM link working properly on 30.9.2019', 2, 1, NULL, '2019-09-26 15:57:49', '2019-10-01 01:53:28');
INSERT INTO `faults` VALUES (45, 3, '2019-09-26 09:45:00', 3, '2019-09-30', 100, 'CABINET', 'OUI report one of the CCTV Cabinet (FAR142-CTV-731) on the off position and will effect 13 nos camera cannot view and monitor at the field.\r\n\r\nDuring the troubleshoot on the CCTV cabinet found:\r\n1- FAR142-CAM-001 -Power cable to field device have short to ground\r\n                                    -Cable blue to ground (0.2 ohm)\r\n                                    -Cable brown to ground (28.8 ohm)\r\n                                    -action: (Prefchem to rectify)\r\n2- 1430-CAM-004  - Camera unit at Field faulty\r\n                                - action: (Prefchem and vendor to rectify)', 'Telecom UF power up back the CCTV Cabinet (FAR142-CTV-731) with isolated 2 main circuit breaker for camera FAR142-CAM-001 and 1430-CAM-004. All 11 nos out of 13 nos camera working in a good condition.', 2, 1, NULL, '2019-09-30 02:10:20', '2020-08-04 00:11:30');
INSERT INTO `faults` VALUES (46, 5, '2019-09-19 17:15:00', 2, '2019-10-03', 92, 'UPS Isolator Switch', 'on 19 september 2019 when we do commissioning for ACS we found out that 1 of our CCTV interface with ACS on off position.\r\nThen we check on panel site we found out that our CCTV panel inside FAR 121 was in off position.\r\nOur finding as below,\r\n\r\n1. Isolator switch inside CCTV panel on OFF position.\r\n2. Check UPS power, UPS no power.\r\n3. Check Internal CCTV panel, all in good condition.\r\n4. Move to incoming power at PDB 604 found MCB for CCTV panel in OFF position without LOTO.', 'CCTV Panel\r\na) Physical check > all in good condition\r\nb) Connection check > all in good condition\r\nc) Continuity test to ground and core to core \r\n> Finding camera SUB121-CAM-001 core to core (blue + earth) got continuity.\r\n> On morning 3/10/19 Vendor and P2 go to site to find the problem found core brown inside JB at field area disconnected and touch the other core, and this cause the cable shorted.\r\nd) Magger cable from PDB604 to CTV731 to ensure incoming cable in good position.\r\nd) after all in good condition on 3/10/19 at 5 pm power up back CCTV panel\r\ne) Check all the video all in good view', 2, 1, NULL, '2019-10-03 09:32:50', '2019-10-03 09:32:50');
INSERT INTO `faults` VALUES (47, 8, '2019-10-05 09:20:00', 2, '2019-10-05', 101, 'FAR 151 PAG 722 , 724', 'Clear Punchlist for defect LTU.\r\nFAR 151\r\na.Loop 15B\r\nLTU 1753 - tukar LTU\r\nID FAR151-LSU-010\r\n\r\nb.Loop 16B\r\nLTU 1347 - tukar LTU \r\nID SUB 151 -LSU-002\r\n\r\nc.Loop 18B\r\nLTU 1463- tukar LTU\r\nID SUB 112 -LSU-002', 'Rites \r\nPIC : Aliff\r\na. Change LTU\r\nb. Setting and run healthiness \r\nc. Site test - paga alarm sound test, monitor at field.', 2, 1, NULL, '2019-10-06 01:28:02', '2019-10-06 02:17:22');
INSERT INTO `faults` VALUES (48, 8, '2019-10-06 09:34:00', 2, '2019-10-12', 8, 'BLD810-CTV-731', 'Washer pipe detached from wiper hose.', 'PRPC Telecom need to inform construction - this issue alreary being brought up a few month back.\r\n\r\nStill no action taken.', 2, 1, NULL, '2019-10-06 02:12:21', '2020-08-04 00:18:03');
INSERT INTO `faults` VALUES (49, 8, '2019-10-08 16:43:00', 2, '2019-10-31', 67, 'FON CABINET', 'OTDR Testing for cables GHB801-X-BLD810-001A from GHB801 to BLD810\r\n\r\nfindings  - 1 JB install due to cables shortages/cuts\r\n8 cores downstream test by MIE1300 found traces over acceptables limits\r\n\r\nAllowable limit \r\nsplice : o.3db\r\nconnector: 0.5db\r\na. Core 8 - 0.357db\r\nb. Core 13- 0.9db\r\nc. Core 12-1.32db\r\nd. Core23 - 1.0db\r\ne. Core 28- 0.5db\r\nf. Core 31 - 0.327db\r\ng. Core 37- 4.691db\r\nh. Core 38-0.653db\r\ni. Core 40 - 1.1db', 'Waiting for upstream OTDR test by SYS', 2, 1, NULL, '2019-10-08 08:55:32', '2020-08-04 00:11:01');
INSERT INTO `faults` VALUES (50, 8, '2019-10-09 09:36:00', 3, '2019-10-31', 67, 'GHB801 FON 701', 'OTDR testing carried out upstream from GHB 801 to BLD \r\n\r\nResults: 1-30 cores above 0.1 db loss\r\n\r\nTest Carried out by : Inteqno \r\nTester : Syafiq HP 0193989150', 'Witness by Telecom PRPC UF,\r\n\r\nInform Mr. Asraf SYS 0194604925 regarding high loss above allowable limits.\r\n\r\nSYS Quality Assurance Team and Engineering to provide solution.\r\n\r\nLink Loss = [fiber length (km) x fiber attenuation per km] + [splice loss x # of splices] + [connector loss x # of connectors] + [safety margin]\r\n\r\nClosed : After rectification works by SYS Contractor.\r\nResults submit to Team project P36. Final documentation and result shall be submit to UF Telecom for review\r\n\r\n*Link Budget* \r\nFor example, Assume a ___km single mode link at 1310nm with 2 connector pairs and 1 splices.\r\n\r\n\r\nLink Loss = [__km x 0.4dB/km] + [0.1dB x 1] + [0.75dB x 2] + [3.0dB] = ____dB\r\n\r\nIn this example. an estimated ___dB of power would be required to transmit across this link. Of course, it is very important to measure and verify the actual link loss values one the link is established to identify any potential performance issues.', 2, 1, NULL, '2019-10-10 01:54:16', '2020-08-04 00:21:06');
INSERT INTO `faults` VALUES (51, 8, '2019-10-12 16:08:00', 2, '2019-10-31', 100, 'FAR 142 PAG722/ FAR 142 PAG724', 'FAR 142 PAG722\r\nLoop 4A\r\nIsolated - link open 13,14,15 & 16\r\n\r\nFAR 142 PAG724\r\nLoop 11B\r\nTSA2, TB 41,42', 'FAR 142 \r\n\r\nPRPC UF need to clarify with Project Team, PL for this site.\r\n\r\nsuspect cable faulty due alarm will appear after a while resetting alarm.\r\n\r\n* To check who open the knife switch (loop being isolated)', 2, 1, NULL, '2019-10-12 08:31:55', '2020-08-04 00:10:35');
INSERT INTO `faults` VALUES (52, 8, '2019-10-14 16:16:00', 2, '2019-10-31', 150, 'PAG721 - PAG723', '1. FAR 330 - PAG721 System A\r\na. AMP 1 - Line Fault/earth fault\r\nb. AMP 2 - Line Fault\r\nc. AMP 3 - Line Fault/earth fault\r\ne. AMP 5 - Line Fault\r\nf. AMP 10 -  Line Fault\r\ng. AMP 11 - Line Fault\r\n\r\n\r\n2. FAR 330 - PAG723 System B\r\na. AMP 2 - Line Fault\r\nb. AMP 10- Line Fault\r\nc. AMP 11 - Line Fault\r\nd. AMP 12 - Line Fault', 'This alarm appears after resetting alarm.\r\n\r\nsuspected, cable leakage to earth during raining / leaks to speaker terminations box\r\ncable gland or cable isulation damage.\r\n\r\nTelecom UF need to raise this issue to Rites, IU&I projects team and EPCC.\r\n(Equipments/Cables under EPCC)', 2, 1, NULL, '2019-10-14 08:28:02', '2020-07-29 01:29:01');
INSERT INTO `faults` VALUES (53, 8, '2020-06-16 13:11:00', 2, '2020-06-18', 165, 'FON 701', 'Reported back bone high lost:\r\n\r\nComplainer: SPJ', '*Link Budget*\r\nLink Loss = [fiber length (km) x fiber attenuation per km] + [splice loss x # of splices] + [connector loss x # of connectors] + [safety margin]\r\n\r\nFor example, Assume a ___km single mode link at 1310nm with 2 connector pairs and 1 splices.\r\n\r\nLink Loss = [__km x 0.4dB/km] + [0.1dB x 1] + [0.75dB x 2] + [3.0dB] = ____dB\r\nIn this example. an estimated ___dB of power would be required to transmit across this link. Of course, it is very important to measure and verify the actual link loss values one the link is established to identify any potential performance issues.\r\n\r\nTesting OLTS from BLD 701 (SPJ) to BLD810 via MCB 602\r\nTotal Distance : 9.14km\r\nSplice : 4 nos\r\nConnector : 5\r\nSafety Margin: 3\r\n\r\nLink Loss = [__km x 0.4dB/km] + [0.1dB x 1] + [0.75dB x 2] + [3.0dB] = ____dB\r\nLink Loss = [9.14km x 0.4dm/km] +[0.1db x 4] + [0.75db x 5] + [0 db -not includedsafety margin]\r\n\r\nLink Loss:[ 3.656]+[0.4] + [3.75]+ [0 db -not includedsafety margin]\r\nLink Loss: 7.806db\r\n\r\nsince the testing result :-\r\ni. Leg A = 5.17db\r\nii. Leg B= 4.41db\r\n\r\nResults below expected link budget calculation', 2, 1, NULL, '2020-06-22 05:29:10', '2020-06-22 05:29:10');
INSERT INTO `faults` VALUES (54, 5, '2020-08-03 15:01:00', 1, '2020-08-10', 100, 'Encoder', 'Ref Ticket ID:  A77-37Q-VX1Z\r\nSubject: 1420-CAM-005 : CCTV - Rectification For Faulty CCTV\r\n\r\n1. Junction Box Condition √\r\n2. Cable to field device √\r\n\r\nFindings :\r\nVideo Intermittent', 'Solution :\r\n1. Swap FO cable at FO card to the ok camera and monitor the video as good condition.\r\n2. Change FO card with spare and monitor the video again but still same.\r\n3. Change coax cable at encoder to the good condition camera finding ok. but the other camera which is good condition previously to the faulty port, finding the connection loss.\r\n5. Need to change encoder with spare encoder.', 1, 1, NULL, '2020-08-03 07:06:54', '2020-08-03 07:06:54');
INSERT INTO `faults` VALUES (55, 5, '2020-08-03 15:09:00', 1, '2020-08-10', 99, 'Field Internal Junction Box', 'Ref Ticket ID: 9HZ-YPW-ZG8Z\r\nSubject: 1220-CAM-007 : CCTV - Rectification For Faulty CCTV\r\n\r\n\r\n1. Junction Box Condition √\r\n2. Cable to field device √\r\n3. Camera Condition ( Not sure due to Prefchem have no tools to check)\r\nFindings :\r\nVideo loss / no video', 'Solution :\r\n1. Swap FO cable at FO card to the ok camera and monitor but there was no video also.\r\n2. Change FO card with spare and monitor the video again but still same. and video present LED off.\r\n3. Need rectify more on field site since the data for video present faulty.(Prefchem)', 1, 1, NULL, '2020-08-03 07:13:22', '2020-08-03 07:13:22');
INSERT INTO `faults` VALUES (56, 5, '2020-08-03 15:23:00', 2, '2020-08-10', 48, 'Outdoor Unit', 'Ref Ticket ID: H1B-HRN-P7V8\r\nSubject: SUB551: 8835-OTL-001 not functioning\r\n\r\n1. No dial tone.\r\n2. Beacon sounder trip.\r\n3. Signal cable connected to telephone, cause voltage drop looks like cable shorted.\r\n4. Power JB and signal JB got water ingress.\r\n5. Open beacon and sounder enclosure finding board already damage and water full inside.', '1. Change with new spare for all outdoor equipment.\r\n2. Once instal to ensure no more water ingress in future.', 1, 1, NULL, '2020-08-03 07:29:19', '2020-08-03 07:29:19');

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
) ENGINE = InnoDB AUTO_INCREMENT = 81 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of faults_attendees
-- ----------------------------
INSERT INTO `faults_attendees` VALUES (2, 1, 1, NULL, '2019-06-29 07:20:23', '2019-06-29 07:20:23');
INSERT INTO `faults_attendees` VALUES (4, 2, 1, NULL, '2019-07-01 08:47:54', '2019-07-01 08:47:54');
INSERT INTO `faults_attendees` VALUES (5, 2, 5, NULL, '2019-07-01 08:47:54', '2019-07-01 08:47:54');
INSERT INTO `faults_attendees` VALUES (6, 2, 3, NULL, '2019-07-01 08:47:54', '2019-07-01 08:47:54');
INSERT INTO `faults_attendees` VALUES (7, 3, 1, NULL, '2019-07-04 15:18:22', '2019-07-04 15:18:22');
INSERT INTO `faults_attendees` VALUES (8, 4, 1, NULL, '2019-07-04 15:27:24', '2019-07-04 15:27:24');
INSERT INTO `faults_attendees` VALUES (9, 5, 1, NULL, '2019-07-04 21:14:14', '2019-07-04 21:14:14');
INSERT INTO `faults_attendees` VALUES (10, 6, 1, NULL, '2019-07-04 21:16:44', '2019-07-04 21:16:44');
INSERT INTO `faults_attendees` VALUES (11, 7, 1, NULL, '2019-07-04 21:22:27', '2019-07-04 21:22:27');
INSERT INTO `faults_attendees` VALUES (12, 8, 1, NULL, '2019-07-04 21:24:24', '2019-07-04 21:24:24');
INSERT INTO `faults_attendees` VALUES (13, 9, 2, NULL, '2019-07-06 04:19:33', '2019-07-06 04:19:33');
INSERT INTO `faults_attendees` VALUES (14, 10, 7, NULL, '2019-07-06 08:11:24', '2019-07-06 08:11:24');
INSERT INTO `faults_attendees` VALUES (15, 11, 6, NULL, '2019-07-06 08:43:54', '2019-07-06 08:43:54');
INSERT INTO `faults_attendees` VALUES (16, 12, 3, NULL, '2019-07-17 07:16:57', '2019-07-17 07:16:57');
INSERT INTO `faults_attendees` VALUES (17, 13, 1, NULL, '2019-07-31 09:33:58', '2019-07-31 09:33:58');
INSERT INTO `faults_attendees` VALUES (18, 13, 5, NULL, '2019-07-31 09:33:58', '2019-07-31 09:33:58');
INSERT INTO `faults_attendees` VALUES (19, 14, 1, NULL, '2019-08-03 07:04:41', '2019-08-03 07:04:41');
INSERT INTO `faults_attendees` VALUES (20, 14, 5, NULL, '2019-08-03 07:04:41', '2019-08-03 07:04:41');
INSERT INTO `faults_attendees` VALUES (21, 15, 1, NULL, '2019-08-03 07:33:03', '2019-08-03 07:33:03');
INSERT INTO `faults_attendees` VALUES (22, 15, 5, NULL, '2019-08-03 07:33:03', '2019-08-03 07:33:03');
INSERT INTO `faults_attendees` VALUES (23, 16, 4, NULL, '2019-08-22 07:31:13', '2019-08-22 07:31:13');
INSERT INTO `faults_attendees` VALUES (24, 17, 4, NULL, '2019-08-22 07:52:41', '2019-08-22 07:52:41');
INSERT INTO `faults_attendees` VALUES (25, 18, 8, NULL, '2019-08-22 08:56:23', '2019-08-22 08:56:23');
INSERT INTO `faults_attendees` VALUES (26, 19, 8, NULL, '2019-08-22 09:42:35', '2019-08-22 09:42:35');
INSERT INTO `faults_attendees` VALUES (27, 20, 8, NULL, '2019-08-22 10:00:57', '2019-08-22 10:00:57');
INSERT INTO `faults_attendees` VALUES (28, 21, 8, NULL, '2019-08-22 23:51:16', '2019-08-22 23:51:16');
INSERT INTO `faults_attendees` VALUES (29, 22, 1, NULL, '2019-08-24 15:45:28', '2019-08-24 15:45:28');
INSERT INTO `faults_attendees` VALUES (30, 22, 8, NULL, '2019-08-24 15:45:28', '2019-08-24 15:45:28');
INSERT INTO `faults_attendees` VALUES (31, 23, 8, NULL, '2019-08-26 01:43:40', '2019-08-26 01:43:40');
INSERT INTO `faults_attendees` VALUES (32, 24, 8, NULL, '2019-08-26 02:25:28', '2019-08-26 02:25:28');
INSERT INTO `faults_attendees` VALUES (33, 25, 5, NULL, '2019-08-26 08:14:10', '2019-08-26 08:14:10');
INSERT INTO `faults_attendees` VALUES (34, 26, 5, NULL, '2019-08-26 08:36:41', '2019-08-26 08:36:41');
INSERT INTO `faults_attendees` VALUES (35, 27, 5, NULL, '2019-08-26 08:41:01', '2019-08-26 08:41:01');
INSERT INTO `faults_attendees` VALUES (36, 28, 5, NULL, '2019-08-26 08:46:24', '2019-08-26 08:46:24');
INSERT INTO `faults_attendees` VALUES (37, 29, 5, NULL, '2019-08-26 08:55:34', '2019-08-26 08:55:34');
INSERT INTO `faults_attendees` VALUES (38, 30, 5, NULL, '2019-08-26 09:01:57', '2019-08-26 09:01:57');
INSERT INTO `faults_attendees` VALUES (39, 31, 5, NULL, '2019-08-26 09:09:15', '2019-08-26 09:09:15');
INSERT INTO `faults_attendees` VALUES (40, 32, 5, NULL, '2019-08-26 09:19:47', '2019-08-26 09:19:47');
INSERT INTO `faults_attendees` VALUES (41, 33, 5, NULL, '2019-08-26 09:25:20', '2019-08-26 09:25:20');
INSERT INTO `faults_attendees` VALUES (42, 34, 5, NULL, '2019-08-26 09:33:08', '2019-08-26 09:33:08');
INSERT INTO `faults_attendees` VALUES (43, 35, 5, NULL, '2019-08-26 09:38:05', '2019-08-26 09:38:05');
INSERT INTO `faults_attendees` VALUES (44, 36, 8, NULL, '2019-08-27 06:17:49', '2019-08-27 06:17:49');
INSERT INTO `faults_attendees` VALUES (45, 37, 4, NULL, '2019-08-27 06:44:03', '2019-08-27 06:44:03');
INSERT INTO `faults_attendees` VALUES (46, 37, 2, NULL, '2019-08-27 06:44:03', '2019-08-27 06:44:03');
INSERT INTO `faults_attendees` VALUES (47, 37, 3, NULL, '2019-08-27 06:44:03', '2019-08-27 06:44:03');
INSERT INTO `faults_attendees` VALUES (48, 37, 5, NULL, '2019-08-27 06:44:03', '2019-08-27 06:44:03');
INSERT INTO `faults_attendees` VALUES (49, 37, 8, NULL, '2019-08-27 06:44:03', '2019-08-27 06:44:03');
INSERT INTO `faults_attendees` VALUES (50, 37, 1, NULL, '2019-08-27 06:44:03', '2019-08-27 06:44:03');
INSERT INTO `faults_attendees` VALUES (51, 38, 8, NULL, '2019-08-28 06:45:47', '2019-08-28 06:45:47');
INSERT INTO `faults_attendees` VALUES (52, 39, 8, NULL, '2019-08-28 06:56:37', '2019-08-28 06:56:37');
INSERT INTO `faults_attendees` VALUES (53, 40, 8, NULL, '2019-08-28 07:02:38', '2019-08-28 07:02:38');
INSERT INTO `faults_attendees` VALUES (54, 41, 3, NULL, '2019-09-19 01:49:09', '2019-09-19 01:49:09');
INSERT INTO `faults_attendees` VALUES (55, 41, 1, NULL, '2019-09-19 01:49:09', '2019-09-19 01:49:09');
INSERT INTO `faults_attendees` VALUES (56, 41, 5, NULL, '2019-09-19 01:49:09', '2019-09-19 01:49:09');
INSERT INTO `faults_attendees` VALUES (57, 41, 8, NULL, '2019-09-19 01:49:09', '2019-09-19 01:49:09');
INSERT INTO `faults_attendees` VALUES (58, 41, 2, NULL, '2019-09-19 01:49:09', '2019-09-19 01:49:09');
INSERT INTO `faults_attendees` VALUES (59, 41, 7, NULL, '2019-09-19 01:49:09', '2019-09-19 01:49:09');
INSERT INTO `faults_attendees` VALUES (60, 42, 4, NULL, '2019-09-20 02:26:57', '2019-09-20 02:26:57');
INSERT INTO `faults_attendees` VALUES (61, 43, 4, NULL, '2019-09-20 02:35:27', '2019-09-20 02:35:27');
INSERT INTO `faults_attendees` VALUES (62, 44, 3, NULL, '2019-09-26 15:57:49', '2019-09-26 15:57:49');
INSERT INTO `faults_attendees` VALUES (63, 44, 1, NULL, '2019-09-26 15:57:49', '2019-09-26 15:57:49');
INSERT INTO `faults_attendees` VALUES (64, 44, 8, NULL, '2019-09-26 15:57:49', '2019-09-26 15:57:49');
INSERT INTO `faults_attendees` VALUES (65, 45, 3, NULL, '2019-09-30 02:10:20', '2019-09-30 02:10:20');
INSERT INTO `faults_attendees` VALUES (66, 45, 8, NULL, '2019-09-30 02:10:20', '2019-09-30 02:10:20');
INSERT INTO `faults_attendees` VALUES (67, 46, 5, NULL, '2019-10-03 09:32:50', '2019-10-03 09:32:50');
INSERT INTO `faults_attendees` VALUES (68, 47, 8, NULL, '2019-10-06 01:28:02', '2019-10-06 01:28:02');
INSERT INTO `faults_attendees` VALUES (69, 48, 8, NULL, '2019-10-06 02:12:21', '2019-10-06 02:12:21');
INSERT INTO `faults_attendees` VALUES (70, 49, 8, NULL, '2019-10-08 08:55:32', '2019-10-08 08:55:32');
INSERT INTO `faults_attendees` VALUES (71, 50, 8, NULL, '2019-10-10 01:54:16', '2019-10-10 01:54:16');
INSERT INTO `faults_attendees` VALUES (72, 51, 8, NULL, '2019-10-12 08:31:55', '2019-10-12 08:31:55');
INSERT INTO `faults_attendees` VALUES (73, 52, 8, NULL, '2019-10-14 08:28:02', '2019-10-14 08:28:02');
INSERT INTO `faults_attendees` VALUES (74, 53, 8, NULL, '2020-06-22 05:29:10', '2020-06-22 05:29:10');
INSERT INTO `faults_attendees` VALUES (75, 54, 5, NULL, '2020-08-03 07:06:54', '2020-08-03 07:06:54');
INSERT INTO `faults_attendees` VALUES (76, 54, 6, NULL, '2020-08-03 07:06:54', '2020-08-03 07:06:54');
INSERT INTO `faults_attendees` VALUES (77, 55, 5, NULL, '2020-08-03 07:13:22', '2020-08-03 07:13:22');
INSERT INTO `faults_attendees` VALUES (78, 55, 6, NULL, '2020-08-03 07:13:22', '2020-08-03 07:13:22');
INSERT INTO `faults_attendees` VALUES (79, 56, 5, NULL, '2020-08-03 07:29:19', '2020-08-03 07:29:19');
INSERT INTO `faults_attendees` VALUES (80, 56, 6, NULL, '2020-08-03 07:29:19', '2020-08-03 07:29:19');

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
) ENGINE = InnoDB AUTO_INCREMENT = 86 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of faults_device_tags
-- ----------------------------
INSERT INTO `faults_device_tags` VALUES (2, 11, 'FAR131-PAG-721', NULL, '2019-07-06 08:44:25', '2019-07-06 08:44:25');
INSERT INTO `faults_device_tags` VALUES (9, 2, 'FAR630-GES-005', NULL, '2019-07-02 02:03:18', '2019-07-02 02:03:18');
INSERT INTO `faults_device_tags` VALUES (20, 10, 'None', NULL, '2019-07-06 08:11:24', '2019-07-06 08:11:24');
INSERT INTO `faults_device_tags` VALUES (22, 12, '4130-OTL-001', NULL, '2019-07-17 07:16:57', '2019-07-17 07:16:57');
INSERT INTO `faults_device_tags` VALUES (23, 12, '4130-TBN-001', NULL, '2019-07-17 07:16:57', '2019-07-17 07:16:57');
INSERT INTO `faults_device_tags` VALUES (24, 12, '4750-OTL-001', NULL, '2019-07-17 07:16:57', '2019-07-17 07:16:57');
INSERT INTO `faults_device_tags` VALUES (25, 12, '4750-TBN-001', NULL, '2019-07-17 07:16:57', '2019-07-17 07:16:57');
INSERT INTO `faults_device_tags` VALUES (26, 13, NULL, NULL, '2019-07-31 09:33:58', '2019-07-31 09:33:58');
INSERT INTO `faults_device_tags` VALUES (28, 15, 'LCR485-OWS-001', NULL, '2019-08-03 07:33:03', '2019-08-03 07:33:03');
INSERT INTO `faults_device_tags` VALUES (29, 16, 'ISSI 1010098', NULL, '2019-08-22 07:31:13', '2019-08-22 07:31:13');
INSERT INTO `faults_device_tags` VALUES (30, 17, 'AUC server', NULL, '2019-08-22 07:52:41', '2019-08-22 07:52:41');
INSERT INTO `faults_device_tags` VALUES (31, 18, 'FON 701', NULL, '2019-08-22 08:56:23', '2019-08-22 08:56:23');
INSERT INTO `faults_device_tags` VALUES (32, 19, 'FAR121-FON701', NULL, '2019-08-22 09:42:35', '2020-08-05 10:10:57');
INSERT INTO `faults_device_tags` VALUES (33, 20, 'FON 701', NULL, '2019-08-22 10:00:57', '2019-08-22 10:00:57');
INSERT INTO `faults_device_tags` VALUES (34, 21, 'FON 701 - 6850-SUB112', NULL, '2019-08-22 23:51:16', '2019-08-22 23:51:16');
INSERT INTO `faults_device_tags` VALUES (35, 22, 'SUB101-GES-005', NULL, '2019-08-24 15:45:28', '2019-08-24 15:45:28');
INSERT INTO `faults_device_tags` VALUES (36, 23, 'FON 701', NULL, '2019-08-26 01:43:40', '2019-08-26 01:43:40');
INSERT INTO `faults_device_tags` VALUES (37, 24, '4130-A-002-B01', NULL, '2019-08-26 02:25:28', '2019-08-26 02:25:28');
INSERT INTO `faults_device_tags` VALUES (38, 25, 'SUB475-CAM-001', NULL, '2019-08-26 08:14:10', '2019-08-26 08:14:10');
INSERT INTO `faults_device_tags` VALUES (39, 26, '8850-TTS-010', NULL, '2019-08-26 08:36:41', '2019-08-26 08:36:41');
INSERT INTO `faults_device_tags` VALUES (40, 27, '8850-TTS-002', NULL, '2019-08-26 08:41:01', '2019-08-26 08:41:01');
INSERT INTO `faults_device_tags` VALUES (41, 28, '8850-TTS-003', NULL, '2019-08-26 08:46:24', '2019-08-26 08:46:24');
INSERT INTO `faults_device_tags` VALUES (42, 29, '8850-TTS-004', NULL, '2019-08-26 08:55:34', '2019-08-26 08:55:34');
INSERT INTO `faults_device_tags` VALUES (43, 30, '8850-TTS-005', NULL, '2019-08-26 09:01:57', '2019-08-26 09:01:57');
INSERT INTO `faults_device_tags` VALUES (44, 31, '8850-TTS-006', NULL, '2019-08-26 09:09:15', '2019-08-26 09:09:15');
INSERT INTO `faults_device_tags` VALUES (45, 32, '8850-TTS-007', NULL, '2019-08-26 09:19:47', '2019-08-26 09:19:47');
INSERT INTO `faults_device_tags` VALUES (46, 33, '8850-TTS-008', NULL, '2019-08-26 09:25:20', '2019-08-26 09:25:20');
INSERT INTO `faults_device_tags` VALUES (47, 34, '8850-TTS-009', NULL, '2019-08-26 09:33:08', '2019-08-26 09:33:08');
INSERT INTO `faults_device_tags` VALUES (48, 35, '8850-TTS-010', NULL, '2019-08-26 09:38:05', '2019-08-26 09:38:05');
INSERT INTO `faults_device_tags` VALUES (49, 36, '4120-SHL-401', NULL, '2019-08-27 06:17:49', '2020-08-05 10:13:59');
INSERT INTO `faults_device_tags` VALUES (50, 37, NULL, NULL, '2019-08-27 06:44:03', '2019-08-27 06:44:03');
INSERT INTO `faults_device_tags` VALUES (51, 38, 'FON 701', NULL, '2019-08-28 06:45:47', '2020-08-04 00:14:47');
INSERT INTO `faults_device_tags` VALUES (52, 39, 'SHL 401 DTR 737', NULL, '2019-08-28 06:56:37', '2019-08-28 06:56:37');
INSERT INTO `faults_device_tags` VALUES (53, 40, '6750 FON 702', NULL, '2019-08-28 07:02:38', '2019-08-28 07:02:38');
INSERT INTO `faults_device_tags` VALUES (54, 41, 'DCR701-FON-701', NULL, '2019-09-19 01:49:09', '2019-09-19 01:49:09');
INSERT INTO `faults_device_tags` VALUES (55, 41, 'CTR200-FON-705', NULL, '2019-09-19 01:49:09', '2019-09-19 01:49:09');
INSERT INTO `faults_device_tags` VALUES (56, 41, 'CTR200-FON-709', NULL, '2019-09-19 01:49:09', '2019-09-19 01:49:09');
INSERT INTO `faults_device_tags` VALUES (57, 41, 'CTR200-FON-710', NULL, '2019-09-19 01:49:09', '2019-09-19 01:49:09');
INSERT INTO `faults_device_tags` VALUES (58, 41, 'CTR200-FON-714', NULL, '2019-09-19 01:49:09', '2019-09-19 01:49:09');
INSERT INTO `faults_device_tags` VALUES (59, 41, 'BLD810-FON-702', NULL, '2019-09-19 01:49:09', '2019-09-19 01:49:09');
INSERT INTO `faults_device_tags` VALUES (60, 41, 'BLD810-FON-703', NULL, '2019-09-19 01:49:09', '2019-09-19 01:49:09');
INSERT INTO `faults_device_tags` VALUES (61, 42, NULL, NULL, '2019-09-20 02:26:57', '2019-09-20 02:26:57');
INSERT INTO `faults_device_tags` VALUES (62, 43, NULL, NULL, '2019-09-20 02:35:27', '2019-09-20 02:35:27');
INSERT INTO `faults_device_tags` VALUES (63, 44, 'BLD701-FON-705', NULL, '2019-09-26 15:57:49', '2019-09-26 15:57:49');
INSERT INTO `faults_device_tags` VALUES (64, 44, 'BLD701-FON-706', NULL, '2019-09-26 15:57:49', '2019-09-26 15:57:49');
INSERT INTO `faults_device_tags` VALUES (65, 44, 'CTR200-FON-708', NULL, '2019-09-26 15:57:49', '2019-09-26 15:57:49');
INSERT INTO `faults_device_tags` VALUES (66, 44, 'CTR200-FON-713', NULL, '2019-09-26 15:57:49', '2019-09-26 15:57:49');
INSERT INTO `faults_device_tags` VALUES (67, 44, 'CTR200-FON-705', NULL, '2019-09-26 15:57:49', '2019-09-26 15:57:49');
INSERT INTO `faults_device_tags` VALUES (68, 44, 'CTR200-FON-710', NULL, '2019-09-26 15:57:49', '2019-09-26 15:57:49');
INSERT INTO `faults_device_tags` VALUES (69, 44, 'BLD810-FON-702', NULL, '2019-09-26 15:57:49', '2019-09-26 15:57:49');
INSERT INTO `faults_device_tags` VALUES (70, 44, 'BLD810-FON-703', NULL, '2019-09-26 15:57:49', '2019-09-26 15:57:49');
INSERT INTO `faults_device_tags` VALUES (71, 45, 'FAR142-CTV-731', NULL, '2019-09-30 02:10:20', '2019-09-30 02:10:20');
INSERT INTO `faults_device_tags` VALUES (72, 45, 'FAR142-CAM-001', NULL, '2019-09-30 02:10:20', '2019-09-30 02:10:20');
INSERT INTO `faults_device_tags` VALUES (73, 45, '1430-CAM-004', NULL, '2019-09-30 02:10:20', '2019-09-30 02:10:20');
INSERT INTO `faults_device_tags` VALUES (74, 46, 'FAR121-CTV-731', NULL, '2019-10-03 09:32:50', '2019-10-03 09:32:50');
INSERT INTO `faults_device_tags` VALUES (75, 47, 'PAG 721,722 723,724', NULL, '2019-10-06 01:28:02', '2019-10-06 01:28:02');
INSERT INTO `faults_device_tags` VALUES (76, 48, '8100-CAM-201', NULL, '2019-10-06 02:12:21', '2019-10-06 02:12:21');
INSERT INTO `faults_device_tags` VALUES (77, 49, 'GHB801-X-BLD810-001A', NULL, '2019-10-08 08:55:32', '2019-10-08 08:55:32');
INSERT INTO `faults_device_tags` VALUES (78, 50, 'GHB 801-X-BLD 810 - 001A', NULL, '2019-10-10 01:54:16', '2019-10-10 01:54:16');
INSERT INTO `faults_device_tags` VALUES (79, 51, 'PAG 721/ PAG 723', NULL, '2019-10-12 08:31:55', '2019-10-12 08:31:55');
INSERT INTO `faults_device_tags` VALUES (80, 52, '12323232', NULL, '2019-10-14 08:28:02', '2020-07-29 01:29:01');
INSERT INTO `faults_device_tags` VALUES (81, 53, '7510 BLD 701 FON 705 Leg A', NULL, '2020-06-22 05:29:10', '2020-06-22 05:29:10');
INSERT INTO `faults_device_tags` VALUES (82, 53, '7510 BLD 701 FON 705 Leg B', NULL, '2020-06-22 05:29:10', '2020-06-22 05:29:10');
INSERT INTO `faults_device_tags` VALUES (83, 54, '1420-CAM-005', NULL, '2020-08-03 07:06:54', '2020-08-03 07:06:54');
INSERT INTO `faults_device_tags` VALUES (84, 55, '1220-CAM-007', NULL, '2020-08-03 07:13:22', '2020-08-03 07:13:22');
INSERT INTO `faults_device_tags` VALUES (85, 56, '8835-OTL-001', NULL, '2020-08-03 07:29:19', '2020-08-03 07:29:19');

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
) ENGINE = InnoDB AUTO_INCREMENT = 158 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of faults_images
-- ----------------------------
INSERT INTO `faults_images` VALUES (10, 2, 'images/fault/Xh0W0AFhQeDLv9ykoJpvdBpCbKtAyf2RqroRVMuV.jpeg', NULL, '2019-07-01 08:47:55', '2019-07-01 08:47:55');
INSERT INTO `faults_images` VALUES (11, 2, 'images/fault/umhzsHrdmNqqxQQQNa7p71aUoQHTShQzdyZEqVcB.jpeg', NULL, '2019-07-01 08:47:55', '2019-07-01 08:47:55');
INSERT INTO `faults_images` VALUES (33, 12, 'images/fault/DtWU9YGuwNMkJazgJZwexkof4WRvE7Uw2hZidKkt.jpeg', NULL, '2019-07-18 14:40:17', '2019-07-18 14:40:17');
INSERT INTO `faults_images` VALUES (34, 14, 'images/fault/nnEQxysHNF5aflWR5T94yHxxOXZpxi5Yzu2TiFOu.jpeg', NULL, '2019-08-03 07:04:41', '2019-08-03 07:04:41');
INSERT INTO `faults_images` VALUES (35, 14, 'images/fault/z7bPVaTpRhzLMOGjDjit154W6Y7US5ySpxseuAwX.jpeg', NULL, '2019-08-03 07:04:41', '2019-08-03 07:04:41');
INSERT INTO `faults_images` VALUES (36, 15, 'images/fault/qygjfpuGtvvAb6MFVNnHFLKUWkARAu5FKkLYQOxv.jpeg', NULL, '2019-08-03 07:33:03', '2019-08-03 07:33:03');
INSERT INTO `faults_images` VALUES (37, 16, 'images/fault/08bKSsIULs7bR1m4QntqAY4achkMIVhst3frC3ia.jpeg', NULL, '2019-08-22 07:36:57', '2019-08-22 07:36:57');
INSERT INTO `faults_images` VALUES (38, 16, 'images/fault/sR6cXqN0Mfprn2D6NYcQFCflqkrKftHseunZXNCt.jpeg', NULL, '2019-08-22 07:36:57', '2019-08-22 07:36:57');
INSERT INTO `faults_images` VALUES (39, 19, 'images/fault/emiAkflh7sTru3DzsLeszsZZUrgziucASNNDtNYv.jpeg', NULL, '2019-08-22 09:42:35', '2019-08-22 09:42:35');
INSERT INTO `faults_images` VALUES (40, 18, 'images/fault/oArSVOHOE4K4C2vDXCXcbrlhmoRR5660Udf0xjAq.png', NULL, '2019-08-22 09:47:54', '2019-08-22 09:47:54');
INSERT INTO `faults_images` VALUES (41, 20, 'images/fault/1eJ2xQIqK74dQUlbIH6TNis0ovVyRMu67KgUKZXl.png', NULL, '2019-08-22 10:00:58', '2019-08-22 10:00:58');
INSERT INTO `faults_images` VALUES (42, 21, 'images/fault/WSQPcFrVX2JcfrZnBeUtNrjksnz0abOwnzPzsEp4.png', NULL, '2019-08-22 23:51:17', '2019-08-22 23:51:17');
INSERT INTO `faults_images` VALUES (43, 22, 'images/fault/ghXzKVH8Bs3wEuIvYQVBh3ZWEuGXKEeyM9NY9fkJ.jpeg', NULL, '2019-08-24 15:45:29', '2019-08-24 15:45:29');
INSERT INTO `faults_images` VALUES (44, 22, 'images/fault/KeD8XIPYPXgtoxD4bsgqqKyPQRbK1t6NRhYIU116.jpeg', NULL, '2019-08-24 15:45:30', '2019-08-24 15:45:30');
INSERT INTO `faults_images` VALUES (45, 22, 'images/fault/u8grquSPLu0Z7SZjuNZ8pdWGvhfbWb4H6DkAcpgI.jpeg', NULL, '2019-08-24 15:45:31', '2019-08-24 15:45:31');
INSERT INTO `faults_images` VALUES (46, 23, 'images/fault/I02GnHxMuGsyIQzDQTftYGk0a8FwARmMfCkYpYeO.jpeg', NULL, '2019-08-26 01:43:40', '2019-08-26 01:43:40');
INSERT INTO `faults_images` VALUES (47, 23, 'images/fault/fxHycd2TPHz4MkVGf1SVROdpfIiYGmQ78McmWjhl.png', NULL, '2019-08-26 01:43:41', '2019-08-26 01:43:41');
INSERT INTO `faults_images` VALUES (48, 23, 'images/fault/gVU68pgzSHqZkitNy5cagDjdoF59sP7VZ1cEHZTv.png', NULL, '2019-08-26 01:43:41', '2019-08-26 01:43:41');
INSERT INTO `faults_images` VALUES (49, 23, 'images/fault/k666cEXHm2gnZcECmIyA5HzYJkFjmNQfojXWdFuz.png', NULL, '2019-08-26 01:43:41', '2019-08-26 01:43:41');
INSERT INTO `faults_images` VALUES (50, 24, 'images/fault/ftfuZh12AfXb66EpcXCRkqlWnk3ytwI7Kedgzryi.jpeg', NULL, '2019-08-26 02:25:28', '2019-08-26 02:25:28');
INSERT INTO `faults_images` VALUES (51, 24, 'images/fault/KAlMN99nu9fvN6pJqo9g5Jjr1eNTanzjGbY0Rljy.jpeg', NULL, '2019-08-26 02:25:28', '2019-08-26 02:25:28');
INSERT INTO `faults_images` VALUES (52, 24, 'images/fault/pFwucZ8p5pxs1mXC43P5SMbVfat3VdvbCmjzuy0e.jpeg', NULL, '2019-08-26 02:25:29', '2019-08-26 02:25:29');
INSERT INTO `faults_images` VALUES (53, 24, 'images/fault/34ORSPm7YLzWQga30uGgnpVIErcCWwgtpk5TwjUS.jpeg', NULL, '2019-08-26 02:25:29', '2019-08-26 02:25:29');
INSERT INTO `faults_images` VALUES (54, 24, 'images/fault/Soqa0qsjXcdlIR0HtaeetoY4d6O90WbWNNvAtzwE.jpeg', NULL, '2019-08-26 02:25:29', '2019-08-26 02:25:29');
INSERT INTO `faults_images` VALUES (55, 24, 'images/fault/GjygrMFdYQbpO4iCFK9DZdHfmvk90QBCMAn3BSXC.jpeg', NULL, '2019-08-26 02:25:29', '2019-08-26 02:25:29');
INSERT INTO `faults_images` VALUES (56, 25, 'images/fault/W0jGDAMtfvRaRFtQRnwPDUvUSMxGwmTwsCvLyfB7.jpeg', NULL, '2019-08-26 08:14:11', '2019-08-26 08:14:11');
INSERT INTO `faults_images` VALUES (57, 25, 'images/fault/e1GbodgbHb7HU1TzbG81SNdRkfl4MvWJurvBUfsA.jpeg', NULL, '2019-08-26 08:17:35', '2019-08-26 08:17:35');
INSERT INTO `faults_images` VALUES (58, 25, 'images/fault/WgKcFeEO7Q0sL1cauwVfLihrVKQwPPeXJl0jXVtw.jpeg', NULL, '2019-08-26 08:18:18', '2019-08-26 08:18:18');
INSERT INTO `faults_images` VALUES (59, 25, 'images/fault/cyFqSp71Eu6gr3M9Glo2FWisxKKvMOhZq1w5LOxk.jpeg', NULL, '2019-08-26 08:18:18', '2019-08-26 08:18:18');
INSERT INTO `faults_images` VALUES (60, 25, 'images/fault/6rxGVJdbn6ZilBgFrjAl2PBtLu7jS7sbDd3hGW12.jpeg', NULL, '2019-08-26 08:18:18', '2019-08-26 08:18:18');
INSERT INTO `faults_images` VALUES (61, 25, 'images/fault/IntdJdzyzNpQSoOjG57nnEcYjBKa86Qi7fls2BiS.jpeg', NULL, '2019-08-26 08:18:18', '2019-08-26 08:18:18');
INSERT INTO `faults_images` VALUES (62, 25, 'images/fault/v8TZRqRoWANdUO6p9hjP6p4XS1dzwukrpmNj6fzm.jpeg', NULL, '2019-08-26 08:18:18', '2019-08-26 08:18:18');
INSERT INTO `faults_images` VALUES (63, 25, 'images/fault/e452fNWVNXZtMb1auapekK78vRnXsut7qD5WugHo.jpeg', NULL, '2019-08-26 08:18:18', '2019-08-26 08:18:18');
INSERT INTO `faults_images` VALUES (64, 25, 'images/fault/wOjeEMkpY2hGTCqjoLGhbXlb15JonFSBNDPQoR9v.jpeg', NULL, '2019-08-26 08:18:18', '2019-08-26 08:18:18');
INSERT INTO `faults_images` VALUES (65, 25, 'images/fault/8t3KOkoSi7ywSOC0VMWbtzBBM2lEIlUE8LtMGjTQ.jpeg', NULL, '2019-08-26 08:18:18', '2019-08-26 08:18:18');
INSERT INTO `faults_images` VALUES (66, 26, 'images/fault/nQ5PG78skHDXvYud4cpA5ah6sK0cK4RZxA26R8Wa.jpeg', NULL, '2019-08-26 08:36:42', '2019-08-26 08:36:42');
INSERT INTO `faults_images` VALUES (67, 26, 'images/fault/fjrD3WrUkX7rgkKnnMXLwtwtGvJ2Siyt9Q4GyaeT.jpeg', NULL, '2019-08-26 08:36:42', '2019-08-26 08:36:42');
INSERT INTO `faults_images` VALUES (68, 26, 'images/fault/0uRSLmfeg0GoCXpStEPqmmyHjqGgr2tdQqFHMdi6.jpeg', NULL, '2019-08-26 08:37:40', '2019-08-26 08:37:40');
INSERT INTO `faults_images` VALUES (69, 26, 'images/fault/NwrLiVFjIUyOwvHxIoMjiPzsheXnDkbYsN2x8WSU.jpeg', NULL, '2019-08-26 08:37:40', '2019-08-26 08:37:40');
INSERT INTO `faults_images` VALUES (70, 27, 'images/fault/ScF95s6X0vkHVgmUpyGWiMwPz67uQcZyIOveXrBQ.jpeg', NULL, '2019-08-26 08:41:02', '2019-08-26 08:41:02');
INSERT INTO `faults_images` VALUES (71, 27, 'images/fault/VBiJI0837PfpWirpvbDtu4ZQ1aNqVmOU1umVzj6i.jpeg', NULL, '2019-08-26 08:42:07', '2019-08-26 08:42:07');
INSERT INTO `faults_images` VALUES (72, 27, 'images/fault/2TqHFiqgp4mw4Mt5M77G5GIezCXFIrzGb1MPDLJw.jpeg', NULL, '2019-08-26 08:42:40', '2019-08-26 08:42:40');
INSERT INTO `faults_images` VALUES (73, 27, 'images/fault/ivCkTTNmg1NQfqzXKnUEEBZ25EaYory1ULo2gn7i.jpeg', NULL, '2019-08-26 08:43:23', '2019-08-26 08:43:23');
INSERT INTO `faults_images` VALUES (74, 27, 'images/fault/6QWPmXDsI63MHpPTPO85Dxv8QjRPlIOwtltZ1dzu.jpeg', NULL, '2019-08-26 08:43:24', '2019-08-26 08:43:24');
INSERT INTO `faults_images` VALUES (75, 27, 'images/fault/ym3JsOUAZ8VZ99GujVwCqEU7OzPyqDo4QzcfrbKE.jpeg', NULL, '2019-08-26 08:43:49', '2019-08-26 08:43:49');
INSERT INTO `faults_images` VALUES (76, 28, 'images/fault/kj89CuRaZOq2QJ4vdmn74X7jJXbLwIB38xOIYAUV.jpeg', NULL, '2019-08-26 08:46:24', '2019-08-26 08:46:24');
INSERT INTO `faults_images` VALUES (77, 28, 'images/fault/qRmDwvybXjX3ZMZlFOVs73kqUiscDcmiBYzsvybg.jpeg', NULL, '2019-08-26 08:46:25', '2019-08-26 08:46:25');
INSERT INTO `faults_images` VALUES (78, 28, 'images/fault/4ATNPMFaVb4A1Dksw7Dtw8VfJLasKzkZjnQouIjb.jpeg', NULL, '2019-08-26 08:48:54', '2019-08-26 08:48:54');
INSERT INTO `faults_images` VALUES (79, 28, 'images/fault/0dp33aB0LTPrg22msrNwQ1QbtUrABLGl9S6QP0GW.jpeg', NULL, '2019-08-26 08:48:55', '2019-08-26 08:48:55');
INSERT INTO `faults_images` VALUES (80, 28, 'images/fault/yKVZhUw2iNELYIKo2FwDkjpF7YZyeDMHySrwpsAR.jpeg', NULL, '2019-08-26 08:51:15', '2019-08-26 08:51:15');
INSERT INTO `faults_images` VALUES (81, 28, 'images/fault/kjLuIg3xb7sqVvpWEGERxcThgYAtVfP7tfvQRgwM.jpeg', NULL, '2019-08-26 08:51:51', '2019-08-26 08:51:51');
INSERT INTO `faults_images` VALUES (82, 29, 'images/fault/nrUCMjxiLERaZ18IbVJ7Xn2SqQPanLyTqRnQXXgE.jpeg', NULL, '2019-08-26 08:55:35', '2019-08-26 08:55:35');
INSERT INTO `faults_images` VALUES (83, 29, 'images/fault/JzOG9K3m9Dgtdxo7nJcpOv30o5vqXDNMygpRZF8y.jpeg', NULL, '2019-08-26 08:57:48', '2019-08-26 08:57:48');
INSERT INTO `faults_images` VALUES (84, 29, 'images/fault/FPwOD0LO7pNey8YQDjx3LKStZyT0t89dms9DeST6.jpeg', NULL, '2019-08-26 08:57:49', '2019-08-26 08:57:49');
INSERT INTO `faults_images` VALUES (85, 29, 'images/fault/PEgwzZwCEAE8DEi3cgI9pKJnG3hvfeisC9Ok8q74.jpeg', NULL, '2019-08-26 08:58:40', '2019-08-26 08:58:40');
INSERT INTO `faults_images` VALUES (86, 29, 'images/fault/yUi1ceR4kTmHPpMyjZGulmuHC3zD38Ti2eiY048e.jpeg', NULL, '2019-08-26 08:58:40', '2019-08-26 08:58:40');
INSERT INTO `faults_images` VALUES (87, 30, 'images/fault/mjz5P5K1y3rMyDZrKpFxNn6PsjOMwBCqECWCD3jT.jpeg', NULL, '2019-08-26 09:01:58', '2019-08-26 09:01:58');
INSERT INTO `faults_images` VALUES (88, 30, 'images/fault/F9pxHcoqyHximxtfFHPPGSRm2d0S7KX2irYoB6pj.jpeg', NULL, '2019-08-26 09:01:58', '2019-08-26 09:01:58');
INSERT INTO `faults_images` VALUES (89, 30, 'images/fault/L1Uj2LGtz6tc9zxzxUd0pRGnECPZgw127IB8bFSa.jpeg', NULL, '2019-08-26 09:02:41', '2019-08-26 09:02:41');
INSERT INTO `faults_images` VALUES (90, 30, 'images/fault/llcOUKy3zh3UB3p13aOXdolyDQcYH4nZSKToISR2.jpeg', NULL, '2019-08-26 09:02:41', '2019-08-26 09:02:41');
INSERT INTO `faults_images` VALUES (91, 30, 'images/fault/36OPEDAuCRD2yq844GDfLceTc0ZYjyCyhEwL54GI.jpeg', NULL, '2019-08-26 09:02:42', '2019-08-26 09:02:42');
INSERT INTO `faults_images` VALUES (92, 31, 'images/fault/hXZZGXTaMCJYRKpKxzDaYaVvQQv80CNpmeBaivRs.jpeg', NULL, '2019-08-26 09:09:16', '2019-08-26 09:09:16');
INSERT INTO `faults_images` VALUES (93, 31, 'images/fault/fz9t6vuri9efaK8N251tRYkXzkNLsuG2ax7E7XcJ.jpeg', NULL, '2019-08-26 09:10:57', '2019-08-26 09:10:57');
INSERT INTO `faults_images` VALUES (94, 31, 'images/fault/fkKdMKU8f7XKLuWgdRC3MbLrJld7QAsMg8U8BvUS.jpeg', NULL, '2019-08-26 09:10:58', '2019-08-26 09:10:58');
INSERT INTO `faults_images` VALUES (95, 31, 'images/fault/rrdJ8FZxZz4UIoyyDrQsI4NyK6ngUKIKcH3DWjXL.jpeg', NULL, '2019-08-26 09:10:59', '2019-08-26 09:10:59');
INSERT INTO `faults_images` VALUES (96, 31, 'images/fault/7Uk7ThbptRwtTLI9iRItQZ1FUtS7DT9cZZxgoqnp.jpeg', NULL, '2019-08-26 09:11:27', '2019-08-26 09:11:27');
INSERT INTO `faults_images` VALUES (97, 32, 'images/fault/OQIo4ncMmfQ4mFFIhEro6MrcQdTdonpdu2hAGdrw.jpeg', NULL, '2019-08-26 09:19:48', '2019-08-26 09:19:48');
INSERT INTO `faults_images` VALUES (98, 32, 'images/fault/NTUYawVVOOJgcsrk1iokhFTZYadUvuNcTOm8BCZE.jpeg', NULL, '2019-08-26 09:19:48', '2019-08-26 09:19:48');
INSERT INTO `faults_images` VALUES (99, 32, 'images/fault/TYkK4H4pSbnuBPRmSjzTfgY6Ctn43PxJ7lNYWo9T.jpeg', NULL, '2019-08-26 09:19:49', '2019-08-26 09:19:49');
INSERT INTO `faults_images` VALUES (100, 32, 'images/fault/7BeMBLWf8Uhc3mEdAtcdwiiKN4EoYgHGZFRHwhsP.jpeg', NULL, '2019-08-26 09:20:30', '2019-08-26 09:20:30');
INSERT INTO `faults_images` VALUES (101, 33, 'images/fault/9UmkzYp8DJIqRD4E7SnYXdqYYu4hcUb1JHlDJwwE.jpeg', NULL, '2019-08-26 09:25:21', '2019-08-26 09:25:21');
INSERT INTO `faults_images` VALUES (102, 33, 'images/fault/K1gaGRuFn3QR76c61BPnVUi5OJ4Zh4rCSeQVtCrl.jpeg', NULL, '2019-08-26 09:25:21', '2019-08-26 09:25:21');
INSERT INTO `faults_images` VALUES (103, 33, 'images/fault/D12fcrbiXzliOOUqeePouGYxgVozSw8fgHrz1ngP.jpeg', NULL, '2019-08-26 09:26:17', '2019-08-26 09:26:17');
INSERT INTO `faults_images` VALUES (104, 33, 'images/fault/FgXHVBZb5QbL7WBtDivAvcovGrwxCPm9urFhu45h.jpeg', NULL, '2019-08-26 09:26:17', '2019-08-26 09:26:17');
INSERT INTO `faults_images` VALUES (105, 33, 'images/fault/oeG0RUMM3bsTYobGhwNkgLUwxGD8Fbjx0xD32n6M.jpeg', NULL, '2019-08-26 09:28:59', '2019-08-26 09:28:59');
INSERT INTO `faults_images` VALUES (106, 33, 'images/fault/uWghCS7hXhfoRS6hk0xFVthVtDXTMArjCHjO1Nat.jpeg', NULL, '2019-08-26 09:29:00', '2019-08-26 09:29:00');
INSERT INTO `faults_images` VALUES (107, 33, 'images/fault/c8GNkajxmhyV1w7c0xFazHrHI8PGf7SHyX1e5Zvh.jpeg', NULL, '2019-08-26 09:29:01', '2019-08-26 09:29:01');
INSERT INTO `faults_images` VALUES (108, 33, 'images/fault/c0tQ7hasON3NzNO15N2MolIZeN26oJN2NUcCVurK.jpeg', NULL, '2019-08-26 09:30:23', '2019-08-26 09:30:23');
INSERT INTO `faults_images` VALUES (109, 34, 'images/fault/3TgLASIV7NZFZODeF1SJ7WNKJwEUs7jS8lVqxBeP.jpeg', NULL, '2019-08-26 09:33:09', '2019-08-26 09:33:09');
INSERT INTO `faults_images` VALUES (110, 34, 'images/fault/aWVvwvta1qRCJYkTGbv1u6hvu2EKkmtYbNTwtCnw.jpeg', NULL, '2019-08-26 09:35:11', '2019-08-26 09:35:11');
INSERT INTO `faults_images` VALUES (111, 34, 'images/fault/gBY0YzBQmCXFzvdg6HfpuhOs6R3RoeQF5q4QLKXZ.jpeg', NULL, '2019-08-26 09:35:12', '2019-08-26 09:35:12');
INSERT INTO `faults_images` VALUES (112, 34, 'images/fault/eDYYgDz7fomQgpepYmKtlcc5C0a7vax9tJXmmhtg.jpeg', NULL, '2019-08-26 09:35:12', '2019-08-26 09:35:12');
INSERT INTO `faults_images` VALUES (113, 35, 'images/fault/02nsow2ExyDUNHqdhNBs1SiOmRf3BxWpFNSOnb0X.jpeg', NULL, '2019-08-26 09:38:06', '2019-08-26 09:38:06');
INSERT INTO `faults_images` VALUES (114, 35, 'images/fault/Iv8taEdCLDJSQA5glhtOXFby0imCtsyFEb61LIIq.jpeg', NULL, '2019-08-26 09:38:07', '2019-08-26 09:38:07');
INSERT INTO `faults_images` VALUES (115, 35, 'images/fault/hjfzuwOL8WxEUl7BXZSHD85bVmUd4g4mp5SV5F5v.jpeg', NULL, '2019-08-26 09:39:04', '2019-08-26 09:39:04');
INSERT INTO `faults_images` VALUES (116, 35, 'images/fault/pHKnj4Bzy8XjwxHdaWCdadCv2WCB3NhHIDwzHvPk.jpeg', NULL, '2019-08-26 09:39:05', '2019-08-26 09:39:05');
INSERT INTO `faults_images` VALUES (117, 36, 'images/fault/ez7lxYwxcP17Qef74ReMULrhSy8UwCHNhIoHe445.jpeg', NULL, '2019-08-27 06:17:49', '2019-08-27 06:17:49');
INSERT INTO `faults_images` VALUES (118, 38, 'images/fault/lcwvs6i9NvUhBMu1aFbdKTBdnEaA3CAB5CTyE2iu.jpeg', NULL, '2019-08-28 06:45:47', '2019-08-28 06:45:47');
INSERT INTO `faults_images` VALUES (119, 39, 'images/fault/vEpltg3RRDv3wubAJVrGgshTkOIUUNyN8T6Zc7W8.jpeg', NULL, '2019-08-28 06:56:37', '2019-08-28 06:56:37');
INSERT INTO `faults_images` VALUES (120, 40, 'images/fault/Wpslj0pUVsatyt8tFRDtEyVrdNudQajfsAxc4uo8.jpeg', NULL, '2019-08-28 07:02:38', '2019-08-28 07:02:38');
INSERT INTO `faults_images` VALUES (121, 40, 'images/fault/MPWdHXJdDtqNoxB9YQcr1RidSwhZ0Qhe65g5U1a3.jpeg', NULL, '2019-08-28 07:02:38', '2019-08-28 07:02:38');
INSERT INTO `faults_images` VALUES (122, 41, 'images/fault/qQIrX2omcEdeufCA6UHpeh49F0FUHnSQMVIzFWNh.jpeg', NULL, '2019-09-19 01:49:09', '2019-09-19 01:49:09');
INSERT INTO `faults_images` VALUES (123, 42, 'images/fault/3zczfrJD6RuvDbW48Hn9pp0T2mNPTFNESuZnbCk8.jpeg', NULL, '2019-09-20 02:26:57', '2019-09-20 02:26:57');
INSERT INTO `faults_images` VALUES (124, 44, 'images/fault/aIGrsoxg7Jstq4vILNE55LRinOzyOZR1Gr7X4Qi7.jpeg', NULL, '2019-09-26 15:57:50', '2019-09-26 15:57:50');
INSERT INTO `faults_images` VALUES (125, 45, 'images/fault/0fHyAKI39xa1vdP11BNC7jbcUfrGIWIEZm21lYRC.jpeg', NULL, '2019-09-30 02:10:21', '2019-09-30 02:10:21');
INSERT INTO `faults_images` VALUES (126, 45, 'images/fault/llWCwpalflgKkkd5kKcd8egoDxq6aA4VCqkvcM0K.jpeg', NULL, '2019-09-30 02:10:21', '2019-09-30 02:10:21');
INSERT INTO `faults_images` VALUES (127, 45, 'images/fault/begia2PqhaH0xZ7wjPwPiTLJ84Fidl4ApsvM6h4b.jpeg', NULL, '2019-09-30 02:10:22', '2019-09-30 02:10:22');
INSERT INTO `faults_images` VALUES (128, 45, 'images/fault/SDySzpaFWo0vC7HHycRwVjqsbjTX3qRGQBH5DwWu.jpeg', NULL, '2019-09-30 02:10:23', '2019-09-30 02:10:23');
INSERT INTO `faults_images` VALUES (129, 45, 'images/fault/y7N8vn12za0sWJBIAvL2mYOyZvIkKaKgbSF6XT5q.jpeg', NULL, '2019-09-30 02:10:24', '2019-09-30 02:10:24');
INSERT INTO `faults_images` VALUES (130, 44, 'images/fault/dAfTFIjhPCtCTFXQ9K1UFDdHvudqx1IUe6IiEu1H.jpeg', NULL, '2019-10-01 01:53:29', '2019-10-01 01:53:29');
INSERT INTO `faults_images` VALUES (131, 46, 'images/fault/n9AtHGCjWBhyWsAouLNUqQefj6O5ndHZsU8Cmifb.jpeg', NULL, '2019-10-03 09:32:50', '2019-10-03 09:32:50');
INSERT INTO `faults_images` VALUES (132, 46, 'images/fault/dIdrev3iDP2dgltTrvWUKAbM2RygeFGVvrLk3l6P.jpeg', NULL, '2019-10-03 09:32:50', '2019-10-03 09:32:50');
INSERT INTO `faults_images` VALUES (133, 46, 'images/fault/owNj9off18PgWzNaaEqgbtUF9SB8kOt0wPKhGAiB.jpeg', NULL, '2019-10-03 09:32:50', '2019-10-03 09:32:50');
INSERT INTO `faults_images` VALUES (134, 41, 'images/fault/9jTD3NzOxuDyLf9QYFDusPssiFyU6bcSetmwFn4n.jpeg', NULL, '2019-10-05 01:50:17', '2019-10-05 01:50:17');
INSERT INTO `faults_images` VALUES (135, 47, 'images/fault/UKptWh69tWjGsMnusqs4wrscyjcfC2Iw5YhR4Phz.jpeg', NULL, '2019-10-06 01:28:03', '2019-10-06 01:28:03');
INSERT INTO `faults_images` VALUES (136, 47, 'images/fault/x6kYwqitxR79EIMrCIvHpU6wRidRaexeVdqZEYof.jpeg', NULL, '2019-10-06 01:28:03', '2019-10-06 01:28:03');
INSERT INTO `faults_images` VALUES (137, 48, 'images/fault/jV9TRqlv9XXqFZj5AWDbazXuPekG4xNpHBwGFrLD.jpeg', NULL, '2019-10-06 02:12:21', '2019-10-06 02:12:21');
INSERT INTO `faults_images` VALUES (138, 48, 'images/fault/apdoGKIrDCpPRmmy37IqVRsb8iaUvEtlioAnT9MM.jpeg', NULL, '2019-10-06 02:12:22', '2019-10-06 02:12:22');
INSERT INTO `faults_images` VALUES (139, 48, 'images/fault/XQ1H2ZPsn5AcmSAFBbLwybuJw0CDLxrKih6ClvGX.jpeg', NULL, '2019-10-06 02:12:22', '2019-10-06 02:12:22');
INSERT INTO `faults_images` VALUES (140, 48, 'images/fault/zzjg9cCuhKRK7M49H55TQGcSy73Gg9usg3Lyr3Pj.jpeg', NULL, '2019-10-06 02:12:22', '2019-10-06 02:12:22');
INSERT INTO `faults_images` VALUES (141, 49, 'images/fault/TK5QCr9tqgGE5nk4ARIDBxick6HZzhaNR1GI3Qfg.jpeg', NULL, '2019-10-08 08:55:32', '2019-10-08 08:55:32');
INSERT INTO `faults_images` VALUES (142, 49, 'images/fault/uoLFhbicHRYNVYF2GItxRpfwS4g6iBS3VBTvqbLj.jpeg', NULL, '2019-10-08 08:55:32', '2019-10-08 08:55:32');
INSERT INTO `faults_images` VALUES (143, 49, 'images/fault/Bi8NlNOyrpzHqqesckGLng4O3w63xILj3BiGJrOX.jpeg', NULL, '2019-10-08 08:55:32', '2019-10-08 08:55:32');
INSERT INTO `faults_images` VALUES (144, 39, 'images/fault/Qr45tMq6Iyi4Vt01CS2wgaIHnx24FRFrvWy7NzNw.jpeg', NULL, '2019-10-10 01:30:39', '2019-10-10 01:30:39');
INSERT INTO `faults_images` VALUES (145, 50, 'images/fault/FamQq6oB2kKF4VzvEU3mLRA1HIrjLkp9owzX3kWO.jpeg', NULL, '2019-10-10 01:54:16', '2019-10-10 01:54:16');
INSERT INTO `faults_images` VALUES (146, 50, 'images/fault/roMrQiN8rAE2gmFTymN6GQNgzSKE2tXA2fpyQdU3.jpeg', NULL, '2019-10-10 01:54:16', '2019-10-10 01:54:16');
INSERT INTO `faults_images` VALUES (147, 51, 'images/fault/OOv2RKPe7hKmOB9KhLDuskG6101z6Get0V6sT3Py.jpeg', NULL, '2019-10-12 08:31:56', '2019-10-12 08:31:56');
INSERT INTO `faults_images` VALUES (148, 51, 'images/fault/cj1zQtEjGEeIvMpnlWWzzh8gUvgWJsIAavcrm8Ep.jpeg', NULL, '2019-10-12 08:31:56', '2019-10-12 08:31:56');
INSERT INTO `faults_images` VALUES (149, 52, 'images/fault/W4SQ5oAzygb9zfjV4GHkiKpx658iGXb6Rzl0HRv8.jpeg', NULL, '2019-10-14 08:28:02', '2019-10-14 08:28:02');
INSERT INTO `faults_images` VALUES (150, 52, 'images/fault/rNH7eaDN49wa71CigaMuLmOBqBpuIXBJC3zyUWyC.jpeg', NULL, '2019-10-14 08:28:02', '2019-10-14 08:28:02');
INSERT INTO `faults_images` VALUES (151, 52, 'images/fault/xMVEvlK8iXx0vid6bPIQZqu2j84Vn1Xni31I4uok.jpeg', NULL, '2019-10-14 08:28:02', '2019-10-14 08:28:02');
INSERT INTO `faults_images` VALUES (152, 52, 'images/fault/0nYfThAWXLurHnp3ZJDFn0n2jQy0IhuyLjX5gj3q.jpeg', NULL, '2019-10-14 08:28:02', '2019-10-14 08:28:02');
INSERT INTO `faults_images` VALUES (153, 52, 'images/fault/UPczENAZw6CUXhKftEAjU5vMTwil1uDRdO8MnOt6.jpeg', NULL, '2019-10-14 08:28:02', '2019-10-14 08:28:02');
INSERT INTO `faults_images` VALUES (154, 52, 'images/fault/ugqIjnjtOmePRC7V2Px2bw906qAxDA3VH2AKsrGA.jpeg', NULL, '2019-10-14 08:28:03', '2019-10-14 08:28:03');
INSERT INTO `faults_images` VALUES (155, 52, 'images/fault/wJpP2TAFIjdeP8n2S31w6ZgiOxWqgRrvLSejwnds.jpeg', NULL, '2019-10-14 08:28:03', '2019-10-14 08:28:03');
INSERT INTO `faults_images` VALUES (156, 52, 'images/fault/cNTTPFWDbMwzoiWRvCqjNy2H37Bvqi6N3tnXiZkN.jpeg', NULL, '2019-10-14 08:28:03', '2019-10-14 08:28:03');
INSERT INTO `faults_images` VALUES (157, 53, 'images/fault/qD3RCVqcPz67ZxjKTA6NcYk0PPO7YL4iX5PpCHjN.jpeg', NULL, '2020-06-22 05:29:10', '2020-06-22 05:29:10');

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
) ENGINE = InnoDB AUTO_INCREMENT = 64 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of faults_systems
-- ----------------------------
INSERT INTO `faults_systems` VALUES (2, 1, 4, NULL, '2019-06-27 10:11:40', '2019-06-27 10:11:40');
INSERT INTO `faults_systems` VALUES (7, 1, 3, NULL, '2019-06-27 10:13:54', '2019-06-27 10:13:54');
INSERT INTO `faults_systems` VALUES (9, 2, 9, NULL, '2019-07-01 08:47:54', '2019-07-01 08:47:54');
INSERT INTO `faults_systems` VALUES (10, 3, 1, NULL, '2019-07-04 15:18:22', '2019-07-04 15:18:22');
INSERT INTO `faults_systems` VALUES (11, 4, 1, NULL, '2019-07-04 15:27:24', '2019-07-04 15:27:24');
INSERT INTO `faults_systems` VALUES (12, 5, 1, NULL, '2019-07-04 21:14:14', '2019-07-04 21:14:14');
INSERT INTO `faults_systems` VALUES (13, 6, 1, NULL, '2019-07-04 21:16:44', '2019-07-04 21:16:44');
INSERT INTO `faults_systems` VALUES (14, 7, 1, NULL, '2019-07-04 21:22:27', '2019-07-04 21:22:27');
INSERT INTO `faults_systems` VALUES (15, 8, 1, NULL, '2019-07-04 21:24:24', '2019-07-04 21:24:24');
INSERT INTO `faults_systems` VALUES (16, 9, 1, NULL, '2019-07-06 04:19:33', '2019-07-06 04:19:33');
INSERT INTO `faults_systems` VALUES (17, 10, 3, NULL, '2019-07-06 08:11:24', '2019-07-06 08:11:24');
INSERT INTO `faults_systems` VALUES (18, 11, 2, NULL, '2019-07-06 08:43:54', '2019-07-06 08:43:54');
INSERT INTO `faults_systems` VALUES (19, 12, 9, NULL, '2019-07-17 07:16:57', '2019-07-17 07:16:57');
INSERT INTO `faults_systems` VALUES (20, 13, 7, NULL, '2019-07-31 09:33:58', '2019-07-31 09:33:58');
INSERT INTO `faults_systems` VALUES (21, 14, 1, NULL, '2019-08-03 07:04:41', '2019-08-03 07:04:41');
INSERT INTO `faults_systems` VALUES (22, 15, 1, NULL, '2019-08-03 07:33:03', '2019-08-03 07:33:03');
INSERT INTO `faults_systems` VALUES (23, 16, 3, NULL, '2019-08-22 07:31:13', '2019-08-22 07:31:13');
INSERT INTO `faults_systems` VALUES (24, 17, 3, NULL, '2019-08-22 07:52:41', '2019-08-22 07:52:41');
INSERT INTO `faults_systems` VALUES (25, 18, 1, NULL, '2019-08-22 08:56:23', '2019-08-22 08:56:23');
INSERT INTO `faults_systems` VALUES (26, 19, 1, NULL, '2019-08-22 09:42:35', '2019-08-22 09:42:35');
INSERT INTO `faults_systems` VALUES (27, 20, 1, NULL, '2019-08-22 10:00:57', '2019-08-22 10:00:57');
INSERT INTO `faults_systems` VALUES (28, 21, 1, NULL, '2019-08-22 23:51:16', '2019-08-22 23:51:16');
INSERT INTO `faults_systems` VALUES (29, 22, 1, NULL, '2019-08-24 15:45:28', '2019-08-24 15:45:28');
INSERT INTO `faults_systems` VALUES (30, 23, 1, NULL, '2019-08-26 01:43:40', '2019-08-26 01:43:40');
INSERT INTO `faults_systems` VALUES (31, 24, 1, NULL, '2019-08-26 02:25:28', '2019-08-26 02:25:28');
INSERT INTO `faults_systems` VALUES (32, 25, 4, NULL, '2019-08-26 08:14:10', '2019-08-26 08:14:10');
INSERT INTO `faults_systems` VALUES (33, 26, 6, NULL, '2019-08-26 08:36:41', '2019-08-26 08:36:41');
INSERT INTO `faults_systems` VALUES (34, 27, 6, NULL, '2019-08-26 08:41:01', '2019-08-26 08:41:01');
INSERT INTO `faults_systems` VALUES (35, 28, 6, NULL, '2019-08-26 08:46:24', '2019-08-26 08:46:24');
INSERT INTO `faults_systems` VALUES (36, 29, 6, NULL, '2019-08-26 08:55:34', '2019-08-26 08:55:34');
INSERT INTO `faults_systems` VALUES (37, 30, 6, NULL, '2019-08-26 09:01:57', '2019-08-26 09:01:57');
INSERT INTO `faults_systems` VALUES (38, 31, 6, NULL, '2019-08-26 09:09:15', '2019-08-26 09:09:15');
INSERT INTO `faults_systems` VALUES (39, 32, 6, NULL, '2019-08-26 09:19:47', '2019-08-26 09:19:47');
INSERT INTO `faults_systems` VALUES (40, 33, 6, NULL, '2019-08-26 09:25:20', '2019-08-26 09:25:20');
INSERT INTO `faults_systems` VALUES (41, 34, 6, NULL, '2019-08-26 09:33:08', '2019-08-26 09:33:08');
INSERT INTO `faults_systems` VALUES (42, 35, 6, NULL, '2019-08-26 09:38:05', '2019-08-26 09:38:05');
INSERT INTO `faults_systems` VALUES (43, 36, 3, NULL, '2019-08-27 06:17:49', '2019-08-27 06:17:49');
INSERT INTO `faults_systems` VALUES (44, 37, 3, NULL, '2019-08-27 06:44:03', '2019-08-27 06:44:03');
INSERT INTO `faults_systems` VALUES (45, 38, 1, NULL, '2019-08-28 06:45:47', '2019-08-28 06:45:47');
INSERT INTO `faults_systems` VALUES (46, 39, 3, NULL, '2019-08-28 06:56:37', '2019-08-28 06:56:37');
INSERT INTO `faults_systems` VALUES (47, 40, 1, NULL, '2019-08-28 07:02:38', '2019-08-28 07:02:38');
INSERT INTO `faults_systems` VALUES (48, 41, 1, NULL, '2019-09-19 01:49:09', '2019-09-19 01:49:09');
INSERT INTO `faults_systems` VALUES (49, 42, 3, NULL, '2019-09-20 02:26:57', '2019-09-20 02:26:57');
INSERT INTO `faults_systems` VALUES (50, 43, 3, NULL, '2019-09-20 02:35:27', '2019-09-20 02:35:27');
INSERT INTO `faults_systems` VALUES (51, 44, 1, NULL, '2019-09-26 15:57:49', '2019-09-26 15:57:49');
INSERT INTO `faults_systems` VALUES (52, 45, 4, NULL, '2019-09-30 02:10:20', '2019-09-30 02:10:20');
INSERT INTO `faults_systems` VALUES (53, 46, 4, NULL, '2019-10-03 09:32:50', '2019-10-03 09:32:50');
INSERT INTO `faults_systems` VALUES (54, 47, 2, NULL, '2019-10-06 01:28:02', '2019-10-06 01:28:02');
INSERT INTO `faults_systems` VALUES (55, 48, 4, NULL, '2019-10-06 02:12:21', '2019-10-06 02:12:21');
INSERT INTO `faults_systems` VALUES (56, 49, 1, NULL, '2019-10-08 08:55:32', '2019-10-08 08:55:32');
INSERT INTO `faults_systems` VALUES (57, 50, 1, NULL, '2019-10-10 01:54:16', '2019-10-10 01:54:16');
INSERT INTO `faults_systems` VALUES (58, 51, 2, NULL, '2019-10-12 08:31:55', '2019-10-12 08:31:55');
INSERT INTO `faults_systems` VALUES (59, 52, 2, NULL, '2019-10-14 08:28:02', '2019-10-14 08:28:02');
INSERT INTO `faults_systems` VALUES (60, 53, 1, NULL, '2020-06-22 05:29:10', '2020-06-22 05:29:10');
INSERT INTO `faults_systems` VALUES (61, 54, 4, NULL, '2020-08-03 07:06:54', '2020-08-03 07:06:54');
INSERT INTO `faults_systems` VALUES (62, 55, 4, NULL, '2020-08-03 07:13:22', '2020-08-03 07:13:22');
INSERT INTO `faults_systems` VALUES (63, 56, 9, NULL, '2020-08-03 07:29:19', '2020-08-03 07:29:19');

-- ----------------------------
-- Table structure for inspection_approved
-- ----------------------------
DROP TABLE IF EXISTS `inspection_approved`;
CREATE TABLE `inspection_approved`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inspection_id` int(11) NULL DEFAULT NULL,
  `approved_id` int(11) NULL DEFAULT NULL,
  `comments` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for inspection_attendees
-- ----------------------------
DROP TABLE IF EXISTS `inspection_attendees`;
CREATE TABLE `inspection_attendees`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inspection_id` int(11) NULL DEFAULT NULL,
  `attendees_id` int(11) NULL DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `inspection_id`(`inspection_id`) USING BTREE,
  INDEX `attendees_id`(`attendees_id`) USING BTREE,
  CONSTRAINT `inspection_attendees_ibfk_1` FOREIGN KEY (`inspection_id`) REFERENCES `inspections` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `inspection_attendees_ibfk_2` FOREIGN KEY (`attendees_id`) REFERENCES `staffs` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of inspection_attendees
-- ----------------------------
INSERT INTO `inspection_attendees` VALUES (1, 1, 1, NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_attendees` VALUES (2, 1, 9, NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_attendees` VALUES (3, 1, 5, NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_attendees` VALUES (4, 1, 3, NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_attendees` VALUES (5, 2, 1, NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_attendees` VALUES (6, 2, 3, NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_attendees` VALUES (7, 2, 9, NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_attendees` VALUES (8, 3, 1, NULL, '2020-08-11 08:38:37', '2020-08-11 08:38:37');
INSERT INTO `inspection_attendees` VALUES (9, 3, 3, NULL, '2020-08-11 08:38:37', '2020-08-11 08:38:37');
INSERT INTO `inspection_attendees` VALUES (10, 3, 9, NULL, '2020-08-11 08:38:37', '2020-08-11 08:38:37');

-- ----------------------------
-- Table structure for inspection_checklists
-- ----------------------------
DROP TABLE IF EXISTS `inspection_checklists`;
CREATE TABLE `inspection_checklists`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inspection_id` int(11) NULL DEFAULT NULL,
  `label` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `input` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `input_type` int(11) NULL DEFAULT NULL,
  `remarks` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `inspection_id`(`inspection_id`) USING BTREE,
  CONSTRAINT `inspection_checklists_ibfk_1` FOREIGN KEY (`inspection_id`) REFERENCES `inspections` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 40 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of inspection_checklists
-- ----------------------------
INSERT INTO `inspection_checklists` VALUES (1, 1, 'Link redundancy check on PIN switch', 'Pass', 2, NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_checklists` VALUES (2, 1, 'Link redundancy check on PSN switch', 'Pass', 2, NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_checklists` VALUES (3, 1, 'Power redundancy check on PIN switch', 'Pass', 2, NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_checklists` VALUES (4, 1, 'Power redundancy check on PSN switch', 'Pass', 2, NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_checklists` VALUES (5, 1, 'Fiber optic cable management condition', 'Good', 3, NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_checklists` VALUES (6, 1, 'CAT6 cable management condition', 'Good', 3, NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_checklists` VALUES (7, 1, 'UPS A voltage', '230.2V', 5, NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_checklists` VALUES (8, 1, 'UPS B voltage', '230.3V', 5, NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_checklists` VALUES (9, 1, 'NON UPS voltage', '230.6V', 5, NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_checklists` VALUES (10, 1, 'Earthing resistant Ohm', '0.1Ohm', 5, NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_checklists` VALUES (11, 1, 'Panel light checking', 'Pass', 2, 'Panel light switch was not terminated accordingly thus make the light on for 24hours regardless the panel door was closed', '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_checklists` VALUES (12, 1, 'Fan filter dust free', 'Yes', 1, NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_checklists` VALUES (13, 1, 'Panel cleaned', 'Good', 3, NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_checklists` VALUES (14, 2, 'Link redundancy check on PIN switch', 'Pass', 2, NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_checklists` VALUES (15, 2, 'Link redundancy check on PSN switch', 'Not Available', 2, NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_checklists` VALUES (16, 2, 'Power redundancy check on PIN switch', 'Pass', 2, NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_checklists` VALUES (17, 2, 'Power redundancy check on PSN switch', 'Not Available', 2, NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_checklists` VALUES (18, 2, 'Fiber optic cable management condition', 'Good', 3, NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_checklists` VALUES (19, 2, 'CAT6 cable management condition', 'Good', 3, NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_checklists` VALUES (20, 2, 'UPS A voltage', '231.9V AC', 5, NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_checklists` VALUES (21, 2, 'UPS B voltage', '240.5V AC', 5, NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_checklists` VALUES (22, 2, 'NON UPS voltage', '240.5V AC', 5, NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_checklists` VALUES (23, 2, 'Earthing resistant Ohm', '0.1Ohm', 5, NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_checklists` VALUES (24, 2, 'Panel light checking', 'Pass', 2, NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_checklists` VALUES (25, 2, 'Fan filter dust free', 'Yes', 1, NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_checklists` VALUES (26, 2, 'Panel cleaned', 'Good', 3, NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_checklists` VALUES (27, 3, 'Link redundancy check on PIN switch', 'Not Available', 2, NULL, '2020-08-11 08:38:37', '2020-08-11 08:38:37');
INSERT INTO `inspection_checklists` VALUES (28, 3, 'Link redundancy check on PSN switch', 'Pass', 2, NULL, '2020-08-11 08:38:37', '2020-08-11 08:38:37');
INSERT INTO `inspection_checklists` VALUES (29, 3, 'Power redundancy check on PIN switch', 'Not Available', 2, NULL, '2020-08-11 08:38:37', '2020-08-11 08:38:37');
INSERT INTO `inspection_checklists` VALUES (30, 3, 'Power redundancy check on PSN switch', 'Pass', 2, NULL, '2020-08-11 08:38:37', '2020-08-11 08:38:37');
INSERT INTO `inspection_checklists` VALUES (31, 3, 'Fiber optic cable management condition', 'Good', 3, NULL, '2020-08-11 08:38:37', '2020-08-11 08:38:37');
INSERT INTO `inspection_checklists` VALUES (32, 3, 'CAT6 cable management condition', 'Not Available', 3, NULL, '2020-08-11 08:38:37', '2020-08-11 08:38:37');
INSERT INTO `inspection_checklists` VALUES (33, 3, 'UPS A voltage', '231.4V AC', 5, NULL, '2020-08-11 08:38:37', '2020-08-11 08:38:37');
INSERT INTO `inspection_checklists` VALUES (34, 3, 'UPS B voltage', '231.2V AC', 5, NULL, '2020-08-11 08:38:37', '2020-08-11 08:38:37');
INSERT INTO `inspection_checklists` VALUES (35, 3, 'NON UPS voltage', '241.1V AC', 5, NULL, '2020-08-11 08:38:37', '2020-08-11 08:38:37');
INSERT INTO `inspection_checklists` VALUES (36, 3, 'Earthing resistant Ohm', '0.1Ohm', 5, NULL, '2020-08-11 08:38:37', '2020-08-11 08:38:37');
INSERT INTO `inspection_checklists` VALUES (37, 3, 'Panel light checking', 'Pass', 2, NULL, '2020-08-11 08:38:37', '2020-08-11 08:38:37');
INSERT INTO `inspection_checklists` VALUES (38, 3, 'Fan filter dust free', 'Yes', 1, NULL, '2020-08-11 08:38:37', '2020-08-11 08:38:37');
INSERT INTO `inspection_checklists` VALUES (39, 3, 'Panel cleaned', 'Good', 3, NULL, '2020-08-11 08:38:37', '2020-08-11 08:38:37');

-- ----------------------------
-- Table structure for inspection_documents
-- ----------------------------
DROP TABLE IF EXISTS `inspection_documents`;
CREATE TABLE `inspection_documents`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inspection_id` int(11) NULL DEFAULT NULL,
  `label` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `original_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `input` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `input_type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `remarks` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `inspection_id`(`inspection_id`) USING BTREE,
  CONSTRAINT `inspection_documents_ibfk_1` FOREIGN KEY (`inspection_id`) REFERENCES `inspections` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for inspection_images
-- ----------------------------
DROP TABLE IF EXISTS `inspection_images`;
CREATE TABLE `inspection_images`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inspection_id` int(11) NULL DEFAULT NULL,
  `label` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `original_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `input` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `input_type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `remarks` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `inspection_id`(`inspection_id`) USING BTREE,
  CONSTRAINT `inspection_images_ibfk_1` FOREIGN KEY (`inspection_id`) REFERENCES `inspections` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of inspection_images
-- ----------------------------
INSERT INTO `inspection_images` VALUES (1, 1, 'Front cabinet image', 'WhatsApp Image 2020-08-08 at 10.18.03 AM (1).jpeg', 'public/images/inspection/images/AVERNekmdM5LBtItNKiGGidceMpzTKDI4JX6J1Gd.jpeg', '7', NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_images` VALUES (2, 1, 'Rear cabinet image', 'WhatsApp Image 2020-08-08 at 10.18.06 AM.jpeg', 'public/images/inspection/images/bNvjqOcsPh8AlWx6UB78ZNTJo2cK6DqGvIYlYWXE.jpeg', '7', NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_images` VALUES (3, 1, 'Internal cabinet image', 'WhatsApp Image 2020-08-08 at 10.18.07 AM (1).jpeg', 'public/images/inspection/images/2L6YUFPcqDsPXaGQN0Bw2xIeAqKQLNa8CieMl2nh.jpeg', '7', NULL, '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspection_images` VALUES (4, 2, 'Front cabinet image', 'image.jpg', 'public/images/inspection/images/Q0sBQ5OolfE4G8dhllz3jHRzF4UsRZJxEXs6nolU.jpeg', '7', NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_images` VALUES (5, 2, 'Rear cabinet image', 'image.jpg', 'public/images/inspection/images/CxuQBSzH3ygiRDwHXxBJBuBPsB4K3Q1Pi5kgwmX1.jpeg', '7', NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_images` VALUES (6, 2, 'Internal cabinet image', 'image.jpg', 'public/images/inspection/images/hAneb2GqupoumktnUxtC8lHpUkds8n0dj7eMOD7Y.jpeg', '7', NULL, '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspection_images` VALUES (7, 3, 'Front cabinet image', 'image.jpg', 'public/images/inspection/images/MvGMpDukNqHtFe4MkZu8EkMZ4bbr44uKTJCCepJb.jpeg', '7', NULL, '2020-08-11 08:38:38', '2020-08-11 08:38:38');
INSERT INTO `inspection_images` VALUES (8, 3, 'Rear cabinet image', 'image.jpg', 'public/images/inspection/images/CnWODXdsqhTU0lnHqleBKsN9BxxTvX3hq6WIQX03.jpeg', '7', NULL, '2020-08-11 08:38:38', '2020-08-11 08:38:38');
INSERT INTO `inspection_images` VALUES (9, 3, 'Internal cabinet image', 'image.jpg', 'public/images/inspection/images/cKeEugc2vdhlAx5TPLeCIKo2a39Qxq6KU2fO2VLK.jpeg', '7', NULL, '2020-08-11 08:38:38', '2020-08-11 08:38:38');

-- ----------------------------
-- Table structure for inspection_reviewed
-- ----------------------------
DROP TABLE IF EXISTS `inspection_reviewed`;
CREATE TABLE `inspection_reviewed`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inspection_id` int(11) NULL DEFAULT NULL,
  `reviewed_id` int(11) NULL DEFAULT NULL,
  `comments` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for inspections
-- ----------------------------
DROP TABLE IF EXISTS `inspections`;
CREATE TABLE `inspections`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NULL DEFAULT NULL,
  `system_id` int(11) NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date` datetime(0) NULL DEFAULT NULL,
  `building` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tag` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ready` tinyint(1) NULL DEFAULT NULL,
  `reviewed` tinyint(1) NULL DEFAULT NULL,
  `approved` tinyint(1) NULL DEFAULT NULL,
  `remarks` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `staff_id`(`staff_id`) USING BTREE,
  INDEX `system_id`(`system_id`) USING BTREE,
  CONSTRAINT `inspections_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `inspections_ibfk_2` FOREIGN KEY (`system_id`) REFERENCES `systems` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of inspections
-- ----------------------------
INSERT INTO `inspections` VALUES (1, 1, 1, 'PPM Cabinet Inspection Checklist', '2020-08-06 00:00:00', 'SUB301', 'FON701', 1, NULL, NULL, 'Panel light switch was terminated correctly according to the drawings', '2020-08-08 02:22:33', '2020-08-08 02:22:33');
INSERT INTO `inspections` VALUES (2, 1, 1, 'PPM Cabinet Inspection Checklist', '2020-08-11 00:00:00', 'FAR511', 'FON701', 1, NULL, NULL, 'OTL not terminated at Krohne block', '2020-08-11 08:30:02', '2020-08-11 08:30:02');
INSERT INTO `inspections` VALUES (3, 1, 1, 'PPM Cabinet inspection Checklist', '2020-08-11 00:00:00', 'FAR511', 'FON702', NULL, NULL, NULL, 'All in good condition', '2020-08-11 08:38:37', '2020-08-11 08:38:37');

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
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of logins
-- ----------------------------
INSERT INTO `logins` VALUES (1, 1, 'PRO0007', '$2y$10$3JbzyL.tNYzGiImKe4JG8.FdYyqe7KEJBPIa8Sf4.3YAYgCD4WViK', 'XcggBbubrXT3flhUJb11v9QA6tV6q3Nli0Cfgpm4j2UP7bz9LSBwEtcNYZsG', 1, '2019-06-13 16:58:12', '2019-06-30 07:09:45');
INSERT INTO `logins` VALUES (2, 2, 'PET01580', '$2y$10$3JbzyL.tNYzGiImKe4JG8.FdYyqe7KEJBPIa8Sf4.3YAYgCD4WViK', 'TduxVwKPH1cWGSQBAAh0tfVuHOaN4fG0FcGqGjkSHacoXry0KLzJxQG9rGKV', 1, '2019-06-29 15:47:31', '2019-06-29 15:47:31');
INSERT INTO `logins` VALUES (3, 3, 'PET03869', '$2y$10$3JbzyL.tNYzGiImKe4JG8.FdYyqe7KEJBPIa8Sf4.3YAYgCD4WViK', 'ONYAfnYZMzgeoFNcwRDOMBH7bMvTVj9t3ummvLSbJY77xdzNUa3pdW3URQco', 1, '2019-06-29 15:47:31', '2019-06-29 15:47:31');
INSERT INTO `logins` VALUES (4, 4, 'OUI34912', '$2y$10$3JbzyL.tNYzGiImKe4JG8.FdYyqe7KEJBPIa8Sf4.3YAYgCD4WViK', 'A7Q4KO1ky6ng1IUB7CbIyxwY2Q710FU31Ynhjym6FEng6caQpf4yxYleZMmV', 1, '2019-06-29 15:47:31', '2019-06-29 15:47:31');
INSERT INTO `logins` VALUES (5, 5, 'OUI47180', '$2y$10$3JbzyL.tNYzGiImKe4JG8.FdYyqe7KEJBPIa8Sf4.3YAYgCD4WViK', 'tRPL2BOsm0QgXtO28NFQFJIbnYHAjEVURfsouJyVnYBPRnnrQ0xKN6huQstZ', 1, '2019-06-29 15:47:31', '2019-06-29 15:47:31');
INSERT INTO `logins` VALUES (6, 6, 'PET04369', '$2y$10$DBZ6PlRqn2GbFj4DGSINUOaJntNGYYHpOTliorBIFe0D.gTVJpX.u', NULL, 1, '2019-07-02 01:42:13', '2019-07-02 01:42:13');
INSERT INTO `logins` VALUES (7, 7, 'PET03059', '$2y$10$aiNAp.k7tZqvGNw/OzQJXeHRrAwTAoiIpuG7hm.hKIaC4.uXRWR96', NULL, 1, '2019-07-06 07:46:25', '2019-07-06 07:46:25');
INSERT INTO `logins` VALUES (8, 8, 'OUI47179', '$2y$10$i.QE2kmffk.Ln4p3gZCfNOe6R1CN32gn0oR/71zahYUh1ZWNVKArS', 'ELbXSBTkRODt04kXjh0bfteoZMvyVnYWMbaa26nwk74wYR6U9idDyL0PH699', 1, '2019-07-09 00:16:49', '2019-07-09 00:16:49');
INSERT INTO `logins` VALUES (9, 9, 'ATR00019', '$2y$10$3JbzyL.tNYzGiImKe4JG8.FdYyqe7KEJBPIa8Sf4.3YAYgCD4WViK', NULL, 1, '2020-08-03 09:26:46', '2020-08-03 09:33:19');

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
INSERT INTO `password_resets` VALUES ('dhiauddin@protellus.com.my', '0XywOsoOg5NgaIAKO5gR8bbLc5TJlrcB', '2019-07-02 01:43:15', '2019-07-02 01:43:15');
INSERT INTO `password_resets` VALUES ('edwandy.afand@petronas.com.my', 'Mj3xa3enf0fypJMjDqSJ2TGtRHBqUGsR', '2020-05-03 06:39:55', '2020-05-03 06:39:55');
INSERT INTO `password_resets` VALUES ('khairul@mychronosys.com', 'jYVi5GS1MW9aaNCbcewYN8eV2rKIFJv1', '2020-08-09 14:16:06', '2020-08-09 14:16:06');
INSERT INTO `password_resets` VALUES ('khairul@mychronosys.com', 'htkvuEGs43BnqsLBrmzVEM4r7S3IbKwA', '2020-08-09 14:16:45', '2020-08-09 14:16:45');

-- ----------------------------
-- Table structure for priorities
-- ----------------------------
DROP TABLE IF EXISTS `priorities`;
CREATE TABLE `priorities`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `priority` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of priorities
-- ----------------------------
INSERT INTO `priorities` VALUES (1, 'Low', NULL, '2019-07-15 09:33:50', '2019-07-15 09:33:50');
INSERT INTO `priorities` VALUES (2, 'Medium', NULL, '2019-07-15 09:33:50', '2019-07-15 09:33:50');
INSERT INTO `priorities` VALUES (3, 'High', NULL, '2019-07-15 09:33:50', '2019-07-15 09:33:50');

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
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of staffs
-- ----------------------------
INSERT INTO `staffs` VALUES (1, NULL, 'Noor Dhiauddin Karim', 'dhiauddin@mychronosys.com', '01111229315', 1, NULL, '2019-06-13 23:43:59', '2020-04-12 06:05:31');
INSERT INTO `staffs` VALUES (2, NULL, 'Aswan Nor Hairis Che Omar', 'aswannorhairis.che@petronas.com.my', '0193136566', 1, NULL, '2019-06-29 15:30:21', '2019-07-06 04:14:52');
INSERT INTO `staffs` VALUES (3, NULL, 'M Faisal Abu Bakar', 'mfaisal.abubaka@petronas.com', '0127161979', 1, NULL, '2019-06-29 15:30:21', '2019-06-29 15:30:21');
INSERT INTO `staffs` VALUES (4, NULL, 'Norhisham Laham', 'norhisham@protellus.com.my', '0132582123', 1, NULL, '2019-06-29 15:52:46', '2019-06-29 15:52:46');
INSERT INTO `staffs` VALUES (5, NULL, 'Stavehogans John Little', 'stave@protellus.com.my', '01116011045', 1, NULL, '2019-06-29 15:52:46', '2019-06-29 15:52:46');
INSERT INTO `staffs` VALUES (6, NULL, 'M Faisal Abd Malik', 'mfaisal.abdmali@petronas.com', '0125925859', 1, NULL, '2019-07-02 01:42:13', '2019-07-02 01:42:13');
INSERT INTO `staffs` VALUES (7, NULL, 'Edwandy', 'edwandy.afand@petronas.com.my', '0143177375', 1, NULL, '2019-07-06 07:46:25', '2019-07-06 07:46:25');
INSERT INTO `staffs` VALUES (8, NULL, 'Yaacob Abdul Hamid', 'yaacob.abdulhamid@gmail.com', '01133339928', 1, NULL, '2019-07-09 00:16:49', '2019-07-09 00:16:49');
INSERT INTO `staffs` VALUES (9, NULL, 'Khairul', 'khairul@mychronosys.com', '0137965724', 1, NULL, '2020-08-03 09:26:46', '2020-08-03 09:26:46');

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of status
-- ----------------------------
INSERT INTO `status` VALUES (1, 'Open', NULL, '2019-07-15 09:33:50', '2019-07-15 09:33:50');
INSERT INTO `status` VALUES (2, 'Close', NULL, '2019-07-15 09:33:50', '2019-07-15 09:33:50');

-- ----------------------------
-- Table structure for swaccess_pic
-- ----------------------------
DROP TABLE IF EXISTS `swaccess_pic`;
CREATE TABLE `swaccess_pic`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `swAccess_id` int(11) NULL DEFAULT NULL,
  `swAccess_PIC` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of swaccess_pic
-- ----------------------------
INSERT INTO `swaccess_pic` VALUES (1, 1, 'Ahmad Shafiq', 'shafiq.azmi@petronas.com', NULL, '2019-10-12 07:47:27', '2019-10-12 07:47:27');
INSERT INTO `swaccess_pic` VALUES (2, 2, 'Ahmad Shafiq', 'shafiq.azmi@petronas.com', NULL, '2019-10-12 07:58:58', '2019-10-12 07:58:58');
INSERT INTO `swaccess_pic` VALUES (3, 3, 'Ahmad Shafiq', 'shafiq.azmi@petronas.com.my', NULL, '2019-10-12 08:09:03', '2019-10-12 08:09:03');
INSERT INTO `swaccess_pic` VALUES (4, 4, 'Ahmad Shafiq', 'shafiq.azmi@petronas.com', NULL, '2019-10-12 08:42:09', '2019-10-12 08:42:09');
INSERT INTO `swaccess_pic` VALUES (5, 5, 'Ahmad Shafiq', 'shafiq.azmi@petronas.com', NULL, '2019-10-12 08:46:44', '2019-10-12 08:46:44');
INSERT INTO `swaccess_pic` VALUES (6, 6, 'Javier Archie', 'javier.archie@leap-networks.com', NULL, '2019-10-12 08:52:17', '2019-10-12 08:52:17');
INSERT INTO `swaccess_pic` VALUES (7, 7, 'TimothyMark', 'timothymark.a.lnelson@technipfmc.com', NULL, '2019-10-12 08:55:03', '2019-10-12 08:55:03');
INSERT INTO `swaccess_pic` VALUES (8, 8, 'Ardian Syah', 'ardian.syah@johorport.com.my', NULL, '2019-10-12 09:02:53', '2019-10-12 09:02:53');
INSERT INTO `swaccess_pic` VALUES (9, 9, 'Ardian Syah', 'ardian.syah@johorport.com.my', NULL, '2019-10-12 09:16:06', '2019-10-12 09:16:06');
INSERT INTO `swaccess_pic` VALUES (10, 10, 'Ardian Syah', 'ardian.syah@johorport.com.my', NULL, '2019-10-12 12:58:34', '2019-10-12 12:58:34');
INSERT INTO `swaccess_pic` VALUES (11, 11, 'Ahmad Shafiq', 'shafiq.azmi@petronas.com', NULL, '2019-10-12 13:29:48', '2019-10-12 13:29:48');
INSERT INTO `swaccess_pic` VALUES (12, 12, 'Ardian Syah', 'ardian.syah@johorport.com.my', NULL, '2019-10-15 01:42:55', '2019-10-15 01:42:55');
INSERT INTO `swaccess_pic` VALUES (13, 13, 'M Shaifulnizam', 'mshaifulnizam.ahmad@petronas.com', NULL, '2019-10-15 07:06:08', '2019-10-15 07:06:08');
INSERT INTO `swaccess_pic` VALUES (14, 14, 'M Shaifulnizam Ahmad Wahiddin', 'mshaifulnizam.ahmad@petronas.com', NULL, '2019-10-18 01:21:55', '2019-10-18 01:21:55');
INSERT INTO `swaccess_pic` VALUES (16, 16, 'Ahmad Shafiq', 'ahmad.shafiq@petronas.com.my', NULL, '2019-10-22 06:44:21', '2019-10-22 06:44:21');
INSERT INTO `swaccess_pic` VALUES (17, 17, 'Ardian Syah Abdullah', 'ardian.syah@johorport.com.my', NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_pic` VALUES (18, 18, 'Ahmad Shafiq Firdaus Azmi', 'shafiq.azmi@petronas.com', NULL, '2019-11-05 06:37:39', '2019-11-05 07:43:17');
INSERT INTO `swaccess_pic` VALUES (19, 19, 'Ahmad Shafiq Firdaus Azmi', 'shafiq.azmi@petronas.com', NULL, '2019-11-05 07:41:07', '2019-11-05 07:41:07');
INSERT INTO `swaccess_pic` VALUES (20, 20, 'Ahmad Shafiq Firdaus Azmi', 'shafiq.azmi@petronas.com', NULL, '2019-11-05 07:50:44', '2019-11-05 07:50:44');
INSERT INTO `swaccess_pic` VALUES (21, 21, 'Ahmad Shafiq Firdaus Azmi', 'shafiq.azmi@petronas.com', NULL, '2019-11-12 04:03:56', '2019-11-12 04:03:56');

-- ----------------------------
-- Table structure for swaccess_ptw
-- ----------------------------
DROP TABLE IF EXISTS `swaccess_ptw`;
CREATE TABLE `swaccess_ptw`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `swAccess_id` int(11) NULL DEFAULT NULL,
  `swAccess_PTW` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of swaccess_ptw
-- ----------------------------
INSERT INTO `swaccess_ptw` VALUES (1, 2, '0032724', NULL, '2019-10-12 07:58:58', '2019-10-12 07:58:58');
INSERT INTO `swaccess_ptw` VALUES (2, 2, '0032725', NULL, '2019-10-12 07:58:58', '2019-10-12 07:58:58');
INSERT INTO `swaccess_ptw` VALUES (3, 2, '0032726', NULL, '2019-10-12 07:58:58', '2019-10-12 07:58:58');
INSERT INTO `swaccess_ptw` VALUES (4, 3, '20247', NULL, '2019-10-12 08:09:03', '2019-10-12 08:09:03');
INSERT INTO `swaccess_ptw` VALUES (5, 3, '16415', NULL, '2019-10-12 08:09:03', '2019-10-12 08:09:03');
INSERT INTO `swaccess_ptw` VALUES (6, 4, NULL, NULL, '2019-10-12 08:42:09', '2019-10-12 08:42:09');
INSERT INTO `swaccess_ptw` VALUES (7, 5, NULL, NULL, '2019-10-12 08:46:44', '2019-10-12 08:46:44');
INSERT INTO `swaccess_ptw` VALUES (8, 6, NULL, NULL, '2019-10-12 08:52:17', '2019-10-12 08:52:17');
INSERT INTO `swaccess_ptw` VALUES (10, 8, NULL, NULL, '2019-10-12 09:02:53', '2019-10-12 09:02:53');
INSERT INTO `swaccess_ptw` VALUES (11, 9, '0019601', NULL, '2019-10-12 09:16:06', '2019-10-12 09:16:06');
INSERT INTO `swaccess_ptw` VALUES (12, 10, NULL, NULL, '2019-10-12 12:58:34', '2019-10-12 12:58:34');
INSERT INTO `swaccess_ptw` VALUES (14, 13, NULL, NULL, '2019-10-15 07:06:08', '2019-10-15 07:06:08');

-- ----------------------------
-- Table structure for swaccess_switch
-- ----------------------------
DROP TABLE IF EXISTS `swaccess_switch`;
CREATE TABLE `swaccess_switch`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `swAccess_id` int(11) NULL DEFAULT NULL,
  `switch_id` int(11) NULL DEFAULT NULL,
  `swtag_id` int(11) NULL DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 121 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of swaccess_switch
-- ----------------------------
INSERT INTO `swaccess_switch` VALUES (1, 1, 106, 137, NULL, '2019-10-12 07:47:27', '2019-10-12 07:49:38');
INSERT INTO `swaccess_switch` VALUES (2, 1, 99, 127, NULL, '2019-10-12 07:47:27', '2019-10-12 07:49:38');
INSERT INTO `swaccess_switch` VALUES (4, 1, 108, 139, NULL, '2019-10-12 07:47:27', '2019-10-12 07:49:38');
INSERT INTO `swaccess_switch` VALUES (5, 1, 103, 133, NULL, '2019-10-12 07:47:27', '2019-10-12 07:49:38');
INSERT INTO `swaccess_switch` VALUES (6, 1, 110, 141, NULL, '2019-10-12 07:47:27', '2019-10-12 07:49:38');
INSERT INTO `swaccess_switch` VALUES (7, 1, 102, 131, NULL, '2019-10-12 07:49:38', '2019-10-12 07:49:38');
INSERT INTO `swaccess_switch` VALUES (8, 2, 113, 145, NULL, '2019-10-12 07:58:58', '2019-10-12 07:58:58');
INSERT INTO `swaccess_switch` VALUES (9, 2, 116, 149, NULL, '2019-10-12 07:58:58', '2019-10-12 07:58:58');
INSERT INTO `swaccess_switch` VALUES (10, 2, 118, 151, NULL, '2019-10-12 07:58:58', '2019-10-12 07:58:58');
INSERT INTO `swaccess_switch` VALUES (11, 3, 2, 3, NULL, '2019-10-12 08:09:03', '2019-10-12 08:09:03');
INSERT INTO `swaccess_switch` VALUES (12, 3, 1, 1, NULL, '2019-10-12 08:09:03', '2019-10-12 08:09:03');
INSERT INTO `swaccess_switch` VALUES (13, 3, 9, 13, NULL, '2019-10-12 08:09:03', '2019-10-12 08:09:03');
INSERT INTO `swaccess_switch` VALUES (14, 3, 5, 7, NULL, '2019-10-12 08:09:03', '2019-10-12 08:09:03');
INSERT INTO `swaccess_switch` VALUES (15, 3, 6, 9, NULL, '2019-10-12 08:09:03', '2019-10-12 08:09:03');
INSERT INTO `swaccess_switch` VALUES (16, 3, 11, 15, NULL, '2019-10-12 08:09:03', '2019-10-12 08:09:03');
INSERT INTO `swaccess_switch` VALUES (17, 4, 129, 167, NULL, '2019-10-12 08:42:09', '2019-10-17 07:29:45');
INSERT INTO `swaccess_switch` VALUES (18, 4, 125, 161, NULL, '2019-10-12 08:42:09', '2019-10-17 07:29:45');
INSERT INTO `swaccess_switch` VALUES (19, 4, 136, 175, NULL, '2019-10-12 08:42:09', '2019-10-17 07:29:45');
INSERT INTO `swaccess_switch` VALUES (20, 4, 132, 171, NULL, '2019-10-12 08:42:09', '2019-10-17 07:29:45');
INSERT INTO `swaccess_switch` VALUES (21, 4, 121, 155, NULL, '2019-10-12 08:42:09', '2019-10-17 07:29:45');
INSERT INTO `swaccess_switch` VALUES (22, 4, 134, 173, NULL, '2019-10-12 08:42:09', '2019-10-17 07:29:45');
INSERT INTO `swaccess_switch` VALUES (23, 5, 1, 1, NULL, '2019-10-12 08:46:44', '2019-10-21 08:12:52');
INSERT INTO `swaccess_switch` VALUES (24, 5, 2, 3, NULL, '2019-10-12 08:46:44', '2019-10-21 08:12:52');
INSERT INTO `swaccess_switch` VALUES (25, 5, 9, 13, NULL, '2019-10-12 08:46:44', '2019-10-21 08:12:52');
INSERT INTO `swaccess_switch` VALUES (26, 5, 5, 7, NULL, '2019-10-12 08:46:44', '2019-10-21 08:12:52');
INSERT INTO `swaccess_switch` VALUES (27, 5, 6, 9, NULL, '2019-10-12 08:46:44', '2019-10-21 08:12:52');
INSERT INTO `swaccess_switch` VALUES (28, 5, 11, 15, NULL, '2019-10-12 08:46:44', '2019-10-21 08:12:52');
INSERT INTO `swaccess_switch` VALUES (29, 6, 36, 47, NULL, '2019-10-12 08:52:17', '2019-10-14 02:38:14');
INSERT INTO `swaccess_switch` VALUES (30, 7, 352, 476, NULL, '2019-10-12 08:55:03', '2019-10-14 02:38:05');
INSERT INTO `swaccess_switch` VALUES (31, 8, 167, 219, NULL, '2019-10-12 09:02:53', '2019-10-12 09:02:53');
INSERT INTO `swaccess_switch` VALUES (32, 9, 150, 193, NULL, '2019-10-12 09:16:06', '2019-10-12 12:50:27');
INSERT INTO `swaccess_switch` VALUES (33, 9, 151, 197, NULL, '2019-10-12 09:16:06', '2019-10-12 12:50:27');
INSERT INTO `swaccess_switch` VALUES (34, 9, 152, 199, NULL, '2019-10-12 09:16:06', '2019-10-12 12:50:27');
INSERT INTO `swaccess_switch` VALUES (35, 9, 153, 201, NULL, '2019-10-12 09:16:06', '2019-10-12 12:50:27');
INSERT INTO `swaccess_switch` VALUES (36, 9, 154, 204, NULL, '2019-10-12 09:16:06', '2019-10-12 12:50:27');
INSERT INTO `swaccess_switch` VALUES (37, 9, 170, 222, NULL, '2019-10-12 09:16:06', '2019-10-12 12:50:27');
INSERT INTO `swaccess_switch` VALUES (38, 9, 170, 222, NULL, '2019-10-12 09:16:06', '2019-10-12 12:50:27');
INSERT INTO `swaccess_switch` VALUES (39, 9, 160, 211, NULL, '2019-10-12 09:16:06', '2019-10-12 12:50:27');
INSERT INTO `swaccess_switch` VALUES (40, 9, 166, 218, NULL, '2019-10-12 09:16:06', '2019-10-12 12:50:27');
INSERT INTO `swaccess_switch` VALUES (42, 9, 167, 219, NULL, '2019-10-12 09:17:10', '2019-10-12 12:50:27');
INSERT INTO `swaccess_switch` VALUES (43, 9, 162, 213, NULL, '2019-10-12 12:50:27', '2019-10-12 12:50:27');
INSERT INTO `swaccess_switch` VALUES (44, 10, 150, 193, NULL, '2019-10-12 12:58:34', '2019-10-12 12:58:34');
INSERT INTO `swaccess_switch` VALUES (45, 10, 151, 197, NULL, '2019-10-12 12:58:34', '2019-10-12 12:58:34');
INSERT INTO `swaccess_switch` VALUES (46, 10, 152, 199, NULL, '2019-10-12 12:58:34', '2019-10-12 12:58:34');
INSERT INTO `swaccess_switch` VALUES (47, 10, 153, 201, NULL, '2019-10-12 12:58:34', '2019-10-12 12:58:34');
INSERT INTO `swaccess_switch` VALUES (48, 10, 154, 204, NULL, '2019-10-12 12:58:34', '2019-10-12 12:58:34');
INSERT INTO `swaccess_switch` VALUES (49, 10, 169, 221, NULL, '2019-10-12 12:58:34', '2019-10-12 12:58:34');
INSERT INTO `swaccess_switch` VALUES (50, 10, 170, 222, NULL, '2019-10-12 12:58:34', '2019-10-12 12:58:34');
INSERT INTO `swaccess_switch` VALUES (51, 10, 160, 211, NULL, '2019-10-12 12:58:34', '2019-10-12 12:58:34');
INSERT INTO `swaccess_switch` VALUES (52, 10, 164, 215, NULL, '2019-10-12 12:58:34', '2019-10-12 12:58:34');
INSERT INTO `swaccess_switch` VALUES (53, 10, 166, 218, NULL, '2019-10-12 12:58:34', '2019-10-12 12:58:34');
INSERT INTO `swaccess_switch` VALUES (54, 10, 167, 219, NULL, '2019-10-12 12:58:34', '2019-10-12 12:58:34');
INSERT INTO `swaccess_switch` VALUES (55, 10, 162, 213, NULL, '2019-10-12 12:58:34', '2019-10-12 12:58:34');
INSERT INTO `swaccess_switch` VALUES (57, 11, 398, 1067, NULL, '2019-10-12 13:56:25', '2019-10-29 07:12:37');
INSERT INTO `swaccess_switch` VALUES (58, 12, 150, 196, NULL, '2019-10-15 01:42:55', '2019-10-18 09:09:20');
INSERT INTO `swaccess_switch` VALUES (59, 12, 150, 196, NULL, '2019-10-15 01:42:55', '2019-10-18 09:09:20');
INSERT INTO `swaccess_switch` VALUES (60, 12, 150, 196, NULL, '2019-10-15 01:42:55', '2019-10-18 09:09:20');
INSERT INTO `swaccess_switch` VALUES (61, 12, 150, 196, NULL, '2019-10-15 01:42:55', '2019-10-18 09:09:20');
INSERT INTO `swaccess_switch` VALUES (62, 12, 151, 198, NULL, '2019-10-15 01:42:55', '2019-10-18 09:09:20');
INSERT INTO `swaccess_switch` VALUES (63, 12, 151, 198, NULL, '2019-10-15 01:42:55', '2019-10-18 09:09:20');
INSERT INTO `swaccess_switch` VALUES (64, 12, 153, 203, NULL, '2019-10-15 01:42:55', '2019-10-18 09:09:20');
INSERT INTO `swaccess_switch` VALUES (65, 12, 153, 203, NULL, '2019-10-15 01:42:55', '2019-10-18 09:09:20');
INSERT INTO `swaccess_switch` VALUES (66, 12, 153, 203, NULL, '2019-10-15 01:42:55', '2019-10-18 09:09:20');
INSERT INTO `swaccess_switch` VALUES (67, 12, 164, 216, NULL, '2019-10-15 01:42:55', '2019-10-18 09:09:20');
INSERT INTO `swaccess_switch` VALUES (68, 12, 164, 216, NULL, '2019-10-15 01:42:55', '2019-10-18 09:09:20');
INSERT INTO `swaccess_switch` VALUES (69, 12, 162, 213, NULL, '2019-10-15 01:42:55', '2019-10-18 09:09:20');
INSERT INTO `swaccess_switch` VALUES (70, 12, 170, 222, NULL, '2019-10-15 01:42:55', '2019-10-18 09:09:20');
INSERT INTO `swaccess_switch` VALUES (71, 13, 355, 480, NULL, '2019-10-15 07:06:08', '2019-10-29 07:11:09');
INSERT INTO `swaccess_switch` VALUES (72, 13, 359, 484, NULL, '2019-10-15 07:06:08', '2019-10-29 07:11:09');
INSERT INTO `swaccess_switch` VALUES (73, 13, 357, 482, NULL, '2019-10-15 07:06:08', '2019-10-29 07:11:09');
INSERT INTO `swaccess_switch` VALUES (74, 14, 351, 474, NULL, '2019-10-18 01:21:55', '2019-10-29 07:08:48');
INSERT INTO `swaccess_switch` VALUES (75, 14, 352, 476, NULL, '2019-10-18 01:21:55', '2019-10-29 07:08:48');
INSERT INTO `swaccess_switch` VALUES (77, 16, 396, 1063, NULL, '2019-10-22 06:44:21', '2019-10-29 07:14:24');
INSERT INTO `swaccess_switch` VALUES (78, 17, 150, 193, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (79, 17, 150, 194, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (80, 17, 150, 195, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (81, 17, 150, 196, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (82, 17, 151, 197, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (83, 17, 151, 198, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (84, 17, 152, 199, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (85, 17, 152, 200, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (86, 17, 153, 201, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (87, 17, 153, 202, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (88, 17, 153, 203, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (89, 17, 154, 204, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (90, 17, 169, 221, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (91, 17, 170, 222, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (92, 17, 160, 211, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (93, 17, 164, 215, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (94, 17, 166, 218, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (95, 17, 167, 219, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (96, 17, 162, 213, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `swaccess_switch` VALUES (97, 18, 76, 97, NULL, '2019-11-05 06:37:39', '2019-11-16 06:57:08');
INSERT INTO `swaccess_switch` VALUES (98, 18, 76, 97, NULL, '2019-11-05 06:37:39', '2019-11-16 06:57:08');
INSERT INTO `swaccess_switch` VALUES (99, 18, 77, 98, NULL, '2019-11-05 06:37:39', '2019-11-16 06:57:08');
INSERT INTO `swaccess_switch` VALUES (100, 18, 80, 103, NULL, '2019-11-05 06:37:39', '2019-11-16 06:57:08');
INSERT INTO `swaccess_switch` VALUES (101, 18, 80, 103, NULL, '2019-11-05 06:37:39', '2019-11-16 06:57:08');
INSERT INTO `swaccess_switch` VALUES (102, 18, 90, 116, NULL, '2019-11-05 06:37:39', '2019-11-16 06:57:08');
INSERT INTO `swaccess_switch` VALUES (103, 18, 92, 118, NULL, '2019-11-05 06:37:39', '2019-11-16 06:57:09');
INSERT INTO `swaccess_switch` VALUES (104, 18, 96, 123, NULL, '2019-11-05 06:37:39', '2019-11-16 06:57:09');
INSERT INTO `swaccess_switch` VALUES (105, 18, 96, 123, NULL, '2019-11-05 06:37:39', '2019-11-16 06:57:09');
INSERT INTO `swaccess_switch` VALUES (106, 18, 88, 114, NULL, '2019-11-05 07:25:06', '2019-11-16 06:57:09');
INSERT INTO `swaccess_switch` VALUES (107, 18, 81, 104, NULL, '2019-11-05 07:32:43', '2019-11-16 06:57:09');
INSERT INTO `swaccess_switch` VALUES (108, 19, 396, 1063, NULL, '2019-11-05 07:41:07', '2019-11-16 06:59:15');
INSERT INTO `swaccess_switch` VALUES (109, 19, 398, 1067, NULL, '2019-11-05 07:41:07', '2019-11-16 06:59:15');
INSERT INTO `swaccess_switch` VALUES (110, 20, 138, 177, NULL, '2019-11-05 07:50:44', '2019-11-05 07:50:44');
INSERT INTO `swaccess_switch` VALUES (111, 20, 138, 178, NULL, '2019-11-05 07:50:44', '2019-11-05 07:50:44');
INSERT INTO `swaccess_switch` VALUES (112, 20, 142, 184, NULL, '2019-11-05 07:50:44', '2019-11-05 07:50:44');
INSERT INTO `swaccess_switch` VALUES (113, 20, 148, 190, NULL, '2019-11-05 07:50:44', '2019-11-05 07:50:44');
INSERT INTO `swaccess_switch` VALUES (114, 20, 148, 191, NULL, '2019-11-05 07:50:44', '2019-11-05 07:50:44');
INSERT INTO `swaccess_switch` VALUES (115, 20, 144, 186, NULL, '2019-11-05 07:50:44', '2019-11-05 07:50:44');
INSERT INTO `swaccess_switch` VALUES (116, 21, 125, 161, NULL, '2019-11-12 04:03:56', '2019-11-16 07:03:40');
INSERT INTO `swaccess_switch` VALUES (117, 21, 136, 175, NULL, '2019-11-12 04:03:56', '2019-11-16 07:03:40');
INSERT INTO `swaccess_switch` VALUES (118, 21, 92, 118, NULL, '2019-11-13 01:58:44', '2019-11-16 07:03:40');
INSERT INTO `swaccess_switch` VALUES (119, 21, 212, 278, NULL, '2019-11-13 01:58:44', '2019-11-16 07:03:40');
INSERT INTO `swaccess_switch` VALUES (120, 21, 213, 280, NULL, '2019-11-13 01:58:44', '2019-11-16 07:03:40');

-- ----------------------------
-- Table structure for switch_tags
-- ----------------------------
DROP TABLE IF EXISTS `switch_tags`;
CREATE TABLE `switch_tags`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `switch_id` int(11) NULL DEFAULT NULL,
  `tag_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `switch_id`(`switch_id`) USING BTREE,
  CONSTRAINT `switch_tags_ibfk_1` FOREIGN KEY (`switch_id`) REFERENCES `switches` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1071 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of switch_tags
-- ----------------------------
INSERT INTO `switch_tags` VALUES (1, 1, 'FAR131-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (2, 1, 'FAR131-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (3, 2, 'FAR131-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (4, 3, 'FAR131-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (5, 3, 'FAR131-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (6, 4, 'FAR131-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (7, 5, 'FAR132-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (8, 5, 'FAR132-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (9, 6, 'FAR132-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (10, 7, 'FAR132-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (11, 7, 'FAR132-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (12, 8, 'FAR132-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (13, 9, 'SUB131-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (14, 10, 'SUB131-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (15, 11, 'SUB132-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (16, 12, 'SUB132-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (17, 13, 'FAR111-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (18, 13, 'FAR111-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (19, 14, 'FAR111-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (20, 15, 'FAR111-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (21, 15, 'FAR111-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (22, 16, 'FAR111-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (23, 17, 'FAR121-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (24, 17, 'FAR121-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (25, 18, 'FAR121-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (26, 19, 'FAR121-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (27, 19, 'FAR121-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (28, 20, 'FAR121-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (29, 21, 'FAR122-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (30, 21, 'FAR122-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (31, 22, 'FAR122-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (32, 23, 'FAR122-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (33, 23, 'FAR122-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (34, 24, 'FAR122-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (35, 25, 'SUB111-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (36, 26, 'SUB111-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (37, 27, 'SUB121-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (38, 28, 'SUB121-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (39, 29, 'SUB122-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (40, 30, 'SUB122-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (41, 31, 'SUB152-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (42, 32, 'SUB152-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (43, 33, 'OSB101-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (44, 34, 'OSB101-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (45, 35, 'FAR123-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (46, 35, 'FAR123-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (47, 36, 'FAR123-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (48, 37, 'FAR123-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (49, 37, 'FAR123-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (50, 38, 'FAR123-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (51, 39, 'FAR142-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (52, 39, 'FAR142-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (53, 40, 'FAR142-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (54, 41, 'FAR142-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (55, 41, 'FAR142-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (56, 42, 'FAR142-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (57, 43, 'FAR151-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (58, 43, 'FAR151-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (59, 44, 'FAR151-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (60, 45, 'FAR151-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (61, 45, 'FAR151-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (62, 46, 'FAR151-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (63, 47, 'SUB122-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (64, 48, 'SUB122-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (65, 49, 'SUB123-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (66, 50, 'SUB123-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (67, 51, 'SUB143-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (68, 52, 'SUB143-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (69, 53, 'SUB151-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (70, 54, 'SUB151-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (71, 55, 'OSB103-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (72, 56, 'OSB103-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (73, 57, 'OSB105-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (74, 58, 'OSB105-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (75, 59, 'CMH111-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (76, 60, 'FAR171-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (77, 60, 'FAR171-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (78, 61, 'FAR171-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (79, 62, 'FAR171-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (80, 62, 'FAR171-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (81, 63, 'FAR171-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (82, 64, 'LCB174-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (83, 64, 'LCB174-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (84, 65, 'LCB174-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (85, 66, 'LCB174-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (86, 66, 'LCB174-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (87, 67, 'LCB174-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (88, 68, 'SUB161-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (89, 69, 'SUB161-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (90, 70, 'SUB171-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (91, 71, 'SUB171-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (92, 72, 'SUB173-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (93, 73, 'SUB173-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (94, 74, 'OSB106-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (95, 75, 'OSB106-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (96, 76, 'FAR210-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (97, 76, 'FAR210-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (98, 77, 'FAR210-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (99, 78, 'FAR210-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (100, 78, 'FAR210-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (101, 79, 'FAR210-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (102, 80, 'FAR240-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (103, 80, 'FAR240-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (104, 81, 'FAR240-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (105, 82, 'FAR240-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (106, 82, 'FAR240-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (107, 83, 'FAR240-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (108, 84, 'FAR240-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (109, 84, 'FAR240-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (110, 85, 'FAR240-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (111, 86, 'FAR240-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (112, 86, 'FAR240-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (113, 87, 'FAR240-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (114, 88, 'SUB210-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (115, 89, 'SUB210-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (116, 90, 'SUB240-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (117, 91, 'SUB240-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (118, 92, 'SUB473-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (119, 93, 'SUB473-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (120, 94, 'SUB521-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (121, 95, 'SUB521-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (122, 96, 'OSB201-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (123, 96, 'OSB201-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (124, 97, 'OSB201-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (125, 98, 'FAR320-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (126, 98, 'FAR320-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (127, 99, 'FAR320-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (128, 100, 'FAR320-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (129, 100, 'FAR320-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (130, 101, 'FAR320-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (131, 102, 'FAR530-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (132, 102, 'FAR530-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (133, 103, 'FAR530-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (134, 104, 'FAR530-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (135, 104, 'FAR530-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (136, 105, 'FAR530-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (137, 106, 'OSB301-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (138, 107, 'OSB301-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (139, 108, 'SUB320-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (140, 109, 'SUB320-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (141, 110, 'SUB530-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (142, 111, 'SUB530-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (143, 112, 'FAR330-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (144, 112, 'FAR330-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (145, 113, 'FAR330-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (146, 114, 'FAR330-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (147, 114, 'FAR330-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (148, 115, 'FAR330-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (149, 116, 'SUB330-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (150, 117, 'SUB330-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (151, 118, 'STR8401-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (152, 119, 'STR8401-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (153, 120, 'FAR322-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (154, 120, 'FAR322-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (155, 121, 'FAR322-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (156, 122, 'FAR322-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (157, 122, 'FAR322-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (158, 123, 'FAR322-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (159, 124, 'FAR523-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (160, 124, 'FAR523-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (161, 125, 'FAR523-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (162, 126, 'FAR523-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (163, 126, 'FAR523-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (164, 127, 'FAR523-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (165, 128, 'LCR541-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (166, 128, 'LCR541-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (167, 129, 'LCR541-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (168, 130, 'LCR541-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (169, 130, 'LCR541-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (170, 131, 'LCR541-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (171, 132, 'OSB304-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (172, 133, 'OSB304-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (173, 134, 'SUB322-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (174, 135, 'SUB322-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (175, 136, 'SUB523-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (176, 137, 'SUB523-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (177, 138, 'LCR555-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (178, 138, 'LCR555-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (179, 139, 'LCR555-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (180, 139, 'LCR555-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (181, 140, 'LCR555-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (182, 140, 'LCR555-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (183, 141, 'LCR555-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (184, 142, 'SUB555-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (185, 143, 'SUB555-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (186, 144, 'BLD551-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (187, 145, 'BLD551-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (188, 146, 'BLD552-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (189, 147, 'BLD552-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (190, 148, 'BLD553-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (191, 148, 'BLD553-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (192, 149, 'BLD553-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (193, 150, 'BLD701-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (194, 150, 'BLD701-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (195, 150, 'BLD701-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (196, 150, 'BLD701-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (197, 151, 'BLD701-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (198, 151, 'BLD701-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (199, 152, 'BLD701-GES-007', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (200, 152, 'BLD701-GES-008', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (201, 153, 'BLD701-GES-009', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (202, 153, 'BLD701-GES-010', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (203, 153, 'BLD701-GES-011', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (204, 154, 'BLD701-GES-012', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (205, 155, 'BLD701-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (206, 155, 'BLD701-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (207, 156, 'BLD701-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (208, 157, 'BLD701-GES-106', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (209, 158, 'BLD701-GES-107', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (210, 159, 'BLD701-GES-108', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (211, 160, 'BLD703-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (212, 161, 'BLD703-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (213, 162, 'BLD706-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (214, 163, 'BLD706-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (215, 164, 'GHB751-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (216, 164, 'GHB751-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (217, 165, 'GHB751-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (218, 166, 'GHB752-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (219, 167, 'MWB701-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (220, 168, 'MWB701-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (221, 169, 'SUB750-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (222, 170, 'SUB751-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (223, 171, 'SUB751-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (224, 172, 'CTR100-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (225, 172, 'CTR100-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (226, 173, 'CTR100-GES-007', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (227, 174, 'CTR100-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (228, 174, 'CTR100-GES-007', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (229, 175, 'CTR100-GES-010', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (230, 176, 'CTR101-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (231, 176, 'CTR101-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (232, 177, 'CTR102-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (233, 177, 'CTR102-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (234, 178, 'TCR100-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (235, 178, 'TCR100-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (236, 179, 'CTR100-GCS-803', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (237, 180, 'CTR100-GCS-804', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (238, 181, 'CTR100-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (239, 182, 'CTR100-GES-106', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (240, 183, 'CTR100-SWT-001', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (241, 184, 'CTR101-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (242, 185, 'CTR102-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (243, 186, 'TCR100-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (244, 187, 'CTR200-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (245, 187, 'CTR200-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (246, 188, 'CTR200-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (247, 189, 'CTR200-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (248, 189, 'CTR200-GES-007', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (249, 190, 'CTR200-GES-008', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (250, 191, 'CTR202-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (251, 192, 'CTR203-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (252, 193, 'CTR204-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (253, 194, 'TCR001-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (254, 194, 'TCR001-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (255, 195, 'TCR002-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (256, 195, 'TCR002-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (257, 196, 'CTR200-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (258, 196, 'CTR200-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (259, 197, 'CTR200-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (260, 198, 'CTR200-GES-106', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (261, 199, 'CTR202-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (262, 200, 'CTR203-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (263, 201, 'CTR204-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (264, 202, 'TCR001-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (265, 203, 'TCR002-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (266, 204, 'FAR420-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (267, 204, 'FAR420-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (268, 205, 'FAR420-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (269, 206, 'FAR420-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (270, 206, 'FAR420-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (271, 207, 'FAR420-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (272, 208, 'FAR472-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (273, 208, 'FAR472-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (274, 209, 'FAR472-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (275, 210, 'FAR472-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (276, 210, 'FAR472-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (277, 211, 'FAR472-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (278, 212, 'FAR475-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (279, 212, 'FAR475-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (280, 213, 'FAR475-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (281, 214, 'FAR475-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (282, 214, 'FAR475-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (283, 215, 'FAR475-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (284, 216, 'FAR480-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (285, 216, 'FAR480-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (286, 217, 'FAR480-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (287, 218, 'FAR480-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (288, 218, 'FAR480-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (289, 219, 'FAR480-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (290, 220, '4110-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (291, 221, '4110-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (292, 222, '4120-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (293, 223, '4120-GES-106', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (294, 224, '4130-GES-007', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (295, 225, '4130-GES-107', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (296, 226, '4130-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (297, 227, '4130-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (298, 228, '4140-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (299, 229, '4140-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (300, 230, 'BLD810-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (301, 230, 'BLD810-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (302, 231, 'BLD810-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (303, 232, 'BLD810-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (304, 232, 'BLD810-GES-009', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (305, 233, 'BLD810-GES-007', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (306, 233, 'BLD810-GES-008', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (307, 234, 'BLD810-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (308, 234, 'BLD810-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (309, 235, 'BLD810-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (310, 236, 'BLD810-GES-106', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (311, 237, 'BLD810-GCS-803', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (312, 238, 'BLD810-SWT-001', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (313, 239, 'CFS801-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (314, 239, 'CFS801-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (315, 240, 'CFS801-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (316, 241, 'CMH101-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (317, 242, 'CMH103-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (318, 243, 'CMH120-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (319, 244, 'CMH128-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (320, 245, 'CMH180-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (321, 246, 'CMH440-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (322, 247, 'CMH680-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (323, 248, 'CMH780-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (324, 249, 'CMH801-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (325, 250, 'CMH802-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (326, 251, 'CMH912-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (327, 252, 'CMH921-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (328, 253, 'CSB501-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (329, 253, 'CSB501-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (330, 254, 'CSB501-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (331, 255, 'GHB803-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (332, 256, 'GHB803-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (333, 257, 'GHB804-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (334, 258, 'GHB804-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (335, 259, 'LBB801-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (336, 259, 'LBB801-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (337, 260, 'LBB801-GES-007', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (338, 260, 'LBB801-GES-008', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (339, 260, 'LBB801-GES-030', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (340, 261, 'LBB801-GES-010', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (341, 261, 'LBB801-GES-022', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (342, 261, 'LBB801-LAN-9906', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (343, 261, 'LBB801-LAN-9907', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (344, 261, 'LBB801-LAN-9908', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (345, 262, 'LBB801-GES-014', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (346, 262, 'LBB801-GES-015', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (347, 262, 'LBB801-LAN-9906', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (348, 262, 'LBB801-LAN-9907', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (349, 262, 'LBB801-LAN-9908', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (350, 263, 'LBB801-GES-018', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (351, 263, 'LBB801-GES-033', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (352, 263, 'LBB801-LAN-9909', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (353, 263, 'LBB801-LAN-9910', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (354, 263, 'LBB801-LAN-9911', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (355, 264, 'LBB801-GES-021', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (356, 264, 'LBB801-LAN-9912', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (357, 264, 'LBB801-LAN-9913', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (358, 264, 'LBB801-LAN-9914', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (359, 265, 'LBB801-GES-024', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (360, 265, 'LBB801-GES-025', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (361, 266, 'LBB801-GES-026', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (362, 266, 'LBB801-GES-027', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (363, 266, 'LBB801-LAN-9915', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (364, 266, 'LBB801-LAN-9916', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (365, 266, 'LBB801-LAN-9917', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (366, 267, 'LBB801-GES-029', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (367, 267, 'LBB801-LAN-9918', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (368, 267, 'LBB801-LAN-9919', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (369, 267, 'LBB801-LAN-9920', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (370, 268, 'LBB801-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (371, 269, 'LBB801-GES-106', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (372, 270, 'LBB801-GES-107', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (373, 271, 'LBB802-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (374, 272, 'LBB802-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (375, 273, 'LBB803-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (376, 274, 'LBB803-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (377, 275, 'LBB804-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (378, 276, 'LBB804-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (379, 277, 'LCB839-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (380, 277, 'LCB839-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (381, 278, 'LCB839-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (382, 279, 'LCB839-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (383, 279, 'LCB839-GES-007', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (384, 280, 'LCB839-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (385, 280, 'LCB839-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (386, 281, 'LCB839-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (387, 282, 'LCB839-GES-106', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (388, 283, 'OSB102-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (389, 284, 'OSB102-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (390, 285, 'OSB104-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (391, 286, 'OSB104-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (392, 287, 'OSB401-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (393, 288, 'OSB401-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (394, 289, 'OSB403-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (395, 290, 'OSB403-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (396, 291, 'OSB405-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (397, 292, 'OSB405-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (398, 293, 'SHL401-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (399, 294, 'SHL401-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (400, 295, 'SHL801-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (401, 296, 'SHL801-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (402, 297, 'SHL701-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (403, 298, 'SUB101-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (404, 299, 'SUB101-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (405, 300, 'SUB102-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (406, 301, 'SUB102-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (407, 302, 'SUB301-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (408, 303, 'SUB301-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (409, 304, 'SUB302-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (410, 305, 'SUB302-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (411, 306, 'SUB401-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (412, 307, 'SUB401-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (413, 308, 'SUB402-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (414, 309, 'SUB402-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (415, 310, 'SUB420-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (416, 311, 'SUB420-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (417, 312, 'SUB472-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (418, 313, 'SUB472-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (419, 314, 'SUB475-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (420, 315, 'SUB475-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (421, 316, 'SUB480-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (422, 317, 'SUB480-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (423, 318, 'SUB551-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (424, 319, 'SUB551-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (425, 320, 'SUB602-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (426, 321, 'SUB602-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (427, 322, 'SUB622-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (428, 323, 'SUB622-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (429, 324, 'SUB811-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (430, 325, 'SUB811-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (431, 326, 'SUB831-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (432, 327, 'SUB831-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (433, 328, 'SUB839-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (434, 329, 'SUB839-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (435, 330, 'SUB841-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (436, 331, 'SUB841-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (437, 332, 'WHB801-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (438, 332, 'WHB801-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (439, 332, 'WHB801-GES-007', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (440, 333, 'WHB801-GES-008', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (441, 333, 'WHB801-GES-009', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (442, 333, 'WHB801-GES-010', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (443, 334, 'WHB801-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (444, 335, 'MWB801-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (445, 335, 'MWB801-GES-007', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (446, 336, 'MWB801-GES-008', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (447, 336, 'MWB801-GES-009', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (448, 337, 'MWB801-GES-010', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (449, 337, 'MWB801-GES-011', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (450, 338, 'MWB801-GES-012', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (451, 338, 'MWB801-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (452, 339, 'MWB801-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (453, 340, 'MWB801-GES-106', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (454, 341, 'MWB802-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (455, 342, 'MWB802-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (456, 342, 'MWB802-GES-009', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (457, 342, 'MWB802-GES-010', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (458, 342, 'MWB802-GES-011', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (459, 343, 'MWB802-GES-013', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (460, 344, 'MWB802-GES-014', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (461, 344, 'MWB802-GES-015', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (462, 344, 'MWB802-GES-016', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (463, 344, 'MWB802-GES-017', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (464, 345, 'MWB802-GES-018', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (465, 345, 'MWB802-GES-019', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (466, 345, 'MWB802-GES-020', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (467, 346, 'MWB802-GES-021', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (468, 347, 'MWB802-GES-027', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (469, 347, 'MWB802-GES-028', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (470, 347, 'MWB802-GES-029', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (471, 348, 'MWB802-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (472, 349, 'MWB802-GES-106', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (473, 350, 'MWB802-GES-107', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (474, 351, 'FAR630-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (475, 351, 'FAR630-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (476, 352, 'FAR630-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (477, 353, 'FAR630-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (478, 353, 'FAR630-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (479, 354, 'FAR630-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (480, 355, 'OSB402-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (481, 356, 'OSB402-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (482, 357, 'SUB631-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (483, 358, 'SUB631-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (484, 359, 'SUB632-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (485, 360, 'SUB632-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (486, 361, 'LCB485-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (487, 361, 'LCB485-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (488, 362, 'LCB485-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (489, 363, 'LCB485-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (490, 363, 'LCB485-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (491, 364, 'LCB485-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (492, 365, 'SUB485-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (493, 366, 'SUB485-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (494, 367, 'FAR511-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (495, 367, 'FAR511-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (496, 368, 'FAR511-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (497, 369, 'FAR511-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (498, 369, 'FAR511-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (499, 370, 'FAR511-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (500, 371, 'FAR515-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (501, 371, 'FAR515-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (502, 372, 'FAR515-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (503, 373, 'FAR515-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (504, 373, 'FAR515-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (505, 374, 'FAR515-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (506, 375, 'FAR519-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (507, 375, 'FAR519-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (508, 376, 'FAR519-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (509, 377, 'FAR519-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (510, 377, 'FAR519-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (511, 378, 'FAR519-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (512, 379, 'SUB511-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (513, 380, 'SUB511-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (514, 381, 'SUB512-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (515, 382, 'SUB512-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (516, 383, 'SUB513-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (517, 384, 'SUB513-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (518, 385, 'OSB501-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (519, 386, 'OSB501-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (520, 387, 'CTR207-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (521, 387, 'CTR207-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (522, 388, 'CTR207-GCS-803', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (523, 389, 'CTR207-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (524, 390, 'FAR361-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (525, 390, 'FAR361-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (526, 391, 'FAR361-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (527, 392, 'FAR361-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (528, 392, 'FAR361-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (529, 393, 'FAR361-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (530, 394, 'OSB361-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (531, 395, 'OSB361-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1001, 347, 'MWB802-GES-029', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1002, 348, 'MWB802-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1003, 349, 'MWB802-GES-106', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1004, 350, 'MWB802-GES-107', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1005, 351, 'FAR630-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1006, 351, 'FAR630-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1007, 352, 'FAR630-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1008, 353, 'FAR630-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1009, 353, 'FAR630-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1010, 354, 'FAR630-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1011, 355, 'OSB402-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1012, 356, 'OSB402-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1013, 357, 'SUB631-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1014, 358, 'SUB631-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1015, 359, 'SUB632-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1016, 360, 'SUB632-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1017, 361, 'LCB485-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1018, 361, 'LCB485-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1019, 362, 'LCB485-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1020, 363, 'LCB485-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1021, 363, 'LCB485-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1022, 364, 'LCB485-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1023, 365, 'SUB485-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1024, 366, 'SUB485-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1025, 367, 'FAR511-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1026, 367, 'FAR511-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1027, 368, 'FAR511-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1028, 369, 'FAR511-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1029, 369, 'FAR511-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1030, 370, 'FAR511-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1031, 371, 'FAR515-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1032, 371, 'FAR515-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1033, 372, 'FAR515-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1034, 373, 'FAR515-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1035, 373, 'FAR515-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1036, 374, 'FAR515-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1037, 375, 'FAR519-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1038, 375, 'FAR519-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1039, 376, 'FAR519-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1040, 377, 'FAR519-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1041, 377, 'FAR519-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1042, 378, 'FAR519-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1043, 379, 'SUB511-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1044, 380, 'SUB511-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1045, 381, 'SUB512-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1046, 382, 'SUB512-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1047, 383, 'SUB513-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1048, 384, 'SUB513-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1049, 385, 'OSB501-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1050, 386, 'OSB501-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1051, 387, 'CTR207-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1052, 387, 'CTR207-GES-006', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1053, 388, 'CTR207-GCS-803', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1054, 389, 'CTR207-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1055, 390, 'FAR361-GES-003', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1056, 390, 'FAR361-GES-004', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1057, 391, 'FAR361-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1058, 392, 'FAR361-GES-103', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1059, 392, 'FAR361-GES-104', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1060, 393, 'FAR361-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1061, 394, 'OSB361-GES-005', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1062, 395, 'OSB361-GES-105', NULL, '2019-09-11 22:02:00', '2019-09-11 22:02:00');
INSERT INTO `switch_tags` VALUES (1063, 396, 'CTR100-GES-001', NULL, '2019-10-12 21:35:03', '2019-10-12 21:35:06');
INSERT INTO `switch_tags` VALUES (1064, 396, 'CTR100-GES-002', NULL, '2019-10-12 21:35:25', '2019-10-12 21:35:27');
INSERT INTO `switch_tags` VALUES (1065, 397, 'CTR100-GES-101', NULL, '2019-10-12 21:37:33', '2019-10-12 21:37:36');
INSERT INTO `switch_tags` VALUES (1066, 397, 'CTR100-GES-102', NULL, '2019-10-12 21:38:01', '2019-10-12 21:38:04');
INSERT INTO `switch_tags` VALUES (1067, 398, 'CTR200-GES-001', NULL, '2019-10-12 21:47:44', '2019-10-12 21:47:46');
INSERT INTO `switch_tags` VALUES (1068, 398, 'CTR200-GES-002', NULL, '2019-10-12 21:48:04', '2019-10-12 21:48:06');
INSERT INTO `switch_tags` VALUES (1069, 399, 'CTR200-GES-101', NULL, '2019-10-12 21:49:17', '2019-10-12 21:49:20');
INSERT INTO `switch_tags` VALUES (1070, 399, 'CTR200-GES-102', NULL, '2019-10-12 21:49:37', '2019-10-12 21:49:45');

-- ----------------------------
-- Table structure for switchaccess
-- ----------------------------
DROP TABLE IF EXISTS `switchaccess`;
CREATE TABLE `switchaccess`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NULL DEFAULT NULL,
  `date` date NULL DEFAULT NULL,
  `company` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `request_start` date NULL DEFAULT NULL,
  `request_end` date NULL DEFAULT NULL,
  `access_start` date NULL DEFAULT NULL,
  `access_end` date NULL DEFAULT NULL,
  `status_id` int(11) NULL DEFAULT NULL,
  `remarks` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of switchaccess
-- ----------------------------
INSERT INTO `switchaccess` VALUES (1, 1, '2019-08-28', 'PET ICT', 'P6A switch access and FON utilization', '2019-08-28', '2019-09-04', '2019-08-29', '2019-09-05', 2, NULL, '2019-10-12 07:47:27', '2019-10-12 07:47:27');
INSERT INTO `switchaccess` VALUES (2, 1, '2019-09-04', 'PET-ICT', 'P7 switch access and FON utilization', '2019-09-04', '2019-10-17', '2019-10-05', '2019-10-18', 2, NULL, '2019-10-12 07:58:58', '2019-10-12 07:58:58');
INSERT INTO `switchaccess` VALUES (3, 1, '2019-09-06', 'INF-IINF/PET-ICT', 'P1 PIN switch access and PW work activities', '2019-09-06', '2019-09-18', '2019-09-07', '2019-10-19', 2, NULL, '2019-10-12 08:09:03', '2019-10-12 08:09:03');
INSERT INTO `switchaccess` VALUES (4, 1, '2019-10-08', 'PET-ICT', 'P11 switch access', '2019-10-09', '2019-10-15', '2019-10-14', '2019-10-17', 2, NULL, '2019-10-12 08:42:09', '2019-10-17 07:29:45');
INSERT INTO `switchaccess` VALUES (5, 1, '2019-10-10', 'PET-ICT', 'P1 access switch request', '2019-10-10', '2019-10-16', '2019-10-14', '2019-10-21', 2, NULL, '2019-10-12 08:46:44', '2019-10-21 08:12:52');
INSERT INTO `switchaccess` VALUES (6, 1, '2019-10-08', 'Leap Networks Pte Ltd', 'P28B TEL extension number (connected in FAR-123 new ATA)', '2019-10-07', '2019-10-10', '2019-10-07', '2019-10-10', 2, NULL, '2019-10-12 08:52:17', '2019-10-14 02:38:14');
INSERT INTO `switchaccess` VALUES (7, 1, '2019-10-02', 'i U&I', 'P16A FAR630 voice gateway config check', '2019-10-02', '2019-10-05', '2019-10-02', '2019-10-05', 2, NULL, '2019-10-12 08:55:03', '2019-10-14 02:38:05');
INSERT INTO `switchaccess` VALUES (8, 1, '2019-09-18', 'SPJ', 'Temporary Password for network switch', '2019-09-18', '2019-09-20', '2019-09-18', '2019-09-20', 2, NULL, '2019-10-12 09:02:53', '2019-10-12 09:02:53');
INSERT INTO `switchaccess` VALUES (9, 1, '2019-09-25', 'SPJ', 'Temporary Password for network switch', '2019-09-26', '2019-09-30', '2019-09-26', '2019-09-30', 2, NULL, '2019-10-12 09:16:06', '2019-10-12 12:50:27');
INSERT INTO `switchaccess` VALUES (10, 1, '2019-10-04', 'SPJ', 'Temporary Password for network switch', '2019-10-05', '2019-10-09', '2019-10-05', '2019-10-10', 2, NULL, '2019-10-12 12:58:34', '2019-10-12 12:58:34');
INSERT INTO `switchaccess` VALUES (11, 1, '2019-10-12', 'PET-ICT', 'Package 29 :Request an access to MCB 602 Core switch', '2019-10-12', '2019-10-18', '2019-10-14', '2019-10-29', 2, NULL, '2019-10-12 13:29:48', '2019-10-29 07:12:37');
INSERT INTO `switchaccess` VALUES (12, 1, '2019-10-14', 'SPJ', 'Temporary Password for network switch (8ML-VRJ-JESL)', '2019-10-15', '2019-10-16', '2019-10-15', '2019-10-18', 2, NULL, '2019-10-15 01:42:55', '2019-10-18 09:09:20');
INSERT INTO `switchaccess` VALUES (13, 1, '2019-10-15', 'EXT/PET-ICT', 'Package 16A (ETP) :Request an access to Switch for troubleshoot AP', '2019-10-16', '2019-10-22', '2019-10-16', '2019-10-29', 2, NULL, '2019-10-15 07:06:08', '2019-10-29 07:11:09');
INSERT INTO `switchaccess` VALUES (14, 1, '2019-10-17', 'EXT/PET-ICT', 'Package 16A (ETP) :Request access to Core Switch MCB601 and Switch FAR 630', '2019-10-18', '2019-10-22', '2019-10-18', '2019-10-29', 2, NULL, '2019-10-18 01:21:55', '2019-10-29 07:08:48');
INSERT INTO `switchaccess` VALUES (16, 1, '2019-10-22', 'PET-ICT', 'No Subject', '2019-10-22', '2019-10-24', '2019-10-22', '2019-10-29', 2, NULL, '2019-10-22 06:44:21', '2019-10-29 07:14:24');
INSERT INTO `switchaccess` VALUES (17, 1, '2019-10-22', 'SPJ', 'RAPID P12B Telecommunication and Instrumentation Meeting 25th October 2017 Minutes of Meeting', '2019-10-22', '2019-10-28', '2019-10-23', NULL, 1, NULL, '2019-10-23 06:47:37', '2019-10-23 06:47:37');
INSERT INTO `switchaccess` VALUES (18, 1, '2019-11-05', 'INF-IINF/PET-ICT', 'Package 5 switch access request', '2019-11-05', '2019-11-15', '2019-11-05', '2019-11-16', 2, NULL, '2019-11-05 06:37:39', '2019-11-16 06:57:08');
INSERT INTO `switchaccess` VALUES (19, 1, '2019-11-05', 'INF-IINF/PET-ICT', 'Package 5 switch access request.', '2019-11-05', '2019-11-11', '2019-11-05', '2019-11-16', 2, NULL, '2019-11-05 07:41:07', '2019-11-16 06:59:15');
INSERT INTO `switchaccess` VALUES (20, 1, '2019-11-05', 'INF-IINF/PET-ICT', 'P12A access switch', '2019-11-05', '2019-11-15', NULL, NULL, 1, NULL, '2019-11-05 07:50:44', '2019-11-05 07:50:44');
INSERT INTO `switchaccess` VALUES (21, 1, '2019-11-11', 'INF-IINF/PET-ICT', 'AP Down P11 & P14', '2019-11-08', '2019-11-14', '2019-11-11', '2019-11-16', 2, NULL, '2019-11-12 04:03:56', '2019-11-16 07:03:40');

-- ----------------------------
-- Table structure for switches
-- ----------------------------
DROP TABLE IF EXISTS `switches`;
CREATE TABLE `switches`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hostname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 400 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of switches
-- ----------------------------
INSERT INTO `switches` VALUES (1, 'PIC481.6750-FAR-131.GF.TR1.PI.RS.38.01', '10.39.249.20', NULL, '2019-09-09 16:11:33', '2019-09-09 16:11:36');
INSERT INTO `switches` VALUES (2, 'PIC481.6750-FAR-131.GF.TR1.PI.ES.38.01', '10.39.249.21', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (3, 'PIC481.6750-FAR-131.GF.TR1.PS.RS.38.01', '10.39.109.4', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (4, 'PIC481.6750-FAR-131.GF.TR1.PS.ES.38.01', '10.39.109.5', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (5, 'PIC481.6750-FAR-132.GF.TR1.PI.RS.38.01', '10.39.249.24', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (6, 'PIC481.6750-FAR-132.GF.TR1.PI.ES.38.01', '10.39.249.25', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (7, 'PIC481.6750-FAR-132.GF.TR1.PS.RS.38.01', '10.39.109.8', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (8, 'PIC481.6750-FAR-132.GF.TR1.PS.ES.38.01', '10.39.109.9', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (9, 'PIC481.6850-SUB-131.GF.TR1.PI.ES.38.01', '10.39.249.23', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (10, 'PIC481.6850-SUB-131.GF.TR1.PS.ES.38.01', '10.39.109.7', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (11, 'PIC481.6850-SUB-132.GF.TR1.PI.ES.38.01', '10.39.249.26', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (12, 'PIC481.6850-SUB-132.GF.TR1.PS.ES.38.01', '10.39.109.10', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (13, 'PIC481.6750-FAR-111.GF.TR1.PI.RS.38.01', '10.39.249.8', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (14, 'PIC481.6750-FAR-111.GF.TR1.PI.ES.38.01', '10.39.249.9', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (15, 'PIC481.6750-FAR-111.GF.TR1.PS.RS.38.01', '10.39.109.11', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (16, 'PIC481.6750-FAR-111.GF.TR1.PS.ES.38.01', '10.39.109.12', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (17, 'PIC481.6750-FAR-121.GF.TR1.PI.RS.38.01', '10.39.249.12', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (18, 'PIC481.6750-FAR-121.GF.TR1.PI.ES.38.01', '10.39.249.13', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (19, 'PIC481.6750-FAR-121.GF.TR1.PS.RS.38.01', '10.39.109.15', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (20, 'PIC481.6750-FAR-121.GF.TR1.PS.ES.38.01', '10.39.109.16', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (21, 'PIC481.6750-FAR-122.GF.TR1.PI.RS.38.01', '10.39.249.16', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (22, 'PIC481.6750-FAR-122.GF.TR1.PI.ES.38.01', '10.39.249.17', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (23, 'PIC481.6750-FAR-122.GF.TR1.PS.RS.38.01', '10.39.109.19', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (24, 'PIC481.6750-FAR-122.GF.TR1.PS.ES.38.01', '10.39.109.20', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (25, 'PIC481.6850-SUB-111.GF.TR1.PI.ES.38.01', '10.39.249.11', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (26, 'PIC481.6850-SUB-111.GF.TR1.PS.ES.38.01', '10.39.109.14', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (27, 'PIC481.6850-SUB-121.GF.TR1.PI.ES.38.01', '10.39.249.15', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (28, 'PIC481.6850-SUB-121.GF.TR1.PS.ES.38.01', '10.39.109.18', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (29, 'PIC481.6850-SUB-122.GF.TR1.PI.ES.38.01', '10.39.249.18', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (30, 'PIC481.6850-SUB-122.GF.TR1.PS.ES.38.01', '10.39.109.21', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (31, 'PIC481.6850-SUB-152.GF.TR1.PI.ES.38.01', '10.39.249.19', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (32, 'PIC481.6850-SUB-152.GF.TR1.PS.ES.38.01', '10.39.109.22', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (33, 'PIC481.6760-OSB-101.GF.TR1.PI.ES.38.01', '10.39.249.10', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (34, 'PIC481.6760-OSB-101.GF.TR1.PS.ES.38.01', '10.39.109.13', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (35, 'PIC481.6750-FAR-123.GF.TR1.PI.RS.38.01', '10.39.249.27', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (36, 'PIC481.6750-FAR-123.GF.TR1.PI.ES.38.01', '10.39.249.28', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (37, 'PIC481.6750-FAR-123.GF.TR1.PS.RS.38.01', '10.39.109.23', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (38, 'PIC481.6750-FAR-123.GF.TR1.PS.ES.38.01', '10.39.109.24', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (39, 'PIC481.6750-FAR-142.GF.TR1.PI.RS.38.01', '10.39.249.31', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (40, 'PIC481.6750-FAR-142.GF.TR1.PI.ES.38.01', '10.39.249.32', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (41, 'PIC481.6750-FAR-142.GF.TR1.PS.RS.38.01', '10.39.109.27', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (42, 'PIC481.6750-FAR-142.GF.TR1.PS.ES.38.01', '10.39.109.28', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (43, 'PIC481.6750-FAR-151.GF.TR1.PI.RS.38.01', '10.39.249.34', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (44, 'PIC481.6750-FAR-151.GF.TR1.PI.ES.38.01', '10.39.249.35', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (45, 'PIC481.6750-FAR-151.GF.TR1.PS.RS.38.01', '10.39.109.30', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (46, 'PIC481.6750-FAR-151.GF.TR1.PS.ES.38.01', '10.39.109.31', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (47, 'PIC481.6850-SUB-112.GF.TR1.PI.ES.38.01', '10.39.249.37', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (48, 'PIC481.6850-SUB-112.GF.TR1.PS.ES.38.01', '10.39.109.33', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (49, 'PIC481.6850-SUB-123.GF.TR1.PI.ES.38.01', '10.39.249.30', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (50, 'PIC481.6850-SUB-123.GF.TR1.PS.ES.38.01', '10.39.109.26', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (51, 'PIC481.6850-SUB-143.GF.TR1.PI.ES.38.01', '10.39.249.33', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (52, 'PIC481.6850-SUB-143.GF.TR1.PS.ES.38.01', '10.39.109.29', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (53, 'PIC481.6850-SUB-151.GF.TR1.PI.ES.38.01', '10.39.249.38', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (54, 'PIC481.6850-SUB-151.GF.TR1.PS.ES.38.01', '10.39.109.34', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (55, 'PIC481.6760-OSB-103.GF.TR1.PI.ES.38.01', '10.39.249.36', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (56, 'PIC481.6760-OSB-103.GF.TR1.PS.ES.38.01', '10.39.109.32', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (57, 'PIC481.6760-OSB-105.GF.TR1.PI.ES.38.01', '10.39.249.29', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (58, 'PIC481.6760-OSB-105.GF.TR1.PS.ES.38.01', '10.39.109.25', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (59, 'PIC481.1900-CMH-111.GF.TR1.PS.ES.38.01', '10.39.109.35', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (60, 'PIC481.6750-FAR-171.GF.TR1.PI.RS.38.01', '10.39.249.39', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (61, 'PIC481.6750-FAR-171.GF.TR1.PI.ES.38.01', '10.39.249.40', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (62, 'PIC481.6750-FAR-171.GF.TR1.PS.RS.38.01', '10.39.109.36', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (63, 'PIC481.6750-FAR-171.GF.TR1.PS.ES.38.01', '10.39.109.37', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (64, 'PIC481.6720-LCB-174.GF.TR1.PI.RS.38.01', '10.39.249.44', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (65, 'PIC481.6720-LCB-174.GF.TR1.PI.ES.38.01', '10.39.249.45', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (66, 'PIC481.6720-LCB-174.GF.TR1.PS.RS.38.01', '10.39.109.41', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (67, 'PIC481.6720-LCB-174.GF.TR1.PS.ES.38.01', '10.39.109.42', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (68, 'PIC481.6850-SUB-161.GF.TR1.PI.ES.38.01', '10.39.249.42', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (69, 'PIC481.6850-SUB-161.GF.TR1.PS.ES.38.01', '10.39.109.39', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (70, 'PIC481.6850-SUB-171.GF.TR1.PI.ES.38.01', '10.39.249.43', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (71, 'PIC481.6850-SUB-171.GF.TR1.PS.ES.38.01', '10.39.109.40', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (72, 'PIC481.6850-SUB-173.GF.TR1.PI.ES.38.01', '10.39.249.46', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (73, 'PIC481.6850-SUB-173.GF.TR1.PS.ES.38.01', '10.39.109.43', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (74, 'PIC481.6760-OSB-106.GF.TR1.PI.ES.38.01', '10.39.249.41', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (75, 'PIC481.6760-OSB-106.GF.TR1.PS.ES.38.01', '10.39.109.38', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (76, 'PIC481.6750-FAR-210.GF.TR1.PI.RS.38.01', '10.39.247.1', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (77, 'PIC481.6750-FAR-210.GF.TR1.PI.ES.38.01', '10.39.247.2', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (78, 'PIC481.6750-FAR-210.GF.TR1.PS.RS.38.01', '10.39.110.1', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (79, 'PIC481.6750-FAR-210.GF.TR1.PS.ES.38.01', '10.39.110.2', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (80, 'PIC481.6750-FAR-240.GF.TR1.PI.RS.38.01', '10.39.247.4', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (81, 'PIC481.6750-FAR-240.GF.TR1.PI.ES.38.01', '10.39.247.5', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (82, 'PIC481.6750-FAR-240.GF.TR1.PS.RS.38.01', '10.39.110.4', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (83, 'PIC481.6750-FAR-240.GF.TR1.PS.ES.38.01', '10.39.110.5', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (84, 'PIC481.6750-FAR-521.GF.TR1.PI.RS.38.01', '10.39.247.8', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (85, 'PIC481.6750-FAR-521.GF.TR1.PI.ES.38.01', '10.39.247.9', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (86, 'PIC481.6750-FAR-521.GF.TR1.PS.RS.38.01', '10.39.110.8', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (87, 'PIC481.6750-FAR-521.GF.TR1.PS.ES.38.01', '10.39.110.9', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (88, 'PIC481.6850-SUB-210.GF.TR1.PI.ES.38.01', '10.39.247.3', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (89, 'PIC481.6850-SUB-210.GF.TR1.PS.ES.38.01', '10.39.110.3', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (90, 'PIC481.6850-SUB-240.GF.TR1.PI.ES.38.01', '10.39.247.7', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (91, 'PIC481.6850-SUB-240.GF.TR1.PS.ES.38.01', '10.39.110.7', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (92, 'PIC481.6850-SUB-473.GF.TR1.PI.ES.38.01', '10.39.247.11', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (93, 'PIC481.6850-SUB-473.GF.TR1.PS.ES.38.01', '10.39.110.11', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (94, 'PIC481.6850-SUB-521.GF.TR1.PI.ES.38.01', '10.39.247.10', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (95, 'PIC481.6850-SUB-521.GF.TR1.PS.ES.38.01', '10.39.110.10', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (96, 'PIC481.6760-OSB-201.GF.TR1.PI.ES.38.01', '10.39.247.6', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (97, 'PIC481.6760-OSB-201.GF.TR1.PS.ES.38.01', '10.39.110.6', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (98, 'PIC481.6750-FAR-320.GF.TR1.PI.RS.38.01', '10.39.247.83', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (99, 'PIC481.6750-FAR-320.GF.TR1.PI.ES.38.01', '10.39.247.84', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (100, 'PIC481.6750-FAR-320.GF.TR1.PS.RS.38.01', '10.39.110.84', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (101, 'PIC481.6750-FAR-320.GF.TR1.PS.ES.38.01', '10.39.110.85', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (102, 'PIC481.6750-FAR-530.GF.TR1.PI.RS.38.01', '10.39.247.87', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (103, 'PIC481.6750-FAR-530.GF.TR1.PI.ES.38.01', '10.39.247.88', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (104, 'PIC481.6750-FAR-530.GF.TR1.PS.RS.38.01', '10.39.110.88', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (105, 'PIC481.6750-FAR-530.GF.TR1.PS.ES.38.01', '10.39.110.89', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (106, 'PIC481.6760-OSB-301.GF.TR1.PI.ES.38.01', '10.39.247.85', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (107, 'PIC481.6760-OSB-301.GF.TR1.PS.ES.38.01', '10.39.110.86', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (108, 'PIC481.6850-SUB-320.GF.TR1.PI.ES.38.01', '10.39.247.86', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (109, 'PIC481.6850-SUB-320.GF.TR1.PS.ES.38.01', '10.39.110.87', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (110, 'PIC481.6850-SUB-530.GF.TR1.PI.ES.38.01', '10.39.247.89', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (111, 'PIC481.6850-SUB-530.GF.TR1.PS.ES.38.01', '10.39.110.90', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (112, 'PIC481.6750-FAR-330.GF.TR1.PI.RS.38.01', '10.39.247.90', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (113, 'PIC481.6750-FAR-330.GF.TR1.PI.ES.38.01', '10.39.247.91', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (114, 'PIC481.6750-FAR-330.GF.TR1.PS.RS.38.01', '10.39.110.91', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (115, 'PIC481.6750-FAR-330.GF.TR1.PS.ES.38.01', '10.39.110.92', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (116, 'PIC481.6850-SUB-330.GF.TR1.PI.ES.38.01', '10.39.247.92', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (117, 'PIC481.6850-SUB-330.GF.TR1.PS.ES.38.01', '10.39.110.93', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (118, 'PIC481.3315-STR-8401.GF.TR1.PI.ES.38.01', '10.39.247.93', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (119, 'PIC481.3315-STR-8401.GF.TR1.PS.ES.38.01', '10.39.110.94', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (120, 'PIC481.6750-FAR-322.GF.TR1.PI.RS.38.01', '10.39.247.94', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (121, 'PIC481.6750-FAR-322.GF.TR1.PI.ES.38.01', '10.39.247.95', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (122, 'PIC481.6750-FAR-322.GF.TR1.PS.RS.38.01', '10.39.110.95', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (123, 'PIC481.6750-FAR-322.GF.TR1.PS.ES.38.01', '10.39.110.96', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (124, 'PIC481.6720-FAR-523.GF.TR1.PI.RS.38.01', '10.39.247.98', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (125, 'PIC481.6720-FAR-523.GF.TR1.PI.ES.38.01', '10.39.247.99', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (126, 'PIC481.6720-FAR-523.GF.TR1.PS.RS.38.01', '10.39.110.99', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (127, 'PIC481.6720-FAR-523.GF.TR1.PS.ES.38.01', '10.39.110.100', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (128, 'PIC481.6720-LCR-541.GF.TR1.PI.RS.38.01', '10.39.247.101', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (129, 'PIC481.6720-LCR-541.GF.TR1.PI.ES.38.01', '10.39.247.102', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (130, 'PIC481.6720-LCR-541.GF.TR1.PS.RS.38.01', '10.39.110.131', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (131, 'PIC481.6720-LCR-541.GF.TR1.PS.ES.38.01', '10.39.110.132', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (132, 'PIC481.6760-OSB-304.GF.TR1.PI.ES.38.01', '10.39.247.96', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (133, 'PIC481.6760-OSB-304.GF.TR1.PS.ES.38.01', '10.39.110.97', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (134, 'PIC481.6850-SUB-322.GF.TR1.PI.ES.38.01', '10.39.247.97', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (135, 'PIC481.6850-SUB-322.GF.TR1.PS.ES.38.01', '10.39.110.98', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (136, 'PIC481.6850-SUB-523.GF.TR1.PI.ES.38.01', '10.39.247.100', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (137, 'PIC481.6850-SUB-523.GF.TR1.PS.ES.38.01', '10.39.110.130', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (138, 'PIC481.6720-LCR-555.GF.TR1.PI.RS.38.01', '10.39.247.103', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (139, 'PIC481.6720-LCR-555.GF.TR1.PI.ES.38.01', '10.39.247.104', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (140, 'PIC481.6720-LCR-555.GF.TR1.PS.RS.38.01', '10.39.110.133', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (141, 'PIC481.6720-LCR-555.GF.TR1.PS.ES.38.01', '10.39.110.134', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (142, 'PIC481.6850-SUB-555.GF.TR1.PI.ES.38.01', '10.39.247.108', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (143, 'PIC481.6850-SUB-555.GF.TR1.PS.ES.38.01', '10.39.110.138', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (144, 'PIC481.5550-BLD-551.GF.TR1.PI.ES.38.01', '10.39.247.105', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (145, 'PIC481.5550-BLD-551.GF.TR1.PS.ES.38.01', '10.39.110.135', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (146, 'PIC481.5550-BLD-552.GF.TR1.PI.ES.38.01', '10.39.247.106', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (147, 'PIC481.5550-BLD-552.GF.TR1.PS.ES.38.01', '10.39.110.136', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (148, 'PIC481.5550-BLD-553.GF.TR1.PI.ES.38.01', '10.39.247.107', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (149, 'PIC481.5550-BLD-553.GF.TR1.PS.ES.38.01', '10.39.110.137', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (150, 'PIC481.7500-BLD-701.GF.TR1.PI.RS.38.01', '10.39.247.109', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (151, 'PIC481.7500-BLD-701.GF.TR1.PI.ES.38.01', '10.39.247.110', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (152, 'PIC481.7500-BLD-701.GF.TR1.PI.ES.38.02', '10.39.247.111', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (153, 'PIC481.7500-BLD-701.GF.TR1.PI.ES.38.03', '10.39.247.112', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (154, 'PIC481.7500-BLD-701.GF.TR1.PI.ES.38.04', '10.39.247.113', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (155, 'PIC481.7500-BLD-701.GF.TR1.PS.RS.38.01', '10.39.110.139', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (156, 'PIC481.7500-BLD-701.GF.TR1.PS.ES.38.01', '10.39.110.140', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (157, 'PIC481.7500-BLD-701.GF.TR1.PS.ES.38.02', '10.39.110.141', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (158, 'PIC481.7500-BLD-701.GF.TR1.PS.ES.38.03', '10.39.110.142', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (159, 'PIC481.7500-BLD-701.GF.TR1.PS.ES.38.04', '10.39.110.143', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (160, 'PIC481.7500-BLD-703.GF.TR1.PI.ES.38.01', '10.39.247.116', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (161, 'PIC481.7500-BLD-703.GF.TR1.PS.ES.38.01', '10.39.110.145', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (162, 'PIC481.7500-BLD-706.GF.TR1.PI.ES.38.01', '10.39.247.120', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (163, 'PIC481.7500-BLD-706.GF.TR1.PS.ES.38.01', '10.39.110.148', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (164, 'PIC481.7500-GHB-751.GF.TR1.PI.ES.38.01', '10.39.247.117', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (165, 'PIC481.7500-GHB-751.GF.TR1.PS.ES.38.01', '10.39.110.146', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (166, 'PIC481.7500-GHB-752.GF.TR1.PS.ES.38.01', '10.39.247.118', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (167, 'PIC481.7500-MWB-701.GF.TR1.PI.ES.38.01', '10.39.247.119', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (168, 'PIC481.7500-MWB-701.GF.TR1.PS.ES.38.01', '10.39.110.147', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (169, 'PIC481.6850-SUB-750.GF.TR1.PI.ES.38.01', '10.39.247.114', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (170, 'PIC481.6850-SUB-751.GF.TR1.PI.ES.38.01', '10.39.247.115', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (171, 'PIC481.6850-SUB-751.GF.TR1.PS.ES.38.01', '10.39.110.144', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (172, 'PIC481.6710-MCB-601.GF.TR1.PI.RS.38.01', '10.39.249.87', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (173, 'PIC481.6710-MCB-601.GF.TR1.PI.ES.38.01', '10.39.249.57', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (174, 'PIC481.6710-MCB-601.GF.TR1.PI.ES.38.02', '10.39.253.33', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (175, 'PIC481.6710-MCB-601.GF.TR1.PI.ES.38.03', '10.39.249.58', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (176, 'PIC481.6710-MCB-601.GF.TR1.PI.ES.38.04', '10.39.249.59', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (177, 'PIC481.6710-MCB-601.GF.TR1.PI.ES.38.05', '10.39.249.60', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (178, 'PIC481.6710-MCB-601.GF.TR1.PI.ES.38.06', '10.39.249.61', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (179, 'PIC481.6710-MCB-601.GF.TR1.PI.ES.38.10', '10.39.249.200', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (180, 'PIC481.6710-MCB-601.GF.TR1.PI.ES.38.11', '10.39.249.201', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (181, 'PIC481.6710-MCB-601.GF.TR1.PS.ES.38.01', '10.39.109.74', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (182, 'PIC481.6710-MCB-601.GF.TR1.PS.ES.38.03', '10.39.109.75', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (183, 'PIC481.6710-MCB-601.GF.TR1.PS.ES.38.11', '10.39.109.205', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (184, 'PIC481.6710-MCB-601.GF.TR1.PS.ES.38.04', '10.39.109.76', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (185, 'PIC481.671--MCB-601.GF.TR1.PS.ES.38.05', '10.39.109.77', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (186, 'PIC481.6710-MCB-601.GF.TR1.PS.ES.38.06', '10.39.109.78', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (187, 'PIC481.6710-MCB-602.GF.TR1.PI.RS.68.01', '10.39.247.56', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (188, 'PIC481.6710-MCB-602.GF.TR1.PI.ES.38.01', '10.39.247.57', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (189, 'PIC481.6710-MCB-602.GF.TR1.PI.ES.38.02', '10.39.253.41', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (190, 'PIC481.6710-MCB-602.GF.TR1.PI.ES.38.03', '10.39.247.58', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (191, 'PIC481.6710-MCB-602.GF.TR1.PI.ES.38.04', '10.39.247.59', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (192, 'PIC481.6710-MCB-602.GF.TR1.PI.ES.38.05', '10.39.247.60', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (193, 'PIC481.6710-MCB-602.GF.TR1.PI.ES.38.06', '10.39.247.61', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (194, 'PIC481.6710-MCB-602.GF.TR1.PI.ES.38.08', '10.39.247.121', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (195, 'PIC481.6710-MCB-602.GF.TR1.PI.ES.38.07', '10.39.247.62', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (196, 'PIC481.6710-MCB-602.GF.TR1.PS.RS.38.01', '10.39.110.55', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (197, 'PIC481.6710-MCB-602.GF.TR1.PS.ES.38.01', '10.39.110.56', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (198, 'PIC481.6710-MCB-602.GF.TR1.PS.ES.38.03', '10.39.110.57', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (199, 'PIC481.6710-MCB-602.GF.TR1.PS.ES.38.04', '10.39.110.59', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (200, 'PIC481.6710-MCB-602.GF.TR1.PS.ES.38.05', '10.39.110.60', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (201, 'PIC481.6710-MCB-602.GF.TR1.PS.ES.38.06', '10.39.110.61', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (202, 'PIC481.6710-MCB-602.GF.TR1.PS.ES.38.08', '10.39.110.149', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (203, 'PIC481.6710-MCB-602.GF.TR1.PS.ES.38.08', '10.39.110.62', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (204, 'PIC481.6750-FAR-420.GF.TR1.PI.RS.38.01', '10.39.249.47', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (205, 'PIC481.6750-FAR-420.GF.TR1.PI.ES.38.01', '10.39.249.48', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (206, 'PIC481.6750-FAR-420.GF.TR1.PS.RS.38.01', '10.39.109.49', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (207, 'PIC481.6750-FAR-420.GF.TR1.PS.ES.38.01', '10.39.109.50', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (208, 'PIC481.6750-FAR-472.GF.TR1.PI.RS.38.01', '10.39.249.52', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (209, 'PIC481.6750-FAR-472.GF.TR1.PI.ES.38.01', '10.39.249.53', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (210, 'PIC481.6750-FAR-472.GF.TR1.PS.RS.38.01', '10.39.109.55', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (211, 'PIC481.6750-FAR-472.GF.TR1.PS.ES.38.01', '10.39.109.56', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (212, 'PIC481.6750-FAR-475.GF.TR1.PI.RS.38.01', '10.39.247.50', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (213, 'PIC481.6750-FAR-475.GF.TR1.PI.ES.38.01', '10.39.247.51', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (214, 'PIC481.6750-FAR-475.GF.TR1.PS.RS.38.01', '10.39.110.71', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (215, 'PIC481.6750-FAR-475.GF.TR1.PS.ES.38.01', '10.39.110.72', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (216, 'PIC481.6750-FAR-480.GF.TR1.PI.RS.38.01', '10.39.249.4', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (217, 'PIC481.6750-FAR-480.GF.TR1.PI.ES.38.01', '10.39.249.5', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (218, 'PIC481.6750-FAR-480.GF.TR1.PS.RS.38.01', '10.39.109.44', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (219, 'PIC481.6750-FAR-480.GF.TR1.PS.ES.38.01', '10.39.109.45', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (220, 'PIC481.4110-BLD-401.GF.TR1.PI.ES.38.01', '10.39.249.7', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (221, 'PIC481.4110-BLD-401.GF.TR1.PS.ES.38.01', '10.39.109.48', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (222, 'PIC481.4120-BLD-A-401.GF.TR1.PI.ES.38.01', '10.39.249.51', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (223, 'PIC481.4120-BLD-A-401.GF.TR1.PS.ES.38.01', '10.39.109.53', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (224, 'PIC481.4130-BLD-401.GF.TR1.PI.ES.38.01', '10.39.247.54', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (225, 'PIC481.4130-BLD-401.GF.TR1.PS.ES.38.01', '10.39.110.73', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (226, 'PIC481.4130-BLD-402.GF.TR1.PI.ES.38.01', '10.39.247.55', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (227, 'PIC481.4130-BLD-402.GF.TR1.PS.ES.38.01', '10.39.110.74', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (228, 'PIC481.4140-BLD-401.GF.TR1.PI.ES.38.01', '10.39.249.115', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (229, 'PIC481.4140-BLD-401.GF.TR1.PS.ES.38.01', '10.39.109.61', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (230, 'PIC481.8810-BLD-810.GF.TR1.PI.RS.38.01', '10.39.249.99', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (231, 'PIC481.8810-BLD-810.GF.TR1.PI.ES.38.01', '10.39.249.100', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (232, 'PIC481.8810-BLD-810.GF.TR1.PI.ES.38.02', '10.39.249.101', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (233, 'PIC481.8810-BLD-810.GF.TR1.PI.ES.38.03', '10.39.253.73', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (234, 'PIC481.8810-BLD-810.GF.TR1.PS.RS.38.01', '10.39.109.64', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (235, 'PIC481.8810-BLD-810.GF.TR1.PS.ES.38.01', '10.39.109.65', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (236, 'PIC481.8810-BLD-810.GF.TR1.PS.ES.38.02', '10.39.109.121', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (237, 'PIC481.8810-BLD-810.GF.TR1.PI.ES.38.10', '10.39.249.202', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (238, 'PIC481.8810-BLD-810.GF.TR1.PS.ES.38.11', '10.39.109.206', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (239, 'PIC481.8390-CFS-801.GF.TR1.PI.ES.38.01', '10.39.249.86', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (240, 'PIC481.8390-CFS-801.GF.TR1.PS.ES.38.01', '10.39.109.88', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (241, 'PIC481.3900-CMH-101.GF.TR1.PS.ES.38.01', '10.39.110.63', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (242, 'PIC481.3900-CMH-103.GF.TR1.PS.ES.38.01', '10.39.110.64', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (243, 'PIC481.6900-CMH-120.GF.TR1.PS.ES.38.01', '10.39.109.89', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (244, 'PIC481.3900-CMH-128.GF.TR1.PS.ES.38.01', '10.39.110.65', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (245, 'PIC481.6900-CMH-180.GF.TR1.PS.ES.38.01', '10.39.109.90', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (246, 'PIC481.3900-CMH-440.GF.TR1.PS.ES.38.01', '10.39.110.66', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (247, 'PIC481.3900-CMH-680.GF.TR1.PS.ES.38.01', '10.39.110.68', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (248, 'PIC481.3900-CMH-780.GF.TR1.PS.ES.38.01', '10.39.110.67', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (249, 'PIC481.6900-CMH-801.GF.TR1.PS.ES.38.01', '10.39.109.54', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (250, 'PIC481.6900-CMH-802.GF.TR1.PS.ES.38.01', '10.39.109.47', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (251, 'PIC481.3900-CMH-912.GF.TR1.PS.ES.38.01', '10.39.110.69', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (252, 'PIC481.6900-CMH-921.GF.TR1.PS.ES.38.01', '10.39.109.91', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (253, 'PIC481.5510-CSB-501.GF.TR1.PI.ES.38.01', '10.39.249.117', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (254, 'PIC481.5510-CSB-501.GF.TR1.PS.ES.38.01', '10.39.109.63', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (255, 'PIC481.8810-GHB-803.GF.TR1.PI.ES.38.01', '10.39.247.68', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (256, 'PIC481.8810-GHB-803.GF.TR1.PS.ES.38.01', '10.39.110.52', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (257, 'PIC481.8810-GHB-804.GF.TR1.PI.ES.38.01', '10.39.247.69', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (258, 'PIC481.8810-GHB-804.GF.TR1.PS.ES.38.01', '10.39.110.54', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (259, 'PIC481.8310-LBB-801.GF.TR1.PI.ES.38.08', '10.39.253.81', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (260, 'PIC481.8310-LBB-801.GF.TR1.PI.ES.38.02', '10.39.249.62', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (261, 'PIC481.8310-LBB-801.GF.TR1.PI.ES.38.03', '10.39.249.63', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (262, 'PIC481.8310-LBB-801.GF.TR1.PI.ES.38.04', '10.39.249.64', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (263, 'PIC481.8310-LBB-801.GF.TR1.PI.ES.38.05', '10.39.249.65', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (264, 'PIC481.8310-LBB-801.GF.TR1.PI.ES.38.06', '10.39.249.66', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (265, 'PIC481.8310-LBB-801.GF.TR1.PI.ES.38.07', '10.39.249.67', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (266, 'PIC481.8310-LBB-801.GF.TR1.PI.ES.38.08', '10.39.249.68', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (267, 'PIC481.8310-LBB-801.GF.TR1.PI.ES.38.09', '10.39.249.128', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (268, 'PIC481.8310-LBB-801.GF.TR1.PS.ES.38.01', '10.39.109.79', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (269, 'PIC481.8310-LBB-801.GF.TR1.PS.ES.38.02', '10.39.109.80', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (270, 'PIC481.8310-LBB-801.GF.TR1.PS.ES.38.03', '10.39.109.119', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (271, 'PIC481.8310-LBB-802.GF.TR1.PI.ES.38.01', '10.39.249.69', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (272, 'PIC481.8310-LBB802.GF.TR1.PS.ES.38.01', '10.39.109.81', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (273, 'PIC481.8310-LBB-803.GF.TR1.PI.ES.38.01', '10.39.249.70', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (274, 'PIC481.8310-LBB-803.GF.TR1.PS.ES.38.01', '10.39.109.82', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (275, 'PIC481.8310-LBB-804.GF.TR1.PI.ES.38.01', '10.39.249.71', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (276, 'PIC481.8310-LBB-804.GF.TR1.PS.ES.38.01', '10.39.109.83', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (277, 'PIC481.6720-LCB-839.GF.TR1.PI.RS.38.01', '10.39.247.64', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (278, 'PIC481.6720-LCB-839.GF.TR1.PI.ES.38.01', '10.39.247.65', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (279, 'PIC481.6720-LCB839.GF.TR1.PI.ES.38.02', '10.39.247.82', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (280, 'PIC481.6720-LCB-839.GF.TR1.PS.RS.38.01', '10.39.110.49', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (281, 'PIC481.6720-LCB-839.GF.TR1.PS.ES.38.01', '10.39.110.50', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (282, 'PIC481.6720-LCB-839.GF.TR1.PS.ES.38.02', '10.39.110.83', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (283, 'PIC481.6760-OSB-102.GF.TR1.PI.ES.38.01', '10.39.249.14', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (284, 'PIC481.6760-OSB-102.GF.TR1.PS.ES.38.01', '10.39.109.17', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (285, 'PIC481.6760-OSB-104.GF.TR1.PI.ES.38.01', '10.39.249.22', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (286, 'PIC481.6760-OSB-104.GF.TR1.PS.ES.38.01', '10.39.109.6', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (287, 'PIC481.6760-OSB-401.GF.TR1.PI.ES.38.01', '10.39.249.55', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (288, 'PIC481.6760-OSB-401.GF.TR1.PS.ES.38.01', '10.39.109.57', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (289, 'PIC481.6760-OSB-403.GF.TR1.PI.ES.38.01', '10.39.249.50', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (290, 'PIC481.6760-OSB-403.GF.TR1.PS.ES.38.01', '10.39.109.52', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (291, 'PIC481.6760-OSB-405.GF.TR1.PI.ES.38.01', '10.39.247.53', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (292, 'PIC481.6760-OSB-405.GF.TR1.PS.ES.38.01', '10.39.110.75', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (293, 'PIC481.4120-SHL-401.GF.TR1.PI.ES.38.01', '10.39.249.88', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (294, 'PIC481.4120-SHL-401.GF.TR1.PS.ES.38.01', '10.39.109.92', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (295, 'PIC481.8810-SHL-801.GF.TR1.PI.ES.38.01', '10.39.249.106', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (296, 'PIC481.8810-SHL-801.GF.TR1.PS.ES.38.01', '10.39.109.70', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (297, 'PIC481.7B30-SHL-701.GF.TR1.PI.ES.38.01', '10.39.247.71', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (298, 'PIC481.6810-SUB-101.GF.TR1.PI.ES.38.01', '10.39.249.89', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (299, 'PIC481.6810-SUB-101.GF.TR1.PS.ES.38.01', '10.39.109.93', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (300, 'PIC481.6810-SUB-102.GF.TR1.PI.ES.38.01', '10.39.249.90', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (301, 'PIC481.6810-SUB-102.GF.TR1.PS.ES.38.01', '10.39.109.94', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (302, 'PIC481.6810-SUB-301.GF.TR1.PI.ES.38.01', '10.39.249.91', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (303, 'PIC481.6810-SUB-301.GF.TR1.PS.ES.38.01', '10.39.109.95', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (304, 'PIC481.6810-SUB-302.GF.TR1.PI.ES.38.01', '10.39.249.92', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (305, 'PIC481.6810-SUB-302.GF.TR1.PS.ES.38.01', '10.39.109.96', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (306, 'PIC481.6810-SUB-401.GF.TR1.PI.ES.38.01', '10.39.249.93', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (307, 'PIC481.6810-SUB-401.GF.TR1.PS.ES.38.01', '10.39.109.97', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (308, 'PIC481.6810-SUB-402.GF.TR1.PI.ES.38.01', '10.39.249.94', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (309, 'PIC481.6810-SUB-402.GF.TR1.PS.ES.38.01', '10.39.109.98', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (310, 'PIC481.6850-SUB-420.GF.TR1.PI.ES.38.01', '10.39.249.49', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (311, 'PIC481.6850-SUB-420.GF.TR1.PS.ES.38.01', '10.39.109.51', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (312, 'PIC481.6850-SUB-472.GF.TR1.PI.ES.38.01', '10.39.249.54', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (313, 'PIC481.6850-SUB-472.GF.TR1.PS.ES.38.01', '10.39.109.58', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (314, 'PIC481.6850-SUB-475.GF.TR1.PI.ES.38.01', '10.39.247.52', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (315, 'PIC481.6850-SUB-475.GF.TR1.PS.ES.38.01', '10.39.110.76', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (316, 'PIC481.6850-SUB-480.GF.TR1.PI.ES.38.01', '10.39.249.6', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (317, 'PIC481.6850-SUB-480.GF.TR1.PS.ES.38.01', '10.39.109.46', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (318, 'PIC481.6850-SUB-551.GF.TR1.PI.ES.38.01', '10.39.249.114', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (319, 'PIC481.6850-SUB-551.GF.TR1.PS.ES.38.01', '10.39.109.60', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (320, 'PIC481.6850-SUB-602.GF.TR1.PI.ES.38.01', '10.39.247.63', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (321, 'PIC481.6850-SUB-602.GF.TR1.PS.ES.38.01', '10.39.110.70', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (322, 'PIC481.6850-SUB-622.GF.TR1.PI.ES.38.01', '10.39.249.111', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (323, 'PIC481.6850-SUB-622.GF.TR1.PS.ES.38.01', '10.39.109.59', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (324, 'PIC481.6850-SUB-811.GF.TR1.PI.ES.38.01', '10.39.249.95', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (325, 'PIC481.6850-SUB-811.GF.TR1.PS.ES.38.01', '10.39.109.99', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (326, 'PIC481.6850-SUB-831.GF.TR1.PI.ES.38.01', '10.39.249.96', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (327, 'PIC481.6850-SUB-831.GF.TR1.PS.ES.38.01', '10.39.109.100', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (328, 'PIC481.6850-SUB-839.GF.TR1.PI.ES.38.01', '10.39.247.66', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (329, 'PIC481.6850-SUB-839.GF.TR1.PS.ES.38.01', '10.39.110.51', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (330, 'PIC481.6850-SUB-841.GF.TR1.PI.ES.38.01', '10.39.249.107', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (331, 'PIC481.6850-SUB-841.GF.TR1.PS.ES.38.01', '10.39.109.71', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (332, 'PIC481.8370-WHB-801.GF.TR1.PI.ES.38.01', '10.39.249.84', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (333, 'PIC481.8370-WHB-801.GF.TR1.PI.ES.38.02', '10.39.249.85', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (334, 'PIC481.8370-WHB-801.GF.TR1.PS.ES.38.01', '10.39.109.101', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (335, 'PIC481.8330-MWB-801.GF.TR1.PI.ES.38.01', '10.39.249.72', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (336, 'PIC481.8330-MWB-801.GF.TR1.PI.ES.38.02', '10.39.249.73', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (337, 'PIC481.8330-MWB-801.GF.TR1.PI.ES.38.03', '10.39.249.74', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (338, 'PIC481.8330-MWB-801.GF.TR1.PI.ES.38.04', '10.39.249.75', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (339, 'PIC481.8330-MWB-801.GF.TR1.PS.ES.38.01', '10.39.109.84', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (340, 'PIC481.8330-MWB-801.GF.TR1.PS.ES.38.02', '10.39.109.85', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (341, 'PIC481.8330-MWB-802.GF.TR1.PI.ES.38.01', '10.39.249.76', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (342, 'PIC481.8330-MWB-802.GF.TR1.PI.ES.38.01', '10.39.249.77', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (343, 'PIC481.8330-MWB-802.GF.TR1.PI.ES.38.02', '10.39.249.78', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (344, 'PIC481.8330-MWB-802.GF.TR1.PI.ES.38.03', '10.39.249.79', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (345, 'PIC481.8330-MWB-802.GF.TR1.PI.ES.38.07', '10.39.249.80', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (346, 'PIC481.8330-MWB-802.GF.TR1.PI.ES.38.05', '10.39.249.81', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (347, 'PIC481.8330-MWB-802.GF.TR1.PI.ES.38.08', '10.39.249.83', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (348, 'PIC481.8330-MWB-802.GF.TR1.PS.ES.38.01', '10.39.109.86', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (349, 'PIC481.8330-MWB-802.GF.TR1.PS.ES.38.02', '10.39.109.87', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (350, 'PIC481.8330-MWB-802.GF.TR1.PS.ES.38.03', '10.39.109.120', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (351, 'PIC481.6750-FAR-630.GF.TR1.PI.RS.38.01', '10.39.249.108', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (352, 'PIC481.6750-FAR-630.GF.TR1.PI.ES.38.01', '10.39.249.109', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (353, 'PIC481.6750-FAR-630.GF.TR1.PS.RS.38.01', '10.39.109.104', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (354, 'PIC481.6750-FAR-630.GF.TR1.PS.ES.38.01', '10.39.109.105', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (355, 'PIC481.6760-OSB-402.GF.TR1.PI.ES.38.01', '10.39.249.110', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (356, 'PIC481.6760-OSB-402.GF.TR1.PS.ES.38.01', '10.39.109.106', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (357, 'PIC481.6850-SUB-631.GF.TR1.PI.ES.38.01', '10.39.249.112', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (358, 'PIC481.6850-SUB-631.GF.TR1.PS.ES.38.01', '10.39.109.107', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (359, 'PIC481.6850-SUB-632.GF.TR1.PI.ES.38.01', '10.39.249.113', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (360, 'PIC481.6850-SUB-632.GF.TR1.PS.ES.38.01', '10.39.109.108', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (361, 'PIC481.6720-LCB-485.GF.TR1.PI.RS.38.01', '10.39.249.1', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (362, 'PIC481.6720-LCB-485.GF.TR1.PI.ES.38.01', '10.39.249.2', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (363, 'PIC481.6720-LCB-485.GF.TR1.PS.RS.38.01', '10.39.109.1', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (364, 'PIC481.6720-LCB-485.GF.TR1.PS.ES.38.01', '10.39.109.2', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (365, 'PIC481.6850-SUB-485.GF.TR1.PI.ES.38.01', '10.39.249.3', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (366, 'PIC481.6850-SUB-485.GF.TR1.PS.ES.38.01', '10.39.109.3', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (367, 'PIC481.6750-FAR-511.GF.TR1.PI.RS.38.01', '10.39.249.118', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (368, 'PIC481.6750-FAR-511.GF.TR1.PI.ES.38.01', '10.39.249.119', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (369, 'PIC481.6750-FAR-511.GF.TR1.PS.RS.38.01', '10.39.109.109', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (370, 'PIC481.6750-FAR-511.GF.TR1.PS.ES.38.01', '10.39.109.110', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (371, 'PIC481.6750-FAR-515.GF.TR1.PI.RS.38.01', '10.39.249.122', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (372, 'PIC481.6750-FAR-515.GF.TR1.PI.ES.38.01', '10.39.249.123', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (373, 'PIC481.6750-FAR-515.GF.TR1.PS.RS.38.01', '10.39.109.113', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (374, 'PIC481.6750-FAR-515.GF.TR1.PS.ES.38.01', '10.39.109.114', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (375, 'PIC481.6750-FAR-519.GF.TR1.PI.RS.38.01', '10.39.249.125', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (376, 'PIC481.6750-FAR-519.GF.TR1.PI.ES.38.01', '10.39.249.126', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (377, 'PIC481.6750-FAR-519.GF.TR1.PS.RS.38.01', '10.39.109.116', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (378, 'PIC481.6750-FAR-519.GF.TR1.PS.ES.38.01', '10.39.109.117', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (379, 'PIC481.6850-SUB-511.GF.TR1.PI.ES.38.01', '10.39.249.124', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (380, 'PIC481.6850-SUB-511.GF.TR1.PS.ES.38.01', '10.39.109.115', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (381, 'PIC481.6850-SUB-512.GF.TR1.PI.ES.38.01', '10.39.249.121', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (382, 'PIC481.6850-SUB-512.GF.TR1.PS.ES.38.01', '10.39.109.112', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (383, 'PIC481.6850-SUB-513.GF.TR1.PI.ES.38.01', '10.39.249.127', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (384, 'PIC481.6850-SUB-513.GF.TR1.PS.ES.38.01', '10.39.109.118', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (385, 'PIC481.6760-OSB-501.GF.TR1.PI.ES.38.01', '10.39.249.120', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (386, 'PIC481.6760-OSB-501.GF.TR1.PS.ES.38.01', '10.39.109.111', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (387, 'PIC481.6710-MCB-602.GF.TR1.PI.ES.38.09', '10.39.247.49', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (388, 'PIC481.6710-MCB-602.GF.207.PI.ES.38.10', '10.39.249.204', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (389, 'PIC481.6710-MCB-602.GF.TR1.PS.ES.38.09', '10.39.110.48', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (390, 'PIC481.6750-FAR-361.GF.TR1.PI.RS.38.01', '10.39.247.12', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (391, 'PIC481.6750-FAR-361.GF.TR1.PI.ES.38.01', '10.39.247.13', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (392, 'PIC481.6750-FAR-361.GF.TR1.PS.RS.38.01', '10.39.110.12', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (393, 'PIC481.6750-FAR-361.GF.TR1.PS.ES.38.01', '10.39.110.13', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (394, 'PIC481.6760-OSB-361.GF.TR1.PI.ES.38.01', '10.39.247.14', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (395, 'PIC481.6760-OSB-361.GF.TR1.PS.ES.38.01', '10.39.110.14', NULL, '2019-09-09 16:11:11', '2019-09-09 16:11:11');
INSERT INTO `switches` VALUES (396, 'PIC481.6710-MCB-601.GF.TR1.PI.CS.68.01', '10.39.249.254', NULL, '2019-10-12 21:34:14', '2019-10-12 21:34:16');
INSERT INTO `switches` VALUES (397, 'PIC481.6710-MCB-601.GF.TR1.PS.CS.68.01', '10.39.109.252', NULL, '2019-10-12 21:36:29', '2019-10-12 21:36:32');
INSERT INTO `switches` VALUES (398, 'PIC481.6710-MCB-602.GF.TR1.PI.CS.68.01', '10.39.255.253', NULL, '2019-10-12 21:47:11', '2019-10-12 21:47:13');
INSERT INTO `switches` VALUES (399, 'PIC481.6710-MCB-602.GF.TR1.PS.CS.68.01', '10.39.111.253', NULL, '2019-10-12 21:48:48', '2019-10-12 21:48:50');

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

-- ----------------------------
-- Table structure for template_checklists
-- ----------------------------
DROP TABLE IF EXISTS `template_checklists`;
CREATE TABLE `template_checklists`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `template_id` int(11) NULL DEFAULT NULL,
  `input_type` int(11) NULL DEFAULT NULL,
  `label` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `template_id`(`template_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of template_checklists
-- ----------------------------
INSERT INTO `template_checklists` VALUES (1, 1, 2, 'Link redundancy check on PIN switch', '2020-08-08 02:13:06', '2020-08-08 02:13:06');
INSERT INTO `template_checklists` VALUES (2, 1, 2, 'Link redundancy check on PSN switch', '2020-08-08 02:13:06', '2020-08-08 02:13:06');
INSERT INTO `template_checklists` VALUES (3, 1, 2, 'Power redundancy check on PIN switch', '2020-08-08 02:13:06', '2020-08-08 02:13:06');
INSERT INTO `template_checklists` VALUES (4, 1, 2, 'Power redundancy check on PSN switch', '2020-08-08 02:13:06', '2020-08-08 02:13:06');
INSERT INTO `template_checklists` VALUES (5, 1, 3, 'Fiber optic cable management condition', '2020-08-08 02:13:06', '2020-08-08 02:13:06');
INSERT INTO `template_checklists` VALUES (6, 1, 3, 'CAT6 cable management condition', '2020-08-08 02:13:06', '2020-08-08 02:13:06');
INSERT INTO `template_checklists` VALUES (7, 1, 5, 'UPS A voltage', '2020-08-08 02:13:06', '2020-08-08 02:13:06');
INSERT INTO `template_checklists` VALUES (8, 1, 5, 'UPS B voltage', '2020-08-08 02:13:06', '2020-08-08 02:13:06');
INSERT INTO `template_checklists` VALUES (9, 1, 5, 'NON UPS voltage', '2020-08-08 02:13:06', '2020-08-08 02:13:06');
INSERT INTO `template_checklists` VALUES (10, 1, 5, 'Earthing resistant Ohm', '2020-08-08 02:13:06', '2020-08-08 02:13:06');
INSERT INTO `template_checklists` VALUES (11, 1, 2, 'Panel light checking', '2020-08-08 02:13:06', '2020-08-08 02:13:06');
INSERT INTO `template_checklists` VALUES (12, 1, 1, 'Fan filter dust free', '2020-08-08 02:13:06', '2020-08-08 02:13:06');
INSERT INTO `template_checklists` VALUES (13, 1, 3, 'Panel cleaned', '2020-08-08 02:13:06', '2020-08-08 02:13:06');
INSERT INTO `template_checklists` VALUES (14, 1, 7, 'Front cabinet image', '2020-08-08 02:13:06', '2020-08-08 02:13:06');
INSERT INTO `template_checklists` VALUES (15, 1, 7, 'Rear cabinet image', '2020-08-08 02:13:06', '2020-08-08 02:13:06');
INSERT INTO `template_checklists` VALUES (16, 1, 7, 'Internal cabinet image', '2020-08-08 02:13:06', '2020-08-08 02:13:06');
INSERT INTO `template_checklists` VALUES (17, 2, 5, 'Workstation OS in detail', '2020-08-10 03:03:19', '2020-08-10 03:03:19');
INSERT INTO `template_checklists` VALUES (18, 2, 3, 'Monitor condition?', '2020-08-10 03:03:19', '2020-08-10 03:03:19');
INSERT INTO `template_checklists` VALUES (19, 2, 3, 'PC condition?', '2020-08-10 03:03:19', '2020-08-10 03:03:19');
INSERT INTO `template_checklists` VALUES (20, 2, 3, 'Mouse condition?', '2020-08-10 03:03:19', '2020-08-10 03:03:19');
INSERT INTO `template_checklists` VALUES (21, 2, 3, 'Keyboard condition?', '2020-08-10 03:03:19', '2020-08-10 03:03:19');
INSERT INTO `template_checklists` VALUES (22, 2, 3, 'Speaker condition?', '2020-08-10 03:03:19', '2020-08-10 03:03:19');
INSERT INTO `template_checklists` VALUES (23, 2, 2, 'Windows updated?', '2020-08-10 03:03:19', '2020-08-10 03:03:19');
INSERT INTO `template_checklists` VALUES (24, 2, 2, 'Anti virus updated?', '2020-08-10 03:03:19', '2020-08-10 03:03:19');
INSERT INTO `template_checklists` VALUES (25, 2, 2, 'Ping gateway (for network testing purpose)', '2020-08-10 03:03:19', '2020-08-10 03:03:19');
INSERT INTO `template_checklists` VALUES (26, 2, 3, 'Workstation cable management status', '2020-08-10 03:03:19', '2020-08-10 03:03:19');
INSERT INTO `template_checklists` VALUES (27, 2, 7, 'Image 1', '2020-08-10 03:03:19', '2020-08-10 03:03:19');
INSERT INTO `template_checklists` VALUES (28, 2, 7, 'Image 2', '2020-08-10 03:03:19', '2020-08-10 03:03:19');

-- ----------------------------
-- Table structure for templates
-- ----------------------------
DROP TABLE IF EXISTS `templates`;
CREATE TABLE `templates`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NULL DEFAULT NULL,
  `system_id` int(11) NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `staff_id`(`staff_id`) USING BTREE,
  INDEX `system_id`(`system_id`) USING BTREE,
  CONSTRAINT `templates_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `templates_ibfk_2` FOREIGN KEY (`system_id`) REFERENCES `systems` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of templates
-- ----------------------------
INSERT INTO `templates` VALUES (1, 1, 1, 'PPM Cabinet Checklist', 'PPM cabinet inspection Rev.1', '2020-08-08 02:13:06', '2020-08-08 02:13:06');
INSERT INTO `templates` VALUES (2, 1, 1, 'PPM Workstation Inspection Checklist Rev 1', 'PPM FON Workstation Inspection Checklist Rev. 1', '2020-08-10 03:03:19', '2020-08-10 03:03:19');

SET FOREIGN_KEY_CHECKS = 1;
