<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            input{
                display: block;
            }
            span{
                color: red;
            }
            h2{
                color: green;
            }
        </style>
    </head>
    <body>
        <?php
        require_once("adminFunction.php");
        require_once("validation.php");
        session_start();
        if($_SESSION['username'] == NULL){
            header("location:index.php");
        }
        $error = array("", "", "", "", "", "", "", "", "");
        $p = new Product();
        $p = Product::selectProduct($_SESSION['productid']);
        if(!empty($_POST['upd'])){
            if(isset($_FILES['image'])){
                $p->productname = $_POST['prname'];
                if(checkPositiveNumber($_POST['price'])){
                    $p->price = $_POST['price'];
                }else $error[0] = "Price must be positive number";
                $p->gender = $_POST['gender'];
                if(checkBrandId($_POST['brand']) != NULL){
                    $p->brandid = checkBrandId($_POST['brand']);
                }else $error[4] = "Brand is invalid";
                if(checkTypeID($_POST['typeid']) && checkPositiveNumber($_POST['typeid'])){
                    $p->typeid = $_POST['typeid'];
                }else $error[2] = "ID is invalid";
                if(checkTypeImage($_FILES['image']['name'])){
                    $p->image = "imageshop/".$_FILES['image']['name'];
                }else $error[3] = "Please choose jpg, png or jpeg file!";
                $p->description = $_POST['des'];
                if($error[0] == "" && $error[2] == "" && $error[3] == "" && $error[4] == ""){
                    $p->updateProduct();
                    if(!checkImagePath($p->productid, $p->image)){
                        if(!checkExistedImage($p->image)){
                            move_uploaded_file($_FILES['image']['tmp_name'], $p->image);
                        }
                        $i = new Image();
                        $i->productid = $p->productid;
                        $i->imagetitle = $_POST['prname'];
                        $i->path = $p->image;
                        $i->addImage();
                    }
                    echo "<h2>Update sucessfully!</h2>";
                }
            }
        }
        ?>
        <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?> enctype="multipart/form-data">
            Product Name:<input type="text" name="prname" value="<?php echo $p->productname;?>">
            Price: <input type="number" name="price" value=<?php echo $p->price;?>>
            <span><?php echo $error[0]?></span>
            <br/>Gender: <select name="gender">
                <option value="Nam">Male</option>
                <option value="Nữ">Female</option>
                <option value="Both">Both</option>
            </select><br>
            Brand: <input type="text" name="brand" value=<?php echo checkBrandName($p->brandid);?>>
            <span><?php echo $error[4]?></span>
            <br/>Type: <input type="number" name="typeid" value=<?php echo $p->typeid;?>>
            <span><?php echo $error[2]?></span>
            <br/>Image: <input type="file" name="image">
            <span><?php echo $error[3]?></span>
            <br/>Description: <input type="text" name="des" value=<?php echo $p->description;?>>
            <br/>Current Image: <img src="<?php echo $p->image; ?>" height="100"/>
            <input type="submit" name="upd" value="Update">
        </form>
        <a href="product.php">Back to menu</a>
    </body>
</html>

