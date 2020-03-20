<?php

use app\migrations\Migration;

/**
 * Class m200309_143315_producer
 */
class m200309_143315_producer extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%producer}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(30)->notNull(),
        ]);

        $this->createTable('{{%producer_model}}', [
            'id' => $this->primaryKey(),
            'producer_id' => $this->integer()->notNull(),
            'name' => $this->string(30)->notNull(),
        ]);

        $this->addForeignKey('{{%producer_model_producer_id}}', '{{%producer_model}}',
            'producer_id', '{{%producer}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('{{%producer_model_producer_id}}', '{{%producer_model}}');
        $this->dropTable('{{%producer_model}}');
        $this->dropTable('{{%producer}}');
    }
}
