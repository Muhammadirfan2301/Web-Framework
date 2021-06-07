<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Barang;
use app\models\Jenis;
use app\models\Supplier;


$this->title = 'Entry Jenis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-form">
    <div class="col-md-6">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'id')->textInput()  ?>
    <?= $form->field($model, 'nama_jenis')->textInput()  ?>
    <?= $form->field($model, 'keterangan')->textInput() ?>
    <div class="form-group">
            <div>
                <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
            </div>
    </div>
   <?php ActiveForm::end(); ?>
    </div>
    
</div>
