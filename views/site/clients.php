<?php
/**
 *  @author Stanislav Koshpaev <hello@koshpaev.com>
 */
/* @var $form yii\bootstrap\ActiveForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Клиенты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
        <div class="row">
          <div class="col-lg-5">
              <?php $form = ActiveForm::begin(['id' => 'clients-form']); ?>
                  <div class="form-group">
                      <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                  </div>
              <?php ActiveForm::end(); ?>
          </div>
      </div>
</div>
