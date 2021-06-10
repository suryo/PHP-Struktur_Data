<?php

$data=array(6,5,3,1,8,7,2,4);
print_r($data);
echo "<br>";

function insertion_sort($data){
  $n=count($data);

  echo "jumlah data : " .$n."<br>";


  for ($i = 1;$i<$n;$i++)
  
  
  
  { 
    echo "<br>";
    echo "perulangan : ".$i."<br>";
    
    
    for ($k = $i; $k>0; $k--)
    
    {
      if($data[$k]<$data[$k-1]){

        echo "data ke : ".$k." : ".$data[$k]."ubah" .$data[$k-1]."=hasil ";
        $dummy=$data[$k];
        $data[$k]=$data[$k-1];
        $data[$k-1]=$dummy;
        echo "<br>";
      }
    }
  }
  return $data;
}
print_r($data);
echo "<br>";

$hasil =insertion_sort($data);
print_r($hasil);
?>