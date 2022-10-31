<?php
/*pulled from db creation*/


CREATE TABLE `puppy play pen`.`user` (`id` INT(4) NOT NULL AUTO_INCREMENT , `username` VARCHAR(20) NOT NULL , `password` VARCHAR(11) NOT NULL , `email` VARCHAR(99) NOT NULL , PRIMARY KEY (`id`));


/*create user table and character table entry at same time in hopes that 'id' value will be the same and can be used to pull other info later*/
id
Character name
Experience
Cash
Toys
Kibble
Treats
Dogecoin /* mined as mid game passive, used to buy items on a darkweb blackmarket. player can buy regular items as well as items exclusively available on the blackmarket (creepily harmless vibes)*/

CREATE TABLE `puppy play pen`.`playercharacter` (`id` INT(4) NOT NULL AUTO_INCREMENT , `Char Name` VARCHAR(20) NOT NULL , `Experience` INT(25) NOT NULL , `Cash` INT(13) NOT NULL , `Toys` INT(13) NOT NULL , `Kibble` INT(13) NOT NULL , `Treats` INT(13) NOT NULL , `Dogecoin` INT(13) NOT NULL , PRIMARY KEY (`id`));

/*customer Base-list of available customers. customer ids and related stats are unique. customers can be generated with a special method. Customer Base should be seeded by discord community or something like that.  customer number limited based on level and/or amount of employees*/

customer
id
customer name 
customer pet icon /*text "1.png" selected via dropdown or random. chooses from a list of various dog icons */
customer pet name
customer income value /*income per cycle from this customer*/
available /* yes/no*/

CREATE TABLE `puppy play pen`.`customerbase` (`id` INT NOT NULL AUTO_INCREMENT , `customerName` VARCHAR(20) NOT NULL , `customerPetIcon` VARCHAR(10) NOT NULL , `customerPetName` VARCHAR NOT NULL , `customerIncomeValue` INT NOT NULL , `Available` VARCHAR(3) NOT NULL , PRIMARY KEY, `Groomer` VARCHAR(20) NOT NULL (`id`));


/*store should be upgradeable. ie land/stalls result in more activities performed at once.*/

