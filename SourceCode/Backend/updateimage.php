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
        $error = array("", "", "", "", "", "", "", "", "");
        if($_SESSION['username'] == NULL){
            header("location:index.php");
        }
        $p = new Image();
        $p = Image::selectImage($_SESSION['imageid']);
        $t1 = $p->productid;
        $t2 = $p->path;
        $t4 = $p->imagetitle;
        $t5 = $p->imagealt;
        $pr = Product::selectProduct($p->productid);
        $count = 0;
        if($pr != NULL){
            if($pr->image == $p->path){$count++;}
        }
        if(!empty($_POST['upd']) && isset($_FILES['image'])){
            if(checkProductID($_POST['prid'])){
                $p->productid = $_POST['prid'];
            }else $error[0] = "ID is invalid!";
            $p->imagetitle = $_POST['imgtit'];
            $p->imagealt = $_POST['imgalt'];
            if(checkTypeImage($_FILES['image']['name'])){
                $p->path = "imageshop/".$_FILES['image']['name'];
            }else $error[1] = "Please choose jpg, png or jpeg file!";
            if($error[0] == "" && $error[1] == ""){
                if(!checkImagePath($p->productid, $p->path)){
                    if(!checkExistedImage($p->path)){
                        move_uploaded_file($_FILES['image']['tmp_name'], $p->path);
                    }
                    $p->updateImage();
                    if($count > 0){
                        if($pr->productid == $p->productid){
                            $pr->image = $p->path;
                            $pr->updateProduct();
                        }
                        else{
                            $t = new Image();
                            $t->productid = $t1;
                            $t->path = $t2;
                            $t->imagetitle = $t4;
                            $t->imagealt = $t5;
                            $t->addImage();
                        }
                    }
                    echo "<h2>Update sucessfully!</h2>";
                }
                else{
                    if($p->path == $t2 && $p->productid == $t1){
                        $p->updateImage();
                        echo "<h2>Update sucessfully!</h2>";
                    }
                    else $error[2] = "Your updated object is already existed!";
                } 
            }
        }
        ?>
        <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?> enctype="multipart/form-data">
            Product ID:<input type="number" name="prid" value="<?php echo $p->productid;?>">
            <span><?php echo $error[0]?></span>
            <br/>Image Title: <input type="text" name="imgtit" value=<?php echo $p->imagetitle;?>>
            Image Alt: <input type="text" name="imgalt" value=<?php echo $p->imagealt;?>>
            Image: <input type="file" name="image">
            <span><?php echo $error[1]?></span>
            <br/>Current Image: <img src="<?php echo $p->path; ?>" height="100"/>
            <input type="submit" name="upd" value="Update">
            <span><?php echo $error[2]?></span>
        </form>
        <a href="image.php">Back to menu</a>
    </body>
</html>

