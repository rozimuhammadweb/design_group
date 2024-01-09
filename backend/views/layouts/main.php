<?php

/** @var \yii\web\View $this */

/** @var string $content */

use backend\assets\AppAsset;
use backend\widgets\Navbar;
use backend\widgets\SideBar;
use common\widgets\Alert;
use yii\bootstrap\Html;
use yii\bootstrap4\Breadcrumbs;

AppAsset::register($this);
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
    <body class="hold-transition sidebar-mini layout-fixed">
    <?php $this->beginBody() ?>
    <div class="wrapper">
        <?= Navbar::widget() ?>
        <div class="content-wrapper px-5">
            <?= Alert::widget() ?>
            <?= SideBar::widget() ?>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
