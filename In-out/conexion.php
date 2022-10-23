<?php
    $con=mysqli_connect('127.0.0.1','root','','polipost');
    if(!$con){
        echo 'no se conecto';
    }else{
        echo 'si se conecto';
    }

?>