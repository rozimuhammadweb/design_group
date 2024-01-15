<?php

namespace backend\modules\menumanager\models;

use Yii;
use yii\caching\TagDependency;

/**
 *
 * @property-read Menu[] $subMenus
 * @property-read Menu[] $activeSubMenus
 * @property-read bool $hasActiveSubMenus
 * @property-read string $title
 * @property-read string $url
 * @property bool $child_allowed [tinyint(1)]
 * @property string $title_uz [varchar(255)]
 * @property string $url_str [varchar(255)]
 * @property string $url_type [varchar(255)]
 * @property string $url_value [varchar(255)]
 * @property string $title_ru [varchar(255)]
 * @property string $title_en [varchar(255)]
 * @property bool $status [tinyint]
 * @property string $idn [varchar(255)]
 */
class Menu extends \kartik\tree\models\Tree
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%menu}}';
    }




    /**
     * @inheritdoc
     */
    public function rules()
    {
        $rules = parent::rules();
        return array_merge($rules, [
            [['name', 'title_uz', 'title_ru','title_en' /*'url_type', 'url_value'*/], 'required'],
            ['url_str', 'unique'],
            ['status', 'integer'],
            [['idn'], 'string', 'max' => 255],
            [['url_str', 'url_type', 'url_value'], 'string', 'max' => 255],
        ]);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'title_uz' => 'Title Uz',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'url_str' => 'Identifikator',
            'url_type' => 'Url Type',
            'url_value' => 'Url Value',
        ];
    }

    public static function find()
    {
        $query = parent::find();
        return $query->addOrderBy('root, lft');
    }

    public static function getMenu($menuId = '')
    {
        return Yii::$app->db->cache(function ($db) use ($menuId) {
            return static::findOne(['url_str' => $menuId]);
        }, null, new TagDependency(['tags' => 'menu']));
    }

    public function getSubMenus()
    {
        return $this->hasMany(Menu::class, ['root' => 'root'])
            ->andWhere(['lvl' => $this->lvl + 1])
            ->andWhere(['>', 'lft', $this->lft])
            ->andWhere(['<', 'rgt', $this->rgt]);
    }

    public function getActiveSubMenus()
    {
        return $this->getSubMenus()
            ->andWhere(['status' => 1, 'active' => 1, 'disabled' => 0]);
    }

    /**
     * Check if menu has active sub menu
     **/

    public function getHasActiveSubMenus()
    {
        return !empty($this->activeSubMenus);
    }

    public function getTitle()
    {

        if (Yii::$app->language == 'ru')
            return $this->title_ru;
        elseif (Yii::$app->language=='en'){
            return $this->title_en;
        }
        else  return $this->title_uz;
    }

    public function getUrl()
    {

        $model = $this;
        if ($model->url_type === 'main') return Yii::$app->urlManager->createUrl(['site/index']);
        if ($model->url_type === 'page') return Yii::$app->urlManager->createUrl(['site/page', 'id' => $model->url_value]);
        if ($model->url_type === 'category') return Yii::$app->urlManager->createUrl(['blog/detail', 'id' => $model->url_value]);
        if ($model->url_type === 'c-action') return Yii::$app->urlManager->createUrl([$model->url_value]);
        return $model->url_value;

    }

}
