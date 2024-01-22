<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%translation}}`.
 */
class m240120_091451_create_translation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%translation}}', [
            'id' => $this->primaryKey(),
            'value ' => $this->json(),
            'key' => $this->string(),
            'category' => $this->string()->defaultValue('app'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%translation}}');
    }
}
