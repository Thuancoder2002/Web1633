<!-- Trang quản lý sản phẩm cho phép thêm sửa xóa edit sản phẩm -->

<?php require_once "./action_admin.php";
$products = select_all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>ADMIN</title>
</head>
<body>
	<?php require_once "./header.php"?>
	<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">NAME</th>
			<th scope="col">IMG</th>
			<th scope="col">PRICE</th>
			<th scope="col">CATEGORY</th>
			<th scope="col" colspan="2"><a href="them.php" class="btn btn-primary">ADD</a></th>
		</tr>
  </thead>
  <tbody>
	  <?php foreach ($products as $product) { ?>
		  <tr>
		  <th scope="row"><?=$product['ProductId'] ?></th>
		  <td><?=$product['ProductName'] ?></td>
		  <td><img src="<?=$product['Image'] ?>" width="100px" alt=""></td>
		  <td><?=$product['Price'] ?></td>
		  <td><?=$product['CatName'] ?></td>
		  <td><a href="update.php?id_product=<?=$product['ProductId'] ?>" class="btn btn-success">EDIT</a></td>
		  <td><a href="action_admin.php?id=<?=$product['ProductId'] ?>" class="btn btn-danger">DELETE</a></td>
	  </tr>
	  <?php } ?>
  </tbody>
	</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>