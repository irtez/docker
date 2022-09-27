<html lang="en">
<head>
	<title>Sort page</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<header>
	<a id="logo-ref" href="http://localhost:8080/index.php"
	><img id="logo" src="minisf.png" alt="Логотип"/></a>
	<nav>
	<a href="http://localhost:8080/sortpage.php">Массивы</a>
	<a href="http://localhost:8080/commandspage.php">Информация о сервере</a>
	</nav>
</header>
<body>
<section>
	<form method="post">
		<p>Введите элементы массива через запятую: <input type="text" name="elements" /></p>
</br>
		<p><input type="submit" name="button"/></p>
</form>
<?php
if( isset( $_POST['button'] ) ) {
	require_once ('mergesort.php');
	#echo "<script>alert('alert php')</script>";
	$str1 = htmlspecialchars($_POST['elements']);
	$mas = array_map('intval', explode(',', $str1));
	$str2 = "Неотсортированный массив: ";
	foreach ($mas as $element){
		$str2 = $str2 . $element . ", ";
	}
	$str2 = substr($str2, 0, -2) . "</br>" . "Отсортированный массив: ";
	$mergesort = new Sort();
	$sorted_mas=$mergesort->mergeSort($mas);
	foreach ($sorted_mas as $element){
		$str2 = $str2 . $element . ", ";
	}
	echo substr($str2, 0, -2);
}
?>
</section>
</body>
</html>