DROP DATABASE IF EXISTS bugs;
CREATE DATABASE bugs;
USE bugs;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`(
    `id` int(35)  NOT NULL auto_increment,
    `firstname` char(35)  NOT NULL default '',
    `lastname` char(35)  NOT NULL default '',
    `password` char(35)  NOT NULL default '',
    `email` varchar(255)  NOT NULL default '',
    `date_joined` date DEFAULT NULL,
    PRIMARY KEY  (`id`)
)ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `issues`
--

DROP TABLE IF EXISTS `issues`;
CREATE TABLE `issues` (
    `id` int(35)  NOT NULL auto_increment,
    `title` char(35)   NOT NULL default '',
    `description` VARCHAR(1000)   NOT NULL default '',
    `issueType` char(35)   NOT NULL default '',
    `priority` varchar(255)   NOT NULL default '',
    `status` char(35)   NOT NULL default '',
    `assigned_to` char(35)   NOT NULL default '',
    `created_by` char(35)   NOT NULL default '',
    `created` date DEFAULT NULL,
    `updated` date DEFAULT NULL,
    PRIMARY KEY  (`id`)
)ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=utf8mb4;