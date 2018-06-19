<?php 

require_once("config.php");

class Database{
 
public $connection;    
//WE ARE CREATING A CONTRUCT FUNCTION THAT ACTIVATES THE PROPERTIES AUTOMATICALLY 
//The construcl method  will open our connection automatically 
function __construct(){
        $this->open_db_connection();
    }

//this is function we created or also a method for connectiong to the database   
 public function open_db_connection(){
       $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
       
        if($this->connection->connect_errno){
            die("Connection failed" . $this->connection->connect_error);
        }
    }


    
//THIS IS THE CONNECTION QUERY WE WILL BE USING THROUGHT OUT THE FILES    
public function query($sql){
    $result = $this->connection->query($sql);
    $this->confirm_query($result);
        return $result;
    }


    
    
    //THIS FUNCTION IS JUST LIKE THE ONE CREATED IN PHP FOR BEGINNERS TO 
// creating a private function for not using outside the class
 private function confirm_query($result){
        if(!$result){
            die("Query failed". $this->connection->error);
        }
    }

//THIS METHOD WILL HELP US ESCAPE CERTAIN VALUES AND USE IT ANYWHERE. 
 public function   escape_string($string){
 $escape_string = mysqli_real_escape_string($this->connection, $string);    
return $escape_string;     
 }


public function insert_id(){
        return mysqli_insert_id($this->connection);
    }





}//end of class
// WE NNED TO INTAIATE THIS CLASS SO THAT WE CAN ACCESS IT ANYWHERE

$database = new Database();



?>