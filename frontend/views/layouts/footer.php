<!-- //footer -->
<?php

use common\models\Settings;

//$setting = Settings::find()->andWhere(['status' => Settings::STATUS_ACTIVE])->orderBy('id DESC')->one();

?>
<?php //= $this->render('footer', ['setting' => $setting]) ?>

<div class="footer ">
    <div class="my-container">
        <div class="footer-in">
            <div class="top">
                <p class="txt-16 left-txt">
                    © 2024 Ali Design
                </p>
                <p class="txt-16 main-txt">
                    Разработал <a href="#">InSoft Solutions</a>
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
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book
            </p>
        </div>
    </div>
</div>