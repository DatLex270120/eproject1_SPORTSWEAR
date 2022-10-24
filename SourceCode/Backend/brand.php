<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link type="text/css" rel="stylesheet" href="./style/brand.css"/>
    </head>
    <body>
        <?php
        require_once("adminFunction.php");
        require_once("validation.php");
        session_start();
        if($_SESSION['username'] == NULL){
            header("location:index.php");
        }
        $error = array("", "", "", "", "", "", "", "", "", "");
        $top = "";
        if(!empty($_POST['del'])){
            if(!empty($_POST['brid'])){
                if(checkBrandName($_POST['brid']) != NULL){
                    $BrId = $_POST['brid'];
                    Brand::deleteBrand($BrId);
                    $top = "1 BRAND'S DELETED";
                }
                else $error[0] = "ID is invalid";
            }
            else $error[1] = "Please fill in the blank!";
        }
        if(!empty($_POST['add'])){
            if(!empty($_POST['brname'])){
                $b = new Brand();
                if(checkBrandId($_POST['brname']) == NULL){
                    $b->brandname = $_POST['brname'];
                    $b->addBrand();
                    $top = "1 BRAND'S ADDED";
                }else $error[5] = "Brand is already in database!";
            }
            else $error[2] = "Please fill in the blank!";
        }
        if(!empty($_POST['upd'])){
            if(!empty($_POST['brid']) && !empty($_POST['brname'])){
                $br = new Brand();
                if(checkBrandName($_POST['brid']) != NULL){
                    $br->brandid = $_POST['brid'];
                }else $error[3] = "ID is invalid";
                if(checkBrandId($_POST['brname']) == NULL){
                    $br->brandname = $_POST['brname'];
                }else $error[6] = "Brand is already in database!";
                if($error[3] == "" && $error[6] == ""){
                    $br->updateBrand();
                    $top = "1 BRAND'S UPDATED";
                }
            }else $error[4] = "Please fill in the blank!";
        }
        ?>
        <div class="welcome">
            <h1> WELCOME <?php echo $_SESSION['username'];?></h1>
        </div>   

        <h2><?php echo $top; ?></h2>

        <div class="typetable">
            <h1>Brand Table</h1>
        </div>
        <div class="tablecontainer">
            <?php echo Brand::fetchAllBrand(); ?>
        </div>   
        <div class="formcontainer">
            <h1  style="color:#2e25aa">Delete Form</h1>
            <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
                <b>Brand ID:<b> <input type="text" name="brid">
                <br><span><?php echo $error[0]?></span>
                <span><?php echo $error[1]?></span>
                <br><input type="submit" name="del" value="Delete">
            </form>
            <hr/>
        
            <h1  style="color:#2e25aa">Add Form</h1>
            <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
                <b>Brand Name:</b><input type="text" name="brname">
                <br><span><?php echo $error[5]?></span>
                <br><input type="submit" name="add" value="Add">
                <br><span><?php echo $error[2]?></span>
            </form>
            <hr/>
        
            <h1  style="color:#2e25aa">Update Form</h1>
            <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
                <b>Brand ID:</b><input type="number" name="brid">
                <br><span><?php echo $error[3]?></span>
                <br/><b>Brand Name:</b><input type="text" name="brname">
                <br><span><?php echo $error[6]?></span>
                <input type="submit" name="upd" value="Update">
                <br><span><?php echo $error[4]?></span>
            </form>
            <hr/>
        
            <a href="admin.php">Back to Home page</a>
        </div>
    </body>
</html>

