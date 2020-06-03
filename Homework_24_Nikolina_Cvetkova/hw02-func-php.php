<?php 

    const DAYS_IN_THE_MONTHS = [
        "January" => "31",
        "February" => "28 days, if leap year 29",
        "March" => "31",
        "April" => "30",
        "May" => "31",
        "June" => "30",
        "July" => "31",
        "August" => "31",
        "September" => "30",
        "October" => "31",
        "November" => "30",
        "December" => "31"
    ];
    
    function makeOptions(){
        foreach (DAYS_IN_THE_MONTHS as $key => $value) {
            echo "<option value='$key'>$key</option>";
        }
    };

    function makeSelect(){
            echo "<h2>Days of the month</h2>";
            echo "<h3><b>Please choose a month.</b></h3>";
            echo "<br>";
            echo "<form action='' method='POST'>";
            echo "<select name='months' id='months'>";
            echo makeOptions();
            echo "</select>";
            echo "<br>";
            echo "<button type='submit' name='submitt'>Go</button>";
            echo "</form><br>";
            echo response();
     
    };

    function response(){
        if (isset($_POST['months'])) {
            $selected = $_POST["months"];
            echo "<p>".$selected." has: ".DAYS_IN_THE_MONTHS[$selected]." days </p>";
    
        }
        
     };
        

?>