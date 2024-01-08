<?php

namespace common\models;

use gofuroov\multilingual\behaviors\MultilingualBehavior;
use mohorev\file\UploadImageBehavior;
use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property int $id
 * @property string|null $number
 * @property string|null $email
 * @property string|null $logo
 * @property int|null $status
 *
 * @property SettingLang[] $settingLangs
 */
class Settings extends \yii\db\ActiveRecord
{

    public function behaviors()
    {
        return [
            [
                'class' => UploadImageBehavior::class,
                'attribute' => 'logo',
                'scenarios' => ['default', 'create'],
                'path' => '@frontend/web/uploads/settings/{id}',
                'url' => '/uploads/settings/{id}',
                'thumbs' => [
                    'thumb' => ['width' => 570, 'height' => 590],
                ],
            ],
        ];
    }

    public static function tableName()
    {
        return 'settings';
    }


    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['number'], 'string', 'max' => 20],
            [['email', 'logo'], 'string', 'max' => 255],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'email' => 'Email',
            'logo' => 'Logo',
            'status' => 'Status',
        ];
    }


    public function getSettingLangs()
    {
        return $this->hasMany(SettingLang::class, ['owner_id' => 'id']);
    }
}
