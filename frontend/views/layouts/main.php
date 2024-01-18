<?php

/** @var \yii\web\View $this */

/** @var string $content */

use backend\modules\menumanager\models\Menu;
use common\models\Settings;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

$setting = Settings::find()->andWhere(['status' => Settings::STATUS_ACTIVE])->orderBy('id DESC')->one();
$mainMenus = Menu::getMenu('main_menu');
$menus = $mainMenus->activeSubMenus;

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <?= $this->render('header', ['setting' => $setting, 'menus' => $menus]) ?>
    <main role="main" class="flex-shrink-0">
        <?= Alert::widget() ?>
        <?= $content ?>
    </main>
    <?= $this->render('footer', ['setting' => $setting, 'menus' => $menus]) ?>
    <?= $this->render('modal') ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
