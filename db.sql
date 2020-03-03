-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2020 a las 22:23:35
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `litcms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config`
--

CREATE TABLE `config` (
  `SITE_NAME` varchar(255) NOT NULL,
  `SITE_DESC` varchar(255) NOT NULL,
  `SITE_TAGS` varchar(255) NOT NULL,
  `SITE_AUTH` varchar(255) NOT NULL,
  `FEATURED` int(1) NOT NULL,
  `REGISTRATION_ENABLED` int(1) NOT NULL,
  `SOCIAL_FACEBOOK` varchar(255) NOT NULL,
  `SOCIAL_TWITTER` varchar(255) NOT NULL,
  `SOCIAL_INSTAGRAM` varchar(255) NOT NULL,
  `SOCIAL_PINTEREST` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `config`
--

INSERT INTO `config` (`SITE_NAME`, `SITE_DESC`, `SITE_TAGS`, `SITE_AUTH`, `FEATURED`, `REGISTRATION_ENABLED`, `SOCIAL_FACEBOOK`, `SOCIAL_TWITTER`, `SOCIAL_INSTAGRAM`, `SOCIAL_PINTEREST`) VALUES
('LitCMS', 'A lightweight and opensource CMS', 'lightweight, cms, free, opensource, gnu, gpl, php, html, css, github, git, bootstrap', 'BeepBoop486', 0, 1, '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `post_uploader` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_thumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_featured` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `umail` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL,
  `is_admin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `uname`, `umail`, `upass`, `is_admin`) VALUES
(1, 'Admin', 'site@admin.com', '$2y$10$lRMDimT9cwsFmV7K0DQAuO7IeIYlmaTnrQCKKwmSIewDlRTKTuq2O', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
