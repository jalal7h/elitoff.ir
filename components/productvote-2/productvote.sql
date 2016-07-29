
CREATE TABLE IF NOT EXISTS `productvote` (
  `id` int(11) NOT NULL,
  `vote_name` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `vote_value` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `ip` varchar(15) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

ALTER TABLE `productvote`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `productvote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;


