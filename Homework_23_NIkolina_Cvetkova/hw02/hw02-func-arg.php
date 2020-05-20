<?php

function ckBox(){
  $args=func_get_args();
  foreach ($args as $a){
    echo "<input type=\"checkbox\" name=\"weather[]\" value=\"$a\" />" .
    ucwords($a). "<br />\n";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>How's your weather now?</h2>
<h2>With function</h2>
<?php
if (!isset($_POST['submit'])){
?>
<form method="post" action="">
<p>Please enter your information:</p>
City: <input type="text" name="city" />
Month: <input type="text" name="month" />
Year: <input type="text" name="year" />
<p>Please choose the kinds of weather you experienced from the list below.<br />
Choose all that apply. </p>
<?php
  ckBox('sunshine', 'clouds', 'rain', 'hail', 'sleet', 'snow', 'wind', 
  'cold', 'heat');
?>
<input type="submit" name="submit" value="Go" />
</form>
<?php
}else{
$userarr = array(
  $_POST['city'],
  $_POST['month'],
  $_POST['year']
);
echo "In $userarr[0] in the month of $userarr[1] $userarr[2], 
you observed the following weather:<br /> <ul>";
$weather = $_POST['weather'];
foreach($weather as $w){
  echo "<li>" . ucwords($w) . "</li>\n";  
}
echo "</ul>";
}
?>
    
</body>
</html>