<?php

use yii\db\Schema;
use yii\db\Migration;

class m151012_163112_region extends Migration
{
    public function up()
    {
        $this->createTable(
            'region',
            [
                'id' => Schema::TYPE_PK,
                'name' => Schema::TYPE_STRING . ' NOT NULL',
            ]
        );
    }

    public function down()
    {
        $this->dropTable('region');
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
