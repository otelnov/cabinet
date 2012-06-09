<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>

<meta charset="utf-8">
<title><?=t('Cabinet — virtual secretay')?>Кабинет - виртуальный секретарь</title>
<meta name="description" content="">
<meta name="author" content="">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700&subset=latin,cyrillic'
		rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="/themes/mantra/skeleton.css">
<link rel="stylesheet" href="/themes/mantra/layout.css">
<link href='/themes/mantra/fonts.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/themes/mantra/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/themes/mantra/jquery.lightbox-0.5.css">

<!--[if lt IE 9]>
	<script src="/themes/mantra/html5.js"></script>
<![endif]-->

<meta property="og:image" content="/themes/cabinet/img/cabinet-logo-72.png" />
<meta property="og:site_name" content="<?=t('Cabinet — virtual secretay')?>" />

<link rel="icon" type="image/png" href="/themes/cabinet/img/favicon.png" />
<link rel="apple-touch-icon" href="/themes/cabinet/img/favicon.png">
<link rel="apple-touch-icon" sizes="72x72" href="/themes/cabinet/img/cabinet-logo-72.png">
<link rel="apple-touch-icon" sizes="114x114" href="/themes/cabinet/img/cabinet-logo-114.png">

</head>

<body>
	<div class="static">
		<div id="header">
			<div class="container">
				<div class="column branding">
					<?=l("<img alt='".t('Cabinet')."' src='/themes/cabinet/img/cabinet-logo-blue-".lang().".png'>", '/')?>
				</div>

				<div class="pull-right">
					<?php $this->widget('application.components.LoginWidget');?>
				</div>
			</div>
		</div>
		<?=$content; ?>
	</div>
		
	<br>
	<br>
	<br>
	
	<footer>
		<div class="container">
			<div class="copyright eight columns">
				<?=t('All Rights Reserved')?>. <?php echo date('Y'); ?> © <?=t('Cabinet')?>.<br>
				<?=t('Author')?> <a target="_blank" href="http://razbakov.com" class="tooltips" rel="tooltip"
						data-original-title="<?=t('developer & web-designer')?>"><?=t('Aleksey Razbakov')?></a>.
			</div>
			<div class="language eight columns">
				<?php echo CHtml::link('<span class="ru">по-русски</span>',array('/',Yii::app()->urlManager->langParam=>'ru'),array(
		        	'class'=>((Yii::app()->language=='ru') ? 'action':''),
		        ));?>
		        <?php echo CHtml::link('<span class="en">in english</span>',array('/',Yii::app()->urlManager->langParam=>'en'),array(
		        	'class'=>((Yii::app()->language=='en') ? 'action':''),
		        ));?>
		    </div>
		</div>
	</footer>

	<script type="text/javascript" src="/themes/mantra/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="/themes/mantra/bootstrap.min.js"></script>
	<script type="text/javascript" src="/themes/mantra/jquery.lightbox.js"></script>
	<script type="text/javascript" src="/themes/mantra/script.js"></script>

</body>
</html>