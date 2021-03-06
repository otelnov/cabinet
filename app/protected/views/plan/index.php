<div class="plan" id="work-plan">
    <div id="todo-create">
        <input placeholder="Описание нового дела">
    </div>

    <h3>Выполняется</h3>
    <ul>
        <li style="height:20px;padding:0">
            <span style="position:absolute;background:#eee;width:30px;height:20px;"> </span>
            <span style="position:absolute;border-right:solid 2px #fcc;width:50px;height:30px;margin-top:-5px;"> </span>
            <span style="position: absolute;padding:3px;padding-left:30px">чтение статьи о раскрутке сайтов</span>
        </li>
    </ul>

    <h3>План</h3>
    <ul>
		<?php foreach($todos as $todo): ?>
        <li><?php echo $todo; ?></li>
        <?php endforeach; ?>
    </ul>


    <div id="suspend">
        <div id="history">
            <h3>Отложить</h3>
            <a href="#">завтра</a>
            <a href="#">неделя</a>
            <a href="#">месяц</a>
            <a href="#">потом</a>
        </div>
        <ul>
            <li>check messages</li>
            <li>add 2 crosseling products</li>
            <li>sorting by confirmed</li>
        </ul>
    </div>
</div>
<div id="timeline">
    <div id="now">
        <span class="hour">3</span>
        <span class="min">39</span>
    </div>
</div>
<div class="plan" id="calls-plan">
    <h3>Контроль</h3>
    <ul>
        <li>catalog view redesign</li>
        <li>product view redesign</li>
        <li>logout move to flavs</li>
        <li>remove required telephone field shipping address</li>
    </ul>
    <h3>Связаться</h3>
    <ul>
        <li>catalog view redesign</li>
        <li>product view redesign</li>
        <li>logout move to flavs</li>
        <li>remove required telephone field shipping address</li>
    </ul>
</div>
<div id="team">
    <h3>Входящие</h3>

    <p>Новых писем нет</p>

    <h3>Команда</h3>

    <div class="member">
        <img width="50" height="50" src="http://cs5485.vkontakte.ru/u7609767/e_3874a79b.jpg">
        <h4>Анна Лешко</h4>
        <blockquote>планирую корпоративку</blockquote>
    </div>
    <div class="member">
        <img width="50" height="50" src="http://cs11216.vkontakte.ru/u7087453/e_96bd7b6f.jpg">
        <h4>Дмитрий Осипов</h4>
        <blockquote>компилирую программу</blockquote>
    </div>
    <div id="chat">
        <time>14:00</time>
        <div class="inbox"><abbr>Дмитрий</abbr>: Всем привет!</div>
        <div class="inbox"><abbr>Анна</abbr>: Как отдохнули?</div>
        <div class="inbox"><abbr>Дмитрий</abbr>: Ой, было так классно. Сделали шашлычок, покупались в проруби.
            Одним словом - супер.
        </div>
        <div class="outbox"><abbr>Алексей</abbr>: Домой вернулись?</div>
        <div class="inbox"><abbr>Дима</abbr>: Да, конечно</div>
        <div id="message-create">
            <input placeholder="Написать">
        </div>
    </div>
</div>