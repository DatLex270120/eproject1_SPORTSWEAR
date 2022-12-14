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
        <li><a href="#trangchu">Trang Ch???</a></li>
        <li><a href="#gioithieu">Gi???i Thi???u</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">S???n Ph???m
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
  <p><em>C???m ??n b???n ???? tin t?????ng s???n ph???m c???a ch??ng t??i.</em></p>
  <p><em>Thank you for trusting our products.</em></p>
  <p>Wilson l?? m???t trong nh???ng th????ng hi???u cung c???p qu???n ??o th??? thao cao c???p t???i H?? N???i. B??n c???nh vi???c cung c???p nhi???u m???u m?? qu???n ??o th??? thao v?? ph??? ki???n th??? thao ??a d???ng th?? shop c??ng t???p c??ng v??o c??c d??ng qu???n ??o th??? thao cao c???p ch???t l?????ng cao.
V???i h??? th???ng nh?? x?????ng ???????c ?????u t?? b??i b???n, ch??ng t??i lu??n c??? g???ng ??em ?????n cho kh??ch h??ng s??? h??i l??ng v??? ch???t l?????ng s???n ph???m v?? th???i gian may nhanh nh???t th??? tr?????ng.</p>
  <br>
  <div class="row">
    <div class="col-sm-12">
      <a href="#demo" data-toggle="collapse">
        <p class="text-center"><strong>V??? ch??ng t??i</strong></p><br>
      </a>
      <div id="demo" class="collapse">
        <p>L?? m??t trong nh???ng c???a h??ng cung c???p ????? th??? thao uy t??n nh???t t???i H?? N???i</p>
        <p>S???n ph???m ???????c cung c???p gi?? c??? ??u ????i nh???t</p>
        <p>Ho???t ?????ng 24/24</p>
      </div>
    </div>
    
  </div>
</div>

<!-- Container (TOUR Section) -->

  <div id="adidas" class="bg-1">
  <div class="container">
    <h3 class="text-center">S???n Ph???m Adidas</h3>
    <p class="text-center">A?? th??? thao.<br> Gi??y th??? thao!</p>
    
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
                <p>G??a s???n ph???m: </p>
                <?php echo $a = $row['Price'],"<br>"; ?>
                <?php
                }
                ?>
                <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
                <button class="btn" data-toggle="modal" data-target="#aothun1">M?? t???</button>
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
                <p>G??a s???n ph???m: </p>
                <?php echo $a = $row['Price'],"<br>"; ?>
                <?php
                }
                ?>
                <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
                <button class="btn" data-toggle="modal" data-target="#Giay2">M?? t???</button>

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
                <p>G??a s???n ph???m: </p>
                <?php echo $a = $row['Price'],"<br>"; ?>
            <?php
                }
            ?>
            <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
            <button class="btn" data-toggle="modal" data-target="#aothun2">M?? t???</button>
            
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
                <p>G??a s???n ph???m: </p>
                <?php echo $a = $row['Price'],"<br>"; ?>
                <?php
                }
                ?>
                <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
                <button class="btn" data-toggle="modal" data-target="#Giay1">M?? t???</button>
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
                <p>G??a s???n ph???m: </p>
                <?php echo $a = $row['Price'],"<br>"; ?>
            <?php
                }
            ?>
            <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
            <button class="btn" data-toggle="modal" data-target="#aothun">M?? t???</button>
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
                <p>G??a s???n ph???m: </p>
                <?php echo $a = $row['Price'],"<br>"; ?>
                <?php
                }
                ?>
                <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
                <button class="btn" data-toggle="modal" data-target="#Giay">M?? t???</button>
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
          <button type="button" class="close" data-dismiss="modal">??</button>
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
          <button type="button" class="close" data-dismiss="modal">??</button>
          <h4>A?? thun</h4>
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
              echo "<br><br>Size ??o: M <br>";
              echo "D??nh cho: N??? <br>";
              echo "M??u: Cam <br>";
              echo "G??a c???a s???n ph???m: ";
              echo $a = $row['Price'],"<br>";
              echo "Th????ng hi???u s???n ph???m: Adidas";
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
          <button type="button" class="close" data-dismiss="modal">??</button>
          <h4>A?? thun</h4>
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
            echo "<br><br>Size ??o: M <br>";
            echo "D??nh cho: Nam <br>";
            echo "M??u: Tr???ng <br>";
            echo "G??a c???a s???n ph???m: ";
            echo $a = $row['Price'],"<br>";
            echo "Th????ng hi???u s???n ph???m: Adidas";
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
          <button type="button" class="close" data-dismiss="modal">??</button>
          <h4>A?? thun</h4>
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
                        echo "<br><br>Size ??o: M <br>";
                        echo "D??nh cho: Nam <br>";
                        echo "M??u: Xanh <br>";
                        echo "G??a c???a s???n ph???m: ";
                        echo $a = $row['Price'],"<br>";
                        echo "Th????ng hi???u s???n ph???m: Adidas";
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
          <button type="button" class="close" data-dismiss="modal">??</button>
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
                        echo "M??u: Tr???ng<br>";
                        echo "G??a c???a s???n ph???m: ";
                        echo $a = $row['Price'], "<br>";
                        echo "Th????ng hi???u s???n ph???m: Adidas";
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
          <button type="button" class="close" data-dismiss="modal">??</button>
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
                        echo "<br><br>Size gi??y: 42 <br>";
                        echo "M??u: ??en <br>";
                        echo "D??nh Cho: Nam <br>";
                        echo "G??a c???a s???n ph???m: ";
                        echo $a = $row['Price'],"<br>";
                        echo "Th????ng hi???u s???n ph???m: Adidas";
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
          <button type="button" class="close" data-dismiss="modal">??</button>
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
                        echo "<br><br>Size gi??y: 42 <br>";
                        echo "M??u: ??en Tr???ng <br>";
                        echo "D??nh Cho: Nam <br>";
                        echo "G??a c???a s???n ph???m: ";
                        echo $a = $row['Price'],"<br>";
                        echo "Th????ng hi???u s???n ph???m: Adidas";
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
          <button type="button" class="close" data-dismiss="modal">??</button>
          <h4>Qu???n Sort</h4>
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
              echo "<br>Qu???n sort tr???ng <br>";
              echo "Size: L <br>";
              echo "D??nh Cho: Nam <br>";
              echo "G??a c???a s???n ph???m: ";
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
          <button type="button" class="close" data-dismiss="modal">??</button>
          <h4>Qu???n Sort</h4>
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
            echo "<br>Qu???n sort m??u ki <br>";
            echo "Size: L <br>";
            echo "D??nh Cho: Nam <br>";
            echo "G??a c???a s???n ph???m: ";
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
          <button type="button" class="close" data-dismiss="modal">??</button>
          <h4>B??ng Chuy???n</h4>
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
              echo "<br>B??ng Chuy???n <br>";
              echo "G??a c???a s???n ph???m: ";
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
          <button type="button" class="close" data-dismiss="modal">??</button>
          <h4>K??nh B??i</h4>
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
              echo "<br>K??nh B??i <br>";
              echo "G??a c???a s???n ph???m: ";
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
          <button type="button" class="close" data-dismiss="modal">??</button>
          <h4>  ?????ng H???</h4>
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
              echo "<br>?????ng H??? <br>";
              echo "G??a c???a s???n ph???m: ";
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
          <button type="button" class="close" data-dismiss="modal">??</button>
          <h4>A?? Kho??c</h4>
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
              echo "<br>A?? Kho??c <br>";
              echo "Size: M<br>";
              echo "M??u: ??en <br>";
              echo "D??nh Cho: Nam <br>";
              echo "G??a c???a s???n ph???m: ";
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
    <p class="text-center"><em>qu???n a?? th??? thao.</em></p>
    <p class="text-center"><em>D???ng c??? th??? thao.</em></p>

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
              echo "Qu???n sort tr???ng <br>";
              echo "G??a c???a s???n ph???m: ";
              echo $a = $row['Price'],"<br>";
          }
        ?>
        <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
        <button class="btn" data-toggle="modal" data-target="#quansort">M?? T???</button>
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
              echo "B??ng Chuy???n <br>";
              echo "G??a c???a s???n ph???m: ";
              echo $a = $row['Price'],"<br>";
          }
        ?>
        <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
        <button class="btn" data-toggle="modal" data-target="#quansort1">M?? T???</button>
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
            echo "Qu???n sort m??u ki <br>";
            echo "G??a c???a s???n ph???m: ";
            echo $a = $row['Price'],"<br>";
        }
    ?>
    <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
    <button class="btn" data-toggle="modal" data-target="#bongchuyen">M?? T???</button>
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
              echo "K??nh B??i <br>";
              echo "G??a c???a s???n ph???m: ";
              echo $a = $row['Price'],"<br>";
          }
        ?>
        <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
        <button class="btn" data-toggle="modal" data-target="#kinhboi">M?? T???</button>
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
            echo "A?? Kho??c <br>";
            echo "G??a c???a s???n ph???m: ";
            echo $a = $row['Price'],"<br>";
        }
    ?>
    <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
    <button class="btn" data-toggle="modal" data-target="#aokhoac">M?? T???</button>
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
              echo "?????ng H??? <br>";
              echo "G??a c???a s???n ph???m: ";
              echo $a = $row['Price'],"<br>";
          }
        ?>
        <button class="btn" data-toggle="modal" data-target="#sanpham">Mua</button>
        <button class="btn" data-toggle="modal" data-target="#dongho">M?? T???</button>
    </div>
  </div>
  <br>
  
</div>

<!-- Image of location/map -->

<!-- Footer -->
<footer class="text-center">
<h3 class="text-center">Gh?? Th??m Ch??ng T??i</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#diachi">?????a ch??? c???a ch??ng t??i</a></li>
    <li><a data-toggle="tab" href="#lienhe">Li??n h???</a></li>
    <li><a data-toggle="tab" href="#donggop">B???n mu???n ????ng g??p ?? ki???n?</a></li>
  </ul>

  <div class="tab-content">
    <div id="diachi" class="tab-pane fade in active">
      <h2>Gh?? th??m c???a h??ng c???a ch??ng t??i nh??!</h2>
      <a href="  https://www.google.com/maps/place/79+Nguy%E1%BB%85n+Ch%C3%AD+Thanh,+Th%C3%A0nh+C%C3%B4ng,+Ba+%C4%90%C3%ACnh,
                                            +H%C3%A0+N%E1%BB%99i,+Vietnam/@21.0231355,105.8080516,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ab68a13f6f13:0xe863dd0d1f1b45fd
                                            !8m2!3d21.0231355!4d105.8102403" target="_blank"><i class="fa fa-map-marker" style="font-size:36px;color:red"></i>79 Nguy???n Ch?? Thanh</a>
    </div>
    <div id="lienhe" class="tab-pane fade">
      <h2>Hotline:</h2>
      <p>1900 2547</p>
    </div>
    <div id="donggop" class="tab-pane fade">
      <h2>?? ki???n c???a b???n</h2>
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
 <p>L??n ?????u</p>
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