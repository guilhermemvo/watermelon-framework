CREATE USER 'watermelon'@'%' IDENTIFIED WITH mysql_native_password AS '***';
GRANT ALL PRIVILEGES ON *.* TO 'watermelon'@'%' REQUIRE NONE WITH
GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
CREATE DATABASE IF NOT EXISTS `watermelon`;
GRANT ALL PRIVILEGES ON `watermelon`.* TO 'watermelon'@'%';
GRANT ALL PRIVILEGES ON `watermelon\_%`.* TO 'watermelon'@'%';

-- -----------------------------------------------------
-- Table `watermelon`.`account`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `watermelon`.`account` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `description` TEXT NULL ,
  `balance` DECIMAL(10,2) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `watermelon`.`category`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `watermelon`.`category` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `description` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `watermelon`.`transaction`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `watermelon`.`transaction` (
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
    REFERENCES `watermelon`.`account` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_transaction_category1`
    FOREIGN KEY (`category_id` )
    REFERENCES `watermelon`.`category` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


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
