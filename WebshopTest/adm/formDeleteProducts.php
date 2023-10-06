<?php

    include_once('../class/products.php');
    
    //verifica se uma solicitação GET foi feita (geralmente por meio de uma URL) e se existe um parâmetro 'id' na solicitação
    if(isset($_GET) && isset($_GET['id'])){

        $class_prod = new Products();
        //metodo delete sendo chamado e sendo salvo na variavel $deleteProd
        $deleteProd = $class_prod->delete($_GET['id']);
        
        echo 'product deleted successfully';
    }
    else{
        echo 'Error while deleting the product';
        //encaminha para a pagina do adm/product
        header('products.php');
    }

?>