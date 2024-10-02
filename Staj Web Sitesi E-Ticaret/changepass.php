<?php

session_start();

try {
  $db = new PDO("mysql:host=localhost;dbname=project", "root", "root");
} catch ( PDOException $e ){
  print $e->getMessage();
}

if(!empty($_POST['submit'])){
  
  $msifre = $_POST['msifre'];
  $ysifre = $_POST['ysifre'];
  $tsifre = $_POST['tsifre'];
  

   if($ysifre==$tsifre){

     $query  = $db->query("SELECT şifre FROM `users` WHERE şifre='$msifre'",PDO::FETCH_ASSOC);
     $query->execute();
     $row_count =$query->fetchColumn();
    
     if($row_count>0){
      
      $query = $db->query("UPDATE users SET şifre = '$ysifre' WHERE şifre='$msifre'",PDO::FETCH_ASSOC);

        echo "<script>alert('Başarıyla Güncellendi.');document.location='indexaccount.php'</script>";

      }else{
      echo "<script>alert('Bu mevcut şifren değil.');document.location='indexaccount.php'</script>";
      }
   }else{
    echo "<script>alert('Şifreler Eşleşmiyor.');document.location='indexaccount.php'</script>";
  }

}else{
  echo "<script>alert('Boş yer kalmamalı.');document.location='indexaccount.php'</script>";
}

?>
