<?php

session_start();

try {
    $db = new PDO("mysql:host=localhost;dbname=project", "root", "root");
    $db->exec("SET NAMES utf8");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sorgu = $db->query("SELECT * FROM users order by eposta LIMIT 1");
    $cikti = $sorgu->fetch(PDO::FETCH_ASSOC);

} catch ( PDOException $e ){
    print $e->getMessage();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>EnTrend</title>
</head>
<body>

     <!--Navbar Kısmı-->

   <header class="header">
       <div class="container">
           <div class="logo-container">
               <div class="logo"></div>
           </div>

           <div class="search-container">
               <input type="text" placeholder="Aradığınız ürün , kategori veya markayı yazınız " class="search-input"/>

              <div class="search-icon">
                <i class="fa-regular fa-magnifying-glass" style="color: #000000;"></i>
              </div>
              
           </div>

             
        <div class="navbar">
            <div class="dropdown">
                <button class="dropbtn"><i class="fa-solid fa-user" style="color: #000000;"></i>Hesabım
                    <i class="fa fa-caret-down"></i>
                 </button>
                <div class="dropdown-content">
                   <p><?php echo "Hoşgeldin ".$cikti['isim'] ?></p> 
                   <a href="indexaccount.php"><i class="fa-solid fa-gear" style="color: #000000;"></i>Hesap Ayarları</a>
                   <a href="adress.php"><i class="fa-solid fa-location-dot" style="color: #000000;"></i>Adres Bilgilerim</a>
                   <a href="logout.php"></i><i class="fa-solid fa-right-from-bracket" style="color: #000000;"></i>Çıkış Yap</a>
                </div>
             </div> 
             <a href="#" class="fav"><i class="fa-solid fa-heart" style="color: #000000;"></i>Favoriler</a>
             <a href="#" class="shop"><i class="fa-solid fa-cart-shopping" style="color: #000000;"></i>Sepetim</a>
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
                          <li><a href="womancc.php" class="menu-ıtem" title="Kadın Giyim">
                            <img src="resimler/kadıngiyim.png" alt="" width="40" height="40"><span>Kadın Giyim</span></a></li>
                           <li><a href="mancatacc.php" class="menu-ıtem" title="Erkek Giyim">
                            <img src="resimler/erkekgiyim.png" alt="" width="40" height="40"><span>Erkek Giyim</span></a></li>
                           <li><a href="kidcatacc.php" class="menu-ıtem" title="Çocuk Giyim">
                            <img src="resimler/çocukgiyim.png" alt="" width="40" height="40"><span>Çocuk Giyim</span></a></li>
                           <li><a href="shoe-bagcatacc.php" class="menu-ıtem" title="Ayakkabı&Çanta">
                            <img src="resimler/ayakkabıçanta.png" alt="" width="40" height="40"><span>Ayakkabı&Çanta</span></a></li>
                       </ul>
                   </div>
                </li>


               <li class="catmenu-link2">
                   <a href="#">Elektronik</a>
                   <div class="menu2">
                       <ul>
                           <li><a href="#" class="menu-ıtem" title="Telefon&Aksesuarları">
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

   <!--Small List Kısmı-->

<div class="small-list">

    <article class="small-list-widget">

         <div class="circled-slider">

             <div class="circled-slider-style">

                   <a href="nike.html" class="item">
                       <img loading = "lazy" src="resimler/Apple.jpg" alt="">
                       <span>Apple</span>
                   </a>

                   <a href="#" class="item">
                       <img loading = "lazy" src="resimler/Samsung.jpg" alt="">
                       <span>Samsung</span>
                   </a>

                   <a href="#" class="item">
                       <img loading = "lazy" src="resimler/Xiaomi.jpg" alt="">
                       <span>Xiaomi</span>
                   </a>

                   <a href="#" class="item">
                      <img loading = "lazy" src="resimler/Phılıps.jpg" alt="">
                      <span>Phılıps</span>
                   </a>

                   <a href="#" class="item">
                      <img loading = "lazy" src="resimler/Defacto.jpg" alt="">
                      <span>Defacto</span>
                   </a>

                   <a href="#" class="item">
                       <img loading = "lazy" src="resimler/Adidas.png" alt="">
                       <span>Adidas</span>
                   </a>

                    <a href="#" class="item">
                       <img loading = "lazy" src="resimler/Karaca.jpg" alt="">
                       <span>Karaca</span>
                    </a>

                    <a href="#" class="item">
                        <img loading = "lazy" src="resimler/Dyson.jpg" alt="">
                        <span>Dyson</span>
                    </a>

                    <a href="#" class="item">
                        <img loading = "lazy" src="resimler/Arzum.png" alt="">
                        <span>Arzum</span>
                    </a>


                    <a href="#" class="item">
                        <img loading = "lazy" src="resimler/Vestel.jpg" alt="">
                        <span>Vestel</span>
                    </a>

                    <a href="#" class="item">
                        <img loading = "lazy" src="resimler/nike.jpg" alt="">
                        <span>Nike</span>
                    </a>

               </div>

           </div>
    
        </div>

    </article>

</div>

    <!--Main Banner Kısmı-->


 <div class="main-banners">
       <div class="main-banners_line">
           <a href="çoksatanlar.html" class="sol-lob">
               <img width="530" height="250" src="resimler/Extra-Gunun-Firsatlari-tur.jpg" alt="">
           </a> 

           <a href="" class="sağ-lob">
               <img width="530" height="250" src="resimler/Extra-Cok-Satanlar-tur.jpg" alt="">
           </a>
       </div>
   </div>

   <!--Component List Kısmı-->

<div class="component-list">

       <article class="component-item">
           <a href="">
               <span class="image-container">
                   <img src="resimler/component1.jpg" alt="EnTrend'de Kozmetik">
               </span>
               <summary class="campaign-summary">
                   <span class="name">EnTrend'de Kozmetik</span>
               </summary>
           </a>
       </article>

       <article class="component-item">
        <a href="">
            <span class="image-container">
                <img src="resimler/component2.jpg" alt="EnTrend'de Dünya Markaları">
            </span>
            <summary class="campaign-summary">
                <span class="name">EnTrend'de Dünya Markaları</span>
            </summary>
        </a>
    </article>

    <article class="component-item">
        <a href="">
            <span class="image-container">
                <img src="resimler/component3.jpg" alt="EnTrend'de Yaz İndirmi">
            </span>
            <summary class="campaign-summary">
                <span class="name">EnTrend'de Yaz İndirimi</span>
            </summary>
        </a>
    </article>

    <article class="component-item">
        <a href="">
            <span class="image-container">
                <img src="resimler/component4.jpg" alt="EnTrend'de Yeni Sezon">
            </span>
            <summary class="campaign-summary">
                <span class="name">EnTrend'de Yeni Sezon</span>
            </summary>
        </a>
    </article>


    <article class="component-item">
        <a href="">
            <span class="image-container">
                <img src="resimler/component5.jpg" alt="EnTrend'de Keşife Çık">
            </span>
            <summary class="campaign-summary">
                <span class="name">EnTrend'de Keşfe Çık</span>
            </summary>
        </a>
    </article>

    <article class="component-item">
        <a href="">
            <span class="image-container">
                <img src="resimler/component6.jpg" alt="EnTrend'de Ev Aletleri">
            </span>
            <summary class="campaign-summary">
                <span class="name">EnTrend'de Ev Aletleri</span>
            </summary>
        </a>
    </article>


   </div>

   <!--Ürünler Kısmı-->

   <div class="data-test-id">
       <div class="container">
           <div class="top-container">
               <h2>Popüler Ürünler</h2>
           </div>

         <div class="bottom-container">
               <div data-index="0" class="column" aria-hidden="false" >
                   <a href="#" title="pijama">
                       <div class="image-container">
                           <img  width="150" height="150" src="resimler/pijama.jpg" alt="" >
                       </div>

                       <div class="card-name">
                           <h5>Bisiklet Baskılı Çizgili Müslin Pantolonlu Takım 2-7 Yaş Siyah</h5>
                           <h3>229.00 TL</h3>
                       </div>
                   </a>
               </div>

               <div data-index="1" class="column" aria-hidden="false" >
                    <a href="#" title="bilgisayar">
                         <div class="image-container">
                           <img  width="150" height="150" src="resimler/oyuncubilgisayarı.jpg" alt="">
                         </div>

                        <div class="card-name">
                           <h5>Samsung LC24RG50FZRXUF 24” Gaming Monitör</h5>
                           <h3>3.599.00 TL</h3>
                       </div>
                   </a>
                </div>


                <div data-index="2" class="column" aria-hidden="false" >
                    <a href="#" title="fön makinesi">
                         <div class="image-container">
                           <img  width="150" height="150" src="resimler/fönmakinesi.jpg" alt="">
                         </div>

                         <div class="card-name">
                           <h5>Powertec Tr 901 Saç Kurutma Fön Makinesi Üstün Performans</h5>
                           <h3>378.48 TL</h3>
                         </div>
                    </a>
                </div>


                <div data-index="3" class="column" aria-hidden="false" >
                    <a href="#" title="iphone">
                         <div class="image-container">
                           <img  width="150" height="150" src="resimler/iphone.jpeg" alt="">
                         </div>

                       <div class="card-name">
                           <h5>İphone 13 128GB 6.1 inç OLED ekran 5G özellikli 4K</h5>
                           <h3>37.199.00 TL</h3>
                       </div>
                    </a>
                </div>



                <div data-index="4" class="column" aria-hidden="false" >
                   <a href="#" title="gözlük">
                        <div class="image-container">
                          <img  width="150" height="150" src="resimler/gözlük.jpg" alt="">
                         </div>

                        <div class="card-name">
                            <h5>Ray-Ban Polarize Chromance Erkek Güneş Gözlüğü</h5>
                            <h3>5.224.00 TL</h3>
                        </div>
                    </a>
                </div>

                <div data-index="5" class="column" aria-hidden="false" >
                    <a href="#" title="yatak örtüsü">
                        <div class="image-container">
                           <img  width="150" height="150" src="resimler/yatakörtüsü.jpg" alt="">
                        </div>

                        <div class="card-name">
                           <h5>Hepsiburada Home 200X230Cm Çift Kişilik Empirme Pike</h5>
                           <h3>169.90 TL</h3>
                        </div>
                    </a>
                </div>

            </div>
       </div>
   </div>


   <div class="data-test-id2">

    <div class="container">

      <div class="bottom-container">
            <div data-index="0" class="column" aria-hidden="false" >
                <a href="#" title="temizleme jeli">
                    <div class="image-container">
                        <img  width="150" height="150" src="resimler/bioderma.jpg" alt="" >
                    </div>

                    <div class="card-name">
                        <h5>Bioderma Sensibio Foaming Temizleyici Gel 500 ml</h5>
                        <h3>229.00 TL</h3>
                    </div>
                </a>
            </div>

            <div data-index="1" class="column" aria-hidden="false" >
                 <a href="#" title="saç bakım kompleksi">
                      <div class="image-container">
                        <img  width="150" height="150" src="resimler/parfüm.jpg" alt="">
                      </div>

                     <div class="card-name">
                        <h5>HC Care Complex Bitkisel Saç Bakım Kompleksi - 100 ml</h5>
                        <h3>349.90 TL</h3>
                    </div>
                </a>
             </div>


             <div data-index="2" class="column" aria-hidden="false" >
                 <a href="#" title="fincan takımı">
                      <div class="image-container">
                        <img  width="150" height="150" src="resimler/fincan.jpg" alt="">
                      </div>

                      <div class="card-name">
                        <h5>Emsan Ortaköy 6 Kişilik Kahve Fincan Takımı 90 ml</h5>
                        <h3>359.98 TL</h3>
                      </div>
                 </a>
             </div>


             <div data-index="3" class="column" aria-hidden="false" >
                 <a href="#" title="mama termosu">
                      <div class="image-container">
                        <img  width="150" height="150" src="resimler/termos.jpg" alt="">
                      </div>

                    <div class="card-name">
                        <h5>Baby Plus Vakumlu Çift Taraflı Mama Saklama Termosu 450 ml</h5>
                        <h3>319.99 TL</h3>
                    </div>
                 </a>
             </div>



             <div data-index="4" class="column" aria-hidden="false" >
                <a href="#" title="yatak örtüsü">
                     <div class="image-container">
                       <img  width="150" height="150" src="resimler/çarşaf.jpg" alt="">
                      </div>

                     <div class="card-name">
                         <h5>Yataş Bedding Hana Çift Kişilik Ranforce Nevresim Seti</h5>
                         <h3>499.90 TL</h3>
                     </div>
                 </a>
             </div>

             <div data-index="5" class="column" aria-hidden="false" >
                 <a href="#" title="klavye">
                     <div class="image-container">
                        <img  width="150" height="150" src="resimler/klavye.jpg" alt="">
                     </div>

                     <div class="card-name">
                        <h5>Mofıı Cadny Pembe Mini Karışık Renk Kablosuz Klavye Mouse Set</h5>
                        <h3>1686.15 TL</h3>
                     </div>
                 </a>
             </div>

         </div>
    </div>
</div>

<!--Component List 2 Kısmı-->


<div class="component-list2">

    <article class="component-item">
        <a href="">
            <span class="image-container">
                <img src="resimler/yenigelenler.jpg" alt="EnTrend'de Yeni Sezon">
            </span>
            <summary class="campaign-summary">
                <span class="name">EnTrend'de Yeni Sezon</span>
            </summary>
        </a>
    </article>

    <article class="component-item">
     <a href="">
         <span class="image-container">
             <img src="resimler/elbisefestivali.jpg" alt="EnTrend'de Elbise Festivali">
         </span>
         <summary class="campaign-summary">
             <span class="name">EnTrend'de Elbise Festivali</span>
         </summary>
     </a>
 </article>

 <article class="component-item">
     <a href="">
         <span class="image-container">
             <img src="resimler/componentaksesuar.jpg" alt="EnTrend'de Aksesuar Festivali">
         </span>
         <summary class="campaign-summary">
             <span class="name">EnTrend'de Aksesuar Festivali</span>
         </summary>
     </a>
 </article>

 <article class="component-item">
     <a href="">
         <span class="image-container">
             <img src="resimler/pijamafestivali.jpg" alt="EnTrend'de Pijama Festivali">
         </span>
         <summary class="campaign-summary">
             <span class="name">EnTrend'de Pijama Festivali</span>
         </summary>
     </a>
 </article>


 <article class="component-item">
     <a href="">
         <span class="image-container">
             <img src="resimler/çocukürünleri.jpg" alt="EnTrend'de Çocuk Giyim">
         </span>
         <summary class="campaign-summary">
             <span class="name">EnTrend'de Çocuk Giyim</span>
         </summary>
     </a>
 </article>

 <article class="component-item">
     <a href="">
         <span class="image-container">
             <img src="resimler/componentayakkabı.jpg" alt="EnTrend'de Ayakkabı ve Çanta">
         </span>
         <summary class="campaign-summary">
             <span class="name">EnTrend'de Ayakkabı ve Çantalar</span>
         </summary>
     </a>
 </article>


</div>

<!--Slider Kısmı-->


<section class="product">
    <h2 class="product-category">Süper Fiyat</h2>

    <button class="pre-button">
        <i class="fa-solid fa-chevron-left" style="color: #000000;"></i>
    </button>

    <button class="next-button">
        <i class="fa-solid fa-chevron-right" style="color: #000000;"></i>
    </button>

    <div class="product-container">
        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">10% İndirim</span>
                <img src="resimler/süper1.jpg" class="product-thumb" alt="">
            </div>

            <div class="product-info">
                <h2 class="product-brand">Soundpeats</h2>
                <a href="#"><p class="product-description">Soundpeats Capsule3 Pro Hi-Res Bluetooth Kulaklık</p></a> 
                <span class="price">1.519.00TL</span>
                <span class="actual-price">1549.00TL</span>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">10% İndirim</span>
                <img src="resimler/süper2.jpg" class="product-thumb" alt="">
            </div>

            <div class="product-info">
                <h2 class="product-brand">Draema</h2>
                <a href="#"><p class="product-description">Draema D10S Plus Akıllı Robot Süpürge</p></a>
                <span class="price">16.499.00TL</span>
                <span class="actual-price">16.677.00TL</span>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">10% İndirim</span>
                <img src="resimler/süper3.jpg" class="product-thumb" alt="">
            </div>

            <div class="product-info">
                <h2 class="product-brand">Regal</h2>
                <a href="#"><p class="product-description">Regal Nf 30010 252 Lt No-Frost Buzdolabı</p></a>
                <span class="price">9.099.00TL</span>
                <span class="actual-price">9.200.00TL</span>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">10% İndirim</span>
                <img src="resimler/süper4.jpg" class="product-thumb" alt="">
            </div>

            <div class="product-info">
                <h2 class="product-brand">Xiaomi</h2>
                <a href="#"><p class="product-description">Xiaomi Redmi Note 12 Pro 256 GB 8 GB Ram</p></a>
                <span class="price">12.299.00TL</span>
                <span class="actual-price">12.789.00TL</span>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">10% İndirim</span>
                <img src="resimler/süper5.jpg" class="product-thumb" alt="">
            </div>

            <div class="product-info">
                <h2 class="product-brand">Vestel</h2>
                <a href="#"><p class="product-description">Vestel 65QA9700 65" 164 Ekran 4K Ultra HD Android Smart QLED TV</p></a>
                <span class="price">20.425.00TL</span>
                <span class="actual-price">21.526.00TL</span>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">10% İndirim</span>
                <img src="resimler/süper6.jpg" class="product-thumb" alt="">
            </div>

            <div class="product-info">
                <h2 class="product-brand">Roborock</h2>
                <a href="#"><p class="product-description">Roborock S8 Sonic Mopping Akıllı Robot Süpürge S8 Beyaz</p></a> 
                <span class="price">20.999.00TL</span>
                <span class="actual-price">22.149.00TL</span>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">10% İndirim</span>
                <img src="resimler/süper7.jpg" class="product-thumb" alt="">
            </div>

            <div class="product-info">
                <h2 class="product-brand">Apple</h2>
                <a href="#"><p class="product-description">iPhone 14 Pro Max 256 GB</p></a> 
                <span class="price">24.999.00TL</span>
                <span class="actual-price">25.749.00TL</span>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">10% İndirim</span>
                <img src="resimler/süper8.jpg" class="product-thumb" alt="">
            </div>

            <div class="product-info">
                <h2 class="product-brand">Monster</h2>
                <a href="#"><p class="product-description">Monster Tulpar Intel Core I7  Oyun Bilgisayarı</p></a> 
                <span class="price">36.599.00TL</span>
                <span class="actual-price">38.749.00TL</span>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">10% İndirim</span>
                <img src="resimler/süper9.jpg" class="product-thumb" alt="">
            </div>

            <div class="product-info">
                <h2 class="product-brand">Dyson</h2>
                <a href="#"><p class="product-description">Dyson Supersonic™ Saç Kurutma Makinesi</p></a> 
                <span class="price">12.999.00TL</span>
                <span class="actual-price">13.749.00TL</span>
            </div>
        </div>

    </div>

</section>

<script src="script.js"></script>


<!--Component List 3 Kısmı-->


<div class="component-list2">

    <article class="component-item">
        <a href="">
            <span class="image-container">
                <img src="resimler/evürünleri.jpg" alt="EnTrend'de Ev Ürünleri">
            </span>
            <summary class="campaign-summary">
                <span class="name">EnTrend'de Ev Ürünleri</span>
            </summary>
        </a>
    </article>

    <article class="component-item">
     <a href="">
         <span class="image-container">
             <img src="resimler/okuladönüş.jpg" alt="EnTrend'de Okula Dönüş">
         </span>
         <summary class="campaign-summary">
             <span class="name">EnTrend'de Okula Dönüş</span>
         </summary>
     </a>
 </article>

 <article class="component-item">
     <a href="">
         <span class="image-container">
             <img src="resimler/componentiphone.jpg" alt="EnTrend'de İphone">
         </span>
         <summary class="campaign-summary">
             <span class="name">EnTrend'de İphone</span>
         </summary>
     </a>
 </article>

 <article class="component-item">
     <a href="">
         <span class="image-container">
             <img src="resimler/giyimşıklığı.jpg" alt="EnTrend'de Giyim Şıklığı">
         </span>
         <summary class="campaign-summary">
             <span class="name">EnTrend'de Giyim Şıklığı</span>
         </summary>
     </a>
 </article>


 <article class="component-item">
     <a href="">
         <span class="image-container">
             <img src="resimler/lüksmarkalar.jpg" alt="EnTrend'de Lüks Markalar">
         </span>
         <summary class="campaign-summary">
             <span class="name">EnTrend'de Lüks Markalar</span>
         </summary>
     </a>
 </article>

 <article class="component-item">
     <a href="">
         <span class="image-container">
             <img src="resimler/componentkişiselbakım.jpg" alt="EnTrend'de Kişisel Bakım">
         </span>
         <summary class="campaign-summary">
             <span class="name">EnTrend'de Kişisel Bakım</span>
         </summary>
     </a>
 </article>

</div>


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



