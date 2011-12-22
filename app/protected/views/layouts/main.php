<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
<!--    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700&subset=latin,cyrillic'-->
<!--          rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css"/>
<!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
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
        <nav>
            <ul>
                <li class="business"><a href="#">Бизнес</a></li>
                <li class="work active"><a href="#">Работа</a></li>
                <li class="self-education"><a href="#">Развитие</a></li>
                <li class="family"><a href="#">Семья</a></li>
                <li class="entertainment"><a href="#">Развлечения</a></li>
            </ul>
        </nav>
    </header>
    <aside>
        <nav>
            <?php $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                    array('label'=>'Воспоминания', 'url'=>array('/history/index')),
                    array('label'=>'Архив', 'url'=>array('/archive/index')),
                    array('label'=>'Дела', 'url'=>array('/plan/index')),
                    array('label'=>'Финансы', 'url'=>array('/finance/index')),
                    array('label'=>'Вещи', 'url'=>array('/things/index')),
                    array('label'=>'Мечты', 'url'=>array('/goals/index'))
                )
            )); ?>
        </nav>

    </aside>
    <section id="content">
        <?php echo $content; ?>
    </section>
</div>

<footer>

</footer>
</body>
</html>