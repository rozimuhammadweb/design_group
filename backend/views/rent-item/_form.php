<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use gofuroov\multilingual\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\RentItem $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="card card-primary card-outline">
    <div class="card-body">
        <div class="rent-item-form">
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-md-12">
                    <?= $form->languageSwitcher($model) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'rent_id')->dropDownList(ArrayHelper::map(common\models\Rent::find()->all(),
                        'id',
                        'title'), ['prompt' => 'Select Rent']) ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'title')->textInput(['rows'=> 4]) ?>
                </div>

                <div class="col-md-6">
                <?= $form->field($model, 'cost')->textInput() ?>
                </div>
            </div>
            <div class="form-group d-flex justify-content-end">
                <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary px-5']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
