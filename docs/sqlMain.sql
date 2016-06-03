SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `gerefina` DEFAULT CHARACTER SET utf8 ;
USE `gerefina` ;

-- -----------------------------------------------------
-- Table `gerefina`.`account`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `gerefina`.`account` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `description` TEXT NULL ,
  `balance` DECIMAL(10,2) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gerefina`.`category`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `gerefina`.`category` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `description` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gerefina`.`transaction`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `gerefina`.`transaction` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `description` TEXT NULL ,
  `type` ENUM('debit','credit') NOT NULL ,
  `category_id` INT NOT NULL ,
  `account_id` INT NOT NULL ,
  `date` DATETIME NOT NULL ,
  `value` DECIMAL(10,2) NOT NULL ,
  PRIMARY KEY (`id`, `category_id`, `account_id`) ,
  INDEX `fk_transaction_account_idx` (`account_id` ASC) ,
  INDEX `fk_transaction_category1_idx` (`category_id` ASC) ,
  CONSTRAINT `fk_transaction_account`
    FOREIGN KEY (`account_id` )
    REFERENCES `gerefina`.`account` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_transaction_category1`
    FOREIGN KEY (`category_id` )
    REFERENCES `gerefina`.`category` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Initial Inserts
-- -----------------------------------------------------

INSERT INTO account (
    name,
    description,
    balance
) VALUES (
    'Carteira',
    'Dinheirinho que anda com você para onde você for :)',
    0.00);

INSERT INTO category (
    name,
    description
) VALUES (
    'Transporte',
    'Combustível, IPVA, etc'
), (
    'Alimentação',
    'Mercado, Açouge, etc'
), (
    'Vestuário',
    'Roupas, Calçados, etc'
);

INSERT INTO transaction (
    name,
    description,
    type,
    category_id,
    account_id,
    date,
    value
) VALUES ( 
    'Primeira Transaction',
    'Transaction Inicial',
    'credit',
    1,
    1,
    '2014-02-19 22:00:00',
    0
);