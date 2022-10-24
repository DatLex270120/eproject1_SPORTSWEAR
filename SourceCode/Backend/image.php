<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link type="text/css" rel="stylesheet" href="./style/image.css"/>
    </head>
    <body>
        <?php
        require_once("adminFunction.php");
        require_once("validation.php");
        session_start();
        $error = array("", "", "", "", "", "", "", "", "");
        $top = "";
        $a = "";
        $b = "";
        if($_SESSION['username'] == NULL){
            header("location:index.php");
        }
        if(!empty($_POST['del'])){
            if(!empty($_POST['imageid'])){
                if(checkImageID($_POST['imageid'])){
                    $imageid = $_POST['imageid'];
                    Image::deleteImage($imageid);
                    $top = "1 IMAGE'S DELETED";
                }else $error[0] = "ID is invalid";
            }else $error[1] = "Please fill in the blank!";
        }
        if(!empty($_POST['add'])){
            if(!empty($_POST['prid']) && !empty($_POST['imgtit']) && isset($_FILES['image'])){
                $p = new Image();
                if(checkProductID($_POST['prid']) && checkPositiveNumber($_POST['prid'])){
                    $p->productid = $_POST['prid'];
                }else $error[2] = "ID is invalid";
                $p->imagealt = $_POST['imgalt'];
                $p->imagetitle = $_POST['imgtit'];
                if(checkTypeImage($_FILES['image']['name'])){
                    if($p->productid != NULL){
                        $p->path = "imageshop/".$_FILES['image']['name'];
                    }
                }else $error[3] = "Please choose jpg, png or jpeg file!";
                if($error[2] == "" && $error[3] == "" ){
                    if(!checkImagePath($p->productid, $p->path)){
                        if(!checkExistedImage($p->path)){
                            move_uploaded_file($_FILES['image']['tmp_name'], $p->path);
                        }
                        $p->addImage();
                        $top = "1 IMAGE'S ADDED";
                    }
                    else $top = "IMAGE'S ALREADY IN DATABASE!";
                }
            }else $error[4] = "Please fill in the blank!";
        }
        if(!empty($_POST['upd'])){
            if(!empty($_POST['imgid'])){
                if(checkImageID($_POST['imgid'])){
                    $_SESSION['imageid'] = $_POST['imgid'];
                    header("location:updateimage.php");
                }else $error[5] = "ID is invalid";
            }else $error[6] = "Please fill in the blank!";
        }
        if(!empty($_POST['fbp'])){
            if(!empty($_POST['prid']) && checkProductID($_POST['prid'])){
                $a = Image::fetchByProduct($_POST['prid']);
            }else $error[7] = "ID is invalid!";
        }
        if(!empty($_POST['fbid'])){
            if(!empty($_POST['imgid']) && checkImageID($_POST['imgid'])){
                $b = Image::fetchById($_POST['imgid']);
            }else $error[8] = "ID is invalid!";
        }
        ?>
            <div class="welcome">
                <h1> WELCOME <?php echo $_SESSION['username'];?></h1>
            </div>   
                <h2><?php echo $top; ?></h2>
            <div class="imagetable">
                <h1>Image Table</h1>
            </div>
            <div class="tablecontainer">
            <h2><?php echo Image::fetchAll(); ?></h2>
            </div>

            <div class="formcontainer">
                <h1 style="color:#2e25aa">Delete Form</h1>
                <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
                    <b>Image ID:</b> <input type="text" name="imageid">
                    <br><span><?php echo $error[0]?></span>
                    <span><?php echo $error[1]?></span>
                    <br><input type="submit" name="del" value="Delete">
                </form>
                <hr/>

                <h1 style="color:#2e25aa">Add Form</h1>
                <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?> enctype="multipart/form-data">
                    <b>Image:</b> <input type="file" name="image">
                    <br><span><?php echo $error[3]?></span>
                    <br/>Product Id: <input type="number" name="prid">
                    <span><?php echo $error[2]?></span>
                    <br/><b>Image Title:</b> <input type="text" name="imgtit">
                    <b>Image Alt:</b> <input type="text" name="imgalt">
                    <input type="submit" name="add" value="Add"><br>
                    <span><?php echo $error[4]?></span>
                </form>
                <hr/>

                <h1  style="color:#2e25aa">Update Form</h1>
                <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
                    <b>Image ID:</b><input type="number" name="imgid"><br>
                    <span><?php echo $error[5]?></span>
                    <span><?php echo $error[6]?></span>
                    <br><input type="submit" name="upd" value="Update">
                </form>
                <hr/>
        
                <h1 style="color:#2e25aa">Show Image by product</h1>
                <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
                    <br>Product ID :<br><input type="number" name="prid">
                    <span><?php echo $error[7]?></span><br>
                    <input type="submit" name="fbp" value="Show">
                </form>
                <?php
                    echo $a;
                ?>
                <hr/>

                <h1 style="color:#2e25aa">Show Image by ID</h1>
                <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
                    <b>Image ID :<b><input type="number" name="imgid">
                    <span><?php echo $error[8]?></span>
                    <br><input type="submit" name="fbid" value="Show">
                </form>
                
                <?php
                    echo $b;
                ?>
                <hr/>

                <a href="admin.php">Back to Home page</a>
            </div>   
    </body>
</html>

