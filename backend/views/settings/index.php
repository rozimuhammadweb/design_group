<?php

use common\models\Settings;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var common\models\SettingsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sozlamalar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card card-primary card-outline ">
    <div class="card-body">
        <div class="settings-index">
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
                    'company_info',
                    'address',
                    'working_time',
                    'number',
                    'email:email',
                    [
                        'attribute' => 'logo',
                        'format' => 'raw',
                        'value' => function ($model) {
                            return Html::img($model->getUploadUrl('logo'), ['class' => 'img-thumbnail', 'style' => 'width:200px ']);
                        },
                    ],

                    [
                        'attribute' => 'status',
                        'value' => function ($model) {
                            $text = $model->status == 1 ? 'Active' : 'In Active';
                            return "<span class='btn btn-success d-flex justify-content-center '>{$text}</span>";
                        },
                        'format' => 'html',
                    ],
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Settings $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
            ]); ?>

            <?php Pjax::end(); ?>

        </div>

    </div>
</div>
