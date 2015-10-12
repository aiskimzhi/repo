<?php

use yii\db\Schema;
use yii\db\Migration;

class m151012_164408_bookmark extends Migration
{
    public function up()
    {
        $this->createTable(
            'bookmark',
            [
                'id' => Schema::TYPE_PK,
                'user_id' => Schema::TYPE_INTEGER,
                'advert_id' => Schema::TYPE_INTEGER
            ]
        );

        $this->addForeignKey(
            'bookmark_user',
            'bookmark', 'user_id',
            'user', 'id',
            'CASCADE', 'CASCADE'
        );

        $this->addForeignKey(
            'bookmark_advert',
            'bookmark', 'advert_id',
            'advert', 'id',
            'CASCADE', 'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey('bookmark_user', 'bookmark');
        $this->dropForeignKey('bookmark_advert', 'bookmark');
        $this->dropTable('bookmark');
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
