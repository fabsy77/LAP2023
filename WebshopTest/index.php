<?php


 require_once('./class/database.php');
 
 require_once('./class/products.php');

 $class_data = new Database(); //preciso mesmo instanciar database ou so inportar ja esta ok?

 $class_prod = new Products();
 $listProducts = $class_prod->getAll();







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        
        <?php 
            foreach ($listProducts as $products) {   ?>
             <?php  
             $path = "./modules/image";
             $image =  $products['image'];
                echo '<img src="' . $path . $image . '" style="width:200px;"><br>';
                echo "Product name: " . $products['name'] . "<br><br>"; 
                echo "Desription: ".  $products['description']. "<br><br>"; 
                echo "Price: " . $products['name'] . "<br><br>";  
                ?>

                <a href="addToCart">Add to Cart</a><br><br>
                <a href="formAddtoCart.php?id=<?php echo $products['id'];?>"></a>


               
                <?php }  ?>
      
    </div>
</body>
</html>

