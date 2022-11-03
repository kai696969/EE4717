-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 08:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kk`
--

-- --------------------------------------------------------

--
-- Table structure for table `bestsellers`
--

CREATE TABLE `bestsellers` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bestsellers`
--

INSERT INTO `bestsellers` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'Apple Keyboard', 100, 'images/keyboard1.jpg', 'Magic Keyboard with Touch ID for Mac models with Apple\r\n<br><br>\r\nNow available with Touch ID, providing fast, easy and secure authentication for logins and purchases.\r\n<br>\r\nRemarkably comfortable and precise typing experience.'),
(2, 'Oppo V3', 599, 'images/Oppo3.jpg', 'Oppo Pearl Blue\r\n<br><br>\r\n- 6.52\" Inch (16.55cm) HD+ Water Drop Display | Screen to body ratio 88.7%. Side mounted Fingerprint<br>\r\n- MediaTek Helio G35 GPU IMG GE8320 @ 680 MHz | Powerful 2.3 GHz Octa-core processor, support LPDDR4X memory<br>\r\n- 5000 mAh lithium polymer battery<br>\r\n- 13MP Triple Camera ( 13MP Main + 2MP Mono + 2MP macro Lens) | 8MP Front Camera.<br>\r\n- Memory, Storage & SIM: 4GB RAM | 64GB | Dual SIM (nano+nano) dual-standby (4G+4G).| Color OS 7.2 based on Android 11.0'),
(3, 'IPHONE 14 Pro', 1599, 'images/Apple1.jpg', 'Apple iPhone 14 Pro\r\n<br><br>\r\n- 6.1-inch Super Retina XDR display featuring Always-On and ProMotion<br>\r\n- Dynamic Island, a magical new way to interact with iPhone<br>\r\n- 48MP Main camera for up to 4x greater resolution<br>\r\n- Cinematic mode now in 4K Dolby Vision up to 30 fps<br>\r\n- Action mode for smooth, steady, handheld videos<br>\r\n- Vital safety features—Emergency SOS via satellite and Crash Detection<br>\r\n- All-day battery life and up to 23 hours of video playback<br>\r\n- iOS 16'),
(4, 'Samsung Laptop 1', 700, 'images/Samsung1.jpg', 'Samsung Book X30\r\n<br><br>\r\n- Intel Core i5-10210U 1.6GHz<br>\r\n- 15.6\" 1366x768<br>\r\n- 1000GB HDD<br>\r\n- 8GB DDR4-SDRAM<br>\r\n- Windows 10 Home<br>\r\n- Intel UHD Graphics<br>'),
(5, 'Samsung Buds', 199, 'images/earphone3.jpg', 'Galaxy Buds+\r\n<br><br>\r\nOur first ever wireless earbuds with a 2-way\r\nspeaker delivering sound by AKG.\r\nEnjoy a premium listening experience with crystal clear calls\r\nand long-lasting battery power.'),
(6, 'Logitech Mouse V1', 30, 'images/Mouse3.jpg', 'Logitech G502 HERO\r\n<br><br>\r\nHigh Performance Gaming Mouse\r\n<br><br>\r\nEngineered for advanced gaming performance.<br>\r\n25K gaming sensor with sub-micron precision tracking, customizable LIGHTSYNC RGB, onboard profiles, repositionable weights and more');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(256) NOT NULL,
  `price` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(255) NOT NULL,
  `item_name` varchar(256) NOT NULL,
  `item_price` varchar(256) NOT NULL,
  `item_quantity` varchar(256) NOT NULL,
  `item_subtotal` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `total_transaction` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `id` int(255) NOT NULL,
  `name` varchar(256) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'Acer Laptop 1', 500, 'images/Acer1.jpg', 'Nitro 5 Gaming Laptop with NVIDIA® GeForce® GTX1650\r\n<br><br>\r\n- NVIDIA® GeForce® GTX 1650 4GB GDDR6<br>\r\n- Windows 11 Home (64-bit)<br>\r\n- 11th Gen Intel Core™ i5-11400H processor<br>\r\n- 15.6\" FHD IPS 144Hz 45%NTSC LED backlit TFT LCD<br>\r\n- 8GB DDR4 3200MHz RAM, 512GB PCIe NVMe SSD\r\nKiller Wifi 6, Built-in Webcam<br>\r\n- 2 Years Carry-in Local Singapore Warranty'),
(2, 'Acer Laptop 2', 500, 'images/Acer2.jpg', 'Swift 1 Lightweight Laptop\r\n<br><br>\r\n- Intel Celeron Processor N4500<br>\r\n- Windows 10 in S Mode<br>\r\n- 14\" FHD IPS Narrow Border Display<br>\r\n- 4GB LPDDR4X RAM<br>\r\n- 64GB eMMC<br>\r\n- Preloaded Microsoft Office 365 Personal (1 year subscription)<br>\r\n- 1 Year Carry-In Local Singapore Warranty<br>'),
(3, 'Acer Laptop 3', 500, 'images/Acer3.jpg', 'Aspire 1 Everyday Laptop \r\n<br><br>\r\n- 14” FHD (1920x1080) IPS Display<br>\r\n- Windows 11 in S Mode<br>\r\n- Intel Celeron Processor N4500<br>\r\n- 4GB DDR4 RAM (upgradable to 16GB using two soDIMM modules)<br>\r\n- 64GB eMMC<br>\r\n- Preloaded Microsoft Office 365 Personal (1 Year Subscription)<br>\r\n- 1 Year Carry-In Local Singapore Warranty'),
(4, 'Lenovo Laptop 1', 600, 'images/Lenovo1.jpg', 'ThinkPad X1 Yoga Gen 6\r\n<br><br>\r\n- 11th Generation Intel® Core™ i7-1165G7 Processor<br>\r\n- Windows 10 Pro 64<br>\r\n- 14\" WUXGA (1920 x 1200), IPS, Anti-Glare, Touch, 400 Nits<br>\r\n- 16 GB Soldered LPDDR4x 4266MHz<br>\r\n- 512 GB M.2 2280 SSD<br>\r\n- 3 Year Premier Support<br>\r\n- Integrated Intel® Iris® Xe Graphics<br>'),
(5, 'Lenovo Laptop 2', 600, 'images/Lenovo2.jpg', 'Lenovo ThinkPad E15 Gen 2\r\n<br><br>\r\n- Intel Core i5 1135G7 / 2.4 GHz<br>\r\n- Win 10 Pro 64-bit<br>\r\n- Iris Xe Graphics<br>\r\n- 8 GB RAM - 256 GB SSD NVMe<br>\r\n- 15.6\" TN 1920 x 1080 (Full HD)<br>\r\n- Wi-Fi 6'),
(6, 'Lenovo Laptop 3', 600, 'images/Lenovo3.jpg', 'IdeaPad 3i (15, Gen 7)\r\n<br><br>\r\n- 12th Generation Intel® Core™ i5-1235U Processor<br>\r\n- Windows 11 Home 64<br>\r\n- 15.6\" FHD (1920 x 1080), TN, Anti-Glare, Non-Touch, 250 Nits<br>\r\n- 8 GB Soldered DDR4 3200MHz<br>\r\n- 256 GB M.2 2242 SSD PCIe Gen3/4<br>\r\n- 1 Year Premium Care<br>\r\n- Integrated Intel® Iris® Xe Graphics<br>'),
(7, 'Samsung Laptop 1', 700, 'images/Samsung1.jpg', 'Samsung Book X30\r\n<br><br>\r\n- Intel Core i5-10210U 1.6GHz<br>\r\n- 15.6\" 1366x768<br>\r\n- 1000GB HDD<br>\r\n- 8GB DDR4-SDRAM<br>\r\n- Windows 10 Home<br>\r\n- Intel UHD Graphics<br>'),
(8, 'Samsung Laptop 2', 700, 'images/Samsung2.jpg', 'Galaxy Book Flex α\r\n<br><br>\r\n- Intel® Core™ i5-10210U Processor<br>\r\n- Windows 10 Home<br>\r\n- 13.3\", Resolution 1920 x 1080<br>\r\n- FHD QLED<br>\r\n- 256GB SSD<br>\r\n- Wi-Fi 6 (Gig+), 802.11 ax<br>\r\n- Intel® UHD Graphics<br>'),
(9, 'Samsung Laptop 3', 700, 'images/Samsung3.jpg', 'Galaxy Book2 Pro 360\r\n<br><br>\r\n- Intel® Core™ i7-1165G7 Processor<br>\r\n- 15.6\" FHD AMOLED Display (1920 x 1080) with Touch Screen Panel<br>\r\n- 16 GB LPDDR5 Memory (On BD 16 GB)<br>\r\n- 1 TB NVMe SSD<br>\r\n- Wi-Fi 6E (Gig+), 802.11 ax 2x2<br>\r\n- Intel® Iris® Xe Graphics<br>');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `tel` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `msg` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'IPHONE 14 Pro ', 1599, 'images/Apple1.jpg', 'Apple iPhone 14 Pro\r\n<br><br>\r\n- 6.1-inch Super Retina XDR display featuring Always-On and ProMotion<br>\r\n- Dynamic Island, a magical new way to interact with iPhone<br>\r\n- 48MP Main camera for up to 4x greater resolution<br>\r\n- Cinematic mode now in 4K Dolby Vision up to 30 fps<br>\r\n- Action mode for smooth, steady, handheld videos<br>\r\n- Vital safety features—Emergency SOS via satellite and Crash Detection<br>\r\n- All-day battery life and up to 23 hours of video playback<br>\r\n- iOS 16'),
(2, 'IPHONE 13 ', 1199, 'images/Apple2.jpg', 'Apple iPhone 13\r\n<br><br>\r\n- 6.1-inch Super Retina XDR display<br>\r\n- Cinematic mode adds shallow depth of field and shifts focus automatically in your videos<br>\r\n- Advanced dual-camera system with 12MP Wide and Ultra Wide cameras; Photographic Styles, Smart HDR 4, Night mode, 4K Dolby Vision HDR recording<br>\r\n- 12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording<br>\r\n- A15 Bionic chip for lightning-fast performance<br>\r\n- Up to 19 hours of video playback<br>'),
(3, 'IPAD PRO', 999, 'images/Apple3.jpg', 'Apple 12.9-inch iPad Pro\r\n<br><br>\r\n- Apple M1 chip for next-level performance<br>\r\n- Brilliant 12.9-inch Liquid Retina XDR display with ProMotion, True Tone and P3 wide colour<br>\r\n- TrueDepth camera system featuring Ultra Wide camera with Centre Stage<br>\r\n- 12MP Wide camera, 10MP Ultra Wide camera and LiDAR Scanner for immersive AR<br>\r\n- Stay connected with ultrafast Wi-Fi 6<br>\r\n- Go further with all-day battery life<br>'),
(4, 'OPPO V1', 699, 'images/Oppo1.jpg', 'Oppo Reno Dual-SIM\r\n<br><br>\r\n- Dual-SIM<br>\r\n- 6.4 inches, AMOLED capacitive touchscreen, 16M colors, 1080 x 2340 pixels, Corning Gorilla Glass 6<br>\r\n- 256GB Storage, 6GB RAM, No Card slot, Android 9.0 (Pie); ColorOS 6, Qualcomm SDM710<br> \r\n- Snapdragon 710 (10 nm), Octa-core (2x2.2 GHz Kryo 360 Gold & 6x1.7 GHz Kryo 360 Silver), Adreno 616<br>\r\n- Primary Dual Camera'),
(5, 'Oppo V2', 499, 'images/Oppo2.jpg', 'Oppo Pro\r\n<br><br>\r\n- 7.48mm Ultra Sleek Body<br>\r\n- 6 AI Portrait Cameras<br>\r\n- 30W VOOC Flash Charge 4.0<br>\r\n- 16.34cm (6.43\") Dual Punch-Hole <br>\r\n- Super AMOLED Display\r\n'),
(6, 'Oppo V3', 599, 'images/Oppo3.jpg', 'Oppo Pearl Blue\r\n<br><br>\r\n- 6.52\" Inch (16.55cm) HD+ Water Drop Display | Screen to body ratio 88.7%. Side mounted Fingerprint<br>\r\n- MediaTek Helio G35 GPU IMG GE8320 @ 680 MHz | Powerful 2.3 GHz Octa-core processor, support LPDDR4X memory<br>\r\n- 5000 mAh lithium polymer battery<br>\r\n- 13MP Triple Camera ( 13MP Main + 2MP Mono + 2MP macro Lens) | 8MP Front Camera.<br>\r\n- Memory, Storage & SIM: 4GB RAM | 64GB | Dual SIM (nano+nano) dual-standby (4G+4G).| Color OS 7.2 based on Android 11.0'),
(7, 'Samsung S22', 1299, 'images/ss1.jpg', 'Samsung Galaxy S22 Ultra\r\n<br><br>\r\n- Dynamic AMOLED front screen<br>\r\n- Impressive Quad Camera setup on the back<br>\r\n- Robust Samsung Exynos 2200 chipset<br>\r\n- 5000mAh battery with 45WFast Charging<br>\r\n- 120Hz variable refresh rate<br>\r\n- Operating system: Android<br>\r\n- Connector type: USB Type C<br>'),
(8, 'Samsung Fold 4', 1299, 'images/ss2.jpg', 'SAMSUNG Galaxy Z Fold 4\r\n<br><br>\r\n- FLEX MODE<br>\r\n- HANDS FREE VIDEO<br>\r\n- MULTI-VIEW WINDOW<br>\r\n- S PEN READY<br>\r\n- YOUR APPS, YOUR WAY<br>\r\n- YOUR PHONE & WATCH WORK AS ONE<br>\r\n- BIG SCREEN, BIG SOUND<br>'),
(9, 'Samsung Flip 3', 1599, 'images/ss3.jpg', 'SAMSUNG Galaxy Z Flip 3 5G\r\n<br><br>\r\n- FLEX YOUR BEST ANGLE<br>\r\n- A CAMERA THAT GOES STEADY<br>\r\n- ULTRA COMPACT, ULTRA COOL<br>\r\n- ARRAY OF COLORS<br>\r\n- FAST CHARGING FOR FAST LIVING<br>');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'Razor Mouse V1', 50, 'images/mouse1.jpg', 'Razer Viper Ultimate with Charging Dock - Black\r\n<br><br>\r\nAmbidextrous Gaming Mouse with Razer™ <br> HyperSpeed Wireless\r\n<br><br>\r\n- Razer™ HyperSpeed Wireless technology<br>\r\n- Razer™ Focus+ Optical Sensor<br>\r\n- Razer™ Optical Mouse Switch'),
(2, 'Razor Mouse V2', 40, 'images/mouse2.jpg', 'Razer DeathAdder V2\r\n<br><br>\r\nWired Gaming Mouse with Best-in-class Ergonomics\r\n<br><br>\r\n- Best-In-Class Ergonomics<br>\r\n- Razer™ Optical Mouse Switch<br>\r\n- Razer™ Focus+ Optical Sensor'),
(3, 'Logitech Mouse V1', 30, 'images/mouse3.jpg', 'Logitech G502 HERO\r\n<br><br>\r\nHigh Performance Gaming Mouse\r\n<br><br>\r\nEngineered for advanced gaming performance.<br>\r\n25K gaming sensor with sub-micron precision tracking, customizable LIGHTSYNC RGB, onboard profiles, repositionable weights and more'),
(7, 'Apple Keyboard', 100, 'images/keyboard1.jpg', 'Magic Keyboard with Touch ID for Mac models with Apple\r\n<br><br>\r\nNow available with Touch ID, providing fast, easy and secure authentication for logins and purchases.\r\n<br>\r\nRemarkably comfortable and precise typing experience.'),
(8, 'Logitech Keyboard V2', 50, 'images/keyboard2.jpg', 'MULTI-DEVICE WIRELESS KEYBOARD\r\n<br><br>\r\nOne keyboard. Fully equipped. For computer, phone, and tablet.\r\n<br><br>\r\nA compact keyboard that’s designed for today\'s multi-tasking era. Compatible with up to three devices.'),
(9, 'Logitech Keyboard V1', 60, 'images/keyboard3.jpg', 'MULTI-DEVICE BLUETOOTH KEYBOARD\r\n<br><br>\r\nMinimalist keyboard for computers, tablets and phones\r\n<br><br>\r\nA multi-device keyboard with a small footprint and quiet typing for computers, tablets and phone, at home or on-the-go.'),
(13, 'Beats Headphone', 300, 'images/earphone1.jpg', 'BEATS STUDIO3 WIRELESS\r\n<br><br>\r\nTrue Wireless Noise Cancelling Over-Ear Headphones\r\n<br><br>\r\nBeats Studio3 Wireless over-ear headphones delivers premium sound while blocking external noise with Active Noise Cancelling\r\n'),
(14, 'Apple Earpiece', 44, 'images/earphone2.jpg', 'EarPods with Lightning Connector\r\n<br><br>\r\nThe speakers inside the EarPods have been engineered to maximise sound output and minimise sound loss, which means you get high-quality audio.'),
(15, 'Samsung Buds', 199, 'images/earphone3.jpg', 'Galaxy Buds+\r\n<br><br>\r\nOur first ever wireless earbuds with a 2-way\r\nspeaker delivering sound by AKG.\r\nEnjoy a premium listening experience with crystal clear calls\r\nand long-lasting battery power.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bestsellers`
--
ALTER TABLE `bestsellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bestsellers`
--
ALTER TABLE `bestsellers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
