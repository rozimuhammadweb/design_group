<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%inbox_data}}`.
 */
class m240116_093628_create_inbox_data_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%inbox_data}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'number' => $this->string(),
            'comment' => $this->text()->defaultValue(null),
            'created_at' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%inbox_data}}');
    }
}
