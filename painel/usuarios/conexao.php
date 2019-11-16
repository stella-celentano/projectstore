<?php

$banco = mysqli_connect('localhost','root','','store');

if(mysqli_connect_errno($banco)){
    echo "Falha ao conectar - ".mysqli_connect_error();
}