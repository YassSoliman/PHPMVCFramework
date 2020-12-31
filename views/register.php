<?php
/** @var $model \app\models\User */
use app\core\form\Form;

?>
  
<h1>Create an account</h1>
<?php $form = Form::begin('', "post"); ?>
  <div class="row">
    <div class="col">
      <?php echo $form->field($model, 'firstName'); ?>
    </div>
    <div class="col">
      <?php echo $form->field($model, 'lastName'); ?>
    </div>
  </div>
  <?php echo $form->field($model, 'email'); ?>
  <?php echo $form->field($model, 'password')->passwordField(); ?>
  <?php echo $form->field($model, 'confirmPassword')->passwordField(); ?>
  <button type="submit" class="btn btn-primary">Register</button>
<?php Form::end(); ?>
