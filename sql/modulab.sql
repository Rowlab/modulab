-- MySQL Script generated by MySQL Workbench
-- Wed Jun 13 09:59:49 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema modulab2
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema modulab2
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `modulab2` DEFAULT CHARACTER SET utf8mb4 ;
-- -----------------------------------------------------
-- Schema new_schema1
-- -----------------------------------------------------
USE `modulab2` ;

-- -----------------------------------------------------
-- Table `modulab2`.`job`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `modulab2`.`job` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fonction` VARCHAR(45) NULL,
  `active` TINYINT NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `modulab2`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `modulab2`.`user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  `surname` VARCHAR(50) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  `job_id` INT(11) NULL,
  `mail` VARCHAR(120) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  `password` VARCHAR(45) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  `created_at` TIMESTAMP(6) NULL DEFAULT NULL,
  `active` TINYINT(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  INDEX `job_id_idx` (`job_id` ASC),
  CONSTRAINT `job_id`
    FOREIGN KEY (`job_id`)
    REFERENCES `modulab2`.`job` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `modulab2`.`user_info`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `modulab2`.`user_info` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `address` VARCHAR(160) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  `phone` VARCHAR(15) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  `fax` VARCHAR(15) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `user_id_idx` (`user_id` ASC),
  CONSTRAINT `user_id`
    FOREIGN KEY (`user_id`)
    REFERENCES `modulab2`.`user` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `modulab2`.`client`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `modulab2`.`client` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `company_name` VARCHAR(50) NULL,
  `created_by` INT NULL,
  `created_at` TIMESTAMP(6) NULL,
  `active` TINYINT NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  INDEX `client_created_by_idx` (`created_by` ASC),
  CONSTRAINT `client_created_by`
    FOREIGN KEY (`created_by`)
    REFERENCES `modulab2`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `modulab2`.`note`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `modulab2`.`note` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `client_id` INT NOT NULL,
  `title` VARCHAR(45) NULL,
  `content` TEXT(500) NULL,
  `type` VARCHAR(45) NULL,
  `created_by` INT NOT NULL,
  `created_at` TIMESTAMP(6) NULL,
  `active` TINYINT NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  INDEX `note_created_by_idx` (`created_by` ASC),
  INDEX `note_client_id_idx` (`client_id` ASC),
  CONSTRAINT `note_created_by`
    FOREIGN KEY (`created_by`)
    REFERENCES `modulab2`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `note_client_id`
    FOREIGN KEY (`client_id`)
    REFERENCES `modulab2`.`client` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `modulab2`.`client_info`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `modulab2`.`client_info` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `client_id` INT NULL,
  `contact_name` VARCHAR(50) NULL,
  `phone` VARCHAR(15) NULL,
  `fax` VARCHAR(15) NULL,
  `address` VARCHAR(160) NULL,
  `mail` VARCHAR(120) NULL,
  `content` TEXT(500) NULL,
  PRIMARY KEY (`id`),
  INDEX `client_id_idx` (`client_id` ASC),
  CONSTRAINT `client_id`
    FOREIGN KEY (`client_id`)
    REFERENCES `modulab2`.`client` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;