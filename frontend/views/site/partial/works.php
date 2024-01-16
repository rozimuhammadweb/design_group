<?php

use common\models\Works;

$works = Works::find()->andWhere(['status' => Works::STATUS_ACTIVE])->all();

?>
<!-- //servise -->

<div class="servise ab">
    <div class="my-container">
        <div class="servise-in">
            <div class="top">
                <h1 class="txt-38">Наши работы</h1>
                <a href="batafsil.html" class="back-btn txt-18">Подробнее</a>
            </div>
            <div class="main-cards">
                <?php foreach ($works as $work): ?>
                    <a href="batafsil.html" class="cards-b">
                        <div class="top">
                            <img src="<?= $work->getUploadUrl('image') ?>" alt="img">
                        </div>
                        <p class="txt-23">
                            <?= $work->title ?>
                        </p>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>