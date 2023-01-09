<?php

$conn = new mysqli("localhost", "root", "", "orthopedic_surgeon_dp");

if($conn->connect_error){
    echo $conn->error;
}