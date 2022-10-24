<?php require_once("adminFunction.php") ?>;
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/grid.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  } 
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>
</head>
<body id="trangchu" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#trangchu">WILLSON</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#trangchu">Trang Chủ</a></li>
        <li><a href="#gioithieu">Giới Thiệu</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sản Phẩm
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#adidas">Adidas</a></li>
            <li><a href="#puma">Puma</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="imageshop/TieuDe.jpg" width="1200" height="700">     
      </div>

      <div class="item">
        <img src="imageshop/chaybo.jpg" width="1200" height="700">      
      </div>
    
      <div class="item">
        <img src="imageshop/boiloi.jpg" width="1200" height="700">      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="gioithieu" class="container text-center">
  <h3>WILSON</h3>
  <p><em>Cảm ơn bạn đã tin tưởng sản phẩm của chúng tôi.</em></p>
  <p><em>Thank you for trusting our products.</em></p>
  <p>Wilson là một trong những thương hiệu cung cấp quần áo thể thao cao cấp tại Hà Nội. Bên cạnh việc cung cấp nhiều mẫu mã quần áo thể thao và phụ kiện thể thao đa dạng thì shop cũng tập cũng vào các dòng quần áo thể thao cao cấp chất lượng cao.
Với hệ thống nhà xưởng được đầu tư bài bản, chúng tôi luôn cố gắng đem đến cho khách hàng sự hài lòng về chất lượng sản phẩm và thời gian may nhanh nhất thị trường.</p>
  <br>
  <div class="row">
    <div class="col-sm-12">
      <a href="#demo" data-toggle="collapse">
        <p class="text-center"><strong>Về chúng tôi</strong></p><br>
      </a>
      <div id="demo" class="collapse">
        <p>Là môt trong những cửa hàng cung cấp đồ thể thao uy tín nhất tại Hà Nội</p>
        <p>Sản phẩm được cung cấp giá cả ưu đãi nhất</p>
        <p>Hoạt động 24/24</p>
      </div>
    </div>
    
  </div>
</div>

<!-- Container (TOUR Section) -->

  <div id="adidas" class="bg-1">
  <div class="container">
    <h3 class="text-center">Sản Phẩm Adidas</h3>
    <p class="text-center">Aó thể thao.<br> Giày thể thao!</p>
    
    <div class="row text-center">
        <div class="col-md-4">
            <?php
                $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
                $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
                $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
            ?>
            <div class="thumbnail">
                <?php 
                    $sql = "SELECT ImagePath FROM image Where ImageId = 4;";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo $a = "<img src=".$row['ImagePath']." style = 'width: 300px; height: 300px' >";
                    }
                ?>  
                <?php 
                    $sql = "SELECT Price FROM product Where ProductId = 1;";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <p>Gía sản phẩm: </p>
                <?php echo $a = $row['Price'],"<br>"; ?>
                <?php
                }
                ?>
                <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
                <button class="btn" data-toggle="modal" data-target="#aothun1">Mô tả</button>
                <?php 
                    $sql = "SELECT ImagePath FROM image Where ImageId = 18;";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo $a = "<img src=".$row['ImagePath']." style = 'width: 300px; height: 300px' >";
                    }
                ?>  
                <?php 
                    $sql = "SELECT Price FROM product Where ProductId = 7;";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <p>Gía sản phẩm: </p>
                <?php echo $a = $row['Price'],"<br>"; ?>
                <?php
                }
                ?>
                <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
                <button class="btn" data-toggle="modal" data-target="#Giay2">Mô tả</button>

            </div>
        </div>
      <div class="col-md-4">
        <div class="thumbnail">
            <?php 
                $sql = "SELECT ImagePath FROM image Where ImageId = 5;";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    echo $a = "<img src=".$row['ImagePath']." style = 'width: 300px; height: 300px' >";
                }
            ?>  
            <?php 
            $sql = "SELECT Price FROM product Where ProductId = 1;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <p>Gía sản phẩm: </p>
                <?php echo $a = $row['Price'],"<br>"; ?>
            <?php
                }
            ?>
            <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
            <button class="btn" data-toggle="modal" data-target="#aothun2">Mô tả</button>
            
            <?php 
                    $sql = "SELECT ImagePath FROM image Where ImageId = 16;";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo $a = "<img src=".$row['ImagePath']." style = 'width: 300px; height: 300px' >";
                    }
                ?>  
                <?php 
                    $sql = "SELECT Price FROM product Where ProductId = 7;";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <p>Gía sản phẩm: </p>
                <?php echo $a = $row['Price'],"<br>"; ?>
                <?php
                }
                ?>
                <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
                <button class="btn" data-toggle="modal" data-target="#Giay1">Mô tả</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
        <?php 
                $sql = "SELECT ImagePath FROM image Where ImageId = 6;";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    echo $a = "<img src=".$row['ImagePath']." style = 'width: 300px; height: 300px' >";
                }
            ?>  
            <?php 
            $sql = "SELECT Price FROM product Where ProductId = 1;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <p>Gía sản phẩm: </p>
                <?php echo $a = $row['Price'],"<br>"; ?>
            <?php
                }
            ?>
            <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
            <button class="btn" data-toggle="modal" data-target="#aothun">Mô tả</button>
            <?php 
                    $sql = "SELECT ImagePath FROM image Where ImageId = 17;";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo $a = "<img src=".$row['ImagePath']." style = 'width: 300px; height: 300px' >";
                    }
                ?>  
                <?php 
                    $sql = "SELECT Price FROM product Where ProductId = 7;";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <p>Gía sản phẩm: </p>
                <?php echo $a = $row['Price'],"<br>"; ?>
                <?php
                }
                ?>
                <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
                <button class="btn" data-toggle="modal" data-target="#Giay">Mô tả</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="sanpham" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span></label>
              <input type="number" class="form-control" id="psw" placeholder="How many?" min=1 >
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="aothun" role="dialog">
     <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4>Aó thun</h4>
        </div>
        <div class="modal-body">
          <?php 
            $sql = "SELECT ImagePath FROM image Where ImageId = 6;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo $a = "<img src=\"".$row['ImagePath']."\" height=\"300\"/>","<br>";
            }
            $sql = "SELECT Price FROM product Where ProductId = 1;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo "<br><br>Size áo: M <br>";
              echo "Dành cho: Nữ <br>";
              echo "Màu: Cam <br>";
              echo "Gía của sản phẩm: ";
              echo $a = $row['Price'],"<br>";
              echo "Thương hiệu sản phẩm: Adidas";
                }
            ?>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="aothun1" role="dialog">
     <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4>Aó thun</h4>
        </div>
        <div class="modal-body">
        <?php 
          $sql = "SELECT ImagePath FROM image Where ImageId = 4;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo $a = "<img src=\"".$row['ImagePath']."\" height=\"300\"/>","<br>";
          }
          $sql = "SELECT Price FROM product Where ProductId = 1;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<br><br>Size áo: M <br>";
            echo "Dành cho: Nam <br>";
            echo "Màu: Trắng <br>";
            echo "Gía của sản phẩm: ";
            echo $a = $row['Price'],"<br>";
            echo "Thương hiệu sản phẩm: Adidas";
          }
          ?>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="aothun2" role="dialog">
     <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4>Aó thun</h4>
        </div>
        <div class="modal-body">
        <?php 
                    $sql = "SELECT ImagePath FROM image Where ImageId = 5;";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo $a = "<img src=\"".$row['ImagePath']."\" height=\"300\"/>","<br>";
                    }
                    $sql = "SELECT Price FROM product Where ProductId = 1;";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo "<br><br>Size áo: M <br>";
                        echo "Dành cho: Nam <br>";
                        echo "Màu: Xanh <br>";
                        echo "Gía của sản phẩm: ";
                        echo $a = $row['Price'],"<br>";
                        echo "Thương hiệu sản phẩm: Adidas";
                }
                ?>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="Giay" role="dialog">
     <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4>Giay</h4>
        </div>
        <div class="modal-body">
        <?php 
                    $sql = "SELECT ImagePath FROM image Where ImageId = 17;";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo $a = "<img src=\"".$row['ImagePath']."\" height=\"300\"/>","<br>";
                    }
                    $sql = "SELECT Price FROM product Where ProductId = 7;";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo "<br><br>Size Giay: 38 <br>";
                        echo "Màu: Trắng<br>";
                        echo "Gía của sản phẩm: ";
                        echo $a = $row['Price'], "<br>";
                        echo "Thương hiệu sản phẩm: Adidas";
                }
                ?>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="Giay2" role="dialog">
     <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4>Giay</h4>
        </div>
        <div class="modal-body">
        <?php 
                    $sql = "SELECT ImagePath FROM image Where ImageId = 18;";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo $a = "<img src=\"".$row['ImagePath']."\" height=\"300\"/>","<br>";
                    }
                    $sql = "SELECT Price FROM product Where ProductId = 7;";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo "<br><br>Size giày: 42 <br>";
                        echo "Màu: Đen <br>";
                        echo "Dành Cho: Nam <br>";
                        echo "Gía của sản phẩm: ";
                        echo $a = $row['Price'],"<br>";
                        echo "Thương hiệu sản phẩm: Adidas";
                }
                ?>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="Giay1" role="dialog">
     <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4>Giay</h4>
        </div>
        <div class="modal-body">
        <?php 
                    $sql = "SELECT ImagePath FROM image Where ImageId = 16;";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo $a = "<img src=\"".$row['ImagePath']."\" height=\"300\"/>","<br>";
                    }
                    $sql = "SELECT Price FROM product Where ProductId = 7;";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo "<br><br>Size giày: 42 <br>";
                        echo "Màu: Đen Trắng <br>";
                        echo "Dành Cho: Nam <br>";
                        echo "Gía của sản phẩm: ";
                        echo $a = $row['Price'],"<br>";
                        echo "Thương hiệu sản phẩm: Adidas";
                }
                ?>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="quansort" role="dialog">
     <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4>Quần Sort</h4>
        </div>
        <div class="modal-body">
        <?php 
          $sql = "SELECT ImagePath FROM image Where ImageId = 27;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo $a = "<img src=".$row['ImagePath']." style = 'width: 300px; height: 300px' >";
          }
          $sql = "SELECT Price FROM product Where ProductId = 2;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo "<br>Quần sort trắng <br>";
              echo "Size: L <br>";
              echo "Dành Cho: Nam <br>";
              echo "Gía của sản phẩm: ";
              echo $a = $row['Price'],"<br>";
          }
        ?>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="bongchuyen" role="dialog">
     <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4>Quần Sort</h4>
        </div>
        <div class="modal-body">
        <?php 
        $sql = "SELECT ImagePath FROM image Where ImageId = 26;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo $a = "<img src=".$row['ImagePath']." style = 'width: 300px; height: 300px' >";
        }
        $sql = "SELECT Price FROM product Where ProductId = 2;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<br>Quần sort màu ki <br>";
            echo "Size: L <br>";
            echo "Dành Cho: Nam <br>";
            echo "Gía của sản phẩm: ";
            echo $a = $row['Price'],"<br>";
        }
    ?>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="quansort1" role="dialog">
     <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4>Bóng Chuyền</h4>
        </div>
        <div class="modal-body">
        <?php 
          $sql = "SELECT ImagePath FROM image Where ImageId = 7;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo $a = "<img src=".$row['ImagePath']." style = 'width: 300px; height: 300px' >";
          }
          $sql = "SELECT Price FROM product Where ProductId = 4;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo "<br>Bóng Chuyền <br>";
              echo "Gía của sản phẩm: ";
              echo $a = $row['Price'],"<br>";
          }
        ?>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="kinhboi" role="dialog">
     <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4>Kính Bơi</h4>
        </div>
        <div class="modal-body">
        <?php 
          $sql = "SELECT ImagePath FROM image Where ImageId = 11;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo $a = "<img src=".$row['ImagePath']." style = 'width: 300px; height: 300px' >";
          }
          $sql = "SELECT Price FROM product Where ProductId = 10;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo "<br>Kính Bơi <br>";
              echo "Gía của sản phẩm: ";
              echo $a = $row['Price'],"<br>";
          }
        ?>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="dongho" role="dialog">
     <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4>  Đồng Hồ</h4>
        </div>
        <div class="modal-body">
        <?php 
          $sql = "SELECT ImagePath FROM image Where ImageId = 13;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo $a = "<img src=".$row['ImagePath']." style = 'width: 300px; height: 300px' >";
          }
          $sql = "SELECT Price FROM product Where ProductId = 12;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo "<br>Đồng Hồ <br>";
              echo "Gía của sản phẩm: ";
              echo $a = $row['Price'],"<br>";
          }
        ?>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="aokhoac" role="dialog">
     <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4>Aó Khoác</h4>
        </div>
        <div class="modal-body">
        <?php 
          $sql = "SELECT ImagePath FROM image Where ImageId = 3;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo $a = "<img src=".$row['ImagePath']." style = 'width: 300px; height: 300px' >";
          }
          $sql = "SELECT Price FROM product Where ProductId = 13;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo "<br>Aó Khoác <br>";
              echo "Size: M<br>";
              echo "Màu: Đen <br>";
              echo "Dành Cho: Nam <br>";
              echo "Gía của sản phẩm: ";
              echo $a = $row['Price'],"<br>";
          }
      ?>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="puma" class="container">
    <h3 class="text-center">PUMA</h3>
    <p class="text-center"><em>quần aó thể thao.</em></p>
    <p class="text-center"><em>Dụng cụ thể thao.</em></p>

  <div class="row text-center">
      <div class="col-md-4">
      <?php 
          $sql = "SELECT ImagePath FROM image Where ImageId = 27;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo $a = "<img src=".$row['ImagePath']." style = 'width: 300px; height: 300px' >";
          }
          $sql = "SELECT Price FROM product Where ProductId = 2;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo "Quần sort trắng <br>";
              echo "Gía của sản phẩm: ";
              echo $a = $row['Price'],"<br>";
          }
        ?>
        <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
        <button class="btn" data-toggle="modal" data-target="#quansort">Mô Tả</button>
        <br><br>
        <?php 
          $sql = "SELECT ImagePath FROM image Where ImageId = 7;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo $a = "<img src=".$row['ImagePath']." style = 'width: 300px; height: 300px' >";
          }
          $sql = "SELECT Price FROM product Where ProductId = 4;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo "Bóng Chuyền <br>";
              echo "Gía của sản phẩm: ";
              echo $a = $row['Price'],"<br>";
          }
        ?>
        <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
        <button class="btn" data-toggle="modal" data-target="#quansort1">Mô Tả</button>
      </div>          
    
    <div class="col-md-4">
    <?php 
        $sql = "SELECT ImagePath FROM image Where ImageId = 26;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo $a = "<img src=".$row['ImagePath']." style = 'width: 300px; height: 300px' >";
        }
        $sql = "SELECT Price FROM product Where ProductId = 2;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "Quần sort màu ki <br>";
            echo "Gía của sản phẩm: ";
            echo $a = $row['Price'],"<br>";
        }
    ?>
    <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
    <button class="btn" data-toggle="modal" data-target="#bongchuyen">Mô Tả</button>
    <br><br>
    <?php 
          $sql = "SELECT ImagePath FROM image Where ImageId = 11;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo $a = "<img src=".$row['ImagePath']." style = 'width: 300px; height: 300px' >";
          }
          $sql = "SELECT Price FROM product Where ProductId = 10;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo "Kính Bơi <br>";
              echo "Gía của sản phẩm: ";
              echo $a = $row['Price'],"<br>";
          }
        ?>
        <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
        <button class="btn" data-toggle="modal" data-target="#kinhboi">Mô Tả</button>
    </div>
    <div class="col-md-4">
    <?php 
        $sql = "SELECT ImagePath FROM image Where ImageId = 3;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo $a = "<img src=".$row['ImagePath']." style = 'width: 300px; height: 300px' >";
        }
        $sql = "SELECT Price FROM product Where ProductId = 13;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "Aó Khoác <br>";
            echo "Gía của sản phẩm: ";
            echo $a = $row['Price'],"<br>";
        }
    ?>
    <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
    <button class="btn" data-toggle="modal" data-target="#aokhoac">Mô Tả</button>
    <br><br>
    <?php 
          $sql = "SELECT ImagePath FROM image Where ImageId = 13;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo $a = "<img src=".$row['ImagePath']." style = 'width: 300px; height: 300px' >";
          }
          $sql = "SELECT Price FROM product Where ProductId = 12;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo "Đồng Hồ <br>";
              echo "Gía của sản phẩm: ";
              echo $a = $row['Price'],"<br>";
          }
        ?>
        <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
        <button class="btn" data-toggle="modal" data-target="#dongho">Mô Tả</button>
    </div>
  </div>
  <br>
  
</div>

<!-- Image of location/map -->

<!-- Footer -->
<footer class="text-center">
<h3 class="text-center">Ghé Thăm Chúng Tôi</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#diachi">Địa chỉ của chúng tôi</a></li>
    <li><a data-toggle="tab" href="#lienhe">Liên hệ</a></li>
    <li><a data-toggle="tab" href="#donggop">Bạn muốn đóng góp ý kiến?</a></li>
  </ul>

  <div class="tab-content">
    <div id="diachi" class="tab-pane fade in active">
      <h2>Ghé thăm của hàng của chúng tôi nhé!</h2>
      <a href="  https://www.google.com/maps/place/79+Nguy%E1%BB%85n+Ch%C3%AD+Thanh,+Th%C3%A0nh+C%C3%B4ng,+Ba+%C4%90%C3%ACnh,
                                            +H%C3%A0+N%E1%BB%99i,+Vietnam/@21.0231355,105.8080516,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ab68a13f6f13:0xe863dd0d1f1b45fd
                                            !8m2!3d21.0231355!4d105.8102403" target="_blank"><i class="fa fa-map-marker" style="font-size:36px;color:red"></i>79 Nguyễn Chí Thanh</a>
    </div>
    <div id="lienhe" class="tab-pane fade">
      <h2>Hotline:</h2>
      <p>1900 2547</p>
    </div>
    <div id="donggop" class="tab-pane fade">
      <h2>Ý kiến của bạn</h2>
      <form action="#">
        <div class="form-group">
          <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
        <input type="submit" value="submit" style="background: black">
      </form>
      

    </div>
  </div><br><br><br>
  
  <a class="up-arrow" href="#trangchu" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
 <p>Lên Đầu</p>
</footer>
<?php 
    $conn = NULL;
?>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#trangchu']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>
</body>
</html>