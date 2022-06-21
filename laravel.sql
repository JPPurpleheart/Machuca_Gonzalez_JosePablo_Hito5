-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-06-2022 a las 07:38:01
-- Versión del servidor: 8.0.29-0ubuntu0.20.04.3
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activations`
--

CREATE TABLE `activations` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_activations`
--

CREATE TABLE `admin_activations` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `forbidden` tinyint(1) NOT NULL DEFAULT '0',
  `language` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admin_users`
--

INSERT INTO `admin_users` (`id`, `first_name`, `last_name`, `email`, `password`, `remember_token`, `activated`, `forbidden`, `language`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'Administrator', 'administrator@brackets.sk', '$2y$10$9KNpj20.eOIuGf4VHOUr1./uKxKwe94O4Xl5ojsBHIpBxpopviCHq', 'OkQQeXCWHp5w6xJMDWdrFmxujLG8M9Lde0OoK1TxnM37DzMoXwjXFPw4PKPz', 1, 0, 'en', NULL, '2022-06-21 02:20:19', '2022-06-21 02:20:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int UNSIGNED NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `created_at`, `updated_at`) VALUES
(1, 'Ropa Cama Invierno', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(2, 'Ropa Superior', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(3, 'Ropa Inferior', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(4, 'Accesorios Invierno', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(5, 'Zapatos', '2022-06-09 22:00:00', '2022-06-09 22:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `despensas`
--

CREATE TABLE `despensas` (
  `id` int UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorials`
--

CREATE TABLE `editorials` (
  `id` int UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacionalidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `editorials`
--

INSERT INTO `editorials` (`id`, `nombre`, `nacionalidad`, `created_at`, `updated_at`) VALUES
(1, 'Editorial Salamanca', 'España', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(2, 'Whitaker House Spanish', 'EEUU', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(3, 'Editorial Portavoz', 'España', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(4, 'Editorial CLIE', 'España', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(5, 'E-625.com', 'EEUU', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(6, 'Editorial Obelisco', 'España', '2022-06-09 22:00:00', '2022-06-09 22:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `folletos`
--

CREATE TABLE `folletos` (
  `id` int UNSIGNED NOT NULL,
  `id_usuario` int UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `cantidad_entregada` int NOT NULL,
  `tipo_folleto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recomendacion_generacional` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_editorial` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media`
--

CREATE TABLE `media` (
  `id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` bigint UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'Brackets\\AdminAuth\\Models\\AdminUser', 1, 'avatar', 'avatar', 'avatar.png', 'image/png', 'media', 23924, '[]', '{\"generated_conversions\": {\"thumb_75\": true, \"thumb_150\": true, \"thumb_200\": true}}', '[]', 1, '2022-06-21 02:20:19', '2022-06-21 02:20:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_24_000000_create_activations_table', 1),
(4, '2017_08_24_000000_create_admin_activations_table', 1),
(5, '2017_08_24_000000_create_admin_password_resets_table', 1),
(6, '2017_08_24_000000_create_admin_users_table', 1),
(7, '2018_07_18_000000_create_wysiwyg_media_table', 1),
(8, '2022_06_21_042019_create_media_table', 1),
(9, '2022_06_21_042019_create_permission_tables', 1),
(10, '2022_06_21_042024_fill_default_admin_user_and_permissions', 1),
(11, '2022_06_21_042019_create_translations_table', 2),
(12, '2022_06_21_005148_registered_users', 3),
(13, '2022_06_21_042633_fill_permissions_for_registered-user', 4),
(14, '2022_06_21_005215_despensas', 5),
(15, '2022_06_21_005222_recibes', 5),
(16, '2022_06_21_005332_editorials', 5),
(17, '2022_06_21_005336_libros', 5),
(18, '2022_06_21_005340_prestamos', 5),
(19, '2022_06_21_005347_tallas', 5),
(20, '2022_06_21_005357_categorias', 5),
(21, '2022_06_21_005406_roperos', 5),
(22, '2022_06_21_011454_folletos', 5),
(23, '2022_06_21_043005_fill_permissions_for_despensa', 6),
(24, '2022_06_21_043054_fill_permissions_for_recibe', 7),
(25, '2022_06_21_043236_fill_permissions_for_editorial', 8),
(26, '2022_06_21_043315_fill_permissions_for_libro', 9),
(27, '2022_06_21_043337_fill_permissions_for_prestamo', 10),
(28, '2022_06_21_043441_fill_permissions_for_talla', 11),
(29, '2022_06_21_043535_fill_permissions_for_categoria', 12),
(30, '2022_06_21_043623_fill_permissions_for_ropero', 13),
(31, '2022_06_21_043658_fill_permissions_for_folleto', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'Brackets\\AdminAuth\\Models\\AdminUser', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2022-06-21 02:20:19', '2022-06-21 02:20:19'),
(2, 'admin.translation.index', 'admin', '2022-06-21 02:20:19', '2022-06-21 02:20:19'),
(3, 'admin.translation.edit', 'admin', '2022-06-21 02:20:19', '2022-06-21 02:20:19'),
(4, 'admin.translation.rescan', 'admin', '2022-06-21 02:20:19', '2022-06-21 02:20:19'),
(5, 'admin.admin-user.index', 'admin', '2022-06-21 02:20:19', '2022-06-21 02:20:19'),
(6, 'admin.admin-user.create', 'admin', '2022-06-21 02:20:19', '2022-06-21 02:20:19'),
(7, 'admin.admin-user.edit', 'admin', '2022-06-21 02:20:19', '2022-06-21 02:20:19'),
(8, 'admin.admin-user.delete', 'admin', '2022-06-21 02:20:19', '2022-06-21 02:20:19'),
(9, 'admin.upload', 'admin', '2022-06-21 02:20:19', '2022-06-21 02:20:19'),
(10, 'admin.registered-user', 'admin', '2022-06-21 02:26:34', '2022-06-21 02:26:34'),
(11, 'admin.registered-user.index', 'admin', '2022-06-21 02:26:34', '2022-06-21 02:26:34'),
(12, 'admin.registered-user.create', 'admin', '2022-06-21 02:26:34', '2022-06-21 02:26:34'),
(13, 'admin.registered-user.show', 'admin', '2022-06-21 02:26:34', '2022-06-21 02:26:34'),
(14, 'admin.registered-user.edit', 'admin', '2022-06-21 02:26:34', '2022-06-21 02:26:34'),
(15, 'admin.registered-user.delete', 'admin', '2022-06-21 02:26:34', '2022-06-21 02:26:34'),
(16, 'admin.despensa', 'admin', '2022-06-21 02:30:06', '2022-06-21 02:30:06'),
(17, 'admin.despensa.index', 'admin', '2022-06-21 02:30:06', '2022-06-21 02:30:06'),
(18, 'admin.despensa.create', 'admin', '2022-06-21 02:30:06', '2022-06-21 02:30:06'),
(19, 'admin.despensa.show', 'admin', '2022-06-21 02:30:06', '2022-06-21 02:30:06'),
(20, 'admin.despensa.edit', 'admin', '2022-06-21 02:30:06', '2022-06-21 02:30:06'),
(21, 'admin.despensa.delete', 'admin', '2022-06-21 02:30:06', '2022-06-21 02:30:06'),
(22, 'admin.recibe', 'admin', '2022-06-21 02:30:56', '2022-06-21 02:30:56'),
(23, 'admin.recibe.index', 'admin', '2022-06-21 02:30:56', '2022-06-21 02:30:56'),
(24, 'admin.recibe.create', 'admin', '2022-06-21 02:30:56', '2022-06-21 02:30:56'),
(25, 'admin.recibe.show', 'admin', '2022-06-21 02:30:56', '2022-06-21 02:30:56'),
(26, 'admin.recibe.edit', 'admin', '2022-06-21 02:30:56', '2022-06-21 02:30:56'),
(27, 'admin.recibe.delete', 'admin', '2022-06-21 02:30:56', '2022-06-21 02:30:56'),
(28, 'admin.editorial', 'admin', '2022-06-21 02:32:38', '2022-06-21 02:32:38'),
(29, 'admin.editorial.index', 'admin', '2022-06-21 02:32:38', '2022-06-21 02:32:38'),
(30, 'admin.editorial.create', 'admin', '2022-06-21 02:32:38', '2022-06-21 02:32:38'),
(31, 'admin.editorial.show', 'admin', '2022-06-21 02:32:38', '2022-06-21 02:32:38'),
(32, 'admin.editorial.edit', 'admin', '2022-06-21 02:32:38', '2022-06-21 02:32:38'),
(33, 'admin.editorial.delete', 'admin', '2022-06-21 02:32:38', '2022-06-21 02:32:38'),
(34, 'admin.libro', 'admin', '2022-06-21 02:33:16', '2022-06-21 02:33:16'),
(35, 'admin.libro.index', 'admin', '2022-06-21 02:33:16', '2022-06-21 02:33:16'),
(36, 'admin.libro.create', 'admin', '2022-06-21 02:33:16', '2022-06-21 02:33:16'),
(37, 'admin.libro.show', 'admin', '2022-06-21 02:33:16', '2022-06-21 02:33:16'),
(38, 'admin.libro.edit', 'admin', '2022-06-21 02:33:16', '2022-06-21 02:33:16'),
(39, 'admin.libro.delete', 'admin', '2022-06-21 02:33:16', '2022-06-21 02:33:16'),
(40, 'admin.prestamo', 'admin', '2022-06-21 02:33:38', '2022-06-21 02:33:38'),
(41, 'admin.prestamo.index', 'admin', '2022-06-21 02:33:38', '2022-06-21 02:33:38'),
(42, 'admin.prestamo.create', 'admin', '2022-06-21 02:33:38', '2022-06-21 02:33:38'),
(43, 'admin.prestamo.show', 'admin', '2022-06-21 02:33:38', '2022-06-21 02:33:38'),
(44, 'admin.prestamo.edit', 'admin', '2022-06-21 02:33:38', '2022-06-21 02:33:38'),
(45, 'admin.prestamo.delete', 'admin', '2022-06-21 02:33:38', '2022-06-21 02:33:38'),
(46, 'admin.talla', 'admin', '2022-06-21 02:34:41', '2022-06-21 02:34:41'),
(47, 'admin.talla.index', 'admin', '2022-06-21 02:34:41', '2022-06-21 02:34:41'),
(48, 'admin.talla.create', 'admin', '2022-06-21 02:34:41', '2022-06-21 02:34:41'),
(49, 'admin.talla.show', 'admin', '2022-06-21 02:34:41', '2022-06-21 02:34:41'),
(50, 'admin.talla.edit', 'admin', '2022-06-21 02:34:41', '2022-06-21 02:34:41'),
(51, 'admin.talla.delete', 'admin', '2022-06-21 02:34:41', '2022-06-21 02:34:41'),
(52, 'admin.categoria', 'admin', '2022-06-21 02:35:56', '2022-06-21 02:35:56'),
(53, 'admin.categoria.index', 'admin', '2022-06-21 02:35:56', '2022-06-21 02:35:56'),
(54, 'admin.categoria.create', 'admin', '2022-06-21 02:35:56', '2022-06-21 02:35:56'),
(55, 'admin.categoria.show', 'admin', '2022-06-21 02:35:56', '2022-06-21 02:35:56'),
(56, 'admin.categoria.edit', 'admin', '2022-06-21 02:35:56', '2022-06-21 02:35:56'),
(57, 'admin.categoria.delete', 'admin', '2022-06-21 02:35:56', '2022-06-21 02:35:56'),
(58, 'admin.ropero', 'admin', '2022-06-21 02:36:26', '2022-06-21 02:36:26'),
(59, 'admin.ropero.index', 'admin', '2022-06-21 02:36:26', '2022-06-21 02:36:26'),
(60, 'admin.ropero.create', 'admin', '2022-06-21 02:36:26', '2022-06-21 02:36:26'),
(61, 'admin.ropero.show', 'admin', '2022-06-21 02:36:26', '2022-06-21 02:36:26'),
(62, 'admin.ropero.edit', 'admin', '2022-06-21 02:36:26', '2022-06-21 02:36:26'),
(63, 'admin.ropero.delete', 'admin', '2022-06-21 02:36:26', '2022-06-21 02:36:26'),
(64, 'admin.folleto', 'admin', '2022-06-21 02:37:03', '2022-06-21 02:37:03'),
(65, 'admin.folleto.index', 'admin', '2022-06-21 02:37:03', '2022-06-21 02:37:03'),
(66, 'admin.folleto.create', 'admin', '2022-06-21 02:37:03', '2022-06-21 02:37:03'),
(67, 'admin.folleto.show', 'admin', '2022-06-21 02:37:03', '2022-06-21 02:37:03'),
(68, 'admin.folleto.edit', 'admin', '2022-06-21 02:37:03', '2022-06-21 02:37:03'),
(69, 'admin.folleto.delete', 'admin', '2022-06-21 02:37:03', '2022-06-21 02:37:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id` int UNSIGNED NOT NULL,
  `id_libro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_prestamo` int UNSIGNED NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibes`
--

CREATE TABLE `recibes` (
  `id_usuario` int UNSIGNED NOT NULL,
  `id_producto` int UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `stock` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_miembros` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `registered_users`
--

INSERT INTO `registered_users` (`id`, `name`, `surname`, `num_miembros`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Alberto', 'Villegas García', 3, 'albertovillegasgarcia@gmail.com', '635431289', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(2, 'Muhamad', 'Al-bin Salad', 6, 'muhamadalbinsalad@gmail.com', '687942031', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(3, 'Andukdu', 'Gabayagani', 5, 'andukdugabayagani@gmail.com', '645321798', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(4, 'Babila', 'Angawa', 4, 'babilaangawa@gmail.com', '679043215', '2022-06-09 22:00:00', '2022-06-09 22:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', '2022-06-21 02:20:19', '2022-06-21 02:20:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int UNSIGNED NOT NULL,
  `role_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roperos`
--

CREATE TABLE `roperos` (
  `id` int UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `talla` int UNSIGNED NOT NULL,
  `categoria` int UNSIGNED NOT NULL,
  `id_usuario` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roperos`
--

INSERT INTO `roperos` (`id`, `nombre`, `color`, `estado`, `talla`, `categoria`, `id_usuario`, `created_at`, `updated_at`) VALUES
(1, 'Camiseta', 'Rojo', 'Nuevo', 2, 2, 1, '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(2, 'Jersey', 'Verde', 'Usado', 3, 2, 2, '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(3, 'Camisa', 'Azul', 'Nuevo', 4, 2, 3, '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(4, 'Blusa', 'Rojo', 'Usado', 1, 2, 4, '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(5, 'Bañador', 'Verde', 'Nuevo', 6, 3, 1, '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(6, 'Vaquero', 'Azul', 'Usado', 7, 3, 2, '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(7, 'Pantalón', 'Rojo', 'Nuevo', 8, 3, 3, '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(8, 'Falda', 'Verde', 'Usado', 5, 3, 4, '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(9, 'Manta', 'Azul', 'Nuevo', 9, 1, 1, '2022-06-09 22:00:00', '2022-06-09 22:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallas`
--

CREATE TABLE `tallas` (
  `id` int UNSIGNED NOT NULL,
  `talla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tallas`
--

INSERT INTO `tallas` (`id`, `talla`, `created_at`, `updated_at`) VALUES
(1, 'S', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(2, 'M', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(3, 'L\r\n', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(4, 'XL', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(5, '36', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(6, '40', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(7, '44', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(8, '48', '2022-06-09 22:00:00', '2022-06-09 22:00:00'),
(9, '105', '2022-06-09 22:00:00', '2022-06-09 22:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `translations`
--

CREATE TABLE `translations` (
  `id` int UNSIGNED NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '*',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` json NOT NULL,
  `metadata` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `translations`
--

INSERT INTO `translations` (`id`, `namespace`, `group`, `key`, `text`, `metadata`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'brackets/admin-ui', 'admin', 'operation.succeeded', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(2, 'brackets/admin-ui', 'admin', 'operation.failed', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(3, 'brackets/admin-ui', 'admin', 'operation.not_allowed', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(4, '*', 'admin', 'admin-user.columns.activated', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(5, '*', 'admin', 'admin-user.columns.email', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(6, '*', 'admin', 'admin-user.columns.first_name', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(7, '*', 'admin', 'admin-user.columns.forbidden', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(8, '*', 'admin', 'admin-user.columns.language', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(9, 'brackets/admin-ui', 'admin', 'forms.select_an_option', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(10, '*', 'admin', 'admin-user.columns.last_name', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(11, '*', 'admin', 'admin-user.columns.password', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(12, '*', 'admin', 'admin-user.columns.password_repeat', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(13, '*', 'admin', 'admin-user.columns.roles', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(14, 'brackets/admin-ui', 'admin', 'forms.select_options', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(15, '*', 'admin', 'admin-user.actions.create', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(16, 'brackets/admin-ui', 'admin', 'btn.save', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(17, '*', 'admin', 'admin-user.actions.edit', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(18, '*', 'admin', 'admin-user.actions.index', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(19, 'brackets/admin-ui', 'admin', 'placeholder.search', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(20, 'brackets/admin-ui', 'admin', 'btn.search', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(21, '*', 'admin', 'admin-user.columns.id', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(22, 'brackets/admin-ui', 'admin', 'btn.edit', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(23, 'brackets/admin-ui', 'admin', 'btn.delete', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(24, 'brackets/admin-ui', 'admin', 'pagination.overview', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(25, 'brackets/admin-ui', 'admin', 'index.no_items', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(26, 'brackets/admin-ui', 'admin', 'index.try_changing_items', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(27, 'brackets/admin-ui', 'admin', 'btn.new', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(28, 'brackets/admin-ui', 'admin', 'profile_dropdown.account', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(29, 'brackets/admin-auth', 'admin', 'profile_dropdown.logout', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(30, 'brackets/admin-ui', 'admin', 'sidebar.content', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(31, 'brackets/admin-ui', 'admin', 'sidebar.settings', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(32, '*', 'admin', 'admin-user.actions.edit_password', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(33, '*', 'admin', 'admin-user.actions.edit_profile', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(34, 'brackets/admin-auth', 'admin', 'activation_form.title', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(35, 'brackets/admin-auth', 'admin', 'activation_form.note', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(36, 'brackets/admin-auth', 'admin', 'auth_global.email', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(37, 'brackets/admin-auth', 'admin', 'activation_form.button', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(38, 'brackets/admin-auth', 'admin', 'login.title', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(39, 'brackets/admin-auth', 'admin', 'login.sign_in_text', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(40, 'brackets/admin-auth', 'admin', 'auth_global.password', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(41, 'brackets/admin-auth', 'admin', 'login.button', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(42, 'brackets/admin-auth', 'admin', 'login.forgot_password', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(43, 'brackets/admin-auth', 'admin', 'forgot_password.title', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(44, 'brackets/admin-auth', 'admin', 'forgot_password.note', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(45, 'brackets/admin-auth', 'admin', 'forgot_password.button', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(46, 'brackets/admin-auth', 'admin', 'password_reset.title', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(47, 'brackets/admin-auth', 'admin', 'password_reset.note', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(48, 'brackets/admin-auth', 'admin', 'auth_global.password_confirm', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(49, 'brackets/admin-auth', 'admin', 'password_reset.button', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(50, 'brackets/admin-auth', 'activations', 'email.line', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(51, 'brackets/admin-auth', 'activations', 'email.action', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(52, 'brackets/admin-auth', 'activations', 'email.notRequested', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(53, 'brackets/admin-auth', 'admin', 'activations.activated', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(54, 'brackets/admin-auth', 'admin', 'activations.invalid_request', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(55, 'brackets/admin-auth', 'admin', 'activations.disabled', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(56, 'brackets/admin-auth', 'admin', 'activations.sent', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(57, 'brackets/admin-auth', 'admin', 'passwords.sent', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(58, 'brackets/admin-auth', 'admin', 'passwords.reset', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(59, 'brackets/admin-auth', 'admin', 'passwords.invalid_token', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(60, 'brackets/admin-auth', 'admin', 'passwords.invalid_user', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(61, 'brackets/admin-auth', 'admin', 'passwords.invalid_password', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(62, '*', '*', 'Manage access', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(63, '*', '*', 'Translations', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL),
(64, '*', '*', 'Configuration', '[]', NULL, '2022-06-21 02:20:21', '2022-06-21 02:20:21', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wysiwyg_media`
--

CREATE TABLE `wysiwyg_media` (
  `id` int UNSIGNED NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wysiwygable_id` int UNSIGNED DEFAULT NULL,
  `wysiwygable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activations`
--
ALTER TABLE `activations`
  ADD KEY `activations_email_index` (`email`);

--
-- Indices de la tabla `admin_activations`
--
ALTER TABLE `admin_activations`
  ADD KEY `admin_activations_email_index` (`email`);

--
-- Indices de la tabla `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`);

--
-- Indices de la tabla `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_deleted_at_unique` (`email`,`deleted_at`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `despensas`
--
ALTER TABLE `despensas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `editorials`
--
ALTER TABLE `editorials`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `folletos`
--
ALTER TABLE `folletos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folletos_id_usuario_foreign` (`id_usuario`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `libros_id_editorial_foreign` (`id_editorial`);

--
-- Indices de la tabla `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prestamos_id_libro_foreign` (`id_libro`),
  ADD KEY `prestamos_usuario_prestamo_foreign` (`usuario_prestamo`);

--
-- Indices de la tabla `recibes`
--
ALTER TABLE `recibes`
  ADD KEY `recibes_id_usuario_foreign` (`id_usuario`),
  ADD KEY `recibes_id_producto_foreign` (`id_producto`);

--
-- Indices de la tabla `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registered_users_email_unique` (`email`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `roperos`
--
ALTER TABLE `roperos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roperos_talla_foreign` (`talla`),
  ADD KEY `roperos_categoria_foreign` (`categoria`),
  ADD KEY `roperos_id_usuario_foreign` (`id_usuario`);

--
-- Indices de la tabla `tallas`
--
ALTER TABLE `tallas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_namespace_index` (`namespace`),
  ADD KEY `translations_group_index` (`group`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `wysiwyg_media`
--
ALTER TABLE `wysiwyg_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wysiwyg_media_wysiwygable_id_index` (`wysiwygable_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `despensas`
--
ALTER TABLE `despensas`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `editorials`
--
ALTER TABLE `editorials`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `folletos`
--
ALTER TABLE `folletos`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roperos`
--
ALTER TABLE `roperos`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tallas`
--
ALTER TABLE `tallas`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `wysiwyg_media`
--
ALTER TABLE `wysiwyg_media`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `folletos`
--
ALTER TABLE `folletos`
  ADD CONSTRAINT `folletos_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `registered_users` (`id`);

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_id_editorial_foreign` FOREIGN KEY (`id_editorial`) REFERENCES `editorials` (`id`);

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_id_libro_foreign` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`isbn`),
  ADD CONSTRAINT `prestamos_usuario_prestamo_foreign` FOREIGN KEY (`usuario_prestamo`) REFERENCES `registered_users` (`id`);

--
-- Filtros para la tabla `recibes`
--
ALTER TABLE `recibes`
  ADD CONSTRAINT `recibes_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `despensas` (`id`),
  ADD CONSTRAINT `recibes_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `registered_users` (`id`);

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `roperos`
--
ALTER TABLE `roperos`
  ADD CONSTRAINT `roperos_categoria_foreign` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `roperos_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `registered_users` (`id`),
  ADD CONSTRAINT `roperos_talla_foreign` FOREIGN KEY (`talla`) REFERENCES `tallas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
