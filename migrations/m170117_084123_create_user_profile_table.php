<?php

use app\migrations\Migration;

/**
 * Handles the creation of table `user_profile`.
 */
class m170117_084123_create_user_profile_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%user_profile}}', [
            'user_id'         => $this->primaryKey(),
            'name'            => $this->string(50)->notNull(),
            'proffesional'    => $this->string(100)->notNull(),
            'photo'           => $this->string(100)->notNull(),
            'photo_background'=> $this->string(100)->notNull(),
            'bio'             => $this->string(255)->notNull(),
            'social_account'  => $this->string(255)->null(),
        ], $this->tableOptions);

        $this->addForeignKey('fk_user_profile', '{{%user_profile}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'RESTRICT');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_profile}}');
    }
}
