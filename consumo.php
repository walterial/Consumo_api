<?php
 function getdata(){
   $url='https://images-api.nasa.gov/search?q=apollo%2011';
    $json = file_get_contents($url);


    return  json_decode($json, true);

   

 }


   