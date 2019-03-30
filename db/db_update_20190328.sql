ALTER TABLE `users_advokat` ADD `notif` INT NOT NULL DEFAULT '0' AFTER `modified`;
ALTER TABLE `users` ADD `notif` INT NOT NULL DEFAULT '0' AFTER `modified`;

CREATE TABLE `saran` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `hp` char(13) NOT NULL,
  `saran` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;