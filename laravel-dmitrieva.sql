-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 17 2023 г., 11:36
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel-dmitrieva`
--

-- --------------------------------------------------------

--
-- Структура таблицы `applications`
--

CREATE TABLE `applications` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint NOT NULL,
  `is_confirm` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `applications`
--

INSERT INTO `applications` (`id`, `email`, `name`, `course_id`, `is_confirm`, `created_at`, `updated_at`) VALUES
(1, 'ivan@mail.ru', 'Иван Иванович', 2, 0, '2023-09-07 00:46:29', '2023-09-07 00:46:29'),
(2, 'anton@mail.ru', 'антое антонов', 4, 0, '2023-09-07 02:41:15', '2023-09-07 02:41:15'),
(3, 'ilya@mail.ru', 'илья березкин', 2, 0, '2023-09-10 22:07:56', '2023-09-10 22:07:56'),
(4, 'ivan@mail.ru', 'Иван Иванович', 5, 0, '2023-11-15 07:59:19', '2023-11-15 07:59:19'),
(5, 'anton@mail.r', 'антое антонов', 5, 0, '2023-11-15 07:59:25', '2023-11-15 07:59:25');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Основы программирования и дизайн'),
(2, 'Дизайн');

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` double(8,2) NOT NULL,
  `duration` int NOT NULL,
  `image` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `cost`, `duration`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'Основы PHP', 'На этом курсе вы изучите основы языка PHP. Вы познакомитесь с экосистемой PHP, ключевыми возможностями языка, а также узнаете о чистых функциях и именовании. В итоге научитесь использовать и определять функции, искать и анализировать ошибки в коде, а также писать несложные программы на PHP. Как и с другими языками, для программирования на PHP нужно понимать, как работают циклы, библиотеки, логические операции и типы данных — все эти темы разбираются на курсе.', 29555.00, 5, 'c0f78ba4025bdaaecb336142ac5cb531.jpg', 1, '2023-09-06 10:46:52', '2023-09-06 10:46:52'),
(4, 'Дизайн сайта для чайников', 'Графический дизайнер — создаёт фирменный стиль для компаний: логотипы, графику для рекламы, упаковки, мерча и не только. Благодаря его работе бренд заметят клиенты и скорее выберут именно его. Поэтому графические дизайнеры востребованы и хорошо зарабатывают.', 555555.00, 6, '956f1cc1abc0561d1becd8d1801e295d.png', 2, '2023-09-06 13:14:41', '2023-09-06 13:14:41'),
(5, 'Веб-дизайн ', 'Качественный веб-дизайн', 300000.00, 3, '956f1cc1abc0561d1becd8d1801e295d.png', 2, '2023-11-29 10:35:49', '2023-11-21 10:35:49'),
(6, 'JavaScript', 'Обучение JavaScript', 25000.00, 5, '956f1cc1abc0561d1becd8d1801e295d.png', 1, '2023-11-21 10:35:49', '2023-11-29 10:35:49'),
(7, 'HTML верстка', 'Обучение верстки на HTML', 10000.00, 1, '956f1cc1abc0561d1becd8d1801e295d.png', 1, '2023-11-22 10:42:09', '2023-11-17 10:42:09'),
(8, '3D моделирование', 'Обучение 3D моделированию', 30500.00, 6, '956f1cc1abc0561d1becd8d1801e295d.png', 2, '2023-11-20 10:42:09', '2023-11-16 10:42:09');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_06_093857_create_categories_table', 1),
(6, '2023_09_06_094019_create_courses_table', 1),
(7, '2023_09_07_051042_create_applications_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'антое антонов', 'anton@mail.ru', NULL, '$2y$10$PyWvy6swKCIWnthEtfylS.Cm98DSxadsICfZnlN91rdrRnPNJLrsm', NULL, '2023-11-16 13:02:30', '2023-11-16 13:02:30'),
(6, 'Ульянов Игнат Рашидович', 'ignat@mail.ru', NULL, '$2y$10$kxy/oijXE44csdu1mDtSWuKUTMYyHufSEN80xuEkizRHo2vL1bRRe', NULL, '2023-11-17 03:08:41', '2023-11-17 03:08:41'),
(7, 'Идель Шаяхметов', 'gdsgdsg@mail.ru', NULL, '$2y$10$DAaT/n2dHT.TLZZgnf2o7.AhukNcxHwZsnA.Gua6puzaxvcWw/10O', NULL, '2023-11-17 03:09:36', '2023-11-17 03:09:36'),
(8, 'Андрей Березов', 'andrey@mail.ru', NULL, '$2y$10$HIRKlnkZ9oCSkzbRfsMKjeWKnquc7Y/R691oJWUskln/217CEGMgy', NULL, '2023-11-17 03:10:07', '2023-11-17 03:10:07'),
(9, 'илья березкин', 'ilya@mail.ru', NULL, '$2y$10$idtYboyNZUW5k1Ymup2auObKOnK6sdGp42Qa9XPaH/dq15s2GYEt2', NULL, '2023-11-17 03:11:05', '2023-11-17 03:11:05');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_category_id_foreign` (`category_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
