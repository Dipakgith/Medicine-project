<?php
include("config1.php");
?>

<!DOCTYPE html>
<html lang="en">
<title>donate page></title>
    <link rel="stylesheet" href="donatePage.css" />
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
        <a class="nav-link" href="recive.php">Recive Medicine</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>
  </div>
</nav>
<div class="forBGC">
      <div class="main">
        <div class="discriptive">
          <h2 id="head">Stop medication waste. Save lives.</h2>
        </div>

        <div class="disc2">
          <p>
            With millions of peoples unable to afford their prescriptions each
            year, how can we let perfectly good medicine go unused? Up to $11
            billion in unopened, unexpired medicine gets destroyed each year.
            With your help, we can turn that waste into life-saving care for
            people who need it.
          </p>
        </div>
      </div>

  <form action=" " method="POST">
  <div class="ready">Ready To Donate ?</div>

<div class="details">
  <div>Medicine Name <br /><br /><input type="text" class="len" name="name"/></div>

  <div>
    Quantity <br /><br /><input placeholder="" type="text" name="qty" class="len" />
    <br />
  </div>

  <div>
    My Email <br />
    <br /><input
      placeholder="Email id"
      class="len"
      class="incHeight"
      type="text"
      name="email"
    />
  </div>

  <div>
    My Address <br /><br />
    <input class="len" class="incHeight" type="text" name="address" />
  </div>

  <div>
    mobile no. <br /><br />
    <input class="len" type="tel" name="mobile" />
  </div>

  <div>
    Expiration Date <br /><br />
    <input class="len" placeholder="" type="date" name="date" /> <br />
    <button type="submit" name="submit" class="btn btn-primary">submit</button>
  </div>
</div>
</form>

<?php
if(isset($_POST["submit"]))
{

  $name=$_POST["name"];
  $qty=$_POST['qty'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $mobile=$_POST['mobile'];
  $date=$_POST['date'];
  
  $qry=mysqli_query($conn,"insert into records(name,qty,email,address,mobile,date) values('$name','$qty','$email','$address','$mobile','$date')");
  // $sql="insert into records values('$name','$qty','$address','$date')";

 
}

?>

  
</body>
</html>