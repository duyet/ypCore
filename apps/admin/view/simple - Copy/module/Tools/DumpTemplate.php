-- ypCore Dumper
-- Website: http://go.use.vn
--
-- Host: <?php echo $dump['host'] ?>
-- Server version: <?php echo $dump['server_version'] ?>
-- PHP Version: <?php echo $dump['php_version'] ?>
-- Time: <?php echo $dump['time'] ?>

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
-- Table structure for table `<?php echo $data['table_name'] ?>`
--

DROP TABLE IF EXISTS `<?php echo $data['table_name'] ?>`;

--
-- Dumping data for table `<?php echo $data['table_name'] ?>`
--
<?php foreach ($data['data'] as $_data) { ?>
INSERT INTO `<?php echo $data['table_name'] ?>` (<?php echo implode(', ', $_data['table_fields']) ?>) 
VALUES (<?php echo implode(', ', $_data['table_values']) ?>);
<?php } ?>
<?php } ?>