
<?php

function get_token($size){

    $character = "01234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $random_string = "";

    for($i=0; $i < $size; $i++){

        $index = rand(0,strlen($character)-1);
        $random_string .= $character[$index];

    }
    return $random_string;
}

?>