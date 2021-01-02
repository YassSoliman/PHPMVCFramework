<?php
$this->title = 'Contact';

use yassersoliman\phpmvc\form\Form;
use yassersoliman\phpmvc\form\TextareaField;
?>
  
<h1>Contact</h1>
<?php $form = Form::begin('', 'post'); ?>
<?php echo $form->field($model, 'subject'); ?>
<?php echo $form->field($model, 'email'); ?>
<?php echo new TextareaField($model, 'body'); ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php Form::end(); ?>
