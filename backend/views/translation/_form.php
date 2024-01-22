<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Translation $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="card card-primary card-outline">
    <div class="card-body">
        <div class="translation-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'key')->textInput(['maxlength' => true]) ?>

            <? foreach (['uz', 'ru', 'en',] as $language) {
                echo $form->field($model, 'value[' . $language . ']')->textInput(['placeholder' => $language]);
            } ?>

            <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
