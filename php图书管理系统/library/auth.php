<?php
session_start();
if(empty($_SESSION['user'])){
    echo "NO AUTH";
    exit;
}