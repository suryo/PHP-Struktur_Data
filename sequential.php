<?php
$a = array(73, 29, 49, 70, 17, 5, 10, 20, 85);

echo "isi dari count a adalah ".count($a);
echo "<br>";
for($i = 0; $i < count($a); $i++)  
    { 
       echo "isi array a ke ".$i." : ".$a[$i]; 
       echo "<br>";
    }

//  for($d = 0; $d <= 10; $d=$d+2)
//  {
//      echo "isi dari d adalah = ".$d;
//      echo "<br>";
//  }   

echo "ini sequential search";
echo "<br>";

//misal saya mencari angka 49 dari array a
$cari = 17;
echo "angka yang anda cari adalah ".$cari;
echo "<br>";
$kucing = "meong";
for($i = 0; $i < count($a); $i++)  
    { 
        $kucing = "takut guk guk";
        if ($a[$i] == $cari)
        {
        echo $a[$i]." ";
        echo "ketemu";
        echo "<br>";
        break;
        }
        else
        {
        echo $a[$i]." ";
        echo "tidak ketemu";
        echo "<br>";
        }
    }
//echo $kucing;




?>