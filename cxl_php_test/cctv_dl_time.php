<?php
$time = 86400;
$url = 'http://tv.cctv.com/live/cctv2/index.shtml?stime=';

date_default_timezone_set('Asia/Shanghai');

for($i = 0;$i <= 20;$i++)
{
$stime = 1489504200-$i*$time;
$etime = 1489507140-$i*$time;
$curl = $url.$stime.'&etime='.$etime.'&type=lbacks';
echo '<hr>';
echo '<a target="blank_" href="'.$curl.'">'.date('Y-m-d H:i:s', $stime).'</a>';
}

$str = '0314 10; 0313 9; 0309 8; 0308 7; 0306 6; 0302 5; 0301 4;';

