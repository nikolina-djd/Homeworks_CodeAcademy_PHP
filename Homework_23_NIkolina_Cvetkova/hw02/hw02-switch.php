<?php
if(isset($_POST['day'])) {
    $day = $_POST['day'];
    switch ($day) {
        case "Monday":
            $showmessage ='Laugh on Monday, laugh for danger.';
            break;
         case "Tuesday":
            $showmessage ="Laugh on Tuesday, kiss a stranger.";
            break;
        case "Wednesday":
            $showmessage ="Laugh on Wednesday, laugh for a letter.";
            break;
        case "Thursday":
            $showmessage ="Laugh on Thursday, something better.";
            break;
        case "Friday":
            $showmessage ="Laugh on Friday, laugh for sorrow.";
            break;
        case "Saturday":
            $showmessage ="Laugh on Saturday, joy tomorrow.";
            break;
        case "Sunday":
            $showmessage = "Have a rest on Sanday, sleep more!";
            break;
        case "":
            $showmessage =  "Please select day of the week!";
            break;
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
<h2>Pick a day</h2>
<div>
<?php if(!isset($day)) :?>
<form method="post" action="">
  <p>Please choose a day:</p>
  <select name="day">
    <option selected value=""></option>
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
    <option value="Saturday">Saturday</option>
    <option value="Sunday">Sunday</option>
  </select>
  </div>
  <div>
  <button>Go</button>
  </div>
<?php else: ?>
    <h2><?php echo $showmessage; ?></h2>
    <button onclick="document.location = 'hw02-switch.php'">Back</button>
  <?php endif; ?>
</form>

    
</body>
</html>