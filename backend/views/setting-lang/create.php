<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\SettingLang $model */

$this->title = 'Create Setting Lang';
$this->params['breadcrumbs'][] = ['label' => 'Setting Langs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setting-lang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
