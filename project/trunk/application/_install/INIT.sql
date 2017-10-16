CREATE DATABASE dbsocialedu;


CREATE TABLE IF NOT EXISTS `tblfeeds` (
  `author` varchar(32) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(10) unsigned NOT NULL,
  `content` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/* Sample data to get you going */
INSERT INTO `dbsocialedu`.`tblfeeds` (`author`, `date_time`, `ID`, `author_id`, `content`) VALUES ('Ranjan', CURRENT_TIMESTAMP, NULL, '1', 'Hello World');

/*for the profile*/
 	CREATE TABLE `tbldata` (
 `fldId` int(5) NOT NULL AUTO_INCREMENT,
 `fldName` varchar(15) DEFAULT NULL,
 `fldStream` varchar(15) DEFAULT NULL,
 `fldSem` int(5) DEFAULT NULL,
 `fldGender` varchar(15) DEFAULT NULL,
 `fldCollege` varchar(15) DEFAULT NULL,
 `fldHome` varchar(15) DEFAULT NULL,
 `fldPhone` varchar(15) DEFAULT NULL,
 `fldAbout` blob,
 `fldEmail` varchar(25) DEFAULT NULL,

 PRIMARY KEY (`fldId`),FOREIGN KEY (
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='table for profile data'

/*for the class links*/
CREATE TABLE `tblclslinks` (
 `title` varchar(32) DEFAULT NULL,
 `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `content` varchar(1024) DEFAULT NULL,
 `course` varchar(32) DEFAULT NULL,
 `combination` varchar(32) DEFAULT NULL,
 `year` int(10) DEFAULT NULL,
 PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8

/*for the coll feeds*/
CREATE TABLE `tblcollfeeds` (
 `title` varchar(50) DEFAULT NULL,
 `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `content` varchar(1024) DEFAULT NULL,
 PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8

CREATE TABLE IF NOT EXISTS `tblauthentication` (
  `fldID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fldUsername` varchar(32) NOT NULL,
  `fldPassword` blob NOT NULL,
  PRIMARY KEY (`fldID`),
  UNIQUE KEY `fldUsername` (`fldUsername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- Sample user addition
INSERT INTO `tblauthentication`(`fldUsername`, `fldPassword`) VALUES ('admin@socialedu.org',AES_ENCRYPT('admin','socialedu'));

CREATE TABLE IF NOT EXISTS `tblMedia` (
  `fldMediaID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fldName` varchar(255) NOT NULL,
  `fldDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fldMediaID`),
  UNIQUE KEY `fldName` (`fldName`),
  KEY `fldDate` (`fldDate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

ALTER TABLE `tblMedia` ADD `fldDescription` VARCHAR(255) NULL DEFAULT NULL ;

CREATE TABLE IF NOT EXISTS `tblComments` (
  `fldCommentID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fldAuthorID` int(10) unsigned NOT NULL,
  `fldDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fldText` varchar(255) DEFAULT NULL,
  `fldMediaID` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`fldCommentID`),
  UNIQUE KEY `fldAuthorID` (`fldAuthorID`),
  KEY `fldDate` (`fldDate`),
  KEY `fldMediaID` (`fldMediaID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

ALTER TABLE `tblComments`
  ADD CONSTRAINT `fk_media_id` FOREIGN KEY (`fldMediaID`) REFERENCES `tblMedia` (`fldMediaID`),
  ADD CONSTRAINT `fk_author_id` FOREIGN KEY (`fldAuthorID`) REFERENCES `tblauthentication` (`fldID`);

--Demo data

INSERT INTO `dbsocialedu`.`tblMedia` (`fldMediaID`, `fldName`, `fldDate`, `fldDescription`) VALUES (NULL, 'movie', CURRENT_TIMESTAMP, 'Demo Movie');
INSERT INTO `dbsocialedu`.`tblComments` (`fldCommentID`, `fldAuthorID`, `fldDate`, `fldText`, `fldMediaID`) VALUES (NULL, '1', CURRENT_TIMESTAMP, 'Another random comment', '1');
