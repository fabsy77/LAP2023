<?php
include_once('database.php');

    class ProductsInCard{

        public $id;
        public $product_id;
        public $card_id;
        public $quantity;
        private $db;


        //nserir um produto em um carrinho de compras 
        public function create ($product_id, $card_id, $quantity){
            $param = [ ':uproduct_id'=> $product_id,
                       ':ucard_id'=> $card_id,
                       'uquantity'=> $quantity

        ];

            $query = $this->db->query('INSERT INTO products_in_cart (product_id, cart_id, quantity) 
            VALUES (:uproduct_id, :ucard_id, :uquantity)', $param, true);

            return $query;

        }
        //update do  produto em um carrinho de compras 
        public function update($cartId, $productId, $quantity) {
            $params = [
                ':ucart_id' => $cartId,
                ':uproduct_id' => $productId,
                ':uquantity' => $quantity,
            ];
    
            return $this->db->query("UPDATE products_cart SET quantity = :uquantity WHERE cart_id = :ucart_id AND product_id = :uproductid", $params, true);
        }
    
        //deleta do carrinho
        public function delete($productCartId) {
            $params = [
                ':uid' => $productCartId,
            ];
        
            return $this->db->query("DELETE FROM products_cart WHERE id = :uid", $params, true);
        }

        
        public function getCart($id_cart){

            $param = [ ':ucart'=> $id_cart

        ];

            $query = $this->db->query('SELECT * FROM products_in_cart WHERE card_id = ucart GROUP BY products', $param );

            return $query;
        }
        
        public function getByCartIdAndProductId($cartId, $productId) {
            $param = [
                ':ucart_id' => $cartId,
                ':uproduct_id' => $productId,
            ];
           
            $query = $this->db->query('SELECT * FROM products_cart WHERE cart_id = :ucartid AND product_id = :uproduct_id', $param);

            return $query;
        }
     
	

       
        
	





    }





?>