-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 12, 2019 lúc 06:22 PM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `coffeeshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_status` tinyint(4) NOT NULL,
  `order_date` date NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `list_price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`order_id`,`order_item_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL,
  `product_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `list_price` int(10) NOT NULL,
  `product_detail` varchar(535) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_img`, `product_name`, `category_id`, `list_price`, `product_detail`) VALUES
(610101, '//product.hstatic.net/1000075078/product/white_vnese_coffee_9968c1184d7f4634a9bb9fce7b5ff313_large.jpg', 'BẠC SỈU', 101, 29000, 'Theo chân những người gốc Hoa đến định cư tại Sài Gòn, Bạc sỉu là cách gọi tắt của \"Bạc tẩy sỉu phé\" trong tiếng Quảng Đông, chính là: Ly sữa trắng kèm một chút cà phê.'),
(620201, '//product.hstatic.net/1000075078/product/caramel_macchiato_b6f694f469794e12b04a91845f5fce2d_large.jpg', 'CARAMEL MACCHIATO', 202, 55000, 'Vị thơm béo của bọt sữa và sữa tươi, vị đắng thanh thoát của cà phê Espresso hảo hạng, và vị ngọt đậm của sốt caramel.'),
(620202, '//product.hstatic.net/1000075078/product/travai_large.jpg', 'TRÀ OOLONG VẢI NHƯ Ý', 404, 45000, 'Vị ngọt thanh của vải như ý kết hợp với vị đắng đặc trưng của trà oolong siêu ngon.'),
(660607, '//product.hstatic.net/1000075078/product/cfalmondlanh_44b14a82f75b4502a349a1b6ddde23c8_master.jpg', 'CÀ PHÊ SỮA HẠNH NHÂN', 100, 55000, 'Vẫn là ly cà phê sữa quen thuộc ấy, nhưng nay lại càng thêm đặc biệt hơn bởi lớp hạnh nhân hòa quyện. Nhâm nhi 1 ly cà phê cho tỉnh táo lại vừa tốt cho sức khỏe, thì ngày của bạn chắc chắn sẽ ổn phết đấy!'),
(660606, '//product.hstatic.net/1000075078/product/chocoalmondlanh_7f36265718614499adcad596975e6920_master.jpg', 'CHOCO CHERRY HẠNH NHÂN', 100, 59000, 'Sữa và lớp hạnh nhân ngọt ngào, được đằm lại bởi vị chocolate đăng đắng cùng lớp cherry chua thanh. Món uống thích hợp cho tín đồ hảo ngọt và thích \'healthy\', giúp lên tinh thần cho ngày mới tràn đầy năng lượng hơn.'),
(660605, '//product.hstatic.net/1000075078/product/oolongalmondlanh_59d1a66f9c8f4d358d8c5cda5cd4f620_master.jpg', 'TRÀ SỮA OOLONG HẠNH NHÂN', 100, 42000, 'Một lựa chọn cực kì \'balance\' giữa hương và vị, giữa vị thanh mát của lớp trà oolong hảo hạng, với hương sữa hạnh nhân giàu \'canxi\'. Mang đến 1 hòa vị đỉnh cao, vừa giải nhiệt xua tan nắng nóng, vừa cực kì \'healthy\' - rất dễ để bạn chốt kèo rồi đây!'),
(660604, '//product.hstatic.net/1000075078/product/oolongalmondlanh_59d1a66f9c8f4d358d8c5cda5cd4f620_master.jpg', 'CHOCO MATCHA HẠNH NHÂN', 100, 42000, 'Một lựa chọn cực kì \'balance\' giữa hương và vị, giữa vị thanh mát của lớp trà oolong hảo hạng, với hương sữa hạnh nhân giàu \'canxi\'. Mang đến 1 hòa vị đỉnh cao, vừa giải nhiệt xua tan nắng nóng, vừa cực kì \'healthy\' - rất dễ để bạn chốt kèo rồi đây!'),
(660603, '//product.hstatic.net/1000075078/product/cfalmondlanh_44b14a82f75b4502a349a1b6ddde23c8_master.jpg', 'CÀ PHÊ HẠNH NHÂN', 100, 55000, 'Vẫn là ly cà phê sữa quen thuộc ấy, nhưng nay lại càng thêm đặc biệt hơn bởi lớp hạnh nhân hòa quyện. Nhâm nhi 1 ly cà phê cho tỉnh táo lại vừa tốt cho sức khỏe, thì ngày của bạn chắc chắn sẽ ổn phết đấy!'),
(660602, '//product.hstatic.net/1000075078/product/oolongalmondnong_b5423d87022647c0ab7de3fe50d2b354_master.jpg', 'TRÀ SỮA OOLONG HẠNH NHÂN', 100, 55000, 'Nép mình bên hương trà Oolong hảo hạng, là lớp sữa hạnh nhân, âm ấm và ngọt ngào thuần khiết. Hòa vị khó tả, mang ấm áp đến lạ chỉ ngay từ lần nhâm nhi đầu tiên.'),
(660601, '//product.hstatic.net/1000075078/product/matchaalmondnong_b0c7500df5fc43dc94e8dac6d5d86bc0_master.jpg', 'CHOCO MATCHA HẠNH NHÂN', 100, 59000, 'Matcha và chocolate - tưởng chừng khó có thể hòa quyện, nhưng lại rất vừa vặn khi có lớp sữa hạnh nhân ngọt ngào len lỏi. Nhẹ nhàng, không quá gắt và rất biết chiều lòng team hảo ngọt chỉ ngay từ lượt nhâm nhi đầu tiên.'),
(660608, '//product.hstatic.net/1000075078/product/chocoalmondnong_d4604c07b7f24041953d37f7cca63c66_master.jpg', 'CHOCO HẠNH NHÂN', 100, 59000, 'Len lỏi trong những tinh túy của vị chocolate đăng đắng, là lớp sữa và hạt hạnh nhân nong nóng thơm lừng. GIữa trời lành lạnh hay tối cần êm đềm, thì chỉ cần 1 cái nhấp môi cũng đã đủ thấy ấm.'),
(660609, '//product.hstatic.net/1000075078/product/cherry_mac_6a3403fdb832464da88de8c6e6ddf662_master.jpg', 'TRÀ CHERRY MACCHIATO', 202, 55000, 'Khoác lên mình một ngoại hình tràn đầy năng lượng với sắc đỏ rực rỡ của Cherry chín mọng, kết hợp với nền trà oolong hảo hạng và lớp foam sánh mịn, để mang đến cho bạn một thức uống khoan khoái và dậy lên từng phong vị chua, béo, ngọt đầy ấn tượng.'),
(660613, '//product.hstatic.net/1000075078/product/xoai_mac_c4534cc7607f4d58addf470a162e8359_master.jpg', 'TRÀ XOÀI MACCHIATO', 202, 55000, 'Mang trên mình sắc vàng óng ánh của hương xoài thơm lừng, hòa cùng lớp thanh mát của vị trà đen tinh túy, phía trên được phủ thêm 1 lớp foam macchiato béo ngậy, để mang đến cho bạn 1 hòa vị đỉnh cao của sự thanh mát, cùng chút beo béo và dư vị ngọt ngào miễn chê.'),
(660614, '//product.hstatic.net/1000075078/product/coldbrewmacchiato_af7dc44ed71b4856bfe48a756ed939e6_master.jpg', 'COLD BREW SỮA TƯƠI MACCHIATO', 202, 50000, 'Cold Brew Sữa Tươi Macchiato - hương vị cà phê vừa quen vừa lạ. Quen bởi vị đăng đắng và ngọt dịu của Cold Brew, thức uống \'Signature\' của Nhà. Lạ bởi phong vị ngọt ngào của lớp sữa tươi và lớp foam macchiato beo béo được đánh lên sánh mịn'),
(660615, '//product.hstatic.net/1000075078/product/xoai_mac_c4534cc7607f4d58addf470a162e8359_master.jpg', 'TRÀ XOÀI MACCHIATO', 202, 55000, 'Mang trên mình sắc vàng óng ánh của hương xoài thơm lừng, hòa cùng lớp thanh mát của vị trà đen tinh túy, phía trên được phủ thêm 1 lớp foam macchiato béo ngậy, để mang đến cho bạn 1 hòa vị đỉnh cao của sự thanh mát, cùng chút beo béo và dư vị ngọt ngào miễn chê.'),
(660616, '//product.hstatic.net/1000075078/product/daxay_raspberry_01685c63649740678352a348f8b281a1_master.png', 'PHÚC BỒN TỬ CAM ĐÁ XAY', 303, 59000, 'Tê tái ngay đầu lưỡi bởi sự mát lạnh của đá xay.Hòa quyện thêm hương vị chua chua, ngọt ngọt từ trái cam tươi và trái phúc bồn tử 100% tự nhiên, để cho ra một hương vị thanh mát, kích thích vị giác đầy thú vị ngay từ lần đầu thưởng thức.Lại thêm một lựa chọn mới cho \'team đá xay\' và \'team trái cây\', còn chần chờ gì nữa mà không thử ngay thôi!'),
(650501, '//product.hstatic.net/1000075078/product/choco_1x1_4faf8c80e6604cad88ce30528e2bd409_master.jpg', 'BÁNH CHOCOLATE', 505, 29000, 'Từng lớp bánh mịn ngọt ngào đậm vị chiều lòng người yêu thích hương vị sô cô la. Sẽ ngon hơn nếu bạn kết hợp cùng món trà trái cây thanh mát.'),
(660612, '//product.hstatic.net/1000075078/product/tra_dao_cam_sa_on_bg_master.jpg', 'TRÀ ĐÀO CAM SẢ', 404, 45000, 'Vị thanh ngọt của đào Hy Lạp, vị chua dịu của Cam Vàng nguyên vỏ, vị chát của trà đen tươi được ủ mới mỗi 4 tiếng, cùng hương thơm nồng đặc trưng của sả chính là điểm sáng làm nên sức hấp dẫn của thức uống này. Sản phẩm hiện có 2 phiên bản Nóng và Lạnh phù hợp cho mọi thời gian trong năm.'),
(610102, '//product.hstatic.net/1000075078/product/americano_master.jpg', 'AMERICANO', 101, 39000, 'Americano được pha chế bằng cách thêm nước vào một hoặc hai shot Espresso để pha loãng độ đặc của cà phê, từ đó mang lại hương vị nhẹ nhàng, không gắt mạnh và vẫn thơm nồng nàn.'),
(610103, '//product.hstatic.net/1000075078/product/vnese_coffee_master.jpg', 'CÀ PHÊ ĐEN', 101, 29000, 'Một tách cà phê đen thơm ngào ngạt, phảng phất mùi cacao là món quà tự thưởng tuyệt vời nhất cho những ai mê đắm tinh chất nguyên bản nhất của cà phê. Một tách cà phê trầm lắng, thi vị giữa dòng đời vồn vã.'),
(610104, '//product.hstatic.net/1000075078/product/cfs_master.jpg', ' CÀ PHÊ SỮA ', 101, 29000, ' Cà phê phin kết hợp cũng sữa đặc là một sáng tạo đầy tự hào của người Việt, được xem món uống thương hiệu của Việt Nam. '),
(610105, '//product.hstatic.net/1000075078/product/cappuccino_master.jpg', 'CAPPUCINNO', 101, 45000, 'Cappuccino được gọi vui là thức uống \'một-phần-ba\' - 1/3 Espresso, 1/3 Sữa nóng, 1/3 Foam.'),
(610106, '//product.hstatic.net/1000075078/product/colbrewcamsa_c2a45ec3fea94e248fd1b4f71abebe09_master.jpg', 'COLD BREW CAM SẢ', 101, 45000, 'Tinh tế trong hương - sắc - vị'),
(610107, '//product.hstatic.net/1000075078/product/coldbrew_raspberry_ac577fc483484f0cb4e35efe6bf14426_master.png', 'COLD BREW PHÚC BỒN TỬ', 101, 50000, 'Một sự kết hợp đầy thuyết phục cho những người thích cà phê nhưng lại muốn thay đổi vị.'),
(610108, '//product.hstatic.net/1000075078/product/coldbrewmilk_09db086189ce43d5bb78172613af57dc_master.jpg', 'COLD BREW SỮA TƯƠI', 101, 50000, 'Thanh mát và cân bằng với hương vị cà phê nguyên bản 100% Arabica Cầu Đất cùng sữa tươi thơm béo cho từng ngụm tròn vị, hấp dẫn.Có thể bạn thích'),
(610109, '//product.hstatic.net/1000075078/product/coldbrewmilk_09db086189ce43d5bb78172613af57dc_master.jpg', 'COLD BREW SỮA TƯƠI MACCHIATO', 101, 50000, 'Thanh mát và cân bằng với hương vị cà phê nguyên bản 100% Arabica Cầu Đất cùng sữa tươi thơm béo cho từng ngụm tròn vị, hấp dẫn.'),
(610110, '//product.hstatic.net/1000075078/product/classic_47aa187278184a4ea36a59cf279350c0_master.jpg', 'COLD BREW TRUYỀN THỐNG', 101, 45000, 'Trong một năm trở lại đây, cà phê pha lạnh Cold Brew đã trở thành một xu hướng thưởng thức mới đối với các tín đồ cà phê Việt Nam.'),
(610111, '//product.hstatic.net/1000075078/product/espresso_master.jpg', 'ESPRESSO', 101, 35000, 'Một cốc Espresso nguyên bản được bắt đầu bởi những hạt Arabica chất lượng, phối trộn với tỉ lệ cân đối hạt Robusta, cho ra vị ngọt caramel, vị chua dịu và sánh đặc. Để đạt được sự kết hợp này, chúng tôi xay tươi hạt cà phê cho mỗi lần pha.'),
(610112, '//product.hstatic.net/1000075078/product/latte__1__master.jpg', 'LATTE', 101, 45000, ' Khi chuẩn bị Latte, cà phê Espresso và sữa nóng được trộn lẫn vào nhau, bên trên vẫn là lớp foam nhưng mỏng và nhẹ hơn Cappucinno.'),
(610113, '//product.hstatic.net/1000075078/product/mocha_master.jpg', 'MOCHA', 101, 49000, 'Cà phê Mocha được ví von đơn giản là Sốt Sô cô la được pha cùng một tách Espresso.'),
(610114, '//product.hstatic.net/1000075078/product/iced_chocolate_master.jpg', 'SÔ-CÔ-LA ĐÁ', 101, 55000, 'Cacao nguyên chất hoà cùng sữa tươi béo ngậy. Vị ngọt tự nhiên, không gắt cổ, để lại một chút đắng nhẹ, cay cay trên đầu lưỡi.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products_categories`
--

DROP TABLE IF EXISTS `products_categories`;
CREATE TABLE IF NOT EXISTS `products_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products_categories`
--

INSERT INTO `products_categories` (`category_id`, `category_name`) VALUES
(101, 'Cà phê'),
(202, 'Trà & Macchiato'),
(303, 'Thức uống đá xay'),
(404, 'Thức uống trái cây'),
(505, 'Bánh & Snack'),
(100, 'Món nổi bật');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stores`
--

DROP TABLE IF EXISTS `stores`;
CREATE TABLE IF NOT EXISTS `stores` (
  `store_id` int(11) NOT NULL,
  `store_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip_code` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `store_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`store_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `stores`
--

INSERT INTO `stores` (`store_id`, `store_name`, `phone`, `email`, `city`, `state`, `zip_code`, `store_img`) VALUES
(1, '798 - SƯ VẠN HẠNH', '0927830097', 'tch.svh@gmail.com', 'TP. Hồ Chí Minh', 'Quận 10', '10000', '//tchmobileapp.s3.ap-southeast-1.amazonaws.com/store/dUbfE6Ki47syrES65fmJLhdTrHjj8XaB0yn0A73D.jpeg'),
(2, '223 - VÕ VĂN TẦN', '0927830091', 'tch.vvt@gmail.com', 'TP. Hồ Chí Minh', 'Quận 3', '20000', '//tchmobileapp.s3.ap-southeast-1.amazonaws.com/store/GbPLfGIrCX3OSDBbUs5Q8g333P8efE1oVakkTkg8.jpeg'),
(3, '86 - CAO THẮNG', '0988339832', 'tch.ct@gmail.com', 'TP. Hồ Chí Minh', 'Quận 3', '30000', '//tchmobileapp.s3.ap-southeast-1.amazonaws.com/store/5b6d0c17fbc6860a6f541dac_TCH%20HCM%20175B%20Cao%20Tha%E2%95%A0%C3%A5%E2%95%A0%C3%BCng%20no%E2%95%A0%C3%A9%E2%95%A0%C3%BCi%20da%E2%95%A0%C3%87i.jpg'),
(4, '159 - PHẠM NGŨ LÃO', '0947899345', 'tch.pnl@gmail.com', 'TP. Hồ Chí Minh', 'Quận 1', '40000', '//tchmobileapp.s3.ap-southeast-1.amazonaws.com/store/5b21f8cb1acd4d02032668ed_1.%20Pham%20ngu%20lao.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`username`, `fullname`, `password`, `email`, `role`) VALUES
('haonguyencix', 'Nguyễn Thiện Hảo', '3393db437be4a6ce7558f60c6ad86daf', 'haonguyen.cixteam@gmail.com', 'admin'),
('haonguyencix1', 'Nguyễn Thiện Hảo', '3393db437be4a6ce7558f60c6ad86daf', 'haonguyen.cixteam@gmail.com1', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
