<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MotherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mothers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mother-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mother', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'other_names',
            'surname',
            'email_address:email',
            //'husband_name',
            //'husband_phone_number',
            //'gestation_age',
            //'expected_date_of_delivery',
            //'facility',
            //'assigned_room_midwife',
            //'savings_contributor',
            //'financial_institution_partner',
            //'community_savings_group_name',
            //'savings_target',
            //'cash_out_date',
            //'vas_preferences',
            //'other_preference',
            //'special_needs',
            //'assigned_staff',
            //'created',
            //'modified',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
