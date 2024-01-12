<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Services $model */

$this->title = 'Xizmatlarni yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Xizmatlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="services-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
