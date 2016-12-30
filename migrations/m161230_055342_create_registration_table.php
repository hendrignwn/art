<?php

use yii\db\Migration;

/**
 * Handles the creation of table `registration`.
 */
class m161230_055342_create_registration_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('registration', [
            'id' => $this->primaryKey(),
            'title_id' => $this->smallInteger()->null(),
            'first_name' => $this->string(40)->notNull(),
            'last_name' => $this->string(50)->null(),
            'dob' => $this->date()->notNull(),
            'address' => $this->string(255)->notNull(),
            'city' => $this->string(100)->notNull(),
            'postal_code' => $this->string(5)->notNull(),
            'phone' => $this->string(15)->notNull(),
            'professional' => $this->string(100)->comment('gelar')->notNull(),
            'description' => $this->string(255)->notNull(),
            'social_account' => $this->string(500)->null()->comment('eq:facebook.com/hendrieg|twitter.com/hendrieg|linkedin.com/hendrieg'),
            'registration_category_id' => $this->integer()->notNull(),
            'type' => $this->string('20')->notNull(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->datetime()->null(),
            'updated_at' => $this->datetime()->null(),
            'created_by' => $this->integer()->null(),
            'updated_by' => $this->integer()->null(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('registration');
    }
}
