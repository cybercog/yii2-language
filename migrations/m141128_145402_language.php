<?php

use yii\db\Schema;
use yii\db\Migration;

class m141128_145402_language extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            '{{%language}}',
            [
                'id' => 'int(11) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY',
                'title' => 'varchar(16) NOT NULL DEFAULT \'\'',
                'iso' => 'varchar(8) NOT NULL DEFAULT \'\'',
            ],
            'ENGINE=InnoDB DEFAULT CHARSET=utf8'
        );
        $this->createIndex('iso', '{{%language}}', ['iso'], true);

        $this->insert('{{%language}}', ['title' => 'Русский', 'iso' => 'ru-RU']);
        $this->insert('{{%language}}', ['title' => 'English', 'iso' => 'en-US']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%language}}');
    }
}
