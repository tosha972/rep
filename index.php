<!DOCTYPE html>
<html>
<head>
	<title>Калькулятор</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
</head>
<body>
	<header>
		<div>
			<img src="img.png">
			<span class="numbers">
			8-800-100-5005 <br>
			+7(3452)522-000
			</span>
		</div>
		<nav>
		 	<ul>
				<li><a href="#" class="menuhref">Кредитные карты</a></li>
				<li><a href="#" class="menuhref">Вклады</a></li>
				<li><a href="#" class="menuhref">Дебетовая карта</a></li>
				<li><a href="#" class="menuhref">Страхование</a></li>
				<li><a href="#" class="menuhref">Друзья</a></li>
				<li><a href="#" class="menuhref">Интернет-банк</a></li>
		  	</ul>
		</nav>
	</header>
	<ul class="breadcrumb">
  		<li><a href="#">Главная</a></li>
  		<li><a href="#">Вклады</a></li>
  		<li>Калькулятор</li>
	</ul>
	<div class="main">
		<div class="calc">
			<h1>Калькулятор</h1>
			<form action="#" method="POST" id="form">
				<label for="date" class="date">Дата оформления вклада</label>
				<input type="date" name="date" id="date">
				<br>
				<label for="summ" class="summ">Сумма вклада</label>
				<input type="number" name="summ" id="summ" min="1000" max="3000000" oninput="document.getElementById('rangesumm').value = this.value;">
				<input type="range" min="1000" max="3000000" value="1000" id="rangesumm" oninput="document.getElementById('summ').value = this.value;"> 
				<br>
				<label for="time" class="time">Срок вклада</label>
				<select name="time" id="time">
					<option selected value="12">1 год</option>
					<option value="24">2 года</option>
					<option value="36">3 года</option>
					<option value="48">4 года</option>
					<option value="60">5 лет</option>
				</select>
				<br>
				<label class="add">Пополнение вклада</label>
				<input type="radio" name="radio" id="No" checked value="no" class="inputradio">
				<label for="No" class="radio">Нет</label>
				<input type="radio" name="radio" id="Yes" value="yes" class="inputradio">
				<label for="Yes" class="radio">Да</label>
				<br>
				<label for="summadd" class="summadd">Сумма пополнение вклада</label>
				<input type="number" name="summadd" id="summadd" min="1000" max="3000000" oninput="document.getElementById('rangesummadd').value = this.value;">
				<input type="range" min="1000" max="3000000" value="1000" id="rangesummadd" oninput="document.getElementById('summadd').value = this.value;"> 
				<br>
				<button type="submit" class="button">Рассчитать</button>
				<span id="res"></span>
			</form>
		</div>
	</div>

	<script type="text/javascript">
		$("#form").submit(function (ev) {
			ev.preventDefault();
			$.ajax({
				type: "POST",
				url: "calc.php",
				data: $('#form').serialize(),
				success: function(html){
					$("#res").html(html);
				}
			});
		});
	</script>

	<footer>
		<ul class="foterul">
			<li><a href="#" class="foterhref">Кредитные карты</a></li>
			<li><a href="#" class="foterhref">Вклады</a></li>
			<li><a href="#" class="foterhref">Дебетовая карта</a></li>
			<li><a href="#" class="foterhref">Страхование</a></li>
			<li><a href="#" class="foterhref">Друзья</a></li>
			<li><a href="#" class="foterhref">Интернет-банк</a></li>
	  	</ul>
	</footer>
</body>
</html>