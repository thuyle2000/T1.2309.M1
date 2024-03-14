CREATE TABLE `db2309.m1`.`tbcourse` 
(`id` INT NOT NULL AUTO_INCREMENT , 
`name` VARCHAR(30) NOT NULL , 
`fee` INT NOT NULL DEFAULT '1000' , 
PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `tbcourse` (`id`, `name`, `fee`) VALUES 
(NULL, 'ACCP 2000', '1000'), 
(NULL, 'ACCP 7023', '1100'),
(NULL, 'ACCP 7091', '1150');


CREATE TABLE `db2309.m1`.`tbbatch` 
(`id` VARCHAR(10) NOT NULL , 
`fee` INT NOT NULL DEFAULT '1000' , 
`start_date` DATE NOT NULL DEFAULT CURRENT_DATE , 
`course_id` INT NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `tbbatch` (`id`, `fee`, `start_date`, `course_id`) VALUES 
('2309.M1', '1150', '2023-09-01', '3'), 
('2303.M0', '1000', '2023-03-01', '2');

