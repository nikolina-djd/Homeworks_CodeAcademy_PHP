<?php
if(isset($_POST['name']) && !empty ($_POST['name'])){
    $day = strtolower($_POST['name']);
   
    if($day === "monday") {
        $showmessage = 'Laugh on Monday, laugh for danger.';
    } elseif($day === "tuesday"){
        $showmessage = "Laugh on Tuesday, kiss a stranger.";
    } elseif($day==="wednesday") {
        $showmessage = "Laugh on Wednesday, laugh for a letter.";
    } elseif($day === "thursday") {
        $showmessage = "Laugh on Thursday, something better.";
    } elseif($day === "friday") {
        $showmessage = "Laugh on Friday, laugh for sorrow.";
    } elseif($day === "saturday"){
        $showmessage = "Laugh on Saturday, joy tomorrow.";
    } elseif($day === "sunday"){
        $showmessage = "Have a rest on Sunday, sleep more!";
    } else {
        $showmessage = "Please enter a day of the week!";
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

<h3>Days of the week</h3>
<?php if(!isset($day)) :?>
<p>Please enter a day of the week</p>

<form action = " " method ="POST"> 
<div>
 <input type = "text" name="name">
</div>
<button>Go</button>
<?php else :?>
    <h3><?php echo $showmessage; ?> </h3>
<?php endif; ?> 
</form>

</body>
</html>