<?php
class ConDB{
    private $host,$db,$user,$pass;
    public $conn;

    public function ConDB(){
        $this->host = 'localhost';
        $this->user = 'root'; 
        $this->pass = 'Arpapat46'; 
        $this->db = 'teamfootball'; 
    }

    public function connect(){
        try{
            $this->conn = new PDO("mysql:host=localhost;dbname=teamfootball","root","Arpapat46");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
} 
?>