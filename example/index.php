<?php
/**
 *    Author : Mahmoud Eskandari
 *    Email  : info@webafrooz.com
 *    Website: http://webafrooz.com
*/
  include './../IranSystemConvertor.php';
  use webafrooz\IranSystem;
  
  //TO Iran System Example
  file_put_contents("IranSystem.txt",IranSystem::ToIranSystem(file_get_contents('UTF-8.txt')));
  
  //TO Utf-8 Example
  echo IranSystem::FromIranSystem(file_get_contents('IranSystem.txt'));
?>
