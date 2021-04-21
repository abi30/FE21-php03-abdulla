


      
<?php 

require_once 'db_connect.php';

if (isset($_POST['submit'])) {
   $id = $_GET['id'];
   $image = $_POST['img'];
   $name = $_POST['name'];
   $price = $_POST['price'];
   $des= $_POST['description'];
   $sql = "UPDATE dishes SET img = '$image',name = '$name',price = '$price',description = '$des',description = '$des' where id =$id" ;

//    WHERE id = {$id}

//    $sql = "INSERT INTO dishes (img,name,price,description) VALUES ('$image','$name','$price','$des')";



   if(mysqli_query($connect,$sql)==true){
    // if($connect->query($sql) === TRUE) {

     echo "<h4>New Record Successfully updated!</h4><hr>" ;
    echo "New update created <br>
    <a href='index.php'>Home</a>";
}else  {
    echo "Error " . $sql . ' ' . $connect->connect_error;
}

}

?>

      
 


  
<form method="post">
           <!-- <input type="number" name="id" placeholder= "dish ID"><br/><br/> -->
           <input type="url" name="img" placeholder= "Enter Image URL"><br/><br/>
           <input type="text" name="name" placeholder= "Enter dish's name"><br/><br/>
           
           <input type='number' step='0.01' name="price" value='0.00' placeholder='0.00' name='price' /><br/><br/>
           <textarea rows="2" cols="22" name="description" placeholder= "dish description"></textarea> <br/><br/>
           
           <input type="submit"  name="submit" value= "submit">
       </form>