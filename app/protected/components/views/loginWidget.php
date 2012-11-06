<div id="header-login">
	<?php  $this->widget('application.components.UloginWidget', array(
	    'params'=>array(
	        'redirect'=>'http://'.$_SERVER['HTTP_HOST'].'/index.php/ulogin/login' 
	    )
	)); ?>
	<div class="form-search">
		<?php $form=$this->beginWidget('CActiveForm', array(
				'action' => url('/user/login'),
				'id'=>'login-form',
				'enableAjaxValidation'=>true,
				'enableClientValidation'=>true,
				'focus'=>array($model,'username'),
				'clientOptions' => array('validateOnSubmit'=>true)
		));
		?>
			<?php echo $form->textField($model,'username', array('placeholder'=>t('Username'))); ?>
			<?php echo $form->passwordField($model,'password', array('placeholder'=>t('Password'))); ?>
			<input type="submit" value="<?=t('Login')?>" class="btn">
		<?php $this->endWidget(); ?>
	</div>

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
