<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%settings}}`.
 */
class m240108_081413_create_settings_table extends Migration
{

    public function safeUp()
    {
        $this->createTable('{{%settings}}', [
            'id' => $this->primaryKey(),
            'number' => $this->string(20),
            'email' => $this->string(),
            'logo' => $this->string(),
            'status' => $this->boolean()->defaultValue(false)
        ]);
        $this->createTable('{{%setting_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer(),
            'company_info' => $this->text(),
            'working_time' => $this->text(),
            'address' => $this->text(),
            'language' => $this->string(6),
        ]);

        $this->addForeignKey('fk-setting_lang-relation', '{{%setting_lang}}', 'owner_id',
            '{{%settings}}', 'id', 'CASCADE', 'CASCADE');
    }


    public function safeDown()
    {
        $this->dropForeignKey('fk-setting_lang-relation', '{{%setting_lang}}');
        $this->dropTable('{{%setting_lang}}');
        $this->dropTable('{{%settings}}');
    }
}
