<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Rent $model */

$this->title = 'Create Rent';
$this->params['breadcrumbs'][] = ['label' => 'Rents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rent-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
