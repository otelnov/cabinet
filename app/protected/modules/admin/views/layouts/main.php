<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Кабинет</title>
<link href="/themes/admin/css/style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js?ver=1.3.2'></script>
<script type="text/javascript" src="/themes/admin/js/jquery.nav.js"></script>
</head>

<body>
	<section id="page">
    	<section id="header">
        </section><!--header-->
        <section id="wrapper">
        	<div class="top">
            	<div class="logo">
                	<a href="index.html" title="logotip">Кабинет</a>
                </div><!--logo-->
            	<nav class="top-nav">
                	<ul>
                        <li><a href="#">Бизнес</a></li>
                        <li><a href="#">Работа</a></li>
                        <li><a href="#">Развитие</a></li>
                        <li><a href="#">Семья</a></li>
                        <li><a href="#">Развлечения</a></li>
                        <li><a href="#">+</a></li>
                    </ul>
                </nav><!--top nav-->
                	<div class="right_nav">
		<img class="setting" src="/themes/admin/img/bg-setting.png" width="22" height="24" alt="setting" />
		
		<div class="drop_box">
			<ul>
				<li>
					<img src="/themes/admin/img/bg-li1.png" width="14" height="24" alt="li1" />
					<a href="#">+2</a>
						<ul class="drop-ul">
							<li>+2</li>
						</ul>
				</li>
				<li>
					<img src="/themes/admin/img/bg-li2.png" width="11" height="24" alt="li2" />
					<a href="#">+1</a>
					 <ul class="drop-ul">
						<li>+1</li>
					</ul>
				</li>
				<li>
					<img src="/themes/admin/img/bg-li3.png" width="22" height="24" alt="li3" />
					<a href="#">+2</a>
						<ul class="drop-ul">
							<li>+2</li>
						</ul>
				</li>
				<li>
					<img src="/themes/admin/img/bg-li4.png" width="25" height="24" alt="li4" />
					<a href="#">+25</a>
						<ul class="drop-ul">
							<li>+25</li>
						</ul>
				</li>
			</ul>
		</div>
		
		<div class="search_menu">
				<a href="#"><img src="/themes/admin/img/bg-arrow.png" width="8" height="15" alt="arrow" /></a>	
				<form class="search" method="post" action="#">
						<input type="text" name="q" placeholder="Новая заметка / Быстрый запус / Поиск" autocomplete="off">
					<ul class="results">
						
						
						
					</ul>
				</form>
		</div></div>
            </div><!--top-->
            <div class="left-sitebar">
            	<nav class="sitebar">
                	<ul id="example-one" class="group">
                    	<li><a href="/admin/index/">Страницы</a></li>
                        <li><a href="#">Сообщества</a></li>
                        <li><a href="#">Проекты</a></li>
                        <li><a href="#">Задачи</a></li>
                        <li><a href="#">Ресурсы</a></li>
                        <li><a href="#">Архив</a></li>
                        <li id="move-line"></li>
                    </ul>
                </nav><!--sitebar-->
            </div><!--left sitebar-->
            <div class="content">
				<div class="box1">
					<?php echo $content; ?>
				</div>
            </div><!--content-->
        </section><!--wrapper-->
        <section id="footer">
        </section><!--footer-->
    </section><!--page-->
    <div id="pro">
    </div>
</body>
</html>
 