<?php

use common\models\WhyUs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var common\models\WhyUsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Nega biz';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card card-primary card-outline">
    <div class="card-body">
        <div class="why-us-index">
            <p>
                <?= Html::a('<i class="fa fa-plus"></i>', ['create'], ['class' => 'btn btn-primary  ']) ?>
            </p>

            <?php Pjax::begin(); ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'title_uz:raw',
                    'short_description_uz:raw',
                    [
                        'attribute' => 'image',
                        'format' => 'raw',
                        'value' => function ($model) {
                            return Html::img($model->getUploadUrl('image'), ['class' => 'img-thumbnail', 'style' => 'width:100px;']);
                        },
                    ],
                    [
                        'attribute' => 'image',
                        'format' => 'raw',
                        'value' => function ($model) {
                            return Html::img($model->getImage(), []);
                        },
                    ],
                    [
                        'attribute' => 'status',
                        'value' => function ($model) {
                            $text = $model->status == 1 ? 'Active' : 'In Active';
                            return "<span class='btn btn-success'>{$text}</span>";
                        },
                        'format' => 'html',
                    ],
                    [
                        'class' => ActionColumn::className(),
                        'template' => '{images} {view} {update} {delete} ',
                        'buttons' => [
                            'images' => function ($url, $model, $key) {
                                $icon = Html::tag('span', '', ['class' => 'fas fa-image']);

                                return Html::a($icon, ['why-us/images', 'id' => $model->id], [
                                    'title' => Yii::t('yii', 'Upload'),
                                ]);
                            },
                        ],
                        'urlCreator' => function ($action, $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
            ]); ?>

            <?php Pjax::end(); ?>
        </div>
    </div>
</div>
