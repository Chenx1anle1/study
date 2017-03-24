<?php
for($i=1;$i<=54;$i++)
{
    for($j=1;$j<=7;$j++)
    {
        $week[] = $j;
    }
}
// var_dump($week);
$count = 0;
foreach ($week as $key => $val) {
    if($count == 0 || $count == 1){
        echo '<hr>'.$val;
        $count++;
    } else {
        $count = 0;
    }

}