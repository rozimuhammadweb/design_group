<?php

use common\models\About;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var common\models\AboutSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Abouts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card card-primary card-outline ">
    <div class="card-body">
        <div class="about-index">
            <p>
                <?= Html::a('<i class="fa fa-plus"></i>', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?php Pjax::begin(); ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'successful_project',
                    'regular_customer',
                    'quality_service',
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
                            $class = $model->status == 1 ? 'bg-success' : 'bg-danger';
                            return "<p class='btn-info d-flex justify-content-center {$class}'>{$text}</p>";
                        },
                        'format' => 'html', // Set the format to HTML
                    ],
                    //'created_by',
                    //'created_at',
                    //'updated_by',
                    //'updated_at',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, About $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
            ]); ?>

            <?php Pjax::end(); ?>
        </div>
    </div>
</div>
