<?php
$a = array(73, 29, 49, 70, 17);

echo "isi dari count a adalah ".count($a);
echo "<br>";
for($i = 0; $i < count($a); $i++)  
    { 
       echo "isi array a ke ".$i." : ".$a[$i]; 
       echo "<br>";
    }

 for($d = 0; $d <= 10; $d=$d+2)
 {
     echo "isi dari d adalah = ".$d;
     echo "<br>";
 }   

echo "ini sequential search";
echo "<br>";

//misal saya mencari angka 49 dari array a

// for($i = 0; $i < count($a); $i++)  
//     { 
//         if ($a[$i] == 49)
//         {

//         }
//         else
//         {

//         }
    //    echo "isi array a ke ".$i." : ".$a[$i]; 
    //    echo "<br>";
    // }





?>