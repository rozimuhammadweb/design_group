<?php

use yii\bootstrap4\Breadcrumbs;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Settings $model */

$this->title = 'Tahrirlash: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sozlamalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="settings-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>