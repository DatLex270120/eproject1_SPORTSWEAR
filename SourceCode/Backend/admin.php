<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link type="text/css" rel="stylesheet" href="./style/admins.css"/>
    </head>
    <body>
        <?php
        session_start();
        if($_SESSION['username'] == NULL){
            header("location:index.php");
        }
        ?>
         <div class="align">
        <div class="welcome">
        <h1> WELCOME <?php echo $_SESSION['username'];?></h1>
        </div>
        </div>
        <ul>
        <div class="menucontainer">
          <li> <a   class="navbar-brand", href="#trangchu">WILLSON</a></li>
        
                     <li><a href="product.php">Product</a></li>
                     <li><a href="image.php">Image</a></li>
                     <li><a href="brand.php">Brand</a></li>
                     <li><a href="type.php">Type</a></li>
         
                  <li>  <a class="logout" href="index.php">Log out</a></li>
                    </div>

        </ul>  
        <div class="imgcontainer">
           <img src="./image/admin3.jpg" width=49%>
        </div>
    </body>
</html>


