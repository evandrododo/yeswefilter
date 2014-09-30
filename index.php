<?php
  include('inc/SimpleImage.php');
  try {
    $urlImagem = $_GET['img'];
    $img_original = new abeautifulsite\SimpleImage($urlImagem);

    $img_original->brightness(40)->contrast(-100)->smooth(20)->contrast(-100)->smooth(10)->contrast(-100)->blur()->sepia()->desaturate()->colorize('#00FF00', .4)->output();

  } catch(Exception $e) {
      echo 'Error: ' . $e->getMessage();
  }
?>
