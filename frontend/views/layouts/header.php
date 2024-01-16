<!-- //navigation  -->
<?php

use backend\modules\menumanager\models\Menu;
use common\models\Settings;
use yii\bootstrap4\Nav;
use yii\helpers\Url;

$mainMenus = Menu::getMenu('main_menu');
$menus = $mainMenus->activeSubMenus;

$settings = Settings::find()->andWhere(['status' => Settings::STATUS_ACTIVE])->all();
?>
<div class="navigation">
    <div class="my-container">
        <div class="navigation-in">
            <div class="left">
                <svg class="menu-h" width="24" height="25" viewBox="0 0 24 25" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M19.75 12.9404C19.75 12.5262 19.4142 12.1904 19 12.1904H5C4.58579 12.1904 4.25 12.5262 4.25 12.9404C4.25 13.3546 4.58579 13.6904 5 13.6904H19C19.4142 13.6904 19.75 13.3546 19.75 12.9404Z"
                          fill="black"/>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M19.75 7.94043C19.75 7.52622 19.4142 7.19043 19 7.19043H5C4.58579 7.19043 4.25 7.52622 4.25 7.94043C4.25 8.35464 4.58579 8.69043 5 8.69043H19C19.4142 8.69043 19.75 8.35464 19.75 7.94043Z"
                          fill="black"/>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M19.75 17.9404C19.75 17.5262 19.4142 17.1904 19 17.1904H5C4.58579 17.1904 4.25 17.5262 4.25 17.9404C4.25 18.3546 4.58579 18.6904 5 18.6904H19C19.4142 18.6904 19.75 18.3546 19.75 17.9404Z"
                          fill="black"/>
                </svg>
                <?php foreach ($settings as $setting): ?>
                <a href="<? Url::home() ?>" class="logo">
                    <img src="<?= $setting->getUploadUrl('logo') ?>" alt="" class="logo-in">
                </a>
                <ul class="menu-bar">
                    <li>
                        <?php foreach ($menus as $menu): ?>
                            <a href="<?= $menu->url ?>" class="txt-18 "><?= Yii::t('app', $menu->title) ?></a>
                        <?php endforeach; ?>
                    </li>
                    <?php

                    $defaultLang = Yii::$app->language;
                    $languageLabels = [
                        'uz' => 'Uzbekcha',
                        'ru' => 'Русский',
                        'en' => 'English',
                    ];
                    echo Nav::widget([
                        'options' => ['class' => ''],
                        'items' => [
                            [
                                'label' => $languageLabels[$defaultLang],
                                'items' => [
                                    ['label' => 'Uzbekcha', 'url' => ['/site/changelang', 'lang' => 'uz']],
                                    ['label' => 'Русский', 'url' => ['/site/changelang', 'lang' => 'ru']],
                                    ['label' => 'English', 'url' => ['/site/changelang', 'lang' => 'en']],
                                ],
                                'options' => ['class' => 'nav-item dropdown'],
                                'encodeLabels' => false,
                            ],
                        ],
                    ]);
                    ?>
                </ul>
            </div>
            <div class="right">
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
                        <p class="txt-12">Номер телефона</p>
                            <p class="txt-14">+998 <?= $setting->number ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <button class="btn-glavni konsul back-btn">
                    Консультация
                </button>
            </div>
        </div>
    </div>
</div>