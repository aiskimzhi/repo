<?php

use yii\db\Schema;
use yii\db\Migration;

class m151012_163244_city extends Migration
{
    public function up()
    {
        $this->createTable(
            'city',
            [
                'id' => Schema::TYPE_PK,
                'region_id' => Schema::TYPE_INTEGER . ' NOT NULL',
                'name' => Schema::TYPE_STRING . ' NOT NULL',
            ]
        );

        $this->addForeignKey(
            'region_city',
            'city', 'region_id',
            'region', 'id',
            'CASCADE', 'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey('region_city', 'city');
        $this->dropTable('city');
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
