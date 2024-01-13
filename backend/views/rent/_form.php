<?php

use yii\helpers\Html;
use gofuroov\multilingual\widgets\ActiveForm;
use kartik\switchinput\SwitchInput;

/** @var yii\web\View $this */
/** @var common\models\Rent $model */
/** @var ActiveForm $form */
?>
<div class="card card-primary card-outline">
    <div class="card-body">
        <div class="rent-form">

            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-md-12">
                    <?= $form->languageSwitcher($model) ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'title')->textInput(['rows' => 2]) ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'short_description')->textInput(['rows' => 6]) ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'type')->textInput(['rows' => 6]) ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'is_popular')->textInput(['rows' => 6]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'cost')->textInput() ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'status')->widget(SwitchInput::classname(), []); ?>
                </div>
            </div>
            <div class="form-group d-flex justify-content-end">
                <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary px-5']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
