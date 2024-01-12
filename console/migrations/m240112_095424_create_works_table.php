<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%works}}`.
 */
class m240112_095424_create_works_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%works}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'status' => $this->boolean()->defaultValue(true),
            'created_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_by' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->createTable('{{%works_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'title' => $this->string(),
            'language' => $this->string(6)->notNull(),
        ]);

        $this->addForeignKey('fk_works_lang-relation', '{{%works_lang}}', 'owner_id', '{{%works}}', 'id', 'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_works_lang-relation', '{{%works_lang}}');
        $this->dropTable('{{%works_lang}}');
        $this->dropTable('{{%works}}');
    }
}
