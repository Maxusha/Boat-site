<?php require_once ROOT.'/layouts/header.php' ?>
	
<?php foreach ($productList as $product):?> {
	<div class="product-info">
		<h2 class="title"><?php echo $product['title']; ?></h2>
		<p class='date'><?php echo $product['date']; ?></p>
		<p class='description'><?php echo $product['description']; ?></p>
		<p><a href="products/<?php echo $product['id'];?>" >Ссылка</a></p>
		<bold><?php echo $product['category']; ?></bold>
	</div>

<?php endforeach;?>
<?php require_once ROOT.'/layouts/footer.php' ?>
