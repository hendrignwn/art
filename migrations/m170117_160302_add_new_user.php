<?php

use yii\db\Migration;

class m170117_160302_add_new_user extends Migration
{
    public function safeUp()
    {
        $this->insert('user', [
            'username' => 'hendri.gn',
            'password_hash' => Yii::$app->security->generatePasswordHash('admin123'),
            'auth_key' => Yii::$app->security->generateRandomString(),
            'email' => 'hendri.gnw@gmail.com',
            'status' => 1,
            'join_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function safeDown()
    {
        $this->delete('user', 'username=\'hendri.gn\'');
    }
}
