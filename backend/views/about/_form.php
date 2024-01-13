<?php

use kartik\switchinput\SwitchInput;
use yii\helpers\Html;
use mihaildev\ckeditor\CKEditor;
use gofuroov\multilingual\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\About $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="card card-primary card-outline">
    <div class="card-body">
        <div class="about-form">
            <?php $form = ActiveForm::begin(); ?>
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
                <div class="col-md-12">
                    <?= $form->field($model, 'description')->widget(CKEditor::className(),[
                        'editorOptions' => [
                            'preset' => '4', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                            'inline' => false, //по умолчанию false
                        ],
                    ]); ?>
                </div>
                <div class="col-6">
                    <?= $form->field($model, 'successful_project')->textInput() ?>
                </div>
                <div class="col-6">
                    <?= $form->field($model, 'regular_customer')->textInput() ?>
                </div>
                <div class="col-6">
                    <?= $form->field($model, 'quality_service')->textInput() ?>
                </div>
                <div class="col-12">
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
