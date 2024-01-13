<?php

use kartik\file\FileInput;
use kartik\switchinput\SwitchInput;
use yii\helpers\Html;
use gofuroov\multilingual\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use mihaildev\ckeditor\CKEditor;

/** @var yii\web\View $this */
/** @var common\models\Settings $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="card card-primary card-outline">
    <div class="card-body">
        <div class="settings-form">

            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
            <div class="row">
                <div class="col-md-12">
                    <?= $form->languageSwitcher($model) ?>

                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'company_info')->textarea(['rows' => 3]); ?>
                </div>

                <div class="col-md-12">
                    <?= $form->field($model, 'address')->textarea(['rows' => 3]); ?>
                </div>

                <div class="col-md-12">
                    <?= $form->field($model, 'working_time')->textarea(['rows' => 3]); ?>
                </div>

                <div class="col-6">
                    <?= $form->field($model, 'number')->widget(MaskedInput::class, [
                        'mask' => '99-999-99-99',
                    ]) ?>                </div>
                <div class="col-6">
                    <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'example@gmail.com']) ?>
                </div>
                <div class="col-12">
                    <?= $form->field($model, 'logo')->widget(FileInput::class, [
                        'options' => ['accept' => 'image/*'],
                        'pluginOptions' => [
                            'showPreview' => false,
                            'showCaption' => true,
                            'showRemove' => true,
                            'showUpload' => false,
                        ],
                    ]) ?>

                </div>
                <div class="col-4">
                    <?= $form->field($model, 'status')->widget(SwitchInput::classname(), []); ?>
                </div>
            </div>
            <div class="form-group d-flex justify-content-end">
                <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary  ml-2 px-5']) ?>
            </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>

