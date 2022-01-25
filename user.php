<?php 
$data = array(
  {
    "id" => 1,
    "name" => "Json",
    "address" => "123/44"
  },
  {
    "id" => 2,
    "name" => "Divi",
    "address" => "123/33"
  }
        );
echo jsonencode($data);
