<?php
$myObj = new stdClass();
$myObj->albumId = 6;
$myObj->id = 30;
$myObj->title= "accusamus beatae ad facilis cum similique qui sunt";
$myObj->url= "https://via.placeholder.com/600/771796";
$myObj->thumbnailUrl= "https://via.placeholder.com/600/771796";


// $myArr = array($myObj, $myObj, $myObj, $myObj);
$myArr[0]['albumId'] = $myObj->albumId;
$myArr[0]['id'] = $myObj->id;
header('Content-type: application/json');
$myJSON = json_encode($myArr, JSON_PRETTY_PRINT);

echo $myJSON;



?>