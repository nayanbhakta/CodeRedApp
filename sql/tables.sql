CREATE TABLE `codered1`.`users` (
  `username` VARCHAR(16) NOT NULL,
  `password` CHAR(64) NOT NULL,
  `role` VARCHAR(45) NOT NULL,
  `profile_pic` BLOB NULL,
  PRIMARY KEY (`username`));


INSERT INTO `codered1`.`users` (`username`, `password`, `role`) VALUES ('test', 'test', 'admin');


CREATE TABLE `codered1`.`tasks` (
  `idtasks` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(200) NULL,
  `state` VARCHAR(15) NOT NULL,
  `points` INT NULL DEFAULT 0,
  `proofpic` BLOB NOT NULL,
  PRIMARY KEY (`idtasks`));

ALTER TABLE `codered1`.`tasks` 
ADD COLUMN `user_assigned` VARCHAR(16) NOT NULL AFTER `idtasks`;

ALTER TABLE `codered1`.`tasks` 
CHANGE COLUMN `proofpic` `proofpic` BLOB NULL ;

ALTER TABLE `codered1`.`tasks` 
CHANGE COLUMN `idtasks` `idtasks` INT(11) NOT NULL AUTO_INCREMENT ;

INSERT INTO `codered1`.`tasks` (`user_assigned`, `name`, `description`, `state`, `points`) VALUES ('child', 'cleaning', 'clean the room', 'pending', '10');