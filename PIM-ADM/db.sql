

CREATE TABLE `user` (
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT '1',
  `user_previlage` int(11) NOT NULL DEFAULT '1',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` timestamp NULL DEFAULT NULL,
  `modified_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `user` (`user_name`, `user_pass`, `user_status`, `user_previlage`, `create_date`, `modified_date`, `modified_user`) VALUES
('administrator', '85bd3d79683d4efb30ea27d7b3452170', 1, 1, '2015-12-06 03:06:26', '2015-12-05 17:00:00', 'Administrator');

ALTER TABLE `user`
  ADD PRIMARY KEY (`user_name`);
