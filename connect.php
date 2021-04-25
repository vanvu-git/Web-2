<?php 

class connect
{
    
    protected $host;
    protected $username;
    protected $password;
    protected $db;
    protected $conn;

    function __construct($host,$username,$password,$db){
            $this->host = $host;
            $this->username = $username ;
            $this->password = $password ;
            $this->db = $db;      
            $this->connect();
        }
    
    private function connect(){
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
    function getData($table, $where){
            $this->connect();
            $sql = "SELECT * FROM ".$table." WHERE ".$where;          
            $sql = $this->conn->query($sql);
           
            return $sql;
    }
    function updateData($table, $update_value, $where){
            $this->connect();
            $sql = "UPDATE ".$table." SET ".$update_value." WHERE ".$where;        
            $sql = $this->conn->query($sql);
            if($sql == true){
                return true;
            }else{
                return false;
            }
        }
    function createData($table, $columns, $values){
            $this->connect();
            $sql = "INSERT INTO ".$table." ".$columns." VALUES ".$values;        
            $sql = $this->conn->query($sql);
            if($sql == true){
                return $sql;
            }else{
                return false;
            }
        }
    function deleteData($table, $filter){
            
            $this->connect();
            $sql =  "DELETE FROM ".$table." ".$filter;  
            $sql = $this->conn->query($sql);
            if($sql == true){
                return true;
            }else{
                return false;
            }
        }
        
    }
?>