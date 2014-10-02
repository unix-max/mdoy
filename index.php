<?php
include ("bok_menu.php");  
include ("spisok_sadov.php");  
include ("search.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>mdoy.pro Информационный портал о детских садах Нижнего Новгорода и Нижегородской области</title>
<!-- <base href="http://localhost/mdoy.pro/">
<link rel="canonical" href="http://localhost/mdoy.pro/"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script src="new1.js"></script>
<link rel="icon" href="http://localhost/mdoy.pro/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="http://localhost/mdoy.pro/favicon.ico" type="image/x-icon">
<meta name="keywords" content="mdou, mdoy, mdoy.pro, mdou.pro, МДОУ, МБДОУ, Детский сад, Детский сад Нижний Новгород,
Детсад, Дошкольник, Дошкольное образовательное учьреждение, Детские сады Нижнего Новгорода,
 Нижегородская область, Нижегородская обл., Дзержинск, Кстово, Бор, Богородск, ДОУ,
 Детские образовательные учреждения, Муниципальные учреждения, Для родителей">

 <meta name="description" content="mdou, mdoy, mdoy.pro, mdou.pro, МДОУ, МБДОУ, Детский сад, Детский сад Нижний Новгород,
Детсад, Дошкольник, Дошкольное образовательное учьреждение, Детские сады Нижнего Новгорода,
 Нижегородская область, Нижегородская обл., Дзержинск, Кстово, Бор, Богородск, ДОУ,
 Детские образовательные учреждения, Муниципальные учреждения, Для родителей">

 <meta name="robots" content="index,follow">
 <link rel="stylesheet" href="main.css" type="text/css">
 <meta name='wmail-verification' content='a4db7edf9cc2abd7' />
 <meta name='yandex-verification' content='6269399fa8c596e7' />
</head>
<body>
<div id="mdoy_site">

	<div id="mdoy_header">
        <button class="button_header" id="bt_main" onclick="location.href='index.php'" >Главная</button>
        <button class="button_header" id="bt_o_nas" onclick="location.href='index_ds.php?sad=116&idstr=1670'" >О Нас</button>
        <button class="button_header" id="bt_zakaz">Заказать</button>
        <button class="button_header" id="bt_kontakt">Контакты</button>
        <button class="button_header" id="bt_help">Помощь</button>
		<div  id="search_num">		
				<form name="search" method="post">
				<input type="search" name="query" placeholder="Введите номер или название детского сада" size= "45">
				<button type="submit">Найти</button>
		</div>
		
	</div>
<!--	
	<div id="mdoy_stroka">
	</div>
-->
	<div id="left_side">
	
		<div class="bg">
			<div class="str_verh">
				<div class="btn1">
				<text>География</text>
				</div>
			</div>
			<div class="fon"  id="fon1">
				<div id="blok_mdoy_menu">

				<?php
					echo($lst);	
					?>	
				</div>
			</div>
		</div>
	
<div class="bg">
			<div class="str_verh" >
				<div class="btn2">
				<text class="t_zag">Новости</text>
				</div>
			</div>
			<div class="fon" id="fon2">
				<div id="novosti">
				<a href="index.php">Основные</a>
				</div>
			</div>
		</div>
	
	</div>
	
	<div id="right_side">
<div id="str">
<?php
if (isset($search_result)) {
echo($search_result);
} else {
	

echo ('<div id="newnews">
<ol class="message_list">
	<li>
		<p class="message_head">	
		<cite>Важное!!!</cite>
		<span class ="timestamp" class="message_head"><text style="opacity: 0;">we</text></span>
		</p>
		<div class="message_body">
			<div class="news_zagolovok" align="center"><h2>Уважаемые родители!</h2></div>
			
			<p style="font-weight:bold;"> с 1 марта 2014 года введена система Электронного комплектования детских садов города Нижнего Новгорода.</p>
			<p>Департамент образования города Нижнего Новгорода  доводит до вашего сведения, что постановку детей на очередь в дошкольное учреждение,</p>
			<p>в связи с введением услуги «Электронная очередь», вы можете осуществить самостоятельно на сайте госуслуг <a href="http://www.gosuslugi.ru" target="_blank">http://www.gosuslugi.ru</a></p> 
			<p>либо сразу через Нижегородский портал государственных и муниципальных услуг <a href="http://gu.nnov.ru/filesbyid/1065863.html" target="_blank">http://gu.nnov.ru/filesbyid/1065863.html</a> </p>
			<div  align="center"><img src="new_gos.jpg"  class="news_img"> </div>
			
			
			<p style="font-weight:bold;">Обращаем ваше внимание, что при регистрации у вас будет запрошен электронный адрес (почта).</p>
			
			<p style="color:brown;">Основными задачами нового проекта является создание удобной и комфортной заявки на комплектовании очередников дошкольных учреждений через портал - для родителей или других заинтересованных лиц, получение информации о дошкольном учреждении.</p>
			<p>При отсутствии возможности самостоятельно зарегистрировать ребенка через Интернет,  
				Вы также можете традиционно обратиться в Управление образования администрации своего района.</p>
		
		</div>
	</li>
<br/>

<li>
		<p class="message_head">	
		<cite>Изменения на сайте!</cite>
		<span class ="timestamp" class="message_head"><text style="opacity: 0;">we</text></span>
		</p>
		<div class="message_body">
			<div class="news_zagolovok" align="center"><h2>Уважаемые родители!</h2></div>
			
			<p style="font-weight:bold;"> Когда мы запустили сайт, он был чуть другим, чем сейчас.</p>
			<p>Не было части разделов, он был не таким функциональным.</p>
			<p>Однако мы растём и учимся, а с нами и наш сайт. На этой неделе на сайте произошли изменения, на которые мы просим вас обратить внимание.</p> 
			<p><b>Добавлен удобный поиск по номеру или названию детского сада. </b><br> Чтобы подробнее узнать об интересующем вас саде, просто введите номер или название в строку поиска в шапке сайта и нажмите клавишу "Поиск" или Enter.</p>
			<p>Теперь на главную страницу (там, где раньше был список садов) выводится блок новостей портала</p>
			<p>Также был немного переработан интерфейс и добавлено несколько "живых компонентов"</p>

			<div  align="center"><img src="change.gif"  class="news_img"> </div>
			
			
			<p style="font-weight:bold;">Свои предложения и отзывы о сайте Вы можете присылать по электронной почте на адрес <span style="color:brown">mdoy-serv@mail.ru</span>.</p>
			
			<p>Сайт продолжает развиваться и будет делать это всегда.</p>
			<p style="color:brown;">Спасибо, что вы с нами!</p>
		
		</div>
	</li>
<br/>

<li>
		<p class="message_head">	
		<cite>С днем Семьи!</cite>
		<span class ="timestamp" class="message_head"><text style="opacity: 0;">we</text></span>
		</p>
		<div class="message_body">
			<div class="news_zagolovok" align="center"><h2>Уважаемые родители, от всей души поздравляем вас</h2></div>
			
			<div  align="center"><img src="family_day.jpg"  class="news_img"> </div>
			
			
			<p>
			Есть праздники женские, есть и мужские,<br/>
			Для мам есть денек и порой для отцов,<br/>
			Защита детей, день ребенка — такие,<br/>
			Что всем по отдельности праздник готов.</p>
			<p>
			А мне мой семейный очаг всех дороже,<br/>
			Чтоб мама, и папа, и внуки мои,<br/>
			Чтоб все собрались, старики с молодежью,<br/>
			Отпраздновать вместе один День Семьи!<br/></p>

			<p style="color:brown;">С наилучшими пожеланиями администрация портала mdoy.pro</p>
		
		</div>
	</li>
<br>



</ol>
</div>');
};
?>

</div>
</div>
<a href="#" title="Вернуться к началу"><div class="topbutton">Наверх</div></a>
</body>
</html>