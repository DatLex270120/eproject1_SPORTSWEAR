<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
            <link type="text/css" rel="stylesheet" href="./style/products.css"/>
    </head>
    <body>
        <?php
        require_once("adminFunction.php");
        require_once("validation.php");
        session_start();
        if($_SESSION['username'] == NULL){
            header("location:index.php");
        }
        $error = array("", "", "", "", "", "", "", "", "", "", "");
        $flag = "";
        $top = "";
        $a = "";
        $b = "";
        if(!empty($_POST['del'])){
            if(!empty($_POST['prid'])){
                if(checkProductID($_POST['prid']) && checkPositiveNumber($_POST['prid'])){
                    $PrId = $_POST['prid'];
                    Product::deleteProduct($PrId);
                    $top = "1 PRODUCT'S DELETED";
                }
                else $error[0] = "ID is invalid";
            }
            else $error[1] = "Please fill in the blank!";
        }
        if(!empty($_POST['add'])){
            if(!empty($_POST['prname']) && !empty($_POST['price']) && !empty($_POST['brand']) && !empty($_POST['typeid']) && isset($_FILES['image'])){
                $p = new Product();
                $p->productname = $_POST['prname'];
                if(checkPositiveNumber($_POST['price'])){
                    $p->price = $_POST['price'];
                }else $error[2] = "Price must be positive number";
                if(checkTypeID($_POST['typeid']) && checkPositiveNumber($_POST['typeid'])){
                    $p->typeid = $_POST['typeid'];
                }else $error[3] = "ID is invalid";
                if(checkBrandId($_POST['brand']) != NULL){
                    $p->brandid = checkBrandId($_POST['brand']);
                }else $error[8] = "Brand is invalid";
                $p->gender = $_POST['gender'];
                if(checkTypeImage($_FILES['image']['name'])){
                    $p->image = "imageshop/".$_FILES['image']['name'];
                }else $error[4] = "Please choose jpg, png or jpeg file!";
                $p->description = $_POST['des'];
                if($error[2] == "" && $error[3] == "" && $error[4] == "" && $error[8] == ""){
                    if(!checkExistedImage($p->image)){
                        move_uploaded_file($_FILES['image']['tmp_name'], $p->image);
                    }
                    $i = new Image();
                    $i->productid = $p->addProduct();
                    $i->imagetitle = $_POST['prname'];
                    $i->path = $p->image;
                    $i->addImage();
                    $top = "1 PRODUCT'S ADDED";
                }
            }
            else $error[5] = "Please fill in the blank!";
        }
        if(!empty($_POST['upd'])){
            if(!empty($_POST['prid'])){
                if(checkProductID($_POST['prid']) && checkPositiveNumber($_POST['prid'])){
                    $_SESSION['productid'] = $_POST['prid'];
                    header("location:updateproduct.php");
                }else $error[6] = "ID is invalid";
            }else $error[7] = "Please fill in the blank!";
        }
        if(!empty($_POST['fbb'])){
            if(!empty($_POST['brand']) && checkBrandId($_POST['brand']) != NULL){
                $a = Product::fetchByBrand(checkBrandId($_POST['brand']));
            }else $error[9] = "Brand is invalid!";
        }
        if(!empty($_POST['fbid'])){
            if(!empty($_POST['prid']) && checkProductID($_POST['prid'])){
                $b = Product::fetchById($_POST['prid']);
            }else $error[10] = "ID is invalid!";
        }
        ?>
        <div class="aligncenter">
            <div class="welcome">
                <h1> WELCOME <?php echo $_SESSION['username'];?></h1>
            </div>
            <h2><?php echo $top; ?></h2>
            <div class="tablecontainer">
                <div class="producttable">
                    <h1>Products Table</h1>
                </div>
                <?php echo Product::fetchAll(); ?>
            </div>

            <div class="formcontainer">
                <h1 style="color:#2e25aa">Delete Form</h1>
                <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
                    <b> Product ID:</b> <input type="text" name="prid">
                    <br><span><?php echo $error[0]?></span>
                    <span><?php echo $error[1]?></span><br>
                    <input type="submit" name="del" value="Delete">
                </form>
                <hr/>

                <h1  style="color:#2e25aa">Add Form</h1>
                <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?> enctype="multipart/form-data">
                    <b>Product Name:</b><input type="text" name="prname">
                    <b>Price:</b> <input type="number" name="price"><br>
                    <span><?php echo $error[2]?></span>
                    <br/><b>Gender:</b> <select name="gender">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                <option value="Both">Both</option>
                    </select><br>
                    <b>Brand:</b> <input type="text" name="brand"> <br>
                    <span><?php echo $error[8]?></span>
                        <br/><b>Type:</b> <input type="number" name="typeid"><br>
                    <span><?php echo $error[3]?></span>
                        <br/><b>Image:</b> <input type="file" name="image"><br>
                    <span><?php echo $error[4]?></span>
                        <br/><b>Description:</b> <input type="text" name="des"><br>
                        <input type="submit" name="add" value="Add">
                        <br><span><?php echo $error[5]?></span>
                    </form>
                    <hr/>
    
        
                        <h1  style="color:#2e25aa">Update Form</h1>
                    <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
                        <b>Product ID:</b><input type="number" name="prid"><br>
                        <span><?php echo $error[6]?></span>
                        <span><?php echo $error[7]?></span>
                        <br><input type="submit" name="upd" value="Update">
                    </form>
                        <hr/>
        
                        <h1  style="color:#2e25aa">Show Product by brand</h1>
                    <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
                        <b> Brand :</b><input type="text" name="brand"><br>
                        <span><?php echo $error[9]?></span>
                        <br><input type="submit" name="fbb" value="Show">
                    </form>
                
                    <?php 
                        echo $a;
                    ?>
                        <hr/>
        
                    <h1  style="color:#2e25aa">Show Product by ID</h1>
                    <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
                        <b> Product ID :<b><input type="number" name="prid"><br>
                        <span><?php echo $error[10]?></span>
                        <br> <input type="submit" name="fbid" value="Show">
                    </form>
                
                    <?php 
                        echo $b;
                    ?>

                    <hr/>
                    <a href="admin.php">Back to Home page</a>
            </div> 
    </div>       
    </body>
    
</html>
