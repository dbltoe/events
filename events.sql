SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for events
-- ----------------------------
DROP TABLE IF EXISTS `zen_events`;
CREATE TABLE `zen_events` (
  `event_id` bigint(20) NOT NULL auto_increment,
  `event_name` varchar(100) default NULL,
  `event_location` varchar(75) default NULL,
  `event_start` datetime default NULL,
  `event_stop` datetime default NULL,
  `event_comments` varchar(255) default NULL,
  `event_booth_location` varchar(255) default NULL,
  `special_text` varchar(200) default NULL,
  `map` varchar(255) default NULL,
  PRIMARY KEY  (`event_id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;