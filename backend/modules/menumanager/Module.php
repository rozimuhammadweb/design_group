<?php

namespace backend\modules\menumanager;

/**
 * menumanager module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'backend\modules\menumanager\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        // custom initialization code goes here
    }

    /**
     * Menu uchun sayt bo'limlari
     */
    public function sections()
    {
        return [
            'site/service-view' => 'Xizmatlar',
            'site/about' => 'Biz haqimizda',
            'site/gallery' => "Galleriya",
            'site/contact' => "Bog'lanish",

        ];

    }
}
