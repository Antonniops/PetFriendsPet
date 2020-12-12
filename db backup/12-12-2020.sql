-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2020 a las 19:11:26
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pet_friends`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animals`
--

CREATE TABLE `animals` (
  `nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `animals`
--

INSERT INTO `animals` (`nombre`) VALUES
('conejo'),
('gato'),
('pajaro'),
('perro'),
('pez'),
('reptil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha_cita` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `hairdresser_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `filters`
--

CREATE TABLE `filters` (
  `nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `filters`
--

INSERT INTO `filters` (`nombre`) VALUES
('edad'),
('formato'),
('marca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `filtersanimals`
--

CREATE TABLE `filtersanimals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `animal_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filter_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `filtersanimals`
--

INSERT INTO `filtersanimals` (`id`, `animal_name`, `filter_name`, `valor`, `categoria`) VALUES
(1, 'perro', 'marca', 'Sense', 'pienso-seco'),
(2, 'perro', 'marca', 'Primordial', 'pienso-seco'),
(3, 'perro', 'marca', 'Dican', 'pienso-seco'),
(4, 'perro', 'marca', 'Monge', 'pienso-seco'),
(5, 'perro', 'formato', '2 kg', 'pienso-seco'),
(6, 'perro', 'formato', '12 kg', 'pienso-seco'),
(7, 'perro', 'edad', 'puppy', 'pienso-seco'),
(8, 'perro', 'edad', 'adult', 'pienso-seco'),
(9, 'perro', 'edad', 'senior', 'pienso-seco'),
(10, 'perro', 'marca', 'Sense', 'comida-humeda'),
(11, 'perro', 'formato', '380 g', 'comida-humeda'),
(12, 'perro', 'edad', 'puppy', 'comida-humeda'),
(13, 'perro', 'edad', 'adult', 'comida-humeda'),
(14, 'perro', 'edad', 'senior', 'comida-humeda'),
(15, 'perro', 'marca', 'Woolf', 'snacks-y-huesos'),
(16, 'perro', 'formato', '100 g', 'snacks-y-huesos'),
(17, 'perro', 'formato', '200 g', 'snacks-y-huesos'),
(18, 'perro', 'edad', 'puppy', 'snacks-y-huesos'),
(19, 'perro', 'edad', 'adult', 'snacks-y-huesos'),
(20, 'perro', 'edad', 'senior', 'snacks-y-huesos'),
(21, 'gato', 'marca', 'Monge', 'pienso-seco'),
(22, 'gato', 'marca', 'Purity', 'pienso-seco'),
(23, 'gato', 'marca', 'Ownat', 'pienso-seco'),
(24, 'gato', 'marca', 'Monge', 'comida-humeda'),
(25, 'gato', 'formato', '1.5 kg', 'pienso-seco'),
(26, 'gato', 'formato', '80 g', 'comida-humeda'),
(27, 'gato', 'edad', 'kitten', 'pienso-seco'),
(28, 'gato', 'edad', 'adult', 'pienso-seco'),
(29, 'gato', 'edad', 'senior', 'pienso-seco'),
(30, 'gato', 'edad', 'kitten', 'comida-humeda'),
(31, 'gato', 'edad', 'adult', 'comida-humeda'),
(32, 'gato', 'edad', 'senior', 'comida-humeda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hairdressers`
--

CREATE TABLE `hairdressers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(381, '2014_10_12_100000_create_password_resets_table', 1),
(382, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(383, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(384, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(385, '2016_06_01_000004_create_oauth_clients_table', 1),
(386, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(387, '2019_08_19_000000_create_failed_jobs_table', 1),
(388, '2020_04_06_115032_create_providers_table', 1),
(389, '2020_04_06_115052_create_products_table', 1),
(390, '2020_04_06_121919_create_roles_table', 1),
(391, '2020_04_06_121950_create_hairdressers_table', 1),
(392, '2020_04_06_121951_create_users_table', 1),
(393, '2020_04_06_122044_create_providersproducts_table', 1),
(394, '2020_04_06_122123_create_orders_table', 1),
(395, '2020_04_06_122152_create_appointments_table', 1),
(396, '2020_04_13_063929_create_productsorders_table', 1),
(397, '2020_04_27_085542_create_filters_table', 1),
(398, '2020_04_27_085556_create_animals_table', 1),
(399, '2020_04_27_085608_create_filtersanimals_table', 1),
(400, '2020_05_24_162748_create_provinces_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'K8gvvRK47nq7KfYVNXq8Cfe1UxKy78abEMr02ILJ', NULL, 'http://localhost', 1, 0, 0, '2020-06-17 17:03:51', '2020-06-17 17:03:51'),
(2, NULL, 'Laravel Password Grant Client', 'tAhbGgK5B3Ici1GJhCklS8PjxYbp0mm5XgNhdeKM', 'users', 'http://localhost', 0, 1, 0, '2020-06-17 17:03:51', '2020-06-17 17:03:51'),
(3, NULL, 'Laravel Personal Access Client', 'jGrYUOGckLLjSKqtuqocR66YK1pnKTNGg3ec1CUf', NULL, 'http://localhost', 1, 0, 0, '2020-12-12 16:49:25', '2020-12-12 16:49:25'),
(4, NULL, 'Laravel Password Grant Client', 'R7216iOG0rGSZ79cf1km8CZLajCyYvYoIIOWKqeG', 'users', 'http://localhost', 0, 1, 0, '2020-12-12 16:49:25', '2020-12-12 16:49:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-06-17 17:03:51', '2020-06-17 17:03:51'),
(2, 3, '2020-12-12 16:49:25', '2020-12-12 16:49:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`id`, `access_token_id`, `revoked`, `expires_at`) VALUES
('02ff8d5c97b03d8cb2e78dd45ba4954f31911b815f17abe73a76047f0c501835ceeb5e56fdf074f3', 'df844b650b38d4ffe20af4581fdd60b34b34bf72cca6c3a5bf0a81089893b74cb64b7bf29fca579d', 0, '2021-11-02 12:02:15'),
('043623df71f014869b81ba606f30d4a6cc5afce416a00dc9b93e7c8ad965b07f1225be693ecb2bff', '4a06b27a126f3d1fdbc62e62504af4579d967f89703955aa761233ae8adbbf49919ee036a35e8b1e', 0, '2021-11-02 11:57:49'),
('05f87692f17722b0abaac8ca930b8cd7a1a6ddef1bc01738156fc0fa8a397a42c932a3a381f95f53', '6c0a4c1f2f48502efa1243492aba3e44a52fa99416a6ff6e0a6be75424d172043ce63583765f7eb2', 0, '2021-11-02 09:10:58'),
('09fe64b26e742070430bcafc2e7ebe7c9b433424d7d320eaf7ca67297ea44c33c26e9a7627a132c3', '7b5ba0d70d802fedccd5278e154480f013c7cb53ccef236280b2a47e04503ec8898ed34f3cf8b942', 0, '2021-12-12 17:50:41'),
('0d4a57a82980f99293d7154696eca45ef703e794c44f591a7eb1f1d85c19a6e374b80572a0391ae5', '69570b37f0b348e932fa4242d8371b7f0cf7f5cd3e25a199f4ea050b18e9e17fb5e8d3d4d38a4406', 0, '2021-07-16 11:57:24'),
('103521a78309e8482f42a6d436b1a78de4cdbe88bb391f6090f194d98eef6eb7d092d66d169ccee3', '64c63f7ef06f419a1d24a69df1853529118d43f57de00341405e60c70b81673859479a338a8d7273', 0, '2021-11-02 12:01:18'),
('226773fb76cc263be8062ed444e3815faa4b402f25bc4cbfd65f8aa266402b864b93611fcbd37891', '4d39299e800eba5f6172d18b7eb961cc67f096b0e6d2a00b7336e1ab1f2c3a56d71aa88475e2b530', 0, '2021-11-07 18:41:59'),
('238836f9f614a2481da108d9af660f9c003ce91a7b4e880febab2203a3200202d169b167f9c77d26', 'f7c90878270ce885c368f1594aa4855b5159b56a50ec392471805492a14936720a861a2d5ca33303', 0, '2021-06-18 18:35:49'),
('24917647f04c214b646f1e2f5b483a2af67963974aa6a77d7630ac24ccf5749594e8fee21d0dc97a', '51005abd3ea2392149992e5903216d10ba4588f01b80fc39fe1c067200d4dbe2333ab3a0c3594a12', 0, '2021-06-18 18:37:08'),
('2837301e42a882869efa77ad92b1fb9118441a90d69d349fc456664289e740a632f075b4dc851ff8', 'd7c707c84d303eefaee29c603eb1c90f663b0b5696cfc9bf4607d8dfd842a26763b8239ac5bd3eeb', 0, '2021-11-02 10:01:42'),
('2fc1d1f12b401aacdf88721b37bfb1a53311edb8412621f00a31201c84c30780199c2f2de77eee6e', '84bd0315536b2a73d352d27504c3cc09e63e20c8f6f1b07bf108b4a900eb9836a26829905ec2c00d', 0, '2021-11-02 10:34:05'),
('3493c81f5d313c02dc53507af623447fd70bb5ac7fa46c3418f1d1866b7c72508ef888740609b06c', '57832465303d73294e73706796377553ddca3dcba9c2e84cd324aeb7b8fbba3f80ba297f37cc2dd8', 0, '2021-06-19 06:28:16'),
('3c259e7bf6634a61f45b08ff75d2eb048472508247668eb33ed63dff15f66b15789440349713a3b3', '74bd544a81dd4e673751e2400121591fe83566be7251d8b3c89b4bc29b8532b442bcf4d1434263c3', 0, '2021-10-03 18:02:43'),
('3fc896aae96e162acda4d8be7a6ed16f3cb605d813ee2e3ce09757fddd4d7874a82db9531ea11c4a', '9ca0df3796b70a459937583c1d2f62e142218f0a5456fe9cbb52e2e75ef8785e73470d8dfadb47bc', 0, '2021-06-19 17:10:58'),
('4257302f7c73c0337adf63b086fe78818b9924700aa643075bd0b94f8315ed9a729ef56d766efc24', 'bff9bd8afa141eb078b9ab4eb3eb33e00008a657766061b3c74590e02c9c8fe26281bb4d7ae65469', 0, '2021-06-19 11:03:24'),
('47a3148d8a5d487d53fe1531254661187813c444ae088471622c950f60f5e911628edd56589c34ed', '6a59a137e32032737addbb14c8fab270051050a1399a254c934b44d95566c7e3dbf349762620636a', 0, '2021-11-02 11:58:40'),
('4b4c11fe151fb3a28927cda0d1303418a1184ac611ecf5021ff6f7931279f24563656c139effef2c', 'a673567245cb9a726a42ed5c796745d2415474d3acba9ab169891143b9297d235c374e098783a697', 0, '2021-06-18 18:36:18'),
('4c7e15200fc9744556007a56ad05c458c6d1df7369f372037bbabace1c0aad1cdc152918d8c2968b', '7d2917febce1740508292a0aa3de9253e8dded86430caac0f9b3a7b43fc9167a53619fd9f5b7eb23', 0, '2021-11-02 10:16:43'),
('4f7573d0f4df5ca068e3cd859eaa5508b7444ee0585f7708d5ba99b30e59a9ec7d5b836a570fe58a', 'a1f552269c06638c41b22c3be76ac685304785d070f8029ecafd26d78845e5176b77c8490dd8d3e8', 0, '2021-11-02 10:16:31'),
('52bf1843f5b3410b78e88f2a814fd9fd3e1cc8188766e56d152a1dfca78fb97022395f60b6936eaa', 'e853e862eec95aa7cb84fa99754b1b57c0dcff9521cc092e7e5f3c32475952ce025b4c7dbdf36459', 0, '2021-11-02 10:13:57'),
('5e72cb906ea34d338349d7cdfa0cef5f562abb8736b8ca4c26242394cad7e6c94bbb20b5daa849f3', '65e041aec934a7071bcaf1804092aaaf91b71cb14f35232061efd4b91d9b13fdbc324f0505f84c1d', 0, '2021-11-02 10:29:53'),
('5ec7a3012e6d284a3438019bc5e19b974c0404b9fd258076f60f8ca3f2f8da8c3804907434fb8202', '2b7947693791a11a2baa5b2556b4fb70c9d135fb3503914a5e98eaed5ffa5b0072e5a265cbff5edf', 0, '2021-11-02 11:39:34'),
('7dd97ebc4fce94fb36f1c918ed68e08ae1833de9dda6f6e2f76ecc6f53642bf9a607e65bf96544a8', '29567c91166ce516141227e3b065b99614394db17d04d32dadd9a07597bd613fd5ba6194ff2dca73', 0, '2021-06-19 17:10:21'),
('80a223f28a92fe43574a0995ee816883810e70a5eadd83e112be4b526343b2139ad37cfe997787df', '80446b0882038a069c2e830b2d8e755ebd9efcb993d2c41cbe20e06901e0b608d5930a76265f99a3', 0, '2021-07-14 18:54:41'),
('8460894c1c9ae2e7261b6f46ce8c9a0ece62a22789e18c3ebf838ace2f5b5f4749d692988e462df9', '5581ce79207e4c71d867604cebe68f1256eced5291989e2c536279fa4e5c86e84cc8f7841a76ae70', 0, '2021-10-12 12:08:56'),
('8bb721863ad1219bb3db4f914306c2c7af443cb7b8a88b6f0bb95eeea6d38eb7b38150dd128bbb19', 'f203c284b0820533fff3540dc00caf0813b07194ad5573f594aebb20d82669410750c301146a6fbe', 0, '2021-11-02 10:04:36'),
('8eeefc947160f847b2701f4416ccf656edf7de1d7b82423626bcd4a2a9446e28eeb9adf33210539c', 'fb28b14365293a02d766bd569d90aa5d33ad3fc56fbc7cfa1b7a48eecfdb77b59562fa11126e97b7', 0, '2021-11-02 09:46:23'),
('939ae828675c6d7b28eb4a4fc97d0b1117ceef995ae64a22038c64e9e11f3ccbbacf68336d4fd650', '5d68f8be5d21c0f0dce8d68128865283dcb131788d6414f8ae6cba41837e955a2e997d558ff00f91', 0, '2021-06-26 12:24:25'),
('aa2c368b5e8fb99ecb1bd1b997b6146b3ed194649c936ec00c7b8424e0aa1a1c367bf864a0badabb', '793b017cc74257180dfb3d9cbc5177c46e286ee45ea755d783bc20314884210434ffae3bb8e6239f', 0, '2021-09-30 19:07:55'),
('afcceef61b6af5537e3dc56af6b81819850da09531a48329d7f37ac014fa92432f71faff85e70724', '52af195eb28a236dbfa9f0a759bbe031a4a3f8f11df09d769f3ed17395ca61b75f3d6e8d410e36ee', 0, '2021-06-17 19:10:15'),
('b2850a0ed7559c08a1ca132a21ea859d5d9dc9417b14990c208f6dfda0d519c2359357e3c719241b', 'fd79ad6a16b1048717f7792a1b1a1edf0a32bf435c1731ce63e7b7fbc75ce4161c977669f66759bb', 0, '2021-06-29 08:20:37'),
('b2d21d4267e4e60975b069991195978a19d21aa660b5c91e5b04bb4a5f02294791718b63c91ceada', '1caf8fb68689660bc13010b53fe63f38255c7f9e2540751ed4bc03c9f2d6b1ad32783b34ceddfb46', 0, '2021-11-05 19:39:58'),
('b70a46eb4601a188df58c255c5faa0fc9fe33d9fde1f5e2949504f3f53b291ae62e46dc0ecaeb5cb', '7db5217f4e80b06bb11ea4b4eb6a5c9cd7785c9f414d1317e66ca5ab21d77b0b8057d7e646c4c066', 0, '2021-12-12 17:51:46'),
('b98c2eb3cda359f348beac8574a5c91c101520544fc179c20a550888a9c45f60e4bdc28d0409f184', 'a120a726d0f0ad74a324382c8d0aea99c2e8a3744d0d89a57ec12677eef55ec0bd409a0ed87085f8', 0, '2021-11-02 11:53:24'),
('ba586d5781fd0b928444f0904174b53dbde094f369255b125a47eb9b57c1cad41cf21575f6abd0ad', 'ba9632187949465e5a9a8ecbb0276f580254baa8beb364df778929f71726e1ae56236c9d71dcc12c', 0, '2021-10-03 17:27:28'),
('bc316e95da5984e94a2d85ee643755bc1d25324ed77c4d3998e9c73716a7e99e1c81f85b003a45e1', '8e3e987d5445be0a409f9f25432e348a741aac4f4e2b38055a9af1bb806591109fdf9c36111e8b54', 0, '2021-11-02 10:13:24'),
('c3d3939874d9181961b1657e0433caa032a0fc865b0148d525c10c669744f729ba226f7ac03389c2', '5fce8c6c50c446d9be8a37717ed4a505cd412f0d25c75c27d0d292ff1cce09852619c676e373a30e', 0, '2021-10-10 19:37:03'),
('c6dc6fac506549e0f89b71b1fa96b46ccff57659d3205357546e4a626b18799677c473090a502443', 'edc51227ab097dee5067a3c502f7651de95545cf94947a54a2ef816988ca5c25afc3f3e5bf8f7d20', 0, '2021-10-12 11:07:59'),
('cc50986806a71bda9a32142edcde835d457d6f12420b6a34f03acf77b1ac3feba9a38efe74bd3232', '6d07283eb1bae46c7b3edf96ecab1545bc478faa502476b150eacac458d31c21d4acf696fea0a0f3', 0, '2021-06-19 16:57:17'),
('d0fb18513aaf877c28011549c5466d8fc41b77fdd647a9d0f42d44bae1b0df42e9fad24bcbcfc640', '823ca57a5fb1ff8445b3b5a1f0b622d8b1cd7d044681c7ff2a495c2443bb9c295ca55b3d70caa475', 0, '2021-06-17 19:08:45'),
('d189ea166587821283a77d9fd97bff017d77734553a66bcd8d34faaba0ffcbd9e7a27a42d70d2e76', '0902845d63c9c54c8808312adac91b6d103800985bc74c067b8cd774c2d14b8353d6e34716809dd8', 0, '2021-07-16 12:06:43'),
('d21df7a9236b359cebbf46711f4742d220cfe0402f7711c4c12919b15d0dc8cddf7152b95456c9da', '956a259f90cb837defb213a033c9f547305b9b8f03e3f288596a579af9680ff0f52719139a9865db', 0, '2021-07-16 12:08:47'),
('e5bab6da1343d58ce3d72a4262a09ba9a8b8f9aaf1bcb64080b54ee3899a0e2dadb4569702b71a83', '3f1aeac392c647dfddc06b5d78dec29a04085a50aa786b7c8d4691da1102d1c6747f7f559cfd2835', 0, '2021-06-19 06:47:11'),
('e92f7fbb040a3792af473f082c22ee5571877a3960230dd2d6fbbc4bb0586b573e90ea7a881f5579', 'a8e59f435aeafc74480c4d4f42a24257f4e00ad69f9d18311b1adf1e462cb561cc57e7301ec0091b', 0, '2021-11-02 09:40:45'),
('ee090c2c0c6fe397f15a78e33e02fb7134187e855f20b9546a28361f870f0219bf02dc9573b41246', '74dd3ab7dbd52b67da65520a12ba18c94819fa9693d65d95fe13f674fd01075b677dd53c5319f8bd', 0, '2021-06-19 07:08:09'),
('f94bb043bba111b2bfd034c9eab91196dfcf29c449536a2757a5764670825f03aaa9bff974a63fe2', 'e115c4136e0f0d219c73286df1b90f75a96b23a7648a70655e1daa24298ab10fb7c24363dc6f1589', 0, '2021-11-02 11:38:52'),
('ff60d2a63a264b05276c27ee894667274359e7158688e7afc82f4e76f2c472073feaedc98fb60ed9', 'cca2e0f253d9affb88b28ca2bcf443fd133ee26a301e8a8cf8b391ccb0184a828f2d736e0b29842f', 0, '2021-08-08 18:22:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `estado` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_pedido` datetime NOT NULL,
  `email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_postal` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `estado`, `fecha_pedido`, `email`, `codigo_postal`, `calle`, `numero`, `municipio`, `created_at`, `updated_at`) VALUES
(1004, 6, 'pendiente', '2020-09-19 00:00:00', 'antonio@gmail.com', '29639', 'Trebol', '4', 'Benalmadena', '2020-09-19 15:29:04', '2020-09-19 15:29:04'),
(1005, 6, 'pendiente', '2020-09-19 00:00:00', 'antonio@gmail.com', '29639', 'Trebol', '4', 'Benalmadena', '2020-09-19 15:31:33', '2020-09-19 15:31:33'),
(1006, 6, 'pendiente', '2020-09-19 00:00:00', 'antonio@gmail.com', '29639', 'Trebol', '4', 'Benalmadena', '2020-09-19 15:32:02', '2020-09-19 15:32:02'),
(1007, 6, 'pendiente', '2020-09-19 00:00:00', 'antonio@gmail.com', '29639', 'Trebol', '4', 'Benalmadena', '2020-09-19 15:32:47', '2020-09-19 15:32:47'),
(1008, 6, 'completado', '2020-09-19 00:00:00', 'antonio@gmail.com', '29639', 'Trebol', '4', 'Benalmadena', '2020-09-19 15:34:50', '2020-10-24 15:30:26'),
(1009, 6, 'completado', '2020-09-19 00:00:00', 'antonio@gmail.com', '29639', 'Trebol', '4', 'Benalmadena', '2020-09-19 15:36:26', '2020-11-02 08:06:21'),
(1010, 6, 'completado', '2020-09-22 00:00:00', 'antonio@gmail.com', '29639', 'Trebol', '4', 'Benalmadena', '2020-09-22 16:25:16', '2020-10-24 16:08:34'),
(1011, 6, 'completado', '2020-09-30 00:00:00', 'antonio@gmail.com', '29639', 'Trebol', '4', 'Benalmadena', '2020-09-30 17:33:05', '2020-11-02 08:12:20'),
(1012, 6, 'completado', '2020-09-30 00:00:00', 'antonio@gmail.com', '29639', 'Trebol', '4', 'Benalmadena', '2020-09-30 17:34:58', '2020-11-02 08:12:30'),
(1013, 6, 'completado', '2020-09-30 00:00:00', 'antonio@gmail.com', '29639', 'Trebol', '4', 'Benalmadena', '2020-09-30 17:36:00', '2020-11-02 09:34:20'),
(1014, 7, 'completado', '2020-09-30 00:00:00', 'antonio10@gmail.com', '29639', 'Trebol', '4', 'Benalmadena', '2020-09-30 17:37:23', '2020-11-02 10:44:40'),
(1015, 7, 'completado', '2020-09-30 00:00:00', 'antonio10@gmail.com', '29639', 'Trebol', '4', 'Benalmadena', '2020-09-30 17:38:49', '2020-11-05 18:50:13'),
(1016, NULL, 'pendiente', '2020-09-30 00:00:00', 'antonio10@gmail.com', '29639', 'Trebol', '4', 'Benalmadena', '2020-09-30 17:39:40', '2020-09-30 17:39:40'),
(1017, 7, 'pendiente_pago', '2020-10-03 00:00:00', 'antonio10@gmail.com', '29639', 'Calle Trebol', '4', 'BENALMÁDENA', '2020-10-03 13:59:18', '2020-10-03 13:59:18'),
(1018, 7, 'pendiente_pago', '2020-10-03 00:00:00', 'antonio10@gmail.com', '29639', 'Calle Trebol', '4', 'BENALMÁDENA', '2020-10-03 14:01:56', '2020-10-03 14:01:56'),
(1019, 7, 'pendiente_pago', '2020-10-03 00:00:00', 'antonio10@gmail.com', '29639', 'Calle Trebol', '4', 'BENALMÁDENA', '2020-10-03 14:07:32', '2020-10-03 14:07:32'),
(1020, 7, 'pendiente_pago', '2020-10-03 00:00:00', 'antonio10@gmail.com', '29639', 'Calle Trebol', '4', 'BENALMÁDENA', '2020-10-03 14:21:36', '2020-10-03 14:21:36'),
(1021, 7, 'pendiente_pago', '2020-10-03 00:00:00', 'antonio10@gmail.com', '29639', 'Calle Trebol', '4', 'BENALMÁDENA', '2020-10-03 14:39:56', '2020-10-03 14:39:56'),
(1022, 7, 'pendiente_pago', '2020-10-03 00:00:00', 'antonio10@gmail.com', '29639', 'Calle Trebol', '4', 'BENALMÁDENA', '2020-10-03 14:40:17', '2020-10-03 14:40:17'),
(1023, 7, 'pendiente_pago', '2020-10-03 00:00:00', 'antonio10@gmail.com', '29639', 'Calle Trebol', '4', 'BENALMÁDENA', '2020-10-03 14:41:38', '2020-10-03 14:41:38'),
(1024, 7, 'pendiente_pago', '2020-10-03 00:00:00', 'antonio10@gmail.com', '29639', 'Calle Trebol', '4', 'BENALMÁDENA', '2020-10-03 14:59:07', '2020-10-03 14:59:07'),
(1025, 7, 'pendiente_pago', '2020-10-03 00:00:00', 'antonio10@gmail.com', '29639', 'Calle Trebol', '4', 'BENALMÁDENA', '2020-10-03 15:01:21', '2020-10-03 15:01:21'),
(1026, 7, 'pendiente_pago', '2020-10-03 00:00:00', 'antonio10@gmail.com', '29639', 'Calle Trebol', '4', 'BENALMÁDENA', '2020-10-03 15:02:02', '2020-10-03 15:02:02'),
(1027, 7, 'pendiente_pago', '2020-10-03 00:00:00', 'antonio10@gmail.com', '29639', 'Calle Trebol', '4', 'BENALMÁDENA', '2020-10-03 15:02:24', '2020-10-03 15:02:24'),
(1028, 7, 'pendiente_pago', '2020-10-03 00:00:00', 'antonio10@gmail.com', '29639', 'Calle Trebol', '4', 'BENALMÁDENA', '2020-10-03 15:03:42', '2020-10-03 15:03:42'),
(1029, 7, 'pendiente_pago', '2020-10-03 00:00:00', 'antonio10@gmail.com', '29639', 'Calle Trebol', '4', 'BENALMÁDENA', '2020-10-03 15:07:04', '2020-10-03 15:07:04'),
(1030, 7, 'pendiente_pago', '2020-10-03 00:00:00', 'antonio10@gmail.com', '29639', 'Calle Trebol', '4', 'BENALMÁDENA', '2020-10-03 15:07:17', '2020-10-03 15:07:17'),
(1031, 7, 'pendiente_pago', '2020-10-03 00:00:00', 'antonio10@gmail.com', '29639', 'Calle Trebol', '4', 'BENALMÁDENA', '2020-10-03 15:08:57', '2020-10-03 15:08:57'),
(1032, 8, 'pendiente_pago', '2020-10-03 00:00:00', 'antoniops0505@gmail.com', '29639', 'Calle Trebol', '4', 'BENALMÁDENA', '2020-10-03 15:28:38', '2020-10-03 15:28:38'),
(1033, 8, 'pendiente_pago', '2020-10-03 00:00:00', 'aa@ŋmail.com', '29639', 'Trebol', '4', 'BENALMÁDENA', '2020-10-03 15:39:32', '2020-10-03 15:39:32'),
(1034, 8, 'pendiente', '2020-10-03 00:00:00', 'aa@ŋmail.com', '29639', 'Trebol', '4', 'BENALMÁDENA', '2020-10-03 15:42:19', '2020-10-03 15:42:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('antoniops0505@gmail.com', '$2y$10$GcCnyTQNV4ou5Lyzp6KZme88sFvEiC7VX83uhyS41rDN8aKnIJrga', '2020-08-08 16:21:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(6,2) NOT NULL,
  `precio_oferta` double(6,2) DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ud_peso` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peso_unidad` int(11) NOT NULL,
  `precio_kilogramo` double(6,2) DEFAULT NULL,
  `tipo_animal` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  `edad` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visitas` int(10) NOT NULL,
  `ventas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `nombre`, `descripcion`, `precio`, `precio_oferta`, `imagen`, `marca`, `categoria`, `ud_peso`, `peso_unidad`, `precio_kilogramo`, `tipo_animal`, `destacado`, `edad`, `visitas`, `ventas`) VALUES
(100, 'SENSE PUPPY SALMÓN Y PAV 2KG', 'COMPOSICIÓN: Carne fresca de pavo 20%, salmón fresco 20%, carne deshidratada de pavo 16%, patata, guisantes pelados, aceite de pollo, concentrado de proteínas vegetales, proteína deshidratada de pollo, pulpa de remolacha, hidrolizado de hígado de pollo, verduras y frutas frescas 4% (boniato, zanahoria y manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (condroitinasultato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina-FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).\r\n\r\n                COMPONENTES ANALÍTICOS: Proteína bruta 30%, Aceites y grasas brutos 17%, Fibras brutas 2,5%, Materia inorgánica 5,9%, Vitamina A 20000 U.I., Vitamina D3 2000 U.I., Vitamina E (α-tocoferol) 115 mg.\r\n                \r\n                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 210 mg (como carbonato ferroso), Yodo 2,5 mg (como yoduro potásico), Cobre 14 mg (como sulfato cúprico pentahidratado), Manganeso 48 mg (como óxido manganoso), Zinc 195 mg (como óxido de zinc), Selenio 0,35 mg (como selenito sódico). Aditivos tecnológicos: Conservantes (extractos naturales de cítricos) y antioxidantes (tocoferoles naturales).', 16.85, NULL, 'sensesalmonypavo.png', 'Sense', 'pienso-seco', 'kg', 2, 8.43, 'perro', 0, 'puppy', 1, 0),
(101, 'SENSE ADULTO POLLO Y PATO 2KG', 'COMPOSICIÓN: Carne fresca de pollo 20%, carne fresca de pato 20%, carne deshidratada de pollo 20%, guisantes pelados, patata, aceite de pollo, pulpa de remolacha, proteína deshidratada de pollo, hidrolizado de hígado de pollo, verduras y frutas frescas 4% (champiñones, arándanos, mango y manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (Condroitinasulfato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina-FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).\n\n                COMPONENTES ANALÍTICOS: Proteína bruta 26%, Aceites y grasas brutos 15%, Fibras brutas 2,8%, Materia inorgánica 5,9%, Vitamina A 16000 U.I., Vitamina D3 1550 U.I., Vitamina E (α-tocoferol) 110 mg.\n                \n                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 195 mg (como carbonato ferroso), Yodo 2,2 mg (como yoduro potásico), Cobre 13 mg (como sulfato cúprico pentahidratado), Manganeso 44,5 mg (como óxido manganoso), Zinc 185 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos: Conservantes (extractos naturales de cítricos) y antioxidantes (tocoferoles naturales).', 16.85, NULL, 'senseadultopolloypato.png', 'Sense', 'pienso-seco', 'kg', 2, 8.42, 'perro', 0, 'adult', 0, 0),
(102, 'SENSE ADULTO SALMÓN 2KG', 'COMPOSICIÓN: Salmón fresco 25%, arenques frescos 22%, salmón deshidratado 20%, patata, guisantes pelados, aceite de pollo, pulpa de remolacha, zooplacton marino deshidratado, hidrolizado de salmón, verduras y frutas frescas 4% (espinacas, zanahorias, manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (condrotina sulfato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina-FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).\n\n                COMPONENTES ANALÍTICOS: Proteína bruta 26%, Aceites y grasas brutos 15%, Fibras brutas 2,8%, Materia inorgánica 5,9%, Vitamina A 16000 U.I., Vitamina D3 1550 U.I., Vitamina E (α-tocoferol) 110 mg.\n                \n                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 195 mg (como carbonato ferroso), Yodo 2,2 mg (como yoduro potásico), Cobre 13 mg (como sulfato cúprico pentahidratado), Manganeso 44,5 mg (como óxido manganoso), Zinc 185 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos/kg: Conservantes (extractos naturales de cítricos) y antioxidantes (tocoferoles naturales). ', 16.85, NULL, 'senseadultosalmon.png', 'Sense', 'pienso-seco', 'kg', 2, 8.42, 'perro', 0, 'adult', 0, 0),
(103, 'SENSE ADULTO MINI CORDERO 2KG', 'COMPOSICIÓN: carne fresca de cordero 33%, carne deshidratada de cordero 25%, guisantes pelados, patatas, aceite de pollo, pulpa de remolacha, hidrolizado de hígado de cordero, verduras y frutas frescas 4 % (judías verdes y manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (Condrotinasultato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).\n\n                COMPONENTES ANALÍTICOS: Proteína bruta 28%, Aceites y grasas brutos 17 %, Fibras brutas 2,2%, Materia inorgánica 5,9%. Vitamina A 17000 U.I., Vitamina D3 1650 U.I., Vitamina E (α-tocoferol) 112 mg.\n                \n                ADITIVOS Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 198 mg (como carbonato ferroso), Yodo 2,3 mg (como yoduro potásico), Cobre 14 mg (como sulfato cúprico pentahidratado), Manganeso 47 mg (como óxido manganoso), Zinc 190 mg (como óxido de zinc), Selenio 0,34 mg (como selenito sódico). Aditivos tecnológicos/kg: Conservantes (Extractos naturales de cítricos) y antioxidantes (Tocoferoles naturales).', 16.85, NULL, 'senseadultocordero.png', 'Sense', 'pienso-seco', 'kg', 2, 8.42, 'perro', 0, 'adult', 0, 0),
(104, 'SENSE ADULTO CORDERO 2KG', 'COMPOSICIÓN: carne fresca de cordero 33 %, carne deshidratada de cordero 22%, guisantes pelados, patatas, aceite de pollo, pulpa de remolacha, hidrolizado de hígado de cordero, verduras y frutas frescas 4 % (judías verdes y manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (Condrotinasultato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).\n\n                COMPONENTES ANALÍTICOS: Proteína bruta 26%, Aceites y grasas brutos 15 %, Fibras brutas 2,8%, Materia inorgánica 5,9%. Vitamina A 16000 U.I., Vitamina D3 1550 U.I., Vitamina E (α-tocoferol) 110 mg..\n                \n                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 195 mg (como carbonato ferroso), Yodo 2,2 mg (como yoduro potásico), Cobre 13 mg (como sulfato cúprico pentahidratado), Manganeso 44,5 mg (como óxido manganoso), Zinc 185 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos/kg: Conservantes (Extractos naturales de cítricos) y antioxidantes (Tocoferoles naturales).', 16.85, NULL, 'senseadultocordero.png', 'Sense', 'pienso-seco', 'kg', 2, 8.42, 'perro', 0, 'adult', 0, 0),
(105, 'SENSE ADULTO SALMÓN 12KG', 'COMPOSICIÓN: Salmón fresco 25%, arenques frescos 22%, salmón deshidratado 20%, patata, guisantes pelados, aceite de pollo, pulpa de remolacha, zooplacton marino deshidratado, hidrolizado de salmón, verduras y frutas frescas 4% (espinacas, zanahorias, manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (condrotina sulfato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina-FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).\n\n                COMPONENTES ANALÍTICOS: Proteína bruta 26%, Aceites y grasas brutos 15%, Fibras brutas 2,8%, Materia inorgánica 5,9%, Vitamina A 16000 U.I., Vitamina D3 1550 U.I., Vitamina E (α-tocoferol) 110 mg.\n                \n                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 195 mg (como carbonato ferroso), Yodo 2,2 mg (como yoduro potásico), Cobre 13 mg (como sulfato cúprico pentahidratado), Manganeso 44,5 mg (como óxido manganoso), Zinc 185 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos/kg: Conservantes (extractos naturales de cítricos) y antioxidantes (tocoferoles naturales). ', 65.45, NULL, 'senseadultosalmon.png', 'Sense', 'pienso-seco', 'kg', 12, 5.45, 'perro', 0, 'adult', 0, 0),
(106, 'SENSE HUMEDO JABALÍ Y CIERVO 380G', 'COMPONENTES ANALÍTICOS: Proteína bruta 7,5%, Aceites y grasas brutos 7%, Fibras brutas 1,5%, Materia inorgánica 1,5%, Humedad 78%.\n\n\n                COMPOSICIÓN: Carnes frescas 76% (ciervo 41%, jabalí 35%), patata, verduras y frutas frescas 4% (boniatos, pimiento rojo y arándanos), aceite de\n                salmón 1% (fuente de ácidos grasos omega 3 y 6), pack protector articular 0,5% (condroitina sulfato, glucosamina sulfato y MSM), sustancias minerales,\n                plantas aromáticas con propiedades antioxidantes naturales 0,02% (romero, tomillo y orégano).', 2.75, NULL, 'sensehumedojabaliyciervo.jpg', 'Sense', 'comida-humeda', 'g', 380, 7.23, 'perro', 0, 'adult', 0, 0),
(107, 'SENSE HUMEDO POLLO Y PATO 380G', 'COMPONENTES ANALÍTICOS: Proteína bruta 8%, Aceites y grasas brutos 6%, Fibras brutas 1,5%, Materia inorgánica 1,5%, Humedad 78%.\n\n\n                COMPOSICIÓN: Carnes frescas 76% (pollo 44%, pato 32%), patata, verduras y frutas frescas 4% (champiñones, arándanos, mango y manzana), aceite\n                de salmón 1% (fuente de ácidos grasos omega 3 y 6), pack protector articular 0,5% (condroitina sulfato, glucosamina sulfato y MSM), sustancias minerales,\n                plantas aromáticas con propiedades antioxidantes naturales 0,02% (romero, tomillo y orégano).', 2.75, NULL, 'sensehumedopolloypato.jpg', 'Sense', 'comida-humeda', 'g', 380, 7.23, 'perro', 0, 'adult', 0, 0),
(108, 'SENSE ADULTO POLLO Y PATO 12KG', 'COMPOSICIÓN: Carne fresca de pollo 20%, carne fresca de pato 20%, carne deshidratada de pollo 20%, guisantes pelados, patata, aceite de pollo, pulpa de remolacha, proteína deshidratada de pollo, hidrolizado de hígado de pollo, verduras y frutas frescas 4% (champiñones, arándanos, mango y manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (Condroitinasulfato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina-FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).\n\n                COMPONENTES ANALÍTICOS: Proteína bruta 26%, Aceites y grasas brutos 15%, Fibras brutas 2,8%, Materia inorgánica 5,9%, Vitamina A 16000 U.I., Vitamina D3 1550 U.I., Vitamina E (α-tocoferol) 110 mg.\n                \n                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 195 mg (como carbonato ferroso), Yodo 2,2 mg (como yoduro potásico), Cobre 13 mg (como sulfato cúprico pentahidratado), Manganeso 44,5 mg (como óxido manganoso), Zinc 185 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos: Conservantes (extractos naturales de cítricos) y antioxidantes (tocoferoles naturales).', 65.45, NULL, 'senseadultopolloypato.png', 'Sense', 'pienso-seco', 'kg', 12, 5.45, 'perro', 0, 'adult', 0, 0),
(109, 'SENSE PUPPY SALMÓN Y PAVO 12KG', 'COMPOSICIÓN: Carne fresca de pavo 20%, salmón fresco 20%, carne deshidratada de pavo 16%, patata, guisantes pelados, aceite de pollo, concentrado de proteínas vegetales, proteína deshidratada de pollo, pulpa de remolacha, hidrolizado de hígado de pollo, verduras y frutas frescas 4% (boniato, zanahoria y manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (condroitinasultato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina-FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).\n\n                COMPONENTES ANALÍTICOS: Proteína bruta 30%, Aceites y grasas brutos 17%, Fibras brutas 2,5%, Materia inorgánica 5,9%, Vitamina A 20000 U.I., Vitamina D3 2000 U.I., Vitamina E (α-tocoferol) 115 mg.\n                \n                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 210 mg (como carbonato ferroso), Yodo 2,5 mg (como yoduro potásico), Cobre 14 mg (como sulfato cúprico pentahidratado), Manganeso 48 mg (como óxido manganoso), Zinc 195 mg (como óxido de zinc), Selenio 0,35 mg (como selenito sódico). Aditivos tecnológicos: Conservantes (extractos naturales de cítricos) y antioxidantes (tocoferoles naturales).', 65.45, NULL, 'sensesalmonypavo.png', 'Sense', 'pienso-seco', 'kg', 12, 5.45, 'perro', 0, 'puppy', 0, 0),
(110, 'SENSE ADULTO CORDERO 12KG', 'COMPOSICIÓN: carne fresca de cordero 33 %, carne deshidratada de cordero 22%, guisantes pelados, patatas, aceite de pollo, pulpa de remolacha, hidrolizado de hígado de cordero, verduras y frutas frescas 4 % (judías verdes y manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (Condrotinasultato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).\n\n                COMPONENTES ANALÍTICOS: Proteína bruta 26%, Aceites y grasas brutos 15 %, Fibras brutas 2,8%, Materia inorgánica 5,9%. Vitamina A 16000 U.I., Vitamina D3 1550 U.I., Vitamina E (α-tocoferol) 110 mg..\n                \n                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 195 mg (como carbonato ferroso), Yodo 2,2 mg (como yoduro potásico), Cobre 13 mg (como sulfato cúprico pentahidratado), Manganeso 44,5 mg (como óxido manganoso), Zinc 185 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos/kg: Conservantes (Extractos naturales de cítricos) y antioxidantes (Tocoferoles naturales).', 65.45, NULL, 'senseadultocordero.png', 'Sense', 'pienso-seco', 'kg', 12, 5.45, 'perro', 0, 'adult', 0, 0),
(111, 'SENSE HUMEDO CORDERO 380G', 'COMPONENTES ANALÍTICOS: Proteína bruta 8%, Aceites y grasas brutos 4,5%, Fibras brutas 1,5%, Materia inorgánica 1,5%, Humedad 79%.\n\n\n                COMPOSICIÓN: Carne fresca de cordero 76%, patata, verduras y frutas frescas 4% (judías verdes y manzana), aceite de salmón 1% (fuente de ácidos\n                grasos omega 3 y 6), pack protector articular 0,5% (condroitina sulfato, glucosamina sulfato y MSM), sustancias minerales, plantas aromáticas con propiedades\n                antioxidantes naturales 0,02% (romero, tomillo y orégano).', 2.75, NULL, 'sensehumedocordero.png', 'Sense', 'comida-humeda', 'g', 380, 7.23, 'perro', 0, 'adult', 0, 0),
(112, 'SENSE HUMEDO PUPPY PAVO Y SALMÓN 380G', 'COMPONENTES ANALÍTICOS: Proteína bruta 8%, Aceites y grasas brutos 6,5%, Fibras brutas 1%, Materia inorgánica 1%, Humedad 79%.\n\n                COMPOSICIÓN: Carne fresca de pavo 44%, salmón fresco 32%, patata, verduras y frutas frescas 4% (boniato, zanahoria y manzana), aceite de salmón\n                1% (fuente de ácidos grasos omega 3 y 6), pack protector articular 0,5% (condroitina sulfato, glucosamina sulfato y MSM), sustancias minerales, plantas\n                aromáticas con propiedades antioxidantes naturales 0,02% (romero, tomillo y orégano).', 2.75, NULL, 'sensehumedopuppypavoysalmon.png', 'Sense', 'comida-humeda', 'g', 380, 7.23, 'perro', 0, 'puppy', 0, 0),
(113, 'SENSE HUMEDO SALMÓN 380G', 'COMPONENTES ANALÍTICOS: Proteína bruta 7%, Aceites y grasas brutos 6,5%, Fibras brutas 1,5%, Materia inorgánica 1%, Humedad 80%.\n\n\n                COMPOSICIÓN: Pescados frescos 73% (salmón fresco 40%, arenques frescos 33%), patata, verduras y frutas frescas 4 % (espinacas, zanahoria y\n                manzana), aceite de salmón 1% (fuente de ácidos grasos omega 3 y 6), pack protector articular 0,5% (condroitina sulfato, glucosamina sulfato y MSM),\n                sustancias minerales, plantas aromáticas con propiedades antioxidantes naturales 0,02% (romero, tomillo y orégano).', 2.75, NULL, 'sensehumedosalmon.jpg', 'Sense', 'comida-humeda', 'g', 380, 7.23, 'perro', 0, 'adult', 0, 0),
(114, 'SENSE ADULTO LIGHT&SENIOR PATO Y PAVO 2KG', 'COMPONENTES ANALÍTICOS: Proteína bruta 24%, Grasa bruta 9%, Fibra bruta 4,8%, Materia Inorgánica 5,9%, Vitamina A 22000 UI/kg, Vitamina D3 2200 UI/kg, Vitamina E (α-tocoferol) 120 mg/kg, Ca 1,5%, P 0,9%, Na 0,11%, E.M. 3322,5 kcal/kg.\n\n                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 750 mg, Glucosamina sulfato 750 mg. Oligoelementos: Hierro 195 mg (como carbonato ferroso), Yodo 2,2 mg (como yoduro potásico), Cobre 13 mg (como sulfato de cobre (II) pentahidratado), Manganeso 44,5 mg (como óxido manganoso), Zinc 185 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos: Conservantes (extractos naturales de cítricos) y antioxidantes (tocoferoles naturales).\n                Las carnes frescas de pollo y pato utilizadas en su elaboración son, en su origen, de consumo humano lo que garantiza altos niveles de proteínas de calidad y digestabilidad. El pavo usado en su elaboración es bajo en grasa y, además, es fuente de proteínas y rico en minerales y vitaminas del grupo B. El alimento incorpora fibra digestible para proporcionar sensación de saciedad, así como protectores articulares con el fin de mejorar y mantener un aparato locomotor en buen estado. El contenido calórico de la ración está acorde a las necesidades nutricionales definidas.\n                \n                COMPOSICIÓN: Carne fresca de pato 20%*, carne fresca de pollo 20%*, carne deshidratada de pavo 18%, guisantes pelados*, patata, almidón de guisante, pulpa de remolacha, proteína deshidratada de pollo, aceite de pollo, hidrolizado de hígado de pollo, verduras y frutas frescas 4% (champiñones*, arándanos*, mango* y manzana*), fibra vegetal 1% (lignocelulosa, fibra insoluble natural con efecto saciante), aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (Condroitina sulfato, Glucosamina sulfato y MSM), L-carnitina 0,1%, yuca, raíz de achicoria (fuente de inulina -FOS-), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano). *Ingredientes naturales.\n                \n                COMPONENTES ANALÍTICOS: Proteína bruta 24%, Grasa bruta 9%, Fibra bruta 4,8%, Materia Inorgánica 5,9%, Vitamina A 22000 UI/kg, Vitamina D3 2200 UI/kg, Vitamina E (α-tocoferol) 120 mg/kg, Ca 1,5%, P 0,9%, Na 0,11%, E.M. 3322,5 kcal/kg.\n                \n                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 750 mg, Glucosamina sulfato 750 mg. Oligoelementos: Hierro 195 mg (como carbonato ferroso), Yodo 2,2 mg (como yoduro potásico), Cobre 13 mg (como sulfato de cobre (II) pentahidratado), Manganeso 44,5 mg (como óxido manganoso), Zinc 185 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos: Conservantes (extractos naturales de cítricos) y antioxidantes (tocoferoles naturales).\n                \n                MODO DE EMPLEO: Ponga el alimento sobre el comedero dejando siempre agua limpia y fresca a disposición. Si realiza algún cambio de alimentación que se paulatino, a lo largo de 4 o 5 días, para evitar desórdenes intestinales. Mantener el envase bien cerrado en un lugar fresco y seco, lejos del suelo y de la luz directa del sol. No apto para consumo humano. (Ver tabla orientativa).', 16.85, NULL, 'senseadultopatoypavo.png', 'Sense', 'pienso-seco', 'kg', 2, 8.42, 'perro', 0, 'senior', 0, 0),
(115, 'SENSE ADULTO MINI SALMÓN 2KG', 'COMPOSICIÓN: Salmón fresco 25%, arenques frescos 22%, salmón deshidratado 20%, patata, guisantes pelados, aceite de pollo, pulpa de remolacha, zooplacton marino deshidratado, hidrolizado de salmón, verduras y frutas frescas 4% (espinacas, zanahorias, manzana), Ceratoniasiliqua, aceite de salmón (fuente de ácidos grasos omega 3 y 6), sustancias minerales, pack protector articular (condrotina sulfato, glucosamina sulfato y MSM), yuca, raíz de achicoria (fuente de inulina-FOS), levaduras (MOS) y plantas aromáticas con propiedades antioxidantes naturales (romero, tomillo y orégano).\n\n                COMPONENTES ANALÍTICOS: Proteína bruta 26%, Aceites y grasas brutos 15%, Fibras brutas 2,8%, Materia inorgánica 5,9%, Vitamina A 16000 U.I., Vitamina D3 1550 U.I., Vitamina E (α-tocoferol) 110 mg.\n                \n                ADITIVOS: Aditivos nutricionales/kg: Condroitina sulfato 500 mg, Glucosamina sulfato 500 mg. Oligoelementos: Hierro 195 mg (como carbonato ferroso), Yodo 2,2 mg (como yoduro potásico), Cobre 13 mg (como sulfato cúprico pentahidratado), Manganeso 44,5 mg (como óxido manganoso), Zinc 185 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos/kg: Conservantes (extractos naturales de cítricos) y antioxidantes (tocoferoles naturales). ', 16.85, NULL, 'senseadultosalmon.png', 'Sense', 'pienso-seco', 'kg', 2, 8.42, 'perro', 1, 'adult', 0, 0),
(116, 'DICAN RAZAS PEQUEÑAS POLLO Y ARROZ 3KG', 'Alimento completo extrusionado para perros adultos de razas pequeñas.\n\n                    RICO EN POLLO, FUENTE DE PROTEÍNAS DE ALTO VALOR BIOLÓGICO.\n                    RICO EN ARROZ, CEREAL ALTAMENTE DIGESTIBLE QUE PROTEGE LA MUCOSA INTESTINAL Y AYUDA A UNA FÁCIL DIGESTIÓN.\n                    NIVEL ENERGÉTICO ADAPTADO A NECESIDADES DE RAZAS PEQUEÑAS.\n                    EXTRACTO DE YUCA QUE REDUCE EL OLOR DE LAS HECES.\n                \n                    Composición:\n                    \n                    pollo (30,46% fuente de proteínas), maíz, arroz (14%), trigo, aceite de pollo, salvado de trigo, proteínas de ave hidrolizadas, garrofa, sustancias minerales y extractos de plantas (yuca 0,02%).\n                    \n                    Aditivos:\n                    \n                    Aditivos nutricionales/kg: Vitaminas, provitaminas y sustancias químicamente bien definidas de efecto análogo: Vitamina A 18000 U.I., Vitamina D3 1800 U.I., Vitamina E (α-tocoferol) 160 mg. Oligoelementos: Hierro 180 mg (como carbonato ferroso), Yodo 1,8 mg (como yoduro potásico), Cobre 11mg (como sulfato cúprico pentahidratado), Manganeso 40 mg (como óxido manganoso), Zinc 150 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos/kg: Conservantes, antioxidantes y aglomerantes (E-562: 15 g).\n                    \n                    Componentes analíticos:\n                    Humedad 	10%\n                    Proteína bruta 	28%\n                    Materias grasas brutas 	14%\n                    Celulosa bruta 	2.4%\n                    Cenizas brutas 	8%\n                    Energía metabolizable  	3486 Kcal/kg', 7.95, NULL, 'dicanpolloyarroz.png', 'Dican', 'pienso-seco', 'kg', 3, 2.65, 'perro', 0, 'adult', 0, 0),
(117, 'DICAN ATÚN Y ARROZ 3KG', 'Alimento completo extrusionado para perros adultos de todas las razas con actividad física media alta.\n\n                    RICO EN ATÚN, PESCADO AZUL, FUENTE DE PROTEÍNA DE ALTO VALOR BIOLOGICO. RICO EN ÁCIDOS GRASOS ω-3, DHA Y EPA. BENEFICIOSO PARA EL CORAZÓN Y EL SISTEMA NERVIOSO.\n                    RICO EN ARROZ, CEREAL ALTAMENTE DIGESTIBLE QUE PROTEGE LA MUCOSA INTESTINAL Y AYUDA A UNA ÓPTIMA DIGESTIÓN.\n                    NIVEL EQUILIBRADO DE OLIGOELEMENTOS.\n                    EXTRACTO DE YUCA QUE REDUCE EL OLOR DE LAS HECES.\n                    \n                    Composición:\n                    \n                    Carnes deshidratadas 20,5%, maíz integral, cebada, fibra de cereal, aceite refinado de ave, pescado azul deshidratado (atún 6%, salmón 4%), arroz 4%, garrofa, salmón hidrolizado 2%, sustancias minerales, aceitunas 0,1% y extractos de plantas naturales (fuentes de prebióticos naturales: Yuca 0,02% (Yuca filamentosa), Camomila 0,01% (Chamaemelum nobile), Melisa 0,01% (Melisa Oficinales), Romero 0,01% (Rosmarinus oficinalis).\n                    \n                    Aditivos:\n                    \n                    Aditivos nutricionales/kg: Oligoelementos: Hierro 150 mg (como carbonato ferroso), Yodo 1,1 mg (como yoduro potásico), Cobre 10 mg (como sulfato de cobre (II) pentahidratado), Manganeso 40 mg (como óxido manganoso), Zinc 110 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos: Conservantes y antioxidantes naturales.\n                    \n                    Componentes analíticos:\n                    Humedad 	10%\n                    Proteína bruta 	26%\n                    Aceites y grasas brutos  	12%\n                    Fibras brutas 	2,3%\n                    Materia inorgánica  	7,9%\n                    Calcio 	2.2%\n                    Fósforo 	1,1%\n                    Vitamina A 	12000 UI/kg\n                    Vitamina D3 	1200 UI/kg\n                    Vitamina E 	(α-tocoferol) 100 mg/kg', 7.95, NULL, 'dicanatunyarroz.png', 'Dican', 'pienso-seco', 'kg', 3, 2.65, 'perro', 0, 'adult', 0, 0),
(118, 'DICAN CORDERO Y ARROZ 3KG', 'Alimento completo extrusionado para perros adultos de todas las razas con actividad física media-alta.\n\n                    RICO EN CORDERO, FUENTE DE PROTEÍNA ALTAMENTE APETECIBLE Y DIGESTIBLE\n                    RICO EN ARROZ, CEREAL ALTAMENTE DIGESTIBLE QUE PROTEGE LA MUCOSA INTESTINAL Y AYUDA A UNA ÓPTIMA DIGESTIÓN\n                    NIVEL EQUILIBRADO DE OLIGOELEMENTOS\n                    EXTRACTO DE YUCA QUE REDUCE EL OLOR DE LAS HECES\n                \n                    Composición:\n                    \n                    Carnes deshidratadas 31% (cordero 6%), maíz integral, cebada, fibra de cereal, aceite refinado de ave, arroz 4%, pulpa de remolacha, proteína hidrolizada de cordero 2%, garrofa, sustancias minerales, aceitunas 0,1% y extractos de plantas naturales (fuentes de prebióticos naturales: Yuca 0,02% (Yuca filamentosa), Camomila 0,01% (Chamaemelum nobile), Melisa 0,01% (Melisa Oficinales), Romero 0,01% (Rosmarinus oficinalis).\n                    \n                    Aditivos:\n                    \n                    Aditivos nutricionales/kg: Oligoelementos: Hierro 150 mg (como carbonato ferroso), Yodo 1,1 mg (como yoduro potásico), Cobre 10 mg (como sulfato de cobre (II) pentahidratado), Manganeso 40 mg (como óxido manganoso), Zinc 110 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos: Conservantes y antioxidantes naturales.\n                    \n                    Componentes analíticos:\n                    Humedad 	10%\n                    Proteína bruta 	26%\n                    Aceites y grasas brutos  	12%\n                    Fibras brutas  	2,3%\n                    Materia inorgánica  	7,9%\n                    Calcio 	2,2%\n                    Fósforo 	1,1%\n                    Vitamina A 	12000 UI/kg\n                    Vitamina D3  	1200 UI/kg\n                    Vitamina E 	(α-tocoferol) 100 mg/kg.', 7.95, NULL, 'dicancorderoyarroz.png', 'Dican', 'pienso-seco', 'kg', 3, 2.65, 'perro', 0, 'adult', 0, 0),
(119, 'DICAN BAJO EN CALORIAS SENIOR PAVO Y ARROZ 3KG', 'Alimento completo extrusionado para perros adultos de todas las razas con actividad física baja y perros de edad avanzada, todos ellos con tendencia al sobrepeso.\n\n                    PROTEÍNAS DE HUEVO, APORTE DE AMINOÁCIDOS ESENCIALES.\n                    FIBRA NATURAL CON EFECTO DE SACIEDAD.\n                    ADECUADO NIVEL ENERGÉTICO PARA CONTROL DE PESO.\n                    RECUBIERTO CON SALSA DE HÍGADO APORTANDO UN SABOR IRRESISTIBLE.\n                \n                    Composición:\n                    \n                    Maíz integral, carne deshidratada de pavo 20%, arroz, fibra de cereal, aceite de pollo, hígado de pollo ultrahidrolizado, pulpa de remolacha, proteína de maíz, garrofa, huevo, levaduras, sustancias minerales, aceituna 0,1% y extractos de plantas naturales (fuentes de prebióticos naturales: Yuca 0,02% (Yuca filamentosa), Camomila 0,01% (Chamaemelum nobile), Melisa 0,01% (Melisa Oficinalis), Romero 0,01% (Rosmarinus oficinalis).\n                    \n                    Aditivos:\n                    \n                    Aditivos nutricionales/kg: Oligoelementos: Hierro 155 mg (como carbonato ferroso), Yodo 2,6 mg (como yoduro potásico), Cobre 13 mg (como sulfato de cobre (II) pentahidratado), Manganeso 40 mg (como óxido manganoso), Zinc 150 mg (como óxido de zinc), Selenio 0,35 mg (como selenito sódico). Aditivos tecnológicos: Conservantes y antioxidantes naturales.\n                    \n                    Componentes analíticos:\n                    Humedad 	10%\n                    Proteína bruta 	4%\n                    Aceites y grasas brutos  	8%\n                    Materia inorgánica  	7,5%\n                    Calcio 	1,9%\n                    Fósforo 	1%\n                    Vitamina A 	20000 UI/kg\n                    Vitamina D3 	1800 UI/kg\n                    Vitamina E 	(α-tocoferol) 105 mg/kg\n                    Energía metabolizable  	3148 Kcal/kg', 7.95, NULL, 'dicanbajoencaloriaspavoyarroz.png', 'Dican', 'pienso-seco', 'kg', 3, 2.65, 'perro', 0, 'senior', 0, 0),
(120, 'DICAN COMPLETE PAVO Y CALAMAR 3KG', 'Alimento completo extrusionado para perros adultos de todas las razas con actividad física media alta\n\n                    RICO EN PAVO, FUENTE DE PROTEÍNA DE ALTO VALOR BIOLOGICO.\n                    CON CALAMAR, FUENTE DE PROTEÍNA RICA EN AMINOÁCIDOS ESENCIALES. AYUDA A CONTROLAR EL NIVEL DE COLESTEROL.\n                    CON VERDURAS (ZANAHORIAS Y GUISANTES), FUENTE DE VITAMINAS Y MINERALES. AYUDAN A PREVENIR LA RETENCIÓN DE LÍQUIDOS.\n                    CROQUETAS DE DIFERENTES FORMAS, MÁS APETECIBLES\n                    \n                    Composición:\n                    \n                    maíz, pavo (22,5%), trigo, aceite de pollo, calamar deshidratado (4%), verduras (zanahorias 2%, guisantes 2%), sustancias minerales, garrofa, proteínas de ave hidrolizadas y extractos de plantas (yuca 0,02%).\n                    \n                    Aditivos:\n                    \n                    Aditivos nutricionales/kg: Vitaminas, provitaminas y sustancias químicamente bien definidas de efecto análogo: Vitamina A 12000 U.I., Vitamina D3 1200 U.I., Vitamina E (α-tocoferol) 105 mg. Oligoelementos: Hierro 150 mg (como carbonato ferroso), Yodo 1,1 mg (como yoduro potásico), Cobre 10 mg (como sulfato cúprico pentahidratado), Manganeso 40 mg (como óxido manganoso), Zinc 110 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos/kg: Conservantes, antioxidantes y aglomerantes (E-562: 15 g).\n                    \n                    Componentes analíticos:\n                    Humedad 	10%\n                    Proteína bruta 	25%\n                    Materias grasas brutas 	12%\n                    Celulosa bruta 	2.7%\n                    Cenizas brutas 	8%', 7.95, NULL, 'dicanpavoycalamar.png', 'Dican', 'pienso-seco', 'kg', 3, 2.65, 'perro', 0, 'adult', 0, 0),
(121, 'DICAN CORDERO Y ARROZ 14KG', 'Alimento completo extrusionado para perros adultos de todas las razas con actividad física media-alta.\n\n                    RICO EN CORDERO, FUENTE DE PROTEÍNA ALTAMENTE APETECIBLE Y DIGESTIBLE\n                    RICO EN ARROZ, CEREAL ALTAMENTE DIGESTIBLE QUE PROTEGE LA MUCOSA INTESTINAL Y AYUDA A UNA ÓPTIMA DIGESTIÓN\n                    NIVEL EQUILIBRADO DE OLIGOELEMENTOS\n                    EXTRACTO DE YUCA QUE REDUCE EL OLOR DE LAS HECES\n                \n                    Composición:\n                    \n                    Carnes deshidratadas 31% (cordero 6%), maíz integral, cebada, fibra de cereal, aceite refinado de ave, arroz 4%, pulpa de remolacha, proteína hidrolizada de cordero 2%, garrofa, sustancias minerales, aceitunas 0,1% y extractos de plantas naturales (fuentes de prebióticos naturales: Yuca 0,02% (Yuca filamentosa), Camomila 0,01% (Chamaemelum nobile), Melisa 0,01% (Melisa Oficinales), Romero 0,01% (Rosmarinus oficinalis).\n                    \n                    Aditivos:\n                    \n                    Aditivos nutricionales/kg: Oligoelementos: Hierro 150 mg (como carbonato ferroso), Yodo 1,1 mg (como yoduro potásico), Cobre 10 mg (como sulfato de cobre (II) pentahidratado), Manganeso 40 mg (como óxido manganoso), Zinc 110 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos: Conservantes y antioxidantes naturales.\n                    \n                    Componentes analíticos:\n                    Humedad 	10%\n                    Proteína bruta 	26%\n                    Aceites y grasas brutos  	12%\n                    Fibras brutas  	2,3%\n                    Materia inorgánica  	7,9%\n                    Calcio 	2,2%\n                    Fósforo 	1,1%\n                    Vitamina A 	12000 UI/kg\n                    Vitamina D3  	1200 UI/kg\n                    Vitamina E 	(α-tocoferol) 100 mg/kg.', 27.95, NULL, 'dicancorderoyarroz.png', 'Dican', 'pienso-seco', 'kg', 14, 1.99, 'perro', 0, 'adult', 0, 0),
(122, 'DICAN ATÚN Y ARROZ 14KG', 'Alimento completo extrusionado para perros adultos de todas las razas con actividad física media alta.\n\n                    RICO EN ATÚN, PESCADO AZUL, FUENTE DE PROTEÍNA DE ALTO VALOR BIOLOGICO. RICO EN ÁCIDOS GRASOS ω-3, DHA Y EPA. BENEFICIOSO PARA EL CORAZÓN Y EL SISTEMA NERVIOSO.\n                    RICO EN ARROZ, CEREAL ALTAMENTE DIGESTIBLE QUE PROTEGE LA MUCOSA INTESTINAL Y AYUDA A UNA ÓPTIMA DIGESTIÓN.\n                    NIVEL EQUILIBRADO DE OLIGOELEMENTOS.\n                    EXTRACTO DE YUCA QUE REDUCE EL OLOR DE LAS HECES.\n                \n                    Composición:\n                    \n                    Carnes deshidratadas 20,5%, maíz integral, cebada, fibra de cereal, aceite refinado de ave, pescado azul deshidratado (atún 6%, salmón 4%), arroz 4%, garrofa, salmón hidrolizado 2%, sustancias minerales, aceitunas 0,1% y extractos de plantas naturales (fuentes de prebióticos naturales: Yuca 0,02% (Yuca filamentosa), Camomila 0,01% (Chamaemelum nobile), Melisa 0,01% (Melisa Oficinales), Romero 0,01% (Rosmarinus oficinalis).\n                    \n                    Aditivos:\n                    \n                    Aditivos nutricionales/kg: Oligoelementos: Hierro 150 mg (como carbonato ferroso), Yodo 1,1 mg (como yoduro potásico), Cobre 10 mg (como sulfato de cobre (II) pentahidratado), Manganeso 40 mg (como óxido manganoso), Zinc 110 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos: Conservantes y antioxidantes naturales.\n                    \n                    Componentes analíticos:\n                    Humedad 	10%\n                    Proteína bruta 	26%\n                    Aceites y grasas brutos  	12%\n                    Fibras brutas 	2,3%\n                    Materia inorgánica  	7,9%\n                    Calcio 	2.2%\n                    Fósforo 	1,1%\n                    Vitamina A 	12000 UI/kg\n                    Vitamina D3 	1200 UI/kg\n                    Vitamina E 	(α-tocoferol) 100 mg/kg', 27.95, NULL, 'dicanatunyarroz.png', 'Dican', 'pienso-seco', 'kg', 14, 1.99, 'perro', 0, 'adult', 0, 0),
(123, 'DICAN COMPLETE PAVO Y CALAMAR 14KG', 'Alimento completo extrusionado para perros adultos de todas las razas con actividad física media alta\n\n                    RICO EN PAVO, FUENTE DE PROTEÍNA DE ALTO VALOR BIOLOGICO.\n                    CON CALAMAR, FUENTE DE PROTEÍNA RICA EN AMINOÁCIDOS ESENCIALES. AYUDA A CONTROLAR EL NIVEL DE COLESTEROL.\n                    CON VERDURAS (ZANAHORIAS Y GUISANTES), FUENTE DE VITAMINAS Y MINERALES. AYUDAN A PREVENIR LA RETENCIÓN DE LÍQUIDOS.\n                    CROQUETAS DE DIFERENTES FORMAS, MÁS APETECIBLES\n                \n                    Composición:\n                    \n                    maíz, pavo (22,5%), trigo, aceite de pollo, calamar deshidratado (4%), verduras (zanahorias 2%, guisantes 2%), sustancias minerales, garrofa, proteínas de ave hidrolizadas y extractos de plantas (yuca 0,02%).\n                    \n                    Aditivos:\n                    \n                    Aditivos nutricionales/kg: Vitaminas, provitaminas y sustancias químicamente bien definidas de efecto análogo: Vitamina A 12000 U.I., Vitamina D3 1200 U.I., Vitamina E (α-tocoferol) 105 mg. Oligoelementos: Hierro 150 mg (como carbonato ferroso), Yodo 1,1 mg (como yoduro potásico), Cobre 10 mg (como sulfato cúprico pentahidratado), Manganeso 40 mg (como óxido manganoso), Zinc 110 mg (como óxido de zinc), Selenio 0,33 mg (como selenito sódico). Aditivos tecnológicos/kg: Conservantes, antioxidantes y aglomerantes (E-562: 15 g).\n                    \n                    Componentes analíticos:\n                    Humedad 	10%\n                    Proteína bruta 	25%\n                    Materias grasas brutas 	12%\n                    Celulosa bruta 	2.7%\n                    Cenizas brutas 	8%', 27.95, NULL, 'dicanpavoycalamar.png', 'Woolf', 'pienso-seco', 'kg', 14, 1.99, 'perro', 0, 'adult', 0, 0),
(124, 'WOOLF FILETES DE PAVO 100G', 'Snack natural Woolf Filetes de Pato para perros de cualquier edad o tamaño.\n\n                    Los snacks Woolf se caracterizan por su gran sabor y calidad que satisfacen los apetitos más exigentes gracias a su alta palatabilidad. Formulados para perros de cualquier tamaño, sin conservantes, colorantes ni aditivos para ofrecer snaks naturales a nuestras mascotas.\n                    \n                    Los snacks Woolf, son fabricados con tecnologías avanzadas y envases de calidad garantizando la conservación y la frescura de todas sus propiedades.\n                    \n                    Envasados heméticamente junto con unos pequeños saquitos desoxigenadores para garantizar la frescura del producto y de sus propiedades hasta llegar a las mascotas, evitando la oxidación de sus ingredientes y, evitando de este modo, la alteración del color y del sabor del mismo. Una vez abiertos, conservar en el frigorífico y consumir en un plazo de 7 días desde la apertura del envase.\n                    \n                    Composición:  pato(94%), bacalao(20%),almidón (2%), glicerina (0,5%).\n                    \n                    Análisis químico: Proteína bruta 35%, grasa bruta 6%, fibra bruta 1%, ceniza bruta 3,5%, humedad 25%\n                    \n                    Presentación: 100gr', 3.70, NULL, 'woolfsoftduckfillet.png', 'Woolf', 'snacks-y-huesos', 'g', 100, NULL, 'perro', 0, 'adult', 0, 0),
(125, 'WOOLF FILETES DE POLLO 100G', 'Snack natural Woolf Filetes de Pollo para perros de cualquier edad o tamaño.\n\n                    Los snacks Woolf se caracterizan por su gran sabor y calidad que satisfacen los apetitos más exigentes gracias a su alta palatabilidad. Formulados para perros de cualquier tamaño, sin conservantes, colorantes ni aditivos para ofrecer snaks naturales a nuestras mascotas.\n                    \n                    Los snacks Woolf, son fabricados con tecnologías avanzadas y envases de calidad garantizando la conservación y la frescura de todas sus propiedades.\n                    \n                    Envasados heméticamente junto con unos pequeños saquitos desoxigenadores para garantizar la frescura del producto y de sus propiedades hasta llegar a las mascotas, evitando la oxidación de sus ingredientes y, evitando de este modo, la alteración del color y del sabor del mismo. Una vez abiertos, conservar en el frigorífico y consumir en un plazo de 7 días desde la apertura del envase.\n                    \n                    Composición: pollo(94%), glicerina (0,5%).\n                    \n                    Componentes analíticos: Proteína bruta 45%, grasa bruta 4%, fibra bruta 1%, ceniza bruta 3,5%, humedad 25%. \n                    \n                    Presentación: 100gr', 3.70, NULL, 'woolffiletesdepollo.png', 'Woolf', 'snacks-y-huesos', 'g', 100, NULL, 'perro', 0, 'adult', 0, 0),
(126, 'WOOLF DADOS DE SALMÓN 100G', 'Snack natural Woolf dados de salmón para perros de cualquier edad o tamaño.\n\n                    Los snacks Woolf se caracterizan por su gran sabor y calidad que satisfacen los apetitos más exigentes gracias a su alta palatabilidad. Formulados para perros de cualquier tamaño, sin conservantes, colorantes ni aditivos para ofrecer snaks naturales a nuestras mascotas.\n                    \n                    Los snacks Woolf, son fabricados con tecnologías avanzadas y envases de calidad garantizando la conservación y la frescura de todas sus propiedades.\n                    \n                    Envasados heméticamente junto con unos pequeños saquitos desoxigenadores para garantizar la frescura del producto y de sus propiedades hasta llegar a las mascotas, evitando la oxidación de sus ingredientes y, evitando de este modo, la alteración del color y del sabor del mismo. Una vez abiertos, conservar en el frigorífico y consumir en un plazo de 7 días desde la apertura del envase.\n                    \n                    Composición:salmón (91%), proteína de guisante (4%), glicerina (3%).\n                    \n                    Componentes analíticos: Proteína bruta 35%, grasa cruda 8%, fibra cruda 1%, ceniza bruta 4%, humedad 25%. \n                    \n                    Presentación: 100gr', 4.10, NULL, 'woolfdadosdesalmon.png', 'Woolf', 'snacks-y-huesos', 'g', 100, NULL, 'perro', 0, 'adult', 0, 0),
(127, 'WOOLF TWISTER DE PATO 100G', 'Snack natural Woolf Twister de pato para perros de cualquier edad o tamaño.\n\n                    Los snacks Woolf se caracterizan por su gran sabor y calidad que satisfacen los apetitos más exigentes gracias a su alta palatabilidad. Formulados para perros de cualquier tamaño, sin conservantes, colorantes ni aditivos para ofrecer snaks naturales a nuestras mascotas.\n                    \n                    Los snacks Woolf, son fabricados con tecnologías avanzadas y envases de calidad garantizando la conservación y la frescura de todas sus propiedades.\n                    \n                    Envasados heméticamente junto con unos pequeños saquitos desoxigenadores para garantizar la frescura del producto y de sus propiedades hasta llegar a las mascotas, evitando la oxidación de sus ingredientes y, evitando de este modo, la alteración del color y del sabor del mismo. Una vez abiertos, conservar en el frigorífico y consumir en un plazo de 7 días desde la apertura del envase.\n                    \n                    Composición: pato (91%), vacuno (4%), glicerina (3%).\n                    \n                    Componentes analíticos: Proteína bruta 35%, grasa cruda 8%, fibra cruda 1%, ceniza bruta 4%, humedad 25%. \n                    \n                    Presentación: 100gr', 3.70, NULL, 'woolftwisterdepato.png', 'Woolf', 'snacks-y-huesos', 'g', 100, NULL, 'perro', 0, 'adult', 0, 0),
(128, 'WOOLF DADOS DE CORDERO 100G', 'Snack natural Woolf Dados de Cordero para perros de cualquier edad o tamaño.\n\n                    Los snacks Woolf se caracterizan por su gran sabor y calidad que satisfacen los apetitos más exigentes gracias a su alta palatabilidad. Formulados para perros de cualquier tamaño, sin conservantes, colorantes ni aditivos para ofrecer snaks naturales a nuestras mascotas.\n                    \n                    Los snacks Woolf, son fabricados con tecnologías avanzadas y envases de calidad garantizando la conservación y la frescura de todas sus propiedades.\n                    \n                    Envasados heméticamente junto con unos pequeños saquitos desoxigenadores para garantizar la frescura del producto y de sus propiedades hasta llegar a las mascotas, evitando la oxidación de sus ingredientes y, evitando de este modo, la alteración del color y del sabor del mismo. Una vez abiertos, conservar en el frigorífico y consumir en un plazo de 7 días desde la apertura del envase.\n                    \n                    Composición: cordero(91%), glicerina (0,5%).\n                    \n                    Análisis químico: Proteína bruta 35%, grasa bruta 6%, fibra bruta 1%, ceniza bruta 3,2%, humedad 25%\n                    \n                    Presentación: 100gr', 4.10, NULL, 'woolfdadosdecordero.png', 'Woolf', 'snacks-y-huesos', 'g', 100, NULL, 'perro', 0, 'adult', 0, 0),
(129, 'WOOLF POLLO CON MARISCO 100G', 'Snack natural Woolf pollo con marisco para perros de cualquier edad o tamaño.\r\n\r\n                    Los snacks Woolf se caracterizan por su gran sabor y calidad que satisfacen los apetitos más exigentes gracias a su alta palatabilidad. Formulados para perros de cualquier tamaño, sin conservantes, colorantes ni aditivos para ofrecer snaks naturales a nuestras mascotas.\r\n                    \r\n                    Los snacks Woolf, son fabricados con tecnologías avanzadas y envases de calidad garantizando la conservación y la frescura de todas sus propiedades.\r\n                    \r\n                    Envasados heméticamente junto con unos pequeños saquitos desoxigenadores para garantizar la frescura del producto y de sus propiedades hasta llegar a las mascotas, evitando la oxidación de sus ingredientes y, evitando de este modo, la alteración del color y del sabor del mismo. Una vez abiertos, conservar en el frigorífico y consumir en un plazo de 7 días desde la apertura del envase.\r\n                    \r\n                    Composición:  Pollo (92%), extracto de marisco (1%), glicerina (4%).\r\n                    \r\n                    Componentes analíticos: Proteína bruta 40%, grasa cruda 4%, fibra cruda 1%, ceniza bruta 4%, humedad 30%.\r\n                    \r\n                    Presentación: 100gr', 4.10, NULL, 'woolfpolloconmarisco.png', 'Woolf', 'snacks-y-huesos', 'g', 100, NULL, 'perro', 0, 'adult', 0, 0),
(130, 'WOOLF SNACK CEPILLO DENTAL PEQUEÑO 200G', 'Woolf presenta sus nuevos mordedores comestibles para perros Woolfies, unos mordedores en forma de cepillo que promueven la salud dental de tu mascota ya que eliminan el sarro y la placa dental. Una divertida forma de mantener los dientes de tu mascota sin sarro, los mordedores comestibles Woolfies están fabricados con ingredientes comestibles y muy fáciles de digerir. Contribuye a la eliminación del mal aliento y a enfermedades dentales que en muchas ocasiones derivan en la pérdida de las piezas de tu mascota. Se aconseja lavar los dientes de tu mascota a menudo para poder garantizar su salud bucodental, Woolf ha diseñado estos mordedores que tu perro roerá pasando largas horas entretenido aportándole grandes beneficios.\n\n                    Los cepillos dentales Woolfies Dental Brush son para perros de tamaño pequeño-mediano.\n                    \n                    Composición:\n                    \n                    -Harina de Patata Dulce\n                    \n                    -Almidón de Maíz\n                    \n                    -Almidón Pregelatinizado\n                    \n                    -Harina de Guisante\n                    \n                    -Glicerina\n                    \n                    -Aceite Vegetal\n                    \n                    -Levadura de Cerveza deshidratada\n                    \n                    -Carbonato de Calcio\n                    \n                    -Algas deshidratadas\n                    \n                    -agua\n                    \n                    -Aditivos: Ascorbato de Calcio (fuente de vitamina C), celulosa en polvo, sabores naturales, sorbato de Potasio, condroitin, lecitina, pigmentos comestibles\n                    \n                    -Aditivos nutricionales: Vitamina E. Componentes analíticos: proteína bruta 4,78%, grasa cruda 0,2%, fibra bruta 0,1%, ceniza bruta 0,95%, humedad 18%.\n                    \n                    Woolf diseña sus productos para beneficiar a tu mascota, tanto sus snacks como sus mordedores son beneficiosos en el día a día de tu mascota.', 4.95, NULL, 'woolcepillodentalsmall.png', 'Woolf', 'snacks-y-huesos', 'g', 200, NULL, 'perro', 0, 'adult', 0, 0);
INSERT INTO `products` (`id`, `nombre`, `descripcion`, `precio`, `precio_oferta`, `imagen`, `marca`, `categoria`, `ud_peso`, `peso_unidad`, `precio_kilogramo`, `tipo_animal`, `destacado`, `edad`, `visitas`, `ventas`) VALUES
(131, 'WOOLF SNACK CEPILLO DENTAL MEDIANO 200G', 'Mordedores dentales para perros de tamaño mediano, los mordedores Woolfies Dental Brush contribuyen a la eliminación del sarro y la placa en los dientes de tu mascota. Un mordedor que elimina el mal aliento y evita enfermedades dentales que en algunos casos pueden provocar la pérdida de las piezas dentales de las mascotas. Woolf ha diseñado estos originales cepillos que tu mascota roerá haciendo un efecto cepillado en sus dientes y previniendo la aparición del sarro en sus dientes. Sus ingredientes son comestibles y muy digeribles. Woolfiees dental brush está indicado para perros de tamaño mediano-grande.\n\n                    En Woolf Snacks Ibérica te recordamos que es importante limpiar regularmente con cepillo y pasta los dientes de las mascotas para evitar la aparición de sarro y de la placa bacteriana en los dientes de tu mascota. Con la utilización de los Mordedores Woolfies Dental Brush ayudarás a mantener limpia y sin olor la dentadura de tu mascota.\n                    \n                    Composición:\n                    \n                    Harina de Patata Dulce, Almidón de Maíz, Almidón Pregelatinizado, Harina de Guisante, Glicerina, Aceite Vegetal, Levadura de Cerveza deshidratada, Carbonato de Calcio, Algas deshidratadas, agua,\n                    \n                    Aditivos: Ascorbato de Calcio (fuente de vitamina C), celulosa en polvo, sabores naturales, sorbato de Potasio, condroitin, lecitina, pigmentos comestibles,\n                    \n                    Aditivos nutricionales: Vitamina E. Componentes analíticos: proteína bruta 4,78%, grasa cruda 0,2%, fibra bruta 0,1%, ceniza bruta 0,95%, humedad 18%.\n                    \n                    Se recomienda ofrecer una pieza al día a perros a partir de los 9 meses de edad cuyo pero sea a partir de 2,5 Kg.', 4.95, NULL, 'woolcepillodentalmedium.png', 'Woolf', 'snacks-y-huesos', 'g', 200, NULL, 'perro', 0, 'adult', 0, 0),
(132, 'MONGE HUMEDO POLLO CON ALOE 80g', 'Composición:\n\n                    Pollo 55%, aloe 5%, arroz, F.O.S. (Fructo-oligosacáridos) 400 mg / kg.\n\n                    Componentes analíticos:\n\n                    Humedad 82%, proteínas crudas 13%, grasas crudas 0,5%, fibras crudas 1%, cenizas crudas 2%.\n\n                    Aditivos nutricionales:\n\n                    Vitamina E (alfa-tocoferol) 50mg / kg.\n\n                    2-3 latas satisfacer las necesidades diarias de un peso promedio de gato. Para ser servido a temperatura ambiente, o calentado. Conservar en el refrigerador después de abrir. No le dé demasiado frío al producto. Siempre deje agua fresca y limpia a disposición del animal.', 1.75, NULL, 'mongehumedopolloyaloe.png', 'Monge', 'comida-humeda', 'g', 80, NULL, 'gato', 0, 'kitten', 0, 0),
(133, 'MONGE HUMEDO ATUN Y MANZANA 80g', 'Composición:\n\n                Atún (Katsuwonus pelamis) 55%, manzana 5%, arroz, F.O.S. (Fructo-oligosacáridos) 400 mg / kg.\n\n                Componentes analíticos:\n\n                Humedad 82%, proteínas crudas 13%, grasas crudas 0,5%, fibras crudas 1%, cenizas crudas 2%.\n\n                Aditivos nutricionales:\n\n                Vitamina E (alfa-tocoferol) 50mg / kg.\n\n                2-3 latas satisfacer las necesidades diarias de un peso promedio de gato. Para ser servido a temperatura ambiente, o calentado. Conservar en el refrigerador después de abrir. No le dé demasiado frío al producto. Siempre deje agua fresca y limpia a disposición del animal.', 1.75, NULL, 'mongehumedoatunymanzana.png', 'Monge', 'comida-humeda', 'g', 80, NULL, 'gato', 0, 'adult', 0, 0),
(134, 'MONGE KITTEN RICO EN POLLO 1.5KG', 'Composición:\n\n                Pollo (fresco 10%, deshidratado 26%), arroz, grasa animal (contenido de grasa de aceite de pollo 99,6%, conservado con antioxidantes naturales), maíz, proteínas animales hidrolizadas, pulpa de remolacha, harina de gluten de maíz, ), pescado (salmón deshidratado), aceite de pescado (aceite de salmón), levadura de cerveza (fuente de MOS y vitamina B12), fibra de guisante insoluble, taurina, XOS (xiloligosacáridos 3 g / kg), levadura hidrolizada schidigera, escaramujo.\n\n                Componentes analíticos:\n\n                Proteínas Crudas 34,00%, Aceites y Grasas Crudos 20,00%, Grasas Gruesas 2,50%, Cenizas Crudas 6,50%, Cálcio 1,50%, Fósforo 1,10%, Omega 6 Ácidos Grasos Esenciales 8,98%, Omega 3 Ácidos Grasos Esenciales 1,00%, Energía Metabolizable 4,220 Kcal /kg.\n\n                Aditivos nutricionales:\n\n                Vitamina A 26,000 UI, Vitamina D3 1,830 UI, Vitamina E 130 mg, Vitamina B1 12 mg, Vitamina B2 12 mg, Vitamina B6 7 mg, Vitamina B12 0,10 mg, Biotina 0,30 mg, Niacina 46 mg, Vitamina C 200 mg, Ácido pantoténico 12 mg, ácido fólico 16 mg, cloruro de colina 3 000 mg, inositol 15 mg, E5 Sulfato manganeso monohidrato 32 mg, E6 óxido de zinc 150 mg, E4 Sulfato de cobre pentahidratado 13 mg, E1 Sulfato de hierro monohidrato 110 mg, E8 Selenito sódico 0,20 mg, E2 Iodato de calcio 1,80 mg, L-carnitina 550 mg, DL-metionina técnicamente pura 8 g, Taurina 0,25%.\n\n                Puede ser administrado libremente, o racionado según el peso y la edad de su gatito. El gatito siempre debe tener agua fresca disponible. Es conveniente dividir la ración diaria en porciones 2/3. Para las hembras lactantes, las croquetas deben administrarse ad libitum, ya que las necesidades del gato varían dependiendo del número de gatitos que tenga.', 14.30, NULL, 'mongekittenricoenpollo.png', 'Monge', 'pienso-seco', 'kg', 2, 9.53, 'gato', 0, 'kitten', 2, 0),
(135, 'MONGE ADULT RICO EN POLLO 1.5KG', 'Composición:\n\n                Pollo (fresco 10%, deshidratado 26%), arroz, grasa animal (contenido de grasa de aceite de pollo 99,6%, conservado con antioxidantes naturales), proteínas animales hidrolizadas, pulpa de remolacha, gluten de maíz, huevo entero en polvo (salmón deshidratado), aceite de pescado (aceite de salmón), levadura de cerveza (fuente de MOS y vitamina B12), fibra de guisante insoluble, taurina, XOS (xiloligosacáridos 3 g / kg), levadura hidrolizada (MOS), yucca schidigera, .\n\n                Componentes analíticos:\n\n                Proteínas Crudas 33,00%, Aceites y Grasas Crudos 14,00%, Fibra Bruta 2,50%, Ceniza Cruda 6,50%, Calcio 1,80%, Fósforo 1,20%, Omega 6 Ácidos Grasos Esenciales 7,00%, Omega 3 Ácidos Grasos Esenciales 0,80%, Energía Metabolizable 3,950 Kcal /kg.\n\n                Aditivos nutricionales:\n\n                Vitamina A 20.000 IU, Vitamina D3 1.400 UI, Vitamina E 130 mg, Vitamina B1 10 mg, Vitamina B2 10 mg, Vitamina B6 6 mg, Vitamina B12 0,10 mg, Biotina 0,26 mg, Niacina 40 mg, Vitamina C 200 mg, Ácido pantoténico 10 mg, ácido fólico 14 mg, cloruro de colina 2,500 mg, inositol 15 mg, E5 Sulfato manganeso monohidrato 32 mg, E6 óxido de zinc 150 mg, E4 Sulfato de cobre pentahidratado 13 mg, E1 Sulfato de hierro monohidrato 110 mg, E8 Selenito sódico 0,20 mg, E2 Iodato de calcio 1,80 mg, L-carnitina 550 mg, DL-metionina técnicamente pura 8,8 g, Taurina 0,25%.\n\n                Puede ser administrado libremente, en algunos casos, tal como para la obesidad y / u otros problemas clínicos. Es aconsejable restringir las dosis, siguiendo el consejo de un veterinario y / o siguiendo la tabla. Es importante que su gato siempre tenga agua fresca y limpia disponible.', 13.00, NULL, 'mongeadultricoenpollo.png', 'Monge', 'pienso-seco', 'kg', 2, 8.66, 'gato', 0, 'adult', 0, 0),
(136, 'MONGE HAIRBALL RICO EN POLLO 1.5KG', 'Composición:\n\n                Pollo (fresco 10%, deshidratado 26%), maíz, grasa animal (contenido de grasa de aceite de pollo 99,6%, conservado con antioxidantes naturales), arroz, pulpa de remolacha, harina de gluten de maíz, proteínas animales hidrolizadas, huevo entero ), pescado (salmón deshidratado), aceite de pescado (aceite de salmón), levadura de cerveza (fuente de MOS y vitamina B12), fibra de guisante insoluble, taurina, XOS (xiloligosacáridos 3 g / kg), levadura hidrolizada schidigera, escaramujo.\n\n                Componentes analíticos:\n\n                Proteína Cruda 31,00%, Aceites y Grasas Crudos 16,00%, Fibra Bruta 3,50%, Ceniza Cruda 6,50%, Calcio 1,40%, Fósforo 1,00%, Omega 6 Ácidos Grasos Esenciales 10,00%, Omega 3 Ácidos Grasos Esenciales 1,50%, Energía Metabolizable 4,000 Kcal /kg.\n\n                Aditivos nutricionales:\n\n                Vitamina A 20.000 IU, Vitamina D3 1.400 UI, Vitamina E 130 mg, Vitamina B1 10 mg, Vitamina B2 10 mg, Vitamina B6 6 mg, Vitamina B12 0,10 mg, Biotina 0,26 mg, Niacina 40 mg, Vitamina C 200 mg, Ácido pantoténico 10 mg, ácido fólico 14 mg, cloruro de colina 2,500 mg, inositol 15 mg, E5 Sulfato manganeso monohidrato 32 mg, E6 óxido de zinc 150 mg, E4 Sulfato de cobre pentahidratado 13 mg, E1 Sulfato de hierro monohidrato 110 mg, E8 Selenito sódico 0,20 mg, E2 Iodato de calcio 1,80 mg, L-carnitina 550 mg, DL-metionina técnicamente pura 8,50 g, Taurina 0,25%.\n\n                Puede ser administrado libremente, en algunos casos, tal como para la obesidad y / u otros problemas clínicos. Es aconsejable restringir las dosis, siguiendo el consejo de un veterinario y / o siguiendo la tabla. Es importante que su gato siempre tenga agua fresca y limpia disponible.', 14.30, NULL, 'mongehairballricoenpollo.png', 'Monge', 'pienso-seco', 'kg', 2, 9.53, 'gato', 0, 'adult', 0, 0),
(137, 'MONGE INDOOR RICO EN POLLO 1.5KG', 'Composición:\n\n                Pollo (fresco 10%, deshidratado 26%), arroz, grasa animal (contenido de grasa de aceite de pollo 99,6%, conservado con antioxidantes naturales), pulpa de remolacha, harina de gluten de maíz, proteínas animales hidrolizadas, pescado (salmón deshidratado), aceite de pescado (aceite de salmón), levadura de cerveza (fuente de MOS y vitamina B12), fibra de guisante insoluble, taurina, XOS (xiloligosacáridos 3 g / kg), levadura hidrolizada (MOS), yuca schidigera, escaramujo\n\n                Componentes analíticos:\n\n                Proteína Cruda 29,00%, Aceite y Grasas Crudos 12,00%, Fibra Bruta 3,00%, Ceniza Cruda 6,50%, Calcio 1,25%, Fósforo 0,90%, Omega 6 Ácidos Grasos Esenciales 8,50%, Omega 3 Ácidos Grasos Esenciales 1,00%, Energía Metabolizable 3,840 kcal /kg.\n\n                Aditivos nutricionales:\n\n                Vitamina A 20.000 IU, Vitamina D3 1.400 UI, Vitamina E 130 mg, Vitamina B1 10 mg, Vitamina B2 10 mg, Vitamina B6 6 mg, Vitamina B12 0,10 mg, Biotina 0,26 mg, Niacina 40 mg, Vitamina C 200 mg, Ácido pantoténico 10 mg, ácido fólico 14 mg, cloruro de colina 2,500 mg, inositol 15 mg, E5 Sulfato manganeso monohidrato 32 mg, E6 óxido de zinc 150 mg, E4 Sulfato de cobre pentahidratado 13 mg, E1 Sulfato de hierro monohidrato 110 mg, E8 Selenito sódico 0,20 mg, E2 Iodato de calcio 1,80 mg, L-carnitina 550 mg, DL-metionina técnicamente puro 7,60 g, Taurina 0,25%.\n\n                Puede ser administrado libremente, en algunos casos, tal como para la obesidad y / u otros problemas clínicos. Es aconsejable restringir las dosis, siguiendo el consejo de un veterinario y / o siguiendo la tabla. Es importante que su gato siempre tenga agua fresca y limpia disponible', 13.30, NULL, 'mongeindoorricoenpollo.png', 'Monge', 'pienso-seco', 'kg', 2, 8.86, 'gato', 0, 'adult', 0, 0),
(138, 'MONGE ESTERILIZADO RICO EN POLLO 1.5KG', 'Composición:\n\n                Pollo (fresco 10%, deshidratado 26%), trigo, harina de gluten de maíz, avena, proteínas animales hidrolizadas, grasa animal (contenido de grasa de aceite de pollo 99,6%, conservado con antioxidantes naturales), fibra de guisante insoluble, huevo entero proteínas), pescado (salmón deshidratado), aceite de pescado (aceite de salmón), taurina, XOS (xiloligosacáridos 3 g / kg), levadura hidrolizada (MOS), yuca schidigera.\n\n                Componentes analíticos:\n\n                Grasas Grasas 10,00%, Grasas Grises 6,00%, Grasas Gruesas 6,00%, Calcio 1,20%, Fosforo 1,10%, Magnesio 0,08%, Sodio 0,20%, Omega 6 Acidos Grasos Esenciales 8,50%, Omega 3 Grasos Esenciales Ácidos 1,00%, Energía Metabolizable 3,590 Kcal / kg.\n\n                Aditivos nutricionales:\n\n                Vitamina A 32.000 UI, Vitamina D3 1.500 UI, Vitamina E 510 mg, Vitamina B1 22 mg, Vitamina B2 23 mg, Vitamina B6 14 mg, Vitamina B12 0,20 mg, Biotina 0,57 mg, Niacina 100 mg, Vitamina C 360 mg, Ácido pantoténico 22 mg, ácido fólico 31 mg, cloruro de colina 2,500 mg, E5 Sulfato manganeso monohidrato 56 mg, E6 óxido de zinc 260 mg, E4 Sulfato de cobre Pentahidrato 22 mg, E1 Sulfato de hierro monohidrato 185 mg, E8 Selenito sódico 0,37 mg, E2 yodato de calcio 2,80 mg, L - Carnitina 500 mg, DL - metionina técnicamente pura 3,00 g, Taurina 0,25%.\n\n                Puede ser administrado libremente, en algunos casos, tal como para la obesidad y / u otros problemas clínicos. Es aconsejable restringir las dosis, siguiendo el consejo de un veterinario y / o siguiendo la tabla. Es importante que su gato siempre tenga agua fresca y limpia disponible.', 13.90, NULL, 'mongeesterilizadoricoenpollo.png', 'Monge', 'pienso-seco', 'kg', 2, 9.26, 'gato', 0, 'adult', 0, 0),
(139, 'MONGE URINARIO RICO EN POLLO 1.5KG', 'Composición:\n\n                Arroz, harina de gluten de maíz, pollo (fresco 5%, deshidratado 18%), pescado (salmón deshidratado), grasa animal (contenido de grasa de aceite de pollo 99,6%, conservado con antioxidantes naturales), avena, proteínas animales hidrolizadas, guisantes deshidratados, huevo entero polvo (rico en proteínas completas), aceite de pescado (aceite de salmón), taurina, XOS (xiloligosacáridos 3 g / kg), levadura hidrolizada (MOS), yuca schidigera.\n\n                Componentes analíticos:\n\n                Proteína Cruda 31,00%, Aceite y Grasas Crudos 16,00%, Fibra Bruta 2,50%, Ceniza Cruda 5,00%, Calcio 0,80%, Fósforo 0,80%, Magnesio 0,06%, Sodio 0,20%, Omega 6 Ácidos Grasos Esenciales 8,50%, Omega 3 Grasos Esenciales Ácidos 1,00%, Energía Metabolizable 4,100 Kcal / kg.\n\n                Aditivos nutricionales:\n\n                Vitamina A 27.000 UI, Vitamina D3 1.500 UI, Vitamina E 510 mg, Vitamina B1 22 mg, Vitamina B2 23 mg, Vitamina B6 14 mg, Vitamina B12 0,20 mg, Biotina 0,57 mg, Niacina 100 mg, Vitamina C 360 mg, Ácido pantoténico 22 mg, ácido fólico 31 mg, cloruro de colina 2,500 mg, E5 Sulfato manganeso monohidrato 56 mg, E6 óxido de zinc 260 mg, E4 Sulfato de cobre Pentahidrato 22 mg, E1 Sulfato de hierro monohidrato 185 mg, E8 Selenito sódico 0,37 mg, E2 yodato de calcio 2,80 mg, L - Carnitina 500 mg, DL - metionina técnicamente pura 3,00 g, Taurina 0,25%.\n\n                Puede ser administrado libremente, en algunos casos, tal como para la obesidad y / u otros problemas clínicos. Es aconsejable restringir las dosis, siguiendo el consejo de un veterinario y / o siguiendo la tabla. Es importante que su gato siempre tenga agua fresca y limpia disponible.', 13.60, NULL, 'mongeurinarioricoenpollo.png', 'Monge', 'pienso-seco', 'kg', 2, 9.06, 'gato', 0, 'adult', 0, 0),
(140, 'PURITY HAIRBALL 1.5KG', '76 % DE PROTEÍNAS DE ORIGEN ANIMAL\n\n                COMIDA COMPLETA PARA GATOS ADULTOS DE PELO LARGO\n                \n                CARNE DE VACUNO - tiene un alto valor biológico y es una de las más completa desde el punto de vista nutricional al contener grandes cantidades de aminoácidos esenciales, hierro y vitamina B2, La carne de res estimula el crecimiento de la masa muscular y afecta favorablemente al sistema inmunológico del organismo.\n                \n                HÍGADO DE VACUNO - es una fuente importante de vitaminas y minerales. La vitamina B12, junto con el hierro, tienen un efecto positivo sobre la hematopoyesis, En el hígado el hierro se encuentra en forma de hierro hemínico que es más fácil de absorber y aprovechar.\n                \n                ORTIGA - es un ingrediente activo que facilita la depuración de la sangre y, por tanto, la desintoxicación del cuerpo; incide favorable­ mente en los riñones y la vejiga. Además, contiene el ácido silícico que tiene un efecto muy beneficioso sobre la vitalidad de los huesos, los ojos, los dientes, los cartílagos, el tejido fibroso, los tendones y las articulaciones.\n                \n                HOJAS DE DIENTE DE LEÓN - estimula la actividad del aparato digestivo y la secreción de jugos gástricos. Tiene beneficios cura­tivos contra la infección de las vías urinarias y los cálculos renales; aumenta la producción y la secreción de la bilis en los trastornos gástricos; aumenta el apetito, estimula la producción de los ácidos gástricos y beneficia positivamente al hígado y a los riñones.\n                \n                LINAZA - es una excelente fuente de ácidos grasos omega 3 para una piel y un pelaje más sano. Estimula el sistema inmunológico, mejora la capacidad de digestión.\n                \n                FIBRA - facilita el buen funcionamiento de las paredes intestinales y la desintoxicación del cuerpo para evitar que las toxinas persistan demasiado tiempo en el intestino facilitando de este modo la expul­sión del bezoar formado de pelo.\n                \n                LEVADURA DE CERVEZA - aumenta el apetito, mejora la digestión y reduce el cansancio. También actúa como repelente.\n                \n                COMPOSICIÓN:\n                \n                carne (carne de hígado fresco de vacuno 50 %, carne deshidrata­da de vacuno 13 %, y carne deshidratada de pollo 13 %, hígado de cerdo 4 %), patatas de cultivo, guisantes verdes, grasa de aves, fibra de remolacha, fibra natural, huevos de gallina, linaza 1,5 %, levadura de cerveza 1,3 %, levadura Saccharomyces cerevisiae inactiva, aceite prensado en frío procedente de salmón noruego, complejo de hierbas (hojas de ortiga mayor 0,25 %, hojas de diente de león 0,25 %, flores de manzanilla de Castilla, hojas de melisa, flores de tilo norteño), manzanas, minerales, alga Schyzochitrium lamacinum, raíz de achicoria, yuca de Mojave.\n                \n                COMPONENTES ANALÍTICOS:\n                \n                proteína bruta 31 %, aceites y grasas brutos 19 %, fibras brutas 4,l %, ceniza bruta 6,8 %, calcio 1,1 %, fósforo 0,8 %, sodio 0,4 %.', 12.60, NULL, 'purityhairball.png', 'Purity', 'pienso-seco', 'kg', 2, 8.40, 'gato', 0, 'adult', 0, 0),
(141, 'PURITY CASTRATE 1.5KG', '80 % DE PROTEÍNAS DE ORIGEN ANIMAL\n\n                COMIDA COMPLETA PARA GATOS ADULTOS CON SOBREPESO, CASTRADOS Y ESTERILIZADOS\n                \n                CARNE DE POLLO - es ligera, sabrosa y altamente digestible gracias al pequeño diámetro de las fibras musculares y el bajo contenido del colágeno y la elastina. Es rica en hierro y zinc, dos minerales que son muy importantes para oxigenar la sangre y los tejidos, y para una piel más sana del animal. El alto contenido de ácido linoleico contribuye a proteger la piel y es beneficioso para la calidad del pelaje y el sistema reproductivo.\n                \n                ALFALFA - tiene un efecto positivo en el aparato digestivo y estimu­la la depuración de los riñones. Es beneficiosa para el metabolismo celular del cuerpo, fortalece las defensas del cuerpo y lo regenera.\n                \n                HOJAS DE DIENTE DE LEÓN - estimula la actividad del aparato digestivo y la secreción de jugos gástricos. Tiene beneficios cura­tivos contra la infección de las vías urinarias y los cálculos renales; aumenta la producción y la secreción de la bilis en los trastornos gástricos; aumenta el apetito, estimula la producción de los ácidos gástricos y beneficia positivamente al hígado y a los riñones.\n                \n                GROSELLA NEGRA - es rica en vitaminas y minerales. Retrasa el envejecimiento, fortalece el sistema inmunológico y tiene un efecto positivo sobre la elasticidad de los vasos sanguíneos.\n                \n                CARDO MARIANO - contiene antioxidantes, estimula el creci­miento de las células del hígado, es beneficioso para el hígado y le protege de las toxinas.\n                \n                L-CARNITINA - facilita la eliminación de grasa y ayuda a proteger el miocardio.\n                \n                COMPOSICIÓN:\n                \n                carne (carne deshidratada de pollo 27,5 %, carne de pollo fresca 30,5 %, carne deshidratada de pato 6 %, hígado de cerdo 4 %), patatas de cultivo, guisantes verdes, fibra de remolacha, grasa de aves, al­falfa 2,5 %, manzanas, huevos de gallina, levadura de cerveza, leva­dura Saccharomyces cerevisiae inactiva, linaza, grosella negra 1 %, complejo de hierbas (hojas de ortiga mayor 1 %, hojas de diente de león 0,25%, flores de manzanilla de Castilla, hojas de melisa, flores de tilo norteño), aceite prensa­do en frío procedente del salmón noruego, raíz de achicoria, cardo mariano 0,1 %, alga de agua dulce clorela, yuca de Mojave, complejo de antioxidantes naturales para la regeneración celular.\n                \n                COMPONENTES ANALÍTICOS:\n                \n                proteína bruta 35 %, aceites y grasas brutos 12 %, fibras brutas 3,5 %, ceniza bruta 7,4 %, calcio 1,1%, fósforo 0,83 %, sodio 0,33 %.', 12.60, NULL, 'puritycastrate.png', 'Purity', 'pienso-seco', 'kg', 2, 8.40, 'gato', 0, 'adult', 0, 0),
(142, 'PURITY DELICIOUS 1.5KG', '\n\n                    7l % DE PROTEÍNAS DE ORIGEN ANIMAL\n                    \n                    ALIMENTO COMPLETO Y MUY SABROSO, PREPARADO CON INGREDIENTES CUIDADOSAMENTE SELECCIONADOS PARA GATOS ADULTOS EXIGENTES\n                    \n                    LA CARNE DE CAZA - es un alimento nutritivo, fácilmente digerible y bajo en grasas. Es rico en minerales (sodio, potasio, hierro, fósforo) y vitaminas del grupo B. La carne de caza se caracteriza por un aroma y un sabor específicos.\n                    \n                    MELISA - calma, relaja y mejora la digestión.\n                    \n                    MANZANILLA - ejerce una influencia positiva en el aparato di­gestivo y el sistema urinario, también tiene efecto antiinflamatorio y antiséptico y reduce la flatulencia. El complejo tiene un efecto positivo en el aparato digestivo y el sistema urinario.\n                    \n                    ARÁNDANOS - fortalecen la vista, la elasticidad y la firmeza de las paredes de los vasos sanguíneos. Además, tienen un efecto desinfectante que incide positivamente en las enfermedades inflamatorias del aparato digestivo o el sistema urinario.\n                    \n                    CLORELA- contiene una cantidad significativa de vitaminas, mine­rales y proteínas que afectan positivamente al cuerpo. Retrasa el envejecimiento, tiene un efecto positivo en el hemograma y estimula la desintoxicación.\n                    \n                    EXTRACTO DE ROMERO - sirve como un antioxidante natural que protege las células musculares del daño causado por los radicales libres, prolonga la vida plena de las células, estimula la función del hígado y mejora la digestión.\n                    \n                    EL HÍGADO DE JABALÍ - es una fuente importante de vitaminas (A, D y vitaminas del grupo B) y minerales (hierro, zinc, cobre). Gracias a su composición, incide positivamente en la función normal de los glóbulos rojos y la hematopoyesis\n                    \n                    COMPOSICIÓN:\n                    \n                    carne (carne de caza fresca 25 %, carne deshidratada de pato 20 %, hígado de cerdo fresco 19 %, carne deshidratada de res y de cerdo 6 %), guisantes verdes, patatas, grasa de aves, fibra de remolacha, hue­vos de gallina, levadura de cerveza, linaza, manzanas, minerales, le­vadura Saccharomyces cerevisiae inactiva, aceite prensado en frío procedente de salmón noruego, complejo de hierbas (hojas de orti­ga mayor, hojas de diente de león, flores de manzanilla de Castilla 0,17%, hojas de melisa 0,17 %, flo­res de tilo norteño), arándanos 1 %, raíz de achicoria, yuca de Mojave, alga de agua dulce clorela 0,05 %.\n                    \n                    COMPONENTES ANALÍTICOS:\n                    \n                    proteína bruta 33,5 %, aceites y grasas brutos 20,5 %, fibras brutas 2,3 %, ceniza bruta 8,3 %, calcio 1,5 %, fósforo 1,1 %, sodio 0,4 %.', 12.99, NULL, 'puritydelicious.png', 'Purity', 'pienso-seco', 'kg', 2, 8.66, 'gato', 0, 'adult', 0, 0),
(143, 'PURITY INDOOR 1.5KG', '69% DE PROTEÍNAS DE ORIGEN ANIMAL\n\n                    ALIMENTO COMPLETO PARA GATOS ADULTOS QUE PERMANECEN PREFERENTEMENTE O SIEMPRE EN EL INTERIOR DE LAS CASAS\n                    \n                    EL PESCADO - es una fuente completa de proteínas, grasas de alto valor biológico, vitaminas A, D y 8 y minerales (fósforo, flúor y sodio). Contiene, sobre todo, yodo, esencial para el normal funcio­namiento de la glándula tiroides.\n                    \n                    MELISA - calma, relaja y mejora la digestión.\n                    \n                    YUCA DE MOJAVE - estimula el sistema inmunológico, el hígado y los riñones. Incide en la liberación de gases intestinales y la reduc­ción del mal olor de los excrementos.\n                    \n                    GROSELLA NEGRA - es rica en vitaminas y minerales. Retrasa el envejecimiento, fortalece el sistema inmunológico y tiene un efecto positivo sobre la elasticidad de los vasos sanguíneos.\n                    \n                    ALFALFA - tiene un efecto positivo en el aparato digestivo y esti­mula la depuración de los riñones. Es beneficiosa para el metab­olismo celular del cuerpo, fortalece las defensas del cuerpo y lo regenera.\n                    \n                    CLORELA - contiene una cantidad significativa de vitaminas, mine­rales y proteínas que afectan positivamente al cuerpo. Retrasa el envejecimiento, tiene un efecto positivo en el hemograma y estimula la desintoxicación.\n                    \n                    LAS BAYAS DE GOJI - debido a la gran cantidad de beta-caroteno, vitamina C, 81, 82, aminoácidos esenciales y oligoelementos (zinc, selenio, hierro y calcio, etc.), inciden positivamente en las defensas del cuerpo y la inmunidad. Fortalecen la vista, mejoran la formación de la sangre y la vitalidad de la piel.\n                    \n                    COMPOSICIÓN:\n                    \n                    pescado (arenque fresco 45%, pescado deshidratado 19 % - ba­calao, congrio, sardina, salmón fresco 5 %), patatas, guisantes verdes, grasa de aves, fibra de remolacha, levadura de cerveza, huevos de gallina, aceite prensado en frío procedente de salmón no­ruego, linaza, alfalfa 1,5 %, levadura Saccharomyces cerevisiae inactiva, grosella negra 1 %, compleja de hierbas (hojas de ortiga mayor, hojas de diente de león, flores de man­zanilla de Castilla, hojas de meli­sa 0,17 %, flores de tilo norteño), minerales, raíz de achicoria, bayas de Goji 0,2 %, alga de agua dulce clorela 0,05 %, yuca de Mojave 0,05 %.\n                    \n                    COMPONENTES ANALÍTICOS:\n                    \n                    proteína bruta 31 %, aceites y grasas brutas 17,5 %, fibras brutas 2,8 %, ceniza bruta 6,7 %, calcio 0,86 %, fósforo 0,8 %, sodio 0,4 %.', 12.99, NULL, 'purityindoor.png', 'Purity', 'pienso-seco', 'kg', 2, 8.66, 'gato', 0, 'adult', 0, 0),
(144, 'PURITY KITTEN 1.5KG', '86 %  DE PROTEÍNAS DE ORIGEN ANIMAL\n\n                    COMIDA COMPLETA PARA GATITOS HASTA 12 MESES DE EDAD Y GATAS EN GESTACIÓN Y LACTANTES\n                    \n                    CARNE DE POLLO - es ligera, sabrosa y altamente digestible gracias al pequeño diámetro de las fibras musculares y el bajo contenido del colágeno y la elastina. Es rica en hierro y zinc, dos minerales que son muy importantes para oxigenar la sangre y los tejidos, y para una piel animal sana. El alto contenido de ácido linoleico con­tribuye a proteger la piel y es beneficioso para la calidad del pelaje y el sistema reproductivo.\n                    \n                    MANZANILLA - ejerce una influencia positiva en el aparato digestivo y el sistema urinario, también tiene efecto antiinflama­torio y antiséptico y reduce la flatulencia. La manzanilla tiene un efecto positivo en el aparato digestivo y el sistema urinario.\n                    \n                    BAYAS DE GOJI - las vitaminas y los oligoelementos con­tenidos en estos frutos influyen positivamente en las de­fensas del organismo y la inmunidad. Fortalecen la vista, mejoran la formación de la sangre y la vitalidad de la piel.\n                    \n                    JENGIBRE - tiene efecto antiinflamatorio e influye positivamente en la digestión. Facilita también la desintoxicación del cuerpo.\n                    \n                    EXTRACTO DE ROMERO - sirve para prolongar la vida plena de las células, estimular la función del hígado y mejorar la digestión.\n                    \n                    HÍGADO DE CERDO - tiene un efecto positivo sobre la hematopoye­sis; además, el hígado contiene hierro altamente absorbible en el organismo.\n                    \n                    COMPOSICIÓN:\n                    \n                    carne (carne deshidratada de pollo 24 %, carne de pollo fresca 20 %, hígado de cerdo fresco 19 %, carne deshidratada de pato 8 %, pescado deshidratado 5,6 % - merluza, con­grio y sardina, carne deshidratada de vaca y cerdo 1,7 %), grasa de aves, patatas de cultivo, guisantes verdes, huevos de gallina, fibra de remolacha, manzanas, levadura Saccharomyces cerevisiae inacti­vada, levadura de cerveza, cuajada, semilla de lino, aceite prensado en frío de salmón noruego, complejo de hierbas (hojas de ortiga, hojas de diente de león, flores de manzanilla 0,17 %, hojas de meli­sa, flores de tilo), minerales, raíz de achicoria, bayas Goji 0,2 %, raíz de jengibre 0,1 %,Yucca schidigera.\n                    \n                    COMPONENTES ANALÍTICOS\n                    \n                    proteína bruta 38 %, aceites y grasas brutos 22 %, fibras brutas 2 %, ceniza bruta 7,1 %, calcio 1,2 %, fósforo 0,9 %, sodio 0,4 %.', 12.99, NULL, 'puritykitten.png', 'Purity', 'pienso-seco', 'kg', 2, 8.66, 'gato', 0, 'kitten', 0, 0),
(145, 'PURITY SENIOR 1.5KG', '7l % DE PROTEÍNAS DE ORIGEN ANIMAL\n\n                    ALIMENTO COMPLETO PARA GATOS ANCIANOS (MÁS DE 8 AÑOS) CON SUPLEMENTOS NUTRICIONALES PARA UNA BUENA SALUD\n                    \n                    CARNE DE CONEJO - tiene un valor nutritivo muy alto y con­ tiene una cantidad significativa de proteínas altamente digestibles; además, es baja en grasa y colesterol. En cuanto a los minerales, es una rica fuente de calcio, fósforo, cobre, cobalto y zinc. Por todas las características mencionadas, la carne de conejo es un ingrediente ideal para un pienso bajo en calorías.\n                    \n                    CARNE DE CORDERO - es una fuente excelente de vitaminas del grupo B, esenciales para las reacciones metabólicas en el cuerpo (por ejemplo, B12 y tiamina). La carne de cordero contiene zinc, esencial para el crecimiento, la curación y un sistema inmunológico saludable.\n                    \n                    CARDO MARIANO - contiene antioxidantes, estimula el crecímiento de las células del hígado, es beneficioso para el hígado y le protege de las toxinas.\n                    \n                    ARÁNDANOS - fortalecen la vista, la elasticidad y la firmeza de las paredes de los vasos sanguíneos. Además, tienen efecto desinfec­tante que incide positivamente en las enfermedades inflamatorias del aparato digestivo o el sistema urinario. Otro beneficio que ofrece es el efecto positivo en la consistencia de los excrementos.\n                    \n                    GROSELLA NEGRA - es rica en vitaminas y minerales. Retrasa el envejecimiento, fortalece el sistema inmunológico y tiene un efecto positivo sobre la elasticidad de los vasos sanguíneos.\n                    \n                    ALFALFA - tiene un efecto positivo en el aparato digestivo y estimula la depuración de los riñones. Es beneficiosa para el metabolismo celular del cuerpo, fortalece las defensas del cuerpo y lo regenera.\n                    \n                    MEJILLÓN DE LABIOS VERDES - es una fuente natural de tau­rina. Facilita la recuperación de los cartílagos y el líquido sinovial, contribuyendo así a la regeneración del sistema locomotor.\n                    \n                    COMPOSICIÓN:\n                    \n                    carne (carne deshidratada de pollo 20 %, carne de conejo fresca 15 %, carne de cordero fresca 15 %, carne deshidratada de cordero 9 %, híga­do de cerdo 4 %), patatas, guisantes verdes, grasa de aves, manzanas, fibra de remolacha, linaza, huevos de gallina, levadura de cerveza, aceite prensado en frío proveni­ente del salmón noruego, levadura Saccharomyces cerevisiae inacti­va, alfalfa 1 %, grosella negra 1 %, complejo de hierbas (hojas de orti­ga mayor, hojas de diente de león, flores de manzanilla de Castilla, hojas de melisa, flores de tilo nor­teño), arándanos 1 %, minerales, raíz de achicoria, mejillones de labios verdes 0,2 %, cardo mariano 0,1 %, Yuca de Mojave, complejo de antioxidantes naturales para la regeneración celular.\n                    \n                    COMPONENTES ANALÍTICOS:\n                    \n                    proteína bruta 3,1 %, aceites y grasas brutos 1,1 %, fibras brutas 3,1 %, ceniza bruta 7,6 %, calcio 1,3 %, fósforo 0,95 %, sodio 0,35 %.', 12.99, NULL, 'puritysenior.png', 'Purity', 'pienso-seco', 'kg', 2, 8.66, 'gato', 0, 'senior', 0, 0),
(146, 'PURITY URINARY 1.5KG', '75 % DE PROTEÍNAS DE ORIGEN ANIMAL\n\n                    ALIMENTO COMPLETO PARA GATOS ADULTOS CON UN EFECTO POSITIVO SOBRE EL SISTEMA URINARIO\n                    \n                    LA CARNE DE PAVO - es ligera, sabrosa y altamente digestible. Se encuentra entre las mayores fuentes de proteínas de alta calidad, necesarias para la regeneración de las células del cuerpo. La carne de pavo es rica en vitaminas del complejo 8, minerales (hierro, cal­cio, selenio y zinc). Gracias al alto contenido de zinc, tiene un efecto positivo sobre los sistemas inmunológico y reproductivo. Además, el zinc, junto con el selenio, pertenece a los minerales capaces de combatir los radicales libres, presentes en el organismo animal todos los días.\n                    \n                    ORTIGA - es un ingrediente activo que facilita la depuración de la sangre y, por tanto, la desintoxicación del cuerpo; incide favorable­mente en los riñones y la vejiga. Además, contiene el ácido silícico que tiene un efecto muy beneficioso sobre la vitalidad de los huesos, los ojos, los dientes, los cartílagos, el tejido fibroso, los tendones y las articulaciones.\n                    \n                    TILO - incide positivamente en el aumento de la excreción de orina, jugos gástricos y en una digestión mejor.\n                    \n                    ARÁNDANOS ROJOS - destacan por sus efectos antibacterianos, son eficaces para combatir las infecciones de las vías urinarias y de los intestinos.\n                    \n                    LAS BAYAS DE GOJI - debido a la gran cantidad de beta-caroteno, vitamina C, 81, 82, aminoácidos esenciales y oligoelementos (zinc, selenio, hierro y calcio, etc.), inciden positivamente en las defensas del cuerpo y la inmunidad. Fortalecen la vista, mejoran la formación de la sangre y la vitalidad de la piel.\n                    \n                    ALFALFA - tiene un efecto positivo en el aparato digestivo y estimula la depuración de los riñones. Es beneficiosa para el metabolismo celular del cuerpo, fortalece las defensas del cuerpo y lo regenera.\n                    \n                    EXTRACTO DE ROMERO - sirve como un antioxidante natural que protege las células musculares del daño causado por los radicales libres, prolonga la vida plena de las células, estimula la función del hígado y mejora la digestión.\n                    \n                    COMPOSICIÓN:\n                    \n                    carne (carne deshidratada de pollo 25 %, carne de pollo fresca 20 %, carne deshidratada de pavo 5 %, hígado de cerdo 4 %, pescado deshidratado 3,5 % - bacalao, congrio y sardina), patatas, gra­sa de aves, guisantes verdes, fibra de remolacha, manzanas, huevos de gallina, levadura de cerveza, aceite prensado en frío procedente del salmón noruego, levadura Saccharomyces cerevi­siae inactiva, linaza, complejo de hierbas (hojas de ortiga mayor 0,25 %, hojas de diente de león, flores de manzanilla de Castilla, hojas de melisa, flores de tilo norteño 0,16 %), arándanos rojos 1 %, minerales, alfalfa 0,5 %, raíz de achicoria, bayas de Goji 0,2 %, yuca de Mojave.\n                    \n                    COMPONENTES ANALÍTICOS:\n                    \n                    proteína bruta 3,1 %, aceites y grasas brutos 20 %, fibras brutas 2,3 %, ceniza bruta 6,7 %, calcio 1 %, fósforo 0,8 %, sodio 0,37 %, magnesio 0,11 %.', 12.99, NULL, 'purityurinary.png', 'Purity', 'pienso-seco', 'kg', 2, 8.66, 'gato', 0, 'adult', 0, 0),
(148, 'Dibaq Sense Pollo y Palomitas', 'Alimento para perros pequeños', 42.00, NULL, 'senseadultopatoypavo.png', 'Sense', 'comida-humeda', 'g', 200, NULL, 'perro', 1, 'puppy', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productsorders`
--

CREATE TABLE `productsorders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `unidades` int(11) NOT NULL,
  `precio_unidad` double(6,2) NOT NULL,
  `total` double(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productsorders`
--

INSERT INTO `productsorders` (`id`, `order_id`, `product_id`, `unidades`, `precio_unidad`, `total`, `created_at`, `updated_at`) VALUES
(9, 1008, 100, 1, 26.30, 26.30, '2020-09-19 15:34:50', '2020-09-19 15:34:50'),
(10, 1009, 100, 1, 26.30, 26.30, '2020-09-19 15:36:26', '2020-09-19 15:36:26'),
(11, 1010, 100, 1, 26.30, 26.30, '2020-09-22 16:25:16', '2020-09-22 16:25:16'),
(12, 1011, 100, 1, 26.30, 26.30, '2020-09-30 17:33:05', '2020-09-30 17:33:05'),
(13, 1012, 100, 1, 26.30, 26.30, '2020-09-30 17:34:58', '2020-09-30 17:34:58'),
(14, 1013, 100, 1, 26.30, 26.30, '2020-09-30 17:36:00', '2020-09-30 17:36:00'),
(15, 1014, 100, 1, 26.30, 26.30, '2020-09-30 17:37:23', '2020-09-30 17:37:23'),
(16, 1015, 100, 1, 26.30, 26.30, '2020-09-30 17:38:49', '2020-09-30 17:38:49'),
(17, 1016, 100, 1, 26.30, 26.30, '2020-09-30 17:39:41', '2020-09-30 17:39:41'),
(18, 1017, 100, 2, 16.85, 33.70, '2020-10-03 13:59:18', '2020-10-03 13:59:18'),
(19, 1018, 100, 2, 16.85, 33.70, '2020-10-03 14:01:56', '2020-10-03 14:01:56'),
(20, 1019, 100, 2, 16.85, 33.70, '2020-10-03 14:07:32', '2020-10-03 14:07:32'),
(21, 1020, 100, 2, 16.85, 33.70, '2020-10-03 14:21:36', '2020-10-03 14:21:36'),
(22, 1021, 100, 2, 16.85, 33.70, '2020-10-03 14:39:56', '2020-10-03 14:39:56'),
(23, 1022, 100, 2, 16.85, 33.70, '2020-10-03 14:40:17', '2020-10-03 14:40:17'),
(24, 1023, 100, 2, 16.85, 33.70, '2020-10-03 14:41:38', '2020-10-03 14:41:38'),
(25, 1024, 100, 2, 16.85, 33.70, '2020-10-03 14:59:07', '2020-10-03 14:59:07'),
(26, 1025, 100, 2, 16.85, 33.70, '2020-10-03 15:01:21', '2020-10-03 15:01:21'),
(27, 1026, 100, 2, 16.85, 33.70, '2020-10-03 15:02:02', '2020-10-03 15:02:02'),
(28, 1027, 100, 2, 16.85, 33.70, '2020-10-03 15:02:24', '2020-10-03 15:02:24'),
(29, 1028, 100, 2, 16.85, 33.70, '2020-10-03 15:03:42', '2020-10-03 15:03:42'),
(30, 1029, 100, 2, 16.85, 33.70, '2020-10-03 15:07:04', '2020-10-03 15:07:04'),
(31, 1030, 100, 2, 16.85, 33.70, '2020-10-03 15:07:17', '2020-10-03 15:07:17'),
(32, 1031, 100, 2, 16.85, 33.70, '2020-10-03 15:08:57', '2020-10-03 15:08:57'),
(33, 1032, 100, 2, 16.85, 33.70, '2020-10-03 15:28:38', '2020-10-03 15:28:38'),
(34, 1033, 100, 2, 16.85, 33.70, '2020-10-03 15:39:32', '2020-10-03 15:39:32'),
(35, 1034, 100, 2, 16.85, 33.70, '2020-10-03 15:42:19', '2020-10-03 15:42:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `providers`
--

CREATE TABLE `providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `provinces`
--

INSERT INTO `provinces` (`id`, `nombre`) VALUES
(1, 'BENALMÁDENA'),
(2, 'FUENGIROLA'),
(3, 'TORREMOLINOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Cliente'),
(2, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supplyproduct`
--

CREATE TABLE `supplyproduct` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `unidades_prod` int(11) NOT NULL,
  `precio_unitario` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promociones` tinyint(1) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `promociones`, `role_id`, `remember_token`) VALUES
(2, 'AdminTienda', 'petfriendspet@gmail.com', NULL, '$2y$12$vm7462QFs/G2M9ypRqXtJOaIMR6mW/OS3zJUbBux2bQMXkXUktsEW', 0, 2, NULL),
(4, 'antonio', 'antonio@gmail.com', NULL, '$2y$10$xRZ.DATr5ab./JXnNqvhcerO1i0qXEMcj8v8FNenLyqtxdBolvdp6', 0, 1, NULL),
(6, 'antonio', 'antonio1@gmail.com', NULL, '$2y$10$S4/8MbY8m/lvOk7YuawCY.uLtEKC4DfAwgo3w0uIaa7r/KoZO9Ip.', 0, 1, NULL),
(7, 'antonio', 'antonio10@gmail.com', NULL, '$2y$10$F49VB4o0s//QalTsCMIpkOOAf/vu/x15qzbru6PFBLN0BqkgvzHo.', 0, 1, NULL),
(8, 'Antonio', 'antoniops0505@gmail.com', NULL, '$2y$10$9Mm0eVdJAv2gaLkW7KMaeeFW471WlYJn57DDbmVyXbwilyfJQGyOW', 0, 1, NULL),
(10, 'PetFriend', 'info@petfriend.com', NULL, '$2y$10$N29e1Ta2qhVMYykfiAB9OOl8rdiNo/HoxI0DjYL9qkbODhrMBdhx.', 0, 2, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_user_id_foreign` (`user_id`),
  ADD KEY `appointments_hairdresser_id_foreign` (`hairdresser_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `filters`
--
ALTER TABLE `filters`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `filtersanimals`
--
ALTER TABLE `filtersanimals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filtersanimals_animal_name_foreign` (`animal_name`),
  ADD KEY `filtersanimals_filter_name_foreign` (`filter_name`);

--
-- Indices de la tabla `hairdressers`
--
ALTER TABLE `hairdressers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productsorders`
--
ALTER TABLE `productsorders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productsorders_order_id_foreign` (`order_id`),
  ADD KEY `productsorders_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `supplyproduct`
--
ALTER TABLE `supplyproduct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplyproduct_provider_id_foreign` (`provider_id`),
  ADD KEY `supplyproduct_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `filtersanimals`
--
ALTER TABLE `filtersanimals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `hairdressers`
--
ALTER TABLE `hairdressers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- AUTO_INCREMENT de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1035;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT de la tabla `productsorders`
--
ALTER TABLE `productsorders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `providers`
--
ALTER TABLE `providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `supplyproduct`
--
ALTER TABLE `supplyproduct`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_hairdresser_id_foreign` FOREIGN KEY (`hairdresser_id`) REFERENCES `hairdressers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `filtersanimals`
--
ALTER TABLE `filtersanimals`
  ADD CONSTRAINT `filtersanimals_animal_name_foreign` FOREIGN KEY (`animal_name`) REFERENCES `animals` (`nombre`) ON DELETE CASCADE,
  ADD CONSTRAINT `filtersanimals_filter_name_foreign` FOREIGN KEY (`filter_name`) REFERENCES `filters` (`nombre`) ON DELETE CASCADE;

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productsorders`
--
ALTER TABLE `productsorders`
  ADD CONSTRAINT `productsorders_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productsorders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `supplyproduct`
--
ALTER TABLE `supplyproduct`
  ADD CONSTRAINT `supplyproduct_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `supplyproduct_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
