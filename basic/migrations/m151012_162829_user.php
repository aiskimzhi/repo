<?php

use yii\db\Schema;
use yii\db\Migration;

class m151012_162829_user extends Migration
{
    public function up()
    {
        $this->createTable(
            'user',
            [
                'id' => Schema::TYPE_PK,
                'first_name' => Schema::TYPE_STRING . ' NOT NULL',
                'last_name' => Schema::TYPE_STRING . ' NOT NULL',
                'password' => Schema::TYPE_STRING . ' NOT NULL',
                'email' => Schema::TYPE_STRING . ' NOT NULL',
                'skype' => Schema::TYPE_STRING,
                'phone' => Schema::TYPE_STRING,
                'auth_key' => Schema::TYPE_STRING . ' NOT NULL',
                'password_reset_token' => Schema::TYPE_STRING . ' NOT NULL',
            ]
        );

    }

    public function down()
    {
        $this->dropTable('user');
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
