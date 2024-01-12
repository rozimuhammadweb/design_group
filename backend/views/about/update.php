<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\About $model */

$this->title = 'Tahrirlash: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Biz haqimizda', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Tahrirlash';
?>
<div class="about-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
