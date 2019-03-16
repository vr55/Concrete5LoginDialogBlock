<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="form-group">
	<?php echo $form->label( 'LoginButtonText', t('Title')); ?>
	<?php echo $form->text( 'DialogTitle', $DialogTitle ); ?>		
</div>

<div class="form-group">
	<?php  echo $form->label('LoginButtonText', t('Login button text')); ?>
	<?php  echo $form->text('LoginButtonText', $LoginButtonText ); ?>
</div>

<div class="form-group">
	<?php  echo $form->label('RegisterButtonText', t('Register button text')); ?>
	<?php  echo $form->text('RegisterButtonText', $RegisterButtonText ); ?>
</div>