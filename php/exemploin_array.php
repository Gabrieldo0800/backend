<?php
// declarei a array $frutas
$frutas = array("maca", "banana", "laranja");
// se a verificacao encrontrar o item bananas vai mostrar que ela existe se nao, nao existe
if (in_array("banana", $frutas)) {
    echo "banana esta na lista";

}else{
    echo"banana nao esta na lista";
}
?>