<?php

namespace common\models;

use backend\models\GalleryImage;
use gofuroov\multilingual\behaviors\MultilingualBehavior;
use gofuroov\multilingual\db\MultilingualLabelsTrait;
use gofuroov\multilingual\db\MultilingualQuery;
use Imagine\Image\Box;
use Imagine\Image\ImageInterface;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use zxbodya\yii2\galleryManager\GalleryBehavior;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property int|null $successful_project
 * @property int|null $regular_customer
 * @property int|null $quality_service
 * @property int|null $status
 * @property int $created_by
 * @property string|null $created_at
 * @property string $updated_by
 * @property string|null $updated_at
 *
 */
class About extends ActiveRecord
{

    use MultilingualLabelsTrait;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['successful_project', 'regular_customer', 'quality_service', 'status'], 'integer'],
            [['successful_project', 'regular_customer', 'quality_service'], 'required'],
            [['title', 'short_description', 'description'], 'string', 'max' => 255],
            [['created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
        ];
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
                'type' => 'about',
                'extension' => 'jpg',
                'directory' => Yii::getAlias('@frontend/web') . '/images/about/gallery',
                'url' => '/images/about/gallery',
                'versions' => [
                    'small' => function ($img) {
                        /** @var ImageInterface $img */
                        return $img
                            ->copy()
                            ->thumbnail(new Box(200, 200));
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
                'attributes' => ['title', 'short_description', 'description',],

            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'successful_project' => 'Successful Project',
            'regular_customer' => 'Regular Customer',
            'quality_service' => 'Quality Service',
            'status' => 'Status',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getGalleryImages()
    {
        return $this->hasMany(GalleryImage::class, ['ownerId' => 'id'])
            ->andWhere(['type' => 'about'])
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
            $result[] = "/images/about/gallery/$this->id/" . $image['id'] . "/$type.jpg";
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
