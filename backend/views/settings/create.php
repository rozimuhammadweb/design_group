<?php

use yii\bootstrap4\Breadcrumbs;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Settings $model */

$this->title = 'Create Settings';
$this->params['breadcrumbs'][] = ['label' => 'Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


