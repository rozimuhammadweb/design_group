<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%why_us}}`.
 */
class m240112_051654_create_why_us_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%why_us}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'status' => $this->boolean()->defaultValue(true),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->createTable('{{%why_us_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'title' => $this->string(),
            'short_description' => $this->text(),
            'language' => $this->string(6)->notNull(),
        ]);

        $this->addForeignKey('fk_why_us_lang-relation', '{{%why_us_lang}}', 'owner_id', '{{%why_us}}', 'id', 'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_why_us_lang-relation', '{{%why_us_lang}}');
        $this->dropTable('{{%why_us_lang}}');
        $this->dropTable('{{%why_us}}');
    }
}
