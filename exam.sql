/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50625
Source Host           : localhost:3306
Source Database       : exam

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2017-03-16 00:42:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_permissions
-- ----------------------------
DROP TABLE IF EXISTS `admin_permissions`;
CREATE TABLE `admin_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '权限名',
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '权限解释名称',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '描述与备注',
  `cid` tinyint(4) NOT NULL COMMENT '级别',
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '图标',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin_permissions
-- ----------------------------
INSERT INTO `admin_permissions` VALUES ('1', 'admin.permission', '权限管理', '', '0', 'fa-users', '2016-05-21 10:06:50', '2016-06-22 13:49:09');
INSERT INTO `admin_permissions` VALUES ('2', 'admin.permission.index', '权限列表', '', '1', '', '2016-05-21 10:08:04', '2016-05-21 10:08:04');
INSERT INTO `admin_permissions` VALUES ('3', 'admin.permission.create', '权限添加', '', '1', '', '2016-05-21 10:08:18', '2016-05-21 10:08:18');
INSERT INTO `admin_permissions` VALUES ('4', 'admin.permission.edit', '权限修改', '', '1', '', '2016-05-21 10:08:35', '2016-05-21 10:08:35');
INSERT INTO `admin_permissions` VALUES ('5', 'admin.permission.destroy ', '权限删除', '', '1', '', '2016-05-21 10:09:57', '2016-05-21 10:09:57');
INSERT INTO `admin_permissions` VALUES ('6', 'admin.role.index', '角色列表', '', '1', '', '2016-05-23 10:36:40', '2016-05-23 10:36:40');
INSERT INTO `admin_permissions` VALUES ('7', 'admin.role.create', '角色添加', '', '1', '', '2016-05-23 10:37:07', '2016-05-23 10:37:07');
INSERT INTO `admin_permissions` VALUES ('8', 'admin.role.edit', '角色修改', '', '1', '', '2016-05-23 10:37:22', '2016-05-23 10:37:22');
INSERT INTO `admin_permissions` VALUES ('9', 'admin.role.destroy', '角色删除', '', '1', '', '2016-05-23 10:37:48', '2016-05-23 10:37:48');
INSERT INTO `admin_permissions` VALUES ('10', 'admin.user.index', '用户管理', '', '1', '', '2016-05-23 10:38:52', '2016-05-23 10:38:52');
INSERT INTO `admin_permissions` VALUES ('11', 'admin.user.create', '用户添加', '', '1', '', '2016-05-23 10:39:21', '2016-06-22 13:49:29');
INSERT INTO `admin_permissions` VALUES ('12', 'admin.user.edit', '用户编辑', '', '1', '', '2016-05-23 10:39:52', '2016-05-23 10:39:52');
INSERT INTO `admin_permissions` VALUES ('13', 'admin.user.destroy', '用户删除', '', '1', '', '2016-05-23 10:40:36', '2016-05-23 10:40:36');
INSERT INTO `admin_permissions` VALUES ('14', 'admin.paper', '试卷管理', '试卷管理', '0', 'fa-newspaper-o', '2017-02-23 17:34:17', '2017-02-23 17:34:17');
INSERT INTO `admin_permissions` VALUES ('15', 'admin.paper.index', '试卷列表', '', '14', '', '2017-02-23 17:35:20', '2017-02-23 17:35:20');

-- ----------------------------
-- Table structure for admin_permission_role
-- ----------------------------
DROP TABLE IF EXISTS `admin_permission_role`;
CREATE TABLE `admin_permission_role` (
  `permission_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin_permission_role
-- ----------------------------
INSERT INTO `admin_permission_role` VALUES ('2', '1');
INSERT INTO `admin_permission_role` VALUES ('3', '1');
INSERT INTO `admin_permission_role` VALUES ('4', '1');
INSERT INTO `admin_permission_role` VALUES ('5', '1');
INSERT INTO `admin_permission_role` VALUES ('6', '1');
INSERT INTO `admin_permission_role` VALUES ('7', '1');
INSERT INTO `admin_permission_role` VALUES ('8', '1');
INSERT INTO `admin_permission_role` VALUES ('9', '1');
INSERT INTO `admin_permission_role` VALUES ('10', '1');
INSERT INTO `admin_permission_role` VALUES ('11', '1');
INSERT INTO `admin_permission_role` VALUES ('12', '1');
INSERT INTO `admin_permission_role` VALUES ('13', '1');
INSERT INTO `admin_permission_role` VALUES ('15', '2');

-- ----------------------------
-- Table structure for admin_roles
-- ----------------------------
DROP TABLE IF EXISTS `admin_roles`;
CREATE TABLE `admin_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '角色名称',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '备注',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin_roles
-- ----------------------------
INSERT INTO `admin_roles` VALUES ('1', '管理员', '管理员', '2017-02-23 16:30:31', '2017-02-23 16:30:31');
INSERT INTO `admin_roles` VALUES ('2', '访问后台', '', '2017-02-23 19:12:53', '2017-02-23 19:12:53');

-- ----------------------------
-- Table structure for admin_role_user
-- ----------------------------
DROP TABLE IF EXISTS `admin_role_user`;
CREATE TABLE `admin_role_user` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin_role_user
-- ----------------------------
INSERT INTO `admin_role_user` VALUES ('2', '2');

-- ----------------------------
-- Table structure for admin_users
-- ----------------------------
DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE `admin_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员用户表ID',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin_users
-- ----------------------------
INSERT INTO `admin_users` VALUES ('1', 'root', 'root@admin.com', '$2y$10$PvgXvcy6u7PJEZAZjqOIcOJiC5E1EbNJjti.zKBzOkcNV.ZCxn1KO', 'SHnueDOgSIyhFiBCqtF7HQQ8oqKcNyBOiLW81cEY20NyAJ1T5XMnYGGEN35z', '2017-02-23 16:22:35', '2017-03-12 00:48:05');
INSERT INTO `admin_users` VALUES ('2', 'rufo', '775397252@qq.com', '$2y$10$PvgXvcy6u7PJEZAZjqOIcOJiC5E1EbNJjti.zKBzOkcNV.ZCxn1KO', 'JyhH7Dnmljg06Ri3Tcbj3A37Pd85sObb3pnIwbt651MJLm6lL0rK2bAh3qlj', '2017-02-23 16:30:02', '2017-03-06 22:41:32');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2016_11_10_033438_create_admin_users_table', '1');
INSERT INTO `migrations` VALUES ('4', '2016_11_10_034922_create_admin_permissions_table', '1');
INSERT INTO `migrations` VALUES ('5', '2016_11_10_034952_create_admin_roles_table', '1');
INSERT INTO `migrations` VALUES ('6', '2016_11_10_035417_create_admin_role_user_table', '1');
INSERT INTO `migrations` VALUES ('7', '2016_11_10_035534_create_admin_permission_role_table', '1');

-- ----------------------------
-- Table structure for paper
-- ----------------------------
DROP TABLE IF EXISTS `paper`;
CREATE TABLE `paper` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '试卷标题',
  `description` varchar(255) DEFAULT NULL,
  `creator` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1发布，0不能做',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of paper
-- ----------------------------
INSERT INTO `paper` VALUES ('2', '第四套测试试卷', '这是第四套测试试卷', '1', '1', '2017-02-25 16:36:16', '2017-03-12 16:44:56');
INSERT INTO `paper` VALUES ('3', '第三套测试卷', '这是第三套测试卷', '1', '1', '2017-03-06 22:41:56', '2017-03-12 16:45:05');
INSERT INTO `paper` VALUES ('4', '第一套测试试卷', '第一套测试试卷', '1', '1', '2017-03-12 17:54:35', '2017-03-12 17:54:35');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for question
-- ----------------------------
DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `paper_id` int(11) DEFAULT NULL COMMENT '试卷id',
  `title` varchar(1255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `score` int(11) DEFAULT NULL COMMENT '本题分值',
  `item` varchar(555) DEFAULT NULL COMMENT '选项，json格式',
  `true_item` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of question
-- ----------------------------
INSERT INTO `question` VALUES ('2', '2', '安慰道', '2', '2', '{\"0.28279427495793175\":\"12312123\",\"0.19479152470866312\":\"qweqwqwe\",\"0.19731269485778213\":\"\\u533a\\u59d4\\u533a\\u59d4\"}', '{\"0.19479152470866312\":\"1\",\"0.19731269485778213\":\"1\"}', '2017-02-25 23:34:12', '2017-03-05 22:38:16');
INSERT INTO `question` VALUES ('3', '2', 'qweqwqweqw', '1', '22', '{\"0.07229270217455475\":\"1231\",\"0.23567257672571107\":\"12312\",\"0.31504132170029586\":\"123123\"}', '{\"0.23567257672571107\":\"1\"}', '2017-03-06 23:29:22', '2017-03-06 23:29:52');
INSERT INTO `question` VALUES ('4', '2', 'qweqwqwe', '1', '22', '{\"0.07229270217455475\":\"1231\",\"0.23567257672571107\":\"12312\",\"0.31504132170029586\":\"123123\"}', '{\"0.23567257672571107\":\"1\"}', '2017-03-06 23:29:22', '2017-03-06 23:29:37');
INSERT INTO `question` VALUES ('5', '2', '12312', '2', '34', '{\"0.807063394174526\":\"12313\",\"0.7568979307560355\":\"12312\",\"0.14752629821830276\":\"12312312\",\"0.6500795770825458\":\"123123\"}', '{\"0.14752629821830276\":\"1\",\"0.6500795770825458\":\"1\"}', '2017-03-06 23:32:49', '2017-03-06 23:32:49');
INSERT INTO `question` VALUES ('6', '3', '我是谁？', '1', '10', '{\"0.8332818602367045\":\"\\u7238\\u7238\",\"0.9765224948940314\":\"\\u5988\\u5988\",\"0.3843746005847761\":\"\\u7237\\u7237\",\"0.9650554295897622\":\"\\u5976\\u5976\"}', '{\"0.8332818602367045\":\"1\"}', '2017-03-11 23:57:58', '2017-03-11 23:57:58');
INSERT INTO `question` VALUES ('7', '3', '宇宙多大？', '1', '10', '{\"0.06881237757716119\":\"100\\u516c\\u91cc\",\"0.5123911481655499\":\"10000\\u516c\\u91cc\",\"0.9399901040223406\":\"\\u65e0\\u9650\\u5927\"}', 'null', '2017-03-11 23:58:31', '2017-03-11 23:58:31');
INSERT INTO `question` VALUES ('8', '4', '水是由什么构成？', '1', '20', '{\"0.8598489540692857\":\"\\u6c22\\u6c14\",\"0.9801728684830935\":\"\\u6c27\\u6c14\",\"0.6378622610348863\":\"\\u6c22\\u6c14\\u548c\\u6c27\\u6c14\",\"0.43658987297258345\":\"\\u4e0d\\u77e5\\u9053\"}', '{\"0.6378622610348863\":\"1\"}', '2017-03-12 17:55:17', '2017-03-12 17:55:17');
INSERT INTO `question` VALUES ('9', '4', '人是好人吗', '1', '10', '{\"0.6976248660512836\":\"\\u662f\",\"0.7296569063489569\":\"\\u4e0d\\u662f\"}', '{\"0.6976248660512836\":\"1\"}', '2017-03-12 17:55:34', '2017-03-12 17:59:32');
INSERT INTO `question` VALUES ('10', '4', '什么凤舞没有脚？', '1', '23', '{\"0.15225863738091494\":\"\\u4e0d\\u77e5\\u9053\",\"0.8828164566503116\":\"\\u4e4c\\u9f9f\",\"0.0006577031527472688\":\"\\u6c34\\u6bcd\"}', '{\"0.8828164566503116\":\"1\"}', '2017-03-12 17:56:01', '2017-03-12 17:58:48');
INSERT INTO `question` VALUES ('11', '4', '计算机好嘛？', '1', '5', '{\"0.369638761113793\":\"\\u597d\",\"0.6976323113961476\":\"\\u4e0d\\u597d\"}', '{\"0.6976323113961476\":\"1\"}', '2017-03-12 17:56:16', '2017-03-12 17:56:16');

-- ----------------------------
-- Table structure for rank
-- ----------------------------
DROP TABLE IF EXISTS `rank`;
CREATE TABLE `rank` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid_id` int(11) DEFAULT NULL COMMENT '试卷id',
  `paper_id` varchar(1255) DEFAULT NULL,
  `score` int(11) DEFAULT NULL COMMENT '本题分值',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rank
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'zhangxing ', '123456@qq.com', '$2y$10$sMVW1tCIntCfb2EVphCAAupoD4gir6LF.Ay4gATnhYGXaaR4V4WdS', 'mOFxehOxIeJWVeuc6jpS6fmT1qI60Qi3WpnBu2xK5JzeFseaa9udujLzzMka', '2017-03-06 00:17:36', '2017-03-12 00:25:46');
INSERT INTO `users` VALUES ('2', 'testuser', '123@123.com', '$2y$10$5qjicDIfm0UVHlrvtgfcBuLZW3mF31ZsZfoibE7Z4EAOsuIEK/PXG', null, '2017-03-12 00:26:05', '2017-03-12 00:26:05');

-- ----------------------------
-- Table structure for user_answer
-- ----------------------------
DROP TABLE IF EXISTS `user_answer`;
CREATE TABLE `user_answer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `paper_id` int(11) DEFAULT NULL COMMENT '试卷id',
  `question_id` int(11) DEFAULT NULL COMMENT '本题分值',
  `answer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_answer
-- ----------------------------
INSERT INTO `user_answer` VALUES ('1', '1', '2', '2', '0.19479152470866312,0.19731269485778213', '2017-03-11 23:07:19', '2017-03-11 23:07:19', null);
INSERT INTO `user_answer` VALUES ('2', '1', '2', '3', '0.23567257672571107', '2017-03-11 23:07:22', '2017-03-11 23:07:22', '22');
INSERT INTO `user_answer` VALUES ('3', '1', '2', '4', '0.23567257672571107', '2017-03-11 23:07:24', '2017-03-11 23:07:24', '22');
INSERT INTO `user_answer` VALUES ('5', '1', '2', '5', '0.14752629821830276,0.6500795770825458', '2017-03-11 23:08:17', '2017-03-11 23:08:17', null);
INSERT INTO `user_answer` VALUES ('6', '1', '3', '6', '0.8332818602367045', '2017-03-11 23:59:58', '2017-03-11 23:59:58', '10');
INSERT INTO `user_answer` VALUES ('7', '2', '2', '2', '0.19479152470866312,0.19731269485778213', '2017-03-12 00:26:19', '2017-03-12 00:26:19', null);
INSERT INTO `user_answer` VALUES ('8', '2', '3', '6', '0.8332818602367045', '2017-03-12 00:33:47', '2017-03-12 00:33:47', '10');
