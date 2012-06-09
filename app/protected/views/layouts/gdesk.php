<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/themes/gdesk/style.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script>
        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        $(function() {
            var $timeline = $('#timeline');

            for (var i = 0; i <= 24; i++) {
                $timeline.append('<div class="period"><span class="hour">' + i + '</span><span class="min">00</span></div>');
            }
        })
    </script>
</head>
<body>
<div id="page">
    <header><h1>Кабинет</h1>
        <nav role="context">
            <ul>
                <li class="business"><a href="#">Бизнес</a></li>
                <li class="work active"><a href="#">Работа</a></li>
                <li class="self-education"><a href="#">Развитие</a></li>
                <li class="family"><a href="#">Семья</a></li>
                <li class="entertainment"><a href="#">Развлечения</a></li>
            </ul>
        </nav>
        <nav role="profile">
			<?= $this->user->email ?> <?=l(t('Logout'), array('/user/logout'))?>        	
        </nav>
    </header>
    <aside>
        <nav>
            <?php $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                    array('label'=>'Мечты', 'url'=>array('/goals/index')),
                    array('label'=>'Проекты', 'url'=>array('/projects/index')),
                    array('label'=>'Дела', 'url'=>array('/plan/index')),
                    array('label'=>'Финансы', 'url'=>array('/finance/index')),
                    array('label'=>'Вещи', 'url'=>array('/things/index')),
                    array('label'=>'Архив', 'url'=>array('/archive/index')),
                    array('label'=>'Воспоминания', 'url'=>array('/history/index')),
                )
            )); ?>
        </nav>

    </aside>
    <section id="content">
        <?php echo $content; ?>
    </section>
</div>

<footer>

	<div class="language">
		<?php echo CHtml::link('<span class="ru">по-русски</span>',array('/',Yii::app()->urlManager->langParam=>'ru'),array(
        	'class'=>((Yii::app()->language=='ru') ? 'action':''),
        ));?>
        <?php echo CHtml::link('<span class="en">in english</span>',array('/',Yii::app()->urlManager->langParam=>'en'),array(
        	'class'=>((Yii::app()->language=='en') ? 'action':''),
        ));?>
    </div>
	<div class="copyright">
		Copyright &copy; <?php echo date('Y'); ?> <?php echo 'Cabinet'; ?>.<br>
		All Rights Reserved.
		Author — <a target="_blank" href="http://razbakov.com">Aleksey Razbakov</a>.
	</div>
</footer>

</body>
</html>