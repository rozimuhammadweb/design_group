<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%services}}`.
 */
class m240111_101626_create_services_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%services}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'status' => $this->boolean()->defaultValue(false),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
        $this->createTable('{{%services_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer(),
            'title' => $this->string(),
            'short_description' => $this->string(),
            'description' => $this->text(),
            'language' => $this->string(6),
        ]);

        $this->addForeignKey('fk-services_lang-relation', '{{%services_lang}}', 'owner_id',
            '{{%services}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-services_lang-relation', '{{%services_lang}}');
        $this->dropTable('{{%services_lang}}');
        $this->dropTable('{{%services}}');
    }
}
