
<!DOCTYPE html>

<html lang="en">   
<?php

require "consumo.php";

$datos = getdata();

?>

 
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    
      <img src="data:image/png;base64,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" alt="" width="120" height="70" class="d-inline-block align-text-top">
      
      <p class="navbar-brand position-adsoluted start-50" href="#" >
     NASA
</p>
  </div>
</nav>


<div class="container .bg-primary">




<div class="row col  ">
  <h2 class="text-center">Nasa Imagenes</h2>
  </div>

<div class="row d-flex justify-content-center " >
<div class="col-10">



<table class="table table-hover table-primary text-center  ">
  <thead class="table-dark">
    <tr class=""> 
         <th scope="col"> Numero</th>
         <th> Titulo</th> 
         <th> Descripcion</th>
         <th> Imagen</th>
    
    </tr>
   </thead>
   <tbody>
 
   <?php 
    $count= 10;
    for($i=0; $i< $count;$i++){  ?>

   <tr>
    <td scope="row"><?php echo $i+1 ?></td>
    <td><?php echo $datos['collection']['items'][$i]['data'][0]['title'];?></td>
    <td><?php echo $datos['collection']['items'][$i]['data'][0]['description'] ;?></td>
    <td><img src="<?php echo $datos['collection']['items'][$i]['links'][0]['href'];?>"  style="height: auto; width auto;"></td>
    
   </tr>
   <?php  }   ?>
   
    
     
   </tbody>


   
  
  </table>




</div>


</div>


</div>

</body>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>




</html>



