<?php
if (isset($_POST['food']) && is_array($_POST['food'])) {
    $food = implode("、", $_POST["food"]);
    var_dump($food);
}
?>