<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MotherSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mother-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'other_names') ?>

    <?= $form->field($model, 'surname') ?>

    <?= $form->field($model, 'email_address') ?>

    <?php // echo $form->field($model, 'husband_name') ?>

    <?php // echo $form->field($model, 'husband_phone_number') ?>

    <?php // echo $form->field($model, 'gestation_age') ?>

    <?php // echo $form->field($model, 'expected_date_of_delivery') ?>

    <?php // echo $form->field($model, 'facility') ?>

    <?php // echo $form->field($model, 'assigned_room_midwife') ?>

    <?php // echo $form->field($model, 'savings_contributor') ?>

    <?php // echo $form->field($model, 'financial_institution_partner') ?>

    <?php // echo $form->field($model, 'community_savings_group_name') ?>

    <?php // echo $form->field($model, 'savings_target') ?>

    <?php // echo $form->field($model, 'cash_out_date') ?>

    <?php // echo $form->field($model, 'vas_preferences') ?>

    <?php // echo $form->field($model, 'other_preference') ?>

    <?php // echo $form->field($model, 'special_needs') ?>

    <?php // echo $form->field($model, 'assigned_staff') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'modified') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
