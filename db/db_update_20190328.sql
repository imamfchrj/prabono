ALTER TABLE `users_advokat` ADD `notif` INT NOT NULL DEFAULT '0' AFTER `modified`
ALTER TABLE `users` ADD `notif` INT NOT NULL DEFAULT '0' AFTER `modified`