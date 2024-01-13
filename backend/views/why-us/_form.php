<?php

use yii\helpers\Html;
use  kartik\switchinput\SwitchInput;
use kartik\file\FileInput;
use gofuroov\multilingual\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/** @var yii\web\View $this */
/** @var common\models\WhyUs $model */
?>
<div class="card card-primary card-outline">
    <div class="card-body">
        <div class="why-us-form">
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
            <div class="row">
                <div class="col-md-12">
                    <?= $form->languageSwitcher($model) ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'title')->textarea(['rows' => 2]); ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'short_description')->textarea(['rows' => 4]); ?>
                </div>
                <div class="col-12">
                    <?= $form->field($model, 'imageFile')->widget(FileInput::class,
                        [
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
                <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary  ml-2 px-5']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
