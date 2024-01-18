<?php

use app\models\InboxData;
use common\models\Settings;
use common\models\UserData;
use yii\widgets\ActiveForm;

$settings = Settings::find()->andWhere(['status' => Settings::STATUS_ACTIVE])->all();

?>
<!-- //main-page -->

<div class="main-page-content">
    <div class="my-container">
        <div class="main-content-in">
            <div class="contact-page">
                <div class="top-c ab">
                    <div class="left">
                        <h1 class="txt-60">
                            <?= Yii::t('app', 'connect') ?>

                        </h1>
                        <p class="txt-20">
                            <?= Yii::t('app', 'connect-title') ?>

                        </p>
                        <div class="number">
                            <div class="left-num">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M7.45312 10.3455C7.45312 7.72211 9.57978 5.59546 12.2031 5.59546C14.8264 5.59546 16.9531 7.72211 16.9531 10.3455C16.9531 12.9689 14.8264 15.0955 12.2031 15.0955C9.57978 15.0955 7.45312 12.9689 7.45312 10.3455ZM12.2031 7.09546C10.4082 7.09546 8.95313 8.55053 8.95313 10.3455C8.95313 12.1404 10.4082 13.5955 12.2031 13.5955C13.998 13.5955 15.4531 12.1404 15.4531 10.3455C15.4531 8.55053 13.998 7.09546 12.2031 7.09546Z"
                                          fill="#5A9206"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M3.72751 9.20231C4.08184 4.9037 7.67399 1.59546 11.9872 1.59546H12.4192C16.7324 1.59546 20.3245 4.9037 20.6788 9.20231C20.8692 11.5115 20.1559 13.8044 18.6892 15.5981L13.8962 21.4599C13.0212 22.53 11.3852 22.53 10.5102 21.4599L5.71711 15.5981C4.25045 13.8044 3.53717 11.5115 3.72751 9.20231ZM11.9872 3.09546C8.45464 3.09546 5.51263 5.80494 5.22244 9.32554C5.06402 11.2474 5.65767 13.1557 6.87833 14.6486L11.6714 20.5104C11.9463 20.8465 12.4601 20.8465 12.735 20.5104L17.528 14.6486C18.7487 13.1557 19.3423 11.2474 19.1839 9.32554C18.8937 5.80494 15.9517 3.09546 12.4192 3.09546H11.9872Z"
                                          fill="#5A9206"/>
                                </svg>

                            </div>
                            <?php foreach ($settings as $setting): ?>
                                <div class="sec-num">
                                    <p class="txt-12">                            <?= Yii::t('app', 'address') ?>
                                    </p>
                                    <p class="txt-14"><?= $setting->address ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="number">
                            <div class="left-num">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M4.77994 7.30728C6.06681 10.1094 8.35678 12.3372 11.2034 13.5444L11.2124 13.5482L11.7624 13.7933C12.4627 14.1053 13.2858 13.8837 13.7348 13.2623L14.6524 11.9924C14.7084 11.9149 14.6939 11.807 14.6195 11.7469L13.0177 10.4547C12.9381 10.3904 12.8209 10.4054 12.76 10.4876L12.1366 11.3288C11.9852 11.5331 11.7118 11.6041 11.4801 11.4993C9.35153 10.5359 7.641 8.82544 6.67769 6.69684C6.57284 6.46516 6.64383 6.19174 6.84813 6.04034L7.68937 5.41692C7.77157 5.356 7.78654 5.23892 7.72229 5.15929L6.42986 3.55726C6.36979 3.48279 6.26198 3.46834 6.18441 3.52433L4.90763 4.44605C4.2821 4.89762 4.06182 5.72767 4.38111 6.42999L4.77952 7.30635C4.77966 7.30666 4.7798 7.30697 4.77994 7.30728ZM10.7773 14.5368C7.68416 13.2238 5.1963 10.8024 3.79803 7.75696L3.79718 7.75516L3.39794 6.87696C2.86579 5.70642 3.23293 4.32301 4.27549 3.57038L5.55226 2.64867C6.09522 2.25669 6.84995 2.35793 7.27042 2.87913L8.56284 4.48117C9.01256 5.03857 8.9078 5.85821 8.33237 6.28462L7.85033 6.64186C8.66465 8.22179 9.95511 9.51232 11.5351 10.3266L11.8923 9.84453C12.3187 9.26918 13.1384 9.16442 13.6958 9.61413L15.2976 10.9063C15.8189 11.3269 15.9201 12.082 15.5278 12.625L14.6102 13.8948C13.8619 14.9305 12.49 15.2999 11.3229 14.7798L10.7773 14.5368Z"
                                          fill="#5A9206"/>
                                </svg>
                            </div>
                            <div class="sec-num">
                                <p class="txt-12"> <?= Yii::t('app', 'number') ?></p>
                                <p class="txt-14">+998 <?= $setting->number ?></p>
                            </div>
                        </div>
                        <div class="number">
                            <div class="left-num">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M7.85871 3.25C8.27292 3.25 8.60871 3.58579 8.60871 4V5.66763C11.4364 5.4158 14.281 5.4158 17.1087 5.66763V4C17.1087 3.58579 17.4445 3.25 17.8587 3.25C18.2729 3.25 18.6087 3.58579 18.6087 4V5.81644C20.1017 6.02754 21.2813 7.20847 21.4809 8.71484L21.5675 9.36779C21.9315 12.1141 21.9001 14.8984 21.4741 17.6359C21.2631 18.9919 20.1615 20.0335 18.7957 20.1681L17.6027 20.2858C14.4477 20.5969 11.2697 20.5969 8.11464 20.2858L6.92163 20.1681C5.55589 20.0335 4.45423 18.9919 4.24322 17.6359C3.81726 14.8984 3.78582 12.1141 4.14986 9.36779L4.23641 8.71484C4.43609 7.20845 5.61564 6.02751 7.10871 5.81643V4C7.10871 3.58579 7.4445 3.25 7.85871 3.25ZM8.30387 7.2028C11.3331 6.90408 14.3843 6.90408 17.4135 7.2028L18.3189 7.2921C19.1857 7.37757 19.8795 8.04854 19.9939 8.91194L20.0805 9.56489C20.1107 9.793 20.1381 10.0214 20.1626 10.25H5.55477C5.57926 10.0214 5.60661 9.79301 5.63685 9.5649L5.7234 8.91194C5.83785 8.04854 6.53167 7.37757 7.39842 7.2921L8.30387 7.2028ZM5.43554 11.75C5.33736 13.6381 5.43409 15.5332 5.72538 17.4052C5.83122 18.0854 6.3838 18.6078 7.06884 18.6754L8.26185 18.793C11.319 19.0945 14.3984 19.0945 17.4555 18.793L18.6485 18.6754C19.3335 18.6078 19.8861 18.0854 19.992 17.4052C20.2833 15.5332 20.38 13.6381 20.2818 11.75H5.43554Z"
                                          fill="#5A9206"/>
                                </svg>
                            </div>
                            <div class="sec-num">
                                <p class="txt-12"> <?= Yii::t('app', 'working_time') ?></p>
                                <p class="txt-14"><?= $setting->working_time ?></p>
                            </div>
                        </div>
                        <div class="number">
                            <div class="left-num">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M2.87434 8.98648C2.5942 11.5894 2.60669 14.5914 2.99651 17.1837C3.21221 18.6181 4.38288 19.7177 5.82795 19.8434L7.33818 19.9746C10.4872 20.2484 13.654 20.2484 16.8031 19.9746L18.3133 19.8434C19.7584 19.7177 20.9291 18.6181 21.1448 17.1837C21.5346 14.5914 21.5471 11.5896 21.2669 8.98663C21.2307 8.68487 21.19 8.38352 21.1448 8.08267C20.9291 6.64828 19.7584 5.54863 18.3133 5.42301L16.8031 5.29173C13.654 5.01799 10.4872 5.01799 7.33818 5.29173L5.82795 5.42301C4.38288 5.54863 3.21221 6.64828 2.99651 8.08267C2.95128 8.38346 2.91056 8.68477 2.87434 8.98648ZM7.46808 6.7861C10.5306 6.51987 13.6106 6.51987 16.6732 6.7861L18.1834 6.91738C18.9377 6.98295 19.5488 7.55697 19.6614 8.30572C19.6731 8.38348 19.6845 8.46127 19.6956 8.5391L14.1346 11.6286C12.851 12.3417 11.2902 12.3417 10.0066 11.6286L4.4457 8.53914C4.45676 8.4613 4.46814 8.38349 4.47983 8.30572C4.59243 7.55697 5.20352 6.98295 5.95785 6.91738L7.46808 6.7861ZM19.8791 10.1531C20.0731 12.4208 20.0005 14.7057 19.6614 16.9606C19.5488 17.7094 18.9377 18.2834 18.1834 18.349L16.6732 18.4803C13.6106 18.7465 10.5306 18.7465 7.46808 18.4803L5.95785 18.349C5.20352 18.2834 4.59243 17.7094 4.47983 16.9606C4.14074 14.7057 4.06818 12.4209 4.26215 10.1531L9.27817 12.9398C11.0148 13.9046 13.1264 13.9046 14.863 12.9398L19.8791 10.1531Z"
                                          fill="#5A9206"/>
                                </svg>
                            </div>
                            <div class="sec-num">
                                <p class="txt-12"> <?= Yii::t('app', 'email') ?></p>
                                <p class="txt-14"><?= $setting->email ?></p>
                            </div>
                        </div>

                    </div>
                    <div class="right">
                        <img src="/img/png/man2.png" alt="">
                    </div>
                </div>
                <div class="bottom-c ab">
                    <?php
                    $model = new InboxData();
                    ?>
                    <div class="bottom-c ab">
                        <div class="right">
                            <h1 class="txt-38 top"> <?= Yii::t('app', 'questions') ?></h1>
                            <?php $form = ActiveForm::begin(['action' => ['consultation']]); ?>
                            <label for="i1" class="txt-16 label"> <?= Yii::t('app', 'name') ?></label>
                            <?= $form->field($model, 'name', ['template' => "{input}\n{hint}\n{error}"])->textInput(['class' => 'input txt-16'])->label(false) ?>
                            <label for="i2" class="txt-16 label"><?= Yii::t('app', 'number') ?></label>
                            <?= $form->field($model, 'number')->textInput(['class' => 'input txt-16'])->label(false) ?>
                            <label for="i4" class="txt-16 label"><?= Yii::t('app', 'questions') ?></label>
                            <?= $form->field($model, 'comment')->textarea(['class' => 'input txt-16', 'rows' => 7, 'placeholder' => '...'])->label(false) ?>
                            <button type="submit" class="btn-glavni txt-18 sucs"><?= Yii::t('app', 'send')?></button>
                            <?php ActiveForm::end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    