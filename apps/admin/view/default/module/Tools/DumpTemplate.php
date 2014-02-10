-- ypCore Dumper
-- Website: http://go.use.vn
--
-- Host: <?= $dump['host'] ?>
-- Server version: <?= $dump['server_version'] ?>
-- PHP Version: <?= $dump['php_version'] ?>
-- Time: <?= $dump['time'] ?>

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET SESSION `character_set_client`='utf8';
SET SESSION `character_set_results`='utf8';
SET SESSION `character_set_connection`='utf8';
SET SESSION `collation_connection`='utf8_general_ci';
SET NAMES 'utf8';
ALTER DATABASE DEFAULT CHARACTER SET `utf8` COLLATE `utf8_general_ci`;



-- ---------------------------------------

<?php foreach ($datas as $data) { ?>
--
-- Table structure for table `<?= $data['table_name'] ?>`
--

DROP TABLE IF EXISTS `<?= $data['table_name'] ?>`;

--
-- Dumping data for table `<?= $data['table_name'] ?>`
--
<?php foreach ($data['data'] as $_data) { ?>
INSERT INTO `<?= $data['table_name'] ?>` (<?= implode(', ', $_data['table_fields']) ?>) 
VALUES (<?= implode(', ', $_data['table_values']) ?>);
<?php } ?>
<?php } ?>