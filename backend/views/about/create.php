<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\About $model */

$this->title = 'Qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Biz haqimizda', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
