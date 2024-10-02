<?php

session_start();

try {
    $db = new PDO("mysql:host=localhost;dbname=project", "root", "root");
} catch ( PDOException $e ){
    print $e->getMessage();
}

if($_POST){
    // Post ettirdik
$isim= $_POST["isim"];
$soyisim= $_POST["soyisim"];
$eposta= $_POST["eposta"];
$şifre= $_POST["şifre"];


    $query = "SELECT * FROM `users` order by id";
    $goster = $db->prepare($query);      //aynı sorgunun tekrarlanması
    $goster->execute(); 
    
    $result = $db->prepare("INSERT INTO `users` SET isim=?,soyisim=?,eposta=?,şifre=?");
    $result->execute(array($isim,$soyisim,$eposta,$şifre));

    echo "<script>alert('Başarılı Bir Şekilde Üye Oldunuz');document.location='loginpage.php'</script>";

}else{
        echo 'Başarısız İşlem';
}


?>