<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Rent $model */

$this->title = 'Update Rent: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rent-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
