CREATE TABLE `dbphp`.`tbflight` (`id` VARCHAR(10) NOT NULL , `ftype` VARCHAR(10) NOT NULL , `source` VARCHAR(20) NOT NULL , `destination` VARCHAR(20) NOT NULL , `deptime` TIME NOT NULL , `hours` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


INSERT INTO `tbflight` (`id`, `ftype`, `source`, `destination`, `deptime`, `hours`) VALUES ('B01', 'Boeing', 'Hanoi', 'Saigon', '08:12:41', '3'), ('B02', 'Boeing', 'Hanoi', 'Danang', '07:12:41', '1');

INSERT INTO `tbflight` (`id`, `ftype`, `source`, `destination`, `deptime`, `hours`) VALUES ('A01', 'Airbus', 'Saigon', 'Hue', '08:00', '1'), ('A02', 'Airbus', 'Saigon', 'Danang', '09:00', '1');

INSERT INTO `tbflight` (`id`, `ftype`, `source`, `destination`, `deptime`, `hours`) VALUES ('A03', 'Airbus', 'Saigon', 'Bangkok', '09:15', '3'), ('A04', 'Airbus', 'Saigon', 'Hongkong', '16:00', '4');