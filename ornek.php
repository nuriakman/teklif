<?php

  if(isset($_POST["formadi"])) {
    echo "<h1>Formdan Gelen Bilgiler:</h1>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo "<br><hr><br><br><br><br><br>";
  }

?>
<!DOCTYPE html>
<html>
<body>


<style>
  h1 {color: darkgreen; font-size: 50px; margin-top: 60px;}
  h2 {color: darkred;   font-size: 30px; margin-top: 60px;}
  body {font-size: 20px; margin: 1% 10%; line-height: 30px;}
  textarea {width: 600px; height: 150px;}
  input[type=text] {width: 300px;}
  .etiket {width: 250px; display:inline-block;}
</style>


<form action="" method="POST">

  <?php
    $BASLIK = 'Banyo Tadilatı';
    $IsNo = 1;

    $Soru1 = 'Banyo kaç metrekare?';
    $Soru2 = 'Hangi tadilatlar yapılacak';
    $Soru3 = 'Adınız, email adresiniz, telefonunuz';
    $Soru4 = 'Notlar / Açıklamalar';

    $Cevap1='5
    10
    15
    20
    25
    30';

    $Cevap2='Küvet
    Duşakabin
    Duvarlara Fayans
    Yerlere Fayans';

    $Cevap3='Adınız
    ePosta Adresiniz
    Telefonunuz';

    $Cevap4='Notlar / Açıklamalar';


    // İŞ ADINI YAZDIRALIM:
    echo "<h1>$BASLIK</h1>";


    // SORU 1 İçin HTML Üretme
    $SoruNo=1;
    $SoruTuru=1; // Radio
    echo "<h2>$Soru1</h2>\n";
    $Secenekler = explode("\n", $Cevap1); // Kullanılan sisteme göre \n veya \r\n olabilir.
    $SECIM = 0;
    foreach($Secenekler as $key => $value) {
      $value = trim($value);
      echo "<p><input type='radio' name='{$IsNo}_{$SoruTuru}_{$SoruNo}_{$SECIM}' value='$value'>$value</p>\n";
    }


    // SORU 2 İçin HTML Üretme
    $SoruNo=2;
    $SoruTuru=2; // Checkbox
    echo "<h2>$Soru2</h2>\n";
    $Secenekler = explode("\n", $Cevap2); // Kullanılan sisteme göre \n veya \r\n olabilir.
    foreach($Secenekler as $SECIM => $value) {
      $value = trim($value);
      echo "<p><input type='checkbox' name='{$IsNo}_{$SoruTuru}_{$SoruNo}_{$SECIM}' value='$value'>$value</p>\n";
    }

    // SORU 3 İçin HTML Üretme
    $SoruNo=3;
    $SoruTuru=3; // Input
    echo "<h2>$Soru3</h2>\n";
    $Secenekler = explode("\n", $Cevap3); // Kullanılan sisteme göre \n veya \r\n olabilir.
    foreach($Secenekler as $SECIM => $value) {
      $value = trim($value);
      echo "<p><b class='etiket'>$value : </b><input type='text' name='{$IsNo}_{$SoruTuru}_{$SoruNo}_{$SECIM}' value=''></p>\n";
    }

    // SORU 3 İçin HTML Üretme
    $SoruNo=4;
    $SoruTuru=4; // textarea
    echo "<h2>$Soru4</h2>\n";
    $Secenekler = explode("\n", $Cevap4); // Kullanılan sisteme göre \n veya \r\n olabilir.
    foreach($Secenekler as $SECIM => $value) {
      $value = trim($value);
      echo "<p><b>$value : </b><br><textarea name='{$IsNo}_{$SoruTuru}_{$SoruNo}_{$SECIM}'></textarea></p>\n";
    }

    ?>

    <input type="hidden" name="formadi" value="form1">
    <input type="submit" value="GÖNDER !" style="font-size: 20px; ">

</form>


</body>
</html>
