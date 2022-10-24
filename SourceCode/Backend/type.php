<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link type="text/css" rel="stylesheet" href="./style/types.css"/>
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
            if(!empty($_POST['typeid'])){
                if(checkTypeID($_POST['typeid'])){
                    $TypeId = $_POST['typeid'];
                    Type::deleteType($TypeId);
                    $top = "1 TYPE'S DELETED";
                }
                else $error[0] = "ID is invalid";
            }
            else $error[1] = "Please fill in the blank!";
        }
        if(!empty($_POST['add'])){
            if(!empty($_POST['typename'])){
                $b = new Type();
                if(!checkTypeName($_POST['typename'])){
                    $b->typename = $_POST['typename'];
                }else $error[7] = "Type is already in database!";
                if($error[7] == ""){
                    $b->addType();
                    $top = "1 TYPE'S ADDED";
                }
            }
            else $error[3] = "Please fill in the blank!";
        }
        if(!empty($_POST['upd'])){
            if(!empty($_POST['typeid']) && !empty($_POST['typename'])){
                $tp = new Type();
                if(checkTypeID($_POST['typeid'])){
                    $tp->typeid = $_POST['typeid'];
                }else $error[4] = "ID is invalid";
                if(!checkTypeName($_POST['typename'])){
                    $tp->typename = $_POST['typename'];
                }else $error[5] = "Type is already in database!";
                if($error[4] == "" && $error[5] == ""){
                    $tp->updateType();
                    $top = "1 TYPE'S UPDATED";
                }
            }else $error[6] = "Please fill in the blank!";
        }
        ?>
        <div class="welcome">
            <h1> WELCOME <?php echo $_SESSION['username'];?></h1>
        </div>

        <h2><?php echo $top; ?></h2>

        <div class="typetable">
                <h1>Type Table</h1>
        </div>
        <div class="tablecontainer">
            <?php echo Type::fetchAllType(); ?>
        </div>    
        <div class="formcontainer">
            <h1 style="color:#2e25aa">Delete Form</h1>
            <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
                <b>Type ID:</b> <input type="text" name="typeid">
                <br><span><?php echo $error[0]?></span>
                <span><?php echo $error[1]?></span>
                <br><input type="submit" name="del" value="Delete">
            </form>
            <hr/>
        
            <h1 style="color:#2e25aa">Add Form</h1>
            <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
                <b>Type Name:</b><input type="text" name="typename">
                <br><span><?php echo $error[7]?></span>
                <br><input type="submit" name="add" value="Add">
                <br><span><?php echo $error[3]?></span>
            </form>
            <hr/>
        
            <h1 style="color:#2e25aa">Update Form</h1>
            <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
                <b>Type ID:</b><input type="number" name="typeid">
                <span><?php echo $error[4]?></span>
                <br/><b>Type Name:</b>
                <input type="text" name="typename">
                <br><span><?php echo $error[5]?></span>
                <br><input type="submit" name="upd" value="Update">
                <br><span><?php echo $error[6]?></span>
            </form>
            <hr/>
        
            <a href="admin.php">Back to Home page</a>
        </div>    
    </body>
</html>


<span></span>