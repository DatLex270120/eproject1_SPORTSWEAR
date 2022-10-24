<?php 
require_once("dbInfo.php");
class Product{
    public $productid;
    public $productname;
    public $price;
    public $brandid;
    public $image;
    public $typeid;
    public $gender;
    public $description;
    public $addedDate;
    
    public function addProduct(){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "INSERT INTO product(ProductName, Price, BrandId, Image, TypeId, Gender, Description) VALUES (:productname, :price, :brandid, :image, :typeid, :gender,:description);";
        $stmt = $conn->prepare($sql);
        $stmt->execute(
                array(
                    ":productname" => $this->productname,
                    ":price" => $this->price,
                    ":brandid" => $this->brandid,
                    ":typeid" => $this->typeid,
                    ":gender" => $this->gender,
                    ":image" => $this->image,
                    ":description" => $this->description
                )
        );
        $newId = $conn->lastInsertId();
	$this->productid = $newId;
        $conn = NULL;
        return $newId;
    }
    
    public static function deleteProduct($productid){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "DELETE FROM product WHERE ProductId = :productid;";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(":productid" => $productid));
        $conn = NULL;
    }
    
    public function updateProduct(){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "UPDATE product 
                SET ProductName = :productname,
                    Price = :price,
                    BrandId = :brandid,
                    TypeId = :typeid,
                    Gender = :gender,
                    Image = :image,
                    Description = :description
                WHERE ProductId = :productid;";
        $stmt = $conn->prepare($sql);
        $stmt->execute(
                array(
                    ":productid" => $this->productid,                   
                    ":productname" => $this->productname,
                    ":price" => $this->price,
                    ":brandid" => $this->brandid,
                    ":typeid" => $this->typeid,
                    ":gender" => $this->gender,
                    ":image" => $this->image,
                    ":description" => $this->description
                )
        );
        $conn = NULL;
    }
    
    public static function selectProduct($productid){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "SELECT * FROM product WHERE ProductId = :productid;";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(":productid" => $productid));
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $product = new Product();
                $product->productname = $row['ProductName'];
                $product->productid = $row['ProductId'];
                $product->price = $row['Price'];
                $product->brandid = $row['BrandId'];
                $product->typeid = $row['TypeId'];
                $product->gender = $row['Gender'];
                $product->image = $row['Image'];
                $conn = NULL;
                return $product;
        }
    }

    public static function fetchAll(){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "SELECT * FROM product;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $table = "<table>";
        $table .= "<tr>";
        $table .= "<th>Product ID</th>";
        $table .= "<th>Image</th>";
        $table .= "<th>Price</th>";
        $table .= "<th>Brand ID</th>";
        $table .= "<th>Type ID</th>";
        $table .= "<th>Gender</th>";
        $table .= "<th>Description</th>";
        $table .= "<th>Add Date</th>";
        $table .= "</tr>";
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $table .= "<tr>";
            $table .= "<td>".$row['ProductId']."</td>";
            $table .= "<td><img src=\"".$row['Image']."\" height=\"100\"/></td>";
            $table .= "<td>".$row['Price']."</td>";
            $table .= "<td>".$row['BrandId']."</td>";
            $table .= "<td>".$row['TypeId']."</td>";
            $table .= "<td>".$row['Gender']."</td>";
            $table .= "<td>".$row['Description']."</td>";
            $table .= "<td>".$row['AddedDate']."</td>";
            $table .= "</tr>";
        }
        $table .="</table>";
        $conn = NULL;
        return $table;
    }
    
    public static function fetchById($productid){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "SELECT * FROM product where ProductId = :productid;";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(":productid" => $productid));
        $table = "<table>";
        $table .= "<tr>";
        $table .= "<th>Product ID</th>";
        $table .= "<th>Product Name</th>";
        $table .= "<th>Image</th>";
        $table .= "<th>Price</th>";
        $table .= "<th>Brand ID</th>";
        $table .= "<th>Type ID</th>";
        $table .= "<th>Gender</th>";
        $table .= "<th>Description</th>";
        $table .= "<th>Add Date</th>";
        $table .= "</tr>";
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $table .= "<tr>";
            $table .= "<td>".$row['ProductId']."</td>";
            $table .= "<td><img src=\"".$row['Image']."\" height=\"100\"/></td>";
            $table .= "<td>".$row['Price']."</td>";
            $table .= "<td>".$row['BrandId']."</td>";
            $table .= "<td>".$row['TypeId']."</td>";
            $table .= "<td>".$row['Gender']."</td>";
            $table .= "<td>".$row['Description']."</td>";
            $table .= "<td>".$row['AddedDate']."</td>";
            $table .= "</tr>";
        }
        $table .="</table>";
        $conn = NULL;
        return $table;
    }
    
    public static function fetchByBrand($brandid){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "SELECT * FROM product where BrandId = :brandid;";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(":brandid" => $brandid));
        $table = "<table>";
        $table .= "<tr>";
        $table .= "<th>Product ID</th>";
        $table .= "<th>Product Name</th>";
        $table .= "<th>Image</th>";
        $table .= "<th>Price</th>";
        $table .= "<th>Brand ID</th>";
        $table .= "<th>Type ID</th>";
        $table .= "<th>Gender</th>";
        $table .= "<th>Description</th>";
        $table .= "<th>Add Date</th>";
        $table .= "</tr>";
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $table .= "<tr>";
            $table .= "<td>".$row['ProductId']."</td>";
            $table .= "<td>".$row['ProductName']."</td>";
            $table .= "<td><img src=\"".$row['Image']."\" height=\"100\"/></td>";
            $table .= "<td>".$row['Price']."</td>";
            $table .= "<td>".$row['BrandId']."</td>";
            $table .= "<td>".$row['TypeId']."</td>";
            $table .= "<td>".$row['Gender']."</td>";
            $table .= "<td>".$row['Description']."</td>";
            $table .= "<td>".$row['AddedDate']."</td>";
            $table .= "</tr>";
        }
        $table .="</table>";
        $conn = NULL;
        return $table;
    }
    
}

class Image{
    public $imageid;
    public $productid;
    public $imagename;
    public $path;
    public $imagetitle;
    public $imagealt;
    public function addImage(){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "INSERT INTO image(ProductId, ImageName, ImagePath, ImageAlt, ImageTitle) VALUES (:productid, :imagename, :imagepath, :imagealt, :imagetitle);";
        $stmt = $conn->prepare($sql);
        $stmt->execute(
                array(
                    ":productid" => $this->productid,
                    ":imagename" => $this->imagename,
                    ":imagepath" => $this->path,
                    ":imagetitle" => $this->imagetitle,
                    ":imagealt" => $this->imagealt
                )
        );
        $conn = NULL;
    }
    
    public static function deleteImage($imageid){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "DELETE FROM image WHERE ProductId = :imageid;";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(":imageid" => $imageid));
        $conn = NULL;
    }
    
    public function updateImage(){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "UPDATE image 
                SET ProductId = :productid,
                    ImageName = :imagename,
                    ImagePath = :path,
                    ImageTitle = :imagetitle,
                    ImageAlt = :imagealt
                WHERE ImageId = :imageid;";
        $stmt = $conn->prepare($sql);
        $stmt->execute(
                array(
                    ":productid" => $this->productid,
                    ":imagename" => $this->imagename,
                    ":path" => $this->path,
                    ":imagetitle" => $this->imagetitle,
                    ":imagealt" => $this->imagealt,
                    ":imageid" => $this->imageid
                )
        );
        $conn = NULL;
    }
    
    public static function selectImage($imageid){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "SELECT * FROM image WHERE ImageId = :imageid;";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(":imageid" => $imageid));
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $image = new Image();
                $image->imageid = $row['ImageId'];
                $image->productid = $row['ProductId'];
                $image->imagename = $row['ImageName'];
                $image->path = $row['ImagePath'];
                $image->imagetitle = $row['ImageTitle'];
                $image->imagealt = $row['ImageAlt'];
                $conn = NULL;
                return $image;
        }
    }
    public static function fetchAll(){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "SELECT ImagePath FROM image Where ImageId = 1;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)){

           echo $a = "<img src=\"".$row['ImagePath']."\" height=\"300\"/>";
             

        }

        $conn = NULL;

    }
    
    public static function fetchByProduct($productid){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "SELECT * FROM image where ProductId = :productid;";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(":productid" => $productid));
        $table = "<table>";
        $table .= "<tr>";
        $table .= "<th>Image ID</th>";
        $table .= "<th>Image</th>";
        $table .= "<th>Image Name</th>";
        $table .= "<th>Image Alt</th>";
        $table .= "<th>Image Title</th>";
        $table .= "<th>Product ID</th>";
        $table .= "<th>Image Path</th>";
        $table .= "</tr>";
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $table .= "<tr>";
            $table .= "<td>".$row['ImageId']."</td>";
            $table .= "<td><img src=\"".$row['ImagePath']."\" height=\"100\"/></td>";
            $table .= "<td>".$row['ImageName']."</td>";
            $table .= "<td>".$row['ImageAlt']."</td>";
            $table .= "<td>".$row['ImageTitle']."</td>";
            $table .= "<td>".$row['ProductId']."</td>";
            $table .= "<td>".$row['ImagePath']."</td>";
            $table .= "</tr>";
        }
        $table .="</table>";
        $conn = NULL;
        return $table;
    }
    
    public static function fetchById($imageid){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "SELECT * FROM image where ImageId = :imageid;";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(":imageid" => $imageid));
        $table = "<table>";
        $table .= "<tr>";
        $table .= "<th>Image ID</th>";
        $table .= "<th>Image</th>";
        $table .= "<th>Image Name</th>";
        $table .= "<th>Image Alt</th>";
        $table .= "<th>Image Title</th>";
        $table .= "<th>Product ID</th>";
        $table .= "<th>Image Path</th>";
        $table .= "</tr>";
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $table .= "<tr>";
            $table .= "<td>".$row['ImageId']."</td>";
            $table .= "<td><img src=\"".$row['ImagePath']."\" height=\"100\"/></td>";
            $table .= "<td>".$row['ImageName']."</td>";
            $table .= "<td>".$row['ImageAlt']."</td>";
            $table .= "<td>".$row['ImageTitle']."</td>";
            $table .= "<td>".$row['ProductId']."</td>";
            $table .= "<td>".$row['ImagePath']."</td>";
            $table .= "</tr>";
        }
        $table .="</table>";
        $conn = NULL;
        return $table;
    }
}

class Brand{
    public $brandid;
    public $brandname;
    public function addBrand(){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "INSERT INTO productbrand(BrandName) VALUES (:brandname);";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(":brandname" => $this->brandname));
        $conn = NULL;
    }
    
    public static function deleteBrand($brandid){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "DELETE FROM productbrand WHERE BrandId = :brandid;";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(":brandid" => $brandid));
        $conn = NULL;
    }
    
    public static function fetchAllBrand(){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "SELECT * FROM productbrand";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $table = "<table>";
        $table .= "<tr>";
        $table .= "<th>Brand ID</th>";
        $table .= "<th>Brand Name</th>";
        $table .= "</tr>";
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $table .= "<tr>";
            $table .= "<td>".$row['BrandId']."</td>";
            $table .= "<td>".$row['BrandName']."</td>";
            $table .= "</tr>";
        }
        $table .="</table>";
        $conn = NULL;
        return $table;
    }
    
    public function updateBrand(){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "UPDATE productbrand 
                SET BrandName = :brandname
                WHERE BrandId = :brandid;";
        $stmt = $conn->prepare($sql);
        $stmt->execute(
                array(
                    ":brandname" => $this->brandname,
                    ":brandid" => $this->brandid
                )
        );
        $conn = NULL;
    }
    
    
}

class Type{
    public $typeid;
    public $typename;
    public $parentid;
    public function addType(){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "INSERT INTO type(TypeName, ParentId) VALUES (:typename, :parentid);";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(":typename" => $this->typename, ":parentid" => $this->parentid));
        $conn = NULL;
    }
    
    public static function deleteType($typeid){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "DELETE FROM type WHERE TypeId = :typeid;";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(":typeid" => $typeid));
        $conn = NULL;
    }
    
    public static function fetchAllType(){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "SELECT * FROM type";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $table = "<table>";
        $table .= "<tr>";
        $table .= "<th>Type ID</th>";
        $table .= "<th>Type Name</th>";
        $table .= "<th>Parent ID</th>";
        $table .= "</tr>";
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $table .= "<tr>";
            $table .= "<td>".$row['TypeId']."</td>";
            $table .= "<td>".$row['TypeName']."</td>";
            $table .= "<td>".$row['ParentId']."</td>";
            $table .= "</tr>";
        }
        $table .="</table>";
        $conn = NULL;
        return $table;
    }
    
    public function updateType(){
        $options = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $dsn = "mysql:host=" . DatabaseInfo::getServer() . ";dbname=" . DatabaseInfo::getDatabaseName() . ";charset=utf8";
        $conn = new PDO($dsn, DatabaseInfo::getUserName(), DatabaseInfo::getPassword(), $options);
        $sql = "UPDATE type 
                SET TypeName = :typename,
                    ParentId = :parentid
                WHERE TypeId = :typeid;";
        $stmt = $conn->prepare($sql);
        $stmt->execute(
                array(
                    ":typename" => $this->typename,
                    ":typeid" => $this->typeid,
                    ":parentid" => $this->parentid
                )
        );
        $conn = NULL;
    }
}

?>