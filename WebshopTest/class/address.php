<?php
include_once('./class/database.php');

    class Address{

        public $id;
        public $user_id;
        public $street;
        public $house_number;
        public $postal_code;
        public $city;
        private $db;
     
	
    public function __construct() {
       
        $this->db= new Database;
    }


    public function create( $user_id, $street, $house_number, $postal_code, $city){

            $param = [ ':uuser_id'=> $user_id,
                        ':ustreet'=> $street,
                        ':uhouse_number'=> $house_number,
                        ':upostal_code '=> $postal_code,
                        ':ucity '=> $city,
         ];
            $query = $this->db->query('INSERT INTO address(user_id, street, house_number, postal_code, city) 
            VALUES (:uuser_id, :ustreet, :uhouse_number, :upostal_code, :ucity)', $param, true);
   
            return $query;
        }

    public function get($id){

        $param = [':uid' => $id

    ];
        $query = $this->db->query('SELECT *  FROM address WHERE id = :uid', $param );
        
         return $query;
    }

    public function getAll(){

        $query = $this->db->query('SELECT * FROM address');

        return $query;

        
    }
       

    

    }





?>