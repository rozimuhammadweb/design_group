<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Services $model */

$this->title = 'Tahrirlash: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Xizmatlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Tahrirlash';
?>
<div class="services-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
