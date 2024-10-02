<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=project", "root", "root");
} catch ( PDOException $e ){
    print $e->getMessage();
}

session_start();

function addToCart($proditems){

    if(isset($_SESSION["shoppingCart"])){

        $shoppingCart = $_SESSION["shoppingCart"];
        $products = $shoppingCart["products"];

    }else{
        $products = array();
    }

    //adet kontrolü

    if(array_key_exists($proditems->id,$products)){

        $products[$proditems->id]->count++ ;

    }else{

        $products[$proditems->id] = $proditems; 
    }

    // sepetin heasaplanması

    $total_price = 0.0 ;
    $total_count = 0 ;

    foreach($products as $product){

        $product->total_price = $product->count * $product->price ;
        $total_price = $total_price + $product->total_price ;
        $total_count += $product->count ;
    }


    $summary["total_price"] = $total_price  ;
    $summary["total_count"] = $total_count  ;
     
    $_SESSION["shoppingCart"]["products"]=$products ;
    $_SESSION["shoppingCart"]["summary"]=$summary ; 

    return $total_count ;

}

function removeFromCart($id){

    if(isset($_SESSION["shoppingCart"])){

        $shoppingCart = $_SESSION["shoppingCart"];
        $products = $shoppingCart["products"];
  
        if(array_key_exists($id,$products)){
            
            unset($products[$id]);
        }

        $total_price = 0.0 ;
        $total_count = 0 ;
    
        foreach($products as $product){
    
            $product->total_price = $product->count * $product->price ;
            $total_price = $total_price + $product->total_price ;
            $total_count += $product->count ;
        }
    
    
        $summary["total_price"] = $total_price  ;
        $summary["total_count"] = $total_count  ;
         
        $_SESSION["shoppingCart"]["products"]=$products ;
        $_SESSION["shoppingCart"]["summary"]=$summary ; 

        return true ;
    }
}

function incCount($id){

    if(isset($_SESSION["shoppingCart"])){

        $shoppingCart = $_SESSION["shoppingCart"];
        $products = $shoppingCart["products"];

    }


    if(array_key_exists($id,$products)){
        $products[$id]->count++ ;
    }

    $total_price = 0.0 ;
    $total_count = 0 ;

    foreach($products as $product){

        $product->total_price = $product->count * $product->price ;
        $total_price = $total_price + $product->total_price ;
        $total_count += $product->count ;
    }


    $summary["total_price"] = $total_price  ;
    $summary["total_count"] = $total_count  ;
     
    $_SESSION["shoppingCart"]["products"]=$products ;
    $_SESSION["shoppingCart"]["summary"]=$summary ; 

    return true ;

}

function decCount($id){ 

    if(isset($_SESSION["shoppingCart"])){

        $shoppingCart = $_SESSION["shoppingCart"];
        $products = $shoppingCart["products"];

    }


    if(array_key_exists($id,$products)){
        $products[$id]->count-- ;
    }

    $total_price = 0.0 ;
    $total_count = 0 ;

    foreach($products as $product){

        $product->total_price = $product->count * $product->price ;
        $total_price = $total_price + $product->total_price ;
        $total_count += $product->count ;
    }


    $summary["total_price"] = $total_price  ;
    $summary["total_count"] = $total_count  ;
     
    $_SESSION["shoppingCart"]["products"]=$products ;
    $_SESSION["shoppingCart"]["summary"]=$summary ; 

    return true ;

}


if(isset($_POST["p"])){

    $işlem = $_POST["p"];
    
    if($işlem == "addToCart"){

        $id=$_POST["id"]; 

        $product = $db->query("SELECT * FROM products8 WHERE id={$id}",PDO::FETCH_OBJ)->fetch();
        $product->count=1;

        echo addToCart($product); 


    }else if($işlem == "removeFromCart"){

        $id = $_POST["id"];

        echo removeFromCart($id);

    }
}


if(isset($_GET["p"])){

    $işlem = $_GET["p"];
    
    if($işlem == "incCount"){

        $id=$_GET["id"]; 

        if(incCount($id)){
            header("Location:shopping-cart.php");
        }


    }else if($işlem == "decCount"){

        $id = $_GET["id"];

        if(decCount($id)){
            header("Location:shopping-cart.php");
        }

    }
}


?>