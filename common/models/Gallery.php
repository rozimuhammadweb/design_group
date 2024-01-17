<?php

namespace common\models;

use backend\models\GalleryImage;
use gofuroov\multilingual\behaviors\MultilingualBehavior;
use Imagine\Image\Box;
use Imagine\Image\ImageInterface;
use mohorev\file\UploadImageBehavior;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use zxbodya\yii2\galleryManager\GalleryBehavior;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property int|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Gallery extends \yii\db\ActiveRecord
{


    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            'blameable' => [
                'class' => BlameableBehavior::class,
            ],
            'galleryBehavior' => [
                'class' => GalleryBehavior::className(),
                'type' => 'gallery',
                'extension' => 'jpg',
                'directory' => Yii::getAlias('@frontend/web') . '/images/gallery/gallery',
                'url' => '/images/gallery/gallery',
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
        ];
    }

    /**
     * {@inheritdoc}
     */


    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
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
            ->andWhere(['type' => 'gallery'])
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
            $result[] = "/images/gallery/gallery/$this->id/" . $image['id'] . "/$type.jpg";
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

    public function getCreatedByUser()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    public function getUpdatedByUser()
    {
        return $this->hasOne(User::class, ['id' => 'updated_by']);
    }

}
