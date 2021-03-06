# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 192.168.10.10 (MySQL 5.7.9)
# Database: boxt
# Generation Time: 2017-09-12 17:51:09 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `volume` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;

INSERT INTO `items` (`id`, `name`, `volume`)
VALUES
	(1,'Custom Item',0),
	(2,'Stroller',15),
	(3,'Air Conditioner',10),
	(4,'Air Conditioner, Large',15),
	(5,'Air Conditioner, Medium',12),
	(6,'Air Conditioner, Small',5),
	(7,'Air Hockey Table',30),
	(8,'Air Purifier',5),
	(9,'Aquarium',20),
	(10,'Aquarium Stand, Large',50),
	(11,'Aquarium Stand, Small',10),
	(12,'Aquarium, 10 Gallon',3),
	(13,'Aquarium, 20 Gallon',5),
	(14,'Aquarium, 55 Gallon',16),
	(15,'Arcade',35),
	(16,'Armchair',25),
	(17,'Armchair Large',30),
	(18,'Armchair Medium',20),
	(19,'Armchair Small',15),
	(20,'Armoire, Large',70),
	(21,'Armoire, Large w/ Glass Doors',70),
	(22,'Armoire, Medium',40),
	(23,'Armoire, Medium w/ Glass Doors',50),
	(24,'Armoire, Small',30),
	(25,'Armoire, Small w/ Glass Doors',40),
	(26,'Art Easel',15),
	(27,'Baby Bouncy Chair',10),
	(28,'Baby Swing',15),
	(29,'Baby Walker',15),
	(30,'Bag',5),
	(31,'Bag, Duffel',5),
	(32,'Bag, Hockey',15),
	(33,'Baker\'s Rack',25),
	(34,'Banker\'s Box',2),
	(35,'Bar',15),
	(36,'Bar Stool',10),
	(37,'Bar, Counter',40),
	(38,'Bar, Portable',20),
	(39,'Barbecue Grill',20),
	(40,'Barbecue Grill, Small',5),
	(41,'Basked, Laundry',5),
	(42,'Basket',5),
	(43,'Basketball Hoop',50),
	(44,'Bassinet',13),
	(45,'Bean Bag',15),
	(46,'Bean Bag, Large',25),
	(47,'Bed Frame, Metal',10),
	(48,'Bed Frame, Wood',20),
	(49,'Bed, Bunk',100),
	(50,'Bed, California King',100),
	(51,'Bed, Canopy',90),
	(52,'Bed, Double',70),
	(53,'Bed, Full',70),
	(54,'Bed, Hospital',80),
	(55,'Bed, King',100),
	(56,'Bed, Platform (King)',120),
	(57,'Bed, Platform (Queen)',110),
	(58,'Bed, Queen',70),
	(59,'Bed, Settee',50),
	(60,'Bed, Single',60),
	(61,'Bed, Toddler',40),
	(62,'Bed, Twin',50),
	(63,'Bed, Water',50),
	(64,'Bedside Table',4),
	(65,'Bench',15),
	(66,'Bench, Bedside',10),
	(67,'Bench, Fireside',15),
	(68,'Bench, large',10),
	(69,'Bench, Outdoor',20),
	(70,'Bench, Piano',7),
	(71,'Bench, Small',5),
	(72,'Bike, Adult',20),
	(73,'Bike, Child\'s',10),
	(74,'Bin, Commercial',20),
	(75,'Bookcase, Extra Large',40),
	(76,'Bookcase, Folding',15),
	(77,'Bookcase, Large',30),
	(78,'Bookcase, Leaning',15),
	(79,'Bookcase, Medium',20),
	(80,'Bookcase, Small',15),
	(81,'Bookcase, Straight Large',50),
	(82,'Bookcase, Straight Medium',20),
	(83,'Bookcase, Straight Small',10),
	(84,'Bookshelf',20),
	(85,'Boombox',5),
	(86,'Box, Book',2),
	(88,'Box, China',6),
	(90,'Box, Dish Pack',5),
	(91,'Box, Extra Large',8),
	(93,'Box, File - Legal',3),
	(94,'Box, File - Letter',2),
	(95,'Box, Large',5),
	(97,'Box, Medium',3),
	(99,'Box, Small',2),
	(101,'Box, Wardrobe',16),
	(102,'Broom',10),
	(103,'Buffet',60),
	(104,'Buffet, Bottom',40),
	(105,'Buffet, Small',20),
	(106,'Buffet, Top',30),
	(107,'Bureau',25),
	(108,'Bureau, Double',60),
	(109,'Bureau, Large',35),
	(110,'Bureau, Medium',25),
	(111,'Bureau, Single',30),
	(112,'Bureau, Small',15),
	(113,'Bureau, Triple',80),
	(114,'Butcher\'s Block',15),
	(115,'Cabinet, Bar',18),
	(116,'Cabinet, Cocktail',40),
	(117,'Cabinet, Corner',30),
	(119,'Cabinet, Curio',15),
	(120,'Cabinet, Display Large',60),
	(121,'Cabinet, Display Medium',40),
	(122,'Cabinet, Display Small',20),
	(123,'Cabinet, Jewelry',10),
	(124,'Cabinet, Kitchen',20),
	(125,'Cabinet, Large',16),
	(126,'Cabinet, Medium',15),
	(127,'Cabinet, Music',15),
	(128,'Cabinet, Pantry',20),
	(129,'Cabinet, Side',25),
	(130,'Cabinet, Small',6),
	(131,'Cabinet, Stereo',10),
	(132,'Cabinet, Utility',30),
	(133,'Camping Gear',15),
	(134,'Car Toy',30),
	(135,'Carriage, Baby',10),
	(136,'Cat Condo',10),
	(137,'CD Player',2),
	(138,'CD Rack, Large',10),
	(139,'CD Rack, Medium',8),
	(140,'CD Rack, Small',5),
	(141,'Ceiling Fan',7),
	(142,'Chair',10),
	(143,'Chair,  Glider',15),
	(144,'Chair, Aluminum',10),
	(145,'Chair, Arm',25),
	(146,'Chair, Arm Upholstered',25),
	(147,'Chair, Bistro',7),
	(148,'Chair, Breakfast',10),
	(149,'Chair, Budoir',15),
	(150,'Chair, Child',5),
	(151,'Chair, Club',20),
	(152,'Chair, Computer',15),
	(153,'Chair, Desk',15),
	(154,'Chair, Dining',12),
	(155,'Chair, Dining',12),
	(156,'Chair, Dining w/ Arms',15),
	(157,'Chair, Executive',15),
	(158,'Chair, Folding',5),
	(159,'Chair, Folding, Lounge',10),
	(160,'Chair, High',10),
	(161,'Chair, Kitchen',8),
	(162,'Chair, Lawn',5),
	(163,'Chair, Lawn',5),
	(164,'Chair, Occasional',15),
	(165,'Chair, Office',15),
	(166,'Chair, Office (Large)',20),
	(167,'Chair, Office (Small)',12),
	(168,'Chair, Outdoor',10),
	(169,'Chair, Overstuffed',25),
	(170,'Chair, Papason',25),
	(171,'Chair, Patio',12),
	(172,'Chair, Plastic Stackable',5),
	(173,'Chair, Recliner',25),
	(174,'Chair, Recliner',20),
	(175,'Chair, Rocking',20),
	(176,'Chair, Secretary',15),
	(177,'Chair, Stackable',5),
	(178,'Chair, Straight',12),
	(179,'Chair, Wicker',20),
	(180,'Chair, Wingback',20),
	(181,'Chaise Lounge',30),
	(182,'Chaise Lounge, Large',50),
	(183,'Chaise Lounge, Medium',40),
	(184,'Chaise Lounge, Small',30),
	(185,'Chandelier, Large',35),
	(186,'Chandelier, Medium',25),
	(187,'Chandelier, Small',15),
	(188,'Changing Table',18),
	(189,'Chest of Drawers',25),
	(190,'Chest, Cedar',15),
	(191,'Chest, Large',30),
	(192,'Chest, Lingerie',10),
	(193,'Chest, Medium',20),
	(194,'Chest, Small',10),
	(195,'Child Rocker',15),
	(196,'China Cabinet',60),
	(197,'China Cabinet, Large',80),
	(198,'China Cabinet, Medium',60),
	(199,'Clock, Grandfather',25),
	(200,'Clock, Grandmother',25),
	(201,'Clock, Wall',4),
	(202,'Closet, Folding',25),
	(203,'Computer System',10),
	(204,'Cooler',5),
	(205,'Copier on Wheels',30),
	(206,'Copier, Office',30),
	(207,'Copier, Table Top',5),
	(208,'Credenza',25),
	(209,'Credenza, Large',40),
	(210,'Credenza, Medium',30),
	(211,'Credenza, Small',20),
	(212,'Crib, Baby (Disassembly and Assembly done by shipper)',20),
	(213,'Crib, Mini (Disassembly and Assembly done by shipper)',20),
	(214,'Crib, Standard (Disassembly and Assembly done by shipper)',35),
	(215,'Dehumidifier',7),
	(216,'Desk, Computer',20),
	(217,'Desk, Computer Large',50),
	(218,'Desk, Computer Medium',35),
	(219,'Desk, Computer Small',25),
	(220,'Desk, Corner',45),
	(221,'Desk, Double',40),
	(222,'Desk, Executive',60),
	(223,'Desk, Hutch',45),
	(224,'Desk, Office',45),
	(225,'Desk, Office w/ Return',60),
	(226,'Desk, Regular',30),
	(227,'Desk, Return, L-Shaped',40),
	(228,'Desk, Rolltop',35),
	(229,'Desk, Secretary',30),
	(230,'Desk, Small',25),
	(231,'Dishwasher',25),
	(232,'Dog Crate',12),
	(233,'Dog Crate, Small',7),
	(234,'Doll house',10),
	(235,'Dresser, Double',40),
	(236,'Dresser, Highboy',30),
	(237,'Dresser, Single',30),
	(238,'Dresser, Small',15),
	(239,'Dresser, Standard',40),
	(240,'Dresser, Triple',50),
	(241,'Dryer',25),
	(242,'DVD Player',2),
	(243,'Eco CrateÊ',3),
	(244,'Edger',5),
	(245,'Electric Scooter',15),
	(246,'Elliptical Machine',60),
	(247,'Entertainment Center, Large',60),
	(248,'Entertainment Center, Medium',40),
	(249,'Entertainment Center, Small',30),
	(250,'Entry Table',15),
	(251,'Exercise Machine',40),
	(252,'Exercise Machine, Large With Weights',80),
	(253,'Exercise Machine, Small With Weights',30),
	(254,'Fan',5),
	(255,'Fan, Box',5),
	(256,'Fan, Standing',6),
	(257,'Faux Fireplace',7),
	(258,'Fax Machine',3),
	(259,'File Cabinet, 2 Drawer',10),
	(260,'File Cabinet, 3 Drawer',15),
	(261,'File Cabinet, 4 Drawer',20),
	(262,'File Cabinet, 5 Drawer',50),
	(263,'File Cabinet, Large',40),
	(264,'File Cabinet, Small',20),
	(265,'Fire Pit',10),
	(266,'Fireplace Equipment',5),
	(267,'Fish Tank',10),
	(268,'Foosball Table',60),
	(269,'Foot Stool',5),
	(270,'Footboard',15),
	(271,'Footlocker',10),
	(272,'Freezer, Large',45),
	(273,'Freezer, Medium',35),
	(274,'Freezer, Small',10),
	(275,'Futon',35),
	(276,'Futon, Standard, Double',40),
	(277,'Futon, Standard, King',80),
	(278,'Futon, Standard, Queen',70),
	(279,'Futon, Standard, Single',30),
	(280,'Garbage Can',5),
	(281,'Garden Tools, Misc',10),
	(282,'Golf Bag',4),
	(283,'Guitar',5),
	(284,'Guitar (Encased)',5),
	(285,'Gun Safe',40),
	(286,'Hammck',30),
	(287,'Hamper',10),
	(288,'HAT BOXÊ',1),
	(289,'Headboard',15),
	(290,'Heater/Radiator',5),
	(291,'Humidifier',5),
	(292,'Hutch',20),
	(293,'Ironing Board',5),
	(294,'Kayak',50),
	(295,'Keyboard',10),
	(296,'Kitchen Island',20),
	(297,'Ladder',10),
	(298,'Ladder, Large',20),
	(299,'Ladder, Large',13),
	(300,'Ladder, Small',8),
	(301,'Lamp, Desk',5),
	(302,'Lamp, Floor',10),
	(303,'Lamp, Table',5),
	(304,'Lamp, Wall',4),
	(305,'Laptop',3),
	(306,'Lawnmower, Push',20),
	(307,'Lawnmower, Ride',50),
	(308,'Leaf Blower',5),
	(309,'Mattress Only, Crib',10),
	(310,'Mattress Only, Double',25),
	(311,'Mattress Only, Full',30),
	(312,'Mattress Only, King',45),
	(313,'Mattress Only, Queen',45),
	(314,'Mattress Only, Twin',20),
	(315,'Microwave Cart',5),
	(316,'Microwave, Standard',5),
	(317,'Mirror, Extra Large',25),
	(318,'Mirror, Floor',15),
	(319,'Mirror, Large',15),
	(320,'Mirror, Medium',7),
	(321,'Mirror, Small',5),
	(322,'Mirror, Standing',10),
	(323,'Monitor',5),
	(324,'Motorcycle',150),
	(325,'Musical Instrument',15),
	(326,'Night Stand',5),
	(327,'Ottoman, Glider',10),
	(328,'Ottoman, Large',15),
	(329,'Ottoman, Medium',10),
	(330,'Ottoman, Small',5),
	(331,'Patio Set, 3 Piece',20),
	(332,'Patio Set, 5 Piece',70),
	(333,'Pedestal',7),
	(334,'Piano, Baby Grand',100),
	(335,'Piano, Console',80),
	(336,'Piano, Electric',30),
	(337,'Piano, Grand',80),
	(338,'Piano, Parlor Grand',120),
	(339,'Piano, Spinet',60),
	(340,'Piano, Upright',70),
	(341,'Picture',3),
	(342,'Picture, Large',10),
	(343,'Picture, Medium',5),
	(344,'Picture, Small',3),
	(345,'Pinball Machine',35),
	(346,'Plant, Artificial, Large',16),
	(347,'Plant, Artificial, Small',16),
	(348,'Plastic Bin',5),
	(349,'Plastic Bin, Extra Small',2),
	(350,'Plastic Bin, Large',10),
	(351,'Plastic Bin, Medium',5),
	(352,'Plastic Bin, Medium',5),
	(353,'Plastic Bin, Small',4),
	(354,'Plastic Bin, Small',5),
	(355,'Plastic Drawers',5),
	(356,'Play House (Kids)',10),
	(357,'Playpen, Folding',5),
	(358,'Pool Table',70),
	(359,'Pottery',4),
	(360,'Printer, Small',3),
	(361,'Rack, Clothing',15),
	(362,'Rack, Coat',5),
	(363,'Rack, Large',20),
	(364,'Rack, Stanard',10),
	(365,'Record Player',2),
	(366,'Refrigerator',60),
	(367,'Refrigerator Double',80),
	(368,'Refrigerator, Large',60),
	(369,'Rug Large',15),
	(370,'Rug Medium',10),
	(371,'Rug Small',5),
	(372,'Saddle',5),
	(373,'Saddle, Large',10),
	(374,'Safe, Large',15),
	(375,'Scanner',2),
	(376,'Screen, Folding',10),
	(377,'Server',16),
	(378,'Sewing Machine, Console',10),
	(379,'Sewing Machine, Portable',5),
	(380,'Shelf',5),
	(381,'Shelf, Wall',5),
	(382,'Shelves, Wall',10),
	(383,'Shelving Unit',10),
	(384,'Shelving Unit With Wheels',28),
	(385,'Shelving Unit Without Wheels',20),
	(386,'Shredder',5),
	(387,'Sideboard',10),
	(388,'Skis',15),
	(389,'Snowboard',10),
	(390,'Sofa Bed',65),
	(391,'Sofa Bed, Queen',40),
	(392,'Sofa, 3 Seater',70),
	(393,'Sofa, 4 Seater',80),
	(394,'Sofa, Loveseat',50),
	(395,'Sofa, Sectional 2 Piece',80),
	(396,'Sofa, Sectional 3 Piece',120),
	(397,'Sofa, Sectional 4 Piece',150),
	(398,'Speakers, Floor',10),
	(399,'Speakers, Shelf',5),
	(400,'Stand, Medium',5),
	(401,'Stand, Small',3),
	(402,'Statue, Medium',10),
	(403,'Statue, Small',5),
	(404,'Step Ladder',10),
	(405,'Stereo, 2 Component',5),
	(406,'Stereo, 3 Component',5),
	(407,'Stool, Small',3),
	(408,'Stool, Standard',5),
	(409,'Stove',25),
	(410,'Stroller, Double',20),
	(411,'Stroller, Instep',16),
	(412,'Stroller, Triple',25),
	(413,'Suitcase',5),
	(414,'Surfboard',5),
	(415,'Table, Breakfast',10),
	(416,'Table, Card',8),
	(417,'Table, Coffee',10),
	(418,'Table, Conference',70),
	(419,'Table, Console',15),
	(420,'Table, Dining',30),
	(421,'Table, Dining, Large',40),
	(422,'Table, Dining, Medium',25),
	(423,'Table, Dining, Small',15),
	(424,'Table, Drop Leaf',16),
	(425,'Table, End',5),
	(426,'Table, Folding',12),
	(427,'Table, Kitchen',20),
	(428,'Table, Kitchen, Small',10),
	(429,'Table, Marble Top',50),
	(430,'Table, Massage',35),
	(431,'Table, Massage, Folding',35),
	(432,'Table, Nesting',15),
	(433,'Table, Nesting, Large',20),
	(434,'Table, Patio',25),
	(435,'Table, Side',10),
	(436,'Table, Sofa',15),
	(437,'Tanning Bed',40),
	(438,'Telescope',10),
	(439,'Tent',30),
	(440,'Tire (Car)',5),
	(441,'Toaster Oven',3),
	(442,'Toolbox, Medium',20),
	(443,'Toolbox, Small',5),
	(444,'Toolbox, Standing, Large',50),
	(445,'Tools',5),
	(446,'Toy Car',5),
	(447,'Toy Chest',10),
	(448,'Toy, Outdoor, Medium',10),
	(449,'Toy, Outdoor, Small',5),
	(450,'Toys, Miscellaneous',25),
	(451,'Trampoline',20),
	(452,'Treadmill (Disassembly and Assembly done by shipper)',100),
	(453,'Treadmill, Large (Disassembly and Assembly done by shipper)',120),
	(454,'Treadmill, Small (Can fit through door without disassembly)',100),
	(455,'Trunk',10),
	(456,'Trunk, Large',15),
	(457,'Trunk. Small',10),
	(458,'TV Cabinet, Large',20),
	(459,'TV Cabinet, Medium',10),
	(460,'TV Cabinet, Small',5),
	(461,'TV Flat 21-32 inch',7),
	(462,'TV Flat 32-50 inch',10),
	(463,'TV Flat 50-75 inch',15),
	(464,'TV Mount',5),
	(465,'TV Stand',15),
	(466,'Typewriter',3),
	(467,'Umbrella, Patio',5),
	(468,'Vacuum Cleaner',5),
	(469,'Vanity, Large',35),
	(470,'Vanity, Large w/ Mirror',40),
	(471,'Vanity, Medium',25),
	(472,'Vanity, Medium w/ Mirror',30),
	(473,'Vanity, Small',20),
	(474,'Vanity, Small w/ Mirror',25),
	(475,'Wall Unit, Large',100),
	(476,'Wall Unit, Medium',50),
	(477,'Wall Unit, Small',25),
	(478,'Wardrobe Box',15),
	(479,'Wardrobe, Double',60),
	(480,'Wardrobe, Quadruple',100),
	(481,'Wardrobe, Single',40),
	(482,'Wardrobe, Triple',80),
	(483,'Washer',25),
	(484,'Washer/Dryer Combo',60),
	(485,'Water Cooler',10),
	(486,'Weight Bench',16),
	(487,'Weights, Large',20),
	(488,'Weights, Medium',15),
	(489,'Weights, Small',10),
	(490,'Wheelbarrow',10),
	(491,'Wheelchair',15),
	(492,'Work Bench, Regular',20),
	(493,'Work Bench, Small',10);

/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
