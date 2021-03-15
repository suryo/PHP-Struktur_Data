<?php
//buat sebuah variabel sebagai penampung kalimat
$tex = "suryo";
echo "Isi text adalah : ".$tex;
echo "<br>";
//coding untuk mengambil part text dari index ke 0 sebanyak 1 huruf
echo "Isi text 0 -> 1 : ".substr($tex,0,1);
echo "<br>";
//coding untuk mengambil part text dari index ke 0 sebanyak 2 huruf
echo "Isi text 0 -> 2 : ".substr($tex,0,2);
echo "<br>";
//coding untuk mengambil part text dari index ke 1 sebanyak 1 huruf
echo "Isi text 1 -> 1 : ".substr($tex,1,1);
echo "<br>";
//coding untuk mengambil panjang text
echo "panjang text : ".strlen($tex);
echo "<br>";
//membuat sebuah penampung array
$kalimat = array();
//buat sebuah perulangan untuk mengambil huruf dari belakang
for($i = strlen($tex)-1; $i >=0; $i--)  
    { 
        array_push($kalimat,substr($tex,$i,1)); 
    }
echo "<br>"."hasil dari pembalikan text: ";
//tampilkan isi dari array
for($i = 0; $i < strlen($tex); $i++)  
    { 
       echo $kalimat[$i]; 
    }

?>