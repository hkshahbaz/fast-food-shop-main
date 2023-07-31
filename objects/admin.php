<?php
class Admin{
 
    // database connection and table name
    private $conn;
    private $table_name = "tbl_admin";
 
    // object properties
    public $aid;
    public $admin_username;
    public $admin_password;
    public $admin_email;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    public function create()
    {
        $select = "SELECT user_id FROM " . $this->table_name." WHERE user_id = '$this->user_id'";
            
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
        $query = "UPDATE tbl_admin SET password = '$this->admin_password' WHERE aid = '$this->aid'";

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
    
    function login(){
     
        $query = "SELECT aid,first_name,last_name FROM " . $this->table_name." WHERE username='$this->admin_username' AND password='$this->admin_password'";
            
        // prepare query statement
        $stmt = $this->conn->prepare($query);
     
        // execute query
        $stmt->execute();
     
        
        return $stmt;
    }
     function forget(){
     
        $query = "SELECT password FROM " .$this->table_name." WHERE email='$this->admin_email'";
            
        // prepare query statement
        $stmt = $this->conn->prepare($query);
     
        // execute query
        $stmt->execute();
     
        
        return $stmt;
    }
};
