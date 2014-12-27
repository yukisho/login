CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;


INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2a$08$CUN1VyM3xgpthRBxnVIXO.UxB0nPS8NaSMSy42UYUMSuziu6FDdV2');