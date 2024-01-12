<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Gallery $model */

$this->title = 'Create Gallery';
$this->params['breadcrumbs'][] = ['label' => 'Galleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
