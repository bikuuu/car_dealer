<?php

use app\migrations\Migration;

/**
 * Class m200309_150821_autoowner
 */
class m200309_150821_car extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%car_owner}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(30)->notNull(),
            'surname' => $this->string(40)->notNull(),
            'address' => $this->string(100)->notNull(),
            'postal_code' => $this->integer(5)->notNull(),
            'pesel' => $this->integer(11),
            'nip' => $this->integer(11),
            'phone_number' => $this->string(30)->notNull(),
            'email' => $this->string(30),
        ]);

        $this->createTable('{{%car}}', [
            'id' => $this->primaryKey(),
            'producer_model_id' => $this->integer()->notNull(),
            'car_owner_id' => $this->integer()->notNull(),
            'capacity' => $this->integer()->notNull(),
            'year' => $this->integer()->notNull(),
            'mileage' => $this->integer()->notNull(),
            'power' => $this->integer()->notNull(),
            'fuel_type' => $this->string(3)->notNull(),
            'color' => $this->string(30)->notNull(),
            'car_value' => $this->decimal(10, 2)->notNull(),
            'commission' => $this->decimal(10, 2)->notNull(),
        ]);
        $this->addForeignKey('{{%car_producer_model_id}}', '{{%car}}',
            'producer_model_id', '{{%producer_model}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('{{%car_car_owner_id}}', '{{%car}}',
            'car_owner_id', '{{%car_owner}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropForeignKey('{{%car_producer_model_id}}', '{{%car}}');
        $this->dropForeignKey('{{%car_car_owner_id}}', '{{%car}}');
        $this->dropTable('{{%car}}');
        $this->dropTable('{{%car_owner}}');

    }
}
