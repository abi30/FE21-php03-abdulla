


      
<?php 

require_once 'db_connect.php';
$id = $_GET['id'];
$sql ="SELECT * FROM dishes WHERE id={$id}";
// $result=mysqli_query($connect,$sql);
$result= mysqli_query($connect, $sql) or die("Query Unsuccessful");




 $showFormular = true;
if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $image = $_POST['img'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $des= $_POST['description'];
    $sql = "UPDATE dishes SET img = '$image',name = '$name',price = '$price',description = '$des',description = '$des' where id =$id" ;


    if(mysqli_query($connect,$sql)==true){
    // if($connect->query($sql) === TRUE) {

      echo "<h4>New Record Successfully updated!</h4><hr>" ;
     echo "New update created <br>
     <a href='index.php'>Home</a>";
     $showFormular = false;
 }else  {
     echo "Error " . $sql . ' ' . $connect->connect_error;
 
 } 
    mysqli_close($connect);

}

if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result)){

if($showFormular){

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

}



?>



