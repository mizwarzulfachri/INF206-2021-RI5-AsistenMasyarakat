<?php

CREATE TABLE IF NOT EXISTS `masyarakat` (
  `id_masyarakat` int(50) NOT NULL AUTO_INCREMENT,
  `nama` text COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` text COLLATE latin1_general_ci NOT NULL,
  `alamat` text COLLATE latin1_general_ci NOT NULL,
  `telepon` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_masyarakat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=100001 ;

?>
