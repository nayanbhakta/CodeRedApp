CREATE TABLE `codered1`.`users` (
  `username` VARCHAR(16) NOT NULL,
  `password` CHAR(64) NOT NULL,
  `role` VARCHAR(45) NOT NULL,
  `profile_pic` BLOB NULL,
  PRIMARY KEY (`username`));
