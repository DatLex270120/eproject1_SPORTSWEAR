<?php
require_once("dbInfo.php");

function checkPositiveNumber($a){
    if(is_numeric($a) && $a >= 0){
        return true;
    }
    else false;
}

function checkTypeImage($a){
    $b = explode(".", $a);
    $file_ext = strtolower(end($b));
    $extension = array("jpeg", "jpg", "png");
    if(in_array($file_ext, $extension) == false){
        return false;
    }
    else{
        return true;
    }
}

function checkTypeID($a){
    $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
    $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
    $sql = "SELECT * FROM type WHERE TypeId = :typeid;";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(":typeid" => $a));
    $count = $stmt->rowCount();
    if($count > 0){
        return true;
    }
    else{
        return false;
    }
}

function checkTypeName($a){
    $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
    $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
    $sql = "SELECT * FROM type WHERE TypeName = :typename;";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(":typename" => $a));
    $count = $stmt->rowCount();
    if($count > 0){
        return true;
    }
    else{
        return false;
    }
}

function checkBrandId($brandname){
    $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
    $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
    $sql = "SELECT * FROM productbrand WHERE BrandName = :brandname;";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(":brandname" => $brandname));
    $count = $stmt->rowCount();
    if($count > 0){
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $product = new Product();
                $product->brandid = $row['BrandId'];
                $conn = NULL;
                return $product->brandid;
        }
    }
    else{
        $conn = NULL;
        return NULL;
    }
}
    
function checkBrandName($brandid){
    $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
    $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
    $sql = "SELECT * FROM productbrand WHERE BrandId = :brandid;";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(":brandid" => $brandid));
    $count = $stmt->rowCount();
    if($count > 0){
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $brand = $row['BrandName'];
                $conn = NULL;
                return $brand;
        }
    }
    else{
        $conn = NULL;
        return NULL;
    }
}

function checkProductID($a){
    $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
    $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
    $sql = "SELECT * FROM product WHERE ProductId = :productid;";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(":productid" => $a));
    $count = $stmt->rowCount();
    if($count > 0){
        return true;
    }
    else{
        return false;
    }
}

function checkImagePath($a, $b){
    $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
    $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
    $sql = "SELECT * FROM image WHERE ProductId = :productid AND ImagePath = :path;";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(":productid" => $a, ":path" => $b));
    $count = $stmt->rowCount();
    if($count > 0){
        return true;
    }
    else{
        return false;
    }
}

function checkExistedImage($a){
    $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
    $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
    $sql = "SELECT * FROM image WHERE ImagePath = :path;";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(":path" => $a));
    $count = $stmt->rowCount();
    if($count > 0){
        return true;
    }
    else{
        return false;
    }
}

function checkImageID($a){
    $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
    $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
    $sql = "SELECT * FROM image WHERE ImageId = :imageid;";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(":imageid" => $a));
    $count = $stmt->rowCount();
    if($count > 0){
        return true;
    }
    else{
        return false;
    }
}
?>
