<!DOCTYPE html>
<html>
<head>
<body>
<?php
$bike = array (
    "modal" => "scooty",
    "price" => 70000,
    "modal" => "tvs champ", 
    "price" => 50000,
    "modal" => "royal enfield",
    "price" => 120000,
    "modal" => "harley davidson",
    "price" => 400000
    );

if($bike[price] < 71000){
    echo "you can buy scooty and tvs champ";
 
} elseif ($bike[price] > 70000){
     echo "you can buy royal enfield and harley davidson";
} else ($bike[price] < 400000){
     echo "you can buy all bike";
}
echo "sdnm";
?>
</body>
</html>


