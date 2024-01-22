<?php

use common\models\Works;
use yii\helpers\Url;

$works = Works::getWorks();

?>
<!-- //servise -->

<div class="servise ab">
    <div class="my-container">
        <div class="servise-in">
            <div class="top">
                <h1 class="txt-38"><?= Yii::t('app', 'works') ?></h1>
                <a href="<?= Url::to(['site/more-info']) ?>"
                   class="back-btn txt-18"><?= Yii::t('app', 'details') ?></a>
            </div>
            <div class="main-cards">
                <?php foreach ($works as $work): ?>
                    <a href="<?= Url::to(['site/more-info', 'id' => $work->id]) ?>" class="cards-b">
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