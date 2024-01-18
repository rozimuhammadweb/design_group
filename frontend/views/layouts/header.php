<!-- //navigation  -->
<?php


use yii\bootstrap4\Nav;
use yii\helpers\Url;



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

                <a href="<?= Url::to(['/']) ?>" class="logo">
                    <img src="<?= $setting->getUploadUrl('logo') ?>" alt="" class="logo-in">
                </a>
                <ul class="menu-bar">
                    <li>
                        <?php foreach ($menus as $menu): ?>
                            <a href="<?= $menu->url ?>" class="txt-18 "><?= $menu->title ?></a>
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

        </div>
    </div>
</div>