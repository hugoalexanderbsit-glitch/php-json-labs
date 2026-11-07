<?php
$json = '{"name":"Maria","age":21,"email":"maria@example.com"}';

$obj = json_decode($json);
$arr = json_decode($json, true);

echo "Object name: " . $obj->name . "<br>";
echo "Object email: " . $obj->email . "<br>";
echo "Array name: " . $arr["name"] . "<br>";
echo "Array email: " . $arr["email"] . "<br>";
