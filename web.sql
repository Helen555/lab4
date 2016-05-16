-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 16 2016 г., 05:09
-- Версия сервера: 5.5.49-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `web`
--
CREATE DATABASE IF NOT EXISTS `web` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `web`;

-- --------------------------------------------------------

--
-- Структура таблицы `acl_classes`
--

CREATE TABLE IF NOT EXISTS `acl_classes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_type` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_69DD750638A36066` (`class_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `acl_entries`
--

CREATE TABLE IF NOT EXISTS `acl_entries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_id` int(10) unsigned NOT NULL,
  `object_identity_id` int(10) unsigned DEFAULT NULL,
  `security_identity_id` int(10) unsigned NOT NULL,
  `field_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ace_order` smallint(5) unsigned NOT NULL,
  `mask` int(11) NOT NULL,
  `granting` tinyint(1) NOT NULL,
  `granting_strategy` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `audit_success` tinyint(1) NOT NULL,
  `audit_failure` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_46C8B806EA000B103D9AB4A64DEF17BCE4289BF4` (`class_id`,`object_identity_id`,`field_name`,`ace_order`),
  KEY `IDX_46C8B806EA000B103D9AB4A6DF9183C9` (`class_id`,`object_identity_id`,`security_identity_id`),
  KEY `IDX_46C8B806EA000B10` (`class_id`),
  KEY `IDX_46C8B8063D9AB4A6` (`object_identity_id`),
  KEY `IDX_46C8B806DF9183C9` (`security_identity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `acl_object_identities`
--

CREATE TABLE IF NOT EXISTS `acl_object_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_object_identity_id` int(10) unsigned DEFAULT NULL,
  `class_id` int(10) unsigned NOT NULL,
  `object_identifier` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `entries_inheriting` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9407E5494B12AD6EA000B10` (`object_identifier`,`class_id`),
  KEY `IDX_9407E54977FA751A` (`parent_object_identity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `acl_object_identity_ancestors`
--

CREATE TABLE IF NOT EXISTS `acl_object_identity_ancestors` (
  `object_identity_id` int(10) unsigned NOT NULL,
  `ancestor_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`object_identity_id`,`ancestor_id`),
  KEY `IDX_825DE2993D9AB4A6` (`object_identity_id`),
  KEY `IDX_825DE299C671CEA1` (`ancestor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `acl_security_identities`
--

CREATE TABLE IF NOT EXISTS `acl_security_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `identifier` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `username` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8835EE78772E836AF85E0677` (`identifier`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `fos_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_583D1F3E5E237E06` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `fos_user_user`
--

CREATE TABLE IF NOT EXISTS `fos_user_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `firstname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `biography` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `twitter_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `gplus_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `two_step_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C560D76192FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_C560D761A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `fos_user_user`
--

INSERT INTO `fos_user_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `created_at`, `updated_at`, `date_of_birth`, `firstname`, `lastname`, `website`, `biography`, `gender`, `locale`, `timezone`, `phone`, `facebook_uid`, `facebook_name`, `facebook_data`, `twitter_uid`, `twitter_name`, `twitter_data`, `gplus_uid`, `gplus_name`, `gplus_data`, `token`, `two_step_code`) VALUES
(1, 'admin', 'admin', 'admin@web.com', 'admin@web.com', 1, '5zhm5z7f9qo8w4sccs8ggocgs0cwwg4', 'CIDaeOgPgoSI4ANLYrfcvZTLxQbVWIsS0QRDtN+eBnxJ4pMFLbQnynIrvs9Xbkjhagk/W20nVo6b14yownHNAQ==', '2016-05-16 03:25:45', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, '2016-05-16 03:12:20', '2016-05-16 03:25:45', NULL, NULL, NULL, NULL, NULL, 'u', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL),
(2, 'user', 'user', 'user@web.com', 'user@web.com', 1, 'g4q4ee77468ks4wokwkc880k84c80gs', 'j8VGmB1mMrqUavy5AeMZs7OSxZqPsB0ssr238BmgH7CH/CURz2Ljok+Y3ayccMfn9/QodcHBwa5Vdf2ofA72cA==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, '2016-05-16 03:14:59', '2016-05-16 03:14:59', NULL, NULL, NULL, NULL, NULL, 'u', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `fos_user_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_B3C77447A76ED395` (`user_id`),
  KEY `IDX_B3C77447FE54D947` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `page`
--

INSERT INTO `page` (`id`, `url`, `name`, `content`) VALUES
(1, '/', 'Главная', '<h2> Кратко о сайте </h2>\n<p>У нас на сайте можно начитаться много интересного , но бывают моменты когда не хочется читать... Может просто не быть настроения, хотя его можно поднять почитав Анекдоты от Smiley или просто заглянув в категорию юмор ... \nНо нет, все равно не то ? Тогда можно долго угорать с прикольного видео ... Но бывает когда нужно убить намного больше время, и для этого я сделал на сайте категорию СУПЕР ИГРЫ где я публикую игры которые меня в какой то мере зацепили...\nЗима, зима, снега, снега…И очень-очень скучно. Так, стоп! А почему скучно? Да потому что просто нечем заняться. Всё надоело – и фотографии уже все пересмотрены по многу раз, и книжки все прочитаны, и новый номер «Космополитена» («Рыбалка») прочитан до дыр, и с подружками – друзьями всё уже обсуждено…\nЗнакомая ситуация? Думаю, да. Сегодня я попробую развеять вашу скуку и постараюсь ответить на главный вопрос – чем заняться, когда скучно.\nСкука присуща каждому человеку. Но очень часто скука сопровождается ленью. Можно сказать, что это 2 подружки, которые ходят, взявшись за руки. Большинство из нас свою скуку лечат Интернетом и тыканьем кнопок на клавиатуре. Но при этом никто и не думает о том, что это тыканье может приносить деньги. Поэтому я хочу вас познакомить с сайтом, который называется…нет, не Одноклассники. Сайт называется ТопАвтор. И при регистрации на сайте вопрос о том, чем можно заняться зимой,  когда скучно отпадёт сам собой.\nДля начала немного истории. Появился сайт  год назад 9 января,  после новогодних каникул. Я попала на него в марте и ни капельки не пожалела об этом. Что можно делать на этом сайте? Зарабатывать деньги написанием статей, общаться с другими авторами, задавать вопросы, создавать блоги. И, конечно же, читать умные и грамотные статьи от авторов сайта.</p>  '),
(2, '/cv', 'Резюме', '<div><h1>Немного о создателе</h1></div>\n        <img src="/img/Myfoto.jpg" width="250">\n        <div><h1> Резюме </h1></div>\n        <ol>\n            <li>ФИО: Пащенко Елена Юрьевна</li>\n            <li>Пол: Ж. </li>\n            <li>Возраст: 19 лет</li>\n            <li>Контакты: 099 717 98 21 </li>		\n            <li>Образование: Харьковский национальный университет им. С. Кузнеца, 3 курс (неполное высшее)</li>\n            <li>Знание языков:  		\n                <table>\n                    <tr >\n                        <td>Язык</td>\n                        <td>Навыки чтения</td>\n                        <td>Навыки письма</td>\n                        <td>Навыки разговора</td>\n                    </tr>\n                    <tr>\n                        <td>Русский</td>\n                        <td>Advanced </td>\n                        <td>Advanced </td>\n                        <td>Advanced </td>\n                    </tr>\n                    <tr>\n                        <td>Украинский</td>\n                        <td>Advanced </td>\n                        <td>Advanced </td>\n                        <td>Advanced </td>\n                    </tr>\n                    <tr>\n                        <td>Английский</td>\n                        <td>Intermediate</td>\n                        <td>Intermediate</td>\n                        <td> Pre - Intermediate</td>\n                    </tr>\n                    <tr>\n                        <td>Немецкий</td>\n                        <td>Intermediate</td>\n                        <td>Starter</td>\n                        <td>Starter</td>\n                    </tr>\n                </table>\n            </li>\n            <li>Профессиональные навыки: начальные навыки Java, C++, C#; знания Matlab, Photoshop ; навыки общения с людьми</li>\n            <li>Хобби:  Вышивание, прогулки, чтение, тренажорный зал</li>\n            <li>Семейное положение: Не замужем </li>\n        </ol>'),
(3, '/sport', 'Спорт', '<div><h1> Спорт </h1></div>\n        <div><h2> Польза от занятий спортом</h2></<div></div>\n            <img src="/img/s.jpg" width="250">\n            <p>Спорт — это один из самых лучших способов для сохранения физического и психического здоровье. Люди веками занимались и занимаются спортом, потому что осознали, огромную пользу спорта для организма.     </p>\n            <p> Существует множество преимуществ от занятий спортом. И вот некоторые из них, которые помогут Вам прибавит мотивации начать спортивные тренировки:</p>\n            <ul>\n                <li>Хорошее физическое здоровье. Занятие спортом требует непрерывной напряженной работы, что приводит в тонус организм и мышцы всего тела. Это также хороший способ укрепить сердечно-сосудистую систему во время работы на выносливость и силу. К тому же час тренировки можно сжечь от 250 до 650 калорий, в зависимости от интенсивности.</li>\n                <li>Хорошее физическое состояние. Большинство людей жалуются на не хватку времени для тренировок, из-за чего они постоянно прибавляют лишние килограммы. Однако всего 1 час в день занятия спортом позволят держать Вас с хорошей форме прилагая при этом немного усилий.</li>\n                <li>Помогает снятию стресса и успокоению беспокойного ума.</li>\n            </ul>  \n            <p>Благоприятно влияет на сон, так как во время занятия спортом человек затрачивает энергию в результате чего он будет лучше и крепче спать.</p>\n            <ul>\n                <li>Улучшает координацию движений и помогает лучше сосредотачиваться на определенных вещах.</li>\n                <li>Люди занимающиеся спортом более дисциплинированны.</li>\n            </ul>\n            <p>       Жизнь — как езда на велосипеде, чтобы сохранить равновесие, необходимо двигаться.</p>'),
(4, '/read', 'Чтение', '<div><h1> Чтение </h1></div>\n        <div><h2> Польза от чтения </h2></div>\n        <img src="/img/cat.jpg" width="250">\n        <p>Одним из самых важных коммуникативных каналов человека является речь. Основная масса людей любит общаться и чаще всего использует для этого звуковые формы (устную речь). Однако существует еще один вид коммуникации, не менее важный и ценный – письменная речь, которая представляет собой устную речь, запечатленную на носителе информации. До недавнего времени основным носителем была бумага – книги, газеты, журналы. Сегодня ассортимент расширился электронными носителями информации.  Чтение – это то же общение, только можно сказать через посредника (т.е. через носитель информации).  И если в пользе межличностного общения никто не сомневается, то очевидным фактом становится и польза чтения.</p>\n        <h5>Почему полезно читать? И какие носители предпочтительнее, бумажные или электронные? Попробуем ответить на эти вопросы.</h5>\n        <p>Польза чтения огромна, читая, человек познает для себя нечто новое, интересное (неинтересное и читать бы не стал), расширяет свой кругозор, обогащает лексикон. Чтение доставляет людям эстетическое удовлетворение, это, пожалуй, самый универсальный и простой способ развлечения, а также важнейшая часть культурного и духовного самосовершенствования.</p>\n        <p>Психологи утверждают, что чтение – неотъемлемый процесс на всех стадиях формирования личности. Начиная с детского возраста, когда ребенку читают вслух родители, заканчивая зрелым возрастом, когда человек переживает личностные кризисы и духовно растет. Неоценима польза чтения в подростковом возрасте. Читая, подростки не только развивают память, мышление и другие когнитивные процессы, они развивают и эмоционально волевую сферу, учатся любить, прощать, сопереживать, оценивать поступки, анализировать действия, прослеживать причинно-следственные связи между событиями. Поэтому совершенно очевидна польза книг, которые позволяют вырастить и воспитать целостную, гармоничную личность.</p>\n        <p>В процессе чтения у человека активно работает головной мозг, причем оба полушария, читая (работа левого полушария) человек постоянно рисует в своем воображении образы и картинки происходящего в сюжете (это уже работа правого полушария). Тем самым  человек доставляет себе не только удовольствие от чтения, но и тренирует, развивает способности мозга.</p>\n        <h5>Польза книг: бумага самый оптимальный носитель информации.</h5>\n        <p>Что касается носителей информации, то, несомненно, лучше всего читать бумажные издания – книги, газеты, журналы. Польза чтения книгЧеловеческий глаз  лучше воспринимает информацию, напечатанную на бумаге, чем ту, которая светится на мониторе компьютера или ноутбука.  Скорость чтения бумажного носителя более высокая и глаза не так быстро устают. Несмотря на такие веские физиологические причины, существует еще немало факторов, указывающих на пользу чтения печатных изданий. Особенно стоит сказать про книги.</p>\n        <p>Источник знаний, друг – как только не называют книги. Каждый знает, что лучший подарок – книга. Как правило, в книгах печатают серьезный, нужный и «умный» писательский труд. Прежде чем книга выйдет в свет, рукопись проверяют редакторы, специалисты пишут рецензии – все это минимизирует риск попадания «чуши и бреда» в книгооборот. Что же касается интернета, то здесь любой человек может выложить свой труд и свои мысли на просторы всемирной паутины. На адекватность и грамотность эти работы никто не проверяет, так что и пользы от них зачастую никакой. Книги, особенно классическая художественная литература, написаны красивым, интересным, грамотным и богатым языком, они несут в себе умные, нужные и созидающие мысли. Кроме того, книгу можно читать дома и на работе, в транспорте и на отдыхе, сидя, стоя, лежа (монитор компьютера с собой в кровать не возьмешь).</p>'),
(5, '/wolk', 'Прогулки', '<div><h1>Прогулки</h1></div>\n        <div><h2>Польза от прогулок на свежом отдыхе</h2></<div></div>\n            <img src="/img/2.jpg" width="300"> \n            <p>5 км – именно такое расстояние ежедневно должен проходить пешком каждый человек, уверены американские ученые. В первую очередь, на этом настаивают кардиологи. Ведь пешие прогулки – лучшая тренировка сердечной мышцы. Позволить себе такие упражнения могут люди любого возраста и любой комплекции.</p> \n            <p>5 км – часовая прогулка. Можно ходить пешком на работу, в институт, к друзьям, да и просто гулять. Ведь это, пожалуй, самая необременительная физическая нагрузка, не требующая ни финансовых затрат, ни особых навыков, ни специального инвентаря, ни подготовленного инструктора. Самостоятельно и ежедневно можно таким образом укреплять организм. В чем же заключается польза прогулок на свежем воздухе?</p>\n            <p>Сердце</p>\n            <p> При любой физической активности сердце начинает «наращивать обороты». Такая тренировка очень полезна для самой важной мышцы человека. Но при этом вряд ли получится при размеренном темпе слишком нагрузить сердце. Так что прогулки в этом отношении безопасны.\n                Дыхание. Кислород – вот главный плюс подобных променадов. Любые тренировки в спортзалах или дома, конечно, хороши, но свежий воздух на улице помогает организму насыщать клетки кислородом. Благодаря этому улучшается обмен веществ. Для такого времяпрепровождения придумали даже специальный термин – аэротерапия, то есть благотворное пребывание на свежем воздухе. Хорошо, если где-то поблизости есть парк с хвойными деревьями, которые выделяют полезные вещества</p>  \n            <p>Нервная система</p>\n            <p>Всем известно, как порой портит настроение длительная работа в офисе или несколько дней, проведенных исключительно дома. Выйти на улицу, пройтись любимым маршрутом по парку, остаться наедине со своими чувствами и мыслями – все это очень помогает в таких ситуациях. В любое время года можно наслаждаться красивыми пейзажами – нежной зеленью весны, буйством летних красок, благородным золотом осени или безмятежной белоснежностью зимы. Польза прогулок на свежем воздухе уже давно подтверждена психологами. Это, по их мнению, отличный вид антидепрессанта.</p>  \n            <p>Внешний вид.</p> \n            <p>Насыщенные кислородом клетки благотворно влияют на кровеносную систему. После прогулки появляется приятный легкий румянец, кожа выглядит более здоровой, а сам человек - отдохнувшим. Не стоит забывать и о том, что обмен веществ активизируется. Из организма выводятся благодаря этому шлаки. А еще сжигаются калории. Это весьма актуально для тех, кто страдает от избыточного веса. Во время часовой прогулки (скорость должна быть средняя) сжигается 192 калории. Это равносильно тому, если бы человек плавал брасом в бассейне, катался на коньках, занимался верховой ездой или художественной гимнастикой. Не каждый может себе позволить такие виды нагрузки, а вот прогуляться вечером и утром на улице может абсолютно любой человек. </p>  \n            <p>В результате таких несложных упражнений улучшается и здоровье, и внешний вид, и настроение. Главное – не лениться. Для этого нужно следовать простому правилу – каждый день утром и вечером гулять пешком. </p>'),
(6, '/hobbe', 'Вышивание', '<div><h1>Вышивание</h1></div>\n        <div><h2> Польза от чтения </h2></<div></div>\n            <img src="/img/v.jpg" width="250">\n            <p>Во все времена рукоделие выделяло женщину, как хозяйственную, способную создать уют в доме, особу. Однако, большинство женщин вязало, шило, вышивало не только для практических целей – эти занятия создавали определенные состояния души, мыслей и настроения.</p>\n            <p>Рассмотрим, что может дать нам, скажем, вышивание крестиком. Имеет ли это увлечение какой-либо смысл и стоит ли потраченного времени. От себя скажу, что я со школы люблю вышивать именно крестиком. Рисунки на конве, выполненные специальными нитками — мулине, получаются невероятно чёткими, яркими и красивыми.</p>\n            <p>Преимущества вышивки крестиком</p>\n            <ul>\n                <li>Умиротворение</li>\n            </ul>\n            <p>Вышивку можно смело называть «крестикотерапией» – это настоящее успокоительное лекарство, доступное каждому без каких-либо побочных эффектов. Методичное перенесение схематического узора на ткань помогает нам отрешиться от жизненной суеты и внешних проблем. Монотонность действий вызывает даже какой-то элемент гипноза.</p>\n            <ul>\n                <li>Проще простого</li>\n            </ul>\n            <p>ышивание крестиком является самым простым видом рукоделия. Для этого не требуется определенных навыков, как, например, при вязании. Конечно, и здесь не обойтись без технических тонкостей, но они призваны лишь облегчить процесс и создать более опрятное изделие. Если вы не будете их знать, это существенно не испортит вашу работу.</p>\n            <p>Кстати, купить всё необходимое для рукоделия Вы можете, не выходя из дома и по очень низким ценам. Интернет магазин Матренин Посад предлагает огромный ассортимент готовых наборов для рукоделия со скидкой.</p>\n            <ul>\n                <li>Креативный подход</li>\n            </ul>                     \n            <p>Достаточно незначительно изменить рисунок схемы – и вы создадите эксклюзивную работу. На корректирование рисунка у вас есть полное право: можно заменять оттенки и даже изменять дизайн. В результате ваша работа станет эксклюзивной, приобретя собственную индивидуальность.</p>\n            <ul>\n                <li>Красота и уют в доме</li>\n            </ul>\n            <p>Вышивая крестиком, вы преследуете основную цель – украсить вышивкой окружающее пространство или подарить эту красоту другим людям. Вышитая и повешенная на стену картина, смотрится не хуже, чем написанная красками.</p>\n            <p>А различные салфеточки, накидочки под вазы и фотографии придадут особую изысканность и утонченность вашему интерьеру.</p>\n            <p>Знакомых и близких также можно порадовать вышитыми сувенирами. Например, новогодние подарки можно подарить в оформленных по тематике тканевых мешочках – красиво, оригинально и необычно.</p>\n            <ul>\n                <li>Увлекательный процесс</li>\n            </ul>\n            <img src="/img/m.jpg" width="250">\n            <p>Несомненно, для самого процесса рукоделия понадобиться тратить определенное время. Но стоит вам только попробовать начать, и вы сами будете находить это время. Ведь вышивание крестиком увлекает. Вы с удовольствием будете покупать все необходимые инструменты для творчества, журналы со схемами узоров и рисунков, искать в интернете определенные сайты.</p>\n            <p>Однако, самый главный плюс от искусства вышивания крестом – вам будет, чем гордиться. Пусть не сразу, но со временем близкие оценят ваше увлечение, а вы выделитесь, как личность, благодаря такому простому рукотворному способу.</p>');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `acl_entries`
--
ALTER TABLE `acl_entries`
  ADD CONSTRAINT `FK_46C8B806DF9183C9` FOREIGN KEY (`security_identity_id`) REFERENCES `acl_security_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B8063D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806EA000B10` FOREIGN KEY (`class_id`) REFERENCES `acl_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
  ADD CONSTRAINT `FK_9407E54977FA751A` FOREIGN KEY (`parent_object_identity_id`) REFERENCES `acl_object_identities` (`id`);

--
-- Ограничения внешнего ключа таблицы `acl_object_identity_ancestors`
--
ALTER TABLE `acl_object_identity_ancestors`
  ADD CONSTRAINT `FK_825DE299C671CEA1` FOREIGN KEY (`ancestor_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_825DE2993D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `fos_user_user_group`
--
ALTER TABLE `fos_user_user_group`
  ADD CONSTRAINT `FK_B3C77447FE54D947` FOREIGN KEY (`group_id`) REFERENCES `fos_user_group` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B3C77447A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user_user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
