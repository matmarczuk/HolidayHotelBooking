<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset = "utf-8"/>
	<title>Baza hoteli</title>
	<link rel = "stylesheet" href = "styles.css">
</head>
<body>


 
<h1 align = "center">Wyszukiwarka hoteli</h1>

<div class="transbox"> 
	<form class = "searching" action = "search.php" method = "post">

		Miejsce:
		<input class = "place" type="text" placeholder="np. Gdańsk" name = "place"/>
		<br /> <br />
                Liczba osób:
                <select name="pers_num" size="1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                     Standard pokoju:
                <select name="room_standard" size="1" >
                    <option>Ekonomiczny</option>
                    <option>Rodzinny</option>
                    <option>Apartament</option>
                </select>
		<br /> <br />

		
	Data przyjazdu:
  	<input type="date" name="arr_date">
	<pre></pre>
	Data wyjazdu: 
	<input type="date" name="dep_date">
		<br /> <br />
		
	<label><input type="checkbox">SPA</label>
<br /> <br />	
		<input class = "szukaj" type = "submit" value = "SZUKAJ"/>
	</div>
		</form>

	<?php



	?>

</body>
</html>