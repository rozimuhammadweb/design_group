<!-- //menu-left -->
<div class="bg-p"></div>
<div class="bg-m"></div>
<!-- //siz-royhatdan otdingiz -->

<div class="modal-last modal-web ">
    <div class="sucsess">
        <svg width="64" height="43" viewBox="0 0 64 43" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M62.8753 1.11126C64.3749 2.59295 64.3749 4.99529 62.8753 6.47697L27.0352 41.8887C25.5355 43.3704 23.1045 43.3704 21.6047 41.8887L1.1247 21.6533C-0.3749 20.1716 -0.3749 17.7697 1.1247 16.2879C2.6243 14.8062 5.05569 14.8062 6.55529 16.2879L24.32 33.8401L57.445 1.11126C58.9446 -0.370421 61.3756 -0.370421 62.8753 1.11126Z"
                  fill="#fff"/>
        </svg>
    </div>
    <h1 class="txt-38">
        <?= Yii::t('app', 'send_success') ?>
    </h1>
    <div class="txt-18">
        <?= Yii::t('app', 'call') ?>

    </div>

    <button class="back-btn back txt-16"><?= Yii::t('app', 'close') ?></button>
</div>

<!-- //siz-royhatdan otdingiz -->
<?php


use app\models\InboxData;
use yii\bootstrap4\ActiveForm;
use yii\widgets\MaskedInput;

$model = new InboxData();
?>
<div class="modal-first modal-web">
    <div class="back exit">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.46436 15.5354L15.5354 8.46436" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M8.46436 8.46436L15.5354 15.5354" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
    </div>
    <div class="left">
        <img src="/img/png/man.png" alt="">
    </div>
    <div class="right">
        <h1 class="txt-38">
            <?= Yii::t('app', 'consultation') ?>
        </h1>

        <?php $form = ActiveForm::begin(['action' => ['consultation']]); ?>

        <?= $form->field($model, 'name')->textInput(['class' => 'input txt-16'])->label(Yii::t('app', 'name')) ?>
        <?= $form->field($model, 'number')->widget(MaskedInput::class, ['mask' => '99-999-99-99',])->label(Yii::t('app', 'number')) ?>

        <button type="submit" class="btn-glavni txt-18 sucs"><?= Yii::t('app', 'send') ?></button>

        <?php ActiveForm::end(); ?>
    </div>
</div>