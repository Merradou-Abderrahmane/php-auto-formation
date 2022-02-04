<?php
if($_POST['name'] || $_POST['email'] || $_POST['question'] || $_POST['message'] ) {

    echo "Welcome :" ." " .$_POST['name'] ."<br />";
    echo"<br />";
    echo "Your email is :" ." " .$_POST['email'] ."<br />";
    echo"<br />";
    echo "Your question is :" ." " .$_POST['question'] ."<br />";
    echo"<br />";
    echo "You send the following message :" ." " .$_POST['message'] ."<br />";
}
?>