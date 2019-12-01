DROP DATABASE IF EXISTS bugs;
CREATE DATABASE bugs;
USE bugs;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`(
    `id` INT AUTO_INCREMENT,
    `firstname` VARCHAR(32),
    `lastname` VARCHAR(32),
    `password` VARCHAR(64),
    `email` VARCHAR(64),
    `date_joined` date DEFAULT NULL,
    PRIMARY KEY(id)
);

--
-- Table structure for table `issues`
--

DROP TABLE IF EXISTS `issues`;
CREATE TABLE `issues` (
    `id` INT AUTO_INCREMENT,
    `title` VARCHAR(32),
    `description` VARCHAR(1000),
    `issueType` VARCHAR(32),
    `priority` VARCHAR(32),
    `status` VARCHAR(32),
    `assigned_to` VARCHAR(32),
    `created_by` VARCHAR(32),
    `created` date DEFAULT NULL,
    `updated` date DEFAULT NULL,
    PRIMARY KEY(id)
);