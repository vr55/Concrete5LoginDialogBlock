<? defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<div class="form-group">
	<? echo $form->label( 'LoginButtonText', t('Title')); ?>
	<? echo $form->text( 'DialogTitle', $DialogTitle ); ?>		
</div>

<div class="form-group">
	<?  echo $form->label('LoginButtonText', t('Login button text')); ?>
	<?  echo $form->text('LoginButtonText', $LoginButtonText ); ?>
</div>

<div class="form-group">
	<?  echo $form->label('RegisterButtonText', t('Register button text')); ?>
	<?  echo $form->text('RegisterButtonText', $RegisterButtonText ); ?>
</div>