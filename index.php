<?php
  include('inc/SimpleImage.php');
  try {
    $urlImagem = urldecode($_GET["img"]);

    //$urlImagem = "https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xfa1/v/t1.0-9/10620702_742695012450759_5981829922111137271_n.png?oh=73d6af630e9525b7633cfd1f26092dc3&oe=54BCC766&__gda__=1422017104_66c10c26b11ae7d9891d7be3d2c2a71f";
 //   $urlImagem = "https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpa1/v/t1.0-1/c0.4.632.632/1462926_10202240717166994_1594140528_n.jpg?oh=bb192d2f84714c7311c55017b41817fc&oe=5488F654&__gda__=1420962321_43532cce8c08b259de13da8600249648";
    $hashtag = $_GET["hash"] ? $_GET["hash"] : "yeswequero";
    $hashtag = strtoupper($hashtag);
    $hashtag = "#".str_replace("#","",$hashtag);

    $img_original = new abeautifulsite\SimpleImage($urlImagem);

    $img_original->brightness(30)->contrast(-100)->smooth(20)->contrast(-100)->smooth(10)->contrast(-100)->blur()->sepia()->desaturate()->colorize('#00FF00', .4);

    $width = $img_original->get_width();
    $height = $img_original->get_height();

    $img_original->overlay("blocoverde.jpg", 'bottom', 1, 0, 0);
    $img_original->text($hashtag, './BebasNeue Bold.ttf', 60, '#FFFFFF', 'bottom', 0, -27);
    $img_original->output();

  } catch(Exception $e) {
      echo 'Error: ' . $e->getMessage();
  }
?>