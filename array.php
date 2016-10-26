<?php
$array = array("Julian","Emanuel","Mike","Davide");
natsort($array);
print_r($array);
$anzahl =count($array);
echo "<br>Es hat $anzahl Werte im Array";
$text = array_search('Julian', $array);
echo "Wort befindet sich an $text. Stelle des Array";
?>