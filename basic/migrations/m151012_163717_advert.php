<?php

use yii\db\Schema;
use yii\db\Migration;

class m151012_163717_advert extends Migration
{
    public function up()
    {
        $this->createTable(
            'advert',
            [
                'id' => Schema::TYPE_PK,
                'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',
                'region_id' => Schema::TYPE_INTEGER . ' NOT NULL',
                'city_id' => Schema::TYPE_INTEGER . ' NOT NULL',
                'category_id' => Schema::TYPE_INTEGER . ' NOT NULL',
                'subcategory_id' => Schema::TYPE_INTEGER . ' NOT NULL',
                'title' => Schema::TYPE_STRING . ' NOT NULL',
                'text' => Schema::TYPE_TEXT . '(1000) NOT NULL',
                'price' => Schema::TYPE_DECIMAL . '(10, 2) NOT NULL',
                'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
                'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
                'views' => Schema::TYPE_INTEGER
            ]
        );

        $this->addForeignKey(
            'advert_user',
            'advert', 'user_id',
            'user', 'id',
            'CASCADE', 'CASCADE'
        );

        $this->addForeignKey(
            'advert_region',
            'advert', 'region_id',
            'region', 'id',
            'CASCADE', 'CASCADE'
        );

        $this->addForeignKey(
            'advert_city',
            'advert', 'city_id',
            'city', 'id',
            'CASCADE', 'CASCADE'
        );

        $this->addForeignKey(
            'advert_category',
            'advert', 'category_id',
            'category', 'id',
            'CASCADE', 'CASCADE'
        );

        $this->addForeignKey(
            'advert_subcategory',
            'advert', 'subcategory_id',
            'subcategory', 'id',
            'CASCADE', 'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey('advert_user', 'advert');
        $this->dropForeignKey('advert_region', 'advert');
        $this->dropForeignKey('advert_city', 'advert');
        $this->dropForeignKey('advert_category', 'advert');
        $this->dropForeignKey('advert_subcategory', 'advert');
        $this->dropTable('advert');
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
