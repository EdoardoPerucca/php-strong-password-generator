<?php 

function passwordGenerator($characters) 
{
  $array = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!@#$%&*_"';
  return substr(str_shuffle($array), 0, $characters);
}