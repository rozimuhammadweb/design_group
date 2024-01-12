<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Works $model */

$this->title = 'Tahrirlash: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ishlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Tahrirlash';
?>
<div class="works-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
