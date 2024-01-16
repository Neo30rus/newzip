<?php
/**
 * @var $model
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

var_dump(Yii::$app->request->post());
$gender = [
    'м' => 'мужской',
    'ж' => 'женский',
];
?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'firstName') ->textInput(); ?>
<?= $form->field($model, 'lastName') ->textInput(); ?>
<?= $form->field($model, 'patronymic') ->textInput(); ?>
<?= $form->field($model, 'series') ->input('number'); ?>
<?= $form->field($model, 'number') ->input('number'); ?>
<?= $form->field($model, 'gender') ->radioList($gender); ?>
<?= $form->field($model, 'place') ->textInput(); ?>
<?= $form->field($model, 'date') ->input('date'); ?>
<?= $form->field($model, 'code') ->textInput(); ?>
<?= $form->field($model, 'dateofbirth') ->input('date'); ?>
<?= $form->field($model, 'placeofbirth') ->textInput(); ?>


<?= HTML::submitButton() ?>
<?php ActiveForm::end(); ?>
