
<!DOCTYPE html>
<html lang="en"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>How is your weather?</h3>
    <h3>With Arrays</h3>
    <p><b>Please enter your information:</b></p>
    <?php if(!isset($_POST["city"]) && !isset($_POST["month"]) && !isset($_POST["year"])) :?>
    <form action="" method="post">
        <b>City: <input type="text" name="city"></b>
        <b>Month:<input type="text" name="month"></b>
        <b>Year: <input type="text" name="year"></b>
        <p><b>Please choose the kind of weather you experienced from the list below. <br/> Choose all that applay</b></p>
        <input type="checkbox" name="ph$weather" value="sanshine">Sanshine<br/>
        <input type="checkbox" name="weatherconditions[]" value="clouds">Clouds<br/>
        <input type="checkbox" name="weatherconditions[]" value="rain">Rain<br/>
        <input type="checkbox" name="weatherconditions[]" value="hail">Hail<br/>
        <input type="checkbox" name="weatherconditions[]" value="sleet">Sleet<br/>
        <input type="checkbox" name="weatherconditions[]" value="snow">Snow<br/>
        <input type="checkbox" name="weatherconditions[]" value="wind">Wind<br/>
        <input type="checkbox" name="weatherconditions[]" value="cold">Cold<br/>
        <input type="checkbox" name="weatherconditions[]" value="heat">Heat<br/>
        <div>
             <button>Go</button>
        </div> 
    <?php endif; ?>
    </form>
    <?php

if(isset($_POST["city"]) && isset($_POST["month"]) && isset($_POST["year"])) {
    $city = $_POST["city"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $userarr = array($city, $month, $year);
    echo "In ".$userarr[0]." in the month of ".$userarr[1]." ".$userarr[2].", you observed the following weather: <br/><ul>";
    if(!empty($_POST["weatherconditions"])) {

        foreach($_POST["weatherconditions"] as $value) {
          echo  "<li>$value <br/></li>\n";
        }
    } echo "<ul>";
}


?>

</body>
</html>