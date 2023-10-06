<?php
include_once('./class/database.php');

    class Order{

        public $id;
        public $user_id;
        public $payment_type_id;
        public $address_id;
        public $db;


        public function __construct() {
            $this->db = new Database;
        }

        public function create( $user_id, $address_id, $credit_card_id){

            $param = [ ':uuser_id'=> $user_id,
                        ':$address_id'=> $address_id,
                        ':ucredit_card_id'=> $credit_card_id
         ];
   
            $query = $this->db->query('INSERT INTO orders(user_id, address_id, credit_card_id) 
            VALUES (:uuser_id, :uaddress_id, :ucredit_card_id)', $param, true);
   
            return $query;
        }

        // get all Products with the parameter  ID
        public function get($id){

            $param = [':uid' => $id];

            $query = $this->db->query('SELECT * FROM orders WHERE id = :uid', $param);

            return $query;
        }
        //get all Prodcucts
        public function getAll(){

            $query = $this->db->query('SELECT * FROM orders');

            return $query;

        }


     
	


     


    }





?>