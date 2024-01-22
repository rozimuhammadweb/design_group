<?php

namespace common\models;


use yii\db\ActiveRecord;
use yii\helpers\Json;

/**
 * This is the model class for table "translation".
 *
 * @property int $id
 * @property string|null $value
 * @property string|null $key
 * @property string|null $category
 */
class Translation extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'translation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['value'], 'safe'],
            [['key', 'category'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Value',
            'key' => 'Key',
            'category' => 'Category',
        ];
    }
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if (is_array($this->value)) {
                $this->value = Json::encode($this->value);
            }
            return true;
        }
        return false;
    }

    public function afterFind()
    {
        parent::afterFind();
        if (is_string($this->value)) {
            $this->value = Json::decode($this->value);
        }
    }
}
