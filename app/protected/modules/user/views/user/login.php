<div id="login-page">
	<?php
	$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
	$this->breadcrumbs=array(
			UserModule::t("Login"),
	);
	?>

	<div class="form">
		<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'login-form',
				'clientOptions' => array('validateOnSubmit'=>true),
				'htmlOptions'=>array('class'=>'well form-search')
		));
		?>
			<fieldset>
				<legend><?php echo UserModule::t("Registered users"); ?></legend>
        	</fieldset>
			<?php echo $form->textField($model,'username', array('placeholder'=>UserModule::t('Login'))); ?>
			<?php echo $form->passwordField($model,'password', array('placeholder'=>UserModule::t('Password'))); ?>
			<br><br>
			<?php echo CHtml::submitButton(UserModule::t('Login'), array('class'=>'btn btn-primary')); ?>

		<?php $this->endWidget(); ?>
	</div>
	<!-- form -->

	<?php
	$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
), $model);
?>
</div>
