<?php

namespace common\models;

use gofuroov\multilingual\behaviors\MultilingualBehavior;
use gofuroov\multilingual\db\MultilingualLabelsTrait;
use gofuroov\multilingual\db\MultilingualQuery;
use mohorev\file\UploadImageBehavior;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;


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

    public $imageFile;

    use MultilingualLabelsTrait;

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            'blameable' => [
                'class' => BlameableBehavior::class,
            ],
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
            'multilingual' => [
                'class' => MultilingualBehavior::className(),
                'languages' => [
                    'uz' => 'Uzbek',
                    'ru' => 'Русский',
                    'en' => "English",
                ],
                'attributes' => ['company_info', 'address', 'working_time',],

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
            [['number', 'email', 'company_info'], 'required'],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'on' => ['insert', 'update']],
            [['company_info', 'address', 'working_time'], 'string', 'max' => 255],
            [['status'], 'integer'],
            [['number'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 255],
            [['created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Telefon raqam',
            'email' => 'Elektron pochta',
            'logo' => 'Rasm',
            'status' => 'Status',
            'company_info' => 'Kompaniya ma\'lumotlari',
            'working_time' => 'Ish jadvali',
            'address' => 'Manzil',
            'created_by' => 'Yaratdi',
            'updated_by' => 'Tahrirladi',
            'created_at' => 'Yaratilgan',
            'updated_at' => 'Yangilangan',
        ];
    }

    public static function find()
    {
        $query = new MultilingualQuery(get_called_class());
        return $query->multilingual();
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedByUser()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedByUser()
    {
        return $this->hasOne(User::class, ['id' => 'updated_by']);
    }

}
