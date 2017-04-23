<!DOCTYPE html>
<html>
<head>
	<title>Сайт продажи лодочек</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/template/css/styles.css">
</head>
<body>
<header>
	<div id='navigation'>
		<nav>Главная</nav>
		<nav>Каталог</nav>
		<nav>Контакты</nav>
	</div>
</header>
	
<?php foreach ($productList as $product):?> {
	<div class="product-info">
		<h2 class="title"><?php echo $product['title']; ?></h2>
		<p class='date'><?php echo $product['date']; ?></p>
		<p class='description'><?php echo $product['description']; ?></p>
		<p><a href="products/<?php echo $product['id'];?>" >Ссылка</a></p>
		<bold><?php echo $product['category']; ?></bold>
	</div>

<?php endforeach;?>
<footer>
	
</footer>
</body>
</html>