-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Хост: 10.0.0.2
-- Время создания: Окт 29 2017 г., 11:48
-- Версия сервера: 5.6.36
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `uh421548_f2magento`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Cart`
--

CREATE TABLE `Cart` (
  `id` int(11) NOT NULL,
  `user_hash` varchar(100) NOT NULL,
  `product_id` varchar(1000) NOT NULL,
  `quantity` varchar(1000) NOT NULL,
  `id_color` varchar(5) NOT NULL,
  `id_size` varchar(5) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Cart`
--

INSERT INTO `Cart` (`id`, `user_hash`, `product_id`, `quantity`, `id_color`, `id_size`, `datetime`) VALUES
(79, '5b460d0f5f821d657f10acc6393a624a', '14', '1', '6', '6', '2017-05-17 14:37:54'),
(80, '5b460d0f5f821d657f10acc6393a624a', '14', '1', '3', '6', '2017-05-17 14:45:01'),
(81, 'a08e578df177bd4df163bdf65efd7b92', '12', '1', '9', '5', '2017-05-17 15:44:35'),
(82, '8f92a56bac2413762267de08af84db3d', '12', '1', '9', '5', '2017-05-17 15:46:12'),
(83, 'b4be2cc95421b0e8620402a00ca00304', '12', '1', '9', '5', '2017-05-17 15:46:15'),
(84, 'ab4ae884bf803e7bd795aef85a4987e5', '12', '1', '9', '6', '2017-05-17 15:46:20'),
(85, 'a65c740e4bbc359c2566df9d084f24a8', '16', '1', '3', '1', '2017-05-17 15:46:33'),
(86, 'c79810a95bfb5b8de9af4ad9463e0a61', '14', '1', '3', '6', '2017-05-17 15:48:42'),
(87, '8b5978bfc85a22ff2a1243ceb51e3094', '14', '3', '3', '6', '2017-05-17 15:49:30'),
(88, '8b5978bfc85a22ff2a1243ceb51e3094', '14', '1', '3', '2', '2017-05-17 15:49:55'),
(89, '8b5978bfc85a22ff2a1243ceb51e3094', '14', '1', '6', '7', '2017-05-17 15:50:13'),
(90, '8b5978bfc85a22ff2a1243ceb51e3094', '16', '1', '3', '5', '2017-05-17 15:50:26'),
(91, '5d0d8af893847fe23ef2d6b6773b47bb', '5', '1', '12', '5', '2017-05-17 16:10:46'),
(92, '37f00aace81fd3f64056cb4c097df64c', '5', '1', '12', '2', '2017-05-17 16:11:05'),
(93, '1d829f597b3392be38eb0bd1c6eafc71', '16', '1', '3', '2', '2017-05-17 16:12:06'),
(94, '88683c4555b57144c3b17b0a9e0fc7d5', '7', '1', '12', '5', '2017-05-17 16:13:24'),
(95, 'd3b45b9e9a97a3fae5695edef6114d4c', '16', '1', '3', '2', '2017-05-17 16:16:59'),
(96, 'd3b45b9e9a97a3fae5695edef6114d4c', '12', '1', '9', '2', '2017-05-18 10:56:48'),
(97, 'd3b45b9e9a97a3fae5695edef6114d4c', '14', '1', '6', '7', '2017-05-18 10:59:01'),
(98, '6b769c9b3f50158a4764de49028b1209', '14', '1', '6', '6', '2017-05-19 12:05:55'),
(99, '1776c6ed6467b2fdcd5908b007b5af07', '13', '1', '6', '2', '2017-06-08 17:10:08'),
(100, '1776c6ed6467b2fdcd5908b007b5af07', '14', '1', '3', '7', '2017-06-08 17:19:45'),
(101, '1ed7006f6f32292ee0781d59eb2ab089', '11', '1', '5', '6', '2017-06-09 14:55:58'),
(102, '97ce321c2e1961ff8431d229ed464908', '14', '1', '6', '7', '2017-06-16 13:36:56'),
(103, '7c5ae4c1050b79107a3736003a77c532', '12', '1', '9', '6', '2017-08-18 20:29:51'),
(104, 'f274d7360cf168608e52b094de04ee3d', '9', '1', '12', '6', '2017-09-12 11:19:13');

-- --------------------------------------------------------

--
-- Структура таблицы `Categories`
--

CREATE TABLE `Categories` (
  `id` int(11) NOT NULL,
  `name_cat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Categories`
--

INSERT INTO `Categories` (`id`, `name_cat`) VALUES
(1, 'men'),
(2, 'women'),
(3, 'children'),
(4, 'sportswear');

-- --------------------------------------------------------

--
-- Структура таблицы `Color`
--

CREATE TABLE `Color` (
  `id` int(11) NOT NULL,
  `color_name` varchar(10) NOT NULL,
  `color_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Color`
--

INSERT INTO `Color` (`id`, `color_name`, `color_code`) VALUES
(1, 'red', '#FF0000'),
(2, 'beige', '#F5F5DC'),
(3, 'blue', '#0000FF'),
(4, 'yellow', '#FFFF00'),
(5, 'black', '#000000'),
(6, 'brown', '#964B00'),
(7, 'green', '#0AAE3B'),
(8, 'gold', '#FFD700'),
(9, 'pink', '#FFC0CB'),
(10, 'orange', '#FFA500'),
(11, 'white', '#FFFFFF'),
(12, 'navy_blue', '#000080'),
(13, 'purple', '#800080'),
(14, 'Grey mouse', '#7c899e'),
(15, 'orange red', '#f53829'),
(16, '', ''),
(17, '', ''),
(18, '', ''),
(19, '', ''),
(20, 'sky blue', '#53c8bc');

-- --------------------------------------------------------

--
-- Структура таблицы `F2Products`
--

CREATE TABLE `F2Products` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `id_year` int(10) NOT NULL,
  `id_material` int(10) NOT NULL,
  `id_season` int(10) NOT NULL,
  `price` varchar(20) NOT NULL,
  `none_price` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `F2Products`
--

INSERT INTO `F2Products` (`id`, `name`, `id_year`, `id_material`, `id_season`, `price`, `none_price`, `description`) VALUES
(1, 'Three Dots Women\'s 3I4 Sleeve V Neck', 2, 1, 2, '38.00', '58.00', 'Our employees put in great efforts to make this commodity. Our good was made up by best experts with the help of most advanced technologies, and it gives us right to consider this product to be a premium one. '),
(2, 'Fashion Womens Boyfriend Jeans Free Suspenders Light Blue Denim Pants', 1, 2, 1, '24.00', '49.00', 'We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. '),
(3, 'Sanctuary Clothing Women\'s City Mix Tee', 3, 3, 3, '78.00', '99.00', 'Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. The main reason of buying our clothes is the unique combination of fair price, extraordinary style and perfect quality. '),
(4, 'Michael Stars Women\'s Short Sleeve Off Shoulder Dolman Shirt', 4, 4, 3, '69.00', '85.00', 'Because we all live in the time of total consuming of uncountable goods and services, and this has become the main reason for the rapid growth of a so-called culture of consumption in our society.'),
(5, 'Jack Wolfskin Men\'s Gecko Fleece Pullover', 4, 1, 2, '45.00', '59.00', 'And also fashion is the detector of prosperity and social rank. So, our natural desire to wear fashionable clothes has many reasons such as historical, social and others. Therefore being fashionable costs a lot of money. But nowadays fashion is not such unavailable as it was a couple of centuries ago. '),
(6, 'Jack and Jones Men\'s JJORCLOSE Baseball Camp Jacket', 2, 2, 1, '53.00', '76.00', 'And that is why we are offering you the result of great market and technological research – our magnificent product. Our employees put in great efforts to make this commodity. Our good was made up by best experts with the help of most advanced technologies, and it gives us right to consider this product to be a premium one.'),
(7, 'Fashion Womens Boyfriend Jeans Free', 1, 5, 3, '17.00', '23.00', 'We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. '),
(8, 'ESPRIT Men\'s Long Sleeve Jacket', 3, 4, 2, '25.00', '41.00', 'Our employees put in great efforts to make this commodity. Our good was made up by best experts with the help of most advanced technologies, and it gives us right to consider this product to be a premium one. '),
(9, 'Anne Klein Women\'s Cap Sleeve Asymmetrical ', 1, 3, 3, '34.00', '50.00', 'Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility. '),
(10, 'Star Vixen Women\'s Sleeveless Faux Wrap Dress', 3, 3, 3, '56.00', '79.00', 'We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. '),
(11, 'Star Vixen Women\'s Faux Wrap Dress', 2, 5, 3, '49.00', '55.00', 'So, with the great pleasure we are offering you our goods, and we are sure that only our choices of garments will suit you best. Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility. '),
(12, 'Woman Cut Out Punk Novel Ripped Jeans Denim Jeggings Trousers Skinny', 4, 4, 3, '69.00', '82.00', 'Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. The main reason of buying our clothes is the unique combination of fair price, extraordinary style and perfect quality. '),
(13, 'Only Sons Mens Long Sleeve Coat', 3, 3, 4, '150', '99', 'We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. The main reason of buying our clothes is the unique combination of fair price, extraordinary style and perfect quality.'),
(14, 'Scotch Soda Mens Long Sleeve Jacket', 1, 1, 4, '59.00', '79.00', 'Because we all live in the time of total consuming of uncountable goods and services, and this has become the main reason for the rapid growth of a so-called culture of consumption in our society.'),
(16, 'Replay Womens Vicki Straight Jeans', 1, 6, 3, '45', '32', 'Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies. Obviously there is nothing wrong about it because fashion satisfies our willingness to be attractive.');

-- --------------------------------------------------------

--
-- Структура таблицы `Images`
--

CREATE TABLE `Images` (
  `id` int(11) NOT NULL,
  `id_product` varchar(10) NOT NULL,
  `image` varchar(500) NOT NULL,
  `main_picture` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Images`
--

INSERT INTO `Images` (`id`, `id_product`, `image`, `main_picture`) VALUES
(1, '1', 'three-dots-women_s-3i4-sleeve-v-neck_01.png', '1'),
(2, '1', 'three-dots-women_s-3i4-sleeve-v-neck_02.png', '0'),
(3, '1', 'three-dots-women_s-3i4-sleeve-v-neck_03.png', '0'),
(4, '1', 'three-dots-women_s-3i4-sleeve-v-neck_04.png', '0'),
(5, '1', 'three-dots-women_s-3i4-sleeve-v-neck_05.png', '0'),
(6, '1', 'three-dots-women_s-3i4-sleeve-v-neck_06.png', '0'),
(7, '2', 'fashion-womens-boyfriend-jeans-free-suspenders-light-blue-denim-pants_01.png', '1'),
(8, '2', 'fashion-womens-boyfriend-jeans-free-suspenders-light-blue-denim-pants_02.png', '0'),
(16, '2', 'fashion-womens-boyfriend-jeans-free-suspenders-light-blue-denim-pants_04.png', '0'),
(17, '2', 'fashion-womens-boyfriend-jeans-free-suspenders-light-blue-denim-pants_05.png', '0'),
(18, '2', 'fashion-womens-boyfriend-jeans-free-suspenders-light-blue-denim-pants_06.png', '0'),
(19, '3', 'sanctuary-clothing-women_s-city-mix-tee_01.png', '1'),
(20, '3', 'sanctuary-clothing-women_s-city-mix-tee_02.png', '0'),
(21, '3', 'sanctuary-clothing-women_s-city-mix-tee_03.png', '0'),
(22, '3', 'sanctuary-clothing-women_s-city-mix-tee_04.png', '0'),
(23, '3', 'sanctuary-clothing-women_s-city-mix-tee_05.png', '0'),
(24, '3', 'sanctuary-clothing-women_s-city-mix-tee_05.png', '0'),
(25, '4', 'michael-stars-women_s-short-sleeve-off-shoulder-dolman-shirt_01.png', '1'),
(26, '4', 'michael-stars-women_s-short-sleeve-off-shoulder-dolman-shirt_02.png', '0'),
(27, '4', 'michael-stars-women_s-short-sleeve-off-shoulder-dolman-shirt_03.png', '0'),
(28, '4', 'michael-stars-women_s-short-sleeve-off-shoulder-dolman-shirt_04.png', '0'),
(29, '4', 'michael-stars-women_s-short-sleeve-off-shoulder-dolman-shirt_05.png', '0'),
(30, '4', 'michael-stars-women_s-short-sleeve-off-shoulder-dolman-shirt_06.png', '0'),
(31, '5', 'jack-wolfskin-men_s-gecko-fleece-pullover_01.png', '1'),
(32, '6', 'jack-and-jones-men_s-jjorclose-baseball-camp-jacket_01.png', '1'),
(33, '7', 'edc-by-esprit-women_s-crew-neck-short-sleeve-t-shirt_01.png', '1'),
(34, '7', 'edc-by-esprit-women_s-crew-neck-short-sleeve-t-shirt_02.png', '0'),
(35, '7', 'edc-by-esprit-women_s-crew-neck-short-sleeve-t-shirt_03.png', '0'),
(36, '7', 'edc-by-esprit-women_s-crew-neck-short-sleeve-t-shirt_04.png', '0'),
(37, '7', 'edc-by-esprit-women_s-crew-neck-short-sleeve-t-shirt_05.png', '0'),
(38, '7', 'edc-by-esprit-women_s-crew-neck-short-sleeve-t-shirt_06.png', '0'),
(39, '8', 'esprit-men_s-long-sleeve-jacket_01.png', '1'),
(40, '8', 'esprit-men_s-long-sleeve-jacket_02.png', '0'),
(41, '8', 'esprit-men_s-long-sleeve-jacket_03.png', '0'),
(42, '8', 'esprit-men_s-long-sleeve-jacket_04.png', '0'),
(43, '8', 'esprit-men_s-long-sleeve-jacket_05.png', '0'),
(44, '8', 'esprit-men_s-long-sleeve-jacket_06.png', '0'),
(47, '2', 'fashion-womens-boyfriend-jeans-free-suspenders-light-blue-denim-pants_03.png', '0'),
(48, '9', 'anne-klein-women_s-cap-sleeve-asymmetrical-neck-ruffle-dress_01.png', '1'),
(49, '9', 'anne-klein-women_s-cap-sleeve-asymmetrical-neck-ruffle-dress_02.png', '0'),
(50, '9', 'anne-klein-women_s-cap-sleeve-asymmetrical-neck-ruffle-dress_03.png', '0'),
(51, '9', 'anne-klein-women_s-cap-sleeve-asymmetrical-neck-ruffle-dress_04.png', '0'),
(52, '9', 'anne-klein-women_s-cap-sleeve-asymmetrical-neck-ruffle-dress_05.png', '0'),
(53, '9', 'anne-klein-women_s-cap-sleeve-asymmetrical-neck-ruffle-dress_06.png', '0'),
(54, '10', 'star-vixen-women_s-sleeveless-faux-wrap-dress_01.png', '1'),
(55, '10', 'star-vixen-women_s-sleeveless-faux-wrap-dress_02.png', '0'),
(56, '10', 'star-vixen-women_s-sleeveless-faux-wrap-dress_03.png', '0'),
(57, '10', 'star-vixen-women_s-sleeveless-faux-wrap-dress_04.png', '0'),
(58, '10', 'star-vixen-women_s-sleeveless-faux-wrap-dress_05.png', '0'),
(59, '10', 'star-vixen-women_s-sleeveless-faux-wrap-dress_06.png', '0'),
(60, '11', 'star-vixen-women_s-faux-wrap-dress_01.png', '1'),
(61, '11', 'star-vixen-women_s-faux-wrap-dress_02.png', '0'),
(62, '11', 'star-vixen-women_s-faux-wrap-dress_03.png', '0'),
(63, '11', 'star-vixen-women_s-faux-wrap-dress_04.png', '0'),
(64, '11', 'star-vixen-women_s-faux-wrap-dress_05.png', '0'),
(65, '11', 'star-vixen-women_s-faux-wrap-dress_06.png', '0'),
(66, '12', 'woman-cut-out-punk-novel-ripped-jeans-denim-jeggings-trousers-skinny_01.png', '1'),
(67, '12', 'woman-cut-out-punk-novel-ripped-jeans-denim-jeggings-trousers-skinny_02.png', '0'),
(68, '12', 'woman-cut-out-punk-novel-ripped-jeans-denim-jeggings-trousers-skinny_03.png', '0'),
(69, '12', 'woman-cut-out-punk-novel-ripped-jeans-denim-jeggings-trousers-skinny_04.png', '0'),
(70, '12', 'woman-cut-out-punk-novel-ripped-jeans-denim-jeggings-trousers-skinny_05.png', '0'),
(71, '12', 'woman-cut-out-punk-novel-ripped-jeans-denim-jeggings-trousers-skinny_06.png', '0'),
(72, '13', 'only-_-sons-men_s-long-sleeve-coat_01.png', '1'),
(73, '13', 'only-_-sons-men_s-long-sleeve-coat_02.png', '0'),
(74, '13', 'only-_-sons-men_s-long-sleeve-coat_03.png', '0'),
(75, '13', 'only-_-sons-men_s-long-sleeve-coat_04.png', '0'),
(76, '13', 'only-_-sons-men_s-long-sleeve-coat_05.png', '0'),
(77, '13', 'only-_-sons-men_s-long-sleeve-coat_06.png', '0'),
(78, '14', 'scotch-_-soda-men_s-long-sleeve-jacket_01.png', '1'),
(79, '14', 'scotch-_-soda-men_s-long-sleeve-jacket_02.png', '0'),
(80, '14', 'scotch-_-soda-men_s-long-sleeve-jacket_03.png', '0'),
(81, '14', 'scotch-_-soda-men_s-long-sleeve-jacket_04.png', '0'),
(82, '14', 'scotch-_-soda-men_s-long-sleeve-jacket_05.png', '0'),
(83, '14', 'scotch-_-soda-men_s-long-sleeve-jacket_06.png', '0'),
(84, '16', 'replay-women_s-vicki-straight-jeans_-blue-_blue-denim-10_-w25-l30-_manufacturer-size-25__01.png', '1'),
(85, '16', 'replay-women_s-vicki-straight-jeans_-blue-_blue-denim-10_-w25-l30-_manufacturer-size-25__02.png', '0'),
(86, '16', 'replay-women_s-vicki-straight-jeans_-blue-_blue-denim-10_-w25-l30-_manufacturer-size-25__03.png', '0'),
(87, '16', 'replay-women_s-vicki-straight-jeans_-blue-_blue-denim-10_-w25-l30-_manufacturer-size-25__04.png', '0'),
(88, '16', 'replay-women_s-vicki-straight-jeans_-blue-_blue-denim-10_-w25-l30-_manufacturer-size-25__05.png', '0'),
(89, '16', 'replay-women_s-vicki-straight-jeans_-blue-_blue-denim-10_-w25-l30-_manufacturer-size-25__06.png', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `Material`
--

CREATE TABLE `Material` (
  `id` int(11) NOT NULL,
  `material_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Material`
--

INSERT INTO `Material` (`id`, `material_name`) VALUES
(1, 'Wool'),
(2, 'Cotton'),
(3, 'Polyester'),
(4, 'Lycra'),
(5, 'Leather'),
(6, 'Jeans'),
(7, 'Flis'),
(8, 'Veelvet');

-- --------------------------------------------------------

--
-- Структура таблицы `ProductCat`
--

CREATE TABLE `ProductCat` (
  `id` int(11) NOT NULL,
  `id_cat` varchar(5) NOT NULL,
  `id_product` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ProductCat`
--

INSERT INTO `ProductCat` (`id`, `id_cat`, `id_product`) VALUES
(1, '1', '5'),
(2, '1', '6'),
(3, '1', '8'),
(4, '1', '13'),
(5, '1', '14'),
(6, '2', '1'),
(7, '2', '2'),
(8, '2', '3'),
(9, '2', '4'),
(10, '2', '7'),
(11, '2', '9'),
(12, '2', '10'),
(13, '2', '11'),
(14, '2', '12'),
(15, '2', '16'),
(16, '3', '1'),
(17, '3', '2'),
(18, '3', '3'),
(19, '3', '4'),
(20, '3', '5'),
(21, '3', '6'),
(22, '3', '7'),
(23, '3', '8'),
(24, '3', '9'),
(25, '3', '10'),
(26, '3', '11'),
(27, '3', '12'),
(28, '3', '13'),
(29, '3', '14'),
(30, '3', '16');

-- --------------------------------------------------------

--
-- Структура таблицы `ProductColor`
--

CREATE TABLE `ProductColor` (
  `id` int(11) NOT NULL,
  `id_product` varchar(10) NOT NULL,
  `id_color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ProductColor`
--

INSERT INTO `ProductColor` (`id`, `id_product`, `id_color`) VALUES
(1, '1', '2'),
(2, '1', '3'),
(3, '1', '12'),
(5, '2', '12'),
(6, '3', '2'),
(7, '3', '4'),
(8, '3', '5'),
(9, '4', '5'),
(10, '4', '9'),
(11, '4', '11'),
(12, '5', '12'),
(13, '6', '12'),
(14, '7', '12'),
(15, '8', '2'),
(16, '8', '7'),
(17, '8', '12'),
(18, '9', '1'),
(19, '9', '2'),
(20, '9', '12'),
(23, '10', '1'),
(24, '10', '5'),
(25, '10', '9'),
(26, '11', '1'),
(27, '11', '5'),
(28, '11', '13'),
(31, '12', '4'),
(32, '12', '5'),
(33, '12', '9'),
(34, '12', '11'),
(35, '13', '6'),
(36, '13', '10'),
(37, '14', '3'),
(38, '14', '6'),
(39, '16', '3');

-- --------------------------------------------------------

--
-- Структура таблицы `ProductSize`
--

CREATE TABLE `ProductSize` (
  `id` int(11) NOT NULL,
  `id_product` varchar(10) NOT NULL,
  `id_size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ProductSize`
--

INSERT INTO `ProductSize` (`id`, `id_product`, `id_size`) VALUES
(1, '1', '2'),
(2, '1', '5'),
(3, '1', '6'),
(4, '1', '7'),
(5, '2', '1'),
(6, '2', '2'),
(7, '2', '5'),
(8, '2', '7'),
(9, '3', '1'),
(10, '3', '5'),
(11, '3', '6'),
(12, '4', '1'),
(13, '4', '2'),
(14, '4', '6'),
(15, '4', '7'),
(16, '5', '2'),
(17, '5', '5'),
(18, '5', '6'),
(19, '6', '1'),
(20, '6', '2'),
(21, '7', '2'),
(22, '7', '5'),
(23, '', '7'),
(24, '8', '1'),
(25, '8', '2'),
(26, '8', '7'),
(27, '9', '5'),
(28, '9', '6'),
(29, '9', '7'),
(30, '10', '1'),
(31, '10', '5'),
(32, '10', '7'),
(33, '11', '1'),
(34, '11', '6'),
(35, '11', '7'),
(36, '12', '2'),
(37, '12', '5'),
(38, '12', '6'),
(39, '12', '7'),
(40, '13', '1'),
(41, '13', '2'),
(42, '13', '7'),
(43, '14', '2'),
(44, '14', '6'),
(45, '14', '7'),
(46, '16', '1'),
(47, '16', '2'),
(48, '16', '5'),
(49, '16', '6');

-- --------------------------------------------------------

--
-- Структура таблицы `Season`
--

CREATE TABLE `Season` (
  `id` int(11) NOT NULL,
  `season_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Season`
--

INSERT INTO `Season` (`id`, `season_name`) VALUES
(1, 'Spring'),
(2, 'Autumn'),
(3, 'Summer'),
(4, 'Winter');

-- --------------------------------------------------------

--
-- Структура таблицы `Size`
--

CREATE TABLE `Size` (
  `id` int(11) NOT NULL,
  `size_name` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Size`
--

INSERT INTO `Size` (`id`, `size_name`) VALUES
(1, 'XS'),
(2, 'S'),
(5, 'L'),
(6, 'XL'),
(7, 'M');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `hash` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `hash`) VALUES
(1, 'NastushaNik@gmail.com', '15031991', '');

-- --------------------------------------------------------

--
-- Структура таблицы `Year`
--

CREATE TABLE `Year` (
  `id` int(11) NOT NULL,
  `year_name` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Year`
--

INSERT INTO `Year` (`id`, `year_name`) VALUES
(1, 2014),
(2, 2015),
(3, 2016),
(4, 2017);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Cart`
--
ALTER TABLE `Cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Color`
--
ALTER TABLE `Color`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `F2Products`
--
ALTER TABLE `F2Products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Images`
--
ALTER TABLE `Images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Material`
--
ALTER TABLE `Material`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ProductCat`
--
ALTER TABLE `ProductCat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ProductColor`
--
ALTER TABLE `ProductColor`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ProductSize`
--
ALTER TABLE `ProductSize`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Season`
--
ALTER TABLE `Season`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Size`
--
ALTER TABLE `Size`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Year`
--
ALTER TABLE `Year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Cart`
--
ALTER TABLE `Cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT для таблицы `Categories`
--
ALTER TABLE `Categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `Color`
--
ALTER TABLE `Color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `F2Products`
--
ALTER TABLE `F2Products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `Images`
--
ALTER TABLE `Images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT для таблицы `Material`
--
ALTER TABLE `Material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `ProductCat`
--
ALTER TABLE `ProductCat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT для таблицы `ProductColor`
--
ALTER TABLE `ProductColor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT для таблицы `ProductSize`
--
ALTER TABLE `ProductSize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT для таблицы `Season`
--
ALTER TABLE `Season`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `Size`
--
ALTER TABLE `Size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `Year`
--
ALTER TABLE `Year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
