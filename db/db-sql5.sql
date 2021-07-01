-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema pente-magico
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pente-magico
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pente-magico` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `pente-magico`.`formando`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pente-magico`.`formando` (
  `idformando` INT(11) NOT NULL AUTO_INCREMENT,
  `nomeformando` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(45) NULL DEFAULT NULL,
  `cidade` VARCHAR(45) NULL DEFAULT NULL,
  `telefone` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idformando`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pente-magico`.`descricao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pente-magico`.`descricao` (
  `iddescricao` INT(11) NOT NULL AUTO_INCREMENT,
  `descricaoresumida` VARCHAR(45) NULL DEFAULT NULL,
  `descricaodetalhada` VARCHAR(500) NULL DEFAULT NULL,
  PRIMARY KEY (`iddescricao`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pente-magico`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pente-magico`.`categoria` (
  `idcategoria` INT(11) NOT NULL AUTO_INCREMENT,
  `nomecategoria` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idcategoria`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pente-magico`.`cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pente-magico`.`cursos` (
  `idcursos` INT(11) NOT NULL AUTO_INCREMENT,
  `nome-curso` VARCHAR(45) NOT NULL,
  `preco` VARCHAR(45) NOT NULL,
  `duracao` VARCHAR(200) NULL DEFAULT NULL,
  `lotacao` VARCHAR(45) NULL DEFAULT NULL,
  `lugar` VARCHAR(45) NULL DEFAULT NULL,
  `data-de-inicio-curso` VARCHAR(45) NULL DEFAULT NULL,
  `data` DATE NOT NULL,
  `dataupdate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `descricao_iddescricao` INT(11) NOT NULL,
  `categoria_idcategoria` INT(11) NOT NULL,
  PRIMARY KEY (`idcursos`, `descricao_iddescricao`, `categoria_idcategoria`),
  INDEX `descricao_iddescricao` (`descricao_iddescricao` ASC) VISIBLE,
  INDEX `categoria_idcategoria` (`categoria_idcategoria` ASC) VISIBLE,
  CONSTRAINT `cursos_ibfk_1`
    FOREIGN KEY (`descricao_iddescricao`)
    REFERENCES `pente-magico`.`descricao` (`iddescricao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `cursos_ibfk_2`
    FOREIGN KEY (`categoria_idcategoria`)
    REFERENCES `pente-magico`.`categoria` (`idcategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`cursoformando`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pente-magico`.`cursoformando` (
  `idcursoformando` INT UNSIGNED NOT NULL,
  `formando_idformando` INT(11) NOT NULL,
  `cursos_idcursos` INT(11) NOT NULL,
  `cursos_descricao_iddescricao` INT(11) NOT NULL,
  `cursos_categoria_idcategoria` INT(11) NOT NULL,
  PRIMARY KEY (`idcursoformando`),
 
    FOREIGN KEY (`formando_idformando`)
    REFERENCES `pente-magico`.`formando` (`idformando`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,

    FOREIGN KEY (`cursos_idcursos` , `cursos_descricao_iddescricao` , `cursos_categoria_idcategoria`)
    REFERENCES `pente-magico`.`cursos` (`idcursos` , `descricao_iddescricao` , `categoria_idcategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `pente-magico` ;

-- -----------------------------------------------------
-- Table `pente-magico`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pente-magico`.`categoria` (
  `idcategoria` INT(11) NOT NULL AUTO_INCREMENT,
  `nomecategoria` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idcategoria`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pente-magico`.`descricao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pente-magico`.`descricao` (
  `iddescricao` INT(11) NOT NULL AUTO_INCREMENT,
  `descricaoresumida` VARCHAR(45) NULL DEFAULT NULL,
  `descricaodetalhada` VARCHAR(500) NULL DEFAULT NULL,
  PRIMARY KEY (`iddescricao`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pente-magico`.`cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pente-magico`.`cursos` (
  `idcursos` INT(11) NOT NULL AUTO_INCREMENT,
  `nome-curso` VARCHAR(45) NOT NULL,
  `preco` VARCHAR(45) NOT NULL,
  `duracao` VARCHAR(200) NULL DEFAULT NULL,
  `lotacao` VARCHAR(45) NULL DEFAULT NULL,
  `lugar` VARCHAR(45) NULL DEFAULT NULL,
  `data-de-inicio-curso` VARCHAR(45) NULL DEFAULT NULL,
  `data` DATE NOT NULL,
  `dataupdate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `descricao_iddescricao` INT(11) NOT NULL,
  `categoria_idcategoria` INT(11) NOT NULL,
  PRIMARY KEY (`idcursos`, `descricao_iddescricao`, `categoria_idcategoria`),
  INDEX `descricao_iddescricao` (`descricao_iddescricao` ASC) VISIBLE,
  INDEX `categoria_idcategoria` (`categoria_idcategoria` ASC) VISIBLE,
  CONSTRAINT `cursos_ibfk_1`
    FOREIGN KEY (`descricao_iddescricao`)
    REFERENCES `pente-magico`.`descricao` (`iddescricao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `cursos_ibfk_2`
    FOREIGN KEY (`categoria_idcategoria`)
    REFERENCES `pente-magico`.`categoria` (`idcategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pente-magico`.`formador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pente-magico`.`formador` (
  `idformador` INT(11) NOT NULL AUTO_INCREMENT,
  `nomeformador` VARCHAR(45) NULL DEFAULT NULL,
  `especialidade` VARCHAR(45) NULL DEFAULT NULL,
  `endereco` VARCHAR(45) NULL DEFAULT NULL,
  `cidade` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `telefone` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idformador`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pente-magico`.`formando`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pente-magico`.`formando` (
  `idformando` INT(11) NOT NULL AUTO_INCREMENT,
  `nomeformando` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(45) NULL DEFAULT NULL,
  `cidade` VARCHAR(45) NULL DEFAULT NULL,
  `telefone` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idformando`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pente-magico`.`perfil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pente-magico`.`perfil` (
  `idperfil` INT(11) NOT NULL,
  `nomeperfil` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idperfil`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pente-magico`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pente-magico`.`usuario` (
  `idusuario` INT(11) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `senha` VARCHAR(45) NULL DEFAULT NULL,
  `tipodeusuario` VARCHAR(45) NULL DEFAULT NULL COMMENT '\'admin\',\'formando\', \'formador\'',
  `perfil_idperfil` INT(11) NOT NULL,
  `formador_idformador` INT(11) NOT NULL,
  `formando_idformando` INT(11) NOT NULL,
  PRIMARY KEY (`idusuario`, `perfil_idperfil`, `formador_idformador`, `formando_idformando`),
  INDEX `usuario_ibfk_1` (`perfil_idperfil` ASC) VISIBLE,
  INDEX `fk_usuario_formador1` (`formador_idformador` ASC) VISIBLE,
  INDEX `fk_usuario_formando1` (`formando_idformando` ASC) VISIBLE,
  CONSTRAINT `fk_usuario_formador1`
    FOREIGN KEY (`formador_idformador`)
    REFERENCES `pente-magico`.`formador` (`idformador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_formando1`
    FOREIGN KEY (`formando_idformando`)
    REFERENCES `pente-magico`.`formando` (`idformando`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `usuario_ibfk_1`
    FOREIGN KEY (`perfil_idperfil`)
    REFERENCES `pente-magico`.`perfil` (`idperfil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
