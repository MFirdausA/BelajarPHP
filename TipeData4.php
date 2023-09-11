<?php
    echo "object";
    echo "<br>";

    class hello{
        var $str;
    }

    $massage = new hello();
    $massage ->str="Hello world";
    echo $massage ->str;
    echo "<br><br>";
?>