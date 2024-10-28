<?php
echo "While Loop: ";
$x = 0;
while($x<11){
    echo $x;
    $x++;
}
echo "<br>","Do... While Loop: ";
do {
    $a = (int)readline("Enter a number greater than 0: ");
}while ($a<0);
echo "<br>","For Loop: ";
$c = 5;
for($b=1;$b<11;$b++){
    echo "<br>",$c*$b;
}
echo "<br>","ForEach Loop: ";
$details = array("Michael",20,85);
foreach($details as $detail){
    echo "<br>",$detail;
}
echo "<br>","For Loop w/ Break: ";
$c = 5;
for($b=1;$b<11;$b++){
    echo "<br>",$c*$b;
    if($c*$b%7==0){
        break;
    }
}
echo " is divisible by 7";
?>
