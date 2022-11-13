<?php include "./models/DB.php"; 

class Ikea{
    public $id;
    public $name;
    public $category;
    public $price;
    public $about;

    public function __construct($id = null, $name = null, $category = null, $price = null, $about = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->about = $about;
    }


    public static function all(){
        $ikeas = [];
        $db = new DB();
        $result = $db->conn->query("SELECT * FROM `ikea`");
        
        while($row = $result->fetch_assoc()) {
            $ikeas[] = new Ikea( $row["id"], $row["name"], $row["category"], $row["price"], $row["about"]);
        }
        $db->conn->close();
        return $ikeas;
    }



    public static function create()
    {
       $db = new DB();
       $stmt = $db->conn->prepare("INSERT INTO `ikea`(  `name`, `category`, `price`, `about` ) VALUES (?,?,?,?)");
       $stmt->bind_param("sdsi", $_POST['name'], $_POST['category'], $_POST['price'], $_POST['about']);
       $stmt->execute();

       $stmt->close();
       $db->conn->close();
    }
    

    public static function find($id)
    {
        $ikea = new Ikea();
        $db = new DB();
        $query = "SELECT * FROM `ikea` where `id`=". $id;
        $result = $db->conn->query($query);

        while($row = $result->fetch_assoc()){
            $ikea = new Ikea( $row['id'], $row['name'], $row['category'], $row['price'], $row['about']);
        }
        $db->conn->close();
        return $ikea;
    }

    public function update()
    {       
        // print_r($_POST);die;
        $db = new DB();
        $stmt = $db->conn->prepare("UPDATE `ikea` SET `name`= ? ,`category`= ? ,`price`= ? ,`about`= ? WHERE `id` = ?");
        $stmt->bind_param("ssdsi", $_POST['name'], $_POST['category'], $_POST['price'], $_POST['about'], $_POST['id']);
        $stmt->execute();
 
        $stmt->close();
        $db->conn->close();
    }

    public static function destroy($id)
    {
        $db = new DB();
        $stmt = $db->conn->prepare("DELETE FROM `ikea` WHERE `id` = ?");
        $stmt->bind_param("i", $_POST['id']);
        $stmt->execute();
 
        $stmt->close();
        $db->conn->close(); 
    }


    static function getfilterParams()
    {
        $params = [];
        $db = new DB();
        $query = "SELECT DISTINCT `category` FROM `ikea`";
        $result = $db->conn->query($query);
        
        while($row = $result->fetch_assoc()) {
            $params[] =  $row["category"];
        }
        $db->conn->close();
        return $params;
    }



    public static function search()
    {
        $ikeas = [];
        $db = new DB();
        
        $query = "SELECT * FROM `ikea` ";
        $first = true;
        if($_GET["filter"] != ""){
            $query .=" WHERE `category` = '" . $_GET["filter"] . " ";
            $first = false;
        }

        if($_GET["from"] != ""){
            
            $query .=(($first)? "WHERE" : "AND") ." `price` >= " . $_GET["from"] . " ";
            $first = false;
        }

        if($_GET["to"] != ""){
            
            $query .=(($first)? "WHERE" : "AND") ." `price` <= " . $_GET["to"] . " ";
            $first = false;
        }

       

       switch ($_GET["sort"]) {
        case '1':
        $query .= " ORDER by `price`";
        break;

        case '2':
        $query .= " ORDER by `price` DESC";
        break;

        case '3':
         $query .= " ORDER by `name`";
        break;

        case '4':
        $query .= " ORDER by `name` DESC";
        break;
        }

        // echo $query;
        // die;
        $result = $db->conn->query($query);
        while($row = $result->fetch_assoc()) {
            $ikeas[] = new Ikea( $row["id"], $row["name"], $row["category"], $row["price"], $row["about"]);
        }
        $db->conn->close();
        return $ikeas;
        }

    public static function filter(){
        $ikeas = [];
        $db = new DB();
        $query = "SELECT * FROM `ikea` where `name` like \"%" . $_GET["search"] . "%\"";
        $result = $db->conn->query($query);
        
        while($row = $result->fetch_assoc()) {
            $ikeas[] = new Ikea( $row["id"], $row["name"], $row["category"], $row["price"], $row["about"]);
        }
        $db->conn->close();
        return $ikeas;
    } 
}
    


    
        

?>