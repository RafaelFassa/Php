<?php
$nm = $_GET['nm'];

switch ($nm){

   case $nm %2 == 0: 
      echo "par";
      break;

   default:
      echo "impar";
     break;
   }
?>