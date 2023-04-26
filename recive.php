<?php   
 include 'config1.php';  
 $query = "select * from records where accept IS NULL ";  
 $run = mysqli_query($conn,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
       
      <title>Delete Data From Database in PHP</title>  
      <link rel="stylesheet"  href="recive.css">  
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    
 </head>  
 <body>  
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Medicine</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="donate.php">Donate Medicine</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>
  </div>
</nav>
 <header></header>  
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading">  
           <th>ID</th>  
           <th>Medicine Name</th>  
           <th>Quantity</th>  
           <th>Email</th>  
           <th>Address</th>  
           <th>MObile-no</th>  
           <th>Expiry-Date</th>  
           <th>want to buy</th>  
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                          <td>".$i++."</td>  
                               <td>".$result['name']."</td>  
                               <td>".$result['qty']."</td>  
                               <td>".$result['email']."</td>  
                                <td>".$result['address']."</td>  
                               <td>".$result['mobile']."</td>  
                               <td>".$result['date']."</td>  
                               <td><a href='delete.php?id=".$result['id']."' id='btn'>Buy now</a></td>  
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  
 </body>  
 </html>  