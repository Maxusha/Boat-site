<?php require_once ROOT.'/layouts/header.php' ?>
<div class="product-info">
		<h2 class="title"><?php echo $ProductPage['title']; ?></h2>
		<p class='date'><?php echo $ProductPage['date']; ?></p>
		<p class='description'><?php echo $ProductPage['description']; ?></p>
		
		<bold><?php echo $ProductPage['category']; ?></bold>
	</div>
<?php require_once ROOT.'/layouts/footer.php' ?>
