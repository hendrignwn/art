<?php

use yii\db\Migration;

class m170117_091516_create_new_public_route_to_table_config extends Migration
{
	public function safeUp()
	{
		$this->insert('{{config}}', [
			'name' => 'administrator_public_url',
			'value' => json_encode([
				'/administrator/default/login',
				'/administrator/default/logout',
				]),
			'label' => 'Administrator Public Url',
			'notes' => 'Url yang di izinkan tanpa kredensial / autentikasi',
		]);
	}

	public function safeDown()
	{
		$this->delete('{{config}}', 'name = "administrator_public_url"');
	}
}
