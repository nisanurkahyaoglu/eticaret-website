<?php

// Veri Tabanı Bağlantısı. 

try {
     $db = new PDO("mysql:host=localhost;dbname=project", "root", "root");
} catch ( PDOException $e ){
     print $e->getMessage();
}

// Veri tabanını kontrol etme

if($_POST){

	    $isim =$_POST["isim"];
	    $soyisim =$_POST["soyisim"];
		$eposta =$_POST["eposta"];
		$şifre =$_POST["şifre"];

		$query  = $db->query("SELECT * FROM `users` WHERE eposta='$eposta' && şifre='$şifre'",PDO::FETCH_ASSOC);

		if ( $say = $query -> rowCount() ){

			if( $say > 0 ){

				if($_POST['eposta']=="admin" && $_POST['şifre']=="1234"  ){

					echo "<script>alert('Admin Paneline Hoşgeldiniz');document.location='adminpage.html'</script>";
				}

				else{

					session_start();
					$_SESSION['isim']=$isim;
					$_SESSION['soyisim']=$soyisim;
					$_SESSION['eposta']=$eposta;
					$_SESSION['şifre']=$şifre;
	
					echo "<script>alert('Başarılı Bir Şekilde Giriş Yaptınız');document.location='loginpage.php'</script>";
				}
			}

	    }else{
			echo "<script>alert('Kullanıcı Adı veya Şifre Hatalı');document.location='indexlogin.html'</script>";
		    }

	    }

?>

