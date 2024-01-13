<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rent}}`.
 */
class m240113_060703_create_rent_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rent}}', [
            'id' => $this->primaryKey(),
            'cost' => $this->integer(),
            'status' => $this->boolean()->defaultValue(true),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
        $this->createTable('{{%rent_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer(),
            'title' => $this->string(),
            'type' => $this->string(),
            'is_popular' => $this->string(),
            'short_description' => $this->string(),
            'language' => $this->string(6),
        ]);

        $this->addForeignKey('fk-rent_lang-relation', '{{%rent_lang}}', 'owner_id','{{%rent}}', 'id', 'CASCADE', 'CASCADE');


        // rent_item
        $this->createTable('{{%rent_item}}', [
            'id' => $this->primaryKey(),
            'rent_id' => $this->integer()->notNull(),
            'cost' => $this->integer(),
        ]);
        $this->addForeignKey('fk_rent_item-relation', '{{%rent_item}}', 'rent_id', '{{%rent}}', 'id', 'CASCADE', 'CASCADE');

        $this->createTable('{{%rent_item_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer(),
            'title' => $this->string(),
            'language' => $this->string(6),
        ]);
        $this->addForeignKey('fk-rent_item_lang-relation', '{{%rent_item_lang}}', 'owner_id', '{{%rent_item}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-rent_lang-relation', '{{%rent_lang}}');
        $this->dropForeignKey('fk-rent_item_lang-relation', '{{%rent_item_lang}}');
        $this->dropForeignKey('fk-rent_item-relation', '{{%rent_item}}');
        $this->dropTable('{{%rent_item_lang}}');
        $this->dropTable('{{%rent_item}}');
        $this->dropTable('{{%rent_lang}}');
        $this->dropTable('{{%rent}}');
    }
}
