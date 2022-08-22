<?php
require_once "./action_admin.php";
$sectors = select_sectors();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>ADD PRODUCT</title>
</head>
<body>
	<?php require_once "./header.php"?>
	<form action="action_admin.php" method="post" class="container" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NAME</label>
            <input type="text" class="form-control" placeholder="Điền tên sản phẩm" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">IMAGE</label>
            <input type="file" class="form-control" name="img">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">PRICE</label>
            <input type="number" class="form-control" placeholder="Điền giá sản phẩm" name="price">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">PRICE</label>
            <select name="catid" class="form-control">
                <option value="" selected disabled>Loại hàng</option>
                <?php foreach($sectors as $sector){ ?>
                    <option value="<?=$sector['CatId']?>"><?=$sector['CatName']?></option>
                <?php } ?>
            </select>
        </div>
        <button class="btn btn-primary col-12" name="add">ADD</button>
        <?php if (isset( $_SESSION['error_check'])){ ?>
		<h4 class="text-center text-danger"><?=  $_SESSION['error_check'];unset( $_SESSION['error_check'] )?></h4>
	    <?php } ?>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>