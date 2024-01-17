<?php

namespace app\models;

/**
 * This is the model class for table "inbox_data".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $number
 * @property string|null $comment
 * @property int|null $created_at
 */
class InboxData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inbox_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'number'], 'required'],
            [['comment'], 'string'],
            [['created_at'], 'integer'],
            [['name', 'number'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'number' => 'Number',
            'comment' => 'Comment',
            'created_at' => 'Created At',
        ];
    }
}
