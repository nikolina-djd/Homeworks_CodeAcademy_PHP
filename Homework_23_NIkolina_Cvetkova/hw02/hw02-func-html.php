<?php
$allmonths =["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$daysInMonths=[31,"28 days, if leap year 29", 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
$monthsAndDays = array_combine($allmonths, $daysInMonths);

if (isset($_POST["months"])) {
    $monthsInYear = $_POST["months"];
     foreach( $monthsAndDays as $key => $value) {
         if($key === $monthsInYear) {
             $month =$key;
             $days = $value;
         }
     }
     $message = "This month of ".$month." has ".$days." days.";
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
<?php if (!isset($monthsInYear )):?>
 <form method="post" action="">
    <h2>Days in a Month</h2>
    <p>Please choose a month:</p>
    <select name="months" >
        <option value="" selected></option>
        <?php  foreach ($monthsAndDays as $month => $value): ?>
            <option value="<?php echo $month ?>"><?php echo $month ?></option>
        <?php endforeach; ?>
    </select>
    <div>
        <button>Go</button>
    </div>
    <?php else : ?>
            <h2><?php echo $message;?></h2>
    <?php endif;?>
</form>

</body>
</html>