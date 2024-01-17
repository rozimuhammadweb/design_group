<?php

namespace common\models;

use gofuroov\multilingual\behaviors\MultilingualBehavior;
use gofuroov\multilingual\db\MultilingualLabelsTrait;
use gofuroov\multilingual\db\MultilingualQuery;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "rent".
 *
 * @property int $id
 * @property int|null $cost
 * @property int|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property RentItem[] $rentItems
 * @property RentLang[] $rentLangs
 */
class Rent extends ActiveRecord
{
    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 0;
    use MultilingualLabelsTrait;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rent';
    }

    public static function find()
    {
        $query = new MultilingualQuery(get_called_class());
        return $query->multilingual();
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            'blameable' => [
                'class' => BlameableBehavior::class,
            ],
            'multilingual' => [
                'class' => MultilingualBehavior::className(),
                'languages' => [
                    'uz' => 'Uzbek',
                    'ru' => 'Русский',
                    'en' => "English",
                ],
                'attributes' => ['title', 'type', 'short_description', 'is_popular'],

            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'short_description', 'title', 'is_popular',], 'required'],
            [['cost', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cost' => 'Cost',
            'status' => 'Statusi',
            'created_by' => 'Yaratdi',
            'updated_by' => 'Tahrirladi',
            'created_at' => 'Yaratilgan',
            'updated_at' => 'Yangilangan',
        ];
    }

    /**
     * Gets query for [[RentItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRentItems()
    {
        return $this->hasMany(RentItem::class, ['rent_id' => 'id']);
    }

    /**
     * Gets query for [[RentLangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRentLangs()
    {
        return $this->hasMany(RentLang::class, ['owner_id' => 'id']);
    }

    public function getCreatedByUser()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    public function getUpdatedByUser()
    {
        return $this->hasOne(User::class, ['id' => 'updated_by']);
    }

    public static function getRent()
    {
        return self::find()->andWhere(['status' => Rent::STATUS_ACTIVE])->all();
    }


}
