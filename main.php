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

function reg(Register $register , User $user){

    $register->registration($user);
}

 $user = new NormalUser("mahmoud" , "saeed" ,"", "mahmoudsaeed");
 $register = new NormalRegister();
 reg($register,$user);
 $user = new Admin("mahmoud" , "saeed","" , "mahmoudsaeed");
 $register = new AdminRegister();
 reg($register,$user);
 $user = new ShopOwner("mahmoud" , "saeed","" , "mahmoudsaeed");
 $register = new ShopRegister();
 reg($register,$user);


?>