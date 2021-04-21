<?php 
require_once 'db_connect.php';
if(isset($_GET["id"])){
    $id=$_GET["id"];


    $sql="DELETE FROM dishes WHERE id =$id";
    if(mysqli_query($connect,$sql)==true){
        echo "Record deleted <br>
        <a href='index.php'>Home</a>";

    }


}

?>