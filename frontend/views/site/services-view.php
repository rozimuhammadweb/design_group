<div class="servise ab">
    <div class="my-container">
        <div class="servise-in">
            <div class="top">
            </div>
            <div class="">
                <div class="row d-flex justify-content-between">
                    <?php foreach ($services as $service): ?>
                        <div class="card col-lg-3" style="width:400px">
                            <a href="<?= \yii\helpers\Url::to(['site/services', 'id' => $service->id]) ?>">
                                <img class="card-img-top" src="<?= $service->getThumbUploadUrl('image') ?>" alt="image">
                                <div class="card-body">
                                    <h4 class="card-title"><?= $service->title ?></h4>
                                    <p class="card-text"><?= $service->short_description ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>