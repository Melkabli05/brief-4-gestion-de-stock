<?php

$host ="localhost";
$user = "root";
$pw = "";
$nbd = "brief_4";
$con = mysqli_connect($host, $user, $pw, $nbd);
if ($con) {
    echo "connected";
}
else {
    echo "no connected";
}

?>