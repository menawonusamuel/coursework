<?php

$dbhost="CSDM-WEBDEV";
$dbusername="1813617";
$dbpassword="1813617";
$dbname="db1813617_coursework";

$db = mysqli_connect('CSDM-WEBDEV','1813617','1813617','db1813617_coursework');
if($db-> connect_error) {
    die('Error'.('.$db->connect_errno.'));
}


