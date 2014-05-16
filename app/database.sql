####
# SQL TO CREATE DEFAULT TABLES FOR THE APPLICATIONS
####

####
# USERS TABLE
####

CREATE TABLE IF NOT EXISTS `users` (
  `id` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `password` (`password`),
  KEY `email` (`email`),
  CONSTRAINT `users_roles_fk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

####
# ROLES TABLE
####

CREATE TABLE IF NOT EXISTS `roles` (
  `id` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

####
# ADD ROLES
####

INSERT INTO roles VALUES
(uuid(), 'Admin', 'admin', 1, NOW(), NOW()),
(uuid(), 'Editor', 'editor', 1, NOW(), NOW()),
(uuid(), 'Customer', 'customer', 1, NOW(), NOW());

####
# ADD ADMIN USER - NOTE CHANGE PASSWORD AND SALT. THESE HAS BE THE SAME USED ON THE APPLICATION
####

SELECT @role_id := id FROM roles WHERE slug = 'admin';

INSERT INTO users VALUES
(UUID(), @role_id, 'Admin', 'Admin', 'admin', MD5(CONCAT('p@ssw0rd!', 'thisIs@Hug3S@lt')), 'your_email@test.com', 1, NOW(), NOW());
