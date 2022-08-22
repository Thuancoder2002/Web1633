<?php
session_start();
(!isset($_SESSION['cart'])) ? $_SESSION['cart'] = [] : $_SESSION['cart'];
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
 </head>
    <title>Cart </title>
  

    <!-- <header> -->

   </head>
   <body>
    <nav>
        <div class="menu">
        <h2 class="test"><i>IFAN STRORE</i></h2>
                          <a href="http://localhost/demoon/Main/home.php" class="links">Home Page</a>
                          <a href="http://localhost/demoon/Main/login.php" class="links">Login</a>
                          <a href="https://www.facebook.com/dangducthuan.ddt/" class="links">Contact</a>
                          <a href="http://localhost/demoon/demo/m/">Products</a>  
                          <a href="http://localhost/demoon/Main/home.php" class="links">Cart</a> 
        </div>
    </nav>
<!-- <Hiển Thị Sản phẩm lấy từ database -->

  <!-- Begin Main -->
  <div class="main container">
  <table class="table table-striped table-hover">
	<thead>
		<tr>
			<th scope="col">NAME</th>
			<th scope="col">IMG</th>
			<th scope="col">QUANTITY</th>
			<th scope="col">PRICE</th>
			<th scope="col"><a href="action_page.php?delete_all" class="btn btn-danger">DELETE CART</a></th>
		</tr>
  </thead>
  <tbody>
      <?php for ($i=0; $i < sizeof($_SESSION['cart']) ; $i++) { ?>
        <?php
        $total += $_SESSION['cart'][$i]['Price'] * $_SESSION['cart'][$i]['quantity'];
        ?>
		<tr>
		  <td><?=$_SESSION['cart'][$i]['ProductName']?></td>
		  <td><img src="<?=$_SESSION['cart'][$i]['Image']?>" alt="" width="50px"></td>
		  <td><?=$_SESSION['cart'][$i]['quantity']?></td>
		  <td><?=$_SESSION['cart'][$i]['Price']?></td>
          <td><a href="action_page.php?id=<?=$i?>" class="btn btn-danger">DELETE</a></td>
	    </tr>
    <?php } ?>
    <tr>
        <td colspan="3">Tổng tiền:</td>
        <td colspan="3"><?=$total?></td>
    </tr>
  </tbody>
	</table>
  </div>

<!-- Footer  Phần cuối trang-->

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify"> Place: Số 2 Phạm Văn Bạch,Quận Cầu Giấy,Thành Phố Hà Nội<br>Phone Number:0357856563. <br>Email:thuanddgch200729@fpt.edu.vn</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="">C</a></li>
              <li><a href="">UI Design</a></li>
              <li><a href="">PHP</a></li>
              <li><a href="">Java</a></li>
              <li><a href="">Android</a></li>
              <li><a href="">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="">About Us</a></li>
              <li><a href="">Contact Us</a></li>
              <li><a href="">Contribute</a></li>
              <li><a href="">Privacy Policy</a></li>
              <li><a href="">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by 
         <a href="https://www.facebook.com/dangducthuan.ddt/">Đặng Đức Thuần</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fas fa-cat"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa-brands fa-twitter"></i></a></li>
             
            </ul>
          </div>
        </div>
      </div>
</footer>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>                                                                      
</body>
</html>