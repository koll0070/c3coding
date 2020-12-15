CREATE TABLE `c3_bebras` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `school` varchar(45) CHARACTER SET utf8 NOT NULL,
  `grade` smallint(4) NOT NULL,
  `code1` varchar(100) CHARACTER SET utf8 NOT NULL,
  `code2` varchar(100) CHARACTER SET utf8 NOT NULL,
  `flag` char(1) CHARACTER SET utf8 NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`idx`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_bin