<?php
session_start();

if(empty($_SESSION['user'])){
    echo "error!";
}
else {
    echo $_SESSION['user'];
}