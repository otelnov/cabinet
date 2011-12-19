<?php
$fileName = '';

if(isset($_GET['p'])) {
    $fileName = $_GET['p'].'.php';
    if(!file_exists($fileName)) {
        $fileName = '404.php';
    }
}

if(!$fileName) {
    $fileName = 'todo.php';
}

ob_start();
include $fileName;
$content = ob_get_clean();

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css"/>
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
            <ul>
                <li class="tomorrow"><a href="#">Воспоминания</a></li>
                <li class="tomorrow"><a href="#">Архив</a></li>
                <li class="today active"><a href="?p=todo">Дела</a></li>
                <li class="tomorrow"><a href="?p=finance">Финансы</a></li>
                <li class="tomorrow"><a href="#">Вещи</a></li>
                <li class="tomorrow"><a href="#">Мечты</a></li>
            </ul>
        </nav>

    </aside>
    <section id="content">
        <?php echo $content ?>
    </section>
</div>

<footer>

</footer>
</body>
</html>