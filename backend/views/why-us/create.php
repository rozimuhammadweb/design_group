<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\WhyUs $model */

$this->title = 'Qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Nega biz', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="why-us-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
