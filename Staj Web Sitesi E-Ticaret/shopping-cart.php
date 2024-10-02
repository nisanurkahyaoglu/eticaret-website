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
    <link rel="stylesheet" href="shoppingcartstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="main.js"></script>
    <script src="main2.js"></script>
    <title>Alışveriş Sepetim</title>
</head>
<body>

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
                       <i class="fa" style="font-size:16px">&#xf07a;</i><span class="cart-count"><?php echo $total_count; ?></span>
                      &nbsp;
                          Sepetim
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
                           <li><a href="tel-cat.php" class="menu-ıtem" title="Telefon&Aksesuarları">
                            <img src="resimler/telefon.png" alt="" width="40" height="40"> <span>Telefon&Aksesuarları</span></a></li>
                           <li><a href="bilg-cat.php" class="menu-ıtem" title="Bilgisayar">
                            <img src="resimler/bilgisayar.png" alt="" width="40" height="40"><span>Bilgisayar</span></a></li>
                           <li><a href="beyazeşya-cat.php" class="menu-ıtem" title="Beyaz Eşya">
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

</header>



<div class="cont">

    <?php if($total_count>0){?>

        <div class="tit">
           <h2>Sepetinizde <strong class="strong"><?php echo $total_count ; ?></strong> adet ürün bulunmaktadır</h2> 
        </div>  
</div><hr>
        
<div class="shopping-php">
     <div class="pro-items">

    <table>  
    <tr class="tt">
        <th>Ürün Resmi</th>
        <th>Ürün Adı</th>
        <th>Ürün Fiyatı</th>
        <th>Ürün Adedi</th>
        <th>Sepetten Çıkar</th>
    </tr>

    <?php foreach($shopping_products as $product){?>
                      <tr>
                        <td><img src="<?php echo $product->image ;?>" alt="" width="70"></td>
                        <td><?php echo $product->name ;?></td>
                        <td><?php echo $product->price;?></td>
                        <td id="cnt">
                        <a  href="sepet.php?p=incCount&id=<?php echo $product->id ;?>"  class="plus">+</a>
                        <input type="text" value="<?php echo $product->count;?>">
                        <a  href="sepet.php?p=decCount&id=<?php echo $product->id ;?>"  class="neg">-</a></td>
                        <td>
                            <button id="<?php echo $product->id ;?>" name="remove">Sepetten Çıkar</button>
                        </td>
                      </tr>

        <?php } ?>

      </table>
    </div>

    <div class="right">
        <h2 class="tprice">Toplam Miktar : <?php echo $total_price ;?> TL</h2>
        <button>Ödemeye Geç</button>
  </div>

</div>

<?php  }else{ ?>

        <div class="alert">
            <strong>Sepetinizde henüz bir ürün bulunmamaktadır</strong>
        </div>

     <?php } ?>


 <!--Footer Kısmı-->

<section class="footer">
    <div class="box-container">
        <div class="box1">
            <h5>Bizi Takip Edin</h5>
            <ul class="social-links">
                <li>
                    <a href="#"><i class="fa-brands fa-facebook" style="color: #000000;"></i>  Facebook</a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-square-twitter" style="color: #000000;"></i>  Twitter</a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-linkedin" style="color: #000000;"></i>  Linkedin</a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-pinterest" style="color: #000000;"></i>  Pinterest</a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-instagram" style="color: #000000;"></i>  İnstagram</a>
                </li>
            </ul>
        </div>

        <div class="box2">
            <h5>Güvenli Alışveriş</h5>
            <ul class="pay-options">
                <li>
                    <i class="fa-brands fa-cc-mastercard" style="color: #000000;"> MasterCard</i>
                </li>
                <li>
                    <i class="fa-brands fa-cc-visa" style="color: #000000;"> Visa</i>
                </li>
                <li>
                    <i class="fa-brands fa-cc-paypal" style="color: #000000;"> Paypal</i>
                </li>
                <li>
                    <i class="fa-brands fa-cc-amex" style="color: #000000;"> American Express</i>
                </li>
            </ul>
        </div>

        <div class="box3">
            <h5>Bize Ulaşın</h5>
            <ul class="connection">
                <li>
                    <i class="fa-solid fa-phone" style="color: #000000;"> 02129874678</i>
                </li>
                <li>
                    <i class="fa-solid fa-comment-sms" style="color: #000000;"> 05414840851</i>
                </li>
                <li>
                    <i class="fa-solid fa-location-dot" style="color: #000000;"> İstanbul/Çatalca</i>
                </li>
            </ul>
        </div>
    </div>
</section>
    


</body>
</html>
