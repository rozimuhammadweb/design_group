<?php

namespace common\models;

use gofuroov\multilingual\behaviors\MultilingualBehavior;
use gofuroov\multilingual\db\MultilingualLabelsTrait;

/**
 * This is the model class for table "rent_item".
 *
 * @property int $id
 * @property int $rent_id
 * @property int|null $cost
 *
 * @property Rent $rent
 * @property RentItemLang[] $rentItemLangs
 */
class RentItem extends \yii\db\ActiveRecord
{
    use MultilingualLabelsTrait;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rent_item';
    }

    public function behaviors()
    {
        return [
            'multilingual' => [
                'class' => MultilingualBehavior::className(),
                'languages' => [
                    'uz' => 'Uzbek',
                    'ru' => 'Русский',
                    'en' => "English",
                ],
                'attributes' => ['title',],

            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rent_id'], 'required'],
            [['rent_id', 'cost'], 'integer'],
            [['title'], 'safe'],
            [['rent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rent::class, 'targetAttribute' => ['rent_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rent_id' => 'Rent ID',
            'cost' => 'Cost',
        ];
    }

    /**
     * Gets query for [[Rent]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRent()
    {
        return $this->hasOne(Rent::class, ['id' => 'rent_id']);
    }

    /**
     * Gets query for [[RentItemLangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRentItemLangs()
    {
        return $this->hasMany(RentItemLang::class, ['owner_id' => 'id']);
    }
}
