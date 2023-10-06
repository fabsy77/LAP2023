<?php
    include_once('../class/products.php');


    if(isset ($_POST) && isset($_POST['product']) && isset($_POST['description'])  && isset($_POST['price'])  && isset($_POST['fileToUpload'])){

        $class_prod = new Products();
        
        $creat_prod = $class_prod->create($_POST['product'], $_POST['description'], $_POST['price'], $_POST['fileToUpload']);

        if($creat_prod ){

            echo "seu produto foi criado";
            header('Location: createProduct.php');

        }
        else{
            echo "erro ao criar o produto";
        }
       
    }
    

?>