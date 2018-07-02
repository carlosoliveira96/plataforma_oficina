-- MySQL Script generated by MySQL Workbench
-- qui 28 jun 2018 13:32:02 -03
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema plat_ofic
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema plat_ofic
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `plat_ofic` DEFAULT CHARACTER SET utf8 ;
USE `plat_ofic` ;

-- -----------------------------------------------------
-- Table `plat_ofic`.`perfil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `plat_ofic`.`perfil` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `perfil` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `plat_ofic`.`login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `plat_ofic`.`login` (
  `login` VARCHAR(50) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `status` INT NOT NULL,
  `perfil_id` INT NOT NULL,
  PRIMARY KEY (`login`),
  INDEX `fk_login_perfil_idx` (`perfil_id` ASC),
  CONSTRAINT `fk_login_perfil`
    FOREIGN KEY (`perfil_id`)
    REFERENCES `plat_ofic`.`perfil` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `plat_ofic`.`empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `plat_ofic`.`empresa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `razao_social` VARCHAR(255) NULL,
  `nome_fantasia` VARCHAR(255) NOT NULL,
  `cnpj` VARCHAR(20) NULL,
  `cep` VARCHAR(10) NULL,
  `endereco` VARCHAR(255) NULL,
  `numero` VARCHAR(10) NULL,
  `complemento` VARCHAR(100) NULL,
  `bairro` VARCHAR(150) NULL,
  `cidade` VARCHAR(100) NULL,
  `uf` VARCHAR(2) NULL,
  `inscricao_estadual` VARCHAR(20) NULL,
  `telefone` VARCHAR(15) NULL,
  `celular` VARCHAR(15) NULL,
  `email` VARCHAR(150) NULL,
  `url_imagem` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `plat_ofic`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `plat_ofic`.`funcionario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NULL,
  `data_nascimento` VARCHAR(10) NULL,
  `rg` VARCHAR(25) NULL,
  `orgao_emissor` VARCHAR(25) NULL,
  `cpf` VARCHAR(20) NULL,
  `pis` VARCHAR(50) NULL,
  `ctps` VARCHAR(50) NULL,
  `titulo_eleitor` VARCHAR(50) NULL,
  `telefone` VARCHAR(15) NULL,
  `celular` VARCHAR(15) NULL,
  `cargo` VARCHAR(15) NULL,
  `situacao` INT NOT NULL,
  `login_login` VARCHAR(50) NOT NULL,
  `cep` VARCHAR(10) NULL,
  `endereco` VARCHAR(200) NULL,
  `numero` VARCHAR(50) NULL,
  `complemento` VARCHAR(150) NULL,
  `bairro` VARCHAR(100) NULL,
  `cidade` VARCHAR(100) NULL,
  `uf` VARCHAR(2) NULL,
  `url_imagem` TEXT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_funcionario_login1_idx` (`login_login` ASC),
  CONSTRAINT `fk_funcionario_login1`
    FOREIGN KEY (`login_login`)
    REFERENCES `plat_ofic`.`login` (`login`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `plat_ofic`.`admissao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `plat_ofic`.`admissao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data_admissao` VARCHAR(45) NULL,
  `data_demissao` VARCHAR(45) NULL,
  `funcionario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_admissao_funcionario1_idx` (`funcionario_id` ASC),
  CONSTRAINT `fk_admissao_funcionario1`
    FOREIGN KEY (`funcionario_id`)
    REFERENCES `plat_ofic`.`funcionario` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `plat_ofic`.`expediente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `plat_ofic`.`expediente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(100) NOT NULL,
  `conteudo` TEXT NOT NULL,
  `observacao` TEXT NULL,
  `tipo` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `plat_ofic`.`cadastro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `plat_ofic`.`cadastro` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(20) NULL,
  `nome` VARCHAR(200) NULL,
  `cpf` VARCHAR(15) NULL,
  `rg` VARCHAR(15) NULL,
  `orgao_emissor` VARCHAR(50) NULL,
  `data_nascimento` VARCHAR(10) NULL,
  `cnpj` VARCHAR(18) NULL,
  `inscricao_estadual` VARCHAR(20) NULL,
  `telefone` VARCHAR(15) NULL,
  `celular` VARCHAR(15) NULL,
  `razao_social` VARCHAR(250) NULL,
  `nome_fantasia` VARCHAR(250) NULL,
  `observacao` TEXT NULL,
  `email` VARCHAR(100) NULL,
  `fabricante` VARCHAR(200) NULL,
  `cep` VARCHAR(12) NULL,
  `endereco` VARCHAR(200) NULL,
  `numero` VARCHAR(50) NULL,
  `complemento` VARCHAR(50) NULL,
  `bairro` VARCHAR(150) NULL,
  `cidade` VARCHAR(200) NULL,
  `uf` VARCHAR(2) NULL,
  `situacao` INT NOT NULL,
  `login_login` VARCHAR(50) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cadastro_login1_idx` (`login_login` ASC),
  CONSTRAINT `fk_cadastro_login1`
    FOREIGN KEY (`login_login`)
    REFERENCES `plat_ofic`.`login` (`login`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `plat_ofic`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `plat_ofic`.`cliente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `numero_servico` VARCHAR(45) NOT NULL,
  `mes_ano_cadastro` VARCHAR(6) NULL,
  `data_cadastro` VARCHAR(10) NULL,
  `nome` VARCHAR(200) NULL,
  `cpf` VARCHAR(15) NULL,
  `rg` VARCHAR(15) NULL,
  `orgao_emissor` VARCHAR(50) NULL,
  `data_nascimento` VARCHAR(10) NULL,
  `cnpj` VARCHAR(18) NULL,
  `inscricao_estadual` VARCHAR(20) NULL,
  `telefone` VARCHAR(15) NULL,
  `celular` VARCHAR(15) NULL,
  `razao_social` VARCHAR(250) NULL,
  `nome_fantasia` VARCHAR(250) NULL,
  `observacao` TEXT NULL,
  `email` VARCHAR(100) NULL,
  `cep` VARCHAR(12) NULL,
  `endereco` VARCHAR(200) NULL,
  `numero` VARCHAR(50) NULL,
  `complemento` VARCHAR(50) NULL,
  `bairro` VARCHAR(150) NULL,
  `cidade` VARCHAR(200) NULL,
  `uf` VARCHAR(2) NULL,
  `situacao` INT NOT NULL,
  `login_login` VARCHAR(50) NOT NULL,
  `placa` VARCHAR(10) NULL,
  `fabricante` VARCHAR(150) NULL,
  `modelo` VARCHAR(150) NULL,
  `ano_fabricacao` VARCHAR(10) NULL,
  `ano_modelo` VARCHAR(10) NULL,
  `cor` VARCHAR(50) NULL,
  `chassi` VARCHAR(100) NULL,
  `sinistro` VARCHAR(100) NULL,
  `perda_total` INT NULL,
  `pendencia_peca` INT NULL,
  `data_vistoria_realizada` VARCHAR(10) NULL,
  `data_autorizacao` VARCHAR(10) NULL,
  `data_entrada` VARCHAR(10) NULL,
  `finalizado` INT NULL,
  `data_saida` VARCHAR(10) NULL,
  `data_complemento_realizado` VARCHAR(10) NULL,
  `data_agendamento` VARCHAR(10) NULL,
  `data_previsao_entrega` VARCHAR(10) NULL,
  `data_entrega` VARCHAR(10) NULL,
  `retono` INT NULL,
  `data_retorno` VARCHAR(10) NULL,
  `tipo` VARCHAR(100) NULL,
  `termo_compromisso` INT NULL,
  `agendamento` INT NULL,
  `triagem` INT NULL,
  `fazer_os` INT NULL,
  `valor_total` DOUBLE NULL,
  `corretor_id` INT NULL,
  `seguradora_id` INT NULL,
  `url_imagem` TEXT NULL,
  `hora_entrada` VARCHAR(10) NULL,
  `pronto` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cliente_login1_idx` (`login_login` ASC),
  INDEX `fk_cliente_cadastro1_idx` (`corretor_id` ASC),
  INDEX `fk_cliente_cadastro2_idx` (`seguradora_id` ASC),
  CONSTRAINT `fk_cliente_login1`
    FOREIGN KEY (`login_login`)
    REFERENCES `plat_ofic`.`login` (`login`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_cliente_cadastro1`
    FOREIGN KEY (`corretor_id`)
    REFERENCES `plat_ofic`.`cadastro` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_cliente_cadastro2`
    FOREIGN KEY (`seguradora_id`)
    REFERENCES `plat_ofic`.`cadastro` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `plat_ofic`.`historico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `plat_ofic`.`historico` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` VARCHAR(10) NULL,
  `hora` VARCHAR(10) NULL,
  `titulo` VARCHAR(100) NULL,
  `descricao` TEXT NULL,
  `cliente_id` INT NOT NULL,
  `funcionario_id` INT NOT NULL,
  `historico_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_historico_cliente1_idx` (`cliente_id` ASC),
  INDEX `fk_historico_funcionario1_idx` (`funcionario_id` ASC),
  INDEX `fk_historico_historico1_idx` (`historico_id` ASC),
  CONSTRAINT `fk_historico_cliente1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `plat_ofic`.`cliente` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_historico_funcionario1`
    FOREIGN KEY (`funcionario_id`)
    REFERENCES `plat_ofic`.`funcionario` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_historico_historico1`
    FOREIGN KEY (`historico_id`)
    REFERENCES `plat_ofic`.`historico` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `plat_ofic`.`observacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `plat_ofic`.`observacao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `observacao` TEXT NULL,
  `data` VARCHAR(10) NULL,
  `hora` VARCHAR(10) NULL,
  `cliente_id` INT NOT NULL,
  `funcionario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_observacao_cliente1_idx` (`cliente_id` ASC),
  INDEX `fk_observacao_funcionario1_idx` (`funcionario_id` ASC),
  CONSTRAINT `fk_observacao_cliente1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `plat_ofic`.`cliente` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_observacao_funcionario1`
    FOREIGN KEY (`funcionario_id`)
    REFERENCES `plat_ofic`.`funcionario` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `plat_ofic`.`pendencia_interna`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `plat_ofic`.`pendencia_interna` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `servico` VARCHAR(45) NULL,
  `status` INT NULL,
  `cliente_id` INT NOT NULL,
  `funcionario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pendencia_interna_cliente1_idx` (`cliente_id` ASC),
  INDEX `fk_pendencia_interna_funcionario1_idx` (`funcionario_id` ASC),
  CONSTRAINT `fk_pendencia_interna_cliente1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `plat_ofic`.`cliente` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_pendencia_interna_funcionario1`
    FOREIGN KEY (`funcionario_id`)
    REFERENCES `plat_ofic`.`funcionario` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `plat_ofic`.`servico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `plat_ofic`.`servico` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `servico` VARCHAR(100) NULL,
  `tipo` INT NULL,
  `situacao` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `plat_ofic`.`funcionario_servico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `plat_ofic`.`funcionario_servico` (
  `funcionario_id` INT NOT NULL,
  `servico_id` INT NOT NULL,
  PRIMARY KEY (`funcionario_id`, `servico_id`),
  INDEX `fk_funcionario_has_servico_servico1_idx` (`servico_id` ASC),
  INDEX `fk_funcionario_has_servico_funcionario1_idx` (`funcionario_id` ASC),
  CONSTRAINT `fk_funcionario_has_servico_funcionario1`
    FOREIGN KEY (`funcionario_id`)
    REFERENCES `plat_ofic`.`funcionario` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_funcionario_has_servico_servico1`
    FOREIGN KEY (`servico_id`)
    REFERENCES `plat_ofic`.`servico` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `plat_ofic`.`cliente_servico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `plat_ofic`.`cliente_servico` (
  `cliente_id` INT NOT NULL,
  `servico_id` INT NOT NULL,
  `funcionario_id` INT NULL,
  `status` VARCHAR(50) NULL,
  `data_inicio` VARCHAR(10) NULL,
  `hora_inicio` VARCHAR(10) NULL,
  `data_fim` VARCHAR(10) NULL,
  `hora_fim` VARCHAR(10) NULL,
  `situacao` INT NOT NULL,
  `qtd` INT NOT NULL,
  PRIMARY KEY (`cliente_id`, `servico_id`),
  INDEX `fk_cliente_has_servico_servico1_idx` (`servico_id` ASC),
  INDEX `fk_cliente_has_servico_cliente1_idx` (`cliente_id` ASC),
  INDEX `fk_cliente_servico_funcionario1_idx` (`funcionario_id` ASC),
  CONSTRAINT `fk_cliente_has_servico_cliente1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `plat_ofic`.`cliente` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_cliente_has_servico_servico1`
    FOREIGN KEY (`servico_id`)
    REFERENCES `plat_ofic`.`servico` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_cliente_servico_funcionario1`
    FOREIGN KEY (`funcionario_id`)
    REFERENCES `plat_ofic`.`funcionario` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `plat_ofic`.`mensagem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `plat_ofic`.`mensagem` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` VARCHAR(10) NOT NULL,
  `hora` VARCHAR(10) NOT NULL,
  `conteudo` TEXT NOT NULL,
  `funcionario_de` INT NOT NULL,
  `funcionario_para` INT NOT NULL,
  `cliente_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_mensagem_funcionario1_idx` (`funcionario_de` ASC),
  INDEX `fk_mensagem_funcionario2_idx` (`funcionario_para` ASC),
  INDEX `fk_mensagem_cliente1_idx` (`cliente_id` ASC),
  CONSTRAINT `fk_mensagem_funcionario1`
    FOREIGN KEY (`funcionario_de`)
    REFERENCES `plat_ofic`.`funcionario` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_mensagem_funcionario2`
    FOREIGN KEY (`funcionario_para`)
    REFERENCES `plat_ofic`.`funcionario` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_mensagem_cliente1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `plat_ofic`.`cliente` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `plat_ofic`.`notificacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `plat_ofic`.`notificacao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NULL,
  `descricao` TEXT NULL,
  `data` VARCHAR(10) NULL,
  `hora` VARCHAR(10) NULL,
  `status` INT NULL,
  `situacao` INT NULL,
  `mensagem_id` INT NOT NULL,
  `funcionario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_notificacao_mensagem1_idx` (`mensagem_id` ASC),
  INDEX `fk_notificacao_funcionario1_idx` (`funcionario_id` ASC),
  CONSTRAINT `fk_notificacao_mensagem1`
    FOREIGN KEY (`mensagem_id`)
    REFERENCES `plat_ofic`.`mensagem` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_notificacao_funcionario1`
    FOREIGN KEY (`funcionario_id`)
    REFERENCES `plat_ofic`.`funcionario` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
