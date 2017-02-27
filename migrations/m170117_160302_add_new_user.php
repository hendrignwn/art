<?php

use app\migrations\Migration;

class m170117_160302_add_new_user extends Migration
{
    public function safeUp()
    {
        $this->insert('user', [
            'id' => 1,
            'username' => 'hendri.gn',
            'password_hash' => Yii::$app->security->generatePasswordHash('admin123'),
            'auth_key' => Yii::$app->security->generateRandomString(),
            'email' => 'hendri.gnw@gmail.com',
            'status' => 1,
            'join_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
        $this->insert('user_profile', [
            'user_id' => 1,
            'name' => 'Hendri Gunawan',
        ]);
        
        $this->insert('user', [
            'id' => 2,
            'username' => 'sandi.winata',
            'password_hash' => Yii::$app->security->generatePasswordHash('sandi.winata'),
            'auth_key' => Yii::$app->security->generateRandomString(),
            'email' => 'winatasandi05@gmail.com',
            'status' => 1,
            'join_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
        $this->insert('user_profile', [
            'user_id' => 2,
            'name' => 'Sandi Winata',
        ]);
    }

    public function safeDown()
    {
        $this->delete('user', 'id=1');
        $this->delete('user', 'id=2');
    }
}
