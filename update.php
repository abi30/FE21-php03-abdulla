


      
<?php 

require_once 'db_connect.php';
$id = $_GET['id'];
$sql ="SELECT * FROM dishes WHERE id={$id}";
// $result=mysqli_query($connect,$sql);
$result= mysqli_query($connect, $sql) or die("Query Unsuccessful");


if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result)){


?>


    <form method="post">
    <input type="hidden" name="id" value= "<?php echo $row['id']; ?>">
    <input type="url" name="img" value= "<?php echo $row['img']; ?>"><br/><br/>
    <input type="text" name="name" value= "<?php echo $row['name']; ?>"><br/><br/>
    
    <input type='number' step='0.01' name="price"  value="<?php echo $row['price'];?>" name='price' /><br/><br/>
    <textarea rows="4" cols="22" name="description" value=""><?php echo $row['description']; ?></textarea> <br/><br/>
    
    <input type="submit"  name="submit" value= "update">
</form>





<?php

}

}



?>



