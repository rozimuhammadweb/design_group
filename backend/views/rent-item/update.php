<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\RentItem $model */

$this->title = 'Update Rent Item: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rent Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="card card-primary card-outline">
    <div class="card-body">
        <div class="rent-item-update">

            <h1><?= Html::encode($this->title) ?></h1>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>
