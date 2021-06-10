<?php
echo "//selection sort<br>";
$data=array(6,5,3,1,8,7,2,4);
function selection_sort($data){
print_r($data); 
echo "<br>";
  $n=count($data);
  echo "jumlah data :".$n."<br>";

  for ($i = 0;$i<$n;$i++){
      $k = $i; 
    echo "<br>";
    echo "perulangan : ".$i."<br>";  
    for ($j = $i+1;$j<$n;$j++){
          if ($data[$j] < $data[$k]) $k = $j;
    } 
              echo "data ke: ".$i. " : ".$data[$i]." < "."data ke: ".($i+1). " : ".$data[$i+1]." = tukar";
              $dummy=$data[$i];
              $data[$i]=$data[$k];
              $data[$k]=$dummy;
              echo "<br>";          
            }
            return $data;
      } 
      
      print_r($data);
      echo implode (selection_sort($data));
?>