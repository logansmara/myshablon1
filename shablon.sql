-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 28 2021 г., 15:01
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shablon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `album`
--

CREATE TABLE `album` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `album`
--

INSERT INTO `album` (`id`, `name`, `link`) VALUES
(1, 'комната1', '1'),
(2, 'комната2', '2'),
(3, 'комната3', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `blogs`
--

CREATE TABLE `blogs` (
  `id` int(20) NOT NULL,
  `number` int(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(110) NOT NULL,
  `text` text NOT NULL,
  `url_video` varchar(100) DEFAULT NULL,
  `img_small` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `class` varchar(20) DEFAULT NULL,
  `login_author` varchar(50) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blogs`
--

INSERT INTO `blogs` (`id`, `number`, `title`, `description`, `text`, `url_video`, `img_small`, `category`, `class`, `login_author`, `data`) VALUES
(1, 1, 'В горнице моей светло #Ещё 10песен атомных городов В горнице моей светло #Ещё 10песен атомных городов', 'Музыка А. Морозов, слова Н.Рубцов<br>Есть песни, которые настолько любимы, узнаваемы и часто исполняемы, что с', 'Есть песни, которые настолько любимы, узнаваемы и часто исполняемы, что считаются \"народными\", хотя имеют, на самом деле, совершенно конкретных авторов и написаны не так давно. С гордостью представляем нашу версию одной из таких \"народных\" песен.', '-169460695&id=456239102&hash=7911ef04a919595e&hd=2', 'vgornitce1', 'video', NULL, 'login', '2020-10-21 10:37:34'),
(2, 2, 'Гортензии с жемчугом', 'Волшебный цвет у серебра добивается патинированием.', '<p>\r\nВолшебный цвет у серебра добивается патинированием. В этот раз, по-моему, особенно удачно. Есть маленькие крапинки. Как у настоящих осенних цветов.\r\n</p>\r\n<p>\r\nХимические реакции за 40 минут меняют серебро через оранжевый в фиолето-синий, а затем чёрный цвет. Сижу, затаив дыхание. И как вижу нужный цвет, вынимаю из состава и закрепляю лаком\r\n</p>', 'ksyusha-delaet/article?id=1', 'ksyusha-delaet1', 'article', NULL, 'login', '2020-10-28 10:29:08'),
(5, 5, 'Выпуск 3. Итальянская Самара.', 'Наш третий выпуск посвящён: впечатлениям о Самаре от итальянца, который более четверти века живет в нашем', 'Наш третий выпуск посвящён:\r\nвпечатлениям о Самаре от итальянца, который более четверти века живет в нашем городе,\r\nнепередаваемому очарованию Италии и ее гастрономическим изыскам, отведать которые можно в самой настоящей таверне,\r\nнезаметному дворику, с очень богатой историей, связанной с Жигулевским пивзаводом и его работниками.\r\n<br>\r\n<a href=\"https://vk.com/aleksandr_anastasia_androsovi\" target=\"_blank\" class=\"author1\">Александр-Анастасия Андросовы</a>', '208200373&id=456239053&hash=de7ae4a038f74d1b&hd=2', 'artblog3', 'video', NULL, 'aleksandr_anastasia_androsovi', '2020-11-09 14:03:48'),
(6, 6, 'Выпуск 4. Смотровая площадка и секретный бар.', 'Наш четвертый выпуск посвящён: необычному \"секретному\" заведению, которое сделает честь барной культуре Москвы', 'Наш четвертый выпуск посвящён:\r\nнеобычному \"секретному\" заведению, которое сделает честь барной культуре Москвы или Северной столицы,\r\nСамарскому железнодорожному вокзалу и его истории,\r\nсмотровой площадке с головокружительным видом на историческую часть Самары.\r\n<br>\r\n<a href=\"https://vk.com/aleksandr_anastasia_androsovi\" target=\"_blank\" class=\"author1\">Александр-Анастасия Андросовы</a>', '208200373&id=456239057&hash=a400988faac84bf5&hd=2', 'artblog4', 'video', NULL, 'aleksandr_anastasia_androsovi', '2020-11-09 14:18:49'),
(3, 3, 'АРТ Блог. Выпуск 1. Бабочки, слоны, кофейня 8 атомов и бариста Женя Ивахненко', 'В премьерном выпуске мы заглянем в элегантные парадные старых доходных домов Самары и в гости на чашечку кофе ', 'В премьерном выпуске мы заглянем в элегантные парадные старых доходных домов Самары и\r\nв гости на чашечку кофе в \"8 атомов углерода\" к Жене Ивахненко, и спросим у профессионального бариста с каким же кофе можно сравнить Самару?\r\n<br>\r\n<a href=\"https://vk.com/aleksandr_anastasia_androsovi\" target=\"_blank\" class=\"author1\">Александр-Анастасия Андросовы</a>', '208200373&id=456239045&hash=dc4d6e6288d82c31&hd=2', 'artblog1', 'video', '', 'aleksandr_anastasia_androsovi', '2020-11-09 12:35:12'),
(4, 4, 'АртБлог. Выпуск 2.', 'Наш второй выпуск посвящён: неприметным деталям здания Самарского Главпочтамта, стильной кофейне \"White cup\"', 'Наш второй выпуск посвящён:\r\nнеприметным деталям здания Самарского Главпочтамта, стильной кофейне \"White cup\" и её не менее стильному владельцу архитектору Дмитрию Храмову, градозащитнику Армену Арутюнову, у которого мы спросим, почему самарский модерн оказался в облаках.\r\n<br>\r\n<a href=\"https://vk.com/aleksandr_anastasia_androsovi\" target=\"_blank\" class=\"author1\">Александр-Анастасия Андросовы</a>', '208200373&id=456239051&hash=d65284914c34895a&hd=2', 'artblog2', 'video', NULL, 'aleksandr_anastasia_androsovi', '2020-11-09 13:47:59'),
(7, 7, 'Выпуск 5. Самарский Художественный музей и Дом с атлантами.', 'Наш пятый выпуск посвящён Самарскому Художественному музею, его богатейшей коллекции предметов искусств', 'Наш пятый выпуск посвящён Самарскому Художественному музею, его богатейшей коллекции предметов искусств и его неординарным основателям. На наши вопросы ответит очаровательная Алла Шахматова, вдохновитель современной выставочной жизни музея.\r\n<br>\r\n<a href=\"https://vk.com/aleksandr_anastasia_androsovi\" target=\"_blank\" class=\"author1\">Александр-Анастасия Андросовы</a>', '5Txbz7d3j1U', 'artblog5', 'video', 'youtube', 'aleksandr_anastasia_androsovi', '2020-11-09 17:12:50'),
(8, 8, 'Выпуск 6. Самарский Театр Оперы и Балета, встреча с примой театра Вероникой Земляковой.', 'Наш шестой выпуск посвящён Самарскому Театру Оперы и Балета.', 'Наш шестой выпуск посвящён Самарскому Театру Оперы и Балета.\r\n<br>\r\n<a href=\"https://vk.com/aleksandr_anastasia_androsovi\" target=\"_blank\" class=\"author1\">Александр-Анастасия Андросовы</a>', 'pLbpWAEe5F4', 'artblog6', 'video', 'youtube', 'aleksandr_anastasia_androsovi', '2020-11-09 17:21:59'),
(9, 9, 'Видеоурок мехенди 1.1: как сделать процедуру самостоятельно', 'Смотрите урок, и вы наконец увидите, как происходит настоящая процедура мехенди, как наносится паста хны', 'Смотрите урок, и вы наконец увидите, как происходит настоящая процедура мехенди, как наносится паста хны на кожу, заклеивается пластырем и как постепенно проявляется цвет.\r\n<br>\r\nВ результате просмотра вы сможете выполнить процедуру самостоятельно даже если никогда раньше этого не делали.\r\n<br>\r\n<a href=\"https://vk.com/mehendi_mariyaalf\" target=\"_blank\">Рисунки мехенди Самара | Обучение | Онлайн курсы</a>', '-56722802&id=456239022&hash=a8c0a9a30b1f2cf0&hd=2', 'mehendi1', 'video', NULL, 'mehendi_mariyaalf', '2020-11-10 08:31:52'),
(10, 10, 'Видеоурок 2: Рецепт, как замесить натуральную хну для мехенди', 'В этом втором видеоуроке из 12ти вы можете наконец наглядно увидеть, как выглядит «та самая» консистенция хны', 'В этом втором видеоуроке из 12ти вы можете наконец наглядно увидеть, как выглядит «та самая» консистенция хны, которая реально поднимает качество вашего рисования на новый уровень.\r\n<br>\r\nЗдесь мой личный проверенный рецепт с точными дозировками безо всяких «ложек с большими горками».\r\n<br>\r\nСмотрите урок, и я желаю вам прочувствовать, насколько изменятся ваши ощущения от пасты собственного замеса!\r\n<br>\r\n<a href=\"https://vk.com/mehendi_mariyaalf\" target=\"_blank\">Рисунки мехенди Самара | Обучение | Онлайн курсы</a>', '-56722802&id=456239022&hash=a8c0a9a30b1f2cf0&hd=2', 'mehendi2', 'video', NULL, 'mehendi_mariyaalf', '2020-11-10 08:41:32'),
(11, 11, 'Инкрустация платья LA (Vitral Medium)', 'Меня зовут ЕЛЕНА. Я занимаюсь созданием ЭКСКЛЮЗИВНЫХ картин из страз, ИНКРУСТАЦИЕЙ СТРАЗАМИ техники', 'Меня зовут ЕЛЕНА. Я занимаюсь созданием ЭКСКЛЮЗИВНЫХ картин из страз, ИНКРУСТАЦИЕЙ СТРАЗАМИ техники, электроники, авто, предметов интерьера, одежды и обуви, аксессуаров и предметов ухода за животными и многого другого.\r\n<br>\r\nВ мастерской инкрустации любая ваша вещь превратится в авторскую, любая ваша задумка найдет воплощение в неординарном и престижном подарке, будь то картина, пальто или чайный сервиз. Любой заказ исполняется в соответствии с вашими идеями, пожеланиями, ощущениями и ожиданиями. Такого не будет больше НИ У КОГО!\r\n<br>\r\n<a href=\"https://vk.com/club_strazzziki\" target=\"_blank\">Мастерская инкрустации Елены Ергиной</a>', '153288991&id=456239241&hash=16ce0af3aa21ff58&hd=2', 'inkrust1', 'video', NULL, 'club_strazzziki', '2020-11-10 09:05:45'),
(12, 12, 'Мастерская \"Чердак Чудака\"', 'Мы - Аня и Настя. Делаем ночники для мечтателей больших и маленьких! Это многослойные светильники-ночники', 'Мы - Аня и Настя.\r\nДелаем ночники для мечтателей больших и маленьких!\r\nЭто многослойные светильники-ночники из фанеры, которые создаём вручную. Всё , начиная от идеи и заканчивая техническим воплощением, полностью продумываем сами.\r\nКаждый светляк - это маленький мир, который позволяет отвлечься от повседневной суеты. Он легко впишется в пространство дома, став его частью.\r\n<br>\r\n<a href=\"https://vk.com/cherdak_chudaka\" target=\"_blank\">Чердак Чудака |Мастерская атмосферного освещения</a>', '-116164333&id=456239048&hash=aadc97559062958f&hd=2', 'cherdak1', 'video', NULL, 'cherdak_chudaka', '2020-11-10 09:51:35'),
(13, 13, 'Русская Слобода', 'Нестандартный досуг для всей семьи! Конные прогулки, фотосессии детские праздники, квесты, музей старины.', 'Нестандартный досуг для всей семьи!<br>\r\n✔Конные прогулки, ✔фотосессии<br>\r\n✔Детские праздники, квесты,<br>\r\n✔Музей старины,<br>\r\n✔мастер-классы в настоящей кузнице,<br>\r\nПриезжайте в гости!<br>\r\n<br>\r\n<a href=\"https://vk.com/russkaya_sloboda\" target=\"_blank\">Русская слобода/Конные прогулки/Экскурсии/Самара</a>', '9850860&id=456239146&hash=90c62dfcfdd08855&hd=2', 'sloboda1', 'video', NULL, 'russkaya_sloboda', '2020-11-10 12:17:09'),
(14, 14, 'Губернское телевидение о Русской Слободе', 'Нестандартный досуг для всей семьи! Конные прогулки, фотосессии детские праздники, квесты, музей старины.', 'Нестандартный досуг для всей семьи!<br>\r\n✔Конные прогулки, ✔фотосессии<br>\r\n✔Детские праздники, квесты,<br>\r\n✔Музей старины,<br>\r\n✔мастер-классы в настоящей кузнице,<br>\r\nПриезжайте в гости!<br>\r\n<br>\r\n<a href=\"https://vk.com/russkaya_sloboda\" target=\"_blank\">Русская слобода/Конные прогулки/Экскурсии/Самара</a>', '-7096268&id=164266205&hash=782f7f13e868f992&hd=2', 'sloboda2', 'video', NULL, 'russkaya_sloboda', '2020-11-10 12:33:09'),
(15, 15, 'Каякер Самара- Спринты на Маяковском', '6й год для вас, друзья, открыт прокат двухместных скоростных каяков \"Аделаида\" и \"Афалина\" одноместных морских', '6й год для вас, друзья, открыт прокат двухместных скоростных каяков \"Аделаида\" и \"Афалина\" одноместных морских каяков \"Кортик\" и других из стекла и полиэтилена\r\nАдрес проката - ЛЕНИНГРАДСКИЙ СПУСК, ПЛЯЖ, спортплощадка.\r\n<br>\r\n<a href=\"https://vk.com/kayak_tur\" target=\"_blank\">Прокат каяков, обучение гребле, водные походы</a>', '13207252&id=456241877&hash=8d23f69288db6a30&hd=2', 'kayak1', 'video', NULL, 'kayak_tur', '2020-11-10 12:53:34'),
(16, 16, 'Сезонный водопад у Винновки вместе с Alicee tour', 'Сходили на один из двух сезонных водопадов у Винновки. Водопад наполняется талой водой и активен только весной', 'Сходили на один из двух сезонных водопадов у Винновки. Водопад наполняется талой водой и активен только весной. Всего их два, 7 м высотой и 3 м. На видео семиметровый.\r\n<br>\r\n<a href=\"https://vk.com/alicee_tour\" target=\"_blank\">Alicee tour авторские походы, туры, экскурсии</a>', '964vtVlutAI', 'alicetur1', 'video', 'youtube', 'alicee_tour', '2020-11-10 14:27:50'),
(17, 17, 'Фотоальбом для мальчика', 'Тематические фотоальбомы: свадебные, первый годик малыша, семейные, детские, альбомы о путешествии, открытки, ', 'Тематические фотоальбомы: свадебные, первый годик малыша, семейные, детские, альбомы о путешествии, открытки, блокноты, мамины сокровища\r\n<br>\r\n<a href=\"https://vk.com/juliasscrap\" target=\"_blank\">Скрапбукинг|Фотоальбомы|Открытки|Самара</a>', '-148924712&id=456239052&hash=7fe9e32423165ce5&hd=2', 'scrapbuking1', 'video', NULL, 'juliasscrap', '2020-11-10 14:54:50'),
(18, 18, 'Про урбеч', 'Урбеч - это 100% натуральная паста, которую получают по традиционной технологии путем перетирания между каменн', 'Урбеч - это 100% натуральная паста, которую получают по традиционной технологии путем перетирания между каменными жерновами сырых семян или орехов до состояния выделения масляной основы. Это народное дагестанское блюдо, суперфуд и очень полезное лакомство!\r\nБлагодаря тому, что продукция \"Живой продукт\" не подвергается термической обработке выше 40 градусов, в ней полностью сохранены натуральная польза и энергия живого семени!\r\n<br>\r\n<a href=\"https://vk.com/slastyclub\" target=\"_blank\">Урбеч, сухофрукты, орехи | Сласти от Настасьи</a>', '-64917051&id=456239021&hash=272aa61170fea04e&hd=2', 'urbech1', 'video', NULL, 'slastyclub', '2020-11-12 11:55:26'),
(19, 19, 'Деревянные игрушки', 'Деревянные игрушки делаем своими руками с теплом и любовью.', 'Деревянные игрушки делаем своими руками с теплом и любовью.\r\n<br>\r\nСемейная мастерская \"Евуша\"\r\n\r\n\r\n', '-164779091&id=456239022&hash=89d632c052cb4e3b&hd=2', 'wood1', 'video', NULL, 'wood_toys_evusha', '2020-11-12 12:14:31'),
(49, 20, 'Трайбл, телесные практики ONLINE. Анна Акинцева.', 'Трайбл — современный стиль танца, основанный на сочетании элементов фольклорных танцев Северной Африки', 'Трайбл  — современный стиль танца, основанный на сочетании элементов фольклорных танцев Северной Африки, Ближнего Востока, Индии и фламенко. На сегодняшний день выделяют три основных направления стиля трайбла: ATS (American Tribal Style), Tribal Fusion, Improvisational Tribal Style (ITS).', '83064846&id=456239784&hash=f105c80cbe614118', 'tribal_samara1', 'video', NULL, 'tribal_samara', '2020-11-17 15:53:37');

-- --------------------------------------------------------

--
-- Структура таблицы `carousel`
--

CREATE TABLE `carousel` (
  `id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `carousel`
--

INSERT INTO `carousel` (`id`, `image`) VALUES
(1, '1.png'),
(2, '2.png'),
(3, '3.png'),
(4, '4.png'),
(5, '5.png'),
(6, '6.png'),
(7, '7.png'),
(8, '8.png');

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `cookie_name` varchar(200) NOT NULL,
  `product_id` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `cookie_name`, `product_id`, `quantity`, `date`) VALUES
(146, '1569486367', '77', 2, '2019-09-26 11:26:44'),
(145, '1569485273', '81', 1, '2019-09-26 11:08:10'),
(144, '1569485218', '77', 3, '2019-09-26 11:07:22');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `keywords`, `description`) VALUES
(3, 0, 'WOMENS', NULL, NULL),
(4, 0, 'KIDS', 'dddd', 'fffff'),
(5, 0, 'FASHION', NULL, NULL),
(6, 0, 'HOUSEHOLDS1', '', ''),
(20, 0, 'MENS', '', ''),
(8, 3, 'CLOTHING', NULL, NULL),
(9, 21, 'BAGS', 'ключевые слова', 'ключевые слова'),
(21, 3, 'Womens 20', NULL, NULL),
(22, 0, 'Qwerty 1', NULL, NULL),
(23, 0, 'Qwerty 2', NULL, NULL),
(24, 0, 'Qwerty 3', NULL, NULL),
(25, 0, 'Qwerty 4', NULL, NULL),
(26, 0, 'Qwerty 5', NULL, NULL),
(27, 0, 'Qwerty 6', NULL, NULL),
(28, 0, 'Qwerty 7', NULL, NULL),
(29, 0, 'Qwerty 8', NULL, NULL),
(30, 0, 'Qwerty 9', NULL, NULL),
(31, 0, 'Qwerty 10', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `jui`
--

CREATE TABLE `jui` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `jui`
--

INSERT INTO `jui` (`id`, `title`, `data`) VALUES
(10, 'aaaa1', 'Янв 2, 2019'),
(11, 'aaaa12', 'Янв 2, 2019');

-- --------------------------------------------------------

--
-- Структура таблицы `juislider`
--

CREATE TABLE `juislider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slider` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `juislider`
--

INSERT INTO `juislider` (`id`, `name`, `slider`) VALUES
(1, 'one1', 3),
(2, 'one2', 5),
(3, 'one3', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1546673609),
('m190105_073159_updateall', 1546673611),
('m190105_104059_jui', 1546685021),
('m190107_141249_slider', 1546870533);

-- --------------------------------------------------------

--
-- Структура таблицы `move`
--

CREATE TABLE `move` (
  `id` int(10) NOT NULL,
  `color` varchar(20) NOT NULL,
  `pagex` int(10) NOT NULL,
  `pagey` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `move`
--

INSERT INTO `move` (`id`, `color`, `pagex`, `pagey`) VALUES
(1, 'white', 403, 455),
(2, 'white', 304, 455),
(3, 'white', 205, 455),
(4, 'white', 106, 455),
(5, 'white', 256, 403),
(6, 'white', 157, 403),
(7, 'white', 454, 403),
(8, 'white', 354, 403),
(9, 'white', 106, 354),
(10, 'white', 205, 354),
(11, 'white', 401, 354),
(12, 'white', 304, 354),
(13, 'red', 353, 204),
(14, 'red', 457, 204),
(15, 'red', 155, 204),
(16, 'red', 258, 204),
(17, 'red', 405, 155),
(18, 'red', 303, 155),
(19, 'red', 205, 155),
(20, 'red', 105, 155),
(21, 'red', 455, 105),
(22, 'red', 355, 105),
(23, 'red', 255, 105),
(24, 'red', 155, 105);

-- --------------------------------------------------------

--
-- Структура таблицы `move1`
--

CREATE TABLE `move1` (
  `id` int(10) NOT NULL,
  `color` varchar(20) NOT NULL,
  `pagex` int(10) NOT NULL,
  `pagey` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `move1`
--

INSERT INTO `move1` (`id`, `color`, `pagex`, `pagey`) VALUES
(1, 'white', 302, 354),
(2, 'white', 205, 354),
(3, 'white', 105, 354),
(4, 'white', 5, 354),
(5, 'white', 355, 304),
(6, 'white', 255, 304),
(7, 'white', 155, 304),
(8, 'white', 55, 304),
(9, 'white', 302, 254),
(10, 'white', 205, 254),
(11, 'white', 105, 254),
(12, 'white', 5, 254),
(13, 'red', 353, 104),
(14, 'red', 253, 104),
(15, 'red', 155, 104),
(16, 'red', 55, 104),
(17, 'red', 302, 54),
(18, 'red', 204, 54),
(19, 'red', 104, 54),
(20, 'red', 4, 54),
(21, 'red', 353, 4),
(22, 'red', 253, 4),
(23, 'red', 154, 4),
(24, 'red', 55, 4),
(25, 'white', 3, 267),
(26, 'white', 79, 267),
(27, 'white', 153, 267),
(28, 'white', 227, 267),
(29, 'white', 41, 229),
(30, 'white', 115, 229),
(31, 'white', 190, 229),
(32, 'white', 267, 229),
(33, 'white', 3, 191),
(34, 'white', 79, 191),
(35, 'white', 153, 191),
(36, 'white', 227, 191),
(37, 'red', 41, 79),
(38, 'red', 117, 79),
(39, 'red', 191, 79),
(40, 'red', 265, 79),
(41, 'red', 3, 41),
(42, 'red', 79, 41),
(43, 'red', 153, 41),
(44, 'red', 227, 41),
(45, 'red', 41, 3),
(46, 'red', 115, 3),
(47, 'red', 179, 3),
(48, 'red', 265, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `parents`
--

CREATE TABLE `parents` (
  `id` int(10) NOT NULL,
  `image` varchar(12) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `preview` varchar(250) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `parents`
--

INSERT INTO `parents` (`id`, `image`, `name`, `preview`, `text`) VALUES
(3, 'ng1', 'qwerty', 'qwerty', 'qwerty');

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `id` int(255) NOT NULL,
  `album_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `album_id`, `name`, `link`) VALUES
(1, 1, 'komnata', '1'),
(2, 1, 'la', '1'),
(3, 1, 'ww', '1'),
(4, 1, 'proba1', '1'),
(5, 1, 'qqq', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `title`, `content`) VALUES
(1, 'title12345', 'content1'),
(2, 'title222', 'content2'),
(3, 'title3', 'content34'),
(4, 'title444577', 'content4'),
(5, 'qwerty1', 'Presli123'),
(6, 'qwerty2', 'Presli123'),
(7, 'qwerty3', 'Presli1234567'),
(8, 'первая строка1333', 'Presli123333'),
(9, 'title3', 'fff'),
(10, 'первая строка1555', 'erty456777'),
(11, 'zzzzz', 'zzzzz'),
(12, 'аа', 'пп');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `price` float NOT NULL DEFAULT 0,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT 'no-image',
  `hit` enum('0','1','','') NOT NULL DEFAULT '0',
  `new` enum('0','1','','') NOT NULL DEFAULT '0',
  `sale` enum('0','1','','') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `content`, `price`, `keywords`, `description`, `img`, `hit`, `new`, `sale`) VALUES
(77, 3, 'qwerty2', '', 214, '', '', 'product2.jpg', '1', '0', '0'),
(78, 3, 'qwerty3', 'uoi;;', 32, '', '', 'product3.jpg', '1', '0', '0'),
(79, 3, 'раапр', 'апрар', 23, '', '', 'no-image.jpg', '0', '0', '0'),
(80, 3, 'апнн', '', 7, '', '', 'no-image.jpg', '0', '0', '0'),
(81, 4, 'aaaaa', 'aaaaa', 12, '', '', 'no-image.jpg', '0', '0', '0'),
(82, 3, 'yuyutyu', 'yutyutyu gyuytu fjty', 34, 'yyuyu', 'yuytu', 'no-image.jpg', '1', '0', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `product_cookie`
--

CREATE TABLE `product_cookie` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `price` float NOT NULL DEFAULT 0,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT 'no-image',
  `hit` enum('0','1','','') NOT NULL DEFAULT '0',
  `new` enum('0','1','','') NOT NULL DEFAULT '0',
  `sale` enum('0','1','','') NOT NULL DEFAULT '0',
  `cookie_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_cookie`
--

INSERT INTO `product_cookie` (`id`, `category_id`, `name`, `content`, `price`, `keywords`, `description`, `img`, `hit`, `new`, `sale`, `cookie_id`) VALUES
(77, 3, 'qwerty2', '', 214, '', '', 'product2.jpg', '1', '0', '0', 100001),
(78, 3, 'qwerty3', 'uoi;;', 32, '', '', 'product3.jpg', '1', '0', '0', 100002),
(79, 3, 'раапр', 'апрар', 23, '', '', 'no-image.jpg', '0', '0', '0', 100003),
(80, 3, 'апнн', '', 7, '', '', 'no-image.jpg', '0', '0', '0', 100004),
(81, 4, 'aaaaa', 'aaaaa', 12, '', '', 'no-image.jpg', '0', '0', '0', 100005),
(82, 3, 'yuyutyu', 'yutyutyu gyuytu fjty', 34, 'yyuyu', 'yuytu', 'no-image.jpg', '1', '0', '0', 100006);

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(3, '1.jpg'),
(2, '2.jpg'),
(4, '3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `str_replace`
--

CREATE TABLE `str_replace` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `str_replace`
--

INSERT INTO `str_replace` (`id`, `title`, `content`) VALUES
(13, 'str-replace проба', 'Первая строка\r\nВторая строка\r\nТретья строка');

-- --------------------------------------------------------

--
-- Структура таблицы `text`
--

CREATE TABLE `text` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `text`
--

INSERT INTO `text` (`id`, `text`) VALUES
(1, 'qwerty1\r\nqwerty2\r\nqwerty3\r\nqwerty4'),
(2, 'qw1\r\nqw2\r\nqw3');

-- --------------------------------------------------------

--
-- Структура таблицы `time`
--

CREATE TABLE `time` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `time`
--

INSERT INTO `time` (`id`, `name`, `time`) VALUES
(2, 'qwerty', '2019-02-19 21:31:13');

-- --------------------------------------------------------

--
-- Структура таблицы `updateall`
--

CREATE TABLE `updateall` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `updateall`
--

INSERT INTO `updateall` (`id`, `title`, `status`) VALUES
(1, 'qw1', 1),
(2, 'qw2', 1),
(3, 'qw3', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `n1` int(10) DEFAULT NULL,
  `n2` int(10) DEFAULT NULL,
  `n3` int(10) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `address`, `telephon`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `n1`, `n2`, `n3`) VALUES
(3, 'admin1', 'Майская, 3', '5676565', 'XzO5ffzIzKGkURs4nBxO9rwm8POW9jcD', '$2y$13$BbFlyn0BOw3RDxs0.6sEmO1RgesXDSQQX1YYYgJcP/Qn8KTq5f8C6', NULL, 'samara-dialod@yandex.ru', 10, 1513769640, 1603653059, NULL, NULL, 5),
(8, 'redactor1', '', '', 'ThU65Scc7fdYHklmcHGJ1GgYufAN9jpd', '$2y$13$ibJeDJCFSPMyotoIKyAire4Tt1w0WSavkAHsZxl6f5R9ZyZC9EoMG', NULL, '', 10, 0, 1582359674, NULL, NULL, 5),
(10, 'nikodim', 'московская 5-6', '2345', '4DA5y_fy79qqF5tvzXwStFil1ZmDOoHI', '$2y$13$IhmqCEsUzFiKcgucdOGOOOW5Z1iJ/1CqiI88mzU.wbRu0vYdk4iA.', NULL, 'qw@erty.ru', 10, 1549210318, 1549210386, NULL, NULL, 5),
(11, 'Гена', 'Кромская, 4-40', '322233', 'RyydsnZqI2hyAC9HBeuyIQjaXtWz6AXY', '$2y$13$K4QOysVZPJuDM1Np88bcgesT1fZugri6CAcJIMfr8hJBsaUzd05Py', NULL, 'gena@mail.ru', 10, 1569753044, 1569753556, NULL, NULL, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `number` (`number`);

--
-- Индексы таблицы `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `jui`
--
ALTER TABLE `jui`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `juislider`
--
ALTER TABLE `juislider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `move`
--
ALTER TABLE `move`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `move1`
--
ALTER TABLE `move1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_cookie`
--
ALTER TABLE `product_cookie`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `str_replace`
--
ALTER TABLE `str_replace`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `updateall`
--
ALTER TABLE `updateall`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `album`
--
ALTER TABLE `album`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT для таблицы `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `jui`
--
ALTER TABLE `jui`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `juislider`
--
ALTER TABLE `juislider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `move`
--
ALTER TABLE `move`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;

--
-- AUTO_INCREMENT для таблицы `move1`
--
ALTER TABLE `move1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1114;

--
-- AUTO_INCREMENT для таблицы `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT для таблицы `product_cookie`
--
ALTER TABLE `product_cookie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `str_replace`
--
ALTER TABLE `str_replace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `text`
--
ALTER TABLE `text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `time`
--
ALTER TABLE `time`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `updateall`
--
ALTER TABLE `updateall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
