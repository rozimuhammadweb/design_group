<!-- //footer -->
<?php

use backend\modules\menumanager\models\Menu;

$mainMenus = Menu::getMenu('main_menu');
$menus = $mainMenus->activeSubMenus;

?>
<div class="footer-top ab">
    <div class="my-container">
        <div class="navigation-in">
            <div class="left">
                <a href="index.html" class="logo">
                    <img src="/img/png/logo.png" alt="" class="logo-in">
                </a>
                <ul class="menu-bar">
                    <li>
                        <?php foreach ($menus as $menu): ?>
                            <a href="<?= $menu->url ?>" class="txt-18 "><?=  $menu->title ?></a>
                        <?php endforeach; ?>
                    </li>
                </ul>
            </div>
            <div class="right">
                <button class="btn-glavni konsul back-btn">
                    <?= Yii::t('app', 'consultation') ?>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="footer ">
    <div class="my-container">
        <div class="footer-in">

            <div class="top">
                <p class="txt-16 left-txt">
                    © 2024 Ali Design
                </p>
                <p class="txt-16 main-txt">
                    <?= Yii::t('app', 'developed') ?> <a href="#">InSoft Solutions</a>
                </p>
                <div class="sign">
                    <a href="#" class="icon-bg">
                        <img src="/" alt="">
                    </a>
                    <a href="#" class="icon-bg">
                        <img src="/" alt="">
                    </a>
                    <a href="#" class="icon-bg">
                        <img src="/" alt="">
                    </a>
                    <a href="#" class="icon-bg">
                        <img src="/" alt="">
                    </a>
                </div>

            </div>
            <p class="bottom txt-12">
                <?= $setting->company_info ?>
            </p>
        </div>

    </div>
</div>
