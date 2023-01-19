-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 03:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mis_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `address`, `email`) VALUES
(2, 'odit', '(461)632-4913x3', '146 Frederik Plains Suite 650\nNathanaelshire, SD 39213', 'batz.ulises@example.net'),
(3, 'eius', '+86(3)613183378', '914 Vaughn Gateway Suite 782\nNorth Kaelynton, KS 99608', 'wthiel@example.net'),
(4, 'sint', '681-011-7628x28', '185 Grady Branch Apt. 011\nStoltenbergton, NJ 63958', 'retha43@example.com'),
(5, 'voluptas', '1-697-660-4794', '96055 Kreiger Radial\nLake Laceyview, HI 28467-8060', 'genoveva.gutkowski@example.net'),
(6, 'aut', '869-668-1479x71', '8364 Jerde Village\nWest Lauren, NE 22410', 'ywintheiser@example.org'),
(7, 'hic', '481-020-4976x60', '2535 Anna Mall Apt. 128\nBeahanview, WY 26123', 'wisoky.rodolfo@example.com'),
(8, 'vero', '(269)369-7445x3', '005 Rosenbaum Island Suite 713\nKerlukebury, WI 92142-6736', 'edison11@example.org'),
(9, 'aut', '337.570.9998x36', '5483 Minerva Garden\nEast Mustafa, LA 44804-8055', 'zbergnaum@example.com'),
(10, 'tempora', '531.915.9024', '656 Feeney Harbor Suite 515\nSouth Fletamouth, IN 29508', 'grenner@example.com'),
(11, 'commodi', '06498717968', '181 Gianni Station\nLake Mable, KS 93498', 'nwelch@example.com'),
(12, 'laboriosam', '857-474-3891', '7636 Reichert Throughway\nNorth Javonland, VT 05530-9233', 'nhowell@example.org'),
(13, 'laborum', '1-382-397-2256x', '709 Lora Keys Apt. 223\nEast Joseville, KY 87397-2016', 'zulauf.alyson@example.net'),
(14, 'velit', '532-208-4531', '3027 Bechtelar Lakes\nJohnstonchester, ID 85186', 'iromaguera@example.org'),
(15, 'odio', '134.848.9407x13', '40830 Bartell Burg\nNorth Arlene, SC 81121', 'dixie.renner@example.net'),
(16, 'vel', '(204)242-3716x2', '96583 Bianka Lodge\nMosciskiport, OK 33633', 'hudson.juliet@example.net'),
(17, 'illum', '1-111-954-9403x', '19087 Rempel Cove Apt. 897\nGisselleborough, OK 21685-9206', 'vada24@example.org'),
(18, 'quo', '+50(8)771451768', '489 Jacinthe Plains\nSouth Zackery, MD 87858', 'mcglynn.odell@example.org'),
(19, 'aut', '1-985-875-6766x', '7272 Betsy Divide\nHalvorsonberg, TN 53320-0923', 'bcollins@example.com'),
(20, 'accusamus', '+21(3)380131602', '491 Bertha Crossroad\nSouth Aishaport, GA 52061-8584', 'hand.immanuel@example.org'),
(21, 'ratione', '235-433-2325x66', '972 Mertz Mission\nHickleville, AR 21107-3537', 'nathanael03@example.com'),
(22, 'nihil', '134-170-8158x24', '416 Gillian Corners Apt. 938\nJonatanburgh, MD 81526', 'dpredovic@example.net'),
(23, 'suscipit', '1-102-207-2480', '863 Rey Walk\nWindlermouth, MT 58262', 'ernest.schimmel@example.net'),
(24, 'voluptatem', '1-363-315-5835x', '546 Alexis Cove\nEast Felipa, AL 23552-9725', 'rempel.joey@example.net'),
(25, 'aliquid', '(579)379-4851', '51807 Doyle Avenue Apt. 966\nEast Marcos, VT 34850-3251', 'markus.schamberger@example.com'),
(26, 'minus', '+37(3)533039705', '7665 Rippin Cove\nSouth Delphiamouth, AZ 55936', 'justus.larkin@example.org'),
(27, 'quisquam', '(639)708-6298x5', '739 Kutch Cove Suite 269\nSouth Clyde, VA 39395', 'valerie.deckow@example.org'),
(28, 'tempora', '1-143-105-2998', '34480 Katrine Turnpike\nO\'Konborough, CA 93506', 'helen21@example.net'),
(29, 'iste', '1-200-256-1411x', '0389 Walter Isle Apt. 245\nLake Gerda, NJ 36729-3316', 'swaniawski.jennyfer@example.com'),
(30, 'eum', '+81(0)688369143', '287 Maverick Estate Apt. 139\nCorkerystad, CT 95098-5339', 'jensen.kihn@example.net'),
(31, 'omnis', '1-058-077-4097x', '1679 Jed Key Suite 585\nLabadieview, NJ 00685-7543', 'douglas.noe@example.org'),
(32, 'molestias', '593-127-1053x97', '446 Carlie Mountain Apt. 612\nSouth Sophie, AK 37553', 'tressa61@example.org'),
(33, 'fugiat', '(078)055-9957', '4252 Ena Lodge Apt. 350\nNorth Princessmouth, WY 55020', 'evert.reynolds@example.net'),
(34, 'dolore', '+53(0)554718370', '82971 Leffler Ways\nNorth Evanport, DE 41285', 'jacobson.luis@example.net'),
(35, 'quia', '1-440-882-6118x', '71636 Berneice Track Apt. 437\nDonniemouth, NJ 88902-5415', 'madonna.swift@example.com'),
(36, 'facilis', '(472)306-5595x4', '7727 Gerlach Square\nWest Krystalton, VA 77529-8381', 'dmurray@example.net'),
(37, 'aut', '(947)804-1656', '7670 Stehr Ranch Suite 959\nEmmaburgh, TX 27928-9503', 'lroob@example.com'),
(38, 'et', '(289)991-8089', '308 Hodkiewicz Drive\nKingmouth, KS 52379', 'robel.paolo@example.com'),
(39, 'voluptates', '1-917-445-8644x', '18639 Hilpert Springs Apt. 693\nSavanahbury, IA 21069', 'burnice.gerlach@example.com'),
(40, 'sequi', '+38(9)695876417', '101 Doyle Forge\nNew Kelleyfort, SD 38578-9955', 'botsford.ethelyn@example.org'),
(41, 'maiores', '1-858-369-9725', '40026 Dooley Alley Apt. 332\nBergeberg, MI 10352', 'dhayes@example.net'),
(42, 'dignissimos', '070.194.3319x55', '9796 Braun Burg\nAngelinemouth, WV 54936-2155', 'walter.camylle@example.org'),
(43, 'facere', '1-525-312-0008x', '8521 Roscoe Rapids Suite 349\nFatimamouth, AL 87068-0114', 'braulio.feest@example.net'),
(44, 'eos', '765.476.4669x59', '9750 Batz Squares Apt. 604\nBednarton, OR 01403-4310', 'earl.kris@example.org'),
(45, 'earum', '(520)594-1692x9', '5488 Wilber Village Suite 736\nKertzmannport, AK 50419', 'astanton@example.net'),
(46, 'corporis', '782-771-8045x16', '05272 Hintz Roads\nEdytheland, TN 41140', 'una28@example.org'),
(47, 'molestiae', '043.233.9619x39', '0460 Lionel Causeway\nSouth Shakiraport, MN 78398', 'harmony.botsford@example.net'),
(48, 'illum', '(215)258-4377x7', '5621 Zieme Plains\nJamilport, WV 98507-5928', 'hosinski@example.com'),
(49, 'est', '159.518.2814x15', '9326 Stephon Plaza\nPort Borisborough, AZ 61963', 'yoshiko32@example.org'),
(50, 'in', '1-022-591-1457x', '7377 Orland Roads\nNew Lorenzomouth, TN 30389', 'dickinson.shanelle@example.com'),
(51, 'molestiae', '1-804-515-7350x', '71291 Jennie Station\nDanielshire, CA 00524', 'anya92@example.net'),
(52, 'quam', '(725)704-1668', '0140 Martina Shores Suite 534\nLindseyville, PA 89997', 'ospencer@example.com'),
(53, 'consequatur', '647.065.8334x81', '7731 Jody Square Apt. 287\nWest Garret, DC 07514-3423', 'lyla13@example.org'),
(54, 'occaecati', '(745)727-5169', '581 Stracke Hill\nFrankton, IA 83439', 'elarkin@example.com'),
(55, 'voluptatum', '1-631-956-4456x', '502 Osinski Heights\nSharonshire, CO 00182', 'xander28@example.com'),
(56, 'dolores', '390-553-5782x77', '18584 Emmerich Mount Apt. 494\nVolkmanport, PA 73881-7560', 'ludwig.wiza@example.org'),
(57, 'nulla', '433-968-8405', '7205 Daron Trail Suite 997\nEast Johnson, NM 96631', 'bruce76@example.com'),
(58, 'qui', '(493)778-8718x3', '817 Koepp Fall\nBauchport, CT 18365', 'ohaag@example.org'),
(59, 'laboriosam', '671-805-3268x40', '7440 Teresa Cliffs\nPort Celestineberg, WY 73858-7445', 'freddy04@example.org'),
(60, 'velit', '+33(0)071387630', '319 Will Creek Apt. 444\nStoltenbergberg, IN 96018-5543', 'carlie.jones@example.com'),
(61, 'odit', '08492745668', '0473 Nader Fall Suite 636\nLake Dayne, AR 74279', 'kyler98@example.com'),
(62, 'qui', '06345362390', '176 Hettinger Lane Apt. 609\nBreitenbergton, NH 18278-6102', 'freinger@example.com'),
(63, 'et', '951.778.1203x32', '9469 Bechtelar Run\nLeschfurt, KY 15537', 'marcia.baumbach@example.org'),
(64, 'pariatur', '(406)809-3501', '60955 Will Squares\nPort Jakob, GA 36384', 'xd\'amore@example.com'),
(65, 'nihil', '1-326-554-5539x', '75372 O\'Kon Road\nKonopelskiburgh, MT 16322-5143', 'idavis@example.org'),
(66, 'et', '1-998-521-1373x', '87008 Olson View Suite 542\nSouth Adamport, HI 89269-4553', 'leuschke.otilia@example.net'),
(67, 'ipsa', '+60(6)284650864', '9528 Watsica Mission Apt. 827\nNorth Devonte, WI 86069-4454', 'cassandra12@example.org'),
(68, 'commodi', '129-751-5563x37', '6004 Brakus Squares Apt. 583\nEast Maiyaside, WI 42930', 'legros.rory@example.net'),
(69, 'impedit', '034.003.6098', '37634 Rhiannon Cape\nRodolfoberg, NH 29211', 'sbreitenberg@example.net'),
(70, 'sed', '724.248.0009x95', '8375 Thompson Lakes Suite 259\nNorth Aliviaborough, AL 51406-2765', 'mraz.kole@example.net'),
(71, 'et', '1-573-449-5004x', '162 Sipes Loaf Apt. 581\nZoeburgh, ND 67411', 'anastacio38@example.com'),
(72, 'ea', '09779045798', '33697 Douglas Ramp\nLednerfort, MA 89999-8476', 'little.beulah@example.com'),
(73, 'facere', '(009)574-8271x4', '7000 Florian Green Apt. 516\nWest Broderickview, AL 67006', 'luciano15@example.com'),
(74, 'sint', '1-081-798-5957x', '440 Hessel Forge\nSouth Filiberto, MS 93546', 'mraz.tamia@example.org'),
(75, 'laborum', '(447)769-0439x8', '551 Trace Islands\nNorth Nigel, LA 21291', 'murray.webster@example.com'),
(76, 'commodi', '803-790-4637x49', '925 Purdy Mews Apt. 764\nStrosinville, NM 87543', 'rowan.walker@example.net'),
(77, 'eos', '(227)172-1720', '492 Tavares Centers\nGiovannahaven, NC 33472', 'gschimmel@example.com'),
(78, 'dolorum', '(116)680-4495', '223 Precious Field\nSouth Vincentshire, GA 00004-8074', 'fatima.wiza@example.org'),
(79, 'quidem', '1-827-986-0060', '284 Reynolds Neck\nSouth Rebecashire, TX 08302', 'devyn96@example.com'),
(80, 'et', '(106)865-5911x5', '37622 Ethyl Run Suite 495\nWest Jasonstad, HI 39678', 'mauricio.wintheiser@example.org'),
(81, 'reiciendis', '07809324046', '3850 Damaris Manors\nSouth Maye, OR 99386-1653', 'block.hobart@example.org'),
(82, 'fuga', '1-844-148-6799', '96192 Abby Estates Apt. 921\nNew Garretfurt, NJ 36007-8462', 'udaniel@example.net'),
(83, 'est', '465-379-4000', '0695 Diamond Canyon\nMcLaughlinburgh, AK 99346', 'claude.wiza@example.org'),
(84, 'quaerat', '470.820.0650x73', '672 Elenor Stravenue Suite 207\nLake Ernestine, AR 25238', 'gottlieb.fanny@example.net'),
(85, 'voluptates', '(411)799-7685', '4830 Libbie Island Suite 983\nGoyettehaven, CA 32293', 'hilario.conroy@example.org'),
(86, 'labore', '265-163-8997x35', '0272 Bertrand Fields\nIsabellmouth, MD 99241-5707', 'myah61@example.com'),
(87, 'labore', '298-672-7019x09', '7403 Sheila Squares\nCartermouth, DC 77427-8127', 'neffertz@example.com'),
(88, 'et', '+86(3)701441619', '4958 Bednar Wall Suite 892\nNew Harold, OR 33337-8009', 'terrill94@example.org'),
(89, 'occaecati', '1-918-938-9931', '477 Cordia Fords Suite 868\nNew Abdielfurt, NV 70602', 'jarred.metz@example.com'),
(90, 'enim', '764.364.1289', '9713 Zola Hills\nLake Lavernaside, KY 28895-1220', 'neva.little@example.net'),
(91, 'quisquam', '+84(9)511900515', '1347 Huel Fields Apt. 025\nSonnyshire, TN 00842', 'alycia41@example.net'),
(92, 'animi', '136-175-7835x29', '99115 Ankunding Viaduct\nDibbertborough, DC 21568-5895', 'wilderman.dolly@example.com'),
(93, 'suscipit', '294-509-9369', '122 Freda Loaf\nSouth Katrine, ID 74316', 'heidenreich.shany@example.net'),
(94, 'doloremque', '155.624.4286', '794 Felton Motorway\nCrooksside, WA 01480', 'gabriel.kshlerin@example.org'),
(95, 'non', '00898049175', '20098 Kiarra Shores Suite 559\nNew Taylor, LA 31597', 'krajcik.alysa@example.org'),
(96, 'dolorum', '1-231-079-8604x', '7342 Eino Mountain Apt. 804\nLake Rhoda, NE 77925', 'dibbert.zachariah@example.com'),
(97, 'porro', '317-249-8756x81', '807 Shaun Prairie Suite 054\nSkyeland, RI 03569-0866', 'itorphy@example.net'),
(98, 'eaque', '1-380-361-7556x', '709 Caitlyn Knoll\nEast Dominicberg, TN 73840-8510', 'kihn.dorris@example.net'),
(99, 'a', '083.428.5947x19', '169 Vada Corners Apt. 804\nNew Camden, FL 57739', 'ahodkiewicz@example.net'),
(100, 'maxime', '(430)376-6322x7', '13726 Smitham Dale Suite 312\nHilllshire, WI 31786', 'roberts.peggie@example.com'),
(101, 'ea', '03555998414', '3309 Hermann Ranch Apt. 440\nErikachester, ID 00518-9108', 'hvandervort@example.org');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `monthly_target` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `status`, `name`, `email`, `password`, `image`, `phone`, `country`, `city`, `address`, `monthly_target`, `created_at`) VALUES
(1, 0, 'suscipit', 'emp@example.net', '12345678', 'tmp//42dd953caf9ad0689b2f8e7d18a8ee23.jpg', '361.163.6124x78', '990', 'West Hassie', '1977 Roberts Road\nWest Imeldaland, WI 09630', 7, '2020-04-01 18:07:37'),
(2, 0, 'odio', 'schuppe.maryjane@example.net', '0e58ddef', 'tmp//1b45b3edad59b63eefe98f5a0d107166.jpg', '1-779-366-7517', '706476', 'Port Alvah', '0614 Declan Islands Suite 226\nNorth Werner, DE 22221', 3, '2020-11-22 08:10:13'),
(3, 0, 'adipisci', 'verner.stroman@example.org', '0e58df65', 'tmp//1f13fbacbd760b48f85662a63de2316d.jpg', '08431916260', '5003', 'West Damien', '30919 Jakubowski Ports\nNorth Eleazar, DC 04340', 6, '2020-12-04 01:30:11'),
(4, 0, 'et', 'mills.trudie@example.net', '0e58dff9', 'tmp//d32429e44066cccbdd66bc84c69dc322.jpg', '+99(6)348270777', '', 'Whitefurt', '37654 Schuppe Ville\nNew Jordiland, TX 52857-9486', 4, '2020-09-28 08:31:10'),
(5, 0, 'ab', 'littel.madge@example.com', '0e58e084', 'tmp//74ff32fd52ffef4b2324646a166a1a03.jpg', '03321072087', '32', 'North Harveyview', '19073 Emard Hills\nDorthaborough, AK 01340', 2, '2020-05-28 01:44:53'),
(6, 0, 'quos', 'haley.guido@example.com', '0e58e104', 'tmp//1f300fa76f521d1f3956daff72ce34c9.jpg', '1-487-348-6186', '25279768', 'Newellchester', '23786 Schoen Springs\nHarrisonberg, ME 29940-4116', 1, '2020-01-23 15:43:23'),
(7, 0, 'odit', 'mryan@example.net', '0e58e186', 'tmp//ac5b315fe818ec07f141792633536b9c.jpg', '765-364-3203x29', '16', 'East Domenickside', '282 Murphy Ville\nEast Rahsaan, ID 96166-9084', 9, '2020-06-22 15:11:37'),
(8, 0, 'porro', 'champlin.dina@example.com', '0e58e1ff', 'tmp//088e6e1d5b69de9a3f32529370775805.jpg', '03022989419', '35085899', 'South Damienfurt', '5358 Keebler Club Apt. 290\nEast Imogene, WV 21821', 1, '2020-10-21 06:52:52'),
(9, 0, 'sed', 'barrows.glenna@example.com', '0e58e27c', 'tmp//c214826d0558c6fa5d3dbfe2b815088d.jpg', '1-598-867-2320x', '134997', 'Frankberg', '50561 Renner Trafficway Suite 053\nHoseaton, KY 69156', 3, '2020-02-22 06:12:52'),
(10, 0, 'repudiandae', 'marianne42@example.com', '0e58e323', 'tmp//421e02f9b0648c6ba1d08357be7ba593.jpg', '(102)701-7268', '341518', 'West Hebershire', '29199 Gaylord Flat Apt. 665\nLake Jaydonfurt, ID 20635-4976', 0, '2020-07-11 17:32:31'),
(11, 1, 'Yahya', 'yahya.admin1@gmail.com', '123', '', '0336 *******', 'Pakistan', 'Karachi', 'XYZ', 0, '2021-01-17 17:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `sales_order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `extended_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `sales_order_id`, `product_id`, `quantity`, `extended_price`) VALUES
(20, 10, 1, 9, 84),
(21, 11, 2, 4, 19280),
(22, 12, 3, 9, 6599),
(23, 13, 4, 1, 16659),
(24, 14, 5, 8, 2),
(25, 15, 6, 2, 4),
(26, 16, 7, 9, 634),
(27, 17, 8, 6, 389887554),
(28, 18, 9, 4, 168625),
(29, 19, 10, 3, 907),
(30, 20, 11, 9, 2),
(31, 21, 12, 1, 273803),
(32, 22, 13, 3, 615252),
(33, 23, 14, 1, 557980),
(34, 24, 15, 8, 0),
(35, 25, 16, 8, 2064),
(36, 26, 17, 4, 367890),
(37, 27, 18, 2, 1),
(38, 28, 19, 2, 1326750),
(39, 29, 20, 1, 211373614),
(40, 10, 21, 2, 662950421),
(41, 11, 22, 6, 1),
(42, 12, 23, 2, 50704071),
(43, 13, 24, 7, 243961290),
(44, 14, 25, 9, 42537),
(45, 15, 1, 4, 1380770),
(46, 16, 2, 5, 6169583),
(47, 17, 3, 9, 107126288),
(48, 18, 4, 8, 17601),
(49, 19, 5, 2, 5),
(50, 20, 6, 1, 0),
(51, 21, 7, 9, 33154190),
(52, 22, 8, 3, 1505888),
(53, 23, 9, 3, 3),
(54, 24, 10, 2, 902998),
(55, 25, 11, 9, 10642964),
(56, 26, 12, 6, 3),
(57, 27, 13, 6, 250285),
(58, 28, 14, 2, 0),
(59, 29, 15, 4, 1649),
(60, 10, 16, 1, 10),
(61, 11, 17, 3, 277385),
(62, 12, 18, 9, 8654),
(63, 13, 19, 8, 66),
(64, 14, 20, 9, 66),
(65, 15, 21, 1, 43967),
(66, 16, 22, 7, 382309588),
(67, 17, 23, 7, 41335654),
(68, 18, 24, 1, 244654),
(69, 19, 25, 5, 2402),
(70, 20, 1, 2, 4620736),
(71, 21, 2, 9, 875),
(72, 22, 3, 2, 6),
(73, 23, 4, 8, 1),
(74, 24, 5, 9, 11044176),
(75, 25, 6, 4, 2806),
(76, 26, 7, 8, 76573514),
(77, 27, 8, 6, 32789),
(78, 28, 9, 2, 4719656),
(79, 29, 10, 3, 7890),
(80, 10, 11, 7, 0),
(81, 11, 12, 4, 17706644),
(82, 12, 13, 4, 606),
(83, 13, 14, 2, 15825),
(84, 14, 15, 1, 832),
(85, 15, 16, 4, 15),
(86, 16, 17, 1, 496968),
(87, 17, 18, 4, 38053),
(88, 18, 19, 3, 218535),
(89, 19, 20, 2, 523617),
(90, 20, 21, 6, 13497159),
(91, 21, 22, 1, 766),
(92, 22, 23, 4, 8509),
(93, 23, 24, 1, 56),
(94, 24, 25, 3, 1364),
(95, 25, 1, 5, 0),
(96, 26, 2, 7, 7),
(97, 27, 3, 8, 356),
(98, 28, 4, 3, 3343927),
(99, 29, 5, 1, 119939),
(100, 10, 6, 7, 0),
(101, 11, 7, 2, 2053),
(102, 12, 8, 1, 1),
(103, 13, 9, 5, 0),
(104, 14, 10, 7, 45271),
(105, 15, 11, 4, 0),
(106, 16, 12, 1, 218),
(107, 17, 13, 7, 11773),
(108, 18, 14, 8, 15970),
(109, 19, 15, 5, 392),
(110, 20, 16, 3, 3371),
(111, 21, 17, 4, 2090445),
(112, 22, 18, 5, 64),
(113, 23, 19, 7, 117),
(114, 24, 20, 5, 68),
(115, 25, 21, 8, 52),
(116, 26, 22, 2, 78880733),
(117, 27, 23, 6, 0),
(118, 28, 24, 9, 208979),
(119, 29, 25, 9, 13139605),
(120, 10, 1, 2, 359205634),
(121, 11, 2, 9, 63),
(122, 12, 3, 8, 495),
(123, 13, 4, 7, 53529920),
(124, 14, 5, 5, 46),
(125, 15, 6, 3, 3),
(126, 16, 7, 8, 19),
(127, 17, 8, 3, 763),
(128, 18, 9, 4, 0),
(129, 19, 10, 2, 46894276),
(130, 20, 11, 8, 1604),
(131, 21, 12, 7, 1919),
(132, 22, 13, 2, 83),
(133, 23, 14, 9, 0),
(134, 24, 15, 9, 24137),
(135, 25, 16, 2, 4),
(136, 26, 17, 1, 115668207),
(137, 27, 18, 5, 377),
(138, 28, 19, 2, 343),
(139, 29, 20, 1, 1046),
(140, 10, 21, 2, 3025976),
(141, 11, 22, 9, 7),
(142, 12, 23, 8, 311198),
(143, 13, 24, 4, 3815),
(144, 14, 25, 3, 10997009),
(145, 15, 1, 7, 12626),
(146, 16, 2, 9, 1),
(147, 17, 3, 5, 36405142),
(148, 18, 4, 9, 869),
(149, 19, 5, 2, 21913845),
(150, 20, 6, 7, 3038),
(151, 21, 7, 7, 17239),
(152, 22, 8, 7, 1),
(153, 23, 9, 2, 75),
(154, 24, 10, 5, 0),
(155, 25, 11, 4, 5590),
(156, 26, 12, 5, 14260452),
(157, 27, 13, 4, 0),
(158, 28, 14, 8, 151591),
(159, 29, 15, 8, 565163625),
(160, 10, 16, 3, 2062),
(161, 11, 17, 1, 0),
(162, 12, 18, 2, 8271979),
(163, 13, 19, 7, 0),
(164, 14, 20, 1, 11322981),
(165, 15, 21, 4, 0),
(166, 16, 22, 7, 52552448),
(167, 17, 23, 7, 339647),
(168, 18, 24, 2, 12417),
(169, 19, 25, 7, 27242458);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `cost`, `price`, `quantity`, `description`, `status`, `created_at`) VALUES
(1, 'iusto', '69.14', '81.32', 89, 'Labore sed nihil molestiae adipisci culpa. Sed voluptatem magnam est optio. Est aut temporibus id iste illum. Mollitia quia quia et ut ullam aut asperiores. Molestiae non aut rerum sed quod sit.', 0, '2020-02-18 19:00:00'),
(2, 'neque', '75.97', '89.76', 74, 'Quam porro omnis tenetur tempora hic et. Est sint deleniti tenetur. Magnam fugit earum ab velit. Quo praesentium itaque eos occaecati rem eius aut rem.', 0, '2020-03-20 19:00:00'),
(3, 'sed', '42.46', '50.06', 55, 'Sequi illo aut exercitationem blanditiis ex officia. Dolores quibusdam eveniet qui non deserunt aut inventore modi. Est sit et sed. Quos asperiores dolorem reprehenderit omnis quam quam.', 0, '2020-09-10 19:00:00'),
(4, 'autem', '54.37', '62.55', 51, 'Eius quia voluptate vitae delectus eveniet ipsa suscipit. Suscipit dolorem sed ut eligendi quis et. Sint possimus velit minus. Incidunt quo dicta temporibus sint eaque voluptatem eos aut.', 0, '2022-10-27 19:00:00'),
(5, 'veniam', '64.50', '71.93', 93, 'Ex ducimus delectus voluptatem quasi corporis. Deserunt atque asperiores sunt et. Odit iste corrupti recusandae enim eius.', 0, '2020-01-10 19:00:00'),
(6, 'praesentium', '79.35', '89.25', 59, 'Voluptatem ipsam suscipit et fuga et est id. Libero vitae sed amet numquam rerum. Laudantium voluptatum id ut ea consequuntur possimus. Omnis aperiam culpa velit nam.', 0, '2020-08-30 19:00:00'),
(7, 'quibusdam', '73.28', '86.34', 68, 'Officia explicabo provident dolorem adipisci magnam. Rerum corrupti est dolores autem. Earum quisquam amet laboriosam et illum ea aliquid doloribus.', 0, '2020-03-31 19:00:00'),
(8, 'occaecati', '48.33', '53.97', 61, 'Quibusdam deserunt eos distinctio est. Molestias et corporis dolor vel voluptas. Vel velit illo nobis provident aut repellat. Ea est totam molestias dolore laudantium eligendi sequi.', 0, '2022-04-02 19:00:00'),
(9, 'rerum', '41.83', '48.05', 52, 'Corporis voluptas nisi dolores necessitatibus omnis temporibus eligendi. Dolore magni harum dignissimos dolorum nobis. Dicta omnis qui vel optio nisi cum quia.', 0, '2021-07-08 19:00:00'),
(10, 'sit', '34.14', '40.76', 77, 'Aut qui ut non voluptas sed. Culpa quos velit exercitationem atque et et. Nostrum iste id id fugit sed magnam omnis. Molestiae rerum animi sequi sed eum vel.', 0, '2020-10-31 19:00:00'),
(11, 'occaecati', '65.20', '73.20', 81, 'Consequatur nam suscipit perspiciatis et. Ut in illo necessitatibus expedita itaque dolores sequi. Qui consequuntur dolor et similique vel sed aspernatur. Architecto et molestiae corporis aut debitis doloribus.', 0, '2022-08-13 19:00:00'),
(12, 'magni', '43.60', '49.36', 73, 'Ut aliquid velit eos ab reiciendis. Voluptas suscipit quam iusto illo eos quam doloremque. Tenetur ipsum magni sapiente.', 0, '2021-07-30 19:00:00'),
(13, 'velit', '42.41', '50.59', 72, 'Omnis architecto ipsum nemo et harum rem in. Repellendus eius quidem et. Fuga reprehenderit quis expedita a.', 0, '2020-01-17 19:00:00'),
(14, 'magnam', '51.23', '59.84', 91, 'Totam quod aut similique cupiditate dolor fugiat. Maxime culpa vitae quidem. Et iste est veniam voluptas.', 0, '2021-06-29 19:00:00'),
(15, 'ducimus', '48.94', '56.84', 89, 'Aut repellendus minus dicta id nulla pariatur qui. Ut error sunt sint distinctio in corrupti. Nemo ea nihil aperiam repudiandae. Sint ut architecto voluptatem esse.', 0, '2021-05-01 19:00:00'),
(16, 'totam', '61.01', '67.27', 71, 'Hic optio omnis quidem autem et aliquid deleniti. Accusantium et assumenda fugiat dolorum vero aperiam. In facilis provident aut dolore. Fugiat pariatur id et eum repudiandae. Similique omnis maxime nobis debitis qui dolorum.', 0, '2022-03-08 19:00:00'),
(17, 'eaque', '78.24', '88.33', 89, 'Nihil doloremque veniam enim quia eius. Velit sequi ab nihil aut. Ut rerum eos tenetur doloribus quae.', 0, '2020-12-02 19:00:00'),
(18, 'fugiat', '78.17', '88.90', 80, 'Voluptatum eaque quas recusandae eius quaerat aut. Id tempore illum assumenda ipsa voluptas. Quia repudiandae sed voluptatibus repellat dolorum doloremque. Optio eligendi omnis consequuntur esse ea voluptatem reiciendis ab.', 0, '2021-01-23 19:00:00'),
(19, 'est', '76.11', '91.26', 85, 'A eum ut et debitis esse magni. Qui voluptate maxime odio commodi nihil rerum qui. Sint voluptas libero quam illo. Voluptatem in non voluptas tenetur commodi earum.', 0, '2022-07-24 19:00:00'),
(20, 'eligendi', '66.03', '78.15', 86, 'Quod amet in ut nihil. Aspernatur sequi molestiae aut vel maxime harum dolor. Excepturi voluptas enim ut sint. Sed unde atque pariatur molestias.', 0, '2020-08-11 19:00:00'),
(21, 'similique', '71.85', '80.54', 72, 'Voluptatibus et at consequatur velit iusto. Est eius molestiae unde est voluptatem dolorum dolorem. Quaerat repudiandae vitae consequatur voluptas neque ut ab odit.', 0, '2021-05-18 19:00:00'),
(22, 'mollitia', '31.17', '35.96', 54, 'Iure eius ullam nulla est. Dolorem aspernatur harum sapiente mollitia ullam. Molestias voluptatem impedit quisquam ut sunt et voluptatibus.', 0, '2022-01-20 19:00:00'),
(23, 'facere', '60.26', '66.65', 52, 'Quidem quos non cum repellat ut maxime. Aperiam soluta quam aperiam. Omnis est illo adipisci molestias. Tempora cum officiis nostrum et.', 0, '2020-02-24 19:00:00'),
(24, 'sed', '77.82', '90.99', 50, 'Blanditiis illo labore enim aut. In nobis minus labore similique velit doloribus consequatur veritatis. Sed hic cupiditate facilis ducimus neque ut quia. Voluptas consequatur non ex qui.', 0, '2020-07-30 19:00:00'),
(25, 'facilis', '78.32', '88.33', 94, 'Est aut est culpa impedit. Est eaque voluptas incidunt. Aliquam quaerat ut eveniet sed. Quis voluptas nam veniam quia et doloremque et. Dolore reprehenderit sed provident numquam vel quaerat.', 0, '2022-06-16 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `customer_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`id`, `employee_id`, `store_id`, `order_date`, `customer_id`, `created_at`) VALUES
(10, 6, 5, '2022-03-03 09:37:27', 2, '2022-03-05 09:37:27'),
(11, 7, 6, '2021-07-17 16:00:31', 3, '2021-07-19 16:00:31'),
(12, 8, 7, '2022-01-04 07:52:06', 4, '2022-01-06 07:52:06'),
(13, 9, 8, '2021-10-08 15:15:16', 5, '2021-10-10 15:15:16'),
(14, 10, 5, '2022-01-27 20:29:14', 6, '2022-01-29 20:29:14'),
(15, 10, 6, '2021-07-24 17:14:49', 7, '2021-07-26 17:14:49'),
(16, 10, 7, '2022-06-15 14:35:50', 8, '2022-06-17 14:35:50'),
(17, 9, 8, '2021-10-20 00:31:03', 9, '2021-10-22 00:31:03'),
(18, 6, 5, '2022-02-13 10:04:27', 10, '2022-02-15 10:04:27'),
(19, 5, 6, '2021-11-10 12:16:03', 11, '2021-11-12 12:16:03'),
(20, 6, 7, '2022-06-19 17:08:44', 12, '2022-06-21 17:08:44'),
(21, 7, 8, '2021-12-21 16:17:38', 13, '2021-12-23 16:17:38'),
(22, 8, 5, '2022-07-05 05:23:17', 14, '2022-07-07 05:23:17'),
(23, 9, 6, '2021-09-05 04:57:47', 15, '2021-09-07 04:57:47'),
(24, 10, 7, '2022-07-04 11:30:18', 16, '2022-07-06 11:30:18'),
(25, 8, 8, '2021-07-09 13:32:01', 17, '2021-07-11 13:32:01'),
(26, 2, 5, '2022-02-28 05:50:03', 18, '2022-03-02 05:50:03'),
(27, 1, 6, '2021-04-27 09:22:55', 19, '2021-04-29 09:22:55'),
(28, 4, 7, '2022-11-25 10:04:50', 20, '2022-11-27 10:04:50'),
(29, 1, 8, '2021-01-24 11:52:49', 21, '2021-01-26 11:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `product_id`, `quantity`, `store_id`) VALUES
(8, 1, 8, 5),
(9, 2, 6, 6),
(10, 3, 9, 7),
(11, 4, 4, 8),
(12, 5, 8, 5),
(13, 6, 3, 6),
(14, 7, 6, 7),
(15, 8, 3, 8),
(16, 9, 9, 5),
(17, 10, 9, 6),
(18, 11, 6, 7),
(19, 12, 1, 8),
(20, 13, 9, 5),
(21, 14, 5, 6),
(22, 15, 8, 7),
(23, 16, 2, 8),
(24, 17, 1, 5),
(25, 18, 9, 6),
(26, 19, 7, 7),
(27, 20, 9, 8),
(28, 21, 9, 5),
(29, 22, 8, 6),
(30, 23, 1, 7),
(31, 24, 1, 8),
(32, 25, 4, 5),
(33, 1, 9, 6),
(34, 2, 3, 7),
(35, 3, 9, 8),
(36, 4, 4, 5),
(37, 5, 9, 6),
(38, 6, 5, 7),
(39, 7, 8, 8),
(40, 8, 2, 5),
(41, 9, 8, 6),
(42, 10, 4, 7),
(43, 11, 1, 8),
(44, 12, 3, 5),
(45, 13, 4, 6),
(46, 14, 9, 7),
(47, 15, 9, 8),
(48, 16, 9, 5),
(49, 17, 7, 6),
(50, 18, 2, 7),
(51, 19, 9, 8),
(52, 20, 2, 5),
(53, 21, 3, 6),
(54, 22, 1, 7),
(55, 23, 2, 8),
(56, 24, 3, 5),
(57, 25, 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `name`, `phone`, `email`, `address`, `city`, `zip_code`) VALUES
(5, 'laboriosam', '276-527-5133', 'madalyn41@yahoo.com', '18868 Josefina Ferry Apt. 680\nRutherfordshire, HI 13669', 'Port Rexbury', 206),
(6, 'maiores', '09091101570', 'aletha.beier@hotmail.com', '9350 Alanna View\nNorth Heather, CA 99867', 'Kayaside', 752),
(7, 'reiciendis', '873-522-9987x91', 'selena70@hotmail.com', '216 Morissette Fork\nMyrticestad, IN 52201-4857', 'Breitenbergberg', 593),
(8, 'eveniet', '(277)704-4810', 'stephany.boehm@gmail.com', '0733 Percival Meadows Suite 142\nClydeview, HI 07383', 'Howellborough', 476);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_order_fk` (`sales_order_id`),
  ADD KEY `order_products_fk` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_employee_fk` (`employee_id`),
  ADD KEY `sales_store_fk` (`store_id`),
  ADD KEY `sales_customer_fk` (`customer_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stock_product_fk` (`product_id`),
  ADD KEY `stock_store_fk` (`store_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_products_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `sales_order_fk` FOREIGN KEY (`sales_order_id`) REFERENCES `sales_order` (`id`);

--
-- Constraints for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD CONSTRAINT `sales_customer_fk` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `sales_employee_fk` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `sales_store_fk` FOREIGN KEY (`store_id`) REFERENCES `store` (`id`);

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stock_product_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `stock_store_fk` FOREIGN KEY (`store_id`) REFERENCES `store` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
