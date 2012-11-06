<?php

class m120609_123104_ulogin_fields extends CDbMigration
{
    public function safeUp()
    {
        $this->execute('alter table users add `identity` varchar(255) NOT NULL');
		$this->execute('alter table users add `network` varchar(255) NOT NULL');
		$this->execute('alter table users add `full_name` varchar(255) DEFAULT NULL');
		$this->execute('alter table users add `state` tinyint(1) NOT NULL');
    }

    public function safeDown()
    {

    }
}