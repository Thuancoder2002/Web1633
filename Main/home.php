<?php
require_once "./action_page.php";
$products = select_all();
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
    <title>IFAN STORE</title>
  

    <!-- <header> -->

   </head>
   <body>
    <nav>
        <div class="menu">
        <h2 class="test"><i>IFAN STORE</i></h2>
                          <a href="http://localhost/demoon/Main/home.php" class="links">Home Page</a>
                          <a href="http://localhost/demoon/Main/login.php" class="links">Login</a>
                          <a href="https://www.facebook.com/dangducthuan.ddt/" class="links">Contact</a>
                          <a href="http://localhost/demoon/Main/dangki.php">Registration</a>   
                          <a href="http://localhost/demoon/Main/cart.php" class="links">Cart</a>
        </div>
    </nav>

    <!-- Ảnh đầu trang slide quảng cáo -->

<header>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="\demoon\demo\img\banner1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://zshop.vn/images/companies/1/khuyen-mai/2022/th%C3%A1ng%203/975x360--Pro-Max-M1-CTO.png?1646293660140" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.fpt.shop/unsafe/fit-in/665x374/filters:quality(100):fill(white)/fptshop.com.vn/Uploads/Originals/2021/4/23/637547840812599624_ipad-pro-129-2021-m1-wi-fi-128gb-thiet-ke.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</header>
<!-- <Hiển Thị Sản phẩm lấy từ database -->

  <div class="row row-cols-1 row-cols-md-4 g-4">
  
   <?php foreach ($products as $product) { ?>
          <div class="col">
             <div class="card">
                  <img class="card-img-top" src="<?=$product['Image']?>" style='height: 250px;'>
                 <div class="card-body">
                      <h5 class="card-title" ><?=$product['ProductName']?></h5>
                      <input type="hidden" name="name" value="<?=$row['prd_name'];?>">
                      <p class="card-text">Price:<?=$product['Price']?> $ </p>
                     
                      <form action="action_page.php" method="post">
                <input type="number" class="form-control" name="quantity" min="1" max="10" value="1">
                <input type="hidden" name="id" value="<?=$product['ProductId']?>">
                <button type="submit" name="addcart" class="btn btn-primary">Add cart</button>
             </form>
                 </div>
             </div>
         </div>
  <?php }?>
 
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