<?php

namespace common\models;

use backend\models\GalleryImage;
use gofuroov\multilingual\behaviors\MultilingualBehavior;
use gofuroov\multilingual\db\MultilingualLabelsTrait;
use gofuroov\multilingual\db\MultilingualQuery;
use Imagine\Image\Box;
use Imagine\Image\ImageInterface;
use mohorev\file\UploadImageBehavior;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use zxbodya\yii2\galleryManager\GalleryBehavior;

/**
 * This is the model class for table "why_us".
 *
 * @property int $id
 * @property string|null $image
 * @property int|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property WhyUsLang[] $whyUsLangs
 */
class WhyUs extends \yii\db\ActiveRecord
{

    public $imageFile;
    use MultilingualLabelsTrait;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'why_us';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            'blameable' => [
                'class' => BlameableBehavior::class,
            ],
            'galleryBehavior' => [
                'class' => GalleryBehavior::className(),
                'type' => 'why-us',
                'extension' => 'jpg',
                'directory' => Yii::getAlias('@frontend/web') . '/images/why-us/gallery',
                'url' => '/images/why-us/gallery',
                'versions' => [
                    'small' => function ($img) {
                        /** @var ImageInterface $img */
                        return $img
                            ->copy()
                            ->thumbnail(new Box(70, 70));
                    },
                    'medium' => function ($img) {
                        /** @var ImageInterface $img */
                        $dstSize = $img->getSize();
                        $maxWidth = 800;
                        if ($dstSize->getWidth() > $maxWidth) {
                            $dstSize = $dstSize->widen($maxWidth);
                        }
                        return $img
                            ->copy()
                            ->resize($dstSize);
                    },
                ]
            ],
            'multilingual' => [
                'class' => MultilingualBehavior::className(),
                'languages' => [
                    'uz' => 'Uzbek',
                    'ru' => 'Русский',
                    'en' => "English",
                ],
                'attributes' => ['title', 'short_description',],

            ],
            [
                'class' => UploadImageBehavior::class,
                'attribute' => 'image',
                'scenarios' => ['default', 'create'],
                'path' => '@frontend/web/uploads/why-us/{id}',
                'url' => '/uploads/why-us/{id}',
                'thumbs' => [
                    'thumb' => ['width' => 570, 'height' => 590],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'short_description'], 'required'],
            [['status', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'on' => ['insert', 'update']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Sarlavha',
            'short_description' => 'Qisqa tavsifi',
            'image' => 'Asosiy rasm',
            'status' => 'Statusi',
            'created_by' => 'Yaratdi',
            'updated_by' => 'Tahrirladi',
            'created_at' => 'Yaratilgan',
            'updated_at' => 'Yangilangan',
        ];
    }


    /**
     * @return ActiveQuery
     */
    public function getGalleryImages()
    {
        return $this->hasMany(GalleryImage::class, ['ownerId' => 'id'])
            ->andWhere(['type' => 'why-us'])
            ->orderBy('rank ASC');
    }


    public function getGalleryImagesAsArray()
    {
        return $this->getGalleryImages()->asArray();
    }


    /**
     * @param string $type
     * @return array
     */
    public function getImages($type = 'preview')
    {
        $images = $this->galleryImagesAsArray;
        $result = [];
        foreach ($images as $image) {
            $result[] = "/images/why-us/gallery/$this->id/" . $image['id'] . "/$type.jpg";
        }
        return $result;

    }

    /**
     * Main image of the product
     * @return string
     */
    public function getImage($type = 'preview')
    {
        $images = $this->getImages($type);
        if (empty($images)) {
            return "/images/no-image-png";
        }
        return $images[0] ?? '';
    }


    public static function find()
    {
        $query = new MultilingualQuery(get_called_class());
        return $query->multilingual();
    }

    public function getCreatedByUser()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    public function getUpdatedByUser()
    {
        return $this->hasOne(User::class, ['id' => 'updated_by']);
    }
}
