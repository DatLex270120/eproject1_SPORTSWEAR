<?php 
require_once("dbInfo.php");
class Admin{
    public $username;
    public $password;
    
    public function checkLogin(){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "SELECT * FROM admin WHERE UserName = :username AND Password = :password;";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(":username" => $this->username, ":password" => $this->password));
        $count = $stmt->rowCount();
        $conn = NULL;
        if($count > 0){
            return true;
        }
        else
            return false;
    }  
}
?>

