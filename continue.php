<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<body>
<?php
$cars = array(
           "car1" => "Audi",
            "car2" => "Benz",
            "car3" => "Bmw",
            "car4" => "Honda",
            "price" => array(10,20,30),
            "discount" => array(40,50,60),
            ); 
            

foreach ($cars as $key => $val) {
echo  "$key";
echo "<br>";
echo "Car name is: " . $val; 


if($key=="price") {
foreach($val as $price) {
if ($val = "price"){
continue;
}
echo "Car Price is: $price <br>" ;
}
}

if($key=="discount") {
foreach($val as $discount) {
echo "discount price is: $discount <br>";

}
}
echo "<br>";
}

            

?>
</body>
</html>

