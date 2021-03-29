<?php
/* 
*PESAN TERSEMBUNYI
*coba deh habiskan waktu kalian buat belajar 100 baris coding di bawah ini sebentar ajah.
*lupakan sementara urusan asmara, fokus kan sejenak dengan tujuan belajar
*bodo amat sama pacar yang sok mengekang kebebasan bercoding
*sok nangis minta perhatian, padahal tau kita ini masih berjuang dengan impian
*mereka bukan pasangan hidup yang sudah sah, kenapa kita harus rela susah susah
*please..... tahan dulu urusan percintaan
*tunggu kalian benar benar siap
*dan...ketika masa itu telah tiba, ketika 4 tahun telah terlewati
*gelar sarjana dan pekerjaan yang mapan sudah diraih
*saat nya kalian bilang ke calon mertua...
*titik koma aja kuperhatikan, apalagi anak bapak..
*==saya terima nikahnya dia binti anu dengan mas kawin saham microsoft 51%....sahhhhhh==
*PESAN INI DIPERSEMBAHKAN OLEH : GUWE YANG PERNAH BUANG WAKTU SAMA PACAR
 */

//deklarasi batasan array
$limit = 2;
function pembukaan(){
    echo "Hari ini kita belajar stack dengan PHP";
    echo "<br>";
  }

function pop($array = array()){
    //ini method pop-untuk mengeluarkan isi data terakhir
    array_pop($array);
    return $array;
  }

function push($array = array(),$isi,$limit){
    //ini method push-untuk memasukkan data
    if (count($array) <= $limit)
    {
        array_push($array,$isi);
        return $array;
    }
    else
    {
        echo '<script language="javascript">';
        echo 'alert("array sudah penuh")';
        echo '</script>';
    }
    
  }

function peek($array = array(), $limit){
    //ini method peek-untuk melihat data paling atas
    if (count($array) < $limit)
    {
        $index_atas = count($array);
        $data_atas = $array[$index_atas-1];
        return $data_atas;
    }
    else
    {
        echo '<script language="javascript">';
        echo 'alert("array sudah penuh")';
        echo '</script>';
    }
   
  } 

function isEmpty($array = array()){
    return empty($array);
  }

//baris code dibawah ini merupakan salah satu contoh menjalankan function
pembukaan();
//berikut adalah code untuk deklarasi variabel array dengan nama a
$a = array();
//array a index ke 0 diisi dengan 1
$a[0] = 1;
//array a index ke 1 diisi dengan 2
$a[1] = 2;

//menjalankan method push pada array a
$a = push($a, 3, $limit);
//melakukan cek data teratas pada array dengan method peek
$data_teratas = peek($a, $limit);
//menampilkan data teratas
echo $data_teratas;

//cek apakah array a kosong atau tidak, dengan memanggil method isEpty untuk melakukan pengecekan
if (isEmpty($a)){
    //menampilkan pesan array kosong ketika array kosong
    echo "array kosong";
}
else
{
    //menampilkan pesan array terisi ketika array tidak kosong
    echo "array terisi";
}

$a = pop($a);
var_dump($a);


?>