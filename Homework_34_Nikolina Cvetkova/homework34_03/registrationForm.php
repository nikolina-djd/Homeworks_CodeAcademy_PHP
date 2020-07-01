<?php 
include("database.php");
include("selectFunc.php");
//Create array of browsers
$browsers = ["Firefox", "Chrome", "Internet Explorer", "Safari", "Opera", "Other"];
// import Select class

?>
 

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Class Select - Browsers</title>
 </head>
 <body>
 <h2>User Registration - Browser</h2>

 
<?php

 
?>
<form method="post" action="">
<p>Name:<br />
<input type="text" name="name" size="60" />  </p>
<p>Username:<br />
<input type="text" name="username" size="60" /></p>
<p>Email:<br />
<input type="text" name="email" size="60" /></p>
<p>Browser:

<?php

$obj = new Select;
//Set properties.
//The object has the data it needs from the preceding commands.
$obj->setName("browsers");
$obj->setValue($browsers);
//Tell it to make the select field.
$obj->makeSelect();
?>
</p>
<input type="submit" name="submit" value="Go" />
 
</form>


<?php

  if(isset($_POST["submit"])) {
    if(!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['browsers'])) {
  $obj = new Db;
  $firstname = trim($_POST["name"]);
  $userName = trim($_POST["username"]);
  $email = trim($_POST["email"]);
  $browser =trim($_POST["browsers"]);
  $obj->insert($firstname, $userName, $email, $browser);
  $obj->close();

  echo $message = "Thank you submitiing. <br> Your invormation are set in our database: <br> Your name: 
  $firstname <br> Your username: $userName <br> Your email: $email <br>Browser_used: $browser";
  } else {
      echo "<script> alert('Please fill all fields')</script>";
  }
}
 
?>
 </body>
 </html>
 