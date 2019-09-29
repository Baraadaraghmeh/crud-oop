<?php 
Class Model {

    private $host = "localhost";
    private $db_name = "oop";
    private $username = "baraa";
    private $password = "Password@123";
    public $conn;
  
    //  database connection
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            echo "connected";
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
  
        return $this->conn;
    }


    public function insert(){
    
    if(isset($_POST['submit'])){
       if(isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price']) ){
            if(!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['price'])){

                $name = $_POST['name'];
                $description = $_POST['description'];
                $price = $_POST['price'];

                $query ="INSERT INTO products (name, description, price) VALUES ('$name','$description','$price')";
                if($sql = $this->conn->query($query)){
                    echo "<script>alert('product created successfully');</script>";
                    echo "<script>window.location.href='index.php';</script>";
                }else{
                    echo "<script>alert('Creation Failed!');</script>"; 
                    echo "<script>window.location.href='index.php';</script>";

                }
                
            }else{
               echo "<script>alert('empty!');</script>"; 
               echo "<script>window.location.href='index.php';</script>";

            }   

       }
    }
    
    }
// fetch data (i stuck here )
    public function fetch(){
        $query=SELECT * FROM products
    }





}


?>