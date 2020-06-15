<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "snackshop";

//izveidojam mainīgo, kuru vēlāk izmantosim lai sakonektētos ar datubāzi
//šo izmantojam, tāpēc, lai katru reizi pie konekcijas nebūtu jāraksta visi mainīgie
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);