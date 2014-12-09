CREATE DATABASE  IF NOT EXISTS `greeting_card_supply` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `greeting_card_supply`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: greeting_card_supply
-- ------------------------------------------------------
-- Server version	5.6.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `street_address` varchar(100) DEFAULT NULL,
  `street_address2` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='order_id';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `line_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Premiums Cards & Envelopes','<font color=\"#FFFF33\">Premium Envelopes & Cards</font> have a smooth vellum finish, but are not translucent. <font color=\"#FFFFFF\">Matching blank card stock</font> is available with a <font color=\"#FFFFFF\">flat or embossed panel</font> on the face of the card. The envelopes are made with <font color=\"#FFFFFF\">10% recycled content</font>. ','2014-12-09 08:47:16','2014-12-09 08:47:16','1'),(2,'Linen Cards & Envelopes','<font color=\"#FFFF33\">Linen Envelopes & Cards</font> are made of a paper with a linen texture. <font color=\"#FFFFFF\">Matching blank card stock</font> is available with a <font color=\"#FFFFFF\">flat or embossed panel</font> on the face of the card. ','2014-12-09 08:47:16','2014-12-09 08:47:16','1'),(3,'Mohawk Cards & Envelopes','<font color=\"#FFFF33\">Mohawk Cards & Envelopes</font> are <font color=\"#FFFFFF\">Green Seal Certified</font> and <font color=\"#FFFFFF\">100% post consumer waste (PCW) recycled</font> content. They also use <font color=\"#FFFFFF\">wind power to generate 100% of the electricity used in this paper production!</font> ','2014-12-09 08:47:16','2014-12-09 08:47:16','1'),(4,'Deckled Cards & Envelopes','<font color=\"#FFFF33\">Deckled Edge Envelopes & Card Stock</font> have deckled edges (gracefully torn). The blank cards are made of <font color=\"#FFFFFF\">ultra felt paper</font> and the envelopes are <font color=\"#FFFFFF\">deckled along the edge</font> of their flaps. Many of the envelopes are <font color=\"#FFFFFF\">made of 100% recycled content</font>. ','2014-12-09 08:47:16','2014-12-09 08:47:16','1'),(5,'Basis Envelopes','<font color=\"#FFFF33\">Basis Envelopes & Cards</font> are paper envelopes that come in <font color=\"#FFFFFF\">many colors and sizes</font>. These envelopes are from the same maker of the <a href=\"/?cat|ASTR\" class=\"FeatureLink\">Astrobrights</a>, but <font color=\"#FFFFFF\">Basis Envelopes are thicker</font>. ','2014-12-09 08:47:16','2014-12-09 08:47:16','1'),(6,'Brown Bag Envelopes','<font color=\"#FFFF33\">Brown Bag Envelopes</font> have the look and feel of the traditional large brown bags used in grocery stores. <font color=\"#FFFFFF\">Made from 100% recycled material</font>, these envelopes give a natural earthy look to your cards and invitations. ','2014-12-09 08:47:16','2014-12-09 08:47:16','1'),(7,'Astrobrights Envelopes','<font color=\"#FFFF33\">Astrobrights Envelopes & Card Stock</font> are paper envelopes that come in <font color=\"#FFFFFF\">many colors and sizes</font>. If you\'re looking for envelopes that are a little thicker try the <a href=\"/?cat|BASI\" class=\"FeatureLink\">Basis Cards and Envelopes</a>. ','2014-12-09 08:47:17','2014-12-09 08:47:17','1'),(8,'Foil-lined Envelopes','<font color=\"#FFFF33\">Foil-lined Envelopes</font> are white paper envelopes with a vellum finish and the inside has a <font color=\"#FFFFFF\">silver or gold foil lining</font>. These envelopes are <font color=\"#FFFFFF\">great for any special occasion</font>. ','2014-12-09 08:47:17','2014-12-09 08:47:17','1'),(9,'Leather Metallic Envelopes','<font color=\"#FFFF33\">Eastern Metallic Cards & Envelopes with a Leather Finish</font> are stunning to look at as they have a nice sheen on them. The paper\'s surface <font color=\"#FFFFFF\">resembles a fine leather texture</font>. The cards are white on the inside. ','2014-12-09 08:47:17','2014-12-09 08:47:17','1'),(10,'Brushed Metallic Envelopes','<font color=\"#FFFF33\">Eastern Metallic Cards & Envelopes with a Brushed Finish</font> are stunning to look at as they have a nice sheen on them. The paper\'s surface <font color=\"#FFFFFF\">resembles a brushed metal texture</font>. The cards are white on the inside. ','2014-12-09 08:47:17','2014-12-09 08:47:17','1'),(11,'Stardream Envelopes','<font color=\"#FFFF33\">Stardream Envelopes</font> have a unique <font color=\"#FFFFFF\">metallic and smooth iridescent finish</font>. Resembles metallic-speck paint often used on new car finishes. ','2014-12-09 08:47:17','2014-12-09 08:47:17','1'),(12,'Notables Envelopes','<font color=\"#FFFF33\">Notables Envelopes</font> for note cards in nice earth tone colors. <font color=\"#FFFFFF\">Made out of 100% recycled content.</font> ','2014-12-09 08:47:17','2014-12-09 08:47:17','1'),(13,'Vellum Envelopes','<font color=\"#FFFF33\">Translucent Vellum Envelopes</font> are frosted envelopes that come in <font color=\"#FFFFFF\">clear and pastel colors</font>. ','2014-12-09 08:47:17','2014-12-09 08:47:17','1'),(14,'Bags: Adhesive Seal','<font color=\"#FFFF33\">Crystal Clear Plastic Bags</font> are known for having the <font color=\"#FFFFFF\">highest clarity</font> and for their <font color=\"#FFFFFF\">superior protection from finger prints</font> and the rigors of the retail environment. These bags have <font color=\"#FFFFFF\">closing flaps</font> and a <font color=\"#FFFFFF\">resealable adhesive strip</font>. ','2014-12-09 08:47:17','2014-12-09 08:47:17','2'),(15,'Bags: Open-ended','<font color=\"#FFFF33\">Crystal Clear No Flap Bags</font> are known for having the <font color=\"#FFFFFF\">highest clarity</font> and for their <font color=\"#FFFFFF\">superior protection from finger prints</font> and the rigors of the retail environment. These bags have a <font color=\"#FFFFFF\">\"no flap\" top opening</font> allowing for <font color=\"#FFFFFF\">cards to be easily removed</font>. ','2014-12-09 08:47:17','2014-12-09 08:47:17','2'),(16,'Bags: Hanging','<font color=\"#FFFF33\">Crystal Clear Hanging Bags</font> have a <font color=\"#FFFFFF\">hang strip</font>, allowing <font color=\"#FFFFFF\">greeting cards and stationery to hang on pegs</font>, and a flap and <font color=\"#FFFFFF\">resealable adhesive strip on the bottom of the bag</font>. ','2014-12-09 08:47:17','2014-12-09 08:47:17','2'),(17,'Bio-degradable Bags','<font color=\"#FFFF33\">Clear Biodegradable Bags</font> are a high clarity and <font color=\"#FFFFFF\">Earth-friendly</font> packaging solution that are <font color=\"#FFFFFF\">made from plants!</font> Lactic Acid (not acid-free) from corn is used to create the material Polyactide (PLA). <font color=\"#FFFFFF\">Certified biodegradable and compostable</font>. ','2014-12-09 08:47:17','2014-12-09 08:47:17','2'),(18,'Card Jackets','<font color=\"#FFFF33\">Greeting Card Jackets</font> work like a dust jacket for individual cards. The jacket allows you to <font color=\"#FFFFFF\">display the inside of your card while protecting them from handling</font>. The raw material includes 10% recycled poly. ','2014-12-09 08:47:17','2014-12-09 08:47:17','2'),(19,'Soft-folding Boxes','<font color=\"#FFFF33\">Crystal Clear Plastic Boxes</font> are an ideal choice for <font color=\"#FFFFFF\">packaging sets of greeting cards</font>. Store them flat and pop them open when you are ready. <font color=\"#FFFFFF\">Boxes come with <a href=\"/?cat|STIC\" class=\"FeatureLink\">Clear Round Stickers</a></font> for sealing them shut. Don\'t forget to <font color=\"#FFFFFF\">decorate with <a href=\"/?cat|LOOP\" class=\"FeatureLink\">Elastic Stretch Loops</a>!</font> ','2014-12-09 08:47:17','2014-12-09 08:47:17','2'),(20,'Hanging Boxes','<font color=\"#FFFF33\">Hanging Stationery Boxes</font> have a reinforced <font color=\"#FFFFFF\">hang strip on the top for easy retail display</font>. They are made from high quality high density PVC and are easily folded. Store flat and pop them up when you are ready to use them. ','2014-12-09 08:47:18','2014-12-09 08:47:18','2'),(21,'Vinyl Folders','<font color=\"#FFFF33\">Vinyl Card Holders</font> work like wallets to <font color=\"#FFFFFF\">protect sets of greeting cards</font>. Other Vinyl Holders include <font color=\"#FFFFFF\">checkbook covers</font>, <font color=\"#FFFFFF\">business card holders</font>, <font color=\"#FFFFFF\">hanging bookmark sleeves</font>, and <font color=\"#FFFFFF\">hanging magnet sleeves</font>. ','2014-12-09 08:47:18','2014-12-09 08:47:18','2'),(22,'Organza Ribbon','<font color=\"#FFFF33\">Organza Ribbon</font> comes in a wide variety of colors that will <font color=\"#FFFFFF\">add a touch of class</font> to your greeting cards and invitations. Use it to <font color=\"#FFFFFF\">bundle your cards</font> or as part of your <font color=\"#FFFFFF\">artistic card creations</font>. ','2014-12-09 08:47:18','2014-12-09 08:47:18','3'),(23,'Hang Tabs','<font color=\"#FFFF33\">Stick-on Hang Tabs</font> are used to <font color=\"#FFFFFF\">hang products that don\'t have hangers</font> and are small and light enough to be hung up. Hang Tabs are <font color=\"#FFFFFF\">clear</font> and have a <font color=\"#FFFFFF\">moderate-strength adhesive</font> on the lower half of them. ','2014-12-09 08:47:18','2014-12-09 08:47:18','3'),(24,'Stretch Loops','<font color=\"#FFFF33\">Elastic Stretch Loops</font> are elastic bands that are used to wrap and <font color=\"#FFFFFF\">decorate <a href=\"/?cat|PBOX\" class=\"FeatureLink\">Plastic Boxes</a></font> or <font color=\"#FFFFFF\">bundle envelopes and cards</font>. There are 2 varieties of stretch loops, which include a <font color=\"#FFFFFF\">round elastic</font> type in a variety of colors and a <font color=\"#FFFFFF\">semi-clear flat stretchy vinyl</font> type. ','2014-12-09 08:47:18','2014-12-09 08:47:18','3'),(25,'Stickers','<font color=\"#FFFF33\">Clear Round Stickers</font> are <font color=\"#FFFFFF\">already included when you buy <a href=\"/?cat|PBOX\" class=\"FeatureLink\">Plastic Boxes</a></font>, which are used to seal them. However, you may also purchase these stickers <font color=\"#FFFFFF\">in sheets of 20</font> as they are popular for other artistic purposes. ','2014-12-09 08:47:18','2014-12-09 08:47:18','3'),(26,'Shipping Boxes for Cards','','2014-12-09 08:47:18','2014-12-09 08:47:18','4'),(27,'Grab Bags','<font color=\"#FFFF33\">Plastic Grab Bags</font> (aka Merchandising Bags) are the <font color=\"#FFFFFF\">most economical solution</font> for a point-of-sale retail carry bag. They are especially <font color=\"#FFFFFF\">great for light-weight purchases such as stationery and greeting cards</font> as they are about the same thickness as a standard plastic grocery produce bag. ','2014-12-09 08:47:18','2014-12-09 08:47:18','4'),(28,'Plastic Gift Bags','<font color=\"#FFFF33\">Translucent Plastic Gift Bags</font> are a great way to package wedding gifts and birthday presents. Greeting cards like to be paired up with gifts... <font color=\"#FFFFFF\">Try selling gift bags along side your greeting cards!</font> ','2014-12-09 08:47:18','2014-12-09 08:47:18','4');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_images_products1_idx` (`product_id`),
  KEY `fk_images_categories1_idx` (`category_id`),
  CONSTRAINT `fk_images_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_images_categories1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qty` int(11) DEFAULT NULL,
  `order_price` float DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_items_Orders1_idx` (`order_id`),
  KEY `fk_items_products1_idx` (`product_id`),
  CONSTRAINT `fk_items_Orders1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_items_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lines`
--

DROP TABLE IF EXISTS `lines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lines` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lines`
--

LOCK TABLES `lines` WRITE;
/*!40000 ALTER TABLE `lines` DISABLE KEYS */;
INSERT INTO `lines` VALUES (1,'Cards & Envelopes'),(2,'Packaging Solutions'),(3,'Accessories'),(4,'Shipping & Retail');
/*!40000 ALTER TABLE `lines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL COMMENT '	',
  `upated_at` datetime DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `billing_address_id` int(11) NOT NULL,
  `shipping_address_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Orders_customers1_idx` (`customer_id`),
  KEY `fk_orders_addresses1_idx` (`billing_address_id`),
  KEY `fk_orders_addresses2_idx` (`shipping_address_id`),
  KEY `fk_orders_status1_idx` (`status_id`),
  CONSTRAINT `fk_orders_addresses1` FOREIGN KEY (`billing_address_id`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_addresses2` FOREIGN KEY (`shipping_address_id`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Orders_customers1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_status1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='addresses_id';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `label` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL COMMENT '	',
  `inchwidth` varchar(45) DEFAULT NULL,
  `inchheight` varchar(45) DEFAULT NULL COMMENT '		',
  `inchdepth` varchar(45) DEFAULT NULL,
  `metricwidth` varchar(45) DEFAULT NULL,
  `metricheight` varchar(45) DEFAULT NULL,
  `metricdepth` varchar(45) DEFAULT NULL,
  `density` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `material` varchar(45) DEFAULT NULL,
  `pieceweight` varchar(45) DEFAULT NULL,
  `unitqty` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_products_categories_idx` (`category_id`),
  CONSTRAINT `fk_products_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-09  9:07:01
