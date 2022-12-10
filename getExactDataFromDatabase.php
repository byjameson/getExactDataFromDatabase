<?php
function loadDataBefore($limit,$db2,$minimum){
  global $baglan;
  global $db;



for(;;){
    $beforeAlgo2 = [];
    $timeCekilenArr = [];
    $yuzdeArr = [];
    $timeArrReal = [];

      $query2 = $baglan->query("SELECT * From $db2 where coin='$db' and profit>=$minimum order by id desc limit $limit");
      while($veri2=$query2->fetch_array()) {


        $beforeAlgo2[] = $veri2[1];
        $timeCekilenArr[] = $veri2[5];
        $yuzdeArr[] = $veri2[3];
        $timeArrReal[] = $veri2[7];

      }

if(count($beforeAlgo2)=="0")
sleep(10);
else
break;
}

return $beforeAlgo2;
}

function loadData($limit,$db2,$minimum){
  global $baglan;
  global $db;


for(;;){
    $beforeAlgo2 = [];
    $timeCekilenArr = [];
    $yuzdeArr = [];
    $timeArrReal = [];

$beforeBeforeAlgo2 = loadDataBefore($limit,$db2,$minimum);
sleep(5);

      $query2 = $baglan->query("SELECT * From $db2 where coin='$db' and profit>=$minimum order by id desc limit $limit");
      while($veri2=$query2->fetch_array()) {


        $beforeAlgo2[] = $veri2[1];
        $timeCekilenArr[] = $veri2[5];
        $yuzdeArr[] = $veri2[3];
        $timeArrReal[] = $veri2[7];

      }

      if($beforeBeforeAlgo2!=$beforeAlgo2)
      continue;


if(count($beforeAlgo2)=="0")
sleep(10);
else
break;
}




}

$ourExactData = loadData($limit,$db2,$minimum);
