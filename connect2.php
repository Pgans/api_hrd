<?php
class Database {
    //DB Params
    private $host = '119.59.104.40';
    private $db_name = 'mhospit1_mbase';
    private $username = 'mhospit1';
    private $password = 'Xik97be76C';
    private $conn ;

    //DB Connect
    public function connect() {
        $this->conn = null;

    try{ 
        $this->conn = new PDO('mysql host=' .$this->host .';dbname ='.$this->db_name,
        $this->username, $this->password );
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        echo 'Connect Error:' . $e->getMessage();

        }
        return $this->conn;
    } 
}

?>