-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 06:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin123', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(100) NOT NULL,
  `slider1` varchar(500) NOT NULL,
  `slider2` varchar(500) NOT NULL,
  `slider3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `slider1`, `slider2`, `slider3`) VALUES
(1, 'slider3.jpg', 'slider1.jpg', 'slider1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(100) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `name` varchar(200) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `hid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `photo`, `name`, `content`, `hid`) VALUES
(1, 'hotel1.jpg', 'Leela Palace, India', ' Some journeys can be summed up in a photo, a tweet, a souvenir. But others are so filled with inner riches, they defy easy description. For our guests, this has always posed a challenge: How to best capture the world of luxury that is The Leela? For one visitor, itï¿½s a lobby ï¿½ and a welcome that makes her feel like royalty. For another, itï¿½s discovering a hidden garden, guided only by the scent of jasmine. To some, it is small touches that few others notice ï¿½ the warmth of a gesture, the extra care in the simplest dish. Finding the right words for this distinctly Indian brand of luxury is made all the more difficult because it is constantly being refined and enhanced by each person we invite to join our staff.\r\n\r\n \r\n\r\nFrom the start, we have been on a continuous journey to delight each traveller who crosses our threshold. It is The Leelaï¿½s goal to provide the most demanding guests with memorable, magical stays that deliver the essence of India and discover a 5-Star experience found only in India, and only at The Leela. In a span of 30 years, The Leela Palaces, Hotels and Resorts has grown to comprise a world-class collection of nine award-winning luxury hotels spread across key destinations in India with many more on the anvil.\r\n\r\n', 1),
(2, 'hotel2.jpg', 'Oberio Hotel, India', 'The Oberoi Rajvilas is unique amongst hotels in Jaipur; a royal resort set in a breathtaking thirty two acre oasis of beautiful landscaped gardens, filled with beautiful trees and exotic birdlife. Built around an 18th century Shiva temple where guests can experience chanting with a Hindu priest, meditation and morning yoga, The Oberoi Rajvilas, Jaipur is a haven of mystical peace and natural serenity.\r\n\r\nThroughout our luxury resort in Jaipur, traditional techniques have been used to replicate the famous pink lime plaster walls of the historic city. Also adorned with Mughal arches, gold leaf frescoes, high domed ceilings and magnificent crystal chandeliers, The Oberoi Rajvilas, Jaipur epitomises traditional Rajasthani charm and Oberoi five star luxury.\r\n\r\nGuests looking for a luxury dining restaurant in Jaipur can choose between our all day international fine dining space or seasonal Indian speciality restaurant. Both offer indoor seating, al fresco dining and live, traditional folk music to accompany the dining experience. Our comfortable library bar is a wonderful setting to enjoy an aperitif, a nightcap, a game of chess or an interactive history session.', 2),
(3, 'hotel3.jpg', 'Grand Hotel, Auckland', 'When the great Vijayanagar Empire famed for its wealth all over the world, fell to the combined onslaught of its enemies, it left a vacuum which was filled by local chieftains. These chieftains constantly warred with each other and were united by Veeraraja, a Lingayat man from outside the land. Veeraraja posed as a holy man to win the confidence of the chieftains. He finally went on to become the first king of Coorg. His family, the Haleri rajas, ruled for 221 years.\r\n\r\nFor decades, Coorg withstood the frequent invasions of Hyder Ali and his son Tipu Sultan. After many failed attempts, there was a brief period when Tipu Sultan attempted to enforce his rule by establishing four forts, and placing his troops in them. But these troops were soon besieged and had to negotiate a surrender.', 3),
(4, 'hotel1.jpg', 'Time Square Hotel', 'Sprawled across an acre on the Baga peninsula, the 47 rooms of the Acron Waterfront Resort, an ITC Fortune Hotel in Goa, provides the very best in modern amenities, all in a uniquely rustic setting that may well become your home away from home in Goa. We ensure that at the Acron Waterfront Resort by ITC Fortune, your every whim and fancy is our priority. Enjoy the sun set over the Arabian Sea, watch the fishermen bring in their catch from the river, or just relax by the pool – whichever your view, it’s an experience you will cherish forever.\r\n\r\nSPECIAL FACILITIES\r\nAt the Acron Waterfront Resort, we have rooms for differently abled guests, and ramp access to the restaurant and other common areas.\r\nEach room has been meticulously designed with hand-painted motifs to reflect an individual touch, and make it one-of-a-kind.\r\nConnecting rooms are available for large families or groups to ensure comfort and privacy.', 4),
(5, 'hotel2.jpg', 'Fort Kochi, Wellington', 'Fort Kochi. Queen of the Arabian Sea. Cradle of the ancient Spice Route. Sanctuary for seafarers and adventurers. Start your day by walking down the streets of history. Explore the eateries, taste their eclectic cuisine. Survey the emporiums and antique markets. Ponder the mechanism of the Chinese Fishing nets. Blend with the dynamics of the spice markets. Listen to the multilingual rhythms of a cosmopolitan conversation. Photograph colonial-era buildings. Let your soul go supine in historic churches, synagogues and grottos.\r\n\r\nFragrant Nature, Kochi—a boutique 5 star hotel—features contemporary styled rooms with magnificent views of the harbour. Located in the erstwhile office of East India Company, the majestic facade with a clock tower is a landmark. The hotel features period trompe-l\'œil art work by two popular English artists in the lobby—emphasising importance of art element in the boutique design. Loose yourself to the breathtaking luxury, underlined by world-class hospitality and service. Explore a range of cuisines at the famed specialty restaurant—a dining experience conjured with choicest flavours. Watch your stress and little niggles seep away with the luxuriant Ayurvedic massages at the state-of-the-art Spa—its leading highlight.\r\n\r\nIt’s more than superlatives. It’s more than what you see. It’s about you. Simply be you.', 5),
(8, 'hotel1.jpg', 'Haytt Regilance', 'Hampi. A mythical landscape, littered with huge granite boulders balanced precariously on top of each other bound by mythology and history. Bisected by the Tungabhadra and ancient irrigation canals that create a sliver of blue and green across the rugged terrain, this is a land imbued with the presence of gods, goddesses and heroes. Scattered among this is the ruins of a once magnificent city. Described as the ‘the best provided city in the world’ the ruins of Hampi is a destination in itself. One that the discerning traveler will relish exploring one leaf at a time.\r\n\r\nIn this Blog on Hampi we dive back into its history and mythology to bring to you fascinating tales and anecdotes from South India’s largest, wealthiest and most powerful kingdom. While excavating and shifting through the sands of time we invite you to share with us your experiences of this surreal realm.', 0),
(9, 'banner2.jpg', 'Kascate Resort, Mumbai', 'A Mumbai luxury hotel that reflects the modern character of a city soaring to new heights. Sofitel Mumbai BKC enjoys a strategic location in Bandra Kurla Complex - BKC. Stay in refined Sofitel style amidst the city\'s fast growing financial district.  Situated in Bandra Kurla Complex, Sofitel Mumbai BKC enjoys easy access to consulates, the Bharat Diamond Bourse, Bandra West, major tourist attractions, entertainment & shopping centres in north & south Mumbai, as well as the Mumbai Aiport. Discover a shining experience in Mumbai\'s soaring financial district. A city of diamonds and stars Mumbai is famed for its glamour and Bollywood glitz. Encounter a glimmering icon of the city\'s modern renaissance in neo-art nouveau Sofitel design.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(100) NOT NULL,
  `checkindate` varchar(200) NOT NULL,
  `checkoutdate` varchar(200) NOT NULL,
  `checkintime` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phno` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `adult` varchar(100) NOT NULL,
  `hotel` varchar(500) NOT NULL,
  `roomtype` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `checkindate`, `checkoutdate`, `checkintime`, `name`, `email`, `age`, `gender`, `phno`, `location`, `nationality`, `adult`, `hotel`, `roomtype`) VALUES
(4, '06/13/2023', '06/14/2023', '09:31', 'priyanci', 'priyancishihora@gmail.com', '35', 'M', '0223944532', 'ind', 'IND', '2', 'Leela Palace, India', 'Delux');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `rid` int(100) NOT NULL,
  `rphoto` varchar(500) NOT NULL,
  `r360` varchar(500) NOT NULL,
  `rname` varchar(200) NOT NULL,
  `rcontent` varchar(10000) NOT NULL,
  `hid` int(100) NOT NULL,
  `price` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`rid`, `rphoto`, `r360`, `rname`, `rcontent`, `hid`, `price`) VALUES
(1, 'room1.jpeg', ' <iframe height=\"350px\" width=\"100%\" allowfullscreen=\"true\"  src=\"https://momento360.com/e/u/f05253c9cb6c4803943c650fbc167525?utm_campaign=embed&utm_source=other&utm_medium=other\"> </iframe>', 'Delux', 'Intimate spaces, a contemporary style and the cuisine of warriors and poets, make this Northwest Frontier Province culinary experience magical. A piece of art and the inspiration behind the name, the metal elephant sculpture is the show stopper above pool', 1, '500'),
(2, 'slider3.jpg', ' <iframe height=\"350px\" width=\"100%\" allowfullscreen=\"true\"  src=\"https://momento360.com/e/u/289cdc64dd724edf8fea8488e202df4f?utm_campaign=embed&utm_source=other&utm_medium=other\"> </iframe>', 'SuperDelux', 'This expansive suite affords a comfortable living room with deep sofas, a bright master bedroom with a walk-in wardrobe and a spectacular Spanish marble bathroom. The guest bedroom, with twin beds, also has a walk-in wardrobe, and a bathroom equipped with a bathtub and a separate, frosted glass shower cubicle.', 2, '1000'),
(3, 'photo-services-2-1.jpg', ' <iframe height=\"350px\" width=\"100%\" allowfullscreen=\"true\"  src=\"https://momento360.com/e/u/59fbb7ecbcc34bc19a08e3f9754b990b?utm_campaign=embed&utm_source=other&utm_medium=other\"> </iframe>', 'Supreme', 'This suite is romantically furnished with a king size bed, an ottoman and a vanity table. The splendid Spanish marble bathroom is fitted with a bathtub, a separate shower and features a sandstone bust of the Buddha set in a marble alcove. Our Deluxe Suite is flawlessly luxurious. This expansive suite affords a comfortable living room with deep sofas, a bright master bedroom with a walk-in wardrobe and a spectacular Spanish marble bathroom. The guest bedroom, with twin beds, also has a walk-in wardrobe, and a bathroom equipped with a bathtub and a separate, frosted glass shower cubicle.', 3, '1500'),
(4, 'room3.jpeg', ' <iframe height=\"350px\" width=\"100%\" allowfullscreen=\"true\"  src=\"https://momento360.com/e/u/28c4588c37d54b8d87d09da3cf0ea431?utm_campaign=embed&utm_source=other&utm_medium=other\"> </iframe>', 'Suite', 'Our Premier Mountain View Rooms are heated in the winter and air conditioned in the summer. They are bright, comfortable spaces where guests can enjoy 24 hour in-room dining, a variable pressure shower or a warm bath in a full length tub surrounded by exquisite coffee and cream coloured Spanish marble. This expansive suite affords a comfortable living room with deep sofas, a bright master bedroom with a walk-in wardrobe and a spectacular Spanish marble bathroom. The guest bedroom, with twin beds, also has a walk-in wardrobe, and a bathroom equipped with a bathtub and a separate, frosted glass shower cubicle.', 4, '2000'),
(8, 'room2.jpeg', ' <iframe height=\"350px\" width=\"100%\" allowfullscreen=\"true\"  src=\"https://momento360.com/e/u/3d90f7b1a57848b19f39aa143a04f65a?utm_campaign=embed&utm_source=other&utm_medium=other\"> </iframe>', 'luxury Suite', 'Light, airy and designed for guests\' ultimate luxury, these rooms are furnished with a king size bed, topped with plump pillows and a snug duvet, while the beautiful Spanish marble bathroom, with huge sparkling mirrors, is equipped with a full length bathtub and a separate shower cubicle. This expansive suite affords a comfortable living room with deep sofas, a bright master bedroom with a walk-in wardrobe and a spectacular Spanish marble bathroom. The guest bedroom, with twin beds, also has a walk-in wardrobe, and a bathroom equipped with a bathtub and a separate, frosted glass shower cubicle.', 6, '2200'),
(9, 'room3.jpeg', ' <iframe height=\"350px\" width=\"100%\" allowfullscreen=\"true\"  src=\"https://momento360.com/e/u/be332953697546d4a58a326b741537b8?utm_campaign=embed&utm_source=other&utm_medium=other\"> </iframe>', 'President Suite', 'Guests can relax in a hot, deep bathtub filled with bubbles, or step inside the frosted glass shower cubicle and enjoy a soft, normal or powerful water massage. Wrapped up in one of our 100% cotton, towelled gowns, guests may sip on a glass of wine, stretch out in bed and watch a movie from our in house collection. This expansive suite affords a comfortable living room with deep sofas, a bright master bedroom with a walk-in wardrobe and a spectacular Spanish marble bathroom. The guest bedroom, with twin beds, also has a walk-in wardrobe, and a bathroom equipped with a bathtub and a separate, frosted glass shower cubicle.', 8, '2500'),
(10, 'photo-services-2-1.jpg', ' <iframe height=\"350px\" width=\"100%\" allowfullscreen=\"true\"  src=\"https://momento360.com/e/u/2ee8a0101a2742d6b383d364c95b7b37?utm_campaign=embed&utm_source=other&utm_medium=other\"> </iframe>', 'Normal', 'This expansive suite affords a comfortable living room with deep sofas, a bright master bedroom with a walk-in wardrobe and a spectacular Spanish marble bathroom. The guest bedroom, with twin beds, also has a walk-in wardrobe, and a bathroom equipped with a bathtub and a separate, frosted glass shower cubicle.', 1, '250');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `rid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
