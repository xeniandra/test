<!DOCTYPE html>
<html>
<head>
	<title>Тест</title>
	<meta charset="utf-8">
<style type="text/css">
	html, body{
		width: 100%;
		height: 100%;
		display: flex;
		justify-content: center;
	}
	div.main{
		background-image: url(https://exclusiveflowers.ru/camomiles/camomile_12.jpg);
		background-size: cover;
		background-repeat: no-repeat;
		height: 100%;
		width: 70%;
		display: flex;
		flex-direction: column;
	}
	h1{
		align-self: center;
		margin-top: 20%;
	}
	form{
		align-self: center;
	}
</style>
</head>
<body>
	<div class="main">
		<h1>Сколько вам лет? =)</h1>
		<form action="resultat.php" method="GET">
			<input type="text" name="age" required="">

				<p><label class="stat" for="status">Пол:</label>
					<select name="sex" class="sel">
						<option value="fem">Женский</option>
						<option value="mal">Мужской</option>
					</select>
				</p>			
			<input type="submit" name="subAge">
		</form>
	</div>
</body>
</html>