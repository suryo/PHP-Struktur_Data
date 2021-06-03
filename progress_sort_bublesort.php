<?php
echo "//bubble sort<br>";
$data=array(6,5,3,1,8,7,2,4);
print_r($data); 
echo "<br>";
  $n=count($data);
  echo "jumlah data :".$n."<br>";
  $start_time = microtime(true);

  for ($i = 0;$i<$n;$i++)
  {
    echo "<br>";
    echo "perulangan : ".$i."<br>";  
    for ($j = $n-1;$j>$i;$j--){
          if ($data[$j] < $data[$j-1])
          { 
              echo "data ke: ".$j. " : ".$data[$j]." < "."data ke: ".($j-1). " : ".$data[$j-1]." = tukar";
              $dummy=$data[$j];
              $data[$j]=$data[$j-1];
              $data[$j-1]=$dummy;
              echo "<br>";          
            }
            else
            {
                echo "data ke: ".$j. " : ".$data[$j]." < "."data ke: ".($j-1). " : ".$data[$j-1]." = tidak tukar<br>"; 
            }
      } 
      print_r($data); 
      echo "<br>"; 
  }

   // End clock time in seconds
   $end_time = microtime(true);
   // Calculate script execution time
   $execution_time = ($end_time - $start_time);
     
   echo " Execution time of script = ".$execution_time." sec";
 

?>