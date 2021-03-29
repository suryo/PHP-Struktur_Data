<?php
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
    //echo "ini method push-untuk memasukkan data";
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
    //echo "ini method peek-untuk melihat data paling atas";
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