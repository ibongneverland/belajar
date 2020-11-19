<?php

echo "ALTER TABLE `rsl2020`.`template_laboratorium` ADD CONSTRAINT `template_laboratorium_ibfk_1` FOREIGN KEY (`kd_jenis_prw`) REFERENCES `rsl2020`.`jns_perawatan_lab` (`kd_jenis_prw`) ON DELETE CASCADE ON UPDATE CASCADE;";

?>
