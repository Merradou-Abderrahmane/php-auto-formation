<?php
    
    // Syntax [1] For Indexed Arrays
    // foreach ( $array as $value ) {
    //     // Code To Be Executed
    // }
    // Syntax [2] For Associative Arrays
    // foreach ($array as $key => $value ) {
    //     // Code To Be Executed 

    $fruits = array("apple", "banana", "manga", "orange");

    foreach ($fruits as $value){
        echo $value . "<br>";
    }


    $fruits = array(
      1=>  "apple",
      2=>"banana",
      3=>"manga",
      4=>"orange"
    );

    foreach ($fruits as $key => $value){
        echo $key . " => " .$value . "<br>";
    }

// $countries = array(
//     "Eg" => "Egypt",
//     "SA" => "Saudi Arabia",
//     "QA" => "Qatar",
//     "BA" => "Bahrain",
//     "SY" => "Syria",
//     "SU" => "Sudan",
//     "PA" => "Palestine",
// );
// foreach ($countries as $key => $value ) {
//     echo $key ". $value . "<br>";

?>