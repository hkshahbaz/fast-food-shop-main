<?php
class Order{
 
    // database connection and table name
    private $conn;
    private $table_name = "tbl_users";
 
    // object properties
    public $uid;
    public $user_id;
    public $user_fname;
    public $user_lname;
    public $user_email;
    public $user_phone;
    public $user_image;
    public $user_gender;
    public $user_address;
    public $user_password;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read categories
    function read(){
     
        $query = "SELECT * FROM " . $this->table_name;
            
        // prepare query statement
        $stmt = $this->conn->prepare($query);
     
        // execute query
        $stmt->execute();
     
        
        return $stmt;
    }
    function readOne($uid){
        $query = "SELECT * FROM " . $this->table_name . " WHERE uid= ".$uid;
        
        // return $query;
        // prepare query statement
        $stmt = $this->conn->prepare($query);
     
        // execute query
        $stmt->execute();
     
        
        return $stmt;
    }
    function read_dropdown(){
     
        $query = "SELECT uid,first_name,last_name FROM " . $this->table_name;
            
        // prepare query statement
        $stmt = $this->conn->prepare($query);
     
        // execute query
        $stmt->execute();
     
        
        return $stmt;
    }
    public function create()
    {
        $select = "SELECT email FROM " . $this->table_name." WHERE email = '$this->user_email'";
            
        // prepare query statement
        $stmt = $this->conn->prepare($select);
     
        // execute query
        $stmt->execute();
        $num = $stmt->rowCount();
        if($num==0){
            $query = "INSERT INTO tbl_users (user_id,first_name,last_name,email,phone,image,gender,address,password) VALUES ('$this->user_id','$this->user_fname','$this->user_lname','$this->user_email','$this->user_phone','$this->user_image','$this->user_gender','$this->user_address','$this->user_password')";
            // prepare query
            $stmt = $this->conn->prepare($query);
           
            //echo "\n $query \n";
            
            // execute query
            if($stmt->execute())
            {
                $id = $this->conn->lastInsertId();
                $this->user_id=$id;
                
                return true;
            }
            return false;
        }
        else{
            return false;
        }
        
    }
    public function update()
    {
        $query = "UPDATE tbl_users SET user_id = '$this->user_id' , first_name ='$this->user_fname' , last_name ='$this->user_lname', email ='$this->user_email', phone ='$this->user_phone', image ='$this->user_image', gender ='$this->user_gender', password ='$this->user_password' , address ='$this->user_address' WHERE uid = '$this->uid'";

        // prepare query
        $stmt = $this->conn->prepare($query);
            
        // execute query
        if($stmt->execute())
        {
            $id = $this->conn->lastInsertId();
            $this->user_id=$id;
                
            return true;
        }
            return false;
        
    }
    public function deleteAll($user_id)
    {
            // query to delete record
            $length = sizeof($user_id);
            $count=0;

            for ($i=0; $i < $length; $i++) 
            {
                $query = "DELETE FROM " . $this->table_name ." WHERE uid = ".$user_id[$i];
                // prepare query
                $stmt = $this->conn->prepare($query);
                
                // execute query
                if($stmt->execute())
                {
                    $count++;
                }
                else
                {
                    return false;
                }
            }

            if($count==$length){
                return true;
            }
            else{
                return false;
            }
    }
    public function delete($user_id)
    {
          
                $query = "DELETE FROM " . $this->table_name ." WHERE uid = ".$user_id;
                // prepare query
                $stmt = $this->conn->prepare($query);
                
                // execute query
                if($stmt->execute())
                {
                    return true;
                }
                else
                {
                    return false;
                }

    }
    function login(){
     
        $query = "SELECT uid FROM " . $this->table_name." WHERE email='$this->user_email' AND password='$this->user_password'";
            
        // prepare query statement
        $stmt = $this->conn->prepare($query);
     
        // execute query
        $stmt->execute();
     
        
        return $stmt;
    }
};
