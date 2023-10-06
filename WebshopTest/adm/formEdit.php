<?php

    include_once('../class/products.php');

    if(isset($_POST) && isset($_POST['id']) && isset($_POST['name']) &&  isset($_POST['description']) && isset($_POST['price']) && isset($_POST['fileToUpload'])){

    $class_prod = new Products();
    $edit_prod = $class_prod->update( $_POST['id'],$_POST['name'], $_POST['description'], $_POST['price'], $_POST['image']);



    var_dump($edit_prod);


  
   /*  if($edit_prod){
        echo 'produto editado com sucesso';
    }
    else{
        echo 'produto nao pode ser editado';

        header('products.php');
    } */


    }






// form actionEditprod
?>