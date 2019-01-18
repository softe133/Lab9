<?php
if(isset($_POST["country"])){
    // Capture selected country
    $country = $_POST["country"];
     
    // Define country and city array
    $countryArr = array(
                    "Pakistan" => array("Karachi", "Lahore", "Islamabad","Hyderabad"),
                    "India" => array("Mumbai", "New Delhi", "Bangalore"),
                    "Russia" => array("Moscow", "Kazan", "Volgograd"),
                    "China" => array("Beijing", "Shanghai", "Hong Kong"),
                    "Italy" => array("Rome", "Venice", "Florence")
                );
     
    // Display city dropdown based on country name
    if($country !== 'Select'){
        echo "<br><br>";
        echo "<label>City:</label>";
        echo "<select>";
        foreach($countryArr[$country] as $value){
            echo "<option>". $value . "</option>";
        }
        echo "</select>";
    } 
}
?>