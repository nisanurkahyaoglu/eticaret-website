<?php

session_start();

if(isset($_SESSION["shoppingCart"])){

    $shoppingCart = $_SESSION["shoppingCart"];
    $total_count = $shoppingCart["summary"]["total_count"];
    $total_price = $shoppingCart["summary"]["total_price"];
    $shopping_products = $shoppingCart["products"];

}else{
    
    $total_count=0;
    $total_price=0.0;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">   
    <link rel="stylesheet" href="elec-style.css">
    <title>Telefon & Aksesuarları</title>
</head>
<body>

     <!--Navbar Kısmı-->

   <header class="header">
    <div class="container">
        <div class="logo-container">
           <a href="index.php"><div class="logo"></div></a> 
        </div>

        <div class="search-container">
            <input type="text" placeholder="Aradığınız ürün , kategori veya markayı yazınız " class="search-input"/>

           <div class="search-icon">
             <i class="fa-regular fa-magnifying-glass" style="color: #000000;"></i>
           </div>
           
        </div>

     
          <div class="login-container">
             <a href="indexlogin.html"><i class="fa-solid fa-user" style="color: #000000;"></i>Giriş Yap</a>   
          </div>

          <div class="favorites-container">
             <a href="#"><i class="fa-solid fa-heart" style="color: #000000;"></i>Favoriler</a>
         </div>


         <div class="shopping-container">
              <a href="shopping-cart.php">
                  <div class="wrapper">
                       <i class="fa" style="font-size:16px">&#xf07a;</i><span class="cart-count"><?php echo $total_count; ?>Sepetim</span>
                      &nbsp;
                  </div>
             </a>
          </div>

    </div>
</header>

<!--Kategoriler-->

<div class="navigation-wrapper">
    <nav>
        <ul class="main-nav">
            <li class="catmenu-link1">
                <a href="#">Moda</a>
                <div class="menu1">
                    <ul>
                           <li><a href="womancat.php" class="menu-ıtem" title="Kadın Giyim">
                            <img src="resimler/kadıngiyim.png" alt="" width="40" height="40"><span>Kadın Giyim</span></a></li>
                           <li><a href="mancat.php" class="menu-ıtem" title="Erkek Giyim">
                            <img src="resimler/erkekgiyim.png" alt="" width="40" height="40"><span>Erkek Giyim</span></a></li>
                           <li><a href="kidcat.php" class="menu-ıtem" title="Çocuk Giyim">
                            <img src="resimler/çocukgiyim.png" alt="" width="40" height="40"><span>Çocuk Giyim</span></a></li>
                           <li><a href="shoe-bagcat.php" class="menu-ıtem" title="Ayakkabı&Çanta">
                            <img src="resimler/ayakkabıçanta.png" alt="" width="40" height="40"><span>Ayakkabı&Çanta</span></a></li>
                    </ul>
                </div>
             </li>


            <li class="catmenu-link2">
                <a href="#">Elektronik</a>
                <div class="menu2">
                    <ul>
                        <li><a href="elec-cat.php" class="menu-ıtem" title="Telefon&Aksesuarları">
                         <img src="resimler/telefon.png" alt="" width="40" height="40"> <span>Telefon&Aksesuarları</span></a></li>
                        <li><a href="#" class="menu-ıtem" title="Bilgisayar">
                         <img src="resimler/bilgisayar.png" alt="" width="40" height="40"><span>Bilgisayar</span></a></li>
                        <li><a href="#" class="menu-ıtem" title="Beyaz Eşya">
                         <img src="resimler/beyazeşya.png" alt="" width="40" height="40"><span>Beyaz Eşya</span></a></li>
                        <li><a href="#" class="menu-ıtem" title="Elektrikli Ev Aletleri">
                         <img src="resimler/evaleti.png" alt="" width="40" height="40"><span>Elektrikli Ev Aletleri</span></a></li>
                        <li><a href="#" class="menu-ıtem" title="Foto&Kamera">
                         <img src="resimler/fotokamera.png" alt="" width="40" height="40"><span>Foto&Kamera</span></a></li>
                        <li><a href="#" class="menu-ıtem" title="Kişisel Bakım Aletleri">
                         <img src="resimler/videooyun.png" alt="" width="40" height="40"><span>Video Oyun&Konsol</span></a></li>
                     </ul>
                </div>
             </li>


            <li class="catmenu-link3">
                <a href="#">Anne&Bebek</a>
                <div class="menu3">
                    <ul>
                         <li><a href="#" class="menu-ıtem" title="Bebek Bezi&Islak Mendil">
                           <img src="resimler/bezmendil.png" alt="" width="40" height="40"><span>Bebek Bezi&Islak Mendil</span></a></li>
                         <li><a href="#" class="menu-ıtem" title="Bebek Giyim">
                           <img src="resimler/bebekgiyim.png" alt="" width="40" height="40"><span>Bebek Giyim</span></a></li>
                         <li><a href="#" class="menu-ıtem" title="Bebek Arabaları">
                           <img src="resimler/bebekaraba.png" alt="" width="40" height="40"><span>Bebek Arabaları</span></a></li>
                         <li><a href="#" class="menu-ıtem" title="Bebek Bakım&Sağlık">
                           <img src="resimler/bebekbakım.png" alt="" width="40" height="40"><span>Bebek Bakım&Sağlık</span></a></li>
                     </ul>
                </div>
             </li>


            <li class="catmenu-link4">
                <a href="#">Ev&Yaşam</a>
                <div class="menu4">
                     <ul>
                         <li><a href="#" class="menu-ıtem" title="Mobilya">
                            <img src="resimler/mobilya.png" alt="" width="40" height="40"><span>Mobilya</span></a></li>
                         <li><a href="#" class="menu-ıtem" title="Aydınlatma">
                            <img src="resimler/aydınlatma.png" alt="" width="40" height="40"><span>Aydınlatma</span></a></li>
                         <li><a href="#" class="menu-ıtem" title="Mutfak Gereçleri">
                            <img src="resimler/mutfak.png" alt="" width="40" height="40"><span>Mutfak Gereçleri</span></a></li>
                         <li><a href="#" class="menu-ıtem" title="Banyo Gereçleri">
                            <img src="resimler/banyo.png" alt="" width="40" height="40"><span>Banyo Gereçleri</span></a></li>
                     </ul>
                </div>
             </li>


            <li class="catmenu-link5">
                <a href="#">Kişisel Bakım</a>
                <div class="menu5">
                    <ul>
                         <li><a href="#" class="menu-ıtem" title="Saç Bakım&Şekillendirme">
                             <img src="resimler/saçbakım.png" alt="" width="40" height="40"><span>Saç Bakım&Şekillendirme</span></a></li>
                         <li><a href="#" class="menu-ıtem" title="Cilt Bakımı">
                             <img src="resimler/ciltbakım.png" alt="" width="40" height="40"><span>Cilt Bakımı</span></a></li>
                         <li><a href="#" class="menu-ıtem" title="Sağlık&Medikal Ürünler">
                             <img src="resimler/sağlık.png" alt="" width="40" height="40"><span>Sağlık&Medikal Ürünler</span></a></li>
                         <li><a href="#" class="menu-ıtem" title="Ağız&Diş Bakımı">
                             <img src="resimler/ağızbakım.png" alt="" width="40" height="40"><span>Ağız&Diş Bakımı</span></a></li>
                    </ul>
                </div>
             </li>


            <li class="catmenu-link6">
                <a href="#">Kitap,Müzik,Film,Oyun</a>
                <div class="menu6">
                    <ul>
                        <li><a href="#" class="menu-ıtem" title="Kitap">
                            <img src="resimler/kitap.png" alt="" width="40" height="40"><span>Kitap</span></a></li>
                        <li><a href="#" class="menu-ıtem" title="Müzik">
                            <img src="resimler/müzik.png" alt="" width="40" height="40"><span>Müzik</span></a></li>
                        <li><a href="#" class="menu-ıtem" title="Film">
                            <img src="resimler/film.png" alt="" width="40" height="40"><span>Film</span></a></li>
                        <li><a href="#" class="menu-ıtem" title="Oyun">
                            <img src="resimler/oyun.png" alt="" width="40" height="40"><span>Oyun</span></a></li>
                     </ul>
                </div>
             </li>

        </ul>
    </nav>
</div>



<!--Filtreleme Kısmı-->

<div class="filter-container">
        <div class="row">
                <div class="col-md-12">
                        <div class="card mt-3">
                                <div class="card-header">
                                        <h4>Telefon&Aksesuarları</h4>
                                </div>
                        </div>
                </div>

                <!--Kategoriler Listesi-->

                <div class="col-md-3">
                   <form action="" method="GET">
                        <div class="card-shadow mt-3">
                                <div class="card-header">
                                        <h5>Marka Seç   
                                        </h5>
                                </div>

                                <div class="card-body">
                                        <h6>Marka</h6>
                                        <hr>

                                <?php
                                   $con=mysqli_connect("localhost","root","root","project");
                                   $cat_query ="SELECT * FROM brand " ;
                                   $cat_query_run  = mysqli_query($con,$cat_query);

                                   if(mysqli_num_rows($cat_query_run)>0){

                                        foreach($cat_query_run as $catlist){

                                                $checked = [];
                                                if(isset($_GET['cats'])){

                                                 $checked =$_GET['cats'] ;
                                                }
                                 ?>

                                <div>
                                        <input type="checkbox" name="cats[]" value="<?= $catlist['id'] ;?> " 
                                            <?php if(in_array($catlist['id'],$checked)){ echo "checked" ;}   ?>
                                        />
                                        <?= $catlist['product_brand'];?> 
                                        
                                </div>
                                

                                <?php
                                        }
                                   }else{
                                           echo "Bulunamadı";
                                   }
                                          
                                ?>
                                </div>
                        </div>

                        <div class="card-shadow mt-3">
                                <div class="card-header">
                                        <h5>Fiyat  Aralığı 
                                        </h5>
                                </div>

                                <div class="card-body">
                                        <h6>Fiyat</h6>
                                        <hr>

                                <?php
                                   $con=mysqli_connect("localhost","root","root","project");
                                   $cat_query ="SELECT * FROM price2" ;
                                   $cat_query_run  = mysqli_query($con,$cat_query);

                                   if(mysqli_num_rows($cat_query_run)>0){

                                        foreach($cat_query_run as $catlist){

                                                $checked = [];
                                                if(isset($_GET['cat'])){

                                                 $checked =$_GET['cat'] ;
                                                }
                                 ?>

                                <div>
                                        <input type="checkbox" name="cat[]" value="<?= $catlist['id'] ;?> " 
                                            <?php if(in_array($catlist['id'],$checked)){ echo "checked" ;}   ?>
                                        />
                                        <?= $catlist['product_price'];?> 
                                        
                                </div>
                                

                                <?php
                                        }
                                   }else{
                                           echo "Bulunamadı";
                                   }
                                   
                                        
                                ?>
                                </div>
                        </div>

                        <button type="submit" class="btn-primary">Filtrele</button>
                        <button type="submit" href="elec-cat.php" class="btn-primary">Temizle</button>

                   </form>
                </div>

                <!--Kategori Ürünler Kısmı-->

                <div class="col-md-9 mt-3">
                    <form action="elec-cat.php?action=add=id="></form>
                   <div class="card">

                   <form action="" method="POST">
                        <div class="card-body row">
                                <?php
                                    if(isset($_GET['cats'])){

                                        $catchecked = [];
                                        $catchecked= $_GET['cats'];

                                        foreach($catchecked as $rowbrand){

                                                $prod = "SELECT * FROM products6 WHERE brand_id IN ($rowbrand)" ;
                                                $prod_run = mysqli_query($con,$prod);
        
                                            if(mysqli_num_rows($prod_run)>0){
        
                                                foreach($prod_run as $proditems):
                                                ?>
        
                                                <div class="col-md-4 mt-3">
                                                        <div class="border">
                                                           <img src="<?= $proditems['image'];?>"  alt="">
                                                           <h6><?= $proditems['name'];?></h6>
                                                           <h4><?= $proditems['price'];?></h4>
                                                           <button id='<?= $proditems['id'];?>'  class="sepet" name="add"><i class="fa-regular fa-cart-shopping" style="color: #ff40ff;"></i>Sepete Ekle</button>
                                                           <button class="fav"><i class="fa-regular fa-heart" style="color: #ff40ff;"></i> Favorilere Ekle</button>
                                                        </div>
                                                </div>
        
                                                <?php
                                                endforeach;
        
                                            }else{
                                                    echo "Ürün bulunamadı " ;
                                            }
                                        }

                                    }else if(isset($_GET['cat'])){
                                            
                                        $catchecked = [];
                                        $catchecked= $_GET['cat'];

                                        foreach($catchecked as $rowbrand){

                                               $pro = "SELECT * FROM products6 WHERE price_id IN ($rowbrand)" ;
                                               $pro_run = mysqli_query($con,$pro);
        
                                            if(mysqli_num_rows($pro_run)>0){
        
                                                foreach($pro_run as $proditems):
                                                ?>
        
                                                <div class="col-md-4 mt-3">
                                                        <div class="border">
                                                           <img src="<?= $proditems['image'];?>"  alt="">
                                                           <h6><?= $proditems['name'];?></h6>
                                                           <h4><?= $proditems['price'];?></h4>
                                                           <button id='<?= $proditems['id'];?>'  class="sepet" name="add"><i class="fa-regular fa-cart-shopping" style="color: #ff40ff;"></i>Sepete Ekle</button>
                                                           <button class="fav"><i class="fa-regular fa-heart" style="color: #ff40ff;"></i> Favorilere Ekle</button>
                                                        </div>
                                                </div>
        
                                                <?php
                                                endforeach;
        
                                            }else{
                                                    echo "Ürün bulunamadı " ;
                                            }
                                        }

                                    }else if(isset($_GET['cat']) && isset($_GET['cats'])){

                                        $check = [];
                                        $check= $_GET['cat'];
                                        $check= $_GET['cats'];

                                        foreach($check as $rowbrand){

                                               $prot = "SELECT * FROM products6 WHERE brand_id,price_id IN ($rowbrand) " ;
                                               $prot_run = mysqli_query($con,$prot);
        
                                            if(mysqli_num_rows($prot_run)>0){
        
                                                foreach($prot_run as $proditems):
                                                ?>
        
                                                <div class="col-md-4 mt-3">
                                                        <div class="border">
                                                           <img src="<?= $proditems['image'];?>"  alt="">
                                                           <h6><?= $proditems['name'];?></h6>
                                                           <h4><?= $proditems['price'];?></h4>
                                                           <button id='<?= $proditems['id'];?>'  class="sepet" name="add"><i class="fa-regular fa-cart-shopping" style="color: #ff40ff;"></i>Sepete Ekle</button>
                                                           <button class="fav"><i class="fa-regular fa-heart" style="color: #ff40ff;"></i> Favorilere Ekle</button>
                                                        </div>
                                                </div>
        
                                                <?php
                                                endforeach;
        
                                            }else{
                                                    echo "Ürün bulunamadı " ;
                                            }
                                        }

                                    }
                                    
                                    else{

                                        $prod = "SELECT * FROM products6" ;
                                        $prod_run = mysqli_query($con,$prod);

                                       if(mysqli_num_rows($prod_run)>0){

                                        foreach($prod_run as $proditems):
                                        ?>

                                        <div class="col-md-4">
                                                <div class="border">       
                                                 <img src="<?= $proditems['image'];?>"  alt="">
                                                 <h6><?= $proditems['name'];?></h6>
                                                 <h4><?= $proditems['price'];?></h4>
                                                 <button id='<?= $proditems['id'];?>'  class="sepet" name="add"><i class="fa-regular fa-cart-shopping" style="color: #ff40ff;"></i> Sepete Ekle</button>
                                                 <button class="fav"><i class="fa-regular fa-heart" style="color: #ff40ff;"></i> Favorilere Ekle</button>
                                                </div>
                                        </div>

                                        <?php
                                        endforeach;

                                    }else{
                                            echo "Ürün bulunamadı " ;
                                    }

                                    }
                                    
                                        
                                ?>

                                
                            </div>
                        </form>
                     </div>
                </div>
        </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="main5.js"></script>

    
</body>
</html>