<?php

namespace app\migrations;

use yii\db\Migration as BaseMigration;

class Migration extends BaseMigration
{
    public function createTable($table, $columns, $options = null):void
    {
        if ($this->db->driverName === 'mysql') {
            $options = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        parent::createTable($table, $columns, $options);
    }
}