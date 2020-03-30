<?php

// include 'autoloader.php';
include 'classes/NormalUser.php';
include 'classes/Admin.php';
include 'classes/ShopOwner.php';
// include 'classes/User.php';
include 'classes/register.php';
include 'classes/normalRegister.php';
include 'classes/AdminRegister.php';
include 'classes/ShopRegister.php';

include 'classes/doQuery.php';
include 'classes/normalQuery.php';
include 'classes/AdminQuery.php';
include 'classes/ShopownerQuery.php';
include 'classes/connection.php';

function reg(Register $register , User $user){

    $register->registration($user);
}

 $user = new NormalUser("mahmoud" , "saeed" ,"", "mahmoudsaeed");
 $register = new NormalRegister();
 reg($register,$user);
 $user = new Admin("mahmoud" , "saeed","mmmm" , "mahmoudsaeed");
 $register = new AdminRegister();
 reg($register,$user);
 $db = new DB();
 $conn = $db->getConnect();
$adminquery = new AdminQuery();
$result = $adminquery->selectToLogin($conn ,"mahmoudsaeed","mmmm");
// $result = $adminquery->selectAll($conn);
while($row = mysqli_fetch_assoc($result)){
    echo $row['firstname']."  ".$row['lastname']."  ".$row['email'];
    echo "<br>";
}
$db->closeConnect();
 $user = new ShopOwner("mahmoud" , "saeed","" , "mahmoudsaeed");
 $register = new ShopRegister();
 reg($register,$user);
 


?>