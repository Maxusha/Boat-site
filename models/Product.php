<?php



class Products {

	public static function getProductById ($id)
	{
		$id = intval($id);

		if ($id) {
			$db = Db::getConnection();
			$result = $db->query('SELECT * from products WHERE id='.$id);
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$productItem = $result->fetch();
			return $productItem;
		}
		else echo "error";

	}
	public static function getProductList()
	{
		$db = Db::getConnection();
		$productList = array();
		$result = $db->query('SELECT id, title, date, description, category '
			. 'FROM products ORDER by date DESC');

		$i = 0;
		while ($row = $result->fetch()) {
			$productList[$i]['id'] = $row['id'];
			$productList[$i]['title'] = $row['title'];
			$productList[$i]['date'] = $row['date'];
			$productList[$i]['description'] = $row['description'];
			$productList[$i]['category'] = $row['category'];
			$i++;
		}
		return $productList;
	}
}