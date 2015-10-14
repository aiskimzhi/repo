<?php

use yii\db\Schema;
use yii\db\Migration;

class m151014_001004_views extends Migration
{
    public function up()
    {
        $this->createTable(
            'views',
            [
                'user_id' => Schema::TYPE_INTEGER,
                'advert_id' => Schema::TYPE_INTEGER
            ]
        );

        $this->addForeignKey(
            'views_user',
            'views', 'user_id',
            'user', 'id',
            'CASCADE', 'CASCADE'
        );

        $this->addForeignKey(
            'views_advert',
            'views', 'advert_id',
            'advert', 'id',
            'CASCADE', 'CASCADE'
        );

    }

    public function down()
    {
        $this->dropForeignKey('views_user', 'views');
        $this->dropForeignKey('views_advert', 'views');
        $this->dropTable('views');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
