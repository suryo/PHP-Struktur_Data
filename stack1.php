<?php
/* 
*PESAN TERSEMBUNYI
*coba deh habiskan waktu kalian buat belajar coding-coding di bawah ini 4 tahun ajah.
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

function pop(){
    echo "ini method pop-untuk mengeluarkan isi data terakhir";
    echo "<br>";
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

function top(){
    echo "ini method top";
    echo "<br>";
  }

function isFull($array = array()){
    echo "ini check apakah array penuh";
    echo "<br>";
  } 


pembukaan();

$a = array();
$a[0] = 1;
$a[1] = 2;

$a = push($a, 3, $limit);
$data_teratas = peek($a, $limit);
echo $data_teratas;
if (isEmpty($a)){
    echo "array kosong";
}
else
{
    echo "array terisi";
}
//var_dump($a);




?>