<?php

class m120210_184106_create_user_tables extends CDbMigration
{
	public function up()
	{
		Yii::app()->db->pdoInstance->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
		$transaction=$this->getDbConnection()->beginTransaction();
        try
        {
            $sql = <<<SQL
--
-- Structure for table `profiles`
--

CREATE TABLE `profiles` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `phone` varchar(20) NOT NULL DEFAULT '',
  `fax` varchar(20) NOT NULL DEFAULT '',
  `country` varchar(50) NOT NULL DEFAULT '',
  `contract` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data for table `profiles`
--

INSERT INTO `profiles` (`user_id`, `lastname`, `firstname`, `birthday`, `phone`, `fax`, `country`, `contract`) VALUES
  ('1', 'Admin', 'Administrator', '2012-02-06', '999-999-999', '888-888-888', 'Ukraine', '111-222-333'),
  ('2', 'Demo', 'Demo', '0000-00-00', '', '', '', ''),
  ('3', 'Clientlastname', 'Clientname', '2012-02-14', '777-777-777', '666-666-666', 'Germany', '776-554-333');

--
-- Structure for table `profiles_fields`
--

CREATE TABLE `profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Data for table `profiles_fields`
--

INSERT INTO `profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
  ('1', 'lastname', 'Last Name', 'VARCHAR', '50', '3', '1', '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', '1', '3'),
  ('2', 'firstname', 'First Name', 'VARCHAR', '50', '3', '1', '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', '2', '3'),
  ('3', 'birthday', 'Birthday', 'DATE', '0', '0', '2', '', '', '', '', '0000-00-00', 'UWjuidate', '{\"ui-theme\":\"redmond\"}', '3', '2'),
  ('4', 'phone', 'Phone', 'VARCHAR', '20', '0', '0', '', '', '', '', '', '', '', '0', '3'),
  ('5', 'fax', 'Fax', 'VARCHAR', '20', '0', '0', '', '', '', '', '', '', '', '0', '3'),
  ('6', 'country', 'Country', 'VARCHAR', '50', '0', '0', '', '', '', '', '', '', '', '0', '3'),
  ('7', 'contract', 'Сontract number', 'VARCHAR', '50', '0', '0', '', '', '', '', '', '', '', '0', '3');

--
-- Structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activkey`, `createtime`, `lastvisit`, `superuser`, `status`, `type`, `manager_id`) VALUES
  ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', '1261146094', '1330544927', '1', '1', '0', '0'),
  ('2', 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', '1261146096', '0', '0', '1', '0', '1')
SQL;
			$this->execute($sql);
			$transaction->commit();
        }
        catch(Exception $e)
        {
            echo "Exception: ".$e->getMessage()."\n";
            $transaction->rollBack();
            return false;
        }
	}

	public function down()
	{
        $this->dropTable('users');
        $this->dropTable('profiles');
        $this->dropTable('profiles_fields');
	}
}