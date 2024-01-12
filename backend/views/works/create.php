<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Works $model */

$this->title = 'Qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Ishlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="works-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
