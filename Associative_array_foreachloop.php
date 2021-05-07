<!DOCTYPE html>
<html>
<head>
<body>
<?php

$cars = array(
        "car1" => "Audi",
        "car2" => "Bmw",
        "car3" => "Bently",
        "car4" => "Scoda",
        "car5" => "Benz1"
        );
        
foreach ($cars as $abc => $def){
echo  "$abc";
echo "<br>";
echo "Car name is: " .  $def;
echo "<br>";
}
?>
</body>
</html>