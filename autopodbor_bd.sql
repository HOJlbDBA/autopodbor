-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 28 2024 г., 19:20
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `autopodbor_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `automobiles`
--

CREATE TABLE `automobiles` (
  `id` int(11) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_peredacha` int(11) NOT NULL,
  `id_years` int(11) NOT NULL,
  `id_dvigatel` int(11) NOT NULL,
  `id_power` int(11) NOT NULL,
  `id_privod` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `id_probeg` int(11) NOT NULL,
  `id_storona_rulya` int(11) NOT NULL,
  `id_pokolenie` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `popular` int(1) NOT NULL,
  `per` varchar(50) NOT NULL,
  `ye` varchar(50) NOT NULL,
  `dv` varchar(50) NOT NULL,
  `pow` varchar(50) NOT NULL,
  `priv` varchar(50) NOT NULL,
  `co` varchar(50) NOT NULL,
  `pro` varchar(50) NOT NULL,
  `ru` varchar(50) NOT NULL,
  `pok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `automobiles`
--

INSERT INTO `automobiles` (`id`, `contact_email`, `name`, `id_peredacha`, `id_years`, `id_dvigatel`, `id_power`, `id_privod`, `id_color`, `id_probeg`, `id_storona_rulya`, `id_pokolenie`, `price`, `popular`, `per`, `ye`, `dv`, `pow`, `priv`, `co`, `pro`, `ru`, `pok`) VALUES
(1, 'Person1@mail.ru', 'Kaiyi E5', 2, 9, 1, 2, 1, 5, 1, 1, 1, 1500000, 1, 'Вариатор', '2023', 'бензин, 1.5л', '147', 'Передний', 'Желтый', 'Новый автомобиль', 'Левый', '1'),
(2, 'Person2@mail.ru', 'BMW X4', 1, 5, 2, 9, 2, 2, 5, 1, 2, 5000000, 1, 'АКПП', '2019', 'бензин, 3.0л', '480', '4WD', 'Черный', '32000 км', 'Левый', '2'),
(3, 'Person3@mail.ru', 'BMW X7', 1, 8, 3, 8, 2, 3, 1, 1, 1, 16000000, 1, 'АКПП', '2022', 'дизель, 3.0л', '340', '4WD', 'Синий', 'Новый автомобиль', 'Левый', '1'),
(4, 'Person4@mail.ru', 'Hyundai Sonata', 1, 9, 4, 3, 1, 4, 2, 1, 5, 3000000, 1, 'АКПП', '2023', 'бензин, 2.0л', '150', 'Передний', 'Красный', '16 км', 'Левый', '8'),
(5, 'Person5@mail.ru', 'Mercedes-Benz GLE', 1, 3, 3, 7, 2, 1, 7, 1, 1, 2799000, 1, 'АКПП', '2015', 'дизель, 3.0л', '249', '4WD', 'Белый', '121379 км', 'Левый', '1'),
(6, 'Person6@mail.ru', 'Volkswagen Caravelle', 3, 2, 5, 1, 1, 2, 8, 1, 4, 1799000, 1, 'Робот', '2013', 'дизель, 2.0л', '140', 'Передний', 'Черный', '156834 км', 'Левый', '5'),
(7, 'Person7@mail.ru', 'Honda Accord', 2, 6, 1, 5, 1, 1, 3, 1, 6, 2200000, 1, 'Вариатор', '2020', 'бензин, 1.5л', '192', 'Передний', 'Белый', '13400 км', 'Левый', '10'),
(8, 'Person8@mail.ru', 'Kia Carnival', 1, 7, 6, 6, 1, 2, 4, 1, 3, 4000000, 1, 'АКПП', '2021', 'бензин, 2.2л', '199', 'Передний', 'Черный', '17994 км', 'Левый', '4'),
(9, 'Person9@mail.ru', 'Toyota Land Cruiser Prado', 1, 4, 7, 4, 2, 1, 6, 2, 3, 4300000, 1, 'АКПП', '2018', 'бензин, 2.7л', '163', '4WD', 'Белый', '57000 км', 'Правый', '4'),
(10, 'Person10@mail.ru', 'Toyota RAV4', 1, 1, 4, 2, 2, 3, 9, 1, 2, 600000, 1, 'АКПП', '2002', 'бензин, 2.0л', '147', '4WD', 'Синий', '194000 км', 'Левый', '2');

-- --------------------------------------------------------

--
-- Структура таблицы `buy_list`
--

CREATE TABLE `buy_list` (
  `id` int(11) NOT NULL,
  `id_automobile` int(11) NOT NULL,
  `id_user_reg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `color`
--

INSERT INTO `color` (`id`, `type`) VALUES
(1, 'Белый'),
(2, 'Черный'),
(3, 'Синий'),
(4, 'Красный'),
(5, 'Желтый');

-- --------------------------------------------------------

--
-- Структура таблицы `dvigatel`
--

CREATE TABLE `dvigatel` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `dvigatel`
--

INSERT INTO `dvigatel` (`id`, `type`) VALUES
(1, 'бензин, 1.5л'),
(2, 'бензин, 3.0л'),
(3, 'дизель, 3.0л'),
(4, 'бензин, 2.0л'),
(5, 'дизель, 2.0л'),
(6, 'бензин, 2.2л'),
(7, 'бензин, 2.7л');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `short_descr` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `img`, `short_descr`, `description`) VALUES
(1, 'В Совфеде предложили увеличить сроки ремонта по ОСАГО', '1.jpg', 'Глава комитета Совфеда по экономической политике Андрей Кутепов направил на рассмотрение в правительство РФ...', '<p>Глава комитета Совфеда по экономической политике Андрей Кутепов направил на рассмотрение в правительство РФ два проекта с поправками в закон об ОСАГО. В первом предлагается увеличить предельный срок ремонта машины по «автогражданке» с 30 до 45 дней, во втором — сохранить существующий 30-дневный лимит, но не учитывать время доставки запчастей (которое тоже может растянуться на 30-45 дней). Страховщики поддержали обе идеи, заодно предложив разрешить применять б/у запчасти в сервисах, пишет «Коммерсантъ».</p>\n\n<p>Аргументация Кутепова такова — «в условиях санкционного давления дилеры, станции техобслуживания, страховые компании столкнулись с проблемой отсутствия запасных частей и разрыва логистических цепочек, обеспечивающих их своевременную поставку для ремонта транспортных средств. В силу того что в текущей ситуации соблюдение указанных сроков зачастую становится невозможным, страховщики вынуждены расторгать договоры со станциями технического обслуживания».</p>\n\n<p>По закону об ОСАГО, напомним, за каждый день ремонта сверху установленного срока страховщики платят страхователю неустойку в размере 0,5% от суммы страхового возмещения, компании затем взыскивают их с автосервисов.</p>\n\n<p>Российский союз автостраховщиков и Минфин РФ поддержали предложение Кутепова.</p>'),
(2, 'АВТОВАЗ избавился от недостроенного завода проекта Chevrolet Niva II', '2.jpg', 'АВТОВАЗ продал недостроенный завод по штамповке и сварке кузовов выходцам из группы...', '<p>АВТОВАЗ продал недостроенный завод по штамповке и сварке кузовов выходцам из группы компаний ЭФКО, сообщает «Интерфакс». Расположенное в Особой экономической зоне «Тольятти» предприятие называется JV Systems — его в 2013-2016 годах на собственные средства строило СП GM-AVTOVAZ под проект Chevrolet Niva II. С 2016-го строительство было остановлено на уровне 80%.</p>\n\n<p>После перехода СП в полную собственность АВТОВАЗа в конце 2019-го автогигант получил и завод «Джей Ви Системз». Сумма продажи его не раскрывается.</p>\n\n<p>Основной профиль деятельности ЭФКО — производство продуктов питания. Недавно холдинг также заявил о планах по выпуску беспилотных авиационных систем — их производство намерены разместить как раз в Тольятти.</p>\n\n<p>Напомним, Chevrolet Niva II представили в виде концепт-кара в 2014 году. Конструкция Niva II была создана по заказу «GM-АВТОВАЗ» итальянской фирмой Blue Engineering, при этом ее дизайн разработала шанхайская студия General Motors. Автомобиль имеет продольное расположение двигателя, постоянный полный привод, 5-ступенчатую МКП, понижающую передачу и блокировку межосевого дифференциала. Chevrolet Niva II планировали оснащать лицензионным мотором PSA Peugeot Citroen EC8 (1,8 л, 136 л.с.), выпуск которого также должен был начаться в Тольятти. Проект Niva II полностью закрыли еще в 2019 году, реализовывать его не планируется.</p>'),
(3, 'АВТОВАЗ реанимирует закрытое при Андерссоне производство', '3.jpg', 'АВТОВАЗ в ближайшее время реанимирует законсервированное с 2016 года...', '<p>АВТОВАЗ в ближайшее время реанимирует законсервированное с 2016 года Опытно-промышленное производство (ОПП). В его корпуса перенесут сборку полурамных грузовиков ВИС, об этом со ссылкой на свои источники в компании сообщило VK-сообщество «Нетипичный АВТОВАЗ».</p>\n\n<p>В настоящее время мощности дочернего предприятия «ВИС-Авто» располагаются в 16 км от основного производства АВТОВАЗа. У «ВИС-Авто» сейчас нет собственной покрасочной линии, поэтому заготовленные кузова с полурамами приходится везти на АВТОВАЗ, окрашивать их — и перевозить назад для конечной сборки в готовые автомобили. Странная логистика создает высокие накладные расходы.</p>\n\n<p>Расположение ОПП гораздо более выгодное — в непосредственной близости от головного завода ВАЗа.</p>\n\n<p>Со ссылкой на инсайдеров телеграм-канал «Автопоток» уточняет, что в корпусах ОПП у «ВИС-Авто» появится полный цикл технологии: сварка, окраска и сборка в одном месте. Сроки переноса производства грузовиков пока не определены — план находится на рассмотрении высшего руководства АВТОВАЗа.</p>\n\n<p>Продуктовая гамма ВИС в настоящее время включает полурамные грузовики ВИС-2346 (Нива) и ВИС-2349 (Гранта) и их модификации.</p>\n\n<p>Напомним, решение о заморозке ОПП на АВТОВАЗе приняли в конце 2015-го — его инициировал занимавший пост главы компании Бу Андерссон. Предпосылкой являлась убыточность площадки в то время.</p>\n\n<p>ОПП АВТОВАЗа выпускало автомобили в 1993-2015 годах, подразделение представляло собой автозавод полного цикла, в его состав входили цеха штамповки панелей, сварки и окраски кузовов, а также автосборочный конвейер.</p>\n\n<p>В ОПП АВТОВАЗа в разные годы выпускали удлиненные Нивы ВАЗ-2129 и ВАЗ-2131, минивэны ВАЗ-2120 Надежда, трехдверные хэтчбеки ВАЗ-21123 и Lada Priora Coupe, спортивные Lada Kalina Sport и некоторые другие модели.</p>\n\n<p>В 2022-м АВТОВАЗ искал покупателя на ОПП — желающих не нашлось.</p>'),
(4, 'Стало известно, когда АВТОВАЗ запустит сборку «китайцев» на бывшем заводе Nissan', '4.jpg', 'АВТОВАЗ перезапустит простаивающий с 2022 года автозавод Nissan Manufacturing Rus (NMR) в дни проведения...', '<p>АВТОВАЗ перезапустит простаивающий с 2022 года автозавод Nissan Manufacturing Rus (NMR) в дни проведения Петербургского международного экономического форума, то есть в период с 14 по 17 июня, об этом журналистам сообщил глава автогиганта Максим Соколов, передает ТАСС.</p>\r\n\r\n<p>«В скором времени, на ближайшем Петербургском международном экономическом форуме, на бывшем заводе Nissan, а теперь заводе \"Лада Санкт-Петербург\" будет осуществлен запуск конвейерной линии по сборке автомобилей нашего совместного с китайскими производителями концерна. Какого — скажу позже», — приводит слова Соколова информагентство.</p>\r\n\r\n<p>Предположительно, первым на конвейер петербургского автозавода встанет 4,6-метровый китайский кроссовер FAW Bestune T77, его будут делать под именем Lada X-Cross 5.</p>\r\n\r\n<p>Отличиями от исходника снаружи являются только эмблемы и шильдики. По технической части X-Cross будет полностью повторять «донора» — 1,5-литровый бензиновый мотор + 7-ступенчатый «робот» + передний привод. Однако мотор, скорее всего, дефорсируют с нынешних 160 л.с. до менее затратных с точки зрения налога 149 л.с.</p>'),
(5, 'Lexus анонсировал новую модель LBX', '5.jpg', 'Lexus анонсировал премьеру новой модели LBX — ее представят 5 июня на...', '<p>Lexus анонсировал премьеру новой модели LBX — ее представят 5 июня на специальном мероприятии в Милане (Италия). Это будет новый начальный автомобиль в продуктовой гамме бренда.</p>\r\n\r\n<p>Подробностей пока нет, но предполагается, что речь идет о Toyota Yaris Cross с измененным экстерьером и новыми внешними элементами кузова. Также у Lexus ожидается салон премиум-класса.</p>\r\n\r\n<p>Напомним, Toyota Yaris Cross выпускают с 2020 года, эта модель построена на единой платформе с хэтчбеками Ярис — TNGA-B, но имеет полностью оригинальный пятидверный кузов. Габаритная длина Яриса Кросс — 4180 мм, дорожный просвет — 170 мм.</p>\r\n\r\n<p>Кроссовер оснащается бензиновой или гибридной силовой установкой. В первом случае установлен 1,5-литровый агрегат мощностью 120 л.с., сочетающийся с бесступенчатым вариатором. Гибридный вариант предполагает сочетание 91-сильного бензинового ДВС объемом 1,5 л и электродвигателя отдачей 59 кВт (80 л.с.), совокупная характеристика — 116 л.с.</p>\r\n\r\n<p>Привод у Yaris Cross передний, но за доплату можно заказать систему E-Four, с которой устанавливается приводящий заднюю ось электромотор мощностью 5,3 л.с. и крутящим моментом 52 Нм. Он включается автоматически при распознавании плохого сцепления с дорогой — если она мокрая, заснеженная или покрыта песком. E-Four работает только при разгоне и на невысоких скоростях. В моноприводной версии задняя подвеска — полузависимая балка, у варианта 4x4 применена независимая многорычажная конструкция.</p>'),
(6, 'Шинный завод Continental AG в Калуге перешел россиянам', '6.jpg', 'Холдинг S8 Capital 22 мая завершил сделку по покупке российских активов немецкого производителя...', '<p>Холдинг S8 Capital 22 мая завершил сделку по покупке российских активов немецкого производителя покрышек и компонентов Continental AG. В их число входят завод по выпуску шин в Калуге и дистрибьюторская компания (ООО «Континентал Тайрс Рус» и ООО «Континентал Калуга»).</p>\r\n\r\n<p>Выпускаемые в Калуге шины в ближайшее время получат новую марку (не уточняют, какую).</p>\r\n\r\n<p>Стоимость сделки не разглашается.</p>\r\n\r\n<p>Предприятие в Калуге было открыто в 2013 году, инвесторам этот проект обошелся в 240 млн евро. В марте 2022-го объявили о приостановке производства, но вскоре работа была возобновлена для удовлетворения локального спроса. Мощность завода — 4 млн шин в год, на нем работают около 1100 сотрудников. Продукция поставлялась как автозаводам для первичной комплектации автомобилей, так и на рынок.</p>\r\n\r\n<p>Помимо шинного бизнеса у Continental в РФ есть заводы «Континентал аутомотив системс рус», производящие электронные автокомпоненты и элементы систем подачи и впрыска топлива, а также «Контитех», выпускающий трубопроводы для систем автомобильного кондиционирования и гидроусиления руля. Они в сделку не вошли.</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `otz`
--

CREATE TABLE `otz` (
  `id_otz` int(11) NOT NULL,
  `id_user_reg` int(11) NOT NULL,
  `nick` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `otz`
--

INSERT INTO `otz` (`id_otz`, `id_user_reg`, `nick`, `title`, `text`, `date`) VALUES
(10, 22, 'dedushka', 'Тема типа', 'Неплохо', '2023-05-23 15:44:12'),
(11, 22, 'Person1', 'Отличный сайт!!!', 'Супер!', '2023-05-23 15:55:12');

-- --------------------------------------------------------

--
-- Структура таблицы `peredacha`
--

CREATE TABLE `peredacha` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `peredacha`
--

INSERT INTO `peredacha` (`id`, `type`) VALUES
(1, 'АКПП'),
(2, 'Вариатор'),
(3, 'Робот');

-- --------------------------------------------------------

--
-- Структура таблицы `pokolenie`
--

CREATE TABLE `pokolenie` (
  `id` int(11) NOT NULL,
  `num` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `pokolenie`
--

INSERT INTO `pokolenie` (`id`, `num`) VALUES
(1, '1 поколение'),
(2, '2 поколение'),
(3, '4 поколение'),
(4, '5 поколение'),
(5, '8 поколение'),
(6, '10 поколение');

-- --------------------------------------------------------

--
-- Структура таблицы `power`
--

CREATE TABLE `power` (
  `id` int(11) NOT NULL,
  `power` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `power`
--

INSERT INTO `power` (`id`, `power`) VALUES
(1, '140 л.с.'),
(2, '147 л.с.'),
(3, '150 л.с.'),
(4, '163 л.с.'),
(5, '192 л.с.'),
(6, '199 л.с.'),
(7, '249 л.с.'),
(8, '340 л.с.'),
(9, '480 л.с.');

-- --------------------------------------------------------

--
-- Структура таблицы `privod`
--

CREATE TABLE `privod` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `privod`
--

INSERT INTO `privod` (`id`, `type`) VALUES
(1, 'Передний'),
(2, '4WD');

-- --------------------------------------------------------

--
-- Структура таблицы `probeg`
--

CREATE TABLE `probeg` (
  `id` int(11) NOT NULL,
  `kolvo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `probeg`
--

INSERT INTO `probeg` (`id`, `kolvo`) VALUES
(1, 'Новый автомобиль'),
(2, '16 км'),
(3, '13400 км'),
(4, '17994 км'),
(5, '32000 км'),
(6, '57000 км'),
(7, '121379 км'),
(8, '156834 км'),
(9, '194000 км');

-- --------------------------------------------------------

--
-- Структура таблицы `rule`
--

CREATE TABLE `rule` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `rule`
--

INSERT INTO `rule` (`id`, `type`) VALUES
(1, 'Левый'),
(2, 'Правый');

-- --------------------------------------------------------

--
-- Структура таблицы `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nick` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `user_reg`
--

INSERT INTO `user_reg` (`id`, `name`, `nick`, `login`, `password`, `email`, `phone`) VALUES
(22, 'Аникушкин Владислав Олегович', 'dedushka', 'HOJlbDBA', 'vvv', 'destruk03@bk.ru', '896716350000'),
(25, 'Аникушкин Владислав Олегович', 'Nickname', 'Nickname', 'vvv', 'destruk37561708@gmail.com', '89671635992');

-- --------------------------------------------------------

--
-- Структура таблицы `years`
--

CREATE TABLE `years` (
  `id` int(11) NOT NULL,
  `year` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `years`
--

INSERT INTO `years` (`id`, `year`) VALUES
(1, '2002'),
(2, '2013'),
(3, '2015'),
(4, '2018'),
(5, '2019'),
(6, '2020'),
(7, '2021'),
(8, '2022'),
(9, '2023');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `automobiles`
--
ALTER TABLE `automobiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_peredacha` (`id_peredacha`) USING BTREE,
  ADD KEY `id_years` (`id_years`,`id_dvigatel`,`id_power`,`id_privod`,`id_color`,`id_probeg`,`id_storona_rulya`,`id_pokolenie`),
  ADD KEY `id_power` (`id_power`),
  ADD KEY `id_privod` (`id_privod`),
  ADD KEY `id_color` (`id_color`),
  ADD KEY `id_probeg` (`id_probeg`),
  ADD KEY `id_storona_rulya` (`id_storona_rulya`),
  ADD KEY `id_pokolenie` (`id_pokolenie`),
  ADD KEY `automobiles_ibfk_1` (`id_dvigatel`);

--
-- Индексы таблицы `buy_list`
--
ALTER TABLE `buy_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_automobile` (`id_automobile`),
  ADD KEY `name_reg` (`id_user_reg`);

--
-- Индексы таблицы `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dvigatel`
--
ALTER TABLE `dvigatel`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `otz`
--
ALTER TABLE `otz`
  ADD PRIMARY KEY (`id_otz`),
  ADD KEY `id_user_reg` (`id_user_reg`);

--
-- Индексы таблицы `peredacha`
--
ALTER TABLE `peredacha`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pokolenie`
--
ALTER TABLE `pokolenie`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `power`
--
ALTER TABLE `power`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `privod`
--
ALTER TABLE `privod`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `probeg`
--
ALTER TABLE `probeg`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `automobiles`
--
ALTER TABLE `automobiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `buy_list`
--
ALTER TABLE `buy_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `dvigatel`
--
ALTER TABLE `dvigatel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `otz`
--
ALTER TABLE `otz`
  MODIFY `id_otz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `peredacha`
--
ALTER TABLE `peredacha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `pokolenie`
--
ALTER TABLE `pokolenie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `power`
--
ALTER TABLE `power`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `privod`
--
ALTER TABLE `privod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `probeg`
--
ALTER TABLE `probeg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `rule`
--
ALTER TABLE `rule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `years`
--
ALTER TABLE `years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `automobiles`
--
ALTER TABLE `automobiles`
  ADD CONSTRAINT `automobiles_ibfk_1` FOREIGN KEY (`id_dvigatel`) REFERENCES `dvigatel` (`id`),
  ADD CONSTRAINT `automobiles_ibfk_2` FOREIGN KEY (`id_years`) REFERENCES `years` (`id`),
  ADD CONSTRAINT `automobiles_ibfk_3` FOREIGN KEY (`id_power`) REFERENCES `power` (`id`),
  ADD CONSTRAINT `automobiles_ibfk_4` FOREIGN KEY (`id_privod`) REFERENCES `privod` (`id`),
  ADD CONSTRAINT `automobiles_ibfk_5` FOREIGN KEY (`id_color`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `automobiles_ibfk_6` FOREIGN KEY (`id_probeg`) REFERENCES `probeg` (`id`),
  ADD CONSTRAINT `automobiles_ibfk_7` FOREIGN KEY (`id_storona_rulya`) REFERENCES `rule` (`id`),
  ADD CONSTRAINT `automobiles_ibfk_8` FOREIGN KEY (`id_pokolenie`) REFERENCES `pokolenie` (`id`),
  ADD CONSTRAINT `automobiles_ibfk_9` FOREIGN KEY (`id_peredacha`) REFERENCES `peredacha` (`id`);

--
-- Ограничения внешнего ключа таблицы `buy_list`
--
ALTER TABLE `buy_list`
  ADD CONSTRAINT `buy_list_ibfk_1` FOREIGN KEY (`id_automobile`) REFERENCES `automobiles` (`id`),
  ADD CONSTRAINT `buy_list_ibfk_2` FOREIGN KEY (`id_user_reg`) REFERENCES `user_reg` (`id`);

--
-- Ограничения внешнего ключа таблицы `otz`
--
ALTER TABLE `otz`
  ADD CONSTRAINT `otz_ibfk_1` FOREIGN KEY (`id_user_reg`) REFERENCES `user_reg` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
