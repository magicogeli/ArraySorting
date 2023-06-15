<?php

function sorting(&$Array, $arraySize) 
{
  $arrTemp;
  for($a=0; $a<$arraySize; $a++) 
  {
    for($b=0; $b<$arraySize-$a-1; $b++) 
    {
      if($Array[$b]>$Array[$b+1]) 
      {
        $arrTemp = $Array[$b];
        $Array[$b] = $Array[$b+1];
        $Array[$b+1] = $arrTemp;
      }
    }
  }
}

$unsortedArray = array(5,4,3,10,12,-1,2);
$arraySize = sizeof($unsortedArray); 
$x = $arraySize;

//var_dump($unsortedArray);
sorting($unsortedArray, $arraySize);
//var_dump($unsortedArray);

if(($arraySize % 2) == 0)
{   
    echo nl2br("The medians are ".$unsortedArray[($x/2)]. " and ". $unsortedArray[($x/2)-1]."\n");
} 
else{
    echo nl2br("The median is ".$unsortedArray[($x/2)]."\n");
}
echo "\nThe largest value is ".$unsortedArray[($x-1)]; 

?>
