
 
<?php 

require_once 'db_connect.php';
$sql ="SELECT * FROM dishes";
// $result=mysqli_query($connect,$sql);

$result= mysqli_query($connect, $sql) or die("Query Unsuccessful");
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);

echo "<pre>";
var_dump($rows);
echo "</pre>";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>



<div class="container">
<h1>helloo</h1>
  
<a href="create.php">create new reord</a> <br><br>

<?php 
// echo '<div class="card-group col-12">';
echo '<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3  g-3">';
       $i = 0;
       while($i < count($rows)){


       echo '
       <div class="col text-center">
       <div class="card h-100 w-100 rounded-3  m-3" >
       <img class="card-img-top  m-auto" src="'.$rows[$i]['img'].'">
           <div class="card-body">
               <h5 class="card-title"> Dish:' . $rows[$i]['name'].' </h5>
               <h5 class="card-title"> price:' . $rows[$i]['price'].'€ </h5>
               <p class="card-text">description: ' . $rows[$i]['description'] . '</p>
               <a class="btn btn-primary" href ="delete.php?id='.$rows[$i]['id'].'">delete</a>
               <a class="btn btn-primary" href ="update.php?id='.$rows[$i]['id'].'">update</a>
           </div>
           </div>
       </div>';
       

        $i++;

       }


        echo'</div>';
       ?>

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

 
  </body>
</html>