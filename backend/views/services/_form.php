<?php

use gofuroov\multilingual\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\switchinput\SwitchInput;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Services $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="card card-primary card-outline ">
    <div class="card-body">
        <div class="services-form">
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
            <div class="row">
                <div class="col-md-12">
                    <?= $form->languageSwitcher($model) ?>
                </div>

                <div class="col-12">
                    <?= $form->field($model, 'title')->textarea(['maxlength' => true, 'rows' => 6, 'placeholder' => 'Address (Uzbek)']) ?>
                </div>
                <div class="col-12">
                    <?= $form->field($model, 'short_description')->textarea(['maxlength' => true, 'rows' => 6, 'placeholder' => 'Address (Uzbek)']) ?>
                </div>
                <div class="col-12">
                    <?= $form->field($model, 'description')->textarea(['maxlength' => true, 'rows' => 6, 'placeholder' => 'Address (Uzbek)']) ?>
                </div>
                <div class="col-12">
                    <?= $form->field($model, 'imageFile')->widget(FileInput::class, [
                        'options' => ['accept' => 'image/*'],
                        'pluginOptions' => [
                            'showPreview' => false,
                            'showCaption' => true,
                            'showRemove' => true,
                            'showUpload' => false,
                        ],
                    ])->label('Rasm') ?>

                </div>

                <div class="col-4">
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
