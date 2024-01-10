<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about}}`.
 */
class m240110_044944_create_about_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%about}}', [
            'id' => $this->primaryKey(),
            'successful_project' => $this->integer(),
            'regular_customer' => $this->integer(),
            'quality_service' => $this->integer(),
            'status' => $this->boolean()->defaultValue(false),
            'created_by' => $this->integer()->notNull(),
            'created_at' => $this->timestamp(),
            'updated_by' => $this->integer()->notNull(),
            'updated_at' => $this->timestamp(),
        ]);

        $this->createTable('{{%about_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'title' => $this->string(),
            'short_description' => $this->text(),
            'description' => $this->text(),
            'language' => $this->string(6)->notNull(),
        ]);

        $this->addForeignKey('fk_about_lang-relation', '{{%about_lang}}', 'owner_id', '{{%about}}', 'id', 'CASCADE', 'CASCADE');
    }


    public function safeDown()
    {
        $this->dropForeignKey('fk_about_lang-relation', '{{%about_lang}}');
        $this->dropTable('{{%about_lang}}');
        $this->dropTable('{{%about}}');
    }
}
