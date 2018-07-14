<?php
/**
 * Created by PhpStorm.
 * User: shreya
 * Date: 7/13/18
 * Time: 9:14 AM
 */
function isBitten(){
    $condition=rand(0,1);

    if($condition)
    {
        echo "Bob bit your finger!";
    }
    else echo "Bob didn't bite your finger!";
}

isBitten();

?>
