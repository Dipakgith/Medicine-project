<?php   
 include 'config1.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "update `records` set accept='succesfull' WHERE id = '$id'";  
      $run = mysqli_query($conn,$query); 
      if (mysqli_affected_rows($conn)>0) {
        $delete_success = true;
      }
       
           header('location:recive.php');  
           if ($delete_success) {
            echo "Row deleted successfully!";
          }
 }
 ?>  