<?php

 $ip = "45.10.56.39";     //sadece burayı düzenleyin ,IP adresinizi girin. (enter ip address) (only edit here)

echo verial("https://cache.gametracker.com/components/html0/?host=$ip:27015");


 function verial($giris)
 {

 $c = stream_context_create(
    array(
        "http" => array(
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
        )
    )
);

$giris = file_get_contents($giris, 0, $c);


  preg_match_all('@<div class="info_line_right">(.*?)</div>@s',$giris,$yaz2);
  preg_match_all('@<div class="server_name">(.*?)</div>@s',$giris,$yaz3);
  preg_match_all('@<div class="item_float_right">(.*?)</div>@s',$giris,$yaz1);
  
  
//sunucu ismi   
echo $yaz3[0][0];

//oyuncu sayısı
echo "Oyuncu Sayısı :" . $yaz1[0][3] . "<br>"; 

//gt rank
echo $yaz1[0][4];

//gt linki
echo $yaz1[0][2];

//açık harita
echo $yaz2[0][0];

  
}
?>
