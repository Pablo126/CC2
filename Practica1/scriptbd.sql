CREATE SCHEMA IF NOT EXISTS `practica1cc` DEFAULT CHARACTER SET utf8 ;
USE `practica1cc` ;

CREATE TABLE IF NOT EXISTS `practica1cc`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id`))

insert into usuarios (id,name)  values (null,'Pablo1');

insert into usuarios (id,name)  values (null,'Pablo2');



