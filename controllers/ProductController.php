<?php


include_once ROOT. '/models/Product.php';

class ProductController
{
	public function actionIndex()
	{
		$productList = array(); 
		$productList = Products::getProductList();
		require_once ROOT.'/views/products/index.php';
		return true;
	}

	

		public function actionView($id)
			{
		if ($id) {
			$ProductPage = Products::getProductById($id);
		echo '<pre>';
		//die(var_dump($ProductPage));
		print_r($ProductPage);
		echo '<pre>';
		return true;
	}

	}




}