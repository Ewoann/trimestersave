<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mother */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mothers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mother-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'first_name',
            'other_names',
            'surname',
            'email_address:email',
            'husband_name',
            'husband_phone_number',
            'gestation_age',
            'expected_date_of_delivery',
            'facility',
            'assigned_room_midwife',
            'savings_contributor',
            'financial_institution_partner',
            'community_savings_group_name',
            'savings_target',
            'cash_out_date',
            'vas_preferences',
            'other_preference',
            'special_needs',
            'assigned_staff',
            'created',
            'modified',
        ],
    ]) ?>

</div>
