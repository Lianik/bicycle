-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE DATABASE "testdb" --------------------------------
CREATE DATABASE IF NOT EXISTS `testdb` CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `testdb`;
-- ---------------------------------------------------------


-- CREATE TABLE "employees" --------------------------------
CREATE TABLE `employees` ( 
	`eid` Int( 255 ) AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`profession` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `eid` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = MyISAM
AUTO_INCREMENT = 6;
-- ---------------------------------------------------------


-- CREATE INDEX "index_eid" --------------------------------
CREATE INDEX `index_eid` USING BTREE ON `employees`( `eid` );
-- ---------------------------------------------------------


-- CREATE INDEX "unique_eid" -------------------------------
CREATE UNIQUE INDEX `unique_eid` USING BTREE ON `employees`( `eid` );
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


