CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `umail` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL,
  `is_admin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `uname`, `umail`, `upass`, `is_admin`) VALUES
(1, 'Admin', 'site@admin.com', '$2y$10$lRMDimT9cwsFmV7K0DQAuO7IeIYlmaTnrQCKKwmSIewDlRTKTuq2O', 1);

ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
