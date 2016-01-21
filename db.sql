
CREATE TABLE `kofein`.`users` ( `id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(50) NOT NULL , `email` VARCHAR(100) NOT NULL , `password` VARCHAR(256) NOT NULL , `salt` VARCHAR(256) NOT NULL , `kota_asal` VARCHAR(50) NOT NULL , `sekolah_asal` VARCHAR(255) NOT NULL , `created_at` TIMESTAMP NOT NULL , `update_at` TIMESTAMP NOT NULL , `delete_at` TIMESTAMP NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `ci_sessions` (
        `id` varchar(40) NOT NULL,
        `ip_address` varchar(45) NOT NULL,
        `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        `data` blob NOT NULL,
        PRIMARY KEY (id),
        KEY `ci_sessions_timestamp` (`timestamp`)
);

CREATE TABLE `kofein`.`waktu_ujian` ( `id` INT NOT NULL AUTO_INCREMENT , `user_id` INT NOT NULL , `ujian_id` INT NOT NULL , `time_start` DATETIME NOT NULL , `time_end` DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `kofein`.`ujians` ( `id` INT NOT NULL AUTO_INCREMENT , `time_start` DATETIME NOT NULL , `time_end` DATETIME NOT NULL , `time_pengumuman` DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `ujians` ADD `durasi_ujian` INT NOT NULL AFTER `time_pengumuman`;