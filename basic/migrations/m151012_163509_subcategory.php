<?php

use yii\db\Schema;
use yii\db\Migration;

class m151012_163509_subcategory extends Migration
{
    public function up()
    {
        $this->createTable(
            'subcategory',
            [
                'id' => Schema::TYPE_PK,
                'category_id' => Schema::TYPE_INTEGER . ' NOT NULL',
                'name' => Schema::TYPE_STRING . ' NOT NULL',
            ]
        );

        $this->addForeignKey(
            'category_subcategory',
            'subcategory', 'category_id',
            'category', 'id',
            'CASCADE', 'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey('category_subcategory', 'subcategory');
        $this->dropTable('subcategory');
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
