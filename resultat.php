<?php
if(isset($_GET['subAge'])){
	$age = $_GET['age'];
	$sex = $_GET['sex'];
	if($sex == "mal"){
		$srAge = 65;
	}
	else{
		$srAge = 76;
	}
	$res = $srAge - $age;
}

?>
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
		background-image: url(https://img12.postila.ru/resize?w=660&src=%2Fdata%2F96%2F33%2F6a%2Ff9%2F96336af98af169cdfe871551cec0e9799834cda569f9c09f044a1ffe29eaa0c8.jpg);
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
		color: white;
		font-size: 69px;
	}
	form{
		align-self: center;
	}
	p{
		align-self: center;
		color: black;
	    font-size: 69px;
	    background-color: #9ec9de;
}

</style>
</head>
<body>
	<div class="main">
		<h1>Вам осталось жить:</h1>
		<p>
			<?php
			echo $res . " лет =)";
			?>
		</p>

	</div>
</body>
</html>
