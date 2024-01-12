<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\switchinput\SwitchInput;

/** @var yii\web\View $this */
/** @var common\models\Gallery $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="card card-primary card-outline">
    <div class="card-body">
        <div class="gallery-form">
            <?php $form = ActiveForm::begin(); ?>

            <div class="col-4">
                <?= $form->field($model, 'status')->widget(SwitchInput::classname(), []); ?>
            </div>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
