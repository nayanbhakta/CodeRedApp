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
