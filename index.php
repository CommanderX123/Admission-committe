<?php
	session_start();
 ?>
<!DOCTYPE html>
<html lang="ua">
<head>
	<title>Web site of the admissions committee</title>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script  src="./scripts/script.js"></script>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300|Roboto:300" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="./styles/style.css">
<link rel="icon" href="./images/mit_logo.png">
</head>
<body>
<!--<span class="bar"></span>-->	 

<!--<header class="navbar navbar-static-top navbar-default empty-hero"></header>-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <!--<a class="navbar-brand" href="#">Logo</a>-->

  <!-- Links -->
  <ul class="navbar-nav nav nav-pills item-list">
    <li class="nav-item">
      <a class="nav-link " href="#abitur">Абітурієнту</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#vstupn">Вступнику</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#stud">Студенту</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#info">Корисна інформація</a>
    </li>
  
    <li class="nav-item">
      <a class="nav-link" href="#dovidka">Довідник</a>
    </li>
     <a class="navbar-brand mx-auto" href="#"><img id="brand" src="./images/mit_logo.png" alt="logo" ></a>
   <li class="nav-item">
      <a class="nav-link" href="#news_topic">Новини</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#osvita">Освіта</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#about">Про Університет</a>
    </li>
    <li class="nav-item nav-item dropdown">
      <a class="nav-link  dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Інститути</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="http://sap.mit.edu/">Архітектури</a>
        <a class="dropdown-item" href="https://science.mit.edu/">Астрономії</a>
        <a class="dropdown-item" href="https://engineering.mit.edu/">Аеронавтики</a>
      </div>
    </li></ul>
    <section class="block block-search clearfix">	
    <form class="form-search content-search form-inline my-2 my-lg-0" action="/index.php" accept-charset="utf-8">
    <input title="Enter the terms you wish to search for."class="form-control mr-lg-2" type="text" placeholder="Шукати" name="search_block_form" value size="15" maxlength="128">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Пошук</button>
     </form>
	</section>
</nav>
	<header role="banner" id="page-header"></header>
		<div class="container-fluid">
		<div class="row">
		<div class="col-sm-7 field-items ">
		<section>
			<!--<nav area-label="breadcrumb">-->
			<ul class="breadcrumb">
				  <li ><a href="http://www.mit.edu">MIT</a></li>
    			  <li ><a href="http://lp.edu.ua/rector">Ректор</a></li>
    			  <li id="pc">Приймальна комісія</li>
			</ul>
			<!--</nav>-->
			<hr>
		</section>		
		<h1 class="page-header">Приймальна комісія</h1>
		
		
	
		
			<!--<hr id="r">-->
			
					<div class="field-item ">Голова приймальної комісії – Ректор: д.т.н., проф. Бобало Юрій Ярославович</div>
					
					<div class="field-item ">Заступник голови приймальної комісії – перший проректор:  к.т.н., проф. Павлиш Володимир Андрійович</div>
					
					<div class="field-item">Відповідальний секретар приймальної комісії: к.е.н., доц. Гончар Михайло Федорович</div>
					
					<div class="field-item ">Заступник відповідального секретаря приймальної комісії к.е.н., доц. Грибик Ігор Іванович</div>
					
					<div class="field-item odd">Заступник відповідального секретаря приймальної комісії к.т.н., доц. Палаш Роман Володимирович</div>
			</div>
			<!--<hr id="a">-->			
			
		
    <!-- Dropdown 
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>-->
   
     <div class="col-sm-3 offset-sm-1">
     	<div class="links"><br>
		<ul id="bor">
			<li><span><a href="http://lp.edu.ua/pryymalna-komisiya/pravyla-pryyomu" class="clr">Правила прийому</a></span></li>
			<li><span><a href="http://lp.edu.ua/pryymalna-komisiya/dokumenty-komisiyi" class="clr">Документи комісії</a></span></li>
			<li><span><a href="http://lp.edu.ua/pryymalna-komisiya/licenziya-na-nadannya-osvitnih-poslug" class="clr">Ліцензія на надання освітніх послуг</a></span></li>
			<li><span><a href="http://lp.edu.ua/node/7659" class="clr">Рішення Приймальної комісії</a></span></li>
			<li><span><a href="http://lp.edu.ua/node/4590" class="clr">Розклад роботи Приймальної комісії</a></span></li>
		</ul>
		<ul id="bor">
			<li><span><a href="http://www.lp.edu.ua/node/7112" class="clr">Вступ 2019</a></span></li>
		</ul>
		</div>
	</div>
	</div>
	</div>
	
	<ul>
		<li><span class="bold">Адреса:</span><span id="vul">77 Massachusetts Ave, Cambridge, MA 02139, США</span></li>
		<li><span class="bold">Номер(и) телефону:</span>
			<div class="num" id="number1">(032) 258-25-37</div>
			
		</li>
		<li>
			<!--<span class="bold" id="hid"></span>-->
			<div class="num" id="number" >(032) 258-22-65</div>
		</li>
		<li><span class="bold">E-mail:</span> 
			<a href="http://ftl.if.ua" id="clr1">entrance@lpnu.ua</a>
		</li>
		<li><span class="bold">Веб-сайт:</span> 
			<a href="http://vstup.lp.edu.ua" id="clr1" target="_blank">Вступ у Массачусетський технологічний інститут</a>
		</li>
		<li><span class="bold">Wiki-сторінка:</span> 
			<a href="http://wiki.lp.edu.ua/wiki/%D0%9F%D1%80%D0%B8%D0%B9%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0_%D0%BA%D0%BE%D0%BC%D1%96%D1%81%D1%96%D1%8F" id="clr1" target="_blank">Приймальня комісія</a></li>
	</ul>
<!--stul "Roboto Condensed Light"-->
	<h2 id="news_topic" class="block-title">Новини</h2>
	<div class="container-fluid">
					<div class="row">
					
		<?php 	
		error_reporting(E_ALL);
		
		include "./php/connection.php";
	
		
		$link = mysqli_connect($host,$user,$password,$dbName) or die("Помилка ".mysqli_connect_error($link));
		mysqli_set_charset($link,"utf8");
		$query = "SELECT * FROM news LIMIT 6";
		$result = mysqli_query($link,$query);
		if(mysqli_num_rows($result) > 0){
			$countOfPages = mysqli_num_rows($result);
			while($row = mysqli_fetch_assoc($result)){
				$day = date("j F, Y, g:i a",strtotime($row['date']));
				echo '<div class=col-md-4 id=news>
					<strong>
					'.$row['header'].'</strong><br><span id=day>'
					.$day.'</span><br><img id=news_img src='.$row['image'].'>'.
					$row['content'].'</div>';

			}
		}
	echo "</div>";
	echo "</div>";
	?>
	
	<div class="pager text-center">
		<span id="pager_1">1/12 &nbsp;</span>
		<a id="button" class="btn" href="#">наступна ></a>
	</div>
	<br>
	
	<h2 id="info" class="info text-center">Корисна інформація</h2><br>
	<p class="ptext">Зазначимо, що Massachusetts Institute of Technology (MIT) є одним з найпрестижніших, і найдорожчих технологічним вищим навчальним закладом у всьому світі. Один рік навчання в ньому коштує ні багато ні мало - більше 63 тисяч доларів! А диплом, який отримує випускник вишу, є надзвичайно престижним. З ним беруть практично на будь-яку хорошу і високооплачувану роботу за профілем випускника.</p>

	<p class="ptext">Після того, як адміністрація відкрила доступ до практично всіх своїх ресурсів, студенти, викладачі та науковці почали викачувати ресурси тисячі разів. Профільна широта навчальних матеріалів інституту дійсно вражає. В онлайн-бібліотеці зібрані книги, практичні заняття, наукові статті, навчальні програми, відеокурси, відеолекції і відеоуроки з різних предметів, конспекти кращих лекцій, екзаменаційні питання та відповіді і навіть шпаргалки. Таким чином, в інтернеті опинилася практично вся сучасна історія Массачусетського технологічного інституту</p>

	<p class="ptext">Широта профілів викладених матеріалів також вражає. У колекції зібрані матеріали з математики, інформатики, архітектури, аеронавтики, гендерних досліджень, історії та багатьох інших предметів. При цьому кожен курс включає в себе не тільки інформативні дані, але і безліч доповнень. Майже до кожного курсу додаються відеосупроводи, переклади на інші мови, текстові файли і файли формату pdf. Крім того, в обов’язковому порядку до кожного курсу додаються англійські субтитри і звукові доріжки аудіофайлів. Окремо зазначимо, що деякі, особливо затребувані курси, адаптовані на інші мови. Зокрема, є переклади на найпопулярніші мови світу, в тому числі китайський, кілька європейських, турецьку і навіть українську.</p>
	
	<h2 id="osvita" class="info text-center">Освіта</h2>
		<p class="ptext">Загальновідомий факт, що вища освіта в США – запорука високої якості навчання і гарно оплачуваної роботи у майбутньому. Проживання і навчання в США – це досвід, який буде мати величезне значення у Вашій професійній діяльності і кар’єрному зрості. Всім також відомо, що США – це один з лідерів у галузі високих технологій, тому більшість кращих технічних ВНЗ також знаходяться в цій країні.</p>

		<p class="ptext">
		Массачусетський технологічний інститут (Massachusetts Institute of Technology  (МІТ)) – один з найпрестижніших ВНЗ не тільки в США, але й у цілому світі. Кожного року на навчання тут подають більше 4000 іноземних студентів, які вирішили отримати вищу освіту в Америці. Для них навчання за кордоном, а саме навчання в MIT, відкриває двері багатьох компаній, зацікавлених прийняти на роботу випускника такого відомого ВНЗ.</p>

		<p class="ptext">
		На честь цього університету навіть було названо астероїд головного поясу – 4523 MIT. Про його популярність говорить також і велика кількість згадок у відомих фільмах, серіалах і телешоу: «Сім життів» (головний герой Тім Томас закінчив MIT), «Знамення» (герой Ніколаса Кейджа– викладач MIT), «Мислити як злочинець» (Спенсер Рід, один з найрозумніших героїв серіалу, з відзнакою закінчив MIT), «Теорія Великого Вибуху» (Говард Воловиц, один з героїв серіалу, також закінчив MIT з відзнакою), «Морська поліція» (Тімоті Мак Гі– випускник MIT), і т. д.</p>
	

	<h2 id="about" class="info text-center">Про Університет</h2>
	<p class="ptext"> Массачусетський технологічний інститут (МТІ) (англ. Massachusetts Institute of Technology (MIT)) — один з найкращих у США, та загалом у світі, технічний університет.</p>

	<p class="ptext">
	Заснований Вільямом Бартоном Роджерсом у 1861 році, приватний (у формі акціонерного товариства) університет у місті Кембридж, штату Массачусетс, (США). Головним своїм завданням вважає навчання та дослідження практичного застосування науки та технологій.
	</p>
	<p class="ptext">
	МТІ складається з п'яти шкіл і одного коледжу, має в собі також 34 академічні департаменти та 53 міждисциплінарні лабораторії, центри та програми.
	</p>

	<p class="ptext">
	МТІ відіграв ключову роль у розвитку комп'ютерів, систем інерціальної навігації та медичної техніки.
	</p>

<p class="ptext">
	В рамках відповідного проекту інститут публікує свої курси у відкритому доступі. Це стало прикладом для наслідування і для інших навчальних закладів.
</p>

	<p class="ptext">
	У 2012—2016 роках у світовому рейтингу університетів QS World University Rankings Массачусетський технологічний інститут стабільно займав І місце в світі.</p>

	<h2 id="dovidka" class="info text-center">Довідник</h2>
	<p class="ptext">Команда з 30 інженерів МІТ — одна із багатьох, хто працює над новою технологією перевезення вантажів і людей на швидкості звуку.
	Капсула використовує магніти, щоб рухатися по алюмінієвому треку, мінімізуючи тертя з ним. Проблемою технології є повороти — навіть найменші.
	Вперше капсулу, для високошвидкісної транспортної системи Hyperloop, представили у Бостоні в травні 2016 року.</p>
	<p class="ptext">
		За більш детальною інформацією звертайтесь на wiki-сторінку:
		<a href="http://wikipedia.org">wiki-сторінка</a>.
	</p>
	<!--<div id="test" style="padding:30px 30px 1500px;">This example demonstrates how to create a "scroll to top" button that becomes visible when the user starts to scroll the page.</div>-->
  <button onclick="topFunction()" id="back-to-top" title="Наверх">
	 	<i class="fa fa-angle-double-up"></i>  
	 </button>
	
	<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">
		
	
    <!-- Call to action -->
	<?php
	
	if(empty($_SESSION['login'])){

		echo '
    <div class="col">
    	<hr id="fhr">
    <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
        <a href="./php/auth.php" class="btn btn-danger btn-rounded" id="stud">Ввійти!</a>
      </li>
      <li class="list-inline-item">
        <h5 class="mb-1"> або Реєструватися безплатно</h5>
      </li>
      
      <li class="list-inline-item">
        <a href="./php/reg.php" class="btn btn-danger btn-rounded" id="vstupn">Зареєструватися!</a>
      </li>
    </ul>
    
	</div>';
	}
	else{
		echo '
		<div class="col">
    	<hr id="fhr">
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
		<h5 class="mb-1 ">Hello , '.$_SESSION['login'].'</h5>
		</li>
		<li class="list-inline-item ">
        <a href="./php/exit.php" class="btn btn-danger btn-rounded">Exit</a>
      	</li>

    </ul>
    
	</div>';
		}
	?>
    <!-- Call to action -->
	
    
    <!-- Social buttons -->
    <div class="fcol">
    	<hr id="fhr">
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a title="Facebook" class="btn-floating btn-fb mx-1 waves-effect waves-light" href="http://facebook.com">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a title="Twitter" class="btn-floating btn-tw mx-1 waves-effect waves-light" href="http://twitter.com">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a title="Google+" class="btn-floating btn-gplus mx-1 waves-effect waves-light" href="http://googleplus.com">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a title="Linkedin" class="btn-floating btn-li mx-1 waves-effect waves-light" href="http://linkedin.com">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a title="Github" class="btn-floating btn-github mx-1 waves-effect waves-light" href="http://github.com">
          <i class="fab fa-github "> </i>
        </a>
      </li>

    </ul>
	</div>
    <!-- Social buttons -->

    <!-- Copyright -->
    <div class="copy">
    <div class="footer-copyright text-center py-3">© 2019  Національний університет «MIT»
      <a id ="abitur" href="http://www.mit.edu/"> www.mit.edu</a>
    </div>
	</div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
	 
</body>
</html>
