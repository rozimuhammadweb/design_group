<?php

namespace common\models;

use gofuroov\multilingual\behaviors\MultilingualBehavior;
use mohorev\file\UploadImageBehavior;
use Yii;

/**
 * This is the model class for table "setting_lang".
 *
 * @property int $id
 * @property int|null $owner_id
 * @property string|null $company_info
 * @property string|null $working_time
 * @property string|null $address
 * @property string|null $language
 *
 * @property Settings $owner
 */
class SettingLang extends \yii\db\ActiveRecord
{


    public static function tableName()
    {
        return '{{%setting_lang}}';
    }


    public function rules()
    {
        return [
            [['owner_id'], 'integer'],
            [['company_info', 'working_time', 'address'], 'string'],
            [['language'], 'string', 'max' => 6],
            [['owner_id'], 'exist', 'skipOnError' => true, 'targetClass' => Settings::class, 'targetAttribute' => ['owner_id' => 'id']],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'owner_id' => 'Owner ID',
            'company_info' => 'Company Info',
            'working_time' => 'Working Time',
            'address' => 'Address',
            'language' => 'Language',
        ];
    }

    public function getOwner()
    {
        return $this->hasOne(Settings::class, ['id' => 'owner_id']);
    }
}
