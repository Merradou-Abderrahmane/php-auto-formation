<?php
if($_POST['name'] || $_POST['age']) {

    echo "Welcome" ." " .$_POST['name'];
    echo "You are" ." " .$_POST['age'] ." " . "Years old.";
}

?>