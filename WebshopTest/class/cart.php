<?php
include_once('./class/database.php');
include_once('./class/products.php');

    class Cart{

        public $id;
        public $user_id;
        public $product_id;
        private $db;
     
	
        public function __construct() {
       
        $this->db= new Database;
     }

     public function create( $user_id, $product_id){

      $param = [ ':uuser_id'=> $user_id,
                  ':uproduct_id'=> $product_id                 
   ];
      $this->db->query('INSERT INTO cart (user_id, product_id)  VALUES (:uuser_id, :uproduct_id)', $param, true);

      $card_id = $this->db->query('SELECT id FROM cart WHERE user_id = :uuser_id AND  date_deleted IS NULL', $param);

      return $card_id[0]['id'];
  }
     
     public function get($id){
        $param = [':uid'=>$id];

        $query = $this->db->query('SELECT * FROM cart WHERE id = :uid', $param);

        return $query;

     }

     public function getAll(){

        $query = $this->db->query('SELECT * FROM cart');

        return $query;

     }
     
     
     
	


     


    }





?>