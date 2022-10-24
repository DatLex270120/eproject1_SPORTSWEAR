<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link type="text/css" rel="stylesheet" href="./style/indexs.css"/>
    </head>
    <body>
        <?php
        require_once("loginInfor.php");
        session_start();
        if(!empty($_POST['lgn'])){
            $u = new Admin();
            $u->username = $_POST['uname'];
            $u->password = sha1($_POST['pass']);
            if($u->checkLogin() == true){
                $_SESSION["username"] = $_POST['uname'];
                header("location:admin.php");
            }
            else{
                $mess = "Invalid username or Incorrect password";
            }
        }
        ?>
        <div class="l1">    

        <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
        <div class="logincontainer">
                   <div class='logintext'>
                        <span id='bl' style='color:#352bc9' >LOGIN</span>
                    </div>
                <label for='uname'><b > User Name:</b>  </label>
                <input type="text" name="uname" placeholder='User name'>
                <label for='psw'>Password: </label>
                <input type="password"  placeholder='password' name="pass">
                <input type="submit" name="lgn" value="Login">
            </div>

            <div class='containerERR'  >
            <strong >
            <br><?php
                if(isset($_POST['lgn'])){
                    echo $mess;
                }
                
                ?></br>
                  </strong>
        </form>

        </div>
    </body>
</html>