<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\RentItem $model */

$this->title = 'Create Rent Item';
$this->params['breadcrumbs'][] = ['label' => 'Rent Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rent-item-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
