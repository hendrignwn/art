<?php

namespace app\migrations;

use RuntimeException;
use yii\db\Migration as BaseMigration;

/**
 * @author Hendri <hendri.gnw@gmail.com>
 */
class Migration extends BaseMigration
{
    /**
     * @var string
     */
    protected $tableOptions;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        switch ($this->db->driverName) {
            case 'mysql':
                $this->tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
                break;
            case 'pgsql':
                $this->tableOptions = null;
                break;
            case 'dblib':
            case 'mssql':
            case 'sqlsrv':
                $this->tableOptions = null;
                break;
            default:
                throw new RuntimeException('Your database is not supported!');
        }
    }
}
